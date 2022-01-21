<html>
<head>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){

$.ajax({
	url:'jsondata.json',
	dataType:'json',
	success:function(data) {
		for(var i=0; i<data.length;i++) {
			
			var row = $('<tr><td>'+data[i].zipcode+'</td><td>' + data[i].city+ '</td><td>' + data[i].county+'</td></tr>');
			$('#mytable').append(row);
		}
	},
	error: function(jqXHR, textStatus , errorThrown) {
		alert('error: ' +  textStatus + ' - ' + errorThrown);
	}
});
});
</script>
</head>
<body>
<table id="mytable">
<tr>
	<th>Zipcode</th>
	<th>City</th>
	<th>Country</th>
</tr>
</table>
</body>
</html>