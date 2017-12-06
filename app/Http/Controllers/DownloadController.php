<?php

namespace App\Http\Controllers;

use Symfony\Component\HttpFoundation\Response;
use App\Http\Controllers\Controller;


class DownloadController extends Controller
{
    public function index($folder,$filename){
        return view('download',compact('folder','filename'));
    }

	public function download($folder,$filename)
	{
        // Vérifie si le fichier existe dans storage/uploads
        $file_path = storage_path() .'/uploads/'.$folder.'/'. $filename;
        if (file_exists($file_path))
        {
            return response()->download($file_path, $filename);
        }
        else
        {
            exit('Le fichier demandé est introuvable.');
        }
    }
}