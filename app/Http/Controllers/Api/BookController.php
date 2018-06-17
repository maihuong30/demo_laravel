<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookController extends Controller
{

    public function getDemo(Request $request)
    {
        $result['status'] = 200;
        $result['message'] = 'Success';

        return response()->json($result);
    }
}