<?php
/**
 * C83ExtensionBehavior class file.
 * @author Christoffer Niska <christoffer.niska@gmail.com>
 * @copyright Copyright &copy; Christoffer Niska 2013-
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 * @package vendor.crisu83.yii-extension
 */

/**
 * Extension behavior for components.
 */
class C83ExtensionBehavior extends CBehavior
{
	private $_assetsUrl;
	private $_path;
	private $_alias;

	/**
	 * Imports the a class or directory.
	 * The path alias is automatically prepended if applicable.
	 * @param string $alias path alias to be imported.
	 * @param boolean $forceInclude whether to include the class file immediately.
	 * @return string the class name or the directory that this alias refers to.
	 * @throws CException if the alias is invalid
	 */
	public function import($alias, $forceInclude = false)
	{
		if ($this->_alias !== null)
			$alias = $this->_alias . '.' . $alias;
		return Yii::import($alias, $forceInclude);
	}

	/**
	 * Creates a path alias for the extension.
	 * @param string $alias path alias to be imported.
	 * @param string $path path to the extension.
	 */
	public function createPathAlias($alias, $path)
	{
		$this->_alias = $alias;
		$this->_path = $path;
		Yii::setPathOfAlias($alias, $path);
	}

	/**
	 * Returns the path alias for the extension.
	 * @return string the alias.
	 */
	public function getAlias()
	{
		return $this->_alias;
	}

	/**
	 * Returns the assets url for the extension.
	 * @param string $path assets path.
	 * @param boolean $forceCopy whether we should copy the asset file or directory even if it is already
	 * published before.
	 * @return string the url.
	 */
	public function getAssetsUrl($path, $forceCopy = false)
	{
		if (isset($this->_assetsUrl))
			return $this->_assetsUrl;
		else
		{
			if (!Yii::app()->hasComponent('assetManager'))
				return false;
			/* @var CAssetManager $assetManager */
			$assetManager = Yii::app()->getComponent('assetManager');
			if ($this->_path !== null)
				$path = $this->_path . DIRECTORY_SEPARATOR . $path;
			$assetsUrl = $assetManager->publish($path, false, -1, $forceCopy);
			return $this->_assetsUrl = $assetsUrl;
		}
	}
}
