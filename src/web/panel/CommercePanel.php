<?php


namespace craft\commerce\web\panel;

use yii\debug\Panel;

class CommercePanel extends Panel
{
    /**
     * @inheritDoc
     */
    public function getUrl($additionalParams = null)
    {
        return parent::getUrl($additionalParams); // TODO: Change the autogenerated stub
    }

    /**
     * @inheritDoc
     */
    public function getName()
    {
        return 'Commerce';
    }

    /**
     * @inheritDoc
     */
    public function getSummary()
    {
        return '<div class="yii-debug-toolbar__block"><a href="#47" title="">Cart <span class="yii-debug-toolbar__label yii-debug-toolbar__label_success">3</span></a></div>';
    }

    /**
     * @inheritDoc
     */
    public function getDetail()
    {
        return 'Detail data';
    }
}
