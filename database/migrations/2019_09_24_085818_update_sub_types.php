<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateSubTypes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('types', function (Blueprint $table) {
           if (Schema::hasColumn('types','sub_type_id')) {
               $table->integer('sub_type_id')->change()->nullable();
           }
            if (Schema::hasColumn('types','post_type_id')) {
                $table->dropColumn('post_type_id');
            }
        });
        Schema::table('posts', function (Blueprint $table) {
            if (Schema::hasColumn('posts','post_sub_type_id')) {
                $table->integer('post_sub_type_id')->change()->nullable();
            }
            if (Schema::hasColumn('posts','post_type_id')) {
                $table->integer('post_type_id')->change()->nullable();
            }
            if (Schema::hasColumn('posts','post_image_id')) {
                $table->integer('post_image_id')->change()->nullable();
            }
            if (Schema::hasColumn('posts','type_id')) {
                $table->dropColumn('type_id');
            }
        });
        Schema::table('authors', function (Blueprint $table) {
            if (Schema::hasColumn('authors','type_id')) {
                $table->integer('type_id')->change()->nullable();
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
