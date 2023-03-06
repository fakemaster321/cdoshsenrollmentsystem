<?php 

include 'dbconn.php';


?>

<!-- INSERT THE DATA FROM ENROLLMENT FORM -->
<?php 
$s_year = $_POST['s_year'];
$s_level = $_POST['s_level'];
$s_gaverage = $_POST['s_gaverage'];
$s_lrnopt = $_POST['lrn-opt'];
$s_returning = $_POST['s_returning'];
$psa_number = $_POST['psa_number'];
$s_lrn = $_POST['s_lrn'];
$s_lname = $_POST['s_lname'];
$s_fname = $_POST['s_fname'];
$s_mname = $_POST['s_mname'];
$s_ename = $_POST['s_ename'];
$s_bdate = $_POST['s_bdate'];
$s_pbirth = $_POST['s_pbirth'];
$s_sex = $_POST['s_sex'];
$s_age = $_POST['s_age'];
$s_ip = $_POST['s_ip'];
$s_ip_specify = $_POST['s_ip_specify'];
$s_4ps = $_POST['s_4ps'];
$s_4ps_specify = $_POST['s_4ps_specify'];
$s_house_no = $_POST['s_house_no'];
$s_street_name = $_POST['s_street_name'];
$s_barangay = $_POST['s_barangay'];
$s_municipality = $_POST['s_municipality'];
$s_province = $_POST['s_province'];
$s_country = $_POST['s_country'];
$s_zipcode = $_POST['s_zipcode'];
$s_strand = $_POST['s_strand'];




$students = "SELECT * FROM student_enrolled";
$students_query = mysqli_query($conn, $students);
$students_row = mysqli_num_rows($students_query);

if ($students_row == 15) {
	$humss_a = "CREATE TABLE IF NOT EXISTS `humss_b` (
  `id` int(11) NOT NULL,
  `s_year` varchar(15) NOT NULL,
  `s_level` varchar(3) NOT NULL,
  `s_gaverage` varchar(3) NOT NULL,
  `s_lrnopt` varchar(5) NOT NULL,
  `s_returning` varchar(5) NOT NULL,
  `psa_number` varchar(25) DEFAULT NULL,
  `s_lrn` varchar(15) NOT NULL,
  `s_lname` varchar(50) NOT NULL,
  `s_fname` varchar(50) NOT NULL,
  `s_mname` varchar(50) DEFAULT NULL,
  `s_ename` varchar(10) DEFAULT NULL,
  `s_bdate` varchar(25) NOT NULL,
  `s_pbirth` varchar(50) NOT NULL,
  `s_sex` varchar(10) NOT NULL,
  `s_age` int(3) NOT NULL,
  `s_ip` varchar(5) NOT NULL,
  `s_ip_specify` varchar(50) DEFAULT NULL,
  `s_4ps` varchar(5) NOT NULL,
  `s_4ps_specify` varchar(25) DEFAULT NULL,
  `s_house_no` varchar(10) NOT NULL,
  `s_street_name` varchar(50) NOT NULL,
  `s_barangay` varchar(50) NOT NULL,
  `s_municipality` varchar(50) NOT NULL,	
  `s_province` varchar(50) NOT NULL,
  `s_country` varchar(50) NOT NULL,
  `s_zipcode` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";
	$humms_a_query = mysqli_query($conn, $humss_a);
	if ($humms_a_query && $_POST['s_gaverage'] < 90) { $add = ("INSERT INTO `humss_b` (`s_year`, `s_level`, `s_gaverage`, `s_lrnopt`, `s_returning`, `psa_number`, `s_lrn`, `s_lname`, `s_fname`, `s_mname`, `s_ename`, `s_bdate`, `s_pbirth`, `s_sex`, `s_age`, `s_ip`, `s_ip_specify`, `s_4ps`, `s_4ps_specify`, `s_house_no`, `s_street_name`, `s_barangay`, `s_municipality`, `s_province`, `s_country`, `s_zipcode`) VALUES ('$s_year','$s_level', '$s_gaverage' ,'$s_lrnopt','$s_returning','$psa_number','$s_lrn','$s_lname','$s_fname','$s_mname','$s_ename','$s_bdate','$s_pbirth','$s_sex','$s_age','$s_ip','$s_ip_specify','$s_4ps','$s_4ps_specify', '$s_house_no','$s_street_name','$s_barangay','$s_municipality','$s_province','$s_country','$s_zipcode')");

	$query = mysqli_query($conn,$add) or die(mysqli_error());

	if ($query) {
		
		header('Location: add?result=success');
	}

	
	}else {

		$add = ("INSERT INTO `student_enrolled_honors` (`s_year`, `s_level`, `s_gaverage`, `s_lrnopt`, `s_returning`, `psa_number`, `s_lrn`, `s_lname`, `s_fname`, `s_mname`, `s_ename`, `s_bdate`, `s_pbirth`, `s_sex`, `s_age`, `s_ip`, `s_ip_specify`, `s_4ps`, `s_4ps_specify`, `s_house_no`, `s_street_name`, `s_barangay`, `s_municipality`, `s_province`, `s_country`, `s_zipcode`) VALUES ('$s_year','$s_level', '$s_gaverage' ,'$s_lrnopt','$s_returning','$psa_number','$s_lrn','$s_lname','$s_fname','$s_mname','$s_ename','$s_bdate','$s_pbirth','$s_sex','$s_age','$s_ip','$s_ip_specify','$s_4ps','$s_4ps_specify', '$s_house_no','$s_street_name','$s_barangay','$s_municipality','$s_province','$s_country','$s_zipcode')");

		$query = mysqli_query($conn,$add) or die(mysqli_error());

			if ($query) {
			header('Location: add?result=success');
}



	}

}

