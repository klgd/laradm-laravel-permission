<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <script src="{{ asset('antd-blade/antd-blade.js') }}"></script>

    <!-- Styles -->
    <link href="{{ asset('antd-blade/antd-blade.css') }}" rel="stylesheet">

    <link href="{{ asset('css/docs.css') }}" rel="stylesheet">

</head>
<body>
<div id="react-content">
    <header id="header" class="clearfix">
        <x-antd-row style="flex-flow: nowrap; height: 64px;">
            <x-antd-col xxl="4" xl="5" lg="6" md="6" sm="24" xs="24">
                <h1>
                    <a id="logo" href="/index-cn">
                        <img alt="logo" src="https://gw.alipayobjects.com/zos/rmsportal/KDpgvguMpGfqaHPjicRK.svg">
                        Ant Design
                    </a>
                </h1>
            </x-antd-col>
            <x-antd-col xxl="20" xl="19" lg="18" md="18" sm="0" xs="0" class="menu-row">
                <div id="search-box" class="">
{{--                    <x-antd-icon name="search" />--}}

{{--                    <span--}}
{{--                        class="algolia-autocomplete" style="position: relative; display: inline-block; direction: ltr;">--}}
{{--                        <input--}}
{{--                            placeholder="在 ant.design 中搜索" type="text" class="ant-input ds-input" value=""--}}
{{--                            autocomplete="off" spellcheck="false" role="combobox" aria-autocomplete="list"--}}
{{--                            aria-expanded="false" aria-label="search input" aria-owns="algolia-autocomplete-listbox-0"--}}
{{--                            dir="auto" style="position: relative; vertical-align: top;"><pre aria-hidden="true"--}}
{{--                                                                                             style="position: absolute; visibility: hidden; white-space: pre; font-family: -apple-system, BlinkMacSystemFont, &quot;segoe ui&quot;, Roboto, &quot;helvetica neue&quot;, Arial, &quot;noto sans&quot;, sans-serif, &quot;apple color emoji&quot;, &quot;segoe ui emoji&quot;, &quot;segoe ui symbol&quot;, &quot;noto color emoji&quot;; font-size: 14px; font-style: normal; font-variant: tabular-nums; font-weight: 400; word-spacing: 0px; letter-spacing: normal; text-indent: 0px; text-rendering: auto; text-transform: none;"></pre>--}}
{{--                        <span--}}
{{--                            class="ds-dropdown-menu" role="listbox" id="algolia-autocomplete-listbox-0"--}}
{{--                            style="position: absolute; top: 100%; z-index: 100; display: none; left: 0px; right: auto;"><div--}}
{{--                                class="ds-dataset-1"></div></span>--}}
{{--                    </span>--}}
                </div>

                <ul class="ant-menu menu-site ant-menu-light ant-menu-root ant-menu-horizontal" id="nav" direction="ltr"
                    role="menu">

                    <li class="ant-menu-item ant-menu-item-only-child ant-menu-item-selected" role="menuitem"><a
                            href="/introduce">文档</a></li>

                    <li class="ant-menu-item ant-menu-item-only-child " role="menuitem"><a
                            href="/components/button-cn">组件</a></li>

                </ul>

                <button type="button" class="ant-btn header-button header-lang-button ant-btn-sm">English</button>
                <button type="button" class="ant-btn header-button header-direction-button ant-btn-sm"><span>RTL</span>
                </button>



            </x-antd-col>
        </x-antd-row>

    </header>
    <div class="main-wrapper">
        <x-antd-row>
            <x-antd-col xxl="4" xl="5" lg="6" md="6" sm="24" xs="24" class="main-menu">
            <x-antd-affix>
                <section class="main-menu-inner">
                    @yield('menu')
                </section>
            </x-antd-affix>
            </x-antd-col>
            <x-antd-col xxl="20" xl="19" lg="18" md="18" sm="24" xs="24">
                @yield('main')
            </x-antd-col>

        </x-antd-row>
    </div>
</div>


</body>
</html>
