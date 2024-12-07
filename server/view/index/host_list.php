<!DOCTYPE html>
<html lang="zh"><head>
  {include file="common/head" /}
</head>
  <body class="bg-gray-50">
    <div class="min-h-screen">
      {include file="common/nav" /}
      <main class="max-w-full mx-auto py-6 px-4">
        <div class="grid grid-cols-1 gap-4 mb-6 lg:grid-cols-4">
          <div class="bg-white p-6 rounded-lg shadow-sm">
            <div class="flex justify-between items-center mb-4">
              <h3 class="text-lg font-medium">资产总数</h3>
              <i class="fas fa-server text-custom text-xl"></i>
            </div>
            <p class="text-3xl font-semibold text-custom">328</p>
            <p class="text-sm text-gray-500 mt-2">已识别资产</p>
          </div>
          <div class="bg-white p-6 rounded-lg shadow-sm">
            <div class="flex justify-between items-center mb-4">
              <h3 class="text-lg font-medium">组件资产</h3>
              <i class="fas fa-cube text-blue-500 text-xl"></i>
            </div>
            <p class="text-3xl font-semibold text-blue-500">156</p>
            <p class="text-sm text-gray-500 mt-2">Web/数据库等</p>
          </div>
          <div class="bg-white p-6 rounded-lg shadow-sm">
            <div class="flex justify-between items-center mb-4">
              <h3 class="text-lg font-medium">开放端口</h3>
              <i class="fas fa-network-wired text-green-500 text-xl"></i>
            </div>
            <p class="text-3xl font-semibold text-green-500">892</p>
            <p class="text-sm text-gray-500 mt-2">已扫描端口</p>
          </div>
          <div class="bg-white p-6 rounded-lg shadow-sm">
            <div class="flex justify-between items-center mb-4">
              <h3 class="text-lg font-medium">漏洞风险</h3>
              <i class="fas fa-bug text-red-500 text-xl"></i>
            </div>
            <p class="text-3xl font-semibold text-red-500">47</p>
            <p class="text-sm text-gray-500 mt-2">待修复漏洞</p>
          </div>
        </div>
        <div class="grid grid-cols-1 gap-4 mb-6"><div class="bg-white rounded-lg shadow-sm p-4 mb-6"><div class="space-y-6"><div class="w-full"><h3 class="text-lg font-medium mb-4">组件筛选</h3><div class="flex flex-wrap gap-4"><label class="flex items-center"><input type="checkbox" class="rounded text-custom"/><span class="ml-2 text-sm">Apache</span></label><label class="flex items-center"><input type="checkbox" class="rounded text-custom"/><span class="ml-2 text-sm">Nginx</span></label><label class="flex items-center"><input type="checkbox" class="rounded text-custom"/><span class="ml-2 text-sm">MySQL</span></label><label class="flex items-center"><input type="checkbox" class="rounded text-custom"/><span class="ml-2 text-sm">Redis</span></label><label class="flex items-center"><input type="checkbox" class="rounded text-custom"/><span class="ml-2 text-sm">Tomcat</span></label></div></div><div class="w-full"><h3 class="text-lg font-medium mb-4">端口筛选</h3><div class="flex flex-wrap gap-4"><label class="flex items-center"><input type="checkbox" class="rounded text-custom"/><span class="ml-2 text-sm">80 (HTTP)</span></label><label class="flex items-center"><input type="checkbox" class="rounded text-custom"/><span class="ml-2 text-sm">443 (HTTPS)</span></label><label class="flex items-center"><input type="checkbox" class="rounded text-custom"/><span class="ml-2 text-sm">3306 (MySQL)</span></label><label class="flex items-center"><input type="checkbox" class="rounded text-custom"/><span class="ml-2 text-sm">6379 (Redis)</span></label><label class="flex items-center"><input type="checkbox" class="rounded text-custom"/><span class="ml-2 text-sm">22 (SSH)</span></label></div></div><div class="w-full"><h3 class="text-lg font-medium mb-4">状态</h3><div class="flex flex-wrap gap-4"><label class="flex items-center"><input type="checkbox" class="rounded text-custom"/><span class="ml-2 text-sm">在线</span></label><label class="flex items-center"><input type="checkbox" class="rounded text-custom"/><span class="ml-2 text-sm">离线</span></label></div></div></div></div>
          <div class="bg-white rounded-lg shadow-sm">
            <div class="p-6 border-b border-gray-200">
              <div class="flex justify-between items-center">
                <h3 class="text-lg font-medium">资产列表</h3>
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
                  <input type="text" placeholder="搜索IP/主机名" class="rounded-lg border-gray-300 text-sm w-48"/>
                  <button class="!rounded-button bg-custom text-white px-4 py-2 text-sm">
                    <i class="fas fa-search mr-2"></i>搜索
                  </button>
                </div>
              </div>
            </div>
            <div class="overflow-x-auto">
              <table class="min-w-full table-auto">
                <thead class="bg-gray-50">
                  <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">IP地址</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">主机名</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">操作系统</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">开放端口</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">运行服务</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">状态</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">最后扫描</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">操作</th>
                  </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                  <tr>
                    <td class="px-6 py-4 text-sm">192.168.1.100</td>
                    <td class="px-6 py-4 text-sm">web-server-01</td>
                    <td class="px-6 py-4 text-sm">CentOS 7.9</td>
                    <td class="px-6 py-4 text-sm">80,443,22</td>
                    <td class="px-6 py-4 text-sm">
                      <div class="flex space-x-2">
                        <span class="px-2 py-1 text-xs rounded-full bg-blue-100 text-blue-800">Nginx 1.20</span>
                        <span class="px-2 py-1 text-xs rounded-full bg-green-100 text-green-800">MySQL 5.7</span>
                      </div>
                    </td>
                    <td class="px-6 py-4">
                      <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">在线</span>
                    </td>
                    <td class="px-6 py-4 text-sm">2024-03-18 15:30</td>
                    <td class="px-6 py-4 text-sm">
                      <div class="flex space-x-2">
                        <button class="text-custom hover:text-custom-dark">详情</button>
                        <button class="text-gray-500 hover:text-gray-700">扫描</button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="px-6 py-4 text-sm">192.168.1.101</td>
                    <td class="px-6 py-4 text-sm">app-server-01</td>
                    <td class="px-6 py-4 text-sm">Ubuntu 20.04</td>
                    <td class="px-6 py-4 text-sm">8080,22,3306</td>
                    <td class="px-6 py-4 text-sm">
                      <div class="flex space-x-2">
                        <span class="px-2 py-1 text-xs rounded-full bg-yellow-100 text-yellow-800">Tomcat 9.0</span>
                        <span class="px-2 py-1 text-xs rounded-full bg-purple-100 text-purple-800">Redis 6.0</span>
                      </div>
                    </td>
                    <td class="px-6 py-4">
                      <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">在线</span>
                    </td>
                    <td class="px-6 py-4 text-sm">2024-03-18 15:28</td>
                    <td class="px-6 py-4 text-sm">
                      <div class="flex space-x-2">
                        <button class="text-custom hover:text-custom-dark">详情</button>
                        <button class="text-gray-500 hover:text-gray-700">扫描</button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="px-6 py-4 text-sm">192.168.1.102</td>
                    <td class="px-6 py-4 text-sm">db-server-01</td>
                    <td class="px-6 py-4 text-sm">CentOS 8.4</td>
                    <td class="px-6 py-4 text-sm">3306,22</td>
                    <td class="px-6 py-4 text-sm">
                      <div class="flex space-x-2">
                        <span class="px-2 py-1 text-xs rounded-full bg-green-100 text-green-800">MySQL 8.0</span>
                      </div>
                    </td>
                    <td class="px-6 py-4">
                      <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">离线</span>
                    </td>
                    <td class="px-6 py-4 text-sm">2024-03-18 15:25</td>
                    <td class="px-6 py-4 text-sm">
                      <div class="flex space-x-2">
                        <button class="text-custom hover:text-custom-dark">详情</button>
                        <button class="text-gray-500 hover:text-gray-700">扫描</button>
                      </div>
                    </td>
                  </tr>
                </tbody>
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
