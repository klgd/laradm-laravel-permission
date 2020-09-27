<?php

use Illuminate\Container\Container;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\HtmlString;
use League\CommonMark\Block\Element\AbstractStringContainerBlock;
use League\CommonMark\CommonMarkConverter;
use League\CommonMark\Environment;
use League\CommonMark\Extension\Table\TableExtension;
use TinyColor\TinyColor;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



// Route::get('/', function (\Illuminate\Http\Request $request) {
    // $color = $request->get('color', '#960064');

    // $tiny    = TinyColor::parse($color);
    // $input   = $tiny->toRgb();
    // $output  = TinyColor::parse($tiny->toHslString())->toRgb();

    // dump($output);
    // $tiny = \TinyColor\TinyColor::parse($color);


    // dump(tinycolor("red")->lighten()->desaturate()->toHexString());
    // $aa = file_get_contents('http://ifconfig.me');
    // dd($aa);
    // $mem = DB::table('members')->paginate();
    // app();
    // dd($a);
    // $p = Container::getInstance()->makeWith(LengthAwarePaginator::class,[
    //     'items' => [],
    //     'total' => $a->total(),
    //     'perPage' => $a->perPage(),
    //     'currentPage' => $a->currentPage(),
    //     'options' => $a->getOptions()
    // ]);
    // dd($p);
    // return view('welcome', compact('mem'));
// });

// Route::get('/admin', function () {
//     return view('admin');
// });

Route::get('/', function () {
    return view('docs.introduce');
});

Route::get('/components/{path}', function ($path) {
    return view('docs.components.' . str_replace('-cn', '', $path));
});

Route::get('/md', function () {
    $environment = Environment::createCommonMarkEnvironment();

    $environment->mergeConfig([
        'heading_permalink' => [
            'html_class' => 'heading-permalink',
            'inner_contents' => '#',
            'insert' => 'after',
            'title' => "",
        ],
    ]);

    $environment->addExtension(new TableExtension);
    $environment->addExtension(new \League\CommonMark\Extension\GithubFlavoredMarkdownExtension());
    $environment->addExtension(new \League\CommonMark\Extension\HeadingPermalink\HeadingPermalinkExtension());
    // $environment->addExtension(new \League\CommonMark\Extension\TableOfContents\TableOfContentsExtension());
    $environment->addBlockParser(new \App\Parser\FrontMatterParser(), 80);
    $environment->addBlockRenderer(\App\Element\FrontMatterElement::class, new \App\Renderer\FrontMatterRenderer());

    $markdown = <<<EOF
---
category: Components
type: 通用
title: Button
subtitle: 按钮
---

按钮用于开始一个即时操作。

## 何时使用

标记了一个（或封装一组）操作命令，响应用户点击行为，触发相应的业务逻辑。

在 Ant Design 中我们提供了四种按钮。

- 主按钮：用于主行动点，一个操作区域只能有一个主按钮。
- 默认按钮：用于没有主次之分的一组行动点。
- 虚线按钮：常用于添加操作。
- 链接按钮：用于次要或外链的行动点。

以及四种状态属性与上面配合使用。

- 危险：删除/移动/修改权限等危险操作，一般需要二次确认。
- 幽灵：用于背景色比较复杂的地方，常用在首页/产品页等展示场景。
- 禁用：行动点不可用的时候，一般需要文案解释。
- 加载中：用于异步操作等待反馈的时候，也可以避免多次提交。

## API

通过设置 Button 的属性来产生不同的按钮样式，推荐顺序为：`type` -> `shape` -> `size` -> `loading` -> `disabled`。

按钮的属性说明如下：

| 属性 | 说明 | 类型 | 默认值 | 版本 |
| --- | --- | --- | --- | --- |
| disabled | 按钮失效状态 | boolean | `false` |  |
| ghost | 幽灵属性，使按钮背景透明 | boolean | false |  |
| href | 点击跳转的地址，指定此属性 button 的行为和 a 链接一致 | string | - |  |
| htmlType | 设置 `button` 原生的 `type` 值，可选值请参考 [HTML 标准](https://developer.mozilla.org/en-US/docs/Web/HTML/Element/button#attr-type) | string | `button` |  |
| icon | 设置按钮的图标组件 | ReactNode | - |  |
| loading | 设置按钮载入状态 | boolean \| { delay: number } | `false` |  |
| shape | 设置按钮形状，可选值为 `circle`、 `round` 或者不设 | string | - |  |
| size | 设置按钮大小 | `large` \| `middle` \| `small` | 无 |  |
| target | 相当于 a 链接的 target 属性，href 存在时生效 | string | - |  |
| type | 设置按钮类型，可选值为 `primary` `dashed` `link` 或者不设 | string | - |  |
| onClick | 点击按钮时的回调 | (event) => void | - |  |
| block | 将按钮宽度调整为其父宽度的选项 | boolean | `false` |  |
| danger | 设置危险按钮 | boolean | `false` |  |

支持原生 button 的其他所有属性。

## FAQ

### 如何移除两个汉字之间的空格？

根据 Ant Design 设计规范要求，我们会在按钮内只有两个汉字时自动添加空格，如果你不需要这个特性，可以设置 [ConfigProvider](/components/config-provider/#API) 的 `autoInsertSpaceInButton` 为 `false`。

<img src="https://gw.alipayobjects.com/zos/antfincdn/MY%26THAPZrW/38f06cb9-293a-4b42-b183-9f443e79ffea.png" style="box-shadow: none; margin: 0; width: 100px" alt="移除两个汉字之间的空格"  />

<style>
[id^="components-button-demo-"] .ant-btn {
  margin-right: 8px;
  margin-bottom: 12px;
}
[id^="components-button-demo-"] .ant-btn-rtl {
  margin-right: 0;
  margin-left: 8px;
}
[id^="components-button-demo-"] .ant-btn-group > .ant-btn {
  margin-right: 0;
}
[data-theme="dark"] .site-button-ghost-wrapper {
  background: rgba(255, 255, 255, 0.2);
}
</style>

## 设计指引

- [我的按钮究竟该放哪儿！？| Ant Design 4.0 系列分享](https://zhuanlan.zhihu.com/p/109644406)

EOF;

    $converter = new CommonMarkConverter([
        'allow_unsafe_links' => false,
    ], $environment);

    return $converter->convertToHtml($markdown);
    // dd($converter->convertToHtml($markdown));

    $parser = new \League\CommonMark\DocParser($environment);
    $htmlRenderer = new \League\CommonMark\HtmlRenderer($environment);

    $document = $parser->parse($markdown);
    foreach ($document->children() as $item) {
        if ($item instanceof \App\Element\FrontMatterElement) {
            $yaml = \Symfony\Component\Yaml\Yaml::parse($item->getStringContent());
            dump($yaml);
        }

        // if ($item instanceof AbstractStringContainerBlock) {
            dump($item);
            // dump($htmlRenderer->renderBlock($item));
        // }

    }



    // dd($document->firstChild()->next()->getStringContent());
});


// Route::get('/{path}', function ($path) {
//     return view($path);
// });


