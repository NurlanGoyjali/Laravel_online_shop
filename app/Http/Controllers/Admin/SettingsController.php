<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = DB::table('settings')->get()->first();

        if ($request->isMethod('POST')){
            DB::table('settings')->update([
                'title'=>$request->input('Title'),
                'keywords'=>$request->input('Keywords'),
                'description'=>$request->input('Description'),
                'company'=>$request->input('Company'),
                'phone'=>$request->input('Phone'),
                'fax'=>$request->input('Fax'),
                'email'=>$request->input('Mail'),
                'smtpserver'=>$request->input('Smtpserver'),
                'smtppassword'=>$request->input('Smtppassword'),
                'smtpport'=>$request->input('Smtpport'),
                'smtpemail'=>$request->input('Smtpemail'),
                'facebook'=>$request->input('Facebook'),
                'instagram'=>$request->input('Instagram'),
                'twitter'=>$request->input('Twitter'),
                'youtube'=>$request->input('Youtube'),
                'contact'=>$request->input('Contact'),
                'references'=>$request->input('References'),
                'aboutus'=>$request->input('Aboutus'),
                'status'=>$request->input('Status'),
            ]);
            $data = DB::table('settings')->get()->first();
            return view('admin.settings',['rs'=>$data]);

        }elseif (empty($data)){
            $data = DB::table('settings')->insert([
                'title'=>'Laravel Project'
            ]);
            Log::info('post if i ');
            return view('admin.settings',['rs'=>$data]);
        }else{
            return view('admin.settings',['rs'=>$data]);
        }


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\Settings  $settings
     * @return \Illuminate\Http\Response
     */
    public function show(Settings $settings)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Settings  $settings
     * @return \Illuminate\Http\Response
     */
    public function edit(Settings $settings)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Settings  $settings
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Settings $settings)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Settings  $settings
     * @return \Illuminate\Http\Response
     */
    public function destroy(Settings $settings)
    {
        //
    }
}
