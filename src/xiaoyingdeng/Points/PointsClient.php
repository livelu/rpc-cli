<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Points;

/**
 */
class PointsClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Points\Request $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CustomerPointsIncrease(\Points\Request $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/points.Points/CustomerPointsIncrease',
        $argument,
        ['\Points\Response', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Points\Request $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function PointsChangelogSearch(\Points\Request $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/points.Points/PointsChangelogSearch',
        $argument,
        ['\Points\Response', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Points\Request $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CustomerPointsDecrease(\Points\Request $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/points.Points/CustomerPointsDecrease',
        $argument,
        ['\Points\Response', 'decode'],
        $metadata, $options);
    }

}
