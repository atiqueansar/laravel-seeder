<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            TruncateAllTables::class,
            SubscriptionSeeder::class,
        ]);
        for($i=0; $i < config('services.count_seeder_limit'); $i++) {
            $this->call([
                UserSeeder::class,
                OrganizationSeeder::class,
                ZoneSeeder::class,
                AlertTypeSeeder::class,
                AlertSeeder::class,
                AlertTypeActionSeeder::class,
                ContactSeeder::class,
                CycleProcessSeeder::class,
                DeviceCategorySeeder::class,
                PlaceSeeder::class,
                SpecialNeedSeeder::class,
                DeviceSeeder::class,
                DeviceConfigAlertsSeeder::class,
                DeviceEidSeeder::class,
                DeviceEmergencySeeder::class,
                DeviceHistorySeeder::class,
                DeviceMedicalSeeder::class,
                DeviceMedicalAllergySeeder::class,
                DeviceMedicalCovidSeeder::class,
                DeviceMedicalCovidTestSeeder::class,
                DeviceMedicalCovidVaccinationSeeder::class,
                DeviceMedicalEmergencyContactSeeder::class,
                DeviceMedicalMedicalDeviceSeeder::class,
                DeviceMedicalMedicationSeeder::class,
                DeviceMedicalMedicationHourSeeder::class,
                DeviceMedicalPreexistingConditionSeeder::class,
                DevicePhonebookSeeder::class,
                DevicePlaceSeeder::class,
                DeviceSettingSeeder::class,
                DeviceSettingDefaultSeeder::class,
                DeviceShareSeeder::class,
                DeviceSpecialNeedSeeder::class,
                DeviceStepHistorySeeder::class,
                DeviceSubscriptionSeeder::class,
                DeviceVersionSeeder::class,
                FileSeeder::class,
                GroupSeeder::class,
                MessageSeeder::class,
                MessageTemplateSeeder::class,
                NotificationSeeder::class,
                OrganizationEnvvarSeeder::class,
                OrganizationSettingsSeeder::class,
                SequelizemetaSeeder::class,
                ZonePointSeeder::class,
                BiometricHistorySeeder::class,
                BlacklistSeeder::class,
                UserEidSeeder::class,
                UserGroupSeeder::class,
                UserOrganizationSeeder::class,
                UserSubscriptionHistorySeeder::class,
            ]);
        }
    }
}
