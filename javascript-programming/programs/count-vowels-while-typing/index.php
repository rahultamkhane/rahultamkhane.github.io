<?php 
require("../../../libs/config.php");
$title = "JavaScript Program to Count Vowels and Consonants while writing a text in TextArea";
$description = "Write a JavaScript program to count vowels and consonants while user writing a text in textarea.";
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
          <div class="bread-title"><h2>JavaScript Program to Count Vowels and Consonants while writing a text in TextArea</h2></div>
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
				<h2 class="blog-title">JavaScript Program to Count Vowels and Consonants while writing a text in TextArea</h2>
				<p>Write a JavaScript program to count vowels and consonants while user writing a text in textarea.</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="html">&lt;html&gt;
&lt;head&gt;
    &lt;title&gt;Count Vowel and Consonants&lt;/title&gt;
    &lt;script&gt;
        function count()
        {
            var v= 0, c = 0
            var data = document.getElementById('content').value
            var vowels = document.getElementById('vowels')
            var consonants = document.getElementById('consonants')

            for(i=0; i&lt;data.length; i++)
            {
                ch = data[i]
                if(ch=='a' || ch=='A' || ch=='e' || ch=='E' || ch=='i'
                    || ch=='I' || ch=='o' || ch=='O' || ch=='u' || ch=='U')
                {
                    v++
                }
                else
                {
                    c++
                }
            }
            vowels.innerHTML = "Numbers of Vowels = &lt;b&gt;" + v + "&lt;/b&gt;"
            consonants.innerHTML = "Numbers of Consonants = &lt;b&gt;" + c + "&lt;/b&gt;"
        }
    &lt;/script&gt;
&lt;/head&gt;

&lt;body&gt;
&lt;p id="panel"&gt;Enter some data..&lt;/p&gt;
&lt;textarea id="content" rows="5" cols="40" oninput="count()"&gt;&lt;/textarea&gt;
&lt;p id="vowels"&gt;&lt;/p&gt;
&lt;p id="consonants"&gt;&lt;/p&gt;
&lt;/body&gt;

&lt;/html&gt;
</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre><code class="plaintext"><img src="count-vowels-while-typing.jpg"></code></pre>
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