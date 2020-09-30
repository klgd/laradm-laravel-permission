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

    <x-space direction="vertical">
        Space
        <x-button type="primary">Button</x-button>
        <x-button>
            Click to Upload
        </x-button>
        <x-button>Confirm</x-button>
    </x-space>


    <br>
    <br>
    <br>
    <br>

    <x-space size="9">
        <x-button type="primary">Primary</x-button>
        <x-button>Default</x-button>
        <x-button type="dashed">Dashed</x-button>
        <x-button type="link">Link</x-button>
    </x-space>

    <x-space></x-space>

    <br>
    <br>
    <br>
    <br>
    <br>

    <div class="space-align-container">
        <div class="space-align-block">
            <x-space align="center">
                center
                <x-button type="primary">Primary</x-button>
                <span class="mock-block">Block</span>
            </x-space>
        </div>
        <div class="space-align-block">
            <x-space align="start">
                start
                <x-button type="primary">Primary</x-button>
                <span class="mock-block">Block</span>
            </x-space>
        </div>
        <div class="space-align-block">
            <x-space align="end">
                end
                <x-button type="primary">Primary</x-button>
                <span class="mock-block">Block</span>
            </x-space>
        </div>
        <div class="space-align-block">
            <x-space align="baseline">
                baseline
                <x-button type="primary">Primary</x-button>
                <span class="mock-block">Block</span>
            </x-space>
        </div>
    </div>

@endsection
