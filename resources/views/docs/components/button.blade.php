@extends('docs.component')

@section('content')
    <style>
        .site-button-ghost-wrapper {
            background: rgb(190, 200, 200);
            padding: 26px 16px 16px;
        }
    </style>
    <div>
        <x-button type="primary">Primary</x-button>
        <x-button>Default</x-button>
        <x-button type="dashed">Dashed</x-button>
        <x-button type="link">Link</x-button>
        <x-button type="text">Text</x-button>
    </div>



    <br /><br />

    <div>
        {{--    <Tooltip title="search">--}}
        <x-button type="primary" shape="circle" icon="search">

        </x-button>
        {{--    </Tooltip>--}}
        <x-button type="primary" shape="circle">
            A
        </x-button>
        <x-button type="primary" icon="search">
            Search
        </x-button>
        {{--    <Tooltip title="search">--}}
        <x-button shape="circle" icon="search" />
        {{--    </Tooltip>--}}
        <x-button icon="search">Search</x-button>
        <br />
        {{--    <Tooltip title="search">--}}
        <x-button shape="circle" icon="search" />
        {{--    </Tooltip>--}}
        <x-button icon="search">Search</x-button>
        {{--    <Tooltip title="search">--}}
        <x-button type="dashed" shape="circle" icon="search" />
        {{--    </Tooltip>--}}
        <x-button type="dashed" icon="search">
            Search
        </x-button>
    </div>

    <br />
    <div>
        {{--    <Radio.Group value={size} onChange={this.handleSizeChange}>--}}
        {{--        <Radio.Button value="large">Large</Radio.Button>--}}
        {{--        <Radio.Button value="default">Default</Radio.Button>--}}
        {{--        <Radio.Button value="small">Small</Radio.Button>--}}
        {{--    </Radio.Group>--}}
        <br />
        <br />
        @php
            //$size = 'large';
            //$size = 'default';
            $size = 'small';
        @endphp
        <x-button type="primary" :size="$size">
            Primary
        </x-button>
        <x-button :size="$size">Default</x-button>
        <x-button type="dashed" :size="$size">
            Dashed
        </x-button>
        <br />
        <x-button type="link" :size="$size">
            Link
        </x-button>
        <br />
        <x-button type="primary" icon="download" :size="$size" />
        <x-button type="primary" shape="circle" icon="download" :size="$size" />
        <x-button type="primary" shape="round" icon="download" :size="$size" />
        <x-button type="primary" shape="round" icon="download" :size="$size">
            Download
        </x-button>
        <x-button type="primary" icon="download" :size="$size">
            Download
        </x-button>
    </div>

    <br /><br />
    <div>
        <x-button type="primary">Primary</x-button>
        <x-button type="primary" disabled>
            Primary(disabled)
        </x-button>
        <br />
        <x-button>Default</x-button>
        <x-button disabled>Default(disabled)</x-button>
        <br />
        <x-button type="dashed">Dashed</x-button>
        <x-button type="dashed" disabled>
            Dashed(disabled)
        </x-button>
        <br />
        <x-button type="link">Link</x-button>
        <x-button type="link" disabled>
            Link(disabled)
        </x-button>
        <br />
        <x-button type="link" danger>
            Danger Link
        </x-button>
        <x-button type="link" danger disabled>
            Danger Link(disabled)
        </x-button>
        <br />
        <x-button danger>Danger Default</x-button>
        <x-button danger disabled>
            Danger Default(disabled)
        </x-button>
        <div class="site-button-ghost-wrapper">
            <x-button ghost>Ghost</x-button>
            <x-button ghost disabled>
                Ghost(disabled)
            </x-button>
        </div>
    </div>


    <br />
    <br />

    <div>
        <x-button type="primary" loading>
            Loading
        </x-button>
        <x-button type="primary" size="small" loading>
            Loading
        </x-button>
        <br />
        <x-button type="primary" :loading="false" onClick="enterLoading()">
            Click me!
        </x-button>
        <x-button
            type="primary"
            icon="poweroff"
            loading
            onClick="enterIconLoading()"
        >
            Click me!
        </x-button>
    </div>

    <br>
    <br>

    <div class="site-button-ghost-wrapper">
        <x-button type="primary" ghost>
            Primary
        </x-button>
        <x-button ghost>Default</x-button>
        <x-button type="dashed" ghost>
            link
        </x-button>
        <x-button type="text" ghost>
            Text
        </x-button>
        <x-button type="link" ghost>
            link
        </x-button>
    </div>

    <br>
    <br>
    <div>
        <x-button type="primary" block>
            Primary
        </x-button>
        <x-button block>Default</x-button>
        <x-button type="dashed" block>
            Dashed
        </x-button>
        <x-button type="link" block>
            Link
        </x-button>
    </div>


    <br>
    <br>
    <div>
        <x-button type="primary" icon="download" block href="http://baidu.com" target="_blank">12</x-button>
    </div>


    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>


    <div>
        <h4>Basic</h4>
        <x-button.group>
            <x-button>Cancel</x-button>
            <x-button>OK</x-button>
        </x-button.group>
        <x-button.group>
            <x-button disabled>L</x-button>
            <x-button disabled>M</x-button>
            <x-button disabled>R</x-button>
        </x-button.group>
        <x-button.group>
            <x-button>L</x-button>
            <x-button>M</x-button>
            <x-button>R</x-button>
        </x-button.group>

        <h4>With Icon</h4>
        <x-button.group>
            <x-button type="primary">
                <x-icon name="left" />
                Go back
            </x-button>
            <x-button type="primary">
                Go forward
                <x-icon name="right" />
            </x-button>
        </x-button.group>
        <x-button.group>
            <x-button type="primary" icon="cloud" />
            <x-button type="primary" icon="cloud-download" />
        </x-button.group>
        <x-button.group>
            <x-button type="primary" size="small" icon="cloud" />
            <x-button type="primary" size="small" icon="cloud-download" />
        </x-button.group>
    </div>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

@endsection
