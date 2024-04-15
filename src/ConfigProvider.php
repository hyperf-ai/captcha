<?php

declare(strict_types=1);
/**
 * This file is part of hyperf-ext/captcha.
 *
 * @link     https://github.com/hyperf-ext/captcha
 * @contact  eric@zhu.email
 * @license  https://github.com/hyperf-ext/captcha/blob/master/LICENSE
 */
namespace HyperfAi\Captcha;

use HyperfAi\Captcha\Listener\ValidatorFactoryResolvedListener;

class ConfigProvider
{
    public function __invoke(): array
    {
        return [
            'listeners' => [
                ValidatorFactoryResolvedListener::class,
            ],
            'publish' => [
                [
                    'id' => 'config',
                    'description' => 'The config for hyperfai/captcha.',
                    'source' => __DIR__ . '/../publish/captcha.php',
                    'destination' => BASE_PATH . '/config/autoload/captcha.php',
                ],
                [
                    'id' => 'fonts',
                    'description' => 'The fonts for hyperf-ai/captcha.',
                    'source' => __DIR__ . '/../publish/fonts',
                    'destination' => BASE_PATH . '/storage/fonts',
                ],
            ],
        ];
    }
}
