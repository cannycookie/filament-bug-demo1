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
        Schema::table('users', function (Blueprint $table) {
            $table->string('phone_number')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('company')->nullable();
            $table->string('job_title')->nullable();
            $table->text('bio')->nullable();
            $table->string('website')->nullable();
            $table->string('linkedin_profile')->nullable();
            $table->string('twitter_handle')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('emergency_contact')->nullable();
            $table->string('preferred_language')->nullable();
            $table->string('timezone')->nullable();
            $table->boolean('newsletter_subscription')->default(false);
            $table->decimal('salary', 10, 2)->nullable();
            $table->json('preferences')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'phone_number',
                'date_of_birth',
                'company',
                'job_title',
                'bio',
                'website',
                'linkedin_profile',
                'twitter_handle',
                'address',
                'city',
                'country',
                'postal_code',
                'emergency_contact',
                'preferred_language',
                'timezone',
                'newsletter_subscription',
                'salary',
                'preferences'
            ]);
        });
    }
};
