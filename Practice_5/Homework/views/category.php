<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 08.02.16
 * Time: 15:47
 */

if ($key = getValue($_GET, 'key')) {
    $data = $article;
} else {
    $data = [];
}

$printCategory = [];

print '<section>
        <ul class="nav-sidebar list-group">';
foreach ($data as $id => $item) {
    if ($key === $item['category']) {
        $printCategory[$id] = $item;
    } else {
        $printCategory[$id] = [];
    }
}
$reversed = true;
printData($printCategory, $category, $reversed);
print '</ul>
</section>';
