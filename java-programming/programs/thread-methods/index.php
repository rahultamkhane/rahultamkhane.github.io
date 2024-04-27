<?php 
require("../../../libs/config.php");
$title = "Java Program to Demonstrate methods of Thread class";
$description = "Write a Java program to demonstrate methods of <mark>Thread</mark> class.";
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
          <div class="bread-title"><h2>Java Program to Demonstrate methods of Thread class</h2></div>
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
				<h2 class="blog-title">Java Program to Demonstrate methods of Thread class</h2>
				<p>Write a Java program to demonstrate methods of <mark>Thread</mark> class.</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="java">public class ThreadMethodsDemo {

	public static void main(String[] args) {
		
		System.out.println("Thread Minimum Prority : "+Thread.MIN_PRIORITY);
		System.out.println("Thread Normal Prority : "+Thread.NORM_PRIORITY);
		System.out.println("Thread Maximum Prority : "+Thread.MAX_PRIORITY);
		Thread t = Thread.currentThread();
		System.out.println("Current Thread details : "+t.currentThread());
		t.setName("Main Thread");
		System.out.println("After changing name of main thread : "+t.currentThread());
		System.out.println("Thread ID : "+t.getId());
		System.out.println("Thread Name : "+t.getName());
		System.out.println("Thread Priority : "+t.getPriority());
		System.out.println("Thread State : "+t.getState());
		System.out.println("Thread Group : "+t.getThreadGroup());
		System.out.println("Is Daemon Thread  : "+t.isDaemon());
		t.setPriority(7);	
		// If priority greater than 10 or less than 1 then IllugalArgumentException is thrown.
		System.out.println("After changing priority it becomes : "+t.getPriority());
	}
}
</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre class="hljs"><code class="plaintext p-3">Thread Minimum Prority : 1
Thread Normal Prority : 5
Thread Maximum Prority : 10
Current Thread details : Thread[main,5,main]
After changing name of main thread : Thread[Main Thread,5,main]
Thread ID : 1
Thread Name : Main Thread
Thread Priority : 5
Thread State : RUNNABLE
Thread Group : java.lang.ThreadGroup[name=main,maxpri=10]
Is Daemon Thread  : false
After changing priority it becomes : 7
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