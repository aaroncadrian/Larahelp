<?php

function css($path)
{
    return str_replace_first('?', $path, config('larahelp.css.template'));
}

function js($path)
{
    return str_replace_first('?', $path, config('larahelp.js.template'));
}

function mix_asset($path, $secure = null)
{
    return asset(mix($path), $secure);
}

function mix_asset_css($path, $secure = null)
{
    return css(mix_asset($path, $secure));
}

function mix_asset_js($path, $secure = null)
{
    return js(mix_asset($path, $secure));
}

function css_asset($path, $secure = null)
{
    return css(asset($path, $secure));
}

function js_asset($path, $secure = null)
{
    return js(asset($path, $secure));
}

