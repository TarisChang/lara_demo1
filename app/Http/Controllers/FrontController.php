<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    function index()
    {
        return view("index");
    }

    function about()
    {
        return view("about");
    }

    function history()
    {
        return view("history");
    }

    function culture()
    {
        return view("culture");
    }

    function contact()
    {
        return view("contact");
    }

    function case()
    {
        return view("case");
    }

    function news()
    {
        return view("news");
    }

    function newsDetail()
    {
        return view("news_detail");
    }

    function product()
    {
        return view("product");
    }

    function productDetail()
    {
        return view("product_detail");
    }

    function join()
    {
        return view("join");
    }
}
