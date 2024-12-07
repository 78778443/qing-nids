<!DOCTYPE html>
<html lang="zh">
<head>
  {include file="common/head" /}
</head>
<body class="bg-gray-50">
<div class="min-h-screen">
  {include file="common/nav" /}
    <main class="max-w-7xl mx-auto py-6 px-4">
        <div class="grid grid-cols-4 gap-4 mb-6">
            <div class="bg-white p-6 rounded-lg shadow-sm">
                <div class="flex justify-between items-center mb-4"><h3 class="text-lg font-medium">总告警数</h3><i
                        class="fas fa-shield-alt text-custom text-xl"></i></div>
                <p class="text-3xl font-semibold text-custom">1,286</p>
                <p class="text-sm text-gray-500 mt-2">本月累计</p></div>
            <div class="bg-white p-6 rounded-lg shadow-sm">
                <div class="flex justify-between items-center mb-4"><h3 class="text-lg font-medium">待处理</h3><i
                        class="fas fa-clock text-yellow-500 text-xl"></i></div>
                <p class="text-3xl font-semibold text-yellow-500">394</p>
                <p class="text-sm text-gray-500 mt-2">占比 30.6%</p></div>
            <div class="bg-white p-6 rounded-lg shadow-sm">
                <div class="flex justify-between items-center mb-4"><h3 class="text-lg font-medium">处理中</h3><i
                        class="fas fa-spinner text-blue-500 text-xl"></i></div>
                <p class="text-3xl font-semibold text-blue-500">156</p>
                <p class="text-sm text-gray-500 mt-2">占比 12.1%</p></div>
            <div class="bg-white p-6 rounded-lg shadow-sm">
                <div class="flex justify-between items-center mb-4"><h3 class="text-lg font-medium">已处理</h3><i
                        class="fas fa-check-circle text-green-500 text-xl"></i></div>
                <p class="text-3xl font-semibold text-green-500">736</p>
                <p class="text-sm text-gray-500 mt-2">占比 57.3%</p></div>
        </div>
        <div class="grid grid-cols-1 gap-4 mb-6">
            <div class="bg-white rounded-lg shadow-sm w-full">
                <div class="p-6 border-b border-gray-200">
                    <div class="flex justify-between items-center"><h3 class="text-lg font-medium">告警列表</h3>
                        <div class="flex space-x-4"><select class="rounded-lg border-gray-300 text-sm">
                            <option>所有级别</option>
                            <option>高危</option>
                            <option>中危</option>
                            <option>低危</option>
                        </select><select class="rounded-lg border-gray-300 text-sm">
                            <option>所有状态</option>
                            <option>待处理</option>
                            <option>处理中</option>
                            <option>已处理</option>
                        </select><input type="text" placeholder="搜索告警ID/IP"
                                        class="rounded-lg border-gray-300 text-sm w-48"/>
                            <button class="bg-custom text-white px-4 py-2 rounded-lg text-sm"><i
                                    class="fas fa-search mr-2"></i>搜索
                            </button>
                        </div>
                    </div>
                </div>
                <div class="overflow-x-auto w-full">
                    <table class="min-w-full table-auto">
                        <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">告警ID</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">告警级别</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">告警类型</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">目标IP</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">源IP</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">发生时间</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">状态</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">操作</th>
                        </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                        <tr>
                            <td class="px-6 py-4 text-sm">ALT-2024031801</td>
                            <td class="px-6 py-4"><span
                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">高危</span>
                            </td>
                            <td class="px-6 py-4 text-sm">SQL注入攻击</td>
                            <td class="px-6 py-4 text-sm">192.168.1.100</td>
                            <td class="px-6 py-4 text-sm">45.33.12.156</td>
                            <td class="px-6 py-4 text-sm">2024-03-18 10:25</td>
                            <td class="px-6 py-4"><span
                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">待处理</span>
                            </td>
                            <td class="px-6 py-4 text-sm">
                                <div class="flex space-x-2">
                                    <button class="text-custom hover:text-custom-dark">处理</button>
                                    <button class="text-gray-500 hover:text-gray-700">详情</button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 text-sm">ALT-2024031802</td>
                            <td class="px-6 py-4"><span
                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-orange-100 text-orange-800">中危</span>
                            </td>
                            <td class="px-6 py-4 text-sm">暴力破解</td>
                            <td class="px-6 py-4 text-sm">192.168.1.105</td>
                            <td class="px-6 py-4 text-sm">78.45.23.189</td>
                            <td class="px-6 py-4 text-sm">2024-03-18 09:15</td>
                            <td class="px-6 py-4"><span
                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">处理中</span>
                            </td>
                            <td class="px-6 py-4 text-sm">
                                <div class="flex space-x-2">
                                    <button class="text-custom hover:text-custom-dark">完成</button>
                                    <button class="text-gray-500 hover:text-gray-700">详情</button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 text-sm">ALT-2024031803</td>
                            <td class="px-6 py-4"><span
                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">高危</span>
                            </td>
                            <td class="px-6 py-4 text-sm">XSS攻击</td>
                            <td class="px-6 py-4 text-sm">192.168.1.102</td>
                            <td class="px-6 py-4 text-sm">112.45.78.234</td>
                            <td class="px-6 py-4 text-sm">2024-03-18 08:30</td>
                            <td class="px-6 py-4"><span
                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">已处理</span>
                            </td>
                            <td class="px-6 py-4 text-sm">
                                <button class="text-gray-500 hover:text-gray-700">详情</button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="p-4 border-t border-gray-200">
                    <div class="flex items-center justify-between px-4">
                        <div class="text-sm text-gray-700">显示 1 到 3，共 394 条记录</div>
                        <div class="flex space-x-2">
                            <button class="px-3 py-1 border rounded-lg text-sm text-gray-500">上一页</button>
                            <button class="px-3 py-1 border rounded-lg text-sm bg-custom text-white">1</button>
                            <button class="px-3 py-1 border rounded-lg text-sm text-gray-500">2</button>
                            <button class="px-3 py-1 border rounded-lg text-sm text-gray-500">3</button>
                            <button class="px-3 py-1 border rounded-lg text-sm text-gray-500">下一页</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hidden">
            <div class="p-6 border-b border-gray-200">
                <h3 class="text-lg font-medium">最新告警</h3>
            </div>
            <div class="overflow-x-auto">
                <table class="min-w-full">
                    <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            告警ID
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            告警级别
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            攻击类型
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            目标IP
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            攻击源
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            处理进度
                        </th>
                    </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">ALT-2024031801</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">高危</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">DDoS攻击</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">192.168.1.100</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">45.33.12.156</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">待处理</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">ALT-2024031802</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-orange-100 text-orange-800">中危</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">端口扫描</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">192.168.1.105</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">78.45.23.189</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">已处理</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">ALT-2024031803</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">高危</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">协议异常</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">192.168.1.102</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">112.45.78.234</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">待处理</span>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</div>
