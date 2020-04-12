<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Vipuser;

/**
 */
class VipuserClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Vipuser\Request $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Login(\Vipuser\Request $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/vipuser.Vipuser/Login',
        $argument,
        ['\Vipuser\Response', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Vipuser\Request $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function UserList(\Vipuser\Request $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/vipuser.Vipuser/UserList',
        $argument,
        ['\Vipuser\Responselist', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Vipuser\Request $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function UserHome(\Vipuser\Request $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/vipuser.Vipuser/UserHome',
        $argument,
        ['\Vipuser\Response', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Vipuser\RequestBrankCard $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function BindBankCard(\Vipuser\RequestBrankCard $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/vipuser.Vipuser/BindBankCard',
        $argument,
        ['\Vipuser\Response', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Vipuser\RequestBrankCard $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function UserBankCard(\Vipuser\RequestBrankCard $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/vipuser.Vipuser/UserBankCard',
        $argument,
        ['\Vipuser\Response', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Vipuser\RequestTakeNotes $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function TakeNotes(\Vipuser\RequestTakeNotes $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/vipuser.Vipuser/TakeNotes',
        $argument,
        ['\Vipuser\Response', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Vipuser\Request $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DyCode(\Vipuser\Request $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/vipuser.Vipuser/DyCode',
        $argument,
        ['\Vipuser\Response', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Vipuser\Request $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CtimeList(\Vipuser\Request $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/vipuser.Vipuser/CtimeList',
        $argument,
        ['\Vipuser\Response', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Vipuser\Request $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function UserIndex(\Vipuser\Request $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/vipuser.Vipuser/UserIndex',
        $argument,
        ['\Vipuser\Response', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Vipuser\RequestTakeNotes $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function TakeMoney(\Vipuser\RequestTakeNotes $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/vipuser.Vipuser/TakeMoney',
        $argument,
        ['\Vipuser\Response', 'decode'],
        $metadata, $options);
    }

}
