<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id')->nullable(false)->autoIncrement();
            $table->string('username',255)->nullable(false);
            $table->string('mail',255)->nullable(false)->unique('mail');
            $table->string('password',255)->nullable(false)->unique('password');
            $table->string('bio',400)->nullable();
            $table->string('image',255)->default('dawn.png')->nullable();
            $table->timestamp('created_at')->nullable(false)->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('modified_at')->unllable(false)->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
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
