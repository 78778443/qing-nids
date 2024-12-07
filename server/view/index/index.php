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
            <div class="flex justify-between items-center mb-4">
              <h3 class="text-lg font-medium">今日告警总数</h3>
              <i class="fas fa-shield-alt text-custom text-xl"></i>
            </div>
            <p class="text-3xl font-semibold">1,286</p>
            <p class="text-sm text-gray-500 mt-2">较昨日 +12.5%</p>
          </div>
          <div class="bg-white p-6 rounded-lg shadow-sm">
            <div class="flex justify-between items-center mb-4">
              <h3 class="text-lg font-medium">高危告警</h3>
              <i class="fas fa-exclamation-triangle text-red-500 text-xl"></i>
            </div>
            <p class="text-3xl font-semibold text-red-500">168</p>
            <p class="text-sm text-gray-500 mt-2">较昨日 +5.2%</p>
          </div>
          <div class="bg-white p-6 rounded-lg shadow-sm">
            <div class="flex justify-between items-center mb-4">
              <h3 class="text-lg font-medium">已处理告警</h3>
              <i class="fas fa-check-circle text-green-500 text-xl"></i>
            </div>
            <p class="text-3xl font-semibold text-green-500">892</p>
            <p class="text-sm text-gray-500 mt-2">处理率 69.4%</p>
          </div>
          <div class="bg-white p-6 rounded-lg shadow-sm">
            <div class="flex justify-between items-center mb-4">
              <h3 class="text-lg font-medium">受攻击资产</h3>
              <i class="fas fa-desktop text-blue-500 text-xl"></i>
            </div>
            <p class="text-3xl font-semibold text-blue-500">45</p>
            <p class="text-sm text-gray-500 mt-2">较昨日 -2.2%</p>
          </div>
        </div>

        <div class="grid grid-cols-2 gap-4 mb-6">
          <div class="bg-white p-6 rounded-lg shadow-sm">
            <h3 class="text-lg font-medium mb-4">告警趋势</h3>
            <div id="alertTrend" class="h-80"></div>
          </div>
          <div class="bg-white p-6 rounded-lg shadow-sm">
            <h3 class="text-lg font-medium mb-4">告警类型分布</h3>
            <div id="alertTypes" class="h-80"></div>
          </div>
        </div>

        <div class="bg-white rounded-lg shadow-sm">
          <div class="p-6 border-b border-gray-200">
            <h3 class="text-lg font-medium">最新告警</h3>
          </div>
          <div class="overflow-x-auto">
            <table class="min-w-full">
              <thead class="bg-gray-50">
                <tr>
                  <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">告警时间</th>
                  <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">告警级别</th>
                  <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">告警类型</th>
                  <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">受攻击IP</th>
                  <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">攻击源IP</th>
                  <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">状态</th>
                </tr>
              </thead>
              <tbody class="bg-white divide-y divide-gray-200">
                <tr>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">2024-03-18 10:23:45</td>
                  <td class="px-6 py-4 whitespace-nowrap">
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">高危</span>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">SQL注入攻击</td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">192.168.1.100</td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">45.33.12.156</td>
                  <td class="px-6 py-4 whitespace-nowrap">
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">待处理</span>
                  </td>
                </tr>
                <tr>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">2024-03-18 10:21:32</td>
                  <td class="px-6 py-4 whitespace-nowrap">
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-orange-100 text-orange-800">中危</span>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">暴力破解</td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">192.168.1.105</td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">78.45.23.189</td>
                  <td class="px-6 py-4 whitespace-nowrap">
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">已处理</span>
                  </td>
                </tr>
                <tr>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">2024-03-18 10:20:15</td>
                  <td class="px-6 py-4 whitespace-nowrap">
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">高危</span>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">XSS攻击</td>
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
              { value: 485, name: 'SQL注入' },
              { value: 300, name: '暴力破解' },
              { value: 234, name: 'XSS攻击' },
              { value: 154, name: '木马后门' },
              { value: 113, name: '其他攻击' }
            ]
          }
        ]
      };

      alertTrendChart.setOption(alertTrendOption);
      alertTypesChart.setOption(alertTypesOption);

      window.addEventListener('resize', function() {
        alertTrendChart.resize();
        alertTypesChart.resize();
      });
    </script>
  

</body></html>
