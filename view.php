<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 8px;
}
tr:nth-child(even){background-color: #f2f2f2}
</style>

                    <div class="container-fluid">
                        <h1 class="mt-4">View User Data</h1>
                        
							<div class="card mb-4">
                            
							<?php 
							include("dbconfig.php");
							$res=mysqli_query($con,"select * from user_info ");	
							?>
                            <div class="card-body">
                                <div class="table-responsive" style="overflow-x:auto;">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>First Name</th>
												<th>Last Name</th>
                                                <th>Email</th>
                                                <th>Date Of Birth</th>
												<th>Mobile</th>
												<th>Designation</th>
                                                <th>Gender</th>
                                                <th>Hobby</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>ID</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Email</th>
                                                <th>Date Of Birth</th>
                                                <th>Mobile</th>
                                                <th>Designation</th>
                                                <th>Gender</th>
                                                <th>Hobby</th>
                                            </tr>
                                        </tfoot>
										<?php 
											while($row=mysqli_fetch_array($res))
											{
												
												
										?>
                                        <tbody>
                                            <tr>
                                               	<td><?php echo $row["id"]; ?></td>			
												<td><?php $fname=strtoupper($row["fname"]); echo $fname; ?></td>					
												<td><?php $lname=strtoupper($row["lname"]); echo $lname; ?></td>
                                                <td><?php echo ($row["email"]); ?></td>
                                                <td><?php echo ($row["dob"]); ?></td>
												<td><?php echo ($row["mobile"]); ?></td>
												<td><?php echo ($row["designation"]); ?></td>
												<td><?php echo ($row["gender"]); ?></td>
                                                <td><?php echo ($row["hobby"]); ?></td>
												
                                            </tr>
											<?php
											}
											?>
                                        </tbody>
                                    </table>
                                </div>
                                </div>
                            </div>
                        </div>
                    </head>
                    </html>
                   