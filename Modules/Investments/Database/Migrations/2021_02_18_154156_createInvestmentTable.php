<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvestmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('investments', function (Blueprint $table){
            $table->id();
            $table->string('name');
            $table->string('desc');
            $table->float('daily_interest');
            $table->integer('term_days');
            $table->float('min_amount');
            $table->float('max_amount');
            $table->float('total_return');
            $table->boolean('status')->default(true);
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
        //
    }
}
