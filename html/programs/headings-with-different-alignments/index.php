<?php
require("../../../libs/config.php");
$title = "HTML Program for Headings with Different Alignments | " . SITE_NAME;
$description = "HTML Program for Headings with Different Alignments";
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
            <h1>HTML Program for Headings with Different Alignments</h1>
            <h3>HTML Code</h3>
            <p></p>
            <pre><code class="html">&lt;html&gt;
&lt;head&gt;
    &lt;title&gt;HTML Headings&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;h1 align=&quot;left&quot;&gt;Left aligned heading&lt;/h1&gt;
    &lt;h1 align=&quot;center&quot;&gt;Center aligned heading&lt;/h1&gt;
    &lt;h1 align=&quot;right&quot;&gt;Right aligned heading&lt;/h1&gt;
&lt;/body&gt;
&lt;/html&gt;
</code></pre>
            <p></p>
            <h3>OUTPUT</h3>
            <p></p>

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