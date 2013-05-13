<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<style>
		body {
			margin: 0px;
			padding: 0px;
		}
	</style>
</head>
<body>

<canvas id="lines" width="1024" height="800"></canvas>
<script>
	var canvas = document.getElementById('lines');
	var context = canvas.getContext('2d');

    {foreach $lines as $line}
      context.beginPath();
      	context.strokeStyle = '{$line.color}';
      	context.moveTo({$line.starting_point.x}, {$line.starting_point.y});
      	context.lineTo({$line.final_point.x}, {$line.final_point.y});
      	context.lineWidth = {$line.width};
      	context.stroke();
    {foreachelse}
      .. no results ..
    {/foreach}

</script>

<div>Proportion 1/{$proportion}</div>

</body>
</html>