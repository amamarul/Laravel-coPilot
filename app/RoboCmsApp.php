<?php

namespace App;

use Illuminate\Foundation\Application;

class RoboCmsApp extends Application
{
    public function publicPath()
    {
        return $this->basePath.DIRECTORY_SEPARATOR.'public_html';
    }
}