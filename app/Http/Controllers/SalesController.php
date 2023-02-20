<?php

namespace App\Http\Controllers;

use App\Jobs\SalesCsvProcess;
use Illuminate\Support\Facades\Bus;

class SalesController extends Controller
{
    public function view() {
        return view('upload');
    }

    public function upload() {
        if (request()->has('mycsv')) {
            // Get The Upload File From Request
            $data = file(request()->mycsv);

            // Create an empty Batch and then dispatch it
            $batch = Bus::batch([])->dispatch();

            // Chunk File to multi files
            $chunks = array_chunk($data, 1000);
            $header = [];
            foreach($chunks as $key => $chunk) {
                // Get File Content and save it as an array
                $data = array_map('str_getcsv', $chunk);

                if ($key === 0) {
                    $header = $data[0];
                    unset($data[0]);
                }
                // add The Job to the batch
                $batch->add(new SalesCsvProcess($data, $header));
            }
            // Return the batch to get the information about the process
            // return $batch->id ;
            return redirect(url('batch/'.$batch->id));
        }
        return 'please upload file';
    }

    public function batch() {
        $batchId = request()->id;
        $batch = Bus::findBatch($batchId);
        // $progress = $batch->progress;
        // return $progress;
        return view('batch-progress', compact('batch'));
    }
}
