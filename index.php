
<!DOCTYPE html>
<html>
<head>
	<title>Scan QR Code</title>
</head>
<body>

	<form>
		<canvas id="scan"></canvas>
	</form>


	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/qrcodelib.js"></script>
	<script type="text/javascript" src="js/webcodecamjquery.js"></script>
	<script type="text/javascript">
		var data = {
			resultFunction: function(result) {
				var idp = result.code;
				console.log(idp);
			}
		};

		$("#scan").WebCodeCamJQuery(data).data().plugin_WebCodeCamJQuery.play();
	</script>



</script>

</body>
</html>