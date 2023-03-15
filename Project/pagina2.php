<!DOCTYPE html>
<html>

<head>
	<title>Highlighted code</title>
	<!-- Voeg hier eventuele CSS-bestanden toe voor het highlighten van code -->
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.2.0/styles/default.min.css">
</head>

<body>
<?php

header('Refresh:5; url=Sendconfirm.php');
?>
	<?php
	// Haal de code op die verstuurd is vanaf de eerste pagina
	if (isset($_POST['code'])) {
		$code = $_POST['code'];
	} else {
		echo 'Geen code ontvangen.';
		exit;
	}
	?>

	<!-- Highlight de code -->
	<pre><code id="code" class="html"><?php echo htmlspecialchars($code); ?></code></pre>

	<!-- Voeg hier eventuele JavaScript-bestanden toe -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.2.0/highlight.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.2.0/languages/css.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.2.0/languages/php.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.2.0/languages/sql.min.js"></script>
	<script>
		// Initialiseer de highlighter
		hljs.highlightAll();
	</script>
</body>

</html>