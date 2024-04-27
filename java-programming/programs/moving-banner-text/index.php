<?php 
require("../../../libs/config.php");
$title = "Java Applet Program to Create Moving Banner Text";
$description = "Write a Java applet program to create moving banner text.";
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
          <div class="bread-title"><h2>Java Applet Program to Create Moving Banner Text</h2></div>
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
				<h2 class="blog-title">Java Applet Program to Create Moving Banner Text</h2>
				<p>Write a Java applet program to create moving banner text.</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="java">&lt;applet code="ParamBanner" width=300 height=50&gt;
&lt;param name=message value="Java makes the Web move!"&gt;
&lt;/applet&gt;
*/

import java.awt.*;
import java.applet.*;

public class ParamBanner extends Applet implements Runnable {
	String msg;
	Thread t = null;
	int state;
	boolean stopFlag;
	// Set colors and initialize thread.
	public void init() {
		setBackground(Color.cyan);
		setForeground(Color.red);
	}
	// Start thread
	public void start() {
		msg = getParameter("message");
		if(msg == null) msg = "Message not found.";
			msg = " " + msg;
		t = new Thread(this);
		stopFlag = false;
		t.start();
	}
	// Entry point for the thread that runs the banner.
	public void run() {
		char ch;
		// Display banner
		for( ; ; ) {
			try {
				repaint();
				Thread.sleep(250);
				ch = msg.charAt(0);
				msg = msg.substring(1, msg.length());
				msg += ch;
				if(stopFlag)
					break;
			} catch(InterruptedException e) {}
		}
	}
	// Pause the banner.
	public void stop() {
		stopFlag = true;
		t = null;
	}
	// Display the banner.
	public void paint(Graphics g) {
		g.drawString(msg, 50, 30);
	}
}
</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output"><img src="moving-banner-text.jpg"></div>
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