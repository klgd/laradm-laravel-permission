@extends('docs.component')

@section('content')
    <x-steps current="1">
        <x-steps.step title="Finished" description="This is a description." class="aass" />
        <x-steps.step title="In Progress" subTitle="Left 00:00:08" description="This is a description." />
        <x-steps.step title="Waiting" description="This is a description." />
{{--            <x-slot name="title">--}}
{{--                <div>col-6</div>--}}
{{--            </x-slot>--}}
{{--        </x-steps.step>--}}
    </x-steps>

    <br>
    <br>
    <br>


    <x-steps size="small" current="1">
        <x-steps.step title="Finished" />
        <x-steps.step title="In Progress" />
        <x-steps.step title="Waiting" />
    </x-steps>

    <br>
    <br>
    <br>

    <x-steps>
        <x-steps.step status="finish" title="Login" icon="user" />
        <x-steps.step status="finish" title="Verification" icon="solution" />
        <x-steps.step status="process" title="Pay" icon="loading" />
        <x-steps.step status="wait" title="Done" icon="smile" />
    </x-steps>

    <br>
    <br>
    <br>

    <x-steps direction="vertical" current="1">
        <x-steps.step title="Finished" description="This is a description." />
        <x-steps.step title="In Progress" description="This is a description." />
        <x-steps.step title="Waiting" description="This is a description." />
    </x-steps>

    <br>
    <br>
    <br>

    <x-steps direction="vertical" size="small" current="1">
        <x-steps.step title="Finished" description="This is a description." />
        <x-steps.step title="In Progress" description="This is a description." />
        <x-steps.step title="Waiting" description="This is a description." />
    </x-steps>

    <br>
    <br>
    <br>

    <x-steps current="1" status="error">
        <x-steps.step title="Finished" description="This is a description" />
        <x-steps.step title="In Process" description="This is a description" />
        <x-steps.step title="Waiting" description="This is a description" />
    </x-steps>

    <br>
    <br>
    <br>

    <div>
        <x-steps progressDot current="1">
            <x-steps.step title="Finished" description="This is a description." />
            <x-steps.step title="In Progress" description="This is a description." />
            <x-steps.step title="Waiting" description="This is a description." />
        </x-steps>
        <Divider />
        <x-steps progressDot current="1" direction="vertical">
            <x-steps.step title="Finished" description="This is a description. This is a description." />
            <x-steps.step title="Finished" description="This is a description. This is a description." />
            <x-steps.step title="In Progress" description="This is a description. This is a description." />
            <x-steps.step title="Waiting" description="This is a description." />
            <x-steps.step title="Waiting" description="This is a description." />
        </x-steps>
    </div>

    <br>
    <br>
    <br>

    <x-steps current="1">
        <x-slot name="progressDot">
            @verbatim
            <x-popover title="Title" data-trigger="hover">
                <x-slot name="content">
                    <span>
                        step {{ $index }} status: {{ $status }}
                    </span>
                </x-slot>
                {{ $dot }}
            </x-popover>
            @endverbatim
        </x-slot>
        <x-steps.step title="Finished" description="You can hover on the dot." />
        <x-steps.step title="In Progress" description="You can hover on the dot." />
        <x-steps.step title="Waiting" description="You can hover on the dot." />
        <x-steps.step title="Waiting" description="You can hover on the dot." />
    </x-steps>

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
        <x-steps
            type="navigation"
            size="small"
            current="1"
            class="site-navigation-steps"
        >
            <x-steps.step
                title="Step 1"
                subTitle="00:00:05"
                status="finish"
                description="This is a description."
            />
            <x-steps.step
                title="Step 2"
                subTitle="00:01:02"
                status="process"
                description="This is a description."
            />
            <x-steps.step
                title="Step 3"
                subTitle="waiting for longlong time"
                status="wait"
                description="This is a description."
            />
        </x-steps>
        <x-steps
            type="navigation"
            current="1"
            class="site-navigation-steps"
        >
            <x-steps.step status="finish" title="Step 1" />
            <x-steps.step status="process" title="Step 2" />
            <x-steps.step status="wait" title="Step 3" />
            <x-steps.step status="wait" title="Step 4" />
        </x-steps>
        <x-steps
            type="navigation"
            size="small"
            current="1"
            class="site-navigation-steps"
        >
            <x-steps.step status="finish" title="finish 1" />
            <x-steps.step status="finish" title="finish 2" />
            <x-steps.step status="process" title="current process" />
            <x-steps.step status="wait" title="wait" disabled />
        </x-steps>

        <x-steps
            type="navigation"
            size="small"
            current="2"
            class="site-navigation-steps"
        >
            <x-steps.step title="finish 1" />
            <x-steps.step title="finish 2" />
            <x-steps.step title="current process" />
            <x-steps.step title="wait" disabled />
        </x-steps>
    </div>
@endsection
