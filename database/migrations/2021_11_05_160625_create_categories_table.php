<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            /*
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('description')->nullable();
            $table->string('photo')->nullable();
            $table->unsignedInteger('parent_id')->nullable();
            $table->boolean('is_parent')->default(false);
            $table->enum('status',['active','inactive'])->default('active');
            $table->foreign('parent_id')->references('id')->on('categories')->onDelete('set null');
            */
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
        Schema::dropIfExists('categories');
    }
}
