<!DOCTYPE html>
<html>
    <head>
        <title>IBM Digital Innovation Lab - Ideas</title>

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


        <!-- Content -->
         
       <?php include('../resources/views/menuBar.blade.php');?>

        <div class="row">
          <div class="col-md-4">
            <h3 class="subtitle">Ideas</h3>
          </div>
          <div class="col-md-6"></div>
          <div class="col-md-2 text-center"><button type="button" class="btn btn-md btn-primary" data-toggle="modal" data-target="#myModal" style="width:150px;text-align:left"><span class="glyphicon glyphicon-plus"></span> Submit Idea</button></div>

        </div>

        <hr>

    
        <div class="row item">
          <div class="col-md-4">
            <a target="_blank" href="https://www.moj.io/"><img src="/img/mojio.png" class="img-responsive" alt="img" style="height:200px; "></a>
          </div>
            <div class="col-md-6">
            <h4 class="title">Moj.io</h4>

            <br>
            <div class="wrapper">
              <div class="small_div">
              <p>Explore Moj.io (<a target="_blank" href="https://www.moj.io/">https://www.moj.io/</a>) which enables IoT for cars. </p>
              <p>List of the features for Moj.io application for vehicles include: </p>
                          <ul>
                    <li>Push alert in evening when driving home for "fuel will not be enough to drive to work tomorrow!" </li>
                    <li>Alerts for oil problems or engine issues</li>
                    <li>Push an offer to users and measure if users are stopping at station even when not empty on fuel yet</li>
                    <li>Determine set of default gas stations a user passes by over a few months driving ... use this for personalized offers</li>
                    <li>Correlate weather data with fuel consumption per kilometer or with time needed per kilometer</li>
                    <li>Correlate ttc twitter feed with offers and driving behavior</li>
                    <li>Categorize driver type e. g.  strong accelerate/break cycles, or steady driving & max speeds</li>
                    <li>Fleet monitoring, management and dispatch</li>
                    <li>Correlate with parking data and reserve parking api</li>
                    <li>Sharing you live driving track with family in real time</li>
                    </ul>
              </div>
              <a href="#" style="margin-bottom:50px;">Read more</a>
            </div>
          </div>
          <div class="col-md-2 text-center">
            <p>Christian Menkens <a href="cmenkens@ca.ibm.com">cmenkens@ca.ibm.com</a> </p>
          </div>
        </div>



        <hr>

        <div class="row item">
          <div class="col-md-4">
            <img src="/img/workplace.png" class="img-responsive" alt="img" style="height:200px; width:340px">
          </div>
            <div class="col-md-6">
            <h4 class="title">Workplace Reservation App</h4>

            <br>
            <div class="wrapper">
              <p>Enabled IBMers to reserve their desk using a mobile app.</p>
            </div>

          </div>
          <div class="col-md-2 text-center">
            <p>Alon M. Kronenberg &nbsp <a href="alonk@ca.ibm.com">alonk@ca.ibm.com</a></p>
          </div>
        </div>

        <hr>

        <div class="row item">
          <div class="col-md-4">
            <img src="/img/watson_analytics.png" class="img-responsive" alt="img" style="height:200px; width:340px">
          </div>
            <div class="col-md-6">
            <h4 class="title">Watson Analytics Web Tool</h4>

            <br>
            <div class="wrapper">
              <p>IBM Analytics Web Tool that let's one run all types of Machine Learning and Statistics algorithms found in Papers etc on structured and a bit of unstructured data:
                      https://watson.analytics.ibmcloud.com/product </p>
                      <p>Try importing large dataset and see if it is capable of extracting interesting patterns.</p>
            </div>

          </div>
          <div class="col-md-2 text-center">
            <p>Christian Menkens &nbsp <a href="cmenkens@ca.ibm.com">cmenkens@ca.ibm.com</a></p>
          </div>
        </div>

        <hr>

        <div class="row item">
          <div class="col-md-4">
            <img src="/img/android_instant.png" class="img-responsive" alt="img" style="height:200px; width:340px">
          </div>
            <div class="col-md-6">
            <h4 class="title">Native on Demand App</h4>

            <br>
            <div class="wrapper">
              <p>Android Instant Apps, introduced in Google I/O 2016, enables Android apps to run instantly, without requiring installation.  </p>

            <ol>
              <li>Booking a workstation or meeting room</li>

            <li>Get bank mortgage/interest rates. </li>

            <li>Airline check-in/ boarding passes </li>
            </ol>

            </div>

          </div>
          <div class="col-md-2 text-center">
            <p>Paul Beliavsky &nbsp <a href="pbeliav@ca.ibm.com">pbeliav@ca.ibm.com</a></p>
          </div>
        </div>










<hr>
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
