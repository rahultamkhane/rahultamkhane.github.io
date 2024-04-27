<?php 
require("../../../libs/config.php");
$title = "Java Applet Program for Celsius to Fahrenheit Conversion";
$description = "Write a Java Applet Program for Celsius to Fahrenheit conversion.";
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
              <li><a href="<?php echo SITE_DIR;?>java-applet/">Java Applet</a></li>
			  <li><a href="<?php echo SITE_DIR;?>java-applet/programs/">All Programs</a></li>
            </ul>
          </div>
          <!-- Bread Title -->
          <div class="bread-title"><h2>Java Applet Program for Celsius to Fahrenheit Conversion</h2></div>
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
				<h2 class="blog-title">Java Applet Program for Celsius to Fahrenheit Conversion</h2>
				<p>Write a Java Applet Program for Celsius to Fahrenheit conversion.</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="java">import java.awt.*;		// import awt package
import java.applet.*;	// import applet package

public class CelsiFahrApplet extends Applet 
{
    String msg;
    float celsius,fahrenheit;
    
    public void init() // override init() method
    {
        msg = getParameter("Temp");  // receiving parameter value
        celsius = Float.parseFloat(msg); // Convert string to int
        System.out.println(celsius);
       	fahrenheit = (1.8f * celsius)+32;	//	Formula F = ((9/5)*C)+32
    }
    
    public void paint(Graphics g)
    {
        g.drawString("Temperature in Fahrenheit = "+fahrenheit,10,50);	// display message on applet
    }
}
/* 	&lt;applet code=CelsiFahrApplet.class height=100 width=300&gt;
 	&lt;param name="Temp" value="15"&gt;
	&lt;/applet&gt;
*/
</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output"><img src="celsi-fahr-applet.jpg"></div>
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