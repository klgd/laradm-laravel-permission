@extends('docs.component')

@section('content')

    <x-breadcrumb>
        <x-breadcrumb.item href="">
            <x-icon name="home" />
        </x-breadcrumb.item>
        <x-breadcrumb.item href="">
            <x-icon name="user" />
            <span>Application List</span>
        </x-breadcrumb.item>
        <x-breadcrumb.item>
            <x-slot name="overlay">
                aaaaaaaaaa
            </x-slot>
            Application
        </x-breadcrumb.item>
    </x-breadcrumb>


    <x-breadcrumb separator="">
        <x-breadcrumb.item>Location</x-breadcrumb.item>
        <x-breadcrumb.separator>:</x-breadcrumb.separator>
        <x-breadcrumb.item href="">Application Center</x-breadcrumb.item>
        <x-breadcrumb.separator />
        <x-breadcrumb.item href="">Application List</x-breadcrumb.item>
        <x-breadcrumb.separator />
        <x-breadcrumb.item>An Application</x-breadcrumb.item>
    </x-breadcrumb>

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
    <x-breadcrumb :routes="$routes">
        <x-breadcrumb.item>Location</x-breadcrumb.item>
        <x-breadcrumb.separator>:</x-breadcrumb.separator>
        <x-breadcrumb.item href="">Application Center</x-breadcrumb.item>
        <x-breadcrumb.separator />
        <x-breadcrumb.item href="">Application List</x-breadcrumb.item>
        <x-breadcrumb.separator />
        <x-breadcrumb.item>An Application</x-breadcrumb.item>
    </x-breadcrumb>
@endsection
