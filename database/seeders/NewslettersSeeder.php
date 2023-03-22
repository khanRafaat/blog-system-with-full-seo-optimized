<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Newsletter;

class NewslettersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Newsletter::create([

          

            'email' => 'marketingclippingworld13@gmail.com',


        ]);
    }
}