<?php
require("../../../libs/config.php");
$title = "Develop an android application to display 'Hello World!' on screen | " . SITE_NAME;
$description = "In this tutorial, you learn how to start android development with the very first android project. You also create and run your first Android app Hello World, on emulator or physical device.";
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
          <h1>Develop an android application to display &ldquo;Hello World!&rdquo; on screen</h1>
          <h2>Introduction</h2>
          <p>In this tutorial, you learn how to start android development with the very first android project. You also create and run your first Android app Hello World, on emulator or physical device.</p>
          <p></p>
          <p>Before you start writing your first program using Android Studio, you have to make sure that you have set-up your Android development environment properly. Also it is assumed that you have a little bit of working knowledge with Android studio.</p>
          <h5></h5>
          <h2>What you should already know</h2>
          <ul>
            <li>Basic understanding of object-oriented programming</li>
            <li>Basic understanding of Java programming language</li>
          </ul>
          <p></p>
          <h2>What you&#39;ll need</h2>
          <ul>
            <li>A computer running Windows or Linux, or a Mac running macOS.</li>
            <li>Android Studio should be installed, if it&rsquo;s not ready, please download it from the Official Website.</li>
            <li>Softwares: JDK, SDK and Android Studio</li>
            <li>Emulator: AVD Emulator </li>
          </ul>
          <p></p>
          <h2>What you&#39;ll learn</h2>
          <ul>
            <li>How to use Android Studio for building Android applications.</li>
            <li>How to create an Android project from a template.</li>
            <li>How to setup your mobile phone for testing android applications.</li>
            <li>How to test your first android application on a mobile phone.</li>
          </ul>
          <p></p>
          <h2>What you&#39;ll do</h2>
          <ul>
            <li>Create a simple Hello World app project in Android Studio.</li>
            <li>Configure the project.</li>
            <li>Explore the project layout.</li>
            <li>Explore the AndroidManifest.xml file.</li>
            <li>Run the Hello World app on the virtual or physical devices.</li>
          </ul>
          <p></p>
          <p>This application will have only one activity that will show a message that is &quot;Hello World&quot;. In this android project, there will be two mandatory files that are</p>
          <p></p>
          <p>1. <mark>activity_main.xml</mark>&nbsp;This file is used for the layout of the application. In this file, we define the component layout of the user interface.</p>
          <p></p>
          <p>2. <mark>MainActivity.java</mark>:&nbsp;This MainActivity file helps us write the coding / functional part of the application.</p>
          <p>To create this simplest Android application, just follow along with the steps in this tutorial.</p>
          <h2>Hello World Android Application</h2>
          <h3>Create the App Project</h3>
          <p></p>
          <p>Launch Android Studio, and you should see a welcome page, as shown below. </p>

          <img alt="" src="images/image6.png" title="">
          <p>On the welcome page above, click Start a new Android Studio project. The next window presents the activities page, as shown below.</p>

          <img alt="" src="images/image3.png" title="">
          <p></p>
          <p>Android Studio provides activity templates to help you get started. For this Hello World project, choose Empty Activity&nbsp;and click Next.</p>
          <p></p>
          <h3>Configure the Hello World Project Details</h3>
          <p>We&#39;ll finish creating the project by configuring some details about its name, package name, location, and the API version it uses.</p>
          <ul>
            <li>Enter &quot;HelloWorldApp&quot; in the Name field.</li>
            <li>Enter &quot;com.example.helloworldapp&quot; in the Package name&nbsp;field (Optional).</li>
            <li>If you&#39;d like to place the project in a different folder, change its Save location.</li>
            <li>Select either Java or Kotlin from the Language drop-down menu.</li>
            <li>Select the lowest version of Android your app will support in the Minimum SDK&nbsp;field.</li>
            <li>If your app will require legacy library support, mark the Use legacy android.support libraries checkbox.</li>
            <li>Leave the other options as they are.</li>
          </ul>
          <p></p>
          <p>Click Finish.</p>

          <img alt="" src="images/image1.png" title="">
          <h4></h4>
          <h3>The Gradle Build System</h3>
          <p>When you create a new application each time, Android Studio creates a folder for your projects and builds the project with its Gradle system. The Gradle process may take a few moments. Gradle is Android&#39;s build system, which is responsible for the compilation, testing, and deployment of code. It makes it possible for the app to run on the device.</p>
          <h3>Explaining the Files in an Android App Project</h3>
          <p>Whenever you start a new project, Android Studio creates the necessary folder structure and files for that app. Let&#39;s look at the different files involved in an Android app project.</p>

          <img alt="" src="images/image4.png" title="">
          <p></p>
          <h4>The manifests Folder</h4>
          <p>The manifests folder contains the AndroidManifest.xml&nbsp;file. The manifest file describes essential information about your application.&nbsp;</p>
          <h4>The java Folder</h4>
          <p>This folder contains the Java source code files. As you can see from the editor window above, the MainActivity.java&nbsp;file contains the Java source code for the app&#39;s main Activity.</p>
          <h4>The res Folder</h4>
          <p>This folder includes all non-code resources, such as:</p>
          <ul>
            <li>layouts:&nbsp;Layouts are XML files that define the architecture for the UI in an Activity or a component of a UI. For example, in our application, the activity_main.xml file corresponds to the main Activity.</li>
            <li>values:&nbsp;Contains the color, style, and string XML files for the application.</li>
            <li>drawable:&nbsp;This is a catch-all for graphics that can be drawn on the screen, e.g. images.</li>
            <li>build.gradle:&nbsp;This is an auto-generated file which contains details of the app such as the SDK version, build tools version, application ID, and more.</li>
          </ul>
          <h3>Coding the Hello World App</h3>
          <p>Now you have a general view of the project structure, let&#39;s describe the hello world application. </p>
          <p></p>
          <h4>The Default Main Activity</h4>
          <p>The main activity is the first screen that will appear when you launch your app.</p>
          <p>Each Activity represents a screen of the Android app&#39;s user interface. Each Activity has a Java (or Kotlin) implementation file and an XML layout file.</p>
          <p></p>
          <h4>The Default Main Activity Java Code</h4>
          <p>Below is the default Java code generated by the application for the main activity.</p>
          <p></p>
          <pre><code class="java">package com.example.helloworldapp;
