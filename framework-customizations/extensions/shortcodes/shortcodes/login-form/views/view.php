<?php

if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * @var array $atts
 */
?>
<div class="wpcf7">
    <form name="loginform" id="loginform" action="<?php echo site_url() ?>/wp-login.php" method="post">
        <div class="row">
            <div class="col-sm-6">
                <p class="login-username">
                    <label for="user_login">Login</label>
                    <input type="text" name="log" id="user_login" class="form-control" placeholder="Username or e-mail">
                </p>
            </div>
            <div class="col-sm-6">
                <p class="login-password">
                    <label for="user_pass">Password</label>
                    <input type="password" name="pwd" id="user_pass" class="form-control" placeholder="Password">
                </p>
            </div>
        </div>

        <p class="login-remember"><label><input name="rememberme" type="checkbox" id="rememberme" value="forever" tabindex="90"/> Remember me</label></p>

        <p class="login-submit">
            <input type="submit" name="wp-submit" id="wp-submit" class="btn btn-primary" value="Log in" tabindex="100"/>
            <input type="hidden" name="redirect_to" value="<?php the_permalink( 5275 ); ?>"/>
        </p>

    </form>
</div>
