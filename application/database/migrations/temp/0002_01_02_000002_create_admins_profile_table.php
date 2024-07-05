<?php

use Domain\Admin;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    private function table()
    {
        Admin::profile()->model()->table();
    }

    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create($this->table(), function (Blueprint $table) {
            $table->id();
            $table->foreign('user_id')->references('id')->on(Admin::user()->model()->table());
            $table->string('email', length: 64);
            $table->string('name', length: 64);
            $table->string('surname', length: 64)->nullable();
            $table->string('phone', length: 32)->nullable();
            $table->string('address', length: 128)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists($this->table());
    }
};
