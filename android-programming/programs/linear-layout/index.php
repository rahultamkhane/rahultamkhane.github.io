<?php
require("../../../libs/config.php");
$title = "Develop an android application to place Name, Age and Mobile number linearly (Vertical) on the display screen using Linear Layout | " . SITE_NAME;
$description = "Develop an android application to place Name, Age and Mobile number linearly (Vertical) on the display screen using Linear Layout";
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
            <h1>Develop an android application to place Name, Age and Mobile number linearly (Vertical) on the display screen using Linear Layout</h1>
            <p>In this tutorial, we are creating an android application which will look like as</p>
            <center><img alt="" src="images/image1.png" title=""></center>
            <p>Let’s start by designing the layout of our Android App.</p>
            <h3>AndroidManifest.xml</h3>
            <pre><code class="xml">&lt;?xml version=&quot;1.0&quot; encoding=&quot;utf-8&quot;?&gt;
&lt;manifest xmlns:android=&quot;http://schemas.android.com/apk/res/android&quot;
    package=&quot;com.example.linearlayout&quot;&gt;
    &lt;application
        android:allowBackup=&quot;true&quot;
        android:icon=&quot;@mipmap/ic_launcher&quot;
        android:label=&quot;@string/app_name&quot;
        android:roundIcon=&quot;@mipmap/ic_launcher_round&quot;
        android:supportsRtl=&quot;true&quot;
        android:theme=&quot;@style/AppTheme&quot;&gt;
        &lt;activity android:name=&quot;.MainActivity&quot;&gt;
            &lt;intent-filter&gt;
                &lt;action android:name=&quot;android.intent.action.MAIN&quot; /&gt;
                &lt;category android:name=&quot;android.intent.category.LAUNCHER&quot; /&gt;
            &lt;/intent-filter&gt;
        &lt;/activity&gt;
    &lt;/application&gt;
&lt;/manifest&gt;
</code></pre>
            <h3>activity_main.xml</h3>
            <pre><code class="xml">&lt;?xml version=&quot;1.0&quot; encoding=&quot;utf-8&quot;?&gt;
&lt;LinearLayout xmlns:android=&quot;http://schemas.android.com/apk/res/android&quot;
    xmlns:tools=&quot;http://schemas.android.com/tools&quot;
    android:layout_width=&quot;match_parent&quot;
    android:layout_height=&quot;match_parent&quot;
    android:orientation=&quot;vertical&quot;
    android:padding=&quot;10dp&quot;
    tools:context=&quot;.MainActivity&quot;&gt;

    &lt;TextView
        android:id=&quot;@+id/tvName&quot;
        android:layout_width=&quot;match_parent&quot;
        android:layout_height=&quot;wrap_content&quot;
        android:text=&quot;@string/name&quot;
        android:textSize=&quot;40sp&quot; /&gt;

    &lt;TextView
        android:id=&quot;@+id/tvAge&quot;
        android:layout_width=&quot;match_parent&quot;
        android:layout_height=&quot;wrap_content&quot;
        android:text=&quot;@string/age&quot;
        android:textSize=&quot;40sp&quot; /&gt;

    &lt;TextView
        android:id=&quot;@+id/tvMobileNo&quot;
        android:layout_width=&quot;match_parent&quot;
        android:layout_height=&quot;wrap_content&quot;
        android:text=&quot;@string/mobile_no&quot;
        android:textSize=&quot;40sp&quot; /&gt;
&lt;/LinearLayout&gt;
</code></pre>
            <h3>MainActivity.java</h3>
            <pre><code class="java">package com.example.linearlayout;
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
    &lt;string name=&quot;app_name&quot;&gt;LinearLayout&lt;/string&gt;
    &lt;string name=&quot;name&quot;&gt;Name : Suraj Pande&lt;/string&gt;
    &lt;string name=&quot;age&quot;&gt;Age : 26&lt;/string&gt;
    &lt;string name=&quot;mobile_no&quot;&gt;Mobile No. : 9851236547&lt;/string&gt;
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