<?php

use Illuminate\Database\Seeder;
use App\Campaign;
use Carbon\Carbon;

class CampaignTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $c = new Campaign();
        $c->name = "POLO SALE";
        $c->description = "60% off men's and women's polo's";
        $c->start_date = Carbon::now();
        $c->end_date = Carbon::createFromDate(2020,01,01)->toDateTimeString();
        $c->active = true;
        $c->save();
    }
}
