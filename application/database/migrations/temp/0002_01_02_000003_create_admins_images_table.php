<?php

use Domain\Admin;
use Domain\Storage;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    private function table()
    {
        Admin::image()->model()->table();
    }

    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create($this->table(), function (Blueprint $table) {
            $table->id();
            $table->foreign('user_id')->references('id')->on(Admin::user()->model()->table());
            $table->boolean('is_profile')->nullable()->default('0');
            $table->boolean('is_background')->nullable()->default('0');
            $table->boolean('is_selected')->nullable()->default('0');
            $table->foreign('storage_id')->references('id')->on(Storage::public()->model()->table());
            $table->string('file_name', length: 128);
            $table->string('title', length: 64)->nullable();
            $table->string('extension', length: 8);
            $table->integer('position')->default('0');
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
