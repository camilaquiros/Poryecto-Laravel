<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 100);
            $table->text('description');
            $table->timestamps();
            $table->string('image', 250);
        });

        Schema::table('services', function (Blueprint $table) {
            //para que funcionen los seeder tengo que dejar lasfk nullables//
            $table->unsignedBigInteger('category_id')->after('description')->nullable();
            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('services', function (Blueprint $table) {
        $table->dropForeign('services_category_id_foreign');
        $table->dropColumn('category_id');

      });

      Schema::dropIfExists('services');
    }
}
