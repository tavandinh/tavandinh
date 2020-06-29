<?php 
    include '../view/header.php'
?>
<main>
    <h1>Product List</h1>

    <aside>
        <!-- display a list of catergories -->
        <h2>Categories</h2>
        <nav>
            <ul>
                <?php foreach($categories as $category):?>
                <li>
                    <a href="?category=<?php echo $category['categoryID'] ;?>">
                        <?php echo $category['categoryName']; ?>
                    </a>
                </li>
                <?php endforeach; ?>
            </ul>
        </nav>
    </aside>

    <section>
        <h1><?php echo $category_name;?></h1>
        <ul class="nav">
            <!-- display links for products inselected category -->
            <?php foreach ($products as $product): ?>
            <li>
                <a href="?action=view_product&amp;product_id=<?php echo $product["productID"];?>">
                <?php echo $product["productName"];?>
                </a>
            </li>
            <?php endforeach; ?>
        </ul>
    </section>
</main>