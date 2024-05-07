<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataUpload extends Controller
{
    /**
     * Update the avatar for the user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function upload(Request $request)
    {
        echo "Test Passed";
//        $file = $request->file('avatar')->storePubliclyAs('avatars');
//
//        printf($file);

//        return $file;
    }
}
