<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: vipuser.proto

namespace Vipuser;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>vipuser.Responselist</code>
 */
class Responselist extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 code = 1;</code>
     */
    private $code = 0;
    /**
     * Generated from protobuf field <code>string msg = 2;</code>
     */
    private $msg = '';
    /**
     * Generated from protobuf field <code>.vipuser.DataList data = 3;</code>
     */
    private $data = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $code
     *     @type string $msg
     *     @type \Vipuser\DataList $data
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Vipuser::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 code = 1;</code>
     * @return int
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Generated from protobuf field <code>int32 code = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setCode($var)
    {
        GPBUtil::checkInt32($var);
        $this->code = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string msg = 2;</code>
     * @return string
     */
    public function getMsg()
    {
        return $this->msg;
    }

    /**
     * Generated from protobuf field <code>string msg = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setMsg($var)
    {
        GPBUtil::checkString($var, True);
        $this->msg = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.vipuser.DataList data = 3;</code>
     * @return \Vipuser\DataList
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Generated from protobuf field <code>.vipuser.DataList data = 3;</code>
     * @param \Vipuser\DataList $var
     * @return $this
     */
    public function setData($var)
    {
        GPBUtil::checkMessage($var, \Vipuser\DataList::class);
        $this->data = $var;

        return $this;
    }

}
