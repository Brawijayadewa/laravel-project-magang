<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesCallReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales_call_reports', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('school_name');
            $table->string('regency');
            $table->string('teacher_name');
            $table->string('phone');
            $table->integer('audience');
            $table->string('image');
            $table->text('requirement');
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
        Schema::dropIfExists('sales_call_reports');
    }
}
