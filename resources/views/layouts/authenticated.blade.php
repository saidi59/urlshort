<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Url Shortner</title>

    <!-- Main Styles -->
    <link rel="stylesheet" href="{{ asset('theme/authenticated/assets/styles/style-horizontal.min.css') }}">

    <!-- mCustomScrollbar -->
    <link rel="stylesheet" href="{{ asset('theme/authenticated/assets/plugin/mCustomScrollbar/jquery.mCustomScrollbar.min.css')}}">

    <!-- Waves Effect -->
    <link rel="stylesheet" href="{{ asset('theme/authenticated/assets/plugin/waves/waves.min.css')}}">

    <!-- Sweet Alert -->
    <link rel="stylesheet" href="{{ asset('theme/authenticated/assets/plugin/sweet-alert/sweetalert.css')}}">

    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('theme/authenticated/assets/plugin/iCheck/skins/square/blue.css')}}">

    <!-- Color Picker -->
    <link rel="stylesheet" href="{{ asset('theme/authenticated/assets/color-switcher/color-switcher.min.css')}}">
</head>

<body>
<header class="fixed-header">
    <div class="header-top">
        <div class="container">
            <div class="pull-left">
                <a href="/" class="logo">Ninja Shorter</a>
            </div>

            <div class="pull-right">
                <div class="ico-item hidden-on-desktop">
                    <button type="button" class="menu-button js__menu_button fa fa-bars waves-effect waves-light"></button>
                </div>

                <!-- /.ico-item -->
                <div class="ico-item">
                    <a href="#" class="ico-item fa fa-user js__toggle_open" data-target="#user-status"></a>
                    <div id="user-status" class="user-status js__toggle">
                        <a href="#" class="avatar"><img src="http://placehold.it/80x80" alt=""><span class="status online"></span></a>
                        <h5 class="name"><a href="">{{ auth()->user()->name }}</a></h5>
                        <h5 class="position">Administrator</h5>
                        <!-- /.name -->
                        <div class="control-items">
                            <div class="control-item"><a href="#" class="js__logout" title="Log out"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i></a></div>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </div>
                        <!-- /.control-items -->
                    </div>
                    <!-- /#user-status -->
                </div>
                <!-- /.ico-item -->
            </div>
            <!-- /.pull-right -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.header-top -->
    <nav class="nav-horizontal">
        <button type="button" class="menu-close hidden-on-desktop js__close_menu"><i class="fa fa-times"></i><span>CLOSE</span></button>
        <div class="container">

            <ul class="menu">
                <li>
                    <a href="{{route('home')}}"><i class="ico fa fa-home"></i><span>Dashboard</span></a>
                </li>

            </ul>
            <!-- /.menu -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- /.nav-horizontal -->
</header>
<!-- /.fixed-header -->

<div id="color-switcher">
{{--    <div id="color-switcher-button" class="btn-switcher">--}}
{{--        <div class="inside waves-effect waves-circle waves-light">--}}
{{--            <i class="ico fa fa-gear"></i>--}}
{{--        </div>--}}
{{--        <!-- .inside waves-effect waves-circle -->--}}
{{--    </div>--}}
    <!-- .btn-switcher -->
    <div id="color-switcher-content" class="content">
        <a href="#" data-color="red" class="item js__change_color"><span class="color" style="background-color: #f44336;"></span><span class="text">Red</span></a>
        <a href="#" data-color="violet" class="item js__change_color"><span class="color" style="background-color: #673ab7;"></span><span class="text">Violet</span></a>
        <a href="#" data-color="dark-blue" class="item js__change_color"><span class="color" style="background-color: #3f51b5;"></span><span class="text">Dark Blue</span></a>
        <a href="#" data-color="blue" class="item js__change_color active"><span class="color" style="background-color: #304ffe;"></span><span class="text">Blue</span></a>
        <a href="#" data-color="light-blue" class="item js__change_color"><span class="color" style="background-color: #2196f3;"></span><span class="text">Light Blue</span></a>
        <a href="#" data-color="green" class="item js__change_color"><span class="color" style="background-color: #4caf50;"></span><span class="text">Green</span></a>
        <a href="#" data-color="yellow" class="item js__change_color"><span class="color" style="background-color: #ffc107;"></span><span class="text">Yellow</span></a>
        <a href="#" data-color="orange" class="item js__change_color"><span class="color" style="background-color: #ff5722;"></span><span class="text">Orange</span></a>
        <a href="#" data-color="chocolate" class="item js__change_color"><span class="color" style="background-color: #795548;"></span><span class="text">Chocolate</span></a>
        <a href="#" data-color="dark-green" class="item js__change_color"><span class="color" style="background-color: #263238;"></span><span class="text">Dark Green</span></a>
        <span id="color-reset" class="btn-restore-default js__restore_default">Reset</span>
    </div>
    <!-- /.content -->
