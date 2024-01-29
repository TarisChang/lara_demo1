<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Cases;
use App\Models\Join;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class FrontController extends Controller
{
    function index()
    {
        $banners = Banner::orderBy('order')->get();
        $news = News::where('news_at', '<=', date('Y-m-d'))->orderBy('news_at', 'desc')->limit(3)->get();
        $cases = Cases::orderBy('order')->get();

        // temp news

        $news = new Collection([]);

        return view("index", compact('news', 'banners', 'cases'));
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
        $data = Cases::orderBy('updated_at', 'desc')->paginate(8);

        return view("case", compact('data'));
    }

    function news()
    {
        $data = News::where('news_at', '<=', date('Y-m-d'))->orderBy('news_at', 'desc')->paginate(4);

        return view("news", compact('data'));
    }

    function newsDetail($title)
    {
        $data = News::where('title', $title)->first();

        return view("news_detail", compact('data'));
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
        $data = Join::all();

        return view("join", compact('data'));
    }
}
