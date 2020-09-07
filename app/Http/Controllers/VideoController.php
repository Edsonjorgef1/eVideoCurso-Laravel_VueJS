<?php

namespace App\Http\Controllers;

use App\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Traits\UploadVideos;
use Storage;

class VideoController extends Controller
{

    use UploadVideos;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $files = $request->file('videos');

        if($files){

            foreach ($files as $file){

                // Make a image name based on user name and current timestamp
                $name = Str::random(16);
                $videoPath = '/uploads/videos/' . $name . '.' . $file->getClientOriginalExtension();

                // dd($videoPath);
                $video = new Video();

                // dd($request->course_id);                
                $video->title       =   pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
                $video->image_url   =   $request->image_url;
                $video->category_id =   $request->category_id;
                $video->channel_id  =   $request->channel_id;
                $video->course_id   =   $request->course_id;
                $video->user_id     =   auth()->id();
                $video->video_url   =   $this->handleVideoUpload($file, $name);
                $video->duration    =   $this->getVideoDuration($videoPath);

                $video->save();
            }

            return redirect()->back()->with(['message' => '('. count($files). ') videos carregados com sucesso. ']); 

        } else {  
                
            return redirect()->back()->with(['message' => 'Nenhum video foi seleccionado. Por favor, seleccione videos primeiro!!!']); 
            }
    
}
        // Run this on terminal: $ composer require james-heinrich/getid3
        private function getVideoDuration ($videoPath){
            $getID3 = new \getID3;
            $file = $getID3->analyze('storage' . $videoPath);
            // $duration = date('H:i:s.v', $file['playtime_seconds']);
            $duration = date('H:i:s', $file['playtime_seconds']);
            return $duration; 
        }
    
        private function handleVideoUpload($video, $name)
        {
                // Define folder path
                $folder = '/uploads/videos/';
                // Make a file path where image will be stored [ folder path + file name + file extension]
                $filePath = $folder . $name. '.' . $video->getClientOriginalExtension();
                // Upload image
                $this->uploadVideo($video, $folder, 'public', $name);
    
            return $filePath;

        }

    /**
     * Display the specified resource.
     *
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function show(Video $video)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function edit(Video $video)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Video $video)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function destroy(Video $video)
    {
        //
    }
}
