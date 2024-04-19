<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/documentai/v1/document_processor_service.proto

namespace Google\Cloud\DocumentAI\V1\TrainProcessorVersionRequest;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Options to control foundation model tuning of the processor.
 *
 * Generated from protobuf message <code>google.cloud.documentai.v1.TrainProcessorVersionRequest.FoundationModelTuningOptions</code>
 */
class FoundationModelTuningOptions extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. The number of steps to run for model tuning. Valid values are between
     * 1 and 400. If not provided, recommended steps will be used.
     *
     * Generated from protobuf field <code>int32 train_steps = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $train_steps = 0;
    /**
     * Optional. The multiplier to apply to the recommended learning rate. Valid values
     * are between 0.1 and 10. If not provided, recommended learning rate will
     * be used.
     *
     * Generated from protobuf field <code>float learning_rate_multiplier = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $learning_rate_multiplier = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $train_steps
     *           Optional. The number of steps to run for model tuning. Valid values are between
     *           1 and 400. If not provided, recommended steps will be used.
     *     @type float $learning_rate_multiplier
     *           Optional. The multiplier to apply to the recommended learning rate. Valid values
     *           are between 0.1 and 10. If not provided, recommended learning rate will
     *           be used.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Documentai\V1\DocumentProcessorService::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. The number of steps to run for model tuning. Valid values are between
     * 1 and 400. If not provided, recommended steps will be used.
     *
     * Generated from protobuf field <code>int32 train_steps = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getTrainSteps()
    {
        return $this->train_steps;
    }

    /**
     * Optional. The number of steps to run for model tuning. Valid values are between
     * 1 and 400. If not provided, recommended steps will be used.
     *
     * Generated from protobuf field <code>int32 train_steps = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setTrainSteps($var)
    {
        GPBUtil::checkInt32($var);
        $this->train_steps = $var;

        return $this;
    }

    /**
     * Optional. The multiplier to apply to the recommended learning rate. Valid values
     * are between 0.1 and 10. If not provided, recommended learning rate will
     * be used.
     *
     * Generated from protobuf field <code>float learning_rate_multiplier = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return float
     */
    public function getLearningRateMultiplier()
    {
        return $this->learning_rate_multiplier;
    }

    /**
     * Optional. The multiplier to apply to the recommended learning rate. Valid values
     * are between 0.1 and 10. If not provided, recommended learning rate will
     * be used.
     *
     * Generated from protobuf field <code>float learning_rate_multiplier = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param float $var
     * @return $this
     */
    public function setLearningRateMultiplier($var)
    {
        GPBUtil::checkFloat($var);
        $this->learning_rate_multiplier = $var;

        return $this;
    }

}

