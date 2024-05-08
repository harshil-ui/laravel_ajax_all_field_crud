<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('positions', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->timestamps();
        });

        Schema::table('employees', function (Blueprint $table) {
            $table->foreignUuid('demparment_id')->after('name');
            $table->foreignUuid('position_id')->after('demparment_id');
        });
    }
};
