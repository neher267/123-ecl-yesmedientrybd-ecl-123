<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInquiriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inquiries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 50);
            $table->string('email', 191);
            $table->string('mobile', 15);            
            $table->string('whatsapp', 15)->nullable();
            $table->string('college_type', 15);
            $table->string('college', 191);
            $table->string('city', 50)->nullable();
            $table->string('state', 50)->nullable();
            $table->string('zip', 50)->nullable();
            $table->string('passing_year', 5);
            $table->string('neet_score', 10);
            $table->decimal('status', 3, 0)->default(0); // 0=unread; 1= primary selected; 2=selected; 3=rejected; 4=admited; 5=softdelete;
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
        Schema::dropIfExists('inquiries');
    }
}
