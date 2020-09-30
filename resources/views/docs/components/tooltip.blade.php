@extends('docs.component')

@section('content')
    <x-tooltip title="prompt text">
        <span>Tooltip will show on mouse enter.</span>
    </x-tooltip>

    <br>
    <br>
    <br>

    <x-tooltip placement="left" title="Tooltip on left">
        <x-button>Tooltip on left</x-button>
    </x-tooltip>
    <br>
    <br>
    <br>
    <x-tooltip placement="top" title="Tooltip on top">
        <x-button>Tooltip on top</x-button>
    </x-tooltip>
    <br>
    <br>
    <br>
    <x-tooltip placement="bottom" title="Tooltip on bottom">
        <x-button>Tooltip on bottom</x-button>
    </x-tooltip>
    <br>
    <br>
    <br>
    <x-tooltip placement="right" title="Tooltip on right" visible>
        <x-button>Tooltip on right</x-button>
    </x-tooltip>

    <br>
    <br>
    <br>

    <div>
        <x-tooltip placement="top" title="Prompt Text">
            <x-button>Align edge / 边缘对齐</x-button>
        </x-tooltip>
        <x-tooltip placement="top" title="Prompt Text">
            <x-button disabled>Arrow points to center / 箭头指向中心</x-button>
        </x-tooltip>
    </div>

@endsection
