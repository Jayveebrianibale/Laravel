<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function getTest()
    {
        return response()->json(['message' => 'GET request']);
    }

    public function postTest(Request $request)
    {
        return response()->json(['message' => 'POST request', 'data' => $request->all()]);
    }

    public function putTest(Request $request)
    {
        return response()->json(['message' => 'PUT request', 'data' => $request->all()]);
    }

    public function patchTest(Request $request)
    {
        return response()->json(['message' => 'PATCH request', 'data' => $request->all()]);
    }

    public function deleteTest()
    {
        return response()->json(['message' => 'DELETE request']);
    }
}

