<?php 
require("../../libs/config.php");
$title = "C++ Programs | ".SITE_NAME;
$description = "The best way to learn any programming langugae is by practicing examples. This page contains programs of C++ Programming. You can take the references from these programs and try them on your own.";
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
              <li><a href="<?php echo SITE_DIR;?>cpp-programming/programs/">C Programming</a></li>
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
	include("cpp_programs_navigation.php");
	?>
	
	<div class="col-sm-8 pl-5 pt-4">
    <!-- Page Content -->
		<div class="container">
      <ol class="custom-counter">
		<!-- Basic programs -->
        <li><a href="add-numbers">C++ Program to Add Two Numbers</a></li>
		<li><a href="arithmetic-operators">C++ Program to Demonstrate the Working of Arithmetic Operators</a></li>
		<li><a href="add-numbers-by-user">C++ Program to Add Two Integer Numbers Provided by User</a></li>
		<li><a href="binary-to-decimal">C++ Program to Convert Binary Number to Decimal</a></li>
		<li><a href="cpp-input-output">C++ Program to Display the Numbers Entered by User</a></li>
		<li><a href="calculate-gross-salary">C++ Program to Calculate Gross Salary</a></li>
		<li><a href="celsius-to-fahrenheit">C++ Program to Convert Temperature from Celsius to Fahrenheit</a></li>
		<li><a href="convert-lowercase-to-uppercase-char">C++ Program to Convert Lowercase Character to Uppercase</a></li>
		<li><a href="data-types">C++ Program to Size of all C Language Data Types</a></li>
		<li><a href="days-months">C++ Program to Convert a Given Number of Days into Months and Days</a></li>
		<li><a href="display-fullname">C++ Program to Print Full Name of User</a></li>
		<li><a href="circle-area">C program to Find area of Circle</a></li>
		<li><a href="gets-puts">C++ Program to Read a String with Spaces and Display it on Console</a></li>
		<li><a href="gross-salary-employee">C++ Program for Print Gross Salary of Employee</a></li>
		<li><a href="multiply-numbers-7">C++ Program to Find Multiplication of First Seven Numbers</a></li>
		<li><a href="multiply-numbers">C++ Program for Addition and Multiplication of Two Numbers</a></li>
		<li><a href="number-system-format">C++ Program to Display Given Number in Decimal, Octal and Hexadecimal Format</a></li>
		<li><a href="print-ascii-value">C++ Program to Print ASCII Value of a Character</a></li>
		<li><a href="variable-address">C++ Program to Print Address of Variables</a></li>
		<li><a href="swap-numbers-2">C++ Program to Swap to Numbers Without Using Third Variable</a></li>
		<li><a href="swap-numbers">C++ Program to Swap to Numbers Using Third Variable</a></li>
		<li><a href="student-marks-total-average">C++ Program to Display the Average Marks and Grade of Student</a></li>
		<li><a href="square-perimeter-area">C++ Program to Find Area and Perimeter of Sqaure</a></li>
		<li><a href="enum-week-days">C++ Program to Demonstrate Working of "enum"</a></li>
		<li><a href="hello-world">C++ Program to Display "Hello, World!"</a></li>
		<li><a href="largest-three-number">C++ Program for Largest Among Three Numbers</a></li>
		<li><a href="largest-two-number">C++ Program for Largest Among Two Numbers</a></li>
		
		<!-- Decision Making -->
		<li><a href="armstrong-number">C++ Program to Check Armstrong Number</a></li>
		<li><a href="check-prime-number">C++ Program to Check a Number is Prime Number or not</a></li>
		<li><a href="check-vowel">C++ Program to Check Whether a Character is Vowel or Consonant</a></li>
		<li><a href="decimal-to-binary">C++ Program to Convert Decimal Number to Binary</a></li>
		<li><a href="decimal-to-octal">C++ Program to Convert Decimal Number to Octal</a></li>
		<li><a href="eligible-for-vote">C++ Program to Check User is Eligible for Vote or not</a></li>
		<li><a href="even-odd-check">C++ Program to Check Whether Given Number is Even or Odd</a></li>
		<li><a href="factorial">C++ Program to Find Factorial of a Number</a></li>
		<li><a href="fibonacci-series">C++ Program to Display Fibonacci Series</a></li>
		<li><a href="find-cube-using-goto">C++ Program to Find Cube of a Number N Time (goto statement)</a></li>
		<li><a href="palindrome-number">C++ Program to Check Whether a Number is Palindrome Number or not</a></li>
		<li><a href="palindrome-string">C++ Program to Check Whether a String is Palindrome or not</a></li>
		<li><a href="positive-negative-number">C++ Program to Check Whether a Number is Positive, Negative or Zero</a></li>
		<li><a href="prime-numbers">C Program to Print Prime Numbers Upto N</a></li>
		<li><a href="print-alphabets">C++ Program to Print Alphabets from A to Z</a></li>
		<li><a href="print-even-numbers-n">C++ Program to Print Even Numbers from 1 to N</a></li>
		<li><a href="print-message-n-time">C++ Program to Print "Programming in C" Upto N Times</a></li>
		<li><a href="print-table-1-10">C++ Program to Print Table 1 to 10 Numbers</a></li>
		<li><a href="print-table">C++ Program to Print Table of a Given Number</a></li>
		<li><a href="leap-year">C++ Program to Check Whether a Year is Leap Year or not</a></li>
		<li><a href="menu-driven-even-positive">C++ Program for Menu Driven Even and Positive Number</a></li>
		<li><a href="menu-driven-leap-sum-digits">C++ Program for Menu Driven Leap Year and Sum of Digits</a></li>
		<li><a href="month-season">C++ Program to Display Season of Given Month</a></li>
		<li><a href="number-of-digits">C++ Program to Count the Number of Digits in a Given Number</a></li>
		<li><a href="octal-to-decimal">C Program to Convert Octal Number to Decimal</a></li>
		
		<!-- Star and Pyramid -->
		<li><a href="cross-star-pattern">C++ Program to Print Cross Star Pattern</a></li>
		<li><a href="diamond-star-pyramid">C++ Program to Print Diamond Star Pyramid</a></li>
		<li><a href="floyd-triangle">C++ Program to Print Floyd's Triangle</a></li>
		<li><a href="full-number-pyramid">C++ Program to Print Full Number Pyramid</a></li>
		<li><a href="full-pyramid-number">C++ Program to Print Full Number Pyramid</a></li>
		<li><a href="half-pyramid-number-2">C++ Program to Print Half Pyramid of Numbers</a></li>
		<li><a href="half-pyramid-number">C++ Program to Print Half Pyramid of Numbers</a></li>
		<li><a href="menu-driven-pattern">C++ Program for Menu Driven Pattern Program</a></li>
		<li><a href="sum-odd-numbers">C++ Program to Print Sum of Odd Numbers between 1 to 100</a></li>
		<li><a href="sum-of-digits">C++ Program to Find Sum of Digits of a Given Number</a></li>
		<li><a href="text-pyramid">C++ Program to Display "C Programing" Pyramid</a></li>
		<li><a href="string-palindrome">C++ Program to Check String is Palindrome or not</a></li>
		<li><a href="string-pyramid">C++ Program to Display User Provided String Pyramid</a></li>
		<li><a href="star-diagonal-pattern-inverted">C++ Program to Print Inverted Diagonal Star Pattern</a></li>
		<li><a href="star-diagonal-pattern">C++ Program to Print Diagonal Star Pattern</a></li>
		<li><a href="star-half-pyramid">C++ Program to Print Half Star Pyramid</a></li>
		<li><a href="star-inverted-half-pyramid">C++ Program to Print Inverted Half Star Pyramid</a></li>
		
		<!-- Array -->
		<li><a href="array-copy-elements">C++ Program to Copy Array Elements into Other Array</a></li>
		<li><a href="array-max-number">C++ Program to Find Largest Number in an Array</a></li>
		<li><a href="array-operations">C++ Program to Perform Array Basic Operations</a></li>
		<li><a href="array-reverse">C++ Program to Reverse Array Elements</a></li>
		<li><a href="array-average">C++ Program to Calculate Average of Array Elements</a></li>
		<li><a href="display-array">C++ Program to Display Array Elements</a></li>
		<li><a href="matrix-addition">C++ Program to Add Two Matrices Using Multidimensional Arrays</a></li>
		<li><a href="matrix-multiplication">C++ Program to Multiply Two Matrices Using Multidimensional Arrays</a></li>
		<li><a href="matrix-subtraction">C++ Program to Subtract Two Matrices Using Multidimensional Arrays</a></li>
		
		<!-- String -->
		<li><a href="compare-strings">C++ Program to Compare Two Strings</a></li>
		<li><a href="convert-string-lowercase">C++ Program to Convert String into Lowercase</a></li>
		<li><a href="convert-string-uppercase">C++ Program to Convert String into Uppercase</a></li>
		<li><a href="copy-string">C++ Program to Copy String to New String</a></li>
		<li><a href="string-compare-strcmp">C++ Program to Compare Two Strings Using strcmp() Function</a></li>
		<li><a href="string-concate-strcat">C++ Program to Concatenate Two Strings Using String Function strcat()</a></li>
		<li><a href="string-concate">C++ Program to Concatenate Two Strings Without Using String Function</a></li>
		
		<!-- Functions -->
		<li><a href="add-numbers-function">C++ Program to Add Two Numbers Using Function</a></li>
		
		<li><a href="inverted-half-pyramid">C++ Program to Print Inverted Half Number Pyramid</a></li>
		<li><a href="inverted-number-pattern">C++ Program to Print Inverted Number Pattern</a></li>
		<li><a href="larger-string">C++ Program to Print Largest String Among Two Strings</a></li>
		<li><a href="print-average">C++ Program to Accept Ten Numbers in Array and Print Average of it.</a></li>
		<li><a href="print-month">C++ Program to Print Month of Year</a></li>
		<li><a href="read-number-goto">C++ Program to Read a Valid Number (goto statement)</a></li>
		<li><a href="rectangle-perimeter-area">C++ Program to Find Perimeter and Area  of Rectangle</a></li>
		<li><a href="reverse-number">C++ Program to Display Reverse of Given Number</a></li>
		<li><a href="searching">C++ Program to Search for an Element in Array (Using Linear Search Method)</a></li>
		<li><a href="sort-strings-lexicographically">C++ Program to Sort Strings Lexicographically</a></li>
		<li><a href="sorting">C++ Program to Sort an Array (Using Bubble Sort Method)</a></li>
		<li><a href="string-length">C++ Program to Find Length of String</a></li>
		<li><a href="studen-grade">C++ Program to Display Grade of Student</a></li>
		<li><a href="student-highest-marks">C++ Program to Find Highest Marks in an Array</a></li>
		<li><a href="sum-natural-numbers">C++ Program to Find Sum of Natural Number</a></li>
		<li><a href="string-reverse">C++ Program to Print Reverse of String</a></li>
		
		<!-- Pointers -->
		<li><a href="sort-students-structure">C++ Program to Sort Students Using Pointers</a></li>
		<li><a href="string-length-pointer">C++ Program to Count String Length Using Pointers</a></li>
		
		<!-- Structure -->
		<li><a href="structure-book">C++ Program to Display the Details of Book Using Structure</a></li>
		<li><a href="structure-customer">C++ Program to Display Customer Details in Hotel Using Structue</a></li>
		<li><a href="structure-distance">C++ Program to Print Sum of Distances Using Structure</a></li>
		<li><a href="structure-employee-array">C++ Program to Display the Details of Employee Using Array of Structure</a></li>
		<li><a href="structure-employee">C++ Program to Display the Details of Employee Using Structure</a></li>
		<li><a href="structure-input-data">C++ Program to Read and Display Data Using Structures</a></li>
		<li><a href="structure-library">C++ Program to Display the Details of Library Using Structure</a></li>
		<li><a href="structure-student">C++ Program to Display the Details of Student Using Structure</a></li>
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