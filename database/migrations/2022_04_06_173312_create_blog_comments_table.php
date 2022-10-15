<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_comments', function (Blueprint $table) {
            $table->id();
            $table->text('comment_body');
            $table->unsignedBigInteger('parent_comment_id')->nullable()->comment('Foreign: `blog_comments - id`');
            $table->unsignedBigInteger('user_id')->nullable()->comment('Foreign: `users - id`');
            $table->string('comment_author_name')->nullable();
            $table->string('comment_author_email')->nullable();
            $table->foreignId('blog_id');
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
        Schema::dropIfExists('blog_comments');
    }
}