<script>
    const alertTrendChart = echarts.init(document.getElementById('alertTrend'));
    const alertTypesChart = echarts.init(document.getElementById('alertTypes'));
    const alertTrendOption = {
        tooltip: {
            trigger: 'axis'
        },
        grid: {
            left: '3%',
            right: '4%',
            bottom: '3%',
            containLabel: true
        },
        xAxis: {
            type: 'category',
            boundaryGap: false,
            data: ['00:00', '03:00', '06:00', '09:00', '12:00', '15:00', '18:00', '21:00']
        },
        yAxis: {
            type: 'value'
        },
        series: [
            {
                name: '告警数量',
                type: 'line',
                smooth: true,
                data: [150, 230, 224, 218, 135, 147, 260, 196],
                itemStyle: {
                    color: '#000000'
                },
                areaStyle: {
                    color: {
                        type: 'linear',
                        x: 0,
                        y: 0,
                        x2: 0,
                        y2: 1,
                        colorStops: [{
                            offset: 0,
                            color: 'rgba(0, 0, 0, 0.2)'
                        }, {
                            offset: 1,
                            color: 'rgba(0, 0, 0, 0.05)'
                        }]
                    }
                }
            }
        ]
    };
    const alertTypesOption = {
        tooltip: {
            trigger: 'item'
        },
        legend: {
            orient: 'vertical',
            right: 10,
            top: 'center'
        },
        series: [
            {
                name: '告警类型',
                type: 'pie',
                radius: ['40%', '70%'],
                center: ['40%', '50%'],
                avoidLabelOverlap: false,
                itemStyle: {
                    borderRadius: 10,
                    borderColor: '#fff',
                    borderWidth: 2
                },
                label: {
                    show: false,
                    position: 'center'
                },
                emphasis: {
                    label: {
                        show: true,
                        fontSize: 20,
                        fontWeight: 'bold'
                    }
                },
                labelLine: {
                    show: false
                },
                data: [
                    {value: 485, name: 'SQL注入'},
                    {value: 300, name: '暴力破解'},
                    {value: 234, name: 'XSS攻击'},
                    {value: 154, name: '木马后门'},
                    {value: 113, name: '其他攻击'}
                ]
            }
        ]
    };
    alertTrendChart.setOption(alertTrendOption);
    alertTypesChart.setOption(alertTypesOption);
    window.addEventListener('resize', function () {
        alertTrendChart.resize();
        alertTypesChart.resize();
    });
</script>

</body>
</html>
