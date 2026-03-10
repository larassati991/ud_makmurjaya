<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Skip renaming order column - keep it as is
        // Schema::table('categories', function (Blueprint $table) {
        //     $table->renameColumn('order', 'sort_order');
        // });
    }

    public function down(): void
    {
        // No action needed
    }
};
