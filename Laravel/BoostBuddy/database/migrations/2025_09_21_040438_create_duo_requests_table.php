<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up()
{
    Schema::create('duo_requests', function (Blueprint $table) {
        $table->id();
        $table->foreignId('user_id')->constrained()->onDelete('cascade');
        $table->string('game');
        $table->string('server');
        $table->string('discord_tag'); // so requester can share their Discord
        $table->enum('status', ['pending', 'accepted'])->default('pending');
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('duo_requests');
}
};
