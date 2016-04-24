<!--  CONTACT CONTENT  -->
<div class="contact-section">
	<div class="row">
		<div class="small-12 large-4 medium-4 columns">
			<p><?= __("En SirysHost estamos para ayudarte, en caso de presentar tener preguntas no dudes en enviarnos tu mensaje y te daremos respuesta con la mayor brevedad posible.", true) ?></p>

			<div class="contact-details">
				<h4><?= __('SirysHost', true) ?></h4>
				<ul>
					<li><span><?= __('Caracas', true) ?></span>
						<?= __('Venezuela', true) ?></li>
					<li>+58 0212 6820211</li>
					<li><a href="" title="">info@siryshost.com</a></li>
				</ul>
			</div>
		</div>
		<div class="small-12 large-8 medium-8 columns">
			<div id="gmap">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15692.567171420465!2d-66.85551146186523!3d10.48948663936514!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2sve!4v1459053961144"></iframe>
			</div>

			<div id="sendstatus"></div>
			<div id="contactform">
				<form method="post" action="sendmail.php">

					<p><label for="name"><?= __('Nombre', true) ?>:*</label> <input type="text" name="name" id="name" tabindex="1" /></p>
					<p><label for="email"><?= __('Correo electónico', true) ?>:*</label> <input type="text" name="email" id="email" tabindex="2" /></p>
					<p><label for="comments"><?= __('Mensaje', true) ?>:*</label> <textarea name="comments" id="comments" cols="12" rows="6" tabindex="3"></textarea></p>
					<p><input type="submit" class="button radius medium" name="submit" id="submit" value="submit" tabindex="4" /></p>

				</form>
			</div>

		</div>
	</div>
</div>

<!--  END OF CONTACT CONTENT  -->