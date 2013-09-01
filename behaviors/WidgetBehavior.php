<?php
/**
 * WidgetBehavior class file.
 * @author Christoffer Niska <christoffer.niska@gmail.com>
 * @copyright Copyright &copy; Christoffer Niska 2013-
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 * @package crisu83.yii-extension.behaviors
 */

Yii::import('vendor.crisu83.yii-extension.behaviors.ComponentBehavior');

/**
 * Extension behavior for widgets.
 */
class WidgetBehavior extends ComponentBehavior
{
    /**
     * Copies the id to the widget HTML attributes or vise versa.
     */
    public function copyId()
    {
        if (!isset($this->owner->htmlOptions['id']))
            $this->owner->htmlOptions['id'] = $this->owner->id;
        else
            $this->owner->id = $this->owner->htmlOptions['id'];
    }
}
