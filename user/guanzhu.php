<?php
session_start();

$_SESSION['guanzhu'] = 'y';

$_SESSION['guanzhushu'] = 2;

$guanzhushu = $_SESSION['guanzhushu'];

echo "{\"code\":200,\"guanzhushu\": $guanzhushu}";
