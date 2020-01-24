<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('tel', 11)->comment('電話番号');
            $table->string('zip', 8)->comment('郵便番号');
            $table->string('pref')->comment('都道府県');
            $table->string('city')->comment('市町村');
            $table->string('address')->comment('番地');
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
            $table->dropColumn(['tel', 'zip', 'pref', 'city', 'address']);
        });
    }
}
