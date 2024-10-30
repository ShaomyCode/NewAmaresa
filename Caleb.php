<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="caleb.css">
</head>
<body>
	<!-- BUTTON -->
	<div class="Float-button-container">
		<button onclick="OpenModal()" onclick="CloseHouse()" class="btn">
			<i class="fa-regular fa-handshake"></i> Begin Virtual Tour
		</button>
	</div>	
	<!-- MODAL -->
	<dialog id="Tour-Modal" class="dialog">
		<button onclick="CloseModal()" class="closebtn">X</button>
		<div class="iframe-container" id="iframe-container">
			<!-- Embed element will be dynamically created -->
		</div>
	</dialog>

	<script>
		function OpenModal() {
			const modal = document.getElementById('Tour-Modal');
			const iframeContainer = document.getElementById('iframe-container');

        // Remove any existing embed element
			const existingEmbed = document.getElementById('3DHouseEmbed');
			if (existingEmbed) {
				iframeContainer.removeChild(existingEmbed);
			}

        // Recreate the embed element with the same properties
			const newEmbed = document.createElement('embed');
			newEmbed.id = '3DHouseEmbed';
			newEmbed.type = 'text/html';
			newEmbed.src = 'Alexandria/index.html';
			newEmbed.width = '960';
			newEmbed.height = '600';
			iframeContainer.appendChild(newEmbed);

        // Show the modal
			modal.classList.add('show');
		}

		function CloseModal() {
			const modal = document.getElementById('Tour-Modal');
			modal.classList.remove('show');
		}
	</script>

</body>
</html>