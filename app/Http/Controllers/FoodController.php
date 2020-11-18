<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $foods = Food::all();

        return view('admin.foods', compact('foods'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.foods.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Validator::make($request->all(), Food::$create_rule)->validate();

        $food = new Food();
        $food->namevn = $request->namevn;
        $food->namejp = $request->namejp;
        $food->price = $request->price;

        $icon_url = Storage::disk('public')->put('images', $request->file('image'));
        $food->image = $icon_url;

        $food->status = $request->status;
        $food->save();

        return Redirect::route('admin.foods.index')->with('success', '新しい料理を追加しました');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $food = Food::find($id);

        return view('admin.foods.show')->with('food', $food);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function edit(Food $food)
    {
        $food = Food::find($food->id);

        if (!empty($food)) {

            return view('admin.foods.edit')->with('food', $food);
        }

        return Redirect::back()->with('この料理が存在してない');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $food = Food::find($id);

        if (!empty($food)) {
            $food->namevn = $request->input('namevn');
            $food->namejp = $request->input('namejp');
            $food->price = $request->input('price');

            if ($request->hasFile('icon')) {
                Storage::disk('public')->delete($food->image);

                $icon_path = Storage::disk('public')->put('images', $request->file('image'));
                $food->image = $icon_path;
            }
            $food->status = $request->input('status');
            $food->save();

            return Redirect::Route('admin.foods.index')->with('update_success', "編集できた: " . ($food->namejp));
        }

        return Redirect::route('admin.foods.index')->with('update_fail', ' アップデート失敗');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function destroy(Food $food)
    {
        $food = Food::find($food->id);
        $food->delete();

        return Redirect::route('admin.foods.index')->with('delete',$food->namejp.' を削除しました');
    }
}
