<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('brands', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title');

            $table->softDeletes();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('brands');
    }
};
