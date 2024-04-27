<?php
require("../../../libs/config.php");
$title = "HTML program for using text level tags and special symbols | " . SITE_NAME;
$description = "HTML program for using text level tags and special symbols";
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
            <h1>HTML program for using text level tags and special symbols</h1>
            <p></p>
            <p></p>
            <h3>HTML Code</h3>
            <p></p>
            <pre><code class="html">&lt;html&gt;
&lt;head&gt;
    &lt;title&gt;&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
    One &lt;sub&gt;particular&lt;/sub&gt; book which is recommended reading is &lt;u&gt;The Street Lawyer&lt;/u&gt; by &lt;u&gt;Jhon Grisham&lt;/u&gt;.
    &lt;tt&gt;This book is about a lawyer who begins re-evaluting his prioritiers in life when a bad incident occurs within
        his law firm.&lt;/tt&gt;
    &lt;strike&gt;Consequently,he becomes acquainted with the inner city streets,and realizes the harsh existence of the
        homeless&lt;/strike&gt;. &lt;u&gt;The Street Lawyer&lt;/u&gt; is a &lt;b&gt;&lt;i&gt;great&lt;/i&gt;&lt;/b&gt; book. It is &lt;b&gt;&lt;i&gt;well written&lt;/i&gt;&lt;/b&gt; and
    &lt;b&gt;&lt;i&gt;interesting&lt;/i&gt;&lt;/b&gt;. Other books by &lt;sup&gt;John Grisham&lt;/sup&gt; include &lt;u&gt;The Firm&lt;/u&gt; &#38; &lt;u&gt;The Pelican
        Brief&lt;/u&gt;,and The &lt;u&gt;Client&lt;/u&gt;.
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