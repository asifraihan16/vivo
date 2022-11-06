<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\DB;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')->hourly();

        $CAMPAIGN_DURATION_IN_DAYS = env('CAMPAIGN_DURATION_IN_DAYS', 20);
        $schedule->call(function () {
            DB::table('campaigns')
                ->where('start_date', '<', now()->subDays($CAMPAIGN_DURATION_IN_DAYS))
                ->where('campaign_status', '<>', 3)
                ->update([
                    'campaign_status' => 3,
                    'ended_at' => now()
                ]);
        })->everySixHours();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
