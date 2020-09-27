@extends('docs.component')

@section('content')

    <x-antd-breadcrumb>
        <x-antd-breadcrumb.item href="">
            <x-antd-icon name="home" />
        </x-antd-breadcrumb.item>
        <x-antd-breadcrumb.item href="">
            <x-antd-icon name="user" />
            <span>Application List</span>
        </x-antd-breadcrumb.item>
        <x-antd-breadcrumb.item>
            <x-slot name="overlay">
                aaaaaaaaaa
            </x-slot>
            Application
        </x-antd-breadcrumb.item>
    </x-antd-breadcrumb>


    <x-antd-breadcrumb separator="">
        <x-antd-breadcrumb.item>Location</x-antd-breadcrumb.item>
        <x-antd-breadcrumb.separator>:</x-antd-breadcrumb.separator>
        <x-antd-breadcrumb.item href="">Application Center</x-antd-breadcrumb.item>
        <x-antd-breadcrumb.separator />
        <x-antd-breadcrumb.item href="">Application List</x-antd-breadcrumb.item>
        <x-antd-breadcrumb.separator />
        <x-antd-breadcrumb.item>An Application</x-antd-breadcrumb.item>
    </x-antd-breadcrumb>

    @php
    $routes = [
        [
            'path' => '/url/aa',
            'breadcrumbName' => 'AA',
        ],
        [
            'path' => '/url/bb',
            'breadcrumbName' => 'BB币比',
        ],
    ];
    @endphp
    <x-antd-breadcrumb :routes="$routes">
        <x-antd-breadcrumb.item>Location</x-antd-breadcrumb.item>
        <x-antd-breadcrumb.separator>:</x-antd-breadcrumb.separator>
        <x-antd-breadcrumb.item href="">Application Center</x-antd-breadcrumb.item>
        <x-antd-breadcrumb.separator />
        <x-antd-breadcrumb.item href="">Application List</x-antd-breadcrumb.item>
        <x-antd-breadcrumb.separator />
        <x-antd-breadcrumb.item>An Application</x-antd-breadcrumb.item>
    </x-antd-breadcrumb>
@endsection
