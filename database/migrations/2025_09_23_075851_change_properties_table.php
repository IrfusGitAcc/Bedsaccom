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
        Schema::table('properties', function (Blueprint $table) {
            $table->enum('condition', ['To Let', 'Let Agreed'])->default('To Let')->after('property_type');
            $table->enum('bills', ['Included', 'Excluded','Show Both'])->default('Included')->after('condition');
            $table->enum('pets', ['Allowed', 'Not Allowed','Show Both'])->default('Not Allowed')->after('bills');
            $table->enum('furnishing', ['Unfurnished', 'Part Furnished','Furnished'])->default('Furnished')->after('pets');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('properties', function (Blueprint $table) {
            $table->dropColumn(['condition','bills','pets','furnishing']);
        });
    }
};
