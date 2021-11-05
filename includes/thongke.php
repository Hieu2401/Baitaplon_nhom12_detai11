<?php
	$servername = "localhost";
	$username = "root";
	$password = "";

	$conn = new mysqli($servername,$username,$password);
	if ($conn->connect_error) {
		die("connection failed" . $conn->connct_error);
	}
	$strSQL=mysqli_select_db($conn,'starvel');

   if(strlen($_SESSION'login')==0)
    {	
	header('location:index.php');
    }
   else{
	?>
	


	<?php $sql = "SELECT id_nguoidung from nguoidung";
	$query = $dbh -> prepare($sql);
	$query->execute();
	$results=$query->fetchAll(PDO::FETCH_OBJ);
	$cnt=$query->rowCount();
	?>	


	<?php $sql1 = "SELECT id_hoadon from hoadon";
	$query1 = $dbh -> prepare($sql1);
	$query1->execute();
	$results1=$query1->fetchAll(PDO::FETCH_OBJ);
	$cnt1=$query1->rowCount();
	?>


	<?php $sql3 = "SELECT id_goi from goidulich";
	$query3= $dbh -> prepare($sql3);
	$query3->execute();
	$results3=$query3->fetchAll(PDO::FETCH_OBJ);
	$cnt3=$query3->rowCount();
	?>

	<?php $sql5 = "SELECT id_trogiup from trogiup";
	$query5= $dbh -> prepare($sql5);
	$query5->execute();
	$results5=$query5->fetchAll(PDO::FETCH_OBJ);
	$cnt5=$query5->rowCount();
	?>

	<?php $sql = "SELECT id_goi from goidulich";
	$query = $dbh -> prepare($sql);
	$query->execute();
	$results=$query->fetchAll(PDO::FETCH_OBJ);
	$goi=$query->rowCount();
	?>

	<?php } ?>