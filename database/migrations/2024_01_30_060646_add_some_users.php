<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Hash;


return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        User::create(
            array(
                'name' => 'john',
                'email' => 'john@gmail.com',
                'password' => Hash::make('johnspassword')

            )
        );
        User::create(
            array(
                'name' => 'andrea',
                'email' => 'andrea@gmail.com',
                'password' => Hash::make('andreaspassword')

            )
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
