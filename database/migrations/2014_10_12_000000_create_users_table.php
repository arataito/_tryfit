<?php

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
            $table->increments('user_id');
            $table->string('user_name');
            $table->string('user_email')->unique();
            $table->string('user_password')->unique();
            $table->string('user_avatar')->unique();
            $table->string('facebook_id');
            $table->string('twitter_id');
            $table->rememberToken();
            $table->timestamps('created_at');
            $table->timestamps('updated_at');
            $table->timestamps('deleted_at');
        });

        Schema::create('clients', function (Blueprint $table) {
            $table->increments('client_id');
            $table->string('client_name');
            $table->string('client_email')->unique();
            $table->string('client_phone')->unique();
            $table->string('client_detail')->unique();
            $table->string('client_password')->unique();
            $table->timestamps('created_at');
            $table->timestamps('updated_at');
            $table->timestamps('deleted_at');
        });

        Schema::create('studios', function (Blueprint $table) {
            $table->increments('studio_id')->unique();
            $table->string('client_id');
            $table->string('studio_name');
            $table->string('studio_phone');
            $table->string('studio_email');
            $table->string('studio_lat');
            $table->string('studio_lon');
            $table->string('studio_lon');
            $table->string('studio_open_time');
            $table->string('studio_close_time');
            $table->string('studio_close_date');
            $table->string('studio_other_info');
            $table->string('studio_detail');
            $table->string('studio_img_url');
            $table->timestamps('created_at');
            $table->timestamps('updated_at');
            $table->timestamps('deleted_at');
        });

        Schema::create('projects', function (Blueprint $table) {
            $table->increments('pj_id')->unique();
            $table->string('studio_id');
            $table->string('pj_name');
            $table->string('pj_tariner_id');
            $table->string('pj_date');
            $table->string('pj_start_time');
            $table->string('pj_finish_time');
            $table->string('pj_detail');
            $table->string('pj_capacity');
            $table->timestamps('created_at');
            $table->timestamps('updated_at');
            $table->timestamps('deleted_at');
        });

        Schema::create('trainers', function (Blueprint $table) {
            $table->increments('trainer_id')->unique();
            $table->string('client_id')
            $table->string('trainer_first_name');
            $table->string('trainer_last_name');
            $table->string('traner_img_url');
            $table->string('trainer_detail');
            $table->string('trainer_comment');
            $table->timestamps('created_at');
            $table->timestamps('updated_at');
            $table->timestamps('deleted_at');
        });

        Schema::create('rsv_projects', function (Blueprint $table) {
            $table->increments('pj_id')->unique();
            $table->string('user_id');
            $table->timestamps('created_at');
            $table->timestamps('updated_at');
            $table->timestamps('deleted_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::drop('users');
    }
}
