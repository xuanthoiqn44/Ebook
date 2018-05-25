

<?php include ('header.php'); ?>

<?php

            //include ('include/dbcon.php');
                        $db = new Database();
                        //$query = $db->db_query("SELECT * FROM `barcode` ORDER BY mid_barcode DESC ") or die (mysql_error());
                        //$fetch = $db->db_fetch_array($query);
                        //$mid_barcode = $fetch['mid_barcode'];
                        
                        //$new_barcode =  $mid_barcode + 1;
                        //$pre_barcode = "VNHS";
                        //$suf_barcode = "LMS";
                        //$generate_barcode = $pre_barcode.$new_barcode.$suf_barcode;
?>

        <!--<div class="page-title">
            <div class="title_left">
                <h3>
					<small>Home / Books /</small> Add Book
                </h3>
            </div>
        </div>-->
        <div class="clearfix"></div>
 
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2><i class="fa fa-plus"></i> Add Book</h2>
                        
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <!-- content starts here -->

                            <form method="post" enctype="multipart/form-data" class="form-horizontal form-label-left">
							<input type="hidden" name="new_barcode" value="<?php echo $new_barcode; ?>">
							
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="first-name">Title <span class="required" style="color:red;">*</span>
                                    </label>
                                    <div class="col-md-4">
                                        <input type="text" name="book_title" id="first-name2" required="required" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="first-name">Author 1 <span class="required" style="color:red;">*</span>
                                    </label>
                                    <div class="col-md-4">
                                        <input type="text" name="author" id="first-name2" required="required" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="first-name">Author 2
                                    </label>
                                    <div class="col-md-4">
                                        <input type="text" name="author_2" id="first-name2" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="first-name">Author 3
                                    </label>
                                    <div class="col-md-4">
                                        <input type="text" name="author_3" id="first-name2" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="first-name">Author 4
                                    </label>
                                    <div class="col-md-4">
                                        <input type="text" name="author_4" id="first-name2" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="first-name">Author 5
                                    </label>
                                    <div class="col-md-4">
                                        <input type="text" name="author_5" id="first-name2" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                
                                
                                
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="last-name">Copyright
                                    </label>
                                    <div class="col-md-4">
                                        <input type="text" name="copyright_year" id="last-name2" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="last-name">Point download <span class="required" style="color:red;">*</span>
                                    </label>
                                    <div class="col-md-1">
                                        <input type="number" name="point_download" step="1" min="0" max="1000" required="required"  class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="last-name">Status <span class="required" style="color:red;">*</span>
                                    </label>
									<div class="col-md-4">
                                        <select name="status" class="select2_single form-control" tabindex="-1" required="required">
											<option value="New">New</option>
											<option value="Old">Old</option>
											<option value="Lost">Lost</option>
											<option value="Damaged">Damaged</option>
											<option value="Replacement">Replacement</option>
											<option value="Hardbound">Hardbound</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="last-name">Category <span class="required" style="color:red;">*</span>
                                    </label>
									<div class="col-md-4">
                                        <select name="category_id" class="select2_single form-control" tabindex="-1" required="required">
										<?php
										$result= $db->db_query("select * from category") or die (mysql_error());
										while ($row= $db->db_fetch_array ($result) ){
										$id=$row['category_id'];
										?>
                                            <option value="<?php echo $row['category_id']; ?>"><?php echo $row['classname']; ?></option>
										<?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="last-name">Book Image
                                    </label>
                                    <div class="col-md-4">
                                        <input type="file" style="height:44px;" name="image" id="last-name2" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <label class="control-label col-md-4" for="last-name">Upload file
                                    </label>
                                    <div class="col-md-4">
                                        <input type="file" style="height:44px;" name="file" id="last-name2" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                        <a href="book.php"><button type="button" class="btn btn-primary"><i class="fa fa-times-circle-o"></i> Cancel</button></a>
                                        <button type="submit" name="submit" class="btn btn-success"><i class="fa fa-plus-square"></i> Submit</button>
                                    </div>
                                </div>
                            </form>
							
<?php
if(isset($_POST['submit'])){
$book_image = "";
$book_file = "";
$check_file = true;
$check_image = true;
if (isset($_FILES['image']['tmp_name'])) {
    $image = $_FILES["image"] ["name"];
$ext = pathinfo($image, PATHINFO_EXTENSION);
$allowed =  array('pnp','jpg' ,'gif','jpeg');
if(in_array($ext,$allowed)){
$file=$_FILES['image']['tmp_name'];
$image_name= addslashes($_FILES['image']['name']);
$size = $_FILES["image"] ["size"];
$error = $_FILES["image"] ["error"];
if($size > 10000000) {
    die("Format is not allowed or file size is too big!");
    }else{
        move_uploaded_file($_FILES["image"]["tmp_name"],"book_image/" . $_FILES["image"]["name"]);          
$book_image=$_FILES["image"]["name"];

$book_title=$_POST['book_title'];
$category_id=$_POST['category_id'];
$author=$_POST['author'];
$author_2=$_POST['author_2'];
$author_3=$_POST['author_3'];
$author_4=$_POST['author_4'];
$author_5=$_POST['author_5'];
$point_download=$_POST['point_download'];
//$book_pub=$_POST['book_pub'];
$copyright_year=$_POST['copyright_year'];
$status=$_POST['status'];
$publisher_id = $_SESSION['id'];



if ($status == 'Lost') {
    $remark = 'Not Available';
} elseif ($status == 'Damaged') {
    $remark = 'Not Available';
} else {
    $remark = 'Available';
}
    }
}else{
    $check_image = false;
echo "<script>alert('Lỗi trong quá trình upload image')</script>";
}
}
if(!empty($_FILES['file'])){
$allowed =  array('html','php' ,'css','js','txt');
$book_file = $_FILES['file']['name'];
$ext = pathinfo($book_file, PATHINFO_EXTENSION);
if(!in_array($ext,$allowed)){
    $path = "upload/";
$path = $path . basename( $_FILES['file']['name']);
if(move_uploaded_file($_FILES['file']['tmp_name'], $path)) {
echo "The file ".  basename( $_FILES['file']['name']). 
" has been uploaded";
}else{
echo "There was an error uploading the file, please try again!";
}
}else{
    $check_file = false;
echo "<script>alert('Lỗi trong quá trình upload file')</script>";
}
}
if($check_file && $check_image){
    $result = $db->db_query("INSERT into book (book_title,category_id,author,author_2,author_3,author_4,author_5,point_download,publisher_id,copyright_year,status,book_image,book_file,date_added,remarks)
values('$book_title','$category_id','$author','$author_2','$author_3','$author_4','$author_5','$point_download','$publisher_id','$copyright_year','$status','$book_image','$book_file',NOW(),'$remark')")or die(mysql_error());
    if ($result) {
    # code...
    $get_point_user = $db->db_query("SELECT point from user where user_id ='$publisher_id'");
    
    $point = $db->db_fetch_array($get_point_user);
    $point1 = $point['point'] + 3;
    
    $result =  $db->db_query("UPDATE user set point = '$point1' where user_id = '$publisher_id'");
    if ($result) {
        # code...
        echo "<script>alert('Upload sách thành công');window.location='index.php' </script>";
    }
    
}
}
}
?>
						
                        <!-- content ends here -->
                    </div>
                </div>
            </div>
        </div>

<?php include ('footer.php'); ?>