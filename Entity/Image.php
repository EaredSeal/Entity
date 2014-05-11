<?php
namespace EaredSeal\Entity;

/**
 * @author Lukas Kraus
 */
class Image
{
	/** @var string */
	private $fileName = NULL;

	private static $dirUpload = "";
	private static $dirWeb = "/image/";

	public function __construct($fileName = NULL)
	{
		$this->fileName = $fileName;
	}

	/**
	 * init global config
	 * @param string $dirUpload
	 * @param string $dirWeb
	 */
	public static function setInit($dirUpload, $dirWeb)
	{
		self::$dirUpload = $dirUpload;
		self::$dirWeb = $dirWeb;
	}

	/**
	 * original file name
	 * @return string
	 */
	public function getFileName()
	{
		return $this->fileName;
	}

	/**
	 * URL web path
	 * @return string
	 */
	public function getUrl()
	{
		return $this->fileName ? self::$dirWeb . $this->fileName : "";
	}

	/**
	 * local file path
	 * @return string
	 */
	public function getFile()
	{
		return $this->fileName ? self::$dirUpload . $this->fileName : "";
	}

	public function __toString()
	{
		return $this->getUrl();
	}
}