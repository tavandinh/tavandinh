<?php include './view/header.php'; ?>
<div class="container">
    <h2>Login Page</h2>

    <div class="login-page">
        <?php if (isset($login_error)) : ?>
            <p class="text-danger"><?php echo $login_error; ?></p>
        <?php endif; ?>

        <form action=".?action=login" method="post">
            <div class="form-group">
                <label>Account No</label>
                <input type="text" name="account_no" class="form-control" placeholder="Account No">
                <?php if (isset($account_no_error)) : ?>
                    <p class="text-danger"><?php echo $account_no_error; ?></p>
                <?php endif; ?>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Password">
                <?php if (isset($password_error)) : ?>
                    <p class="text-danger"><?php echo $password_error; ?></p>
                <?php endif; ?>
            </div>
            <div class="form-group">
                <input type="submit" name="submit" class="btn btn-primary" value="Login">
            </div>
        </form>
    </div>
</div>
<?php include './view/footer.php'; ?>