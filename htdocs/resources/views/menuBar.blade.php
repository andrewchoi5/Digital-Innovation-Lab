<script src = "moment.js"></script>
<div class="row ">
  <div class="col-md-12 header">
    <a href="/">
      <img src="/img/icon/dil.svg" id="mainImg" title="IBM Corporation: Digital Innovation Laboratory" class="img-responsive" style="width:18%; length:18%" alt="IBM_logo" >
    </a>
    <div class="menu row">
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li>
            <a href="/" style="color:#DDDEE0">Projects</a>
          </li>
          <li>
            <a href="/groups" style="color:#DDDEE0">Groups</a>
          </li>
          <li>
            <a href="/ideas" style="color:#DDDEE0">Ideas</a>
          </li>
          <li>
            <a href="/proposals" style="color:#DDDEE0">Proposals</a>
          </li>
          <li>
            <a href="/news" style="color:#DDDEE0">News</a>
          </li>
        </ul>
        <h5 style="margin:0; color:#DDDEE0" align="right">Innovations that matter. &nbsp;&nbsp;&nbsp;</h5>
        <h5 style="margin:0; color:#DDDEE0" align="right" id='time'></h5>
      </div>
    </div>
  </div>
</div>
<script>
document.getElementById("time").innerHTML = moment().format('MMMM Do YYYY') + "&nbsp; &nbsp; &nbsp;";
</script>
