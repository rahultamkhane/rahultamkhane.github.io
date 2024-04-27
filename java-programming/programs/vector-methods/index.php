<?php 
require("../../../libs/config.php");
$title = "Java Program to demonstrate use of 'Vector' class methods.";
$description = "Write a Java program to demonstrate use of<mark> 'Vector'</mark> class methods..";
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
          <div class="bread-title"><h2>Java Program to demonstrate use of 'Vector' class methods.</h2></div>
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
				<h2 class="blog-title">Java Program to demonstrate use of 'Vector' class methods.</h2>
				<p>Write a Java program to demonstrate use of<mark> 'Vector'</mark> class methods..</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="java">import java.util.Vector;

public class UsingVectorMethods {

	public static void main(String[] args) {
		
		Vector v = new Vector();
		v.addElement(new Integer(10));
		v.addElement(new Float(2.5));
		v.addElement(new Double(8.5));
		v.addElement(new Character('A'));
		v.addElement(new String("ABC"));
		
		int s = v.size();
		
		for(int i=0; i&lt;s; i++)
		{
			System.out.println(v.elementAt(i));
		}
		System.out.println(v);
		System.out.println("Size = "+s);
		System.out.println("Capacity = "+v.capacity());
		System.out.println("Index of ABC= "+v.indexOf("ABC"));
		System.out.println("First element= "+v.firstElement());
		System.out.println("Last element= "+v.lastElement());
		v.insertElementAt(new Boolean(true),3);
		System.out.println(v);
		v.remove(4);
		System.out.println("After removing 4th element : "+v);
	}

}
</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre class="hljs"><code class="plaintext p-3">10
2.5
8.5
A
ABC
[10, 2.5, 8.5, A, ABC]
Size = 5
Capacity = 10
Index of ABC= 4
First element= 10
Last element= ABC
[10, 2.5, 8.5, true, A, ABC]
After removing 4th element : [10, 2.5, 8.5, true, ABC]
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