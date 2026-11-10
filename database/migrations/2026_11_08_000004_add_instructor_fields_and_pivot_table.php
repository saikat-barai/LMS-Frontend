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
        Schema::table('admins', function (Blueprint $table) {
            $table->string('whatsapp_number')->nullable()->after('phone');
            $table->string('designation')->nullable()->after('role');
            $table->string('experience')->nullable()->after('designation');
            $table->text('bio')->nullable()->after('address');
            $table->json('social_links')->nullable()->after('bio');
            $table->integer('sort_order')->default(0)->after('social_links');
        });

        Schema::create('instructor_subject', function (Blueprint $table) {
            $table->id();
            $table->foreignId('admin_id')->constrained('admins')->cascadeOnDelete();
            $table->foreignId('subject_id')->constrained('subjects')->cascadeOnDelete();
            $table->unique(['admin_id', 'subject_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('instructor_subject');

        Schema::table('admins', function (Blueprint $table) {
            $table->dropColumn([
                'whatsapp_number',
                'designation',
                'experience',
                'bio',
                'social_links',
                'sort_order',
            ]);
        });
    }
};
