<!DOCTYPE html>
<html lang="zh"><head>
  {include file="common/head" /}
</head>
  <body class="bg-gray-50">
    <div class="min-h-screen">
      {include file="common/nav" /}
      <main class="max-w-full mx-auto py-6 px-4">
        <div class="grid grid-cols-1 gap-4 mb-6 lg:grid-cols-4"><div class="bg-white p-6 rounded-lg shadow-sm"><div class="flex justify-between items-center mb-4"><h3 class="text-lg font-medium">总日志数</h3><i class="fas fa-file-alt text-custom text-xl"></i></div><p class="text-3xl font-semibold text-custom">15,328</p><p class="text-sm text-gray-500 mt-2">今日新增: 1,203</p></div><div class="bg-white p-6 rounded-lg shadow-sm"><div class="flex justify-between items-center mb-4"><h3 class="text-lg font-medium">异常行为</h3><i class="fas fa-exclamation-triangle text-red-500 text-xl"></i></div><p class="text-3xl font-semibold text-red-500">42</p><p class="text-sm text-gray-500 mt-2">需要关注</p></div><div class="bg-white p-6 rounded-lg shadow-sm"><div class="flex justify-between items-center mb-4"><h3 class="text-lg font-medium">活跃IP</h3><i class="fas fa-network-wired text-blue-500 text-xl"></i></div><p class="text-3xl font-semibold text-blue-500">156</p><p class="text-sm text-gray-500 mt-2">正在通信</p></div><div class="bg-white p-6 rounded-lg shadow-sm"><div class="flex justify-between items-center mb-4"><h3 class="text-lg font-medium">已阻断</h3><i class="fas fa-ban text-gray-500 text-xl"></i></div><p class="text-3xl font-semibold text-gray-500">23</p><p class="text-sm text-gray-500 mt-2">可疑连接</p></div></div>
        <div class="grid grid-cols-1 gap-4 mb-6"><div class="bg-white rounded-lg shadow-sm p-4 mb-6"><div class="space-y-6"><div class="w-full"><h3 class="text-lg font-medium mb-4">协议类型</h3><div class="flex flex-wrap gap-4"><label class="flex items-center"><input type="checkbox" class="rounded text-custom"/><span class="ml-2 text-sm">HTTP/HTTPS</span></label><label class="flex items-center"><input type="checkbox" class="rounded text-custom"/><span class="ml-2 text-sm">SSH</span></label><label class="flex items-center"><input type="checkbox" class="rounded text-custom"/><span class="ml-2 text-sm">MySQL</span></label><label class="flex items-center"><input type="checkbox" class="rounded text-custom"/><span class="ml-2 text-sm">FTP</span></label><label class="flex items-center"><input type="checkbox" class="rounded text-custom"/><span class="ml-2 text-sm">DNS</span></label></div></div><div class="w-full mt-6"><h3 class="text-lg font-medium mb-4">端口范围</h3><div class="flex flex-wrap gap-4"><label class="flex items-center"><input type="checkbox" class="rounded text-custom"/><span class="ml-2 text-sm">1-1024</span></label><label class="flex items-center"><input type="checkbox" class="rounded text-custom"/><span class="ml-2 text-sm">1025-5000</span></label><label class="flex items-center"><input type="checkbox" class="rounded text-custom"/><span class="ml-2 text-sm">5001-10000</span></label><label class="flex items-center"><input type="checkbox" class="rounded text-custom"/><span class="ml-2 text-sm">&gt;10000</span></label></div></div><div class="w-full mt-6"><h3 class="text-lg font-medium mb-4">行为类型</h3><div class="flex flex-wrap gap-4"><label class="flex items-center"><input type="checkbox" class="rounded text-custom"/><span class="ml-2 text-sm">正常访问</span></label><label class="flex items-center"><input type="checkbox" class="rounded text-custom"/><span class="ml-2 text-sm">可疑行为</span></label><label class="flex items-center"><input type="checkbox" class="rounded text-custom"/><span class="ml-2 text-sm">已阻断</span></label></div></div></div></div>
          <div class="bg-white rounded-lg shadow-sm">
            <div class="p-6 border-b border-gray-200">
              <div class="flex justify-between items-center">
                <h3 class="text-lg font-medium">网络活动日志</h3>
                <div class="flex items-center space-x-4">
                  <select class="rounded-lg border-gray-300 text-sm">
                    <option>全部类型</option>
                    <option>服务器</option>
                    <option>数据库</option>
                    <option>Web服务</option>
                  </select>
                  <select class="rounded-lg border-gray-300 text-sm">
                    <option>全部状态</option>
                    <option>在线</option>
                    <option>离线</option>
                  </select>
                  <input type="text" placeholder="搜索源IP/目标IP" class="rounded-lg border-gray-300 text-sm w-48"/>
                  <button class="!rounded-button bg-custom text-white px-4 py-2 text-sm">
                    <i class="fas fa-search mr-2"></i>搜索
                  </button>
                </div>
              </div>
            </div>
            <div class="overflow-x-auto">
              <table class="min-w-full table-auto">
                <thead class="bg-gray-50">
                  <tr><th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">时间</th><th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">源IP</th><th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">目标IP</th><th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">协议</th><th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">端口</th><th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">行为类型</th><th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">状态</th><th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">操作</th></tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200"><tr><td class="px-6 py-4 text-sm">2024-03-18 16:42:33</td><td class="px-6 py-4 text-sm">192.168.1.100</td><td class="px-6 py-4 text-sm">192.168.1.201</td><td class="px-6 py-4 text-sm">HTTP</td><td class="px-6 py-4 text-sm">80</td><td class="px-6 py-4 text-sm">GET /api/v1/data</td><td class="px-6 py-4"><span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">正常</span></td><td class="px-6 py-4 text-sm"><button class="text-custom hover:text-custom-dark">详情</button></td></tr><tr><td class="px-6 py-4 text-sm">2024-03-18 16:41:58</td><td class="px-6 py-4 text-sm">192.168.1.150</td><td class="px-6 py-4 text-sm">192.168.1.102</td><td class="px-6 py-4 text-sm">SSH</td><td class="px-6 py-4 text-sm">22</td><td class="px-6 py-4 text-sm">连接尝试</td><td class="px-6 py-4"><span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">可疑</span></td><td class="px-6 py-4 text-sm"><button class="text-custom hover:text-custom-dark">详情</button></td></tr><tr><td class="px-6 py-4 text-sm">2024-03-18 16:40:15</td><td class="px-6 py-4 text-sm">192.168.1.101</td><td class="px-6 py-4 text-sm">192.168.1.102</td><td class="px-6 py-4 text-sm">MySQL</td><td class="px-6 py-4 text-sm">3306</td><td class="px-6 py-4 text-sm">数据库查询</td><td class="px-6 py-4"><span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">正常</span></td><td class="px-6 py-4 text-sm"><button class="text-custom hover:text-custom-dark">详情</button></td></tr></tbody>
              </table>
            </div>
            <div class="p-4 border-t border-gray-200">
              <div class="flex items-center justify-between px-4">
                <div class="text-sm text-gray-700">显示 1 到 10，共 328 条记录</div>
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
      </main>
    </div>
  
</body></html>
