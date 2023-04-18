<?php

return [
    'errors' =>
    [
        'invalid_type' => '期望 {{expected}}, 收到 {{received}}',
        'invalid_type_received_undefined' => '必需的',
        'invalid_literal' => '无效的文字值，期望 {{expected}}',
        'unrecognized_keys' => '对象中无法识别的键：{{- keys}}',
        'invalid_union' => '无效的输入',
        'invalid_union_discriminator' => '无效的鉴别器值。期望 {{- options}}',
        'invalid_enum_value' => '无效的枚举值。期望 {{- options}}, 收到 \'{{received}}\'',
        'invalid_arguments' => '无效的函数参数',
        'invalid_return_type' => '无效的函数返回类型',
        'invalid_date' => '无效的日期',
        'custom' => '无效的输入',
        'invalid_intersection_types' => '交集结果无法合并',
        'not_multiple_of' => '数字必须是 {{multipleOf}} 的倍数',
        'not_finite' => '数字必须是有限的',
        'invalid_string' =>
        [
            'email' => '无效的 {{validation}}',
            'url' => '无效的 {{validation}}',
            'uuid' => '无效的 {{validation}}',
            'cuid' => '无效的 {{validation}}',
            'regex' => '无效的',
            'datetime' => '无效的 {{validation}}',
            'startsWith' => '无效的输入：必须以 "{{startsWith}}" 开头',
            'endsWith' => '无效的输入：必须以 "{{endsWith}}" 结尾',
            'hostname' => '无效的 {{validation}}',
            'english_keyboard_characters' => '无效的 {{validation}}',
            'password' => '必须包含8个字符，一个大写字母，一个小写字母，一个数字和一个特殊字符',
            'ip_address' => '无效的IP地址',
        ],
        'too_small' =>
        [
            'array' =>
            [
                'exact' => '数组必须包含恰好 {{minimum}} 个元素',
                'inclusive' => '数组必须至少包含 {{minimum}} 个元素',
                'not_inclusive' => '数组必须包含超过 {{minimum}} 个元素',
            ],
            'string' =>
            [
                'exact' => '字符串必须包含恰好 {{minimum}} 个字符',
                'inclusive' => '字符串必须至少包含 {{minimum}} 个字符',
                'not_inclusive' => '字符串必须包含超过 {{minimum}} 个字符',
            ],
            'number' =>
            [
                'exact' => '数字必须正好是 {{minimum}}',
                'inclusive' => '数字必须大于或等于 {{minimum}}',
                'not_inclusive' => '数字必须大于 {{minimum}}',
            ],
            'set' =>
            [
                'exact' => '无效的输入',
                'inclusive' => '无效的输入',
                'not_inclusive' => '无效的输入',
            ],
            'date' =>
            [
                'exact' => '日期必须正好是 {{- minimum, datetime}}',
                'inclusive' => '日期必须大于或等于 {{- minimum, datetime}}',
                'not_inclusive' => '日期必须大于 {{- minimum, datetime}}',
            ],
        ],
        'too_big' =>
        [
            'array' =>
            [
                'exact' => '数组必须包含恰好 {{maximum}} 个元素',
                'inclusive' => '数组必须至多包含 {{maximum}} 个元素',
                'not_inclusive' => '数组必须包含少于 {{maximum}} 个元素',
            ],
            'string' =>
            [
                'exact' => '字符串必须包含恰好 {{maximum}} 个字符',
                'inclusive' => '字符串必须至多包含 {{maximum}} 个字符',
                'not_inclusive' => '字符串必须包含少于 {{maximum}} 个字符',
            ],
            'number' =>
            [
                'exact' => '数字必须正好是 {{maximum}}',
                'inclusive' => '数字必须小于或等于 {{maximum}}',
                'not_inclusive' => '数字必须小于 {{maximum}}',
            ],
            'set' =>
            [
                'exact' => '无效的输入',
                'inclusive' => '无效的输入',
                'not_inclusive' => '无效的输入',
            ],
            'date' =>
            [
                'exact' => '日期必须正好是 {{- maximum, datetime}}',
                'inclusive' => '日期必须小于或等于 {{- maximum, datetime}}',
                'not_inclusive' => '日期必须小于 {{- maximum, datetime}}',
            ],
        ],
    ],
    'validations' =>
    [
        'email' => '电子邮件',
        'url' => '网址',
        'uuid' => 'UUID',
        'cuid' => 'CUID',
        'regex' => '正则表达式',
        'datetime' => '日期和时间',
    ],
    'types' =>
    [
        'function' => '函数',
        'number' => '数字',
        'string' => '字符串',
        'nan' => 'NaN',
        'integer' => '整数',
        'float' => '浮点数',
        'boolean' => '布尔值',
        'date' => '日期',
        'bigint' => '大整数',
        'undefined' => '未定义',
        'symbol' => '符号',
        'null' => '空值',
        'array' => '数组',
        'object' => '对象',
        'unknown' => '未知',
        'promise' => 'promise',
        'void' => 'void',
        'never' => 'never',
        'map' => '映射',
        'set' => '集合',
    ],
];
