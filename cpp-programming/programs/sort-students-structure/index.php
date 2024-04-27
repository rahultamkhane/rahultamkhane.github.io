<?php 
require("../../../libs/config.php");
$title = "C++ Program to Sort Students Using Pointers";
$description = "In this program, you'll learn to sort the students structure using pointers.
";
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
              <li><a href="<?php echo SITE_DIR;?>cpp-programming/">C++ Programming</a></li>
			  <li><a href="<?php echo SITE_DIR;?>cpp-programming/programs/">All Programs</a></li>
            </ul>
          </div>
          <!-- Bread Title -->
          <div class="bread-title"><h2>C++ Program to Sort Students Using Pointers</h2></div>
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
				<h2 class="blog-title">C++ Program to Sort Students Using Pointers</h2>
				<p>In this program, you'll learn to sort the students structure using pointers.
</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="cpp">#include&lt;iostream&gt;
using namespace std;

struct student
{
    int rollno;
    char name[10];
    char branch[10];
};

void swap(struct student *, struct student *);

int main()
{
    struct student s[3];
    struct student *ptr = NULL;

    int i, j;
    ptr = s;

    for(i=0; i&lt;3; i++){
        cout&lt;&lt;"\nEnter details of Student #" &lt;&lt; i+1;
        cout&lt;&lt;"\nEnter roll no: ";
        cin&gt;&gt; ptr-&gt;rollno;
        cout&lt;&lt;"Enter name: ";
        cin&gt;&gt; ptr-&gt;name;
        cout&lt;&lt;"Enter branch: ";
        cin&gt;&gt; ptr-&gt;branch;
        ptr++;
    }

    for(i=0; i&lt;3; i++)
    {
        for(j=0; j&lt;2; j++)
        {
            if(s[j].rollno &gt; s[j+1].rollno)
            {
                swap(&s[j], &s[j+1]);
            }
        }
    }

    ptr = s;

    cout&lt;&lt;"\nAfter sorting students by roll no..\n";
    for(i=0; i&lt;3; i++)
    {
        cout&lt;&lt;"\n   " &lt;&lt; ptr-&gt;rollno &lt;&lt; "  " &lt;&lt; ptr-&gt;name &lt;&lt; "  " &lt;&lt; ptr-&gt;branch;
        ptr++;
    }
    return 0;
}

void swap(struct student *a, struct student *b)
{
    struct student temp;

    temp = *a;
    *a = *b;
    *b = temp;
}
</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre class="hljs"><code class="plaintext p-3">
Enter details of Student #1
Enter roll no: 1
Enter name: Sudhir
Enter branch: CO

Enter details of Student #2
Enter roll no: 8
Enter name: Dinesh
Enter branch: IT

Enter details of Student #3
Enter roll no: 5
Enter name: Fatima
Enter branch: EJ

After sorting students by roll no..

   1  Sudhir  CO
   5  Fatima  EJ
   8  Dinesh  IT
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
include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/rightbar.php");
?>
	</div>	<!-- /row -->

</div> <!-- /container -->
 
<?php 
include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/footer.php");
?>