            <!-- top navigation -->
            <div class="top_nav">

                <div class="nav_menu">
                    <nav class="" role="navigation">
                        <!--<div class="nav toggle">
                            <p href="index.php" style="font-size:30px;margin-left: 30px">Ebook.com</p>
                        </div>-->
                        <div class="navbar nav_title" style="border: 0;">
                        <a href="index.php" class="site_title"><i class="fa fa-university"></i> <span>EBOOK.COM</span></a>
                    </div>
                        <ul class="nav navbar-nav navbar-right">
<?php
	//require ('include/dbcon.php');
    $db = new Database();
    if ($_SESSION['id'] != 0) {
        # code...
        $admin_query=$db->db_query("select * from admin where admin_id='$id_session'")or die(mysql_error());
        $user_query=$db->db_query("select * from user where user_id='$id_session'")or die(mysql_error());
        if ($db->db_num_rows($admin_query) >0) {
            # code...
            $row=$db->db_fetch_array($admin_query); 
            $image = "admin_image/".$row['image'];
            $path = "edit_admin.php?admin_id=$id_session";
            $check = false;

        }else if($db->db_num_rows($user_query) >0){
            $row=$db->db_fetch_array($user_query); 
            $image = "user_image/".$row['image'];
            $path = "edit_user.php?user_id=$id_session";
            $check = true;
        }
    
	
?>
                            <li class="">
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    
									<?php if($row['image'] != ""): ?>
									<img src="<?php echo $image; ?>">
									<?php else: ?>
									<img src="images/user.png">
									<?php endif; ?>	<?php echo $row['firstname']; ?>
                                    <span class=" fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                                  
                                 <!---   <li>
										<a href="admin_profile.php"><i class="fa fa-user pull-right"></i> Profile</a>
                                    </li>-->
                                 <!---   <li>
										<a href="change_password.php"><i class="glyphicon glyphicon-edit pull-right"></i> Change Password</a>
                                    </li> -->
                                    <?php if($check){?>
                                    <li>
                                        <a href="#"><i class="fa fa-infomation pull-right"></i> Điểm : <?php echo $row['point']?> </a>
                                    </li>
                                <?php }?>
                                    <li>
                                        <a href="<?php echo $path ?>"><i class="fa fa-infomation pull-right"></i> Thông tin cá nhân </a>
                                    </li>
                                    <li>
										<a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Đăng Xuất</a>
                                    </li>
                                    
                                </ul>
                                </li>
                                <?php  } else{?>
                                <li class="">
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    
                                    <img src="images/user.png">
                                    
                                    <span class=" fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                                    <li>
                                        <a href="login.php"><i class="fa fa-sign-out pull-right"></i> <p>Đăng nhập</p></a>
                                    </li>
                                </ul>
                                <?php }?>
                            </li>


                        </ul>
                    </nav>
                </div>

            </div>
            <!-- /top navigation -->