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
        <!-- Content -->
       
       <?php include('../resources/views/menuBar.blade.php');?>




                <div class="row">
                  <div class="col-md-4">
                    <h3 class="subtitle">Video Authentication / Validation</h3>
                  </div>
                  <div class="col-md-6"></div>
                  <div class="col-md-2 text-center">
                    <button type="button" class="btn btn-md btn-primary" data-toggle="modal" style="width:180px;text-align:left"><span class="glyphicon glyphicon-plus" onclick="iamreal.vfv(guid,response);"></span> Video Authentication</button>
                  </div>
                </div>

                <hr>

                <div class="row item">
                  <div class="col-md-4">
                    <a >
                    <img src="/resources/ibmnewsboard.png" style="width:75%;height:75%"  class="img-responsive" alt="News" data-toggle="modal" data-target="">
                    </a>
                  </div>
                    <div class="col-md-6">
                    <h4 class="title">IBM News Board App Coming Soon</h4>
                    <br>
                     <div class="wrapper">
                        <div class="small_div">
                        <p>This project is to digitalize paper-based news board. This digital wall is a combination of iPhone / Apple TV apps which enables IBMers to post and share news, questions, announcements, events, polls, etc.
                          The IBM News Board App will go to pilot in June or July.</p>
                        </div>
                        <a href="#" style="margin-bottom:15px;">Read more</a>
                      </div>
                      <div class="row">
                        <div class ="col-xs-4 profile">
                          
                        </div>
                      </div>
                  </div>
                    <div class="col-md-2 text-center">                    
                  </div>
                </div>

                <br>


                <div class="row">
                  <div class="col-md-4">
                    <h3 class="subtitle">Sample</h3>
                  </div>
                  <div class="col-md-6"></div>
                </div>
                <hr>

                <div class="row item">
                  <div class="col-md-4">
                    <a>
                    <img src="/resources/Volunteers.AR.jpeg" style="width:75%;height:75%" class="img-responsive" alt="Volunteer" data-toggle="modal" data-target="">
                    </a>
                  </div>
                    <div class="col-md-6">
                    <h4 class="title">Augmented Reality Research Group</h4>
                    <br>
                     <div class="wrapper">
                        <div class="small_div">
                        <p>We are actively looking for IBMers interested in the filed of Augmented Reality to expand our AR research groups.
                          The AR research group is focusing on discovery of AR use cases in different industries.
                          The volunteer will have opportunities to try/work state-of-the-art AR gadgets such as Microsoft Hololenses. <br><br> If you are:

<li>Graphic Designer familiar with 3D modelling or</li>
<li>C# Developer familiar with Unity framework   </li>
<li>Solution Designer interested in AR use cases</li></p>

<p>Please send us a note (mehranna@ca.ibm.com)</p>
                        </div>
                        <a href="#" style="margin-bottom:15px;">Read more</a>
                      </div>
                      <div class="row">
                        <div class ="col-xs-4 profile">
                          
                        </div>
                      </div>
                  </div>
                    <div class="col-md-2 text-center">                    
                  </div>
                </div>
                <br>


      </div>
</body>
 <script src="http://api.iamreal.me/apiscript/iamreal_vfv.js"></script>
 <script type="text/javascript">
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
