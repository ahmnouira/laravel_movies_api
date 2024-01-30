<?php

use App\Models\Movie;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Movie::create(array(
            'name' => 'Annie Hall',
            'release_year' => '1977'
        ));
        Movie::create(array(
            'name' => 'Manhattan',
            'release_year' => '1978'
        ));
        Movie::create(array(
            'name' => 'The Shining',
            'release_year' => '1980'
        ));
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
