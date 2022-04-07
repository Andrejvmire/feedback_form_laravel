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
        Schema::create('bids', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('name', 45)->nullable(false)->comment("Название заявки");
            $table->string('phone', 20)->nullable(false)->comment("Телефонный номер");
            $table->string('company', 45)->comment('Название компании');
            $table->string('message', 200)->nullable(false)->comment('Сообщение');
            $table->string('file_name', 45)->nullable()->comment('Имя файла');
            $table->unsignedBigInteger('user_id')->nullable(false)->comment('Пользователь');

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bids');
    }
};
