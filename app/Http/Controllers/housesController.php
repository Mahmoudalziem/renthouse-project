<?php

namespace App\Http\Controllers;

use App\houses;
use App\sellers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class housesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){

        $this->middleware('auth:webAdmin')->except(['index','show']);
    }

    public function show($id)
    {

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sellers  = sellers::all();


        return view('houses.addhouse',['sellers' => $sellers]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if($request->has('images') && $request->exists('descri')){

            $title = $request->input('title');

            $location = $request->input('location');

            $price = $request->input('price');

            $lat = $request->input('lat');

            $log = $request->input('log');

            $sqft = $request->input('sqft');

            $seller = $request->input('seller');

            $property = $request->input('property');

            $bedroom = $request->input('bedroom');

            $bathroom = $request->input('bathroom');

            $descri = $request->input('descri');

            $promo = $request->input('promo');

            $images = $request->input('images');

            $unique_id = rand(11111, 9657659999);

            $obj = new houses();

            $obj->title = $title;

            $obj->location = $location;

            $obj->price = $price;

            $obj->latitude = $lat;

            $obj->longitude = $log;

            $obj->sqft = $sqft;

            $obj->seller = $seller;

            $obj->property = $property;

            $obj->bedroom = $bedroom;

            $obj->bathroom = $bathroom;

            $obj->descri = $descri;

            $obj->promo = $promo;

            $obj->unique_id = $unique_id;

            $obj->save();

            $lastId = $obj->id;

            $path = public_path('images/houses/' . $unique_id . '/');

            if(!is_dir($path)){

                mkdir($path);
            }

            for($x=0;$x<count($images);$x++){

                $imageContent = explode('**',$images[$x]);

                for($i=0;$i<count($imageContent);$i++){

                    $nameImage = $imageContent[0];

                    $sizeImage = $imageContent[1];

                    $contentImage = $imageContent[2];
                }

                $name = rand(11111, 99999) . '.jpg';

                $image1 = explode(';', $contentImage);

                $image2 = explode(',', $image1[1]);

                $image = base64_decode($image2[1]);

                file_put_contents($path.$name,$image);

                DB::table('images')->insert([
                    'name' => $nameImage,
                    'size' => $sizeImage,
                    'path' => 'images/houses/' . $unique_id . '/' . $name,
                    'course_id' => $lastId
                ]);
            }

            return 'done';
        }
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sellers  = sellers::all();

        $house = str_replace('_',' ',$id);

        $house = houses::where('title',$house)->get();

        $images = DB::table('images')->where('course_id',$house[0]->id)->orderBy('id')->get();

        return view('houses.updatehouse',['sellers' => $sellers,'house' => $house,'images' => $images]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        if($request->has('course_id') && $request->has('promo')){

            $id = $request->input('course_id');

            $title = $request->input('title');

            $location = $request->input('location');

            $price = $request->input('price');

            $lat = $request->input('lat');

            $log = $request->input('log');

            $sqft = $request->input('sqft');

            $seller = $request->input('seller');

            $property = $request->input('property');

            $bedroom = $request->input('bedroom');

            $bathroom = $request->input('bathroom');

            $descri = $request->input('descri');

            $promo = $request->input('promo');

            $obj = houses::find($id);

            $obj->title = $title;

            $obj->location = $location;

            $obj->price = $price;

            $obj->sqft = $sqft;

            $obj->seller = $seller;

            $obj->latitude = $lat;

            $obj->longitude = $log;

            $obj->property = $property;

            $obj->bedroom = $bedroom;

            $obj->bathroom = $bathroom;

            $obj->descri = $descri;

            $obj->promo = $promo;

            $obj->save();

            if($request->has('images')){

                $unique_id = $obj->unique_id;

                $images = $request->input('images');

                $path = public_path('images/houses/' . $unique_id . '/');

                for($x=0;$x<count($images);$x++){

                    $imageContent = explode('**',$images[$x]);

                    for($i=0;$i<count($imageContent);$i++){

                        $nameImage = $imageContent[0];

                        $sizeImage = $imageContent[1];

                        $contentImage = $imageContent[2];
                    }

                    $name = rand(11111, 99999) . '.jpg';

                    $image1 = explode(';', $contentImage);

                    $image2 = explode(',', $image1[1]);

                    $image = base64_decode($image2[1]);

                    file_put_contents($path.$name,$image);

                    DB::table('images')->insert([
                        'name' => $nameImage,
                        'size' => $sizeImage,
                        'path' => 'images/houses/' . $unique_id . '/' . $name,
                        'course_id' => $id
                    ]);
                }
            }

            return 'done';
        }
    }

    public function deleteImage(Request $request){

        if ($request->has('id')) {

            $id = $request->id;

            DB::table('images')->where('id',$id)->delete();

            return 'done';
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        if ($request->has('id')) {

            $id = $request->id;

            $obj = houses::find($id);

            $unique_id = $obj->unique_id;

            houses::delete_dir('images/houses/' . $unique_id);

            $obj->delete();
            
            DB::table('images')->where('course_id', $id)->delete();
        }
    }
}
