<html>
<head>
<title>Upload Service - By: SAMI BETTAYEB</title>
<style type="text/css">
*{
	text-align: center;
}
#myform{
	background-color: #CCCCCC;
	width: 25%;
	outline: double;
}
#fichier{
	background-color: #0000FF;
	color: #FFFFFF;
}
#titre,#description{
	width: 90%;
}
#titre:focus,#description:focus{
	width: 90%;
	color:#FFFFFF;
	background-color: #CC0000;
	font-weight: bold;
	outline: double 3px #FFFFFF;
}
</style>
<script type="text/javascript" src='../JQuery/jquery-1.9.1.js'></script>
<script type="text/javascript">
/*function up(){
	$.ajax({
		type: 'REQUEST',
		url: 'reception.php',
		data: $('#myform').serialize(),
		success: function(msg){
			$('#show').html(msg);
		}
	});
}*/
$(document).ready(function(){
	var i=0;
	$('#ajout').click(function(){
		i++;
		$('#show_ajout').html($('#indice').attr('value'));
		$('#show_ajout').prepend("<input type='file' name='monfichier"+i+"' /><br />");
	});
/*	$('#env').click(function(){
		$.ajax({
			url: 'reception.php',
			type: 'POST',
			data: ({'iiii':5}),
			success:function(msg){
				$('#show').html(msg);
			}
		});
	});*/
});
</script>
</head>

<body>
	<div id='show'></div>
<form id="myform" action='reception.php' method='post' enctype='multipart/form-data'>
<input type='hidden' name='MAX_FILE_SIZE' value='1048576' />
<input type='hidden' name='indice' id='indice' value='0' />
<input type='file' name='monfichier[]' id='fichier' multiple /><br />
<div id="show_ajout"></div><input type='button' value='ajout' id='ajout' />
Titre du fichier: <input type='text' name='titre' id='titre' /><br />
Déscription du fichier: <textarea name='description' id='description' rows='4'></textarea><br />
<input id='env' type='submit' value='Envoyer' onclick='up()' />
</form>
</body>
</html>