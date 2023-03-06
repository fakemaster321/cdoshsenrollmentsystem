<?php 

include 'dbconn.php';
session_start();

if(isset($_SESSION['email'])) {

}else {

	echo header('Location: index.php');

}
include 'header.php';
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
  <a class="" href="dashboard"><i class="fa-solid fa-school mr-2"></i>Home</a>
  <a class="" href="add"><i class="fa-regular fa-user mr-2"></i>Students</a>
  <a class="active" href="teachers"><i class="fa-regular fa-id-badge mr-2"></i>Teachers</a>
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



</body>
</html>


