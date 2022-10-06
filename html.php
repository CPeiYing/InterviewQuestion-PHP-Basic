<!DOCTYPE html>
<html>
<body>

<div>
<form>
  <!-- display label -->
  <label id="name">User Name: </label> 
  <!-- allow user to input text  -->
  <input type="text" id="userName" style="padding:8px;"><br><br>
  <!-- submit button -->
  <input type="button" value="Submit" onclick="post();" style="background-color:green;color:white; padding: 6px 30px;margin: 0px 160px;text-align:left;">
 
<br>
<br>
</form>
<!-- error message -->
<div id ="result" style = "color:green;font-family:sans-serif;" ></div>
<div id ="resu" style = "color:green;font-family:sans-serif;" >Key in username and click submit</div>
</div>
</body>
<!-- link to javascript -->
<script type="text/javascript" src="verify_ajax.js"></script>


</html>


