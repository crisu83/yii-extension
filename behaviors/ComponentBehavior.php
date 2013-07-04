<?php
/**
 * ComponentBehavior class file.
 * @author Christoffer Niska <christoffer.niska@gmail.com>
 * @copyright Copyright &copy; Christoffer Niska 2013-
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 * @package crisu83.yii-extension.behaviors
 */

Yii::import(__DIR__ . '/ExtensionBehavior');

/**
 * Behavior for extensions based on an application component.
 * @property CComponent $owner
 */
class ComponentBehavior extends ExtensionBehavior
{
	private $_path;
	private $_alias;

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
	 * @return string the alias or false if not set.
	 */
	public function getAlias()
	{
		return isset($this->_alias) ? $this->_alias : false;
	}

	/**
	 * Returns the path for the extension.
	 * @return string the path or false if not set.
	 */
	public function getPath()
	{
		return isset($this->_path) ? $this->_path : false;
	}
}