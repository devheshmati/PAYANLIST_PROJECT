<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->foreignId('created_by')->constrained('users')->onDelete('cascade');
            $table->foreignId('workspace_id')->constrained('workspaces')->onDelete('cascade');
            $table->enum('priority', ['low', 'medium', 'high']);
            $table->enum('status', ['todo', 'in_progress', 'done']);
            $table->unsignedTinyInteger('score')->default(1)->checkBetween(1, 3);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
