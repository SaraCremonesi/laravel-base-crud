<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shoe;

class ShoeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shoes = Shoe::all();

        return view('shoes.index', compact('shoes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('shoes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate($this->getValidationRules());

      $data = $request->all();

      $shoe = new Shoe();
      $shoe->fill($data);
      $saved = $shoe->save();

      if($saved) {
        $new_shoe = Shoe::orderBy('id', 'desc')->first();
        return redirect()->route('shoes.show', $new_shoe);
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Shoe $shoe)
    {
      return view('shoes.show', compact('shoe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Shoe $shoe)
    {
      return view('shoes.edit', compact('shoe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Shoe $shoe)
    {
      $request->validate($this->getValidationRules());
      $data = $request->all();
      $updated = $shoe->update($data);
      $shoe->save();

      if ($updated) {
        return redirect()->route('shoes.show', $shoe);
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shoe $shoe)
    {
      $shoe->delete();

      return redirect()->route('shoes.index');

    }

    // Aggiungo una funzione protetta creata da me per la validazione
    protected function getValidationRules() {
      return [
        'brand' => 'required|max:255',
        'model' => 'required|max:255',
        'color' => 'required|max:50',
        'size' => 'required|numeric|between:0,99.9',
        'price' => 'required|numeric|between:0,999.99'
      ];
    }
}
