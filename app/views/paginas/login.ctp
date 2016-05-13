<!-- LOGIN FORM -->
<div class="login-container">
    <div class="row">
        <div class="small-12 large-7 large-centered medium-7 medium-centered columns">

            <div class="login-form">
                <form method="post">
                    <?= __('Correo electrónico', true) ?>: <input type="text" name="username" size="50" />
                    <?= __('Contraseña', true) ?>: <input type="password" name="password" size="20" />
                    <input type="submit" value="<?= __('Iniciar sesión', true) ?>" />
                </form>
            </div>

        </div>
    </div>
</div>