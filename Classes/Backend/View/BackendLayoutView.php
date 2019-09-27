<?php
namespace Bugfix\Patchlayout\Backend\View;


/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

use TYPO3\CMS\Core\Utility\ArrayUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;

/**
 * Backend layout for CMS
 */
class BackendLayoutView extends \TYPO3\CMS\Backend\View\BackendLayoutView
{
    /**
     * Adds items to a colpos list
     *
     * @param int $pageId
     * @param array $items
     * @return array
     */
    protected function addColPosListLayoutItems ($pageId, $items)
    {
        $layout = $this->getSelectedBackendLayout($pageId);
        if ($layout && $layout['__items']) {
            if (is_array($layout['__items'])) {
                $combinedItems = array();
                foreach ($items as $item) {
                    foreach ($layout['__items'] as $layoutItem) {
                        if ($layoutItem['1'] == $item['1']) {
                            $combinedItems[] = $layoutItem;
                            continue 2;
                        }
                    }
                    $combinedItems[] = $item;
                }
                $items = $combinedItems;
            }
        }
        return $items;
    }
}


