<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeenPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seen_posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->double('age');
            $table->string('gender');
            $table->string('governate');
            $table->string('city');
            $table->text('detailed_address');
            $table->text('other_info');
            $table->string('url');
            $table->integer('user_id');
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
        Schema::dropIfExists('seen_posts');
    }
}
