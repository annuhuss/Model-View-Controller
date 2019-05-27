<!-- 
<view.php>
Display the response
-->

<!DOCTYPE html>
<html>
<head><title>Response</title></head>
<body>
<?php
print<<<__RES
	<h1 style="color:$color;"> Access $response </h1>
__RES;
?>
</body>
</html>