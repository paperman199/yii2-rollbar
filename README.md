Rollbar for Yii2
================
Fixed version, not mine, origin here: https://github.com/baibaratsky/yii2-rollbar

Basic config
 ```php
 'bootstrap' => ['rollbar'],
 'components' => [
     'rollbar'            => [
            'class'            => 'baibaratsky\yii\rollbar\Rollbar',
            'accessToken'      => '********************************',
            'environment'      => 'production',
            'batched'          => false,
            'batchSize'        => 1,
            'ignoreExceptions' => [
                ['yii\web\NotFoundHttpException', 'statusCode' => [404]],
                ['yii\web\ForbiddenHttpException', 'statusCode' => [403]],
                ['yii\web\BadRequestHttpException', 'statusCode' => [400]],
            ],
            'scrubFields'      => [
                'password',
                'old_password',
                'new_password',
                'confirm_password',
                'repeat_password',
                'password_confirmation',
                'secret',
                'auth_token',
                'CSRF',
                'CC',
            ],
        ],
        'errorHandler'       => [
            'class'       => 'baibaratsky\yii\rollbar\web\ErrorHandler',
            'errorAction' => 'site/error',
        ],
        'log'                => [
            'targets'    => [
                [
                    'class'  => 'baibaratsky\yii\rollbar\log\Target',
                    'levels' => ['error'],
                ],
                [
                    'class'       => 'yii\log\FileTarget',
                    'levels'      => ['error', 'warning', 'info'],
                    'maxLogFiles' => 30,
                ],
            ],
            'traceLevel' => YII_DEBUG ? 3 : 0,
        ],
 ],
 ```