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



Route::get('/', function (\Illuminate\Http\Request $request) {
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
    return view('welcome', compact('mem'));
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/md', function () {
    $environment = Environment::createCommonMarkEnvironment();

    $environment->addExtension(new TableExtension);
    $environment->addExtension(new \League\CommonMark\Extension\GithubFlavoredMarkdownExtension());
    $environment->addExtension(new \League\CommonMark\Extension\HeadingPermalink\HeadingPermalinkExtension());
    $environment->addExtension(new \League\CommonMark\Extension\TableOfContents\TableOfContentsExtension());
    $environment->addBlockParser(new \App\Parser\FrontMatterParser(), 80);
    $environment->addBlockRenderer(\App\Element\FrontMatterElement::class, new \App\Renderer\FrontMatterRenderer());

    $markdown = <<<EOF
---
order: 5
title:
  zh-CN: 自定义关闭
  en-US: Customized Close Text
---

## zh-CN

可以自定义关闭，自定义的文字会替换原先的关闭 `Icon`。

## en-US

Replace the default icon with customized text.

```tsx
import { Alert } from 'antd';

ReactDOM.render(<Alert message="Info Text" type="info" closeText="Close Now" />, mountNode);
```


EOF;

    $converter = new CommonMarkConverter([
        'allow_unsafe_links' => false,
    ], $environment);

    echo $converter->convertToHtml($markdown);exit;

    $parser = new \League\CommonMark\DocParser($environment);
    //
    $document = $parser->parse($markdown);
    foreach ($document->children() as $item) {
        if ($item instanceof \App\Element\FrontMatterElement) {
            $yaml = \Symfony\Component\Yaml\Yaml::parse($item->getStringContent());
            dump($yaml);
        }

        // if ($item instanceof AbstractStringContainerBlock) {
            dump($item);
        // }

    }
    // dd($document->firstChild()->next()->getStringContent());
});


Route::get('/{path}', function ($path) {
    return view($path);
});


