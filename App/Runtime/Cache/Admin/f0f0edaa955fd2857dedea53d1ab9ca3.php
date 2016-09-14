<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>风险管理平台</title>
<link href="/tm_dwz/Public/Admin/themes/css/login.css" rel="stylesheet" type="text/css" />
<script src="/tm_dwz/Public/Admin/js/jquery-2.1.4.min.js" type="text/javascript"></script>
<script type="text/javascript">
    function checkData(){
        var username = $('input[name=username]').val();
        var password = $('input[name=password]').val();
        var code         = $('input[name=code]').val();
        if(username == '')
        {
            alert('用户名不能为空!!!');return false;
        }
        if(password == '')
        {
            alert('用户密码不能为空!!!');return false;
        }
        if(code == '')
        {
            alert('验证码不能为空!!!');return false;
        }
    }
</script>
</head>

<body>
	<div id="login">
		<div id="login_header">
			<h1 class="login_logo">
				<a href="http://demo.dwzjs.com"><img src="/tm_dwz/Public/Admin/themes/default/images/login_logo.gif" /></a>
			</h1>
			<div class="login_headerContent">
				<div class="navList">
					<ul>
						<li><a href="#">设为首页</a></li>
						<li><a href="#">反馈</a></li>
						<li><a href="#" target="_blank">帮助</a></li>
					</ul>
				</div>
				<h2 class="login_title"><img src="/tm_dwz/Public/Admin/themes/default/images/login_title.png" /></h2>
			</div>
		</div>
		<div id="login_content">
			<div class="loginForm">
				<form action="<?php echo U('Login/login');?>" method="post" onsubmit="return checkData()">
					<p>
						<label>用户名：</label>
						<input type="text" name="username" size="20" class="login_input" />
					</p>
					<p>
						<label>密　码：</label>
						<input type="password" name="password" size="20" class="login_input" />
					</p>
					<p>
						<label>验证码：</label>
						<input class="code" name="code" type="text" size="5" />
						<span>
                            <img src="<?php echo U('Public/verify');?>" onclick="javascript:this.src='<?php echo U('Public/verify');?>&tm='+Math.random()" alt="点击刷新" style="cursor: pointer;" width="75" height="24" />
                        </span>
					</p>
					<div class="login_bar" style="padding-left: 80px;">
                        <input class="sub" type="submit" value=" " />
					</div>
				</form>
			</div>
			<div class="login_banner"><img src="/tm_dwz/Public/Admin/themes/default/images/login_banner.jpg" /></div>
			<div class="login_main">
				<ul class="helpList">
					<li><a href="#">下载驱动程序</a></li>
					<li><a href="#">如何安装密钥驱动程序？</a></li>
					<li><a href="#">忘记密码怎么办？</a></li>
					<li><a href="#">为什么登录失败？</a></li>
				</ul>
				<div class="login_inner">
					<p>您可以使用 网易网盘 ，随时存，随地取</p>
					<p>您还可以使用 闪电邮 在桌面随时提醒邮件到达，快速收发邮件。</p>
					<p>在 百宝箱 里您可以查星座，订机票，看小说，学做菜…</p>
				</div>
			</div>
		</div>
		<div id="login_footer">
			Copyright &copy; 2009 www.dwzjs.com Inc. All Rights Reserved.
		</div>
	</div>
</body>
</html>