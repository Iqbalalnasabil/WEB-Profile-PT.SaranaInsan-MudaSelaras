<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contact;
use Illuminate\Support\Str;
class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contact::create([
            'alamat' => 'Yogyakarta',
            'nophone' => '021 52921599',
            'email' => 'info@sims.co.id',
            'working' => 'senin - jumat',
            'hours' => '08:00 - 16:00 WIB',
            'maps' => 'maps.com',
        ]);
    }
}
