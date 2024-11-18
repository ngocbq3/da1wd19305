<?php

class SearchController
{
    public function search()
    {
        //lấy từ khóa tìm kiếm
        $keyword = $_GET['keyword'];
        //Lấy dữ liệu tìm được
        $products = (new Product)->search($keyword);

        return view("client.search", compact('keyword', 'products'));
    }
}
