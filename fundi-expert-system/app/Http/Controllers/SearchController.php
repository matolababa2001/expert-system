<?php
use App\Models\Expert;
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    //
}
public function index(Request $request)
{
    $query = $request->input('q');
    $experts = Expert::where('profession', 'LIKE', "%$query%")->get();
    return view('search.results', compact('experts'));
}