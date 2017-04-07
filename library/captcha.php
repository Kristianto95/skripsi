<?php
session_start();
$captcha=substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyz"),0,6); // string yg akan diacak membentuk captcha 0-z dan sebanyak 6 karakter
$_SESSION['captcha']=$captcha;

$gambar=ImageCreate(120,40); // ukuran kotak width=60 dan height=20
$wk=ImageColorAllocate($gambar, 233, 150, 122); // membuat warna kotak -> Navajo White
$wt=ImageColorAllocate($gambar, 139, 0, 0); // membuat warna tulisan -> hitam
ImageFilledRectangle($gambar, 0, 0, 50, 20, $wk);
ImageString($gambar, 10, 10, 10, $captcha, $wt);
ImageJPEG($gambar);
?>