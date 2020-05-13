@extends('layout')

@section('content')

    <div>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nonne merninisti licere mihi ista
            probare, quae sunt a te dicta? Refert tamen, quo modo.
        </p>
        <x-antd-divider dashed>Text</x-antd-divider>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nonne merninisti licere mihi ista
            probare, quae sunt a te dicta? Refert tamen, quo modo.
        </p>
        <x-antd-divider orientation="left">Left Text</x-antd-divider>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nonne merninisti licere mihi ista
            probare, quae sunt a te dicta? Refert tamen, quo modo.
        </p>
        <x-antd-divider orientation="right">Right Text</x-antd-divider>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nonne merninisti licere mihi ista
            probare, quae sunt a te dicta? Refert tamen, quo modo.
        </p>
    </div>

    <div>
        Text
        <x-antd-divider type="vertical" />
        <a href="#">Link</a>
        <x-antd-divider type="vertical" />
        <a href="#">Link</a>
    </div>

    <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nonne merninisti licere mihi ista
        probare, quae sunt a te dicta? Refert tamen, quo modo.
    </p>
    <x-antd-divider plain>Text</x-antd-divider>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nonne merninisti licere mihi ista
        probare, quae sunt a te dicta? Refert tamen, quo modo.
    </p>
    <x-antd-divider orientation="left" plain>
        Left Text
    </x-antd-divider>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nonne merninisti licere mihi ista
        probare, quae sunt a te dicta? Refert tamen, quo modo.
    </p>
    <x-antd-divider orientation="right" plain>
        Right Text
    </x-antd-divider>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nonne merninisti licere mihi ista
        probare, quae sunt a te dicta? Refert tamen, quo modo.
    </p>
@endsection
