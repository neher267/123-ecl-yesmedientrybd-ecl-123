<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCollegesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colleges', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 191); 
            $table->string('slug', 191)->unique(); 
            $table->string('area', 50)->nullable();           
            $table->string('meta_keyworks', 191)->nullable();           
            $table->text('about')->nullable();
            $table->longText('addmission_info')->nullable();
            $table->decimal('total_students', 5,0)->nullable();
            $table->decimal('total_foreign_students', 5,0)->nullable();
            $table->text('full_address')->nullable();
            $table->text('short_description')->nullable();
            $table->longText('description')->nullable();  
            $table->decimal('display_order', 5,0)->default(0);          
            $table->boolean('display_at_home')->default(false);         
            $table->boolean('status')->default(true);         
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
        Schema::dropIfExists('colleges');
    }
}
