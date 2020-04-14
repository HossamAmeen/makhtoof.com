<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKidPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kid_posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('relative_relation')->nullable();
            $table->string('age');
            $table->string('age_before')->nullable();
            $table->string('blood_type')->nullable();
            $table->string('gender');
            $table->string('governate');
            $table->string('police')->nullable();
            $table->string('city');
            $table->string('street')->nullable();
            $table->text('detailed_address');
            $table->text('other_info');
            $table->string('url');
            $table->integer('category');
            $table->integer('user_id');
            $table->integer('status')->default(1);
            $table->string('message')->default('non');
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
        Schema::dropIfExists('kid_posts');
    }
}
