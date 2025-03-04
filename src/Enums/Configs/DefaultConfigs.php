<?php

namespace Qwen\Enums\Configs;

enum DefaultConfigs: string
{
    case BASE_URL = 'https://dashscope.aliyuncs.com';
    case MODEL = 'qwen-plus';
    case TIMEOUT = '30';
    case STREAM = 'false';
}
