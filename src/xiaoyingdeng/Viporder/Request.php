<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: viporder.proto

namespace Viporder;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>viporder.Request</code>
 */
class Request extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string from_buyer_mobile = 1;</code>
     */
    private $from_buyer_mobile = '';
    /**
     * Generated from protobuf field <code>string order_no = 2;</code>
     */
    private $order_no = '';
    /**
     * Generated from protobuf field <code>int64 created_at = 3;</code>
     */
    private $created_at = 0;
    /**
     * Generated from protobuf field <code>int32 isok = 4;</code>
     */
    private $isok = 0;
    /**
     * Generated from protobuf field <code>int32 page = 5;</code>
     */
    private $page = 0;
    /**
     * Generated from protobuf field <code>int32 page_size = 6;</code>
     */
    private $page_size = 0;
    /**
     * Generated from protobuf field <code>string phone = 7;</code>
     */
    private $phone = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $from_buyer_mobile
     *     @type string $order_no
     *     @type int|string $created_at
     *     @type int $isok
     *     @type int $page
     *     @type int $page_size
     *     @type string $phone
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Viporder::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string from_buyer_mobile = 1;</code>
     * @return string
     */
    public function getFromBuyerMobile()
    {
        return $this->from_buyer_mobile;
    }

    /**
     * Generated from protobuf field <code>string from_buyer_mobile = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setFromBuyerMobile($var)
    {
        GPBUtil::checkString($var, True);
        $this->from_buyer_mobile = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string order_no = 2;</code>
     * @return string
     */
    public function getOrderNo()
    {
        return $this->order_no;
    }

    /**
     * Generated from protobuf field <code>string order_no = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setOrderNo($var)
    {
        GPBUtil::checkString($var, True);
        $this->order_no = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 created_at = 3;</code>
     * @return int|string
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Generated from protobuf field <code>int64 created_at = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCreatedAt($var)
    {
        GPBUtil::checkInt64($var);
        $this->created_at = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 isok = 4;</code>
     * @return int
     */
    public function getIsok()
    {
        return $this->isok;
    }

    /**
     * Generated from protobuf field <code>int32 isok = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setIsok($var)
    {
        GPBUtil::checkInt32($var);
        $this->isok = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 page = 5;</code>
     * @return int
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * Generated from protobuf field <code>int32 page = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setPage($var)
    {
        GPBUtil::checkInt32($var);
        $this->page = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 page_size = 6;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Generated from protobuf field <code>int32 page_size = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string phone = 7;</code>
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Generated from protobuf field <code>string phone = 7;</code>
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

