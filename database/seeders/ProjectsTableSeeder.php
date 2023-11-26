<?
// database/seeders/ProjectsTableSeeder.php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('projects')->insert([
            'title' => 'Sample Project 1',
            'description' => 'Description for Sample Project 1.',
        ]);

        DB::table('projects')->insert([
            'title' => 'Sample Project 2',
            'description' => 'Description for Sample Project 2.',
        ]);

        // Add more sample projects as needed
    }
}
?>