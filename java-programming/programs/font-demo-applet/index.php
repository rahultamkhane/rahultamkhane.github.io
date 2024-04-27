<?php 
require("../../../libs/config.php");
$title = "Java Applet Program to demonstrate Font class methods";
$description = "Write a Java Applet program to demonstrate Font class methods";
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
          <div class="bread-title"><h2>Java Applet Program to demonstrate Font class methods</h2></div>
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
				<h2 class="blog-title">Java Applet Program to demonstrate Font class methods</h2>
				<p>Write a Java Applet program to demonstrate Font class methods</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="java">import java.applet.Applet;
import java.awt.Font;
import java.awt.Graphics;

public class FontDemoApplet extends Applet {

	public void paint(Graphics g) {
		
		Font f = g.getFont();
		String fontName = f.getFontName(); // Getting Font name
		String fontFamily = f.getFamily(); // Getting Font family
		int fontStyle = f.getStyle();      // Getting Font style
		int fontSize = f.getSize();        // Getting Font size
		
		String fontStl = "Font Style = ", fontS;
		
		fontName = "Font Name = " + fontName;
		fontFamily = "Font Family = " + fontFamily;
		fontS = "Font Size = " + fontSize;
		
		if( fontStyle == Font.PLAIN ) 
			fontStl += "Plain";
		if( fontStyle == Font.BOLD )
			fontStl += "Bold";
		if( fontStyle == Font.ITALIC )
			fontStl += "Italic";
		
		g.drawString(fontName, 50, 50);
		g.drawString(fontFamily, 50, 80);
		g.drawString(fontS, 50, 110);
		g.drawString(fontStl, 50, 140);
	}
}
/* &lt;applet code="FontDemoApplet.class" width=200 height=200&gt;
   &lt;/applet&gt;
*/</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output"><img src="font-demo-applet.jpg"></div>
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