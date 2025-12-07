<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('uploads', function (Blueprint $table) {
            $table->id();
            $table->integer("sent_by");
            $table->enum("type", ["image","file"]);
            $table->string("url");
            $table->string("description");
            $table->integer("user_id"); # FK
            $table->integer("scheduling_id"); # FK
            $table->integer("scheduling_user"); # FK
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('uploads');
    }
};
