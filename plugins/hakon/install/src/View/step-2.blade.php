<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Hakon CMS">
		<meta name="author" content="eFuzyon Technology">

		<link rel="shortcut icon" href="{{ asset("assets/images/favicon_1.ico") }}">

		<title>Hakon</title>
		
		<!--Form Wizard-->
        <link rel="stylesheet" type="text/css" href="{{ asset("plugins/hakon/install/assets/plugins/jquery.steps/demo/css/jquery.steps.css") }}" />

		<link href="{{ asset("plugins/hakon/install/assets/css/bootstrap.min.css") }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset("plugins/hakon/install/assets/css/core.css") }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset("plugins/hakon/install/assets/css/components.css") }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset("plugins/hakon/install/assets/css/icons.css") }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset("plugins/hakon/install/assets/css/pages.css") }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset("plugins/hakon/install/assets/css/responsive.css") }}" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="{{ asset("plugins/hakon/install/assets/js/modernizr.min.js") }}"></script>

        <style type="text/css">

            body, html {
                background: white!important;
            }

			.content-page {
				margin-left: 0!important;
			}

			.content {
				margin-top: 0!important;
			}

			.footer {
				position: initial;
			}

		</style>

	</head>

	<body class="fixed-left">

		<!-- Begin page -->
		<div id="wrapper">

			<!-- ============================================================== -->
			<!-- Start right Content here -->
			<!-- ============================================================== -->
			<div class="content-page">
				<!-- Start content -->
				<div class="content">
					<div class="container">

						<!-- Page-Title -->
						<div class="row">
							<div class="col-sm-12">
								<h4 class="page-title">Hakon</h4><br />
							</div>
						</div>

                        <!-- Vertical Steps Example -->
                        <div class="row">
							<div class="col-sm-12">
								<div class="card-box">
									<h4 class="m-t-0 header-title"><b>Install</b></h4>
									<p class="text-muted m-b-30 font-13">
										[TEXT]
									</p>
									
									<form id="wizard-vertical">
										<h3>Database</h3>
										<section>
											<?php /*<div class="form-group clearfix">
												<label class="col-lg-2 control-label " for="userName1">User name *</label>
												<div class="col-lg-10">
													<input class="form-control required" id="userName1" name="userName" type="text">
												</div>
											</div>
											<div class="form-group clearfix">
												<label class="col-lg-2 control-label " for="password1"> Password *</label>
												<div class="col-lg-10">
													<input id="password1" name="password" type="text" class="required form-control">
												</div>
											</div>

											<div class="form-group clearfix">
												<label class="col-lg-2 control-label " for="confirm1">Confirm Password *</label>
												<div class="col-lg-10">
													<input id="confirm1" name="confirm" type="text" class="required form-control">
												</div>
											</div>
											<div class="form-group clearfix">
												<label class="col-lg-12 control-label ">(*) Mandatory</label>
											</div>*/?>
										</section>

										<h3>Website</h3>
										<section>
											<?php /*<div class="form-group clearfix">

												<label class="col-lg-2 control-label" for="name1"> First name *</label>
												<div class="col-lg-10">
													<input id="name1" name="name" type="text" class="required form-control">
												</div>
											</div>
											<div class="form-group clearfix">
												<label class="col-lg-2 control-label " for="surname1"> Last name *</label>
												<div class="col-lg-10">
													<input id="surname1" name="surname" type="text" class="required form-control">

												</div>
											</div>

											<div class="form-group clearfix">
												<label class="col-lg-2 control-label " for="email1">Email *</label>
												<div class="col-lg-10">
													<input id="email1" name="email" type="text" class="required email form-control">
												</div>
											</div>

											<div class="form-group clearfix">
												<label class="col-lg-2 control-label " for="address1">Address *</label>
												<div class="col-lg-10">
													<input id="address1" name="address" type="text" class="form-control">
												</div>
											</div>

											<div class="form-group clearfix">
												<label class="col-lg-12 control-label ">(*) Mandatory</label>
											</div>*/ ?>

										</section>

										<h3>Finish</h3>
										<section>
											<?php /*<div class="form-group clearfix">
												<div class="col-lg-12">
													<ul class="list-unstyled w-list">
                                                        <li><b>First Name :</b> Jonathan </li>
                                                        <li><b>Last Name :</b> Smith </li>
                                                        <li><b>Emial:</b> jonathan@smith.com</li>
                                                        <li><b>Address:</b> 123 Your City, Cityname. </li>
                                                    </ul>
												</div>
											</div>*/ ?>
										</section>

									</form>
									<!-- End #wizard-vertical -->
								</div>
							</div>
						</div><!-- End row -->

                    </div> <!-- container -->
                               
                </div> <!-- content -->

                <footer class="footer">
                	<a href="https://github.com/efuzyon/hakon"><img src="{{ asset("plugins/hakon/install/assets/images/github_64x64.png") }}" style="width: 24px;" /></a>
                    <div style="float: right;">
                    	Powered by <a href="https://github.com/efuzyon" target="_blank">eFuzyon Technology</a>
                    </div>
                </footer>

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->

            <!-- Right Sidebar -->
            <div class="side-bar right-bar nicescroll">
                <h4 class="text-center">Chat</h4>
                <div class="contact-list nicescroll">
                    <ul class="list-group contacts-list">
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-1.jpg" alt="">
                                </div>
                                <span class="name">Chadengle</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-2.jpg" alt="">
                                </div>
                                <span class="name">Tomaslau</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-3.jpg" alt="">
                                </div>
                                <span class="name">Stillnotdavid</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-4.jpg" alt="">
                                </div>
                                <span class="name">Kurafire</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-5.jpg" alt="">
                                </div>
                                <span class="name">Shahedk</span>
                                <i class="fa fa-circle away"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-6.jpg" alt="">
                                </div>
                                <span class="name">Adhamdannaway</span>
                                <i class="fa fa-circle away"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-7.jpg" alt="">
                                </div>
                                <span class="name">Ok</span>
                                <i class="fa fa-circle away"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-8.jpg" alt="">
                                </div>
                                <span class="name">Arashasghari</span>
                                <i class="fa fa-circle offline"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-9.jpg" alt="">
                                </div>
                                <span class="name">Joshaustin</span>
                                <i class="fa fa-circle offline"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-10.jpg" alt="">
                                </div>
                                <span class="name">Sortino</span>
                                <i class="fa fa-circle offline"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /Right-bar -->


        </div>
        <!-- END wrapper -->

        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="{{ asset("plugins/hakon/install/assets/js/jquery.min.js") }}"></script>
        <script src="{{ asset("plugins/hakon/install/assets/js/bootstrap.min.js") }}"></script>
        <script src="{{ asset("plugins/hakon/install/assets/js/detect.js") }}"></script>
        <script src="{{ asset("plugins/hakon/install/assets/js/fastclick.js") }}"></script>
        <script src="{{ asset("plugins/hakon/install/assets/js/jquery.slimscroll.js") }}"></script>
        <script src="{{ asset("plugins/hakon/install/assets/js/jquery.blockUI.js") }}"></script>
        <script src="{{ asset("plugins/hakon/install/assets/js/waves.js") }}"></script>
        <script src="{{ asset("plugins/hakon/install/assets/js/wow.min.js") }}"></script>
        <script src="{{ asset("plugins/hakon/install/assets/js/jquery.nicescroll.js") }}"></script>
        <script src="{{ asset("plugins/hakon/install/assets/js/jquery.scrollTo.min.js") }}"></script>


        <script src="{{ asset("plugins/hakon/install/assets/js/jquery.core.js") }}"></script>
        <script src="{{ asset("plugins/hakon/install/assets/js/jquery.app.js") }}"></script>

        <!--Form Validation-->
        <script src="{{ asset("plugins/hakon/install/assets/plugins/bootstrapvalidator/dist/js/bootstrapValidator.js") }}" type="text/javascript"></script>

        <!--Form Wizard-->
        <script src="{{ asset("plugins/hakon/install/assets/plugins/jquery.steps/build/jquery.steps.min.js") }}" type="text/javascript"></script>
        <script type="text/javascript" src="{{ asset("plugins/hakon/install/assets/plugins/jquery-validation/dist/jquery.validate.min.js") }}"></script>

        <!--wizard initialization-->
        <script src="{{ asset("plugins/hakon/install/assets/pages/jquery.wizard-init.js") }}" type="text/javascript"></script>

	</body>
</html>