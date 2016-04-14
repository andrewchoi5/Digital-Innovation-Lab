<!DOCTYPE html>
<html>
    <head>
        <title>Coop at IBM</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    </head>
    <body>

      @if (Session::has('message'))
      <div class="alert alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>{{ Session::get('message') }}
      </div>

    @endif
        <div class="container">
        <!-- Modal -->
        <div id="myModal" class="modal fade" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Submit Idea</h4>
              </div>
              <div class="modal-body">
                  {!! Form::open(array('action' => array('MainController@sendEmail'), 'method' => 'post', 'class' => 'form-horizontal','id' => 'submit-idea','role' => 'form')) !!}
                  <div class = "form-group">
                    <div class = "col-sm-12">
                      {!! Form::text('name', null, array('class' => 'form-control', 'id' => 'name', 'placeholder' => "Name", 'required')) !!}
                    </div>
                  </div>
                  <div class ="form-group">
                    <div class = "col-sm-12">
                      {!! Form::text('email', null, array('class' => 'form-control', 'id' => 'email', 'placeholder' => "Email", 'required')) !!}
                    </div>
                  </div>
                  <div class ="form-group">
                    <div class = "col-sm-12">
                      {!! Form::textarea('subject', null, array('class' => 'form-control', 'id' => 'detail','rows' => '4', 'placeholder' => "Subject", 'required')) !!}
                    </div>
                  </div>
              </div>
              <div class="modal-footer">
                {!! Form::submit('Submit', array('class' => 'btn btn-success')) !!}
                {!! Form::close() !!}
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>

          </div>
        </div>


        <div id="videoModal" class="modal fade" role="dialog">
          <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Seat Selection VR</h4>
              </div>
              <div class="modal-body">
                <div align="center" class="embed-responsive embed-responsive-16by9">
                    <video class="embed-responsive-item" controls>
                        <source src="/video/Demo Video.mp4" type="video/mp4">
                    </video>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div id="videoModal1" class="modal fade" role="dialog">
          <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Sensor Tag Demo</h4>
              </div>
              <div class="modal-body">
                  <div align="center" class="embed-responsive embed-responsive-16by9">
                <video class="embed-responsive-item" controls>
                  <source src="/video/IOT_demo.mov">

                Your browser does not support the video tag.
                </video>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Content -->
          <div class="row">
        		<div class="col-md-12">
              <div class="well">
                  <h1 class="intro" style="margin-bottom:0px;">IBM</h1>
                  <h3 class="subtitle">CO-OP RESEARCH <br> LAB</h3>

                </div>
            </div>

            <div class="col-md-12 text-right" style="margin-bottom:20px;">
              <button type="button" class="btn btn-md btn-primary" data-toggle="modal" data-target="#myModal" style="margin-right:20px">Submit Idea</button>

            </div>
            <div class="col-md-12">
              <table class="table table-striped">
                <tr>
                  <td style="width:35%">
                    <a href="#">
                    <img src="/img/seatselection_play.png" class="img-responsive" alt="seatselection" data-toggle="modal" data-target="#videoModal">
                  </a>
                  </td>
                  <td style="width:55%"><h4>Seat Selection in Virtual Reality (1:40)</h4>
                    <p>Gear VR app that puts the user in a virtual airplane to move around and select
                      preferred seat.</p>
                      <p>This app was created because we thought it would be great to add
                        a virtual reality experience within an airline mobile app for seat selection
                        and it would improve the user experience.</p>
                      <p>  The application starts from the Android app and you have an option
                        to go into virtual reality to reserve a seat. </p>
                  </td>
                  <td style="width:10%; vertical-align:middle">
                    <a href="/seatselection">
                        <span class="btn btn-md btn-warning">Try It</span>
                    </a>
                  </td>
                </tr>

                <tr>
                  <td style="width:35%">
                    <img src="/img/rideportfolio.png" class="img-responsive" alt="ride portfolio">
                  </td>
                  <td style="width:55%"><h4>Ride Your Portfolio VR</h4>
                      <p>Ride rollercoaster in virtual reality with your portfolio.  If the stock price goes up
                      you go up with it or go down with it.
                      It is a fun virtual reality experience in banking.</p>
                  </td>
                  <td style="width:10%; vertical-align:middle"><span class="btn btn-md btn-warning">Try It</span></td>
                </tr>

                <tr>
                  <td style="width:35%">
                    <img src="/img/outofband.png" class="img-responsive" alt="outofband">
                  </td>
                  <td style="width:55%"><h4>Out of Band Authentication </h4>
                      <p>Log in to your devices/applications from a single primary device by leveraging Apple's
                        powerful TouchID biometric authentication system!</p>

                      <p>This application is a POC developed to demonstrate Out-Of-Band-Authentication (OBA)
                        applied to a number of different channels. By using TouchID with the iOS application on a
                        primary device, you can login to a Web Application, TvOS Application, and iPad application. </p>

                        <p>An additional use case presented in this application is call centre identity verification.
                          Instead of having a call centre agent ask you verbal questions to verify your identity,
                          they can verify your identity with TouchID.</p>
                  </td>
                  <td style="width:10%; vertical-align:middle"><span class="btn btn-md btn-warning">Try It</span></td>
                </tr>

                <tr>
                  <td style="width:35%">
                    <a href="#">
                    <img src="/img/sensortag_play.png" class="img-responsive" alt="sensortag" data-toggle="modal" data-target="#videoModal1">
                    </a>
                  </td>
                  <td style="width:55%"><h4>SensorTag Luggage Tracker (IoT) (0:26)</h4>
                    <p>You've just had a 10-hour, hectic flight from LAX to the Heathrow Airport,
                       and can't wait to take a good couple hours of nap at your hotel.
                       You are so exhausted that you cannot stand in front the carousel,
                        searching for your baggages the old style. Why not just sit down
                        and let the SensorTag Luggage Tracker show you where they are?</p>
                      <p>Utilizing Texas Instrument's TI CC2650 SensorTag model, this small,
                        Android prototype of this feature is built for airline customers.
                        For this POC, we've used experimented with many different sensors and algorithms within
                         this powerful chip from Texas Instrument. The concluding product is an ad hoc application
                          that delivers GPS-like tracking system, but using RSSI value of a bluetooth device.
                          The SensorTag Luggage Tracker is also an example of development within the Internet
                          of Things (IoT) industry.</p>
                  </td>
                  <td style="width:10%; vertical-align:middle">
                    <a href="/sensortag">
                        <span class="btn btn-md btn-warning">Try It</span>
                    </a>
                  </td>
                </tr>
              </table>
            </div>
        </div>
        </div>
    </body>
</html>
