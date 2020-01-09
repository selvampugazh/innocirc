<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSmtpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('smtps', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('smtp_enabled');
            $table->string('mail_driver', 50);
            $table->string('smtp_hostname', 100);
            $table->string('smtp_username', 100);
            $table->string('smtp_password', 200);
            $table->integer('smtp_port');
            $table->string('smtp_encryption', 200);
            $table->boolean('status');
            $table->integer('created_by');
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
        Schema::dropIfExists('smtps');
    }
}
