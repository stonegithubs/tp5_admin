<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:64:"E:\workspace\wh_demo\public/../application/admin\view\login.html";i:1479281218;}*/ ?>
<!doctype html>
<html>
	<head>
		<meta charset="UTF-8" />
		<title>系统后台</title>
		<meta http-equiv="X-UA-Compatible" content="chrome=1,IE=edge" />
		<meta name="renderer" content="webkit|ie-comp|ie-stand">
		<meta name="xxx" content="noindex,nofollow">
       <link href="/static/admin/css/admin_login.css" rel="stylesheet">
		<style>
		
			#login_btn_wraper{
				text-align: center;
			}
			#login_btn_wraper .tips_success{
				color:#fff;
			}
			#login_btn_wraper .tips_error{
				color:#DFC05D;
			}
			#login_btn_wraper button:focus{outline:none;}
			.cprt{
	    		font-family: "微软雅黑";
	    		position: absolute;
	    		right: 6px;
	    		bottom: -25px;
	    		font-size: 16px;
	    		color: #CAC6C3;
	    		text-align: right;
	    	}
			.cprt a{
	    		text-decoration: none;
	    		color: #CAC6C3;
	    	}
		</style>
		<script>
			if (window.parent !== window.self) {
					document.write = '';
					window.parent.location.href = window.self.location.href;
					setTimeout(function () {
							document.body.innerHTML = '';
					}, 0);
			}
		</script>
		
	</head>
<body>
	<div class="wrap">
		<h1><a >后台管理系统</a></h1>
		<form method="post" name="login" action="<?php echo url('/admin/login/loginAjax'); ?>" autoComplete="off" class="js-ajax-form">
			<div class="login">
				<ul>
					<li>
						<input class="input" id="js-admin-name" name="name" type="text" placeholder="请输入用户名" title="用户名" />
					</li>
					<li>
						<input class="input" id="admin_pwd" type="password"  name="password" placeholder="请输入密码" title="密码" />
					</li>
					
				</ul>
				<div id="login_btn_wraper">
					<button type="submit" name="submit" class="btn js-ajax-submit" id="loginSub" title="登录" >登录</button>
				</div>
			</div>
		</form>
		
	</div>
	<div class="cprt">版权所有(C) 2001-2016<a href="http://www.gwsoft.com.cn">四川长城软件科技股份有限公司</a></div>
	  <script src="/static/admin/vendors/jquery/dist/jquery.min.js"></script>
	    <script src="/static/admin/js/layer/layer.js"></script>
		<script type="text/javascript">
			$(function() {

				$("#loginSub").on('click', function(ev) {

					$.getJSON("<?php echo url('/admin/login/loginAjax'); ?>", {
							name: $("input[name='name']").val(),
							password: $("input[name='password']").val()
						},
						function(data) {
							if(data.code == 200) {
								location.href = "<?php echo url('/admin/login/index'); ?>";
							} else {
								layer.msg(data.msg,{
									icon:5
								});
								$("form")[0].reset();
								$("input[type='text']").eq(0).focus();
							}
						}
					);
					ev.preventDefault();
					return false;
				});
			});
		</script>

</body>
</html>
