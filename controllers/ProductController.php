<?php

class ProductController
{
    //Hàm list sẽ lấy các sản phẩm theo danh mục
    public function list()
    {
        $id = $_GET['id']; //id danh mục
        //Lấy sản phẩm theo danh mục
        $products = (new Product)->listProductInCategory($id);

        $title = '';
        if ($products) {
            $title = $products[0]['cate_name'];
        }
        //Lấy danh mục
        $categories = (new Category)->all();

        return view(
            'client.products.category',
            compact('products', 'categories', 'title')
        );
    }
}
