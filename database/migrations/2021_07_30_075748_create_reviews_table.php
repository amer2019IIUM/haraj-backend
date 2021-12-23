<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->text('body')->nullable();
            $table->integer('reviewable_id');
            $table->string('reviewable_type');
            $table->foreignId('reviewer_id')->constrained('users');
            $table->dateTime('seen_at')->nullable();
            $table->softDeletes();
            $table->timestamps();
            $table->enum('star', [1, 2, 3, 4, 5])->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviews');
    }
}
