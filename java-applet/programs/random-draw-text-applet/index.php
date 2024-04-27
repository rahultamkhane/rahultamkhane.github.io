<?php 
require("../../../libs/config.php");
$title = "Java Applet Program to Draw Random text at Random Location in Random Color";
$description = "Write a Java applet program to draw random text at random location in random color.";
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
          <div class="bread-title"><h2>Java Applet Program to Draw Random text at Random Location in Random Color</h2></div>
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
				<h2 class="blog-title">Java Applet Program to Draw Random text at Random Location in Random Color</h2>
				<p>Write a Java applet program to draw random text at random location in random color.</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="java">import java.applet.Applet;
import java.awt.Color;
import java.awt.Font;
import java.awt.Graphics;

public class RandomDrawTextApplet extends Applet implements Runnable {

	Thread t;
	Graphics g;
	public void init()
	{
		g=getGraphics();
		Font f=new Font("Comic Sans MS",Font.BOLD,20);
		g.setFont(f);
		t=new Thread(this);
		t.start();
	}
	public void run()
	{
		while(true)
		{
			int x=(int)(Math.random()*34534%500);
			int y=(int)(Math.random()*34534%500);
			int r1=(int)(Math.random()*34534%256);
			int r2=(int)(Math.random()*34534%256);
			int r3=(int)(Math.random()*34534%256);
			Color c=new Color(r1,r2,r3);
			g.setColor(c);
			g.drawString("Java",x,y);
			try
			{
				Thread.sleep(70);
			}catch(Exception ee){}
		}
	}
}
/*
 &lt;applet height=600 width=600 code=RandomDrawTextApplet&gt;
 &lt;/applet&gt;
*/
</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output"><img src="random-draw-text-applet.jpg"></div>
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