<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiaryEntryTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diary_entry_tag', function (Blueprint $table) {
            $table->primary(['diary_entry_id', 'tag_id']);
            $table->unsignedInteger('diary_entry_id');
            $table->unsignedInteger('tag_id');

            $table->foreign('diary_entry_id')->references('id')->on('diary_entries')->onDelete('cascade');
            $table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');
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
        Schema::dropIfExists('diary_entry_tag');
    }
}
