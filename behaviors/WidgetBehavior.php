<?php
/**
 * WidgetBehavior class file.
 * @author Christoffer Niska <christoffer.niska@gmail.com>
 * @copyright Copyright &copy; Christoffer Niska 2013-
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 * @package crisu83.yii-extension.behaviors
 */

namespace crisu83\yii_extension\behaviors;

/**
 * Extension behavior for widgets.
 */
class WidgetBehavior extends \CBehavior
{
    /**
     * @var boolean indicates whether to republish the widget assets every time.
     */
    public $forceCopyAssets = true;
    /**
     * @var boolean indicates whether the include the minified js and css files.
     */
    public $debug = false;

    /** @var string */
    protected $_assetsUrl;

    /**
     * Returns the name of the correct script file to use.
     * @param string $filename the base file name.
     * @return string the full filename.
     */
    public function resolveScriptVersion($filename)
    {
        list($name, $extension) = str_split($filename, strrpos($filename, '.') + 1);
        return $this->debug ? $name . $extension : $name . 'min.' . $extension;
    }

    /**
     * Returns the assets url for this widget.
     * @return string the url.
     */
    public function getAssetsUrl($path)
    {
        if (isset($this->_assetsUrl))
            return $this->_assetsUrl;
        else
        {
            $assetsUrl = Yii::app()->assetManager->publish($path, false, -1, $this->forceCopyAssets);
            return $this->_assetsUrl = $assetsUrl;
        }
    }
}
