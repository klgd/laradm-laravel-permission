@extends('docs.component')

@section('content')
    <style>

        .ant-layout-header,
        .ant-layout-footer {
            background: #7dbcea;
            color: #fff;
        }
        [data-theme="dark"] .ant-layout-header {
            background: #6aa0c7;
        }
        [data-theme="dark"] .ant-layout-footer {
            background: #6aa0c7;
        }
        .ant-layout-footer {
            line-height: 1.5;
        }
        .ant-layout-sider {
            background: #3ba0e9;
            color: #fff;
            line-height: 120px;
        }
        [data-theme="dark"] .ant-layout-sider {
            background: #3499ec;
        }
        .ant-layout-content {
            background: rgba(16, 142, 233, 1);
            color: #fff;
            min-height: 120px;
            line-height: 120px;
        }
        [data-theme="dark"] .ant-layout-content {
            background: #107bcb;
        }
        .code-box-demo > div > .ant-layout {
            margin-bottom: 48px;
        }
        .code-box-demo > div > .ant-layout:last-child {
            margin: 0;
        }

    </style>
    <section class="code-box-demo">
        <div>
            <x-layout>
                <x-layout.header>Header</x-layout.header>
                <x-layout.content>Content</x-layout.content>
                <x-layout.footer>Footer</x-layout.footer>
            </x-layout>

            <x-layout>
                <x-layout.header>Header</x-layout.header>
                <x-layout>
                    <x-layout.sider>Sider</x-layout.sider>
                    <x-layout.content>Content</x-layout.content>
                </x-layout>
                <x-layout.footer>Footer</x-layout.footer>
            </x-layout>

            <x-layout>
                <x-layout.header>Header</x-layout.header>
                <x-layout>
                    <x-layout.content>Content</x-layout.content>
                    <x-layout.sider>Sider</x-layout.sider>
                </x-layout>
                <x-layout.footer>Footer</x-layout.footer>
            </x-layout>

            <x-layout>
                <x-layout.sider>Sider</x-layout.sider>
                <x-layout>
                    <x-layout.header>Header</x-layout.header>
                    <x-layout.content>Content</x-layout.content>
                    <x-layout.footer>Footer</x-layout.footer>
                </x-layout>
            </x-layout>
        </div>
    </section>



@endsection
