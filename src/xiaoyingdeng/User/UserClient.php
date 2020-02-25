<?php
// GENERATED CODE -- DO NOT EDIT!

namespace User;

/**
 */
class UserClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \User\Request $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function UserInfo(\User\Request $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/user.User/UserInfo',
        $argument,
        ['\User\Response', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \User\Request $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CreateYzUser(\User\Request $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/user.User/CreateYzUser',
        $argument,
        ['\User\Response', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \User\Request $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetWeixinOpenid(\User\Request $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/user.User/GetWeixinOpenid',
        $argument,
        ['\User\Response', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \User\Request $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetWeixinFollower(\User\Request $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/user.User/GetWeixinFollower',
        $argument,
        ['\User\Response', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \User\Request $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetUserBasic(\User\Request $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/user.User/GetUserBasic',
        $argument,
        ['\User\Response', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \User\Request $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetYouzanOpenid(\User\Request $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/user.User/GetYouzanOpenid',
        $argument,
        ['\User\Response', 'decode'],
        $metadata, $options);
    }

}
