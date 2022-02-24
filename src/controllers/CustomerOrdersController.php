<?php
/**
 * @link https://craftcms.com/
 * @copyright Copyright (c) Pixel & Tonic, Inc.
 * @license https://craftcms.github.io/license/
 */

namespace craft\commerce\controllers;

use craft\commerce\Plugin;
use yii\web\BadRequestHttpException;
use yii\web\Response;

/**
 * Class Customer Orders Controller
 *
 * @author Pixel & Tonic, Inc. <support@pixelandtonic.com>
 * @since 3.2.7
 */
class CustomerOrdersController extends BaseFrontEndController
{
    /**
     * Get customer's orders
     *
     * @throws BadRequestHttpException
     */
    public function actionGetOrders(): Response
    {
        $this->requireAcceptsJson();

        $customer = Plugin::getInstance()->getCustomers()->getCustomer();
        $orders = $customer->getOrders();

        return $this->asSuccess(data: ['orders' => $orders]);
    }
}