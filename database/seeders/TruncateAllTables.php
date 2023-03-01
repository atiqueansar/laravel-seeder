<?php

namespace Database\Seeders;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class TruncateAllTables extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tables = DB::select('SHOW TABLES');
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        foreach ($tables as $table) {
            $table_array = get_object_vars($table);
            DB::table($table_array[key($table_array)])->truncate();
        }
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');

        $checkTables = [
            'alert',
            'device_emergency',
            'device_history',
            'message',
            'notification',
            'biometric_history',
        ];
        foreach ($checkTables as $checkTable) {
            if (Schema::hasColumn($checkTable, 'id')) {
                Schema::table($checkTable, function (Blueprint $table) {
                    $table->dropColumn('id');
                });
            }
            Schema::table($checkTable, function (Blueprint $table) {
                $table->increments('id',true)->first();
            });
        }
    }
}
