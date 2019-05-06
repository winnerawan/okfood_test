<?php

namespace App\Http\Controllers\MerchantAuth;

use App\Category;
use Illuminate\Http\Request;
use Image;
use Session;
use Storage;
use Auth;
use DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function api()
    {
        $categories = DB::table('restaurants')
                        ->select('*')->join('categories', 'categories.restaurant_id', '=', 'restaurants.id')
                        ->where('restaurants.merchant_id', Auth::user()->id)->get('categories.*');

        return $categories;
    }

    public function index()
    {
        $categories = DB::table('restaurants')
                        ->select('*')->join('categories', 'categories.restaurant_id', '=', 'restaurants.id')
                        ->where('restaurants.merchant_id', Auth::user()->id)->get('categories.*');

        return view('merchant.category.index')->withCategories($categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $restaurants = DB::table('merchants')
                        ->select('*')->join('restaurants', 'restaurants.merchant_id', '=', 'merchants.id')
                        ->where('merchant_id', Auth::user()->id)->get('restaurants.*');
        return view('merchant.category.create')->withRestaurants($restaurants);
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
        $category = new Category();

        $rest = \App\Restaurant::where('merchant_id', Auth::user()->id)->first();
        // dd($rest);
        $category->name = $request->name;
        $category->restaurant_id = $rest->id;

        $category->save();
        Session::flash('success', 'Category was successfully created!');

        return redirect()->route('merchant.category.index');
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
        $category = Category::find($id);
        $restaurants = DB::table('merchants')
                        ->select('*')->join('restaurants', 'restaurants.merchant_id', '=', 'merchants.id')
                        ->where('merchant_id', Auth::user()->id)->get('restaurants.*');

        return view('merchant.category.edit')->with(['category' => $category, 'restaurants'=> $restaurants]);
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
        $this->validate($request, [
            'name' => 'required|max:255',
          ]);

        $category = Category::find($id);

        $category->name = $request->input('name');
        // $category->restaurant_id = $request->input('restaurant_id');

        $category->save();

        Session::flash('success', 'Category was successfully updated!');

        return redirect()->route('merchant.category.index');
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
        $category = Category::find($id);
        //Storage::delete($category->image);

        $category->delete();

        Session::flash('success', 'Category was successfully deleted!');

        return redirect()->route('merchant.category.index');
    }
}
