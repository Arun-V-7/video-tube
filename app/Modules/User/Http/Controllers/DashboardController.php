<?php


namespace App\Modules\User\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Modules\User\Models\Videos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{

    public function dashboard(Request $request){

        $videoResultDetailInstance =  Videos::getInstance();
        $responce = $videoResultDetailInstance->getVideosDetail();
        if ($responce){
            return view('home',['video'=>$responce]);
        }else{
            return view('home');
        }

    }

    public function video(Request $request,$id){

        $videoResultDetailInstance =  Videos::getInstance();
        $responce = $videoResultDetailInstance->getVideosDetailById($id);
        $suggessions = $videoResultDetailInstance->getSuggessionVideosDetail();
        if ($responce){
            return view('User::video',['video'=>$responce,'suggessions'=>$suggessions]);
        }else{
            return view('User::video');
        }

    }



}
