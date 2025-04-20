<?php

namespace App\Traits;

use Illuminate\Database\Schema\Blueprint;

trait AduitColumnTrait
{
     public function addAdminAuditColumns(Blueprint $table): void
    {
        $table->unsignedBigInteger('created_by')->nullable();
        $table->unsignedBigInteger('updated_by')->nullable();
        $table->unsignedBigInteger('deleted_by')->nullable();

        $table->foreign('created_by')->references('id')->on('admins')->onDelete('cascade')->onUpdate('cascade');
        $table->foreign('updated_by')->references('id')->on('admins')->onDelete('cascade')->onUpdate('cascade');
        $table->foreign('deleted_by')->references('id')->on('admins')->onDelete('cascade')->onUpdate('cascade');
    }
    public function dropAdminAuditColumns(Blueprint $table): void
    {
        $table->dropForeign(['created_by']);
        $table->dropForeign(['updated_by']);
        $table->dropForeign(['deleted_by']);

        $table->dropColumn('created_by');
        $table->dropColumn('updated_by');
        $table->dropColumn('deleted_by');
    }

    public function addMorphedAuditColumns(Blueprint $table): void
    {
        $table->unsignedBigInteger('creater_id')->nullable();
        $table->string('creater_type')->nullable();
        $table->unsignedBigInteger('updater_id')->nullable();
        $table->string('updater_type')->nullable();
        $table->unsignedBigInteger('deleter_id')->nullable();
        $table->string('deleter_type')->nullable();
    }
    public function dropMorphedAuditColumns(Blueprint $table): void
    {
        $table->dropColumn('creater_id');
        $table->dropColumn('creater_type');
        $table->dropColumn('updater_id');
        $table->dropColumn('updater_type');
        $table->dropColumn('deleter_id');
        $table->dropColumn('deleter_type');
    }

   
}

