<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:63:"D:\xampp\htdocs\public/../application/admin\view\Pwd\index.html";i:1509419284;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>修改密码</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="__STATIC__/admin/style/adminStyle.css" rel="stylesheet" type="text/css" />
<script src="__STATIC__/admin/js/jquery.js"></script>
<style>
  #tishi{
    display:none;
    color:red;
  }
</style>
</head>
<body>
 <div class="wrap">
  <div class="page-title">
    <span class="modular fl"><i class="add_user"></i><em>修改密码</em></span>
  </div>
  <form action="/public/admin/pwd/updata_insert" method="POST" enctype="multipart/form-data">
  <table class="list-style">
   <tr>
    <td style="width:15%;text-align:right;">旧密码：</td>
    <td>
      <input type="hidden" name="id">
      <input type="password" class="textBox length-middle" name="pwd1" />
    </td>
   </tr>
   <tr>
    <td style="text-align:right;">新密码：</td>
    <td><input type="password" class="textBox length-middle" name="pwd2" /></td>
   </tr>
   <tr>
    <td style="text-align:right;">再次确认密码：</td>
    <td><input type="password" class="textBox length-middle" name="pwd3" ></input><span id="tishi">密码不一致</span></td>
   </tr>
   <tr>
    <td style="text-align:right;"></td>
    <td><input  type="submit" class="tdBtn" value="保存编辑"/></td>
   </tr>
  </table>
  </form>
 </div>
</body>
<script>
  $(document).ready(function(){
    $("#tijiao").on("click",function(){
        $.post("/public/admin/pwd/f5",function(result){
                 parent.location.reload();
              });
      });
  });
</script>
</html>