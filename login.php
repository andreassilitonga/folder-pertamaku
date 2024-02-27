<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head><base href="">
		<meta charset="utf-8" />
		<title>Sistim Informasi Filling Pegawai | BPOM</title>
		<meta name="description" content="BPOM" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<link rel="canonical" href="https://keenthemes.com/metronic" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Page Custom Styles(used by this page)-->
		<link href="assets/css/pages/login/login-2.css" rel="stylesheet" type="text/css" />
		<!--end::Page Custom Styles-->
		<!--begin::Global Theme Styles(used by all pages)-->
		<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Global Theme Styles-->
		<!--begin::Layout Themes(used by all pages)-->
		<!--end::Layout Themes-->
		<link rel="shortcut icon" href="assets/media/logos/bpom.png" />
		<!-- Kode menampilkan peringatan untuk mengaktifkan javascript-->
	<div align="center"><noscript>
	<div style="position:fixed; top:0px; left:0px; z-index:3000; height:100%; width:100%; background-color:#FFFFFF">
	<div style="font-family: Arial; font-size: 17px; background-color:#00bbf9; padding: 11pt;">Mohon aktifkan javascript pada browser untuk mengakses halaman ini!</div></div>
	</noscript></div>
 
	<!--Kode untuk mencegah seleksi teks, block teks dll.-->
	<script type="text/javascript">
		function disableSelection(e){if(typeof e.onselectstart!="undefined")e.onselectstart=function(){return false};else if(typeof e.style.MozUserSelect!="undefined")e.style.MozUserSelect="none";else e.onmousedown=function(){return false};e.style.cursor="default"}window.onload=function(){disableSelection(document.body)}
	</script>
 
	<!--Kode untuk mematikan fungsi klik kanan di blog-->
	<script type="text/javascript">
		function mousedwn(e){try{if(event.button==2||event.button==3)return false}catch(e){if(e.which==3)return false}}document.oncontextmenu=function(){return false};document.ondragstart=function(){return false};document.onmousedown=mousedwn
	</script>
 
	<style type="text/css">
		* : (input, textarea) {
		-webkit-touch-callout: none;
		-webkit-user-select: none;
 
	}
	</style>
	<style type="text/css">
		img {
		-webkit-touch-callout: none;
		-webkit-user-select: none;
		}
	</style>
 
	<!--Kode untuk mencegah shorcut keyboard, view source dll.-->
	<script type="text/javascript">
		window.addEventListener("keydown",function(e){if(e.ctrlKey&&(e.which==65||e.which==66||e.which==67||e.which==73||e.which==80||e.which==83||e.which==85||e.which==86)){e.preventDefault()}});document.keypress=function(e){if(e.ctrlKey&&(e.which==65||e.which==66||e.which==67||e.which==73||e.which==80||e.which==83||e.which==85||e.which==86)){}return false}
	</script>
	<script type="text/javascript">
		document.onkeydown=function(e){e=e||window.event;if(e.keyCode==123||e.keyCode==18){return false}}
	</script>
	</head>

	<?php 
        if (isset($_POST['login'])){
            $user = $_POST['user'];
            $pass = md5($_POST['pass']);
            $login=mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE nip='$user' AND password='$pass'");
            $cocok=mysqli_num_rows($login);
            $r=mysqli_fetch_array($login);

            if ($cocok > 0){
                $_SESSION[login]        = $r[nip];
                $_SESSION[nama]    	    = $r[nama];
                $_SESSION[level]        = $r[level];
                $_SESSION[nip]          = $r[nip];

                header('location:index.php');
            }else{
                echo "<script>window.alert('Maaf, Anda Tidak Memiliki akses');
                        window.location=('index.php')</script>";
            }
        }
?>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="quick-panel-right demo-panel-right offcanvas-right header-fixed header-mobile-fixed subheader-enabled aside-enabled aside-static page-loading">
		<!--begin::Main-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Login-->
			<div class="login login-2 login-signin-on d-flex flex-column flex-lg-row flex-column-fluid bg-white" id="kt_login">
				<!--begin::Aside-->
				<div class="login-aside order-2 order-lg-1 d-flex flex-row-auto position-relative overflow-hidden">
					<!--begin: Aside Container-->
					<div class="d-flex flex-column-fluid flex-column justify-content-between py-9 px-7 py-lg-13 px-lg-35">
						<!--begin::Logo-->
						<a href="#" class="text-center pt-2">
							<img src="assets/media/logos/bpom.png" class="max-h-90px" alt="" />
						</a>
						<!--end::Logo-->
						<!--begin::Aside body-->
						
						<div class="d-flex flex-column-fluid flex-column flex-center">
							<!--begin::Signin-->
							<div class="login-form login-signin py-11">
								<!--begin::Form-->
								<form class="form" novalidate="novalidate"  action="" method='POST'>
									<!--begin::Title-->
									<div class="text-center pb-8">
										<h2 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">Sign In</h2>
										
									</div>
									<!--end::Title-->
									<!--begin::Form group-->
									<div class="form-group">
										<label class="font-size-h6 font-weight-bolder text-dark">NIP</label>
										<input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg" type="number" required="" name='user' autocomplete="off" placeholder="NIP PEGAWAI" />
									</div>
									<!--end::Form group-->
									<!--begin::Form group-->
									<div class="form-group">
										<div class="d-flex justify-content-between mt-n5">
											<label class="font-size-h6 font-weight-bolder text-dark pt-5">Password</label>
											
										</div>
										<input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg" type="password" required="" name='pass' autocomplete="off" />
									</div>
									<!--end::Form group-->
									<!--begin::Action-->
									<div class="text-center pt-2">
										<button class="btn btn-dark font-weight-bolder font-size-h6 px-8 py-4 my-3" name='login' type="submit">Sign In</button>
									</div>
									<!--end::Action-->
								</form>
								<!--end::Form-->
							</div>
							<!--end::Signin-->
							
							
						</div>
						<!--end::Aside body-->
						<!--begin: Aside footer for desktop-->
						
						<!--end: Aside footer for desktop-->
					</div>
					<!--end: Aside Container-->
				</div>
				<!--begin::Aside-->
				<!--begin::Content-->
				<div class="content order-1 order-lg-2 d-flex flex-column w-100 pb-0" style="background-color: #B1DCED;">
					<!--begin::Title-->
					
					
					<!--end::Title-->
					<!--begin::Image-->
					<div class="content-img d-flex flex-row-fluid bgi-no-repeat bgi-position-y-bottom bgi-position-x-center" style="background-image: url(assets/media/svg/illustrations/login-visual-4.svg);"></div>
					<!--end::Image-->
				</div>
				<!--end::Content-->
			</div>
			<!--end::Login-->
		</div>
		<!--end::Main-->
		
		<!--end::Global Config-->
		<!--begin::Global Theme Bundle(used by all pages)-->
		<script src="assets/plugins/global/plugins.bundle.js"></script>
		<script src="assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
		<script src="assets/js/scripts.bundle.js"></script>
		<!--end::Global Theme Bundle-->
		<!--begin::Page Scripts(used by this page)-->
		<script src="assets/js/pages/custom/login/login-general.js"></script>
		<!--end::Page Scripts-->
	</body>
	<!--end::Body-->
</html>