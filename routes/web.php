<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    dd(12345);
//    $newArray = [
//        'alert',
//        'alert_type',
//        'alert_type_action',
//        'biometric_history',
//        'blacklist',
//        'contact',
//        'cycle_process',
//        'device',
//        'device_category',
//        'device_config_alerts',
//        'device_eid',
//        'device_emergency',
//        'device_history',
//        'device_medical',
//        'device_medical_allergy',
//        'device_medical_covid',
//        'device_medical_covid_test',
//        'device_medical_covid_vaccination',
//        'device_medical_emergency_contact',
//        'device_medical_medical_device',
//        'device_medical_medication',
//        'device_medical_medication_hour',
//        'device_medical_preexisting_condition',
//        'device_phonebook',
//        'device_place',
//        'device_setting',
//        'device_setting_default',
//        'device_share',
//        'device_special_need',
//        'device_step_history',
//        'device_subscription',
//        'device_version',
//        'file',
//        'group',
//        'message',
//        'message_template',
//        'notification',
//        'organization',
//        'organization_envvar',
//        'organization_settings',
//        'place',
//        'sequelizemeta',
//        'special_need',
//        'subscription',
//        'user',
//        'user_eid',
//        'user_group',
//        'user_organization',
//        'user_subscription_history',
//        'zone',
//        'zone_point',
//    ];
//    foreach ($newArray as $val) {
//        $val = ucfirst(Str::camel(ucfirst($val)));
//        echo $val.'<br>';
////        \Artisan::call('make:model '.$val);
////        \Artisan::call('make:seeder '.$val.'Seeder');
////        \Artisan::call('make:factory '.$val.'Factory');
//    }
});
