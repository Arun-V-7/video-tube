<?php


namespace App\Modules\User\Models;


use Illuminate\Database\Eloquent\Model;

class Videos extends Model
{

    protected $table = 'videos';
    protected $primaryKey = 'video_id';

    protected $connection = 'mysql';

    protected $fillable = [
        'video_path', 'tumbnail', 'title', 'description', 'created_at', 'updated_at'
    ];

    private static $instance;

    public static function getInstance()
    {
        if (!isset(self::$instance))
            self::$instance = new Videos();
        return self::$instance;
    }

    public function getVideosDetail(){
        try{
            $data = Videos::get();
            return $data;
        }catch (\Exception $e){
            return 0;
        }
    }

    public function getSuggessionVideosDetail(){
        try{
            $data = Videos::limit(5)->get();
            return $data;
        }catch (\Exception $e){
            return 0;
        }
    }

    public function getVideosDetailById($id){
        try{
            $data = Videos::where('video_id',$id)->first();
            return $data;
        }catch (\Exception $e){
            return 0;
        }
    }

    public function getVideosDetails($sort,$sortType){
        try{
            $data = Videos::orderBy($sort,$sortType)->get();
            return $data;
        }catch (\Exception $e){
            return 0;
        }
    }

    public function insertVideos($data){
        try{
            return Videos::insert($data);
        }catch (\Exception $e){
            return false;
        }
    }

}
