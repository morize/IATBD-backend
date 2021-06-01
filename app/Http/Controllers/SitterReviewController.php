<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\SitterReview;
use App\Models\SitterRequest;

class SitterReviewController extends Controller
{
    public function show($sitterId){
        return SitterReview::where('sitter_id', '=', $sitterId)->get();
    }

    public function store(Request $request, SitterReview $sitterReview){
        $request->validate([
            'sitter_rating' => 'required|numeric|min:1|max:5',
        ]);
        
        
        $sitterId = SitterRequest::where('id', "=", intval($request->input('sitter_request_id')))->first()->mySitter->id;
        
        $sitterReview->sitter_id = $sitterId;
        $sitterReview->reviewer_id = $request->input('reviewer_id');
        $sitterReview->rating = $request->input('sitter_rating');
        $sitterReview->review = $request->input('sitter_review');

        try{
            $sitterReview->save();
        }
        catch(Exception $e){
            return $e;
        }
    }
}
