<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FoodItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class FoodItemController extends Controller
{
    protected $validationArray = [
        'name' => 'required|string|max:255',
        'description' => 'required|string|max:255',
        'price' => 'required|numeric|min:0',
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $foodItems = FoodItem::where('user_id', $user->id)->paginate(10);


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
        $validatedData = $request->validate($this->validationArray);
        $foodItem = new FoodItem();
        $data['image_path'] =  Storage::put('food_images', $data['image_path']);
        $data['user_id'] = Auth::id();
        $foodItem->fill($data);
        $foodItem->save();

        return redirect()->route('admin.foodItems.index')->with('new_entry', $foodItem->name .' created successfully');

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
        $validatedData = $request->validate($this->validationArray);
        $foodItem = FoodItem::findOrFail($id);
        $data['image_path'] =  Storage::put('food_images', $data['image_path']);
        $data['user_id'] = Auth::id();
        $foodItem->update($data);

        return redirect()->route('admin.foodItems.index')->with('update', $foodItem->name .' updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(FoodItem $foodItem)
    {
        $oldFoodItem = $foodItem->name;
        $foodItem->delete();
        return redirect()->route('admin.foodItems.index')->with('delete', $oldFoodItem .' deleted successfully');
    }
}
