<?php    $this->load->view('company/header') ; ?>




<div class="right_col" role="main">
<!-- dummy test page yo -->


  <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Stations <small>Manage Stations Here</small></h2>
                    <ul class="nav navbar-right  pull-right">
					<li class="pull-right" id="addnew"><a style="padding:5px; " class="text-primary" href="#" onclick="addNew()"><i class="fa fa-plus-circle"></i> Add New Station</a></li>
					<li class="pull-right "><a style="padding:5px;" class="text-warning" href="#" onclick="loadStattable()"><i class="fa fa-refresh"></i> Refresh</a></li>


										 <!-- <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li> -->
                      <!-- <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a> -->
                      <!-- <li><i class="fa fa-chevron-up"></i> -->
                      <!-- </li> -->
					
					  <!-- <li class="dropdown pull-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li id="addnew"><a href="#" onclick="addNew()"><i class="fa fa-plus-circle"></i> Add New Station</a>
                          </li>
                          <li><a href="#" onclick="loadStattable()"><i class="fa fa-refresh"></i> Refresh</a>
                          </li>
                        </ul>
                      </li> -->
                     
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="tblstations" class="table table-hover">
											<thead> 
													<tr>
													<th>Name <small>(Links to Controllers)</small></th>
													<!-- <th>Email</th> -->
													<th>Company</th>
													<th>Nickname</th>
													<th>Location</th>
													<th>Address</th>
													<th>State</th>

													<th class="text-center">Actions</th>
													</tr>
													
											</thead>
                      <tbody>
                     
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>

              <div class="clearfix"></div>


</div>




<!-- ===========================Edit Modal============================ -->
<div class="modal" id="myModal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
	  <b style="font-size:150%"  class="modal-title">View/Edit Station</b>
        <button type="button" class="close" data-dismiss="modal" onclick="$('#myModal').modal('hide')">&times;</button>
      </div>

      <!--  Edit Modal body -->		
			<div class="modal-body">
				
				<div class="card-body">
                <form method="POST">
							
				<div class="row">
						<div class="form-group col-md-4 col-sm-4 col-xs-12">
											<!-- <label for="cname">Company Name</label> -->
											<!-- <input id="acname" type="text" placeholder="Company Name" class="form-control" name="acname"> -->
				      	  <select id='coys' class="form-control">
                            <!-- <option>Choose option</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option> -->
                          </select>
										
											
						</div>

					

						<div class="form-group col-md-4 col-sm-4 col-xs-12">
							<!-- <label for="cpnum">Phone Number</label> -->
							<input id="name" type="text" placeholder="Station Name" class="form-control" name="name">

							
						</div>

						<div class="form-group col-md-4 col-sm-4 col-xs-12">
							<!-- <label for="cpnum">Phone Number</label> -->
							<input id="nick" type="text" placeholder="Station Nickname" class="form-control" name="nick">
							
						</div>
					</div>

					<div class="clearfix"></div>


				
					<div class="row">
						<div class="form-group col-md-4 col-sm-4 col-xs-12">
								<!-- <label for="cpnum">Phone Number</label> -->
								<input id="loc" type="text" placeholder="Location" class="form-control" name="loc">

								
							</div>
						<div class="form-group col-md-4 col-sm-4 col-xs-12">
								<!-- <label for="cpnum">Phone Number</label> -->
								<input id="long" type="number" placeholder="Longitude" class="form-control" name="long">

								
							</div>
						<div class="form-group col-md-4 col-sm-4 col-xs-12">
								<!-- <label for="cpnum">Phone Number</label> -->
								<input id="lat" type="number" placeholder="Latitude" class="form-control" name="lat">

								
							</div>
										
					</div>


              <div class="clearfix"></div>


                  <div class="row">					
					
						<div class="form-group col-md-6 col-sm-6 col-xs-12">
							<!-- <label for="pemail">Pre-Alarm Email</label> -->
							<input id="add" placeholder="Address" type="text" class="form-control" name="add">
						
							
						</div>
						<div class="form-group col-md-6 col-sm-6 col-xs-12">
							<!-- <label for="asemail">Alarm Start Email</label> -->
							<input id="state" placeholder="State" type="text" class="form-control" name="state">
						
							
						</div>
					
					</div>


              <div class="clearfix"></div>


				<div class="row">
					<div class="form-group col-md-4 col-sm-4 col-xs-12">
							<!-- <label for="cpnum">Phone Number</label> -->
							<input id="pms" type="number" placeholder="PMS Threshold" class="form-control" name="pms">

							
						</div>
					<div class="form-group col-md-4 col-sm-4 col-xs-12">
							<!-- <label for="cpnum">Phone Number</label> -->
							<input id="dpk" type="number" placeholder="DPK Threshold" class="form-control" name="dpk">

							
						</div>
					<div class="form-group col-md-4 col-sm-4 col-xs-12">
							<!-- <label for="cpnum">Phone Number</label> -->
							<input id="ago" type="number" placeholder="AGO Threshold" class="form-control" name="ago">

							
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
							<a id="btnAdd" onclick="editBtnClick()" type="submit" class="btn btn-primary btn-block">
							<!-- <a id="btn" type="submit" class="btn btn-primary btn-block"> -->
							Save Changes												
							</a>
						</div>

						<div class="form-group col-md-4 col-sm-4 col-xs-12">
						</div>

                  </div>
                </form>
              </div>




			</div>
      <!--  Edit Modal body -->

    

    </div>
  </div>
