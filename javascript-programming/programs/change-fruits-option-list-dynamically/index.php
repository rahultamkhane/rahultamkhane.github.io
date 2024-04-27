<?php 
require("../../../libs/config.php");
$title = "JavaScript Program to Change Option List Dynamically";
$description = "Write a html script which displays 2 radio buttons to the users for fruits and vegetable and 1 option list. When user select fruits radio button option list should present only fruits names to the user & when user select vegetable radio button option list should present only vegetable names to the user.";
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
          <div class="bread-title"><h2>JavaScript Program to Change Option List Dynamically</h2></div>
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
				<h2 class="blog-title">JavaScript Program to Change Option List Dynamically</h2>
				<p>Write a html script which displays 2 radio buttons to the users for fruits and vegetable and 1 option list. When user select fruits radio button option list should present only fruits names to the user & when user select vegetable radio button option list should present only vegetable names to the user.</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="html">&lt;html&gt;
&lt;head&gt;
    &lt;title&gt;Change option list dynamically&lt;/title&gt;
    &lt;script&gt;
    function updateList(elem)
    {
        with(document.forms.contact)
        {
            if(elem == 1)
            {
                list2[0].text = "Apple"
                list2[0].value = "1"
                list2[1].text = "Banana"
                list2[1].value = "2"
                list2[2].text = "Orange"
                list2[2].value = "3"
                list2[3].text = "Pineapple"
                list2[3].value = "4"
                list2[4].text = "Mango"
                list2[4].value = "5"
            }
            if(elem == 2)
            {
                list2[0].text = "Cauliflower"
                list2[0].value = "1"
                list2[1].text = "Broccoli"
                list2[1].value = "2"
                list2[2].text = "Ladyfinger"
                list2[2].value = "3"
                list2[3].text = "Cabbage"
                list2[3].value = "4"
                list2[4].text = "Mushroom"
                list2[4].value = "5"
            }
        }
    }
    &lt;/script&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;form name="contact"&gt;
    &lt;p&gt;
    Select Fruits/vegitables 
    &lt;select name="list1" onchange="updateList(this.value)"&gt;
        &lt;option value="1"&gt;Fruits
        &lt;option value="2"&gt;Vegitables
    &lt;/select&gt;&lt;br/&gt;&lt;br/&gt;
    Your options are 
    &lt;select name="list2"&gt;
        &lt;option value="1"&gt;Apple
        &lt;option value="2"&gt;Banana
        &lt;option value="3"&gt;Orange
        &lt;option value="4"&gt;Pineapple
        &lt;option value="5"&gt;Mango
    &lt;/select&gt;
    &lt;br/&gt;&lt;br/&gt;
&lt;/form&gt;
&lt;/body&gt;
&lt;/html&gt;
</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre><code class="plaintext"><img src="change-fruits-option-list-dynamically.jpg"></code></pre>
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