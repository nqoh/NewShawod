<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\CancellationRequest;
use App\Models\Cancellation;
use Illuminate\Support\Facades\Auth;

class CancellationController extends Controller
{
    public function store(CancellationRequest $request)
    {
        Cancellation::create([
            'user_id' => Auth::user()->id,
            'domain' => request('domain'),
            'reason' => request('reason'),
            'special_instructions' => request('special_instruction')
        ]);

        return redirect()->back()->with('cancellation','Your cancellation package request was successfully');
    }
}
