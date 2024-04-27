<?php 
require("../../../libs/config.php");
$title = "Java Program for Analog Clock";
$description = "Write a Write a Java program for analog clock..";
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
          <div class="bread-title"><h2>Java Program for Analog Clock</h2></div>
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
				<h2 class="blog-title">Java Program for Analog Clock</h2>
				<p>Write a Write a Java program for analog clock..</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="java">import java.util.Date;
import java.awt.Graphics;
import java.lang.Number;
import java.awt.Color;
import java.awt.Image;
import java.awt.Font;
import java.awt.FontMetrics;

//Class Definition: AnalogClock

public class AnalogClock extends java.applet.Applet
implements Runnable {

	//----------VARIABLES----------
	
	Thread runthread;		//Thread variable

	int htmlradius;			//PARAM - radius of AnalogClock face
	String image;			//PARAM - image file
	int horizoffset;		//PARAM - horizontal number offset
	int vertoffset;			//PARAM - vertical number offset

	double AnalogClockdiameter;	//Diameter of the face of the AnalogClock

	double hour; 			//System hour, 0-23
	double minute;			//System minute, 0-59
	double second; 			//System second, 0-59
	double dotdiameter = 8;	//Diameter of a dot on the AnalogClock
	double dx;				//X coordinates of number on the AnalogClock
	double dy;				//Y coordinates of number on the AnalogClock
	double xcenter; 		//X coordinate of the center of the AnalogClock
	double ycenter;			//Y coordinate of the center of the AnalogClock
	double hradius; 		//Length of the hour hand
	double mradius;			//Length of the minute hand
	double sradius;			//Length of the second hand

	Font f = new Font("TimesRoman", Font.BOLD, 14);	//Font of numbers
	FontMetrics fm = getFontMetrics(f); 			//Font details

	int[] sxpts = new int[5];	//X coordinates for each point of the second hand polygon
	int[] sypts = new int[5];	//Y coordinates for each point of the second hand polygon
	
	int[] mxpts = new int[5];	//X coordinates for each point of the minute hand polygon
	int[] mypts = new int[5];	//Y coordinates for each point of the minute hand polygon
	
	int[] hxpts = new int[5];	//X coordinates for each point of the hour hand polygon
	int[] hypts = new int[5];	//Y coordinates for each point of the hour hand polygon
	
	int pts = 5;

	double lastsecond = -1; 	//Last second drawn

	Image offscreenImage; 		//Used for double buffering
	Graphics offscreenGraphics; //Used for double buffering
	int iwidth;					//Image width
	int iheight;				//Image height
	double newheight;			//Scaled image height
	double newwidth;			//Scaled image width
	float scalefactor;			//Scale factor
	double imageboxlength;		//Size of image bounding box
	int imagex;					//Image x coord
	int imagey;					//Image y coord
	Image AnalogClockImage;			//Image

	//----------FUNCTIONS----------

	//=============================
	//Function:	run()
	//Input:	none
	//Output:	none
	//=============================
	
	public void run() {
	
		while (true) {
			this.getDate();
			if (second != lastsecond) {
				this.calculatePoints();
				repaint();
			}
			try { Thread.sleep(480); }
			catch (InterruptedException e) {}
		}
	}

	//=============================
	//Function:	init()
	//Input:	none
	//Output:	none
	//=============================
	
	public void init() {
	
		//Get applet PARAM's
		AnalogClockdiameter = Integer.parseInt((getParameter("diameter")));
		image = getParameter("image");
		horizoffset = Integer.parseInt((getParameter("hoff")));
		vertoffset = Integer.parseInt((getParameter("voff")));

		//Calculate center & hand radius
		xcenter = AnalogClockdiameter/2;
		ycenter = AnalogClockdiameter/2;
		hradius = 0.5*(AnalogClockdiameter/2);
		mradius = 0.7*(AnalogClockdiameter/2);

		//Initializa image object
		offscreenImage = createImage(size().width, size().height);
		offscreenGraphics = offscreenImage.getGraphics();
		AnalogClockImage = getImage(getCodeBase(), image);
		sradius = 0.7*(AnalogClockdiameter/2);
	}

	//=============================
	//Function:	calculatePoints()
	//Input:	none
	//Output:	none
	//			updates sxpts[], sypts, mxpts[], mypts[],
	//			hxpts[], hypts[]
	//=============================
	
	public void calculatePoints() {
	
		//Calculates the points which make up each corner of the polygon (hand) based upon
		//the current time.
		//x endpoint = xcenter + radius*sin(2PI*time/60) for minutes and seconds
		//y endpoint = ycenter - radius*cos(2PI*time/60) for minutes and seconds
		//The other two midpoints are half the length of the hand offset by 0.1 radians
		
		sxpts[0] = sxpts[4] = (int) xcenter;
		sypts[0] = sypts[4] = (int) ycenter;

		sxpts[2] = (int)(xcenter + (sradius*(Math.sin(2*Math.PI*(second/60)))));
		sypts[2] = (int)(ycenter + (-1*sradius*(Math.cos(2*Math.PI*(second/60)))));

		sxpts[1] = (int)(xcenter + (0.3*sradius*(Math.sin(2*Math.PI*(second/60) - 0.1))));
		sypts[1] = (int)(ycenter + (-0.3*sradius*(Math.cos(2*Math.PI*(second/60) - 0.1))));

		sxpts[3] = (int)(xcenter + (0.3*sradius*(Math.sin(2*Math.PI*(second/60) + 0.1))));
		sypts[3] = (int)(ycenter + (-0.3*sradius*(Math.cos(2*Math.PI*(second/60) + 0.1))));

		mxpts[0] = mxpts[4] = (int) xcenter;
		mypts[0] = mypts[4] = (int) ycenter;

		mxpts[2] = (int)(xcenter + (mradius*(Math.sin(2*Math.PI*(minute/60)))));
		mypts[2] = (int)(ycenter + (-1*mradius*(Math.cos(2*Math.PI*(minute/60)))));

		mxpts[1] = (int)(xcenter + (0.5*mradius*(Math.sin(2*Math.PI*(minute/60) - 0.1))));
		mypts[1] = (int)(ycenter + (-0.5*mradius*(Math.cos(2*Math.PI*(minute/60) - 0.1))));

		mxpts[3] = (int)(xcenter + (0.5*mradius*(Math.sin(2*Math.PI*(minute/60) + 0.1))));
		mypts[3] = (int)(ycenter + (-0.5*mradius*(Math.cos(2*Math.PI*(minute/60) + 0.1))));

		//To gradually move the hour hand so that it's position reflects the 
		//position of the minute hand, we need to calculate how many seconds 
		//out of 12 hours (43,200s) have passed and substitute that value for 
		//s/60. Otherwise, the hour hand would operate as a 'step' function 
		//portraying a misleading time.

		double totalSeconds = calculateSeconds();

		hxpts[0] = hxpts[4] = (int) xcenter;
		hypts[0] = hypts[4] = (int) ycenter;

		hxpts[2] = (int)(xcenter + (hradius*(Math.sin(2*Math.PI*totalSeconds))));
		hypts[2] = (int)(ycenter + (-1*hradius*(Math.cos(2*Math.PI*totalSeconds))));

		hxpts[1] = (int)(xcenter + (0.5*hradius*(Math.sin(2*Math.PI*totalSeconds - 0.1))));
		hypts[1] = (int)(ycenter + (-0.5*hradius*(Math.cos(2*Math.PI*totalSeconds - 0.1))));

		hxpts[3] = (int)(xcenter + (0.5*hradius*(Math.sin(2*Math.PI*totalSeconds + 0.1))));
		hypts[3] = (int)(ycenter + (-0.5*hradius*(Math.cos(2*Math.PI*totalSeconds + 0.1))));
	}

	//=============================
	//Function:	calculateSeconds()
	//Input:	none
	//Output:	total # of elapsed seconds
	//=============================
	
	public double calculateSeconds() {
	
		//Get the total number of seconds elapsed in this 12-hour period
		return( ( (3600*hour + 60*minute + second) / 43200) );
	}

	//=============================
	//Function:	paint()
	//Input:	graphics object
	//Output:	none
	//			updates drawing area
	//=============================
	
	public void paint(Graphics g) {
		
		//Set background color
		setBackground(Color.white);
		
		//Set font
		g.setFont(f);
		
		//Set draw color
		offscreenGraphics.setColor(Color.white);
		
		//Draw Oval face and background rectangle
		offscreenGraphics.fillOval(0,0,(int)AnalogClockdiameter, (int)AnalogClockdiameter); //Draw an oval
		offscreenGraphics.fillRect(0,0, (int)AnalogClockdiameter+1, (int)AnalogClockdiameter+1);
		
		offscreenGraphics.setColor(Color.black);
		offscreenGraphics.drawOval(0,0,(int)AnalogClockdiameter, (int)AnalogClockdiameter);

		//Each number is first calculated, then converted to a string. The string's height and
		//width are calculated using font metrics. The string can then be centered at it's 
		//appropriate position using a formula similar to the one that determines where each hand
		//should be drawn.
		
		for (double i=0; i&lt;60; i+=5) {
			
			double number;		//hour

			number = i/5;
			
			if (number == 0) {
				number = 12;
			}
			
			//Convert to string and remove the ".0"
			String s = Double.toString(number);
			String t = s.substring(0, s.length() - 2);
			
			//dx = (int) (xcenter + (0.9*AnalogClockdiameter/2)*(Math.sin(2*Math.PI*(i/60))) - fm.stringWidth(Double.toString(number))/2 + horizoffset);
			//dy = (int) (ycenter - (0.9*AnalogClockdiameter/2)*(Math.cos(2*Math.PI*(i/60))) + (fm.getHeight())/2) + vertoffset;

			//offscreenGraphics.drawString(Double.toString(number), (int)dx, (int)dy);
			
			dx = (int) (xcenter + (0.9*AnalogClockdiameter/2)*(Math.sin(2*Math.PI*(i/60))) - fm.stringWidth(t)/2 + horizoffset);
			dy = (int) (ycenter - (0.9*AnalogClockdiameter/2)*(Math.cos(2*Math.PI*(i/60))) + (fm.getHeight())/2) + vertoffset;
			
			//Draw the face number
			offscreenGraphics.drawString(t, (int)dx, (int)dy);
		}

		//Get image size
		iwidth = AnalogClockImage.getWidth(this);
		iheight = AnalogClockImage.getHeight(this);

		//Get the size of the bounding box
		imageboxlength = (double)(AnalogClockdiameter*(Math.sin(Math.PI/4))*0.8);

		//Scale the image
		if (iwidth &gt; iheight) {
			scalefactor = (float)(imageboxlength/iwidth);
		}	
	
		else {
			scalefactor = (float)(imageboxlength/iheight);
		}
		
		newwidth = iwidth*scalefactor;
		newheight = iheight*scalefactor;

		imagex = (int)(xcenter - (newwidth/2));
		imagey = (int)(ycenter - (newheight/2));

		//Draw AnalogClock image
		offscreenGraphics.drawImage(AnalogClockImage, imagex, imagey, (int)newwidth, (int)newheight, this);

		//Draw each hand
		offscreenGraphics.setColor(Color.red); 

		offscreenGraphics.fillPolygon(sxpts, sypts, pts);

		offscreenGraphics.setColor(Color.black);
		offscreenGraphics.fillPolygon(mxpts, mypts, pts);

		offscreenGraphics.setColor(Color.green);
		offscreenGraphics.fillPolygon(hxpts, hypts, pts);

		lastsecond = second;

		//Swap the offscreen image with the onscreen image
		g.drawImage(offscreenImage, 0, 0, this);
	}

	//=============================
	//Function:	update()
	//Input:	graphics object
	//Output:	none
	//Note:		Overrides update so that canvas isn't cleared
	//=============================
	
	public void update(Graphics g) {
		
		//Call the paint routine without clearing the canvas
		paint(g);
	}

	//=============================
	//Function:	getDate()
	//Input:	none
	//Output:	none
	//			updates hour, minute, second
	//=============================
	
	public void getDate() {
	
		//Get the current date/time
		Date theDate = new Date();				//Get current system time
	
		//Parse out the hour, minute and second
		hour = (double) theDate.getHours();		//Get hours
		minute = (double) theDate.getMinutes(); //Get minutes
		second = (double) theDate.getSeconds(); //Get seconds
	}

	//=============================
	//Function:	start()
	//Input:	none
	//Output:	none
	//			updates runthread
	//=============================
	
	public void start() {
	
		//Start as a thread
		if (runthread == null) {
			runthread = new Thread(this);
			runthread.start();
		}
	}

	//=============================
	//Function:	stop()
	//Input:	none
	//Output:	none
	//			updates runthread
	//=============================
	
	public void stop() {
	
		//Stop the thread
		if (runthread != null) {
			runthread.stop();
			runthread = null;
		}
	}
}
/*	&lt;applet code=AnalogClock.class width=300 height=300&gt;
 	&lt;param name=diameter value=200&gt;
 	&lt;param name=image value=a.jpg&gt;
 	&lt;param name=hoff value=0&gt;
 	&lt;param name=voff value=0&gt;
 	&lt;/applet&gt;	*/
</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output"><img src="analog-clock.jpg"></div>
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