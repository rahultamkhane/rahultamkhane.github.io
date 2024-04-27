<?php
require("../../../libs/config.php");
$title = "HTML program to create Time Table using HTML table tag | " . SITE_NAME;
$description = "HTML program to create Time Table using HTML table tag";
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
            <h1>HTML program to create Time Table using HTML table tag</h1>
            <p></p>
            <h3>HTML Code</h3>
            <pre><code class="html">&lt;html&gt;
&lt;head&gt;
    &lt;title&gt;TABLES&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;table border=&quot;1&quot; align=&quot;center&quot;&gt;
        &lt;tr&gt;
            &lt;th&gt;Day/Time&lt;/th&gt;
            &lt;th&gt;10:00 - 11:00&lt;/th&gt;
            &lt;th&gt;11:00 - 12:00&lt;/th&gt;
            &lt;th&gt;12:00 - 12:50&lt;/th&gt;
            &lt;th&gt;12:50 - 01:50&lt;/th&gt;
            &lt;th&gt;01:50 - 02:50&lt;/th&gt;
            &lt;th&gt;02:50 - 03:00&lt;/th&gt;
            &lt;th&gt;03:00 - 04:00&lt;/th&gt;
            &lt;th&gt;04:00 - 05:00&lt;/th&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
            &lt;td&gt;MONDAY&lt;/td&gt;
            &lt;td&gt;PCI&lt;/td&gt;
            &lt;td&gt;EEC&lt;/td&gt;
            &lt;td align=&quot;center&quot; rowspan=&quot;6&quot;&gt; LUNCH BREAK &lt;/td&gt;
            &lt;td&gt;BEC&lt;/td&gt;
            &lt;td&gt;WPD&lt;/td&gt;
            &lt;td align=&quot;center&quot;&gt; B &lt;/td&gt;
            &lt;td colspan=&quot;2&quot;&gt;EEC (B3)&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
            &lt;td&gt;TUESDAY&lt;/td&gt;
            &lt;td&gt;PCI&lt;/td&gt;
            &lt;td&gt;EEC&lt;/td&gt;
            &lt;td&gt;BEC&lt;/td&gt;
            &lt;td&gt;WPD&lt;/td&gt;
            &lt;td align=&quot;center&quot;&gt; R &lt;/td&gt;\
            &lt;td colspan=&quot;2&quot;&gt;BEC (B3)&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
            &lt;td&gt;WEDNESDAY&lt;/td&gt;
            &lt;td&gt;PCI&lt;/td&gt;
            &lt;td&gt;MATHS&lt;/td&gt;
            &lt;td&gt;BEC&lt;/td&gt;
            &lt;td&gt;CPH&lt;/td&gt;
            &lt;td align=&quot;center&quot;&gt; E &lt;/td&gt;
            &lt;td colspan=&quot;2&quot;&gt;PCI (B3)&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
            &lt;td&gt;THURSDAY&lt;/td&gt;
            &lt;td&gt;MATHS&lt;/td&gt;
            &lt;td&gt;EEC&lt;/td&gt;
            &lt;td colspan=&quot;2&quot;&gt;MATHS TU (B3)&lt;/td&gt;
            &lt;td align=&quot;center&quot;&gt; A &lt;/td&gt;
            &lt;td colspan=&quot;2&quot;&gt;WPD (B3)&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
            &lt;td&gt;FRIDAY&lt;/td&gt;
            &lt;td&gt;MATHS&lt;/td&gt;
            &lt;td&gt;EEC&lt;/td&gt;
            &lt;td colspan=&quot;2&quot;&gt;MICRO(B3)&lt;/td&gt;
            &lt;td align=&quot;center&quot;&gt; K &lt;/td&gt;
            &lt;td colspan=&quot;2&quot;&gt;CPH (B3)&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
            &lt;td&gt;SATURDAY&lt;/td&gt;
            &lt;td&gt;MATHS&lt;/td&gt;
            &lt;td&gt;CPH&lt;/td&gt;
            &lt;td colspan=&quot;2&quot;&gt;PCI TU (B3)&lt;/td&gt;
            &lt;td align=&quot;center&quot;&gt; SHORT &lt;/td&gt;
            &lt;td colspan=&quot;2&quot;&gt;BCC (B3)&lt;/td&gt;
        &lt;/tr&gt;
    &lt;/table&gt;
&lt;/body&gt;
&lt;/html&gt;
</code></pre>
            <p></p>
            <h3>OUTPUT</h3>
            <p></p>

            <img alt="" src="images/image1.png" title="">
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