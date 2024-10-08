<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/documentai/v1/document.proto

namespace Google\Cloud\DocumentAI\V1\Document;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Text reference indexing into the
 * [Document.text][google.cloud.documentai.v1.Document.text].
 *
 * Generated from protobuf message <code>google.cloud.documentai.v1.Document.TextAnchor</code>
 */
class TextAnchor extends \Google\Protobuf\Internal\Message
{
    /**
     * The text segments from the
     * [Document.text][google.cloud.documentai.v1.Document.text].
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1.Document.TextAnchor.TextSegment text_segments = 1;</code>
     */
    private $text_segments;
    /**
     * Contains the content of the text span so that users do
     * not have to look it up in the text_segments.  It is always
     * populated for formFields.
     *
     * Generated from protobuf field <code>string content = 2;</code>
     */
    protected $content = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\DocumentAI\V1\Document\TextAnchor\TextSegment>|\Google\Protobuf\Internal\RepeatedField $text_segments
     *           The text segments from the
     *           [Document.text][google.cloud.documentai.v1.Document.text].
     *     @type string $content
     *           Contains the content of the text span so that users do
     *           not have to look it up in the text_segments.  It is always
     *           populated for formFields.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Documentai\V1\Document::initOnce();
        parent::__construct($data);
    }

    /**
     * The text segments from the
     * [Document.text][google.cloud.documentai.v1.Document.text].
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1.Document.TextAnchor.TextSegment text_segments = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTextSegments()
    {
        return $this->text_segments;
    }

    /**
     * The text segments from the
     * [Document.text][google.cloud.documentai.v1.Document.text].
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1.Document.TextAnchor.TextSegment text_segments = 1;</code>
     * @param array<\Google\Cloud\DocumentAI\V1\Document\TextAnchor\TextSegment>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTextSegments($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DocumentAI\V1\Document\TextAnchor\TextSegment::class);
        $this->text_segments = $arr;

        return $this;
    }

    /**
     * Contains the content of the text span so that users do
     * not have to look it up in the text_segments.  It is always
     * populated for formFields.
     *
     * Generated from protobuf field <code>string content = 2;</code>
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Contains the content of the text span so that users do
     * not have to look it up in the text_segments.  It is always
     * populated for formFields.
     *
     * Generated from protobuf field <code>string content = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setContent($var)
    {
        GPBUtil::checkString($var, True);
        $this->content = $var;

        return $this;
    }

}


