<?php namespace PHPFHIRGenerated\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 26th, 2017
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2017 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 *   Generated on Tue, Dec 6, 2016 12:22+1100 for FHIR v1.8.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * The technical details of an endpoint that can be used for electronic services, such as for web services providing XDS.b or a REST endpoint for another FHIR server. This may include any security context information.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIREndpoint extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * Identifier for the organization that is used to identify the endpoint across multiple disparate systems.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * active | suspended | error | off | test.
     * @var \PHPFHIRGenerated\FHIRElement\FHIREndpointStatus
     */
    public $status = null;

    /**
     * A friendly name that this endpoint can be referred to with.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $name = null;

    /**
     * The organization that manages this endpoint (even if technically another organisation is hosting this in the cloud, it is the organisation associated with the data).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $managingOrganization = null;

    /**
     * Contact details for a human to contact about the subscription. The primary use of this for system administrator troubleshooting.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRContactPoint[]
     */
    public $contact = array();

    /**
     * The interval during which the endpoint is expected to be operational.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $period = null;

    /**
     * A coded value that represents the technical details of the usage of this endpoint, such as what WSDLs should be used in what way. (e.g. XDS.b/DICOM/cds-hook).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public $connectionType = null;

    /**
     * The payload type describes the acceptable content that can be communicated on the endpoint.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $payloadType = array();

    /**
     * The mime type to send the payload in - e.g. application/fhir+xml, application/fhir+json. If the mime type is not specified, then the sender could send any content (including no content depending on the connectionType).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode[]
     */
    public $payloadMimeType = array();

    /**
     * The uri that describes the actual end-point to send messages to.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $address = null;

    /**
     * Additional headers / information to send as part of the notification.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    public $header = array();

    /**
     * The public part of the 'keys' allocated to an Organization by an accredited body to support secure exchange of data over the internet. To be provided by the Organization, where available.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $publicKey = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'Endpoint';

    /**
     * Identifier for the organization that is used to identify the endpoint across multiple disparate systems.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Identifier for the organization that is used to identify the endpoint across multiple disparate systems.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * active | suspended | error | off | test.
     * @return \PHPFHIRGenerated\FHIRElement\FHIREndpointStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * active | suspended | error | off | test.
     * @param \PHPFHIRGenerated\FHIRElement\FHIREndpointStatus $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * A friendly name that this endpoint can be referred to with.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * A friendly name that this endpoint can be referred to with.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * The organization that manages this endpoint (even if technically another organisation is hosting this in the cloud, it is the organisation associated with the data).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getManagingOrganization()
    {
        return $this->managingOrganization;
    }

    /**
     * The organization that manages this endpoint (even if technically another organisation is hosting this in the cloud, it is the organisation associated with the data).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $managingOrganization
     * @return $this
     */
    public function setManagingOrganization($managingOrganization)
    {
        $this->managingOrganization = $managingOrganization;
        return $this;
    }

    /**
     * Contact details for a human to contact about the subscription. The primary use of this for system administrator troubleshooting.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRContactPoint[]
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Contact details for a human to contact about the subscription. The primary use of this for system administrator troubleshooting.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRContactPoint $contact
     * @return $this
     */
    public function addContact($contact)
    {
        $this->contact[] = $contact;
        return $this;
    }

    /**
     * The interval during which the endpoint is expected to be operational.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * The interval during which the endpoint is expected to be operational.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $period
     * @return $this
     */
    public function setPeriod($period)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * A coded value that represents the technical details of the usage of this endpoint, such as what WSDLs should be used in what way. (e.g. XDS.b/DICOM/cds-hook).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getConnectionType()
    {
        return $this->connectionType;
    }

    /**
     * A coded value that represents the technical details of the usage of this endpoint, such as what WSDLs should be used in what way. (e.g. XDS.b/DICOM/cds-hook).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCoding $connectionType
     * @return $this
     */
    public function setConnectionType($connectionType)
    {
        $this->connectionType = $connectionType;
        return $this;
    }

    /**
     * The payload type describes the acceptable content that can be communicated on the endpoint.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getPayloadType()
    {
        return $this->payloadType;
    }

    /**
     * The payload type describes the acceptable content that can be communicated on the endpoint.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $payloadType
     * @return $this
     */
    public function addPayloadType($payloadType)
    {
        $this->payloadType[] = $payloadType;
        return $this;
    }

    /**
     * The mime type to send the payload in - e.g. application/fhir+xml, application/fhir+json. If the mime type is not specified, then the sender could send any content (including no content depending on the connectionType).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCode[]
     */
    public function getPayloadMimeType()
    {
        return $this->payloadMimeType;
    }

    /**
     * The mime type to send the payload in - e.g. application/fhir+xml, application/fhir+json. If the mime type is not specified, then the sender could send any content (including no content depending on the connectionType).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCode $payloadMimeType
     * @return $this
     */
    public function addPayloadMimeType($payloadMimeType)
    {
        $this->payloadMimeType[] = $payloadMimeType;
        return $this;
    }

    /**
     * The uri that describes the actual end-point to send messages to.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * The uri that describes the actual end-point to send messages to.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUri $address
     * @return $this
     */
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * Additional headers / information to send as part of the notification.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Additional headers / information to send as part of the notification.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $header
     * @return $this
     */
    public function addHeader($header)
    {
        $this->header[] = $header;
        return $this;
    }

    /**
     * The public part of the 'keys' allocated to an Organization by an accredited body to support secure exchange of data over the internet. To be provided by the Organization, where available.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getPublicKey()
    {
        return $this->publicKey;
    }

    /**
     * The public part of the 'keys' allocated to an Organization by an accredited body to support secure exchange of data over the internet. To be provided by the Organization, where available.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $publicKey
     * @return $this
     */
    public function setPublicKey($publicKey)
    {
        $this->publicKey = $publicKey;
        return $this;
    }

    /**
     * @return string
     */
    public function get_fhirElementName()
    {
        return $this->_fhirElementName;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->get_fhirElementName();
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $json = parent::jsonSerialize();
        $json['resourceType'] = $this->_fhirElementName;
        if (0 < count($this->identifier)) {
            $json['identifier'] = [];
            foreach($this->identifier as $identifier) {
                $json['identifier'][] = json_encode($identifier);
            }
        }
        if (null !== $this->status) $json['status'] = json_encode($this->status);
        if (null !== $this->name) $json['name'] = json_encode($this->name);
        if (null !== $this->managingOrganization) $json['managingOrganization'] = json_encode($this->managingOrganization);
        if (0 < count($this->contact)) {
            $json['contact'] = [];
            foreach($this->contact as $contact) {
                $json['contact'][] = json_encode($contact);
            }
        }
        if (null !== $this->period) $json['period'] = json_encode($this->period);
        if (null !== $this->connectionType) $json['connectionType'] = json_encode($this->connectionType);
        if (0 < count($this->payloadType)) {
            $json['payloadType'] = [];
            foreach($this->payloadType as $payloadType) {
                $json['payloadType'][] = json_encode($payloadType);
            }
        }
        if (0 < count($this->payloadMimeType)) {
            $json['payloadMimeType'] = [];
            foreach($this->payloadMimeType as $payloadMimeType) {
                $json['payloadMimeType'][] = json_encode($payloadMimeType);
            }
        }
        if (null !== $this->address) $json['address'] = json_encode($this->address);
        if (0 < count($this->header)) {
            $json['header'] = [];
            foreach($this->header as $header) {
                $json['header'][] = json_encode($header);
            }
        }
        if (null !== $this->publicKey) $json['publicKey'] = json_encode($this->publicKey);
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<Endpoint xmlns="http://hl7.org/fhir"></Endpoint>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (null !== $this->status) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (null !== $this->name) $this->name->xmlSerialize(true, $sxe->addChild('name'));
        if (null !== $this->managingOrganization) $this->managingOrganization->xmlSerialize(true, $sxe->addChild('managingOrganization'));
        if (0 < count($this->contact)) {
            foreach($this->contact as $contact) {
                $contact->xmlSerialize(true, $sxe->addChild('contact'));
            }
        }
        if (null !== $this->period) $this->period->xmlSerialize(true, $sxe->addChild('period'));
        if (null !== $this->connectionType) $this->connectionType->xmlSerialize(true, $sxe->addChild('connectionType'));
        if (0 < count($this->payloadType)) {
            foreach($this->payloadType as $payloadType) {
                $payloadType->xmlSerialize(true, $sxe->addChild('payloadType'));
            }
        }
        if (0 < count($this->payloadMimeType)) {
            foreach($this->payloadMimeType as $payloadMimeType) {
                $payloadMimeType->xmlSerialize(true, $sxe->addChild('payloadMimeType'));
            }
        }
        if (null !== $this->address) $this->address->xmlSerialize(true, $sxe->addChild('address'));
        if (0 < count($this->header)) {
            foreach($this->header as $header) {
                $header->xmlSerialize(true, $sxe->addChild('header'));
            }
        }
        if (null !== $this->publicKey) $this->publicKey->xmlSerialize(true, $sxe->addChild('publicKey'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}