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
?>