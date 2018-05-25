<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Library Management System</title>

    <!-- Bootstrap core CSS -->

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/icheck/flat/green.css" rel="stylesheet">


    <script src="js/jquery.min.js"></script>

<style>
.blink_text {
-webkit-animation-name: blinker;
-webkit-animation-duration: 1s;
-webkit-animation-timing-function: linear;
-webkit-animation-iteration-count: infinite;

-moz-animation-name: blinker;
-moz-animation-duration: 1s;
-moz-animation-timing-function: linear;
-moz-animation-iteration-count: infinite;

 animation-name: blinker;
 animation-duration: 1s;
 animation-timing-function: linear;
 animation-iteration-count: infinite;

 color:white;
 font-size:16px;
}

@-moz-keyframes blinker {  
 0% { opacity: 1.0; }
 50% { opacity: 0.0; }
 100% { opacity: 1.0; }
 }

@-webkit-keyframes blinker {  
 0% { opacity: 1.0; }
 50% { opacity: 0.0; }
 100% { opacity: 1.0; }
 }

@keyframes blinker {  
 0% { opacity: 1.0; }
 50% { opacity: 0.0; }
 100% { opacity: 1.0; }
 }
</style>
</head>

<body style="background:#F7F7F7;">
    
    <div class="">

        <div id="wrapper">
            <div id="login" class="animate form">
                <section class="login_content">
                    <form action="" method="post">
                        <h1>Đăng Nhập</h1>
                        <div>
                            <input type="text" class="form-control" name="username" placeholder="Username" autofocus='autofocus' required />
                        </div>
                        <div>
                            <input type="password" class="form-control" name="password" placeholder="Password" required />
                        </div>
                        <div>
								<button class="btn btn-primary submit" type="submit" name="login"><i class="fa fa-check"></i> Đăng Nhập</button>
                                <button onclick="window.open('register.php','_blank')" class="btn btn-primary submit" type="submit" name="registration"><i class="fa fa-edit"></i>Đăng Kí</button>
                        </div>
                        <div class="clearfix"></div>
                        <div class="separator">
						
                            <div class="clearfix"></div>
                            <br />
                            <div>
                                <h1><i class="fa fa-university" style="font-size: 26px;"></i> Hệ Thống Quản Lý Thư Viện</h1>
                                <h1>ebook.com</h1>
                                <h1>-Tri Thức Bất Tận-</h1>
                                <p>© <?php date_default_timezone_set("Asia/Ho_Chi_Minh");
                                    echo "VietNam: ".date("Y-m-d H:i:s"); ?> <i class="fa fa-book"></i> </p>
                            </div>
                        </div>
                    </form>
<?php
require_once('include/dbcon.php');
$db = new Database();
//$db->db_connect();
if (isset($_POST['login'])){

$username=$_POST['username'];
$password=$_POST['password'];
$md5pass = md5($_POST['password']);
$login_query1= $db->db_query( "select * from admin where username='$username' and password='$md5pass'");
$login_query2=$db->db_query("select * from user where user_name='$username' and pass_word='$md5pass'");
if($db->db_num_rows($login_query1) >0)
{
    //$login_query= $db->db_query( "select * from admin where username='$username' and password='$md5pass'");
    //$count=$db->db_num_rows($login_query1);
    //if ($count > 0){
    session_start();
    $row=$db->db_fetch_array($login_query1);
    $_SESSION['id']=$row['admin_id'];
    $_SESSION['user_type'] = $row['type'];
    echo "<script>window.location='home.php'</script>";
//}
/*else{   
    //echo "<script>alert('$md5pass') </script>";
    echo "<script>alert('Sai thông tin tài khoản hoặc mật khẩu') </script>";}*/
}
else if($db->db_num_rows($login_query2) >0)
{
    //echo "<script>alert('$md5pass') </script>";
    //$login_query=$db->db_query("select * from user where user_name = '$username' and pass_word ='$md5pass'");
    //$count=$db->db_num_rows($login_query);
    //if ($count > 0){
    session_start();
    $row=$db->db_fetch_array($login_query2);
    $_SESSION['id']=$row['user_id'];
    $_SESSION['user_type'] = $row['type'];
    $id = $_SESSION['id'];
    echo "<script>window.location='index.php'</script>";
//}

}else{   
echo "<script>alert('Sai thông tin tài khoản hoặc mật khẩu') </script>";}
}?>
<!-- <div class="alert alert-danger"><h3 class="blink_text">Access Denied</h3></div>	 -->

                    <!-- form -->
                </section>
                <!-- content -->
            </div>
        </div>
    </div>

</body>

</html>