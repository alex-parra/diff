<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8" />
	<title>Quick Diff Online Tool</title>
	<script type="text/javascript" src="diff.js"> </script>
	<link rel="stylesheet" type="text/css" href="styles.css"/>
	<script>
		function hideshow() {
			if (document.getElementById('how_to_use').className=='hide')
				document.getElementById('how_to_use').className='show'
			else
				document.getElementById('how_to_use').className='hide';
		}

		function init() {
			document.getElementById('how_to_use').className='hide';
		}
	</script>
</head>
<body>
	<h1 style="clear:both;">An Online Tool to do a 'quick and dirty' diff of two text or code fragments</h1>

	<div style="clear:both;" id="wrapper">
		<form action="#" id="diffForm">
			<div class="clearfix">
				<p class="links">
					<label for="een">Left</label>
					<textarea name="een" id="een" cols="30" rows="10"></textarea>
				</p>
				<p class="rechts">
					<label for="twee">Right</label>
					<textarea name="twee" id="twee" cols="30" rows="10"></textarea>
				</p>
			</div>
			<p class="button"><input type="submit" class="awesome white" value="Compare" /></p>
		</form>
		<table>
			<thead>
				<tr>
					<th colspan="3">Output</th>
				</tr>
			</thead>
			<tbody id="res"></tbody>
		</table>
	</div>
</body>
</html>