<html lang="en"><head>

  <meta charset="utf-8">
  <link rel="shortcut icon" href="img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>ODIRS Admin AMS Login</title>
  <script src="assets/js/jquery-1.10.2.js"></script>
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>
<style>
    .index-body{
        background-image: url(img/asset4.jpg);
        height: 100%;
        background-repeat: no-repeat; 
        background-position: center;
        background-size: cover;
    }
</style>

<body class="index-body">

  <div class="container mt-5">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
           
             <div class="row">
			<div class="col-lg-6 d-none d-lg-block">
      <img src="img/asset1.png" style="height: 350px; width: 350px;" class="main-logo" 
                alt="odirs_logo" id="main_logo" hspace="20">
      </div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
					<h1 class="h4 text-gray-900 mb-4">	
          ODIRS Asset MGT System <sup>V-1.0</sup> 
          
					</h1>
					</div>
						<form id="loginForm" class="" action="" method="POST">
							<div class="form-group">
								<input name="username" id ="username" type="text" class="form-control form-control-user"  placeholder="Enter Your Username">
							</div>
							<div class="form-group">
								<input type="password" name="password" id="password" class=" form-control form-control-user" placeholder="Enter Your Password">
							</div>
							<div class="form-group">

              <div class="form-group">
                  <select value="" name="usertype" id="usertype" class="form-control">
                  <option value="">--Select User Type--</option>
                  <option value="ecirs">The Executive Chairman ODIRS</option>
                  <option value="dhia_user">Director Human Resource (DHIA)</option>
                  <option value="asset_manager">Asset Manager Administrator</option>
                  <option value="tax_stations">Tax Station PSO's</option>
                  <option value="ict">System Administrator (ICT Unit)</option>

								</select>
                            </div>
							
							</div>
							<button name="btn" type="submit" id="btnLogin" class="btn btn-primary btn-user btn-block">
							Login
							</button>
						
						</form>
					
						<div class="text-center">
						</div>
						<hr>
						<div class="text-center">
						<p style="margin-top:40px;"><a class="small" href="https://www.irs.on.gov.ng/" target = "_blank" 
            style="float:right;">ODIRS Asset Management System | Powered by ODIRS ICT</a></p>
	
					</div>
				</div>
				</div>
            	</div>
          		</div>
        </div>
      </div>

    </div>

  </div>
  <script src="js/login.js"></script>

 </body>
 </html>

<?php

?> 