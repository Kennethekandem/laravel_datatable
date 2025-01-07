<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Contact::factory(20)->create()->each(function ($contact) {
            \App\Models\Votes::factory()->create([
                'contact_id' => $contact->id
            ]);
        });
    }
}
