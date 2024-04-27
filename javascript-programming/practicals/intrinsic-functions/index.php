<?php 
require("../../../libs/config.php");
$title = "Develop a webpage using Intrinsic Java Functions | ".SITE_NAME;
$description = "Develop a webpage using Intrinsic Java Functions";
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
<h1>Develop a webpage using Intrinsic Java Functions</h1>
<h2>Laboratory Objective:</h2>
<ol>
    <li>To understand basic concepts of Forms in JavaScript.</li>
    <li>To use the given intrinsic functions with specified parameters.</li>
</ol>
<p></p>
<?php 
  include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
?>
<h2>Intrinsic JavaScript Functions</h2>
<ul>
    <li>An intrinsic function&nbsp;(or built-in function) is a function (subroutine) available for use in a given programming language whose implementation is handled specially by the compiler.</li>
    <li>&ldquo;Intrinsic&rdquo;&nbsp;is the way some authors refer to what other authors call &ldquo;built-in&rdquo;.</li>
    <li>Those data types/objects/classes are always there regardless of what environment you&rsquo;re running in.</li>
    <li>JavaScript provides intrinsic (or &ldquo;built-in&rdquo;) objects. They are the Array, Boolean, Date, Error, Function, Global, JSON, Math, Number, Object, RegExp, and String objects.</li>
    <li>As you know JavaScript is an object oriented programming language, it supports the concept of objects in the form of attributes.</li>
    <li>If an object attribute consists of function, then it is a method of that object, or if an object attribute consists of values, then it is a property of that object.</li>
    <li>For example, &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </li>
</ul>
<p>var status = document.readyState;</p>
<ul>
    <li>readyState&nbsp;is a property of the document object which can contain values such as &ldquo;unintialized&rdquo;, &rdquo;loading&rdquo;, &rdquo;interactive&rdquo;, &rdquo;complete&rdquo; whereas,</li>
</ul>
<p>document.write(&quot;Hello World&quot;);</p>
<ul>
    <li>write()&nbsp;is a method of the document object that writes the content &ldquo;Hello World&rdquo; on the web page.</li>
    <li>JavaScript Built-in objects such as</li>
</ul>
<ol>
    <li>Number</li>
    <li>String</li>
    <li>RegExp</li>
    <li>Array</li>
    <li>Math</li>
    <li>Date</li>
    <li>Boolean</li>
</ol>
<ul>
    <li>Each of the above objects hold several built-in functions to perform object related functionality.</li>
</ul>
<p></p>
<h3>isNaN()</h3>
<ul>
    <li><a href="https://www.programming-free.com/2012/07/javascript-built-in-functions-with.html">isNaN()</a>&nbsp;method determines whether value
        of a variable is a legal number or not.</li>
    <li>For example</li>
