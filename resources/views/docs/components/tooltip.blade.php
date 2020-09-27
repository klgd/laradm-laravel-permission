@extends('docs.component')

@section('content')
    <x-antd-tooltip title="prompt text">
        <span>Tooltip will show on mouse enter.</span>
    </x-antd-tooltip>

    <br>
    <br>
    <br>

    <x-antd-tooltip placement="left" title="Tooltip on left">
        <x-antd-button>Tooltip on left</x-antd-button>
    </x-antd-tooltip>
    <br>
    <br>
    <br>
    <x-antd-tooltip placement="top" title="Tooltip on top">
        <x-antd-button>Tooltip on top</x-antd-button>
    </x-antd-tooltip>
    <br>
    <br>
    <br>
    <x-antd-tooltip placement="bottom" title="Tooltip on bottom">
        <x-antd-button>Tooltip on bottom</x-antd-button>
    </x-antd-tooltip>
    <br>
    <br>
    <br>
    <x-antd-tooltip placement="right" title="Tooltip on right" visible>
        <x-antd-button>Tooltip on right</x-antd-button>
    </x-antd-tooltip>

    <br>
    <br>
    <br>

    <div>
        <x-antd-tooltip placement="top" title="Prompt Text">
            <x-antd-button>Align edge / 边缘对齐</x-antd-button>
        </x-antd-tooltip>
        <x-antd-tooltip placement="top" title="Prompt Text">
            <x-antd-button disabled>Arrow points to center / 箭头指向中心</x-antd-button>
        </x-antd-tooltip>
    </div>

@endsection
