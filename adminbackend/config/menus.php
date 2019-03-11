<?php

return [
    ['title' => '帐号相关', 'icon' => 'document', 'children' =>
        [
            ['title' => '帐号列表', 'path' => 'account/lists'],
            ['title' => '帐号统计', 'path' => 'account/statistical'],
            ['title' => '今日统计', 'path' => 'account/todayStatistics'],
            ['title' => '已卖出帐号', 'path' => 'account/soldOut'],
            ['title' => '回收交易猫帐号', 'path' => 'account/recovery'],
            ['title' => '重置账号到签到14天', 'path' => 'account/backTo14'],
            ['title' => '执行原生sql', 'path' => 'account/querySql'],
        ],
    ],
    ['title' => '交易猫', 'icon' => 'document', 'children' =>
        [
            ['title' => '单个商品销量变化', 'path' => 'mao/goodsChangeHistory'],
            ['title' => '商品总数量与销量比例', 'path' => 'mao/goodsScale', 'home' => true],
            ['title' => '数据报表', 'path' => 'mao/dataReport'],
        ]
    ],
    ['title' => '管理员设置', 'icon' => 'menu', 'children' => [
        ['title' => '管理员管理', 'path' => 'admin/lists'],
        ['title' => '角色管理', 'path' => 'role/lists']],
    ],
];
