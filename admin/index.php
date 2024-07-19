<!DOCTYPE html>
<html>
  <head>
    <title>Michael Phandera</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="css/styles.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="login-bg">
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-12">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="#">Michael Phandera</a></h1>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>

	<div class="page-content container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="login-wrapper">
			        <div class="box">
					<form  id="form" method="post" enctype="multipart/form-data">
			            <div class="content-wrap">
			                <h6>Sign In</h6>
			                <input class="form-control" name="username" type="text" placeholder="E-mail address">
			                <input class="form-control" name="password" type="password" placeholder="Password">
			                <div class="action">
			                    <input type="submit" class="btn btn-primary signup" value="Login" >
			                </div>                
			            </div>
					</form>
			        </div>
			    </div>
			</div>
		</div>
	</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="src/jquery.min.js"></script>
    <script src="src/sweetalert.min.js"></script>
  </body>
  <script>
	(function() {
	  $("#form").submit(function(e) {
		var formData = new FormData($(this)[0]);
		// console.log(formData)
		$.ajax({
		  url: "post_signin.php",
		  type: "POST",
		  data: formData,
		  success: function(res) {
			console.log(res)
			var res = JSON.parse(res);
			if (res.error) {
			  swal('Logged in', res.msg, 'success');;
			  window.location.replace("forms.php");
			} else {
			  swal('Failed ', res.msg, 'warn');;
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
</html>