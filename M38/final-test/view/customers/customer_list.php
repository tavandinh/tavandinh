<?php include './view/header.php'; ?>
<div class="container">
    <h2>Customers List</h2>

    <?php if (isset($message_success)) : ?>
        <p class="text-success"><?php echo $message_success; ?></p>
    <?php endif; ?>

    <div class="customers_list-page">
        <form action=".?action=search_by_name" method="post">
            <div class="form-group row">
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Input customer name to search">
                </div>
                <div class="col-sm-4">
                <button type="submit" class="btn btn-primary">Search</button>
                </div>
            </div>
        </form>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">CustomerID</th>
                <th scope="col">Email</th>
                <th scope="col">Name</th>
                <th scope="col">Phone</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            <?php $i=1; ?>
            <?php foreach($customers as $customer): ?>
            <tr>
                <th scope="row"><?php echo $i;?></th>
                <td><?php echo $customer->getCustomerID();?></td>
                <td><?php echo $customer->getEmailAddress();?></td>
                <td><?php echo $customer->getName();?></td>
                <td><?php echo $customer->getPhone();?></td>
                <td><a href=".?action=delete_customer&id=<?php echo $customer->getCustomerID(); ?>" class="btn btn-primary stretched-link">Delete Customer</a></td>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
            </tbody>
        </table>
        <br>
        <a href=".?action=show_add_form" class="btn btn-primary stretched-link">Add Customer</a>
        <a href=".?action=list" class="btn btn-primary stretched-link">List</a>
    </div>
</div>
<?php include './view/footer.php'; ?>