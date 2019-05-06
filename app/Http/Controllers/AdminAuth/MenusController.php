<?php

namespace App\Http\Controllers\AdminAuth;

use App\Category;
use App\Menu;
use App\Restaurant;
use Illuminate\Http\Request;
use Image;
use Session;
use Storage;
use DB;

class MenusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = Menu::paginate(10);
        $restaurants = Restaurant::all();
        $categories = Category::all();
        $availabilitys = array([
            "id" => 1, "name" => 'Available'], ["id" => 0, "name" => 'Not Available']); 
        // echo json_encode($availabilitys);
        return view('admin.menu.index')->with(['menus' => $menus,
                 'categories'=> $categories, 
                 'restaurants'=>$restaurants,
                 'availabilitys'=> $availabilitys
                 ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $restaurants = Restaurant::all();

        return view('admin.menu.create')->with(['categories'=> $categories, 'restaurants'=>$restaurants]);
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
        $menu->restaurant_id = $request->restaurant_id;
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

        return redirect()->route('admin.menu.index');
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
        $restaurants = Restaurant::all();
        $categories = Category::all();
        $availabilitys = array([
            "id" => 1, "name" => 'Available'], ["id" => 0, "name" => 'Not Available']); 
        return view('admin.menu.edit')->with(['menu'=>$menu, 'restaurants'=> $restaurants, 'categories' => $categories, 'availabilitys'=> $availabilitys]);
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
        // $menu->restaurant_id = $request->input('restaurant_id');
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

        return redirect()->route('admin.menu.index');
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

        return redirect()->route('admin.menu.index');
    }

    public function getCategories($restaurant_id) {
        $categories = DB::table("categories")->where("restaurant_id", $restaurant_id)->pluck("name", "id");
        return json_encode($categories);
    }
}
