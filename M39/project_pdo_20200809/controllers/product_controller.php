<?php

include 'models/product_model.php';

class ProductController extends ProductModel
{
    const PAGE_DEFAULT = 1;
    const PAGE_RECORD_LIMIT = 3;

    public function __construct()
    {
        parent::__construct();


    }

    public function listProduct()
    {
        $page = filter_input(INPUT_GET, 'page');
        // set value if $page is null
        if (!$page) {
            $page = self::PAGE_DEFAULT;
        }
        $pageCurrent = $page;

        $limit = self::PAGE_RECORD_LIMIT;
        if ($page == 1) {
            $offset = 0;
        } else {
            $page = $page - 1;
            $offset = $page * self::PAGE_RECORD_LIMIT;
        }

        // check if have search with $categoryID
        $categoryID = filter_input(INPUT_GET, 'category_id');

        // search with prodcut name
        $searchProductName = filter_input(INPUT_GET, 'product_name_search');
        $searchProductName = empty($searchProductName) ? null : trim($searchProductName);

        $products = $this->getAllProductPagination($limit, $offset, $categoryID, $searchProductName);
        $productTotal = $this->getAllProduct($categoryID, $searchProductName);
        $productTotalPage = ceil($productTotal / $limit);

        include 'views/products/product_list.php';
        exit();
    }

    public function detailProduct()
    {
        $categories = $this->getAllCategory();
        $productID = filter_input(INPUT_GET, 'product_id');

        // validate
        if (empty($productID)) {
            echo 'product ID is required.';
            exit();
        }

        // validate OK
        $product = $this->getSingleProduct($productID);
        include 'views/products/product_detail.php';
    }

    public function showCreateProduct()
    {
        $categories = $this->getAllCategory();

        include 'views/products/product_create.php';
        exit();
    }

    public function handleCreateProduct()
    {
        $productName = filter_input(INPUT_POST, 'product_name');
        $productDescription = filter_input(INPUT_POST, 'product_description');
        $productContent = filter_input(INPUT_POST, 'product_content');
        $productPrice = filter_input(INPUT_POST, 'product_price');
        $productThumbnail = $_FILES["product_thumbnail"]; // input type = file
        $categoryID = filter_input(INPUT_POST, 'category_id');

        // validate
        if (empty($categoryID)) {
            echo 'category id is required.';
            exit();
        }

        // validate
        if (empty($productName)) {
            echo 'product Name is required.';
            exit();
        }

        // validate
        if (empty($productDescription)) {
            echo 'product Description is required.';
            exit();
        }

        // validate
        if (empty($productPrice)) {
            echo 'product Price is required.';
            exit();
        }

        // validate
        if (empty($productThumbnail)) {
            echo 'product Thumbnail is required.';
            exit();
        }

        // upload thumbnail
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($productThumbnail["name"],PATHINFO_EXTENSION));
        $target_dir = "./uploads/";
        $target_file = $target_dir . time() . '.' . $imageFileType;

        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            $check = getimagesize($productThumbnail["tmp_name"]);
            if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }

        // Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }

        // Check file size
        if ($productThumbnail["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }

        // Allow certain file formats
        if(!in_array($imageFileType, ['jpg', 'png', 'jpeg', 'gif'])) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
            exit();
        } else { // if everything is ok, try to upload file
            if (move_uploaded_file($productThumbnail["tmp_name"], $target_file)) {
                echo "The file ". basename( $productThumbnail["name"]). " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
                exit();
            }
        }


        $result = $this->insertProduct($productName, $productDescription, $productContent, $productPrice, $target_file, $categoryID);

        if ($result) {
            // insert success
            header('Location: .?action=product_list');
            exit();
        } else {
            // insert fail
            echo 'insert fail';
            exit();
        }
    }

    public function showEditProduct()
    {
        $categories = $this->getAllCategory();
        $productID = filter_input(INPUT_GET, 'product_id');

        // validate
        if (empty($productID)) {
            echo 'product ID is required.';
            exit();
        }

        // validate OK
        $product = $this->getSingleProduct($productID);
        
        include 'views/products/product_edit.php';
    }

    public function handleEditProduct()
    {
        $productID = filter_input(INPUT_POST, 'product_id');
        $productName = filter_input(INPUT_POST, 'product_name');
        $productDescription = filter_input(INPUT_POST, 'product_description');
        $productContent = filter_input(INPUT_POST, 'product_content');
        $productPrice = filter_input(INPUT_POST, 'product_price');
        $productThumbnailOld = filter_input(INPUT_POST, 'product_thumbnail_old');
        $productThumbnail = $_FILES['product_thumbnail'];
        $categoryID = filter_input(INPUT_POST, 'category_id');

        // validate
        if (empty($categoryID)) {
            echo 'category id is required.';
            exit();
        }

        // validate
        if (empty($productID)) {
            echo 'product id is required.';
            exit();
        }

        // validate
        if (empty($productName)) {
            echo 'product Name is required.';
            exit();
        }

        // validate
        if (empty($productDescription)) {
            echo 'product Description is required.';
            exit();
        }

        // validate
        if (empty($productPrice)) {
            echo 'product Price is required.';
            exit();
        }

        // validate $productThumbnailOld
        if (empty($productThumbnailOld)) {
            echo 'Thumbnail Old is required.';
            exit();
        }

        // validate if have upload thumbnail 
        if (!empty($productThumbnail["name"])) {
            // upload thumbnail
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($productThumbnail["name"],PATHINFO_EXTENSION));
            $target_dir = "./uploads/";
            $target_file = $target_dir . time() . '.' . $imageFileType;

            // Check if image file is a actual image or fake image
            if(isset($_POST["submit"])) {
                $check = getimagesize($productThumbnail["tmp_name"]);
                if($check !== false) {
                    echo "File is an image - " . $check["mime"] . ".";
                    $uploadOk = 1;
                } else {
                    echo "File is not an image.";
                    $uploadOk = 0;
                }
            }

            // Check if file already exists
            if (file_exists($target_file)) {
                echo "Sorry, file already exists.";
                $uploadOk = 0;
            }

            // Check file size
            if ($productThumbnail["size"] > 500000) {
                echo "Sorry, your file is too large.";
                $uploadOk = 0;
            }

            // Allow certain file formats
            if(!in_array($imageFileType, ['jpg', 'png', 'jpeg', 'gif'])) {
                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $uploadOk = 0;
            }

            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                echo "Sorry, your file was not uploaded.";
                exit();
            } else { // if everything is ok, try to upload file
                if (move_uploaded_file($productThumbnail["tmp_name"], $target_file)) {
                    echo "The file ". basename( $productThumbnail["name"]). " has been uploaded.";
                } else {
                    echo "Sorry, there was an error uploading your file.";
                    exit();
                }
            }
        } else { // dont upload thumbnail 
            $target_file = $productThumbnailOld;
        }

        // validate OK
        $result = $this->updateProduct($productID, $productName, $productDescription, $productContent, $productPrice, $target_file, $categoryID);

        if ($result) {
            // update success
            header('Location: .?action=product_list');
            exit();
        } else {
            // update fail
            echo 'update fail';
            exit();
        }
    }

    public function handleDeleteProduct()
    {
        $productID = filter_input(INPUT_POST, 'product_id');

        // validate
        if (empty($productID)) {
            echo 'product id is required.';
            exit();
        }

        // validate OK
        $result = $this->deleteProduct($productID);

        if ($result) {
            // update success
            header('Location: .?action=product_list');
            exit();
        } else {
            // update fail
            echo 'delete fail';
            exit();
        }
    }

}