<?php
if (!defined('TYPO3')) {
    die('Access denied.');
}

// Register for hook to show preview of tt_content element of CType="wstextmediabootstrap" in page module
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/class.tx_cms_layout.php']['tt_content_drawItem']['wstextmediabootstrap']
    = Websight\WsTextmediaBootstrap\Preview\WsTextmediaPreviewRenderer::class;
