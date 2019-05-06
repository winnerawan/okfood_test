<?php

namespace App\Http\Controllers\MerchantAuth;

use App\Merchant;
use App\Restaurant;
use App\Type;
use Illuminate\Http\Request;
use Image;
use Session;
use Srmklive\FlashAlert\Facades\FlashAlert;
use Storage;
use Auth;
use DB;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $merchant = Auth::user();
        $restaurants = Restaurant::all()->where('merchant_id', $merchant->id);

        // return $restaurants;
        return view('merchant.restaurant.index')->with(['restaurants' => $restaurants]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // if (sizeof(Auth::user()->restaurants)>=1)
        $types = Type::all();
        $merchants = Merchant::all();

        return view('merchant.restaurant.create')->with(['types' => $types, 'merchants' => $merchants]);
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
        $restaurant = new Restaurant();
        $restaurant->type_id = $request->type_id;
        $restaurant->merchant_id = Auth::user()->id;
        $restaurant->group_menu_id = 1;
        $restaurant->name = $request->name;
        $restaurant->description = $request->description;
        $restaurant->city = $request->city;
        $restaurant->district = $request->district;
        $restaurant->street = $request->street;
        $restaurant->contact = $request->contact;
        $restaurant->latitude = $request->latitude;
        $restaurant->longitude = $request->longitude;
        $restaurant->rating = 0;
        $restaurant->is_active = $request->is_active;
        $restaurant->priority = $request->priority;
        $restaurant->open = $request->open;
        $restaurant->close = $request->close;

        $image = $request->file('image');
        $filename = time().'.'.$image->getClientOriginalExtension();
        $location = public_path('/images/'.$filename);
        Image::make($image)->resize(800, 400)->save($location);
        $restaurant->image = $filename;

        $restaurant->save();
        Session::flash('success', 'Restaurant was successfully created!');

        return redirect()->route('merchant.restaurant.index');
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
        $restaurant = Restaurant::find($id);

        return view('merchant.restaurant.show')->withRestaurant($restaurant);
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
        $types = Type::all();
        $restaurant = Restaurant::find($id);
        $merchants = Auth::user();

        // return $merchant;
        return view('merchant.restaurant.edit')->with(['merchants' => $merchants, 'types'=> $types, 'restaurant'=> $restaurant]);
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
        $restaurant = Restaurant::find($id);

        //$restaurant->type_id = $request->input('type_id');
        //$restaurant->merchant_id = $request->input('merchant_id');
        $restaurant->name = $request->input('name');
        $restaurant->description = $request->input('description');
        $restaurant->city = $request->input('city');
        $restaurant->district = $request->input('district');
        $restaurant->street = $request->input('street');
        $restaurant->contact = $request->input('contact');
        $restaurant->latitude = $request->input('latitude');
        $restaurant->longitude = $request->input('longitude');
        //$restaurant->rating = $request->input('rating');
        //$restaurant->is_active = $request->input('is_active');
        //$restaurant->priority = $request->input('priority');
        $restaurant->open = $request->input('open');
        $restaurant->close = $request->input('close');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $location = public_path('/images/'.$filename);
            Image::make($image)->resize(800, 400)->save($location);
            $oldFilename = $restaurant->image;
            $restaurant->image = $filename;
            Storage::delete($oldFilename);
        }

        $restaurant->save();

        Session::flash('success', 'Restaurant was successfully updated!');

        return redirect()->route('merchant.restaurant.index');
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
        $restaurant = Restaurant::find($id);
        Storage::delete($restaurant->image);

        $restaurant->delete();

        Session::flash('success', 'Restaurant was successfully deleted!');

        return redirect()->route('merchant.restaurant.index');
    }
}
