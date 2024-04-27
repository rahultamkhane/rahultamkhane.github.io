<?php 
require("../../../libs/config.php");
$title = "Develop JavaScript to implement Array functionalities | ".SITE_NAME;
$description = "Develop JavaScript to implement Array functionalities";
include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/header.php");
?>

<?php 
  include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/navbar.php");
?>

<div class="container">
  <div class="row">

<?php 
  include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/leftbar.php");
?>
    
    <div class="col-sm-8 pl-5 pt-4">
      <div class="container">
        <div class="mydiv">
<h1>Develop JavaScript to implement Array functionalities</h1>
<h2>Laboratory Objective:</h2>
<ol>
    <li>To be able to understand the concept of array.</li>
    <li>To be able to develop JavaScript programs using Array.</li>
    <li>To be able to use array methods in programs.</li>
</ol>
<p></p>
<?php 
  include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
?>
<h2>JavaScript Arrays</h2>
<ul>
    <li>An array is a special variable, which can hold more than one value at a time.</li>
    <li>JavaScript arrays are used to store multiple values in a single variable.</li>
</ul>
<p></p>
<h3>Declaring an array</h3>
<ul>
    <li>There are 2 ways to construct an array in JavaScript</li>
</ul>
<h3>1) By array literal</h3>
<p>2) By using an Array constructor (using new keyword)</p>
<p></p>
<p>1) By array literal</p>
<ul>
    <li>This is the easiest way to create a JavaScript Array.</li>
    <li>Syntax</li>
</ul>
<p>var array_name = [item1, item2, &hellip;];</p>
<ul>
    <li>Example:</li>
</ul>
<p>var fruits = [&quot;Apple&quot;, &quot;Orange&quot;, &quot;Plum&quot;];</p>
<p></p>
<p></p>
<h3>2) By using an Array constructor (using new keyword)</h3>
<ul>
    <li>You can also create an array using Array constructor with new keyword</li>
    <li>This declaration has five parts:</li>
</ul>
<p>1) var keyword</p>
<p>2) Array name</p>
<p>3) Assignment operator</p>
<p>4) new operator</p>
<p>5) Array ( ) constructor</p>
<ul>
    <li>Syntax</li>
</ul>
<p>var array_name = new Array();</p>
<ul>
    <li>Example:</li>
</ul>
<p>var books = new Array();</p>
<p>books[0] = &quot;C&quot;;</p>
<p>books[1] = &quot;C++&quot;;</p>
<p>books[2] = &quot;JavaScript&quot;;</p>
<p>books[3] = &quot;PHP&quot;;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; OR</p>
<p>var books = new Array(&quot;C&quot;, &quot;C++&quot;, &quot;JavaScript&quot;, &quot;PHP&quot;);</p>
<p></p>
<p></p>
<h2>JavaScript Array Methods</h2>
<ul>
    <li>The Array object has many properties and methods which help developers to handle arrays easily and efficiently.
    </li>
    <li>You can get the value of a property by specifying arrayname.property&nbsp;and the output of a method by specifying arrayname.method().</li>
    <li>The following are methods of the JavaScript Array:</li>
