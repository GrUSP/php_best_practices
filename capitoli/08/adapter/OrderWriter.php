<?php

class OrderManager {

    protected function getAdapter($order_type)
    {
        return AdapterFactory::create($order_type);
    }

    public function write($order) {
        $repository = $this->getAdapter($order->getType());
        $repository->putContent($order->number.'.xml', $order->toXml());
    }

    public function read($order_number) {
        $repository = $this->getAdapter($order->getType());
        $order = $this->fromXml($repository->getContent($order_number.'.xml'));
        return $order;
    }

    public function remove($order_number) {
        $repository = $this->getAdapter($order->getType());
        $order = $this->fromXml($repository->getContent($order_number.'.xml'));
        $order->delete();
        
        return $repository->removeFile($order_number.'.xml');
    }
}
