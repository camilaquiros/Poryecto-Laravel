<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDataToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
          $table->string('full_name', 150);
          $table->string('country', 100);
          $table->string('username', 100);
          $table->string('shipping_address', 200);
          $table->string('profile_image', 250);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
          $table->dropColumn('profile_image');
          $table->dropColumn('shipping_address');
          $table->dropColumn('username');
          $table->dropColumn('country');
          $table->dropColumn('full_name');
        });
    }
}
