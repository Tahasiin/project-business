<?php

namespace App\Http\Controllers;


use DB;
use Session;
use App\Category;
use App\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.category-create');
    }

    public function x()
    {
        return view('index');
    }

    protected function validate_CategoryInfo($request)
    {

        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'status' => 'required',
        ]);

    }


    public function create_category(Request $request)
    {
        $this->validate_CategoryInfo($request);

        if (Category::where('category_name', '=', $request->input('name'))->exists()) {

            return redirect('/createCategory')
                ->with('error', 'Category name exists!');

        } else {
            $category = new Category();

            date_default_timezone_set('Asia/Dhaka');
            $time = date("l ,F j, Y, g:i a");

            $category->category_name        = $request->name;
            $category->category_description = $request->description;
            $category->publication_status   = $request->status;
            $category->created_on           = $time;

            $category->save();

            return redirect('/createCategory')
                ->with('success', 'Category created successfully!');
        }

    }

    public function category_data(Request $request)
    {
        $category = DB::table('categories')->count();
        if ($category > 0) {

            $category = DB::table('categories')->get();

            return view('admin.category-manage', [
                'categories' => $category
            ]);

        } else {
            $category = DB::table('categories')->get();

            $request->session()->flash('error-message', 'Sorry! No data Found.');
            return view('admin.category-manage', [
                'categories' => $category
            ]);

        }
    }



    public function update_category(Request $request){

        $this->validate_CategoryInfo($request);

        $category = Category::find($request->id);

        $category->category_name        = $request->name;
        $category->category_description = $request->description;
        $category->publication_status   = $request->status;

        $category->save();

        if($category->save()){

            $affected = DB::table('products')
                ->where('category_name', $request->pre_name)
                ->update([
                    'category_name'       => $request->name,
                    'publication_status'  => $request->status
                ]);

            if($affected){

            }

        }
        return redirect('/manageCategory')
            ->with('success', 'Category update successfully!');


    }

    public function delete_category(Request $request)
    {

        $delete = DB::table('categories')->where('category_name', '=', $request->category_name)->delete();

        if ($delete) {

            DB::table('products')->where('category_name', '=', $request->category_name)->delete();

            return redirect('/manageCategory');
        }
    }

    public function products_byCategory(Request $request){

        $category_name = $request->category_name;;

        $product = DB::table('products')
            ->where('category_name', '=', $category_name)
            ->get();

        if ($product) {
            return view('admin.category-products', [
                'products'      => $product,
                'category_name' => $category_name
            ]);
        }
    }


//            DB::statement("ALTER TABLE `categories` DROP `id` ");
//            DB::statement("ALTER TABLE `categories` AUTO_INCREMENT = 1;");
//            DB::statement("ALTER TABLE `categories` ADD `id` int UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST;" );
//

}
