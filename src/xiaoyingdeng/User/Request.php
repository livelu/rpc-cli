<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: user.proto

namespace User;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>user.Request</code>
 */
class Request extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 userid = 1;</code>
     */
    private $userid = 0;
    /**
     * Generated from protobuf field <code>string openid = 2;</code>
     */
    private $openid = '';
    /**
     * Generated from protobuf field <code>string phone = 3;</code>
     */
    private $phone = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $userid
     *     @type string $openid
     *     @type string $phone
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\User::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 userid = 1;</code>
     * @return int|string
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * Generated from protobuf field <code>int64 userid = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setUserid($var)
    {
        GPBUtil::checkInt64($var);
        $this->userid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string openid = 2;</code>
     * @return string
     */
    public function getOpenid()
    {
        return $this->openid;
    }

    /**
     * Generated from protobuf field <code>string openid = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setOpenid($var)
    {
        GPBUtil::checkString($var, True);
        $this->openid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string phone = 3;</code>
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Generated from protobuf field <code>string phone = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPhone($var)
    {
        GPBUtil::checkString($var, True);
        $this->phone = $var;

        return $this;
    }

}

