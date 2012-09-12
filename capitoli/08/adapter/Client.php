<?php

/**
 * La classe OrderRepository è solo di esempio e non è implementata.
 */

$order_manager = new OrderManager();

//...
$order = OrderRepository::fetchOrder();
$order_manager->write($order);

//...
$order_number = OrderRepository::latestOrderByUserId($user_id);
$order = $order_manager->read($order_number);

//...
$orders = OrderRepository::findExpiredOrders();
foreach ($orders as $order)
{
    $order_manager->remove($order->number);
}
