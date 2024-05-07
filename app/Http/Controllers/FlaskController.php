<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FlaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
//        //
        $url = 'http://140.226.123.129:5000/phpbarchart/c921488f-cd651a4e-88483aaa-01683063-6338d780';

        // Make a GET request to the specified URL using file_get_contents()
        $data = file_get_contents($url);

        // Decode the JSON response into a PHP variable
        $jsonData = json_decode($data, true);
//
//        // You can access the JSON data as a PHP object or array
//        // For example, accessing a property of the JSON object
//        $property = $jsonData->property;
//
//        // Convert the PHP variable back to JSON
//        $responseJSON = json_encode($jsonData);
//
//        // Return the JSON response
////        header('Content-Type: application/json');
////        echo $responseJSON;
        return response()->json(["data" => $jsonData], 200, options: JSON_HEX_QUOT);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
