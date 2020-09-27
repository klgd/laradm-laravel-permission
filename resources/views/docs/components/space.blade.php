@extends('docs.component')

@section('content')
    <style>
        .space-align-container {
            display: flex;
            align-item: flex-start;
            flex-wrap: wrap;
        }
        .space-align-block {
            margin: 8px 4px;
            border: 1px solid #40a9ff;
            padding: 4px;
            flex: none;
        }
        .space-align-block .mock-block {
            display: inline-block;
            padding: 32px 8px 16px;
            background: rgba(150, 150, 150, 0.2);
        }
    </style>

    <x-antd-space direction="vertical">
        Space
        <x-antd-button type="primary">Button</x-antd-button>
        <x-antd-button>
            Click to Upload
        </x-antd-button>
        <x-antd-button>Confirm</x-antd-button>
    </x-antd-space>


    <br>
    <br>
    <br>
    <br>

    <x-antd-space size="9">
        <x-antd-button type="primary">Primary</x-antd-button>
        <x-antd-button>Default</x-antd-button>
        <x-antd-button type="dashed">Dashed</x-antd-button>
        <x-antd-button type="link">Link</x-antd-button>
    </x-antd-space>

    <x-antd-space></x-antd-space>

    <br>
    <br>
    <br>
    <br>
    <br>

    <div class="space-align-container">
        <div class="space-align-block">
            <x-antd-space align="center">
                center
                <x-antd-button type="primary">Primary</x-antd-button>
                <span class="mock-block">Block</span>
            </x-antd-space>
        </div>
        <div class="space-align-block">
            <x-antd-space align="start">
                start
                <x-antd-button type="primary">Primary</x-antd-button>
                <span class="mock-block">Block</span>
            </x-antd-space>
        </div>
        <div class="space-align-block">
            <x-antd-space align="end">
                end
                <x-antd-button type="primary">Primary</x-antd-button>
                <span class="mock-block">Block</span>
            </x-antd-space>
        </div>
        <div class="space-align-block">
            <x-antd-space align="baseline">
                baseline
                <x-antd-button type="primary">Primary</x-antd-button>
                <span class="mock-block">Block</span>
            </x-antd-space>
        </div>
    </div>

@endsection
