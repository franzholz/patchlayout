<?php

defined('TYPO3') || die('Access denied.');

call_user_func(function () {

    $GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][TYPO3\CMS\Backend\View\BackendLayoutView::class] = [
        'className' => Bugfix\Patchlayout\Backend\View\BackendLayoutView::class
    ];

});
