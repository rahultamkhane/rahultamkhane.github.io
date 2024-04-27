 <?php
  require("../../../libs/config.php");
  $title = "Develop an android application to create a login form for student registration system | " . SITE_NAME;
  $description = "Develop an android application to create a login form for student registration system";
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
             <h1>Develop an android application to create a login form for student registration system</h1>
             <h3>activity_main.xml</h3>
             <pre><code class="xml">&lt;?xml version=&quot;1.0&quot; encoding=&quot;utf-8&quot;?&gt;
&lt;RelativeLayout xmlns:android=&quot;http://schemas.android.com/apk/res/android&quot;
    xmlns:app=&quot;http://schemas.android.com/apk/res-auto&quot;
    xmlns:tools=&quot;http://schemas.android.com/tools&quot;
    android:layout_width=&quot;match_parent&quot;
    android:layout_height=&quot;match_parent&quot;
    android:padding=&quot;20dp&quot;
    tools:context=&quot;.MainActivity&quot;&gt;

    &lt;TextView android:id=&quot;@+id/logo&quot;
        android:layout_width=&quot;match_parent&quot;
        android:layout_height=&quot;80dp&quot;
        android:text=&quot;R C P P&quot;
        android:gravity=&quot;center&quot;
        android:textSize=&quot;40sp&quot;
        android:textStyle=&quot;bold&quot;
        android:layout_marginTop=&quot;40dp&quot;/&gt;

    &lt;EditText
        android:id=&quot;@+id/username&quot;
        android:layout_width=&quot;match_parent&quot;
        android:layout_height=&quot;60dp&quot;
        android:layout_below=&quot;@id/logo&quot;
        android:layout_marginTop=&quot;30dp&quot;
        android:background=&quot;@android:color/white&quot;
        android:fontFamily=&quot;monospace&quot;
        android:hint=&quot;Enrollment number&quot;
        android:padding=&quot;10dp&quot;
        android:textSize=&quot;22sp&quot; /&gt;

    &lt;EditText
        android:id=&quot;@+id/password&quot;
        android:layout_width=&quot;match_parent&quot;
        android:layout_height=&quot;60dp&quot;
        android:layout_below=&quot;@id/username&quot;
        android:background=&quot;@android:color/white&quot;
        android:fontFamily=&quot;monospace&quot;
        android:hint=&quot;Password&quot;
        android:padding=&quot;10dp&quot;
        android:layout_marginTop=&quot;20dp&quot;
        android:textSize=&quot;22sp&quot; /&gt;

    &lt;Button android:id=&quot;@+id/btnLogin&quot;
        android:layout_width=&quot;match_parent&quot;
        android:layout_height=&quot;50dp&quot;
        android:layout_below=&quot;@id/password&quot;
        android:layout_marginTop=&quot;30dp&quot;
        android:text=&quot;Log In&quot;
        android:background=&quot;#6D9ADD&quot;
        android:textColor=&quot;@android:color/white&quot;
        android:textSize=&quot;18sp&quot;/&gt;

    &lt;TextView
        android:layout_width=&quot;wrap_content&quot;
        android:layout_height=&quot;wrap_content&quot;
        android:layout_centerHorizontal=&quot;true&quot;
        android:text=&quot;Forgot Password?&quot;
        android:layout_below=&quot;@id/btnLogin&quot;
        android:layout_marginTop=&quot;10dp&quot;
        android:textSize=&quot;16sp&quot;/&gt;

&lt;/RelativeLayout&gt;
</code></pre>
             <h3>MainActivity.java</h3>
             <pre><code class="java">package com.example.studentregistrationapp;
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