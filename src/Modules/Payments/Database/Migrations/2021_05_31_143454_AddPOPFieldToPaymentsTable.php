<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPOPFieldToPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('payments', function (Blueprint $table) {
            $table->string('proof_of_payment')->nullable()->default(null);
            $table->string('amount')->nullable()->default(null);
            $table->string('available_balance')->nullable()->default(null);
            $table->string('total_invested')->nullable()->default(null);
            $table->string('total_profit')->nullable()->default(null);
            $table->string('balance_in_account')->nullable()->default(null);
            $table->string('available_fund')->nullable()->default(null);
            $table->string('invested_fund')->nullable()->default(null);
            $table->string('this_month_profit')->nullable()->default(null);
            $table->string('user_email')->nullable()->default(null);
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
