<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up()
{
    Schema::create('accepted_requests', function (Blueprint $table) {
        $table->id();
        $table->foreignId('duo_request_id')->constrained()->onDelete('cascade');
        $table->foreignId('user_id')->constrained()->onDelete('cascade'); // booster/duo partner
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('accepted_requests');
}
};
