<?php
require("../../../libs/config.php");
$title = "HTML program to display name of any IT company you know | " . SITE_NAME;
$description = "HTML program to display name of any IT company you know";
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
            <h1>HTML program to display name of any IT company you know</h1>
            <p></p>
            <h3>HTML Code</h3>
            <pre><code class="html">&lt;html&gt;
&lt;head&gt;
    &lt;title&gt;Display IT company name&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;h1&gt;Tech Mahindra&lt;/h1&gt;
&lt;/body&gt;
&lt;/html&gt;
</code></pre>
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