<?php
require("../../../libs/config.php");
$title = "HTML program to divide a web page into 2 rows and second into 3 columns using frameset | " . SITE_NAME;
$description = "HTML program to divide a web page into 2 rows and second into 3 columns using frameset and its attributes and showing text links in first column, ordered list in second column and image in third column";
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
            <h1>HTML program to divide a web page into 2 rows and second into 3 columns using frameset</h1>
            <p></p>
            <p>HTML program to divide a web page into 2 rows and second into 3 columns using frameset and its attributes and showing text links in first column, ordered list in second column and image in third column.</p>
            <p></p>
            <h3>SOURCE CODE</h3>
            <p></p>
            <h3>home.html</h3>
            <p></p>
            <pre><code class="html">&lt;html&gt;
&lt;frameset rows=&quot;*, *&quot;&gt;
    &lt;frame src=&quot;frame1.html&quot;&gt;
        &lt;frameset cols=&quot;*, *, *&quot;&gt;
            &lt;frame src=&quot;text-links.html&quot;&gt;
                &lt;frame src=&quot;ordered-list.html&quot;&gt;
                    &lt;frame src=&quot;image.jpg&quot;&gt;
        &lt;/frameset&gt;
&lt;/frameset&gt;
&lt;/html&gt;
</code></pre>
            <p></p>
            <h3>frame1.html</h3>
            <p></p>
            <pre><code class="html">&lt;html&gt;
&lt;body&gt;
    &lt;h1&gt;Frame 1&lt;/h1&gt;
    &lt;p&gt;Contents of Frame 1&lt;/p&gt;
&lt;/body&gt;
&lt;/html&gt;
</code></pre>
            <p></p>
            <h3>text-links.html</h3>
            <p></p>
            <pre><code class="html">&lt;html&gt;
&lt;body&gt;
    &lt;a href=&quot;https://msbte.org.in/&quot;&gt; MSBTE &lt;/a&gt;&lt;br&gt;
    &lt;a href=&quot;https://www.google.com/&quot;&gt; Google &lt;/a&gt;&lt;br&gt;
    &lt;a href=&quot;https://in.yahoo.com/&quot;&gt; Yahoo &lt;/a&gt;
&lt;/body&gt;
&lt;/html&gt;
</code></pre>
            <p></p>
            <p></p>
            <h3>Ordered-list.html</h3>
            <p></p>
            <pre><code class="html">&lt;html&gt;
&lt;body&gt;
    &lt;ul&gt;
        &lt;li&gt;One&lt;/li&gt;
        &lt;li&gt;Two&lt;/li&gt;
        &lt;li&gt;Three&lt;/li&gt;
    &lt;/ul&gt;
    &lt;ol&gt;
        &lt;li&gt;Milk&lt;/li&gt;
        &lt;li&gt;Coffee&lt;/li&gt;
        &lt;li&gt;Tea&lt;/li&gt;
    &lt;/ol&gt;
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