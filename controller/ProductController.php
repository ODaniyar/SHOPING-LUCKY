<?php

include_once ROOT . '/models/Category.php';
include_once ROOT . '/models/Product.php';



class ProductController
{
    public function actionDetails($id){


        $categories   = array();
        $categories   = Category::getCategoriesList();

        $product = array();
        $product = Product::getProductById($id);

        require_once ROOT.'/views/product/productDetails.php';
        return true;
    }

}