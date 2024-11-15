<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();  // Auto-incrementing primary key
            $table->string('title');  // Title of the post
            $table->text('content');  // Content of the post
            $table->foreignId('user_id')->constrained()->onDelete('cascade');  // Foreign key referencing users table
            $table->timestamps();  // Timestamps for created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');  // Drop the posts table if it exists
    }
}
