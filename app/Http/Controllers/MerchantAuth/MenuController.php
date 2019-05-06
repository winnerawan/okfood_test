<?php

namespace App\Http\Controllers\MerchantAuth;

use App\Category;
use App\Menu;
use App\Restaurant;
use Illuminate\Http\Request;
use Image;
use Session;
use Storage;
use DB;
use Auth;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $menus = DB::table('menus')->select('menus.*')->join('categories', 'menus.category_id', '=', 'categories.id')
        //                 ->join('restaurants', 'categories.restaurant_id', '=', 'restaurants.id')
        //                 ->where('restaurants.merchant_id', Auth::user()->id)
        //                 ->select('menus.*')
        //                 ->get();
        $menus = \App\Menu::join('categories', 'menus.category_id', '=', 'categories.id')->join('restaurants', 'categories.restaurant_id', 'restaurants.id')
                    ->where('restaurants.merchant_id', Auth::user()->id)->get(['menus.*']);
        $availabilitys = array([
            "id" => 1, "name" => 'Available'], ["id" => 0, "name" => 'Not Available']); 
        $categories = DB::table('restaurants')
                        ->select('*')->join('categories', 'categories.restaurant_id', '=', 'restaurants.id')
                        ->where('restaurants.merchant_id', Auth::user()->id)->get('categories.*');
                        // dd($menus);
        return view('merchant.menu.index')->with(['categories' => $categories,'menus' => $menus, 'availabilitys' => $availabilitys]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = DB::table('restaurants')
                        ->select('*')->join('categories', 'categories.restaurant_id', '=', 'restaurants.id')
                        ->where('restaurants.merchant_id', Auth::user()->id)->get('categories.*');

        return view('merchant.menu.create')->with(['categories'=> $categories]);
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
        $menu = new Menu();
        $menu->category_id = $request->category_id;
        $menu->name = $request->name;
        $menu->description = $request->description;
        $menu->price = $request->price;
        $menu->availability = $request->availability;

        $image = $request->file('image');
        $filename = time().'.'.$image->getClientOriginalExtension();
        $location = public_path('/images/'.$filename);
        Image::make($image)->resize(800, 400)->save($location);
        $menu->image = $filename;

        $menu->save();
        Session::flash('success', 'Menu was successfully created!');

        return redirect()->route('merchant.menu.index');
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
        $menu = Menu::find($id);
        $availabilitys = array([
            "id" => 1, "name" => 'Available'], ["id" => 0, "name" => 'Not Available']); 
        $categories = DB::table('restaurants')
                        ->select('*')->join('categories', 'categories.restaurant_id', '=', 'restaurants.id')
                        ->where('restaurants.merchant_id', Auth::user()->id)->get('categories.*');
        return view('merchant.menu.edit')->with(['menu'=> $menu,'categories' => $categories, 'availabilitys' => $availabilitys]);
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
        $menu = Menu::find($id);
        $menu->category_id = $request->input('category_id');
        $menu->name = $request->input('name');
        $menu->description = $request->input('description');
        $menu->price = $request->input('price');
        $menu->availability = $request->input('availability');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $location = public_path('/images/'.$filename);
            Image::make($image)->resize(800, 400)->save($location);
            $oldFilename = $menu->image;
            $menu->image = $filename;
            Storage::delete($oldFilename);
        }

        $menu->save();
        Session::flash('success', 'Menu was successfully updated!');

        return redirect()->route('merchant.menu.index');
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
        $menu = Menu::find($id);
        Storage::delete($menu->image);

        $menu->delete();

        Session::flash('success', 'Menu was successfully deleted!');

        return redirect()->route('merchant.menu.index');
    }
}
