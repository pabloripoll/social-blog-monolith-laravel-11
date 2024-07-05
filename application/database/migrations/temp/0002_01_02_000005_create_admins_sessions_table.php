<?php

use Domain\Admin;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    private function table()
    {
        Admin::session()->model()->table();
    }

    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create($this->table(), function (Blueprint $table) {
            $table->id();
            $table->foreign('user_id')->references('id')->on(Admin::user()->model()->table());
            $table->string('ip_address', 45)->nullable();
            $table->boolean('in_standby')->default('0');
            $table->boolean('is_opened')->default('0');
            $table->boolean('is_expired')->default('0');
            $table->dateTime('expires_at', precision: 0);
            $table->string('token', length: 64)->unique();
            $table->text('user_agent')->nullable();
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
