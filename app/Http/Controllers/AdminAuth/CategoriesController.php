<?php

namespace App\Http\Controllers\AdminAuth;

use App\Category;
use Illuminate\Http\Request;
use Image;
use Session;
use Storage;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function api()
    {
        $categories = Category::all();

        return $categories;
    }

    public function index()
    {
        $categories = Category::paginate(10);
        $restaurants = \App\Restaurant::all();
        return view('admin.category.index')->with(['categories' => $categories, 'restaurants' => $restaurants]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
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

        $category->name = $request->name;
        $category->restaurant_id = $request->restaurant_id;
        // $image = $request->file('image');
        //   $filename = time() . '.' . $image->getClientOriginalExtension();
        //   $location = public_path('/images/' . $filename);
        //   Image::make($image)->resize(800, 400)->save($location);
        // $category->image = $filename;

        $category->save();
        Session::flash('success', 'Category was successfully created!');

        return redirect()->route('admin.category.index');
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
        $restaurants = \App\Restaurant::all();
        return view('admin.category.edit')->with(['category' => $category, 'restaurants' => $restaurants]);
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
        //   if ($request->hasFile('image')) {
        //     $image = $request->file('image');
        //     $filename = time() . '.' . $image->getClientOriginalExtension();
        //     $location = public_path('/images/' . $filename);
        //     Image::make($image)->resize(800, 400)->save($location);
        //     $oldFilename = $category->image;
        //     $category->image = $filename;
        //     Storage::delete($oldFilename);
        //   }
        $category->restaurant_id = $request->input('restaurant_id');
        $category->save();

        Session::flash('success', 'Menu was successfully updated!');

        return redirect()->route('admin.category.index');
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

        return redirect()->route('admin.category.index');
    }
}
