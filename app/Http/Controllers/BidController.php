<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBidRequest;
use App\Models\Bid;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Support\Facades\Auth;

class BidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index(Auth $auth)
    {
        $data = Bid::query()->where('user_id', '=', Auth::user()->id)->get();
        return view('bid.list', [
            "bids" => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('bid.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\StoreBidRequest $request
     * @param Auth $auth
     * @return Application|Factory|\Illuminate\Contracts\View\View
     */
    public function store(StoreBidRequest $request, Auth $auth)
    {
        $validated = $request->validated();
        $file_name = null;
        if ($request->hasFile('file')) {
            $validated['file']->store('files');
            $file_name = $validated["file"]->path();
        }
        Bid::create([
            "name" => $validated["bid_name"],
            "phone" => $validated["phone"],
            "company" => $validated["company"],
            "message" => $validated["message"],
            "user_id" => $auth::user()->id,
            "file_name" => $file_name
        ]);
        return redirect("bid");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bid  $bid
     * @return \Illuminate\Http\Response
     */
    public function show(Bid $bid)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bid  $bid
     * @return \Illuminate\Http\Response
     */
    public function edit(Bid $bid)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBidRequest  $request
     * @param  \App\Models\Bid  $bid
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBidRequest $request, Bid $bid)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bid  $bid
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bid $bid)
    {
        //
    }
}
