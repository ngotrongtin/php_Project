<?php
$host = 'localhost';
$dbname = 'project_nhom';
$user = 'root'; // tên người dùng MySQL của bạn
$password = '';     // mật khẩu của MySQL

$dbc = @mysqli_connect($host, $user, $password, $dbname) OR die('Could not connect to MySQL: ' . mysqli_connect_error());

// Thiết lập charset cho kết nối
mysqli_set_charset($dbc, 'utf8');
?>
