<?php
//đây là nơi sẽ đặt toàn bộ biến chung của dự án
const DBNAME = "banghang1";
const DBUSER = "root";
const DBPASS = "";
const DBCHARSET = "utf8";
const DBHOST = "127.0.0.1";
const BASE_URL = "http://localhost/web2/";

function route($url){
  return BASE_URL . $url;
}
 
function redirect($key,$message,$router){
   $_SESSION[$key] = $message;
   switch($key){
     case 'success':
     unset($_SESSION['errors']); 
     break;
  
   case 'errors':
    unset($_SESSION['success']); 
    break;

     } 
     header('location:' . BASE_URL .$router . '?message=' .$key);die;
}