</div>
<!-- ======================================================= -->

<!-- ===========================Add Modal============================ -->
<div class="modal" id="myAddModal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
	  <b style="font-size:150%"  class="modal-title">Add A Station</b>
        <button type="button" class="close" data-dismiss="modal" onclick="$('#myAddModal').modal('hide')">&times;</button>
      </div>

      <!--  Add Modal body -->		
			<div class="modal-body">
				
				<div class="card-body">
                <form method="POST">
							
					<div class="row">
										<div class="form-group col-md-4 col-sm-4 col-xs-12">
											<!-- <label for="cname">Company Name</label> -->
											<!-- <input id="acname" type="text" placeholder="Company Name" class="form-control" name="acname"> -->
				      	<select id='acoys' class="form-control">
                            <!-- <option>Choose option</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option> -->
                          </select>
										
											
										</div>

					

						<div class="form-group col-md-4 col-sm-4 col-xs-12">
							<!-- <label for="cpnum">Phone Number</label> -->
							<input id="aname" type="text" placeholder="Station Name" class="form-control" name="aname">

							
						</div>

						<div class="form-group col-md-4 col-sm-4 col-xs-12">
							<!-- <label for="cpnum">Phone Number</label> -->
							<input id="anick" type="text" placeholder="Station Nickname" class="form-control" name="anick">

							
						</div>
					</div>

					<div class="clearfix"></div>


				
					<div class="row">
						<div class="form-group col-md-4 col-sm-4 col-xs-12">
								<!-- <label for="cpnum">Phone Number</label> -->
								<input id="aloc" type="text" placeholder="Location" class="form-control" name="aloc">

								
							</div>
						<div class="form-group col-md-4 col-sm-4 col-xs-12">
								<!-- <label for="cpnum">Phone Number</label> -->
								<input id="along" type="number" placeholder="Longitude" class="form-control" name="along">

								
							</div>
						<div class="form-group col-md-4 col-sm-4 col-xs-12">
								<!-- <label for="cpnum">Phone Number</label> -->
								<input id="alat" type="number" placeholder="Latitude" class="form-control" name="alat">

								
							</div>
										
					</div>


              <div class="clearfix"></div>


                  <div class="row">
										
									
										<div class="form-group col-md-6 col-sm-6 col-xs-12">
											<!-- <label for="pemail">Pre-Alarm Email</label> -->
											<input id="aadd" placeholder="Address" type="text" class="form-control" name="aadd">
										
											
										</div>
										<div class="form-group col-md-6 col-sm-6 col-xs-12">
											<!-- <label for="asemail">Alarm Start Email</label> -->
											<input id="astate" placeholder="State" type="text" class="form-control" name="astate">
										
											
										</div>
									
									</div>


              <div class="clearfix"></div>


				<div class="row">
					<div class="form-group col-md-4 col-sm-4 col-xs-12">
							<!-- <label for="cpnum">Phone Number</label> -->
							<input id="apms" type="number" placeholder="PMS Threshold" class="form-control" name="apms">

							
						</div>
					<div class="form-group col-md-4 col-sm-4 col-xs-12">
							<!-- <label for="cpnum">Phone Number</label> -->
							<input id="adpk" type="number" placeholder="DPK Threshold" class="form-control" name="adpk">

							
						</div>
					<div class="form-group col-md-4 col-sm-4 col-xs-12">
							<!-- <label for="cpnum">Phone Number</label> -->
							<input id="aago" type="number" placeholder="AGO Threshold" class="form-control" name="aago">

							
						</div>
					
									
				</div>


            


						             

									 <div class="ln_solid"></div>

                 

									<div class="row">
										
										<div class="form-group col-md-4 col-sm-4 col-xs-12">
										</div>
									
										<div class="form-group col-md-4 col-sm-4 col-xs-12">
											<a id="btnAdd" onclick="addBtnClick()" type="submit" class="btn btn-primary btn-block">
											<!-- <a id="btn" type="submit" class="btn btn-primary btn-block"> -->
											Submit												
											</a>
										</div>

										<div class="form-group col-md-4 col-sm-4 col-xs-12">
										</div>

                  </div>
                </form>
              </div>




			</div>
      <!--  Add Modal body -->

    

    </div>
  </div>
</div>
<!-- ======================================================= -->


<?php    $this->load->view('company/footer') ; ?>
<?php    $this->load->view('company/scriptStationmgt') ; ?>
