<?php

namespace DevDojo\Chatter\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DevDojo\Chatter\Models\Category;

class ChatterController extends Controller
{
    public function index(){
    	$categories = Category::all();
    	return view('chatter::index', compact('categories'));
    }
}
