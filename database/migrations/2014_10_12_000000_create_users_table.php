<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            // $table->string('service_id');
            // $table->string('grant_type');
            // $table->text('access_token');
            // $table->text('refresh_token');
            // $table->timestamp('token_expires_at');
            $table->rememberToken();
            $table->timestamps();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('name');
        });
    // Insert Test user credentials
    DB::table('users')->insert(
        array(
            'email' => 'test@test.com',
            'password' => 'testtest',
            'name' => 'testUser'
        )
    );


    }

 
    


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
