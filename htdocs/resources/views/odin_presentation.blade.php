<html>
<script type="text/javascript">
function detectBrowser()
{
    var slashIndex = window.location.href.lastIndexOf("/");
    var cropped = window.location.href.slice(0,slashIndex+1);
    // window.location.replace("/resources/");
}
</script>
<body bgcolor="black" onload="detectBrowser()">
</body>
</html>
