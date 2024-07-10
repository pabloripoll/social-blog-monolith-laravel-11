<?php

use Domain\Member;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Query\Expression;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    private function table()
    {
        return Member::profile()->model()->table();
    }

    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create($this->table(), function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->string('email', length: 64)->unique();
            $table->string('name', length: 64);
            $table->string('surname', length: 64)->nullable();
            $table->string('phone', length: 32)->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on(Member::user()->model()->table());
            $table->index(['email', 'surname', 'phone']);
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
