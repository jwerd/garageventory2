<?php

namespace Database\Seeders;

use App\Models\Account;
use App\Models\Contact;
use App\Models\Organization;
use App\Models\User;
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
        $account = Account::create(['name' => 'Wendy\'s Garage']);

        User::factory()->create([
            'account_id' => $account->id,
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'password' => 'secret',
        ]);
    }
}
