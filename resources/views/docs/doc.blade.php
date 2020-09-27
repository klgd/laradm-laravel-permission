@extends('docs.layout')
@section('menu')
    <ul class="ant-menu aside-container menu-site ant-menu-light ant-menu-root ant-menu-inline" direction="ltr"
        role="menu">
        <li class="ant-menu-item ant-menu-item-only-child ant-menu-item-selected" role="menuitem"
            style="padding-left: 30px;">
            <a href="/docs/react/introduce-cn">Ant Design of React</a>
        </li>
        <li class="ant-menu-item ant-menu-item-only-child" role="menuitem" style="padding-left: 30px;">
            <a href="/docs/react/getting-started-cn">快速上手</a>
        </li>
    </ul>
@endsection

@section('main')
    <section class="main-container">
        @yield('content')
    </section>
@endsection
