<?php 
require("../../../libs/config.php");
$title = "Develop JavaScript to use decision making and looping statements | ".SITE_NAME;
$description = "Develop JavaScript to use decision making and looping statements";
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
    <!-- Page Content -->
		<div class="container">
    <div class="mydiv">
    <h1>Develop JavaScript to use decision making and looping statements</h1>
    <h2>Laboratory Objective:</h2>
    <ol>
        <li>To be able to develop JavaScript programs using decision making statements.</li>
        <li>To be able to develop JavaScript programs using looping statements.</li>
        <li>To be able to understand the structure of an HTML document, HTML elements and attributes.</li>
    </ol>
    <p></p>
<?php 
  include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
?>
    <h2>Decision Making Statements</h2>
    <ul>
        <li>Decision Making&nbsp;in programming is similar to decision making in real life.</li>
        <li>A programming language uses control statements to control the flow of execution of the program based on certain conditions.</li>
        <li>JavaScript&rsquo;s conditional statements are:</li>
    </ul>
    <p>1) if</p>
    <p>2) if-else</p>
    <p>3) if&hellip;else&hellip;if</p>
    <p>4) switch</p>
    <p></p>
    <h3>1) if statement</h3>
    <p>JavaScript can be used to achieve any of the following:</p>
    <ul>
        <li>if statement is the most simple decision
                making statement.</li>
        <li>It is used to decide whether a certain statement or block of
                statements will be executed or not.</li>
        <li>If a certain condition is true then a block of statement is executed
                otherwise not.</li>
        <li>Syntax</li>
    </ul>
    <p>if ( condition ) </p>
    <p>{</p>
    <p>&nbsp; &nbsp;// block of code to be executed</p>
    <p>}</p>
    <ul>
        <li>You can omit the braces if there is only a single statement in the
                block.</li>
    </ul>
    <p></p>
    <h3>2) if&hellip;else statement</h3>
    <ul>
        <li>The if-else&nbsp;statement&nbsp;has two parts if block
                and else block.</li>
        <li>If the condition is true then if block (true block) will get
                executed and if the condition is false then else block (false block) will get executed.</li>
        <li>Syntax</li>
    </ul>
    <p>if ( condition ) &nbsp;</p>
    <p>{</p>
    <p>&nbsp; &nbsp; // block of code to be executed when condition is true</p>
    <p>} </p>
    <p>else </p>
    <p>{</p>
    <p>&nbsp; &nbsp; // block of code to be executed when condition is false</p>
    <p>}</p>
    <h3>3) if&hellip;else...if statement</h3>
    <ul>
        <li>The if&hellip;else&hellip;if statement
            is an advanced form of if&hellip;else that allows JavaScript to make a correct
                decision out of several conditions.</li>
        <li>All the if conditions will be checked one by one. If any condition
                is true out of given then that block will get executed and other blocks are skipped.</li>
        <li>Syntax</li>
    </ul>
    <p>if ( condition 1 ) &nbsp;</p>
    <p>{</p>
    <p>&nbsp; &nbsp; // block of code to be executed when condition 1 is true</p>
    <p>} </p>
    <p>else if ( condition 2 ) &nbsp;</p>
    <p>{</p>
    <p>&nbsp; &nbsp; // block of code to be executed when condition 2 is true</p>
    <p>} </p>
    <p>else if ( condition 3 ) &nbsp;</p>
    <p>{</p>
    <p>&nbsp; &nbsp; // block of code to be executed when condition 2 is true</p>
    <p>}</p>
    <p>else</p>
    <p>{</p>
    <p>&nbsp; &nbsp;// block of code to be executed if no condition matches</p>
    <p>}</p>
    <p></p>
    <h3>4) switch statement</h3>
    <ul>
        <li>The objective of a switch
                statement&nbsp;is to give an expression to evaluate and several different
                statements to execute based on the value of the expression.</li>
        <li>The interpreter checks each case against the value of the expression
                until a match is found. If nothing matches, a default condition will be used.</li>
        <li>Syntax</li>
    </ul>
    <p></p>
    <p>switch (expression) </p>
    <p>{</p>
    <p>&nbsp; &nbsp;case c1: statement(s)</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; break;</p>
    <p>&nbsp; &nbsp;case c2: statement(s)</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; break;</p>
    <p>&nbsp; &nbsp;...</p>
    <p>&nbsp; &nbsp;case cn: statement(s)</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; break;</p>
    <p>&nbsp; &nbsp;default: statement(s)</p>
    <p>}</p>
    <p></p>
    <h2>Looping Statements</h2>
    <ul>
        <li>Looping in programming languages facilitates the execution of a set
                of instructions/functions repeatedly while some condition evaluates to true.</li>
        <li>For example, suppose we want to print &ldquo;Hello World&rdquo; 10
                times this is possible with the help of loops.</li>
        <li>There are mainly two types of loops:<br><b>1) Entry Controlled loops:</b>
                In this type of loops the test condition is tested before entering the loop body. For Loop and While
                Loop are entry controlled loops.<br><b>2) Exit Controlled Loops:</b> In this type of loops the test condition
                is tested or evaluated at the end of loop body. Therefore, the loop body will execute atleast once,
                irrespective of whether the test condition is true or false. do-while loop is exit controlled
                loop.</li>
        <li>Following are the types of loops in JavaScript:<br>1) while
                loop<br>2) do-while loop<br>3) for loop<br>4) for&hellip;in loop</li>
    </ul>
    <h3>1) while loop</h3>
    <ul>
        <li>A while loop is a entry-controlled
                loop&nbsp;that allows code to be executed repeatedly if the condition is
                true.</li>
        <li>When the condition becomes false, the loop terminates which marks
                the end of its life cycle.</li>
        <li>The while loop executes ZERO or MORE times.</li>
        <li>Syntax</li>
    </ul>
    <p>while (condition)</p>
    <p>{</p>
    <p>&nbsp; // Statements to be executed</p>
    <p>}</p>
    <h3>2) do-while loop</h3>
    <ul>
        <li>A do-while loop is a exit-controlled
                loop&nbsp;that allows code to be executed first and after that checks for
                condition and depending on that it executed repeatedly.</li>
        <li>When the condition becomes false, the loop terminates which marks
                the end of its life cycle.</li>
        <li>The do-while loop executes ONE or MORE times.</li>
        <li>Syntax</li>
    </ul>
    <p>do</p>
    <p>{</p>
    <p>&nbsp; &nbsp;// Statements to be executed</p>
    <p>} &nbsp;while (condition);</p>
    <h3>3) for loop</h3>
    <ul>
        <li>A for loop is a entry-controlled
                loop&nbsp;that allows code to be executed repeatedly.</li>
        <li>It provides a concise way of writing the loop structure.</li>
        <li>Unlike a while loop, a for statement consumes the initialization,
                condition and increment/decrement in one line thereby providing a shorter, easy to debug structure of
                looping.</li>
        <li>The for loop executes ZERO or MORE times</li>
        <li>Syntax</li>
    </ul>
    <p>for (initialization; condition; increment/decrement)</p>
    <p>{</p>
    <p>&nbsp; &nbsp;// Statements to be executed</p>
    <p>}</p>
    <h3>4) for&hellip;in loop</h3>
    <ul>
        <li>JavaScript also includes another version of for loop also known as
                the for..in loops.</li>
        <li>The for..in loop provides a simpler way to iterate through the
                properties of an object.</li>
        <li>This loop is seen to be very useful while working with
                objects.</li>
        <li>In each iteration, one of the properties of Object is assigned to
                the variable named variableName and this loop continues until all of the properties of the Object are
                processed.</li>
        <li>Syntax</li>
    </ul>
    <p>for (variableName in Object)</p>
    <p>{</p>
    <p>&nbsp; &nbsp;// Statements to be executed</p>
    <p>}</p>
    <h2>Sample Programs</h2>
    <h3>1) Develop a JS program to display numbers from 1 to 10</h3>
    </ol>
    <p>&lt;html&gt;</p>
    <p>&nbsp; &nbsp; &lt;head&gt;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &lt;title&gt;Display Numbers from 1 to
            10&lt;/title&gt;</p>
    <p>&nbsp; &nbsp; &lt;/head&gt;</p>
    <p>&nbsp; &nbsp; &lt;body&gt;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &lt;h3&gt;Numbers from 1 to 10 are&lt;/h3&gt;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &lt;script type=&quot;text/javascript&quot;&gt;
    </p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; var a = 1; </p>
    <p>&nbsp; </p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; while (a &lt;= 10) </p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; { </p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; document.write(a +
            &quot;&lt;br /&gt;&quot;); </p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; a++; </p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; }</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &lt;/script&gt;</p>
    <p>&nbsp; &nbsp; &lt;/body&gt;</p>
    <p>&lt;/html&gt;</p>
    <p></p>
    <p><img
                alt="" src="images/image1.png"
                style="width: 466.00px; height: 378.00px; margin-left: 0.00px; margin-top: 0.00px; transform: rotate(0.00rad) translateZ(0px); -webkit-transform: rotate(0.00rad) translateZ(0px);"
                title=""></p>
    <h3>2) Develop a program to demonstrate working of for&hellip;in loop.</h3>
    <p>&lt;html&gt;</p>
    <p>&nbsp; &nbsp; &lt;head&gt;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &lt;title&gt;Demonstrate use of for...in
            loop&lt;/title&gt;</p>
    <p>&nbsp; &nbsp; &lt;/head&gt;</p>
    <p>&nbsp; &nbsp; &lt;body&gt;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &lt;h3&gt;Demonstrate use of for...in
            loop&lt;/h3&gt;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &lt;script type=&quot;text/javascript&quot;&gt;
    </p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; // creating an Object </p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; var languages = { first : &quot;C&quot;,
            second : &quot;Java&quot;, &nbsp;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            &nbsp; &nbsp; third : &quot;Python&quot;, fourth : &quot;PHP&quot;, &nbsp;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            &nbsp; &nbsp; fifth : &quot;JavaScript&quot; }; </p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; </p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; // iterate through every property of the
        </p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; // object languages and print all of them
        </p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; // using for..in loops </p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for (itr in languages) &nbsp;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; { </p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; document.write(languages[itr]
            + &quot;&lt;br &gt;&quot;); </p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; }</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &lt;/script&gt;</p>
    <p>&nbsp; &nbsp; &lt;/body&gt;</p>
    <p>&lt;/html&gt;</p>
    <p></p>
    <p><img alt="" src="images/image2.png"></p>
      <p></p>
      <p></p>
<?php 
  include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
?>

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