<?php namespace Bantenprov\RetribusiOnline\Console\Commands;

use Illuminate\Console\Command;

/**
 * The RetribusiOnlineCommand class.
 *
 * @package Bantenprov\RetribusiOnline
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class RetribusiOnlineCommand extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'bantenprov:retribusi-online';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Demo command for Bantenprov\RetribusiOnline package';

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
        $this->info('Welcome to command for Bantenprov\RetribusiOnline package');
    }
}
