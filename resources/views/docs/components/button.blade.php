@extends('docs.component')

@section('content')
    <style>
        .site-button-ghost-wrapper {
            background: rgb(190, 200, 200);
            padding: 26px 16px 16px;
        }
    </style>
    <div>
        <x-antd-button type="primary">Primary</x-antd-button>
        <x-antd-button>Default</x-antd-button>
        <x-antd-button type="dashed">Dashed</x-antd-button>
        <x-antd-button type="link">Link</x-antd-button>
        <x-antd-button type="text">Text</x-antd-button>
    </div>



    <br /><br />

    <div>
        {{--    <Tooltip title="search">--}}
        <x-antd-button type="primary" shape="circle" icon="search">

        </x-antd-button>
        {{--    </Tooltip>--}}
        <x-antd-button type="primary" shape="circle">
            A
        </x-antd-button>
        <x-antd-button type="primary" icon="search">
            Search
        </x-antd-button>
        {{--    <Tooltip title="search">--}}
        <x-antd-button shape="circle" icon="search" />
        {{--    </Tooltip>--}}
        <x-antd-button icon="search">Search</x-antd-button>
        <br />
        {{--    <Tooltip title="search">--}}
        <x-antd-button shape="circle" icon="search" />
        {{--    </Tooltip>--}}
        <x-antd-button icon="search">Search</x-antd-button>
        {{--    <Tooltip title="search">--}}
        <x-antd-button type="dashed" shape="circle" icon="search" />
        {{--    </Tooltip>--}}
        <x-antd-button type="dashed" icon="search">
            Search
        </x-antd-button>
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
        <x-antd-button type="primary" :size="$size">
            Primary
        </x-antd-button>
        <x-antd-button :size="$size">Default</x-antd-button>
        <x-antd-button type="dashed" :size="$size">
            Dashed
        </x-antd-button>
        <br />
        <x-antd-button type="link" :size="$size">
            Link
        </x-antd-button>
        <br />
        <x-antd-button type="primary" icon="download" :size="$size" />
        <x-antd-button type="primary" shape="circle" icon="download" :size="$size" />
        <x-antd-button type="primary" shape="round" icon="download" :size="$size" />
        <x-antd-button type="primary" shape="round" icon="download" :size="$size">
            Download
        </x-antd-button>
        <x-antd-button type="primary" icon="download" :size="$size">
            Download
        </x-antd-button>
    </div>

    <br /><br />
    <div>
        <x-antd-button type="primary">Primary</x-antd-button>
        <x-antd-button type="primary" disabled>
            Primary(disabled)
        </x-antd-button>
        <br />
        <x-antd-button>Default</x-antd-button>
        <x-antd-button disabled>Default(disabled)</x-antd-button>
        <br />
        <x-antd-button type="dashed">Dashed</x-antd-button>
        <x-antd-button type="dashed" disabled>
            Dashed(disabled)
        </x-antd-button>
        <br />
        <x-antd-button type="link">Link</x-antd-button>
        <x-antd-button type="link" disabled>
            Link(disabled)
        </x-antd-button>
        <br />
        <x-antd-button type="link" danger>
            Danger Link
        </x-antd-button>
        <x-antd-button type="link" danger disabled>
            Danger Link(disabled)
        </x-antd-button>
        <br />
        <x-antd-button danger>Danger Default</x-antd-button>
        <x-antd-button danger disabled>
            Danger Default(disabled)
        </x-antd-button>
        <div class="site-button-ghost-wrapper">
            <x-antd-button ghost>Ghost</x-antd-button>
            <x-antd-button ghost disabled>
                Ghost(disabled)
            </x-antd-button>
        </div>
    </div>


    <br />
    <br />

    <div>
        <x-antd-button type="primary" loading>
            Loading
        </x-antd-button>
        <x-antd-button type="primary" size="small" loading>
            Loading
        </x-antd-button>
        <br />
        <x-antd-button type="primary" :loading="false" onClick="enterLoading()">
            Click me!
        </x-antd-button>
        <x-antd-button
            type="primary"
            icon="poweroff"
            loading
            onClick="enterIconLoading()"
        >
            Click me!
        </x-antd-button>
    </div>

    <br>
    <br>

    <div class="site-button-ghost-wrapper">
        <x-antd-button type="primary" ghost>
            Primary
        </x-antd-button>
        <x-antd-button ghost>Default</x-antd-button>
        <x-antd-button type="dashed" ghost>
            link
        </x-antd-button>
        <x-antd-button type="text" ghost>
            Text
        </x-antd-button>
        <x-antd-button type="link" ghost>
            link
        </x-antd-button>
    </div>

    <br>
    <br>
    <div>
        <x-antd-button type="primary" block>
            Primary
        </x-antd-button>
        <x-antd-button block>Default</x-antd-button>
        <x-antd-button type="dashed" block>
            Dashed
        </x-antd-button>
        <x-antd-button type="link" block>
            Link
        </x-antd-button>
    </div>


    <br>
    <br>
    <div>
        <x-antd-button type="primary" icon="download" block href="http://baidu.com" target="_blank">12</x-antd-button>
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
        <x-antd-button.group>
            <x-antd-button>Cancel</x-antd-button>
            <x-antd-button>OK</x-antd-button>
        </x-antd-button.group>
        <x-antd-button.group>
            <x-antd-button disabled>L</x-antd-button>
            <x-antd-button disabled>M</x-antd-button>
            <x-antd-button disabled>R</x-antd-button>
        </x-antd-button.group>
        <x-antd-button.group>
            <x-antd-button>L</x-antd-button>
            <x-antd-button>M</x-antd-button>
            <x-antd-button>R</x-antd-button>
        </x-antd-button.group>

        <h4>With Icon</h4>
        <x-antd-button.group>
            <x-antd-button type="primary">
                <x-antd-icon name="left" />
                Go back
            </x-antd-button>
            <x-antd-button type="primary">
                Go forward
                <x-antd-icon name="right" />
            </x-antd-button>
        </x-antd-button.group>
        <x-antd-button.group>
            <x-antd-button type="primary" icon="cloud" />
            <x-antd-button type="primary" icon="cloud-download" />
        </x-antd-button.group>
        <x-antd-button.group>
            <x-antd-button type="primary" size="small" icon="cloud" />
            <x-antd-button type="primary" size="small" icon="cloud-download" />
        </x-antd-button.group>
    </div>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

@endsection
