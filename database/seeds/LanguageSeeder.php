<?php

use Carbon\Carbon as Carbon;
use Database\DisableForeignKeys;
use Database\TruncateTable;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LanguageSeeder extends Seeder
{
    use DisableForeignKeys, TruncateTable;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->disableForeignKeys();
        $this->truncate(config('access.languages_table'));

        //Add the master administrator, user id of 1
        $languages = [
            [
                'name'        => 'English',
                'language_code'         => 'en',
                'is_rtl'             => '0',
                'status'          => '1',
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now(),
            ],
            [
                'name'        => 'Italian',
                'language_code'         => 'it',
                'is_rtl'             => '0',
                'status'          => '0',
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now(),
            ],
        ];

        DB::table(config('access.languages_table'))->insert($languages);

        $this->enableForeignKeys();
    }
}
