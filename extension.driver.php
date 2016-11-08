<?php

	Class extension_materie extends Extension{

		public function getSubscribedDelegates(){
			return array(
				array(
					'page'     => '/backend/',
					'delegate' => 'InitaliseAdminPageHead',
					'callback' => 'appendAssets'
				),
			);
		}

	/*-------------------------------------------------------------------------
		Delegates:
	-------------------------------------------------------------------------*/

    public function appendAssets(){
      Administration::instance()->Page->addStylesheetToHead(URL . '/extensions/materie/assets/materie.publish.css');
      Administration::instance()->Page->addScriptToHead(URL . '/extensions/materie/assets/materie.publish.js');
    }

	}
