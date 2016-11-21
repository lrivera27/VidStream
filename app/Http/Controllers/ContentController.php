<?php

namespace App\Http\Controllers;
use App\content;
use Illuminate\Http\Request;

use App\Content;
class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['action'] = Content::where('genre', 'LIKE', '%Action%')
                        ->orderBy('year', 'desc')
                        ->limit(10)->get();
        $data['comedy'] = Content::where('genre', 'LIKE', '%Comedy%')
                        ->orderBy('year', 'desc')
                        ->limit(10)->get();
        $data['horror'] = Content::where('genre', 'LIKE', '%Horror%')
                        ->orderBy('year', 'desc')
                        ->limit(10)->get();


        return view('content-data.content', $data);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    //============================
    //          POST
    //============================
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