</div>
<!-- #color-switcher -->

<div id="wrapper">
    <div class="main-content container">
        @yield('content')
        <!-- /.row -->
        <footer class="footer">
            <ul class="list-inline">
                <li>2016 © NinjaAdmin.</li>
                <li><a href="#">Privacy</a></li>
                <li><a href="#">Terms</a></li>
                <li><a href="#">Help</a></li>
            </ul>
        </footer>
    </div>
    <!-- /.main-content -->
</div><!--/#wrapper -->


<!-- Modal -->
<div class="modal fade" id="boostrapModal-1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Add Link</h4>
            </div>
            <div class="modal-body">
                <form method="post" action="{{ route('addlink.linkinsert') }}" enctype="multipart/form-data" class="mt-6 space-y-6">
                    @csrf
                    @method('post')

                    @php
                        $randomString = \Illuminate\Support\Str::random(6);
                    @endphp

                    <div class="box-content card white">
                        <h4 class="box-title">Add Image </h4>
                        <!-- /.box-title -->
                        <div class="card-content">
                            <form>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Image Name</label>
                                    <input  name="image_name" type="text" class="form-control" id="iamge_name" placeholder="Image Name" value="{{$randomString }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input  id="image_upload" name="image"  type="file" class="form-control"  >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Facebook Link</label>
                                    <input  name="facebook_link" type="text" class="form-control" id="facebook_link" placeholder="Facebook Link">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Other Link</label>
                                    <input  name="all_link" type="text" class="form-control" id="all_link" placeholder="Other Link">
                                </div>
                                <button type="submit" class="btn btn-primary btn-sm waves-effect waves-light">Submit</button>
                            </form>
                        </div>
                        <!-- /.card-content -->
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-sm waves-effect waves-light" data-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
    <script src="{{ asset('theme/authenticated/assets/script/html5shiv.min.js')}}"></script>
    <script src="{{ asset('theme/authenticated/assets/script/respond.min.js')}}"></script>
<![endif]-->
<!--
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ asset('theme/authenticated/assets/scripts/jquery.min.js')}}"></script>
<script src="{{ asset('theme/authenticated/assets/scripts/modernizr.min.js')}}"></script>
<script src="{{ asset('theme/authenticated/assets/plugin/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('theme/authenticated/assets/plugin/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{ asset('theme/authenticated/assets/plugin/nprogress/nprogress.js')}}"></script>
<script src="{{ asset('theme/authenticated/assets/plugin/sweet-alert/sweetalert.min.js')}}"></script>
<script src="{{ asset('theme/authenticated/assets/plugin/waves/waves.min.js')}}"></script>
<!-- Full Screen Plugin -->
<script src="{{ asset('theme/authenticated/assets/plugin/fullscreen/jquery.fullscreen-min.js')}}"></script>

<!-- iCheck -->
<script src="{{ asset('theme/authenticated/assets/plugin/iCheck/icheck.min.js')}}"></script>
<script src="{{ asset('theme/authenticated/assets/scripts/mailbox.init.min.js')}}"></script>

<script src="{{ asset('theme/authenticated/assets/scripts/main.min.js')}}"></script>
<script src="{{ asset('theme/authenticated/assets/scripts/horizontal-menu.min.js')}}"></script>
<script src="{{ asset('theme/authenticated/assets/color-switcher/color-switcher.min.js')}}"></script>
</body>
</html>
