<?php 
require("../../../libs/config.php");
$title = "JavaScript Program to Create Registration Form with Validation";
$description = "Write a JavaScript program to create registration form with validation";
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
              <li><a href="<?php echo SITE_DIR;?>javascript-programming/">JavaScript Programming</a></li>
			  <li><a href="<?php echo SITE_DIR;?>javascript-programming/programs/">All Programs</a></li>
            </ul>
          </div>
          <!-- Bread Title -->
          <div class="bread-title"><h2>JavaScript Program to Create Registration Form with Validation</h2></div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--/ End Breadcrumb -->

<section class="news-area archive blog-single section-padding">
	<div class="container">
		<div class="row">
		
<?php 
include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/leftbar.php");
?>
	
	<div class="col-sm-8">
		<div class="blog-single-main">
			<div class="blog-detail">
				<h2 class="blog-title">JavaScript Program to Create Registration Form with Validation</h2>
				<p>Write a JavaScript program to create registration form with validation</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="html">&lt;html&gt;
&lt;head&gt;
    &lt;title&gt;Registration form with validation&lt;/title&gt;
    &lt;style&gt;
        input[type="text"],input[type="password"], select {
            border: 1px solid red;
            border-radius: 5px;
            padding: 5px;
            margin: 5px;	
        }
        form {
            background-color: #f1f1f1;
            width: 70%;
            padding: 20px;
        }
        input[type="submit"] {
            border-radius: 5px;
            padding: 5px;
            margin: 5px;
            background-color: green;
            color: white;
            font-size: 14;
        }
        input[type="reset"] {
            border-radius: 5px;
            padding: 5px;
            margin: 5px;
            background-color: red;
            color: white;
            font-size: 14;
        }
    &lt;/style&gt;
    &lt;script&gt;
        function input(e) {
            e.style.backgroundColor="yellow";
        }
        function reset1(e) {
            e.style.backgroundColor="white";
        }
        function fullName(name) 
        {
            var n = name.value
            var re = /^[a-zA-Z]+$/

            if(n.match(re)==null)
            {
                alert('Only alphabets are allowed')
                name.value=n.substring(0, n.length-1) 
            }
            else 
            {
                var f = document.getElementById("fname").value;
                var m = document.getElementById("mname").value;
                var l = document.getElementById("lname").value;
                document.getElementById("sname").value = f + " " + m + " " + l;	
            }
        }
        function checkValidEmail(email)
        {
            var e = email.value
            var re = /^([a-zA-Z0-9_\.]+)@([a-zA-Z0-9_\.]+)\.([a-z]+)$/

            if(e.match(re)==null)
            {
                alert('Enter valid mail')
            }
        }
    &lt;/script&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;center&gt;
