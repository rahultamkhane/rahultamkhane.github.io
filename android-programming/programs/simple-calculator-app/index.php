<?php
require("../../../libs/config.php");
$title = "Develop an android application to create a Simple Calculator | " . SITE_NAME;
$description = "Develop an android application to create a Simple Calculator";
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
            <h1>Develop an android application to create a Simple Calculator</h1>
            <h3>activity_main.xml</h3>
            <pre><code class="xml">&lt;?xml version=&quot;1.0&quot; encoding=&quot;utf-8&quot;?&gt;
&lt;RelativeLayout xmlns:android=&quot;http://schemas.android.com/apk/res/android&quot;
    xmlns:app=&quot;http://schemas.android.com/apk/res-auto&quot;
    xmlns:tools=&quot;http://schemas.android.com/tools&quot;
    android:layout_width=&quot;match_parent&quot;
    android:layout_height=&quot;match_parent&quot;
    android:padding=&quot;10dp&quot;
    android:gravity=&quot;center&quot;
    tools:context=&quot;.MainActivity&quot;&gt;

    &lt;TextView
        android:id=&quot;@+id/tv1&quot;
        android:layout_width=&quot;wrap_content&quot;
        android:layout_height=&quot;50dp&quot;
        android:text=&quot;First Number&quot;
        android:gravity=&quot;center&quot;
        style=&quot;@android:style/TextAppearance.Large&quot;/&gt;

    &lt;EditText android:id=&quot;@+id/etNum1&quot;
        android:layout_width=&quot;200dp&quot;
        android:layout_height=&quot;50dp&quot;
        android:ems=&quot;10&quot;
        android:hint=&quot;Enter number 1&quot;
        android:layout_marginLeft=&quot;30dp&quot;
        android:layout_toRightOf=&quot;@id/tv1&quot;/&gt;

    &lt;TextView
        android:id=&quot;@+id/tv2&quot;
        android:layout_width=&quot;wrap_content&quot;
        android:layout_height=&quot;50dp&quot;
        android:text=&quot;Second Number&quot;
        android:gravity=&quot;center&quot;
        android:layout_below=&quot;@id/tv1&quot;
        style=&quot;@android:style/TextAppearance.Large&quot;/&gt;

    &lt;EditText android:id=&quot;@+id/etNum2&quot;
        android:layout_width=&quot;200dp&quot;
        android:layout_height=&quot;50dp&quot;
        android:ems=&quot;10&quot;
        android:hint=&quot;Enter number 2&quot;
        android:layout_marginLeft=&quot;5dp&quot;
        android:layout_toRightOf=&quot;@id/tv2&quot;
        android:layout_below=&quot;@id/etNum1&quot;/&gt;

    &lt;Button android:id=&quot;@+id/btnPlus&quot;
        android:layout_width=&quot;70dp&quot;
        android:layout_height=&quot;70dp&quot;
        android:text=&quot;+&quot;
        android:textSize=&quot;26sp&quot;
        android:layout_below=&quot;@id/tv2&quot;
        android:layout_marginTop=&quot;30dp&quot;
        android:layout_marginLeft=&quot;50dp&quot;
        android:onClick=&quot;add&quot;/&gt;

    &lt;Button android:id=&quot;@+id/btnMinus&quot;
        android:layout_width=&quot;70dp&quot;
        android:layout_height=&quot;70dp&quot;
        android:text=&quot;-&quot;
        android:textSize=&quot;26sp&quot;
        android:layout_below=&quot;@id/tv2&quot;
        android:layout_toRightOf=&quot;@id/btnPlus&quot;
        android:layout_marginTop=&quot;30dp&quot;
        android:onClick=&quot;subtract&quot;/&gt;

    &lt;Button android:id=&quot;@+id/btnMul&quot;
        android:layout_width=&quot;70dp&quot;
        android:layout_height=&quot;70dp&quot;
        android:text=&quot;*&quot;
        android:textSize=&quot;26sp&quot;
        android:layout_below=&quot;@id/tv2&quot;
        android:layout_toRightOf=&quot;@id/btnMinus&quot;
        android:layout_marginTop=&quot;30dp&quot;
        android:onClick=&quot;multiply&quot;/&gt;

    &lt;Button android:id=&quot;@+id/btnDiv&quot;
        android:layout_width=&quot;70dp&quot;
        android:layout_height=&quot;70dp&quot;
        android:text=&quot;/&quot;
        android:textSize=&quot;26sp&quot;
        android:layout_below=&quot;@id/tv2&quot;
        android:layout_toRightOf=&quot;@id/btnMul&quot;
        android:layout_marginTop=&quot;30dp&quot;
        android:onClick=&quot;divide&quot;/&gt;

    &lt;TextView android:id=&quot;@+id/tvResult&quot;
        android:layout_width=&quot;match_parent&quot;
        android:layout_height=&quot;wrap_content&quot;
        android:layout_below=&quot;@id/btnPlus&quot;
        android:textSize=&quot;26sp&quot;
        android:layout_marginTop=&quot;50dp&quot;/&gt;

&lt;/RelativeLayout&gt;
</code></pre>
            <h3>MainActivity.java</h3>
            <pre><code class="java">package com.example.calculator;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;

public class MainActivity extends AppCompatActivity {

    EditText etNum1, etNum2;
    Button btnPlus, btnMinus, btnMul, btnDiv;
    TextView tvResult;

    @Override
    protected void onCreate(Bundle savedInstanceState) {

        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        etNum1 = findViewById(R.id.etNum1);
        etNum2 = findViewById(R.id.etNum2);
        btnPlus = findViewById(R.id.btnPlus);
        btnMinus = findViewById(R.id.btnMinus);
        btnMul = findViewById(R.id.btnMul);
        btnDiv = findViewById(R.id.btnDiv);
        tvResult = findViewById(R.id.tvResult);
    }

    public void add(View view) {

        double n1 = Double.parseDouble(etNum1.getText().toString());
        double n2 = Double.parseDouble(etNum2.getText().toString());
        double result = n1 + n2;
        tvResult.setText(&quot;Addition is: &quot; + result);
    }

    public void subtract(View view) {

        double n1 = Double.parseDouble(etNum1.getText().toString());
        double n2 = Double.parseDouble(etNum2.getText().toString());
        double result = n1 - n2;
        tvResult.setText(&quot;Subtraction is: &quot; + result);
    }

    public void multiply(View view) {

        double n1 = Double.parseDouble(etNum1.getText().toString());
        double n2 = Double.parseDouble(etNum2.getText().toString());
        double result = n1 * n2;
        tvResult.setText(&quot;Multiplication is: &quot; + result);
    }

    public void divide(View view) {
      
        double n1 = Double.parseDouble(etNum1.getText().toString());
        double n2 = Double.parseDouble(etNum2.getText().toString());
        double result = n1 / n2;
        tvResult.setText(&quot;Division is: &quot; + result);
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