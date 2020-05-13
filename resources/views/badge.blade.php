@extends('layout')

@section('content')
    <style>
        .ant-badge:not(.ant-badge-not-a-wrapper) {
            margin-right: 20px;
        }
        .ant-badge.ant-badge-rtl:not(.ant-badge-not-a-wrapper) {
            margin-right: 0;
            margin-left: 20px;
        }
        .head-example {
            width: 42px;
            height: 42px;
            border-radius: 2px;
            background: #eee;
            display: inline-block;
            vertical-align: middle;
        }
        [data-theme="dark"] .head-example {
            background: rgba(255,255,255,.12);
        }

        .site-badge-count-4 .ant-badge-count {
            background-color: #fff;
            color: #999;
            box-shadow: 0 0 0 1px #d9d9d9 inset;
        }
    </style>
    <div>
        <x-antd-badge offset="4" count="5">
            <a href="#" class="head-example"></a>
        </x-antd-badge>
        <x-antd-badge count="0" showZero>
            <a href="#" class="head-example"></a>
        </x-antd-badge>
        <x-antd-badge count="clock-circle">
            <a href="#" class="head-example"></a>
        </x-antd-badge>
    </div>

    <br>
    <br>
    <br>
    <br>

    <div>
        <x-antd-badge count="25" />
        <x-antd-badge count="4" class="site-badge-count-4" />
        <x-antd-badge class="site-badge-count-109" count="109" style="background-color: #52c41a" />
    </div>

    <br>
    <br>
    <br>
    <br>

    <div>
        <x-antd-badge count="99">
            <a href="#" class="head-example"></a>
        </x-antd-badge>
        <x-antd-badge count="100">
            <a href="#" class="head-example"></a>
        </x-antd-badge>
        <x-antd-badge count="99" overflowCount="10">
            <a href="#" class="head-example"></a>
        </x-antd-badge>
        <x-antd-badge count="1000" overflowCount="999">
            <a href="#" class="head-example"></a>
        </x-antd-badge>
    </div>

    <br>
    <br>
    <br>
    <div>
        <x-antd-badge dot>
            <x-antd-icon name="notification" />
        </x-antd-badge>
        <x-antd-badge count="0" dot>
            <x-antd-icon name="notification" />
        </x-antd-badge>
        <x-antd-badge dot>
            <a href="#">Link something</a>
        </x-antd-badge>
    </div>

    <br>
    <br>
    <br>
    <a href="#">
        <x-antd-badge count="5">
            <span class="head-example"></span>
        </x-antd-badge>
    </a>
    <br>
    <br>
    <br>
    <div>
        <x-antd-badge status="success" />
        <x-antd-badge status="error" />
        <x-antd-badge status="default" />
        <x-antd-badge status="processing" />
        <x-antd-badge status="warning" />
        <br>
        <x-antd-badge status="success" text="Success" />
        <br />
        <x-antd-badge status="error" text="Error" />
        <br />
        <x-antd-badge status="default" text="Default" />
        <br />
        <x-antd-badge status="processing" text="Processing" />
        <br />
        <x-antd-badge status="warning" text="Warning" style="color: #000" />
    </div>
    <br>
    <br>
    <br>



    @php
    $colors = [
        'pink',
        'red',
        'yellow',
        'orange',
        'cyan',
        'green',
        'blue',
        'purple',
        'geekblue',
        'magenta',
        'volcano',
        'gold',
        'lime',
        ];
    @endphp

    <div>
        <h4 style="margin-bottom: 16px">Presets:</h4>
        <div>
            @foreach ($colors as $color)
                <div>
                    <x-antd-badge :color="$color" :text="$color" />
                </div>
            @endforeach
        </div>
        <h4 style="margin: 16px 0">Custom:</h4>
        <div>
            <x-antd-badge color="#f50" text="#f50" />
            <br />
            <x-antd-badge color="#2db7f5" text="#2db7f5" />
            <br />
            <x-antd-badge color="#87d068" text="#87d068" />
            <br />
            <x-antd-badge color="#108ee9" text="#108ee9" />
        </div>
    </div>
    <br>
    <br>
    <br>
@endsection
