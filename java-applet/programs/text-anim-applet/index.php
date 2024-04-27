<?php 
require("../../../libs/config.php");
$title = "Java Applet program for Text Animation";
$description = "Write a Java Applet program for Text Animation.";
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
          <div class="bread-title"><h2>Java Applet program for Text Animation</h2></div>
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
				<h2 class="blog-title">Java Applet program for Text Animation</h2>
				<p>Write a Java Applet program for Text Animation.</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="java">import java.awt.Color;
import java.awt.Font;
import java.awt.Graphics;
import java.awt.Image;

public class TextAnimApplet extends Applet implements Runnable {

	Image img;
	Thread t;
	Graphics g,g1;
	public void init()
	{
		img=createImage(400,400);
		g=getGraphics();
		g1=img.getGraphics();
		t=new Thread(this);
		t.start();
	}
	public void run()
	{
		Font f=new Font("Comic Sans MS",Font.BOLD,24);
		g1.setFont(f);
		for(int i=1;i&lt;=400;i+=3)
			drawme("MultiThreading In Java",50,i);
	}
	void drawme(String s,int x,int y)
	{
		g1.setColor(Color.black);
		g1.fillRect(0,0,400,400);
		g1.setColor(Color.white);
		g1.drawString(s,x,y);
		g.drawImage(img,0,0,this);
		try
		{
			Thread.sleep(10);
		}catch(Exception ee){}
	}
}
/*
&lt;applet height=400 width=400 code=TextAnimApplet&gt;
&lt;/applet&gt;
*/
</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output"><img src="text-anim-applet.jpg"></div>
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