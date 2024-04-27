<?php 
require("../../../libs/config.php");
$title = "Java Applet Program to Display Rolling Banner Using repaint( ) Method of an Applet";
$description = "Write a Java applet program to display rolling banner using repaint( ) method of an applet.";
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
          <div class="bread-title"><h2>Java Applet Program to Display Rolling Banner Using repaint( ) Method of an Applet</h2></div>
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
				<h2 class="blog-title">Java Applet Program to Display Rolling Banner Using repaint( ) Method of an Applet</h2>
				<p>Write a Java applet program to display rolling banner using repaint( ) method of an applet.</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="java">import java.awt.*;
import java.applet.*;
public class Banner extends Applet implements Runnable
{
	String msg = "Welcome to Java Applet";
	Thread t = null;
	Font f;
	
	public void init()
	{
		setBackground(Color.pink);
		setForeground(Color.blue);
		f = new Font("Times New Roman",Font.BOLD,20);
		setFont(f);
	}
	public void start() {
		t = new Thread(this);
		t.start();
	}
	public void run()
	{
		char ch;
		
		while(true)
		{
			repaint();
			ch = msg.charAt(0);
			msg = msg.substring(1,msg.length());
			msg = msg + ch;
				
			try
			{
				Thread.sleep(1000);				
			}
			catch(InterruptedException ie){
				System.out.println(ie);
			}
		}
	}
	public void stop()
	{
		t = null;
	}
	public void paint(Graphics g)
	{
		g.drawString(msg,50,30);
	}
}
/*	&lt;applet code=Banner.class width=300 height=300&gt;
 	&lt;/applet&gt;	*/
</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output"><img src="rolling-banner.jpg"></div>
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