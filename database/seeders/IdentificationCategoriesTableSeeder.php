<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IdentificationCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //fetch from  file and run
        $identification_categories = include __DIR__.'/IdentificationCategoriesSeeder.php';
        DB::table('identification_types')->insert($identification_categories);

    }
}
