<form action="#" method="post">
	First Name:- <input type="textbox" name="fname" /><br/><br/>
	Last Name:- <input type="textbox" name="lname" /><br/><br/>
	Email:- <input type="email" name="email" /><br/><br/>
	Date of Birth:- <input type="textbox" onfocus="(this.type='date')" onblur="(this.type='text')" name="dob"><br/><br/>
	Mobile:- <input type="text" pattern="[6789][0-9]{9}" class="form-control" placeholder="Contact Number *" name="mobile" minlength="10" maxlength="10" required><br/><br/>
	Designation:- <input type="textbox" name="designation" /><br/><br/>
	Gender:- 
	Female <input type="radio" name="gender" value="Female"/>
	Male <input type="radio" name="gender" value="Male" /> <br/><br/>
	Hobby:- 
		Singing <input type="checkbox" name="hobby[]" value="Singing"/>
		Dancing <input type="checkbox" name="hobby[]" value="Dancing"/>
		Cricket <input type="checkbox" name="hobby[]" value="Cricket"/>
		Badminton <input type="checkbox" name="hobby[]" value="Badminton"/>
	<br/><br/>
	<input type="submit" name="submit"/>

<?php
                                                       
                                                        if(isset($_POST["submit"]))
                                                        {
                                                                include("dbconfig.php");
                                                                $fname=$_POST["fname"];
                                                                $lname=$_POST["lname"];
                                                               
                                                                $email=$_POST["email"];
                                                                $dob=$_POST["dob"];
                                                                $mobile=$_POST['mobile'];
                                                                $designation=$_POST['designation'];
                                                                $gender=$_POST["gender"];
                                                                $hobby=$_POST["hobby"];
                                                                $hob=implode(",",$hobby);
                                                                
                                                                    $sql="insert into user_info(fname,lname,email,dob,mobile,designation,gender,hobby) values('$fname','$lname','$email','$dob','$mobile','$designation','$gender','$hob')";
                                                                    mysqli_query($con,$sql);
																																		
																																		if(mysqli_affected_rows($con)>0)
                                                                    echo "
                                                                     <div style='text-align:center;'>
                                                                     <button id='info-message' type='button' class='btn btn-success'>Form Submitted Successfully</button>
                                                                        <script>
                                                                            setTimeout(function(){
                                                                        document.getElementById('info-message').style.display = 'none';
                                                                                /* or
                                                                            var item = document.getElementById('info-message')
                                                                                item.parentNode.removeChild(item); 
                                                                                
                                                                                    */
                                                                        }, 8000);
                                                                        
                                                                            </script>
                                                                    </div>";
                                                                else
                                                                    echo "
                                                                    <div style='text-align:center;'>
                                                                     <button style='align:center;' id='info-message' type='button' class='btn btn-danger'>Form Not Submitted</button>
                                                                        <script>
                                                                            setTimeout(function(){
                                                                        document.getElementById('info-message').style.display = 'none';
                                                                                /* or
                                                                            var item = document.getElementById('info-message')
                                                                                item.parentNode.removeChild(item); 
                                                                                
                                                                                    */
                                                                        }, 8000);
                                                                        
                                                                            </script>
                                                                    </div>";




                                                                }
                                                                
                                                                

                                                        
  ?>


</form>


   