<?php

$installer = $this;

$installer->startSetup();

$installer->run("
ALTER TABLE  `{$installer->getTable('revslideshow_slideshow')}` ADD  `slide_content` text;
");

$installer->endSetup();