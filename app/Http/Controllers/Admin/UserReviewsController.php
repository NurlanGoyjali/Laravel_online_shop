<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;

class UserReviewsController extends Controller
{
    public function index()
    {
        $data = Review::all();
        return view('admin.Reviews',['review'=>$data]);

    }

    public function destroy($id )
    {
        Review::find($id)->delete();
        return redirect()->route('admin.review');

    }
}
