<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColorOptionToContentSixGroupKeywordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('content_six_group_keywords', function (Blueprint $table) {
            $table->string('color_option')->default('Color Option');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('content_six_group_keywords', function (Blueprint $table) {
            $table->dropColumn('color_option');
        });
    }
}
