<?php 
require("../../../libs/config.php");
$title = "Java Applet Program to Show Bar Chart";
$description = "Write a Java applet program to show bar chart.";
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
          <div class="bread-title"><h2>Java Applet Program to Show Bar Chart</h2></div>
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
				<h2 class="blog-title">Java Applet Program to Show Bar Chart</h2>
				<p>Write a Java applet program to show bar chart.</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="java">import java.awt.*;
import java.applet.*;

public class BarChart extends Applet
{
	int n=0;
	String label[];
	int value[];
	
	public void init() {
		
		setBackground(Color.pink);
		try {
			
			int n = Integer.parseInt(getParameter("Columns"));
			label = new String[n];
			value = new int[n];
			label[0]  = getParameter("label1");
			label[1]  = getParameter("label2");
			label[2]  = getParameter("label3");
			label[3]  = getParameter("label4");
			value[0] = Integer.parseInt(getParameter("c1"));
			value[1] = Integer.parseInt(getParameter("c2"));
			value[2] = Integer.parseInt(getParameter("c3"));
			value[3] = Integer.parseInt(getParameter("c4"));
		}
		catch(NumberFormatException e){}
	}
	public void paint(Graphics g)
	{
		for(int i = 0; i &lt; 4; i++) {
			g.setColor(Color.black);
			g.drawString(label[i], 20, i * 50 + 30);
			g.setColor(Color.red);
			g.fillRect(50, i * 50 + 10, value[i], 40);
		}
	}
}
/*	&lt;applet code="BarChart" width="400" height="400"&gt;
	&lt;param name=c1 value=110&gt;
	&lt;param name=c2 value=150&gt;
	&lt;param name=c3 value=100&gt;
	&lt;param name=c4 value=170&gt;
	&lt;param name=label1 value=1991&gt;
	&lt;param name=label2 value=1992&gt;
	&lt;param name=label3 value=1993&gt;
	&lt;param name=label4 value=1994&gt;
	&lt;param name=Columns value=4&gt;
&lt;/applet&gt;
*/
</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output"><img src="applet-bar-chart.jpg"></div>
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