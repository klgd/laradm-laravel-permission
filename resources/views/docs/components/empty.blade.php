@extends('docs.component')

@section('content')
    <x-antd-empty />
    <x-antd-empty image="simple" />

    <br>
    <x-antd-empty
        image="https://gw.alipayobjects.com/zos/antfincdn/ZHrcdLPrvN/empty.svg"
        imageStyle="height: 60px"
    >
    <x-slot name="description">
        <span>
        Customize <a href="#API">Description</a>
      </span>
    </x-slot>
    <x-antd-button type="primary">Create Now</x-antd-button>
    </x-antd-empty>

    <x-antd-empty
        image="https://gw.alipayobjects.com/zos/antfincdn/ZHrcdLPrvN/empty.svg"
        imageStyle="height: 60px"
    >
        <x-antd-button type="primary">Create Now</x-antd-button>
    </x-antd-empty>
@endsection
