<!DOCTYPE html>
<html>
  <head>
    <title>Michael Phandera</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- jQuery UI -->
    <link href="https://code.jquery.com/ui/1.10.3/themes/redmond/jquery-ui.css" rel="stylesheet" media="screen">

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="css/styles.css" rel="stylesheet">

    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link href="vendors/form-helpers/css/bootstrap-formhelpers.min.css" rel="stylesheet">
    <link href="vendors/select/bootstrap-select.min.css" rel="stylesheet">
    <link href="vendors/tags/css/bootstrap-tags.css" rel="stylesheet">

    <link href="css/forms.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="#">Michael Phandera</a></h1>
	              </div>
	           </div>
	           <div class="col-md-5">
	              <div class="row">
	                <div class="col-lg-12">
	                </div>
	              </div>
	           </div>
	           <div class="col-md-2">
	              <div class="navbar navbar-inverse" role="banner">

	              </div>
	           </div>
	        </div>
	     </div>
	</div>

    <div class="page-content">
    	<div class="row">
		  <div class="col-md-2">
		  	<div class="sidebar content-box" style="display: block;">
                <ul class="nav" style="height: 90%;">
                    <!-- Main menu -->
                    <li><a href="forms.php"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>

                        </ul>
                    </li>
                </ul>
             </div>
		  </div>
		  <div class="col-md-10">
				<div class="row">
					<div class="col-md-12">
						<div class="content-box-large">
		  				<div class="panel-heading">
							<div class="panel-title">RESUME ENTRY</div>

							<div class="panel-options">
								<a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
								<a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
							</div>
						</div>
		  				<div class="panel-body">
		  					<div id="rootwizard">
								<div class="navbar">
								  <div class="navbar-inner">
								    <div class="container">
								 </div>
								  </div>
								</div>
								<div class="tab-pane active" id="tab1">
									<form class="form-horizontal" role="form"  method="post" id="update" enctype="multipart/form-data">
										<label>Summary</label>
										<div class="form-group">
										  <label class="col-sm-2 control-label">Summary</label>
										  <div class="col-sm-10">
											<textarea class="form-control" name="summary" placeholder="update your summary" rows="3"></textarea>
										    <br>
											<button class="btn btn-primary btn-sm">update</button>
										</div>
										</div>
										<hr>
									  </form>
								  </div>
								<hr>
								<div class="tab-content">
								    <div class="tab-pane active" id="tab1">
								      <form class="form-horizontal" role="form" method="post" id="education" enctype="multipart/form-data">
										  <label>Education</label>
										  <div class="form-group">
										    <label for="inputEmail3" class="col-sm-2 control-label">Course</label>
										    <div class="col-sm-10">
										      <input type="ext" class="form-control" name="pg" id="inputEmail3" placeholder="Name of course">
										    </div>
										  </div>
										  <div class="form-group">
										    <label for="inputPassword3" class="col-sm-2 control-label">Duration</label>
										    <div class="col-sm-10">
										      <input type="text" class="form-control" name="duration" id="inputPassword3" placeholder="period from start to finish">
										    </div>
										  </div>
										  <div class="form-group">
										    <label for="inputPassword3" class="col-sm-2 control-label">College Name</label>
										    <div class="col-sm-10">
										      <input type="text" class="form-control" name="college" id="inputPassword3" placeholder="Name of college">
											  <br>
											  <button class="btn btn-success btn-sm">Submit</button>
											</div>
										  </div>
										  <hr>
										</form>
								    </div>
									<div class="tab-pane active" id="tab1">
										<form class="form-horizontal" role="form" method="post" id="experience" enctype="multipart/form-data">
											<label>Experience</label>
											<div class="form-group">
											  <label for="inputEmail3" class="col-sm-2 control-label">Company Name</label>
											  <div class="col-sm-10">
												<input type="text" class="form-control" name="company" id="inputEmail3" placeholder="Enter Company Name">
											  </div>
											</div>
											<div class="form-group">
											  <label for="inputPassword3" class="col-sm-2 control-label">Position</label>
											  <div class="col-sm-10">
												<input type="text" class="form-control" name="position" id="inputPassword3" placeholder="Your Role">
											  </div>
											</div>
											<div class="form-group">
												<label for="inputPassword3" class="col-sm-2 control-label">Period</label>
												<div class="col-sm-10">
												  <input type="text" class="form-control" name="period" id="inputPassword3" placeholder="Your Period">
												</div>
											  </div>
											  <div class="form-group">
												<label for="inputPassword3" class="col-sm-2 control-label">Duty</label>
												<div class="col-sm-10">
												  <input type="text" class="form-control" name="duties" id="inputPassword3" placeholder="Your Duty 1">
												</div>
											  </div>
											  <div class="form-group">
												<label for="inputPassword3" class="col-sm-2 control-label">Duty</label>
												<div class="col-sm-10">
												  <input type="text" class="form-control" name="duties1" id="inputPassword3" placeholder="Your Duty 2">
												</div>
											  </div>
											  <div class="form-group">
												<label for="inputPassword3" class="col-sm-2 control-label">Duty</label>
												<div class="col-sm-10">
												  <input type="text" class="form-control" name="duties2" id="inputPassword3" placeholder="Your Duty 3">
												</div>
											  </div>
											  <div class="form-group">
												<label for="inputPassword3" class="col-sm-2 control-label">Duty</label>
												<div class="col-sm-10">
												  <input type="text" class="form-control" name="duties3" id="inputPassword3" placeholder="Your Duty 4">
												</div>
											  </div>
											  <div class="form-group">
												<label for="inputPassword3" class="col-sm-2 control-label">Duty</label>
												<div class="col-sm-10">
												  <input type="text" class="form-control" name="duties4" id="inputPassword3" placeholder="Your Duty 5">
												</div>
											  </div>
											  <div class="form-group">
												<label for="inputPassword3" class="col-sm-2 control-label">Duty</label>
												<div class="col-sm-10">
												  <input type="text" class="form-control" name="duties5" id="inputPassword3" placeholder="Your Duty 6">
												</div>
											  </div>
											  <div class="form-group">
												<label for="inputPassword3" class="col-sm-2 control-label">Duty</label>
												<div class="col-sm-10">
												  <input type="text" class="form-control" name="duties6" id="inputPassword3" placeholder="Your Duty 7">
												</div>
											  </div>
											  <div class="form-group">
												<label for="inputPassword3" class="col-sm-2 control-label">Duty</label>
												<div class="col-sm-10">
												  <input type="text" class="form-control" name="duties7" id="inputPassword3" placeholder="Your Duty 8">
												</div>
											  </div>
											  <div class="form-group">
												<label for="inputPassword3" class="col-sm-2 control-label">Duty</label>
												<div class="col-sm-10">
												  <input type="text" class="form-control" name="duties8" id="inputPassword3" placeholder="Your Duty 8">
												</div>
											  </div>
											<div class="form-group">
											  <label class="col-sm-2 control-label">Duty</label>
											  <div class="col-sm-10">
												<textarea class="form-control" name="duties9" placeholder="Your Duties " rows="3"></textarea>
											    <br>
												<button class="btn btn-success btn-sm">Submit</button>
											</div>
											</div>
											<hr>
										  </form>
									  </div>
								</div>
							</div>
		  				</div>
		  			</div>
					</div>
				</div>


	  		<!--  Page content -->
		  </div>
		</div>
    </div>

    <footer>
         <div class="container">

            <div class="copy text-center">
               Copyright 2021 <a href='#'>Michael Phandera</a>
            </div>

         </div>
      </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- jQuery UI -->
    <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <script src="vendors/form-helpers/js/bootstrap-formhelpers.min.js"></script>

    <script src="vendors/select/bootstrap-select.min.js"></script>

    <script src="vendors/tags/js/bootstrap-tags.min.js"></script>

    <script src="vendors/mask/jquery.maskedinput.min.js"></script>

    <script src="vendors/moment/moment.min.js"></script>

    <script src="vendors/wizard/jquery.bootstrap.wizard.min.js"></script>

     <!-- bootstrap-datetimepicker -->
     <link href="vendors/bootstrap-datetimepicker/datetimepicker.css" rel="stylesheet">
     <script src="vendors/bootstrap-datetimepicker/bootstrap-datetimepicker.js"></script>


    <link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
	<script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>

    <script src="js/custom.js"></script>
    <script src="js/forms.js"></script>
	<script src="src/jquery.min.js"></script>
    <script src="src/sweetalert.min.js"></script>
	<script>
		(function() {
		  $("#update").submit(function(e) {
			var formData = new FormData($(this)[0]);
			// console.log(formData)
			$.ajax({
			  url: "update_summary.php",
			  type: "POST",
			  data: formData,
			  success: function(res) {
				console.log(res)
				var res = JSON.parse(res);
				if (res.error) {
				  swal('Sent', res.msg, 'success');;
				} else {
				  swal('Failed', res.msg, 'warn');;
				}
			  },
			  cache: false,
			  contentType: false,
			  processData: false
			});

			e.preventDefault();
		  });
		})();
	  </script>

	  <script>
		(function() {
		  $("#experience").submit(function(e) {
			var formData = new FormData($(this)[0]);
			 console.log(formData)
			$.ajax({
			  url: "post_exp.php",
			  type: "POST",
			  data: formData,
			  success: function(res) {
				console.log(res)
				var res = JSON.parse(res);
				if (res.error) {
				  swal('Sent', res.msg, 'success');;
				} else {
				  swal('Failed', res.msg, 'warn');;
				}
			  },
			  cache: false,
			  contentType: false,
			  processData: false
			});

			e.preventDefault();
		  });
		})();
	  </script>

	  <script>
		(function() {
		  $("#education").submit(function(e) {
			var formData = new FormData($(this)[0]);
			// console.log(formData)
			$.ajax({
			  url: "post_edu.php",
			  type: "POST",
			  data: formData,
			  success: function(res) {
				console.log(res)
				var res = JSON.parse(res);
				if (res.error) {
				  swal('Sent', res.msg, 'success');;
				} else {
				  swal('Failed', res.msg, 'warn');;
				}
			  },
			  cache: false,
			  contentType: false,
			  processData: false
			});

			e.preventDefault();
		  });
		})();
	  </script>
  </body>
</html>