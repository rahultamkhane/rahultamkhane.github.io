<?php
require("../../../libs/config.php");
$title = "HTML program to use block level tags | " . SITE_NAME;
$description = "HTML program to use block level tags";
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
            <h1>HTML program to use block level tags</h1>
            <p></p>
            <p></p>
            <h3>HTML Code</h3>
            <p></p>
            <pre><code class="html">&lt;html&gt;
&lt;head&gt;
&lt;title&gt;&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;h1 align=&quot;center&quot;&gt;This is h1 tag with center alignment&lt;/h1&gt;
    &lt;h2 align=&quot;left&quot;&gt;This is h2 tag with left alignment&lt;/h2&gt;
    &lt;h3 align=&quot;right&quot;&gt;This is h3 tag with right alignment&lt;/h3&gt;
    &lt;h4&gt;This is h4 tag without alignment&lt;/h4&gt;
    &lt;h5&gt;This is h5 tag without alignment&lt;/h5&gt;
    &lt;h6&gt;This is h6 tag without alignment&lt;/h6&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;
    &lt;br&gt;
    &lt;p&gt;This is example of paragraph&lt;/p&gt;
    &lt;p&gt;This is new sentence without paragraph break&lt;/p&gt;
&lt;/body&gt;
&lt;/html&gt;
</code></pre>
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