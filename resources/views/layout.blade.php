<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <!-- Scripts -->
    <script src="{{ asset('antd-blade/antd-blade.js') }}"></script>

    <!-- Styles -->
    <link href="{{ asset('antd-blade/antd-blade.css') }}" rel="stylesheet">
    <!-- Styles -->
    <style>
        .site-button-ghost-wrapper {
            background: rgb(190, 200, 200);
            padding: 26px 16px 16px;
        }
    </style>
</head>
<body>

<x-antd-affix>
    <ul class="ant-menu ant-menu-light ant-menu-root ant-menu-horizontal" direction="ltr" role="menu">

        @foreach (['', 'button', 'icon', 'typography',
 'grid', 'space', 'lay1', 'lay2', 'affix', 'breadcrumb', 'pagination', 'divider',
 'dropdown', 'page-header', 'avatar', 'badge'
 ] as $path)
            <li class="ant-menu-item" role="menuitem">
                <a href="/{{ $path }}">{{ $path ?: '首页' }}</a>
            </li>
        @endforeach
    </ul>
</x-antd-affix>
<br>
<br>
<br>

@yield('content')
</body>
</html>
