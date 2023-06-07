<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->json('values');
            $table->timestamps();
        });

        \DB::table('settings')->insert([
            'values' => json_encode([
                'course' => 'HTML-CSS For Absolute Beginners',
                'latest' => 'https://www.youtube.com/watch?v=Q7SN4p-lQtA',
                'playlist' => 'https://www.youtube.com/watch?v=BoTYFC5sr8c&list=PLK-iH9NhQtRMo9bx2aiDVFlHrw1ABITG4',
                'season' => 1,
                'episode' => 2,
            ])
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
}
