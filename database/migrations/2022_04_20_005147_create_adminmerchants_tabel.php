
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminmerchantsTabel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adminmerchants', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('add');
            $table->string('phone1');
            $table->string('phone2' );
            $table->string('idnumber');
            $table->date('barthdate');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('governorate_id');
            $table->integer('active');
            $table->integer('user_add');
            $table->integer('user_edit');
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
        Schema::dropIfExists('adminmerchants');
    }
}

