<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>

    <title>TinyColor - Fast, small color manipulation in JavaScript</title>

    <link rel="stylesheet" href="./css/demo.css" type="text/css" media="screen" />

</head>

<body>
<div id="container">
    <h1>TinyColor</h1>
    <h2>Fast, small color manipulation and conversion for JavaScript</h2>

    <p>
        <a href="https://github.com/bgrins/TinyColor">TinyColor</a> is a micro framework for inputting colors and outputting colors as different formats.
        Input is meant to be as permissive as possible.
    </p>

    <h3>Usage Documentation</h3>
    <p>Read all the documentation on the <a href='https://github.com/bgrins/TinyColor'>TinyColor project page</a> on github.</p>

    <h3>Code</h3>
    <p><a href='docs/tinycolor.html'>View the annotated source code</a> or <a href='https://github.com/bgrins/TinyColor/blob/master/tinycolor.js'>see the full source on github</a>.</p>

    <h3>Tests</h3>
    <p><a href='test/'>View the QUnit Tests</a>.</p>

    <h3>Demo</h3>
    <div id='demo'>
        <div id='inputter'>
            <form action="/">
                <p>
                    Enter a color: <input type="text" placeholder="any color." name='color' value="{{ $color }}" />
                </p>
            </form>
            <p>
                Or try these:
                <a href="/?color=red">red</a>
                <a href="/?color=0f0">0f0</a>
                <a href="/?color=rgb 255 128 128">rgb 255 128 128</a>
                <a href='/?color=hsl(0, 100%, 50%)'>hsl(0, 100%, 50%)</a>
                <a href='/?color=hsv 0, 100%, 50%'>hsv 0, 100%, 50%</a>
            </p>
            <p>And I'll tell you what I know about it:</p>
        </div>

        <pre id='code-output' style="border-color: {{ $tiny->toHexString() }}">
            hex:    {{ $tiny->toHexString() }}
            hex8:    {{ $tiny->toHex8String() }}
            rgb:    {{ $tiny->toRgbString() }}
            hsl:    {{ $tiny->toHslString() }}
            hsv:    {{ $tiny->toHsvString() }}
            name:    {{ $tiny->toName() ?: 'none' }}
            format:    {{ $tiny->getFormat() }}
            format string:    {{ $tiny->toString() }}
        </pre>

        <div id='filter-output' class="{{ $tiny->isValid() ? '' : 'invisible' }}">
            <table>
                <tr>
                    <th>Lighten</th>
                    <td><div class='lighten'
                             style="background-color: {{ \TinyColor\TinyColor::parse($color)->lighten(20)->toRgbString() }}"></div></td>
                </tr>
                <tr>
                    <th>Darken</th>
                    <td><div class='darken'
                             style="background-color: {{ \TinyColor\TinyColor::parse($color)->darken(20)->toRgbString() }}"></div></td>
                </tr>
                <tr>
                    <th>Saturate</th>
                    <td><div class='saturate'
                             style="background-color: {{ \TinyColor\TinyColor::parse($color)->saturate(20)->toRgbString() }}"></div></td>
                </tr>
                <tr>
                    <th>Desaturate</th>
                    <td><div class='desaturate'
                             style="background-color: {{ \TinyColor\TinyColor::parse($color)->desaturate(20)->toRgbString() }}"></div></td>
                </tr>
                <tr>
                    <th>Greyscale</th>
                    <td><div class='greyscale'
                             style="background-color: {{ \TinyColor\TinyColor::parse($color)->greyscale()->toRgbString() }}"></div></td>
                </tr>
                <tr>
                    <th>Brighten</th>
                    <td><div class='brighten'
                             style="background-color: {{ \TinyColor\TinyColor::parse($color)->brighten(20)->toRgbString() }}"></div></td>
                </tr>
                <tr>
                    <th>Most Readable</th>
                    <td><div id='mostReadable'
                             style="background-color: {{ \TinyColor\TinyColor::mostReadable($color, array_keys($tiny::$names))->toRgbString() }}"></div></td>
                </tr>
            </table>
        </div>

        <div id='combine-output' class="{{ $tiny->isValid() ? '' : 'invisible' }}">
            <table>
                <tr>
                    <th>Triad</th> <td><div class='triad'>
                            @foreach ($tiny->triad() as $e)
                                <span style="background:{{ $e->toHexString() }}"></span>
                            @endforeach

                        </div></td>
                </tr>
                <tr>
                    <th>Tetrad</th> <td><div class='tetrad'>
                            @foreach ($tiny->tetrad() as $e)
                                <span style="background:{{ $e->toHexString() }}"></span>
                            @endforeach
                        </div></td>
                </tr>
                <tr>
                    <th>Monochromatic</th> <td><div class='mono'>
                            @foreach ($tiny->monochromatic() as $e)
                                <span style="background:{{ $e->toHexString() }}"></span>
                            @endforeach
                        </div></td>
                </tr>
                <tr>
                    <th>Analogous</th> <td><div class='analogous'>
                            @foreach ($tiny->analogous() as $e)
                                <span style="background:{{ $e->toHexString() }}"></span>
                            @endforeach
                        </div></td>
                </tr>
                <tr>
                    <th>Split Complements</th> <td><div class='sc'>
                            @foreach ($tiny->splitcomplement() as $e)
                                <span style="background:{{ $e->toHexString() }}"></span>
                            @endforeach
                        </div></td>
                </tr>
            </table>
        </div>
    </div>


    <h3>Credit</h3>
    <p>
        Developed by <a href='http://briangrinstead.com'>Brian Grinstead</a>.  Big thanks to the following places:
    </p>
    <ul>
        <li><a href='https://github.com/cloudhead/less.js/blob/master/lib/less/functions.js'>less.js</a> for some of the modification functions</li>
        <li><a href='https://github.com/infusion/jQuery-xcolor/blob/master/jquery.xcolor.js'>jQuery xColor</a> for some of the combination functions</li>
        <li><a href='http://www.w3.org/TR/css3-color/#svg-color'>w3.org</a> for the color list and parsing rules</li>
        <li><a href='http://mjijackson.com/2008/02/rgb-to-hsl-and-rgb-to-hsv-color-model-conversion-algorithms-in-javascript'>mjijackson.com</a> for the first stab at RGB / HSL / HSV converters</li>

    </ul>

</div>
</body>
</html>