?>


<?php
/* if($_POST['s_gaverage'] < 90) {

$add = ("INSERT INTO `student_enrolled` (`s_year`, `s_level`, `s_gaverage`, `s_lrnopt`, `s_returning`, `psa_number`, `s_lrn`, `s_lname`, `s_fname`, `s_mname`, `s_ename`, `s_bdate`, `s_pbirth`, `s_sex`, `s_age`, `s_ip`, `s_ip_specify`, `s_4ps`, `s_4ps_specify`, `s_house_no`, `s_street_name`, `s_barangay`, `s_municipality`, `s_province`, `s_country`, `s_zipcode`) VALUES ('$s_year','$s_level', '$s_gaverage' ,'$s_lrnopt','$s_returning','$psa_number','$s_lrn','$s_lname','$s_fname','$s_mname','$s_ename','$s_bdate','$s_pbirth','$s_sex','$s_age','$s_ip','$s_ip_specify','$s_4ps','$s_4ps_specify', '$s_house_no','$s_street_name','$s_barangay','$s_municipality','$s_province','$s_country','$s_zipcode')");

$query = mysqli_query($conn,$add) or die(mysqli_error());

if ($query) {
	header('Location: add.php?result=success');
}else {

	header('Location: add.php?result=error');

}

} else {

	$add = ("INSERT INTO `student_enrolled_honors` (`s_year`, `s_level`, `s_gaverage`, `s_lrnopt`, `s_returning`, `psa_number`, `s_lrn`, `s_lname`, `s_fname`, `s_mname`, `s_ename`, `s_bdate`, `s_pbirth`, `s_sex`, `s_age`, `s_ip`, `s_ip_specify`, `s_4ps`, `s_4ps_specify`, `s_house_no`, `s_street_name`, `s_barangay`, `s_municipality`, `s_province`, `s_country`, `s_zipcode`) VALUES ('$s_year','$s_level', '$s_gaverage' ,'$s_lrnopt','$s_returning','$psa_number','$s_lrn','$s_lname','$s_fname','$s_mname','$s_ename','$s_bdate','$s_pbirth','$s_sex','$s_age','$s_ip','$s_ip_specify','$s_4ps','$s_4ps_specify', '$s_house_no','$s_street_name','$s_barangay','$s_municipality','$s_province','$s_country','$s_zipcode')");

$query = mysqli_query($conn,$add) or die(mysqli_error());

if ($query) {
	header('Location: add.php?result=success');
}else {

	header('Location: add.php?result=error');

}


}

*/
?>