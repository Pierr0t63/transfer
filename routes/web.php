<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','UploadFileController@index');

Route::post('/','UploadFileController@showUploadFile');

Route::get('download/{folder}/{filename}', 'DownloadController@index');
Route::get('downloadInit/{folder}/{filename}', 'DownloadController@download')->name('downloadInit');


// Route::get('download/{folder}/{filename}', function ($folder,$filename)
// 	{
// 	    // Vérifie si le fichier existe dans storage/uploads
// 	    $file_path = storage_path() .'/uploads/'.$folder.'/'. $filename;
// 	    if (file_exists($file_path))
// 	    {
// 	        return Response::download($file_path, $filename);
// 	    }
// 	    else
// 	    {
// 	        exit('Le fichier demandé est introuvable.');
// 	    }
// 	});


