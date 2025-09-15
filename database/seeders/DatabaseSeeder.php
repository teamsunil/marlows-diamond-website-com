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
        // \App\Models\User::factory(10)->create();
        $this->call(UsersTableDataSeeder::class);
        $this->call(UsersRoleTableDataSeeder::class);
        $this->call(HeaderSettingsTableSeeder::class);
        $this->call(MenusTableSeeder::class);
        $this->call(AppProductAttributeVariationDescripitonTableSeeder::class);
        $this->call(AppProductAttributeVariationsTableSeeder::class);
        $this->call(AppProductAttributesTableSeeder::class);
        $this->call(AppProductsTableSeeder::class);
        $this->call(AppProductsCategoriesTableSeeder::class);
        $this->call(AppProductsImagesTableSeeder::class);
        $this->call(AppointmentsTableSeeder::class);
        $this->call(AttributesTableSeeder::class);
        $this->call(BannersTableSeeder::class);
        $this->call(BannersDetailsTableSeeder::class);
        $this->call(BannersDetailsLangTableSeeder::class);
        $this->call(BannersLangTableSeeder::class);
        $this->call(CartsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(CategoryPageFilterTableSeeder::class);
        $this->call(CombinationVaritionDetailsTableSeeder::class);
        $this->call(CountriesTableSeeder::class);
        $this->call(CurrencyTableSeeder::class);
        $this->call(CurrencyAudTableSeeder::class);
        $this->call(CurrencyEurTableSeeder::class);
        $this->call(CurrencyGbpTableSeeder::class);
        $this->call(CurrencyInrTableSeeder::class);
        $this->call(CurrencyUsdTableSeeder::class);
        $this->call(CustomerAddressesTableSeeder::class);
        $this->call(CustomerLangTableSeeder::class);
    }
}
