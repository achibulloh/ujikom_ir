	<!DOCTYPE html>
	<html lang="en">
	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="keywords" content="" />
		<meta name="author" content="" />
		<meta name="robots" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Smart Casier" />
		<meta property="og:title" content="Smart Casier" />
		<meta property="og:description" content="Effisiensikan Bisnismu Dengan Smart Cashier, Solusi Kasir Moderenmu." />
		
		<!-- PAGE TITLE HERE -->
		<title>Smart Cashier - @yield('title')</title>
		
		<!-- FAVICONS ICON -->
		<link rel="shortcut icon" type="image/png" href="{{ asset('assets/image/png/LogoOnly.png') }}" />
		<link href="{{ asset('assets/dsadmin/vendor/select2/css/select2.min.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/dsadmin/vendor/jquery-nice-select/css/nice-select.css') }}" rel="stylesheet">
		<link rel="stylesheet" href="{{ asset('assets/dsadmin/vendor/nouislider/nouislider.min.css') }}">
		<link href="{{ asset('assets/dsadmin/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
		<!-- Style css -->
		<link href="{{ asset('assets/dsadmin/css/style.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/dsadmin/vendor/sweetalert2/dist/sweetalert2.min.css') }}" rel="stylesheet">

			<!-- Toastr -->
			<link rel="stylesheet" href="{{ asset('assets/dsadmin/vendor/toastr/css/toastr.min.css') }}">

		<!-- {{-- Waktu --}} -->
			<link href="{{ asset('assets/dsadmin/vendor/jquery-asColorPicker/css/asColorPicker.min.css') }}" rel="stylesheet">
			<!-- Clockpicker -->
			<link href="{{ asset('assets/dsadmin/vendor/clockpicker/css/bootstrap-clockpicker.min.css') }}" rel="stylesheet">
			<!-- Daterange picker -->
			<link href="{{ asset('assets/dsadmin/vendor/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">
			<!-- Material color picker -->
			<link href="{{ asset('assets/dsadmin/vendor/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css') }}" rel="stylesheet">
			<!-- Pick date -->
			<link rel="stylesheet" href="{{ asset('assets/dsadmin/vendor/pickadate/themes/default.css') }}">
			<link rel="stylesheet" href="{{ asset('assets/dsadmin/vendor/pickadate/themes/default.date.css') }}">
			<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<!-- {{-- End Waktu --}} -->

		
	</head>
	<body>

		<!--*******************
			Preloader start
		********************-->
		<div id="preloader">
			<div class="waviy">
			<span style="--i:1">L</span>
			<span style="--i:2">o</span>
			<span style="--i:3">a</span>
			<span style="--i:4">d</span>
			<span style="--i:5">i</span>
			<span style="--i:6">n</span>
			<span style="--i:7">g</span>
			<span style="--i:8">.</span>
			<span style="--i:9">.</span>
			<span style="--i:10">.</span>
			</div>
		</div>
		<!--*******************
			Preloader end
		********************-->

		<!--**********************************
			Main wrapper start
		***********************************-->
		<div id="main-wrapper">

			<!--**********************************
				Nav header start
			***********************************-->
			<div class="nav-header">
				<a href="/admin" class="brand-logo">
					<img class="logo-abbr" src="{{ asset('assets/image/png/LogoOnly.png') }}" alt="" >
					<!-- <img class="brand-title" src="{{ asset('assets/image/png/FullLogo.png') }}" alt="" width="250px" height="100px"></br> -->
					<!-- <svg src="{{ asset('assets/image/svg/FullLogo.svg') }}" class="brand-title" width="124px" height="33px"></svg> -->
				</a>
				<div class="nav-control">
					<div class="hamburger">
						<span class="line"></span><span class="line"></span><span class="line"></span>
					</div>
				</div>
			</div>
			<!--**********************************
				Nav header end
			***********************************-->
			
			<!--**********************************
				Header start
			***********************************-->
			@yield('header')
			<!--**********************************
				Header end ti-comment-alt
			***********************************-->

			<!--**********************************
				Sidebar start
			***********************************-->
			<div class="dlabnav">
				<div class="dlabnav-scroll">
					<ul class="metismenu" id="menu">
						<li class="dropdown header-profile">
							<a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
							<!-- photo/FXiKSVKJFf7QbggsnoueF7CY9sgTWHU0zhq3o7ml.jpg -->
								<!-- <img src="{{ Auth::user()->photo == null }} ? {{ asset('assets/image/png/LogoOnly.png') }} : {{ asset('storage/'.Auth::user()->photo) }}" width="20" alt=""/> -->
								<img src="{{Auth::user()->photo == null ? asset('assets/image/logo_bpi.png') : asset(Auth::user()->photo)}}" width="20" alt="">
								<div class="header-info ms-3">
									<span class="font-w600 ">Hi, <b>{{ auth()->user()->username }}</b></span>
									<small class="text-end font-w400">{{ auth()->user()->email }}</small>
									<!-- <small class="font-w600"><b>@if (auth()->user()->status == 'Online')<span class="badge light badge-success"><i class="fa fa-circle text-success me-1"></i>Online</span>@else (auth()->user()->status == 'Offline')<span class="badge light badge-success"><i class="fa fa-circle text-success me-1"></i>Offline</span>@endif</b></small> -->
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-end">
								<a href="/profile" class="dropdown-item ai-icon">
									<svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
									<span class="ms-2">Profile </span>
								</a>
								<a href="/logout" class="dropdown-item ai-icon">
									<svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
									<span class="ms-2">Logout </span>
								</a>
							</div>
						</li>
						<li><a class="ai-icon" href="/admin" aria-expanded="false">
								<i class="flaticon-025-dashboard"></i>
								<span class="nav-text">Dashboard</span>
							</a>
						</li>
						<li><a class="ai-icon" href="/users" aria-expanded="false">
								<i class="flaticon-086-star"></i>
								<span class="nav-text">Management Users</span>
							</a>
						</li>
						<li><a class="ai-icon" href="/menu" aria-expanded="false">
							<i class="flaticon-050-info"></i>
								<span class="nav-text">Menu</span>
							</a>
						</li>
						<li><a class="ai-icon" href="/kategori" aria-expanded="false">
								<i class="flaticon-041-graph"></i>
								<span class="nav-text">Category</span>
							</a>
						</li>
						<!-- <li><a class="ai-icon" href="/transaksi" aria-expanded="false">
								<i class="flaticon-045-heart"></i>
								<span class="nav-text">Transaction</span>
							</a>
						</li> -->
						<!-- <li><a href="widget-basic.html" class="ai-icon" aria-expanded="false">
								<i class="flaticon-013-checkmark"></i>
								<span class="nav-text">Widget</span>
							</a>
						</li> -->
						<li><a class="ai-icon" href="/laporan" aria-expanded="false">
								<i class="flaticon-072-printer"></i>
								<span class="nav-text">Laporan</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
			<!--**********************************
				Sidebar end
			***********************************-->
			
			<!--**********************************
				Content body start
			***********************************-->
			@yield('content')
			<!--**********************************
				Content body end
			***********************************-->
			
			
			
			<!--**********************************
				Footer start
			***********************************-->
			<div class="footer">
			
				<div class="copyright">
					<p>Copyright © Designed &amp; Developed by <a href="irfanputrahendari.online" target="_blank">Smart Casier</a> 2023</p>
				</div>
			</div>
			<!--**********************************
				Footer end
			***********************************-->

			


		</div>
		<!--**********************************
			Main wrapper end
		***********************************-->

		<!--**********************************
			Scripts
		***********************************-->
		<!-- Required vendors -->
		<script src="{{ asset('assets/dsadmin/vendor/global/global.min.js') }}"></script>
		<script src="{{ asset('assets/dsadmin/vendor/chart.js/Chart.bundle.min.js') }}"></script>
		<script src="{{ asset('assets/dsadmin/vendor/jquery-nice-select/js/jquery.nice-select.min.js') }}"></script>
		
		<!-- Apex Chart -->
		<script src="{{ asset('assets/dsadmin/vendor/apexchart/apexchart.js') }}"></script>
		<script src="{{ asset('assets/dsadmin/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
		<script src="{{ asset('assets/dsadmin/js/plugins-init/datatables.init.js') }}"></script>
		<script src="{{ asset('assets/dsadmin/vendor/nouislider/nouislider.min.js') }}"></script>
		<script src="{{ asset('assets/dsadmin/vendor/wnumb/wNumb.js') }}"></script>
		
		<!-- Dashboard 1 -->
		<script src="{{ asset('assets/dsadmin/js/dashboard/dashboard-1.js') }}"></script>

		<script src="{{ asset('assets/dsadmin/js/custom.min.js') }}"></script>
		<script src="{{ asset('assets/dsadmin/js/dlabnav-init.js') }}"></script>
		<script src="{{ asset('assets/dsadmin/vendor/sweetalert2/dist/sweetalert2.min.js') }}"></script>
		<script src="{{ asset('assets/dsadmin/js/plugins-init/sweetalert.init.js') }}"></script>
		<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

		<!-- {{-- Waktu --}} -->
			<!-- momment js is must -->
			<script src="{{ asset('assets/dsadmin/vendor/moment/moment.min.js') }}"></script>
			<script src="{{ asset('assets/dsadmin/vendor/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
			<!-- pickdate -->
			<script src="{{ asset('assets/dsadmin/vendor/pickadate/picker.js') }}"></script>
			<script src="{{ asset('assets/dsadmin/vendor/pickadate/picker.time.js') }}"></script>
			<script src="{{ asset('assets/dsadmin/vendor/pickadate/picker.date.js') }}"></script>
		
		
		
			<!-- Daterangepicker -->
			<script src="{{ asset('assets/dsadmin/js/plugins-init/bs-daterange-picker-init.js') }}"></script>
			<!-- Clockpicker init -->
			<script src="{{ asset('assets/dsadmin/js/plugins-init/clock-picker-init.js') }}"></script>
			<!-- asColorPicker init -->
			<script src="{{ asset('assets/dsadmin/js/plugins-init/jquery-asColorPicker.init.js') }}"></script>
			<!-- Material color picker init -->
			<script src="{{ asset('assets/dsadmin/js/plugins-init/material-date-picker-init.js') }}"></script>
			<!-- Pickdate -->
			<script src="{{ asset('assets/dsadmin/js/plugins-init/pickadate-init.js') }}"></script>
		
			<script src="{{ asset('assets/dsadmin/vendor/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
			<script src="{{ asset('assets/dsadmin/vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js') }}"></script>
		<!-- {{-- Endd Waktu --}} -->
			<!-- Toastr -->
			<script src="{{ asset('assets/dsadmin/vendor/toastr/js/toastr.min.js') }}"></script>

			<!-- All init script -->
			<script src="{{ asset('assets/dsadmin/js/plugins-init/toastr-init.js') }}"></script>
			<script src="{{ asset('assets/dsadmin/vendor/select2/js/select2.full.min.js') }}"></script>
			<script src="{{ asset('assets/dsadmin/js/plugins-init/select2-init.js') }}"></script>
		@if(Session::has("fail"))
			<script>
					toastr.error("{{Session::get('Fail')}}", "Error", {
						positionClass: "toast-top-right",
						timeOut: 5e3,
						closeButton: !0,
						debug: !1,
						newestOnTop: !0,
						progressBar: !0,
						preventDuplicates: !0,
						onclick: null,
						showDuration: "300",
						hideDuration: "1000",
						extendedTimeOut: "1000",
						showEasing: "swing",
						hideEasing: "linear",
						showMethod: "fadeIn",
						hideMethod: "fadeOut",
						tapToDismiss: !1
					})
			</script>
		@endif
		@if(Session::has("success"))
		<script>
					toastr.success("{{Session::get('success')}}", "Success", {
						positionClass: "toast-top-right",
						timeOut: 5e3,
						closeButton: !0,
						debug: !1,
						newestOnTop: !0,
						progressBar: !0,
						preventDuplicates: !0,
						onclick: null,
						showDuration: "300",
						hideDuration: "1000",
						extendedTimeOut: "1000",
						showEasing: "swing",
						hideEasing: "linear",
						showMethod: "fadeIn",
						hideMethod: "fadeOut",
						tapToDismiss: !1
					})
		</script>
		@endif
		
	</body>
	</html>
