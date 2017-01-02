<?php

class PagePopupsHooks {
	/**
	 * @param Skin $skin
	 * @param string $text
	 * @return bool
	 */
	public static function onBeforePageDisplay( OutputPage &$out, Skin &$skin ) {
            global $wgScriptPath;

            // This damages page style:
//             $out->addScriptFile( "//code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js" );
//             $out->addStyle( "//code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" );
//             $out->addModules( 'jquery' ); // loaded automatically
//             $out->addModules( array('jquery.ui.dialog', 'ext.PagePopups.popup') );
            $out->addModules( array('ext.PagePopups.popup') );
//             $out->addScriptFile( "$wgScriptPath/extensions/PagePopups/PagePopups.js" );

            return true; // TODO: needed?
	}
}