</ul>
<p>1. length property&nbsp;&rarr; Returns the number of elements in an array.</p>
<p>2. prototype property&nbsp;&rarr; Used to add new properties and methods of object.</p>
<p>3. reverse() method &rarr; Returns the reverse order of items in an array.</p>
<p>4. sort() method&nbsp;&rarr; Returns the sort array.</p>
<p>5. pop() method&nbsp;&rarr; Remove the last item of an array.</p>
<p>6. shift() method&nbsp;&rarr; Remove the first item of an array.</p>
<p>7. push() method&nbsp;&rarr; Adds an array element to array at last.</p>
<p>8. unshift() method&nbsp;&rarr; Adds an array element to array at beginning.</p>
<h2>Sample Programs</h2>
<h3>1) Develop a JS program to demonstrate Arrays and its methods.</h3>
</ol>
<p>&lt;html&gt;</p>
<p>&lt;head&gt;</p>
<p>&nbsp;&lt;title&gt;Arrays!!!&lt;/title&gt;</p>
<p>&nbsp;&lt;script type=&quot;text/javascript&quot;&gt;</p>
<p>&nbsp; var languages = new Array(&quot;C&quot;, &quot;C++&quot;, &quot;HTML&quot;, &quot;Java&quot;, &quot;VB&quot;);
</p>
<p>&nbsp; Array.prototype.displayItems=function(){</p>
<p>&nbsp; &nbsp;for (i=0;i&lt;this.length;i++){</p>
<p>&nbsp; &nbsp; document.write(this[i] + &quot;&lt;br /&gt;&quot;);</p>
<p>&nbsp; &nbsp;}</p>
<p>&nbsp; } </p>
<p>&nbsp; document.write(&quot;Programming lanugages array&lt;br /&gt;&quot;);</p>
<p>&nbsp; languages.displayItems();</p>
<p>&nbsp; document.write(&quot;&lt;br /&gt;The number of items in languages array is &quot; + &nbsp;languages.length + &quot;&lt;br /&gt;&quot;);</p>
<p>&nbsp; document.write(&quot;&lt;br /&gt;The SORTED languages array&lt;br /&gt;&quot;);</p>
<p>&nbsp; languages.sort();</p>
<p>&nbsp; languages.displayItems();</p>
<p>&nbsp; document.write(&quot;&lt;br /&gt;The REVERSED languages array&lt;br /&gt;&quot;);</p>
<p>&nbsp; languages.reverse();</p>
<p>&nbsp; languages.displayItems();</p>
<p>&nbsp; document.write(&quot;&lt;br /&gt;The languages array after REMOVING the LAST item&lt;br /&gt;&quot;);</p>
<p>&nbsp; languages.pop();</p>
<p>&nbsp; languages.displayItems();</p>
<p>&nbsp; &nbsp;document.write(&quot;&lt;br /&gt;THE languages array after PUSH&lt;br /&gt;&quot;);</p>
<p>&nbsp; &nbsp;languages.push(&quot;JavaScript&quot;);</p>
<p>&nbsp; languages.displayItems();</p>
<p>&nbsp; &nbsp;document.write(&quot;&lt;br /&gt;The languages array after SHIFT&lt;br /&gt;&quot;);</p>
<p>&nbsp; &nbsp;languages.shift();</p>
<p>&nbsp; languages.displayItems();</p>
<p>&nbsp;&lt;/script&gt;</p>
<p>&lt;/head&gt;</p>
<p>&lt;body&gt;</p>
<p>&lt;/body&gt;</p>
<p>&lt;/html&gt;</p>
<p></p>
<p><img alt="" src="images/image1.png"  title=""></p>
<h3>2) Develop a JavaScript program to display the sum and product of array elements.</h3>
<p>&lt;html&gt;</p>
<p>&lt;head&gt;</p>
<p>&nbsp;&lt;title&gt;Display sum and product of array elements&lt;/title&gt;</p>
<p>&lt;/head&gt;</p>
<p>&lt;body&gt;</p>
<p>&nbsp;&lt;script type=&quot;text/javascript&quot;&gt;</p>
<p>&nbsp; var arr = [13, 56, 7, 23, 1, 7, 8];</p>
<p>&nbsp; &nbsp;var sum=0, product = 1;</p>
<p>&nbsp; &nbsp;for(var i=0; i&lt;arr.length; i++) {</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </p>
<p>&nbsp; &nbsp; &nbsp; sum += arr[i];</p>
<p>&nbsp; &nbsp; &nbsp; product *= arr[i]; &nbsp; &nbsp;</p>
<p>&nbsp; &nbsp;}</p>
<p>&nbsp; &nbsp;document.write(&quot;Array elements are &quot; + arr + &quot;&lt;br /&gt;&quot;);</p>
<p>&nbsp; &nbsp;document.write(&quot;&lt;h3&gt;Sum : &quot; + sum + &quot;&lt;/h3&gt;&quot;);</p>
<p>&nbsp; &nbsp;document.write(&quot;&lt;h3&gt;Product : &quot; + product + &quot;&lt;/h3&gt;&quot;); </p>
<p>&nbsp;&lt;/script&gt;</p>
<p>&lt;/body&gt;</p>
<p>&lt;/html&gt;</p>
<p></p>
<p><img alt="" src="images/image2.png" title=""></p>
<p></p>
<h3>3) Develop a program to find the minimum and maximum element in an array.</h3>
<p>&lt;html&gt;</p>
<p>&lt;head&gt;</p>
<p>&nbsp; &nbsp; &lt;title&gt;Display minimum and maximum element in Array&lt;/title&gt;</p>
<p>&lt;/head&gt;</p>
<p>&lt;body&gt;</p>
<p>&nbsp; &nbsp; &lt;p id=&quot;result&quot;&gt;&lt;/p&gt;</p>
<p>&nbsp; &nbsp; &lt;script&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; var arr = [54, 21, 74, 31, 12];</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; var max = arr[0];</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; var min = arr[0];</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp;document.write(&quot;Array elements given are: &quot; + arr + &quot;&lt;br/&gt;&quot;);
</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; </p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; for(var i=1; i&lt;arr.length; i++) {</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; if(arr[i] &gt; max)</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; max = arr[i];</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; if(arr[i] &lt; min)</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; min = arr[i];</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; }</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; document.write(&quot;&lt;h3&gt;Minimum element is &quot; + min + &quot;&lt;/h3&gt;&quot;);
</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; document.write(&quot;&lt;h3&gt;Maximum element is &quot; + max + &quot;&lt;/h3&gt;&quot;);
</p>
<p>&nbsp; &nbsp; &lt;/script&gt;</p>
<p>&lt;/body&gt;</p>
<p>&lt;/html&gt;</p>
<p></p>
<p><img alt="" src="images/image3.png" title=""></p>
<p></p>

<?php 
  include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
?>
<p></p>
</div> <!-- /mydiv -->
      </div> <!-- /container -->	
    </div> <!-- /col-sm-8 -->

<?php 
  include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/rightbar.php");
?>

  </div>	<!-- /row -->

</div> <!-- /container-fluid -->
<?php 
  include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/footer.php");
?>