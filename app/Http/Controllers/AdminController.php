<?php

namespace App\Http\Controllers;


use App\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $category = DB::table('categories')->count();
        $product  = DB::table('categories')->count();
        $t_order  = DB::table('orders')->count();
        $message= DB::table('messages')->count();

        $order = DB::table('orders')
            ->where('is_checked', '=', '0')
            ->orderBy('id', 'DESC')
            ->get();

        return view('admin.index',[
            'total_category' => $category,
            'total_product'  => $product,
            'total_message'  => $message,
            'total_order'    => $t_order,
            'orders'         => $order
        ]);
    }

    public function order_page(){
        $order = DB::table('orders')
            ->orderBy('id', 'DESC')
            ->get();

        return view('admin.orders',[
             'orders'         => $order
        ]);
    }

    public function is_checked(Request $request){

        $order_id = $request->order_id;

        $affected = DB::table('orders')
            ->where('order_id', $order_id)
            ->update([
                'is_checked'  => $request->status
            ]);

        if($affected){

            $message = DB::table('orders')->get();

            return redirect('/orders');
        }
    }


}
