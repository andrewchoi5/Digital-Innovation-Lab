<!DOCTYPE html>
<html>
    <head>
        <title>Coop at IBM</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script src=”https://ajax.googleapis.
com/ajax/libs/jquery/1.11.0/jquery.min.js”>
</script>
    </head>
    <body>
      @if (Session::has('message'))
    	<div class="alert alert-success alert-dismissable">
    		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>{{ Session::get('message') }}
    	</div>

    @endif
        <div class="container">
          <div class="row">
        		<div class="col-md-12">
              <div class="well">
                  <h1 class="intro" style="margin-bottom:0px;">IBM</h1>
                  <h3 class="subtitle">CO-OP RESEARCH <br> LAB</h3>

                </div>
            </div>

            <div class="col-md-12" style="margin-bottom:20px;">
                <a href="mailto:kjparkdavid@gmail.com" target="_blank"><span class="btn btn-md btn-primary pull-right">Submit Idea</span></a>
            </div>
            <div class="col-md-12">
              <table class="table table-striped">
                <tr>
                  <th>
                    <div align="center" class="embed-responsive embed-responsive-16by9">
                        <video class="embed-responsive-item" controls>
                            <source src="/video/Demo Video.mp4" type="video/mp4">
                        </video>
                    </div>
                    </th>
                  <th>Seat Selection in Virtual Reality (1:40)</th>
                  <th><span class="btn btn-md btn-warning">Try It</span></th>
                </tr>
                <tr>
                  <th>Thumbnail</th>
                  <th>Rollercoaster Virtual Reality</th>
                  <th><span class="btn btn-md btn-warning">Try It</span></th>
                </tr>
              </table>
            </div>
        </div>
        </div>
    </body>
</html>
