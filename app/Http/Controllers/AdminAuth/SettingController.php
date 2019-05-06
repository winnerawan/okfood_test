<?php

namespace App\Http\Controllers\AdminAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{
    public function index() {
        $tax = \App\Tax::find(1);
        $page = \App\Page::find(1);
        return view('admin.setting.index')->with(['tax' => $tax, 'page' => $page]);
    }

    public function update_tax(Request $request, $id)
    {
        $tax = Tax::find($id);
        $tax->tax = $request->input('tax');
        $tax->delivery_cost = $request->input('delivery_cost');

        $tax->save();

        return redirect()->route('admin.setting.index');
    }

    public function update_page(Request $request, $id)
    {
        $page = Page::find($id);
        $page->title = $request->input('title');
        $page->name = $request->input('name');
        $page->description = $request->input('description');
        $page->about = $request->input('about');
        $page->contact = $request->input('contact');
        $page->city = $request->input('city');
        $page->district = $request->input('district');
        $page->street = $request->input('street');
        $page->latitude = $request->input('latitude');
        $page->longitude = $request->input('longitude');

        $page->save();

        return redirect()->route('admin.setting.index');
    }

}
