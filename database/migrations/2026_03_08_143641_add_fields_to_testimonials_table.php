<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('testimonials', function (Blueprint $table) {
            $table->string('business_name')->nullable()->after('name');
            $table->string('business_type')->nullable()->after('business_name');
            $table->text('testimonial')->nullable()->after('business_type');
            $table->string('photo')->nullable()->after('testimonial');
        });
    }

    public function down(): void
    {
        Schema::table('testimonials', function (Blueprint $table) {
            $table->dropColumn(['business_name', 'business_type', 'testimonial', 'photo']);
        });
    }
};
