<?php
/*
    User model created by Fizi Kurniawan
    email : fizikurniawan@gmail.com
    status = [
        0 => Member Mahasiswa,
        1 => Member Dosen / Karyawan
        2 => Admin ( Karyawan Perpus )
    ]
    member_id : auto generated like user.id
    personal_id : personal id like npm or nik

*/

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
            $table->string('member_id')->unique();
            $table->string('personal_id')->unique();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone_number')->unique();
            $table->string('address');
            $table->tinyInteger('status')->default(0);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
