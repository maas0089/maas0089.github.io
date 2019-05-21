<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TermsTableSeeder::class);
        $this->call(CoursesTableSeeder::class);
        $this->call(ContactsSeeder::class);
        $this->call(AssignmentsSeeder::class);
    }
}
