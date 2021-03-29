<?php

namespace App\Http\Controllers;

use App\Enum\ImpressionsEnum;
use App\Tweet;
use Illuminate\Http\Request;

class ImpressionController extends Controller
{
    public function setImpression(Tweet $tweet){
        $impression = ImpressionsEnum::from(request('impression'));

        if($impressionRecord = $tweet->getImpressionRecordForLoggedUser($impression)){
            $impressionRecord->delete();
        }else{
            $tweet->setImpression(auth()->user(),$impression);
        }

        return back()->with(['success','Impression is set successfully']);
    }
}
