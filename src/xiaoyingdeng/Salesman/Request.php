<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: salesman.proto

namespace Salesman;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>salesman.Request</code>
 */
class Request extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string item_alias = 1;</code>
     */
    private $item_alias = '';
    /**
     * Generated from protobuf field <code>int64 item_id = 2;</code>
     */
    private $item_id = 0;
    /**
     * Generated from protobuf field <code>string mobile = 3;</code>
     */
    private $mobile = '';
    /**
     * Generated from protobuf field <code>int32 fans_type = 4;</code>
     */
    private $fans_type = 0;
    /**
     * Generated from protobuf field <code>int64 fansId = 5;</code>
     */
    private $fansId = 0;
    /**
     * Generated from protobuf field <code>int32 page = 6;</code>
     */
    private $page = 0;
    /**
     * Generated from protobuf field <code>int32 limit = 7;</code>
     */
    private $limit = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $item_alias
     *     @type int|string $item_id
     *     @type string $mobile
     *     @type int $fans_type
     *     @type int|string $fansId
     *     @type int $page
     *     @type int $limit
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Salesman::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string item_alias = 1;</code>
     * @return string
     */
    public function getItemAlias()
    {
        return $this->item_alias;
    }

    /**
     * Generated from protobuf field <code>string item_alias = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setItemAlias($var)
    {
        GPBUtil::checkString($var, True);
        $this->item_alias = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 item_id = 2;</code>
     * @return int|string
     */
    public function getItemId()
    {
        return $this->item_id;
    }

    /**
     * Generated from protobuf field <code>int64 item_id = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setItemId($var)
    {
        GPBUtil::checkInt64($var);
        $this->item_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string mobile = 3;</code>
     * @return string
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Generated from protobuf field <code>string mobile = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setMobile($var)
    {
        GPBUtil::checkString($var, True);
        $this->mobile = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 fans_type = 4;</code>
     * @return int
     */
    public function getFansType()
    {
        return $this->fans_type;
    }

    /**
     * Generated from protobuf field <code>int32 fans_type = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setFansType($var)
    {
        GPBUtil::checkInt32($var);
        $this->fans_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 fansId = 5;</code>
     * @return int|string
     */
    public function getFansId()
    {
        return $this->fansId;
    }

    /**
     * Generated from protobuf field <code>int64 fansId = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setFansId($var)
    {
        GPBUtil::checkInt64($var);
        $this->fansId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 page = 6;</code>
     * @return int
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * Generated from protobuf field <code>int32 page = 6;</code>
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
     * Generated from protobuf field <code>int32 limit = 7;</code>
     * @return int
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * Generated from protobuf field <code>int32 limit = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setLimit($var)
    {
        GPBUtil::checkInt32($var);
        $this->limit = $var;

        return $this;
    }

}

