<!-- LOGIN FORM -->
<div class="login-container">
	<div class="row">
		<div class="small-12 large-7 large-centered medium-7 medium-centered columns">

			<div class="login-form">
				<form method="post">
					<?= __('Email Address', true) ?>: <input type="text" name="username" size="50" />
					<?= __('Password', true) ?>: <input type="password" name="password" size="20" />
					<input type="submit" value="Login" />
				</form>
			</div>

		</div>
	</div>
</div>