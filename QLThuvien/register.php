
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Register-Library Management System</title>

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
                    <?php
                    /*if($smg2)
                    {
                        if($smg2==0)
                        {
                            echo "fail";
                        }
                        else
                        {
                            echo "succeed";
                        }
                    }*/
                    ?>
                    <form action="" method="post">
                        <h1>Đăng Kí</h1>
                        <div>
                            <input type="text" class="form-control" name="username" placeholder="Username" autofocus='autofocus' required />
                        </div>
                        <div>
                            <input type="password" class="form-control" name="password" placeholder="Password" required />
                        </div>
                        <div>
                            <input type="text" class="form-control" name="firstname" placeholder="Firstname" autofocus='autofocus' required />
                        </div>
                        <div>
                            <input type="text" class="form-control" name="lastname" placeholder="Lastname" autofocus='autofocus' required />
                        </div>
                        <div>
                            <input type="text" class="form-control" name="sdt" placeholder="FoneNumber" autofocus='autofocus' required />
                        </div>
                        <div>
                            <select name="gender" class="form-control" tabindex="-1" required>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                        <br>
                        </div>
                        <div>
								<button class="btn btn-primary submit" type="submit" name="register"><i class="fa fa-check"></i> Đăng Kí</button>
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
                    <!-- form -->
                </section>
                <!-- content -->
            </div>
        </div>
    </div>

</body>

</html>
<?php
include('include/dbcon.php');
$db = new Database();
if(isset($_POST['register'])){
    $username1 = $_POST['username'];
    $password1 = md5($_POST['password']);
    $firstname = $_POST['firstname'];
    $lastname =$_POST['lastname'];
    $sdt = $_POST['sdt'];
    $gender =$_POST['gender'];
    $sql = "INSERT INTO user(user_name,pass_word,firstname,lastname,gender) VALUES ('$username1','$password1','$firstname','$lastname','$gender')";
    $sql1 = "select user_id from user where user_name = '$username1'";
    $sql2 = "select admin_id from admin where username = '$username1'";
    $count1 = $db->db_query($sql1);
    $count2 = $db->db_query($sql2);
    if ($db->db_num_rows($count2) > 0 || $db->db_num_rows($count1) > 0 ) {
        # code...
        echo "<script>alert('Tên tài khoản đã bị trùng vui lòng nhập tên khác');window.location='register.php' </script>";
    }
    else
    { 
        if($db->db_query($sql) == true){
            $id = $db->db_query("select user_id form user where user_name ='$username1'");
            session_start();
            $_SESSION['id']=$row['$id'];
            echo "<script>alert('Đăng ký tài khoản thành công');window.location='index.php' </script>";
    }
}
}
?>