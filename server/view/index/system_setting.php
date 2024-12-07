<!DOCTYPE html>
<html lang="zh">
<head>
    {include file="common/head" /}
</head>
<body class="bg-gray-50">
<div class="min-h-screen">
    {include file="common/nav" /}
    <main class="max-w-full mx-auto py-6 px-4">
        <div class="grid grid-cols-1 gap-4 mb-6 lg:grid-cols-4">
            <div class="bg-white p-6 rounded-lg shadow-sm">
                <div class="flex justify-between items-center mb-4"><h3 class="text-lg font-medium">监控网卡</h3><i
                        class="fas fa-network-wired text-custom text-xl"></i></div>
                <p class="text-3xl font-semibold text-custom">eth0
                <div class="flex items-center gap-2"><span class="text-3xl font-semibold text-custom">eth0</span><span
                        class="text-sm text-gray-500">(3台Agent)</span></div>
                </p><p class="text-sm text-gray-500 mt-2">当前活跃</p></div>
            <div class="bg-white p-6 rounded-lg shadow-sm">
                <div class="flex justify-between items-center mb-4"><h3 class="text-lg font-medium">特征规则</h3><i
                        class="fas fa-shield-alt text-blue-500 text-xl"></i></div>
                <p class="text-3xl font-semibold text-blue-500">
                <div class="flex items-center gap-2"><span
                        class="text-3xl font-semibold text-blue-500">2,156</span><span class="text-sm text-gray-500">(所有Agent)</span>
                </div>
                </p><p class="text-sm text-gray-500 mt-2">已加载规则</p></div>
            <div class="bg-white p-6 rounded-lg shadow-sm">
                <div class="flex justify-between items-center mb-4"><h3 class="text-lg font-medium">运行模式</h3><i
                        class="fas fa-cog text-green-500 text-xl"></i></div>
                <p class="text-3xl font-semibold text-green-500">
                <div class="flex items-center gap-2"><span class="text-3xl font-semibold text-green-500">实时检测</span><span
                        class="text-sm text-gray-500">(3/3)</span></div>
                </p><p class="text-sm text-gray-500 mt-2">已启用</p></div>
            <div class="bg-white p-6 rounded-lg shadow-sm">
                <div class="flex justify-between items-center mb-4"><h3 class="text-lg font-medium">系统状态</h3><i
                        class="fas fa-server text-purple-500 text-xl"></i></div>
                <p class="text-3xl font-semibold text-purple-500">
                <div class="flex items-center gap-2"><span
                        class="text-3xl font-semibold text-purple-500">正常</span><span class="text-sm text-gray-500">(3/3)</span>
                </div>
                </p><p class="text-sm text-gray-500 mt-2">CPU: 32%</p></div>
        </div>
        <div class="grid grid-cols-1 gap-4 mb-6">
            <div class="grid grid-cols-2 gap-4">
                <div class="bg-white rounded-lg shadow-sm p-6"><h3 class="text-lg font-medium mb-4">基础配置</h3>
                    <div class="space-y-4">
                        <div class="flex items-center justify-between"><span
                                class="text-sm text-gray-600">监听接口</span><select
                                class="rounded-lg border-gray-300 text-sm">
                            <option>全部Agent</option>
                            <option>Agent-1 (eth0)</option>
                            <option>Agent-2 (eth0)</option>
                            <option>Agent-3 (eth0)</option>
                        </select></div>
                        <div class="flex items-center justify-between"><span
                                class="text-sm text-gray-600">运行模式</span><select
                                class="rounded-lg border-gray-300 text-sm">
                            <option>实时检测</option>
                            <option>离线分析</option>
                        </select></div>
                        <div class="flex items-center justify-between"><span
                                class="text-sm text-gray-600">日志级别</span><select
                                class="rounded-lg border-gray-300 text-sm">
                            <option>DEBUG</option>
                            <option>INFO</option>
                            <option>WARNING</option>
                            <option>ERROR</option>
                        </select></div>
                        <div class="flex items-center justify-between"><span
                                class="text-sm text-gray-600">自动更新</span><label class="switch"><input
                                type="checkbox" checked=""/><span class="slider round"></span></label></div>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-sm p-6"><h3 class="text-lg font-medium mb-4">告警设置</h3>
                    <div class="space-y-4">
                        <div class="flex items-center justify-between"><span
                                class="text-sm text-gray-600">邮件通知</span><label class="switch"><input
                                type="checkbox" checked=""/><span class="slider round"></span></label></div>
                        <div class="flex items-center justify-between"><span
                                class="text-sm text-gray-600">短信通知</span><label class="switch"><input
                                type="checkbox"/><span class="slider round"></span></label></div>
                        <div class="flex items-center justify-between"><span
                                class="text-sm text-gray-600">告警阈值</span><input type="number"
                                                                                    class="rounded-lg border-gray-300 text-sm w-20"
                                                                                    value="100"/></div>
                        <div class="flex items-center justify-between"><span
                                class="text-sm text-gray-600">告警间隔(分钟)</span><input type="number"
                                                                                          class="rounded-lg border-gray-300 text-sm w-20"
                                                                                          value="30"/></div>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-sm p-6"><h3 class="text-lg font-medium mb-4">规则管理</h3>
                    <div class="space-y-4">
                        <div class="flex items-center justify-between"><span
                                class="text-sm text-gray-600">自定义规则</span>
                            <button class="bg-custom text-white px-4 py-2 text-sm rounded-lg">添加规则</button>
                        </div>
                        <div class="mt-4">
                            <table class="min-w-full">
                                <thead class="bg-gray-50">
                                <tr>
                                    <th class="text-left text-xs font-medium text-gray-500 uppercase px-4 py-2">
                                        规则名称
                                    </th>
                                    <th class="text-left text-xs font-medium text-gray-500 uppercase px-4 py-2">状态
                                    </th>
                                    <th class="text-left text-xs font-medium text-gray-500 uppercase px-4 py-2">操作
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="border-b">
                                    <td class="px-4 py-2 text-sm">SQL注入检测</td>
                                    <td class="px-4 py-2"><span
                                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">启用</span>
                                    </td>
                                    <td class="px-4 py-2 text-sm">
                                        <button class="text-custom hover:text-custom-dark">编辑</button>
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <td class="px-4 py-2 text-sm">XSS攻击检测</td>
                                    <td class="px-4 py-2"><span
                                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">启用</span>
                                    </td>
                                    <td class="px-4 py-2 text-sm">
                                        <button class="text-custom hover:text-custom-dark">编辑</button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-sm p-6"><h3 class="text-lg font-medium mb-4">系统维护</h3>
                    <div class="space-y-4">
                        <div class="flex items-center justify-between"><span
                                class="text-sm text-gray-600">数据备份</span>
                            <button class="bg-custom text-white px-4 py-2 text-sm rounded-lg">立即备份</button>
                        </div>
                        <div class="flex items-center justify-between"><span
                                class="text-sm text-gray-600">自动清理</span><select
                                class="rounded-lg border-gray-300 text-sm">
                            <option>7天</option>
                            <option>30天</option>
                            <option>90天</option>
                        </select></div>
                        <div class="flex items-center justify-between"><span
                                class="text-sm text-gray-600">系统升级</span>
                            <button class="bg-custom text-white px-4 py-2 text-sm rounded-lg">检查更新</button>
                        </div>
                        <div class="flex items-center justify-between"><span
                                class="text-sm text-gray-600">诊断工具</span>
                            <button class="bg-custom text-white px-4 py-2 text-sm rounded-lg">系统诊断</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

</body>
</html>
