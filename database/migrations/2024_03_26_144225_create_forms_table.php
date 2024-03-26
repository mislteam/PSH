<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forms', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('series_number')->nullable();
            $table->string('product_type')->nullable();
            $table->integer('communication')->comment('0=verygood, 1=good, 2=normal, 3=bad, 4=verybad')->default(1);
            $table->integer('performance')->comment('0=verygood, 1=good, 2=normal, 3=bad, 4=verybad')->default(1);
            $table->integer('friendliness')->comment('0=verygood, 1=good, 2=normal, 3=bad, 4=verybad')->default(1);
            $table->integer('customer_request')->comment('0=verygood, 1=good, 2=normal, 3=bad, 4=verybad')->default(1);
            $table->integer('meticulous_inspection')->comment('0=verygood, 1=good, 2=normal, 3=bad, 4=verybad')->default(1);
            $table->integer('delivery_time')->comment('0=verygood, 1=good, 2=normal, 3=bad, 4=verybad')->default(1);
            $table->integer('service_time')->comment('0=verygood, 1=good, 2=normal, 3=bad, 4=verybad')->default(1);
            $table->integer('product_structure')->comment('0=verygood, 1=good, 2=normal, 3=bad, 4=verybad')->default(1);
            $table->integer('spare_part_charges')->comment('0=verygood, 1=good, 2=normal, 3=bad, 4=verybad')->default(1);
            $table->integer('confidence_after_service')->comment('0=verygood, 1=good, 2=normal, 3=bad, 4=verybad')->default(1);
            $table->integer('accuracy_weight')->comment('0=verygood, 1=good, 2=normal, 3=bad, 4=verybad')->default(1);
            $table->integer('easy_to_use')->comment('0=verygood, 1=good, 2=normal, 3=bad, 4=verybad')->default(1);
            $table->integer('technical_quality')->comment('0=verygood, 1=good, 2=normal, 3=bad, 4=verybad')->default(1);
            $table->integer('overall_rating_services')->comment('0=verygood, 1=good, 2=normal, 3=bad, 4=verybad')->default(1);
            $table->longText('suggesstions')->nullable();
            $table->longText('complaint')->nullable();
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
        Schema::dropIfExists('forms');
    }
};
