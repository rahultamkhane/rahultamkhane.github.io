<?php
require("../../../libs/config.php");
$title = "Develop an android application to demonstrate use of Android Radio Button | " . SITE_NAME;
$description = "Develop an android application to demonstrate use of Android Radio Button";
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
            <h1>Develop an android application to demonstrate use of Android Radio Button</h1>
            <p>In this tutorial, we will create first two radio buttons which are without using radio group and next two radio buttons are using radio group. After that we will note the changes between these two. Also toast which radio button has been selected.</p>
            <p></p>
            <h3>activity_main.xml</h3>
            <pre><code class="xml">&lt;?xml version=&quot;1.0&quot; encoding=&quot;utf-8&quot;?&gt;
&lt;LinearLayout xmlns:android=&quot;http://schemas.android.com/apk/res/android&quot;
    xmlns:app=&quot;http://schemas.android.com/apk/res-auto&quot;
    xmlns:tools=&quot;http://schemas.android.com/tools&quot;
    android:layout_width=&quot;match_parent&quot;
    android:layout_height=&quot;match_parent&quot;
    android:orientation=&quot;vertical&quot;
    android:padding=&quot;20dp&quot;
    tools:context=&quot;.MainActivity&quot;&gt;

    &lt;TextView
        android:layout_width=&quot;match_parent&quot;
        android:layout_height=&quot;wrap_content&quot;
        android:gravity=&quot;center&quot;
        android:text=&quot;Single Radio Button&quot;
        android:textSize=&quot;20sp&quot; /&gt;

    &lt;RadioButton
        android:id=&quot;@+id/radio1&quot;
        android:layout_width=&quot;match_parent&quot;
        android:layout_height=&quot;wrap_content&quot;
        android:text=&quot;Radio Button 1&quot;
        android:textSize=&quot;18dp&quot;
        android:textStyle=&quot;bold&quot;/&gt;

    &lt;RadioButton
        android:id=&quot;@+id/radio2&quot;
        android:layout_width=&quot;match_parent&quot;
        android:layout_height=&quot;wrap_content&quot;
        android:text=&quot;Radio Button 2&quot;
        android:textSize=&quot;18dp&quot;
        android:textStyle=&quot;bold&quot; /&gt;

    &lt;View
        android:layout_width=&quot;match_parent&quot;
        android:layout_height=&quot;2dp&quot;
        android:background=&quot;@android:color/black&quot;
        android:layout_marginTop=&quot;20dp&quot;
        android:layout_marginBottom=&quot;20dp&quot;/&gt;

    &lt;TextView
        android:id=&quot;@+id/textView&quot;
        android:layout_width=&quot;match_parent&quot;
        android:layout_height=&quot;wrap_content&quot;
        android:gravity=&quot;center&quot;
        android:text=&quot;Radio button inside RadioGroup&quot;
        android:textSize=&quot;20sp&quot; /&gt;

    &lt;RadioGroup android:id=&quot;@+id/radioGroup&quot;
        android:layout_width=&quot;match_parent&quot;
        android:layout_height=&quot;wrap_content&quot;&gt;

        &lt;RadioButton
            android:id=&quot;@+id/radioMale&quot;
            android:layout_width=&quot;wrap_content&quot;
            android:layout_height=&quot;wrap_content&quot;
            android:text=&quot;Male&quot;
            android:textSize=&quot;18dp&quot;
            android:textStyle=&quot;bold&quot; /&gt;

        &lt;RadioButton
            android:id=&quot;@+id/radioFemale&quot;
            android:layout_width=&quot;wrap_content&quot;
            android:layout_height=&quot;wrap_content&quot;
            android:text=&quot;Female&quot;
            android:textSize=&quot;18dp&quot;
            android:textStyle=&quot;bold&quot; /&gt;

    &lt;/RadioGroup&gt;

    &lt;Button
        android:id=&quot;@+id/button&quot;
        android:layout_width=&quot;wrap_content&quot;
        android:layout_height=&quot;wrap_content&quot;
        android:layout_gravity=&quot;center_horizontal&quot;
        android:text=&quot;Show Selected&quot;
        android:onClick=&quot;showSelected&quot;/&gt;

&lt;/LinearLayout&gt;
</code></pre>
            <h3>MainActivity.java</h3>
            <pre><code class="java">package com.example.radiobuttonapp;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.RadioButton;
import android.widget.RadioGroup;
import android.widget.Toast;

public class MainActivity extends AppCompatActivity {
  
    RadioButton radio1, radio2, radioMale, radioFemale;
    RadioGroup radioGroup;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
      
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        radio1 = findViewById(R.id.radio1);
        radio2 = findViewById(R.id.radio2);
        radioMale = findViewById(R.id.radioMale);
        radioFemale = findViewById(R.id.radioFemale);
        radioGroup = findViewById(R.id.radioGroup);
    }

    public void showSelected(View view) {
        String selected = &quot;Selected radio buttons:\n&quot;;

        if(radio1.isChecked())
            selected += &quot;Radio Button 1\n&quot;;

        if(radio2.isChecked())
            selected += &quot;Radio Button 2\n&quot;;
            
        RadioButton selectedRadio = findViewById(radioGroup.getCheckedRadioButtonId());
        selected += selectedRadio.getText().toString();
        Toast.makeText(MainActivity.this, selected, Toast.LENGTH_SHORT).show();
    }
}
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