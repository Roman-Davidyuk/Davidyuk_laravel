<?php

namespace App\Jobs\GenerateCatalog;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;




class GenerateGoodsFileJob extends AbstractJob
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
}

