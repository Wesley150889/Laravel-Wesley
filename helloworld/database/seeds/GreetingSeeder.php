<?php

use Illuminate\Database\Seeder;

class GreetingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('greetings')->insert([
            ['greeting' => 'Hello, world!'],
            ['greeting' => 'Resistance is futile'],
            ['greeting' => 'hello how are you'],
            ['greeting'=> 'hello there'],
            ['greeting'=> 'hello how are you'],
            $this->call(GreetingSeeder::class)
    ]);

    }
}
