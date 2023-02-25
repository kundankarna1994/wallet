<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id")->references("id")->on("users");
            $table->foreignId("isp_id")->references("id")->on("isp");
            $table->foreignId("invoice_id")->references("id")->on("invoices");
            $table->foreignId("bill_id")->references("id")->on("bills");
            $table->foreignId("package_id")->references("id")->on("packages");
            $table->foreignId("quotation_id")->references("id")->on("quotations");
            $table->softDeletes();
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
        Schema::dropIfExists('transactions');
    }
}
