<?php
  session_start();
  include_once("db.php");
  $salt = "sldfjsklfdj23lfd0,.sd";
  
//   $connect = mysqli_connect("localhost","root","","lesson7");
  $login = $_POST['login'] ? strip_tags($_POST['login']) : "";
  $pass = $_POST['pass'] ? strip_tags($_POST['pass']) : "";
//   $pass = $salt.md5($pass).$salt;
  $pass = $salt.md5($pass).$salt;
  
  $sql = "select id,role from users where login='$login' and password='$pass'";
  
  $res = mysqli_query($connect,$sql) or die("Error: ".mysqli_error($connect));
  
  
  if(mysqli_num_rows($res)){
      $data = mysqli_fetch_assoc($res);
      $_SESSION['userid'] = $data['id'];
      $_SESSION['login'] = $login;
      $_SESSION['pass'] = $_POST['pass'];
      $_SESSION['role'] = $data['role'];
      $redicet = $_SERVER['HTTP_REFERER'];
      @header ("Location: $redicet");
  }else {
      $redicet = $_SERVER['HTTP_REFERER'];
      @header ("Location: $redicet");
  }  
?>