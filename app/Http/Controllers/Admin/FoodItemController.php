<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FoodItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FoodItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $foodItems = FoodItem::all();
       $foodItems = FoodItem::paginate(10);
      return view('admin.foodItems.index', compact('foodItems'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $food = new FoodItem();
        return view('admin.foodItems.create', compact('food'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $foodItems = new FoodItem();
        $data['user_id'] = Auth::id();
        $foodItems->create($data);

        return redirect()->route('admin.foodItems.index');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $food = FoodItem::findOrFail($id);
        return view('admin.foodItems.show', compact('food'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $food = FoodItem::findOrFail($id);
         return view('admin.foodItems.edit', compact('food'));
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
        $data = $request->all();
        $foodItems = FoodItem::findOrFail($id);
        $data['user_id'] = Auth::id();
        $foodItems->update($data);

        return redirect()->route('admin.foodItems.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(FoodItem $foodItem)
    {

        $foodItem->delete();
        return redirect()->route('admin.foodItems.index');
    }
}
