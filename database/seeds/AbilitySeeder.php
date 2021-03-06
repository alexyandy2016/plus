<?php

/*
 * +----------------------------------------------------------------------+
 * |                          ThinkSNS Plus                               |
 * +----------------------------------------------------------------------+
 * | Copyright (c) 2018 Chengdu ZhiYiChuangXiang Technology Co., Ltd.     |
 * +----------------------------------------------------------------------+
 * | This source file is subject to version 2.0 of the Apache license,    |
 * | that is bundled with this package in the file LICENSE, and is        |
 * | available through the world-wide-web at the following url:           |
 * | http://www.apache.org/licenses/LICENSE-2.0.html                      |
 * +----------------------------------------------------------------------+
 * | Author: Slim Kit Group <master@zhiyicx.com>                          |
 * | Homepage: www.thinksns.com                                           |
 * +----------------------------------------------------------------------+
 */

use Zhiyi\Plus\Models\Ability;
use Illuminate\Database\Seeder;

class AbilitySeeder extends Seeder
{
    /**
     * Run Abilitys Node Insert Data Method.
     *
     * @return void
     * @author Seven Du <shiweidu@outlook.com>
     */
    public function run()
    {
        $this->createManagerPerm();
        $this->createOwnerPerm();
    }

    /**
     * 管理员节点.
     *
     * @return void
     * @author Seven Du <shiweidu@outlook.com>
     */
    protected function createManagerPerm()
    {
        // 基础
        Ability::create(['name' => 'admin: login', 'display_name' => '后台登录权限', 'description' => '用户是否有权限登录后台']);
        Ability::create(['name' => 'admin:site:base', 'display_name' => '系统-基本信息', 'description' => '编辑系统配置基本信息权限']);

        // 地区管理
        Ability::create(['name' => 'admin:area:show', 'display_name' => '系统-地区管理', 'description' => '编辑系统地区管理权限']);
        Ability::create(['name' => 'admin:area:add', 'display_name' => '地区管理-添加', 'description' => '地区管理添加地区权限']);
        Ability::create([
            'name' => 'admin:area:update',
            'display_name' => '地区管理-更新地区',
            'description' => '地区管理修改权限',
        ]);
        Ability::create([
            'name' => 'admin:area:delete',
            'display_name' => '地区管理-删除',
            'description' => '地区管理删除地区权限',
        ]);

        // 储存引擎
        Ability::create(['name' => 'admin:storages', 'display_name' => '储存管理', 'description' => '编辑系统储存管理权限']);

        // 用户管理
        Ability::create([
            'name' => 'admin:user:show',
            'display_name' => '用户管理',
            'description' => '用户管理查看权限',
        ]);
        Ability::create([
            'name' => 'admin:user:update',
            'display_name' => '用户管理-修改',
            'description' => '编辑用户信息权限',
        ]);
        Ability::create([
            'name' => 'admin:user:delete',
            'display_name' => '用户管理-删除',
            'description' => '删除用户权限',
        ]);
        Ability::create([
            'name' => 'admin:user:add',
            'display_name' => '用户管理-添加',
            'description' => '添加用户权限',
        ]);

        // 角色管理
        Ability::create([
            'name' => 'admin:role:show',
            'display_name' => '角色管理',
            'description' => '用户角色管理权限',
        ]);
        Ability::create([
            'name' => 'admin:role:update',
            'display_name' => '角色管理-编辑',
            'description' => '角色编辑权限',
        ]);
        Ability::create([
            'name' => 'admin: Deleting role',
            'display_name' => '角色管理-删除',
            'description' => '角色管理删除权限',
        ]);
        Ability::create([
            'name' => 'admin:role:add',
            'display_name' => '角色管理-添加',
            'description' => '角色添加权限',
        ]);

        // 权限管理
        Ability::create([
            'name' => 'admin:perm:show',
            'display_name' => '权限管理',
            'description' => '权限管理权限',
        ]);
        Ability::create([
            'name' => 'admin:perm:update',
            'display_name' => '权限管理-编辑',
            'description' => '权限管理编辑权限',
        ]);
        Ability::create([
            'name' => 'admin:perm:add',
            'display_name' => '权限管理-添加',
            'description' => '权限管理添加权限节点权限',
        ]);
        Ability::create([
            'name' => 'admin:perm:delete',
            'display_name' => '权限管理-删除',
            'description' => '权限管理删除权限节点权限',
        ]);

        // 系统通知
        Ability::create([
            'name' => 'admin:notice:send',
            'display_name' => '系统通知-发送',
            'description' => '系统通知发送系统通知权限',
        ]);
    }

    /**
     * 普通用户权限节点.
     *
     * @return void
     * @author Seven Du <shiweidu@outlook.com>
     */
    protected function createOwnerPerm()
    {
        Ability::create([
            'name' => 'login',
            'display_name' => '登录',
            'description' => '用户登录权限',
        ]);

        Ability::create([
            'name' => 'password-update',
            'display_name' => '修改用户密码',
            'description' => '用户修改密码权限',
        ]);

        Ability::create([
            'name' => 'user-update',
            'display_name' => '修改用户资料',
            'description' => '用户修改资料权限',
        ]);

        Ability::create([
            'name' => 'user-follow',
            'display_name' => '关注用户',
            'description' => '用户关注权限',
        ]);

        Ability::create([
            'name' => 'storage-create',
            'display_name' => '上传附件',
            'description' => '用户上传附件权限',
        ]);

        Ability::create([
            'name' => 'feedback',
            'display_name' => '意见反馈',
            'description' => '用户意见反馈权限',
        ]);

        Ability::create([
            'name' => 'conversations',
            'display_name' => '系统会话',
            'description' => '用户获取系统会话权限',
        ]);
    }
}
