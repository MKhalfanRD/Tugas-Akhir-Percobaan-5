<?php

namespace App\Http\Controllers;

use App\Models\Uts;
use App\Http\Requests\StoreUtsRequest;
use App\Http\Requests\UpdateUtsRequest;
Use Illuminate\Http\Request;

class UtsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function table()
    {
        $data = Uts::all();
        return view('uts.table', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('uts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUtsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate(([
            'nama' => 'required',
            'npm' => 'required',
            'alamat' => 'required'
        ]));
        Uts::create($data);
        return back()->with('message', 'data telah diisi');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Uts  $uts
     * @return \Illuminate\Http\Response
     */
    public function show(Uts $uts)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Uts  $uts
     * @return \Illuminate\Http\Response
     */
    public function edit(Uts $uts)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUtsRequest  $request
     * @param  \App\Models\Uts  $uts
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUtsRequest $request, Uts $uts)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Uts  $uts
     * @return \Illuminate\Http\Response
     */
    public function delete(Uts $Uts)
    {
        $Uts->delete();
        return back();
    }
}
