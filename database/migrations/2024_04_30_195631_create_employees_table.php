<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->enum('status', ['active', 'inactive']);
            $table->json('skills');
            $table->json('hobbies');
            $table->date('joining_date');
            $table->decimal('salary', 8, 2);
            $table->longText('addresss');
            $table->timestamps();
        });
    }
};
