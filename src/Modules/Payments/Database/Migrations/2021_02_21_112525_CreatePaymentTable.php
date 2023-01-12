<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('investment_name');
            $table->string('username');
            $table->integer('investment_id');
            $table->integer('user_id');
            $table->string('payment_method')->nullable()->default(null);
            $table->string('payment_method_address')->nullable()->default(null);
            $table->enum('status', ['Approved', 'Pending'])->default('Pending');
            $table->timestamp('approved_at')->nullable()->default(null);
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
