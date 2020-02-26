<?php

namespace App\Console\Commands;

use DB;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Schema;

class DropTables extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'drop {--m|migration : Make migrations and seeds after drops end}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Drop all tables from database and migrate with seeds';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $colname = 'Tables_in_' . env('DB_DATABASE');

        $tables = DB::select('SHOW TABLES');

        $droplist = [];

        foreach($tables as $table)
        {
            $droplist[] = $table->$colname;
        }

        $droplist = implode(',', $droplist);

        if (empty($droplist)) {

            $this->info('Your database already is empty.');

            if ($this->confirm('Do you need migrations and seeds at now? [y|N]')) {                
                $this->call('migrate', [
                    '--seed' => true
                ]);
            }

            return false;
        }

        // Schema::disableForeignKeyConstraints();
        DB::beginTransaction();
        //turn off referential integrity
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::statement("DROP TABLE $droplist");
        //turn referential integrity back on
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
        DB::commit();
        // Schema::enableForeignKeyConstraints();

        if ($this->option('migration')) {
            $this->call('migrate', [
                '--seed' => true
            ]);
        }

        $this->comment(PHP_EOL."All done!!!".PHP_EOL);
    }
}