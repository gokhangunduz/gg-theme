<?php
function getBlogTitle()
{
    $words = explode(" ", get_bloginfo("name"));
    $spans = [];

    foreach ($words as $i => $word) {
        $class = $i === 0 ? "font-bold" : "font-extralight";
        $spans[] = "<span class=\"$class\">$word</span>";
    }

    echo implode(" ", $spans);
}

function excerptMoreSetter() {
    return '...';
}

function paginationSetter($output) {
    $output = preg_replace('/<h2[^>]*>.*?<\/h2>/', '', $output);
    $output = preg_replace('/<div class="nav-links"[^>]*>/', '', $output);
    $output = str_replace('</div>', '', $output);

    return $output;
}
?>