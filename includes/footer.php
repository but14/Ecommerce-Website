<footer class="bg-dark mt-5">
	<div class="container pb-5 pt-3">
		<div class="row">
			<div class="col-md-4">
				<div class="footer-card">
					<h3>CONTACT</h3>
					<p>Choose style, choose wolfshop store <br>
					173 Huynh Van Banh, quartier 12, Phu Nhuan, Hô Chi Minh, Vietnam<br>
					Wolfshop123@gmail.com <br>
					000 000 0000</p>
				</div>
			</div>

			<div class="col-md-4">
				<div class="footer-card">
					<h3>ABOUT</h3>
					<ul>
						<li><a href="about-us.php" title="About">About</a></li>
						<li><a href="contact-us.php" title="Contact Us">Contact Us</a></li>						
						<li><a href="#" title="Privacy">Privacy</a></li>
						<li><a href="#" title="Privacy">Terms & Conditions</a></li>
						<li><a href="#" title="Privacy">Refund Policy</a></li>
					</ul>
				</div>
			</div>

			<div class="col-md-4">
				<div class="footer-card">
					<h3>ACCOUNT</h3>
					<ul>
						<li><a href="login.php" title="Sell">Login</a></li>
						<li><a href="register.php" title="Advertise">Register</a></li>
						<li><a href="my-orders.php" title="Contact Us">My Orders</a></li>						
					</ul>
				</div>
			</div>			
		</div>
	</div>
	<div class="copyright-area">
		<div class="container">
			<div class="row">
				<div class="col-12 mt-3">
					<div class="copy-right text-center">
						<p>© Copyright 2024 WolfShop. Anh em Sói</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/bootstrap.bundle.5.1.3.min.js"></script>
<script src="js/instantpages.5.1.0.min.js"></script>
<script src="js/lazyload.17.6.0.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/custom.js"></script>
<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>
</body>
</html>