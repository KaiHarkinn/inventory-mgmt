<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserPhnoRequest;
use App\Http\Requests\UpdateUserPhnoRequest;
use App\Models\UserPhno;

class UserPhnoController extends Controller
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
     * @param  \App\Http\Requests\StoreUserPhnoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserPhnoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserPhno  $userPhno
     * @return \Illuminate\Http\Response
     */
    public function show(UserPhno $userPhno)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserPhno  $userPhno
     * @return \Illuminate\Http\Response
     */
    public function edit(UserPhno $userPhno)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserPhnoRequest  $request
     * @param  \App\Models\UserPhno  $userPhno
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserPhnoRequest $request, UserPhno $userPhno)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserPhno  $userPhno
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserPhno $userPhno)
    {
        //
    }
}
