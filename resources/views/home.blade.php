@extends('layouts.authenticated')

@section('content')
    <div class="row">
        <div class="col-md-3 col-xs-12">
            <a href="compose.html" class="btn btn-danger btn-mail-main btn-block margin-bottom-20 waves-effect waves-light">COMPOSE</a>
            <div class="box box-solid">
                <div class="box-body">
                    <ul class="nav nav-pills nav-stacked">
                        <li class="active"><a href="#"><i class="fa fa-inbox"></i> Inbox
                                <span class="label-text-right pull-right">35</span></a>
                        </li>
                        <li><a href="#"><i class="fa fa-envelope"></i> Sent</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /.col-md-3 col-xs-12 -->
        <div class="col-md-9 col-xs-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Inbox</h3>
                    <div class="box-tools">
                        <div class="has-feedback">
                            <input type="text" class="form-control input-sm" placeholder="Search Mail">
                            <span class="glyphicon glyphicon-search form-control-feedback"></span>
                        </div>
                    </div>
                    <!-- /.box-tools -->
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                    <div class="mailbox-controls">
                        <!-- Check all button -->
                        <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="fa fa-square-o"></i></button>
                        <button type="button" class="btn btn-default btn-sm waves-effect waves-light"><i class="fa fa-trash"></i></button>
                        <button type="button" class="btn btn-default btn-sm waves-effect waves-light"><i class="fa fa-exclamation-circle"></i></button>
                        <button type="button" class="btn btn-default btn-sm waves-effect waves-light"><i class="fa fa-refresh"></i></button>
                        <div class="pull-right">
                            <span class="inbox-text">1-50/200</span>
                            <div class="btn-group">
                                <button type="button" class="btn btn-default btn-sm waves-effect waves-light"><i class="fa fa-angle-left"></i></button>
                                <button type="button" class="btn btn-default btn-sm waves-effect waves-light"><i class="fa fa-angle-right"></i></button>
                            </div>
                            <!-- /.btn-group -->
                        </div>
                        <!-- /.pull-right -->
                    </div>
                    <div class="table-responsive mailbox-messages">
                        <table class="table table-hover table-striped">
                            <thead>
                            <tr class="bg-gray-100">
                                <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700">#</th>
                                <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700">Image Name</th>
                                <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700">Facebook Url</th>
                                <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700">Other Url</th>
                                <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700">Sharable Url</th>
                                <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($links as $link)
                                <tr class="border-t">
                                    <td class="px-4 py-2 text-sm text-gray-700"> {{$link->id}}</td>
                                    <td class="px-4 py-2 text-sm text-gray-700"> {{$link->image_name}}</td>
                                    <td class="px-4 py-2 text-sm text-gray-700">{{$link->facebook_link}}</td>
                                    <td class="px-4 py-2 text-sm text-gray-700">{{$link->all_link}}</td>
                                    <td class="px-4 py-2 text-sm text-gray-700">{{$url = url('/')}}/{{$link->image_name}}</td>
                                    <td class="px-4 py-2 text-sm text-gray-700">
                                        <a class="text-blue-500 hover:text-blue-700" href="{{route('linkDelete',$link->id)}}" onclick="return confirm('Are you sure you want to delete ?');">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <!-- /.table -->
                    </div>
                    <!-- /.mail-box-messages -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer no-padding">
                    <div class="mailbox-controls">
                        <!-- Check all button -->
                        <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="fa fa-square-o"></i></button>
                        <button type="button" class="btn btn-default btn-sm waves-effect waves-light"><i class="fa fa-trash"></i></button>
                        <button type="button" class="btn btn-default btn-sm waves-effect waves-light"><i class="fa fa-exclamation-circle"></i></button>
                        <button type="button" class="btn btn-default btn-sm waves-effect waves-light"><i class="fa fa-refresh"></i></button>
                        <div class="pull-right">
                            <span class="inbox-text">1-50/200</span>
                            <div class="btn-group">
                                <button type="button" class="btn btn-default btn-sm waves-effect waves-light"><i class="fa fa-angle-left"></i></button>
                                <button type="button" class="btn btn-default btn-sm waves-effect waves-light"><i class="fa fa-angle-right"></i></button>
                            </div>
                            <!-- /.btn-group -->
                        </div>
                        <!-- /.pull-right -->
                    </div>
                </div>
            </div>
            <!-- /. box -->
        </div>
        <!-- /.col-md-9 col-xs-12 -->
    </div>
@endsection
