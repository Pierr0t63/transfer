<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Carbon;
use App\Models\File;

class CleanFiles extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'files:clean';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $numDays = 3;
        $files = File::whereRaw("created_at < '".Carbon::now()->subDays($numDays)."'")->get();
        foreach ($files as $f) {
            $path = 'storage/uploads/';
            $filename = $path.$f->unique_name.'/'.$f->real_name;
            $foldername = $path.$f->unique_name;
            if(file_exists($filename)){
                unlink($filename);
                unlink($foldername);   
            }
            
        }
    }
}
