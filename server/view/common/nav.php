<nav class="bg-white shadow-sm">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex justify-between h-16">
            <div class="flex items-center">
                <div class="font-[&#39;Pacifico&#39;] text-2xl text-custom">Qing</div>
                <div class="ml-10 flex items-baseline space-x-4">
                    <a href="{:URL('index')}"
                       class="text-gray-500 hover:text-custom px-3 py-2 text-sm font-medium">概览</a>
                    <a href="{:URL('alert_list')}"
                       class="text-gray-500 hover:text-custom px-3 py-2 text-sm font-medium">告警管理</a>
                    <a href="{:URL('host_list')}"
                       class="text-gray-500 hover:text-custom px-3 py-2 text-sm font-medium">资产管理</a>
                    <a href="{:URL('logaudit_list')}"
                       class="text-gray-500 hover:text-custom px-3 py-2 text-sm font-medium">日志审计</a>
                    <a href="{:URL('system_setting')}"
                       class="text-gray-500 hover:text-custom px-3 py-2 text-sm font-medium">系统配置</a>

                </div>
            </div>
            <div class="flex items-center">
                <button class="!rounded-button bg-custom text-white px-4 py-2 text-sm">
                    <i class="fas fa-bell mr-2"></i>
                    <span class="bg-red-500 text-white text-xs px-1.5 py-0.5 rounded-full">3</span>
                </button>
                <div class="ml-4 flex items-center">
                    <img class="h-8 w-8 rounded-full"
                         src="/static/images/logo.jpg"
                         alt="用户头像"/>
                    <span class="ml-2 text-sm text-gray-700">Daxia</span>
                </div>
            </div>
        </div>
    </div>
</nav>