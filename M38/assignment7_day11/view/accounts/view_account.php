<?php include './view/header.php'; ?>
    <div class="container">
        <h2>Detail Account Page</h2>
        <div class="form-group">
            <label>Account No</label>
            <input type="text" disabled value="<?php echo isset($account_no) ? $account_no : ''; ?>" class="form-control">
        </div>
        <div class="form-group">
            <label>Owner Name</label>
            <input type="text" disabled value="<?php echo isset($owner_name) ? $owner_name : ''; ?>" class="form-control">
        </div>
        <div class="form-group">
            <label>Amount</label>
            <input type="text" disabled value="<?php echo isset($amount) ? $amount : ''; ?>" class="form-control">
        </div>
        <div class="form-group">
            <label>Account Type</label>
            <input type="text" disabled value="<?php echo isset($account_type) ? $account_type : ''; ?>" class="form-control">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" disabled value="111111" class="form-control">
        </div>
        <div class="form-group">
            <a href=".?action=amount" class="btn btn-primary">ATM Page</a>
        </div>
    </div>
<?php include './view/footer.php'; ?>