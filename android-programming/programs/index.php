<?php 
require("../../libs/config.php");
$title = "Android Programs | ProgrammingTutorials4U | ".SITE_NAME;
$description = "The best way to learn any programming langugae is by practicing examples. This page contains programs of Android Programs. You can take the references from these programs and try them on your own.";
include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/header.php");
?>

<?php 
include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/navbar.php");
?>

<!-- Breadcrumb -->
<div class="breadcrumbs overlay">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="bread-inner">
          <!-- Bread Menu -->
          <div class="bread-menu">
            <ul>
              <li><a href="<?php echo SITE_DIR;?>">Home</a></li>
              <li><a href="<?php echo SITE_DIR;?>android-programming/programs/">Android</a></li>
            </ul>
          </div>
          <!-- Bread Title -->
          <div class="bread-title"><h2>All Programs</h2></div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--/ End Breadcrumb -->

<div class="container">
<div class="row">
	
    <?php 
	include("android_programs_navigation.php");
	?>
	
	<div class="col-sm-8 pl-5 pt-4">
    <!-- Page Content -->
		<div class="container">
      <ol class="custom-counter">
			<li><a href="hello-world">Develop an android application to display "Hello World!" on screen</a></li>
			<li><a href="absolute-layout">Develop an android application to place Name, Age and Mobile number on the display screen using Absolute Layout</a></li>
			<li><a href="linear-layout">Develop an android application to place Name, Age and Mobile number linearly (Vertical) on the display screen using Linear Layout</a></li>
			<li><a href="student-info">Develop an android application to display Student name and its marks</a></li>
			<li><a href="table-layout">Develop an android application to display 10 students basic information in a table form using Table Layout</a></li>
			<li><a href="display-datatypes-using-framelayout">Develop an android application to display all the data types in object-oriented programming using FrameLayout</a></li>
			<li><a href="create-user-login-app">Develop an android application to accept username and password from the end user using TextView and EditText</a></li>
			<li><a href="student-personal-information-app">Develop an android application to accept and display personal information of the student</a></li>
			<li><a href="search-engine-auto-complete-text-view">Develop an android application to create a first display screen of any search engine using AutoCompleteTextView</a></li>
			<li><a href="subjects-engine-auto-complete-text-view">Develop an android application to display all the subjects of sixth semester using AutoCompleteTextView</a></li>
			<li><a href="android-toggle-button">Develop an application to create a toggle button to display ON / OFF Bluetooth on the display screen</a></li>
			<li><a href="simple-calculator-app">Develop an android application to create a Simple Calculator</a></li>
			<li><a href="social-networking-login-form">Develop an android application to create a login form for a social networking site</a></li>
			<li><a href="student-registration-login-form">Develop an android application to create a login form for student registration system</a></li>
			<li><a href="android-checkbox">Develop an android application to show five checkboxes and toast selected checkboxes</a></li>
			<li><a href="android-radio-button">Develop an android application to demonstrate use of Android Radio Button</a></li>
			<li><a href="horizontal-and-circular-progress-bar">Develop an android application to display horizontal and circular progress bar</a></li>
			<li><a href="programming-languages-listview">Develop an android application to display programming languages using Android ListView</a></li>
			<li><a href="order-app">Develop an android application to display total order placed</a></li>
			<li><a href="android-date-and-time-picker">Develop an android application to select and display date and time on click of 'select date', 'select time' buttons</a></li>
			<li><a href="android-app-life-cycle">Develop an android application to demonstrate Android Life Cycle methods</a></li>
			<li><a href="factorial-app">Develop an android application to calculate Factorial of a number using Activity Intents</a></li>
			<li><a href="android-broadcast-messages">Develop an android application to demonstrate the system broadcast messages</a></li>
			<li><a href="android-sensors">Develop an android application to display the list of sensors supported by the mobile device</a></li>
			<li><a href="android-capture-image">Develop an android application to capture an image and display it using ImageView</a></li>
			<li><a href="bluetooth-functionality">Develop an android application to use Bluetooth functionality</a></li>
			<li><a href="android-sqlite-datebase">Develop an android application to insert data in SQLite database and show the added records</a></li>
			<li><a href="check-user-login">Develop an android application to create the login form and display Login Successful / Unsuccessful toast message</a></li>
			<li><a href="validate-user-login">Develop an android application to validate User login</a></li>
      </ol>
		</div> <!-- /container -->	
  </div> <!-- /col-sm-8 -->
	
	<?php 
	include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/rightbar.php");
	?>
	
    </div>	<!-- /row -->
	
    </div> <!-- /container -->
<?php 
include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/footer.php");
?>