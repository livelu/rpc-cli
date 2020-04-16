<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Viporder;

/**
 */
class ViporderClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Viporder\Request $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function OrderList(\Viporder\Request $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/viporder.Viporder/OrderList',
        $argument,
        ['\Viporder\Responselist', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Viporder\Request $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function OrderDetail(\Viporder\Request $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/viporder.Viporder/OrderDetail',
        $argument,
        ['\Viporder\Response', 'decode'],
        $metadata, $options);
    }

}
