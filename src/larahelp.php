<?php

function mix_asset($path, $secure = null)
{
    return asset(mix($path), $secure);
}

function mix_asset_script($path, $secure = null)
{
    return view('larahelp::mix_asset_script', [
        'path' => $path,
        'secure' => $secure,
    ]);
}

function mix_asset_stylesheet($path, $secure = null)
{
    return view('larahelp::mix_asset_script', [
        'path' => $path,
        'secure' => $secure,
    ]);
}

function stylesheet($path)
{
    return view('larahelp::stylesheet', [
        'path' => $path,
    ]);
}

function script($path)
{
    return view('larahelp::script', [
        'path' => $path,
    ]);
}

function load_js($path)
{
    return script($path);
}

function load_css($path)
{
    return stylesheet($path);
}