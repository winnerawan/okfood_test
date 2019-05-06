<?php

namespace App\Http\Controllers\AdminAuth;

use App\Menu;
use App\Promotion;
use App\Restaurant;
use Illuminate\Http\Request;
use Image;
use Session;
use Storage;

class PromotionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $promotions = Promotion::all();
        $restaurants = Restaurant::all();
        return view('admin.promotion.index')->with(['promotions' => $promotions, 'restaurants' => $restaurants]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $restaurants = Restaurant::all();

        return view('admin.promotion.create')->withMenus($menus);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $menus = Menu::all();
        $promotion = new Promotion();

        $promotion->restaurant_id = $request->restaurant_id;
        $promotion->name = $request->name;
        $promotion->description = $request->description;
        $promotion->image = $request->image;

        $image = $request->file('image');
        $filename = time().'.'.$image->getClientOriginalExtension();
        $location = public_path('/images/'.$filename);
        Image::make($image)->resize(800, 400)->save($location);
        $promotion->image = $filename;

        $promotion->save();
        Session::flash('success', 'Promotion was successfully created!');

        return redirect()->route('admin.promotion.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $menus = Menu::all();
        $promotion = \App\Promotion::find($id);
        $restaurants = Restaurant::all();
        return view('admin.promotion.edit')->with(['promotion' => $promotion, 'restaurants' => $restaurants]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $menus = Menu::all();
        $promotion = \App\Promotion::find($id);

        $promotion->restaurant_id = $request->input('restaurant_id');
        $promotion->name = $request->input('name');
        $promotion->description = $request->input('description');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $location = public_path('/images/'.$filename);
            Image::make($image)->resize(800, 400)->save($location);
            $promotion->image = $filename;
        }
        
        $promotion->save();
        Session::flash('success', 'Promotion was successfully created!');

        return redirect()->route('admin.promotion.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $promotion = Promotion::find($id);
        Storage::delete($promotion->image);

        $promotion->delete();

        Session::flash('success', 'Promotion was successfully deleted!');

        return redirect()->route('admin.promotion.index');
    }
}
