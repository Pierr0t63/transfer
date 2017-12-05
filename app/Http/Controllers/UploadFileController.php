<?php

namespace App\Http\Controllers;

use App\Http\Requests\fileRequest;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\File;

class UploadFileController extends Controller {
   public function index(){
      return view('welcome');
   }

   public function showUploadFile(fileRequest $request){
		$file = new File();
		$file->mail_from = $request->mail_from;
		$file->mail_to = $request->mail_to;
		$file->real_name = $request->image->getClientOriginalName();
		$file->unique_name = quickRandom(20);
		$file->save();



      $destinationPath = 'uploads/'.$file->unique_name;
      $request->image->move($destinationPath,$file->real_name);
      // $envoimail = SendMail($file->mail_from, $file->mail_to, $file->real_name, $file->unique_name);






      return redirect()->back()->with('message', 'Fichier uploadé avec succès !');
   }
}
