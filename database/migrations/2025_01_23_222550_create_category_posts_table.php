<?php

declare(strict_types=1);

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('category_posts', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Category::class);
            $table->foreignIdFor(Post::class);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('category_posts');
    }
};
