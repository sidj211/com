<?php

namespace App\Http\Controllers;

use App\Banner;
use App\Category;
use App\FooterSetting;
use App\Product;
use App\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Cart;

class IndexController1 extends Controller
{
    //
    public function index()
    {

        $result=DB::table('footer_settings')->first();
        $information=FooterSetting::find(1)->footerInfo;
        $extra=FooterSetting::find(1)->extraInfo;
        $account=FooterSetting::find(1)->MyAccountInfo;
        $copyright=FooterSetting::find(1);
        $pro=Category::with('subcategories','products')->get();

        $categories = Category::pluck('name','id');

        $banners = Banner::all();

        $products = Product::all();
        $total=Cart::total();
        $tax=Cart::tax();
        $cart=Cart::content();
        $count=Cart::count();

        return view('frontend.index',compact('result','extra','products','information','account',
            'copyright','pro','banners','total','tax','cart','count' ));


    }

//    this function will return categories related products
    public function showcategoriesrelatedproduct($id)
    {
        $categoryrelatedproducts = Category::with('products')->where('id','=',$id)->get();
        return view('frontend.categories',compact('categoryrelatedproducts'));
    }

    public function showsubcategoriesrelatedproduct($id)
    {
        $subcategoriesrelatedproducts = Subcategory::with('subproducts')->where('id','=',$id)->get();
        return view('frontend.subcategories',compact('subcategoriesrelatedproducts'));
    }



    //this function will give particular product details
    public function productdetails($id)
    {
        $productdetails = Product::findOrFail($id);
         return view('frontend.productdetails',compact('productdetails'));
    }

    public function cartdetails()
    {
        return view('frontend.cart');

    }

    public function store(Request $request)
    {

    }



}
