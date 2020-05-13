@extends('layout')


@section('content')
    <style>


        .logo {
            height: 32px;
            background: rgba(255, 255, 255, 0.2);
            margin: 16px;
        }

        .site-layout .site-layout-background {
            background: #fff;
        }
        [data-theme="dark"] .site-layout .site-layout-background {
            background: #141414;
        }


    </style>

    <section class="code-box-demo">
        <x-antd-layout style="min-height: 100vh">
            <x-antd-layout.sider collapsible collapsed collapsedWidth="40">
                <div class="logo"></div>
                ssssssssssssssssss
{{--                <ul class="ant-menu ant-menu-dark ant-menu-root ant-menu-inline" role="menu">--}}
{{--                <ul class="ant-menu ant-menu-dark ant-menu-inline-collapsed ant-menu-root ant-menu-vertical" role="menu">--}}

{{--                    <li class="ant-menu-item ant-menu-item-selected" role="menuitem" style="padding-left: 24px;"><span role="img" aria-label="pie-chart" class="anticon anticon-pie-chart"><svg viewBox="64 64 896 896" focusable="false" class="" data-icon="pie-chart" width="1em" height="1em" fill="currentColor" aria-hidden="true"><path d="M864 518H506V160c0-4.4-3.6-8-8-8h-26a398.46 398.46 0 00-282.8 117.1 398.19 398.19 0 00-85.7 127.1A397.61 397.61 0 0072 552a398.46 398.46 0 00117.1 282.8c36.7 36.7 79.5 65.6 127.1 85.7A397.61 397.61 0 00472 952a398.46 398.46 0 00282.8-117.1c36.7-36.7 65.6-79.5 85.7-127.1A397.61 397.61 0 00872 552v-26c0-4.4-3.6-8-8-8zM705.7 787.8A331.59 331.59 0 01470.4 884c-88.1-.4-170.9-34.9-233.2-97.2C174.5 724.1 140 640.7 140 552c0-88.7 34.5-172.1 97.2-234.8 54.6-54.6 124.9-87.9 200.8-95.5V586h364.3c-7.7 76.3-41.3 147-96.6 201.8zM952 462.4l-2.6-28.2c-8.5-92.1-49.4-179-115.2-244.6A399.4 399.4 0 00589 74.6L560.7 72c-4.7-.4-8.7 3.2-8.7 7.9V464c0 4.4 3.6 8 8 8l384-1c4.7 0 8.4-4 8-8.6zm-332.2-58.2V147.6a332.24 332.24 0 01166.4 89.8c45.7 45.6 77 103.6 90 166.1l-256.4.7z"></path></svg></span><span>Option 1</span></li>--}}

{{--                </ul>--}}
            </x-antd-layout.sider>
            <x-antd-layout class="site-layout">
                <x-antd-layout.header class="site-layout-background" style="padding: 0px;" />
                <x-antd-layout.content style="margin: 0 16px;">
                    <div class="site-layout-background" style="padding: 24px; min-height: 360px">
                        <section class="code-box-demo"><div><div><div class="" style="display: table;
	width: 100%;
	table-layout: fixed;
	position: -webkit-sticky;
	position: sticky;
	top: 0;"><button type="button" class="ant-btn ant-btn-primary"><span>Affix top</span></button></div></div><br><div><div class=""><button type="button" class="ant-btn ant-btn-primary"><span>Affix bottom</span></button></div></div></div></section>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                    </div>
                </x-antd-layout.content>
                <x-antd-layout.footer style="text-align: center">Ant Design ©2018 Created by Ant UED</x-antd-layout.footer>
            </x-antd-layout>
        </x-antd-layout>
    </section>





@endsection
