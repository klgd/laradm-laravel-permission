@extends('docs.component')

@section('content')
    <x-popover class="aadd ssr" title="Title" content="this is content">
        <x-button type="primary">Hover me</x-button>
    </x-popover>
    <x-popover title="Title">
        <x-slot name="content">
            <div>
                <p>Content</p>
                <p>Content</p>
            </div>
        </x-slot>
        <x-button type="primary">Hover me</x-button>
    </x-popover>
    <br>
    <br>
    <br>

    <div>
        <x-popover data-trigger="hover">
            <x-slot name="content">
                <div>
                    <p>Content</p>
                    <p>Content</p>
                </div>
            </x-slot>
            <x-button>Hover me</x-button>
        </x-popover>
        <x-popover title="Title" data-trigger="focus">
            <x-slot name="content">
                <div>
                    <p>Content</p>
                    <p>Content</p>
                </div>
            </x-slot>
            <x-button>Focus me</x-button>
        </x-popover>
        <x-popover title="Title" data-trigger="click">
            <x-slot name="content">
                <div>
                    <p>Content</p>
                    <p>Content</p>
                </div>
            </x-slot>
            <x-button>Click me</x-button>
        </x-popover>
    </div>

@endsection
