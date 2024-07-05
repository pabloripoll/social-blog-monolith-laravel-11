<?php

use Domain\Admin;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    private function table()
    {
        Admin::activity()->model()->table();
    }

    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create($this->table(), function (Blueprint $table) {
            $table->id();
            $table->foreign('user_id')->references('id')->on(Admin::user()->model()->table());
            $table->foreignId('session_id')->references('id')->on(Admin::session()->model()->table());
            $table->foreignId('category_id')->references('id')->on(Admin::categoryActivity()->model()->table());
            $table->bigInteger('source_id')->nullable()->default('0');
            $table->bigInteger('source_pid')->nullable()->default('0');
            $table->string('source_ref', length: 64)->nullable();
            $table->string('source_url', length: 255)->nullable();
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
