<?php include('../resources/views/participants.blade.php');?>
<?php $mehran = 'Idea & Architect';
$mehranLinkedin = 'https://www.linkedin.com/in/mehrannajafi'; ?>
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

      <div id=”profiles”></div>
      <div id=”connections”></div>
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
        -->

       <?php include('../resources/views/menuBar.blade.php');?>


                <div class="row">
                  <div class="col-md-4">
                    <h3 class="subtitle">Featured Projects</h3>
                  </div>
                  <div class="col-md-6"></div>
                  <div class="col-md-2 text-center"><button type="button" class="btn btn-md btn-primary" data-toggle="modal" data-target="#myModal" style="width:150px;text-align:left"><span class="glyphicon glyphicon-plus"></span> Submit Idea</button></div>
                </div>
                <hr>
                <div class="row item social_computing"><br>
                <div class="col-md-4">
                  <div >
                   <img width="<?php echo $width ?>" height="<?php echo $height-10 ?>" src="img/ODIN_play.png" style="cursor:pointer" />
                  </div>
                  <div style="display:none" class="class=col-md-4">
                    <iframe width="<?php echo $width ?>" height="<?php echo $height ?>" src="" frameborder="0" allowfullscreen></iframe>
                  </div>
                </div>
                    <div class="col-md-6">
                      <h4 class="title">ODIN: Hiring Managers' Candidate Recruitment App</h4>
                      <p class="subtitle">Technologies: iOS, Node.js, CloudantDB</p>
                      <p class="subtitle">Industry: Consulting by Degrees, Technology, Recruitment</p>
                      <br>
                      <div class="wrapper">
                        <div class="small_div">
                          <p>
                            IBM wants to find the perfect candidates for the Consulting by Degrees program. It wants better visibility into their profiles and the feedback provided by other members on the team throughout the recruiting process. Overall, IBM managers and recruiters seek for a better experience in smart recruitment.

                          </p>
                                          <p><strong>Existing System's Problems</strong>: This new tool can be a ledger of value exchanged between IBMers.
                                            <ul>
                                              <li>Disjointed multi-channels pre-selection of candidates for interview (social event/web application/employee referral)</li>
                                              <li> Unclear selection criteria after social and networking events</li>
                                              <li>Candidates that don’t fit core competencies, resulting in a low success rate of interviews </li>
                                              <li> Communication loss between hiring managers and volunteers attending the recruitment events even for the same candidate</li>
                                              <li> Inconsistent and inaccurate feedback</li>
                                              <li> Loss of employee time constantly seeking updates</li>
                                            </ul></p>

                                          <p>
                                            An IBM recruitment manager, Ingrid is excited, this week is the official kick-off for CbD recruitment for the 2017 cohort. She wants to hire the best and brightest that fit with the IBM culture and will become great assets on client projects.
This year, Ingrid and her team will be using a mobile application to capture feedback and status of candidates and keep up-to-date with all news related to recruitment.
</p>

                                          <p><strong>For the Co-ops: Andrew, Chelsea, and Sonalee</strong> collaborate to construct an iOS application end-to-end (Frontend + Backend) on IBM Bluemix that is capable of all these new functionalities for the CbD program.
                                            <ul>
                                              <li>Ingrid will use the mobile application to create profiles for candidates who are referred by other IBMers. By capturing their basic information and LinkedIn profile, she can later provide feedback and follow the status of referrals through the recruitment process in one location,</li>
                                              <li>Ingrid will go to several campus events to promote the Consulting by Degrees program. At each event, candidates will be welcomed by IBM volunteers and asked to “check-in” using the application. Ingrid benefits is twofold: on one side she takes attendance for the event and on the other side, profiles are created for all the candidates attending the event.</li>
                                              <li>At each campus event, Ingrid can easily keep track of candidates she was interested in by searching for their name. The application will pop up the candidate profile where Ingrid can add tags and feedback that will be visible to other IBM team members. She can also quickly “Favorite” a candidate to follow their progression through the recruitment process.</li>
                                              <li>At the social event, Ingrid and the local team are focusing on assessing the fit of candidates. She is able to see the profiles of invited candidates before the social event. She is impressed with the quality of profiles.</li>
                                              <li>Using the mobile application during the IBM social, Ingrid can easily record her feedback into the application.</li>
                                              <li>She can choose to add tags to a profile or leave more detailed feedback where she assesses each candidate based on the core competencies desired for the Consulting by Degrees program.</li>
                                              <li>She can review the tags and rating added to a candidate profile as a they progress in the process.</li>
                                              <li>Interview time is valuable. To make the most of it, Ingrid looks at the candidates profile with notes from the their information session and social event. As part of the SAP practice, Ingrid is interviewing candidates that showed interest in joining the SAP team.</li>
                                              <li>In her mobile application she can see how a candidate was rated according to the list of pre-defined criteria. She can rate each candidate on those criteria and add notes directly in her app.</li>
                                              <li>After interviews, Ingrid and other interviewers have to make a selection. With the wealth of information they’ve collected throughout the process, they feel confident they will make informed choices .</li>
                                              <li>Managers can see top candidates for each Service Line. They discuss and agree on a final decision.</li>
                                              <li>Ingrid feels confident in their choice and looks forward to welcoming the 2017 cohort to the IBM family.</li>
                                            </ul>
                                            </p>

                                          <p><strong>Reference links</strong>:
                                            <ul>
                                          <li>Consulting by Degrees: <a target="_blank" href="http://www-935.ibm.com/services/us/gbs/consulting/careers/cbd/opportunities.html">http://www-935.ibm.com/services/us/gbs/consulting/careers/cbd/opportunities.html </a></li>
                                          <li>Consulting by Degrees Videos: <a target="_blank" href="http://www-05.ibm.com/employment/emea/consultingbydegrees/">http://www-05.ibm.com/employment/emea/consultingbydegrees/</a> </li>
                                          <li>Consulting by Degrees (Global Business Services): <a target="_blank" href="http://www-935.ibm.com/services/us/gbs/consulting/careers/consultingbydegrees/">http://www-935.ibm.com/services/us/gbs/consulting/careers/consultingbydegrees/</a></li>
                                          </ul>
                                          </p>
                                          <p>
                                            Odin is a widely revered god in Norse mythology. People associated Odin to knowledge, battle and death. Even though he wears a patch, his mystical eye allows him to see beyond time and space.
                                          </p>
