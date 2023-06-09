<?php    $this->load->view('station/header') ; ?>




<div class="right_col" role="main">
<!-- dummy test page yo -->


 <!-- top filters -->
 <div class="row tile_count">
 						
						 <div class="col-md-2 col-sm-4 col-xs-6 ">
						
            </div>
            
						 <div class="col-md-2 col-sm-4 col-xs-6 ">
						 <select class="">
										<option>Choose User Type</option>
										<option>Option one</option>
										<option>Option two</option>
										<option>Option three</option>
										<option>Option four</option>
									</select>
            </div>
						 <div class="col-md-2 col-sm-4 col-xs-6 ">
						 <select class="">
										<option>Choose Station</option>
										<option>Option one</option>
										<option>Option two</option>
										<option>Option three</option>
										<option>Option four</option>
									</select>
            </div>
						 <div class="col-md-2 col-sm-4 col-xs-6 ">
						 <select class="">
										<option>Choose Location</option>
										<option>Option one</option>
										<option>Option two</option>
										<option>Option three</option>
										<option>Option four</option>
									</select>
            </div>
						 <div class="col-md-2 col-sm-4 col-xs-6 ">
						 <select class="">
										<option>Choose Company</option>
										<option>Option one</option>
										<option>Option two</option>
										<option>Option three</option>
										<option>Option four</option>
									</select>
            </div>
						 <div class="col-md-2 col-sm-4 col-xs-6 ">
						 <select class="" id="reportrange">
										<option>Choose Date</option>
										<!-- <option>Option one</option>
										<option>Option two</option>
										<option>Option three</option>
										<option>Option four</option> -->
									</select>
            </div>
            
					
           
          </div>
          <!-- /top filters -->


 <!-- top pans -->
 <div class="row tile_count">
			<div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
				<span class="count_top"><i class="fa fa-building-o"></i> Companies</span>
				<div class="count">250</div>
				<span class="count_bottom"><i class="red">100 Inactive </i> | <a href="#" class="">Manage </a></span>
			</div>
			<div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
				<span class="count_top"><i class="fa fa-tint"></i> Stations</span>
				<div class="count">1,000</div>
				<span class="count_bottom"><i class="red">100 Inactive </i> | <a href="#" class="">Manage </a></span>
			</div>
			<div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
				<span class="count_top"><i class="fa fa-user"></i> Users</span>
				<div class="count ">2,500</div>
				<span class="count_bottom"><i class="red">10 Inactive </i> | <a href="#" class="">Manage </a></span>
			</div>
			<div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
				<span class="count_top"><i class="fa fa-database"></i> Tanks</span>
				<div class="count">2,567</div>
				<span class="count_bottom"><i class="red">40 Inactive </i> | <a href="#" class="">Manage </a></span>
			</div>
			<div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
				<span class="count_top"><i class="fa fa-keyboard-o"></i> Devices</span>
				<div class="count">1,200</div>
				<span class="count_bottom"><i class="red">73 Inactive </i> | <a href="#" class="">Manage </a></span>
			</div>
			<div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
				<span class="count_top"><i class="fa fa-tint"></i> Volume (*1000Ltrs)</span>
				
				<div style="border-bottom: 1px solid #D9DEE4;margin-bottom: 2px"><b>PMS:</b> 7,325,000</div>
				
				<div style="border-bottom: 1px solid #D9DEE4;margin-bottom: 2px"><b>AGO:</b> 6,325,000</div>
				
				<div style="margin-bottom: 3px"><b>DPK:</b> 4,325,,000</div>
				<!-- <span class="count_bottom"><i class="red">73 Inactive </i> | <a href="#" class="">Manage </a></span> -->
			</div>
	</div>
	<!-- /top pans -->

	  <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="dashboard_graph">

                <div class="row x_title">
                  <div class="col-md-6">
                    <h3>Product Volumes <small>Over The Last Seven Days</small></h3>
                  </div>
                  <!-- <div class="col-md-6">
                    <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                      <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                      <span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>
                    </div>
                  </div> -->
                </div>

                <div class="col-md-9 col-sm-9 col-xs-12">
                  <!-- <div id="chart_plot_01" class="demo-placeholder"></div> -->
									<canvas id="myDashLineChart" ></canvas>

                </div>
                <!-- <div class="col-md-1 col-sm-1 col-xs-12 bg-white">
								</div> -->
                <div class="col-md-3 col-sm-3 col-xs-12 bg-white">
                  <div class="x_title">
                    <h2>Asset Status </h2>
                    <div class="clearfix"></div>
                  </div>

                  <div class="col-md-12 col-sm-12 col-xs-6">
                    <div>
                      <p>Companies</p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="80"></div>
                        </div>
                      </div>
                    </div>
                    <div>
                      <p>Stations</p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="60"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 col-sm-12 col-xs-6">
                    <div>
                      <p>Devices</p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="40"></div>
                        </div>
                      </div>
                    </div>
                    <div>
                      <p>Tanks</p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50"></div>
                        </div>
                      </div>
                    </div>
                  </div>
               
							    <div class="col-md-12 col-sm-12 col-xs-6">
                    <div>
                      <p>Users</p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="40"></div>
                        </div>
                      </div>
                    </div>
                    <!-- <div>
                      <p>Tanks</p>
                      <div class="">

										

                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50"></div>
                        </div>

                      </div>
                    </div> -->
                  </div>


					

                </div>

                <div class="clearfix"></div>
              </div>
            </div>

          </div>

