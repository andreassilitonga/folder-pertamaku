
<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head><base href="">
		<meta charset="utf-8" />
		<title>Sistim Informasi Filling Pegawai | BPOM</title>
		<meta name="description" content="bpom" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Page Vendors Styles(used by this page)-->

		<link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Page Vendors Styles-->
		<!--begin::Global Theme Styles(used by all pages)-->
		<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css" type="text/css" />
		<!--end::Global Theme Styles-->
		<!--begin::Layout Themes(used by all pages)-->
		<!--end::Layout Themes-->
		<link rel="shortcut icon" href="assets/media/logos/bpom.png" />
		<link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox.css">
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="quick-panel-right demo-panel-right offcanvas-right header-fixed header-mobile-fixed aside-enabled aside-static page-loading">
		<!--begin::Main-->
		<!--begin::Header Mobile-->
		<div id="kt_header_mobile" class="header-mobile header-mobile-fixed">
			<!--begin::Logo-->
			<a href="index.php">
				<img alt="Logo" src="assets/media/logos/bpom.png" class="logo-default max-h-30px" />
			</a>
			<!--end::Logo-->
			<!--begin::Toolbar-->
			<div class="d-flex align-items-center">
				<button class="btn p-0 burger-icon rounded-0 burger-icon-left" id="kt_aside_tablet_and_mobile_toggle">
					<span></span>
				</button>
				<button class="btn btn-hover-text-primary p-0 ml-3" id="kt_header_mobile_topbar_toggle">
					<i class="menu-icon icon-xl fas fa-user-alt"></i>
				</button>
			</div>
			<!--end::Toolbar-->
		</div>
		<!--end::Header Mobile-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="d-flex flex-row flex-column-fluid page">
				<!--begin::Aside-->
				<div class="aside aside-left d-flex flex-column flex-row-auto" id="kt_aside">
					<!--begin::Aside Menu-->
					<div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
						<!--begin::Menu Container-->
						<div id="kt_aside_menu" class="aside-menu min-h-lg-800px" data-menu-vertical="1" data-menu-scroll="1" data-menu-dropdown-timeout="500">
							<!--begin::Menu Nav-->
							 <?php if ($_SESSION[level] != 'pegawai') {?>
							 <?php include "menu.php";?>
							 <?php }?>
							<!--end::Menu Nav-->
						</div>
						<!--end::Menu Container-->
					</div>
					<!--end::Aside Menu-->
				</div>
				<!--end::Aside-->
				<!--begin::Wrapper-->
				<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
					<!--begin::Header-->
					<div id="kt_header" class="header header-fixed">
						<!--begin::Container-->
						<div class="container d-flex align-items-stretch justify-content-between">
							<!--begin::Left-->
							<div class="d-none d-lg-flex align-items-center mr-3">
								<!--begin::Aside Toggle-->
								<button class="btn btn-icon aside-toggle ml-n3 mr-10" id="kt_aside_desktop_toggle">
									 <i class="menu-icon icon-xl fas fa-align-left"></i>
								</button>
								<!--end::Aside Toggle-->
								<!--begin::Logo-->
								<a href="index.php">
									<img alt="Logo" src="assets/media/logos/bpom_logo.png" class="logo-sticky max-h-35px" />
								</a>
								<!--end::Logo-->
								<!--begin::Desktop Search-->

									<!--begin::Dropdown-->
									<div class="dropdown-menu dropdown-menu-left dropdown-menu-lg dropdown-menu-anim-up">
										<div class="quick-search-wrapper scroll" data-scroll="true" data-height="350" data-mobile-height="200"></div>
									</div>
									<!--end::Dropdown-->
							</div>
							<!--end::Left-->
							<!--begin::Topbar-->
							<div class="topbar">

								<!--end::Tablet & Mobile Search-->
								<!--begin::Create-->
								<div class="dropdown">
									<!--begin::Toggle-->
									<div class="topbar-item mr-4" data-toggle="dropdown" data-offset="10px,0px">
										<div class="btn font-weight-bolder btn-sm btn-light-success px-5"><b><?php echo $_SESSION[nama]; ?> - <?php echo $_SESSION[nip]; ?></b></div>
									</div>
									<!--end::Toggle-->
									<!--begin::Dropdown-->
									<div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-md">
										<!--begin::Navigation-->
										<ul class="navi navi-hover py-5">
											<li class="navi-item">
												<a href="account_admin.bpom" class="navi-link">
													<span class="navi-icon">
														<i class="flaticon2-gear"></i>
													</span>
													<span class="navi-text">Settings</span>
												</a>
											</li>
											<li class="navi-separator my-3"></li>
											<li class="navi-item">
												<a href="logout.php" class="navi-link">
													<span class="navi-icon">
														<i class="fas fa-power-off"></i>
													</span>
													<span class="navi-text">Log Out</span>
												</a>
											</li>
										</ul>
										<!--end::Navigation-->
									</div>
									<!--end::Dropdown-->
								</div>
								<!--end::Create-->



							</div>
							<!--end::Topbar-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Header-->
					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Entry-->
						<div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class="container">
								<!--begin::Dashboard-->
								<?php
								if ($_GET[view] == 'home' or $_GET[view] == '') {
								include "dashboard.php";	
								} 
								
								elseif ($_GET[view] == 'account_admin') {
								include "proses/admin_password.php";	
								} 
								
								elseif ($_GET[view] == 'admin_print') {
								include "proses/admin_print.php";									
								} 
								
								elseif ($_GET[view] == 'admin_import') {
								include "proses/admin_import.php";									
								} 
								
								elseif ($_GET[view] == 'pegawai') {
								if ($_GET[act] == '') {
								include "proses/admin_pegawai.php";	
								} 
									
								elseif ($_GET[act] == 'detail') {
								include "proses/admin_detail.php";										
								} 
									
								elseif ($_GET[act] == 'input') {
								include "proses/admin_input.php";
								} 
									
								elseif ($_GET[act] == 'rubah') {
								include "proses/admin_gantipass.php";										
								} 
									
								elseif ($_GET[act] == 'edit') {
								include "proses/admin_edit.php";
								}
								}
								?>
								<!--end::Dashboard-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Entry-->
					</div>
					<!--end::Content-->
					<!--begin::Footer-->
					<div class="footer bg-white py-4 d-flex flex-lg-column" id="kt_footer">
						<!--begin::Container-->
						<div class="container d-flex flex-column flex-md-row align-items-center justify-content-between">
							<!--begin::Copyright-->
							<div class="text-dark order-2 order-md-1">
								<span class="text-muted font-weight-bold mr-2">2021©</span>
								<a href="#" target="_blank" class="text-dark-75 text-hover-primary">BPOM Medan</a>
							</div>
							<!--end::Copyright-->
							<!--begin::Nav-->
							<div class="nav nav-dark order-1 order-md-2">
								<a href="#" target="_blank" class="nav-link pr-3 pl-0">About</a>
								<a href="#" target="_blank" class="nav-link px-3">Team</a>
								<a href="https://www.facebook.com/andreas.christian.3388/" target="_blank" class="nav-link pl-3 pr-0">Contact <?php echo $i['session']; ?></a>
							</div>
							<!--end::Nav-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Footer-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::Main-->




