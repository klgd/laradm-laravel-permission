@extends('docs.component')

@section('content')

    <x-antd-typography>
        <x-antd-typography.title>Introduction</x-antd-typography.title>
        <x-antd-typography.paragraph>
            In the process of internal desktop applications development, many different design specs and
            implementations would be involved, which might cause designers and developers difficulties and
            duplication and reduce the efficiency of development.
        </x-antd-typography.paragraph>
        <x-antd-typography.paragraph>
            After massive project practice and summaries, Ant Design, a design language for background
            applications, is refined by Ant UED Team, which aims to
            <x-antd-typography.text strong>
                uniform the user interface specs for internal background projects, lower the unnecessary
                cost of design differences and implementation and liberate the resources of design and
                front-end development
            </x-antd-typography.text>.
        </x-antd-typography.paragraph>
        <x-antd-typography.title level=2>Guidelines and Resources</x-antd-typography.title>
        <x-antd-typography.paragraph>
            We supply a series of design principles, practical patterns and high quality design resources
            (<x-antd-typography.text code>Sketch</x-antd-typography.text> and <x-antd-typography.text code>Axure</x-antd-typography.text>), to help people create their product
            prototypes beautifully and efficiently.
        </x-antd-typography.paragraph>

        <x-antd-typography.paragraph>
            <ul>
                <li>
                    <a href="/docs/spec/proximity">Principles</a>
                </li>
                <li>
                    <a href="/docs/pattern/navigation">Patterns</a>
                </li>
                <li>
                    <a href="/docs/resource/download">Resource Download</a>
                </li>
            </ul>
        </x-antd-typography.paragraph>

        <Divider />

        <x-antd-typography.title>介绍</x-antd-typography.title>
        <x-antd-typography.paragraph>
            蚂蚁的企业级产品是一个庞大且复杂的体系。这类产品不仅量级巨大且功能复杂，而且变动和并发频繁，常常需要设计与开发能够快速的做出响应。同时这类产品中有存在很多类似的页面以及组件，可以通过抽象得到一些稳定且高复用性的内容。
        </x-antd-typography.paragraph>
        <x-antd-typography.paragraph>
            随着商业化的趋势，越来越多的企业级产品对更好的用户体验有了进一步的要求。带着这样的一个终极目标，我们（蚂蚁金服体验技术部）经过大量的项目实践和总结，逐步打磨出一个服务于企业级产品的设计体系
            Ant Design。基于<x-antd-typography.text mark>『确定』和『自然』</x-antd-typography.text>
            的设计价值观，通过模块化的解决方案，降低冗余的生产成本，让设计者专注于
            <x-antd-typography.text strong>更好的用户体验</x-antd-typography.text>。
        </x-antd-typography.paragraph>
        <x-antd-typography.title level=2>设计资源</x-antd-typography.title>
        <x-antd-typography.paragraph>
            我们提供完善的设计原则、最佳实践和设计资源文件（<x-antd-typography.text code>Sketch</x-antd-typography.text> 和
            <x-antd-typography.text code>Axure</x-antd-typography.text>），来帮助业务快速设计出高质量的产品原型。
        </x-antd-typography.paragraph>

        <x-antd-typography.paragraph>
            <ul>
                <li>
                    <a href="/docs/spec/proximity">设计原则</a>
                </li>
                <li>
                    <a href="/docs/pattern/navigation">设计模式</a>
                </li>
                <li>
                    <a href="/docs/resource/download">设计资源</a>
                </li>
            </ul>
        </x-antd-typography.paragraph>
    </x-antd-typography>


    <br>
    <br>

    <x-antd-typography.title>h1. Ant Design</x-antd-typography.title>
    <x-antd-typography.title level=2>h2. Ant Design</x-antd-typography.title>
    <x-antd-typography.title level=3>h3. Ant Design</x-antd-typography.title>
    <x-antd-typography.title level=4>h4. Ant Design</x-antd-typography.title>

    <br>
    <br>
    <br>
    <br>

    <div>
        <x-antd-typography.text>Ant Design</x-antd-typography.text>
        <br />
        <x-antd-typography.text type="secondary">Ant Design</x-antd-typography.text>
        <br />
        <x-antd-typography.text type="warning">Ant Design</x-antd-typography.text>
        <br />
        <x-antd-typography.text type="danger">Ant Design</x-antd-typography.text>
        <br />
        <x-antd-typography.text disabled>Ant Design</x-antd-typography.text>
        <br />
        <x-antd-typography.text mark>Ant Design</x-antd-typography.text>
        <br />
        <x-antd-typography.text code>Ant Design</x-antd-typography.text>
        <br>
        <x-antd-typography.text keyboard>Ant Design</x-antd-typography.text>
        <br />
        <x-antd-typography.text underline>Ant Design</x-antd-typography.text>
        <br />
        <x-antd-typography.text delete>Ant Design</x-antd-typography.text>
        <br />
        <x-antd-typography.text strong mark>Ant Design</x-antd-typography.text>
    </div>

    <br>
    <br>
    <br>
    <br>

    <div>
        {{--    <x-antd-typography.paragraph editable={{ onChange: this.onChange }}>{this.state.str}</x-antd-typography.paragraph>--}}
        <x-antd-typography.paragraph id="copy1" copyable code><input placeholder="请选择时间" title="" size="10" value="">This is a copyable" text.</x-antd-typography.paragraph>
        @php
            $a = '<input placeholder="请选择时间" title="" size="10" value="">xxxxx';
        @endphp
        <x-antd-typography.paragraph :copyable="['text' => $a]">Replace copy text.</x-antd-typography.paragraph>
    </div>

    <div>
        <x-antd-typography.paragraph id="expand1" code :ellipsis="['rows' => 3, 'expandable' => true, 'suffix' => '---鲁迅说']">
            蚂蚁的企业级产品是一个庞大且复杂的体系。这类产品不仅量级巨大且功能复杂，而且变动和并发频繁，常常需要设计与开发能够快速的做出响应。同时这类产品中有存在很多类似的页面以及组件，可以通过抽象得到一些稳定且高复用性的内容。
        </x-antd-typography.paragraph>

        <x-antd-typography.paragraph mark :ellipsis="['rows' => 3, 'expandable' => true, 'symbol' => 'more']">
            Ant Design, a design language for background applications, is refined by Ant UED Team. Ant
            Design, a design language for background applications, is refined by Ant UED Team. Ant Design,
            a design language for background applications, is refined by Ant UED Team. Ant Design, a
            design language for background applications, is refined by Ant UED Team. Ant Design, a design
            language for background applications, is refined by Ant UED Team. Ant Design, a design
            language for background applications, is refined by Ant UED Team.
        </x-antd-typography.paragraph>
    </div>


    <script>
        $(function () {
            $('#expand1').on('expand.ab.ellipsis', function (event) {
                console.log(event)
            })

            $('#copy1').on('copy.ab.copy', (event) => {
                console.log(event)
            })
        })
    </script>
@endsection
