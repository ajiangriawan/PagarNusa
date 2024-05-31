<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('password');
            $table->boolean('verified')->default(false);
            $table->string('role');
            $table->string('name');
            $table->enum('gender', ['male', 'female']);
            $table->string('birth_place');
            $table->date('birth_date');
            $table->text('address');
            $table->string('status');
            $table->string('occupation')->nullable();
            $table->string('profile_pic')->nullable();
            $table->string('member_no')->unique();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
