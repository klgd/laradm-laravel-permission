@extends('docs.component')

@section('content')
    <x-antd-steps current="1">
        <x-antd-steps.step title="Finished" description="This is a description." class="aass" />
        <x-antd-steps.step title="In Progress" subTitle="Left 00:00:08" description="This is a description." />
        <x-antd-steps.step title="Waiting" description="This is a description." />
{{--            <x-slot name="title">--}}
{{--                <div>col-6</div>--}}
{{--            </x-slot>--}}
{{--        </x-antd-steps.step>--}}
    </x-antd-steps>

    <br>
    <br>
    <br>


    <x-antd-steps size="small" current="1">
        <x-antd-steps.step title="Finished" />
        <x-antd-steps.step title="In Progress" />
        <x-antd-steps.step title="Waiting" />
    </x-antd-steps>

    <br>
    <br>
    <br>

    <x-antd-steps>
        <x-antd-steps.step status="finish" title="Login" icon="user" />
        <x-antd-steps.step status="finish" title="Verification" icon="solution" />
        <x-antd-steps.step status="process" title="Pay" icon="loading" />
        <x-antd-steps.step status="wait" title="Done" icon="smile" />
    </x-antd-steps>

    <br>
    <br>
    <br>

    <x-antd-steps direction="vertical" current="1">
        <x-antd-steps.step title="Finished" description="This is a description." />
        <x-antd-steps.step title="In Progress" description="This is a description." />
        <x-antd-steps.step title="Waiting" description="This is a description." />
    </x-antd-steps>

    <br>
    <br>
    <br>

    <x-antd-steps direction="vertical" size="small" current="1">
        <x-antd-steps.step title="Finished" description="This is a description." />
        <x-antd-steps.step title="In Progress" description="This is a description." />
        <x-antd-steps.step title="Waiting" description="This is a description." />
    </x-antd-steps>

    <br>
    <br>
    <br>

    <x-antd-steps current="1" status="error">
        <x-antd-steps.step title="Finished" description="This is a description" />
        <x-antd-steps.step title="In Process" description="This is a description" />
        <x-antd-steps.step title="Waiting" description="This is a description" />
    </x-antd-steps>

    <br>
    <br>
    <br>

    <div>
        <x-antd-steps progressDot current="1">
            <x-antd-steps.step title="Finished" description="This is a description." />
            <x-antd-steps.step title="In Progress" description="This is a description." />
            <x-antd-steps.step title="Waiting" description="This is a description." />
        </x-antd-steps>
        <Divider />
        <x-antd-steps progressDot current="1" direction="vertical">
            <x-antd-steps.step title="Finished" description="This is a description. This is a description." />
            <x-antd-steps.step title="Finished" description="This is a description. This is a description." />
            <x-antd-steps.step title="In Progress" description="This is a description. This is a description." />
            <x-antd-steps.step title="Waiting" description="This is a description." />
            <x-antd-steps.step title="Waiting" description="This is a description." />
        </x-antd-steps>
    </div>

    <br>
    <br>
    <br>

    <x-antd-steps current="1">
        <x-slot name="progressDot">
            @verbatim
            <x-antd-popover title="Title" data-trigger="hover">
                <x-slot name="content">
                    <span>
                        step {{ $index }} status: {{ $status }}
                    </span>
                </x-slot>
                {{ $dot }}
            </x-antd-popover>
            @endverbatim
        </x-slot>
        <x-antd-steps.step title="Finished" description="You can hover on the dot." />
        <x-antd-steps.step title="In Progress" description="You can hover on the dot." />
        <x-antd-steps.step title="Waiting" description="You can hover on the dot." />
        <x-antd-steps.step title="Waiting" description="You can hover on the dot." />
    </x-antd-steps>

    <br>
    <br>
    <br>

    <style>
        [data-theme='compact'] .site-navigation-steps,
        .site-navigation-steps {
            margin-bottom: 60px;
            box-shadow: 0px -1px 0 0 #e8e8e8 inset;
        }
    </style>

    <div>
        <x-antd-steps
            type="navigation"
            size="small"
            current="1"
            class="site-navigation-steps"
        >
            <x-antd-steps.step
                title="Step 1"
                subTitle="00:00:05"
                status="finish"
                description="This is a description."
            />
            <x-antd-steps.step
                title="Step 2"
                subTitle="00:01:02"
                status="process"
                description="This is a description."
            />
            <x-antd-steps.step
                title="Step 3"
                subTitle="waiting for longlong time"
                status="wait"
                description="This is a description."
            />
        </x-antd-steps>
        <x-antd-steps
            type="navigation"
            current="1"
            class="site-navigation-steps"
        >
            <x-antd-steps.step status="finish" title="Step 1" />
            <x-antd-steps.step status="process" title="Step 2" />
            <x-antd-steps.step status="wait" title="Step 3" />
            <x-antd-steps.step status="wait" title="Step 4" />
        </x-antd-steps>
        <x-antd-steps
            type="navigation"
            size="small"
            current="1"
            class="site-navigation-steps"
        >
            <x-antd-steps.step status="finish" title="finish 1" />
            <x-antd-steps.step status="finish" title="finish 2" />
            <x-antd-steps.step status="process" title="current process" />
            <x-antd-steps.step status="wait" title="wait" disabled />
        </x-antd-steps>

        <x-antd-steps
            type="navigation"
            size="small"
            current="2"
            class="site-navigation-steps"
        >
            <x-antd-steps.step title="finish 1" />
            <x-antd-steps.step title="finish 2" />
            <x-antd-steps.step title="current process" />
            <x-antd-steps.step title="wait" disabled />
        </x-antd-steps>
    </div>
@endsection
