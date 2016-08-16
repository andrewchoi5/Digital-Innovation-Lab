<!DOCTYPE html>
<html id="html">
    <head>
        <title>IBM Digital Innovation Lab - Groups</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="originalStyle.css">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <link rel="stylesheet" href="originalStyle.css" />
        <link rel="stylesheet" href="css/groupsBlade.css" />
        <link rel="stylesheet" href="windows8-animations/css/demo-styles.css" />
        <link rel="stylesheet" type="text/css" href="my-icons-collection/font/flaticon.css">
        <style type="text/css">
        </style>
    </head>
    <body id="body">
      @if (Session::has('message'))
      <div class="alert alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>{{ Session::get('message') }}
      </div>
      @endif
      <div class="container">

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

        <?php include('../resources/views/menuBar.blade.php');?>
      <a href="/groups" style="text-align:left; font-size:140%; display: none" id="returnCategories">Show</a>
      <strong><p style="text-align:center; font-size:140%; display: none" id="categoryTitle">categoryTitle</p></strong>

<div class="demo-wrapper" id="demo-wrapper"><!--===============================Start Demo====================================================-->
  <div class="row">
      <div class="col-md-12">
        <!-- <script type="IN/MemberProfile" data-id="https://www.linkedin.com/in/jeffweiner08" data-format="inline"></script>
        <script type="IN/MemberProfile" data-id="https://www.linkedin.com/in/a24choi" data-format="inline"></script>
        <script type="IN/MemberProfile" data-id="https://www.linkedin.com/in/mehrannajafi" data-format="inline"></script> -->

        <p style="text-align:left; font-size:180%">Category  <span style="float:right; font-size:54%"><script type="in/Login"></script></span></p>

      </div>
  </div>
  <hr>
  <div class="s-page random-restored-page"><!-- classnames for the pages should include: 1) type of page 2) page name-->
    <h2 class="page-title">Some minimized App</h2>
    <div class="close-button s-close-button">x</div>
  </div>

  <div class="s-page custom-page">
    <h2 class="page-title">Type 2 </h2>
    <div class="close-button s-close-button">x</div>
  </div>
  <div class="r-page random-r-page">

    <div class="page-content">
      <h2 class="page-title">App Screen</h2>
      <p>Chew iPad power co</p>
    </div>

    <div class="close-button r-close-button">x</div>
  </div>
