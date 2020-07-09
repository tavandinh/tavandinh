<?php include './view/header.php'; ?>
<div class="container">
    <h2>Deposit Page</h2>

    <?php if (isset($_SESSION['account_login']['owner_name'])) : ?>
        <div class="form-group">
            <p class="bg-success">Hello, <?php echo $_SESSION['account_login']['owner_name']; ?></p>
        </div>
    <?php endif; ?>

    <div class="login-page">
        <form action=".?action=deposit" method="post">
            <div class="form-group">
                <label>Account No</label>
                <input type="text" name="account_no" class="form-control" placeholder="Account No">
                <?php if (isset($account_no_error)) : ?>
                    <p class="text-danger"><?php echo $account_no_error; ?></p>
                <?php endif; ?>
            </div>
            <div class="form-group">
                <label>Amount</label>
                <input type="text" name="amount" class="form-control" placeholder="Amount">
                <?php if (isset($amount_error)) : ?>
                    <p class="text-danger"><?php echo $amount_error; ?></p>
                <?php endif; ?>
            </div>
            <div class="form-group">
                <input type="submit" name="submit" class="btn btn-primary" value="Deposit">
                <a href=".?action=atm" class="btn btn-secondary">ATM page</a>
            </div>
        </form>
    </div>
</div>
<?php include './view/footer.php'; ?>