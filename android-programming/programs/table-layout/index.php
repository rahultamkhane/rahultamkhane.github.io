<?php
require("../../../libs/config.php");
$title = "Develop an android application to display 10 students basic information in a table form using Table Layout | " . SITE_NAME;
$description = "Develop an android application to display 10 students basic information in a table form using Table Layout";
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
            <h1>Develop an android application to display 10 students basic information in a table form using Table Layout</h1>
            <p>In this tutorial, we are creating an android application which will look like as</p>
            <center><img alt="" src="images/image1.png" title=""></center>
            <p>Let’s start by designing the layout of our Android App.</p>
            <h3>activity_main.xml</h3>
            <pre><code class="xml">&lt;?xml version=&quot;1.0&quot; encoding=&quot;utf-8&quot;?&gt;
&lt;TableLayout xmlns:android=&quot;http://schemas.android.com/apk/res/android&quot;
    xmlns:app=&quot;http://schemas.android.com/apk/res-auto&quot;
    xmlns:tools=&quot;http://schemas.android.com/tools&quot;
    android:layout_width=&quot;match_parent&quot;
    android:layout_height=&quot;match_parent&quot;
    android:layout_marginTop=&quot;20dp&quot;
    tools:context=&quot;.MainActivity&quot;&gt;

    &lt;TextView
        android:layout_width=&quot;match_parent&quot;
        android:layout_height=&quot;wrap_content&quot;
        android:text=&quot;@string/table_heading&quot;
        android:gravity=&quot;center_horizontal&quot;
        android:padding=&quot;10dp&quot;
        android:textColor=&quot;@android:color/black&quot;
        android:textStyle=&quot;bold&quot;/&gt;

    &lt;TableRow
        android:id=&quot;@+id/headings&quot;
        android:layout_width=&quot;match_parent&quot;
        android:layout_height=&quot;match_parent&quot;
        android:background=&quot;#607D8B&quot;
        android:padding=&quot;5dp&quot; &gt;

        &lt;TextView
            android:layout_width=&quot;wrap_content&quot;
            android:layout_height=&quot;wrap_content&quot;
            android:text=&quot;Name&quot;
            android:layout_weight=&quot;1&quot;
            android:textColor=&quot;@android:color/white&quot;/&gt;

        &lt;TextView
            android:layout_width=&quot;wrap_content&quot;
            android:layout_height=&quot;wrap_content&quot;
            android:text=&quot;dept&quot;
            android:layout_weight=&quot;1&quot;
            android:textColor=&quot;@android:color/white&quot;/&gt;

        &lt;TextView
            android:layout_width=&quot;wrap_content&quot;
            android:layout_height=&quot;wrap_content&quot;
            android:text=&quot;City&quot;
            android:layout_weight=&quot;1&quot;
            android:textColor=&quot;@android:color/white&quot;/&gt;

        &lt;TextView
            android:layout_width=&quot;wrap_content&quot;
            android:layout_height=&quot;wrap_content&quot;
            android:text=&quot;Percentage&quot;
            android:layout_weight=&quot;1&quot;
            android:textColor=&quot;@android:color/white&quot;/&gt;
    &lt;/TableRow&gt;

    &lt;TableRow
        android:layout_width=&quot;match_parent&quot;
        android:layout_height=&quot;match_parent&quot;
        android:background=&quot;#E7E7EB&quot;
        android:padding=&quot;5dp&quot; &gt;

        &lt;TextView
            android:layout_width=&quot;wrap_content&quot;
            android:layout_height=&quot;wrap_content&quot;
            android:text=&quot;@string/s1_name&quot;
            android:layout_weight=&quot;1&quot;/&gt;

        &lt;TextView
            android:layout_width=&quot;wrap_content&quot;
            android:layout_height=&quot;wrap_content&quot;
            android:text=&quot;@string/s1_dept&quot;
            android:layout_weight=&quot;1&quot;/&gt;

        &lt;TextView
            android:layout_width=&quot;wrap_content&quot;
            android:layout_height=&quot;wrap_content&quot;
            android:text=&quot;@string/s1_city&quot;
            android:layout_weight=&quot;1&quot;/&gt;

        &lt;TextView
            android:layout_width=&quot;wrap_content&quot;
            android:layout_height=&quot;wrap_content&quot;
            android:text=&quot;@string/s1_percentage&quot;
            android:layout_weight=&quot;1&quot;/&gt;
    &lt;/TableRow&gt;

    &lt;TableRow
        android:layout_width=&quot;match_parent&quot;
        android:layout_height=&quot;match_parent&quot;
        android:background=&quot;#FFFFFF&quot;
        android:padding=&quot;5dp&quot; &gt;

        &lt;TextView
            android:layout_width=&quot;wrap_content&quot;
            android:layout_height=&quot;wrap_content&quot;
            android:text=&quot;@string/s2_name&quot;
            android:layout_weight=&quot;1&quot;/&gt;

        &lt;TextView
            android:layout_width=&quot;wrap_content&quot;
            android:layout_height=&quot;wrap_content&quot;
            android:text=&quot;@string/s2_dept&quot;
            android:layout_weight=&quot;1&quot;/&gt;

        &lt;TextView
            android:layout_width=&quot;wrap_content&quot;
            android:layout_height=&quot;wrap_content&quot;
            android:text=&quot;@string/s2_city&quot;
            android:layout_weight=&quot;1&quot;/&gt;

        &lt;TextView
            android:layout_width=&quot;wrap_content&quot;
            android:layout_height=&quot;wrap_content&quot;
            android:text=&quot;@string/s2_percentage&quot;
            android:layout_weight=&quot;1&quot;/&gt;
    &lt;/TableRow&gt;

    &lt;TableRow
        android:layout_width=&quot;match_parent&quot;
        android:layout_height=&quot;match_parent&quot;
        android:background=&quot;#E7E7EB&quot;
        android:padding=&quot;5dp&quot; &gt;

        &lt;TextView
            android:layout_width=&quot;wrap_content&quot;
            android:layout_height=&quot;wrap_content&quot;
            android:text=&quot;@string/s3_name&quot;
            android:layout_weight=&quot;1&quot;/&gt;

        &lt;TextView
            android:layout_width=&quot;wrap_content&quot;
            android:layout_height=&quot;wrap_content&quot;
            android:text=&quot;@string/s3_dept&quot;
            android:layout_weight=&quot;1&quot;/&gt;

        &lt;TextView
            android:layout_width=&quot;wrap_content&quot;
            android:layout_height=&quot;wrap_content&quot;
            android:text=&quot;@string/s3_city&quot;
            android:layout_weight=&quot;1&quot;/&gt;

        &lt;TextView
            android:layout_width=&quot;wrap_content&quot;
            android:layout_height=&quot;wrap_content&quot;
            android:text=&quot;@string/s3_percentage&quot;
            android:layout_weight=&quot;1&quot;/&gt;
    &lt;/TableRow&gt;

    &lt;TableRow
        android:layout_width=&quot;match_parent&quot;
        android:layout_height=&quot;match_parent&quot;
        android:background=&quot;#FFFFFF&quot;
        android:padding=&quot;5dp&quot; &gt;

        &lt;TextView
            android:layout_width=&quot;wrap_content&quot;
            android:layout_height=&quot;wrap_content&quot;
            android:text=&quot;@string/s4_name&quot;
            android:layout_weight=&quot;1&quot;/&gt;

        &lt;TextView
            android:layout_width=&quot;wrap_content&quot;
            android:layout_height=&quot;wrap_content&quot;
            android:text=&quot;@string/s4_dept&quot;
            android:layout_weight=&quot;1&quot;/&gt;

        &lt;TextView
            android:layout_width=&quot;wrap_content&quot;
            android:layout_height=&quot;wrap_content&quot;
            android:text=&quot;@string/s4_city&quot;
            android:layout_weight=&quot;1&quot;/&gt;

        &lt;TextView
            android:layout_width=&quot;wrap_content&quot;
            android:layout_height=&quot;wrap_content&quot;
            android:text=&quot;@string/s4_percentage&quot;
            android:layout_weight=&quot;1&quot;/&gt;
    &lt;/TableRow&gt;

    &lt;TableRow
        android:layout_width=&quot;match_parent&quot;
        android:layout_height=&quot;match_parent&quot;
        android:background=&quot;#E7E7EB&quot;
        android:padding=&quot;5dp&quot; &gt;

        &lt;TextView
            android:layout_width=&quot;wrap_content&quot;
            android:layout_height=&quot;wrap_content&quot;
            android:text=&quot;@string/s5_name&quot;
            android:layout_weight=&quot;1&quot;/&gt;

        &lt;TextView
            android:layout_width=&quot;wrap_content&quot;
            android:layout_height=&quot;wrap_content&quot;
            android:text=&quot;@string/s5_dept&quot;
            android:layout_weight=&quot;1&quot;/&gt;

        &lt;TextView
            android:layout_width=&quot;wrap_content&quot;
            android:layout_height=&quot;wrap_content&quot;
            android:text=&quot;@string/s5_city&quot;
            android:layout_weight=&quot;1&quot;/&gt;

        &lt;TextView
            android:layout_width=&quot;wrap_content&quot;
            android:layout_height=&quot;wrap_content&quot;
            android:text=&quot;@string/s5_percentage&quot;
            android:layout_weight=&quot;1&quot;/&gt;
    &lt;/TableRow&gt;

    &lt;TableRow
        android:layout_width=&quot;match_parent&quot;
        android:layout_height=&quot;match_parent&quot;
        android:background=&quot;#FFFFFF&quot;
        android:padding=&quot;5dp&quot; &gt;

        &lt;TextView
            android:layout_width=&quot;wrap_content&quot;
            android:layout_height=&quot;wrap_content&quot;
            android:text=&quot;@string/s6_name&quot;
            android:layout_weight=&quot;1&quot;/&gt;

        &lt;TextView
            android:layout_width=&quot;wrap_content&quot;
            android:layout_height=&quot;wrap_content&quot;
            android:text=&quot;@string/s6_dept&quot;
            android:layout_weight=&quot;1&quot;/&gt;

        &lt;TextView
            android:layout_width=&quot;wrap_content&quot;
            android:layout_height=&quot;wrap_content&quot;
            android:text=&quot;@string/s6_city&quot;
            android:layout_weight=&quot;1&quot;/&gt;

        &lt;TextView
            android:layout_width=&quot;wrap_content&quot;
            android:layout_height=&quot;wrap_content&quot;
            android:text=&quot;@string/s6_percentage&quot;
            android:layout_weight=&quot;1&quot;/&gt;
    &lt;/TableRow&gt;

    &lt;TableRow
        android:layout_width=&quot;match_parent&quot;
        android:layout_height=&quot;match_parent&quot;
        android:background=&quot;#E7E7EB&quot;
        android:padding=&quot;5dp&quot; &gt;

        &lt;TextView
            android:layout_width=&quot;wrap_content&quot;
            android:layout_height=&quot;wrap_content&quot;
            android:text=&quot;@string/s7_name&quot;
            android:layout_weight=&quot;1&quot;/&gt;

        &lt;TextView
            android:layout_width=&quot;wrap_content&quot;
            android:layout_height=&quot;wrap_content&quot;
            android:text=&quot;@string/s7_dept&quot;
            android:layout_weight=&quot;1&quot;/&gt;

        &lt;TextView
            android:layout_width=&quot;wrap_content&quot;
            android:layout_height=&quot;wrap_content&quot;
            android:text=&quot;@string/s7_city&quot;
            android:layout_weight=&quot;1&quot;/&gt;

        &lt;TextView
            android:layout_width=&quot;wrap_content&quot;
            android:layout_height=&quot;wrap_content&quot;
            android:text=&quot;@string/s7_percentage&quot;
            android:layout_weight=&quot;1&quot;/&gt;
    &lt;/TableRow&gt;

    &lt;TableRow
        android:layout_width=&quot;match_parent&quot;
        android:layout_height=&quot;match_parent&quot;
        android:background=&quot;#FFFFFF&quot;
        android:padding=&quot;5dp&quot; &gt;

        &lt;TextView
            android:layout_width=&quot;wrap_content&quot;
            android:layout_height=&quot;wrap_content&quot;
            android:text=&quot;@string/s8_name&quot;
            android:layout_weight=&quot;1&quot;/&gt;

        &lt;TextView
            android:layout_width=&quot;wrap_content&quot;
            android:layout_height=&quot;wrap_content&quot;
            android:text=&quot;@string/s8_dept&quot;
            android:layout_weight=&quot;1&quot;/&gt;

        &lt;TextView
            android:layout_width=&quot;wrap_content&quot;
            android:layout_height=&quot;wrap_content&quot;
            android:text=&quot;@string/s8_city&quot;
            android:layout_weight=&quot;1&quot;/&gt;

        &lt;TextView
            android:layout_width=&quot;wrap_content&quot;
            android:layout_height=&quot;wrap_content&quot;
            android:text=&quot;@string/s8_percentage&quot;
            android:layout_weight=&quot;1&quot;/&gt;
    &lt;/TableRow&gt;

    &lt;TableRow
        android:layout_width=&quot;match_parent&quot;
        android:layout_height=&quot;match_parent&quot;
        android:background=&quot;#E7E7EB&quot;
        android:padding=&quot;5dp&quot; &gt;

        &lt;TextView
            android:layout_width=&quot;wrap_content&quot;
            android:layout_height=&quot;wrap_content&quot;
            android:text=&quot;@string/s9_name&quot;
            android:layout_weight=&quot;1&quot;/&gt;

        &lt;TextView
            android:layout_width=&quot;wrap_content&quot;
            android:layout_height=&quot;wrap_content&quot;
            android:text=&quot;@string/s9_dept&quot;
            android:layout_weight=&quot;1&quot;/&gt;

        &lt;TextView
            android:layout_width=&quot;wrap_content&quot;
            android:layout_height=&quot;wrap_content&quot;
            android:text=&quot;@string/s9_city&quot;
            android:layout_weight=&quot;1&quot;/&gt;

        &lt;TextView
            android:layout_width=&quot;wrap_content&quot;
            android:layout_height=&quot;wrap_content&quot;
            android:text=&quot;@string/s9_percentage&quot;
            android:layout_weight=&quot;1&quot;/&gt;
    &lt;/TableRow&gt;
    &lt;TableRow
        android:layout_width=&quot;match_parent&quot;
        android:layout_height=&quot;match_parent&quot;
        android:background=&quot;#FFFFFF&quot;
        android:padding=&quot;5dp&quot; &gt;

        &lt;TextView
            android:layout_width=&quot;wrap_content&quot;
            android:layout_height=&quot;wrap_content&quot;
            android:text=&quot;@string/s10_name&quot;
            android:layout_weight=&quot;1&quot;/&gt;

        &lt;TextView
            android:layout_width=&quot;wrap_content&quot;
            android:layout_height=&quot;wrap_content&quot;
            android:text=&quot;@string/s10_dept&quot;
            android:layout_weight=&quot;1&quot;/&gt;

        &lt;TextView
            android:layout_width=&quot;wrap_content&quot;
            android:layout_height=&quot;wrap_content&quot;
            android:text=&quot;@string/s10_city&quot;
            android:layout_weight=&quot;1&quot;/&gt;

        &lt;TextView
            android:layout_width=&quot;wrap_content&quot;
            android:layout_height=&quot;wrap_content&quot;
            android:text=&quot;@string/s10_percentage&quot;
            android:layout_weight=&quot;1&quot;/&gt;
    &lt;/TableRow&gt;
