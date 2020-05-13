<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="root">
    <div class="container">
        <div class="content">
            <div class="top">
                <div class="header">
                    <a href="/">
                        <img alt="logo"
                             class="logo"
                             src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB3aWR0aD0iMjAwIiBoZWlnaHQ9IjIwMCIgdmVyc2lvbj0iMS4xIiB2aWV3Qm94PSIwIDAgMjAwIDIwMCI+PHRpdGxlPkdyb3VwIDI4IENvcHkgNTwvdGl0bGU+PGRlc2M+Q3JlYXRlZCB3aXRoIFNrZXRjaC48L2Rlc2M+PGRlZnM+PGxpbmVhckdyYWRpZW50IGlkPSJsaW5lYXJHcmFkaWVudC0xIiB4MT0iNjIuMTAyJSIgeDI9IjEwOC4xOTclIiB5MT0iMCUiIHkyPSIzNy44NjQlIj48c3RvcCBvZmZzZXQ9IjAlIiBzdG9wLWNvbG9yPSIjNDI4NUVCIi8+PHN0b3Agb2Zmc2V0PSIxMDAlIiBzdG9wLWNvbG9yPSIjMkVDN0ZGIi8+PC9saW5lYXJHcmFkaWVudD48bGluZWFyR3JhZGllbnQgaWQ9ImxpbmVhckdyYWRpZW50LTIiIHgxPSI2OS42NDQlIiB4Mj0iNTQuMDQzJSIgeTE9IjAlIiB5Mj0iMTA4LjQ1NyUiPjxzdG9wIG9mZnNldD0iMCUiIHN0b3AtY29sb3I9IiMyOUNERkYiLz48c3RvcCBvZmZzZXQ9IjM3Ljg2JSIgc3RvcC1jb2xvcj0iIzE0OEVGRiIvPjxzdG9wIG9mZnNldD0iMTAwJSIgc3RvcC1jb2xvcj0iIzBBNjBGRiIvPjwvbGluZWFyR3JhZGllbnQ+PGxpbmVhckdyYWRpZW50IGlkPSJsaW5lYXJHcmFkaWVudC0zIiB4MT0iNjkuNjkxJSIgeDI9IjE2LjcyMyUiIHkxPSItMTIuOTc0JSIgeTI9IjExNy4zOTElIj48c3RvcCBvZmZzZXQ9IjAlIiBzdG9wLWNvbG9yPSIjRkE4MTZFIi8+PHN0b3Agb2Zmc2V0PSI0MS40NzMlIiBzdG9wLWNvbG9yPSIjRjc0QTVDIi8+PHN0b3Agb2Zmc2V0PSIxMDAlIiBzdG9wLWNvbG9yPSIjRjUxRDJDIi8+PC9saW5lYXJHcmFkaWVudD48bGluZWFyR3JhZGllbnQgaWQ9ImxpbmVhckdyYWRpZW50LTQiIHgxPSI2OC4xMjglIiB4Mj0iMzAuNDQlIiB5MT0iLTM1LjY5MSUiIHkyPSIxMTQuOTQzJSI+PHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI0ZBOEU3RCIvPjxzdG9wIG9mZnNldD0iNTEuMjY0JSIgc3RvcC1jb2xvcj0iI0Y3NEE1QyIvPjxzdG9wIG9mZnNldD0iMTAwJSIgc3RvcC1jb2xvcj0iI0Y1MUQyQyIvPjwvbGluZWFyR3JhZGllbnQ+PC9kZWZzPjxnIGlkPSJQYWdlLTEiIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0iZXZlbm9kZCIgc3Ryb2tlPSJub25lIiBzdHJva2Utd2lkdGg9IjEiPjxnIGlkPSJsb2dvIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgtMjAuMDAwMDAwLCAtMjAuMDAwMDAwKSI+PGcgaWQ9Ikdyb3VwLTI4LUNvcHktNSIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMjAuMDAwMDAwLCAyMC4wMDAwMDApIj48ZyBpZD0iR3JvdXAtMjctQ29weS0zIj48ZyBpZD0iR3JvdXAtMjUiIGZpbGwtcnVsZT0ibm9uemVybyI+PGcgaWQ9IjIiPjxwYXRoIGlkPSJTaGFwZSIgZmlsbD0idXJsKCNsaW5lYXJHcmFkaWVudC0xKSIgZD0iTTkxLjU4ODA4NjMsNC4xNzY1MjgyMyBMNC4xNzk5NjU0NCw5MS41MTI3NzI4IEMtMC41MTkyNDA2MDUsOTYuMjA4MTE0NiAtMC41MTkyNDA2MDUsMTAzLjc5MTg4NSA0LjE3OTk2NTQ0LDEwOC40ODcyMjcgTDkxLjU4ODA4NjMsMTk1LjgyMzQ3MiBDOTYuMjg3MjkyMywyMDAuNTE4ODE0IDEwMy44NzczMDQsMjAwLjUxODgxNCAxMDguNTc2NTEsMTk1LjgyMzQ3MiBMMTQ1LjIyNTQ4NywxNTkuMjA0NjMyIEMxNDkuNDMzOTY5LDE1NC45OTk2MTEgMTQ5LjQzMzk2OSwxNDguMTgxOTI0IDE0NS4yMjU0ODcsMTQzLjk3NjkwMyBDMTQxLjAxNzAwNSwxMzkuNzcxODgxIDEzNC4xOTM3MDcsMTM5Ljc3MTg4MSAxMjkuOTg1MjI1LDE0My45NzY5MDMgTDEwMi4yMDE5MywxNzEuNzM3MzUyIEMxMDEuMDMyMzA1LDE3Mi45MDYwMTUgOTkuMjU3MTYwOSwxNzIuOTA2MDE1IDk4LjA4NzUzNTksMTcxLjczNzM1MiBMMjguMjg1OTA4LDEwMS45OTMxMjIgQzI3LjExNjI4MzEsMTAwLjgyNDQ1OSAyNy4xMTYyODMxLDk5LjA1MDc3NSAyOC4yODU5MDgsOTcuODgyMTExOCBMOTguMDg3NTM1OSwyOC4xMzc4ODIzIEM5OS4yNTcxNjA5LDI2Ljk2OTIxOTEgMTAxLjAzMjMwNSwyNi45NjkyMTkxIDEwMi4yMDE5MywyOC4xMzc4ODIzIEwxMjkuOTg1MjI1LDU1Ljg5ODMzMTQgQzEzNC4xOTM3MDcsNjAuMTAzMzUyOCAxNDEuMDE3MDA1LDYwLjEwMzM1MjggMTQ1LjIyNTQ4Nyw1NS44OTgzMzE0IEMxNDkuNDMzOTY5LDUxLjY5MzMxIDE0OS40MzM5NjksNDQuODc1NjIzMiAxNDUuMjI1NDg3LDQwLjY3MDYwMTggTDEwOC41ODA1NSw0LjA1NTc0NTkyIEMxMDMuODYyMDQ5LC0wLjUzNzk4Njg0NiA5Ni4yNjkyNjE4LC0wLjUwMDc5NzkwNiA5MS41ODgwODYzLDQuMTc2NTI4MjMgWiIvPjxwYXRoIGlkPSJTaGFwZSIgZmlsbD0idXJsKCNsaW5lYXJHcmFkaWVudC0yKSIgZD0iTTkxLjU4ODA4NjMsNC4xNzY1MjgyMyBMNC4xNzk5NjU0NCw5MS41MTI3NzI4IEMtMC41MTkyNDA2MDUsOTYuMjA4MTE0NiAtMC41MTkyNDA2MDUsMTAzLjc5MTg4NSA0LjE3OTk2NTQ0LDEwOC40ODcyMjcgTDkxLjU4ODA4NjMsMTk1LjgyMzQ3MiBDOTYuMjg3MjkyMywyMDAuNTE4ODE0IDEwMy44NzczMDQsMjAwLjUxODgxNCAxMDguNTc2NTEsMTk1LjgyMzQ3MiBMMTQ1LjIyNTQ4NywxNTkuMjA0NjMyIEMxNDkuNDMzOTY5LDE1NC45OTk2MTEgMTQ5LjQzMzk2OSwxNDguMTgxOTI0IDE0NS4yMjU0ODcsMTQzLjk3NjkwMyBDMTQxLjAxNzAwNSwxMzkuNzcxODgxIDEzNC4xOTM3MDcsMTM5Ljc3MTg4MSAxMjkuOTg1MjI1LDE0My45NzY5MDMgTDEwMi4yMDE5MywxNzEuNzM3MzUyIEMxMDEuMDMyMzA1LDE3Mi45MDYwMTUgOTkuMjU3MTYwOSwxNzIuOTA2MDE1IDk4LjA4NzUzNTksMTcxLjczNzM1MiBMMjguMjg1OTA4LDEwMS45OTMxMjIgQzI3LjExNjI4MzEsMTAwLjgyNDQ1OSAyNy4xMTYyODMxLDk5LjA1MDc3NSAyOC4yODU5MDgsOTcuODgyMTExOCBMOTguMDg3NTM1OSwyOC4xMzc4ODIzIEMxMDAuOTk5ODY0LDI1LjYyNzE4MzYgMTA1Ljc1MTY0MiwyMC41NDE4MjQgMTEyLjcyOTY1MiwxOS4zNTI0NDg3IEMxMTcuOTE1NTg1LDE4LjQ2ODUyNjEgMTIzLjU4NTIxOSwyMC40MTQwMjM5IDEyOS43Mzg1NTQsMjUuMTg4OTQyNCBDMTI1LjYyNDY2MywyMS4wNzg0MjkyIDExOC41NzE5OTUsMTQuMDM0MDMwNCAxMDguNTgwNTUsNC4wNTU3NDU5MiBDMTAzLjg2MjA0OSwtMC41Mzc5ODY4NDYgOTYuMjY5MjYxOCwtMC41MDA3OTc5MDYgOTEuNTg4MDg2Myw0LjE3NjUyODIzIFoiLz48L2c+PHBhdGggaWQ9IlNoYXBlIiBmaWxsPSJ1cmwoI2xpbmVhckdyYWRpZW50LTMpIiBkPSJNMTUzLjY4NTYzMywxMzUuODU0NTc5IEMxNTcuODk0MTE1LDE0MC4wNTk2IDE2NC43MTc0MTIsMTQwLjA1OTYgMTY4LjkyNTg5NCwxMzUuODU0NTc5IEwxOTUuOTU5OTc3LDEwOC44NDI3MjYgQzIwMC42NTkxODMsMTA0LjE0NzM4NCAyMDAuNjU5MTgzLDk2LjU2MzYxMzMgMTk1Ljk2MDUyNyw5MS44Njg4MTk0IEwxNjguNjkwNzc3LDY0LjcxODExNTkgQzE2NC40NzIzMzIsNjAuNTE4MDg1OCAxNTcuNjQ2ODY4LDYwLjUyNDE0MjUgMTUzLjQzNTg5NSw2NC43MzE2NTI2IEMxNDkuMjI3NDEzLDY4LjkzNjY3NCAxNDkuMjI3NDEzLDc1Ljc1NDM2MDcgMTUzLjQzNTg5NSw3OS45NTkzODIxIEwxNzEuODU0MDM1LDk4LjM2MjM3NjUgQzE3My4wMjM2Niw5OS41MzEwMzk2IDE3My4wMjM2NiwxMDEuMzA0NzI0IDE3MS44NTQwMzUsMTAyLjQ3MzM4NyBMMTUzLjY4NTYzMywxMjAuNjI2ODQ5IEMxNDkuNDc3MTUsMTI0LjgzMTg3IDE0OS40NzcxNSwxMzEuNjQ5NTU3IDE1My42ODU2MzMsMTM1Ljg1NDU3OSBaIi8+PC9nPjxlbGxpcHNlIGlkPSJDb21iaW5lZC1TaGFwZSIgY3g9IjEwMC41MTkiIGN5PSIxMDAuNDM3IiBmaWxsPSJ1cmwoI2xpbmVhckdyYWRpZW50LTQpIiByeD0iMjMuNiIgcnk9IjIzLjU4MSIvPjwvZz48L2c+PC9nPjwvZz48L3N2Zz4=">
                        <span class="title">Ant Design</span>
                    </a>
                </div>
                <div class="desc">Ant Design 是西湖区最具影响力的 Web 设计规范</div>
            </div>
            <div class="main">
                <div class="login">
                    <form class="ant-form ant-form-horizontal">
                        <div class="ant-tabs ant-tabs-top ant-tabs-line ant-tabs-no-animation">

                            <div tabindex="0" role="presentation"
                                 style="width: 0px; height: 0px; overflow: hidden; position: absolute;"></div>
                            <div class="ant-tabs-content ant-tabs-content-no-animated ant-tabs-top-content">
                                <div role="tabpanel" aria-hidden="false"
                                     class="ant-tabs-tabpane ant-tabs-tabpane-active">
                                    <div tabindex="0" role="presentation"
                                         style="width: 0px; height: 0px; overflow: hidden; position: absolute;"></div>
                                    <div class="ant-row ant-form-item">
                                        <div class="ant-col ant-form-item-control">
                                            <div class="ant-form-item-control-input">
                                                <div class="ant-form-item-control-input-content"><span
                                                        class="ant-input-affix-wrapper ant-input-affix-wrapper-lg"><span
                                                            class="ant-input-prefix"><span role="img" aria-label="user"
                                                                                           class="anticon anticon-user prefixIcon"
                                                                                           style="color: rgb(24, 144, 255);"><svg
                                                                    viewBox="64 64 896 896" focusable="false" class=""
                                                                    data-icon="user" width="1em" height="1em"
                                                                    fill="currentColor" aria-hidden="true"><path
                                                                        d="M858.5 763.6a374 374 0 00-80.6-119.5 375.63 375.63 0 00-119.5-80.6c-.4-.2-.8-.3-1.2-.5C719.5 518 760 444.7 760 362c0-137-111-248-248-248S264 225 264 362c0 82.7 40.5 156 102.8 201.1-.4.2-.8.3-1.2.5-44.8 18.9-85 46-119.5 80.6a375.63 375.63 0 00-80.6 119.5A371.7 371.7 0 00136 901.8a8 8 0 008 8.2h60c4.4 0 7.9-3.5 8-7.8 2-77.2 33-149.5 87.8-204.3 56.7-56.7 132-87.9 212.2-87.9s155.5 31.2 212.2 87.9C779 752.7 810 825 812 902.2c.1 4.4 3.6 7.8 8 7.8h60a8 8 0 008-8.2c-1-47.8-10.9-94.3-29.5-138.2zM512 534c-45.9 0-89.1-17.9-121.6-50.4S340 407.9 340 362c0-45.9 17.9-89.1 50.4-121.6S466.1 190 512 190s89.1 17.9 121.6 50.4S684 316.1 684 362c0 45.9-17.9 89.1-50.4 121.6S557.9 534 512 534z"></path></svg></span></span><input
                                                            id="userName" placeholder="用户名: admin or user" type="text"
                                                            class="ant-input ant-input-lg" value=""></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ant-row ant-form-item">
                                        <div class="ant-col ant-form-item-control">
                                            <div class="ant-form-item-control-input">
                                                <div class="ant-form-item-control-input-content"><span
                                                        class="ant-input-affix-wrapper ant-input-affix-wrapper-lg"><span
                                                            class="ant-input-prefix"><span role="img" aria-label="lock"
                                                                                           class="anticon anticon-lock prefixIcon"><svg
                                                                    viewBox="64 64 896 896" focusable="false" class=""
                                                                    data-icon="lock" width="1em" height="1em"
                                                                    fill="currentColor" aria-hidden="true"><path
                                                                        d="M832 464h-68V240c0-70.7-57.3-128-128-128H388c-70.7 0-128 57.3-128 128v224h-68c-17.7 0-32 14.3-32 32v384c0 17.7 14.3 32 32 32h640c17.7 0 32-14.3 32-32V496c0-17.7-14.3-32-32-32zM332 240c0-30.9 25.1-56 56-56h248c30.9 0 56 25.1 56 56v224H332V240zm460 600H232V536h560v304z"
                                                                        fill="#1890ff"></path><path
                                                                        d="M232 840h560V536H232v304zm280-226a48.01 48.01 0 0128 87v53c0 4.4-3.6 8-8 8h-40c-4.4 0-8-3.6-8-8v-53a48.01 48.01 0 0128-87z"
                                                                        fill="#e6f7ff"></path><path
                                                                        d="M484 701v53c0 4.4 3.6 8 8 8h40c4.4 0 8-3.6 8-8v-53a48.01 48.01 0 10-56 0z"
                                                                        fill="#1890ff"></path></svg></span></span><input
                                                            type="password" id="password" placeholder="密码: ant.design"
                                                            class="ant-input ant-input-lg"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div tabindex="0" role="presentation"
                                         style="width: 0px; height: 0px; overflow: hidden; position: absolute;"></div>
                                </div>
                                <div role="tabpanel" aria-hidden="true"
                                     class="ant-tabs-tabpane ant-tabs-tabpane-inactive"></div>
                            </div>
                            <div tabindex="0" role="presentation"
                                 style="width: 0px; height: 0px; overflow: hidden; position: absolute;"></div>
                        </div>
                        <div><label class="ant-checkbox-wrapper ant-checkbox-wrapper-checked"><span
                                    class="ant-checkbox ant-checkbox-checked"><input type="checkbox"
                                                                                     class="ant-checkbox-input" value=""
                                                                                     checked=""><span
                                        class="ant-checkbox-inner"></span></span><span>自动登录</span></label><a
                                style="float: right;">忘记密码</a></div>
                        <div class="ant-row ant-form-item">
                            <div class="ant-col ant-form-item-control">
                                <div class="ant-form-item-control-input">
                                    <div class="ant-form-item-control-input-content">
                                        <button type="submit"
                                                class="ant-btn submit ant-btn-primary ant-btn-lg">
                                            <span>登 录</span>

                                        </button>


                                        <x-antd-button>zzzz</x-antd-button>

                                        <x-antd-icon theme="outlined" name="home" style="margin: 2px; color: red" />
                                        <x-antd-icon theme="outlined" name="loading" />
                                        <x-antd-icon theme="outlined" name="smile" rotate="180" />
                                        <x-antd-icon theme="twotone" name="smile" />
                                        <x-antd-icon theme="twotone" name="check-circle" two-tone-color="#52c41a" />
                                        <x-antd-icon theme="twotone" name="heart" two-tone-color="#eb2f96" />
{{--                                        <x-icon type="outlined" name="alert" />--}}
                                        <x-antd-icon component='<svg width="1em" height="1em" fill="currentColor" viewBox="0 0 1024 1024">
    <path d="M923 283.6c-13.4-31.1-32.6-58.9-56.9-82.8-24.3-23.8-52.5-42.4-84-55.5-32.5-13.5-66.9-20.3-102.4-20.3-49.3 0-97.4 13.5-139.2 39-10 6.1-19.5 12.8-28.5 20.1-9-7.3-18.5-14-28.5-20.1-41.8-25.5-89.9-39-139.2-39-35.5 0-69.9 6.8-102.4 20.3-31.4 13-59.7 31.7-84 55.5-24.4 23.9-43.5 51.7-56.9 82.8-13.9 32.3-21 66.6-21 101.9 0 33.3 6.8 68 20.3 103.3 11.3 29.5 27.5 60.1 48.2 91 32.8 48.9 77.9 99.9 133.9 151.6 92.8 85.7 184.7 144.9 188.6 147.3l23.7 15.2c10.5 6.7 24 6.7 34.5 0l23.7-15.2c3.9-2.5 95.7-61.6 188.6-147.3 56-51.7 101.1-102.7 133.9-151.6 20.7-30.9 37-61.5 48.2-91 13.5-35.3 20.3-70 20.3-103.3 0.1-35.3-7-69.6-20.9-101.9z" />
  </svg>' style="color: hotpink" rotate="90" />

                                        <x-antd-icon type="iconalipay-circle" width="2em" height="2em" style="color: red" />
                                        <x-antd-icon />


                                    </div>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <footer class="ant-layout-footer" style="padding: 0px;">
            <footer class="ant-pro-global-footer">
                <div class="ant-pro-global-footer-links"><a title="Ant Design Pro" target="_blank"
                                                            href="https://pro.ant.design">Ant Design Pro</a><a
                        title="github" target="_blank" href="https://github.com/ant-design/ant-design-pro"><span
                            role="img" aria-label="github" class="anticon anticon-github"><svg viewBox="64 64 896 896"
                                                                                               focusable="false"
                                                                                               class=""
                                                                                               data-icon="github"
                                                                                               width="1em" height="1em"
                                                                                               fill="currentColor"
                                                                                               aria-hidden="true"><path
                                    d="M511.6 76.3C264.3 76.2 64 276.4 64 523.5 64 718.9 189.3 885 363.8 946c23.5 5.9 19.9-10.8 19.9-22.2v-77.5c-135.7 15.9-141.2-73.9-150.3-88.9C215 726 171.5 718 184.5 703c30.9-15.9 62.4 4 98.9 57.9 26.4 39.1 77.9 32.5 104 26 5.7-23.5 17.9-44.5 34.7-60.8-140.6-25.2-199.2-111-199.2-213 0-49.5 16.3-95 48.3-131.7-20.4-60.5 1.9-112.3 4.9-120 58.1-5.2 118.5 41.6 123.2 45.3 33-8.9 70.7-13.6 112.9-13.6 42.4 0 80.2 4.9 113.5 13.9 11.3-8.6 67.3-48.8 121.3-43.9 2.9 7.7 24.7 58.3 5.5 118 32.4 36.8 48.9 82.7 48.9 132.3 0 102.2-59 188.1-200 212.9a127.5 127.5 0 0138.1 91v112.5c.8 9 0 17.9 15 17.9 177.1-59.7 304.6-227 304.6-424.1 0-247.2-200.4-447.3-447.5-447.3z"></path></svg></span></a><a
                        title="Ant Design" target="_blank" href="https://ant.design">Ant Design</a></div>
                <div class="ant-pro-global-footer-copyright">Copyright <span role="img" aria-label="copyright"
                                                                             class="anticon anticon-copyright"><svg
                            viewBox="64 64 896 896" focusable="false" class="" data-icon="copyright" width="1em"
                            height="1em" fill="currentColor" aria-hidden="true"><path
                                d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448 448-200.6 448-448S759.4 64 512 64zm0 820c-205.4 0-372-166.6-372-372s166.6-372 372-372 372 166.6 372 372-166.6 372-372 372zm5.6-532.7c53 0 89 33.8 93 83.4.3 4.2 3.8 7.4 8 7.4h56.7c2.6 0 4.7-2.1 4.7-4.7 0-86.7-68.4-147.4-162.7-147.4C407.4 290 344 364.2 344 486.8v52.3C344 660.8 407.4 734 517.3 734c94 0 162.7-58.8 162.7-141.4 0-2.6-2.1-4.7-4.7-4.7h-56.8c-4.2 0-7.6 3.2-8 7.3-4.2 46.1-40.1 77.8-93 77.8-65.3 0-102.1-47.9-102.1-133.6v-52.6c.1-87 37-135.5 102.2-135.5z"></path></svg></span>
                    2019 蚂蚁金服体验技术部出品
                </div>
            </footer>
        </footer>
    </div>
</div>
<script src="//at.alicdn.com/t/font_1710778_un2mbxlyxx.js"></script>
</body>
</html>
