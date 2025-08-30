<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('history', function (Blueprint $table) {
            $table->id('history_id');
            $table->bigInteger('donor_id')->unsigned()->index()->nullable();
            $table->bigInteger('camp_id')->unsigned()->index()->nullable();
            $table->decimal('amount',10,2)->nullable();
            $table->boolean('isApproved')->default(false);
            $table->string('remarks')->nullable();
            $table->string('pay_img')->nullable();
            $table->timestamps();

            $table->foreign('donor_id')->references("donor_id")->on('donor')->onDelete('cascade');
            $table->foreign('camp_id')->references("camp_id")->on('camp')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('history');
    }
};
