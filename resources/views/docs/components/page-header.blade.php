@extends('docs.component')

@section('content')
    <style>
        .site-page-header {
            border: 1px solid rgb(235, 237, 240);
        }
        .site-page-header-ghost-wrapper {
            background-color: #f5f5f5;
            padding: 24px;
        }
    </style>
    <x-page-header
        class="site-page-header"
        title="Title"
        subTitle="This is a subtitle"
    />

    <br>
    <br>
    <div class="site-page-header-ghost-wrapper">
        <x-page-header
            :ghost="false"
            title="Title"
            subTitle="This is a subtitle"
        >
        <x-slot name="extra">
            <x-button key="3">Operation</x-button>,
            <x-button key="2">Operation</x-button>,
            <x-button key="1" type="primary">
                Primary
            </x-button>
        </x-slot>
        xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
        </x-page-header>
    </div>

    <br>
    <br>
    <br>
    @php
        $routes = [
            [
                'path' => 'index',
                'breadcrumbName' => 'First-level Menu',
            ],
            [
                'path' => 'first',
                'breadcrumbName' => 'Second-level Menu',
            ],
            [
                'path' => 'second',
                'breadcrumbName' => 'Third-level Menu',
            ],
        ];
    @endphp
    <x-page-header
        class="site-page-header"
        title="Title"
        subTitle="This is a subtitle"
        :breadcrumb="['routes' => $routes]"
    />

    <x-page-header
        id="aaaaa"
        class="site-page-header"
        title="Title"
        :avatar="['src' => 'https://avatars1.githubusercontent.com/u/8186664?s=460&v=4']"
        subTitle="This is a subtitle"
        :breadcrumb="['routes' => $routes]"
        back
    />
@endsection
