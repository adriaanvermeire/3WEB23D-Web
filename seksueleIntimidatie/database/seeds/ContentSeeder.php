<?php

use Illuminate\Database\Seeder;
use App\Content;

class ContentSeeder extends Seeder
{
    include 'content.php';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < count($this->contentblocks); $i++) {
          Content::create($this->contentblocks[$i]);
        }
    }
}
