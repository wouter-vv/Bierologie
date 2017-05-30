<?php

namespace App\Http\Controllers;

use App\Beers;
use App\Breweries;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class BeersController extends Controller
{
    /**
     * show an overview of the beers
     */
    public function show()
    {
        $beers = Beers::orderBy('id', 'asc')->paginate(8);
        return view('beers.beers', array('beers' => $beers));
    }

    /**
     * show the details of a certain beer
     */
    public function detail($id)
    {
        // get the beer with its brewery
        $beer = Beers::findOrFail($id);
        $brewery = $beer->brewery;
        // get all the beers from the brewery
        $brewerybeers = Beers::where('brewery_id', '=', $brewery->id)->paginate(4);
        $rating = null;
        if(Auth::check()) {
            $rating = Auth::user()->beers->where('id', '=', $id)->first();
        }
        return view('beers.beerdetail', ['beer' => $beer,'brewery' => $brewery,'brewerybeers' => $brewerybeers,'rating' => $rating]);
    }

    /**
     * search (a) beer(s) in the database
     */
    public function search(Request $request)
    {
        // types is geen aparte tabel maar een enum
        $typesColl = Beers::all()->pluck('type', 'id');
        $types = [];
        array_push($types, "All types");
        foreach ( $typesColl as $type) {
            if(!in_array ($type, $types)) {
                array_push($types, $type);
            }
        }

        $results = Beers::join('breweries','breweries.id', '=', 'brewery_id');
        if ($request->beername) {


            $results = $results->where('beers.name', 'LIKE', '%'.$request->beername.'%');
        }
        if ($request->breweryname) {
            //dd($results, $request->beername);
            $results = $results->where('breweries.name', 'LIKE', '%'.$request->breweryname.'%');
        }

        if ($request->type) {
            if ($request->type>=0 && $request->type <= count($types)-1)
            $results = $results->where('type', '=', $types[$request->type]);

        }
        $results = $results->paginate(8, ['*', 'beers.name as beername', 'breweries.id as breweryid' ]);
        return view('beers.search', array('types' => $types,'beers' => $results));
    }

}
