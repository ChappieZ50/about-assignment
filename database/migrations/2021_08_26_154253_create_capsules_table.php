<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCapsulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('capsules', function (Blueprint $table) {
            $table->id();
            $table->string('capsule_serial', 10)->index();
            $table->string('capsule_id', 10);
            $table->string('status', 10);
            $table->string('original_launch')->nullable();
            $table->integer('original_launch_unix')->nullable();
            $table->json('missions');
            $table->integer('landings');
            $table->string('type', 20);
            $table->text('details')->nullable();
            $table->integer('reuse_count');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('capsules');
    }
}
