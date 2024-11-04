<?php
// routes.php

// Lấy URI hiện tại
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Nếu URI là root (/), trỏ về home.php
if ($uri === '/' || $uri === '/index.php') {
    include 'views_controller/home.php';
    exit;
}

// Nếu không phải root, bạn có thể thêm các routes khác ở đây
// Ví dụ: Nếu URI là /about, có thể trỏ đến about.php


// Nếu không khớp route nào, trả về trang 404
http_response_code(404);
echo "404 - Page not found";
