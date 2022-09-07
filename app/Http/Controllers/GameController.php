<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\Game;
use App\Models\User;
use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $game = Game::all();
        $cards = Card::all();
        $users = User::all();
        return view('games.index', compact('game', 'cards', 'users'));
    }

    // echo hexadecimalAzar(5);

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $game = Game::all();
        $characters = "0123456789abcdef";
        $azar =  '';
        for($i=0; $i<$characters; $i++){

            $azar .= $characters[rand(0,strlen($characters)-1)];

        }
        return view('games.create', compact('game', 'azar'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $games = new Game();
        $games->document_type = $request->input('document_type');
        // $apprentice->document_number = $request->input('document_number');
        // if($request->hasFile('identify_document')){
        //     $apprentice->identify_document = $request->file('identify_document')->store('public/students/identify_document/');
        // }

        $games->save();
        return view('games');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $games = Game::find($id);
        return view('games.show', compact('games'));
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