import androidx.appcompat.app.AppCompatActivity;
import android.os.Bundle;
public class MainActivity extends AppCompatActivity {
 
    @Override
    protected void onCreate(Bundle savedInstanceState) {

        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
    }
}
</pre></code>
          <h4>The Default Layout XML File</h4>
          <p>XML files are used for layouts. The main Activity layout XML file is found in the project&#39;s /app/src/main/res/layout&nbsp;directory. Layout files are named after what they represent. For example, the Hello World application has one layout, which is the &nbsp;activity_main.xml&nbsp;named after the main Activity.</p>
          <p>Here is the default activity_main.xml&nbsp;layout. It contains one text view element, with the text Hello World!</p>
          <pre><code class="xml">&lt;?xml version=&quot;1.0&quot; encoding=&quot;utf-8&quot;?&gt;
&lt;androidx.constraintlayout.widget.ConstraintLayout xmlns:android=&quot;https://schemas.android.com/apk/res/android&quot;
   xmlns:app=&quot;http://schemas.android.com/apk/res-auto&quot;
   xmlns:tools=&quot;http://schemas.android.com/tools&quot;
   android:layout_width=&quot;match_parent&quot;
   android:layout_height=&quot;match_parent&quot;
   tools:context=&quot;.MainActivity&quot;&gt;
 
   &lt;TextView
       android:layout_width=&quot;wrap_content&quot;
       android:layout_height=&quot;wrap_content&quot;
       android:text=&quot;Hello World!&quot;
       app:layout_constraintBottom_toBottomOf=&quot;parent&quot;
       app:layout_constraintLeft_toLeftOf=&quot;parent&quot;
       app:layout_constraintRight_toRightOf=&quot;parent&quot;
       app:layout_constraintTop_toTopOf=&quot;parent&quot; /&gt;
 
