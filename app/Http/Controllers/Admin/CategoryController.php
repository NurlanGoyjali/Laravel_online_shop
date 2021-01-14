<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Table;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category_data = DB::table('categories')->get()->all();
       $count = 1;


       return view('admin.category',['category' => $category_data ,'ct'=> $count] );

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function AddHelper(){

        $data = DB::table('categories')->get()->where('parent_id' , 0);

        return view('admin.CategoryAdd',['data'=>$data] );


    }
    /**
     * Show the form for creating a new resource.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request){

        if ($request->isMethod('post')){
           DB::table('categories')->insert([
            'parent_id' => $request->input('Parent_id'),
            'title'=> $request->input('Title'),
            'keywords'=> $request->input('Keywords'),
            'description'=> $request->input('Description'),
            'slug'=> $request->input('Slug'),
            'image'=> $request->input('ImageController'),
            'status'=> $request->input('status'),
           ]);
        }
        return  redirect(route('admin.category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = DB::table('categories')->where('id' ,$id)->get()->first();
       // $id= DB::select('select * from categories where id=?',[$id]);
        //$data=$data[0];

       return view('admin.CategoryShow', ['rs'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        if ($request->isMethod('post')){

            DB::table('categories')->where('id',$id)->update([
                'parent_id' => $request->input('Parent_id'),
                'title'=> $request->input('Title'),
                'keywords'=> $request->input('Keywords'),
                'description'=> $request->input('Description'),
                'slug'=> $request->input('Slug'),
                'image'=> $request->input('ImageController'),
                'status'=> $request->input('status'),
            ]);

        }else{
            $data=DB::table('categories')->where('id',$id)->get()->first();
            return view('admin.CategoryUpdate',['rs'=>$data]);
        }

        return redirect()->route('admin.category.show',[$id] );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category , $id)
    {
        DB::table('categories')->where('id',$id)->delete();

        return redirect()->route('admin.category');
    }

}
