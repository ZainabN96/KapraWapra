<?php
require('top.inc.php');
isAdmin();
$categories='';
$image='';
$image_required='required';
$msg='';
if(isset($_GET['id']) && $_GET['id']!=''){
	$id=get_safe_value($con,$_GET['id']);
	$res=mysqli_query($con,"select * from categories where id='$id'");
	$check=mysqli_num_rows($res);
	if($check>0){
		$row=mysqli_fetch_assoc($res);
		$categories=$row['categories'];
		$image=$row['cat_image'];
	}else{
		header('location:categories.php');
		die();
	}
}

if(isset($_POST['submit'])){
	$categories=get_safe_value($con,$_POST['categories']);

	if(isset($_GET['id']) && $_GET['id']==0){
		if($_FILES['image']['type']!='image/png' && $_FILES['image']['type']!='image/jpg' && $_FILES['image']['type']!='image/jpeg'){
			$msg="Please select only png, jpg and jpeg image formate";
		}
	}else{
		if($_FILES['image']['type']!=''){
				if($_FILES['image']['type']!='image/png' && $_FILES['image']['type']!='image/jpg' && $_FILES['image']['type']!='image/jpeg'){
				$msg="Please select only png, jpg and jpeg image formate";
			}
		}
	}

	$res=mysqli_query($con,"select * from categories where categories='$categories'");
	$check=mysqli_num_rows($res);
	if($check>0){
		if(isset($_GET['id']) && $_GET['id']!=''){
			$getData=mysqli_fetch_assoc($res);
			if($id==$getData['id']){
			
			}else{
				$msg="Categories already exist";
			}
		}else{
			$msg="Categories already exist";
		}
	}
	
	if($msg==''){
		if(isset($_GET['id']) && $_GET['id']!=''){
			if($_FILES['image']['name']!=''){
				$image=rand(111111111,999999999).'_'.$_FILES['image']['name'];
				imageCompress($_FILES['image']['tmp_name'],CAT_SERVER_PATH.$image);
				mysqli_query($con,"update categories set categories='$categories', cat_image = '$image' where id='$id'");
			}else{
				mysqli_query($con,"update banner set categories='$categories', cat_image = '$image' where id='$id'");
			}
		}else{
			$image=rand(111111111,999999999).'_'.$_FILES['image']['name'];
			imageCompress($_FILES['image']['tmp_name'],CAT_SERVER_PATH.$image);
			mysqli_query($con,"insert into categories(categories, cat_image, status) values('$categories','$image','1')");
		}
		// if(isset($_GET['id']) && $_GET['id']!=''){
		// 	mysqli_query($con,"update categories set categories='$categories' where id='$id'");
		// }else{
		// 	mysqli_query($con,"insert into categories(categories,status) values('$categories','1')");
		// }
		redirect('categories.php');
		die();
	}
}
?>
<div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>Categories</strong><small> Form</small></div>
                        <form method="post">
							<div class="card-body card-block">
							   <div class="form-group">
									<label for="categories" class=" form-control-label">Categories</label>
									<input type="text" name="categories" placeholder="Enter categories name" class="form-control" required value="<?php echo $categories?>">
								</div>
								<div class="form-group">
									<label for="image" class=" form-control-label">Image</label>
									<input type="file" name="image" class="form-control" <?php echo  $image_required?> value="<?php echo $image?>">
									<?php
										if($image!=''){
echo "<a target='_blank' href='".CAT_SITE_PATH.$image."'><img width='150px' src='".CAT_SITE_PATH.$image."'/></a>";
										}
										?>
								</div>
							   <button id="payment-button" name="submit" type="submit" class="btn btn-lg btn-info btn-block">
							   <span id="payment-button-amount">Submit</span>
							   </button>
							   <div class="field_error"><?php echo $msg?></div>
							</div>
						</form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         
<?php
require('footer.inc.php');
?>