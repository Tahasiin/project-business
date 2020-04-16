<?php

namespace App\Http\Controllers;

use File;
use DB;
use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Symfony\Component\Console\Input\Input;


class ProductController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $category = Category::where('publication_status',1)->get();
        return view('admin.product-create',[
            'categories' => $category
        ]);
    }

    public function upload_page()
    {
        return view('admin.product-image');
    }

    protected function validate_Productinfo($request){
        $this->validate($request, [
            'product_name'     => 'required',
            'product_id'       => 'required',
            'category_name'    => 'required',
            'production_year'  => 'required',
            'product_weight'   => 'required',
            'product_mileage'  => 'required',
            'fuel_type'        => 'required',
            'product_color'    => 'required',
            'smoking_status'   => 'required',
            'history_status'   => 'required',
            'product_price'    => 'required',
            'pre_description'  => 'required',
            'accidental_issue' => 'required',
            'mileage_issue'    => 'required',
            'service_issue'    => 'required',
        ]);
    }


    public function create_product(Request $request){

        $this->validate_Productinfo($request);

        if (Product::where('product_name', '=', $request->input('product_name'))
            ->orwhere('product_id', '=', $request->input('product_id'))
            ->exists()) {

            return redirect('/createProduct')
                ->with('error', 'Product name or id already exists!');

        } else {
            $product = new Product();

            date_default_timezone_set('Asia/Dhaka');
            $time = date("l ,F j, Y, g:i a");


            $category_name = Str::before($request->category_name, '#');
            $category_id = Str::after($request->category_name, '#');

            $product->product_name       = $request->product_name;
            $product->product_id         = $request->product_id;
            $product->category_name      = $category_name;
            $product->category_id        = $category_id;
            $product->production_year    = $request->production_year;
            $product->product_weight     = $request->product_weight;
            $product->product_mileage    = $request->product_mileage;
            $product->fuel_type          = $request->fuel_type;
            $product->product_color      = $request->product_color;
            $product->product_ccm        = $request->product_ccm;
            $product->product_condition  = $request->product_condition;
            $product->smoking_status     = $request->smoking_status;
            $product->history_status     = $request->history_status;
            $product->product_price      = $request->product_price;
            $product->pre_description    = $request->pre_description;
            $product->accidental_issue   = $request->accidental_issue;
            $product->mileage_issue      = $request->mileage_issue;
            $product->service_issue      = $request->service_issue;
            $product->other_issue        = $request->other_issue;
            $product->term_1             = $request->term_1;
            $product->term_2             = $request->term_2;
            $product->term_3             = $request->term_3;
            $product->term_4             = $request->term_4;
            $product->term_5             = $request->term_5;
            $product->term_6             = $request->term_6;
            $product->term_7             = $request->term_7;
            $product->term_8             = $request->term_8;
            $product->term_9             = $request->term_9;
            $product->term_10            = $request->term_10;
            $product->publication_status = $request->publication_status;
            $product->created_on         = $time;

            $product->save();

            $name     = $request->product_name;
            $id       = $request->product_id;
            $category = $request->category_name;

            if($product->save()){
                return redirect('/uploadImage?product_name='.$name.'&product_id='.$id.'&category_name='.$category);
            }

        }
    }


    public function product_data(Request $request){

        $product = DB::table('products')->count();
        if ($product > 0) {

            $product = DB::table('products')->get();

            return view('admin.product-manage', [
                'products' => $product
            ]);

        } else {
            $product = DB::table('products')->get();
            $request->session()->flash('error-message', 'Sorry! No data Found.');
            return view('admin.product-manage', [
                'products' => $product
            ]);

        }
    }

    public function delete_product(Request $request){

        $year       = date('Y');
        $category   = $request->category_name;
        $product_id = $request->product_id;

        $affected = DB::table('products')->where('product_id', '=', $product_id)->delete();

        if ($affected) {

            $folder5 = public_path() . '/gallery/products/' . $category . '/' . $year . '/pid-' . $product_id . '/';

            File::deleteDirectory($folder5);

            return redirect('/manageProduct');

        }

    }

    public function update_status(Request $request){

        $affected = DB::table('products')
            ->where('id', $request->id)
            ->update([
                'publication_status'  => $request->status
                ]);

        if($affected){
            return redirect('/manageProduct')
                ->with('success', 'Product update successfully!');
        }
    }


    public function product_details(Request $request)
    {
        $id = $request->input('product_id');;

        $product = DB::table('products')
            ->where('product_id', '=', $id)
            ->get();

        if ($product) {
            return view('admin.product-details', [
                'products' => $product
            ]);
        }


     }

     public function update_info(Request $request){

         $product_id = $request->product_id;

         $affected = DB::table('products')
             ->where('product_id', $product_id)
             ->update([
                 'product_name'     => $request->product_name,
                 'production_year'  => $request->production_year,
                 'product_weight'   => $request->product_weight,
                 'product_mileage'  => $request->product_mileage,
                 'fuel_type'        => $request->fuel_type,
                 'product_color'    => $request->product_color,
                 'smoking_status'   => $request->smoking_status,
                 'history_status'   => $request->history_status,
                 'product_price'    => $request->product_price,
                 'pre_description'  => $request->pre_description,
                 'accidental_issue' => $request->accidental_issue,
                 'mileage_issue'    => $request->mileage_issue,
                 'service_issue'    => $request->service_issue,
                 'other_issue'      => $request->other_issue,
                 'term_1'           => $request->term_1,
                 'term_2'           => $request->term_2,
                 'term_3'           => $request->term_3,
                 'term_4'           => $request->term_4,
                 'term_5'           => $request->term_5,
                 'term_6'           => $request->term_6,
                 'term_7'           => $request->term_7,
                 'term_8'           => $request->term_8,
                 'term_9'           => $request->term_9,
                 'term_10'          => $request->term_10,
             ]);

         if($affected){


             return redirect('/productDetails?product_id='.$request->product_id)
                 ->with('success', 'Info updated successfully!');

         }

     }

     public function updateImage_1(Request $request){

         $year       = date('Y');
         $category   = $request->category_name;
         $product_id = $request->product_id;


         $folder = public_path() . '/gallery/products/' . $category . '/' . $year . '/pid-' . $product_id . '/';
         $directory = 'gallery/products/' . $category . '/' . $year . '/pid-' . $product_id . '/';

         if($request->hasfile('image_1')){

             $file = $request->file('image_1');
             $name = $file->getClientOriginalName();
             $path = $directory . $name;

         } else {
             $path = "";
         }


        $affected = DB::table('products')
             ->where('product_id', $product_id)
             ->update([
                 'image_1'  => $path
             ]);

         if($affected){

             $file->move($folder, $path);

             return redirect('/productDetails?product_id='.$request->product_id)
                 ->with('success', 'Image updated successfully!');

         }
     }


    public function updateImage_2(Request $request){

    $year       = date('Y');
    $category   = $request->category_name;
    $product_id = $request->product_id;


    $folder = public_path() . '/gallery/products/' . $category . '/' . $year . '/pid-' . $product_id . '/';
    $directory = 'gallery/products/' . $category . '/' . $year . '/pid-' . $product_id . '/';

    if($request->hasfile('image_2')){

        $file = $request->file('image_2');
        $name = $file->getClientOriginalName();
        $path = $directory . $name;

    } else {
        $path = "";
    }


    $affected = DB::table('products')
        ->where('product_id', $product_id)
        ->update([
            'image_2'  => $path
        ]);

    if($affected){

        $file->move($folder, $path);

        return redirect('/productDetails?product_id='.$request->product_id)
            ->with('success', 'Image updated successfully!');

    }
}


    public function updateImage_3(Request $request){

        $year       = date('Y');
        $category   = $request->category_name;
        $product_id = $request->product_id;


        $folder = public_path() . '/gallery/products/' . $category . '/' . $year . '/pid-' . $product_id . '/';
        $directory = 'gallery/products/' . $category . '/' . $year . '/pid-' . $product_id . '/';

        if($request->hasfile('image_3')){

            $file = $request->file('image_3');
            $name = $file->getClientOriginalName();
            $path = $directory . $name;

        } else {
            $path = "";
        }


        $affected = DB::table('products')
            ->where('product_id', $product_id)
            ->update([
                'image_3'  => $path
            ]);

        if($affected){

            $file->move($folder, $path);

            return redirect('/productDetails?product_id='.$request->product_id)
                ->with('success', 'Image updated successfully!');

        }
    }


    public function updateImage_4(Request $request){

        $year       = date('Y');
        $category   = $request->category_name;
        $product_id = $request->product_id;


        $folder = public_path() . '/gallery/products/' . $category . '/' . $year . '/pid-' . $product_id . '/';
        $directory = 'gallery/products/' . $category . '/' . $year . '/pid-' . $product_id . '/';

        if($request->hasfile('image_4')){

            $file = $request->file('image_4');
            $name = $file->getClientOriginalName();
            $path = $directory . $name;

        } else {
            $path = "";
        }


        $affected = DB::table('products')
            ->where('product_id', $product_id)
            ->update([
                'image_4'  => $path
            ]);

        if($affected){

            $file->move($folder, $path);

            return redirect('/productDetails?product_id='.$request->product_id)
                ->with('success', 'Image updated successfully!');

        }
    }



    public function updateImage_5(Request $request){

        $year       = date('Y');
        $category   = $request->category_name;
        $product_id = $request->product_id;


        $folder = public_path() . '/gallery/products/' . $category . '/' . $year . '/pid-' . $product_id . '/';
        $directory = 'gallery/products/' . $category . '/' . $year . '/pid-' . $product_id . '/';

        if($request->hasfile('image_5')){

            $file = $request->file('image_5');
            $name = $file->getClientOriginalName();
            $path = $directory . $name;

        } else {
            $path = "";
        }


        $affected = DB::table('products')
            ->where('product_id', $product_id)
            ->update([
                'image_5'  => $path
            ]);

        if($affected){

            $file->move($folder, $path);

            return redirect('/productDetails?product_id='.$request->product_id)
                ->with('success', 'Image updated successfully!');

        }
    }


    public function updateImage_6(Request $request){

        $year       = date('Y');
        $category   = $request->category_name;
        $product_id = $request->product_id;


        $folder = public_path() . '/gallery/products/' . $category . '/' . $year . '/pid-' . $product_id . '/';
        $directory = 'gallery/products/' . $category . '/' . $year . '/pid-' . $product_id . '/';

        if($request->hasfile('image_6')){

            $file = $request->file('image_6');
            $name = $file->getClientOriginalName();
            $path = $directory . $name;

        } else {
            $path = "";
        }


        $affected = DB::table('products')
            ->where('product_id', $product_id)
            ->update([
                'image_6'  => $path
            ]);

        if($affected){

            $file->move($folder, $path);

            return redirect('/productDetails?product_id='.$request->product_id)
                ->with('success', 'Image updated successfully!');

        }
    }


    public function updateImage_7(Request $request){

        $year       = date('Y');
        $category   = $request->category_name;
        $product_id = $request->product_id;


        $folder = public_path() . '/gallery/products/' . $category . '/' . $year . '/pid-' . $product_id . '/';
        $directory = 'gallery/products/' . $category . '/' . $year . '/pid-' . $product_id . '/';

        if($request->hasfile('image_7')){

            $file = $request->file('image_7');
            $name = $file->getClientOriginalName();
            $path = $directory . $name;

        } else {
            $path = "";
        }


        $affected = DB::table('products')
            ->where('product_id', $product_id)
            ->update([
                'image_7'  => $path
            ]);

        if($affected){

            $file->move($folder, $path);

            return redirect('/productDetails?product_id='.$request->product_id)
                ->with('success', 'Image updated successfully!');

        }
    }


    public function updateImage_8(Request $request){

        $year       = date('Y');
        $category   = $request->category_name;
        $product_id = $request->product_id;


        $folder = public_path() . '/gallery/products/' . $category . '/' . $year . '/pid-' . $product_id . '/';
        $directory = 'gallery/products/' . $category . '/' . $year . '/pid-' . $product_id . '/';

        if($request->hasfile('image_8')){

            $file = $request->file('image_8');
            $name = $file->getClientOriginalName();
            $path = $directory . $name;

        } else {
            $path = "";
        }


        $affected = DB::table('products')
            ->where('product_id', $product_id)
            ->update([
                'image_8'  => $path
            ]);

        if($affected){

            $file->move($folder, $path);

            return redirect('/productDetails?product_id='.$request->product_id)
                ->with('success', 'Image updated successfully!');

        }
    }


    public function updateImage_9(Request $request){

        $year       = date('Y');
        $category   = $request->category_name;
        $product_id = $request->product_id;


        $folder = public_path() . '/gallery/products/' . $category . '/' . $year . '/pid-' . $product_id . '/';
        $directory = 'gallery/products/' . $category . '/' . $year . '/pid-' . $product_id . '/';

        if($request->hasfile('image_9')){

            $file = $request->file('image_9');
            $name = $file->getClientOriginalName();
            $path = $directory . $name;

        } else {
            $path = "";
        }


        $affected = DB::table('products')
            ->where('product_id', $product_id)
            ->update([
                'image_9'  => $path
            ]);

        if($affected){

            $file->move($folder, $path);

            return redirect('/productDetails?product_id='.$request->product_id)
                ->with('success', 'Image updated successfully!');

        }
    }



    public function updateImage_10(Request $request){

        $year       = date('Y');
        $category   = $request->category_name;
        $product_id = $request->product_id;


        $folder = public_path() . '/gallery/products/' . $category . '/' . $year . '/pid-' . $product_id . '/';
        $directory = 'gallery/products/' . $category . '/' . $year . '/pid-' . $product_id . '/';

        if($request->hasfile('image_10')){

            $file = $request->file('image_10');
            $name = $file->getClientOriginalName();
            $path = $directory . $name;

        } else {
            $path = "";
        }


        $affected = DB::table('products')
            ->where('product_id', $product_id)
            ->update([
                'image_10'  => $path
            ]);

        if($affected){

            $file->move($folder, $path);

            return redirect('/productDetails?product_id='.$request->product_id)
                ->with('success', 'Image updated successfully!');

        }
    }



    public function upload_images(Request $request)
    {

        $year       = date('Y');
        $category   = $request->category_name;
        $product_id = $request->product_id;

        $folder1 = public_path() . '/gallery/';
        $folder2 = public_path() . '/gallery/products/';
        $folder3 = public_path() . '/gallery/products/'.$category.'/';
        $folder4 = public_path() . '/gallery/products/'.$category.'/'.$year.'/';
        $folder5 = public_path() . '/gallery/products/'.$category.'/'.$year.'/pid-'.$product_id.'/';
        $directory = 'gallery/products/'.$category.'/'.$year.'/pid-'.$product_id.'/';

        if (!File::exists($folder1)) {
            File::makeDirectory($folder1);
        }
        if(!File::exists($folder2)) {
            File::makeDirectory($folder2);
        }
        if (!File::exists($folder3)){
            File::makeDirectory($folder3);
        }
        if (!File::exists($folder4)){
            File::makeDirectory($folder4);
        }
        if (!File::exists($folder5)){
            File::makeDirectory($folder5);
        }

        if ($request->hasfile('image_1')) {

            $file1 = $request->file('image_1');
            $image1 = $file1->getClientOriginalName();
            $path1 = $directory . $image1;

        } else {
            $path1 = "";
        }

        if($request->hasfile('image_2')){

            $file2 = $request->file('image_2');
            $image2 = $file2->getClientOriginalName();
            $path2 = $directory . $image2;

        } else {
            $path2 = "";
        }

        if($request->hasfile('image_3')){

            $file3 = $request->file('image_3');
            $image3 = $file3->getClientOriginalName();
            $path3 = $directory . $image3;

        } else {
            $path3 = "";
        }

        if($request->hasfile('image_4')){

            $file4 = $request->file('image_4');
            $image4 = $file4->getClientOriginalName();
            $path4 = $directory . $image4;

        } else {
            $path4 = "";
        }

        if($request->hasfile('image_5')){

            $file5 = $request->file('image_5');
            $image5 = $file5->getClientOriginalName();
            $path5 = $directory . $image5;

        } else {
            $path5 = "";
        }

        if($request->hasfile('image_6')){

            $file6 = $request->file('image_6');
            $image6 = $file6->getClientOriginalName();
            $path6 = $directory . $image6;

        } else {
            $path6 = "";
        }

        if($request->hasfile('image_7')){

            $file7 = $request->file('image_7');
            $image7 = $file7->getClientOriginalName();
            $path7 = $directory . $image7;

        } else {
            $path7 = "";
        }

        if($request->hasfile('image_8')){

            $file8 = $request->file('image_8');
            $image8 = $file8->getClientOriginalName();
            $path8 = $directory . $image8;

        } else {
            $path8 = "";
        }

        if($request->hasfile('image_9')){

            $file9 = $request->file('image_9');
            $image9 = $file9->getClientOriginalName();
            $path9 = $directory . $image9;

        } else {
            $path9 = "";
        }

        if($request->hasfile('image_10')){

            $file10 = $request->file('image_10');
            $image10 = $file10->getClientOriginalName();
            $path10 = $directory . $image10;

        } else {
            $path10 = "";
        }



        $affected = DB::table('products')
            ->where('product_id', $product_id)
            ->update([
                     'image_1'  => $path1,
                     'image_2'  => $path2,
                     'image_3'  => $path3,
                     'image_4'  => $path4,
                     'image_5'  => $path5,
                     'image_6'  => $path6,
                     'image_7'  => $path7,
                     'image_8'  => $path8,
                     'image_9'  => $path9,
                     'image_10' => $path10,
                     'is_imaged'=> 1]);

        if($affected){

            $file1->move($folder5, $path1);
            $file2->move($folder5, $path2);
            $file3->move($folder5, $path3);
            $file4->move($folder5, $path4);
            $file5->move($folder5, $path5);
            $file6->move($folder5, $path6);
            $file7->move($folder5, $path7);
            $file8->move($folder5, $path8);
            $file9->move($folder5, $path9);
            $file10->move($folder5,$path10);

            return redirect('/createProduct')->with('success','Product Images uploaded successfully.');

        }

    }




}
