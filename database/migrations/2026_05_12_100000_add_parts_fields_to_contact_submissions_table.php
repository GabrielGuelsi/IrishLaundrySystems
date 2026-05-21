<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('contact_submissions', function (Blueprint $table) {
            $table->string('equipment_brand', 120)->nullable()->after('equipment');
            $table->string('machine_type', 120)->nullable()->after('equipment_brand');
            $table->string('model_number', 120)->nullable()->after('machine_type');
            $table->string('serial_number', 120)->nullable()->after('model_number');
            $table->string('part_required', 255)->nullable()->after('serial_number');
        });
    }

    public function down(): void
    {
        Schema::table('contact_submissions', function (Blueprint $table) {
            $table->dropColumn(['equipment_brand', 'machine_type', 'model_number', 'serial_number', 'part_required']);
        });
    }
};
