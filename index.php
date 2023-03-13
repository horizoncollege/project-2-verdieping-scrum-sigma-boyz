<!DOCTYPE html>
<html>

<head>
	<title>Code highlighting form</title>
	<!-- Voeg hier eventuele CSS-bestanden toe -->
</head>

<body>
	<form id="code-form">
		<label for="code-input">Voer hier de code in:</label>
		<textarea id="code-input" name="code"></textarea>
		<button type="button" id="submit-button">Verstuur code</button>
	</form>

	<!-- Voeg hier eventuele JavaScript-bestanden toe -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.2.0/highlight.min.js"></script>
	<script>
		$(document).ready(function() {
			$('#submit-button').click(function() {
				var code = $('#code-input').val();
				if (code.trim() == '') {
					alert('Voer een code in.');
					return;
				}
				var form = $('<form>', {
					'action': 'pagina2.php',
					'method': 'POST'
				}).append($('<input>', {
					'type': 'hidden',
					'name': 'code',
					'value': code
				}));
				$('body').append(form);
				form.submit();
			});
		});
	</script>
	<script>
		// Highlight de code
		$(document).ready(function() {
			var code = $('#code').text()
			hljs.highlight('html', code);
			hljs.highlight('css', code);
			hljs.highlight('php', code);
			hljs.highlight('sql', code);
		});
	</script>
</body>

</html>