<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configuration and status of a self-managed SSL certificate.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.SslCertificateSelfManagedSslCertificate</code>
 */
class SslCertificateSelfManagedSslCertificate extends \Google\Protobuf\Internal\Message
{
    /**
     * A local certificate file. The certificate must be in PEM format. The certificate chain must be no greater than 5 certs long. The chain must include at least one intermediate cert.
     *
     * Generated from protobuf field <code>string certificate = 73351575;</code>
     */
    private $certificate = '';
    /**
     * A write-only private key in PEM format. Only insert requests will include this field.
     *
     * Generated from protobuf field <code>string private_key = 92895651;</code>
     */
    private $private_key = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $certificate
     *           A local certificate file. The certificate must be in PEM format. The certificate chain must be no greater than 5 certs long. The chain must include at least one intermediate cert.
     *     @type string $private_key
     *           A write-only private key in PEM format. Only insert requests will include this field.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * A local certificate file. The certificate must be in PEM format. The certificate chain must be no greater than 5 certs long. The chain must include at least one intermediate cert.
     *
     * Generated from protobuf field <code>string certificate = 73351575;</code>
     * @return string
     */
    public function getCertificate()
    {
        return $this->certificate;
    }

    /**
     * A local certificate file. The certificate must be in PEM format. The certificate chain must be no greater than 5 certs long. The chain must include at least one intermediate cert.
     *
     * Generated from protobuf field <code>string certificate = 73351575;</code>
     * @param string $var
     * @return $this
     */
    public function setCertificate($var)
    {
        GPBUtil::checkString($var, True);
        $this->certificate = $var;

        return $this;
    }

    /**
     * A write-only private key in PEM format. Only insert requests will include this field.
     *
     * Generated from protobuf field <code>string private_key = 92895651;</code>
     * @return string
     */
    public function getPrivateKey()
    {
        return $this->private_key;
    }

    /**
     * A write-only private key in PEM format. Only insert requests will include this field.
     *
     * Generated from protobuf field <code>string private_key = 92895651;</code>
     * @param string $var
     * @return $this
     */
    public function setPrivateKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->private_key = $var;

        return $this;
    }

}

