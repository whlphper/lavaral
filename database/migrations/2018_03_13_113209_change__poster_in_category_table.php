<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangePosterInCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('category',function(Blueprint $table){
            $table->integer('poster')->unsigned()->default(0)->comment('201803131133将tinyint修改为int')->change();
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
        Schema::table('category',function(Blueprint $table){
            $table->boolean('poster')->unsigned()->default(0)->comment('分类图片')->change();
        });
    }
}
