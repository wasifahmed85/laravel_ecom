<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Traits\AduitColumnTrait;
use Illuminate\Database\Eloquent\SoftDeletes;
return new class extends Migration
{
    use AduitColumnTrait, SoftDeletes;
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('image')->nullable();
            $table->tinyInteger('status')->default('user::STATUS_ACTIVE')->comment('1=active, -1=inactive , 0=panding');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken(); 
            $table->timestamps();
            $table->softDeletes();
            $this->addAdminAuditColumns($table);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admins');
    }
};
