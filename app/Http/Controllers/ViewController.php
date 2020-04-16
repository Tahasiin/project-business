<?php

namespace App\Http\Controllers;

use App\Message;
use App\Order;
use DB;
use Illuminate\Http\Request;

class ViewController extends Controller
{

    public function index()
    {
        $category = DB::Table('categories')->get();
        $product = DB::Table('products')
            ->select('product_name','product_id','category_name', 'image_1','product_price')
            ->where('is_imaged','=',1)
            ->orderBy('id','DESC')
            ->take(12)
            ->get();
        $template = DB::Table('templates')->get();

        return view('home.index',[
            'categories' => $category,
            'products' => $product,
            'templateData' => $template
        ]);
    }

    public function about_page(){
        $category = DB::Table('categories')->get();
        $template = DB::Table('templates')->get();

        return view('home.about',[
            'categories' => $category,
            'templateData' => $template
        ]);
    }

    public function buy_page(){
        $category = DB::Table('categories')->get();
        $template = DB::Table('templates')->get();

        return view('home.buy',[
            'categories' => $category,
            'templateData' => $template
        ]);
    }

    public function solution_page()
    {
        $category = DB::Table('categories')->get();
        $template = DB::Table('templates')->get();

        return view('home.solution',[
            'categories' => $category,
            'templateData' => $template
        ]);
    }

    public function contact_page()
    {
        $template = DB::Table('templates')->get();

        return view('home.contact',[
            'templateData' => $template
        ]);
    }

    public function how_page()
    {
        $category = DB::Table('categories')->get();
        $template = DB::Table('templates')->get();

        return view('home.how',[
            'categories' => $category,
            'templateData' => $template
        ]);
    }

    public function product_page()
    {
        $category = DB::Table('categories')->get();
        $template = DB::Table('templates')->get();

        return view('home.products', [
            'categories' => $category,
            'templateData' => $template
        ]);
    }

    public function order_page()
    {
        $category = DB::Table('categories')->get();
        $template = DB::Table('templates')->get();

        return view('home.order', [
            'categories' => $category,
            'templateData' => $template
        ]);
    }


    public function products_byCategory(Request $request)
    {
        $template = DB::Table('templates')->get();
        $category_name = $request->input('category_name');

        $product = DB::table('products')
            ->select('product_name','product_id','product_price','product_weight','product_mileage','image_1')
            ->where('category_name', '=', $category_name)
            ->where('is_imaged', '=', 1)
            ->get();

        if ($product) {
            return view('home.products', [
                'templateData' => $template,
                'products' => $product
            ]);
        }


    }
    public function products_byID(Request $request)
    {
        $product_id = $request->input('product_id');

        $template = DB::Table('templates')->get();

        $product = DB::table('products')
            ->where('product_id', '=', $product_id)
            ->where('is_imaged', '=', 1)
            ->get();

        if ($product) {
            return view('home.product-details', [
                'templateData' => $template,
                'products' => $product
            ]);
        }


    }

    protected function validate_message($request){
        $this->validate($request, [
            'name'            => 'required',
            'country'         => 'required',
            'email'           => 'required|email',
            'customer_type'   => 'required',
            'priority_level'  => 'required',
            'query_type'      => 'required',
            'message'         => 'required',
        ]);
    }

    protected function validate_order($request){
        $this->validate($request, [
            'customer_name'  => 'required',
            'country'        => 'required',
            'address'        => 'required',
            'zip_code'       => 'required',
            'email'          => 'required |email',
            'payment_method' => 'required',
            'how_found'      => 'required',
        ]);
    }



    public function receive_message(Request $request){

        $this->validate_message($request);

        date_default_timezone_set('Asia/Dhaka');
        $time = date("l ,F j, Y, g:i a");

        $message_id = 'message@'.date("his");

        $message = new Message();

        $message->message_id      = $message_id;
        $message->name            = $request->name;
        $message->country         = $request->country;
        $message->phone           = $request->phone;
        $message->email           = $request->email;
        $message->customer_type   = $request->customer_type;
        $message->priority_level  = $request->priority_level;
        $message->query_type      = $request->query_type;
        $message->message         = $request->message;
        $message->time            = $time;

        $message->save();

        if($message->save()){
            return redirect('/contact')
                ->with('success','We have received your message. Thank you.');
        }else{
            return redirect('/contact')
                ->with('error','Sorry! Something went wrong.');
        }

    }

    public function receive_order(Request $request){

        $this->validate_order($request);

        date_default_timezone_set('Asia/Dhaka');
        $time = date("l ,F j, Y, g:i a");

        $order_id = 'order#'.date("his");

        $order = new Order();

        $order->order_id       = $order_id;
        $order->customer_name  = $request->customer_name;
        $order->country        = $request->country;
        $order->address        = $request->address;
        $order->zip_code       = $request->zip_code;
        $order->phone          = $request->phone;
        $order->email          = $request->email;
        $order->payment_method = $request->payment_method;
        $order->how_found      = $request->how_found;
        $order->product_id     = $request->product_id;
        $order->product_name   = $request->product_name;
        $order->category_name  = $request->category_name;
        $order->time           = $time;

        $order->save();

        if($order->save()){
            $request->session()->flash('order_id', $order_id);
            return redirect('/order')
                ->with('success','We have received your request. We will contact you soon. Thank you.');
        }else{
            return redirect('/order')
                ->with('error','Sorry! Something went wrong.Please Try again later. Thank You.');
        }

    }


}
