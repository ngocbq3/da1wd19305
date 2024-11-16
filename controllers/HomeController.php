<?php
class HomeController
{
    public function index()
    {
        //Lấy danh sách pets
        $product = new Product;
        $pets = $product->listPets();
        $list_products = $product->listOtherProduct();

        return view('client.home', compact('pets', 'list_products'));
    }
}
