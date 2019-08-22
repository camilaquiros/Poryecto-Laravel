<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAllTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title', 100);
            $table->string('image', 250);
            $table->text('description');
            $table->decimal('price', 8, 2); // 999.999,99
            $table->smallInteger('offer'); // 0 ó 1
            $table->smallInteger('rating');
            $table->timestamps();
        });

        Schema::create('categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 100);
            $table->timestamps();
        });

        Schema::create('subcategories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 100);
            $table->timestamps();
        });

        // Alter Table
        Schema::table('products', function (Blueprint $table) {
            //para que funcionen los seeder tengo que dejar lasfk nullables//
            $table->unsignedBigInteger('category_id')->after('offer')->nullable();
            $table->foreign('category_id')->references('id')->on('categories');

            $table->unsignedBigInteger('subcategory_id')->after('category_id')->nullable();
            $table->foreign('subcategory_id')->references('id')->on('subcategories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
          $table->dropForeign('products_subcategory_id_foreign');
          $table->dropColumn('subcategory_id');

          $table->dropForeign('products_category_id_foreign');
          $table->dropColumn('category_id');
        });
        Schema::dropIfExists('subcategories');
        Schema::dropIfExists('categories');
        Schema::dropIfExists('products');
    }
}
