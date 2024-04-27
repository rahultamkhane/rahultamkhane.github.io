<?php 
require("../../libs/config.php");
$title = "Java Programs | ".SITE_NAME;
$description = "The best way to learn any programming langugae is by practicing examples. This page contains programs of Java Programming. You can take the references from these programs and try them on your own.";
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
              <li><a href="<?php echo SITE_DIR;?>java-programming/programs/">Java Programming</a></li>
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
	include("java_programs_navigation.php");
	?>
	
	<div class="col-sm-8 pl-5 pt-4">
    <!-- Page Content -->
		<div class="container">
      <ol class="custom-counter">
		<li><a href="hello-world-program">Java Program to Display 'Hello World!!!' on console</a></li>
		<li><a href="add-numbers-cmd-args">Java Program to Add Two Numbers Using Command Line Arguments</a></li>
		<li><a href="swapping-using-third-var">Java Program to Swap Two Numbers Using Third Variable</a></li>
		<li><a href="swapping-without-third-var">Java Program to Swap Two Numbers Without Using Third Variable</a></li>
		<li><a href="read-data-using-buffered-reader">Java Program to Read Data from User Using BufferedReader class.</a></li>
		<li><a href="read-data-using-scanner">Java Program to Read Data from User Using Scanner class</a></li>
		<li><a href="type-casting">Java Program to Demonstrate Type Casting</a></li>
		<li><a href="conditional-operator">Java Program to Demonstrate Use of Ternary (Conditional) Operator</a></li>
		<li><a href="largest-among-three">Java Program Find Largest Number Among Three</a></li>
		<li><a href="even-odd">Java Program to Check Whether a Given Number is Even or Odd</a></li>
		<li><a href="armstrong-number">Java Program to Check Whether a Given Number is Armstrong or not</a></li>
		<li><a href="java-netsed-if">Java Program to Demonstrate Use of Nested If statement</a></li>
		<li><a href="student-grade">Java Program to Display Grade of a Student</a></li>
		<li><a href="menu-driven-program">Java Program Menu Driven Program to Check Even, Odd, Positive, Negative Number</a></li>
		<li><a href="number-word-equivalent">Java Program to Display a Word Equivalent of Given Number</a></li>
		<li><a href="palindrome-number">Java Program to Check Whether Given Number is Palindrome or not</a></li>
		<li><a href="prime-number">Java Program to Check Whether Given Number is Prime Number or not</a></li>
		<li><a href="switch-statement">Java Program to Demonstrate Use of Switch-Case Statement</a></li>
		<li><a href="searching-array-element">Java Program for Searching (Linear Search)</a></li>
		<li><a href="sorting-array">Java Program for Sorting (Bubble Sort)</a></li>
		<li><a href="factorial-number">Java Program to Find Factorial of a Number</a></li>
		<li><a href="fibonacci-series">Java Program to Print Fibonacci Series Uplo N terms</a></li>
		<li><a href="reverse-number-cmd-line">Java Program to Print Reverse of a Given Number Using Command Line Arguments</a></li>
		<li><a href="sum-of-digits">Java Program to Calculate Sum of Digits of a Given Number</a></li>
		<li><a href="reverse-number">Java Program to Print Reverse of a Given Number</a></li>
		<li><a href="decimal-to-binary">Java Program to Convert Decimal Number into Binary Number Equivalent</a></li>
		<li><a href="bubble-sort">Java Program for Bubble Sort</a></li>
		<li><a href="rect-area">Java Program to Create Rectangle class and its methods</a></li>
		<li><a href="constructor-calling">Java Program to Demonstrate the order of Constructor calling</a></li>
		<li><a href="constructor-overloading">Java Program for Constructor Overloading</a></li>
		<li><a href="reverse-number-class">Java Program to Find Reverse of Given Number Using Class</a></li>
		<li><a href="calculate-simple-interest">Java Program to Calculate Simple Interest</a></li>
		<li><a href="student-class">Java Program to Calculate Percentage Score of Student</a></li>
		<li><a href="binary-using-wrapper">Java Program to Convert Decimal Number to Binary Equivalent Using Integer Wrapper Class Method</a></li>
		<li><a href="fraction-calculation">Java Program to Calculate Fraction of Given Numbers</a></li>
		<li><a href="apple-sales">Java Program to Store Details of AppleSales in Array and Display Average Sale</a></li>
		<li><a href="employee-gross-salary">Java Program to Calculate Gross Salary of an Employee</a></li>
		<li><a href="tender-class">Java Program to Find Minimum Cost from Tender Class</a></li>
		<li><a href="employee-details">Java Program to use Array of Objects </a></li>
		<li><a href="array-of-objects">Java Program for Array of objects </a></li>
		<li><a href="user-greeting">Java Program to Print personalised greeting message</a></li>
		<li><a href="full-name-string">Java Program to Display Full Name of user</a></li>
		<li><a href="string-methods">Java Program to demonstrate use of 'String' class methods</a></li>
		<li><a href="string-buffer-methods">Java Program to demonstrate use of 'StringBuffer' class methods</a></li>
		<li><a href="string-activity">Java Program for String and String Buffer class</a></li>
		<li><a href="substrings-of-string">Java Program to display substrings of a given string</a></li>
		<li><a href="vector-methods">Java Program to demonstrate use of 'Vector' class methods.</a></li>
		<li><a href="var-args-constructor">Java Program to demonstrate use of varargs (Variable length arguments) in constructor</a></li>
		<li><a href="count-vowels">Java Program to Count number of Vowels, Consonants, Digits, Tabs and Blank Spaces in a given string</a></li>
		<li><a href="single-inheritance-demo">Java Program to demonstrate Single Inheritance</a></li>
		<li><a href="single-inheritance-box">Java Program for Single Inheritance</a></li>
		<li><a href="single-inh-demo2">Java Program for Single Inheritance</a></li>
		<li><a href="var-args-demo">Java Program to Demonstrate passing different length values in constructor</a></li>
		<li><a href="multiple-inheritance-exam">Java Program to Implement Multiple Inheritance (Student -> Exam -> Result)</a></li>
		<li><a href="method-overriding">Java Program to Implement Hierarchical Inheritance (Shape -> Rectangle & Triangle)</a></li>
		<li><a href="multilevel-inheritance">Java Program to Implement Multi-Level Inheritance (Account -> Saving_Acc -> Acct_Details)</a></li>
		<li><a href="hierarchical-inheritance">Java Program for Hierarchical Inheritance</a></li>
		<li><a href="abstract-class">Java Program for Abstract class and Abstract method</a></li>
		<li><a href="static-demo">Java Program to Demonstrate Use of 'static' Keyword</a></li>
		<li><a href="super-keyword">Java Program to Demonstrate Use of 'super' keyword</a></li>
		<li><a href="data-hiding">Java Program to use 'super' keyword to overcome name hiding</a></li>
		<li><a href="final-keyword">Java Program to demonstrate use of 'final' keyword.</a></li>
		<li><a href="static-keyword">Java Program to demonstrate use of static keyword</a></li>
		<li><a href="acct-details">Java Program to Achieve Multiple Inheritance Using Interface (Bank, Customer, Account)</a></li>
		<li><a href="emp-details">Java Program to Achieve Multiple Inheritance Using Interface (Gross, Employee, Salary)</a></li>
		<li><a href="interface-printable">Java Program to Implement Interface 'Printable'</a></li>
		<li><a href="interface-area">Java Program to Implement Interface Area in Rectangle and Circle</a></li>
		<li><a href="interface-animal">Java Program to Implement Interface 'Animal'</a></li>
		<li><a href="interface-mango">Java Program to Implement Interface Mango in Summer and Winter</a></li>
		<li><a href="student-details">Java Program to Achieve Multiple Inheritance Using Interface (Exam, Student, Result)</a></li>
		<li><a href="vector-demo">Java Program for Vector</a></li>
		<li><a href="add-remove-vector-elements">Java Program for Adding and Removing Elements from Vector</a></li>
		<li><a href="show-date-time">Java Program to Show Date and Time Using Java's Date Class</a></li>
		<li><a href="extends-thread">Java Program for extending Thread class</a></li>
		<li><a href="implementing-runnable">Java Program for implementing Runnable interface</a></li>
		<li><a href="getting-main-thread">Java Program for getting the main thread</a></li>
		<li><a href="naming-thread">Java Program for Naming a Thread</a></li>
		<li><a href="thread-sleep">Java Program for pausing running thread</a></li>
		<li><a href="three-threads">Java Program for creating three threads</a></li>
		<li><a href="thread-methods">Java Program to Demonstrate methods of Thread class</a></li>
		<li><a href="one-to-ten-reverse-thread">Java Program to Create Two Threads to print 1 to 10 numbers and 11 to 20 numbers</a></li>
		<li><a href="original-reverse-thread">Java Program to Create Two Threads one will print numbers in original order and other in reverse order from 1 to 50</a></li>
		<li><a href="prime-thread">Java Program to create two threads one for Prime number and other for Non-prime number</a></li>
		<li><a href="ascending-descending-thread">Java Program to Create Two Threads to display number in Ascending and Descending order</a></li>
		<li><a href="even-odd-thread">Java Program to Create Two Threads one for Even numbers and Other for odd numbers</a></li>
		<li><a href="even-odd-thread-with-delay">Java Program to Create a Thread to Print all Even nos. from 1 to 50 with 100 ms delay</a></li>
		<li><a href="print-char-with-delay">Java Program to display each character of given string with a delay of 100 ms using Thread</a></li>
		<li><a href="multiple-threads">Java Program with multiple threads performing concurrent operations</a></li>
		<li><a href="message-thread">Java Program to Create Two Threads which will display two different messages</a></li>
		<li><a href="thread-strings">Java Program to display strings using Thread</a></li>
		<li><a href="alternate-two-threads-delay">Java Program to create two threads which will display numbers from 1 to 10 with delay of 1 second</a></li>
		<li><a href="uncaught-exception">Java Program to demonstrate an uncaught exception</a></li>
		<li><a href="use-try-catch">Java Program to demonstrate the use of try-catch block</a></li>
		<li><a href="test-exception">Java Program to throw user-defined exception </a></li>
		<li><a href="name-age-exception">Java Program to throw an User-defined exception on invalid age input</a></li>
		<li><a href="sign-exception">Java Program to throw an user-defined exception if the given number is not positive</a></li>
		<li><a href="string-exception">Java Program to throw an Exception if two strings are not equal</a></li>
		<li><a href="age-excecption">Java Program to throw user-defined exception if entered age is negative</a></li>
		<li><a href="authentication-exception">Java Program to throw "Authentication Failure" exception on wrong password</a></li>
		<li><a href="use-login-check">Java Program to throw Exception on Wrong Password</a></li>
		<li><a href="hello-world">Java Applet Program to display "Hello World !" on Applet Window</a></li>
		<li><a href="hello-world-applet">Java Applet Program to Display "Hello World!"</a></li>
		<li><a href="applet-life-cycle">Java Applet Program to demonstrate Applet Life Cycle methods</a></li>
		<li><a href="draw-lines">Java Applet Program to draw lines</a></li>
		<li><a href="draw-arcs">Java Applet Program to draw and fill Arcs</a></li>
		<li><a href="draw-ellipses">Java Applet Program to draw Ellipses</a></li>
		<li><a href="draw-rectangles">Java Applet Program to draw and fill Rectangle</a></li>
		<li><a href="draw-fill-polygon">Java Applet Program to draw and fill Polygon</a></li>
		<li><a href="draw-polygons">Java Applet Program to draw and fill Polygon</a></li>
		<li><a href="applet-different-shapes">Java Applet Program to Draw Different Shapes</a></li>
		<li><a href="filled-triangle-applet">Java Applet Program to draw and fill Triangle</a></li>
		<li><a href="three-circle-applet">Java Applet Program to Draw Three Coloured Circles</a></li>
		<li><a href="font-demo-applet">Java Applet Program to demonstrate Font class methods</a></li>
		<li><a href="celsi-fahr-applet">Java Applet Program for Celsius to Fahrenheit Conversion</a></li>
		<li><a href="concentric-circles-colored">Java Applet Program for Concentric Circles</a></li>
		<li><a href="control-loop-applet">Java Applet Program to Create Alternate Filled Circle after Empty Circle </a></li>
		<li><a href="print-1-10-numbers-applet">Java Applet Program to Print First Ten Numbers</a></li>
		<li><a href="applet-passing-parameter">Java Applet Program to Pass Parameter to an Applet</a></li>
		<li><a href="char-count-param">Java Applet Program to Count String Length</a></li>
		<li><a href="concentric-circles">Java Applet Program to display Three Concentric Circles</a></li>
		<li><a href="applet-bar-chart">Java Applet Program to Show Bar Chart</a></li>
		<li><a href="set-back-color">Java Applet Program to Set Background Color</a></li>
		<li><a href="digital-clock">Java Applet Program for Digital Clock</a></li>
		<li><a href="analog-clock">Java Applet Program for Analog Clock</a></li>
		<li><a href="text-anim-applet">Java Applet program for Text Animation</a></li>
		<li><a href="moving-banner-text">Java Applet Program to Create Moving Banner Text</a></li>
		<li><a href="box-circle-animation">Java Applet Program for Box and Circle Animation</a></li>
		<li><a href="rolling-banner">Java Applet Program to Display Rolling Banner Using repaint( ) Method of an Applet</a></li>
		<li><a href="signal-control-applet">Java Applet Program for Traffic Signal Animation</a></li>
		<li><a href="random-draw-text-applet">Java Applet Program to Draw Random text at Random Location in Random Color</a></li>
		<li><a href="array-list-operations">Java Program to Demonstrate ArrayList Operations</a></li>
		<li><a href="create-save-file-contents">Java Program to Create and Save data in files</a></li>
		<li><a href="file-read-bytes">Java Program for Reading Bytes from File Using FileInputStream.</a></li>
		<li><a href="read-file-contents">Java Program to Read the Contents of File Using Character Stream</a></li>
		<li><a href="write-into-file">Java Program to Write Data into File Using Character Stream</a></li>
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