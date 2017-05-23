<?php

namespace App\Http\Controllers;

use App\Ratings;
use Illuminate\Http\Request;
use App\Http\Requests\EditRatingRequest;

use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function mybeers()
    {
        $user = Auth::user();
        $mybeers = Auth::user()->beers;


        return view('mybeers', array('user' => $user, 'mybeers' => $mybeers));

    }

    public function account()
    {
        $user = Auth::user();
        return view('account', array('user' => $user));

    }


    public function logout()
    {
        Auth::logout();

        return redirect('/');

    }

    public function edit($id)
    {
        $rating = Auth::user()->beers->where('pivot.id','=',$id)->first();
        return view('admin.edit', array('rating' => $rating));

    }
    public function update(EditRatingRequest $request)
    {
        $rating = Auth::user()->rating
                              ->find($request->id)
                              ->update($request->except('id'));


        return redirect('/mybeers');
    }

    public function delete(Request $request)
    {
        Auth::user()->beers->where('pivot.id','=',$request->id)->first()->delete();

        return redirect('/mybeers');

    }

}
