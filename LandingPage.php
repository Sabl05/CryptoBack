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
			<li class="nav-item active">
				<a class="nav-link" href="LandingPage.php">Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Arbitrage</a>
			</li>
			<li class="nav-item">
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



<header class="masthead text-white text-center" style=" ">
            <div class="overlay"></div>

            <div class="container" style="height: 100%;">
                <div class="row">
                    <div class="col-xl-9 mx-auto"><h1 class="mb-5">Bitcoin will do to banks what e-mail has done to ordinary mail.</h1></div>
                    <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                        <form action="login.php">
                            <div class="form-row">
                                <div class="col-12 col-md-9 mb-2 mb-md-0"><input class="form-control form-control-lg" type="email" placeholder="Enter your email..." /></div>
                                <div class="col-12 col-md-3"><button class="btn btn-block btn-lg btn-primary" type="submit">Sign up!</button></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </header>

        <!-- Icons Grid-->
        <section class="features-icons bg-light text-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3" >
                            <div class="features-icons-icon d-flex"><i class="icon-screen-desktop m-auto text-primary"><img src="https://mk0asiacryptotopf9lu.kinstacdn.com/wp-content/uploads/2018/05/Bitcoin-logo-1.png" alt="" width="100px"></i></div>
                            <h3>Bitcoin</h3>
                            <p class="lead mb-0">Peer-to-peer payment system using the unit of the same name.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                            <div class="features-icons-icon d-flex"><i class="icon-layers m-auto text-primary"><img src="https://i.ya-webdesign.com/images/ethereum-coin-png-4.png" alt="" width="100px"></i></div>
                            <h3>Ethereum</h3>
                            <p class="lead mb-0">Cryptocurrency and platform for creating decentralized online services.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                            <div class="features-icons-icon d-flex"><i class="icon-check m-auto text-primary"><img src="https://www.pinclipart.com/picdir/big/131-1318865_ripple-xrp-icon-telegram-logo-svg-clipart.png" alt="" width="100px"></i></div>
                            <h3>Ripple XRP</h3>
                            <p class="lead mb-0">Cryptocurrency platform for payment systems, focused on currency exchange transactions.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Image Showcases-->

          <section class="showcase">
              <div class="container-fluid p-0">
                  <div class="row no-gutters">
                      <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('https://i.redd.it/douuk53cd3831.jpg')"></div>
                      <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                          <h2>AirDrop</h2>
                          <p class="lead mb-0">The crypto airdrop is a marketing method employed by startups in the cryptocurrency space. It involves delivering bitcoins or tokens to the wallets of current cryptocurrency traders, either for free or in exchange for a small promotional service.</p>
                      </div>
                  </div>
                  <div class="row no-gutters">
                      <div class="col-lg-6 text-white showcase-img" style="background-image: url('https://steemitimages.com/DQmcZsUnA49XYp5uBe9hy8ysM6w3j531ZX6XMnK837U9G4f/Crypto_10.jpg')"></div>
                      <div class="col-lg-6 my-auto showcase-text">
                          <h2>Cryptocurrency</h2>
                          <p class="lead mb-0">A cryptocurrency (or “crypto”) is a digital currency that can be used to buy goods and services, but uses an online ledger with strong cryptography to secure online transactions. Much of the interest in these unregulated currencies is to trade for profit, with speculators at times driving prices skyward.</p>
                      </div>
                  </div>
                  <div class="row no-gutters">
                      <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('https://cdn.steemitimages.com/DQmab83g79uE81PvfxZeAY2u7iVk751MbSERKXFLnajY7Ck/1450_Ly9jb2ludGVsZWdyYXBoLmNvbS9zdG9yYWdlL3VwbG9hZHMvdmlldy9kYmVkYjdhMGQzN2UyM2Y0NjkxMTY4NDgyNThjNmY0MC5qcGc=.jpg')"></div>
                      <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                          <h2>Cryptocurrency Arbitrage</h2>
                          <p class="lead mb-0">It simply refers to buying and selling the same asset on different markets to make a profit from the difference between the listing price on both these exchanges. For example, if Bitcoin is available at a higher price on Indodax than on Zipmex, you can buy BTC on Zipmex and sell it on Indodax to pocket the difference.</p>
                      </div>
                  </div>
              </div>
          </section>

        <!-- Testimonials-->
        <section class="testimonials text-center bg-light">
            <div class="container">
                <h2 class="mb-5">What people are saying...</h2>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <img class="img-fluid rounded-circle mb-3" src="https://images.wallpaperscraft.com/image/mask_hood_neon_137368_2780x2780.jpg" alt="..." />
                            <h5>Khanseit S.</h5>
                            <p class="font-weight-light mb-0">"Front-end"</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <img class="img-fluid rounded-circle mb-3" src="https://images.hdqwalls.com/download/hoodie-guy-mask-man-29-2048x2048.jpg" alt="..." />
                            <h5>Serikuly A.</h5>
                            <p class="font-weight-light mb-0">"Back-end"</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <img class="img-fluid rounded-circle mb-3" src="https://xn--b1abglpdo.xn----8sbcqmll1apkejj3ji.xn--90ais/image/cache/catalog/easyphoto/381/neonovye-maski-sudnaya-noch-2-650x650.jpg" alt="..." />
                            <h5>Orazbek R.</h5>
                            <p class="font-weight-light mb-0">"Front-end"</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Call to Action-->
        <section class="call-to-action text-white text-center">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 mx-auto"><h2 class="mb-4">Ready to get started? Sign up now!</h2></div>
                    <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                        <form action="login.php">
                            <div class="form-row">
                                <div class="col-12 col-md-9 mb-2 mb-md-0"><input class="form-control form-control-lg" type="email" placeholder="Enter your email..." /></div>
                                <div class="col-12 col-md-3"><button class="btn btn-block btn-lg btn-primary" type="submit">Sign up!</button></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
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
        <!-- Bootstrap core JS-->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>





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
