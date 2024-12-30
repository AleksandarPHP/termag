<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\Message;
use App\Notifications\CareerMessage;
use Notification;
use Log;
use Exception;

class SendingMessage implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $messages = Message::where('is_send', 0)->get();
        if (count($messages)) {
            foreach($messages as $message){
                $html = '<b>Infromacije:</b><br>';
                $html .= '<b>Ime i prezime </b>'.$message->name.'<br>';
                $html .= '<b>Ime i prezime </b>'.$message->tel.'<br>';
                $html .= '<b>Ime i prezime </b>'.$message->email.'<br>';
                $html .= '<b>Ime i prezime </b>'.$message->date.'<br>';
                $html .= '<b>Ime i prezime </b>'.$message->description.'<br>';

                try {
                    Notification::route('mail', 'aco@think.ba')->notify(new CareerMessage($html, $message->file, $message->email, $message->name));
                } catch(Exception $e) {
                    Log::error($e);
                }

                // $message->update(['is_send' => 1]);
            }
        }
    }
}
