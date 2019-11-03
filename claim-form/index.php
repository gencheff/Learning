<!DOCTYPE html>
<html>
<head>
	<title>Claim Form</title>
	<link rel="stylesheet" type="text/css" href="form.css">
</head>
<body>
	<div class="wrapper">
		<section class="contact">
			<div class="contact__head">
				<h2>Claim Form</h2>
			</div>

			<div class="contact__body">
				<form class="form">
					<div class="form__row">
						<div class="form__label">
							<label for="first-name">First Name</label>  
						</div>

						<div class="form__controls">
							<input type="text" id="first-name" name="first-name">
						</div>
					</div>

					<div class="form__row">
						<div class="form__label">
							<label for="last-name">Last Name</label>
						</div>

						<div class="form__controls">
							<input id="last-name" type="text" name="last-name">
						</div>
					</div>

					<div class="form__button">
						<input type="submit" name="submit" value="Submit">
					</div>
				</form>	
			</div>

			<div class="contact__foot">
				<h2>This is where the message goes!</h2>
			</div>
		</section>
	</div>
</body>
</html>