</ul>
<p>document.write(isNan(0)); &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;// false</p>
<p>document.write(isNan(&#39;JavaScript&#39;)); &nbsp; // true</p>
<h2 class="c19" id="h.sx5znsuhl6mx"></h2>
<h3>eval()</h3>
<ul>
    <li><a href="https://www.programming-free.com/2012/07/javascript-built-in-functions-with.html">eval()</a>&nbsp;is used to execute Javascript
        source code.</li>
    <li>It evaluates or executes the argument passed to it and generates output.</li>
    <li>For example</li>
</ul>
<p>eval(&quot;var number=2;number=number+2;document.write(number)&quot;); &nbsp; //4</p>
<h2 class="c19" id="h.aiyekzf3rtqa"></h2>
<h3>Number()</h3>
<ul>
    <li><a href="https://www.programming-free.com/2012/07/javascript-built-in-functions-with.html">Number()</a>&nbsp;method takes an object as an
        argument and converts it to the corresponding number value.</li>
    <li>Return Nan (Not a Number) if the object passed cannot be converted to a number</li>
    <li>For example</li>
</ul>
<p>var obj1=new String(&quot;123&quot;);</p>
<p>var obj2=new Boolean(&quot;false&quot;);</p>
<p>var obj3=new Boolean(&quot;true&quot;);</p>
<p>var obj4=new Date();</p>
<p>var obj5=new String(&quot;9191 9999&quot;);</p>
<p>document.write(Number(obj1)); &nbsp; &nbsp; // 123</p>
<p>document.write(Number(obj2)); &nbsp; &nbsp; // 0</p>
<p>document.write(Number(obj3)); &nbsp; &nbsp; // 1</p>
<p>document.write(Number(obj4)); &nbsp; &nbsp; // 1342720050291</p>
<p>document.write(Number(obj5)); &nbsp; &nbsp; // NaN</p>
<h2 class="c19" id="h.rs1ay978ub2e"></h2>
<h3>String()</h3>
<ul>
    <li><a href="https://www.programming-free.com/2012/07/javascript-built-in-functions-with.html">String()</a>&nbsp;function converts the object
        argument passed to it to a string value.</li>
    <li>For example</li>
</ul>
<p>document.write(new Boolean(0)); // false</p>
<p>document.write(new Boolean(1)); // true</p>
<p>document.write(new Date()); &nbsp; &nbsp; // Tue Jan 05 2021 13:28:00 GMT+0530</p>
<h2 class="c19" id="h.yakzxaotvlqj"></h2>
<h3>parseInt()</h3>
<ul>
    <li><a href="https://www.programming-free.com/2012/07/javascript-built-in-functions-with.html">parseInt()</a>&nbsp;function takes string as
        a parameter and converts it to integer.</li>
    <li>For example</li>
</ul>
<p>document.write(parseInt(&quot;45&quot;)); &nbsp; &nbsp; &nbsp; &nbsp; // 45</p>
<p>document.write(parseInt(&quot;85 days&quot;)); &nbsp; &nbsp;// 85</p>
<p>document.write(parseInt(&quot;this is 9&quot;)); &nbsp;// NaN</p>
<ul>
    <li>An optional radix parameter can also be used to specify the number system to be used to parse the string argument.</li>
    <li>For example,</li>
</ul>
<p>document.write(parseInt(&ldquo;10&rdquo;,16)); //16</p>
<p></p>
<h3>parseFloat()</h3>
<ul>
    <li><a href="https://www.programming-free.com/2012/07/javascript-built-in-functions-with.html">parseFloat()</a>&nbsp;function takes a string
        as parameter and parses it to a floating point number.</li>
    <li>For example</li>
</ul>
<p>document.write(parseFloat(&quot;15.26&quot;)); &nbsp; &nbsp; &nbsp; &nbsp;// 15.26</p>
<p>document.write(parseFloat(&quot;15 48 65&quot;)); &nbsp; &nbsp; // 15</p>
<p>document.write(parseFloat(&quot;this is 29&quot;)); &nbsp; // NaN</p>
<p>document.write(pareFloat(&quot; &nbsp;54 &nbsp;&quot;)); &nbsp; &nbsp; &nbsp; &nbsp;// 54</p>
<ul>
    <li>An intrinsic function is often used to replace the Submit button and the Reset button with your own graphical images, which are displayed on a form in place of these buttons.</li>
</ul>
<p></p>
<p>&lt;html&gt;</p>
<p>&lt;head&gt;</p>
<p>&lt;title&gt;Using Intrinsic JavaScript Functions&lt;/title&gt;</p>
<p>&lt;/head&gt;</p>
<p>&lt;body&gt;</p>
<p>&lt;FORM name=&quot;contact&quot; action=&quot;#&quot; method=&quot;post&quot;&gt;</p>
<p>&nbsp;&lt;P&gt;</p>
<p>&nbsp;First Name: &lt;INPUT type=&quot;text&quot; name=&quot;Fname&quot;/&gt; &lt;BR&gt;</p>
<p>&nbsp;Last Name: &lt;INPUT type=&quot;text&quot; name=&quot;Lname&quot;/&gt;&lt;BR&gt;</p>
<p>&nbsp;Email: &lt;INPUT type=&quot;text&quot; name=&quot;Email&quot;/&gt;&lt;BR&gt;</p>
<p>&nbsp;&lt;img src=&quot;submit.jpg&quot; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;onclick=&quot;javascript:document.forms.contact.submit()&quot;/&gt;</p>
<p>&nbsp;&lt;img src=&quot;reset.jpg&quot;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;onclick=&quot;javascript:document.forms.contact.reset()&quot;/&gt;</p>
<p>&nbsp;&lt;/P&gt;</p>
<p>&lt;/FORM&gt;</p>
<p>&lt;/body&gt;</p>
<p>&lt;/html&gt;</p>
<p></p>
<p><img alt="" src="images/image1.png" title=""></p>
<p></p>
<p></p>
<h2>Sample Program</h2>
<p></p>
<h3>Write a JavaScript function to insert a string within a string at a particular position (default is 1).</h3>
<p></p>
<p>&lt;html&gt;</p>
<p>&lt;head&gt;</p>
<p>&lt;title&gt;Insert a string within a specific position in another string&lt;/title&gt;</p>
<p>&lt;/head&gt;</p>
<p>&lt;body&gt;</p>
<p>&lt;script&gt;</p>
<p>function insert(main_string, ins_string, pos) {</p>
<p></p>
<p>&nbsp;if(typeof(pos) == &quot;undefined&quot;) {</p>
<p>&nbsp; pos = 0;</p>
<p>&nbsp;}</p>
<p>&nbsp;if(typeof(ins_string) == &quot;undefined&quot;) {</p>
<p>&nbsp; ins_string = &#39;&#39;;</p>
<p>&nbsp;}</p>
<p>&nbsp;return main_string.slice(0, pos) + ins_string +</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;main_string.slice(pos);</p>
<p>}</p>
<p>var main_string = &quot;Welcome to JavaScript&quot;;</p>
<p>var ins_string = &quot; the world of &quot;;</p>
<p>var pos = 10;</p>
<p>var final_string = insert(main_string, ins_string, pos);</p>
<p>document.write(&quot;Main String: &lt;b&gt;&quot; + main_string + &quot;&lt;/b&gt;&lt;br/&gt;&quot;);</p>
<p>document.write(&quot;String to insert: &lt;b&gt;&quot; + ins_string + &quot;&lt;/b&gt;&lt;br/&gt;&quot;);</p>
<p>document.write(&quot;Position of string: &lt;b&gt;&quot; + pos + &quot;&lt;/b&gt;&lt;br/&gt;&quot;);</p>
<p>document.write(&quot;Final string: &lt;b&gt;&quot; + final_string + &quot;&lt;/b&gt;&quot;);</p>
<p>&lt;/script&gt;</p>
<p>&lt;/body&gt;</p>
<p>&lt;/html&gt;</p>
<p></p>
<p><img alt="" src="images/image2.png" title=""></p>
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