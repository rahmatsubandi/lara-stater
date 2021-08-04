<?php

use Illuminate\Database\Seeder;
use anlutro\LaravelSettings\Facade as Setting;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::set('company_name', 'Lara Stater');
        Setting::set('company_email', 'rhmtin12@gmail.com');
        Setting::set('company_phone', '+6287788711327');
        Setting::set('company_address', 'Tambun Selatan');
        Setting::set('company_city', 'Bekasi');
        Setting::set('company_currency_symbol', 'Rp');
        Setting::set('record_per_page', 10);
        Setting::set('default_role', 2);
        Setting::set('max_login_attempts', 3);
        Setting::set('lockout_delay', 2);
        Setting::save();
    }
}
