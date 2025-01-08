<?php 
function generateMenu(array $menu) {
    foreach($menu as $item) { ?>
        <li><a href=<?="{$item["link"]}"?>><?="{$item["name"]}" ?></a></li>
<?php }
}
?>