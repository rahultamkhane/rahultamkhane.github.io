<?php 
require("../../../libs/config.php");
$title = "Java Program to Create and Save data in files";
$description = "Write a Java program to accomplish the following task.<br>
  i.   Create a text file and store data in it.<br>
  ii.  Count number of lines and words in the file. <br>
  iii. Copy contents of one file to another file.<br>";
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
          <div class="bread-title"><h2>Java Program to Create and Save data in files</h2></div>
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
				<h2 class="blog-title">Java Program to Create and Save data in files</h2>
				<p>Write a Java program to accomplish the following task.<br>
  i.   Create a text file and store data in it.<br>
  ii.  Count number of lines and words in the file. <br>
  iii. Copy contents of one file to another file.<br></p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="java">import java.io.*;

class PerformTask
{
	void task()
	{
		char c;
		int words=1,lines=1,chars=0;
		try
		{
			RandomAccessFile ff = new RandomAccessFile("test.txt","r");
			while(ff.getFilePointer()&lt;ff.length())
			{
				c = (char)ff.read();
				if(c ==' ')
					words++;
				else if(c=='\n')
				{
					lines++;
					words++;
				}
				else 
					chars++;
			}
			System.out.println("Words = "+words+" lines = "+lines);
		}
		catch(IOException ie){}
	}
	public static void main(String args[])
	{
		PerformTask p = new PerformTask();
		p.task();
	}
}
</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre class="hljs"><code class="plaintext p-3">C:\>javac PerformTask.java
C:\>java PerformTask
Words = 7 lines = 3
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