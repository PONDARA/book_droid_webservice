<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Book extends Controller
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
    public function create(Request $request)
    {

         if($request->hasFile('IMG_BOOK_FILE')){
            $book_imageg = $request->file('IMG_BOOK_FILE');
            $filename = time() . '.' . $book_imageg->getClientOriginalExtension();
            Image::make($book_imageg)->resize(300, 300)->save( public_path('/images/' . $filename ) );

            // $book = Books::create([
            // 'book_title' => $request->book_title,
            // 'author'=> $request->author,
            // 'book_image'=> $filename,
            // 'description' => $request->description,
            // 'cat_id' => $request->cat_id,
            // 'user_id' => $request->user_id,
            // 'book_type_id' => $request->book_type_id,
          ]);
         }
            
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
