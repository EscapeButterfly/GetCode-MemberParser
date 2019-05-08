<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParsingStatusesTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('parsing_statuses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('total_members');
            $table->integer('processed')->default(0);
            $table->enum('status', ['in_queue', 'processing', 'completed', 'error'])->default('in_queue');
            $table->string('msg')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('parsing_statuses');
    }
}
