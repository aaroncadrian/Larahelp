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