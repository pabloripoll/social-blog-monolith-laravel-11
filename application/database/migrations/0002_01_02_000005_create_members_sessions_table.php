<?php

use Domain\Member;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    private function table()
    {
        return Member::session()->model()->table();
    }

    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create($this->table(), function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->boolean('in_standby')->default('0');
            $table->boolean('is_opened')->default('0');
            $table->boolean('is_expired')->default('0');
            $table->bigInteger('expires_at');
            $table->bigInteger('stopped_at')->nullable();
            $table->integer('reused')->default('0');
            $table->string('ip_address', 45)->nullable();
            $table->string('token', length: 64)->unique();
            $table->text('user_agent')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on(Member::user()->model()->table());
            $table->index(['ip_address', 'expires_at', 'token']);
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
