@extends('docs.component')

@section('content')
    <x-antd-popover class="aadd ssr" title="Title" content="this is content">
        <x-antd-button type="primary">Hover me</x-antd-button>
    </x-antd-popover>
    <x-antd-popover title="Title">
        <x-slot name="content">
            <div>
                <p>Content</p>
                <p>Content</p>
            </div>
        </x-slot>
        <x-antd-button type="primary">Hover me</x-antd-button>
    </x-antd-popover>
    <br>
    <br>
    <br>

    <div>
        <x-antd-popover data-trigger="hover">
            <x-slot name="content">
                <div>
                    <p>Content</p>
                    <p>Content</p>
                </div>
            </x-slot>
            <x-antd-button>Hover me</x-antd-button>
        </x-antd-popover>
        <x-antd-popover title="Title" data-trigger="focus">
            <x-slot name="content">
                <div>
                    <p>Content</p>
                    <p>Content</p>
                </div>
            </x-slot>
            <x-antd-button>Focus me</x-antd-button>
        </x-antd-popover>
        <x-antd-popover title="Title" data-trigger="click">
            <x-slot name="content">
                <div>
                    <p>Content</p>
                    <p>Content</p>
                </div>
            </x-slot>
            <x-antd-button>Click me</x-antd-button>
        </x-antd-popover>
    </div>

@endsection