<br/>

					<!-- row 3 -->
					<div class="row">


<div class="col-md-4 col-sm-4 col-xs-12">
	<div class="x_panel tile fixed_height_320">
		<div class="x_title">
			<h2>Top 5 Stations by Reorder Frequency</h2>
			<ul class="nav navbar-right panel_toolbox">
				<!-- <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
				</li> -->
				<!-- <li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="#">Settings 1</a>
						</li>
						<li><a href="#">Settings 2</a>
						</li>
					</ul>
				</li> -->
				<!-- <li><a class="close-link"><i class="fa fa-close"></i></a>
				</li> -->
			</ul>
			<div class="clearfix"></div>
		</div>
		<div class="x_content">
			<ul class="list-unstyled msg_list">
				<li  style="max-height:55px">
					<a class="row" style="width:100%">
						<span class="col-md-3 col-sm-3 col-xs-3">
						<i class="fa fa-tint fa-3x"></i>
						</span>
						<span class="col-md-9 col-sm-9 col-xs-9">
							<b>Company</b>: <i class="pull-right">Company</i>
							<br> 
							<b>Station</b>: <i class="pull-right">Station</i>
						</span>
						<!-- <span class="col-md-4 col-sm-4 col-xs-12">
							Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that
						</span> -->
					</a>
				</li>
			</ul>
			
		</div>
	</div>
</div>

<div class="col-md-4 col-sm-4 col-xs-12">
	<div class="x_panel tile fixed_height_320 overflow_hidden">
		<div class="x_title">
			<h2> Online Users</h2>
			<!-- <ul class="nav navbar-right panel_toolbox">
				<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="#">Settings 1</a>
						</li>
						<li><a href="#">Settings 2</a>
						</li>
					</ul>
				</li>
				<li><a class="close-link"><i class="fa fa-close"></i></a>
				</li>
			</ul> -->
			<div class="clearfix"></div>
		</div>
		<div class="x_content">
			<canvas id="myDashOnlineDonut"  style="margin: 15px 10px 10px 0"></canvas>

			<!-- <table class="" style="width:100%">
				
				<tr>
					<td>
						<canvas class="canvasDoughnut" height="140" width="90%" style="margin: 15px 10px 10px 0"></canvas>
					</td>
				
				</tr>
			</table> -->
		</div>
	</div>
</div>


<div class="col-md-4 col-sm-4 col-xs-12">
	<div class="x_panel tile fixed_height_320">
		<div class="x_title">
			<h2> Pending Approvals </h2>
			<!-- <ul class="nav navbar-right panel_toolbox">
				<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="#">Settings 1</a>
						</li>
						<li><a href="#">Settings 2</a>
						</li>
					</ul>
				</li>
				<li><a class="close-link"><i class="fa fa-close"></i></a>
				</li>
			</ul> -->
			<div class="clearfix"></div>
		</div>
		<div class="x_content">

	<ul class="list-unstyled msg_list">
				<li  style="max-height:55px">
					<a class="row" style="width:100%">
						<span class="col-md-3 col-sm-3 col-xs-3">
						<i class="fa fa-building-o fa-3x"></i>
						</span>
						<span class="col-md-9 col-sm-9 col-xs-9">
							<b>Company</b>: <i class="pull-right">Company</i>
						
						</span>
					
					</a>
				</li>
			</ul>

	<!--
		<div class="dashboard-widget-content">
				 <ul class="quick-list">
					<li><i class="fa fa-calendar-o"></i><a href="#">Settings</a>
					</li>
					<li><i class="fa fa-bars"></i><a href="#">Subscription</a>
					</li>
					<li><i class="fa fa-bar-chart"></i><a href="#">Auto Renewal</a> </li>
					<li><i class="fa fa-line-chart"></i><a href="#">Achievements</a>
					</li>
					<li><i class="fa fa-bar-chart"></i><a href="#">Auto Renewal</a> </li>
					<li><i class="fa fa-line-chart"></i><a href="#">Achievements</a>
					</li>
					<li><i class="fa fa-area-chart"></i><a href="#">Logout</a>
					</li>
				</ul> 

				<div class="sidebar-widget">
						<h4>Profile Completion</h4>
						<canvas width="150" height="80" id="chart_gauge_01" class="" style="width: 160px; height: 100px;"></canvas>
						<div class="goal-wrapper">
							<span id="gauge-text" class="gauge-value pull-left">0</span>
							<span class="gauge-value pull-left">%</span>
							<span id="goal-text" class="goal-value pull-right">100%</span>
						</div>
				</div>
			</div> -->
		</div>
	</div>
