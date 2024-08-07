<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Schema::create('stockstatus', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('name')->unique();
        //     $table->string('description');
        //     $table->timestamps();
        // });

        DB::table('stockstatus')->insert([
            [
                'name' => 'available',
                'description' => 'directly available',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'soon available',
                'description' => 'within 5 working days',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'not available',
                'description' => 'not available',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stockstatus');
    }
};
