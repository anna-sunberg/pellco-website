<?php

namespace App\Jobs;

use App\Order;
use App\Item;

use Mail;
use App\Jobs\Job;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendOrderEmail extends Job implements ShouldQueue
{
    use InteractsWithQueue, SerializesModels;

    protected $order;

    /**
     * Create a new job instance.
     *
     * @param Order $order
     * @return void
     */
    public function __construct(Order $order)
    {
        $this->order = $order;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $item = Item::where('id', $this->order->item)->first();

        Mail::send('emails.order', ['order' => $this->order, 'item' => $item], function ($message)
        {

            $message->from('order@pellcompany.fi', 'PellCompany');
            $message->to('order@pellcompany.fi');
            $message->subject('New order on ' . date('d.m.Y H:i'));

        });
    }
}
