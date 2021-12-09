<?php

return [

    /*
     * Here you can write multiple emails to send mail to them
     */
    'email' => [
        //
    ],

    /*
     * Models path
     */
    'models' => [
        'handle_mail' => Artsites\HandleMail\Models\HandleMail::class,
        'failed_jobs' => Artsites\HandleMail\Models\FailedJobs::class,
    ],

    /*
     * Mail path
     */
    'mail' => Artsites\HandleMail\Mail\HandleMail::class,

    /*
     * Mail job path
     */
    'job' => Artsites\HandleMail\Jobs\HandleMailJob::class,

];
