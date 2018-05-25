<?php //include ('include/dbcon.php');
$ID=$_GET['user_id'];
 ?>
<?php include ('header.php'); ?>

        <div class="clearfix"></div>
 
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2><i class="fa fa-pencil"></i> Edit User</h2>
                        
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <!-- content starts here -->
<?php
$db = new Database();
  $query= $db->db_query("select * from user where user_id='$ID'")or die(mysql_error());
$row=$db->db_fetch_array($query);
  ?>

                            <form method="post" enctype="multipart/form-data" class="form-horizontal form-label-left">
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="last-name">User Image <span class="required">*</span>
                                    </label>
                                    <div class="col-md-4">
										<?php if($row['image'] != ""): ?>
										<img src="user_image/<?php echo $row['image']; ?>" width="100px" height="100px" style="border:4px groove #CCCCCC; border-radius:5px;">
										<?php else: ?>
										<img src="images/user.png" width="100px" height="100px" style="border:4px groove #CCCCCC; border-radius:5px;">
										<?php endif; ?>
                                        <input type="file" style="height:44px; margin-top:10px;" name="image" id="last-name2" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>	
                                <!--<div class="form-group">
                                    <label class="control-label col-md-4" for="first-name">ID Number
                                    </label>
                                    <div class="col-md-2">
                                        <input type="number" value="<?php echo $row['school_number']; ?>" name="school_number" id="first-name2" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>-->
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="first-name">First Name
									</label>
                                    <div class="col-md-3">
                                        <input type="text" value="<?php echo $row['firstname']; ?>" name="firstname" id="first-name2" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="first-name">Middle Name
                                    </label>
                                    <div class="col-md-3">
                                        <input type="text" name="middlename" value="<?php echo $row['middlename']; ?>" placeholder="MI / Middle Name....." id="first-name2" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="last-name">Last Name
                                    </label>
                                    <div class="col-md-3">
                                        <input type="text" value="<?php echo $row['lastname']; ?>" name="lastname" id="last-name2" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="last-name">Contact
                                    </label>
                                    <div class="col-md-3">
                                        <input type='tel' value="<?php echo $row['contact']; ?>" autocomplete="off"  maxlength="11" name="contact" id="last-name2" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="last-name">Gender
                                    </label>
									<div class="col-md-4">
                                        <select name="gender" class="form-control" tabindex="-1" >
                                            <option value="<?php echo $row['gender']; ?>"><?php echo $row['gender']; ?></option>
                                            <?php if($row['gender'] == "Male"){?>
                                            <option value="Male">Female</option>
                                        <?php }else{?>
                                            <option value="Female">Male</option>
                                        <?php }?>
                                        </select>
                                    </div>
                                </div>								
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="last-name">Address
                                    </label>
                                    <div class="col-md-4">
                                        <input type="text" value="<?php echo $row['address']; ?>" name="address" id="last-name2" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                               
                                
                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                        <a href="index.php"><button type="button" class="btn btn-primary"><i class="fa fa-times-circle-o"></i> Cancel</button></a>
                                        <button type="submit" name="update" class="btn btn-success"><i class="glyphicon glyphicon-save"></i> Update</button>
                                    </div>
                                </div>
                            </form>
							
<?php
$id =$_GET['user_id'];
if (isset($_POST['update'])) {

    if($_FILES['image']['type'] == "image/jpeg" || $_FILES['image']['type'] == "image/png"
        || $_FILES['image']['type'] == "image/gif"){
        // là file ảnh
        // Tiến hành code upload    
            if($_FILES['image']['size'] > 1048576){
                echo "File không được lớn hơn 1mb";
            }else{
                // file hợp lệ, tiến hành upload
                $path = "user_image/"; // file sẽ lưu vào thư mục admin_image
                $tmp_name = $_FILES['image']['tmp_name'];
                $name = $_FILES['image']['name'];
                $type = $_FILES['image']['type']; 
                $size = $_FILES['image']['size']; 
                // Upload file
                $moveResult = move_uploaded_file($tmp_name,$path.$name);
               if($moveResult){
                //$school_number = $_POST['school_number'];
                $firstname = $_POST['firstname'];
                $middlename = $_POST['middlename'];
                $lastname = $_POST['lastname'];
                $contact = $_POST['contact'];
                $gender = $_POST['gender'];
                $address = $_POST['address'];
                //$type = $_POST['type'];
                //$level = $_POST['level'];
                //$section = $_POST['section'];
                $db->db_query(" UPDATE user SET  firstname='$firstname', middlename='$middlename', lastname='$lastname', contact='$contact', 
gender='$gender', address='$address', image='$name' WHERE user_id = '$id' ")or die(mysql_error());
                //echo "<script>alert('$type')</script>";
echo "<script>alert('Successfully Updated User Info!'); window.location='index.php'</script>";
            }else{echo "<script>alert('Upload file failed!')</script>";}
           }
        }else{
           // không phải file ảnh
           echo "Kiểu file không hợp lệ";
        }


/*$school_number = $_POST['school_number'];
$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'];
$lastname = $_POST['lastname'];
$contact = $_POST['contact'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$type = $_POST['type'];
$level = $_POST['level'];
$section = $_POST['section'];

{		
$db->db_query(" UPDATE user SET school_number='$school_number', firstname='$firstname', middlename='$middlename', lastname='$lastname', contact='$contact', 
gender='$gender', address='$address', type='$type', level='$level', section='$section' WHERE user_id = '$id' ")or die(mysql_error());
echo "<script>alert('Successfully Updated User Info!'); window.location='user.php'</script>";
}

// }
// }*/
}
?>
						
                        <!-- content ends here -->
                    </div>
                </div>
            </div>
        </div>

<?php include ('footer.php'); ?>