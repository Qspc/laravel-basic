<div class="md:mt-12 md:w-48 md:fixed md:left-0 md:top-0 content-center md:content-start text-left justify-between">
    <ul class="list-reset flex flex-row md:flex-col py-0 md:py-3 px-1 md:px-2 text-center md:text-left">
        <li class="mr-3 flex-1">
            <a href="/dashboard" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2  {{ Request::is('dashboard') ? 'border-blue-600' : 'hover:border-red-500' }}">
                <i class="fas fa-chart-area pr-0 md:pr-3 {{ Request::is('dashboard') ? 'text-blue-600' : '' }} "></i><span class="pb-1 md:pb-0 text-xs md:text-base text-white md:text-white block md:inline-block">Dashboard</span>
            </a>
        </li>
        <li class="mr-3 flex-1">
            <a href="/dashboard/posts" class="block py-1 md:py-3 pl-0 md:pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 {{ Request::is('dashboard/posts') ? 'border-blue-600' : 'hover:border-red-500' }}">
                <i class="fa fa-wallet pr-0 md:pr-3 {{ Request::is('dashboard/posts') ? 'text-blue-600' : '' }}"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block">My Post</span>
            </a>
        </li>
    </ul>

    @can('admin')
    {{-- administrator --}}
    <ul class="list-reset flex flex-row md:flex-col py-0 md:py-3 px-1 md:px-2 text-center md:text-left">
        <li class="mr-3 flex-1">
            <a href="/dashboard/categories" class="block py-1 md:py-3 pl-0 md:pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 {{ Request::is('dashboard/categories*') ? 'border-blue-600' : 'hover:border-red-500' }}">
                <i class="fas fa-stream pr-0 md:pr-3 {{ Request::is('dashboard/categories*') ? 'text-blue-600' : '' }}"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block">Post Categories</span>
            </a>
        </li>
    </ul>
    @endcan
    
</div>