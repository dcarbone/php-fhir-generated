<?php

namespace DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: July 4th, 2019 21:57+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2019 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 *   Generated on Thu, Dec 27, 2018 22:37+1100 for FHIR v4.0.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCoding;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRContactPoint;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIREndpointStatus;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRUrl;
use DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\PHPFHIRTypeInterface;

/**
 * The technical details of an endpoint that can be used for electronic services,
 * such as for web services providing XDS.b or a REST endpoint for another FHIR
 * server. This may include any security context information.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIREndpoint
 * @package \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIREndpoint extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_ENDPOINT;

    const FIELD_ADDRESS = 'address';
    const FIELD_ADDRESS_EXT = '_address';
    const FIELD_CONNECTION_TYPE = 'connectionType';
    const FIELD_CONTACT = 'contact';
    const FIELD_HEADER = 'header';
    const FIELD_HEADER_EXT = '_header';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_MANAGING_ORGANIZATION = 'managingOrganization';
    const FIELD_NAME = 'name';
    const FIELD_NAME_EXT = '_name';
    const FIELD_PAYLOAD_MIME_TYPE = 'payloadMimeType';
    const FIELD_PAYLOAD_MIME_TYPE_EXT = '_payloadMimeType';
    const FIELD_PAYLOAD_TYPE = 'payloadType';
    const FIELD_PERIOD = 'period';
    const FIELD_STATUS = 'status';

    /**
     * A URI that is a literal reference
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * The uri that describes the actual end-point to connect to.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRUrl
     */
    private $address = null;

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A coded value that represents the technical details of the usage of this
     * endpoint, such as what WSDLs should be used in what way. (e.g.
     * XDS.b/DICOM/cds-hook).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    private $connectionType = null;

    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Contact details for a human to contact about the subscription. The primary use
     * of this for system administrator troubleshooting.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRContactPoint[]
     */
    private $contact = [];

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Additional headers / information to send as part of the notification.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    private $header = [];

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifier for the organization that is used to identify the endpoint across
     * multiple disparate systems.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    private $identifier = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The organization that manages this endpoint (even if technically another
     * organization is hosting this in the cloud, it is the organization associated
     * with the data).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $managingOrganization = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A friendly name that this endpoint can be referred to with.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $name = null;

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * The mime type to send the payload in - e.g. application/fhir+xml,
     * application/fhir+json. If the mime type is not specified, then the sender could
     * send any content (including no content depending on the connectionType).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCode[]
     */
    private $payloadMimeType = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The payload type describes the acceptable content that can be communicated on
     * the endpoint.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    private $payloadType = [];

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The interval during which the endpoint is expected to be operational.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    private $period = null;

    /**
     * The status of the endpoint.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * active | suspended | error | off | test.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIREndpointStatus
     */
    private $status = null;

    /**
     * FHIREndpoint Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIREndpoint::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_ADDRESS])) {
            $ext = (isset($data[self::FIELD_ADDRESS_EXT]) && is_array($data[self::FIELD_ADDRESS_EXT]))
                ? $data[self::FIELD_ADDRESS_EXT]
                : null;
            if ($data[self::FIELD_ADDRESS] instanceof FHIRUrl) {
                $this->setAddress($data[self::FIELD_ADDRESS]);
            } elseif ($ext && is_scalar($data[self::FIELD_ADDRESS])) {
                $this->setAddress(new FHIRUrl([FHIRUrl::FIELD_VALUE => $data[self::FIELD_ADDRESS]] + $ext));
            } else {
                $this->setAddress(new FHIRUrl($data[self::FIELD_ADDRESS]));
            }
        }
        if (isset($data[self::FIELD_CONNECTION_TYPE])) {
            if ($data[self::FIELD_CONNECTION_TYPE] instanceof FHIRCoding) {
                $this->setConnectionType($data[self::FIELD_CONNECTION_TYPE]);
            } else {
                $this->setConnectionType(new FHIRCoding($data[self::FIELD_CONNECTION_TYPE]));
            }
        }
        if (isset($data[self::FIELD_CONTACT])) {
            if (is_array($data[self::FIELD_CONTACT])) {
                foreach($data[self::FIELD_CONTACT] as $v) {
                    if ($v instanceof FHIRContactPoint) {
                        $this->addContact($v);
                    } else {
                        $this->addContact(new FHIRContactPoint($v));
                    }
                }
            } else if ($data[self::FIELD_CONTACT] instanceof FHIRContactPoint) {
                $this->addContact($data[self::FIELD_CONTACT]);
            } else {
                $this->addContact(new FHIRContactPoint($data[self::FIELD_CONTACT]));
            }
        }
        if (isset($data[self::FIELD_HEADER])) {
            $ext = (isset($data[self::FIELD_HEADER_EXT]) && is_array($data[self::FIELD_HEADER_EXT]))
                ? $data[self::FIELD_HEADER_EXT]
                : null;
            if (is_array($data[self::FIELD_HEADER])) {
                foreach($data[self::FIELD_HEADER] as $i => $v) {
                    if ($v instanceof FHIRString) {
                        $this->addHeader($v);
                    } elseif ($ext && is_scalar($v) && isset($ext[$i]) && is_array($ext[$i])) {
                        $this->addHeader(new FHIRString([FHIRString::FIELD_VALUE => $v] + $ext[$i]));
                    } else {
                        $this->addHeader(new FHIRString($v));
                    }
                }
            } elseif ($data[self::FIELD_HEADER] instanceof FHIRString) {
                $this->addHeader($data[self::FIELD_HEADER]);
            } elseif ($ext && is_scalar($data[self::FIELD_HEADER])) {
                $this->addHeader(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_HEADER]] + $ext));
            } else {
                $this->addHeader(new FHIRString($data[self::FIELD_HEADER]));
            }
        }
        if (isset($data[self::FIELD_IDENTIFIER])) {
            if (is_array($data[self::FIELD_IDENTIFIER])) {
                foreach($data[self::FIELD_IDENTIFIER] as $v) {
                    if ($v instanceof FHIRIdentifier) {
                        $this->addIdentifier($v);
                    } else {
                        $this->addIdentifier(new FHIRIdentifier($v));
                    }
                }
            } else if ($data[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->addIdentifier($data[self::FIELD_IDENTIFIER]);
            } else {
                $this->addIdentifier(new FHIRIdentifier($data[self::FIELD_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_MANAGING_ORGANIZATION])) {
            if ($data[self::FIELD_MANAGING_ORGANIZATION] instanceof FHIRReference) {
                $this->setManagingOrganization($data[self::FIELD_MANAGING_ORGANIZATION]);
            } else {
                $this->setManagingOrganization(new FHIRReference($data[self::FIELD_MANAGING_ORGANIZATION]));
            }
        }
        if (isset($data[self::FIELD_NAME])) {
            $ext = (isset($data[self::FIELD_NAME_EXT]) && is_array($data[self::FIELD_NAME_EXT]))
                ? $data[self::FIELD_NAME_EXT]
                : null;
            if ($data[self::FIELD_NAME] instanceof FHIRString) {
                $this->setName($data[self::FIELD_NAME]);
            } elseif ($ext && is_scalar($data[self::FIELD_NAME])) {
                $this->setName(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_NAME]] + $ext));
            } else {
                $this->setName(new FHIRString($data[self::FIELD_NAME]));
            }
        }
        if (isset($data[self::FIELD_PAYLOAD_MIME_TYPE])) {
            $ext = (isset($data[self::FIELD_PAYLOAD_MIME_TYPE_EXT]) && is_array($data[self::FIELD_PAYLOAD_MIME_TYPE_EXT]))
                ? $data[self::FIELD_PAYLOAD_MIME_TYPE_EXT]
                : null;
            if (is_array($data[self::FIELD_PAYLOAD_MIME_TYPE])) {
                foreach($data[self::FIELD_PAYLOAD_MIME_TYPE] as $i => $v) {
                    if ($v instanceof FHIRCode) {
                        $this->addPayloadMimeType($v);
                    } elseif ($ext && is_scalar($v) && isset($ext[$i]) && is_array($ext[$i])) {
                        $this->addPayloadMimeType(new FHIRCode([FHIRCode::FIELD_VALUE => $v] + $ext[$i]));
                    } else {
                        $this->addPayloadMimeType(new FHIRCode($v));
                    }
                }
            } elseif ($data[self::FIELD_PAYLOAD_MIME_TYPE] instanceof FHIRCode) {
                $this->addPayloadMimeType($data[self::FIELD_PAYLOAD_MIME_TYPE]);
            } elseif ($ext && is_scalar($data[self::FIELD_PAYLOAD_MIME_TYPE])) {
                $this->addPayloadMimeType(new FHIRCode([FHIRCode::FIELD_VALUE => $data[self::FIELD_PAYLOAD_MIME_TYPE]] + $ext));
            } else {
                $this->addPayloadMimeType(new FHIRCode($data[self::FIELD_PAYLOAD_MIME_TYPE]));
            }
        }
        if (isset($data[self::FIELD_PAYLOAD_TYPE])) {
            if (is_array($data[self::FIELD_PAYLOAD_TYPE])) {
                foreach($data[self::FIELD_PAYLOAD_TYPE] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addPayloadType($v);
                    } else {
                        $this->addPayloadType(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_PAYLOAD_TYPE] instanceof FHIRCodeableConcept) {
                $this->addPayloadType($data[self::FIELD_PAYLOAD_TYPE]);
            } else {
                $this->addPayloadType(new FHIRCodeableConcept($data[self::FIELD_PAYLOAD_TYPE]));
            }
        }
        if (isset($data[self::FIELD_PERIOD])) {
            if ($data[self::FIELD_PERIOD] instanceof FHIRPeriod) {
                $this->setPeriod($data[self::FIELD_PERIOD]);
            } else {
                $this->setPeriod(new FHIRPeriod($data[self::FIELD_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_STATUS])) {
            if ($data[self::FIELD_STATUS] instanceof FHIREndpointStatus) {
                $this->setStatus($data[self::FIELD_STATUS]);
            } else {
                $this->setStatus(new FHIREndpointStatus($data[self::FIELD_STATUS]));
            }
        }
    }

    /**
     * @return string
     */
    public function getFHIRTypeName()
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * A URI that is a literal reference
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * The uri that describes the actual end-point to connect to.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRUrl
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * A URI that is a literal reference
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * The uri that describes the actual end-point to connect to.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRUrl $address
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIREndpoint
     */
    public function setAddress($address = null)
    {
        if (null === $address) {
            $this->address = null;
            return $this;
        }
        if ($address instanceof FHIRUrl) {
            $this->address = $address;
            return $this;
        }
        $this->address = new FHIRUrl($address);
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A coded value that represents the technical details of the usage of this
     * endpoint, such as what WSDLs should be used in what way. (e.g.
     * XDS.b/DICOM/cds-hook).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getConnectionType()
    {
        return $this->connectionType;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A coded value that represents the technical details of the usage of this
     * endpoint, such as what WSDLs should be used in what way. (e.g.
     * XDS.b/DICOM/cds-hook).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCoding $connectionType
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIREndpoint
     */
    public function setConnectionType(FHIRCoding $connectionType = null)
    {
        $this->connectionType = $connectionType;
        return $this;
    }

    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Contact details for a human to contact about the subscription. The primary use
     * of this for system administrator troubleshooting.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRContactPoint[]
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Contact details for a human to contact about the subscription. The primary use
     * of this for system administrator troubleshooting.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRContactPoint $contact
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIREndpoint
     */
    public function addContact(FHIRContactPoint $contact = null)
    {
        $this->contact[] = $contact;
        return $this;
    }

    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Contact details for a human to contact about the subscription. The primary use
     * of this for system administrator troubleshooting.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRContactPoint[] $contact
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIREndpoint
     */
    public function setContact(array $contact = [])
    {
        $this->contact = [];
        if ([] === $contact) {
            return $this;
        }
        foreach($contact as $v) {
            if ($v instanceof FHIRContactPoint) {
                $this->addContact($v);
            } else {
                $this->addContact(new FHIRContactPoint($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Additional headers / information to send as part of the notification.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Additional headers / information to send as part of the notification.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString $header
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIREndpoint
     */
    public function addHeader($header = null)
    {
        if (null === $header) {
            $this->header = null;
            return $this;
        }
        if ($header instanceof FHIRString) {
            $this->header = $header;
            return $this;
        }
        $this->header = new FHIRString($header);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Additional headers / information to send as part of the notification.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString[] $header
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIREndpoint
     */
    public function setHeader(array $header = [])
    {
        $this->header = [];
        if ([] === $header) {
            return $this;
        }
        foreach($header as $v) {
            if ($v instanceof FHIRString) {
                $this->addHeader($v);
            } else {
                $this->addHeader(new FHIRString($v));
            }
        }
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifier for the organization that is used to identify the endpoint across
     * multiple disparate systems.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifier for the organization that is used to identify the endpoint across
     * multiple disparate systems.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIREndpoint
     */
    public function addIdentifier(FHIRIdentifier $identifier = null)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifier for the organization that is used to identify the endpoint across
     * multiple disparate systems.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRIdentifier[] $identifier
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIREndpoint
     */
    public function setIdentifier(array $identifier = [])
    {
        $this->identifier = [];
        if ([] === $identifier) {
            return $this;
        }
        foreach($identifier as $v) {
            if ($v instanceof FHIRIdentifier) {
                $this->addIdentifier($v);
            } else {
                $this->addIdentifier(new FHIRIdentifier($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The organization that manages this endpoint (even if technically another
     * organization is hosting this in the cloud, it is the organization associated
     * with the data).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getManagingOrganization()
    {
        return $this->managingOrganization;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The organization that manages this endpoint (even if technically another
     * organization is hosting this in the cloud, it is the organization associated
     * with the data).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference $managingOrganization
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIREndpoint
     */
    public function setManagingOrganization(FHIRReference $managingOrganization = null)
    {
        $this->managingOrganization = $managingOrganization;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A friendly name that this endpoint can be referred to with.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A friendly name that this endpoint can be referred to with.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString $name
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIREndpoint
     */
    public function setName($name = null)
    {
        if (null === $name) {
            $this->name = null;
            return $this;
        }
        if ($name instanceof FHIRString) {
            $this->name = $name;
            return $this;
        }
        $this->name = new FHIRString($name);
        return $this;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * The mime type to send the payload in - e.g. application/fhir+xml,
     * application/fhir+json. If the mime type is not specified, then the sender could
     * send any content (including no content depending on the connectionType).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCode[]
     */
    public function getPayloadMimeType()
    {
        return $this->payloadMimeType;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * The mime type to send the payload in - e.g. application/fhir+xml,
     * application/fhir+json. If the mime type is not specified, then the sender could
     * send any content (including no content depending on the connectionType).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCode $payloadMimeType
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIREndpoint
     */
    public function addPayloadMimeType($payloadMimeType = null)
    {
        if (null === $payloadMimeType) {
            $this->payloadMimeType = null;
            return $this;
        }
        if ($payloadMimeType instanceof FHIRCode) {
            $this->payloadMimeType = $payloadMimeType;
            return $this;
        }
        $this->payloadMimeType = new FHIRCode($payloadMimeType);
        return $this;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * The mime type to send the payload in - e.g. application/fhir+xml,
     * application/fhir+json. If the mime type is not specified, then the sender could
     * send any content (including no content depending on the connectionType).
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCode[] $payloadMimeType
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIREndpoint
     */
    public function setPayloadMimeType(array $payloadMimeType = [])
    {
        $this->payloadMimeType = [];
        if ([] === $payloadMimeType) {
            return $this;
        }
        foreach($payloadMimeType as $v) {
            if ($v instanceof FHIRCode) {
                $this->addPayloadMimeType($v);
            } else {
                $this->addPayloadMimeType(new FHIRCode($v));
            }
        }
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The payload type describes the acceptable content that can be communicated on
     * the endpoint.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getPayloadType()
    {
        return $this->payloadType;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The payload type describes the acceptable content that can be communicated on
     * the endpoint.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $payloadType
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIREndpoint
     */
    public function addPayloadType(FHIRCodeableConcept $payloadType = null)
    {
        $this->payloadType[] = $payloadType;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The payload type describes the acceptable content that can be communicated on
     * the endpoint.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[] $payloadType
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIREndpoint
     */
    public function setPayloadType(array $payloadType = [])
    {
        $this->payloadType = [];
        if ([] === $payloadType) {
            return $this;
        }
        foreach($payloadType as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addPayloadType($v);
            } else {
                $this->addPayloadType(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The interval during which the endpoint is expected to be operational.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The interval during which the endpoint is expected to be operational.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPeriod $period
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIREndpoint
     */
    public function setPeriod(FHIRPeriod $period = null)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * The status of the endpoint.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * active | suspended | error | off | test.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIREndpointStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The status of the endpoint.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * active | suspended | error | off | test.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIREndpointStatus $status
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIREndpoint
     */
    public function setStatus(FHIREndpointStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null \$sxe
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIREndpoint $type
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIREndpoint
     */
    public static function xmlUnserialize($sxe = null, PHPFHIRTypeInterface $type = null)
    {
        if (null === $sxe) {
            return null;
        }
        if (is_string($sxe)) {
            libxml_use_internal_errors(true);
            $sxe = new \SimpleXMLElement($sxe);
            if ($sxe === false) {
                throw new \DomainException(sprintf('FHIREndpoint::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIREndpoint::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRDomainResource::xmlUnserialize(\$sxe, new FHIREndpoint);
        } elseif (!is_object($type) || !($type instanceof FHIREndpoint)) {
            throw new \RuntimeException(sprintf(
                'FHIREndpoint::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIREndpoint or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($attributes->address)) {
            $type->setAddress((string)$attributes->address);
        }
        if (isset($children->address)) {
            $type->setAddress(FHIRUrl::xmlUnserialize($children->address));
        }
        if (isset($children->connectionType)) {
            $type->setConnectionType(FHIRCoding::xmlUnserialize($children->connectionType));
        }
        if (isset($children->contact)) {
            foreach($children->contact as $child) {
                $type->addContact(FHIRContactPoint::xmlUnserialize($child));
            }
        }
        if (isset($attributes->header)) {
            $type->addHeader((string)$attributes->header);
        }
        if (isset($children->header)) {
            foreach($children->header as $child) {
                $type->addHeader(FHIRString::xmlUnserialize($child));
            }
        }
        if (isset($children->identifier)) {
            foreach($children->identifier as $child) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($child));
            }
        }
        if (isset($children->managingOrganization)) {
            $type->setManagingOrganization(FHIRReference::xmlUnserialize($children->managingOrganization));
        }
        if (isset($attributes->name)) {
            $type->setName((string)$attributes->name);
        }
        if (isset($children->name)) {
            $type->setName(FHIRString::xmlUnserialize($children->name));
        }
        if (isset($attributes->payloadMimeType)) {
            $type->addPayloadMimeType((string)$attributes->payloadMimeType);
        }
        if (isset($children->payloadMimeType)) {
            foreach($children->payloadMimeType as $child) {
                $type->addPayloadMimeType(FHIRCode::xmlUnserialize($child));
            }
        }
        if (isset($children->payloadType)) {
            foreach($children->payloadType as $child) {
                $type->addPayloadType(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->period)) {
            $type->setPeriod(FHIRPeriod::xmlUnserialize($children->period));
        }
        if (isset($children->status)) {
            $type->setStatus(FHIREndpointStatus::xmlUnserialize($children->status));
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement \$sxe
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<Endpoint xmlns="http://hl7.org/fhir"></Endpoint>');
        }
        if (null !== ($v = $this->getAddress())) {
            $sxe->addAttribute(self::FIELD_ADDRESS, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_ADDRESS));
            }
        }
        if (null !== ($v = $this->getConnectionType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CONNECTION_TYPE));
        }
        if ([] !== ($vs = $this->getContact())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_CONTACT));
            }
        }
        if ([] !== ($vs = $this->getHeader())) {
            $first = true;
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                if ($first) {
                    $sxe->addAttribute(self::FIELD_HEADER, (string)$v);
                    if (null !== $v->getId() || [] !== $v->getExtension()) {
                        $v->xmlSerialize($sxe->addChild(self::FIELD_HEADER));
                    }
                    $first = false;
                } else {
                    $v->xmlSerialize($sxe->addChild(self::FIELD_HEADER));
                }
            }
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER));
            }
        }
        if (null !== ($v = $this->getManagingOrganization())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_MANAGING_ORGANIZATION));
        }
        if (null !== ($v = $this->getName())) {
            $sxe->addAttribute(self::FIELD_NAME, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_NAME));
            }
        }
        if ([] !== ($vs = $this->getPayloadMimeType())) {
            $first = true;
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                if ($first) {
                    $sxe->addAttribute(self::FIELD_PAYLOAD_MIME_TYPE, (string)$v);
                    if (null !== $v->getId() || [] !== $v->getExtension()) {
                        $v->xmlSerialize($sxe->addChild(self::FIELD_PAYLOAD_MIME_TYPE));
                    }
                    $first = false;
                } else {
                    $v->xmlSerialize($sxe->addChild(self::FIELD_PAYLOAD_MIME_TYPE));
                }
            }
        }
        if ([] !== ($vs = $this->getPayloadType())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PAYLOAD_TYPE));
            }
        }
        if (null !== ($v = $this->getPeriod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PERIOD));
        }
        if (null !== ($v = $this->getStatus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STATUS));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getAddress())) {
            $a[self::FIELD_ADDRESS] = (string)$v;
            $a[self::FIELD_ADDRESS_EXT] = $v;
        }
        if (null !== ($v = $this->getConnectionType())) {
            $a[self::FIELD_CONNECTION_TYPE] = $v;
        }
        if ([] !== ($vs = $this->getContact())) {
            $a[self::FIELD_CONTACT] = $vs;
        }
        if ([] !== ($vs = $this->getHeader())) {
            $a[self::FIELD_HEADER] = [];
            $a[self::FIELD_HEADER_EXT] = [];
            foreach ($vs as $v) {
                $a[self::FIELD_HEADER][] = (string)$v;
                $a[self::FIELD_HEADER_EXT][] = $v;
            }
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = $vs;
        }
        if (null !== ($v = $this->getManagingOrganization())) {
            $a[self::FIELD_MANAGING_ORGANIZATION] = $v;
        }
        if (null !== ($v = $this->getName())) {
            $a[self::FIELD_NAME] = (string)$v;
            $a[self::FIELD_NAME_EXT] = $v;
        }
        if ([] !== ($vs = $this->getPayloadMimeType())) {
            $a[self::FIELD_PAYLOAD_MIME_TYPE] = [];
            $a[self::FIELD_PAYLOAD_MIME_TYPE_EXT] = [];
            foreach ($vs as $v) {
                $a[self::FIELD_PAYLOAD_MIME_TYPE][] = (string)$v;
                $a[self::FIELD_PAYLOAD_MIME_TYPE_EXT][] = $v;
            }
        }
        if ([] !== ($vs = $this->getPayloadType())) {
            $a[self::FIELD_PAYLOAD_TYPE] = $vs;
        }
        if (null !== ($v = $this->getPeriod())) {
            $a[self::FIELD_PERIOD] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a[self::FIELD_STATUS] = $v;
        }
        return [PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE => self::FHIR_TYPE_NAME] + $a;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}