<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/documentai/v1/document.proto

namespace Google\Cloud\DocumentAI\V1\Document\Page;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A detected barcode.
 *
 * Generated from protobuf message <code>google.cloud.documentai.v1.Document.Page.DetectedBarcode</code>
 */
class DetectedBarcode extends \Google\Protobuf\Internal\Message
{
    /**
     * [Layout][google.cloud.documentai.v1.Document.Page.Layout] for [DetectedBarcode][google.cloud.documentai.v1.Document.Page.DetectedBarcode].
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.Document.Page.Layout layout = 1;</code>
     */
    private $layout = null;
    /**
     * Detailed barcode information of the [DetectedBarcode][google.cloud.documentai.v1.Document.Page.DetectedBarcode].
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.Barcode barcode = 2;</code>
     */
    private $barcode = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\DocumentAI\V1\Document\Page\Layout $layout
     *           [Layout][google.cloud.documentai.v1.Document.Page.Layout] for [DetectedBarcode][google.cloud.documentai.v1.Document.Page.DetectedBarcode].
     *     @type \Google\Cloud\DocumentAI\V1\Barcode $barcode
     *           Detailed barcode information of the [DetectedBarcode][google.cloud.documentai.v1.Document.Page.DetectedBarcode].
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Documentai\V1\Document::initOnce();
        parent::__construct($data);
    }

    /**
     * [Layout][google.cloud.documentai.v1.Document.Page.Layout] for [DetectedBarcode][google.cloud.documentai.v1.Document.Page.DetectedBarcode].
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.Document.Page.Layout layout = 1;</code>
     * @return \Google\Cloud\DocumentAI\V1\Document\Page\Layout|null
     */
    public function getLayout()
    {
        return $this->layout;
    }

    public function hasLayout()
    {
        return isset($this->layout);
    }

    public function clearLayout()
    {
        unset($this->layout);
    }

    /**
     * [Layout][google.cloud.documentai.v1.Document.Page.Layout] for [DetectedBarcode][google.cloud.documentai.v1.Document.Page.DetectedBarcode].
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.Document.Page.Layout layout = 1;</code>
     * @param \Google\Cloud\DocumentAI\V1\Document\Page\Layout $var
     * @return $this
     */
    public function setLayout($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DocumentAI\V1\Document\Page\Layout::class);
        $this->layout = $var;

        return $this;
    }

    /**
     * Detailed barcode information of the [DetectedBarcode][google.cloud.documentai.v1.Document.Page.DetectedBarcode].
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.Barcode barcode = 2;</code>
     * @return \Google\Cloud\DocumentAI\V1\Barcode|null
     */
    public function getBarcode()
    {
        return $this->barcode;
    }

    public function hasBarcode()
    {
        return isset($this->barcode);
    }

    public function clearBarcode()
    {
        unset($this->barcode);
    }

    /**
     * Detailed barcode information of the [DetectedBarcode][google.cloud.documentai.v1.Document.Page.DetectedBarcode].
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.Barcode barcode = 2;</code>
     * @param \Google\Cloud\DocumentAI\V1\Barcode $var
     * @return $this
     */
    public function setBarcode($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DocumentAI\V1\Barcode::class);
        $this->barcode = $var;

        return $this;
    }

}

