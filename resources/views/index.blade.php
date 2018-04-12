<!DOCTYPE html>
<html>
<head>
	<title></title>

<script src="http://code.jquery.com/jquery-latest.js"></script>
<script>
$(function(){
    $('#num1').keyup(function(){
        alert(1);
    });
    
});
</script>
</head>
<body>

<form>
	<input type="text" name="num1" id="num1"><br>
	<input type="text" name="num2" id="num2">
	<button onclick="check()">Hey</button>
</form>


</body>
</html>
