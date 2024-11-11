<?php

// define('DB_HOST', 'localhost');
// define('DB_NAME', 'myprofile');
// define('DB_USER','root');
// define('DB_PASSWORD','');

define('DB_HOST', 'localhost');
define('DB_NAME', 'u924494635_bombaygym');
define('DB_USER', 'u924494635_bombaygym');
define('DB_PASSWORD', 'Ask@1gym');



$id = 0;
$update = false;
$data = "";

$con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);
$db = mysqli_select_db($con, DB_NAME);




if (isset($_POST['save'])) {

	$aname = $_POST['achi'];
	$desc = $_POST['des'];
	$aname = $_POST['achi'];
	$edate = $_POST['edate'];
	$formatted_date = date('Y-m-d', strtotime($edate));

	// Output the formatted date
	setcookie("Dtae", $edate);
	$etime = $_POST['etime'];
	$end_date = $_POST['eldate'];
	$end_time = $_POST['eltime'];


	$date1 = date('Y-m-d', strtotime($edate));
	$time1 = date('H:i:s', strtotime($etime));

	$target_dir = "uploads/";
	$target_file = $target_dir . basename($_FILES["image"]["name"]);
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
	if (!in_array($imageFileType, ['jpg', 'jpeg', 'png', 'JPG'])) {
		echo "You file extension must be .jpg, .jpeg or .png";
	}
	$img = addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$query = "INSERT INTO profile (name_ach,description,image,Date,time,end_date,end_time,eventdate) VALUES ('$aname','$desc','$img','$edate','$etime','$end_date','$end_time','$formatted_date')";
	$data = mysqli_query($con, $query) or die(mysqli_error($con));
}

if ($data) {
	$_SESSION['message'] = "Address saved";
	header("Location:event-table.php");;
}


if (isset($_POST['update'])) {
	$id = $_POST['id'];
	$name = $_POST['achi'];
	$address = $_POST['des'];
	// $imgs = $_POST['image'];

	$target_dir = "uploads/";
	$target_file = $target_dir . basename($_FILES["image"]["name"]);
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
	$img = addslashes(file_get_contents($_FILES['image']['tmp_name']));

	mysqli_query($con, "UPDATE profile SET name_ach='$name', description='$address', image='$img' WHERE id=$id");
	$_SESSION['message'] = "Address updated!";
	header('location: event-table.php');
}


if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($con, "DELETE FROM profile WHERE id=$id");
	$_SESSION['message'] = "Address deleted!";
	header('location: event-table.php');
}














if (isset($_POST['savenew'])) {

	$ntitle = $_POST['pdftitle'];
	$ndate = $_POST['pdate'];
	$formatted_date1 = date('Y-m-d', strtotime($ndate));




	$filename = $_FILES["pdffile"]["name"];
	$tmp_name = $_FILES["pdffile"]["tmp_name"];
	$path = "uploads/" . $filename;
	$file1 = explode(".", $filename);
	$ext = $file1[1];
	move_uploaded_file($tmp_name, $path);

	$extension1 = pathinfo($filename, PATHINFO_EXTENSION);
	if (!in_array($extension1, ['zip', 'pdf', 'docx'])) {
		echo "You file extension must be .zip, .pdf or .docx";
	}

	$query1 = "INSERT INTO notice (pdflink,ndate,ntitle,sdate) VALUES ('$filename','$ndate','$ntitle','$formatted_date1')";
	$data1 = mysqli_query($con, $query1) or die(mysqli_error($con));
}
if ($data1) {
	$_SESSION['message'] = "Address saved";
	header("Location:notice-tabel.php");;
}


if (isset($_POST['updatenew'])) {
	$id = $_POST['id'];
	$tit = $_POST['pdftitle'];
	$date = $_POST['pdate'];
	// $imgs = $_POST['image'];

	$filename = $_FILES["pdffile"]["name"];
	$tmp_name = $_FILES["pdffile"]["tmp_name"];
	$path = "uploads/" . $filename;
	$file1 = explode(".", $filename);
	$ext = $file1[1];
	move_uploaded_file($tmp_name, $path);


	mysqli_query($con, "UPDATE notice SET pdflink='$filename', ndate='$date', ntitle='$tit' WHERE nid=$id");
	$_SESSION['message'] = "Address updated!";
	header('location: notice-tabel.php');
}


if (isset($_GET['ndel'])) {
	$id = $_GET['ndel'];
	mysqli_query($con, "DELETE FROM notice WHERE nid=$id");
	$_SESSION['message'] = "Address deleted!";
	header('location: notice-tabel.php');
}
