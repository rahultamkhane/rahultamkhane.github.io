<?php
require("../../../libs/config.php");
$title = "Develop an android application to display all the subjects of sixth semester using AutoCompleteTextView | " . SITE_NAME;
$description = "Develop an android application to display all the subjects of sixth semester using AutoCompleteTextView";
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
            <h1>Develop an android application to display all the subjects of sixth semester using AutoCompleteTextView</h1>
            <h3>activity_main.xml</h3>
            <pre><code class="xml">&lt;?xml version=&quot;1.0&quot; encoding=&quot;utf-8&quot;?&gt;
&lt;RelativeLayout xmlns:android=&quot;http://schemas.android.com/apk/res/android&quot;
    xmlns:app=&quot;http://schemas.android.com/apk/res-auto&quot;
    xmlns:tools=&quot;http://schemas.android.com/tools&quot;
    android:layout_width=&quot;match_parent&quot;
    android:layout_height=&quot;match_parent&quot;
    tools:context=&quot;.MainActivity&quot;
    android:padding=&quot;20dp&quot;&gt;

    &lt;TextView android:id=&quot;@+id/textView&quot;
        android:layout_width=&quot;match_parent&quot;
        android:layout_height=&quot;wrap_content&quot;
        android:text=&quot;Showing AutoCompleteTextView for \nSIXTH SEMESTER SUBJECTS&quot;
        android:gravity=&quot;center&quot;
        android:layout_marginTop=&quot;50dp&quot;
        android:textSize=&quot;20sp&quot;/&gt;

    &lt;AutoCompleteTextView android:id=&quot;@+id/auto_complete&quot;
        android:layout_width=&quot;match_parent&quot;
        android:layout_height=&quot;50dp&quot;
        android:textSize=&quot;20sp&quot;
        android:hint=&quot;Enter subject here&quot;
        android:layout_below=&quot;@+id/textView&quot;
        android:layout_marginTop=&quot;30dp&quot;/&gt;
        
&lt;/RelativeLayout&gt;
</code></pre>
            <h3>MainActivity.java</h3>
            <pre><code class="java">package com.example.sixthsemautoctextview;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.widget.ArrayAdapter;
import android.widget.AutoCompleteTextView;

public class MainActivity extends AppCompatActivity {

    AutoCompleteTextView autotextview;
    String search_engines[] = {&quot;Management&quot;, &quot;Programming with Python&quot;, &quot;Mobile Application Development&quot;,
                               &quot;Emerging Trends in Computer &amp; IT&quot;, &quot;Web Based Application Development Using PHP&quot;,
                               &quot;Entrepreneurship Development&quot;, &quot;Capstone Project&quot;};

    @Override
    protected void onCreate(Bundle savedInstanceState) {

        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        autotextview = findViewById(R.id.auto_complete);
        ArrayAdapter&lt;String&gt; adapter = new ArrayAdapter&lt;String&gt;(this, android.R.layout.simple_list_item_1, search_engines);
        autotextview.setThreshold(2);
        autotextview.setAdapter(adapter);
    }
}
</code></pre>
            <h3>&nbsp;</h3>
            <h3>OUTPUT</h3>

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