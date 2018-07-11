<?php

$aData = array();
$oDummyData = new TPkgViewRendererSnippetDummyData();
$oDummyData->addDummyDataFromFile('/common/textBlock/textBlockMediumHeadline.dummy.php');
$aData = $oDummyData->getDummyData();

$oDummyData = new TPkgViewRendererSnippetDummyData();
$oDummyData->addDummyDataFromFile('/common/teaser/wide-base.dummy.php');
$aListData = $oDummyData->getDummyData();

$oDummyData = new TPkgViewRendererSnippetDummyData();
$oDummyData->addDummyDataFromFile('/common/userInput/userInputBox.dummy.php');
$aSearchInputData = $oDummyData->getDummyData();

$aData['aManufacturerList'] = array($aListData, $aListData, $aListData, $aListData);
$aData['aSearchInput'] = $aSearchInputData;

$aData['aManufacturerList'][3]['sTitle'] = 'Z';
unset($aData['aLink']);
unset($aData['sImageUrl']);

return $aData;
