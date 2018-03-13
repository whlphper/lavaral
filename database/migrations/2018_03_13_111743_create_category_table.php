<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category', function (Blueprint $table) {
            // 自增ID
            $table->increments('id');
            // varchar name
            $table->string('name')->comment('分类名称');
            // int poster 无符号 默认0
            $table->boolean('poster')->unsigned()->default(0)->comment('分类图片');
            // int add_user_id 无符号 默认0
            $table->boolean('add_user_id')->unsigned()->default(0)->comment('添加人ID');
            // 这个会自动生成 created_at  updated_at
            $table->timestamps();
            // 这个是软删除
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category');
    }
}
