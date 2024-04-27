<?php
require("../../../libs/config.php");
$title = "Develop an android application to select and display date and time on click of 'select date', 'select time' buttons | " . SITE_NAME;
$description = "Develop an android application to select and display date and time on click of 'select date', 'select time' buttons";
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
            <h1>Develop an android application to select and display date and time on click of &#39;select date&#39;, &#39;select time&#39; buttons</h1>
            <p></p>
            <h3>activity_main.xml</h3>
            <pre><code class="xml">&lt;?xml version=&quot;1.0&quot; encoding=&quot;utf-8&quot;?&gt;
&lt;RelativeLayout xmlns:android=&quot;http://schemas.android.com/apk/res/android&quot;
    xmlns:app=&quot;http://schemas.android.com/apk/res-auto&quot;
    xmlns:tools=&quot;http://schemas.android.com/tools&quot;
    android:layout_width=&quot;match_parent&quot;
    android:layout_height=&quot;match_parent&quot;
    tools:context=&quot;.MainActivity&quot;
    android:padding=&quot;20dp&quot;&gt;

    &lt;EditText android:id=&quot;@+id/etDate&quot;
        android:layout_width=&quot;wrap_content&quot;
        android:layout_height=&quot;wrap_content&quot;
        android:ems=&quot;10&quot;
        android:layout_marginTop=&quot;100dp&quot;/&gt;

    &lt;Button android:id=&quot;@+id/btnDate&quot;
        android:layout_width=&quot;wrap_content&quot;
        android:layout_height=&quot;wrap_content&quot;
        android:text=&quot;Select Date&quot;
        android:layout_toRightOf=&quot;@+id/etDate&quot;
        android:layout_marginTop=&quot;100dp&quot;
        android:onClick=&quot;showDatePicker&quot;/&gt;

    &lt;EditText android:id=&quot;@+id/etTime&quot;
        android:layout_width=&quot;wrap_content&quot;
        android:layout_height=&quot;wrap_content&quot;
        android:ems=&quot;10&quot;
        android:layout_below=&quot;@+id/etDate&quot;/&gt;

    &lt;Button android:id=&quot;@+id/btnTime&quot;
        android:layout_width=&quot;wrap_content&quot;
        android:layout_height=&quot;wrap_content&quot;
        android:text=&quot;Select Time&quot;
        android:layout_toRightOf=&quot;@+id/etTime&quot;
        android:layout_below=&quot;@+id/btnDate&quot;
        android:onClick=&quot;showTimePicker&quot;/&gt;

&lt;/RelativeLayout&gt;
</code></pre>
            <h3>MainActivity.java</h3>
            <pre><code class="java">package com.example.datetimepickerdialog;
import android.app.DatePickerDialog;
import android.app.TimePickerDialog;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.DatePicker;
import android.widget.EditText;
import android.widget.TimePicker;
import java.util.Calendar;

public class MainActivity extends AppCompatActivity {

    EditText etDate, etTime;
    Button btnDate, btnTime;

    @Override
    protected void onCreate(Bundle savedInstanceState) {

        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        etDate = findViewById(R.id.etDate);
        etTime = findViewById(R.id.etTime);
        btnDate = findViewById(R.id.btnDate);
        btnTime = findViewById(R.id.btnTime);
    }

    public void showDatePicker(View view) {

        // Get Current Time
        final Calendar c = Calendar.getInstance();
        final int mYear = c.get(Calendar.YEAR);
        final int mMonth = c.get(Calendar.MONTH);
        final int mDay = c.get(Calendar.DAY_OF_MONTH);

        DatePickerDialog datePickerDialog = new DatePickerDialog(this,
                new DatePickerDialog.OnDateSetListener() {
                    @Override
                    public void onDateSet(DatePicker view, int year, int month, int dayOfMonth) {
                        etDate.setText(mDay + &quot;-&quot; + (mMonth + 1) + &quot;-&quot; + mYear);
                    }
                }, mYear, mMonth, mDay);
        datePickerDialog.show();
    }

    public void showTimePicker(View view) {

        // Get Current Time
        final Calendar c = Calendar.getInstance();
        int mHour = c.get(Calendar.HOUR_OF_DAY);
        int mMinute = c.get(Calendar.MINUTE);

        TimePickerDialog timePickerDialog = new TimePickerDialog(this,
                new TimePickerDialog.OnTimeSetListener() {
                  
                @Override
                public void onTimeSet(TimePicker view, int hourOfDay, int minute) {
                    etTime.setText(hourOfDay + &quot; : &quot; + minute);
                }
            }, mHour,mMinute, false);
        timePickerDialog.show();
    }
} 
</code></pre>
            <h3>OUTPUT</h3>

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