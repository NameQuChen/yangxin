<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:62:"D:\xampp\htdocs\public/../application/admin\view\Code\add.html";i:1509074163;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>添加新二维码</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="__STATIC__/admin/style/adminStyle.css" rel="stylesheet" type="text/css" />
</head>
<body>
 <div class="wrap">
  <div class="page-title">
    <span class="modular fl"><i class="add_user"></i><em>添加二维码</em></span>
  </div>
  <form action="/public/admin/code/add_insert" method="POST" enctype="multipart/form-data">
  <table class="list-style">

   <tr>
    <td style="width:15%;text-align:right;">桌子号：</td>
    <td><input type="text" class="textBox length-middle" name="code_name"/></td>
   </tr>

   <tr>
    <td style="text-align:right;"></td>
    <td><input type="submit" class="tdBtn" value="添加新二维码"/></td>
   </tr>

  </table>
  </form>
 </div>
</body>
</html>