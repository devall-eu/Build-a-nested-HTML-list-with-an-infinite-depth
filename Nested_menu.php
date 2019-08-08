<?php
// Your array is $items

$items = array(
    array('id' => '1', 'parent_id' => 0, 'name' => 'Home', 'link' => '/home'),
    array('id' => '2', 'parent_id' => 0, 'name' => 'Blog', 'link' => '/blog'),
    array('id' => '3', 'parent_id' => 2, 'name' => 'Post 1', 'link' => '/blog/post-1'),
    array('id' => '4', 'parent_id' => 2, 'name' => 'Post 2', 'link' => '/blog/post-2'),
    array('id' => '5', 'parent_id' => 0, 'name' => 'Menu ', 'link' => '/menu'),
    array('id' => '6', 'parent_id' => 5, 'name' => 'Submenu 1', 'link' => '/menu/submenu-1'),
    array('id' => '7', 'parent_id' => 6, 'name' => 'Sub-submenu 1', 'link' => '/menu/submenu-1/sub')
);

$menu = array(
    'items' => array(),
    'parents' => array()
);

foreach ($items as $item) {
    $menu['items'][$item['id']] = $item;
    $menu['parents'][$item['parent_id']][] = $item['id'];
}

return substr(buildMenu(0, $menu), 0, -10);

/**
 * @param bool $parent
 * @param $menu
 * @return mixed
 */
function buildMenu($parent, $menu)
{
    $html = "";
    if (isset($menu['parents'][$parent])) {
        foreach ($menu['parents'][$parent] as $itemId) {
            if (!isset($menu['parents'][$itemId])) {
                $html .= '<li><a href="' . $menu['items'][$itemId]['link'] . '">' . $menu['items'][$itemId]['name'] . '</a></li>';
            }
            if (isset($menu['parents'][$itemId])) {
                $html .= '<li><a href="#">' . $menu['items'][$itemId]['name'] . '</a><ul>';
                $html .= buildMenu($itemId, $menu);
            }
        }
        $html .= '</ul></li>';
    }
    return $html;
}