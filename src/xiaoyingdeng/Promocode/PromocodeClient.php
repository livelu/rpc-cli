<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Promocode;

/**
 */
class PromocodeClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Promocode\Request $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function UmpPromocodeAdd(\Promocode\Request $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/promocode.Promocode/UmpPromocodeAdd',
        $argument,
        ['\Promocode\Response', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Promocode\Request $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function UmpCouponTake(\Promocode\Request $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/promocode.Promocode/UmpCouponTake',
        $argument,
        ['\Promocode\Response', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Promocode\Request $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CouponDetailGet(\Promocode\Request $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/promocode.Promocode/CouponDetailGet',
        $argument,
        ['\Promocode\Response', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Promocode\Request $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CouponSearch(\Promocode\Request $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/promocode.Promocode/CouponSearch',
        $argument,
        ['\Promocode\Response', 'decode'],
        $metadata, $options);
    }

}
