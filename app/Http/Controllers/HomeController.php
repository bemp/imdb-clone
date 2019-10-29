<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Movie;

class HomeController extends Controller
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

    public function index()
    {
        $data = [];
        $data['movies'] = Movie::paginate(self::LIMIT);
        return view('home/index')->with($data);
    }
}
