<?php

function cenckLogin()
{
   session_start();
   if (!isset($_SESSION['isLogin']) || $_SESSION['isLogin'] != 1) {
      header("Location:login.php");
   }
}
//封装建立连接数据库
function connect()
{
   $connect =  mysqli_connect(DB_HOST, DB_USER, DB_PWD, DB_NAME);
   return $connect;
}
//封装执行查询
function query($connect, $sql)
{
   $result = mysqli_query($connect, $sql);
   //给下面循环传参
   return fetch($result);
}
//循环
function fetch($result)
{
   $arr = [];
   while ($row = mysqli_fetch_assoc($result)) {
      $arr[] = $row;
   }
   return $arr;
}

function TianJa($connect, $BiaoDan, $arr)
{
   $keys = array_keys($arr);
   $values = array_values($arr);

   $Sqlie = "INSERT INTO {$BiaoDan} (" . implode(",", $keys) . ") VALUES ('" . implode("','", $values) . "')";
   // print_r($Sqlie);

   $quPPor = mysqli_query($connect, $Sqlie);
   return $quPPor;
}
