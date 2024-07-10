<?php

use Domain\Member;
use Domain\Storage;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    private function table()
    {
        return Member::image()->model()->table();
    }

    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create($this->table(), function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->boolean('is_profile')->nullable()->default('0');
            $table->boolean('is_background')->nullable()->default('0');
            $table->boolean('is_selected')->nullable()->default('0');
            $table->string('filename', length: 128);
            $table->string('title', length: 64)->nullable();
            $table->string('extension', length: 8);
            $table->integer('position')->default('0');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on(Member::user()->model()->table());
            $table->index(['filename', 'title']);
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
