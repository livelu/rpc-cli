<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Customer;

/**
 */
class CustomerClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Customer\Request $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function UserList(\Customer\Request $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/customer.Customer/UserList',
        $argument,
        ['\Customer\Response', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Customer\Request $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function UserSearch(\Customer\Request $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/customer.Customer/UserSearch',
        $argument,
        ['\Customer\Response', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Customer\Request $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetCustomerInfo(\Customer\Request $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/customer.Customer/GetCustomerInfo',
        $argument,
        ['\Customer\Response', 'decode'],
        $metadata, $options);
    }

}
