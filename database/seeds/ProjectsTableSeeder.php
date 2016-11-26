<?php
use illuminate\Database\Seeder

class ProjectsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('projects')->delect();
    }
}