<!--each tile should specify what page type it opens (to determine which animation) and the corresponding page name it should open-->
  <div class="dashboard clearfix">
    <ul class="tiles">
      <div class="col1 clearfix">
        <li class="tile tile-big tile-1 slideTextLeft" data-page-type="" data-page-name="">
          <div>
            <img src="/img/icon/robot-design.png" style="width:110px; height:110px; margin-top:15px; margin-right:500px;" align="left"></img>
            <p style="position:absolute; bottom: 40px; right: 120px; width:100%; text-align: center">AI</p></div>
           <div><p><a class="noUnderline" href="/" target="_blank">
              <a href='#' id='ai' title='Click to explore' style='text-decoration: none;' >Explore AI</a>
            </a></p>
          </div>
        </li>
        <li class="tile tile-small tile tile-2 slideTextRight" data-page-type="r-page" data-page-name="random-r-page">
          <div><p class="flaticon-education-chart"></p></div>
          <div><p>API Economy</p></div>
        </li>
        <li class="tile tile-small last tile-2 slideTextRight" data-page-type="" data-page-name="" id='tv' onclick='onSelectCategory("tv");'>
          <div>

            <a href='#' id='tv' title='Click to explore' style='text-decoration: none;' onclick='onSelectCategory("");'>
              <p class="flaticon-technology" style="position:absolute; bottom: 90px; right: 0px; width:100%;"></p>
            </a>
          </div>
          <div><p>TV Apps</p></div>
        </li>

        <li class="tile tile-big tile-6 slideTextLeft" data-page-type="" data-page-name="" id='auth' onclick='onSelectCategory("auth");'>
          <div><img src="/img/icon/fingerprints.png" style="width:90px; height:90px; margin-top:27px; margin-right:500px; " align="left"></img>
            <p style="position:absolute; bottom: 40px; right: 105px; width:100%; text-align: center; font-size:25px">Authentication</p></div>
          <div><p><a href='#' id='auth' title='Click to explore' style='text-decoration: none;' onclick='onSelectCategory("");'>Explore Authentication</a></p></div>
        </li>
      </div>
      <div class="col2 clearfix">

        <li class="tile tile-big tile-6 slideTextLeft" data-page-type="" data-page-name="" id='iot' onclick='onSelectCategory("iot");'>
          <div><img src="/img/icon/IoT.png" style="width:90px; height:90px; margin-top:27px; margin-right:500px; " align="left"></img>
            <p style="position:absolute; bottom: 40px; right: 120px; width:100%; text-align: center; font-size:25px">IoT</p></div>
          <div><p>
            <a href='#' id='iot' title='Click to explore' style='text-decoration: none;' onclick='onSelectCategory("");'>Internet of Things</a>
          </p></div>
        </li>


        <li class="tile tile-big tile-5 slideTextLeft" data-page-type="" data-page-name="">
          <div><img src="/img/icon/smart-car.png" style="width:100px; height:100px; margin-top:22px; margin-right:500px; " align="left"></img>
            <p style="position:absolute; bottom: 40px; right: 100px; width:100%; text-align: center; font-size:25px">Connected Cars</p></div>
          <div><p>#Mojio</p></div>
        </li>

        <li class="tile tile-big tile-1 slideTextLeft" data-page-type="" data-page-name="" id='' onclick='onSelectCategory("social_computing");'>
          <div><img src="/img/icon/social-media-cloud.png" style="width:85px; height:85px; margin-top:25px; margin-right:500px;" align="left"></img>
            <p style="position:absolute; bottom: 40px; right: 100px; width:100%; text-align: center">Social Computing</p></div>
          <div><p>
            <a href='#' id='social_computing' title='Click to explore' style='text-decoration: none;' onclick='onSelectCategory("");'>Explore Social Computing</a>
          </p></div>
        </li>
      </div>

      <div class="col3 clearfix">

        <li class="tile tile-big tile-5 slideTextLeft" data-page-type="" data-page-name="" id='' onclick='onSelectCategory("ar_vr");'>
          <div><img src="/img/icon/virtual-reality.png" style="width:85px; height:85; margin-top:25px; margin-right:500px; margin-left:10px;"></img>
            <p style="position:absolute; bottom: 40px; right: 115px; width:100%; text-align: center; font-size:25px">AR + VR</p></div>
          <div><p>
            <a href='#' id='ar_vr' title='Click to explore' style='text-decoration: none;' onclick='onSelectCategory("");'>Explore AR + VR</a>
          </p></div>
        </li>

        <li class="tile tile-big tile-1 slideTextLeft" data-page-type="" data-page-name="" id='' onclick='onSelectCategory("wearables");'>
          <div><p style="position:absolute; bottom: 44px; right: 85px;  text-align: center">
            <span class="flaticon-smartwatch"  ></span>Wearables</p></div>
          <div><p>
            <a href='#' id='wearables' title='Click to explore' style='text-decoration: none;' onclick='onSelectCategory(this.id);'>Explore Wearables</a>
          </p></div>
        </li>
        <!--
          <div><p><span class="icon-skype"></span>Skype</p></div>
          <div><p>Make a Call</p></div> -->

        <!--Tiles with a 3D effect should have the following structure:
            1) a container inside the tile with class of .faces
            2) 2 figure elements, one with class .front and the other with class .back-->
        <li class="tile tile-big tile-6 slideTextLeft" data-page-type="" data-page-name="" id='cognitive' onclick='onSelectCategory("cognitive");'>
          <div><img src="/img/icon/Cognitive.png" style="width:110px; height:110px; margin-top:15px; margin-right:500px; " align="left"></img>
            <p style="position:absolute; bottom: 40px; right: 122px; width:100%; text-align: center; font-size:25px">Cognitive</p></div>
          <div><p><a href='#' id='cognitive' title='Click to explore' style='text-decoration: none;' onclick='onSelectCategory("");'>Cognitive</a></p></div>
        </li>
      </div>
    </ul>
  </div><!--end dashboard-->
