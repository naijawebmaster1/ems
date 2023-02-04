<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('mat_no');
            $table->string('YOSD');
            $table->string('phone_no');
            $table->string('CAC_registration')->nullable();
            $table->string('business_description');
            $table->string('business_capacity');
            $table->string('business_id');
            $table->string('message')->nullable();

            $table->string('laboratory')->nullable();
            $table->string('is_user')->nullable();
            $table->string('library')->nullable();
            $table->string('bursar')->nullable();
            $table->string('hostel')->nullable();
            $table->string('faculty')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}