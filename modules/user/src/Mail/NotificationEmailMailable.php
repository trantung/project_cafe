<?php

namespace APV\User\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

/**
 * Class NotificationEmailMailable
 * @package APV\User\Mail
 */
class NotificationEmailMailable extends Mailable implements ShouldQueue
{
    use Queueable;
    use SerializesModels;

    /**
     * @var string
     */
    public $subject;

    /**
     * @var array
     */
    public $dataArray = [];

    /**
     * @var string
     */
    public $string;

    /**
     * Create a new message instance.
     * @param $view, $dataArray, $subject
     */
    public function __construct($view, $dataArray, $subject)
    {
        $this->string = $view;
        $this->dataArray = $dataArray;
        $this->subject = $subject;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject($this->subject)->view('modules.user::emails.' . $this->string)->with($this->dataArray);
    }
}
