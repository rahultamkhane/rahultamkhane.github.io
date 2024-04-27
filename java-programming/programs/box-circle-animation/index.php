<?php 
require("../../../libs/config.php");
$title = "Java Applet Program for Box and Circle Animation";
$description = "Write a Java applet program for Box and Circle Animation.";
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
          <div class="bread-title"><h2>Java Applet Program for Box and Circle Animation</h2></div>
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
				<h2 class="blog-title">Java Applet Program for Box and Circle Animation</h2>
				<p>Write a Java applet program for Box and Circle Animation.</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="java">import java.awt.*;
import java.applet.*;
public class BoxCircleAnimation extends Applet implements Runnable
{
	Thread thread;
	int delay;
	int pos=1;
	int flag=0;

	public void start()
	{
		thread = new Thread(this);
		thread.start();
		delay = 100;
	}

	public void run()
	{
		while(Thread.currentThread()==thread)
		{
			repaint();
			if(flag==0) {                                   
				pos = pos+10;                                    
			}
			else {
				pos = pos-10;
			}
			
			if(pos &gt;= 300)
				flag = 1;
			
			if(pos &lt;= 10)
				flag = 0;
			
			try
			{
				Thread.sleep(delay);
			}
			catch(InterruptedException e){}
		}
	}

	public void paint(Graphics g)
	{                
		g.setColor(Color.green);
		g.fillRect(100, pos, 30, 30);
		g.setColor(Color.red);
		g.fillOval(pos, 100, 30, 30);
	}

	public void stop()
	{
		thread = null;
	}
}
/*	&lt;applet code=BoxCircleAnimation.class width=300 height=300&gt;
 	&lt;/applet&gt;	*/
</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output"><img src="box-circle-animation.jpg"></div>
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