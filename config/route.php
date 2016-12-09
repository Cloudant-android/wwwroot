<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

return [
    '__pattern__' => [
        'name' => '\w+',
    ],
    'register' => 'index/index/register',
    'login' => 'index/index/login',
    'getMember' => 'member/member/getMember',
    'updateMember' => 'member/member/updateMember',
    'addFriend' => 'friends/friend/add',
    'getFriends' => 'friends/friend/getFriends',
    'delFriend' => 'friends/friend/delFriend',
    'addCircle' => 'circle/Circle/release',
    'getCircle' => 'circle/Circle/getCircle',
];
