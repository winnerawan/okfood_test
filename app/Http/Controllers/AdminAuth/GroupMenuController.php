<?php

namespace App\Http\Controllers\AdminAuth;

use App\GroupMenu;
use Illuminate\Http\Request;
use Image;
use Session;
use Storage;

class GroupMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groups = GroupMenu::all();

        return view('admin.group.index')->withGroups($groups);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.group.create');
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
        $group = new GroupMenu();

        $group->name = $request->name;

        $icon = $request->file('icon');
        $filename = time().'.'.$icon->getClientOriginalExtension();
        $location = public_path('/images/'.$filename);
        Image::make($icon)->save($location);
        $group->icon = $filename;

        $group->save();
        Session::flash('success', 'Group was successfully created!');

        return redirect()->route('admin.group.index');
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
        $type = GroupMenu::find($id);

        return view('admin.group.edit')->withType($type);
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
            'name'  => 'required|max:255',
            'image' => 'required',
          ]);

        $type = Type::find($id);

        $type->name = $request->input('name');
        if ($request->hasFile('icon')) {
            $image = $request->file('image');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $location = public_path('/images/'.$filename);
            Image::make($image)->resize(800, 400)->save($location);
            $oldFilename = $type->image;
            $type->image = $filename;
            Storage::delete($oldFilename);
        }
        $type->save();

        Session::flash('success', 'Type was successfully updated!');

        return redirect()->route('admin.group.index');
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
        $type = Type::find($id);
        Storage::delete($type->image);

        $type->delete();

        Session::flash('success', 'Type was successfully deleted!');

        return redirect()->route('admin.group.index');
    }
}
