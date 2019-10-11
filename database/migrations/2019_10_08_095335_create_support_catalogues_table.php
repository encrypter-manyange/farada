<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupportCataloguesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('support_catalogues', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('support_catalogue_name');
            $table->integer('registration_group_id');
            $table->integer('support_category_id');
            $table->integer('support_item_id');
            $table->enum("unit",["each","hourly","daily","weekly","annualy","monthly"]);
            $table->integer('isActive');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('support_catalogues');
    }
}
