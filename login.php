<?php

// Lấy IP người truy cập
$ip = $_SERVER['REMOTE_ADDR'];

// Lấy thời gian truy cập
$time = date('Y-m-d H:i:s');

// Tạo đường dẫn đến file TXT
$filename = 'data/' . date('Y-m-d') . '.txt';

// Mở file TXT để ghi
$file = fopen($filename, 'a');

// Ghi dữ liệu vào file TXT
fwrite($file, $ip . ' - ' . $time . PHP_EOL);

// Đóng file TXT
fclose($file);

?>