</div><!--====================================end demo wrapper================================================-->

      <div class="container" id="container">
        <div class="row" id="people">
            <div class="col-md-12">
                <!-- <p class="subtitle alighleft">People  </p> -->
                <!-- <p class="subtitle alignright" align="right">Click on the profile image to get redirected to LinkedIn profile.</p> -->

              <p style="text-align:left; font-size:180%">People<span style="float:right; font-size:54%">*Click on the profile image to get redirected to LinkedIn profile.</span></p>
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

          <div class="col-md-2 text-center" >
              <a href="/mahmoodashek" target="_blank" >
              <img src="/img/ashek.png" height="150" width="150" alt="profile" >
            </a>
            <p class="title name">Mahmood (M.S.)</p>
            <p class=" name">Ashek</p>
            <p>Executive Sponsor <a href="mailto:mashek@ca.ibm.com?Subject=IBM%20Innovation%20Lab" target="_blank">mashek@ca.ibm.com</a>
            <a href="https://ca.linkedin.com/in/msashek" target="_blank">LinkedIn Profile</a></p>
          </div>

          <div class="col-md-2 text-center">
            <a href="/mehrannajafi" target="_blank">
              <img src="/img/mehran.png" height="150" width="150" alt="profile" >
            </a>
            <p class="title name">Mehran</p>
            <p class="name">Najafi, PhD</p>
            <p class="title">Lab Lead,</p>
            <p>Solution Architect
            <a href="mailto:mehranna@ca.ibm.com?Subject=IBM%20Innovation%20Lab" target="_blank">mehranna@ca.ibm.com</a>
            <a href="https://www.linkedin.com/in/mehrannajafi" target="_blank">LinkedIn Profile</a>
          </p>
          </div>

          <div class="col-md-2 text-center">
            <a href="/subashan" target="_blank">
              <img src="/img/subashan.png" height="150" width="150" alt="profile" >
            </a>
            <p class="title name">Subashan</p>
            <p class="name">Maheswaramoorthy</p>
            <p class="title">Solution Architect</p>
            <p>Co-op Coordinator
            <a href="mailto:subashan@ca.ibm.com?Subject=IBM%20Innovation%20Lab" target="_blank">subashan@ca.ibm.com</a>
            <a href="https://ca.linkedin.com/in/subashanm" target="_blank">LinkedIn Profile</a></p>
          </div>

          <div class="col-md-2 text-center">
            <a href="/imadobeid" target="_blank">
              <img src="/img/imad.png" height="150" width="150"  alt="profile" >
            </a>
            <p class=" name">Imad Obeid </p>
            <p>Solution Architect
            <a href="mailto:imad@ca.ibm.com?Subject=IBM%20Innovation%20Lab" target="_blank">imad@ca.ibm.com</a>
            <a href="https://ca.linkedin.com/in/imad-m-obeid-meng-pmp-46866734" target="_blank">LinkedIn Profile</a></p>
          </div>

           <div class="col-md-2 text-center">
            <a href="/radubolboceanu" target="_blank">
              <img src="/img/radu.png" height="150" width="150" alt="profile" >
            </a>
            <p class=" name">Radu Bolboceanu </p>
            <p>Graphic Designer
            <a href="mailto:radub@ca.ibm.com?Subject=IBM%20Innovation%20Lab" target="_blank">radub@ca.ibm.com</a>
            <a href="https://ca.linkedin.com/in/radu-bolboceanu-07aa2244" target="_blank">LinkedIn Profile</a></p>
          </div>

          <div class="col-md-1 "></div>
        </div>


        <div class="row ">
          <div class="col-md-1 "></div>

          <div class="col-md-2 text-center">
            <a href="/jeremyleung" target="_blank">
              <img src="/img/jeremy.png" height="150" width="150" alt="profile" >
            </a>
            <p class=" name">Jeremy Leung</p>
            <p>Graphic Designer
            <a href="mailto:leung@ca.ibm.com?Subject=IBM%20Innovation%20Lab" target="_blank">leung@ca.ibm.com</a>
            <a href="https://ca.linkedin.com/in/jeremyleung1" target="_blank">LinkedIn Profile</a></p>
          </div>

          <div class="col-md-2 text-center">
            <a href="/olivermerk" target="_blank">
              <img src="/img/oliver.png" height="150" width="150" alt="profile">
            </a>
            <p class=" name">Oliver Merk</p>
            <p>Developer & Architect
            <a href="mailto:merko@ca.ibm.com?Subject=IBM%20Innovation%20Lab" target="_blank">merko@ca.ibm.com</a>
            <a href="https://ca.linkedin.com/in/olivermerk" target="_blank">LinkedIn Profile</a></p>
          </div>

          <div class="col-md-2 text-center">
            <a href="/andrewchoi" target="_blank">
              <img src="/img/andrew.png" height="150" width="150" alt="profile" >
            </a>
            <p class="title name">Andrew Choi </p>
            <p>uWaterloo, Co-op</p>
            <p>iOS, Android, IoT
            <a href="mailto:andrewchoi5@hotmail.com?Subject=IBM%20Innovation%20Lab" target="_blank">andrewchoi5@hotmail.com</a>
            <a href="https://www.linkedin.com/in/a24choi" target="_blank">LinkedIn Profile</a></p>
          </div>

          <div class="col-md-2 text-center">
            <a href="/chelseathieljones" target="_blank">
              <img src="/img/chelsea.jpg" height="150" width="150" alt="profile" >
            </a>
            <p class="title name">Chelsea Thiel-Jones</p>
            <p>uWaterloo, Co-op</p>
            <p>iOS Developer
            <a href="mailto:thielj@ca.ibm.com?Subject=IBM%20Innovation%20Lab" target="_blank">thielj@ca.ibm.com</a>
            <a href="https://www.linkedin.com/in/chelsea-thiel-jones-679357a2" target="_blank">LinkedIn Profile</a></p>
          </div>

            <div class="col-md-2 text-center">
            <a href="/dylantrachsel" target="_blank">
              <img src="/img/dylant.png" height="150" width="150" alt="profile" >
            </a>
            <p class="title name">Dylan Trachsel</p>
            <p>uWaterloo, Co-op</p>
            <p>iOS Developer
            <a href="mailto:dylantrachsel@gmail.com?Subject=IBM%20Innovation%20Lab" target="_blank">dylantrachsel@gmail.com</a>
            <a target="_blank">LinkedIn Profile</a></p>
          </div>


        </div>

        <div class="row ">
          <div class="col-md-1 "></div>


          <div class="col-md-2 text-center">
            <a href="/sonaleeshah" target="_blank">
              <img src="/img/sonalee.png" height="150" width="150" alt="profile" >
            </a>
            <p class="title name">Sonalee</p>
            <p>UBC, Co-op</p>
            <p>iOS Developer
            <a href="mailto:sonaleeshah1@gmail.com?Subject=IBM%20Innovation%20Lab" target="_blank">sonaleeshah1@gmail.com</a>
            <a href="https://www.linkedin.com/in/sonaleeshah" target="_blank">LinkedIn Profile</a></p>
          </div>



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
            <a href="/davidpark" target="_blank">
              <img src="/img/david.png" height="150" width="150" alt="profile" >
            </a>
            <p class="title name">David Park </p>
            <p>uWaterloo, Co-op</p>
            <p>Virtual Reality
            <a href="mailto:davidp@ca.ibm.com?Subject=IBM%20Innovation%20Lab" target="_blank">davidp@ca.ibm.com</a>
            <a href="https://ca.linkedin.com/in/david-park-13728b89" target="_blank">LinkedIn Profile</a></p>
          </div>
          <div class="col-md-2 text-center">
            <a href="/andrewfrolkin" target="_blank">
              <img src="/img/andrewF.png" height="150" width="150" alt="profile" >
            </a>
            <p class="title name">Andrew Frolkin</p>
            <p>uWaterloo, Co-op</p>
            <p>iOS <br>
            <a href="mailto:andrewf@ca.ibm.com?Subject=IBM%20Innovation%20Lab" target="_blank">andrewf@ca.ibm.com</a>
            <a href="https://www.linkedin.com/in/andrewfrolkin" target="_blank">LinkedIn Profile</a></p>
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
        <hr>
        <br><br>
        <!-- <iframe src="https://embed.spotify.com/?uri=spotify%3Aartist%3A3cjEqqelV9zb4BYE3qDQ4O" width="300" height="380" frameborder="0" allowtransparency="true"></iframe> -->

      </div>
      </div>
    </body>
    <script src="collapse.js"></script> <!-- justl eave it -->

    <script>
    function onSelectCategory(passedID){
         $("#demo-wrapper").load("index.php ." + passedID, function() {
           $.getScript('collapse.js', function() { //leave it
            });
         });
        // $("#demo-wrapper").load("index.php ." + passedID);
        // $.getScript('collapse.js');

        // $("#demo-wrapper").on("load", function() {
            // console.log('OKEY DOKEY');
        // });
         var title = "";
         if(passedID == "tv") title = "TV Applications";
         if(passedID == "auth") title = "Authentication";
         if(passedID == "iot") title = "Internet of Things";
           if(passedID == "social_computing") title = "Social Computing";
         if(passedID == "ar_vr") title = "Artificial Reality + Virtual Reality";
         if(passedID == "wearables") title = "Wearables";
         if(passedID == "cognitive") title = "Cognitive";
         document.getElementById("container").innerHTML = "";
         document.getElementById("returnCategories").style.display = "";
         document.getElementById("returnCategories").innerHTML = "Other Projects";
         document.getElementById("categoryTitle").style.display = "";
         document.getElementById("categoryTitle").innerHTML = title;
    }
    </script>
    <script type="text/javascript" src="">
      api_key:   abcdefg
      onLoad:    OnLinkedInFrameworkLoad
      authorize: true
      scope: r_basicprofile r_emailaddress w_share rw_company_admin

      // credentials_cookie: true
      // credentials_cookie_crc: true
      // lang:      [LANG_LOCALE]
    </script>
    <script>
      function OnLinkedInFrameworkLoad() {
        // IN.ENV.js.scope = new Array();
        // IN.ENV.js.scope[0] = "r_emailaddress";
        // IN.User.authorize();
        IN.Event.on(IN, "auth", OnLinkedInAuth);
      }
      function OnLinkedInAuth() {
        // IN.API.Profile("me").fields("firstName", "lastName", "industry", "location:(name)", "picture-url", "headline", "summary", "num-connections", "public-profile-url", "distance", "positions", "email-address", "educations", "date-of-birth").result(ShowProfileData);
      }
      function ShowProfileData(profiles) {
        var member = profiles.values[0];
        // var id = member.id;
        var id = member.emailAddress;
        var id = member.summary;
        var id = member.positions.values[0].summary;
        console.log(profiles);
        var firstName = member.firstName;
        var lastName = member.lastName;
        var photo = member.pictureUrl;
        var headline = member.headline;
        // document.getElementById("").innerHTML = headline + "<br>"+ id + "<br>"+ firstName +"<br>"+ lastName + "<br>" + photo;
     }
  </script>


</html>
