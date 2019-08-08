# Build-a-nested-HTML-list-with-an-infinite-depth
Each item can have a tag, a link to a specific URL, and a possible submenu with its own set of items. The function creates HTML to display the menu as a nested list of items. Suitable for displaying menus, lists and categories.

Display array in nested menu
```
$items = array(
    array('id' => '1', 'parent_id' => 0, 'name' => 'Home', 'link' => '/home'),
    array('id' => '2', 'parent_id' => 0, 'name' => 'Blog', 'link' => '/blog'),
    array('id' => '3', 'parent_id' => 2, 'name' => 'Post 1', 'link' => '/blog/post-1'),
    array('id' => '4', 'parent_id' => 2, 'name' => 'Post 2', 'link' => '/blog/post-2'),
    array('id' => '5', 'parent_id' => 0, 'name' => 'Menu ', 'link' => '/menu'),
    array('id' => '6', 'parent_id' => 5, 'name' => 'Submenu 1', 'link' => '/menu/submenu-1'),
    array('id' => '7', 'parent_id' => 6, 'name' => 'Sub-submenu 1', 'link' => '/menu/submenu-1/sub')
);
```

Visit on page: https://dev-all.eu/blog/build-a-nested-html-list-with-an-infinite-depth
