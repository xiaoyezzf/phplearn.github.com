<?php
header("Content-Type:text/html;charset=utf-8");


	include '../public/func.php';
    session_start();
	$username =isset($_POST['username']) ? addslashes($_POST['username']) : '';
	$password =isset($_POST['password']) ? md5(addslashes($_POST['password'])) : '';


	$isset = DB('SELECT * FROM admin_user WHERE status = 1 && username = "'.$username.'" && password = "'.$password.'"');

	// echo 'SELECT * FROM admin_user WHERE username = '.$username.' && password = '.$password;
	if($isset)
    {
      DB('UPDATE admin_user SET last_time = '.time().' WHERE uid = '.$isset[0]['uid']);
      
      $_SESSION['user'] = $isset[0];
      $_SESSION['isLogined'] = 1;
      
      echo '登录成功,你可以尽情的去管理';
      echo '<script>setTimeout("location=\'index.php\'" , 3000)</script>';
    }else{
      echo '用户名或者密码错误';
      echo '<script>setTimeout("location=\'login.php\'" , 3000)</script>';
    }
?>
