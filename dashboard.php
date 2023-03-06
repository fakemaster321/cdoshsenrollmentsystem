<?php 

include 'dbconn.php';
session_start();

if(isset($_SESSION['email'])) {

}else {

	echo header('Location: index.php');

}
include 'header.php';
?>

<?php 

$sql = "SELECT * FROM student_enrolled WHERE s_level = 11";

$query = mysqli_query($conn,$sql);

$row = mysqli_num_rows($query);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

<div class="sidebar">
  <a class="active" href="dashboard"><i class="fa-solid fa-school mr-2"></i>Home</a>
  <a href="add"><i class="fa-regular fa-user mr-2"></i>Students</a>
  <a href="teachers"><i class="fa-regular fa-id-badge mr-2"></i>Teachers</a>
   <div class="children collapse show" id="inbox" data-parent="#basicSidebar">

                        <a class="nav-link" data-toggle="collapse" href="#profile" role="button" aria-expanded="true" aria-controls="profile">
                            <span class="media-body"><i class="fa-regular fa-folder-open mr-2"></i>Strands</span>
                        </a>
                        <ul class="collapse" id="profile">
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0);"><span class="media-body">HUMSS</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0);"><span class="media-body">STEM</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0);"><span class="media-body">ABM</span></a>
                            </li>
                        </ul>
                    </li>
                </div>
</div>



<div>
<div class="container-fluid table-responsive ">
	<div class=" enrollment-form dashboard-page ">
		<div class="form-group d-inline-flex align-content-center">
			
		<div class="col-md col-auto bg-dark p-4 text-light" >
			<p class="text-*-center h4">STUDENTS ENROLLED</p>
			<h1 class="text-*-center"><?php echo $row ?></h1>
		</div>

		<div class="col-md bg-dark p-4 text-light ml-4">
			<h1 class="text-*-center h4">HUMSS ENROLLED</h1>
			<h1 class="text-*-center"><?php echo $row ?></h1>
		</div>
		<div class="col-md bg-dark p-4 text-light ml-4">
			<h1 class="text-*-center h4">STEM ENROLLED</h1>
			<h1 class="text-*-center"><?php echo $row ?></h1>
		</div>
		<div class="col-md bg-dark p-4 text-light ml-4">
			<h1 class="text-*-center h4">ABM ENROLLED</h1>
			<h1 class="text-*-center"><?php echo $row ?></h1>
		</div>

<div class="col-md bg-dark p-4 text-light ml-4">
			<h1 class="text-*-center h4">GAS ENROLLED</h1>
			<h1 class="text-*-center"><?php echo $row ?></h1>
		</div>

		<div class="col-md bg-dark p-4 text-light ml-4">
			<h1 class="text-*-center h4">EIM ENROLLED</h1>
			<h1 class="text-*-center"><?php echo $row ?></h1>
		</div>

		</div>
	</div>

</div>
</div>



</body>
</html>


