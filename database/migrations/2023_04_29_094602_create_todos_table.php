<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTodosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('todos', function (Blueprint $table) {
            $table->id();
//            $table->foreignId('user_id');
            $table->string('title');
            $table->text('description');
            $table->tinyInteger('priority');
            $table->tinyInteger('is_completed');
            $table->timestamps();
        });
        Schema::table('todos', function (Blueprint $table) {
            $table->date('start_date')->nullable();
            $table->date('ended_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('todos');
    }
}
