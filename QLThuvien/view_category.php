<?php include ('header.php'); 
$id_login = $_SESSION['id'];
	$result = $db->db_query("select * from admin where admin_id = '$id_login'");
	$result1 = $db->db_fetch_array($result);
?>

<?php 
$category = $_GET['category'];

$get_id = $db->db_query("select category_id from category where classname = '$category'");
$result = $db->db_fetch_array($get_id);
$id = $result['category_id'];
?>
        <div class="clearfix"></div>
 
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
							<!--<a href="book_print.php" target="_blank" style="background:none;">
							<button class="btn btn-danger pull-right"><i class="fa fa-print"></i> Print Books List</button>
							</a>
							<a href="print_barcode1.php" target="_blank" style="background:none;">
							<button class="btn btn-danger pull-right"><i class="fa fa-print"></i> Print Books Barcode</button>
							</a>-->
							<br />
							<br />
                    <div class="x_title">
                        <h2><i class="fa fa-book"></i> Book List</h2>
                        <ul class="nav navbar-right panel_toolbox">
                        	<?php if($_SESSION['id'] != 0){?>
                        		<li>
							<a href="user_book.php" style="background:none;">
							<button class="btn btn-primary"><i class=""></i> Sách đã upload</button>
							</a>
							</li>
                            <li>
							<a href="add_book.php" style="background:none;">
							<button class="btn btn-primary"><i class="fa fa-plus"></i> Add Book</button>
							</a>
							</li>
							<?php }?>
                            <!--<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>-->
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
                            <!--<li><a class="close-link"><i class="fa fa-close"></i></a></li>-->
                        </ul>
                        <div class="clearfix"></div>
							<ul class="nav nav-pills">
								<li role="presentation" class=""><a href="index.php">All</a></li>
								<?php $result= $db->db_query("select * from category order by category_id DESC ") or die (mysql_error());
								while ($row=$db->db_fetch_array($result) ){
								?>
								<li role="presentation" class="<?php if($category == $row['classname']){echo "active";}?>"><a href="view_category.php?category=<?php echo $row['classname']?>"><?php echo $row['classname']?></a></li>
							<?php }?>

								<!--<li role="presentation"><a href="old_books.php">Old Books</a></li>
								<li role="presentation"><a href="lost_books.php">Lost Books</a></li>
								<li role="presentation"><a href="damage_books.php">Damaged Books</a></li>
								<li role="presentation"><a href="sub_rep.php">Subject for Replacement Books</a></li>
								<li role="presentation"><a href="hard_bound.php">Hardbound Books</a></li>-->
							</ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <!-- content starts here -->

						<div class="table-responsive">
							<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
								
							<thead>
								<tr>
									<th style="width:100px;">Book Image</th>
									
									<th>Title</th>
									<th>Author/s</th>
									<th>Category</th>
									<th>Status</th>
									<th>Point Download</th>
									<th>Remarks</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
							
							<?php
							$result= $db->db_query("select * from book where category_id ='$id' order by book_id DESC ") or die (mysql_error());
							while ($row=$db->db_fetch_array($result) ){
							$id=$row['book_id'];
							$category_id=$row['category_id'];
							
							$cat_query = $db->db_query("select * from category where category_id = '$category_id'")or die(mysql_error());
							$cat_row = $db->db_fetch_array($cat_query);
							?>
							<tr>
								<td>
								<?php if($row['book_image'] != ""): ?>
								<img src="book_image/<?php echo $row['book_image']; ?>" class="img-thumbnail" width="75px" height="50px">
								<?php else: ?>
								<img src="images/book_image.jpg" class="img-thumbnail" width="75px" height="50px">
								<?php endif; ?>
								</td>  <!--- either this <td><a target="_blank" href="view_book_barcode.php?code=<?php // echo $row['book_barcode']; ?>"><?php // echo $row['book_barcode']; ?></a></td> -->
								
								<td style="word-wrap: break-word; width: 10em;"><?php echo $row['book_title']; ?></td>
								<td style="word-wrap: break-word; width: 10em;"><?php echo $row['author']."<br />".$row['author_2']."<br />".$row['author_3']."<br />".$row['author_4']."<br />".$row['author_5']; ?></td>
								<td><?php echo $cat_row['classname']; ?></td> 
								<td><?php echo $row['status']; ?></td> 
								<td><?php echo $row['point_download']; ?></td> 
								<td><?php echo $row['remarks']; ?></td> 
								<td>
									<a class="btn btn-primary" for="ViewAdmin" href="view_book.php<?php echo '?book_id='.$id; ?>">
										<i class="fa fa-search"></i>
									</a>
									<?php if($_SESSION['id'] != 0 && $result1['type'] =="Admin"){?>
									<a class="btn btn-warning" for="ViewAdmin" href="edit_book.php<?php echo '?book_id='.$id; ?>">
									<i class="fa fa-edit"></i>
									</a><?php } if($_SESSION['id'] != 0){?>
									<a class="btn btn-download" for="ViewAdmin" href="<?php if($row['book_file'] != null){?>download_book.php?file=<?php echo $row['book_file'];  ?><?php }else{echo "#";}?>">
									<i class="fa fa-download"></i>
									</a><?php }?>
								<!--	<a class="btn btn-danger" for="DeleteAdmin" href="#delete<?php //echo $id;?>" data-toggle="modal" data-target="#delete<?php //echo $id;?>">
										<i class="glyphicon glyphicon-trash icon-white"></i>
									</a>
								-->
			
									<!-- delete modal user -->
									<div class="modal fade" id="delete<?php  echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
										<div class="modal-header">
											<h4 class="modal-title" id="myModalLabel"><i class="glyphicon glyphicon-user"></i> User</h4>
										</div>
										<div class="modal-body">
												<div class="alert alert-danger">
													Are you sure you want to delete?
												</div>
												<div class="modal-footer">
												<button class="btn btn-inverse" data-dismiss="modal" aria-hidden="true"><i class="glyphicon glyphicon-remove icon-white"></i> No</button>
												<a href="delete_user.php<?php echo '?book_id='.$id; ?>" style="margin-bottom:5px;" class="btn btn-primary"><i class="glyphicon glyphicon-ok icon-white"></i> Yes</a>
												</div>
										</div>
										</div>
									</div>
									</div>
								</td> 
							</tr>
							<?php } ?>
							</tbody>
							</table>
						</div>
						
                        <!-- content ends here -->
                    </div>
                </div>
            </div>
        </div>
        

<?php include ('footer.php'); ?>