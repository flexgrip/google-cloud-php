<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\NodeTemplate;

use UnexpectedValueException;

/**
 * [Output Only] The status of the node template. One of the following values: CREATING, READY, and DELETING.
 *
 * Protobuf type <code>google.cloud.compute.v1.NodeTemplate.Status</code>
 */
class Status
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_STATUS = 0;</code>
     */
    const UNDEFINED_STATUS = 0;
    /**
     * Generated from protobuf enum <code>CREATING = 187129529;</code>
     */
    const CREATING = 187129529;
    /**
     * Generated from protobuf enum <code>DELETING = 260166568;</code>
     */
    const DELETING = 260166568;
    /**
     * Generated from protobuf enum <code>INVALID = 261848535;</code>
     */
    const INVALID = 261848535;
    /**
     * Generated from protobuf enum <code>READY = 77848963;</code>
     */
    const READY = 77848963;

    private static $valueToName = [
        self::UNDEFINED_STATUS => 'UNDEFINED_STATUS',
        self::CREATING => 'CREATING',
        self::DELETING => 'DELETING',
        self::INVALID => 'INVALID',
        self::READY => 'READY',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}


