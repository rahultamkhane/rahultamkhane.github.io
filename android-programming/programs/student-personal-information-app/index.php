<?php
require("../../../libs/config.php");
$title = "Develop an android application to accept and display personal information of the student | " . SITE_NAME;
$description = "Develop an android application to accept and display personal information of the student";
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
            <h1>Develop an android application to accept and display personal information of the student</h1>
            <h3>activity_main.xml</h3>
            <pre><code class="xml">&lt;?xml version=&quot;1.0&quot; encoding=&quot;utf-8&quot;?&gt;
&lt;RelativeLayout xmlns:android=&quot;http://schemas.android.com/apk/res/android&quot;
    xmlns:tools=&quot;http://schemas.android.com/tools&quot;
    android:layout_width=&quot;match_parent&quot;
    android:layout_height=&quot;match_parent&quot;
    tools:context=&quot;.MainActivity&quot;
    android:padding=&quot;10dp&quot;
    android:gravity=&quot;center&quot;&gt;

    &lt;TextView android:id=&quot;@+id/tvInfo&quot;
        android:layout_width=&quot;match_parent&quot;
        android:layout_height=&quot;wrap_content&quot;
        android:text=&quot;Personal Information of Student&quot;
        android:textSize=&quot;20sp&quot;
        android:gravity=&quot;center_horizontal&quot;
        android:textStyle=&quot;bold&quot;
        android:layout_marginTop=&quot;20dp&quot;
        android:textColor=&quot;@android:color/holo_red_light&quot;/&gt;

    &lt;EditText android:id=&quot;@+id/name&quot;
        android:layout_width=&quot;match_parent&quot;
        android:layout_height=&quot;wrap_content&quot;
        android:hint=&quot;Enter you name&quot;
        android:ems=&quot;10&quot;
        android:inputType=&quot;textPersonName&quot;
        android:textSize=&quot;18sp&quot;
        android:layout_marginTop=&quot;50dp&quot;
        android:layout_below=&quot;@+id/tvInfo&quot;/&gt;

    &lt;EditText android:id=&quot;@+id/dob&quot;
        android:layout_width=&quot;match_parent&quot;
        android:layout_height=&quot;wrap_content&quot;
        android:hint=&quot;Enter Date of Birth&quot;
        android:ems=&quot;10&quot;
        android:inputType=&quot;date&quot;
        android:textSize=&quot;18sp&quot;
        android:layout_below=&quot;@+id/name&quot;
        android:layout_marginTop=&quot;25dp&quot;/&gt;

    &lt;EditText android:id=&quot;@+id/city&quot;
        android:layout_width=&quot;match_parent&quot;
        android:layout_height=&quot;wrap_content&quot;
        android:hint=&quot;Enter your City&quot;
        android:ems=&quot;10&quot;
        android:inputType=&quot;textCapCharacters&quot;
        android:textSize=&quot;18sp&quot;
        android:layout_below=&quot;@+id/dob&quot;
        android:layout_marginTop=&quot;25dp&quot;/&gt;

    &lt;EditText android:id=&quot;@+id/email&quot;
        android:layout_width=&quot;match_parent&quot;
        android:layout_height=&quot;wrap_content&quot;
        android:hint=&quot;Enter Email ID&quot;
        android:ems=&quot;10&quot;
        android:inputType=&quot;textEmailAddress&quot;
        android:textSize=&quot;18sp&quot;
        android:layout_below=&quot;@+id/city&quot;
        android:layout_marginTop=&quot;25dp&quot;/&gt;

    &lt;EditText android:id=&quot;@+id/contact&quot;
        android:layout_width=&quot;match_parent&quot;
        android:layout_height=&quot;wrap_content&quot;
        android:hint=&quot;Enter Contact number&quot;
        android:ems=&quot;10&quot;
        android:inputType=&quot;date&quot;
        android:textSize=&quot;18sp&quot;
        android:layout_below=&quot;@+id/email&quot;
        android:layout_marginTop=&quot;25dp&quot;/&gt;

    &lt;Button android:id=&quot;@+id/btnSubmit&quot;
        android:layout_width=&quot;match_parent&quot;
        android:layout_height=&quot;wrap_content&quot;
        android:layout_below=&quot;@id/contact&quot;
        android:layout_marginTop=&quot;50dp&quot;
        android:text=&quot;Submit&quot;
        android:textSize=&quot;18sp&quot;
        android:onClick=&quot;displayData&quot;/&gt;
&lt;/RelativeLayout&gt;
</code></pre>
            <h3>MainActivity.java</h3>
            <pre><code class="java">package com.example.studentpersonalinfoapp;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;
public class MainActivity extends AppCompatActivity {

    EditText name, dob, city, email, contact;
    Button submit;

    @Override
    protected void onCreate(Bundle savedInstanceState) {

        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        name = findViewById(R.id.name);
        dob = findViewById(R.id.dob);
        city = findViewById(R.id.city);
        email = findViewById(R.id.email);
        contact = findViewById(R.id.contact);
        submit = findViewById(R.id.btnSubmit);

        submit.setOnClickListener(new View.OnClickListener() {

            @Override
            public void onClick(View v) {

                String n = name.getText().toString();
                String d = dob.getText().toString();
                String ci = city.getText().toString();
                String e = email.getText().toString();
                String c = contact.getText().toString();

                if(n.isEmpty() || d.isEmpty() || ci.isEmpty() || e.isEmpty() || c.isEmpty())
                {
                    Toast.makeText(getApplicationContext(), &quot;Please enter all data&quot;, Toast.LENGTH_SHORT).show();
                }
                else
                {
                    Toast.makeText(getApplicationContext(), n + &quot;\n&quot; + d + &quot;\n&quot; + ci + &quot;\n&quot; + e + &quot;\n&quot; + c, Toast.LENGTH_SHORT).show();
                }
            }
        });
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