<!--begin::Scrolltop-->
<div id="kt_scrolltop" class="scrolltop">
	<span class="svg-icon">
		<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Up-2.svg-->
		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
				<polygon points="0 0 24 0 24 24 0 24" />
				<rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10" rx="1" />
				<path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero" />
			</g>
		</svg>
		<!--end::Svg Icon-->
	</span>
</div>
<!--end::Scrolltop-->



<!--begin::Global Theme Bundle(used by all pages)-->
<script src="assets/plugins/global/plugins.bundle.js"></script>
<script src="assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
<script src="assets/js/scripts.bundle.js"></script>
<!--end::Global Theme Bundle-->
<!--begin::Page Vendors(used by this page)-->
<script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
<script src="assets/js/pages/crud/datatables/basic/scrollablenew.js"></script>
<!--end::Page Vendors-->
<!--begin::Page Scripts(used by this page)-->

<script src="assets/js/sweetalert/sweetalert.min.jss"></script>
<script src="assets/js/pages/features/miscellaneous/sweetalert2.jzs"></script>
<script src="fancybox/jquery.fancybox.js"></script>


<!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgoGty3nDpF6ZTBEHeZm_evCLx8NchfOQ&callback=initMap" async defer></script>-->

<!--<script src="http://maps.googleapis.com/maps/api/js"></script>-->


<script type="text/javascript">
    $(document).on("click", ".open-AddBookDialog", function () {
     var myBookId = $(this).data('id');
     var myBookId1 = $(this).data('id1');
     var myBookId2 = $(this).data('id2');
     var myBookId3 = $(this).data('id3');
     var myBookId4 = $(this).data('id4');
     var myBookId5 = $(this).data('id5');
     var myBookId6 = $(this).data('id6');
     var myBookId7 = $(this).data('id7');
     var myBookId8 = $(this).data('id8');
     var myBookId9 = $(this).data('id9');
     var myBookId10 = $(this).data('id10');
     var myBookId11 = $(this).data('id11');
     var myBookId12 = $(this).data('id12');
     var myBookId13 = $(this).data('id13');
     $(".modal-body #bookId").val( myBookId );
     $(".modal-body #bookId1").val( myBookId1 );
     $(".modal-body #bookId2").val( myBookId2 );
     $(".modal-body #bookId3").val( myBookId3 );
     $(".modal-body #bookId4").val( myBookId4 );
     $(".modal-body #bookId5").val( myBookId5 );
     $(".modal-body #bookId6").val( myBookId6 );
     $(".modal-body #bookId7").val( myBookId7 );
     $(".modal-body #bookId8").val( myBookId8 );
     $(".modal-body #bookId9").val( myBookId9 );
     $(".modal-body #bookId10").val( myBookId10 );
     $(".modal-body #bookId11").val( myBookId11 );
     $(".modal-body #bookId12").val( myBookId12 );
     $(".modal-body #bookId13").val( myBookId13 );
   });
 </script>




		<!--end::Page Scripts-->
	</body>
	<!--end::Body-->
</html>