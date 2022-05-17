<?php

namespace App\Http\Controllers;

use App\Models\KontakModel;
use App\Http\Requests\StoreKontakModelRequest;
use App\Http\Requests\UpdateKontakModelRequest;

class KontakModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreKontakModelRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreKontakModelRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KontakModel  $kontakModel
     * @return \Illuminate\Http\Response
     */
    public function show(KontakModel $kontakModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KontakModel  $kontakModel
     * @return \Illuminate\Http\Response
     */
    public function edit(KontakModel $kontakModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKontakModelRequest  $request
     * @param  \App\Models\KontakModel  $kontakModel
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateKontakModelRequest $request, KontakModel $kontakModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KontakModel  $kontakModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(KontakModel $kontakModel)
    {
        //
    }
}
