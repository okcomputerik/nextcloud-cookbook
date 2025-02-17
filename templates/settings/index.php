<div id="app-settings">
    <div id="app-settings-header">
        <button class="settings-button" data-apps-slide-toggle="#app-settings-content"><?php p($l->t('Settings')); ?></button>
    </div>
    <div id="app-settings-content">
        <fieldset class="settings-fieldset">
            <ul class="settings-fieldset-interior">
                <li class="settings-fieldset-interior-item">
                    <button class="button icon-history" id="reindex-recipes"><?php p($l->t('Rescan library')); ?></button>
                </li>
                <li class="settings-fieldset-interior-item">
                    <label class="settings-input"><?php p($l->t('Recipe folder')); ?></label>
                    <input id="recipe-folder" type="text" class="input settings-input" value="<?php echo $_['folder']; ?>" placeholder="<?php p($l->t('Please pick a folder')); ?>">
                </li>
            </ul>
        </fieldset>
    </div>
</div>
