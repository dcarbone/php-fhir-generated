<?php

namespace PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: September 9th, 2018
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2018 Daniel Carbone (daniel.p.carbone@gmail.com)
 * 
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * 
 *        http://www.apache.org/licenses/LICENSE-2.0
 * 
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * 
 *
 * FHIR Copyright Notice:
 *
 *   Copyright (c) 2011+, HL7, Inc.
 *   All rights reserved.
 * 
 *   Redistribution and use in source and binary forms, with or without modification,
 *   are permitted provided that the following conditions are met:
 * 
 *    * Redistributions of source code must retain the above copyright notice, this
 *      list of conditions and the following disclaimer.
 *    * Redistributions in binary form must reproduce the above copyright notice,
 *      this list of conditions and the following disclaimer in the documentation
 *      and/or other materials provided with the distribution.
 *    * Neither the name of HL7 nor the names of its contributors may be used to
 *      endorse or promote products derived from this software without specific
 *      prior written permission.
 * 
 *   THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
 *   ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
 *   WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED.
 *   IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT,
 *   INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT
 *   NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR
 *   PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY,
 *   WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
 *   ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 *   POSSIBILITY OF SUCH DAMAGE.
 * 
 * 
 *   Generated on Sun, Sep 9, 2018 00:54+0000 for FHIR v3.5.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement\FHIRCode;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRCoding;
