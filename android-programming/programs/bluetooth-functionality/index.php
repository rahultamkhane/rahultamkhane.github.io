<?php
require("../../../libs/config.php");
$title = "Develop an android application to use Bluetooth functionality | " . SITE_NAME;
$description = "Develop an android application to use Bluetooth functionality";
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
            <h1>Develop an android application to use Bluetooth functionality</h1>
            <p></p>
            <p>In this tutorial, we will learn &nbsp;to turn ON, get visible, list devices and turn OFF Bluetooth with the help of given GUI</p>
            <p></p>

            <center><img alt="" src="images/image1.png" title=""></center>
            <h3>AndroidManifest.xml</h3>
            <pre><code class="xml">&lt;?xml version=&quot;1.0&quot; encoding=&quot;utf-8&quot;?&gt;
&lt;manifest xmlns:android=&quot;http://schemas.android.com/apk/res/android&quot;
    package=&quot;com.example.rcppp.bluetoothapp&quot;&gt;
    &lt;uses-permission android:name=&quot;android.permission.BLUETOOTH&quot;/&gt;
    &lt;uses-permission android:name=&quot;android.permission.BLUETOOTH_ADMIN&quot;/&gt;
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
    xmlns:app=&quot;http://schemas.android.com/apk/res-auto&quot;
    xmlns:tools=&quot;http://schemas.android.com/tools&quot;
    android:layout_width=&quot;match_parent&quot;
    android:layout_height=&quot;match_parent&quot;
    tools:context=&quot;.MainActivity&quot;
    android:padding=&quot;20dp&quot;
    android:orientation=&quot;vertical&quot;&gt;

    &lt;TextView
        android:layout_width=&quot;wrap_content&quot;
        android:layout_height=&quot;wrap_content&quot;
        android:text=&quot;Bluetooth&quot;
        android:textSize=&quot;20sp&quot;
        android:textStyle=&quot;bold&quot;/&gt;

    &lt;Button
        android:layout_width=&quot;wrap_content&quot;
        android:layout_height=&quot;wrap_content&quot;
        android:text=&quot;Turn On&quot;
        android:onClick=&quot;turnOn&quot;/&gt;

    &lt;Button
        android:layout_width=&quot;wrap_content&quot;
        android:layout_height=&quot;wrap_content&quot;
        android:text=&quot;Get Visible&quot;
        android:onClick=&quot;getVisible&quot;/&gt;

    &lt;Button
        android:layout_width=&quot;wrap_content&quot;
        android:layout_height=&quot;wrap_content&quot;
        android:text=&quot;List Devices&quot;
        android:onClick=&quot;listDevices&quot;/&gt;

    &lt;Button
        android:layout_width=&quot;wrap_content&quot;
        android:layout_height=&quot;wrap_content&quot;
        android:text=&quot;Turn Off&quot;
        android:onClick=&quot;turnOff&quot;/&gt;

    &lt;TextView
        android:layout_width=&quot;wrap_content&quot;
        android:layout_height=&quot;wrap_content&quot;
        android:text=&quot;Paired Devices&quot;
        android:textColor=&quot;@android:color/holo_red_dark&quot;/&gt;

    &lt;ListView android:id=&quot;@+id/listView&quot;
        android:layout_width=&quot;wrap_content&quot;
        android:layout_height=&quot;wrap_content&quot;/&gt;

&lt;/LinearLayout&gt;
</code></pre>
            <h3>MainActivity.java</h3>
            <pre><code class="java">package com.example.bluetoothapp;
import android.app.Activity;
import android.bluetooth.BluetoothAdapter;
import android.bluetooth.BluetoothDevice;
import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.ArrayAdapter;
import android.widget.ListView;
import android.widget.Toast;
import java.util.ArrayList;
import java.util.Set;

public class MainActivity extends Activity {

    private ListView listView;
    private BluetoothAdapter ba;
    private Set&lt;BluetoothDevice&gt; pairedDevices;

    @Override
    protected void onCreate(Bundle savedInstanceState) {

        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        ba = BluetoothAdapter.getDefaultAdapter();
        listView = findViewById(R.id.listView);
    }

    public void turnOn(View v) {

        if(!ba.isEnabled()) {
            Intent intentOn = new Intent(BluetoothAdapter.ACTION_REQUEST_ENABLE);
            startActivityForResult(intentOn, 0);
            Toast.makeText(getApplicationContext(), &quot;Turned ON&quot;, Toast.LENGTH_SHORT).show();
        }
        else {
            Toast.makeText(getApplicationContext(), &quot;Already ON&quot;, Toast.LENGTH_SHORT).show();
        }
    }

    public void turnOff(View v) {
        ba.disable();
        Toast.makeText(getApplicationContext(), &quot;Turned OFF&quot;, Toast.LENGTH_SHORT).show();
    }

    public void getVisible(View v) {
        Intent intentVisible = new Intent(BluetoothAdapter.ACTION_REQUEST_DISCOVERABLE);
        startActivityForResult(intentVisible, 0);
    }

    public void listDevices(View v) {
        pairedDevices = ba.getBondedDevices();
        ArrayList&lt;String&gt; list = new ArrayList&lt;String&gt;();

        for(BluetoothDevice b : pairedDevices) {
            list.add(b.getName());
        }
        ArrayAdapter adapter = new ArrayAdapter(getApplicationContext(), android.R.layout.simple_list_item_1, list);
        listView.setAdapter(adapter);
    }
}
</code></pre>
            <h3>OUTPUT</h3>

            <img alt="" src="images/image1.png" title="">
            <p></p>
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