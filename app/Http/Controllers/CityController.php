<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CityController extends Controller
{
   public function index(){
        $cities = DB:: SELECT("SELECT ID, NAME, COUNTRYCODE, POPULATION, DISTRICT FROM CITY LIMIT 10");
        return view("cities.index", compact("cities"));
   }
};
