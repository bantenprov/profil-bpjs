<?php namespace Bantenprov\ProfilBpjs\Console\Commands;

use Illuminate\Console\Command;

/**
 * The ProfilBpjsCommand class.
 *
 * @package Bantenprov\ProfilBpjs
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class ProfilBpjsCommand extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'bantenprov:profil-bpjs';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Demo command for Bantenprov\ProfilBpjs package';

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
        $this->info('Welcome to command for Bantenprov\ProfilBpjs package');
    }
}
