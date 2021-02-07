<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $data = Faq::all();
       return view('admin.Faq' ,['faq'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if($request->isMethod('POST')){
            $data = new Faq;
            $data->question=$request->input('Question');
            $data->answer=$request->input('Answer');
            $data->status=$request->input('Status');
            $data->save();

            return redirect()->route('admin.faq');

        }
        else
            return view('admin.FaqCreate');
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
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function show(Faq $faq)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function edit(Faq $faq)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       if($request->isMethod('post')){
           $data = Faq::find($id);
           $data->question=$request->input('Question');
           $data->answer=$request->input('Answer');
           $data->status=$request->input('Status');
           $data->save();

           return redirect()->route('admin.faq');

       }else
           $data = Faq::find($id);
           return view('admin.FaqUpdate',['data'=>$data]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Faq::find($id);
        $data->delete();
        return redirect()->route('admin.faq');

    }
}
