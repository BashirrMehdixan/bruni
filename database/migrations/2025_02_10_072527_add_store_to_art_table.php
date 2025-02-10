<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('art', function (Blueprint $table) {
            $table->integer('price')->nullable()->after('category_id');
            $table->boolean('store')->default(true)->after('price');
            $table->boolean('work')->default(true)->after('store');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('art', function (Blueprint $table) {
            //
        });
    }
};
