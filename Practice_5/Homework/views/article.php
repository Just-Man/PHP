<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 09.02.16
 * Time: 13:31
 */

if ($key = getValue($_GET, 'key')) {
    $data = $article;
} else {
    $data = [];
}

$printCategory = [];

print '<section id="articleView">
        <ul class="nav-sidebar list-group">';
foreach ($data as $id => $item) {
    if ($key == $id) {
        $printCategory[$id] = $item;
    } else {
        $printCategory[$id] = [];
    }
}

$reversed = true;
printData($printCategory, $category, $reversed);
print '</ul>
</section>';