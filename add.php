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

				if (isset($_GET['result'])) {
					if($_GET['result'] == "success") { ?>
						<script type="text/javascript">
							
							window.alert('You are now enrolled!');

						</script>
					<?php
					}else {
						if($_GET['result'] == "error") { ?>
							<div class=" alert alert-danger text-center" role="alert">Enroll Unsuccessful</div> 

					<?php
						}

					}

				}

			?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body style="background-color: white;">

<!-- SIDEBAR -->

<div class="sidebar">
  <a class="" href="dashboard"><i class="fa-solid fa-school mr-2"></i>Home</a>
  <a class="active" href="add"><i class="fa-regular fa-user mr-2"></i>Students</a>
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


<!-- ENROLLMENT FORM -->


<div class="container s-form table-responsive">
	<div class="row enrollment-form">
		<div class="form-group">
			<form action="addaction" method="POST">
				<div class="col-md header-enrollment-form">
				<h1 class="text-center">CDONHS - SHS ENROLLMENT FORM</h1>
					<div class="d-flex container">
				<div class="mr-auto">
				<label class="form-label">School Year</label>
				<input class="form-control" type="text" name="s_year" placeholder="2020 - 2021" value="2023-2024" readonly>
				<label class="form-label">Grade Level to Enroll</label>
				<select class="form-control" name="s_level">
					<option value="">Grade Level</option>
					<option value="11">Grade 11</option>
					<option value="12">Grade 12</option>
				</select>
				<label class="form-label">General Average:</label>
				<input class="form-control" type="text" name="s_gaverage" placeholder="General Average" required>
			</div>
				<div class="container mt-4 form-check text-center align-self-center ml-5">
					<p>Check the appropriate box only</p>
				<div class="form-check-inline">
					<label class="form-check-label">1. With LRN?</label>
					<label class="form-check-label form-check-inline ml-3">
						<input class="form-check-input" type="radio" name="lrn-opt" value="yes"> Yes
					</label>
					<label class="form-check-label form-check-inline">
						<input class="form-check-input" type="radio" name="lrn-opt" value="no"> No
					</label>
				<div>
					<label class="form-check-label ml-3">2. Returning (Balik Aral)</label>
					<label class="form-check-label form-check-inline">
						<input class="form-check-input ml-2" type="radio" name="s_returning" value="yes"> Yes
					</label>
					<label class="form-check-label form-check-inline">
						<input class="form-check-input" type="radio" name="s_returning" value="no"> No
					</label>
			</div>
		</div>

				</div>
			</div>
		</div>



			<div class="container mt-4 personal-form">
				<div class="row">
					<div class="col-md form-group mt-3">
						<div class="form-group">
						<h1 class="text-center h4">LEARNER INFORMATION</h1>
						<div  class="form-inline mt-4">
					<label class="form-label">PSA Birth Certificate No.(If available upon registration)</label>
					<input class="form-control ml-2" type="text" name="psa_number" placeholder="PSA Number">
					<label class="form-label ml-1">Learner Reference No. (LRN): </label>
					<input class="form-control ml-2" type="text" name="s_lrn" placeholder="LRN NUMBER">
						</div>
						<div class="form-group col-md">
						<table class=" mt-4 table">
							<thead class="thead-dark">
							<tr>
								<th><label class="form-label">Last Name</label></th>
								<th><label class="form-label">First Name</label></th>
								<th><label class="form-label">Middle Name</label></th>
								<th><label class="form-label">Extension Name</label></th>
							</tr>
						</thead>
							<tr>
								<td><input class="form-control" type="text" name="s_lname" placeholder="Last Name"></td>
								<td><input class="form-control" type="text" name="s_fname" placeholder="First Name"></td>
								<td><input class="form-control" type="text" name="s_mname" placeholder="Middle Name"></td>
									<td><input class="form-control" type="text" name="s_ename" placeholder="Extension Name"></td>
							</tr>
						</table>
						<table class="col-md mt-4 table">
							<thead class="thead-dark">
							<tr>
								<th><label class="form-label">Birth Date</label></th>
								<th><label class="form-label">Place of Birth</label></th>
								<th><label class="form-label">Sex</label></th>
								<th><label class="form-label">Age</label></th>
							</tr>
						</thead>
							<tr>
								
								<td><input class="form-control" type="date" name="s_bdate" placeholder="mm/dd/yy"></td>
								<td><input class="form-control" type="text" name="s_pbirth" placeholder="Place of Birth"></td>
								<td><select class="form-control" name="s_sex">
									<option value="">Gender</option>
									<option value="Male">Male</option>
									<option value="Female">Female</option>
								
								</select></td>
								<td><input class="form-control" type="text" name="s_age" placeholder="Age"></td>

							</tr>
						</table>

						<table class="col-md mt-4 table">
							<thead class="thead-dark">
							<tr>
								<th><label class="form-label">Belonging to any Indigenous People (IP) Community/Indigenous Cultural Community?</label></th>
								<th><label class="form-label">If Yes, Please specify:</label></th>
							</tr>
						</thead>
							<tr>
								
								<td>
									<select class="form-control" name="s_ip">
										<option value="">Select</option>
										<option value="Yes">Yes</option>
										<option value="No">No</option>

									</select>
								</td>
								<td><input class="form-control" type="text" name="s_ip_specify" placeholder="Specify"></td>
							</tr>
							<thead class="thead-dark">
							<tr >

								<th><label class="form-label">Is your family a beneficiary of 4Ps?</label></th>
								<th><label class="form-label">If Yes, put the 4Ps Household ID Number below</label></th>

							</tr>
						</thead>

							<tr>
								<td>
									<select class="form-control" name="s_4ps">
										<option value="">Select</option>
										<option value="Yes">Yes</option>
										<option value="No">No</option>

									</select>
								</td>
								<td><input class="form-control" type="text" name="s_4ps_specify" placeholder="Specify"></td>
							</tr>
						</table>

						<table class="col-md form-group table">
							<h1 class="text-center h5 mt-2 bg-secondary p-2 text-white">Current Address</h1>
							<thead class="thead-dark">
							<tr>

								<th><label class="form-label">House No. Street</label></th>
								<th><label class="form-label">Street Name</label></th>
								<th ><label class="form-label">Barangay</label></th>
							</tr>
						</thead>
						<thead class="thead-dark">
							<tr>

								<td><input class="form-control" type="text" name="s_house_no" placeholder="House No. Street"></td>
								<td><input class="form-control" type="text" name="s_street_name" placeholder="Street Name"></td>
								<td><input class="form-control" type="text" name="s_barangay" placeholder="Barangay"></td>
							</tr>
						</thead>
					</table>
							<table class="col-md table">
								<thead class="thead-dark">
							<tr>
								<th><label class="form-label">Municipality / City</label></th>
								<th><label class="form-label">Province</label></th>
								<th><label class="form-label">Country</label></th>
								<th><label class="form-label">Zip Code</label></th>
							</tr>
						</thead>
							<tr>
								<td><input class="form-control" type="text" name="s_municipality" placeholder="Municipality / City"></td>
								<td><input class="form-control" type="text" name="s_province" placeholder="Province"></td>
								<td><input class="form-control" type="text" name="s_country" placeholder="Country"></td>
								<td><input class="form-control" type="text" name="s_zipcode" placeholder="Zip Code"></td>
							</tr>
						</table>
						<div class="container mt-4 table">
							<div class="row">

							<h3 class="h5"> Permanent Address:</h3>
							<div><label class="form-label ml-5 h5">Same with your current address?</label>
									
								<label class="form-check-label form-check-inline ml-3">
						<input class="form-check-input" type="radio" name="lrn-opt" value="yes"> Yes
					</label>
					<label class="form-check-label form-check-inline">
						<input class="form-check-input" type="radio" name="lrn-opt" value="no"> No
					</label>
							</div>



						</div>

						</div>

						<table class="col-md form-group mt-3 table">
							<thead class="thead-dark">
							<tr>
								<th><label class="form-label">House No. Street</label></th>
								<th><label class="form-label">Street Name</label></th>
								<th ><label class="form-label">Barangay</label></th>
							</tr>
						</thead>
							<tr>
								<td><input class="form-control" type="text" name="s_house_no" placeholder="House No. Street"></td>
								<td><input class="form-control" type="text" name="s_street_name" placeholder="Street Name"></td>
								<td><input class="form-control" type="text" name="s_barangay" placeholder="Barangay"></td>
							</tr>
							<table class="col-md">
								<thead class="thead-dark">
							<tr>
								<th><label class="form-label">Municipality / City</label></th>
								<th><label class="form-label">Province</label></th>
								<th><label class="form-label">Country</label></th>
								<th><label class="form-label">Zip Code</label></th>
							</tr>
						</thead>
							<tr>
								<td><input class="form-control" type="text" name="s_municipality" placeholder="Municipality / City"></td>
								<td><input class="form-control" type="text" name="s_province" placeholder="Province"></td>
								<td><input class="form-control" type="text" name="s_country" placeholder="Country"></td>
								<td><input class="form-control" type="text" name="s_zipcode" placeholder="Zip Code"></td>
							</tr>
						</table>
					</table>
						<div class="container mt-4">

							<h3 class="h5 text-center bg-secondary p-2 text-white"> Parents / Guardian's Information</h3>
					</div>

					<table class="col-md mt-4 table">
						<thead class="thead-dark">
							<tr class="col-sm">
								<th><label class="form-label">Last Name</label></th>
								<th><label class="form-label">First Name</label></th>
								<th><label class="form-label">Middle Name</label></th>
								<th><label class="form-label">Contact Number</label></th>
							</tr>
						</thead>
							<tr>
								<td><input class="form-control" type="text" name="s_lname" placeholder="Last Name"></td>
								<td><input class="form-control" type="text" name="s_fname" placeholder="First Name"></td>
									<td><input class="form-control" type="text" name="s_mname" placeholder="Middle Name"></td>
									<td><input class="form-control" type="number" name="s_ename" placeholder="+639123456789"></td>
							</tr>
						</table>

						<div class="container mt-4">

							<h3 class="h5 text-center bg-secondary p-2 text-white"> For Returning Learner (Balik Aral) and Those Who Whill Transfer / Move In</h3>
					</div>

					<table class="col-md mt-3 table">
						<thead class="thead-dark">
						<tr>
							<th><label>Last Grade Level Completed</label></th>
							<th><label>Last School Attented</label></th>
							<th><label>Last School Year Completed</label></th>
							<th><label>School ID</label></th>
						</tr>
					</thead>
						<tr>
								<td><input class="form-control" type="text" name="s_lname" placeholder="Last Grade Level Completed"></td>
								<td><input class="form-control" type="text" name="s_fname" placeholder="Last School Attented"></td>
									<td><input class="form-control" type="text" name="s_mname" placeholder="Last School Year Completed"></td>
									<td><input class="form-control" type="number" name="s_ename" placeholder="304111"></td>
							</tr>
					</table>

						<div class="container mt-4">
							<h3 class="h5 text-center bg-secondary p-2 text-white"> For Learners in Senior High School</h3>
						</div>
						<table class="col-md table">
							<thead class="thead-dark">
							<tr>
								<th><label class="form-label">Semester</label></th>
								<th><label class="form-label">Track</label></th>
						<th><label class="form-label">Strand</label></th>

							</tr>
						</thead>

						<tr>
						<td><label class="form-check-label form-check-inline">
						<input class="form-check-input" type="radio" name="lrn-opt" value="yes"> 1st Semester
					</label>
					<br>
					<label class="form-check-label form-check-inline">
						<input class="form-check-input" type="radio" name="lrn-opt" value="no"> 2nd Semester 
					</label>
						<td><select class="form-control" name="s_level">
					<option value="">Select Track</option>
					<option value="11">Grade 11</option>
					<option value="12">Grade 12</option>
				</select></td>
				<td><select class="form-control" name="s_level">
					<option value="">Select Strand</option>
					<option value="11">Grade 11</option>
					<option value="12">Grade 12</option>
				</select></td>

				</td>
				</tr>
			</table>

			<div class="container">

			<div class="container mt-4">
							<h3 class="h5 text-center bg-secondary p-2 text-white"> For Learners in Senior High School</h3>
						</div>

	
					
					<table class="col-md mt-3 table">
						<thead class="thead-dark">
						<tr>
							<th><label>Last Grade Level Completed</label></th>
							<th><label>Last School Attented</label></th>
							<th><label>Last School Year Completed</label></th>
							<th><label>School ID</label></th>
						</tr>
					</thead>

						<tr>
								<td><input class="form-control" type="text" name="s_lname" placeholder="Last Grade Level Completed"></td>
								<td><input class="form-control" type="text" name="s_fname" placeholder="Last School Attented"></td>
									<td><input class="form-control" type="text" name="s_mname" placeholder="Last School Year Completed"></td>
									<td><input class="form-control" type="number" name="s_ename" placeholder="304111"></td>
							</tr>
					</table>

					<button class="btn btn-xl" type="button" data-toggle="modal" data-target="#myModal">Submit</button>

					<div class="modal" id="myModal">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="model-header">
									<h4>Please click the confirm button to enroll the student.</h4>
								</div>
								<div class="modal-body">
									<button type="submit" class="btn  btn-success btn-lg btn-primary">Confirm</button>
									<button type="button" class="btn btn-danger" data-dismiss="modal">close</button>

								</div>
								

							</div>
						</div>

					</div>



		</div>

			</form>

		</div>
	</div>

</div>
</div>
</body>
</html>
