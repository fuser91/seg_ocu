<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form id="formlg" >
	<input type="text" name="usuariolg">	
	<input type="text" name="passlg">
	<input type="submit" name="botonlg">
</form>
</body>
<script type="js/main.js"></script>
</html>

<script type="text/javascript">
	
	jQuery(document).on('submit','#formlg', function(event) {
	event.preventDefault();

jQuery.ajax({
	url:'main_app/login.php';
	type: 'POST'
	dataType: 'json',
	data: $(this).serialLize(),
	beforeSend: function(){

	}
})

.done(function(respuesta) {
	console.log(respuesta);
})
.fail(function(resp){
	console.log(resp.responseText);
})
.allways(function(){
	console.log("complete";)
});
});
	
</script>