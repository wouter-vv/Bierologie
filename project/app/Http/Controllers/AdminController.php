<?php

namespace App\Http\Controllers;

use App\Http\Requests\EditRatingRequest;
use App\Ratings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * get the beers that the user rated
     */
    public function mybeers()
    {
        $user = Auth::user();
        $mybeers = Auth::user()->beers;

        return view('admin.mybeers', array('user' => $user, 'mybeers' => $mybeers));

    }

    /**
     * get data about the user
     */
    public function account()
    {
        $user = Auth::user();

        return view('admin.account', array('user' => $user));

    }

    /**
     * logout
     */
    public function logout()
    {
        Auth::logout();

        return redirect('/');

    }

    /**
     * edit the rating of a beer by a user
     */
    public function edit($id)
    {
        $rating = Auth::user()->beers->where('pivot.id', '=', $id)->first();

        return view('admin.edit', array('rating' => $rating));

    }

    /**
     * update newly rated data in the database
     */
    public function update(EditRatingRequest $request)
    {
        $rating = Auth::user()->rating
            ->find($request->id)
            ->update($request->except('id'));

        return redirect('/mybeers');
    }

    /**
     * add a rating
     */
    public function add(EditRatingRequest $request)
    {

        $rating = new Ratings();
        $rating->user_id = Auth::user()->id;
        $rating->beer_id = $request->id;
        $rating->score = $request->score;
        $rating->comment = $request->comment;

        Auth::user()->rating()
            ->save($rating);

        return redirect('/mybeers');
    }

    /**
     * remove a rating
     */
    public function delete(Request $request)
    {
        Auth::user()->rating->where('id', '=', $request->id)->first()->delete();

        return redirect('/mybeers');

    }

}
