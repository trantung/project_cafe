<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h2>{{ trans('modules.user::mail.title.Verify Your Email Address') }}</h2>

        <div>
            {{ trans('modules.user::mail.sentences.Click this link to complete verifying your email account') }}<br>
            <b>{{ URL::to(env('APP_FRONTEND_URL').'/email/verify/'. $activation_code) }}</b><br><br>

            {{ trans('modules.user::mail.ending') }}
        </div>

    </body>
</html>