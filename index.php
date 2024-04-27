<?php 
require("libs/config.php");
//echo SITE_NAME;
//echo $_SERVER['DOCUMENT_ROOT'].SITE_DIR;
$title = "ProgrammingTutorials4U: Learn to Code for Free";
$description = "Easy to understand and well organized tutorials with lots of programs on how to code in C, C++, Java, HTML, and JavaScript.";
include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/header.php");
?>

<?php 
include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/navbar.php");
?>

		<!-- ======= Hero Section ======= -->
		<section id="hero" class="d-flex align-items-center">
		<div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200">
		  <h1>Welcome</h1>
		  <p class="text-white">Whether you are an experienced programmer or not, this website is intended for everyone who wishes to learn the Programming language. Just click on the programming language you wish to begin from, and follow the tutorials.<br><br>Happy Coding !!!</p>
		</div>
		</section><!-- End Hero -->
		
		<!-- Features Area -->
		<section class="features-area section-bg">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Single Feature -->
						<div class="single-feature active">
							<div class="icon-head"><i class="fa fa-podcast"></i></div>
							<h4>C <br>Programming</h4>
							<p>C is a powerful general-purpose programming language developed by Dennis M. Ritchie.<br><br></p>
							<div class="button">
								<a href="<?php echo SITE_DIR;?>c-programming/programs/" class="bizwheel-btn"><i class="fa fa-arrow-circle-o-right"></i>Start Learning</a>
							</div>
						</div>
						<!--/ End Single Feature -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Single Feature -->
						<div class="single-feature">
							<div class="icon-head"><i class="fa fa-podcast"></i></div>
							<h4>C++ <br>Programming</h4>
							<p>C++ is a general-purpose programming language as an extension of the C programming language.</p>
							<div class="button">
								<a href="<?php echo SITE_DIR;?>cpp-programming/programs/" class="bizwheel-btn"><i class="fa fa-arrow-circle-o-right"></i>Start Learning</a>
							</div>
						</div>
						<!--/ End Single Feature -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Single Feature -->
						<div class="single-feature">
							<div class="icon-head"><i class="fa fa-podcast"></i></div>
							<h4>Java Programming</h4>
							<p>Java is a high-level programming language originally developed by Sun Microsystems.</p>
							<div class="button">
								<a href="<?php echo SITE_DIR;?>java-programming/programs/" class="bizwheel-btn"><i class="fa fa-arrow-circle-o-right"></i>Start Learning</a>
							</div>
						</div>
						<!--/ End Single Feature -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Single Feature -->
						<div class="single-feature">
							<div class="icon-head"><i class="fa fa-podcast"></i></div>
							<h4>HTML</h4>
							<p>Hypertext Markup Language, which is used for documents designed to be displayed in a web browser.<br></p>
							<div class="button">
								<a href="<?php echo SITE_DIR;?>html/programs/" class="bizwheel-btn"><i class="fa fa-arrow-circle-o-right"></i>Start Learning</a>
							</div>
						</div>
						<!--/ End Single Feature -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Single Feature -->
						<div class="single-feature">
							<div class="icon-head"><i class="fa fa-podcast"></i></div>
							<h4>JavaScript<br>Programming</h4>
							<p>JavaScript, often abbreviated as JS, is a programming language of the Web.</p>
							<div class="button">
								<a href="<?php echo SITE_DIR;?>javascript-programming/programs/" class="bizwheel-btn"><i class="fa fa-arrow-circle-o-right"></i>Start Learning</a>
							</div>
						</div>
						<!--/ End Single Feature -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Single Feature -->
						<div class="single-feature">
							<div class="icon-head"><i class="fa fa-podcast"></i></div>
							<h4>Android<br>Programming</h4>
							<p>With Android Programming you can built your own Android mobile applications.<br></p>
							<div class="button">
								<a href="<?php echo SITE_DIR;?>android-programming/programs/" class="bizwheel-btn"><i class="fa fa-arrow-circle-o-right"></i>Start Learning</a>
							</div>
						</div>
						<!--/ End Single Feature -->
					</div>
				</div>
			</div>
		</section>
		<!--/ End Features Area -->
		
		<!-- Call To Action -->
		<section class="call-action overlay">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-12">
						<div class="call-inner">
							<h2>The only way to learn a new programming language is by writing programs in it.</h2>
							<p style="text-align: right;">-- Dennis Ritchie</p>
						</div>
					</div>
				</div>
			</div>
		
		<!--/ End Call to action -->
<?php 
include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/footer.php");
?>