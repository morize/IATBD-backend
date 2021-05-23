<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

use App\Models\UsersMedia;

class UsersMediaController extends Controller
{
    public function show($userId){
        return UsersMedia::where("user_id", "=", $userId)->first();
    }

    public function showImage($imageFileName){
        $pathToFile = "storage/user_images/{$imageFileName}";
        
        return response()->file($pathToFile);
    }

    public function store(Request $request, UsersMedia $usersMedia)
    {
        $usersMedia->user_id = Auth::id();

        if($request->file('sitter_image_1')){
            $sitterFImage = $request->file('sitter_image_1');
            $sitterFImageName = $sitterFImage->getClientOriginalName();
            $sitterFImage->storeAs('user_images/', $sitterFImageName, 'public');

            $usersMedia->image_1 =$sitterFImageName;
        }

        if($request->file('sitter_image_2')){
            $sitterSImage = $request->file('sitter_image_2');
            $sitterSImageName = $sitterSImage->getClientOriginalName();
            $sitterSImage->storeAs('user_images/', $sitterSImageName, 'public');

            $usersMedia->image_2 = $sitterSImageName;
        }

        if($request->input('sitter_video_link')){
            $usersMedia->video_link = $request->input('sitter_video_link');
        }

        try{
            $usersMedia->save();
            return "success";
        }
        catch(Exception $e){
            return $e;
        }
    }

    public function update(Request $request, $userId)
    {
        $sitterMedia = UsersMedia::where("user_id", "=", $userId)->first();
        
        if($request->file('sitter_image_1')){
            $sitterFImage = $request->file('sitter_image_1');
            $sitterFImageName = $sitterFImage->getClientOriginalName();
            $sitterFImage->storeAs('user_images/', $sitterFImageName, 'public');

            $sitterMedia->image_1 = $sitterFImageName;
        }

        if($request->file('sitter_image_2')){
            $sitterSImage = $request->file('sitter_image_2');
            $sitterSImageName = $sitterSImage->getClientOriginalName();
            $sitterSImage->storeAs('user_images/', $sitterSImageName, 'public');

            $sitterMedia->image_2 = $sitterSImageName;
        }

        if($request->input('sitter_video_link')){
            $sitterMedia->video_link = $request->input('sitter_video_link');
        }

        try{
            $sitterMedia->save();
            return "success";
        }
        catch(Exception $e){
            return $e;
        }
    }
}
