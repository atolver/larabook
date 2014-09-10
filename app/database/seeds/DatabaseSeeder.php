<?php

class DatabaseSeeder extends Seeder {

    /**
     * Tables to clear out
     *
     * @var array
     */
    protected $tables = [
        'users',
        'statuses'
    ];

    /**
     * Seeders
     *
     * @var array
     */
    protected $seeders = [
        'UsersTableSeeder',
        'StatusesTableSeeder'
    ];

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

        $this->cleanDatabase();

        foreach ($this->seeders as $seedClass) {
            $this->call($seedClass);
        }
	}

    /**
     * Clean Database for preseeding
     *
     *
     * @return mixed
     * @author Alonzo Tolver <alonzotolver@gmail.com>
     *
     **/
    private function cleanDatabase()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        foreach ($this->tables as $table)
        {
            DB::table($table)->truncate();
        }

        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }

}
