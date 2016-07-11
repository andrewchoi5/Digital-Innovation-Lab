 <?php include('../resources/views/participants.blade.php');?>
<!DOCTYPE html>
<html>
    <head>
        <title>IBM Digital Innovation Lab - Proposals</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="originalStyle.css">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <link rel="stylesheet" href="originalStyle.css" />
        <link rel="stylesheet" type="text/css" href="my-icons-collection/font/flaticon.css">


    </head>
    <body>

      @if (Session::has('message'))
      <div class="alert alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>{{ Session::get('message') }}
      </div>
      @endif

      <div class="container">
       <?php include('../resources/views/menuBar.blade.php');?>
                <div class="row">
                  <div class="col-md-4">
                    <h3 class="subtitle">Proposals</h3>
                  </div>
                  <div class="col-md-6"></div>
                  <!-- <div class="col-md-2 text-center"><button type="button" class="btn btn-md btn-primary" data-toggle="modal" data-target="#myModal" style="width:150px;text-align:left"><span class="glyphicon glyphicon-plus"></span> Submit Idea</button></div> -->
                </div>

                <hr>

                <div class="row item">
                  <div class="col-md-4">
                    <a href="#">
                    <img src="/resources/MeetingRoom.png" class="img-responsive" alt="seatselection" data-toggle="modal" data-target="#videoModal">
                    </a>
                  </div>
                    <div class="col-md-6">
                    <h4 class="title">Meeting Rooms for Future</h4>
                    <br>
                     <div class="wrapper">
                        <div class="small_div">
                        <p>There are many technologies to improve the productivity of face-to-face and virtual meetings.
                          This proposal recommends a pilot project on adding new features to a physical meeting room such as: Beacons to automatically check-in attendees
                            Motion/Light sensors to automatically detect cancelled meetings
                            Mounted iPad to display availability status of the room
                            Audio and Video Recorder + Watson to index meetings data
                            etc.</p>
                        </div>
                        <a href="#" style="margin-bottom:15px;">Read more</a>
                      </div>
                      <div class="row">
                        <div class ="col-xs-4 profile">
                          <a href="<?php echo $mehranLinkedin ?>" target="_blank">
                          <div class="col-xs-5 text-center" data-placement="bottom" data-toggle="tooltip"  title="<?php echo $mehran ?>">
                            <img src="/img/mehran.png"  height="50" width="50" alt="profile" data-placement="top" data-toggle="tooltip"  title="Mehran Najafi">
                          </div>
                          </a>
                        </div>
                      </div>
                  </div>
                    <div class="col-md-2 text-center">
                    <a href="/resources/Proposal.MeetingRoom.key">
                        <span class="btn btn-md btn-info" style="margin-bottom:15px;width:150px;text-align:left"><span class="glyphicon glyphicon-pencil"></span>   &nbsp;&nbsp; Download</span>
                    </a>
                  </div>
                </div>

                <hr>

                <div class="row item">
                  <div class="col-md-4">
                    <a href="#">
                    <img src="/img/nest.png" class="img-responsive" alt="seatselection" data-toggle="modal" data-target="#videoModal">
                    </a>
                  </div>
                    <div class="col-md-6">
                    <h4 class="title">Nest-like Fuel Consumption App</h4>
                    <br>
                     <div class="wrapper">
                        <div class="small_div">
                        <p>
                        A mobile app and AppLink APIs will work together to find the driver’s commute habits per day/week/month and let the user to edit them if necessary. The app calculates how much the car can go with the current fuel level. Based on the traffic hours, gas price at different gas stations as well as different hours a day it suggests the driver when and where to ask for fuel.

                        by: Mehran Najafi (similar to Meeting Rooms for Future)</p>
                        </div>
                        <a href="#" style="margin-bottom:15px;">Read more</a>
                      </div>
                      <div class="row">
                        <div class ="col-xs-4 profile">
                          <a href="<?php echo $mehranLinkedin ?>" target="_blank">
                          <div class="col-xs-5 text-center" data-placement="bottom" data-toggle="tooltip"  title="<?php echo $mehran ?>">
                            <img src="/img/mehran.png"  height="50" width="50" alt="profile" data-placement="top" data-toggle="tooltip"  title="Mehran Najafi">
                          </div>
                          </a>
                        </div>
                      </div>
                  </div>
                    <div class="col-md-2 text-center">
                    <a href="/resources/nest.pptx" target="_blank" download>
                        <span class="btn btn-md btn-info" style="margin-bottom:15px;width:150px;text-align:left"><span class="glyphicon glyphicon-pencil"></span>   &nbsp;&nbsp; Download</span>
                    </a>
                  </div>
                </div>

                <hr>

                <div class="row item">
                  <div class="col-md-4">
                    <a href="#">
                    <img src="/img/guest.png" class="img-responsive" alt="seatselection" data-toggle="modal" data-target="#videoModal">
                    </a>
                  </div>
                    <div class="col-md-6">
                    <h4 class="title">Guest Check-in iPad App</h4>
                    <br>
                     <div class="wrapper">
                        <div class="small_div">
                        <p>IBM employees can register their guests using an iPhone application by providing their name, company. Meeting info is also required. IBM visitors will check in using an iPad app by providing their name. The iPad is connected to a printer which prints their badge including the meeting info and how to get to the meeting room. The iPad app also sends a push notification/sms/email to the inviting IBMer to come to lobby and welcome their guest.

                        by: Mehran Najafi (similar to Meeting Rooms for Future)</p>
                        </div>
                        <a href="#" style="margin-bottom:15px;">Read more</a>
                      </div>
                      <div class="row">
                        <div class ="col-xs-4 profile">
                          <a href="<?php echo $mehranLinkedin ?>" target="_blank">
                          <div class="col-xs-5 text-center" data-placement="bottom" data-toggle="tooltip"  title="<?php echo $mehran ?>">
                            <img src="/img/mehran.png"  height="50" width="50" alt="profile" data-placement="top" data-toggle="tooltip"  title="Mehran Najafi">
                          </div>
                          </a>
                        </div>
                      </div>
                  </div>
                    <div class="col-md-2 text-center">
                    <a href="/resources/guest.key" target="_blank">
                        <span class="btn btn-md btn-info" style="margin-bottom:15px;width:150px;text-align:left"><span class="glyphicon glyphicon-pencil"></span>   &nbsp;&nbsp; Download</span>
                    </a>
                  </div>
                </div>




      </div> <!-- end of container -->
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
