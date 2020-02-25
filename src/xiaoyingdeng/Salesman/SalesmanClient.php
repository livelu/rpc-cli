<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Salesman;

/**
 */
class SalesmanClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Salesman\Request $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SalesmanItemShareGet(\Salesman\Request $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salesman.Salesman/SalesmanItemShareGet',
        $argument,
        ['\Salesman\Response', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Salesman\Request $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SalesmanAccountAdd(\Salesman\Request $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salesman.Salesman/SalesmanAccountAdd',
        $argument,
        ['\Salesman\Response', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Salesman\Request $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SalesmanAccountGet(\Salesman\Request $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salesman.Salesman/SalesmanAccountGet',
        $argument,
        ['\Salesman\Response', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Salesman\Request $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SalesmanAccountsGet(\Salesman\Request $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/salesman.Salesman/SalesmanAccountsGet',
        $argument,
        ['\Salesman\Response', 'decode'],
        $metadata, $options);
    }

}
