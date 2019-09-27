# TYPO3 extension patchlayout

## What is does

One patch for the TYPO3 Backend Layout is inside of this extension.

TYPO3 allows to add new item values of the colPos field in the table tt_content.
By another extension can add its own column values to the selectable columns of the content element. Only be this means it can be avoided that this content element is shown in the front end by TYPO3 means. A special column value can be used by a third party extension to do its own content rendering for it.

Maybe there is another way to avoid that TYPO3 renders a content element. It would be fine if you would tell me how.
However this is a proven way which has been working until TYPO3 6.2 by simply adding this TCA override.



### example:

```
    // Add the new colPos to the array, only if the ID does not exist...
    $colPosOMyExtension = 1212;
    $GLOBALS['TCA']['tt_content']['columns']['colPos']['config']['items'][$colPosOMyExtension] = [
            'LLL:EXT:myextension/locallang_db.xml:tt_content.colPosOfMyExtension',
            $colPosOMyExtension
    ];
```

This will add the corresponding text for the column 1212 of extension 'myextension' to the column select box of the TYPO3 content element.


```
        'type' => 'select',
        'renderType' => 'selectSingle',
```