<p>
  Just like Odin’s crows who bring him information from all around the realm, the app will empower hiring managers with the knowledge needed to make the right decisions, allowing them to hire the best talent available!
                                          </p>

                          </p>
                        </div><a href="#readMore" style="margin-bottom:15px;">Read more</a>
                      </div>
                        <div class="row">

                          <div class ="col-xs-8 profile">
                            <a href="https://ca.linkedin.com/in/a24choi" target="_blank">
                            <div class="col-xs-2 text-center" data-placement="bottom" data-toggle="tooltip"  title="Node.js Developer">
                              <img src="/img/andrew.png"  height="50" width="50" alt="profile" data-placement="top" data-toggle="tooltip"  title="Andrew Choi">
                            </div>
                            </a>
                            <a class= "display: inline;" href="https://ca.linkedin.com/in/chelsea-thiel-jones-679357a2" target="_blank">
                              <div class="col-xs-2 text-center" data-placement="bottom" data-toggle="tooltip"  title="iOS Developer">
                                <img src="/img/chelsea.jpg"  height="50" width="50" alt="profile" data-toggle="tooltip"  title="Chelsea Thiel-Jones">
                              </div>
                            </a>
                          <!-- </div> -->

                          <!-- <div class ="col-xs-5"> -->
                            <a class="display: inline;" href="https://www.linkedin.com/" target="_blank">
                             <div class="col-xs-2 text-center" data-placement="bottom" data-toggle="tooltip"  title="iOS Developer">
                               <img src="/img/sonalee.png"  height="50" width="50" alt="profile" data-toggle="tooltip"  title="Sonalee Shah">
                             </div>
                           </a>
                           <a class="display: inline;" href="https://www.linkedin.com/in/mehrannajafi" target="_blank">
                            <div class="col-xs-2 text-center" data-placement="bottom" data-toggle="tooltip"  title="Ideas & Architect">
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
                <div class="row item social_computing tv"><br>
                <div class="col-md-4">
                  <div onclick="this.nextElementSibling.style.display='block'; this.style.display='none'">
                   <img width="<?php echo $width ?>" height="<?php echo $height-10 ?>" src="img/newsboard_play.png" style="cursor:pointer" />
                  </div>
                  <div style="display:none" class="class=col-md-4">
                    <iframe width="<?php echo $width ?>" height="<?php echo $height ?>" src="https://www.youtube.com/embed/ad5IJ1Jr2Mo?autoplay=0&showinfo=0&controls=0&rel=0" frameborder="0" allowfullscreen></iframe>
                  </div>
                </div>
                    <div class="col-md-6">
                      <h4 class="title">IBM News Board App</h4>
                      <p class="subtitle">Technologies: iOS, appleTV</p>
                      <p class="subtitle">Industry: News</p>
                      <br>
                      <div class="wrapper">
                        <div class="small_div">
                          <p>
                                The News Board app is intended as a way to replace a traditional non-digital newsboard with a digital solution using an appleTV and an iPhone. User’s post content on the iPhone app which is then displayed in real time on an appleTV connected TV. News articles, interesting videos, announcements and more can be posted and viewed using the app.
                          </p>
                        </div><a href="#readMore" style="margin-bottom:15px;">Read more</a>
                      </div>
                        <div class="row">

                          <div class ="col-xs-8 profile">
                            <a href="https://ca.linkedin.com/" target="_blank">
                            <div class="col-xs-2 text-center" data-placement="bottom" data-toggle="tooltip"  title="Ideas & Architect">
                              <img src="/img/mehran.png"  height="50" width="50" alt="profile" data-placement="top" data-toggle="tooltip"  title="Mehran Najafi">
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
                              <div class="col-xs-2 text-center" data-placement="bottom" data-toggle="tooltip"  title="iOS Developer">
                                <img src="/img/dylant.png"  height="50" width="50" alt="profile" data-toggle="tooltip"  title="Dylan Trachsel">
                              </div>
                            </a>
                          <!-- </div> -->

                          <!-- <div class ="col-xs-5"> -->
                            <a class="display: inline;" href="https://www.linkedin.com/" target="_blank">
                             <div class="col-xs-2 text-center" data-placement="bottom" data-toggle="tooltip"  title="iOS Developer">
                               <img src="/img/zamiul.png"  height="50" width="50" alt="profile" data-toggle="tooltip"  title="Zamiul Haque">
                             </div>
                           </a>
                          <!-- </div> -->

                          <a class="display: inline;" href="https://www.linkedin.com/" target="_blank">
                           <div class="col-xs-2 text-center" data-placement="bottom" data-toggle="tooltip"  title="iOS Developer" >
                             <img src="/img/andrewF.png"  height="50" width="50" alt="profile" data-toggle="tooltip"  title="Andrew Frolkin">
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


                <div class="row item auth"><br>
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
                        </div><a href="#readMore" style="margin-bottom:15px;">Read more</a>
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
                <div class="row item ar_vr"><br>
                    <!-- <a href="#"> -->
                    <!-- <img src="/img/seatselection_play.png" class="img-responsive" alt="seatselection" data-toggle="modal" data-target="#videoModal"> -->
                    <!-- </a> -->
                  <div class="col-md-4">
                    <div onclick="this.nextElementSibling.style.display='block'; this.style.display='none'">
                     <img width="<?php echo $width ?>" height="<?php echo $height-30 ?>" src="img/seatselection_play.png" style="cursor:pointer" />
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
                        <a href="#readMore" style="margin-bottom:15px;">Read more</a>
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
                <div class="row item ar_vr"><br>
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
                          </div><a href="#readMore">Read more</a>
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

              <div class ="row item auth"><br>
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
                        </div><a href="#readMore" style="margin-bottom:15px;">Read more</a>

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

                <div class ="row item iot"><br>
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
                        </div><a href="#readMore" style="margin-bottom:15px;">Read more</a>
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

                <div class ="row item cognitive" data-index="3"><br>
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
                        </div><a href="#readMore" style="margin-bottom:15px;">Read more</a>
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



              <div class="row item"><br>
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
                 </div><a href="#readMore" style="margin-bottom:15px;">Read more</a>
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

                <div class="row item cognitive" data-index="2"><br>
                    <div class="col-md-4 vert_center">
                      <div onclick="this.nextElementSibling.style.display='block'; this.style.display='none'">
                       <img width="<?php echo $width ?>" height="<?php echo $height+0 ?>" src="img/newIdea_play.png" style="cursor:pointer" />
                      </div>
                      <div style="display:none" class="class=col-md-4">
                        <iframe width="<?php echo $width ?>" height="<?php echo $height ?>" src="https://www.youtube.com/embed/Gax_lKvA0Kk?autoplay=0&showinfo=0&controls=0&rel=0" frameborder="0" allowfullscreen></iframe>
                      </div>
                    </div>
                      <div class="col-md-6">
                      <h4 class="title">New Idea Submission Powered by Watson</h4>
                      <p class="subtitle">Technologies: Watson API, iOS</p>
                      <p class="subtitle">Industry: Technology</p>
                      <br>
                      <div class="wrapper">
                        <div class="small_div">
                      <p>The New Idea Submission by Watson mobilizes the Digital Innovation Lab idea submission using the
                      Watson Dialog, TextToSpeech and SpeechToText. The user is able to converse with Watson and provide
                      answers to the questions related to their idea. After the conversation, the user’s mail automatically appears
                      and is populated with the responses provided to send to the Digital Innovation Lab.</p>
                    </div><a href="#readMore" style="margin-bottom:15px;">Read more</a>
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

                  <div class="row item cognitive tv" data-index='1'><br>
                      <div class="col-md-4 vert_center">
                        <div onclick="this.nextElementSibling.style.display='block'; this.style.display='none'">
                         <img width="<?php echo $width ?>" height="<?php echo $height+0 ?>" src="img/family_play.png" style="cursor:pointer" />
                        </div>
                        <div style="display:none" class="class=col-md-4">
                          <iframe width="<?php echo $width ?>" height="<?php echo $height ?>" src="https://www.youtube.com/embed/9ObtbyM1QvM?autoplay=0&showinfo=0&controls=0&rel=0" frameborder="0" allowfullscreen></iframe>
                        </div>
                      </div>
                        <div class="col-md-6">
                        <h4 class="title">Family Banking TV app Powered by Watson</h4>
                        <p class="subtitle">Technologies: Watson API, iOS</p>
                        <p class="subtitle">Industry: Banking, Financial</p>
                        <br>
                        <div class="wrapper">
                          <div class="small_div">
                        <p>The Family Banking TV app helps families create and track their financial goals. Family members can have individual or joint accounts. For each account, a list of financial goals is displayed. After creating a goal, family members can track their progress with the app. We used IBM Watson Alchemy APIs to collect news relevant to family financial goals to provide them update on their goals. Family Banking app is also using IBM Watson Trade-off analytics to find and suggest the best goal options for each family's deposit.
                        </p>
                      </div><a href="#readMore" style="margin-bottom:15px;">Read more</a>
                          </div>
                          <div class="row">
                            <div class ="col-xs-8 profile">

                              <a class= "display: inline;" href="https://www.linkedin.com/in/mehrannajafi" target="_blank">
                                <div class="col-xs-2 text-center" data-placement="bottom" data-toggle="tooltip"  title="<?php echo $mehran ?>">
                                  <img src="/img/mehran.png"  height="50" width="50" alt="profile" data-toggle="tooltip"  title="Mehran Najafi">
                                </div>
                              </a>
                              <a href="" target="_blank">
                                <div class="col-xs-2 text-center" data-placement="bottom" data-toggle="tooltip"  title="Graphic Designer">
                                  <img src="/img/jeremy.png"  height="50" width="50" alt="profile" data-placement="top" data-toggle="tooltip"  title="Jeremy Leung">
                                </div>
                              </a>
                              <a href="" target="_blank">
                                <div class="col-xs-2 text-center" data-placement="bottom" data-toggle="tooltip"  title="TV App Developer">
                                  <img src="/img/zal.png"  height="50" width="50" alt="profile" data-placement="top" data-toggle="tooltip"  title="Zal Machado">
                                </div>
                              </a>
                              <a href="" target="_blank">
                                <div class="col-xs-2 text-center" data-placement="bottom" data-toggle="tooltip"  title="Watson Developer">
                                  <img src="/img/asim.png"  height="50" width="50" alt="profile" data-placement="top" data-toggle="tooltip"  title="Asim Raoof">
                                </div>
                              </a>
                              <a href="" target="_blank">
                                <div class="col-xs-2 text-center" data-placement="bottom" data-toggle="tooltip"  title="Developer">
                                  <img src="/img/sonalee.png"  height="50" width="50" alt="profile" data-placement="top" data-toggle="tooltip"  title="Sonalee Shah">
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
                    <!-- <div style="margin-bottom:15px; float: right;">SendGid</div> -->
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

            // $('.wrapper').find('a[href="#"]').on('click', function (e) {
            //     e.preventDefault();
            //     this.expand = !this.expand;
            //     $(this).text(this.expand?"Collapse":"Read more");
            //     $(this).closest('.wrapper').find('.small_div, .big_div').toggleClass('small_div big_div');
            //     $(this).closest('.wrapper').find('.profile_margin, .no_profile_margin').toggleClass('profile_margin no_profile_margin');
            // });
            $('.wrapper').find('a[href="#readMore"]').on('click', function (e) {
                e.preventDefault();
                this.expand = !this.expand;
                $(this).text(this.expand?"Collapse":"Read More");
                $(this).closest('.wrapper').find('.small_div, .big_div').toggleClass('small_div big_div');
                $(this).closest('.wrapper').find('.profile_margin, .no_profile_margin').toggleClass('profile_margin no_profile_margin');
            });
            $('.wrapper').find('a[href="#moreProjects"]').on('click', function (e) {
                e.preventDefault();
                this.expand = !this.expand;
                $(this).text(this.expand?"Show Less Projects":"Display More Projects");
                $(this).closest('.wrapper').find('.small_div, .big_div').toggleClass('small_div big_div');
                $(this).closest('.wrapper').find('.profile_margin, .no_profile_margin').toggleClass('profile_margin no_profile_margin');
            });
        });

        $('.expand-one').click(function(){
            $('.content-one').slideToggle('slow');
        });

    </script>
</html>
