<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
        Schema::create('investments', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('desc');
            $table->float('daily_interest');
            $table->integer('term_days');
            $table->string('min_amount');
            $table->string('max_amount');
            $table->string('total_return');
            $table->enum('status', ['Yes', 'No'])->default('Yes');
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
