<?php


namespace App\Modules\Admin\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Modules\Admin\Models\Videos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class DashboardController extends Controller
{

    public function dashboard(Request $request){

        $videoDetailInstance =  Videos::getInstance();
        $videoDetailInstanceResponse = $videoDetailInstance->getVideosDetail();

        return view('Admin::dashboard');

    }

    public function dataSource(){
        $sort = "title";
        $sortType = 'asc';

        $videoDetailInstance =  Videos::getInstance();
        $data = $videoDetailInstance->getVideosDetails($sort, $sortType);

        return (['data'=>$data]);
    }

    public function uploadVideo(Request $request){

        try {

            $tumbnail_file_name = $_FILES['tumbnail']['name'];
            $tumbnail_file_size = $_FILES['tumbnail']['size'];
            $tumbnail_file_tmp = $_FILES['tumbnail']['tmp_name'];

            $video_file_name = $_FILES['video']['name'];
            $video_file_size = $_FILES['video']['size'];
            $video_file_tmp = $_FILES['video']['tmp_name'];

            $tumbnail_fileName = explode('.', $tumbnail_file_name)[0] . rand();
            $tumbnailPath = "/assets/tumbnails/" . $tumbnail_fileName . '.' . explode('.', $tumbnail_file_name)[1];



        $video_fileName = explode('.', $video_file_name)[0] . rand();
        $videoPath = "/assets/videos/" . $video_fileName . '.' . explode('.', $video_file_name)[1];

            $dataInput['video_path'] = $videoPath;
        $dataInput['tumbnail'] = $tumbnailPath;
        $dataInput['title'] = $request->title;
        $dataInput['description'] = $request->description;
//            dd($dataInput);
        move_uploaded_file($tumbnail_file_tmp, public_path() . $tumbnailPath);
        move_uploaded_file($video_file_tmp, public_path() . $videoPath);
//dd('s');
            $videoDetailInstance = Videos::getInstance();
            $response = $videoDetailInstance->insertVideos($dataInput);
//            dd($response);
            if ($response) {
                return (['code' => 200, 'message' => "Quiz Inserted Successfully"]);
            } else {
                return (['code' => 400, 'message' => "Error occur while uploading. Try again later!"]);
            }

        } catch (\Exception $e) {
            dd($e->getMessage());
            return (['code' => 400, 'message' => "Error occur while uploading. Try again later!"]);
        }

    }

}
