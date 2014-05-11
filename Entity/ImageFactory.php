<?php
namespace EaredSeal\Entity;

/**
 * @author Lukas Kraus
 */
class ImageFactory
{
	public function __construct($dirUpload, $dirWeb)
	{
		Image::setInit($dirUpload, $dirWeb);
	}
}