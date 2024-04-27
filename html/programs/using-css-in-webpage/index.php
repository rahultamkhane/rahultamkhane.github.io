<?php
require("../../../libs/config.php");
$title = "HTML program to develop a web page using CSS for website page | " . SITE_NAME;
$description = "HTML program to develop a web page using CSS for website page";
include($_SERVER['DOCUMENT_ROOT'] . SITE_DIR . "include/header.php");
?>

<?php
include($_SERVER['DOCUMENT_ROOT'] . SITE_DIR . "include/navbar.php");
?>

<div class="container">
  <div class="row">

    <?php
    include($_SERVER['DOCUMENT_ROOT'] . SITE_DIR . "include/leftbar.php");
    ?>

    <div class="col-sm-8 pl-5 pt-4">
      <div class="container">
        <div class="mydiv">

          <body>
            <h1>HTML program to develop a web page using CSS for website page</h1>
            <h3>index.html</h3>
            <p></p>
            <pre><code class="html">&lt;html&gt;
&lt;head&gt;
    &lt;title&gt;Practical No. 12&lt;/title&gt;
    &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;./mystyle.css&quot;&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;h1&gt;My First Website&lt;/h1&gt;
    &lt;ul&gt;
        &lt;li&gt;About&lt;/li&gt;
        &lt;li&gt;Home&lt;/li&gt;&lt;br&gt;
        &lt;li&gt;Contact&lt;/li&gt;
    &lt;/ul&gt;
    &lt;br&gt;&lt;br&gt;&lt;br&gt;
    &lt;div&gt;
        &lt;h2&gt;Home&lt;/h2&gt;
        &lt;p&gt;This is my first webpage! I was able to code all the HTML and CSS in order to make it. Watch out world of web
            design here I come!&lt;/p&gt;
    &lt;/div&gt;
&lt;/body&gt;
&lt;/html&gt;
</code></pre>
            <p></p>
            <h3>mystyle.css</h3>
            <p></p>
            <pre><code class="css">body {
    padding: 20px;
    background: cyan;
}
h1 {
    width: 200px;
}
ul {
    float: right;
    position: absolute;
    right: 20px;
    top: 10px;
    width: 300px;
}
li {
    list-style-type: none;
    display: inline-block;
    padding: 20px;
    background-color: black;
    color: white;
    font-size: 20px;
    font-weight: bold;
    margin: 5px;
    float: right;
}
div {
    background: white;
    display: inline-block;
    position: relative;
    padding: 15px;
}
</code></pre>
            <p></p>
            <h3>OUTPUT</h3>
            <p></p>

            <img alt="" src="images/image1.png" title="">
            <p></p>
        </div> <!-- /mydiv -->
      </div> <!-- /container -->
    </div> <!-- /col-sm-8 -->

    <?php
    include($_SERVER['DOCUMENT_ROOT'] . SITE_DIR . "include/rightbar.php");
    ?>

  </div> <!-- /row -->

</div> <!-- /container -->
<?php
include($_SERVER['DOCUMENT_ROOT'] . SITE_DIR . "include/footer.php");
?>