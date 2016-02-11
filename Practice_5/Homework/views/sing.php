<?php

$user = new \HttpStub\Storage\FileStorage('users');

$usersArray = $user->readAll();

$errors = [];

if (!empty($_POST['register'])) {

    if (!validateLen($_POST['first_name'], 3)) {
        $errors['first_name'][] = 'First name is required and length must be at least 3 chars';
    }

    if (!validateLen($_POST['last_name'], 3)) {
        $errors['last_name'][] = 'Last name is required and length must be at least 3 chars';
    }

    if (!validateLen($_POST['username'], 3)) {
        $errors['username'][] = 'Username is required and length must be at least 3 chars';
    }
    if (!validateRequired($_POST['reg_email'])) {
        $errors['reg_email'][] = 'Email is required';
    }

    if (!validateLen($_POST['reg_password'], 3)) {
        $errors['reg_password'][] = 'Password is required and length must be at least 3 chars';
    }

    if (!confirmPassword($_POST['reg_password'], $_POST['reg_password_confirmation'])) {
        $errors['reg_password_confirmation'][] = 'Password doesn\'t match';
    } else {
        $_POST['password'] = confirmPassword($_POST['reg_password'], $_POST['reg_password_confirmation']);
    }

    if (!$_POST['agree']) {
        $errors['agree'][] = 'You must check agree checkbox';
    }

    if (!$errors) {
        $user->insert($_POST);
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['logged'] = true;
        echo '<script> location.replace("index.php"); </script>';
    }
} else if (!empty($_POST['login'])) {
    if (!empty($usersArray)) {
        foreach ($usersArray as $key => $user) {
            if ($user['reg_email'] == getValue($_POST, 'log_email')) {
                if ($user['password'] === md5($_POST['log_password'])) {
                    $_SESSION['username'] = $user['username'];
                    $_SESSION['logged'] = true;
                    echo '<script> location.replace("index.php"); </script>';
                } else {
                    $errors['log_password'][] = 'Wrong password';
                }
            }
        }
    } else {
        $errors['log_mail'][] = 'Wrong e-mail';
    }
}

?>
<section>
    <div class="row">
        <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
            <form class="form-signin" method="post" action="sing.php">
                <h2 class="form-signin-heading">Please sign in</h2>
                <div class="form-group">
                    <input type="email" name="log_email" id="email" class="form-control input-lg"
                           placeholder="Email Address" value="<?= getValue($_POST, 'log_email') ?>">
                    <?= displayErrors($errors, 'log_email') ?>
                </div>
                <div class="form-group">
                    <input type="password" name="log_password" id="password" class="form-control input-lg"
                           placeholder="Password">
                    <?= displayErrors($errors, 'log_password') ?>
                </div>
                <button class="col-xs-12 col-sm-4 col-md-6 col-dm-offset-4 col-sm-offset-3 btn btn-primary btn-lg"
                        type="submit" name="login" value="login">Sign in
                </button>
            </form>
        </div>
        <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
            <form role="form" method="post" action="sing.php">
                <h2>Please Sign Up</h2>
                <hr class="colorgraph">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group">
                            <input type="text" name="first_name" id="first_name" class="form-control input-lg"
                                   placeholder="First Name" value="<?= getValue($_POST, 'first_name') ?>">
                            <?= displayErrors($errors, 'first_name'); ?>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group">
                            <input type="text" name="last_name" id="last_name" class="form-control input-lg"
                                   placeholder="Last Name" value="<?= getValue($_POST, 'last_name') ?>">
                            <?= displayErrors($errors, 'last_name'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <input type="text" name="username" id="display_name" class="form-control input-lg"
                           placeholder="Username" value="<?= getValue($_POST, 'username') ?>">
                    <?= displayErrors($errors, 'username') ?>
                </div>
                <div class="form-group">
                    <input type="email" name="reg_email" id="email" class="form-control input-lg"
                           placeholder="Email Address" value="<?= getValue($_POST, 'reg_email') ?>">
                    <?= displayErrors($errors, 'reg_email') ?>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group">
                            <input type="password" name="reg_password" id="password" class="form-control input-lg"
                                   placeholder="Password">
                            <?= displayErrors($errors, 'reg_password') ?>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group">
                            <input type="password" name="reg_password_confirmation" id="password_confirmation"
                                   class="form-control input-lg" placeholder="Confirm Password">
                            <?= displayErrors($errors, 'reg_password_confirmation') ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-4 col-sm-3 col-md-3">
                            <span class="button-checkbox">
                                <label for="agree" class="btn">I Agree</label>
                                <input type="checkbox" name="agree" id="agree">
                            </span>
                        <?= displayErrors($errors, 'agree') ?>
                    </div>
                    <div class="col-xs-8 col-sm-9 col-md-9">
                        <p>By clicking Register, you agree to the <a href="#" data-toggle="modal"
                                                                     data-target="#t_and_c_m">
                                Terms and Conditions</a> set out by this site, including our Cookie Use.</p>
                    </div>
                </div>
                <hr class="colorgraph">
                <div class="row">
                    <div class="col-xs-12 col-sm-4 col-md-6 col-dm-offset-4 col-sm-offset-3">
                        <input type="submit" value="Register" name="register" class="btn btn-primary btn-block btn-lg"
                               tabindex="7">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="t_and_c_m" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel">Terms & Conditions</h4>
                </div>
                <div class="modal-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam
                        nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus
                        ipsa porro delectus quidem dolorem ad.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam
                        nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus
                        ipsa porro delectus quidem dolorem ad.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam
                        nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus
                        ipsa porro delectus quidem dolorem ad.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam
                        nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus
                        ipsa porro delectus quidem dolorem ad.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam
                        nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus
                        ipsa porro delectus quidem dolorem ad.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam
                        nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus
                        ipsa porro delectus quidem dolorem ad.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam
                        nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus
                        ipsa porro delectus quidem dolorem ad.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">I Agree</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</section>