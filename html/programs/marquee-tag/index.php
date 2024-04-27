<?php
require("../../../libs/config.php");
$title = "HTML program to demonstrate use of MARQUEE tag | " . SITE_NAME;
$description = "HTML program to demonstrate use of MARQUEE tag";
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
            <h1>HTML program to demonstrate use of MARQUEE tag</h1>
            <p></p>
            <h3>HTML Code</h3>
            <p></p>
            <pre><code class="html">&lt;html&gt;
&lt;head&gt;
    &lt;title&gt;marquee HTML TAG&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;marquee behavior=&quot;ALTERNATE&quot;&gt;
        SPECIAL PRICE! This week only!!.
    &lt;/marquee&gt;
    &lt;marquee id=&quot;marquee1&quot; bgcolor=&quot;GRAY&quot; direction=&quot;RIGHT&quot; height=&quot;30&quot; width=&quot;80%&quot; hspace=&quot;10&quot; vspace=&quot;10&quot;&gt;
        HTML is a basic of building web page. Try to learn each component carefully and you will know that HTML is very easy.
    &lt;/marquee&gt;
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