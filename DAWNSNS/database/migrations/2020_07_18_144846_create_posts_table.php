<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts',function(Blueprint $table){
            $table->increments('id')->nullable(false)->autoIncrement();
            $table->integer('user_id');
            $table->string('posts',400);
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
        Schema::dropIfExists('posts');
    }
}
