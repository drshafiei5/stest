<?php



use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     * @table mentor_song
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mentor_song', function (Blueprint $table) {
            $table->foreignId('mentor_id')
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreignId('song_id')
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->tinyInteger('score');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mentor_song');
    }
};
