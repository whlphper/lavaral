<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeCompanyIdInCategoryTable extends Migration
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
            $table->integer('company_id')->unsigned()->default(1)->comment('所属公司')->change();
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
            $table->boolean('company_id')->unsigned()->default(0)->comment('所属公司')->change();
        });
    }
}
