<?php

namespace PostboxCMS\Inspire\Console;

use Illuminate\Console\Command;

class InspireCommand extends Command
{
    use Concerns\QuoteService;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cms:inspire';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate a motivational quote';

    public function __construct() {
        parent::__construct();
    }

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // call the inspire method
        $quote = $this->getQuote();
        $this->output->writeln('<fg=magenta>"'.$quote['quote'].'"</><fg=cyan>' . PHP_EOL . ' - ' . $quote['author'] . '</>');
    }
}
