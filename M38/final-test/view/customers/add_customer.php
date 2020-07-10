<?php include './view/header.php'; ?>
    <div class="container">
        <h2>Add Customer</h2>

        <form action=".?action=add_customer" method="post">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Input your email">
                </div>
                <div class="form-group col-md-6">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Input your password">
                </div>
                </div>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Input your name">
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="tel" class="form-control" id="phone" name="phone" placeholder="Input your phone">
                </div>
                <button type="submit" class="btn btn-primary">Add</button>
                <a href=".?action=list" class="btn btn-primary stretched-link">Cancel</a>
            </div>
        </form>
    </div>
<?php include './view/footer.php'; ?>