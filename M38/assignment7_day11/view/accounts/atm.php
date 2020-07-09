<?php include './view/header.php'; ?>
<div class="container">
    <h2>ATM Page</h2>

    <?php if (isset($_SESSION['account_login']['owner_name'])) : ?>
        <div class="form-group">
            <p class="bg-success p-3">Hello, <?php echo $_SESSION['account_login']['owner_name']; ?></p>
            <form action="index.php" method="post">
                <input type="hidden" name="action" value="logout">
                <input type="submit" name="submit" value="logout">
            </form>
        </div>
    <?php endif; ?>

    <?php if (isset($message_success)) : ?>
        <p class="text-success"><?php echo $message_success; ?></p>
    <?php endif; ?>

    <div class="atm-page">
        <div class="card-columns">
            <div class="card bg-primary">
                <div class="card-body text-center">
                    <p class="card-text"><a href=".?action=view_account&account_no=<?php echo isset($_SESSION['account_login']['account_no']) ? $_SESSION['account_login']['account_no'] : '';  ?>" class="text-danger">View Account</a></p>
                </div>
            </div>
            <div class="card bg-warning">
                <div class="card-body text-center">
                <p class="card-text"><a href=".?action=show_form_deposit&account_no=<?php echo isset($_SESSION['account_login']['account_no']) ? $_SESSION['account_login']['account_no'] : '';  ?>" class="text-danger">Deposit</a></p>
                </div>
            </div>
            <div class="card bg-success">
                <div class="card-body text-center">
                <p class="card-text"><a href=".?action=show_form_transfer&account_no=<?php echo isset($_SESSION['account_login']['account_no']) ? $_SESSION['account_login']['account_no'] : '';  ?>" class="text-danger">Transfer</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include './view/footer.php'; ?>