<?php

namespace PostboxCMS\Inspire\Console;

use Illuminate\Console\Command;

class InspireCommand extends Command
{
    use Concerns\Inspire;

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

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // call the inspire method
        $quote = $this->getQuote();
        $this->output->writeln('  <bg=blue;fg=white> INFO </> '.$quote);
    }
}
