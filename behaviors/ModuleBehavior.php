<?php
/**
 * ModuleBehavior class file.
 * @author Christoffer Niska <christoffer.niska@gmail.com>
 * @copyright Copyright &copy; Christoffer Niska 2013-
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 * @package crisu83.yii-extension.behaviors
 */

/**
 * Behavior for extensions based on a module.
 * @property CModule $owner
 */
class ModuleBehavior extends ExtensionBehavior
{
    /**
     * Returns the path alias for the extension.
     * @return string the alias or false if not set.
     */
    public function getAlias()
    {
        return $this->owner->getId();
    }

    /**
     * Returns the path for the extension.
     * @return string the path or false if not set.
     */
    public function getPath()
    {
        return $this->owner->getBasePath();
    }
}