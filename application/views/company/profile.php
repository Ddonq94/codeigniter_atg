<?php    $this->load->view('company/header') ; ?>




<div class="right_col" role="main">
<!-- dummy test page yo -->



    <div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
			<h2><i class="fa fa-bars"></i> Profile <small>User Profile Settings</small></h2>
			<ul class="nav navbar-right panel_toolbox">
				
			</ul>
			<div class="clearfix"></div>
			</div>
			<div class="x_content">


			<!-- =============================================================== -->
			<div class="row">
						<div class="form-group col-md-4 col-sm-4 col-xs-12">
								<select id='userType' class="form-control">
								<option value="">Choose Type</option>
								<!-- <option value="admin">Super Admin</option> -->
								<option value="companyAdmin">Company Admin</option>
								<option value="stationAdmin">Station Admin</option>
								<!-- <option value="regUser">Regular Super User</option> -->
								<option value="regCoyUser">Regular Company User</option>
								<option value="regStatUser">Regular Station User</option>
								</select>
											
							</div>

					

						<div class="form-group col-md-4 col-sm-4 col-xs-12">
							<!-- <label for="cpnum">Phone Number</label> -->
							<input id="fname" type="text" placeholder="First Name" class="form-control" name="fname">

							
						</div>

						<div class="form-group col-md-4 col-sm-4 col-xs-12">
								<!-- <label for="cpnum">Phone Number</label> -->
								<input id="lname" type="text" placeholder="Last Name" class="form-control" name="lname">

								
							</div>
							<!-- <div class="form-group col-md-4 col-sm-4 col-xs-12">
											<input id="uemail" placeholder="Email Address" type="email" class="form-control" name="uemail">
										
											
										</div> -->

					</div>



					<div class="clearfix" style="margin-top:20px"></div>


						<div class="row">
							<div class="form-group col-md-4 col-sm-4 col-xs-12">
											<!-- <label for="remail">Reorder Email</label> -->
											<input id="uemail" placeholder="Email Address" type="email" class="form-control" name="uemail">
										
											
										</div>

							<div class="form-group col-md-4 col-sm-4 col-xs-12">
								<!-- <label for="remail">Reorder Email</label> -->
								<input id="pword" placeholder="Password" type="password" class="form-control" name="pword">
							
								
							</div>
							<div class="form-group col-md-4 col-sm-4 col-xs-12">
								<!-- <label for="temail">Threshold Email</label> -->
								<input id="cpword" placeholder="Confirm Password" type="password" class="form-control" name="cpword">
							
								
							</div>

						</div>

					<div class="clearfix" style="margin-top:20px"></div>

						<div class="row">
							

							<div id="coysDiv" class="form-group col-md-6 col-sm-6 col-xs-12">
								<select id='coys' class="form-control">
															
								</select>							
								
							</div>
							<div class="form-group col-md-6 col-sm-6 col-xs-12">
								<select id='stations' class="form-control">
							
								</select>
								
							</div>

						</div>




            
									<div class="row">
										
									
									
										<div class="form-group col-md-12 col-sm-12 col-xs-12">
											<!-- <label for="nuemail">New User Email</label> -->
											<input id="keyhidden" placeholder="keyhidden" type="hidden" class="form-control" name="keyhidden">
										
											
										</div>
										
									
									</div>


						             

									 <div class="ln_solid"></div>

                 

									<div class="row">
										
										<div class="form-group col-md-4 col-sm-4 col-xs-12">
										</div>
									
										<div class="form-group col-md-4 col-sm-4 col-xs-12">
											<a id="btnAddp" onclick="editBtnClick()" type="submit" class="btn btn-primary btn-block">
											<!-- <a id="btn" type="submit" class="btn btn-primary btn-block"> -->
											Save Changes												
											</a>
										</div>

										<div class="form-group col-md-4 col-sm-4 col-xs-12">
										</div>

                  </div>
			<!-- =============================================================== -->

			</div>
		</div>
	</div>
					


</div>


<?php    $this->load->view('company/footer') ; ?>
<?php    $this->load->view('company/scriptProfmgt') ; ?>

