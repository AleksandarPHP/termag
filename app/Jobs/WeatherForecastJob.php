<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Services\WatherForecast;
use Carbon\Carbon;
use Cache;

class WeatherForecastJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $weatherForecast;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        $this->weatherForecast = new WatherForecast();
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {

        $weathers = $this->weatherForecast->getResults();

        if (!is_null($weathers)) {
            $weatherData = [];
            foreach($weathers['forecast']['forecastday'] as $weather){
                $date = Carbon::parse($weather['date'])->format('d.m');
                
                $avgtemp = intval(ceil($weather['day']['avgtemp_c']));
                $weatherData[$date] = $avgtemp;
            }
    
            Cache::put('weathers', $weatherData);
        }
        
    }
}
