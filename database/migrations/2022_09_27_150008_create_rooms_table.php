<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Room;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('name_short', 125);   //ชื่อย่อ
            $table->string('name'); //ชื่อห้อง
            $table->boolean('active')->default(true);
            $table->timestamps();
        });

        Room::Create(['name_short' => 'จฟ.1','name' =>'ห้อง treatment จฟ.1','active'=> 'true']);
        Room::Create(['name_short' => 'จฟ.7','name' =>'ห้องทดสอบ เจ้าฟ้า 7','active'=> 'true']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rooms');
    }
};
