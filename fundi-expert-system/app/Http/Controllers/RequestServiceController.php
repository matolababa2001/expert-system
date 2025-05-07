<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServiceRequest;
use Illuminate\Support\Facades\Auth;

public function store(Request $request)
{
    ServiceRequest::create([
        'user_id' => Auth::id(),
        'expert_id' => $request->expert_id,
        'service' => $request->service,
        'details' => $request->details,
    ]);

    return back()->with('success', 'Request sent!');
}


class RequestServiceController extends Controller
{
    //
}
