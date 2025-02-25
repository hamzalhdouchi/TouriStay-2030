<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;


return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::statement("CREATE TABLE admin (
            role_id INT CHECK (role_id = 3)
        ) INHERITS (users);");
        DB::statement("ALTER TABLE admin ADD PRIMARY KEY (user_id);");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
