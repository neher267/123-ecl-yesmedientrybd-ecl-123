<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFranchisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('franchises', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 50);
            $table->string('age', 50);
            $table->string('email', 191)->unique();
            $table->string('phone', 15);            
            $table->string('state', 50);
            $table->string('location', 191);
            $table->string('investment', 191);
            $table->string('prefertostart', 191);
            $table->decimal('status', 3, 0)->default(0); // 0=unread; 1= primary selected; 2=selected; 3=rejected; 
            $table->timestamps();
        });
    }
    /*
    name
    age
    email
    phone
    state
    location
    investment
    prefertostart
    */

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('franchises');
    }
}
