<!-- LOGIN FORM -->
<div class="login-container">
    <div class="row">
        <div class="small-12 large-7 large-centered medium-7 medium-centered columns">

            <div class="login-form">
                <form method="post" action="http://siryshost.com/whmcs/dologin.php">
                    <?= __('Correo electrónico', true) ?>: <input type="text" name="username" size="50" />
                    <?= __('Contraseña', true) ?>: <input type="password" name="password" size="20" />
                    <input class="margin-botton" type="submit" value="<?= __('Iniciar sesión', true) ?>" />
                    <?= __('¿No posee una cuenta? <a href="http://siryshost.com/whmcs/register.php">Regístrese aquí!</a>') ?>
                </form>
            </div>

        </div>
    </div>
</div>