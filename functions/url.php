<?php
function url($path) {
    echo WEBPATH.$path;
}

function redir($path) {
    $path = WEBPATH.$path;
    header("Location: $path");
}