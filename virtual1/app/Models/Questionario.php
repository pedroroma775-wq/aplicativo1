<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Questionario extends Model
{
    //database/migations
    Schema::create('questionarios', function (Blueprint $table) {
        $table->id();
        $table->string('título');
        $table->text('descricao')->nullable();
        $table->timetamps();
    });
}
