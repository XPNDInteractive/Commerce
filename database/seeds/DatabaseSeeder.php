<?php

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
        $this->call(RoleTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(FieldTypeTableSeeder::class);
        $this->call(BlockTableSeeder::class);
        $this->call(MediaTableSeeder::class);
        $this->call(MenuTableSeeder::class);
        $this->call(PageTableSeeder::class);
        $this->call(FilterTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
       
       
       
        $this->call(ProductTableSeeder::class);
        //$this->call(InventoryTableSeeder::class);
        $this->call(CampaignTableSeeder::class);
    }
}
