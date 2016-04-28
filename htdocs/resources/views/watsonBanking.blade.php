<!DOCTYPE html>
<html>
    <head>
        <title>IBM Family Financial Advisor</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
<style>
.subtitle {margin-bottom:0; margin-top: 0;}
.title {margin-bottom:0; }
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
              <h3>IBM Family Financial Advisor</h3>
            </div>
            <div class="col-md-12">
              <ul>
              <h3 id ="app-install"><li>App Installation</h3>

		 <ol type="A">

				<p>For full installation, the web application must be installed.</p>
        <p>Internet Browser (preferably Chrome) and IBM Bluemix are required to run the Family Financial Advisor web application.
</p>

				<h4><li id ="create_content1">Quick Installation</h4>


				<p> Download source files and install with Bluemix.</p>
        <div class= "well">
          <h5> - Application</h5>
          <a href=" https://hub.jazz.net/git/achoi/dialog-nodejs-achoi" target="_blank"><span class="btn btn-sm btn-success"> Source Code</span></a>

  		</div>



				</li>

        <h4><li id ="create_content1">Installation within IBM Bluemix</h4>


				<h5>- Android Development Environment (ADE)  </h5>
        <div class= "well">
          <ol>
            <li>Create a Bluemix Account</li>
            <li>Sign up in Bluemix, or use an existing account. Watson Services in Beta are free to use.</li>
            <li>Download and install the Cloud-foundry CLI tool</li>
            <li>Edit the manifest.yml file and change the <application-name> to something unique.
              <script src="https://gist.github.com/kjparkdavid/bb2de697b26287a6bf580b410468e396.js"></script>
              <p>The name you use will determine your application url initially, e.g. <application-name>.mybluemix.net.</p>
            </li>

            <li>Connect to Bluemix in the command line tool.

              <p>$ cf api https://api.ng.bluemix.net </p>
              <p>$ cf login -u <your user ID> </p>

            </li>

            <li>Create the Text to Speech service in Bluemix.

              <p>$ cf create-service text_to_speech standard text-to-speech-service </p>


            </li>

            <li>Push

              <p>$ cf push </p>


            </li>


          </ol>
    		</div>


				</li>


			</ol>

      </li>

      <h3><li>Source Code: </li></h3>
          <p>Android App: <a href="https://hub.jazz.net/git/achoi/dialog-nodejs-achoi" target ="_blank">https://hub.jazz.net/git/achoi/dialog-nodejs-achoi</a></p>


      </ul>
  </div>
            </div>
        </div>

    </body>
</html>