&lt;/androidx.constraintlayout.widget.ConstraintLayout&gt;
</code></pre>
          <p></p>
          <p>As you can see, we don&#39;t need to change much to complete our Hello World app, but we&#39;ll make a small change so that the text stands out better&mdash;we&#39;ll change the text colour and font size.</p>
          <p></p>
          <pre><code class="xml">&lt;TextView
       android:layout_width=&quot;wrap_content&quot;
       android:layout_height=&quot;wrap_content&quot;
       android:text=&quot;Hello World!&quot;
       android:textSize=&quot;60dp&quot;
       android:textColor=&quot;#8a0240&quot;
       app:layout_constraintBottom_toBottomOf=&quot;parent&quot;
       app:layout_constraintLeft_toLeftOf=&quot;parent&quot;
       app:layout_constraintRight_toRightOf=&quot;parent&quot;
       app:layout_constraintTop_toTopOf=&quot;parent&quot; /&gt;
</code></pre>
          <p></p>
          <h4>The Strings File</h4>
          <p>The strings.xml&nbsp;file provides text strings for your application. For example, a default strings file looks like this: </p>
          <p></p>
          <pre><code class="xml">&lt;resources&gt;
    &lt;string name=&quot;app_name&quot;&gt;HelloWorldApp&lt;/string&gt;
&lt;/resources&gt;
</code></pre>
          <p>If you want to change your app name, you can do it here.</p>
          <p></p>
          <h4>The AndroidManifest.xml file</h4>
          <p>The AndroidManifest.xml&nbsp;file is a resource file which contains all the details needed by the android system about the application. It works as a bridge between the android developer and the android platform. It helps the developer to pass on functionality and requirements of our application to Android. This is an xml file which must be named as AndroidManifest.xml and placed at application root. Every Android app must have AndroidManifest.xml file. AndroidManifest.xml allows us to define, The packages, API, libraries needed for the application.</p>
          <ul>
            <li>Basic building blocks of application like activities, services and etc.</li>
            <li>Details about permissions.</li>
            <li>Set of classes needed before launch.</li>
          </ul>
          <p></p>
          <p></p>
          <pre><code class="xml">&lt;?xml version=&quot;1.0&quot; encoding=&quot;utf-8&quot;?&gt;
&lt;manifest xmlns:android=&quot;http://schemas.android.com/apk/res/android&quot;
    package=&quot;com.example.helloworldapp&quot;&gt;
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
          <h3>Running the Application</h3>
          <p>Connect your Android device to your computer with a USB cable. You&#39;ll also need developer options enabled on your device. If this is not already enabled, follow these steps (this will work on most Android devices):</p>
          <ul>
            <li>Open up the Settings&nbsp;menu on your Android phone and scroll to the bottom. </li>
            <li>Tap About phone and scroll down again until you see the Build number&nbsp;option.</li>
            <li>Tap the Build number multiple times. Soon, you should see a pop-up that reads something similar to You are five taps away from being a developer.</li>
            <li>Keep tapping until the pop-up says you&#39;re a developer. </li>
            <li>Go back to the main Settings &gt; System &gt; Advanced. Developer options should be the second-last option. Turn the Developer options on.</li>
          </ul>

          <img alt="" src="images/image2.png" title="">
          <p>In Android Studio, navigate to the top menu and select Run &#39;app&#39;. Android Studio will show a dialog where you can choose which device to run your Android app on. Choose your connected device and click the OK&nbsp;button.</p>
          <p>The Hello World application should now be running on your phone. From here, you can modify your app to whatever you want and add more features.</p>

          <img alt="" src="images/image5.png" title="">
          <p></p>
          <h3>Summary</h3>
          <p>In this tutorial, we have discussed how to get started with a Hello World android app and run it in the android virtual device or mobile phone. After following this tutorial to create your first Android app, you are on your way to a promising career in developing apps!</p>
          <p></p>
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