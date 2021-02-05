<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Message;
use App\Models\Category;
use App\Models\Product;
use App\Models\Settings;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public static function CategoryList(){

        return Category:: where('parent_id','0')->with('child')->get();

    }

   /* public static function ChildFinder($id){
        $children = Category::where('parent_id','=',$id)->get()->all();
        return view('home.index',['dot',$children]);
    }*/
    public static function SettingList(){

        return Settings::first();

    }

    public function index(){

    $datafor = Product::limit(6)->get();
    $data = Product::limit(3)->get();
    return view('home.index',['sliderdata'=>$data,'cdata'=>$datafor]);

    }

    public function CategoryPtoducts($id){
        $data = Product::where('category_id',$id)->get();
        return view('home.CategoryProducts',['cdata'=>$data]) ;

    }



    public function Ptoduct($id){

    $data = Product::find($id);
    $image= Image::where('product_id',$id)->get();

    return view('home.ProductDetail',['product'=>$data,'img'=>$image]) ;

}

    public function login(){

    return redirect('/');

    }

    public function AboutUs(){

        $data=Settings::find('aboutus');
        return view('home.Aboutus',['data',$data]);

    }

    public function References(){


        return view('home.Referances');

    }

    public function Contact(Request $request){

        if ($request->isMethod('post')){
            $data = new Message();
            $data->name = $request->input('name');
            $data->email = $request->input('email');
            $data->phone = $request->input('phone');
            $data->subject = $request->input('subject');
            $data->msg = $request->input('msg');
            $data->save();
            return redirect()->route('contact')->with('success','Mesajınız Gönderildi');
        }else
        return view('home.Contact');

    }


    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');

    }



    public function loginchk (Request $request){

        if ($request->isMethod('post')){

            $credentials = $request->only('email', 'password');

            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();

                return redirect()->intended('admin');
            }

            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);


        }else{

            return redirect('/');

        }





    }



}
