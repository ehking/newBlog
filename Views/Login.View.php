<?php require_once("Sections/Header.php");?>

    <div class="login-wrap">
        <div class="login-html">
            <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Login</label>
            <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Register</label>
            <div class="login-form">
                <form action="Login.php" method="post">
                <div class="sign-in-htm">
                    <div class="group">
                        <label for="user" class="label">Username</label>
                        <input id="user" type="text" name="user_name" class="input">
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Password</label>
                        <input id="pass" type="password" name="password" class="input" data-type="password">
                    </div>
                    <div class="group">
                        <input id="check" type="checkbox" name="check" class="check" checked>
                        <label for="check"><span class="icon"></span> Keep me Signed in</label>
                    </div>
                    <hr>
                    <div class="group">
                      <h3>Please click the register button at the top of the screen to make it a profile.
                      </h3>
                    </div>
                    <hr>
                    <div class="group">
                        <input type="submit" class="button" value="Sign In">
                    </div>
                    <div class="hr"></div>
                    <div class="foot-lnk">
                        <a href="#forgot">Forgot Password?</a>
                    </div>
                </div>
                </form>
                <?php if(! is_null($status) ) : ?>
                    <div class="alert alert-danger">
                        <?= $status ?>
                    </div>
                <?php endif; ?>
                <form action="Register.php" method="post">
                <div class="sign-up-htm">
                    <div class="group">
                        <label for="user" class="label">Name</label>
                        <input id="user" type="text" name="name" class="input">
                    </div>
                    <div class="group">
                        <label for="user" class="label">LastName</label>
                        <input id="user" type="text" name="last_name" class="input">
                    </div>
                    <div class="group">
                        <label for="user" class="label">MelliCode</label>
                        <input id="user" type="text" name="user_name" class="input">
                    </div>
                    <div class="group">
                        <label for="user" class="label">PhoneNumber</label>
                        <input id="user" type="text" name="phone_number" class="input">
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Password</label>
                        <input id="pass" type="password" name="password" class="input" data-type="password">
                    </div>
                    <div class="group">
                        <label for="pass" class="label">RepeatPassword</label>
                        <input id="pass" type="password" name="repeat_password" class="input" data-type="password">
                    </div>
                    <div class="group">
                        <label for="pass" class="label">EmailAddress</label>
                        <input id="pass" type="text" name="email" class="input">
                    </div>
                    <hr>
                    <div class="group">
                        <input type="submit" class="button" value="Save">
                    </div>
                    <div class="hr"></div>
                    <div class="foot-lnk">
                        <label for="tab-1">Already Member?</label>
                    </div>
                </div>
                </form>
                <?php if(! is_null($status) ) : ?>
                    <div class="alert alert-danger">

                        <?= $status ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>


<?php require_once("Sections/Footer.php");?>