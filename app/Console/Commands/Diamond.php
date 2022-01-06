<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Diamond extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'diamond:print {c}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate a Diamond';

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
     * @return int
     */
    public function handle()
    {
        $c = $this->argument("c");
        if (!ctype_upper($c) || strlen($c) != 1) {
            echo "Usage: diamond:print {c} where {c} is a single upper case character\n";
            exit(1);
        }
        $diamond = \App\Models\Diamond::diamond($c);
        echo implode("\n", $diamond) . "\n";
        return 0;
    }
}
