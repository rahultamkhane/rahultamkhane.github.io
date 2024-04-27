<?php 
require("../../../libs/config.php");
$title = "Create webpage using Form elements | ".SITE_NAME;
$description = "Create a webpage using Form elements";
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
    <h1>Create a webpage using Form elements</h1>
    <h2>Laboratory Objective:</h2>
    <ol>
        <li>To be able to design a form using form elements.</li>
    </ol>
    <p></p>
<?php 
  include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
?>
    <h2>HTML Form</h2>
    <ul>
        <li>HTML Form is a document which stores information entered by user on a web server using interactive controls.
        </li>
        <li>It contains different kind of information such as username, password, contact number, email id etc.</li>
        <li>HTML form uses elements like input box, radio buttons, check box, submit buttons etc.</li>
        <li>Using these elements the information of an user is submitted on a web server</li>
        <li>HTML Forms are required, when you want to collect some data from the site visitor.</li>
        <li>For example, during user registration you would like to collect information such as name, email address, credit card, etc.</li>
        <li>The HTML &lt;form&gt; tag is used to create an HTML form and it has following syntax</li>
    </ul>
    <p></p>
    <p>&lt;form action = &quot;Script URL&quot; method = &quot;GET|POST&quot;&gt;</p>
    <p>&nbsp; form elements like input, textarea etc.</p>
    <p>&lt;/form&gt;</p>
    <p></p>
    <h3>Example of HTML form</h3>
    <p>&lt;html&gt;</p>
    <p>&lt;body&gt;</p>
    <p>&nbsp; &lt;form&gt;</p>
    <p>&nbsp; &nbsp; &nbsp;Username: &lt;br&gt;</p>
    <p>&nbsp; &nbsp; &nbsp;&lt;input type=&quot;text&quot; name=&quot;username&quot;&gt;&lt;br&gt;</p>
    <p>&nbsp; &nbsp; &nbsp;Password: &lt;br&gt;</p>
    <p>&nbsp; &nbsp; &nbsp;&lt;input type=&quot;password&quot; name=&quot;password&quot;&gt;&lt;br&gt;</p>
    <p>&nbsp; &nbsp; &nbsp;&lt;input type=&quot;submit&quot; value=&quot;Submit&quot;&gt;&lt;br&gt;</p>
    <p>&nbsp; &lt;/form&gt;</p>
    <p>&lt;/body&gt;</p>
    <p>&lt;/html&gt;</p>
    <p></p>
    <p><img alt="" src="images/image2.png" title=""></p>
    <p></p>
    <h2>HTML &lt;form&gt; Attributes</h2>
    <ol>
        <li>action : Backend script ready to process your passed data.</li>
        <li>method : Method to be used to upload data. The most frequently used are GET and POST methods.</li>
        <li>target : Specify the target window or frame where the result of the script will be displayed. It takes values like _blank, _self, _parent etc.</li>
        <li>enctype : You can use the enctype attribute to specify how the browser encodes the data before it sends it to the server.</li>
    </ol>
    <p></p>
    <h3>The &lt;input&gt; Element</h3>
    <ul>
        <li>The &lt;input&gt;&nbsp;element is the most important form element.</li>
        <li>The &lt;input&gt;&nbsp;element can be displayed in several ways, depending on the type&nbsp;attribute.</li>
        <li>There are different types of form controls that you can use to collect data using HTML form &minus;</li>
    </ul>
    <ol>
        <li>Text Input Controls</li>
        <li>Checkboxes Controls</li>
        <li>Radio Box Controls</li>
        <li>Select Box Controls</li>
        <li>File Select boxes</li>
        <li>Hidden Controls</li>
        <li>Clickable Buttons</li>
        <li>Submit and Reset Button</li>
    </ol>
    <p></p>
    <p><b>&lt;input type=&ldquo;text&rdquo;&gt;</b> Defines a one-line text input field</p>
    <p><b>&lt;input type=&ldquo;password&rdquo;&gt;</b> Defines a one-line password input field</p>
    <p><b>&lt;input type=&ldquo;radio&rdquo;&gt;</b>&nbsp;Defines a radio button (for selecting one of many choices)</p>
    <p><b>&lt;input type=&ldquo;checkbox&rdquo;&gt;</b>&nbsp;Defines checkboxes which allow select multiple options form</p>
    <p><b>&lt;input type=&ldquo;submit&rdquo;&gt;</b>&nbsp;Defines a submit button (for submitting the form)</p>
    <p><b>&lt;input type=&ldquo;reset&rdquo;&gt;</b>&nbsp;Defines a reset button to reset all values in the form</p>
    <p><b>&lt;input type=&ldquo;button&rdquo;&gt;</b>&nbsp;Defines a simple push button, which can be programmed to perform a task on an event</p>
    <p><b>&lt;input type=&ldquo;file&rdquo;&gt;</b>&nbsp;Defines to select the file from device storage</p>
    <p><b>&lt;input type=&ldquo;image&rdquo;&gt;</b>&nbsp;Defines a graphical submit button</p>
    <p><b>&lt;input type=&ldquo;date&rdquo;&gt;</b>&nbsp;Defines an input field for selection of date</p>
    <p><b>&lt;input type=&ldquo;datetime-local&rdquo;&gt;</b>&nbsp;Defines an input field for entering a date without time zone
    </p>
    <p><b>&lt;input type=&ldquo;email&rdquo;&gt;</b>&nbsp;Defines an input field for entering an email address</p>
    <p><b>&lt;input type=&ldquo;number&rdquo;&gt;</b>&nbsp;Defines an input field to enter a number</p>
    <p><b>&lt;input type=&ldquo;tel&rdquo;&gt;</b>&nbsp;Defines an input field for entering the telephone number</p>
    <p></p>
    <h2>Sample Program</h2>
    <h3>Create a HTML web page for User Registration Form.</h3>
    <p></p>
    <p>&lt;html&gt;</p>
    <p></p>
    <p>&lt;head&gt;</p>
    <p>&nbsp; &nbsp; &lt;style&gt;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; input[type=&quot;text&quot;],</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; input[type=&quot;password&quot;],</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; select {</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; border: 1px solid red;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; border-radius: 5px;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; padding: 5px;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; margin: 5px;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; }</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; </p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; form {</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; background-color: #f1f1f1;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; width: 40%;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; padding: 20px;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; }</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; </p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; input[type=&quot;submit&quot;] {</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; border-radius: 5px;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; padding: 5px;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; margin: 5px;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; background-color: green;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; color: white;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; font-size: 14;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; }</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; </p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; input[type=&quot;reset&quot;] {</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; border-radius: 5px;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; padding: 5px;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; margin: 5px;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; background-color: red;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; color: white;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; font-size: 14;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; }</p>
    <p>&nbsp; &nbsp; &lt;/style&gt;</p>
    <p>&nbsp; &nbsp; &lt;script&gt;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; function input(e) {</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; e.style.backgroundColor = &quot;yellow&quot;;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; }</p>
    <p></p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; function reset1(e) {</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; e.style.backgroundColor = &quot;white&quot;;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; }</p>
    <p></p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; function fullName() {</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; var f = document.getElementById(&quot;fname&quot;).value;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; var m = document.getElementById(&quot;mname&quot;).value;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; var l = document.getElementById(&quot;lname&quot;).value;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; document.getElementById(&quot;sname&quot;).value = f + &quot; &quot; + m + &quot; &quot; + l;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; }</p>
    <p>&nbsp; &nbsp; &lt;/script&gt;</p>
    <p>&lt;/head&gt;</p>
    <p></p>
    <p>&lt;body&gt;</p>
    <p>&nbsp; &nbsp; &lt;center&gt;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &lt;form&gt;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;h1&gt;Registration Form&lt;/h1&gt;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;table&gt;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;tr&gt;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;td&gt;First Name&lt;/td&gt;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;td&gt;&lt;input type=&quot;text&quot; id=&quot;fname&quot; placeholder=&quot;Enter first name&quot; onclick=&quot;input(this)&quot; onblur=&quot;reset1(this)&quot; oninput=&quot;fullName()&quot;
        /&gt;&lt;/td&gt;
    </p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/tr&gt;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;tr&gt;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;td&gt;Middle Name&lt;/td&gt;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;td&gt;&lt;input type=&quot;text&quot; id=&quot;mname&quot; placeholder=&quot;Enter middle name&quot; onclick=&quot;input(this)&quot; onblur=&quot;reset1(this)&quot; oninput=&quot;fullName()&quot;
        /&gt;&lt;/td&gt;
    </p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/tr&gt;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;tr&gt;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;td&gt;Last Name&lt;/td&gt;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;td&gt;&lt;input type=&quot;text&quot; id=&quot;lname&quot; placeholder=&quot;Enter last name&quot; onclick=&quot;input(this)&quot; onblur=&quot;reset1(this)&quot; oninput=&quot;fullName()&quot;
        /&gt;&lt;/td&gt;
    </p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/tr&gt;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;tr&gt;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;td&gt;Full Name&lt;/td&gt;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;td&gt;&lt;input type=&quot;text&quot; id=&quot;sname&quot; /&gt;&lt;/td&gt;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/tr&gt;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;tr&gt;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;td&gt;Date of Birth&lt;/td&gt;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;td&gt;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;select name=&quot;date&quot;&gt;
    </p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;01&lt;/option&gt;
    </p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;02&lt;/option&gt;
    </p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;03&lt;/option&gt;
    </p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;04&lt;/option&gt;
    </p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;05&lt;/option&gt;
    </p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;06&lt;/option&gt;
    </p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;07&lt;/option&gt;
    </p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;08&lt;/option&gt;
    </p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;09&lt;/option&gt;
    </p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;10&lt;/option&gt;
    </p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;11&lt;/option&gt;
    </p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;12&lt;/option&gt;
    </p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;13&lt;/option&gt;
    </p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;14&lt;/option&gt;
    </p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;15&lt;/option&gt;
    </p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;16&lt;/option&gt;
    </p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;17&lt;/option&gt;
    </p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;18&lt;/option&gt;
    </p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;19&lt;/option&gt;
    </p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;20&lt;/option&gt;
    </p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;21&lt;/option&gt;
    </p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;22&lt;/option&gt;
    </p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;23&lt;/option&gt;
    </p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;24&lt;/option&gt;
    </p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;25&lt;/option&gt;
    </p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;26&lt;/option&gt;
    </p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;27&lt;/option&gt;
    </p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;28&lt;/option&gt;
    </p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;29&lt;/option&gt;
    </p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;30&lt;/option&gt;
    </p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;31&lt;/option&gt;
    </p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/select&gt;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;select name=&quot;month&quot;&gt;
    </p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;01&lt;/option&gt;
    </p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;02&lt;/option&gt;
    </p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;03&lt;/option&gt;
    </p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;04&lt;/option&gt;
    </p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;05&lt;/option&gt;
    </p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;06&lt;/option&gt;
    </p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;07&lt;/option&gt;
    </p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;08&lt;/option&gt;
    </p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;09&lt;/option&gt;
    </p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;10&lt;/option&gt;
    </p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;11&lt;/option&gt;
    </p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;12&lt;/option&gt;
    </p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/select&gt;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;select name=&quot;year&quot;&gt;
    </p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;1990&lt;/option&gt;
    </p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;1991&lt;/option&gt;
    </p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;1992&lt;/option&gt;
    </p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;1993&lt;/option&gt;
    </p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;1994&lt;/option&gt;
    </p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;1995&lt;/option&gt;
    </p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;1996&lt;/option&gt;
    </p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;1997&lt;/option&gt;
    </p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;1998&lt;/option&gt;
    </p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;1999&lt;/option&gt;
    </p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;2000&lt;/option&gt;
    </p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;2001&lt;/option&gt;
    </p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;2002&lt;/option&gt;
    </p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;2003&lt;/option&gt;
    </p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;2004&lt;/option&gt;
    </p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;2005&lt;/option&gt;
    </p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/select&gt;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/td&gt;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/tr&gt;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;tr&gt;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;td&gt;Gender&lt;/td&gt;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;td&gt;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;input type=&quot;radio&quot; name=&quot;gender&quot; value=&quot;Male&quot;&gt;Male&lt;/input&gt;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;
    </p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;input type=&quot;radio&quot; name=&quot;gender&quot; value=&quot;Female&quot;&gt;Female&lt;/input&gt;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/td&gt;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/tr&gt;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;tr&gt;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;td&gt;Contry&lt;/td&gt;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;td&gt;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;select name=&quot;contry&quot;&gt;
    </p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option selected&gt;India&lt;/option&gt;
    </p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;US&lt;/option&gt;
    </p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;option&gt;UK&lt;/option&gt;
    </p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/select&gt;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/td&gt;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/tr&gt;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;tr&gt;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;td&gt;Email&lt;/td&gt;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;td&gt;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;input type=&quot;text&quot; name=&quot;email&quot; /&gt;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/td&gt;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/tr&gt;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;tr&gt;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;td&gt;Phone&lt;/td&gt;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;td&gt;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;input type=&quot;text&quot; name=&quot;phone&quot; /&gt;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/td&gt;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/tr&gt;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;tr&gt;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;td&gt;Password&lt;/td&gt;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;td&gt;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;input type=&quot;password&quot; name=&quot;password1&quot; /&gt;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/td&gt;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/tr&gt;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;tr&gt;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;td&gt;Comfirm Password&lt;/td&gt;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;td&gt;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;input type=&quot;password&quot; name=&quot;password2&quot; /&gt;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/td&gt;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/tr&gt;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;tr&gt;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;td&gt;&lt;/td&gt;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;td&gt;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;input type=&quot;submit&quot; value=&quot;Submit&quot; /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;input type=&quot;reset&quot; value=&quot;Cancel&quot; /&gt;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/td&gt;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/tr&gt;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/table&gt;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &lt;/form&gt;</p>
    <p>&nbsp; &nbsp; &lt;/center&gt;</p>
    <p>&lt;/body&gt;</p>
    <p></p>
    <p>&lt;/html&gt;</p>
    <p><img alt="" src="images/image1.png" title=""></p>
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