<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
        Schema::table('template_groups', function (Blueprint $table) {
            DB::statement("ALTER TABLE template_groups MODIFY COLUMN node_id bigint unsigned AFTER id");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('template_groups', function (Blueprint $table) {
            DB::statement("ALTER TABLE template_groups MODIFY COLUMN node_id bigint unsigned AFTER updated_at");
        });
    }
};
