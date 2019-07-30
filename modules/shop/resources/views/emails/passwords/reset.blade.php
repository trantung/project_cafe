<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h2>{{ trans('modules.user::mail.title.Reset Password') }}</h2>

        <div>
            {{ trans('modules.user::mail.greeting', ['name' => $name]) }}<br><br>

            {{ trans('modules.user::mail.sentences.We received a request to change your password') }}<br>
            {{ trans('modules.user::mail.sentences.Click this link to reset your password') }}<br>
            <b>{{ URL::to(env('APP_FRONTEND_URL').'/password/reset/'. $token) }}</b><br><br>

            {{ trans('modules.user::mail.sentences.If not you, skip this email') }}<br>
            {{ trans('modules.user::mail.ending') }}
        </div>

    </body>
</html>