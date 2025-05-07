<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use Illuminate\Support\Facades\Auth;

public function store(Request $request)
{
    Review::create([
        'user_id' => Auth::id(),
        'expert_id' => $request->expert_id,
        'rating' => $request->rating,
        'comment' => $request->comment,
    ]);

    return back()->with('success', 'Review submitted!');
}


class ReviewController extends Controller
{
    //
}
