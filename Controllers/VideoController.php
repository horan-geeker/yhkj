<?php
/**
 * Created by PhpStorm.
 * User: yinhuakeji
 * Date: 11/20/16
 * Time: 10:15 PM
 */
namespace Controllers;

use Models\File;
use Views\View;

class VideoController extends Controller
{
    public function show($id)
    {
        $video = File::find($id);
        $video->inc('read_count');
        View::view('video', ['video' => $video]);
    }
}