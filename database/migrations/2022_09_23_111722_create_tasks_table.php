<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');//タスクの題名が入る
            $table->string('contents');//タスクの詳細が入る
            $table->text('image_at');
            $table->integer('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            $table->timestamps();//タスクの登録日・変更日
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
