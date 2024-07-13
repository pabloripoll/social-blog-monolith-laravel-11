<?php

use Domain\Admin;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    private function table()
    {
        return Admin::user()->model()->table();
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
            $table->boolean('is_superadmin')->default('0');
            $table->string('username', length: 64)->unique();
            $table->string('alias', length: 16)->unique();
            $table->string('password', length: 128);
            $table->integer('session_time')->default('30');
            $table->bigInteger('created_by_admin_id')->nullable();
            $table->timestamps();
            $table->softDeletes('deleted_at', precision: 0);

            $table->index(['pid', 'username', 'alias']);
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
