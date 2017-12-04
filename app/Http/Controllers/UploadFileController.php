<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\File;

class UploadFileController extends Controller {
   public function index(){
      return view('welcome');
   }

   public function showUploadFile(Request $request){
		$file = new File();
		$file->mail_from = $request->mail_from;
		$file->mail_to = $request->mail_to;
		$file->real_name = $request->image->getClientOriginalName();
		$file->unique_name = quickRandom(20);
		$file->save();

      $destinationPath = 'uploads/'.$file->unique_name;
      $request->image->move($destinationPath,$file->real_name);
   }
}