<?php

namespace Database\Seeders; 
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeaturesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('tbl_features')->insert([
            ['name' => 'Model', 'description' => 'Represents the data structure and interacts with the database.'],
            ['name' => 'View', 'description' => 'Handles the presentation layer and user interface.'],
            ['name' => 'Controller', 'description' => 'Manages the application logic and acts as an intermediary between Model and View.'],
            ['name' => 'Routes', 'description' => 'Defines the URLs and maps them to appropriate controllers.'],
            ['name' => 'Middleware', 'description' => 'Filters HTTP requests entering the application.'],
            ['name' => 'Blade Templates', 'description' => 'Provides a powerful templating engine for views.'],
            ['name' => 'Migrations', 'description' => 'Allows version control for database schemas.'],
            ['name' => 'Seeders', 'description' => 'Populates the database with initial or test data.'],
            ['name' => 'Database', 'description' => 'Manages database connections and queries.'],
            ['name' => 'Eloquent ORM', 'description' => 'Provides an ActiveRecord implementation for working with the database.'],
        ]);
    }
}
