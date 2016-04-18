<!DOCTYPE html>
<html>
    <head>
        <title>Seat Selection VR</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
<style>
body {


  font-family: Lato;
}
</style>
    </head>
    <body>
        <div class="container">

        <!-- Content -->
          <div class="row">
        		<div class="col-md-12">
              <div class="well">
                  <h1 class="intro" style="margin-bottom:0px;">IBM</h1>
                  <h3 class="subtitle">CO-OP RESEARCH <br> LAB</h3>

                </div>
            </div>

            <div class="col-md-12 " style="margin-bottom:20px;">
              <h3>Seat Selection VR</h3>
            </div>
            <div class="col-md-12">
              <ul>
              <h3 id ="app-install"><li>App Installation</h3>

		 <ol type="A">

				<p>For full installation, an Android app and Virtual reality app must be installed.</p>
        <p>Gear VR and Android device that fits Gear VR are required to run the virtual reality app.</p>

				<h4><li id ="create_content1">Quick Installation</h4>


				<p> Download APK files and install on Android device.  </p>
        <div class= "well">
          <h5> - Android app APK</h5>
          <a href="/downloadBlueAirline" target="_blank"><span class="btn btn-sm btn-success">Download APK 28.1MB</span></a>
          <h5> - Virtual Reality app APK</h5>
          <a href="/downloadSeatselctionVR" target="_blank"><span class="btn btn-sm btn-success">Download APK 28.3MB</span></a>
  		</div>



				</li>

        <h4><li id ="create_content1">Installation in development environments</h4>


				<h5>- Android Development Environment  </h5>
        <div class= "well">
          <ol>
            <li>Import project from Android Studio</li>
            <li>Build and run from emulator or actual phone</li>
          </ol>
    		</div>

        <h5>- Virtual Reality Development Environment (Unity)  </h5>
        <div class= "well">
          <ol>
            <li>Start Unity and select open project (Install Unity Version 5.3)</li>
            <li>Select the project folder</li>
            <li>Go to file -> build settings</li>
            <li>Select Android and click switch platform</li>
            <li>Click Player Settings
                <img src="/img/vrguide.png" class="img-responsive" alt="vrguide">
            </li>
            <li>Make sure virtual reality support is checked</li>
            <li>Click “Build and Run”</li>
          </ol>
    		</div>
				</li>

        <h4><li id ="create_content1">Signing the app for different devices: (current IBM device = Galaxy S6 Edge)</h4>
          <div class= "well">
				<p> Guide Link: <a href="https://developer.oculus.com/osig/" target ="_blank">https://developer.oculus.com/osig/ </a> </p>
        <p>Place the OSIG file in Project/Assets/Plugins/Android/assets/</p>
          </div>
				</li>

			</ol>

      </li>

      <h3><li>Source Code: </li></h3>
          <p>Android App: <a href="http://atldcyz082170.red.ihost.com/najafi/BlueAirline/tree/airline_android" target ="_blank">http://atldcyz082170.red.ihost.com/najafi/BlueAirline/tree/airline_android</a></p>
          <p>VR App: <a href="http://atldcyz082170.red.ihost.com/najafi/BlueAirline/tree/seatselection_vr" target ="_blank">http://atldcyz082170.red.ihost.com/najafi/BlueAirline/tree/seatselection_vr</a></p>

      </ul>
  </div>
            </div>
        </div>

    </body>
</html>
