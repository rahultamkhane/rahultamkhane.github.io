<?php 
require("../../../libs/config.php");
$title = "JavaScript Program to Show City Information on Dropdown Selection";
$description = "Write a JavaScript program to create dropdown list and dislay the selected city information.<br><br>


Write html script that displays dropdownlist containing options newdelhi, mumbai, bangalore. Write proper JavaScript such that when the user selects any options corresponding description of about 20 words and image of the city appear in table which appears below on the same page.";
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
          <div class="bread-title"><h2>JavaScript Program to Show City Information on Dropdown Selection</h2></div>
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
				<h2 class="blog-title">JavaScript Program to Show City Information on Dropdown Selection</h2>
				<p>Write a JavaScript program to create dropdown list and dislay the selected city information.<br><br>


Write html script that displays dropdownlist containing options newdelhi, mumbai, bangalore. Write proper JavaScript such that when the user selects any options corresponding description of about 20 words and image of the city appear in table which appears below on the same page.</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="html">&lt;html&gt;
&lt;head&gt;
    &lt;title&gt;Dropdown menu for Cities&lt;/title&gt;
    &lt;script&gt;
        function updateData()
        {
            with(document.forms.myform)
            {
                var selectedCity = cities.options[cities.selectedIndex].value
                var image = document.getElementById('image')
                var info = document.getElementById('info')

                switch(selectedCity)
                {
                    case 'New Delhi':
                    image.src= "delhi.gif"
                    info.innerText = "Delhi, officially the National Capital Territory of Delhi (NCT), is a city and a union territory of India containing New Delhi, the capital of India. It is bordered by Haryana (Gurugram, Faridabad, Jhajjar and Sonipat) on three sides and by Uttar Pradesh (Gautam Budh Nagar, Ghaziabad and Baghpat) to the east. The NCT covers an area of 1,484 square kilometres (573 sq mi)."
                    break;

                    case 'Mumbai':
                    image.src= "mumbai.gif"
                    info.innerText = "Mumbai (also known as Bombay) is the most populous city in India according to 2011 Indian census and a Megacity with an population of 12.4 million living under the Mumbai city limits which is administered by the Municipal Corporation of Greater Mumbai. Mumbai is the most densely populated Megacity in the world. Mumbai is also the Global city and the financial capital of India."
                    break;

                    case 'Bangalore':
                    image.src= "bangalore.gif"
                    info.innerText = "Bangalore, officially known as Bengaluru, is the capital of the Indian state of Karnataka. It has a population of over ten million, making it a megacity and the third-most populous city and fifth-most populous urban agglomeration in India. It is located in southern India, on the Deccan Plateau at an elevation of over 900 m (3,000 ft) above sea level, which is the highest among India's major cities."
                    break;
                }
            }
        }
    &lt;/script&gt;
&lt;/head&gt;

&lt;body&gt;
&lt;p id="panel"&gt;Select the city&lt;/p&gt;
&lt;form name="myform"&gt;
    &lt;select name="cities" onchange="updateData()"&gt;
        &lt;option value="NA"&gt;None&lt;/option&gt;
        &lt;option value="New Delhi"&gt;New Delhi&lt;/option&gt;
        &lt;option value="Mumbai"&gt;Mumbai&lt;/option&gt;
        &lt;option value="Bangalore"&gt;Bangalore&lt;/option&gt;
    &lt;/select&gt;&lt;br/&gt;&lt;br/&gt;

    &lt;table&gt;
        &lt;tr&gt;
            &lt;img id="image"&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
        &lt;p id="info"&gt;&lt;/p&gt;
        &lt;/tr&gt;
    &lt;/table&gt;
&lt;/form&gt;
&lt;/body&gt;

&lt;/html&gt;
</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre><code class="plaintext"><img src="dropdown-city-information.jpg"></code></pre>
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