<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\BlogPost;

class BlogPostAfterCreateJob implements ShouldQueue
{
    /**
     * @var BlogPost
     */
    private $blogPost;
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Execute the job.
     */
    public function __construct(BlogPost $blogPost)
    {
        $this->blogPost = $blogPost;
    }

    public function handle()
    {
        logs()->info("Створено новий запис в блозі [{$this->blogPost->id}]");
    }

}
