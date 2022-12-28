<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('templates', function (Blueprint $table) {
            $table->unsignedBigInteger('server_id')->nullable(false)->change();
        });

        Schema::table('servers', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->nullable(false)->change();
        });

        Schema::table('ip_addresses', function (Blueprint $table) {
            $table->unsignedBigInteger('node_id')->nullable(false)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('templates', function (Blueprint $table) {
            $table->unsignedBigInteger('server_id')->nullable()->change();
        });

        Schema::table('servers', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->nullable()->change();
        });

        Schema::table('ip_addresses', function (Blueprint $table) {
            $table->unsignedBigInteger('node_id')->nullable()->change();
        });
    }
};
