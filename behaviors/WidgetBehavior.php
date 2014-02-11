<?php
/**
 * WidgetBehavior class file.
 * @author Christoffer Niska <christoffer.niska@gmail.com>
 * @copyright Copyright &copy; Christoffer Niska 2013-
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 * @package crisu83.yii-extension.behaviors
 */

/**
 * Extension behavior for widgets.
 * @property CWidget $owner
 */
class WidgetBehavior extends ComponentBehavior
{
    /**
     * Returns the widget id and copies it to HTML attributes or vice versa.
     * @param string $id the widget id.
     * @return string the widget id.
     */
    public function resolveId($id = null)
    {
        if ($id === null) {
            $id = $this->owner->getId();
        }
        if (isset($this->owner->htmlOptions['id'])) {
            $id = $this->owner->htmlOptions['id'];
        } else {
            $this->owner->htmlOptions['id'] = $id;
        }
        return $id;
    }
}
