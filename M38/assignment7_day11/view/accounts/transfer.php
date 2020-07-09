<?php include './view/header.php'; ?>
<div class="container">
    <h2>Deposit Page</h2>

    <div class="login-page">
        <form action=".?action=transfer" method="post">
            <div class="row">
                <div class="col-md-6">
                    <h4>Owner Account</h4>
                    <div class="form-group">
                        <label>Account No</label>
                        <input type="hidden" name="account_no" class="form-control" placeholder="Account No" value="<?php echo isset($_SESSION['account_login']['account_no']) ? $_SESSION['account_login']['account_no'] : ''; ?>">
                        <input type="text" disabled class="form-control" placeholder="Account No" value="<?php echo isset($_SESSION['account_login']['account_no']) ? $_SESSION['account_login']['account_no'] : ''; ?>">
                        <?php if (isset($account_no_error)) : ?>
                            <p class="text-danger"><?php echo $account_no_error; ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <label>Owner Name</label>
                        <input type="text" disabled class="form-control" placeholder="Owner Name" value="<?php echo isset($_SESSION['account_login']['owner_name']) ? $_SESSION['account_login']['owner_name'] : ''; ?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <h4>Destination Account</h4>
                    <div class="form-group">
                        <label>Destination Account No</label>
                        <input type="text" name="destination_account_no" class="form-control" placeholder="Destination Account No" value="<?php echo isset($destination_account_no) ? $destination_account_no : ''; ?>">
                        <?php if (isset($destination_account_no_error)) : ?>
                            <p class="text-danger"><?php echo $destination_account_no_error; ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <label>Destination Owner Name</label>
                        <input type="text" name="destination_owner_name" class="form-control" placeholder="Destination Owner Name" value="<?php echo isset($destination_owner_name) ? $destination_owner_name : ''; ?>">
                        <?php if (isset($destination_owner_name_error)) : ?>
                            <p class="text-danger"><?php echo $destination_owner_name_error; ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <label>Amount</label>
                        <input type="text" name="destination_amount" class="form-control" placeholder="Destination Amount" value="<?php echo isset($destination_amount) ? $destination_amount : ''; ?>">
                        <?php if (isset($destination_amount_error)) : ?>
                            <p class="text-danger"><?php echo $destination_amount_error; ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <input type="submit" name="submit" class="btn btn-primary" value="Transfer">
                <a href=".?action=atm" class="btn btn-secondary">ATM page</a>
            </div>
        </form>
    </div>
</div>
<?php include './view/footer.php'; ?>