<?php 
require("../../../libs/config.php");
$title = "Java Program to Find Minimum Cost from Tender Class";
$description = "Write a Java program to define a class <mark>Tender </mark>containing data members cost and company name. Accept data for five objects and display company name for which cost is minimum.";
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
              <li><a href="<?php echo SITE_DIR;?>java-programming/">Java Programming</a></li>
			  <li><a href="<?php echo SITE_DIR;?>java-programming/programs/">All Programs</a></li>
            </ul>
          </div>
          <!-- Bread Title -->
          <div class="bread-title"><h2>Java Program to Find Minimum Cost from Tender Class</h2></div>
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
				<h2 class="blog-title">Java Program to Find Minimum Cost from Tender Class</h2>
				<p>Write a Java program to define a class <mark>Tender </mark>containing data members cost and company name. Accept data for five objects and display company name for which cost is minimum.</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="java">import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;

public class Tender {

	String name;	// Data members declaration
	int cost;
	Tender()		// Default constructor
	{
		name = null;
		cost = 0;
	}
	
	Tender(String s,int a)	// Parametrized constructor
	{
		name = s;
		cost = a;
	}
	
	void disp() {
		
		System.out.println("Company name="+name+"	cost="+cost);
	}
	
	public static void main(String args[])throws IOException
	{
		Tender T[] = new Tender[5];	// Creating array of objects
		BufferedReader b = new BufferedReader(new InputStreamReader(System.in));
		String s;
		int c,temp = 0,min=0;
		for(int i=0;i&lt;5;i++)
		{
			System.out.println("Enter company name :: ");	// accept Company name
			s = b.readLine();
			System.out.println("Enter the cost :: ");	// accept the cost
			c = Integer.parseInt(b.readLine());	// Converting string to int
			T[i] = new Tender(s,c);	// assign values to data members by constructor
		}
		for(int i=0;i&lt;5;i++)
		{
			if(T[i].cost&lt;min)
			{
				min = T[i].cost;	// store minimum value of cost
				temp = i;	// store index value of object having minimum cost
			}
		}
		System.out.println("Company having minimum cost=");
		T[temp].disp();
	}
}
</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre class="hljs"><code class="plaintext p-3">C:\>javac Tender.java
C:\>java Tender
Enter company name ::
TechInfo
Enter the cost ::
120365
Enter company name ::
ITInfoTech
Enter the cost ::
154231
Enter company name ::
ITSystems
Enter the cost ::
100235
Enter company name ::
CompTech
Enter the cost ::
90452
Enter company name ::
iSoftSys
Enter the cost ::
135421
Company having minimum cost=
Company name=CompTech   cost=90452
</code></pre>
				</div>
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