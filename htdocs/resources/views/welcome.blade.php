<?php include('../resources/views/participants.blade.php');?>
<?php

$mehran = 'Idea & Architect';
$mehranLinkedin = 'https://www.linkedin.com/in/mehrannajafi';


// require("sendgrid-php/sendgrid-php.php");
// $sendgrid = new SendGrid("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");
// // $sendgrid = new SendGrid("OBav-xxmTh-hPxASPfGXMA");
// $email = new SendGrid\Email();
// $email->addTo("test@sendgrid.com")
//       ->setFrom("you@youremail.com")
//       ->setSubject("Sending with SendGrid is Fun")
//       ->setHtml("and easy to do anywhere, even with PHP");
// $sendgrid->send($email);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>IBM Digital Innovation Lab</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
        <link href='originalStyle.css' rel='stylesheet' type='text/css'>
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
                <h4 class="modal-title" id="email-title">Submit Idea</h4>
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
                      {!! Form::text('subject', null, array('class' => 'form-control', 'id' => 'detail','rows' => '4', 'placeholder' => "Subject", 'required')) !!}
                    </div>
                  </div>
                  <div class ="form-group">
                    <div class = "col-sm-12">
                      {!! Form::textarea('body', null, array('class' => 'form-control', 'id' => 'body','rows' => '4', 'placeholder' => "Description", 'required')) !!}
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


        <!-- <div id="videoModal" class="modal fade" role="dialog">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Seat Selection VR</h4>
              </div>
              <div class="modal-body">
                <div align="center" class="embed-responsive embed-responsive-16by9">
                    <video class="embed-responsive-item" controls>
                      <source src="/video/seatselection_demo_low.mp4">
                    Your browser does not support the video tag.
                    </video>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="videoModal1" class="modal fade" role="dialog">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Sensor Tag Demo</h4>
              </div>
              <div class="modal-body">
                  <div align="center" class="embed-responsive embed-responsive-16by9">
                <video class="embed-responsive-item" controls>
                  <source src="/video/Tracker Vid.mp4">

                Your browser does not support the video tag.
                </video>
                </div>
              </div>
            </div>
          </div>
        </div>
        -->

        <!-- Content -->



       <?php include('../resources/views/menuBar.blade.php');?>


                <div class="row">
                  <div class="col-md-4">
                    <h3 class="subtitle">Featured Projects</h3>
                  </div>
                  <div class="col-md-6"></div>
                  <div class="col-md-2 text-center"><button type="button" class="btn btn-md btn-primary" data-toggle="modal" data-target="#myModal" style="width:150px;text-align:left"><span class="glyphicon glyphicon-plus"></span> Submit Idea</button></div>
                </div>

                <hr>

                <div class="row item">

                <div class="col-md-4">
                  <div onclick="this.nextElementSibling.style.display='block'; this.style.display='none'">
                   <img width="<?php echo $width ?>" height="<?php echo $height-10 ?>" src="img/confidence_play.png" style="cursor:pointer" />
                  </div>
                  <div style="display:none" class="class=col-md-4">
                    <iframe width="<?php echo $width ?>" height="<?php echo $height ?>" src="https://www.youtube.com/embed/RMnLQNaBjwo?autoplay=0&showinfo=0&controls=0&rel=0" frameborder="0" allowfullscreen></iframe>
                  </div>
                </div>

                    <div class="col-md-6">
                      <h4 class="title">Confidence: Identity Verification</h4>
                      <p class="subtitle">Technologies: iOS, OCR</p>
                      <p class="subtitle">Industry: Banking</p>
                      <br>
                      <div class="wrapper">
                        <div class="small_div">
                          <p>Confidence is an iOS app that uses OCR technology to read data from Ontario Driver’s Licenses. Based on the information gathered from the license, the app performs a series of license validation tests and analyzes the user’s social media footprint and geolocation data to generate a score that indicates the confidence the app has in the user’s identity. The score consists of four components: core, enhanced, government and social.</p>
                        </div><a href="#" style="margin-bottom:15px;">Read more</a>
                      </div>
                        <div class="row">

                          <div class ="col-xs-8 profile">
                            <a href="https://ca.linkedin.com/" target="_blank">
                            <div class="col-xs-2 text-center" data-placement="bottom" data-toggle="tooltip"  title="Ideas">
                              <img src="/img/terry.png"  height="50" width="50" alt="profile" data-placement="top" data-toggle="tooltip"  title="Terry Hickey">
                            </div>
                            </a>
                            <a href="https://www.linkedin.com/" target="_blank">
                            <div class="col-xs-2 text-center" data-placement="bottom" data-toggle="tooltip"  title="Ideas">
                              <img src="/img/kevin.png"  height="50" width="50" alt="profile" data-toggle="tooltip"  title="Kevin Northrup">
                            </div>
                            </a>
                            <a href="https://www.linkedin.com/" target="_blank">
                              <div class="col-xs-2 text-center" data-placement="bottom" data-toggle="tooltip"  title="Graphic Designer">
                                <img src="/img/radu.png"  height="50" width="50" alt="profile" data-toggle="tooltip"  title="Radu Bolbcoceanu">
                              </div>
                            </a>
                          <!-- </div> -->

                          <!-- <div class ="col-xs-1"> -->
                            <a class= "display: inline;" href="https://www.linkedin.com/" target="_blank">
                              <div class="col-xs-2 text-center" data-placement="bottom" data-toggle="tooltip"  title="Developer">
                                <img src="/img/dylant.png"  height="50" width="50" alt="profile" data-toggle="tooltip"  title="Dylan Trachsel">
                              </div>
                            </a>
                          <!-- </div> -->

                          <!-- <div class ="col-xs-5"> -->
                            <a class="display: inline;" href="https://www.linkedin.com/" target="_blank">
                             <div class="col-xs-2 text-center" data-placement="bottom" data-toggle="tooltip"  title="Developer">
                               <img src="/img/sonalee.png"  height="50" width="50" alt="profile" data-toggle="tooltip"  title="Sonalee Shah">
                             </div>
                           </a>
                          <!-- </div> -->

                          <a class="display: inline;" href="https://www.linkedin.com/in/chelsea-thiel-jones-679357a2" target="_blank">
                           <div class="col-xs-2 text-center" data-placement="bottom" data-toggle="tooltip"  title="<?php echo $chelsea; ?>" >
                             <img src="/img/chelsea.jpg"  height="50" width="50" alt="profile" data-toggle="tooltip"  title="Chelsea Thiel-Jones">
                           </div>
                         </a>
                        </div>

                       </div>
                    </div>
                    <div class="col-md-2 text-center">
                    <a>
                        <span class="btn btn-md btn-info" style="margin-bottom:15px;width:150px;text-align:left"><span class="glyphicon glyphicon-pencil"></span> Installation Guide</span>
                    </a>
                    <a target="_blank">
                      <span class="btn btn-md btn-info" style="margin-bottom:15px;width:150px;text-align:left"><span class="glyphicon glyphicon-list-alt"></span> Presentation</span>
                    </a>
                      <span class="btn btn-md btn-info" style="margin-bottom:15px;width:150px;text-align:left" data-toggle="modal" data-target="#myModal" data-email="Feedback for this Application"><span class="glyphicon glyphicon-envelope"></span> Feedback</span>
                    </div>
                </div>

                <hr>


                <div class="row item">
                    <!-- <a href="#"> -->
                    <!-- <img src="/img/seatselection_play.png" class="img-responsive" alt="seatselection" data-toggle="modal" data-target="#videoModal"> -->
                    <!-- </a> -->
                  <div class="col-md-4">
                    <div onclick="this.nextElementSibling.style.display='block'; this.style.display='none'">
                     <img width="<?php echo $width ?>" height="<?php echo $height-30 ?>" src="img/seatselection_play.png" style="cursor:pointer" />
                     <!--  to fix, img file-->
                    </div>
                    <div style="display:none" class="class=col-md-4">
                      <iframe width="<?php echo $width ?>" height="<?php echo $height ?>" src="https://www.youtube.com/embed/vL0wgI5eqhU?autoplay=0&showinfo=0&controls=0&rel=0" frameborder="0" allowfullscreen></iframe>
                    </div>
                  </div>
                    <div class="col-md-6">
                    <h4 class="title">Seat Selection in Virtual Reality</h4>
                    <p class="subtitle">Technologies: Virtual Reality, Unity, Android</p>
                    <p class="subtitle">Industry: Transportation, Entertainment</p>
                    <br>
                     <div class="wrapper">
                        <div class="small_div">
                        <p>Gear VR app that puts the user in a virtual airplane to move around and select
                        preferred seat.
                        This app was created because we thought it would be great to add
                          a virtual reality experience within an airline mobile app for seat selection
                          and it would improve the user experience.
                         The application starts from the Android app and you have an option
                          to go into virtual reality to reserve a seat. </p>
                        </div>
                        <a href="#" style="margin-bottom:15px;">Read more</a>
                      </div>
                      <div class="row">
                        <div class ="col-xs-4 profile">
                          <a href="https://ca.linkedin.com/in/david-park-13728b89" target="_blank">
                          <div class="col-xs-5 text-center" data-placement="bottom" data-toggle="tooltip"  title="Developer">
                            <img src="/img/david.png"  height="50" width="50" alt="profile" data-placement="top" data-toggle="tooltip"  title="David Park">
                          </div>
                          </a>
                          <a href="<?php echo $mehranLinkedin; ?>" target="_blank">
                          <div class="col-xs-5 text-center" data-placement="bottom" data-toggle="tooltip"  title="<?php echo $mehran; ?>">
                            <img src="/img/mehran.png"  height="50" width="50" alt="profile" data-toggle="tooltip"  title="Mehran Najafi">
                          </div>
                          </a>
                        </div>
                      </div>
                  </div>
                    <div class="col-md-2 text-center">
                    <a href="/seatselection">
                        <span class="btn btn-md btn-info" style="margin-bottom:15px;width:150px;text-align:left"><span class="glyphicon glyphicon-pencil"></span> Installation Guide</span>
                    </a>
                    <a href="/seatselection_presentation" target="_blank">
                      <span class="btn btn-md btn-info" style="margin-bottom:15px;width:150px;text-align:left"><span class="glyphicon glyphicon-list-alt"></span> Presentation</span>
                    </a>
                      <span class="btn btn-md btn-info" style="margin-bottom:15px;width:150px;text-align:left" data-toggle="modal" data-target="#myModal" data-email="Feedback for this Application"><span class="glyphicon glyphicon-envelope"></span> Feedback</span>
                  </div>
                </div>


                <hr>


                <div class="row item">


                  <div class="col-md-4">
                    <div onclick="this.nextElementSibling.style.display='block'; this.style.display='none'">
                     <img width="<?php echo $width ?>" height="<?php echo $height-10 ?>" src="img/ride_play.png" style="cursor:pointer" />
                    </div>
                    <div style="display:none" class="class=col-md-4">
                      <iframe width="<?php echo $width ?>" height="<?php echo $height-10?>" src="https://www.youtube.com/embed/i4Enxzp2pCc?autoplay=0&showinfo=0&controls=0&rel=0" frameborder="0" allowfullscreen></iframe>
                    </div>
                  </div>


                  <div class="col-md-6">
              				  <h4 class="title">Ride Your Portfolio VR</h4>
                        <p class="subtitle">Technologies: Virtual Reality, Unity, Android</p>
                        <p class="subtitle">Industry: Banking, Entertainment</p>
                        <br>
                        <div class="wrapper">
                          <div class="small_div">
                            <p style="white-space: pre-wrap;">Check your stock info on your Android phone real time.  Add stock with symbol from US equities: AMEX, NASDAQ, NYSE.  Ride rollercoaster in virtual reality using Gear VR with your portfolio.  If the stock price goes up you go up with it or go down with it.  When the stock martket is closed, you have the option to choose demo version which loads 1 year worth of data.  It is a fun virtual reality experience in banking.</p>
                          </div><a href="#">Read more</a>
                        </div>
                        <div class="row">
                          <div class ="col-xs-4 profile">
                            <a href="https://ca.linkedin.com/in/david-park-13728b89" target="_blank">
                            <div class="col-xs-5 text-center" data-placement="bottom" data-toggle="tooltip"  title="Developer">
                              <img src="/img/david.png"  height="50" width="50" alt="profile" data-placement="top" data-toggle="tooltip"  title="David Park">
                            </div>
                            </a>
                              <a href="https://www.linkedin.com/in/mehrannajafi" target="_blank">
                            <div class="col-xs-5 text-center" data-placement="bottom" data-toggle="tooltip"  title="Ideas & Architect">
                              <img src="/img/mehran.png"  height="50" width="50" alt="profile" data-toggle="tooltip"  title="Mehran Najafi">
                            </div>
                              </a>

                          </div>
                        </div>
                  </div>
                    <div class="col-md-2 text-center">
                    <a href="/rideportfolio">
                        <span class="btn btn-md btn-info" style="margin-bottom:15px;width:150px"><span class="glyphicon glyphicon-pencil"></span> Installation Guide</span>
                    </a>
                      <span class="btn btn-md btn-info" style="margin-bottom:15px;width:150px;text-align:left" data-toggle="modal" data-target="#myModal" data-email="Feedback for this Application"><span class="glyphicon glyphicon-envelope"></span> Feedback</span>
                  </div>
                </div>

                <hr>

              <div class ="row item">



                <div class="col-md-4">
                  <div onclick="this.nextElementSibling.style.display='block'; this.style.display='none'">
                   <img width="<?php echo $width ?>" height="<?php echo $height+70 ?>" src="img/oba_play2.png" style="cursor:pointer" />
                  </div>
                  <div style="display:none" class="class=col-md-4">
                    <iframe width="<?php echo $width ?>" height="<?php echo $height+70 ?>" src="https://www.youtube.com/embed/VaDH7kfsgBM?autoplay=0&showinfo=0&controls=0&rel=0" frameborder="0" allowfullscreen></iframe>
                  </div>
                </div>


                <div class ="col-md-6">
                    <h4 class="title">Out of Band Authentication </h4>
                    <p class="subtitle">Technologies: iOS, Web</p>
                    <p class="subtitle">Industry: Banking</p>
                    <br>
                    <div class="wrapper">
                      <div class="small_div">
                      <p>Log in to your devices/applications from a single primary device by leveraging Apple's
                        powerful TouchID biometric authentication system!This application is a POC developed to demonstrate Out-Of-Band-Authentication (OBA)
                        applied to a number of different channels. By using TouchID with the iOS application on a
                        primary device, you can login to a Web Application, TvOS Application, and iPad application.
                        An additional use case presented in this application is call centre identity verification.
                          Instead of having a call centre agent ask you verbal questions to verify your identity,
                          they can verify your identity with TouchID.</p>
                        </div><a href="#" style="margin-bottom:15px;">Read more</a>

                        <div class="row ">
                          <!-- profile_margin -->
                          <div class ="col-xs-8 profile">
                              <a href="<?php echo $oliverLinkedin; ?>" target="_blank">
                                <div class="col-xs-2 text-center" data-placement="bottom" data-toggle="tooltip"  title="Developer & Architect">
                                  <img src="/img/oliver.png"  height="50" width="50" alt="profile" data-toggle="tooltip"  title="Oliver Merk">
                                </div>
                              </a>
                              <a href="https://www.linkedin.com/in/andrewfrolkin" target="_blank">
                                <div class="col-xs-2 text-center" data-placement="bottom" data-toggle="tooltip"  title="Developer">
                                  <img src="/img/andrewF.png"  height="50" width="50" alt="profile" data-toggle="tooltip"  title="Andrew Frolkin">
                                </div>
                              </a>
                              <a href="https://www.linkedin.com/in/mehrannajafi" target="_blank">
                                <div class="col-xs-2 text-center" data-placement="bottom" data-toggle="tooltip"  title="Ideas & Architect">
                                  <img src="/img/mehran.png"  height="50" width="50" alt="profile" data-toggle="tooltip"  title="Mehran Najafi">
                                </div>
                              </a>
                              <a href="https://ca.linkedin.com/in/jeremyaleung" target="_blank">
                                <div class="col-xs-2 text-center" data-placement="bottom" data-toggle="tooltip"  title="Graphic Designer">
                                  <img src="/img/jeremy.png"  height="50" width="50" alt="profile" data-toggle="tooltip"  title="Jeremy Leung">
                                </div>
                              </a>
                          </div>
                        </div>
                      </div>
                  </div>
                  <div class ="col-md-2 text-center">
                    <a href="#">
                        <span class="btn btn-md btn-info" style="margin-bottom:15px;width:150p"><span class="glyphicon glyphicon-pencil"></span> Installation Guide</span>
                    </a>
                    <a href="/OBA_presentation" target="_blank">
                      <span class="btn btn-md btn-info" style="margin-bottom:15px;width:150px;text-align:left"><span class="glyphicon glyphicon-list-alt"></span> Presentation</span>
                    </a>
                      <span class="btn btn-md btn-info" style="margin-bottom:15px;width:150px;text-align:left" data-toggle="modal" data-target="#myModal" data-email="Feedback for this Application"><span class="glyphicon glyphicon-envelope"></span> Feedback</span>
                  </div>
                </div>

                <hr>

                <div class ="row item">


                  <div class="col-md-4">
                    <div onclick="this.nextElementSibling.style.display='block'; this.style.display='none'">
                     <img width="<?php echo $width ?>" height="<?php echo $height+70 ?>" src="img/sensortag_play.png" style="cursor:pointer" />
                    </div>
                    <div style="display:none" class="class=col-md-4">
                      <iframe width="<?php echo $width ?>" height="<?php echo $height+70 ?>" src="https://www.youtube.com/embed/CkwGBXC4YIM?autoplay=0&showinfo=0&controls=0&rel=0" frameborder="0" allowfullscreen></iframe>
                    </div>
                  </div>


                <div class ="col-md-6">
                    <h4 class="title">SensorTag Luggage Tracker</h4>
                    <p class="subtitle">Technologies: Android, IoT, SensorTag</p>
                    <p class="subtitle">Industry: Transportation</p>
                    <br>
                    <div class="wrapper">
                      <div class="small_div">
                    <p>You've just had a ten-hour, hectic flight from LAX to the Heathrow Airport,
                       and can't wait to take a good couple hours of nap at your hotel.
                       You are so exhausted that you cannot stand in front the carousel,
                        searching for your baggages the old style. Why not just sit down
                        and let the SensorTag Luggage Tracker show you where they are?
                        Utilizing Texas Instrument's TI CC2650 SensorTag model, this small_div,
                        Android prototype of this feature is built for airline customers.
                        For this PoC, we've used experimented with many different sensors and algorithms within
                         this powerful chip from Texas Instrument. The concluding product is an ad hoc application
                          that delivers GPS-like tracking system, but using RSSI value of a bluetooth device.
                          The SensorTag Luggage Tracker is also an example of development within the Internet
                          of Things (IoT) industry.</p>
                        </div><a href="#" style="margin-bottom:15px;">Read more</a>

                          <div class="row">
                            <div class ="col-xs-5 profile">
                              <a href="https://www.linkedin.com/in/a24choi" target="_blank">
                              <div class="col-xs-4 text-center" data-placement="bottom" data-toggle="tooltip"  title="Developer">
                                <img src="/img/andrew.png"  height="50" width="50" alt="profile" data-placement="top" data-toggle="tooltip"  title="Andrew Choi">
                              </div>
                              </a>
                                <a href="https://www.linkedin.com/in/mehrannajafi" target="_blank">
                              <div class="col-xs-4 text-center" data-placement="bottom" data-toggle="tooltip"  title="Ideas & Architect">
                                <img src="/img/mehran.png"  height="50" width="50" alt="profile" data-toggle="tooltip"  title="Mehran Najafi">
                              </div>
                              </a>
                              <a href="https://ca.linkedin.com/in/jeremyaleung" target="_blank">
                            <div class="col-xs-4 text-center" data-placement="bottom" data-toggle="tooltip"  title="Graphic Designer">
                              <img src="/img/jeremy.png"  height="50" width="50" alt="profile" data-toggle="tooltip"  title="Jeremy Leung">
                            </div>
                            </a>
                            </div>
                          </div>
                        </div>
                  </div>
                  <div class ="col-md-2 text-center">
                    <a href="/tracker">
                        <span class="btn btn-md btn-info" style="margin-bottom:15px;width:150px"><span class="glyphicon glyphicon-pencil"></span> Installation Guide</span>
                    </a>
                    <a href="/sensortag_presentation" target="_blank">
                      <span class="btn btn-md btn-info" style="margin-bottom:15px;width:150px;text-align:left"><span class="glyphicon glyphicon-list-alt"></span> Presentation</span>
                    </a>
                      <span class="btn btn-md btn-info" style="margin-bottom:15px;width:150px;text-align:left"  data-toggle="modal" data-target="#myModal" data-email="Feedback for this Application"><span class="glyphicon glyphicon-envelope"></span> Feedback</span>
                  </div>
                </div>

                <hr>

                <div class ="row item">


                  <div class="col-md-4 vert_center">
                    <div onclick="this.nextElementSibling.style.display='block'; this.style.display='none'">
                     <img width="<?php echo $width ?>" height="<?php echo $height ?>" src="img/familybanking_play.png" style="cursor:pointer" />
                    </div>
                    <div style="display:none" class="class=col-md-4">
                      <iframe width="<?php echo $width ?>" height="<?php echo $height ?>" src="https://www.youtube.com/embed/hLx4M7TUj_Q?autoplay=0&showinfo=0&controls=0&rel=0" frameborder="0" allowfullscreen></iframe>
                    </div>
                  </div>


                  <div class ="col-md-6">
                    <h4 class="title">IBM Family Financial Advisor</h4>
                    <p class="subtitle">Technologies: iOS, Web, Watson</p>
                    <p class="subtitle">Industry: Finance, Banking</p>
                    <p class="url"> Demo URL: <a href="http://con-achoi.mybluemix.net/" target="_blank"> http://con-achoi.mybluemix.net/ </a> </p>
                    <br>
                    <div class="wrapper">
                      <div class="small_div">
                    <p>Regardless of your income, your financial management always has a room to improve.
                       Whether that be reducing the monthly interest payments or searching for a better
                       credit card which better meets your financial requirements, IBM Family Financial Advisor
                       can only serve in a positive way, in an efficient manner.
                       The IBM Family Financial Advisor Application utilizes IBM Watson services and APIs in order
                        to optimize and enhance your family financial management. Using SDK for Node.js as well
                         as Watson's Dialog API, Watson engages in a conversation with you to fulfil your
                         financial management needs. It is built on Bluemix, utilizing the Cloud Foundry,
                          an open source cloud service (PaaS).</p>
                        </div><a href="#" style="margin-bottom:15px;">Read more</a>
                        </div>
                        <div class="row">
                          <div class ="col-xs-4 profile">
                            <a href="https://www.linkedin.com/in/a24choi" target="_blank">
                            <div class="col-xs-5 text-center" data-placement="bottom" data-toggle="tooltip"  title="Developer">
                              <img src="/img/andrew.png"  height="50" width="50" alt="profile" data-placement="top" data-toggle="tooltip"  title="Andrew Choi">
                            </div>
                            </a>
                            <a href="#" target="_blank">
                            <div class="col-xs-5 text-center" data-placement="bottom" data-toggle="tooltip"  title="Architect & Idea">
                              <img src="/img/imad.png"  height="50" width="50" alt="profile" data-placement="top" data-toggle="tooltip"  title="Imad Obeid">
                            </div>
                            </a>
                          </div>
                        </div>
                  </div>
                <div class ="col-md-2 text-center">
                    <a href="/watsonBanking">
                        <span class="btn btn-md btn-info" style="margin-bottom:15px;width:150px"  ><span class="glyphicon glyphicon-pencil"></span> Installation Guide</span>
                    </a>
                      <span class="btn btn-md btn-info" style="margin-bottom:15px;width:150px;text-align:left" data-toggle="modal" data-target="#myModal" data-email="Feedback for this Application"><span class="glyphicon glyphicon-envelope" ></span> Feedback</span>
                </div>
              </div>

              <hr>


              <div class="row item">
                  <div class="col-md-4">
                    <a href="#">
                    <img src="/img/icon/dil.svg" class="img-responsive" alt="seatselection" data-toggle="modal">
                    </a>
                  </div>
                    <div class="col-md-6">
                    <h4 class="title">Innovation Lab Portal</h4>
                    <p class="subtitle">Technologies: Web, PHP, Laravel</p>
                    <p class="subtitle">Industry: Technology, IBM</p>
                    <p class="url"> Demo URL: <a href="http://digital-innovation-lab.mybluemix.net/" target="_blank"> http://digital-innovation-lab.mybluemix.net/ </a> </p>

                    <br>
                    <div class="wrapper">
                      <div class="small_div">
                    <p>Innovation Lab Portal Web Application utilizes PHP (+Laravel Framework) to display and exhibit projects completed or ideas proposed by co-ops
                    as well as full-time IBMers. Projects section displays all the projects that are in completion stage. People section lists current and past IBMers
                    as well as co-ops who have had contributions to any of the projects. Ideas section contains all the upcoming exciting projects as proposed by full-time employees
                   and interns at IBM.</p>
                      </div><a href="#" style="margin-bottom:15px;">Read more</a>
                      </div>
                      <div class="row">
                        <div class ="col-xs-8 profile">
                          <a href="https://ca.linkedin.com/in/david-park-13728b89" target="_blank">
                            <div class="col-xs-2 text-center" data-placement="bottom" data-toggle="tooltip"  title="Developer">
                              <img src="/img/david.png"  height="50" width="50" alt="profile" data-placement="top" data-toggle="tooltip"  title="David Park">
                            </div>
                          </a>
                          <a href="https://www.linkedin.com/in/a24choi" target="_blank">
                            <div class="col-xs-2 text-center" data-placement="bottom" data-toggle="tooltip"  title="Mobile App Developer">
                              <img src="/img/andrew.png"  height="50" width="50" alt="profile" data-toggle="tooltip"  title="Andrew Choi">
                            </div>
                          </a>
                          <a class= "display: inline;" href="https://www.linkedin.com/in/mehrannajafi" target="_blank">
                            <div class="col-xs-2 text-center" data-placement="bottom" data-toggle="tooltip"  title="<?php echo $mehran ?>">
                              <img src="/img/mehran.png"  height="50" width="50" alt="profile" data-toggle="tooltip"  title="Mehran Najafi">
                            </div>
                          </a>

                        <!-- <div class ="col-xs-1"> -->
                           <a class="display: inline;" href="<?php echo $subashanLinkedin; ?>" target="_blank">
                            <div class="col-xs-2 text-center" data-placement="bottom" data-toggle="tooltip"  title="Ideas & Architect">
                              <img src="/img/subashan.png"  height="50" width="50" alt="profile" data-toggle="tooltip"  title="Subashan Maheswaramoorthy">
                            </div>
                          </a>
                          <!-- </div> -->
                        <!-- <div class ="col-xs-5"> -->
                           <a class="display: inline;" href="https://www.linkedin.com/in/chelsea-thiel-jones-679357a2" target="_blank">
                            <div class="col-xs-2 text-center" data-placement="bottom" data-toggle="tooltip"  title="<?php echo $chelsea; ?>" >
                              <img src="/img/chelsea.jpg"  height="50" width="50" alt="profile" data-toggle="tooltip"  title="Chelsea Thiel-Jones">
                            </div>
                          </a>
                        </div>
                        <!-- </div> -->
                      </div>
                  </div>
                    <div class="col-md-2 text-center">
                    <a>
                        <span class="btn btn-md btn-info" style="margin-bottom:15px;width:150px;text-align:left"><span class="glyphicon glyphicon-pencil"></span> Installation Guide</span>
                    </a>
                    <a target="_blank">
                      <span class="btn btn-md btn-info" style="margin-bottom:15px;width:150px;text-align:left"><span class="glyphicon glyphicon-list-alt"></span> Presentation</span>
                    </a>
                      <span class="btn btn-md btn-info" style="margin-bottom:15px;width:150px;text-align:left" data-toggle="modal" data-target="#myModal" data-email="Feedback for this Application"><span class="glyphicon glyphicon-envelope"></span> Feedback</span>
                    </div>
                </div>


                <hr>

                <div class="row item">


                    <div class="col-md-4 vert_center">
                      <div onclick="this.nextElementSibling.style.display='block'; this.style.display='none'">
                       <img width="<?php echo $width ?>" height="<?php echo $height+0 ?>" src="img/newIdea_play.png" style="cursor:pointer" />
                      </div>
                      <div style="display:none" class="class=col-md-4">
                        <iframe width="<?php echo $width ?>" height="<?php echo $height ?>" src="https://www.youtube.com/embed/03lcTPnKLVI?autoplay=0&showinfo=0&controls=0&rel=0" frameborder="0" allowfullscreen></iframe>
                      </div>
                    </div>




                      <div class="col-md-6">
                      <h4 class="title">New Idea Submission Powered by IBM Watson</h4>
                      <p class="subtitle">Technologies: Watson API, iOS</p>
                      <p class="subtitle">Industry: Technology</p>

                      <br>
                      <div class="wrapper">
                        <div class="small_div">
                      <p>The New Idea Submission by Watson mobilizes the Digital Innovation Lab idea submission using the
                      Watson Dialog, TextToSpeech and SpeechToText. The user is able to converse with Watson and provide
                      answers to the questions related to their idea. After the conversation, the user’s mail automatically appears
                      and is populated with the responses provided to send to the Digital Innovation Lab.</p>
                        </div><a href="#" style="margin-bottom:15px;">Read more</a>
                        </div>
                        <div class="row">
                          <div class ="col-xs-4 profile">
                            <a href="<?php echo $chelseaLinkedin ?>" target="_blank">
                              <div class="col-xs-4 text-center" data-placement="bottom" data-toggle="tooltip"  title="Developer">
                                <img src="/img/chelsea.jpg"  height="50" width="50" alt="profile" data-placement="top" data-toggle="tooltip"  title="Chelsea Thiel-Jones">
                              </div>
                            </a>
                            <a class= "display: inline;" href="https://www.linkedin.com/in/mehrannajafi" target="_blank">
                              <div class="col-xs-5 text-center" data-placement="bottom" data-toggle="tooltip"  title="<?php echo $mehran ?>">
                                <img src="/img/mehran.png"  height="50" width="50" alt="profile" data-toggle="tooltip"  title="Mehran Najafi">
                              </div>
                            </a>

                          </div>
                        </div>
                    </div>
                      <div class="col-md-2 text-center">
                      <a>
                          <span class="btn btn-md btn-info" style="margin-bottom:15px;width:150px;text-align:left"><span class="glyphicon glyphicon-pencil"></span> Installation Guide</span>
                      </a>
                      <a target="_blank">
                        <span class="btn btn-md btn-info" style="margin-bottom:15px;width:150px;text-align:left"><span class="glyphicon glyphicon-list-alt"></span> Presentation</span>
                      </a>
                        <span class="btn btn-md btn-info" style="margin-bottom:15px;width:150px;text-align:left" data-toggle="modal" data-target="#myModal" data-email="Feedback for this Application"><span class="glyphicon glyphicon-envelope"></span> Feedback</span>
                      </div>
                  </div>

                  <hr>


                <div class="wrapper">
                  <div class="small_div"><br><br> </div>
                    <a href="#moreProjects" style="margin-bottom:15px;">Display More Projects</a>
                    <div style="margin-bottom:15px; float: right;">SendGrid</div>

                  </div>
                 <br><br>
                </div>

        <div style="height:50px">
        </div>
    </body>


    <script>
    $(document).ready(function(){
        $.fn.setAllToMaxHeight = function(){
          return this.height(
             Math.max.apply(
                   this, $.map(this, function(e){
                    return $(e).height()
                   })
                )
            );
        }
        $('[data-toggle="tooltip"]').tooltip();
        $('#myModal').on('shown.bs.modal', function (e) {
          var $invoker = $(e.relatedTarget);
          $('#email-title').html($invoker.data('email'));
        });
        $('#myModal').on('hidden.bs.modal', function (e) {

          $('#email-title').html("Submit Idea");
        });
        $('a[href="#"]').on('click', function (e) {
            e.preventDefault();
        });
        $('.wrapper').find('a[href="#"]').on('click', function (e) {
            e.preventDefault();
            this.expand = !this.expand;
            $(this).text(this.expand?"Collapse":"Read more");
            $(this).closest('.wFapper').find('.small_div, .big_div').toggleClass('small_div big_div');
            $(this).closest('.wrapper').find('.profile_margin, .no_profile_margin').toggleClass('profile_margin no_profile_margin');
        });
        $('.wrapper').find('a[href="#"]').on('click', function (e) {
            e.preventDefault();
            this.expand = !this.expand;
            $(this).text(this.expand?"Collapse":"Read more");
            $(this).closest('.wrapper').find('.small_div, .big_div').toggleClass('small_div big_div');
            $(this).closest('.wrapper').find('.profile_margin, .no_profile_margin').toggleClass('profile_margin no_profile_margin');
        });
        $('.wrapper').find('a[href="#moreProjects"]').on('click', function (e) {
            e.preventDefault();
            this.expand = !this.expand;
            $(this).text(this.expand?"Collapse":"Display More Projects");
            $(this).closest('.wrapper').find('.small_div, .big_div').toggleClass('small_div big_div');
            $(this).closest('.wrapper').find('.profile_margin, .no_profile_margin').toggleClass('profile_margin no_profile_margin');
        });
    });
    </script>
</html>
