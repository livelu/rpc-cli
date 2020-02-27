<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: vipuser.proto

namespace Vipuser;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>vipuser.DataList</code>
 */
class DataList extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 total = 1;</code>
     */
    private $total = 0;
    /**
     * Generated from protobuf field <code>int32 total_page = 2;</code>
     */
    private $total_page = 0;
    /**
     * Generated from protobuf field <code>string data = 4;</code>
     */
    private $data = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $total
     *     @type int $total_page
     *     @type string $data
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Vipuser::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 total = 1;</code>
     * @return int
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Generated from protobuf field <code>int32 total = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setTotal($var)
    {
        GPBUtil::checkInt32($var);
        $this->total = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 total_page = 2;</code>
     * @return int
     */
    public function getTotalPage()
    {
        return $this->total_page;
    }

    /**
     * Generated from protobuf field <code>int32 total_page = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setTotalPage($var)
    {
        GPBUtil::checkInt32($var);
        $this->total_page = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string data = 4;</code>
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Generated from protobuf field <code>string data = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setData($var)
    {
        GPBUtil::checkString($var, True);
        $this->data = $var;

        return $this;
    }

}

