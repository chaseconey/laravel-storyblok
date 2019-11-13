<?php


namespace Testcomponents\Storyblok;

use PHP_Typography\Settings as TypographySettings;
use Riclep\Storyblok\Block;
use Riclep\Storyblok\Traits\AppliesTypography;

class Trait2Block extends Block
{
	use AppliesTypography;

	private $applyTypography = ['typography'];

	public function init() {
		$settings = new TypographySettings();
		$settings->set_style_numbers(false);

		$this->setTypographySettings($settings);

		$this->applyTypography();
	}
}
