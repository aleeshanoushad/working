<?php include 'header.php'; ?>
<?php include 'sidebar-admin.php'; ?>


<section id="main-content">
	<div class="row">
		<div class="col-lg-12">
			<div class="card">
				<div class="card-body">
					<!-- tab start-->
					<ul class="nav nav-tabs customtab2" role="tablist">
						<li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#basic" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Basic Details</span></a> </li>

						<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#professional" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Professional Details</span></a> </li>

						<!-- <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#messages7" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Messages</span></a> </li> -->
					</ul>
					<!-- Tab panes -->
					<div class="tab-content">
						<div class="tab-pane active" id="basic" role="tabpanel">
							<div class="p-20">
								
								<div class="form-validation">
									<form class="form-valide" action="<?php echo base_url(); ?>admin/addingprofile" method="post">
										<div class="form-group row">
											<label class="col-lg-2 col-form-label" for="val-username">First Name <span class="text-danger">*</span></label>
											<div class="col-lg-8">
												<input type="text" class="form-control input-focus" id="firstname" name="firstname" placeholder="Enter a First Name..">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-2 col-form-label" for="val-username">Last Name <span class="text-danger">*</span></label>
											<div class="col-lg-8">
												<input type="text" class="form-control input-focus" id="lastname" name="lastname" placeholder="Enter a Last Name..">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-2 col-form-label" for="val-email">Username/Email <span class="text-danger">*</span></label>
											<div class="col-lg-8">
												<input type="text" class="form-control input-focus" value="" id="username" name="username" placeholder="Your valid Username/Email..">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-2 col-form-label" for="val-username">Address <span class="text-danger">*</span></label>
											<div class="col-lg-8">
												<input type="text" class="form-control input-focus" id="Address1" name="Address1" placeholder="Enter a Address..">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-2 col-form-label" for="val-username">&nbsp;&nbsp;&nbsp;</label>
											<div class="col-lg-8">
												<input type="text" class="form-control input-focus" id="Address2" name="Address2" >
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-2 col-form-label " for="val-select2">District <span class="text-danger">*</span></label>
											<div class="col-lg-8">
												<select class="js-select2 form-control input-focus" id="district" name="district" style="width: 100%;" data-placeholder="Choose one..">
													<option value="">Select Value</option>
													<option value="Alappuzha">Alappuzha</option>
													<option value="Ernakulam">Ernakulam</option>
													<option value="Kottayam">Kottayam</option>
													<option value="Palakkad">Palakkad</option>
													<option value="Kannur">Kannur</option>
													<option value="Kollam">Kollam</option>
													<option value="Kozhikode">Kozhikode</option>
													<option value="Malappuram">Malappuram</option>
													<option value="Thiruvanathapuram">Thiruvanathapuram</option>
													<option value="Kasargod">Kasargod</option>
													<option value="Thrissur">Thrissur</option>
													<option value="Wayanad">Wayanad</option>
													<option value="Idukki">Idukki</option>
													<option value="Pathanamthitta">Pathanamthitta</option>
												</select>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-2 col-form-label " for="val-phoneus">Phone<span class="text-danger">*</span></label>
											<div class="col-lg-8">
												<input type="text" class="form-control input-focus" id="phone" name="phone" >
											</div>
										</div>
										<div class="form-group row">
											<div class="col-lg-8 ml-auto">
												<button type="" data-toggle="tab" href="#professional"  class="btn btn-primary">Next</button>
											</div>
										</div>
									</form>
								</div>

							</div>
						</div>

						<div class="tab-pane  p-20" id="professional" role="tabpanel">
							<div class="form-validation">
								<form class="form-valide" action="<?php echo base_url(); ?>admin/" method="post">

									<div class="form-group row">
										<label class="col-lg-2 col-form-label" for="val-username">Education<span class="text-danger">*</span></label>
										<div class="col-lg-8">
											<select class="form-control" id="val-skill" name="val-skill">
												<option value="">Please select</option>
												<option value="B-Tech">B-Tech</option>
												<option value="B-Com">B-Com</option>
												<option value="Bsc">Bsc</option>
										<!-- <option value="angular">Angular</option>
										<option value="angular">React</option>
										<option value="vuejs">Vue.js</option>
										<option value="ruby">Ruby</option>
										<option value="php">PHP</option>
										<option value="asp">ASP.NET</option>
										<option value="python">Python</option>
										<option value="mysql">MySQL</option> -->
									</select>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-lg-2 col-form-label" for="val-username">Occupation <span class="text-danger">*</span></label>
								<div class="col-lg-8">
									<input type="text" class="form-control input-focus" id="val-username" name="val-username" placeholder="Enter a Occupation..">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-lg-2 col-form-label" for="val-username">Company Name <span class="text-danger">*</span></label>
								<div class="col-lg-8">
									<input type="text" class="form-control input-focus" id="val-username" name="val-username" placeholder="Enter a Company Name..">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-lg-4 col-form-label"><a data-toggle="modal" data-target="#modal-terms" href="#">Terms &amp; Conditions</a> <span class="text-danger">*</span></label>
								<div class="col-lg-8">
									<label class="css-control css-control-primary css-checkbox" for="val-terms">
										<input type="checkbox" class="css-control-input" id="val-terms" name="val-terms" value="1">
										<span class="css-control-indicator"></span> I agree to the terms
									</label>
								</div>
							</div>
							<div class="form-group row">
								<div class="col-lg-8 ml-auto">
									<button type="submit" class="btn btn-primary">Submit</button>
								</div>
							</div>
						</form>

					</div>
				</div>


					<!-- <div class="form-group row">
												<label class="col-lg-2 col-form-label" for="val-username"> <span class="text-danger">*</span></label>
												<div class="col-lg-8">
													<input type="text" class="form-control input-focus" id="val-username" name="val-username" placeholder="Enter a username..">
												</div>
											</div>
											 -->						<!-- <div class="form-group row">
							<label class="col-lg-2 col-form-label" for="val-password">Password <span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<input type="password" class="form-control input-focus" id="val-password" name="val-password" placeholder="Choose a safe one..">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-2 col-form-label" for="val-confirm-password">Confirm Password <span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<input type="password" class="form-control input-focus" id="val-confirm-password" name="val-confirm-password" placeholder="..and confirm it!">
							</div>
						</div> -->
						
						<!-- <div class="form-group row">
							<label class="col-lg-2 col-form-label" for="val-select2-multiple">Select2 Multiple <span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<select class="js-select2 form-control" id="val-select2-multiple" name="val-select2-multiple" style="width: 100%;" data-placeholder="Choose at least two.." multiple>
									<option></option>
									<option value="html">HTML</option>
									<option value="css">CSS</option>
									<option value="javascript">JavaScript</option>
									<option value="angular">Angular</option>
									<option value="angular">React</option>
									<option value="vuejs">Vue.js</option>
									<option value="ruby">Ruby</option>
									<option value="php">PHP</option>
									<option value="asp">ASP.NET</option>
									<option value="python">Python</option>
									<option value="mysql">MySQL</option>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="val-suggestions">Suggestions <span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<textarea class="form-control" id="val-suggestions" name="val-suggestions" rows="5" placeholder="What would you like to see?"></textarea>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="val-skill">Best Skill <span class="text-danger">*</span></label>
							<div class="col-lg-6">
								<select class="form-control" id="val-skill" name="val-skill">
									<option value="">Please select</option>
									<option value="html">HTML</option>
									<option value="css">CSS</option>
									<option value="javascript">JavaScript</option>
									<option value="angular">Angular</option>
									<option value="angular">React</option>
									<option value="vuejs">Vue.js</option>
									<option value="ruby">Ruby</option>
									<option value="php">PHP</option>
									<option value="asp">ASP.NET</option>
									<option value="python">Python</option>
									<option value="mysql">MySQL</option>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="val-currency">Currency <span class="text-danger">*</span></label>
							<div class="col-lg-6">
								<input type="text" class="form-control" id="val-currency" name="val-currency" placeholder="$21.60">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="val-website">Website <span class="text-danger">*</span></label>
							<div class="col-lg-6">
								<input type="text" class="form-control" id="val-website" name="val-website" placeholder="http://example.com">
							</div>
						</div>
						
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="val-digits">Digits <span class="text-danger">*</span></label>
							<div class="col-lg-6">
								<input type="text" class="form-control" id="val-digits" name="val-digits" placeholder="5">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="val-number">Number <span class="text-danger">*</span></label>
							<div class="col-lg-6">
								<input type="text" class="form-control" id="val-number" name="val-number" placeholder="5.0">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="val-range">Range [1, 5] <span class="text-danger">*</span></label>
							<div class="col-lg-6">
								<input type="text" class="form-control" id="val-range" name="val-range" placeholder="4">
							</div>
						</div> -->
						
					
				</div>
			</div>
		</div>
	</div>
</div>
</section>



<?php include 'footer.php'; ?>
