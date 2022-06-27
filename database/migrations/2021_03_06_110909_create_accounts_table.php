<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->integer('ac_num')->unique();
            $table->decimal('balance', 20,2)->default('0.00');
            $table->boolean('status')->default('1');
            $table->string('name');
            $table->string('father');
            $table->string('mother');
            $table->string('M_address');
            $table->string('p_address');
            $table->string('nid')->unique();
            $table->string('birth')->nullable();
            $table->string('nationality');
            $table->string('dob'); 
            $table->string('etin')->nullable();
            $table->string('profession')->nullable();
            $table->string('education')->nullable();
            $table->decimal('m_income', 15,2)->nullable();
            $table->string('marital');
            $table->string('phone')->unique();
            $table->string('email')->nullable();
            $table->string('n_name');
            $table->string('relation');
            $table->string('n_father');
            $table->string('n_mother');
            $table->string('n_nationality');
            $table->string('n_nid')->nullable();

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
        Schema::dropIfExists('accounts');
    }
}
