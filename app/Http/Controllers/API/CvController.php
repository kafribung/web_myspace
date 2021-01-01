<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class CvController extends Controller
{
    public function __invoke()
    {
        return response()->download(storage_path("app/public/cv/kafriansyah_cv.pdf"));
    }
}
