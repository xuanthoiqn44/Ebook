<?php //include ('include/dbcon.php');
$ID=$_GET['book_id'];
 ?>
<?php include ('header.php'); ?>

       
        <div class="clearfix"></div>
 
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2><i class="fa fa-pencil"></i> Edit Book</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                        <!-- If needed 
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Settings 1</a></li>
                                    <li><a href="#">Settings 2</a></li>
                                </ul>
                            </li>
						-->
                            <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <!-- content starts here -->
<?php
    $db = new Database();
  $query1=$db->db_query("select * from book 
  LEFT JOIN category ON book.category_id = category.category_id
  where book_id='$ID'")or die(mysql_error());
$row=$db->db_fetch_array($query1);
  ?>

                            <form method="post" enctype="multipart/form-data" class="form-horizontal form-label-left">
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="last-name">Book Image
                                    </label>
                                    <div class="col-md-4">
										<a href=""><?php if($row['book_image'] != ""): ?>
										<img src="book_image/<?php echo $row['book_image']; ?>" width="100px" height="100px" style="border:4px groove #CCCCCC; border-radius:5px;">
										<?php else: ?>
										<img src="images/book_image.jpg" width="100px" height="100px" style="border:4px groove #CCCCCC; border-radius:5px;">
										<?php endif; ?>
										</a>
                                        <input type="file" style="height:44px;" name="image" id="last-name2" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="first-name">Title
                                    </label>
                                    <div class="col-md-4">
                                        <input type="text" name="book_title" value="<?php echo $row['book_title']; ?>" id="first-name2" required="required" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="first-name">Author 1
                                    </label>
                                    <div class="col-md-4">
                                        <input type="text" name="author" id="first-name2" value="<?php echo $row['author']; ?>" required="required" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="first-name">Author 2
                                    </label>
                                    <div class="col-md-4">
                                        <input type="text" name="author_2" id="first-name2" value="<?php echo $row['author_2']; ?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="first-name">Author 3
                                    </label>
                                    <div class="col-md-4">
                                        <input type="text" name="author_3" id="first-name2" value="<?php echo $row['author_3']; ?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="first-name">Author 4
                                    </label>
                                    <div class="col-md-4">
                                        <input type="text" name="author_4" id="first-name2" value="<?php echo $row['author_4']; ?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="first-name">Author 5
                                    </label>
                                    <div class="col-md-4">
                                        <input type="text" name="author_5" id="first-name2" value="<?php echo $row['author_5']; ?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <!--<div class="form-group">
                                    <label class="control-label col-md-4" for="last-name">Publication
                                    </label>
                                    <div class="col-md-4">
                                        <input type="text" name="book_pub" value="<?php echo $row['book_pub']; ?>" id="last-name2" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>-->
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="last-name">Copyright
                                    </label>
                                    <div class="col-md-4">
                                        <input type="text" name="copyright_year" value="<?php echo $row['copyright_year']; ?>" id="last-name2" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="last-name">Point download
                                    </label>
                                    <div class="col-md-4">
                                        <input type="number" name="point_download" value="<?php echo $row['point_download']; ?>" step="1" min="0" max="1000">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="last-name">Status
                                    </label>
									<div class="col-md-4">
                                        <select name="status" class="select2_single form-control" tabindex="-1" >
                                            <option value="<?php echo $row['status']; ?>"><?php echo $row['status']; ?></option>
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
                                    <label class="control-label col-md-4" for="last-name">Category
                                    </label>
									<div class="col-md-4">
                                        <select name="category_id" class="select2_single form-control" tabindex="-1" >
                                            <option value="<?php echo $row['category_id']; ?>"><?php echo $row['classname']; ?></option>
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
                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                        <a href="book.php"><button type="button" class="btn btn-primary"><i class="fa fa-times-circle-o"></i> Cancel</button></a>
                                        <button type="submit" name="update11" class="btn btn-success"><i class="glyphicon glyphicon-save"></i> Update</button>
                                    </div>
                                </div>
                            </form>
							
<?php
$id =$_GET['book_id'];
$id_user = $_SESSION['id'];
if (isset($_POST['update11'])) {
    if (!isset($_FILES['image']['tmp_name'])) {
            $profile = $row['book_image'];
            echo "<script>alert('error')</script>"; 
            }else{
                $file=$_FILES['image']['tmp_name'];
            $image = $_FILES["image"] ["name"];
            $image_name= addslashes($_FILES['image']['name']);
            $size = $_FILES["image"] ["size"];
            $error = $_FILES["image"] ["error"];
            if($size > 10000000) //conditions for the file
            {
                die("Format is not allowed or file size is too big!");
            }
            else{
                move_uploaded_file($_FILES["image"]["tmp_name"],"book_image/" . $_FILES["image"]["name"]);    
                    $profile = $_FILES["image"]["name"];
                    $book_image=$_FILES["image"]["name"];
                    $book_title=$_POST['book_title'];
                    $category_id=$_POST['category_id'];
                    $author=$_POST['author'];
                    $author_2=$_POST['author_2'];
                    $author_3=$_POST['author_3'];
                    $author_4=$_POST['author_4'];
                    $author_5=$_POST['author_5'];
                    $point_download=$_POST['point_download'];
                    $book_pub=$_POST['book_pub'];
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
                    $result = $db->db_query(" UPDATE book SET book_title='$book_title', category_id='$category_id', author='$author', author_2='$author_2', author_3='$author_3', author_4='$author_4', author_5='$author_5',  publisher_id='$id_user', copyright_year='$copyright_year', status='$status', book_image='$profile', remarks='$remark' WHERE book_id = '$id' ")or die(mysql_error());
if ($result) {
    # code...
    //echo "<script>alert('$profile')</script>";  
    echo "<script>alert('Successfully Updated Book Info!'); window.location='book.php'</script>";   
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