<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $table = Author::all();

        
        return response()->json([
            "message" => "Load data success",
            "data" => $table
        ], 200); 
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
    public function store(Request $request)
    {
        $table = new Author();
        $table->name = $request->name;
        $table->email = $request->email;
        $table->gender = $request->gender;
        $table->hp = $request->hp;
        $table->save();  

        return $table;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $table = Author::find($id);
        if ($table){
            return $table;
        }else {
            return ["message" => "Data not found"];
        }
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
        $table = Book::find($id);
        if($table){
            $table->name = $request->name ? $request->name : $table->name;
            $table->email = $request->email ? $request->email : $table->email;
            $table->gender = $request->gender ? $request->gender : $table->gender;
            $table->hp = $request->hp ? $request->hp : $table->hp;
            $table->save();
            
            return $table;
        } else {
            return["message" => "Data not found"];
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $table = Author::find($id);
        if($table){
            $table->delete();
            return["message" => "Delete Succes"];
        } else {
            return["mesagge" => "Data not found"];
        }
    }
}
