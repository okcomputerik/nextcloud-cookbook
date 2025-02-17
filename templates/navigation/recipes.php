<?php foreach($_['recipes'] as $recipe) { ?>
    <li>
        <a href="#<?php echo $recipe['recipe_id']; ?>">
            <img src="<?php echo $recipe['imageURL']; ?>">
            <?php echo $recipe['name']; ?>
        </a>
        <div class="app-navigation-entry-utils">
            <ul>
                <li class="app-navigation-entry-utils-menu-button button-edit">
                    <button class="svg action icon-rename" data-id="<?php echo $recipe['recipe_id']; ?>" title="<?php p($l->t('Edit recipe')); ?>"></button>
                </li>
                <li class="app-navigation-entry-utils-menu-button button-delete">
                    <button class="svg action icon-delete" data-id="<?php echo $recipe['recipe_id']; ?>" title="<?php p($l->t('Delete recipe')); ?>"></button>
                </li>
            </ul>
        </div>
    </li>
<?php } ?>
