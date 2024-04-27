<?php
require("../../../libs/config.php");
$title = "HTML Program to Demonstrate Different Types of HTML Headings | " . SITE_NAME;
$description = "HTML Program to Demonstrate Different Types of HTML Headings";
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
            <h1>HTML Program to Demonstrate Different Types of HTML Headings</h1>
            <p></p>
            <h3>HTML Code</h3>
            <pre><code class="html">&lt;html&gt;
&lt;head&gt;
    &lt;title&gt;HTML Headings&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;h1&gt;This is a heading H1&lt;/h1&gt;
    &lt;h2&gt;This is a heading H2&lt;/h2&gt;
    &lt;h3&gt;This is a heading H3&lt;/h3&gt;
    &lt;h4&gt;This is a heading H4&lt;/h4&gt;
    &lt;h5&gt;This is a heading H5&lt;/h5&gt;
    &lt;h6&gt;This is a heading H6&lt;/h6&gt;
&lt;/body&gt;
&lt;/html&gt;
</code></pre>
            <p></p>
            <h3>OUTPUT</h3>

            <img alt="" src="images/image1.png" title="">
            <p></p>
            <p></p>
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