&lt;form action="#" method="post"&gt;
    &lt;h1&gt;Registration Form&lt;/h1&gt;
    &lt;table&gt;
        &lt;tr&gt;
            &lt;td&gt;First Name&lt;/td&gt;
            &lt;td&gt;&lt;input type="text" id="fname" placeholder="Enter first name" onclick="input(this)" onblur="reset1(this)" oninput="fullName(this)"/&gt;&lt;/td&gt;
            &lt;td&gt;&lt;span id="msg1" hidden&gt;Alphabets allowed only&lt;/span&gt;&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
            &lt;td&gt;Middle Name&lt;/td&gt;
            &lt;td&gt;&lt;input type="text" id="mname" placeholder="Enter middle name" onclick="input(this)" onblur="reset1(this)" oninput="fullName(this)"/&gt;&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
            &lt;td&gt;Last Name&lt;/td&gt;
            &lt;td&gt;&lt;input type="text" id="lname" placeholder="Enter last name" onclick="input(this)" onblur="reset1(this)" oninput="fullName(this)"/&gt;&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
            &lt;td&gt;Full Name&lt;/td&gt;
            &lt;td&gt;&lt;input type="text" id="sname" disabled/&gt;&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
            &lt;td&gt;Date of Birth&lt;/td&gt;
            &lt;td&gt;
                &lt;select name="date"&gt;
                    &lt;option&gt;01&lt;/option&gt;
                    &lt;option&gt;02&lt;/option&gt;
                    &lt;option&gt;03&lt;/option&gt;
                    &lt;option&gt;04&lt;/option&gt;
                    &lt;option&gt;05&lt;/option&gt;
                    &lt;option&gt;06&lt;/option&gt;
                    &lt;option&gt;07&lt;/option&gt;
                    &lt;option&gt;08&lt;/option&gt;
                    &lt;option&gt;09&lt;/option&gt;
                    &lt;option&gt;10&lt;/option&gt;
                    &lt;option&gt;11&lt;/option&gt;
                    &lt;option&gt;12&lt;/option&gt;
                    &lt;option&gt;13&lt;/option&gt;
                    &lt;option&gt;14&lt;/option&gt;
                    &lt;option&gt;15&lt;/option&gt;
                    &lt;option&gt;16&lt;/option&gt;
                    &lt;option&gt;17&lt;/option&gt;
                    &lt;option&gt;18&lt;/option&gt;
                    &lt;option&gt;19&lt;/option&gt;
                    &lt;option&gt;20&lt;/option&gt;
                    &lt;option&gt;21&lt;/option&gt;
                    &lt;option&gt;22&lt;/option&gt;
                    &lt;option&gt;23&lt;/option&gt;
                    &lt;option&gt;24&lt;/option&gt;
                    &lt;option&gt;25&lt;/option&gt;
                    &lt;option&gt;26&lt;/option&gt;
                    &lt;option&gt;27&lt;/option&gt;
                    &lt;option&gt;28&lt;/option&gt;
                    &lt;option&gt;29&lt;/option&gt;
                    &lt;option&gt;30&lt;/option&gt;
                    &lt;option&gt;31&lt;/option&gt;
                &lt;/select&gt;

                &lt;select name="month"&gt;
                    &lt;option&gt;01&lt;/option&gt;
                    &lt;option&gt;02&lt;/option&gt;
                    &lt;option&gt;03&lt;/option&gt;
                    &lt;option&gt;04&lt;/option&gt;
                    &lt;option&gt;05&lt;/option&gt;
                    &lt;option&gt;06&lt;/option&gt;
                    &lt;option&gt;07&lt;/option&gt;
                    &lt;option&gt;08&lt;/option&gt;
                    &lt;option&gt;09&lt;/option&gt;
                    &lt;option&gt;10&lt;/option&gt;
                    &lt;option&gt;11&lt;/option&gt;
                    &lt;option&gt;12&lt;/option&gt;
                &lt;/select&gt;

                &lt;select name="year"&gt;
                    &lt;option&gt;1990&lt;/option&gt;
                    &lt;option&gt;1991&lt;/option&gt;
                    &lt;option&gt;1992&lt;/option&gt;
                    &lt;option&gt;1993&lt;/option&gt;
                    &lt;option&gt;1994&lt;/option&gt;
                    &lt;option&gt;1995&lt;/option&gt;
                    &lt;option&gt;1996&lt;/option&gt;
                    &lt;option&gt;1997&lt;/option&gt;
                    &lt;option&gt;1998&lt;/option&gt;
                    &lt;option&gt;1999&lt;/option&gt;
                    &lt;option&gt;2000&lt;/option&gt;
                    &lt;option&gt;2001&lt;/option&gt;
                    &lt;option&gt;2002&lt;/option&gt;
                    &lt;option&gt;2003&lt;/option&gt;
                    &lt;option&gt;2004&lt;/option&gt;
                    &lt;option&gt;2005&lt;/option&gt;
                &lt;/select&gt;
            &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
            &lt;td&gt;Gender&lt;/td&gt;
            &lt;td&gt;
                &lt;input type="radio" name="gender" value="Male"&gt;Male&lt;/input&gt;&nbsp;&nbsp;&nbsp;&nbsp;
                &lt;input type="radio" name="gender" value="Female"&gt;Female&lt;/input&gt;
            &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
            &lt;td&gt;Contry&lt;/td&gt;
            &lt;td&gt;
                &lt;select name="contry"&gt;
                    &lt;option selected&gt;India&lt;/option&gt;
                    &lt;option&gt;US&lt;/option&gt;
                    &lt;option&gt;UK&lt;/option&gt;
                &lt;/select&gt;
            &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
            &lt;td&gt;Email&lt;/td&gt;
            &lt;td&gt;
                &lt;input type="text" name="email" onblur="checkValidEmail(this)" /&gt;
            &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
            &lt;td&gt;Phone&lt;/td&gt;
            &lt;td&gt;
            &lt;input type="text" name="phone" /&gt;
            &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
            &lt;td&gt;Password&lt;/td&gt;
            &lt;td&gt;
                &lt;input type="password" name="password1" /&gt;
            &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
            &lt;td&gt;Comfirm Password&lt;/td&gt;
            &lt;td&gt;
                &lt;input type="password" name="password2" /&gt;
            &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
            &lt;td&gt;&lt;/td&gt;
            &lt;td&gt;
                &lt;input type="submit" value="Submit"/&gt;&nbsp;&nbsp;&nbsp;&nbsp;
                &lt;input type="reset" value="Cancel" /&gt;
            &lt;/td&gt;
        &lt;/tr&gt;
    &lt;/table&gt;
&lt;/form&gt;
&lt;/center&gt;
&lt;/body&gt;
&lt;/html&gt;
</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre><code class="plaintext"><img src="registration-form.jpg"></code></pre>
				</div>
				<!-- DESC -->

			<br>
      
			<?php 
				include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/feedback.php");
			?>

			<br>
			<?php 
				include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
			?>
			<br>
		</div> <!-- /col-sm-8 -->	
<?php 
include$_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/rightbar.php";
?>
	</div>	<!-- /row -->

</div> <!-- /container -->
 
<?php 
include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/footer.php");
?>