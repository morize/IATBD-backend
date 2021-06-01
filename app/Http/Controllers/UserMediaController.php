<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\UserMedia;

class UserMediaController extends Controller
{
    public function show($userId){
        return UserMedia::where("user_id", "=", $userId)->first();
    }

    public function showImage($imageFileName){
        $pathToFile = "storage/user_images/{$imageFileName}";
        
        return response()->file($pathToFile);
    }

    public function store(Request $request, UserMedia $userMedia)
    {
        $userMedia->user_id = Auth::id();

        if($request->file('sitter_image_1')){
            $sitterFImage = $request->file('sitter_image_1');
            $sitterFImageName = $sitterFImage->getClientOriginalName();
            $sitterFImage->storeAs('user_images/', $sitterFImageName, 'public');

            $userMedia->image_1 =$sitterFImageName;
        }

        if($request->file('sitter_image_2')){
            $sitterSImage = $request->file('sitter_image_2');
            $sitterSImageName = $sitterSImage->getClientOriginalName();
            $sitterSImage->storeAs('user_images/', $sitterSImageName, 'public');

            $userMedia->image_2 = $sitterSImageName;
        }

        if($request->input('sitter_video_link')){
            $userMedia->video_link = $request->input('sitter_video_link');
        }

        try{
            $userMedia->save();
            return "success";
        }
        catch(Exception $e){
            return $e;
        }
    }

    public function update(Request $request, $userId)
    {
        $sitterMedia = UserMedia::where("user_id", "=", $userId)->first();
        
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
