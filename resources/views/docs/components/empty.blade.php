@extends('docs.component')

@section('content')
    <x-empty />
    <x-empty image="simple" />

    <br>
    <x-empty
        image="https://gw.alipayobjects.com/zos/antfincdn/ZHrcdLPrvN/empty.svg"
        imageStyle="height: 60px"
    >
    <x-slot name="description">
        <span>
        Customize <a href="#API">Description</a>
      </span>
    </x-slot>
    <x-button type="primary">Create Now</x-button>
    </x-empty>

    <x-empty
        image="https://gw.alipayobjects.com/zos/antfincdn/ZHrcdLPrvN/empty.svg"
        imageStyle="height: 60px"
    >
        <x-button type="primary">Create Now</x-button>
    </x-empty>
@endsection
