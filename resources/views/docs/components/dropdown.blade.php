@extends('docs.component')

@section('content')
    <style>
        .site-dropdown-context-menu {
            background: #f7f7f7;
            color: #777;
        }

        #components-dropdown-demo-dropdown-button .ant-dropdown-button {
            margin: 0 8px 8px 0;
        }

        #components-dropdown-demo-dropdown-button .ant-btn-group-rtl.ant-dropdown-button {
            margin: 0 0 8px 8px;
        }

    </style>
    <x-antd-dropdown class="abc" style="font-size: small;">
        <x-slot name="overlay">
            <ul class="ant-dropdown-menu ant-dropdown-menu-light ant-dropdown-menu-root ant-dropdown-menu-vertical" direction="ltr" role="menu" tabindex="0"><li class="ant-dropdown-menu-item ant-dropdown-menu-item-only-child" role="menuitem"><a href="http://www.alipay.com/">1st menu item</a></li><li class="ant-dropdown-menu-item ant-dropdown-menu-item-only-child" role="menuitem"><a href="http://www.taobao.com/">2nd menu item</a></li><li class=" ant-dropdown-menu-item-divider"></li><li class="ant-dropdown-menu-item ant-dropdown-menu-item-only-child" role="menuitem">3rd menu item</li></ul>
        </x-slot>
        <a class="ant-dropdown-link" style="color: red; color: blue">
        Hover me
        </a>
    </x-antd-dropdown>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <x-antd-dropdown trigger="click" placement="top">
        <x-slot name="overlay">
            <ul class="ant-dropdown-menu ant-dropdown-menu-light ant-dropdown-menu-root ant-dropdown-menu-vertical" direction="ltr" role="menu" tabindex="0"><li class="ant-dropdown-menu-item ant-dropdown-menu-item-only-child" role="menuitem"><a href="http://www.alipay.com/">1st menu item</a></li><li class="ant-dropdown-menu-item ant-dropdown-menu-item-only-child" role="menuitem"><a href="http://www.taobao.com/">2nd menu item</a></li><li class=" ant-dropdown-menu-item-divider"></li><li class="ant-dropdown-menu-item ant-dropdown-menu-item-only-child" role="menuitem">3rd menu item</li></ul>
        </x-slot>
        <a class="ant-dropdown-link">
        Click me
        </a>
    </x-antd-dropdown>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <x-antd-dropdown trigger="click" placement="top" disabled>
        <x-slot name="overlay">
            <ul class="ant-dropdown-menu ant-dropdown-menu-light ant-dropdown-menu-root ant-dropdown-menu-vertical" direction="ltr" role="menu" tabindex="0"><li class="ant-dropdown-menu-item ant-dropdown-menu-item-only-child" role="menuitem"><a href="http://www.alipay.com/">1st menu item</a></li><li class="ant-dropdown-menu-item ant-dropdown-menu-item-only-child" role="menuitem"><a href="http://www.taobao.com/">2nd menu item</a></li><li class=" ant-dropdown-menu-item-divider"></li><li class="ant-dropdown-menu-item ant-dropdown-menu-item-only-child" role="menuitem">3rd menu item</li></ul>
        </x-slot>
        <a class="ant-dropdown-link">
            Click me
        </a>
    </x-antd-dropdown>

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

    <div id="components-dropdown-demo-dropdown-button">
        <x-antd-dropdown.button trigger="click" class="testss" style="font-size: small">

            <x-slot name="overlay">
                <ul class="ant-dropdown-menu ant-dropdown-menu-light ant-dropdown-menu-root ant-dropdown-menu-vertical" direction="ltr" role="menu" tabindex="0"><li class="ant-dropdown-menu-item ant-dropdown-menu-item-only-child" role="menuitem"><a href="http://www.alipay.com/">1st menu item</a></li><li class="ant-dropdown-menu-item ant-dropdown-menu-item-only-child" role="menuitem"><a href="http://www.taobao.com/">2nd menu item</a></li><li class=" ant-dropdown-menu-item-divider"></li><li class="ant-dropdown-menu-item ant-dropdown-menu-item-only-child" role="menuitem">3rd menu item</li></ul>
            </x-slot>
            Dropdown
        </x-antd-dropdown.button>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <x-antd-dropdown.button icon="user">
            <x-slot name="overlay">
                <ul class="ant-dropdown-menu ant-dropdown-menu-light ant-dropdown-menu-root ant-dropdown-menu-vertical" direction="ltr" role="menu" tabindex="0"><li class="ant-dropdown-menu-item ant-dropdown-menu-item-only-child" role="menuitem"><a href="http://www.alipay.com/">1st menu item</a></li><li class="ant-dropdown-menu-item ant-dropdown-menu-item-only-child" role="menuitem"><a href="http://www.taobao.com/">2nd menu item</a></li><li class=" ant-dropdown-menu-item-divider"></li><li class="ant-dropdown-menu-item ant-dropdown-menu-item-only-child" role="menuitem">3rd menu item</li></ul>
            </x-slot>
        Dropdown
        </x-antd-dropdown.button>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <x-antd-dropdown.button disabled>
            <x-slot name="overlay">
                <ul class="ant-dropdown-menu ant-dropdown-menu-light ant-dropdown-menu-root ant-dropdown-menu-vertical" direction="ltr" role="menu" tabindex="0"><li class="ant-dropdown-menu-item ant-dropdown-menu-item-only-child" role="menuitem"><a href="http://www.alipay.com/">1st menu item</a></li><li class="ant-dropdown-menu-item ant-dropdown-menu-item-only-child" role="menuitem"><a href="http://www.taobao.com/">2nd menu item</a></li><li class=" ant-dropdown-menu-item-divider"></li><li class="ant-dropdown-menu-item ant-dropdown-menu-item-only-child" role="menuitem">3rd menu item</li></ul>
            </x-slot>
            Dropdown
        </x-antd-dropdown.button>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <x-antd-dropdown.button>
            <x-slot name="overlay">
                <ul class="ant-dropdown-menu ant-dropdown-menu-light ant-dropdown-menu-root ant-dropdown-menu-vertical" direction="ltr" role="menu" tabindex="0"><li class="ant-dropdown-menu-item ant-dropdown-menu-item-only-child" role="menuitem"><a href="http://www.alipay.com/">1st menu item</a></li><li class="ant-dropdown-menu-item ant-dropdown-menu-item-only-child" role="menuitem"><a href="http://www.taobao.com/">2nd menu item</a></li><li class=" ant-dropdown-menu-item-divider"></li><li class="ant-dropdown-menu-item ant-dropdown-menu-item-only-child" role="menuitem">3rd menu item</li></ul>
            </x-slot>
                    With Tooltip
        </x-antd-dropdown.button>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <x-antd-dropdown>
            <x-slot name="overlay">
                x-antd-dropdown.button menu button
            </x-slot>
            <x-antd-button>
                Button <x-antd-icon name="down" />
            </x-antd-button>
        </x-antd-dropdown>
    </div>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
@endsection
