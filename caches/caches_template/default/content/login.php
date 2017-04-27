<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><div class="brg"></div>

<div class="float_login"> <a href="#" class="close1  close">关闭</a>

  <h2 class="b_b">用户登录</h2><br />欢迎来到去留学网！本网站部分功能需要注册才能使用

  <div class="login_box">

  <form action="/index.php?m=member&c=index&a=login" method="post" name="login" id="login">

    <p class="username">注册邮箱：

      <input type="text" class="username" name="username" >

    </p>

    <p class="p1">输入注册的Email或用户名</p>

    <p class="password">密码：

      <input type="password" class="inputpassword" name="password" >

    </p>

    <p class="p1">输入您的密码</p>

    <p class="btn">

      <input name="dosubmit" type="submit" value="登录" class="subscribe_btn close"/>

      <a href="#" class="wjmm" >忘记密码？</a></p>

    <p class="p2"><a href="index.php?m=member&c=index&a=register&siteid=" >没有账号？立即注册</a></p>

    </form>

  </div>

</div>

<div class="wjpassword"> <a href="#" class="close1  close">关闭</a>

  <h2 class="b_b">找回密码</h2>

  <div class="login_box">

  <form action="/index.php?m=member&c=index&a=public_forget_password" method="post" name="login" id="login">

    <p class="username">注册邮箱：

      <input type="text" class="email" name="email" >

    </p>

    <p class="p1">输入注册的Email</p>

    <p class="btn">

      <input name="dosubmit" type="submit" value="确认" class="subscribe_btn close"/>



    </form>

  </div>

</div>







<style>
.wjmm {color:#666;}
.wjmm:hover{color:#ffcb0b;}

.wjpassword{ margin:0px auto ;border:3px solid #7BB2F2;display:none; box-shadow: 0 2px 3px #CCCCCC;width:348px;padding:20px 30px;text-align:center; position:fixed; top:250px;left:38%;background-color:#FFF;z-index:103;}

.wjpassword .close1{position:absolute;top:0px;right:0px;border:none;color:#07346F;width:40px;line-height:25px; }

.wjpassword h2{line-height:40px;font-size:30px;color:#07346F;}

.wjpassword .login_box{margin-top:15px;}

.wjpassword .login_box .username{text-align:left;margin-left:10px;}

.wjpassword .login_box p{line-height:30px;padding:5px;margin:10px 0px 0px;color:#222;}

.wjpassword .login_box .p1{line-height:20px;margin:0px;padding:0px;color:#999;text-align:left;margin-left:90px;}

.wjpassword .login_box .p2{margin-top:15px;color:#7BB2F2;}

.wjpassword .login_box input[type="text"],.float_login input[type="password"]{width:200px;border:1px solid #a6a6a6;box-shadow:inset 1px 1px 1px #efefef;height:30px;line-height:30px;margin:0px 5px;padding-left:5px;}

.wjpassword .login_box .subscribe_btn{width:90px;height:40px;line-height:40px;text-align:center;letter-spacing: 0.2em;border:none;font-weight:bold;font-size:20px; border-radius:4px;background-color:#FFCB0B;color:#5c5c5c;cursor: pointer;margin:10px 10px 0px 40px;}

</style>