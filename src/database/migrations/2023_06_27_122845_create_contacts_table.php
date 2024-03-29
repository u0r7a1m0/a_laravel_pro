<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('name', 20)->nullable(false);
            $table->string('email', 255)->nullable(false);
            $table->string('contact', 1000)->nullable(false)->comment('内容');
            $table->integer('age')->nullable()->comment('年齢');
            $table->integer('gender')->nullable()->comment('性別');
            $table->unsignedBigInteger('department_id');

            $table->foreign('department_id')->references('id')->on('departments');
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
        Schema::dropIfExists('contacts');
    }
}
