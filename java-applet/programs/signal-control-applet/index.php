<?php 
require("../../../libs/config.php");
$title = "Java Applet Program for Traffic Signal Animation";
$description = "Write a Java Applet program for Traffic Signal Animation.";
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
          <div class="bread-title"><h2>Java Applet Program for Traffic Signal Animation</h2></div>
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
				<h2 class="blog-title">Java Applet Program for Traffic Signal Animation</h2>
				<p>Write a Java Applet program for Traffic Signal Animation.</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="java">import java.awt.Color;
import java.awt.Graphics;

public class SignalControlApplet extends Applet implements Runnable {

	int x=-1;
	Thread t;
	Graphics g;
	public void init()
	{
		g=getGraphics();
		t=new Thread(this);
		t.start();
	}
	public void run()
	{
		while(true)
		{
			x=x+1;
			g.setColor(Color.white);
			g.fillRect(0,0,600,600);
			switch(x)
			{
				case 0:g.setColor(Color.red);
					g.fillOval(50,50,100,100);
					g.setColor(Color.black);
					g.fillOval(50,160,100,100);
					g.fillOval(50,270,100,100);
					break;
				case 1:g.setColor(Color.black);
					g.fillOval(50,50,100,100);
					g.setColor(Color.yellow);
					g.fillOval(50,160,100,100);
					g.setColor(Color.black);
					g.fillOval(50,270,100,100);
					break;
				case 2:g.setColor(Color.black);
					g.fillOval(50,50,100,100);
					g.fillOval(50,160,100,100);
					g.setColor(Color.green);
					g.fillOval(50,270,100,100);
					x=-1;
					break;
			}
			try
			{
				Thread.sleep(500);
			}catch(Exception ee){}
		}
	}
}
/*
 &lt;applet height=600 width=600 code=SignalControlApplet&gt;
 &lt;/applet&gt;
*/
</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output"><img src="signal-control-applet.jpg"></div>
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