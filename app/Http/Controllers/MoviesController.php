<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Movie;

class MoviesController extends Controller
{
    const LIMIT = 10;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    public function detail($id)
    {
        $data = [];
        $data['movies'] = Movie::find($id);
        return view('movies/detail')->with($data);
    }
}