</div>

</div>


					<!-- /row 3 -->

<br/>

					<!-- row 4 -->
					<div class="row">


<div class="col-md-4 col-sm-4 col-xs-12">
	<div class="x_panel tile fixed_height_320">
		<div class="x_title">
			<h2>Recent Logs</h2>
			
			<div class="clearfix"></div>
		</div>
		<div class="x_content">
			<ul class="list-unstyled msg_list">
				<li>
					<a>
						<span class="image">
						<i class="fa fa-list"></i>
							<!-- <img src="images/img.jpg" alt="img" /> -->
						</span>
						<span>
							<span>John Smith</span>
							<span class="time">3 mins ago</span>
						</span>
						<span class="message">
							Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that
						</span>
					</a>
				</li>
			</ul>
			
		</div>
	</div>
</div>

<div class="col-md-4 col-sm-4 col-xs-12">
	<div class="x_panel tile fixed_height_320 overflow_hidden">
		<div class="x_title">
			<h2> Most Active Users</h2>
		
			<div class="clearfix"></div>
		</div>
		<div class="x_content">
			<ul class="list-unstyled msg_list">
				<li  style="max-height:55px">
					<a class="row" style="width:100%">
						<span class="col-md-3 col-sm-3 col-xs-3">
						<i class="fa fa-user fa-3x"></i>
						</span>
						<span class="col-md-9 col-sm-9 col-xs-9">
							<b>Company</b>: <i class="pull-right">Company</i>
							<br>
							<b>User</b>: <i class="pull-right">User</i>
						
						</span>
					
					</a>
				</li>
			</ul>
		</div>
	</div>
</div>


<div class="col-md-4 col-sm-4 col-xs-12">
	<div class="x_panel tile fixed_height_320">
		<div class="x_title">
			<h2>  Faulty/Inactive Devices </h2>
		
			<div class="clearfix"></div>
		</div>
		<div class="x_content">

		<ul class="list-unstyled msg_list">
				<li  style="max-height:55px">
					<a class="row" style="width:100%">
						<span class="col-md-3 col-sm-3 col-xs-3">
						<span class="badge bg-red">6</span>
						<i class="fa fa-keyboard-o fa-3x"></i>

						</span>
						<span class="col-md-7 col-sm-7 col-xs-7">
							<b>Company</b>: <i class="pull-right">Company</i>
							<br>
							<b>Station</b>: <i class="pull-right">Station</i>
						
						</span>
						<span class="col-md-2 col-sm-2 col-xs-2">
						<i style="font-size:24px">D1</i>
						</span>
					
					</a>
				</li>
			</ul>

	<!--
		<div class="dashboard-widget-content">
				 <ul class="quick-list">
					<li><i class="fa fa-calendar-o"></i><a href="#">Settings</a>
					</li>
					<li><i class="fa fa-bars"></i><a href="#">Subscription</a>
					</li>
					<li><i class="fa fa-bar-chart"></i><a href="#">Auto Renewal</a> </li>
					<li><i class="fa fa-line-chart"></i><a href="#">Achievements</a>
					</li>
					<li><i class="fa fa-bar-chart"></i><a href="#">Auto Renewal</a> </li>
					<li><i class="fa fa-line-chart"></i><a href="#">Achievements</a>
					</li>
					<li><i class="fa fa-area-chart"></i><a href="#">Logout</a>
					</li>
				</ul> 

				<div class="sidebar-widget">
						<h4>Profile Completion</h4>
						<canvas width="150" height="80" id="chart_gauge_01" class="" style="width: 160px; height: 100px;"></canvas>
						<div class="goal-wrapper">
							<span id="gauge-text" class="gauge-value pull-left">0</span>
							<span class="gauge-value pull-left">%</span>
							<span id="goal-text" class="goal-value pull-right">100%</span>
						</div>
				</div>
			</div> -->
		</div>
	</div>
</div>

</div>


					<!-- /row 4 -->


</div>


<?php    $this->load->view('station/footer') ; ?>
<?php    $this->load->view('station/scriptDashboard') ; ?>
