<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->increments('id');
            $table->string('appl_name');
            $table->string('mobile',10);
            $table->string('plot_no',20);
            $table->string('khatiyan_no',20);
            $table->string('brief_history');
            $table->string('comment');
            $table->string('state',3);
            $table->string('district',5);
            $table->string('subdivision',6);
            $table->string('block',10);
            $table->integer('appl_category');
            $table->date('receive_date');
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
        Schema::dropIfExists('applications');
    }
}
