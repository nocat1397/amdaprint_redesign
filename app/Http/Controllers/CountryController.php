<?php

namespace App\Http\Controllers;

use App\Usa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CountryController extends Controller
{
    public function usaCheck(Request $request)
    {
        $usa = Usa::where('zipcode','=',$request->zipcode)->first();
        // $usa = DB::table('Usas')->where('zipcode', $request->zipcode)->first();
        return $usa;
    }
}
