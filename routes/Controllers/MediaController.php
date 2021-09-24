<?php
namespace App\Http\Controllers;

use \ctf0\MediaManager\App\Controllers\MediaController as Base;

class MediaController extends Base
{

    protected function resolveUrl($path) {
        return $this->clearDblSlash("/open-file/{$path}");
    }

    public function openFile($path) {
        return response()->file(storage_path('app/'.$path));
    }

}
