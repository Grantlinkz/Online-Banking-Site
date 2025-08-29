<?php
include("functions.php");
if($_GET['action'] == "logo"){
	if (isset($_POST)) {
if(is_array($_FILES)) {
if(is_uploaded_file($_FILES['logo']['tmp_name'])) {
$sourcePath = $_FILES['logo']['tmp_name'];
$targetPath ="../images/".$_FILES['logo']['name'];
$Path =$_FILES['logo']['name'];
$imageFileType = strtolower(pathinfo($targetPath,PATHINFO_EXTENSION));
// $imageFileType = '../images';
// Moving it to a folder
// move_uploaded_file($sourcePath, $imageFileType.$targetPath);

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ){
	  echo "<script>
      Swal.fire({
      position: 'top-end',
      icon: 'error',
      title: 'Please select an Image',
      showConfirmButton: false,
      timer: 1500
      });
      </script>";		
      die();
}
 
//   $targetPath = $imageFileType";
if(move_uploaded_file($sourcePath,$targetPath)) {
   // echo $pic;
   // die;
//  $pic =  "logo.$imageFileType";
//  echo $pic;
   // die;
  $query = $conn->query("UPDATE setting SET logo = '$Path' WHERE id = 1 ");
   echo "<script>
      Swal.fire({
      position: 'top-end',
      icon: 'success',
      title: 'Logo updated successfully',
      showConfirmButton: false,
      timer: 1500
      });
    </script>";	
     ?>
    <meta http-equiv="refresh" content="3; url=branding">
    <?php
}
}
else{
   echo "<script>
      Swal.fire({
      position: 'top-end',
      icon: 'error',
      title: 'No image was selected',
      showConfirmButton: false,
      timer: 1500
      });
    </script>";
   
}
}
	}

}

//footer logo form
if($_GET['action'] == "footerlogo"){
	if (isset($_POST)) {
if(is_array($_FILES)) {
if(is_uploaded_file($_FILES['footerlogo']['tmp_name'])) {
$sourcePath = $_FILES['footerlogo']['tmp_name'];
$targetPath = "../images/".$_FILES['footerlogo']['name'];
$Path =$_FILES['footerlogo']['name'];
$imageFileType = strtolower(pathinfo($targetPath,PATHINFO_EXTENSION));
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ){
	  echo "<script>
      Swal.fire({
      position: 'top-end',
      icon: 'error',
      title: 'Please select an Image',
      showConfirmButton: false,
      timer: 1500
      });
      </script>";		
      die();
}
//  $targetPath = "../footerlogo.$imageFileType";
if(move_uploaded_file($sourcePath,$targetPath)) {
//  $pic =  "footerlogo.$imageFileType";
  $query = $conn->query("UPDATE setting SET footerlogo = '$Path' WHERE id = 1 ");
   echo "<script>
      Swal.fire({
      position: 'top-end',
      icon: 'success',
      title: 'Footer Image updated successfully',
      showConfirmButton: false,
      timer: 1500
      });
    </script>";	
     ?>
    <meta http-equiv="refresh" content="3; url=branding">
    <?php
}
}
else{
   echo "<script>
      Swal.fire({
      position: 'top-end',
      icon: 'error',
      title: 'No image was selected',
      showConfirmButton: false,
      timer: 1500
      });
    </script>";
   
}
}
	}




}

///email Logo form
if($_GET['action'] == "email"){
	if (isset($_POST)) {
if(is_array($_FILES)) {
if(is_uploaded_file($_FILES['emaillogo']['tmp_name'])) {
$sourcePath = $_FILES['emaillogo']['tmp_name'];
$targetPath = "../images/".$_FILES['emaillogo']['name'];
$Path =$_FILES['emaillogo']['name'];
$imageFileType = strtolower(pathinfo($targetPath,PATHINFO_EXTENSION));
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ){
	  echo "<script>
      Swal.fire({
      position: 'top-end',
      icon: 'error',
      title: 'Please select an Image',
      showConfirmButton: false,
      timer: 1500
      });
      </script>";		
      die();
}
//  $targetPath = "../images/emaillogo.$imageFileType";
if(move_uploaded_file($sourcePath,$targetPath)) {
 $pic =  "$site_url$targetPath.$imageFileType";
  $query = $conn->query("UPDATE smtp_setting SET emaillogo = '$Path' WHERE id = 1 ");
  $query = $conn->query("UPDATE setting SET emaillogo = '$Path' WHERE id = 1 ");
   echo "<script>
      Swal.fire({
      position: 'top-end',
      icon: 'success',
      title: 'Email Image updated successfully',
      showConfirmButton: false,
      timer: 1500
      });
    </script>";	
     ?>
    <meta http-equiv="refresh" content="3; url=branding">
    <?php
}
}
else{
   echo "<script>
      Swal.fire({
      position: 'top-end',
      icon: 'error',
      title: 'No image was selected',
      showConfirmButton: false,
      timer: 1500
      });
    </script>";
   
}
}
	}




}


///FAVICON FORM
if($_GET['action'] == "favicon"){
	if (isset($_POST)) {
if(is_array($_FILES)) {
if(is_uploaded_file($_FILES['favicon']['tmp_name'])) {
$sourcePath = $_FILES['favicon']['tmp_name'];
$targetPath = "../images/".$_FILES['favicon']['name'];
$Path =$_FILES['favicon']['name'];
$imageFileType = strtolower(pathinfo($targetPath,PATHINFO_EXTENSION));
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ){
	  echo "<script>
      Swal.fire({
      position: 'top-end',
      icon: 'error',
      title: 'Please select an Image',
      showConfirmButton: false,
      timer: 1500
      });
      </script>";		
      die();
}
//  $targetPath = "../images/favicon.$imageFileType";
if(move_uploaded_file($sourcePath,$targetPath)) {

//  $pic =  "favicon.$imageFileType";
  $query = $conn->query("UPDATE setting SET favicon = '$Path' WHERE id = 1 ");
   echo "<script>
      Swal.fire({
      position: 'top-end',
      icon: 'success',
      title: 'Favicon updated successfully',
      showConfirmButton: false,
      timer: 1500
      });
    </script>";	
     ?>
    <meta http-equiv="refresh" content="3; url=branding">
    <?php
}
}
else{
   echo "<script>
      Swal.fire({
      position: 'top-end',
      icon: 'error',
      title: 'No image was selected',
      showConfirmButton: false,
      timer: 1500
      });
    </script>";
   
}
}
	}




}


?>