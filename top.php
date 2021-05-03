<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Landing Page</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />


	<!-- Fonts and icons -->
	<script src="../assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Montserrat:100,200,300,400,500,600,700,800,900"]},
			custom: {"families":["Flaticon", "LineAwesome"], urls: ['../assets/css/fonts.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/ready.min.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="/css/LandingPage.css">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="../assets/css/demo.css">
</head>
<body>


  <nav class="navbar navbar-expand-lg navbar-light bg-light p-4">
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
		<a class="navbar-brand" href="LandingPage.php">CryptoBack</a>
		<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
			<li class="nav-item">
				<a class="nav-link" href="LandingPage.php">Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Arbitrage</a>
			</li>
			<li class="nav-item active">
				<a class="nav-link" href="top.php">Top 100</a>
			</li>
      <li class="nav-item">
				<a class="nav-link" href="airDrop.php">AirDrop</a>
			</li>
		</ul>
		<form class="form-inline my-2 my-lg-0">
			<ul class="navbar-nav mr-auto mt-2 mt-lg-0">

		</form>
	</div>
</nav>
<?php
require 'phpQuery.php';

$url = "https://www.coingecko.com/en";
$file = file_get_contents($url);
$doc = phpQuery::newDocument($file);
$page = $doc->find('.coingecko-table .position-relative')->html();

echo $page;
?>

  <!-- Footer-->
  <footer class="footer bg-light">
      <div class="container">
          <div class="row">
              <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
                  <ul class="list-inline mb-2">
                      <li class="list-inline-item"><a href="#!">About</a></li>
                      <li class="list-inline-item">⋅</li>
                      <li class="list-inline-item"><a href="#!">Contact</a></li>
                      <li class="list-inline-item">⋅</li>
                      <li class="list-inline-item"><a href="#!">Terms of Use</a></li>
                      <li class="list-inline-item">⋅</li>
                      <li class="list-inline-item"><a href="#!">Privacy Policy</a></li>
                  </ul>
                  <p class="text-muted small mb-4 mb-lg-0">© Your Website 2021. All Rights Reserved.</p>
              </div>
              <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
                  <ul class="list-inline mb-0">
                      <li class="list-inline-item mr-3">
                          <a href="#!"><i class="fab fa-facebook fa-2x fa-fw"></i></a>
                      </li>
                      <li class="list-inline-item mr-3">
                          <a href="#!"><i class="fab fa-twitter-square fa-2x fa-fw"></i></a>
                      </li>
                      <li class="list-inline-item">
                          <a href="#!"><i class="fab fa-instagram fa-2x fa-fw"></i></a>
                      </li>
                  </ul>
              </div>
          </div>
      </div>
  </footer>

	<!--   Core JS Files   -->
	<script src="../assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="../assets/js/core/popper.min.js"></script>
	<script src="../assets/js/core/bootstrap.min.js"></script>

	<!-- jQuery UI -->
	<script src="../assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="../assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

	<!-- jQuery Scrollbar -->
	<script src="../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

	<!-- Moment JS -->
	<script src="../assets/js/plugin/moment/moment.min.js"></script>

	<!-- Chart JS -->
	<script src="../assets/js/plugin/chart.js/chart.min.js"></script>

	<!-- Chart Circle -->
	<script src="../assets/js/plugin/chart-circle/circles.min.js"></script>

	<!-- Datatables -->
	<script src="../assets/js/plugin/datatables/datatables.min.js"></script>

	<!-- Bootstrap Notify -->
	<script src="../assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

	<!-- Bootstrap Toggle -->
	<script src="../assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>

	<!-- jQuery Vector Maps -->
	<script src="../assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
	<script src="../assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

	<!-- Google Maps Plugin -->
	<script src="../assets/js/plugin/gmaps/gmaps.js"></script>

	<!-- Dropzone -->
	<script src="../assets/js/plugin/dropzone/dropzone.min.js"></script>

	<!-- Fullcalendar -->
	<script src="../assets/js/plugin/fullcalendar/fullcalendar.min.js"></script>

	<!-- DateTimePicker -->
	<script src="../assets/js/plugin/datepicker/bootstrap-datetimepicker.min.js"></script>

	<!-- Bootstrap Tagsinput -->
	<script src="../assets/js/plugin/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>

	<!-- Bootstrap Wizard -->
	<script src="../assets/js/plugin/bootstrap-wizard/bootstrapwizard.js"></script>

	<!-- jQuery Validation -->
	<script src="../assets/js/plugin/jquery.validate/jquery.validate.min.js"></script>

	<!-- Summernote -->
	<script src="../assets/js/plugin/summernote/summernote-bs4.min.js"></script>

	<!-- Select2 -->
	<script src="../assets/js/plugin/select2/select2.full.min.js"></script>

	<!-- Sweet Alert -->
	<script src="../assets/js/plugin/sweetalert/sweetalert.min.js"></script>

	<!-- Ready Pro JS -->
	<script src="../assets/js/ready.min.js"></script>

  <!-- AOS JS -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</body>
</html>