&lt;/TableLayout&gt;
</code></pre>
            <p></p>
            <h3>MainActivity.java</h3>
            <pre><code class="java">package com.example.tablelayout;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
public class MainActivity extends AppCompatActivity {
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
    }
}
</code></pre>
            <h3>strings.xml</h3>
            <pre><code class="xml">&lt;resources&gt;
    &lt;string name=&quot;app_name&quot;&gt;TableLayout&lt;/string&gt;
    &lt;string name=&quot;table_heading&quot;&gt;Students Basic Information&lt;/string&gt;
    &lt;string name=&quot;s1_name&quot;&gt;Rohit&lt;/string&gt;
    &lt;string name=&quot;s1_dept&quot;&gt;COMP&lt;/string&gt;
    &lt;string name=&quot;s1_city&quot;&gt;Pune&lt;/string&gt;
    &lt;string name=&quot;s1_percentage&quot;&gt;85.21&lt;/string&gt;
    &lt;string name=&quot;s2_name&quot;&gt;Amit&lt;/string&gt;
    &lt;string name=&quot;s2_dept&quot;&gt;E &amp; TC&lt;/string&gt;
    &lt;string name=&quot;s2_city&quot;&gt;Mumbai&lt;/string&gt;
    &lt;string name=&quot;s2_percentage&quot;&gt;75.26&lt;/string&gt;
    &lt;string name=&quot;s3_name&quot;&gt;Rohan&lt;/string&gt;
    &lt;string name=&quot;s3_dept&quot;&gt;COMP&lt;/string&gt;
    &lt;string name=&quot;s3_city&quot;&gt;Nashik&lt;/string&gt;
    &lt;string name=&quot;s3_percentage&quot;&gt;90.00&lt;/string&gt;
    &lt;string name=&quot;s4_name&quot;&gt;Santosh&lt;/string&gt;
    &lt;string name=&quot;s4_dept&quot;&gt;COMP&lt;/string&gt;
    &lt;string name=&quot;s4_city&quot;&gt;Dhule&lt;/string&gt;
    &lt;string name=&quot;s4_percentage&quot;&gt;79.24&lt;/string&gt;
    &lt;string name=&quot;s5_name&quot;&gt;Girish&lt;/string&gt;
    &lt;string name=&quot;s5_dept&quot;&gt;E &amp; TC&lt;/string&gt;
    &lt;string name=&quot;s5_city&quot;&gt;Dhule&lt;/string&gt;
    &lt;string name=&quot;s5_percentage&quot;&gt;84.00&lt;/string&gt;
    &lt;string name=&quot;s6_name&quot;&gt;Aachal&lt;/string&gt;
    &lt;string name=&quot;s6_dept&quot;&gt;MECH&lt;/string&gt;
    &lt;string name=&quot;s6_city&quot;&gt;Shirpur&lt;/string&gt;
    &lt;string name=&quot;s6_percentage&quot;&gt;69.84&lt;/string&gt;
    &lt;string name=&quot;s7_name&quot;&gt;Riddhi&lt;/string&gt;
    &lt;string name=&quot;s7_dept&quot;&gt;COMP&lt;/string&gt;
    &lt;string name=&quot;s7_city&quot;&gt;Shirpur&lt;/string&gt;
    &lt;string name=&quot;s7_percentage&quot;&gt;73.57&lt;/string&gt;
    &lt;string name=&quot;s8_name&quot;&gt;Dinesh&lt;/string&gt;
    &lt;string name=&quot;s8_dept&quot;&gt;ELEC&lt;/string&gt;
    &lt;string name=&quot;s8_city&quot;&gt;Nandurbar&lt;/string&gt;
    &lt;string name=&quot;s8_percentage&quot;&gt;80.50&lt;/string&gt;
    &lt;string name=&quot;s9_name&quot;&gt;Kalpesh&lt;/string&gt;
    &lt;string name=&quot;s9_dept&quot;&gt;CIVIL&lt;/string&gt;
    &lt;string name=&quot;s9_city&quot;&gt;Jalgaon&lt;/string&gt;
    &lt;string name=&quot;s9_percentage&quot;&gt;71.30&lt;/string&gt;
    &lt;string name=&quot;s10_name&quot;&gt;Harish&lt;/string&gt;
    &lt;string name=&quot;s10_dept&quot;&gt;COMP&lt;/string&gt;
    &lt;string name=&quot;s10_city&quot;&gt;Dhule&lt;/string&gt;
    &lt;string name=&quot;s10_percentage&quot;&gt;72.47&lt;/string&gt;
&lt;/resources&gt;
</code></pre>
            <p></p>
            <h3>OUTPUT</h3>

            <img alt="" src="images/image1.png" title="">
        </div> <!-- /mydiv -->
      </div> <!-- /container -->
    </div> <!-- /col-sm-8 -->

    <?php
    include($_SERVER['DOCUMENT_ROOT'] . SITE_DIR . "include/rightbar.php");
    ?>

  </div> <!-- /row -->

</div> <!-- /container-fluid -->
<?php
include($_SERVER['DOCUMENT_ROOT'] . SITE_DIR . "include/footer.php");
?>