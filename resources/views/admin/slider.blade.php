<!doctype html>
<html class="modern fixed has-top-menu has-left-sidebar-half">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>{{ $title = "Seyran Ajans Admin Panel" }}</title>
		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,300,400,600,700,800,900" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="admin/vendor/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="admin/vendor/animate/animate.compat.css">
		<link rel="stylesheet" href="admin/vendor/font-awesome/css/all.min.css" />
		<link rel="stylesheet" href="admin/vendor/boxicons/css/boxicons.min.css" />
		<link rel="stylesheet" href="admin/vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="admin/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css" />
		<link rel="stylesheet" href="admin/vendor/datatables/media/css/dataTables.bootstrap5.css" />
		<link rel="stylesheet" href="admin/css/theme.css" />
		<link rel="stylesheet" href="admin/css/layouts/modern.css" />
		<link rel="stylesheet" href="admin/css/skins/default.css" />
		<link rel="stylesheet" href="admin/css/custom.css">
		<script src="admin/vendor/modernizr/modernizr.js"></script>

	</head>
	<body>
		<section class="body">

			<!-- start: header -->
            @include('admin.header')
			<!-- end: header -->

			<div class="inner-wrapper">
				<!-- start: sidebar -->
                @include('admin.sidebar')
				<!-- end: sidebar -->

				<section role="main" class="content-body content-body-modern mt-0">
					<header class="page-header page-header-left-inline-breadcrumb">
						<h2 class="font-weight-bold text-6">Sliderlar</h2>
						<div class="right-wrapper">

						</div>
					</header>

					<!-- start: page -->
					<div class="row">
						<div class="col">

							<div class="card card-modern">

								<div class="card-body">
									<div class="datatables-header-footer-wrapper">
										<div class="datatable-header">
											<div class="row align-items-center mb-3">
												<div class="col-12 col-lg-auto mb-3 mb-lg-0">
													<a href="{{ route("sliderekle") }}" class="btn btn-primary btn-md font-weight-semibold btn-py-2 px-4">+ Slider Ekle</a>
												</div>



											</div>
										</div>


										<table class="table table-ecommerce-simple table-striped mb-0" id="datatable-ecommerce-list" style="min-width: 750px;">

                                            @if(session('basarı'))
                                            <div class="alert alert-success">
                                                {{ session('basarı') }}
                                            </div>
                                            @endif

											<tbody>

                                                @foreach ($slider as $sl )

                                                <tr>
													<td width="30"><input type="checkbox" name="checkboxRow1" class="checkbox-style-1 p-relative top-2" value="" /></td>
													<td><img style="width: 80px" src="resimler/{{ $sl->picture }}" alt=""></td>
													<td><a href="#"><strong>{{ $sl->baslik }}</strong></a></td>
													<td>{{ $sl->icerik}}</td>
													<td>{{ $sl->butonlink}}</td>
													<td><a href="{{ route("slidersil",$sl->id) }}"><button class="btn btn-danger">Sil</button></a></td>
													<td><a href="{{ route("sliderdüzenle",$sl->id) }}"><button class="btn btn-success">Düzenle</button></a></td>
												</tr>

                                                @endforeach





											</tbody>
										</table>
										<hr class="solid mt-5 opacity-4">
										<div class="datatable-footer">
											<div class="row align-items-center justify-content-between mt-3">
												<div class="col-md-auto order-1 mb-3 mb-lg-0">
													<div class="d-flex align-items-stretch">
														<div class="d-grid gap-3 d-md-flex justify-content-md-end me-4">
															<select class="form-control select-style-1 bulk-action" name="bulk-action" style="min-width: 170px;">
																<option value="" selected>Bulk Actions</option>
																<option value="delete">Delete</option>
															</select>
															<a href="#" class="bulk-action-apply btn btn-light btn-px-4 py-3 border font-weight-semibold text-color-dark text-3">Apply</a>
														</div>

													</div>
												</div>
												<div class="col-lg-auto text-center order-3 order-lg-2">
													<div class="results-info-wrapper"></div>
												</div>
												<div class="col-lg-auto order-2 order-lg-3 mb-3 mb-lg-0">
													<div class="pagination-wrapper"></div>
												</div>
											</div>
										</div>
									</table>
								</div>
							</div>

						</div>
					</div>
					<!-- end: page -->
				</section>
			</div>

			<aside id="sidebar-right" class="sidebar-right">
				<div class="nano">
					<div class="nano-content">
						<a href="#" class="mobile-close d-md-none">
							Collapse <i class="fas fa-chevron-right"></i>
						</a>

						<div class="sidebar-right-wrapper">

							<div class="sidebar-widget widget-calendar">
								<h6>Upcoming Tasks</h6>
								<div data-plugin-datepicker data-plugin-skin="dark"></div>

								<ul>
									<li>
										<time datetime="2021-04-19T00:00+00:00">04/19/2021</time>
										<span>Company Meeting</span>
									</li>
								</ul>
							</div>

							<div class="sidebar-widget widget-friends">
								<h6>Friends</h6>
								<ul>
									<li class="status-online">
										<figure class="profile-picture">
											<img src="img/!sample-user.jpg" alt="Joseph Doe" class="rounded-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
									<li class="status-online">
										<figure class="profile-picture">
											<img src="img/!sample-user.jpg" alt="Joseph Doe" class="rounded-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
									<li class="status-offline">
										<figure class="profile-picture">
											<img src="img/!sample-user.jpg" alt="Joseph Doe" class="rounded-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
									<li class="status-offline">
										<figure class="profile-picture">
											<img src="img/!sample-user.jpg" alt="Joseph Doe" class="rounded-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
								</ul>
							</div>

						</div>
					</div>
				</div>
			</aside>

		</section>

		<!-- Vendor -->
		<script src="admin/vendor/jquery/jquery.js"></script>
		<script src="admin/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="admin/vendor/popper/umd/popper.min.js"></script>
		<script src="admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
		<script src="admin/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="admin/vendor/common/common.js"></script>
		<script src="admin/vendor/nanoscroller/nanoscroller.js"></script>
		<script src="admin/vendor/magnific-popup/jquery.magnific-popup.js"></script>
		<script src="admin/vendor/jquery-placeholder/jquery.placeholder.js"></script>
		<script src="admin/vendor/datatables/media/js/jquery.dataTables.min.js"></script>
		<script src="admin/vendor/datatables/media/js/dataTables.bootstrap5.min.js"></script>
		<script src="admin/js/theme.js"></script>
		<script src="admin/js/custom.js"></script>
		<script src="admin/js/theme.init.js"></script>
		<script src="admin/js/examples/examples.header.menu.js"></script>
		<script src="admin/js/examples/examples.ecommerce.datatables.list.js"></script>

	</body>
</html>