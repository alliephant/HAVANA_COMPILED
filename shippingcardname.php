<?php
	include_once 'afterlogin.php';
?>

<section class="main-container">
	<div class="main-wrapper">
		<!--to make it appear in the white border-->
		<div id="example1">
			<!--just to show that you're at main page-->
			<link rel="stylesheet" type="text/css" href="style.css">
			<table class="checkout">
				<tr>
				<th>ERROR 404: DETECTED</th>
				</tr>
			</table>

			<br/><br/>

			<form class="bye" method="POST">
					<label>Error Detected: Please retype your CARD NAME input. Only use letters (a-z,A-Z).</label>
					<br/><br/><br/><br/>

					<!--so once submitted will go back to catalogue-->
					<button type="submit" name="submit"><a href= "shipping.php">BACK</a></button>
			</form>
		
		</div>
	</div>
</section>

<?php
	include_once 'footer.php';
?>