<?php
require("../../../libs/config.php");
$title = "HTML program to design a web page which include image hyperlink and set any image as a background to the page | " . SITE_NAME;
$description = "HTML program to design a web page which include image hyperlink and set any image as a background to the page";
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
            <h1>HTML program to design a web page which include image hyperlink and set any image as a background to the page</h1>
            <p></p>
            <h3>HTML Code</h3>
            <p></p>
            <pre><code class="html">&lt;html&gt;
&lt;head&gt;
    &lt;title&gt;&lt;/title&gt;
&lt;/head&gt;
&lt;body background=&quot;background.jpg&quot;&gt;
Click on image
&lt;a href=&quot;https://www.google.com&quot;&gt;
    &lt;img src=&quot;india.png&quot;/&gt;
&lt;/a&gt;
&lt;/body&gt;
&lt;/html&gt;
</code></pre>
            <p></p>
            <p></p>
            <h3>OUTPUT</h3>
            <p></p>

            <img alt="" src="images/image1.png" title="">
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