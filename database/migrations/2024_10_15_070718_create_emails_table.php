<?php

use App\Models\Email;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('emails', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->timestamps();
        }); 


        $data = [
            ['email' => 'jgmbola@catsu.edu.ph',],
            ['email' => 'trinidad@catsu.edu.ph',],
            ['email' => 'staines@catsu.edu.ph',],
            ['email' => 'beo@catsu.edu.ph',],
            ['email' => 'rafael@catsu.edu.ph',],
        ];


        foreach ($data as $item) {
            Email::create($item);
        }
    }



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emails');
    }
};
