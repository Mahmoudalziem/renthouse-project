<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rating extends Model
{
    protected $fillable = ['user_id','house_id','rating'];


    public static function fetchCountRating($id)
    {

        $house = rating::where('house_id',$id)->get();

        $rowCount = count($house);

        $arrayRating = [
            'ratingSum' => $rowCount . ' Review(s)',
            'rating' => []
        ];

        for ($x = 1; $x <= 5; $x++) {

            $house = rating::where('house_id', $id)->where('rating',$x)->get();

            $rowCount = count($house);

            array_push($arrayRating['rating'], '(' . $rowCount . ') Reviews');
        }

        return $arrayRating;
    }
}
