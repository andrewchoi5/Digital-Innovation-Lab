<!DOCTYPE html>
<html>
    <head>
        <title>IBM Digital Innovation Lab</title>

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
        .small_div {
            height: 60px;
            overflow:hidden;
        }
        .big_div {
            height: auto;
        }
        .profile_margin {
          margin-top: 15%;
        }
        .no_profile_margin {
            margin-top: 0;
        }
        .vert_center {
            display: flex;
            align-items: center;
        }
        .header{
          background-color: #708FAB;
          padding-top:15px;
          padding-bottom:15px;
          margin-bottom: 20px;
        }
        .menu{
          position: absolute;
          top: 0;
          right: 0;
          padding-left: 15px;
          padding-right: 15px
        }
        ul.nav a:hover { background-color: #708FAB !important; }

        @media only screen and (max-width : 992px) {
            .profile{
              margin-bottom: 15px;
            }
        }
        .img-responsive{width:100%;}
        </style>
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
                <h4 class="modal-title" id ="email-title">Submit Idea</h4>
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
            <!-- Modal content-->
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
        <div id="videoModal2" class="modal fade" role="dialog">
          <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Watson Family Banking Demo</h4>
              </div>
              <div class="modal-body">
                  <div align="center" class="embed-responsive embed-responsive-16by9">
                <video class="embed-responsive-item" controls>
                  <source src="/video/Advisor Coop Vid.mov">

                Your browser does not support the video tag.
                </video>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="videoModal3" class="modal fade" role="dialog">
          <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Ride Your Portfolio VR</h4>
              </div>
              <div class="modal-body">
                  <div align="center" class="embed-responsive embed-responsive-16by9">
                <video class="embed-responsive-item" controls>
                  <source src="/video/RollercoasterVR_DEMO.mp4">
                Your browser does not support the video tag.
                </video>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="videoModal4" class="modal fade" role="dialog">
          <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Out of Band Authentication </h4>
              </div>
              <div class="modal-body">
                  <div align="center" class="embed-responsive embed-responsive-16by9">
                <video class="embed-responsive-item" controls>
                  <source src="/video/OBA demo video.mp4">
                Your browser does not support the video tag.
                </video>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Content -->
        <div class="row ">
          <div class="col-md-12 header">
              <img src="/img/ibm.png" class="img-responsive" style="width:5%" alt="IBM_logo" >
              <h2 style="margin:0;color:#FFFFFF">Digital Inn<img src="/img/watson_white.png" class="img-responsive" style="width:30px;display:inline-block;margin-bottom: 7px;" alt="IBM_logo" >vati<img src="/img/watson_white.png" class="img-responsive" style="width:30px;display:inline-block;margin-bottom: 7px;" alt="IBM_logo" >n Lab</h2>
              <h5 style="margin:0; color:#DDDEE0">Innovations that matter</h5>

              <div class="menu row">
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                          <a href="/" style="color:#DDDEE0">Projects</a>
                        </li>
                        <li>
                          <a href="/people" style="color:#DDDEE0">People</a>
                        </li>
                        <li>
                          <a href="/ideas" style="color:#DDDEE0">Ideas</a>
                        </li>
                    </ul>
                </div>

              </div>

          </div>
        </div>





              <div class="row">
                  <div class="col-md-4">
                    <h3 class="subtitle">Projects</h3>
                  </div>
                  <div class="col-md-6"></div>
                  <div class="col-md-2 text-center"><button type="button" class="btn btn-md btn-primary" data-toggle="modal" data-target="#myModal" style="width:150px;text-align:left"><span class="glyphicon glyphicon-plus"></span> Submit Idea</button></div>
                </div>

                <hr>

                <div class="row item">
                  <div class="col-md-4">
                    <a href="#">
                    <img src="/img/seatselection_play.png" class="img-responsive" alt="seatselection" data-toggle="modal" data-target="#videoModal">
                    </a>
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

                      </div><a href="#" style="margin-bottom:15px;">Read more</a>
                      </div>
                      <div class="row">
                        <div class ="col-xs-4 profile">
                          <a href="https://ca.linkedin.com/in/david-park-13728b89" target="_blank">
                          <div class="col-xs-5 text-center" data-placement="bottom" data-toggle="tooltip"  title="Developer">
                            <img src="/img/david.png"  height="50" width="50" alt="profile" data-placement="top" data-toggle="tooltip"  title="David Park">
                          </div>
                          </a>
                          <a href="https://www.linkedin.com/in/mehrannajafi" target="_blank">
                          <div class="col-xs-5 text-center" data-placement="bottom" data-toggle="tooltip"  title="Idea & Architect">
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
                      <span class="btn btn-md btn-info" style="margin-bottom:15px;width:150px;text-align:left" data-toggle="modal" data-target="#myModal" data-email="Feedback for Seat selection VR"><span class="glyphicon glyphicon-envelope"></span> Feedback</span>
                  </div>
                </div>
                <hr>

                  <div class="row item">
                  <div class="col-md-4 ">
                    <a href="#">
                    <img src="/img/rideportfolio_play.png" class="img-responsive" alt="ride portfolio" data-toggle="modal" data-target="#videoModal3">
                    </a>
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
                            <div class="col-xs-5 text-center" data-placement="bottom" data-toggle="tooltip"  title="Idea & Architect">
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
                      <span class="btn btn-md btn-info" style="margin-bottom:15px;width:150px;text-align:left" data-toggle="modal" data-target="#myModal" data-email="Feedback for Ride Portfolio VR"><span class="glyphicon glyphicon-envelope"></span> Feedback</span>
                  </div>
                </div>
                <hr>

              <div class ="row item">
                <div class ="col-md-4 vert_center">
                    <a href="#">
                      <img src="/img/outofband_play.png" class="img-responsive" alt="outofband" data-toggle="modal" data-target="#videoModal4">
                    </a>
                  </div>
                <div class ="col-md-6">
                    <h4 class="title">Out of Band Authentication </h4>
                    <p class="subtitle">Technologies: IOS, Web</p>
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

                        <div class="row profile_margin">
                          <div class ="col-xs-5 profile">
                            <a href="https://www.linkedin.com/in/andrewfrolkin" target="_blank">
                              <div class="col-xs-4 text-center" data-placement="bottom" data-toggle="tooltip"  title="Developer">
                                <img src="/img/andrewF.png"  height="50" width="50" alt="profile" data-toggle="tooltip"  title="Andrew Frolkin">
                              </div>
                            </a>
                              <a href="https://www.linkedin.com/in/mehrannajafi" target="_blank">
                                <div class="col-xs-4 text-center" data-placement="bottom" data-toggle="tooltip"  title="Idea & Architect">
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
                    <a href="#">
                        <span class="btn btn-md btn-info" style="margin-bottom:15px;width:150p"><span class="glyphicon glyphicon-pencil"></span> Installation Guide</span>
                    </a>
                    <a href="/OBA_presentation" target="_blank">
                      <span class="btn btn-md btn-info" style="margin-bottom:15px;width:150px;text-align:left"><span class="glyphicon glyphicon-list-alt"></span> Presentation</span>
                    </a>
                      <span class="btn btn-md btn-info" style="margin-bottom:15px;width:150px;text-align:left" data-toggle="modal" data-target="#myModal" data-email="Feedback for Out of Band Authentication"><span class="glyphicon glyphicon-envelope"></span> Feedback</span>
                  </div>
                </div>

                <hr>

                <div class ="row item">
                  <div class ="col-md-4 vert_center">
                    <a href="#">
                    <img src="/img/sensortag_play.png" class="img-responsive" alt="sensortag" data-toggle="modal" data-target="#videoModal1">
                    </a>
                  </div>
                <div class ="col-md-6">
                    <h4 class="title">SensorTag Luggage Tracker</h4>
                    <p class="subtitle">Technologies: IOT, Android</p>
                    <p class="subtitle">Industry: Transportation</p>
                    <br>
                    <div class="wrapper">
                      <div class="small_div">
                    <p>You've just had a 10-hour, hectic flight from LAX to the Heathrow Airport,
                       and can't wait to take a good couple hours of nap at your hotel.
                       You are so exhausted that you cannot stand in front the carousel,
                        searching for your baggages the old style. Why not just sit down
                        and let the SensorTag Luggage Tracker show you where they are?
                        Utilizing Texas Instrument's TI CC2650 SensorTag model, this small_div,
                        Android prototype of this feature is built for airline customers.
                        For this POC, we've used experimented with many different sensors and algorithms within
                         this powerful chip from Texas Instrument. The concluding product is an ad hoc application
                          that delivers GPS-like tracking system, but using RSSI value of a bluetooth device.
                          The SensorTag Luggage Tracker is also an example of development within the Internet
                          of Things (IoT) industry.</p>
                        </div><a href="#" style="margin-bottom:15px;">Read more</a>

                          <div class="row profile_margin">
                            <div class ="col-xs-5 profile">
                              <a href="https://www.linkedin.com/in/a24choi" target="_blank">
                              <div class="col-xs-4 text-center" data-placement="bottom" data-toggle="tooltip"  title="Developer">
                                <img src="/img/andrew.png"  height="50" width="50" alt="profile" data-placement="top" data-toggle="tooltip"  title="Andrew Choi">
                              </div>
                              </a>
                                <a href="https://www.linkedin.com/in/mehrannajafi" target="_blank">
                              <div class="col-xs-4 text-center" data-placement="bottom" data-toggle="tooltip"  title="Idea & Architect">
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
                      <span class="btn btn-md btn-info" style="margin-bottom:15px;width:150px;text-align:left"  data-toggle="modal" data-target="#myModal" data-email="Feedback for SensorTag Luggage Tracker"><span class="glyphicon glyphicon-envelope"></span> Feedback</span>
                  </div>
                </div>
                <hr>


                <div class ="row item">
                  <div class ="col-md-4 vert_center">
                    <a href="#">
                    <img src="/img/familybanking_play.png" class="img-responsive" alt="familybanking" data-toggle="modal" data-target="#videoModal2">
                    </a>
                  </div>
                  <div class ="col-md-6">
                    <h4 class="title">IBM Family Financial Advisor</h4>
                    <p class="subtitle">Technologies: iOS, Web, Watson</p>
                    <p class="subtitle">Industry: Banking</p>
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
                      <span class="btn btn-md btn-info" style="margin-bottom:15px;width:150px;text-align:left" data-toggle="modal" data-target="#myModal" data-email="Feedback for Watson Family Banking"><span class="glyphicon glyphicon-envelope" ></span> Feedback</span>
                  </div>
                </div>
        </div>

        <hr>
        <div style="height:50px">
        </div>
    </body>

    <script>
    $(document).ready(function(){
        $.fn.setAllToMaxHeight = function(){
          return this.height( Math.max.apply(this, $.map( this , function(e){ return $(e).height() }) ) );
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
            $(this).closest('.wrapper').find('.small_div, .big_div').toggleClass('small_div big_div');
            $(this).closest('.wrapper').find('.profile_margin, .no_profile_margin').toggleClass('profile_margin no_profile_margin');
        });


        // $( '.item' ).each(function( index ) {
        //     $(this).children("div").setAllToMaxHeight();
        //     // $('.item > div').setAllToMaxHeight();
        // });

    });
    </script>
</html>
