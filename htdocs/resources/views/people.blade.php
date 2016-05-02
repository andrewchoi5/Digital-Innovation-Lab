<!DOCTYPE html>
<html>
    <head>
        <title>IBM Digital Innovation Lab - People</title>

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
        .name{font-size:16px;}
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


        <!-- Content -->
        <div class="row ">
          <div class="col-md-12 header">
              <img src="/img/ibm.png" class="img-responsive" style="width:5%" alt="IBM_logo" >
              <h2 style="margin:0;color:#FFFFFF">Digital Inn<img src="/img/watson_white.png" class="img-responsive" style="width:30px;display:inline-block" alt="IBM_logo" >vati<img src="/img/watson_white.png" class="img-responsive" style="width:30px;display:inline-block" alt="IBM_logo" >n Lab</h2>
              <h5 style="margin:0; color:#DDDEE0">Innovations that matter</h5>
              <div class="menu">
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
              <!-- Collect the nav links, forms, and other content for toggling -->

          </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <h3 class="subtitle">People</h3>
            </div>
        </div>

        <hr>

        <div class="row" style="margin-bottom:20px">
          <div class="col-md-1"></div>
            <div class="col-md-11">
                <h3 class="subtitle">Current</h3>
            </div>
        </div>

        <div class="row ">
          <div class="col-md-1 "></div>

          <div class="col-md-2 text-center">
            <a href="https://www.linkedin.com/in/a24choi" target="_blank">
              <img src="/img/andrew.png" height="150" width="150" alt="profile" >
            </a>
            <p class="title name">Andrew Choi </p>
            <p>University of Waterloo, Co-op</p>
            <p>iOS, Internet of Things</p>
            <p>achoi@ca.ibm.com</p>
          </div>

          <div class="col-md-2 text-center">
            <a href="https://www.linkedin.com/in/mehrannajafi" target="_blank">
              <img src="/img/mehran.png" height="150" width="150" alt="profile" >
            </a>
            <p class="title name">Mehran </p>
            <p class="name">Najafi, PhD</p>
            <p class="title">Lab Supervisor,</p>
            <p>Solution Architect</p>
            <p>mehranna@ca.ibm.com</p>
          </div>

          <div class="col-md-2 text-center">
            <a href="#" target="_blank">
              <img src="/img/subashan.png" height="150" width="150" alt="profile" >
            </a>
            <p class="title name">Subashan S </p>
            <p class="name">Maheswaramoorthy</p>
            <p class="title">Solution Architect</p>
            <p>Co-op Coordinator</p>
            <p>subashan@ca.ibm.com</p>
          </div>

          <div class="col-md-2 text-center">
            <a href="#" target="_blank">
              <img src="/img/imad.png" height="150" width="150"  alt="profile" >
            </a>
            <p class=" name">Imad Obeid </p>

            <p>Solution Architect</p>
            <p>imad@ca.ibm.com</p>
          </div>

          <div class="col-md-2 text-center">
            <a href="https://ca.linkedin.com/in/jeremyaleung" target="_blank">
              <img src="/img/jeremy.png" height="150" width="150" alt="profile" >
            </a>
            <p class=" name">Jeremy Leung</p>

            <p>Graphic Designer</p>
            <p>jeremy@ca.ibm.com</p>
          </div>

          <div class="col-md-1 "></div>
        </div>

        <div class="row ">

          <div class="col-md-1 "></div>

          <div class="col-md-2 text-center">
            <a href="https://www.linkedin.com/" target="_blank">
              <img src="/img/radu.png" height="150" width="150" alt="profile" >
            </a>
            <p class=" name">Radu Bolboceanu </p>
            <p>Graphic Designer</p>
            <p>radu@ca.ibm.com</p>
          </div>

          <div class="col-md-2 text-center" >
              <a href="https://ca.linkedin.com/in/msashek" target="_blank" >
              <img src="/img/ashek.jpg" height="150" width="105" alt="profile" >
            </a>
            <p class=" name">Mahmood (M.S.) Ashek</p>
            <p>Executive Sponsor</p>
            <p>mashek@ca.ibm.com</p>
          </div>

          <div class="col-md-2 text-center">

          </div>

          <div class="col-md-1 "></div>
        </div>

        <div class="row" style="margin-bottom:20px;margin-top:20px">
          <div class="col-md-1"></div>
            <div class="col-md-11">
                <h3 class="subtitle">Past</h3>
            </div>
        </div>

        <div class="row ">

          <div class="col-md-1 "></div>


                <div class="col-md-2 text-center">
            <a href="https://ca.linkedin.com/in/david-park-13728b89" target="_blank">
              <img src="/img/david.png" height="150" width="150" alt="profile" >
            </a>
            <p class="title name">David Park </p>
            <p>University of Waterloo, Co-op</p>
            <p>Virtual Reality</p>
            <p>davidp@ca.ibm.com</p>
          </div>

          <div class="col-md-2 text-center">
            <a href="https://www.linkedin.com/in/andrewfrolkin" target="_blank">
              <img src="/img/andrewF.png" height="150" width="150" alt="profile" >
            </a>
            <p class="title name">Andrew Frolkin</p>
            <p>University of Waterloo, Co-op</p>
            <p>iOS</p>
            <p>andrewf@ca.ibm.com</p>
          </div>




          <div class="col-md-2 text-center">

          </div>

          <div class="col-md-2 text-center">

          </div>

          <div class="col-md-2 text-center">

          </div>

          <div class="col-md-2 text-center">

          </div>

          <div class="col-md-1 "></div>

        </div>

      </div>

    </body>

    <script>
    $(document).ready(function(){


        // $( '.item' ).each(function( index ) {
        //     $(this).children("div").setAllToMaxHeight();
        //     // $('.item > div').setAllToMaxHeight();
        // });

    });
    </script>
</html>
