<?php

use Domain\Admin;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    private function table()
    {
        Admin::user()->model()->table();
    }

    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create($this->table(), function (Blueprint $table) {
            $table->id();
            $table->bigInteger('pid');
            $table->boolean('is_active')->default('0');
            $table->boolean('is_banned')->default('0');
            $table->foreignId('banned_id')->references('id')->on(Admin::categoryBanned()->model()->table())->default('0');
            $table->string('username', length: 64)->unique();
            $table->string('alias', length: 16)->unique();
            $table->string('password', length: 128);
            $table->foreign('created_by_user_id')->references('id')->on($this->table());
            $table->timestamps();
            $table->softDeletes('deleted_at', precision: 0);
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
