<?php
require("../../../libs/config.php");
$title = "Develop an android application to show five checkboxes and toast selected checkboxes | " . SITE_NAME;
$description = "Develop an android application to show five checkboxes and toast selected checkboxes";
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
            <h1>Develop an android application to show five checkboxes and toast selected checkboxes</h1>
            <h3>activity_main.xml</h3>
            <pre><code class="xml">&lt;?xml version=&quot;1.0&quot; encoding=&quot;utf-8&quot;?&gt;
&lt;LinearLayout xmlns:android=&quot;http://schemas.android.com/apk/res/android&quot;
    android:layout_width=&quot;fill_parent&quot;
    android:layout_height=&quot;fill_parent&quot;
    android:orientation=&quot;vertical&quot;
    android:padding=&quot;20dp&quot;&gt;

    &lt;TextView
        android:layout_width=&quot;match_parent&quot;
        android:layout_height=&quot;wrap_content&quot;
        android:gravity=&quot;center&quot;
        android:text=&quot;@string/msg&quot;
        style=&quot;@style/TextAppearance.AppCompat.Large&quot;
        android:layout_margin=&quot;10dp&quot;
        android:textStyle=&quot;bold&quot;/&gt;

    &lt;CheckBox
        android:id=&quot;@+id/chkAndroid&quot;
        android:layout_width=&quot;wrap_content&quot;
        android:layout_height=&quot;wrap_content&quot;
        android:text=&quot;@string/android&quot;
        style=&quot;@style/TextAppearance.AppCompat.Headline&quot;/&gt;

    &lt;CheckBox
        android:id=&quot;@+id/chkJava&quot;
        android:layout_width=&quot;wrap_content&quot;
        android:layout_height=&quot;wrap_content&quot;
        android:text=&quot;@string/java&quot;
        style=&quot;@style/TextAppearance.AppCompat.Headline&quot;/&gt;

    &lt;CheckBox
        android:id=&quot;@+id/chkPhp&quot;
        android:layout_width=&quot;wrap_content&quot;
        android:layout_height=&quot;wrap_content&quot;
        android:text=&quot;@string/php&quot;
        style=&quot;@style/TextAppearance.AppCompat.Headline&quot;/&gt;

    &lt;CheckBox
        android:id=&quot;@+id/chkCpp&quot;
        android:layout_width=&quot;wrap_content&quot;
        android:layout_height=&quot;wrap_content&quot;
        android:text=&quot;@string/cpp&quot;
        style=&quot;@style/TextAppearance.AppCompat.Headline&quot;/&gt;

    &lt;CheckBox
        android:id=&quot;@+id/chkC&quot;
        android:layout_width=&quot;wrap_content&quot;
        android:layout_height=&quot;wrap_content&quot;
        android:text=&quot;@string/c&quot;
        style=&quot;@style/TextAppearance.AppCompat.Headline&quot;/&gt;

    &lt;Button android:id=&quot;@+id/btnDisplay&quot;
        android:layout_width=&quot;wrap_content&quot;
        android:layout_height=&quot;wrap_content&quot;
        android:text=&quot;Display&quot;
        android:layout_marginTop=&quot;20dp&quot;
        android:onClick=&quot;showSelected&quot;/&gt;

&lt;/LinearLayout&gt;
</code></pre>
            <h3>MainActivity.java</h3>
            <pre><code class="java">package com.example.checkboxdemo;
import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.view.View;
import android.widget.CheckBox;
import android.widget.Toast;

public class MainActivity extends AppCompatActivity {

    private CheckBox chkAndroid, chkJava, chkPhp, chkCpp, chkC;

    @Override
    public void onCreate(Bundle savedInstanceState) {

        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        chkAndroid = findViewById(R.id.chkAndroid);
        chkJava = findViewById(R.id.chkJava);
        chkPhp = findViewById(R.id.chkPhp);
        chkCpp = findViewById(R.id.chkCpp);
        chkC = findViewById(R.id.chkC);
    }

    public void showSelected(View view) {

        String selected = &quot;You selected: \n&quot;;

        if(chkAndroid.isChecked())
            selected += &quot;Android&quot;;

        if(chkJava.isChecked())
            selected += &quot;\nJava&quot;;

        if(chkPhp.isChecked())
            selected += &quot;\nPHP&quot;;

        if(chkCpp.isChecked())
            selected += &quot;\nCPP&quot;;

        if(chkC.isChecked())
            selected += &quot;\nC&quot;;

        Toast.makeText(MainActivity.this, selected, Toast.LENGTH_SHORT).show();
    }
}
</code></pre>
            <h3>strings.xml</h3>
            <pre><code class="xml">&lt;?xml version=&quot;1.0&quot; encoding=&quot;utf-8&quot;?&gt;
&lt;resources&gt;
    &lt;string name=&quot;app_name&quot;&gt;CheckBoxApp&lt;/string&gt;
    &lt;string name=&quot;msg&quot;&gt;Select your favourite programming languages&lt;/string&gt;
    &lt;string name=&quot;android&quot;&gt;Android&lt;/string&gt;
    &lt;string name=&quot;java&quot;&gt;Java&lt;/string&gt;
    &lt;string name=&quot;php&quot;&gt;PHP&lt;/string&gt;
    &lt;string name=&quot;cpp&quot;&gt;CPP&lt;/string&gt;
    &lt;string name=&quot;c&quot;&gt;C&lt;/string&gt;
&lt;/resources&gt;
</code></pre>
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