use PHPFHIRGenerated\FHIRElement\FHIRContactPoint;
use PHPFHIRGenerated\FHIRElement\FHIREndpointStatus;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRPeriod;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRElement\FHIRUrl;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * The technical details of an endpoint that can be used for electronic services, such as for web services providing XDS.b or a REST endpoint for another FHIR server. This may include any security context information.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIREndpoint
 * @package PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIREndpoint extends FHIRDomainResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'Endpoint';

    /**
     * The uri that describes the actual end-point to connect to.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUrl
     */
    public $address = null;

    /**
     * A coded value that represents the technical details of the usage of this endpoint, such as what WSDLs should be used in what way. (e.g. XDS.b/DICOM/cds-hook).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public $connectionType = null;

    /**
     * Contact details for a human to contact about the subscription. The primary use of this for system administrator troubleshooting.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRContactPoint
     */
    public $contact = null;

    /**
     * Additional headers / information to send as part of the notification.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $header = null;

    /**
     * Identifier for the organization that is used to identify the endpoint across multiple disparate systems.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * The organization that manages this endpoint (even if technically another organization is hosting this in the cloud, it is the organization associated with the data).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $managingOrganization = null;

    /**
     * A friendly name that this endpoint can be referred to with.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $name = null;

    /**
     * The mime type to send the payload in - e.g. application/fhir+xml, application/fhir+json. If the mime type is not specified, then the sender could send any content (including no content depending on the connectionType).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public $payloadMimeType = null;

    /**
     * The payload type describes the acceptable content that can be communicated on the endpoint.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $payloadType = null;

    /**
     * The interval during which the endpoint is expected to be operational.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $period = null;

    /**
     * active | suspended | error | off | test.
     * @var \PHPFHIRGenerated\FHIRElement\FHIREndpointStatus
     */
    public $status = null;

    /**
     * FHIREndpoint Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['address'])) {
                $this->setAddress($data['address']);
            }
            if (isset($data['connectionType'])) {
                $this->setConnectionType($data['connectionType']);
            }
            if (isset($data['contact'])) {
                $this->setContact($data['contact']);
            }
            if (isset($data['header'])) {
                $this->setHeader($data['header']);
            }
            if (isset($data['identifier'])) {
                $this->setIdentifier($data['identifier']);
            }
            if (isset($data['managingOrganization'])) {
                $this->setManagingOrganization($data['managingOrganization']);
            }
            if (isset($data['name'])) {
                $this->setName($data['name']);
            }
            if (isset($data['payloadMimeType'])) {
                $this->setPayloadMimeType($data['payloadMimeType']);
            }
            if (isset($data['payloadType'])) {
                $this->setPayloadType($data['payloadType']);
            }
            if (isset($data['period'])) {
                $this->setPeriod($data['period']);
            }
            if (isset($data['status'])) {
                $this->setStatus($data['status']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIREndpoint::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * The uri that describes the actual end-point to connect to.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUrl
     * @return $this
     */
    public function setAddress($address)
    {
        if (null === $address) {
            return $this; 
        }
        if (is_scalar($address)) {
            $address = new FHIRUrl($address);
        }
        if (!($address instanceof FHIRUrl)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIREndpoint::setAddress - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUrl or appropriate scalar value, %s seen.',
                gettype($address)
            ));
        }
        $this->address = $address;
        return $this;
    }

    /**
     * The uri that describes the actual end-point to connect to.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUrl
     */
    public function getAddress()
    {
        return $this->address;
    }


    /**
     * A coded value that represents the technical details of the usage of this endpoint, such as what WSDLs should be used in what way. (e.g. XDS.b/DICOM/cds-hook).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCoding
     * @return $this
     */
    public function setConnectionType(FHIRCoding $connectionType = null)
    {
        if (null === $connectionType) {
            return $this; 
        }
        $this->connectionType = $connectionType;
        return $this;
    }

    /**
     * A coded value that represents the technical details of the usage of this endpoint, such as what WSDLs should be used in what way. (e.g. XDS.b/DICOM/cds-hook).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getConnectionType()
    {
        return $this->connectionType;
    }


    /**
     * Contact details for a human to contact about the subscription. The primary use of this for system administrator troubleshooting.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRContactPoint
     * @return $this
     */
    public function setContact(FHIRContactPoint $contact = null)
    {
        if (null === $contact) {
            return $this; 
        }
        $this->contact = $contact;
        return $this;
    }

    /**
     * Contact details for a human to contact about the subscription. The primary use of this for system administrator troubleshooting.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRContactPoint
     */
    public function getContact()
    {
        return $this->contact;
    }


    /**
     * Additional headers / information to send as part of the notification.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setHeader($header)
    {
        if (null === $header) {
            return $this; 
        }
        if (is_scalar($header)) {
            $header = new FHIRString($header);
        }
        if (!($header instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIREndpoint::setHeader - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($header)
            ));
        }
        $this->header = $header;
        return $this;
    }

    /**
     * Additional headers / information to send as part of the notification.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getHeader()
    {
        return $this->header;
    }


    /**
     * Identifier for the organization that is used to identify the endpoint across multiple disparate systems.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     * @return $this
     */
    public function setIdentifier(FHIRIdentifier $identifier = null)
    {
        if (null === $identifier) {
            return $this; 
        }
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Identifier for the organization that is used to identify the endpoint across multiple disparate systems.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }


    /**
     * The organization that manages this endpoint (even if technically another organization is hosting this in the cloud, it is the organization associated with the data).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setManagingOrganization(FHIRReference $managingOrganization = null)
    {
        if (null === $managingOrganization) {
            return $this; 
        }
        $this->managingOrganization = $managingOrganization;
        return $this;
    }

    /**
     * The organization that manages this endpoint (even if technically another organization is hosting this in the cloud, it is the organization associated with the data).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getManagingOrganization()
    {
        return $this->managingOrganization;
    }


    /**
     * A friendly name that this endpoint can be referred to with.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setName($name)
    {
        if (null === $name) {
            return $this; 
        }
        if (is_scalar($name)) {
            $name = new FHIRString($name);
        }
        if (!($name instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIREndpoint::setName - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($name)
            ));
        }
        $this->name = $name;
        return $this;
    }

    /**
     * A friendly name that this endpoint can be referred to with.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }


    /**
     * The mime type to send the payload in - e.g. application/fhir+xml, application/fhir+json. If the mime type is not specified, then the sender could send any content (including no content depending on the connectionType).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCode
     * @return $this
     */
    public function setPayloadMimeType($payloadMimeType)
    {
        if (null === $payloadMimeType) {
            return $this; 
        }
        if (is_scalar($payloadMimeType)) {
            $payloadMimeType = new FHIRCode($payloadMimeType);
        }
        if (!($payloadMimeType instanceof FHIRCode)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIREndpoint::setPayloadMimeType - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRCode or appropriate scalar value, %s seen.',
                gettype($payloadMimeType)
            ));
        }
        $this->payloadMimeType = $payloadMimeType;
        return $this;
    }

    /**
     * The mime type to send the payload in - e.g. application/fhir+xml, application/fhir+json. If the mime type is not specified, then the sender could send any content (including no content depending on the connectionType).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getPayloadMimeType()
    {
        return $this->payloadMimeType;
    }


    /**
     * The payload type describes the acceptable content that can be communicated on the endpoint.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setPayloadType(FHIRCodeableConcept $payloadType = null)
    {
        if (null === $payloadType) {
            return $this; 
        }
        $this->payloadType = $payloadType;
        return $this;
    }

    /**
     * The payload type describes the acceptable content that can be communicated on the endpoint.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getPayloadType()
    {
        return $this->payloadType;
    }


    /**
     * The interval during which the endpoint is expected to be operational.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     * @return $this
     */
    public function setPeriod(FHIRPeriod $period = null)
    {
        if (null === $period) {
            return $this; 
        }
        $this->period = $period;
        return $this;
    }

    /**
     * The interval during which the endpoint is expected to be operational.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getPeriod()
    {
        return $this->period;
    }


    /**
     * active | suspended | error | off | test.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIREndpointStatus
     * @return $this
     */
    public function setStatus($status)
    {
        if (null === $status) {
            return $this; 
        }
        if (is_scalar($status)) {
            $status = new FHIREndpointStatus($status);
        }
        if (!($status instanceof FHIREndpointStatus)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIREndpoint::setStatus - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIREndpointStatus or appropriate scalar value, %s seen.',
                gettype($status)
            ));
        }
        $this->status = $status;
        return $this;
    }

    /**
     * active | suspended | error | off | test.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIREndpointStatus
     */
    public function getStatus()
    {
        return $this->status;
    }


    /**
     * @return string
     */
    public function __toString()
    {
        return (string)self::FHIR_TYPE_NAME;
    }

    /**
     * @return mixed
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        $a['resourceType'] = self::FHIR_TYPE_NAME;
        if (null !== ($v = $this->getAddress())) {
            $a['address'] = $v;
        }
        if (null !== ($v = $this->getConnectionType())) {
            $a['connectionType'] = $v;
        }
        if (null !== ($v = $this->getContact())) {
            $a['contact'] = $v;
        }
        if (null !== ($v = $this->getHeader())) {
            $a['header'] = $v;
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a['identifier'] = $v;
        }
        if (null !== ($v = $this->getManagingOrganization())) {
            $a['managingOrganization'] = $v;
        }
        if (null !== ($v = $this->getName())) {
            $a['name'] = $v;
        }
        if (null !== ($v = $this->getPayloadMimeType())) {
            $a['payloadMimeType'] = $v;
        }
        if (null !== ($v = $this->getPayloadType())) {
            $a['payloadType'] = $v;
        }
        if (null !== ($v = $this->getPeriod())) {
            $a['period'] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a['status'] = $v;
        }
        return $a;
    }

    /**
     * @param bool $returnSXE
     * @param null|\SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, \SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<Endpoint xmlns="http://hl7.org/fhir"></Endpoint>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}