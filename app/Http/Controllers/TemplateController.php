<?php

namespace App\Http\Controllers;

use DB;
use App\Template;
use Illuminate\Http\Request;


class TemplateController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $id = DB::table('templates')->max('id');
        $data = DB::table('templates')->where('id', $id)->get();

        return view('admin.template-home',[
            'data' => $data
        ]);

    }

    public function about_page(){

        $id = DB::table('templates')->max('id');
        $data = DB::table('templates')->where('id', $id)->get();

        return view('admin.template-about',[
            'data' => $data
        ]);

    }

    public function buy_page(){

        $id = DB::table('templates')->max('id');
        $data = DB::table('templates')->where('id', $id)->get();

        return view('admin.template-buy',[
            'data' => $data
        ]);

    }

    public function logo_page(){

        $id = DB::table('templates')->max('id');
        $logo = DB::table('templates')->select('logo')->where('id', $id)->get();
        return view('admin.template-logo',[
            'logos' => $logo
        ]);

    }

    public function banner_page(){

        $id = DB::table('templates')->max('id');
        $banner = DB::table('templates')->select('banner')->where('id', $id)->get();
        return view('admin.template-banner',[
            'banners' => $banner
        ]);

    }

    public function contact_page(){

        $id = DB::table('templates')->max('id');
        $data = DB::table('templates')->where('id', $id)->get();

        return view('admin.template-contact',[
            'data' => $data
        ]);

    }

    public function how_work_page(){

        $id = DB::table('templates')->max('id');
        $data = DB::table('templates')->where('id', $id)->get();

        return view('admin.template-howWorks',[
            'data' => $data
        ]);

    }

    public function solution_page(){

        $id = DB::table('templates')->max('id');
        $data = DB::table('templates')->where('id', $id)->get();

        return view('admin.template-solution',[
            'data' => $data
        ]);

    }

    public function update_text(Request $request){

        $this->validate($request, [
            'company_name'      => 'required',
            'welcome_text'      => 'required',
            'introductory_text' => 'required',
        ]);

        $id = DB::table('templates')->max('id');

        $affected = DB::table('templates')
            ->where('id', $id)
            ->update([
                'company_name'      => $request->company_name,
                'welcome_text'      => $request->welcome_text,
                'introductory_text' => $request->introductory_text
            ]);
        if($affected){
           return redirect('/templateHome')->with('success', 'Data updated successfully.');
        }else{
            return redirect('/templateHome')->with('error', 'No change made.');
        }
    }



    public function update_about(Request $request){
        $this->validate($request, [
            'about_us'      => 'required',
            'why_to_choose' => 'required',
        ]);

        $id = DB::table('templates')->max('id');

        $affected = DB::table('templates')
            ->where('id', $id)
            ->update([
                'about_us'      => $request->about_us,
                'why_to_choose' => $request->why_to_choose,
            ]);

        if($affected){
            return redirect('/templateAbout')->with('success', 'Data updated successfully.');
        }else{
            return redirect('/templateAbout')->with('error', 'No change made.');
        }
    }



    public function update_contact(Request $request){

        $this->validate($request, [
            'contact'      => 'required',
        ]);

        $id = DB::table('templates')->max('id');

        $affected = DB::table('templates')
            ->where('id', $id)
            ->update([
                'contact'      => $request->contact,
            ]);

        if($affected){
            return redirect('/templateContact')->with('success', 'Data updated successfully.');
        }else{
            return redirect('/templateContact')->with('error', 'No change made.');
        }
    }


    public function update_how_buy(Request $request){

        $this->validate($request, [
            'how_to_buy'      => 'required',
        ]);

        $id = DB::table('templates')->max('id');

        $affected = DB::table('templates')
            ->where('id', $id)
            ->update([
                'how_to_buy'      => $request->how_to_buy,
            ]);

        if($affected){
            return redirect('/templateBuy')->with('success', 'Data updated successfully.');
        }else{
            return redirect('/templateBuy')->with('error', 'No change made.');
        }
    }


    public function update_how_works(Request $request){

        $this->validate($request, [
            'how_it_works'      => 'required',
        ]);

        $id = DB::table('templates')->max('id');

        $affected = DB::table('templates')
            ->where('id', $id)
            ->update([
                'how_it_works' => $request->how_it_works,
            ]);

        if($affected){
            return redirect('/templateHowWorks')->with('success', 'Data updated successfully.');
        }else{
            return redirect('/templateHowWorks')->with('error', 'No change made.');
        }
    }

    public function update_solution(Request $request){

        $this->validate($request, [
            'solution'      => 'required',
        ]);

        $id = DB::table('templates')->max('id');

        $affected = DB::table('templates')
            ->where('id', $id)
            ->update([
                'solution' => $request->solution,
            ]);

        if($affected){
            return redirect('/templateSolution')->with('success', 'Data updated successfully.');
        }else{
            return redirect('/templateSolution')->with('error', 'No change made.');
        }
    }



    public function upload_logo(Request $request){

        $folder = public_path() . '/gallery/logo/';
        $directory = 'gallery/logo/';

        if ($request->hasfile('logo')) {

            $file = $request->file('logo');
            $name = $file->getClientOriginalName();
            $path = $directory . $name;

        } else {
            $path = "";
        }

        $id = DB::table('templates')->max('id');

        $affected = DB::table('templates')
            ->where('id', $id)
            ->update([
                'logo'  => $path
            ]);

        if($affected){

            $file->move($folder, $path);

            return redirect('/templateLogo')
                ->with('success', 'Logo updated successfully!');
        }else{
            return redirect('/templateLogo')
                ->with('error', 'No change made');
        }

    }

    public function upload_banner(Request $request){

        $folder = public_path() . '/gallery/banner/';
        $directory = 'gallery/banner/';

        if ($request->hasfile('banner')) {

            $file = $request->file('banner');
            $name = $file->getClientOriginalName();
            $path = $directory . $name;

        } else {
            $path = "";
        }

        $id = DB::table('templates')->max('id');

        $affected = DB::table('templates')
            ->where('id', $id)
            ->update([
                'banner'  => $path
            ]);

        if($affected){

            $file->move($folder, $path);

            return redirect('/templateBanner')
                ->with('success', 'Banner updated successfully!');
        }else{
            return redirect('/templateBanner')
                ->with('error', 'No change made');
        }

    }

}
