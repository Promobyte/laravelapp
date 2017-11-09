<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->char('org_number', 20)->nullable();
            $table->char('name', 200)->charset('utf8');
            $table->char('visiting_address', 200)->charset('utf8');
            $table->char('invoice_address', 200)->charset('utf8');
            $table->char('phone', 12);
            $table->char('email', 60);
            $table->json('category_ids');
            $table->enum('area', ['regional', 'county', 'municipality']);
            $table->json('county_ids')->nullable();
            $table->json('municipality_ids')->nullable();

            $table->decimal('monthly_budget', 8,2);
            $table->decimal('remaining_budget', 8,2);




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
        Schema::dropIfExists('customers');
    }
}
