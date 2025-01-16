<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 28th, 2024 17:25+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2024 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 *  * #%L
 *  * org.hl7.fhir.r5
 *  * %%
 *  * Copyright (C) 2014 - 2019 Health Level 7
 *  * %%
 *  * Licensed under the Apache License, Version 2.0 (the "License");
 *  * you may not use this file except in compliance with the License.
 *  * You may obtain a copy of the License at
 *  *
 *  *      http://www.apache.org/licenses/LICENSE-2.0
 *  *
 *  * Unless required by applicable law or agreed to in writing, software
 *  * distributed under the License is distributed on an "AS IS" BASIS,
 *  * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  * See the License for the specific language governing permissions and
 *  * limitations under the License.
 *  * #L%
 *  
 * 
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
 *   Generated on Sun, Mar 26, 2023 15:21+1100 for FHIR v5.0.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRPositiveInt;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRUrl;
use DCarbone\PHPFHIRGenerated\R5\FHIRPositiveIntPrimitive;
use DCarbone\PHPFHIRGenerated\R5\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\R5\FHIRUrlPrimitive;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRChangeTrackingTrait;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfigKeyEnum;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRSourceXmlNamespaceTrait;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRTypeInterface;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRValidationAssertionsTrait;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlWriter;

/**
 * Virtual Service Contact Details.
 * If the element is present, it must have a value for at least one of the defined
 * elements, an \@id referenced from the Narrative, or extensions
 *
 * Class FHIRVirtualServiceDetail
 * @package \DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType
 */
class FHIRVirtualServiceDetail extends FHIRDataType
{
    use PHPFHIRValidationAssertionsTrait;
    use PHPFHIRChangeTrackingTrait;
    use PHPFHIRSourceXmlNamespaceTrait;

    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_VIRTUAL_SERVICE_DETAIL;

    const FIELD_CHANNEL_TYPE = 'channelType';
    const FIELD_ADDRESS_URL = 'addressUrl';
    const FIELD_ADDRESS_URL_EXT = '_addressUrl';
    const FIELD_ADDRESS_STRING = 'addressString';
    const FIELD_ADDRESS_STRING_EXT = '_addressString';
    const FIELD_ADDRESS_CONTACT_POINT = 'addressContactPoint';
    const FIELD_ADDRESS_EXTENDED_CONTACT_DETAIL = 'addressExtendedContactDetail';
    const FIELD_ADDITIONAL_INFO = 'additionalInfo';
    const FIELD_ADDITIONAL_INFO_EXT = '_additionalInfo';
    const FIELD_MAX_PARTICIPANTS = 'maxParticipants';
    const FIELD_MAX_PARTICIPANTS_EXT = '_maxParticipants';
    const FIELD_SESSION_KEY = 'sessionKey';
    const FIELD_SESSION_KEY_EXT = '_sessionKey';

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of virtual service to connect to (i.e. Teams, Zoom, Specific VMR
     * technology, WhatsApp).
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding
     */
    protected null|FHIRCoding $channelType = null;
    /**
     * A URI that is a literal reference
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * What address or number needs to be used for a user to connect to the virtual
     * service to join. The channelType informs as to which datatype is appropriate to
     * use (requires knowledge of the specific type).
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRUrl
     */
    protected null|FHIRUrl $addressUrl = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * What address or number needs to be used for a user to connect to the virtual
     * service to join. The channelType informs as to which datatype is appropriate to
     * use (requires knowledge of the specific type).
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $addressString = null;
    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * What address or number needs to be used for a user to connect to the virtual
     * service to join. The channelType informs as to which datatype is appropriate to
     * use (requires knowledge of the specific type).
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRContactPoint
     */
    protected null|FHIRContactPoint $addressContactPoint = null;
    /**
     * Specifies contact information for a specific purpose over a period of time,
     * might be handled/monitored by a specific named person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * What address or number needs to be used for a user to connect to the virtual
     * service to join. The channelType informs as to which datatype is appropriate to
     * use (requires knowledge of the specific type).
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExtendedContactDetail
     */
    protected null|FHIRExtendedContactDetail $addressExtendedContactDetail = null;
    /**
     * A URI that is a literal reference
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Address to see alternative connection details.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRUrl[]
     */
    protected null|array $additionalInfo = [];
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Maximum number of participants supported by the virtual service.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRPositiveInt
     */
    protected null|FHIRPositiveInt $maxParticipants = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Session Key required by the virtual service.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $sessionKey = null;

    /**
     * Validation map for fields in type VirtualServiceDetail
     * @var array
     */
    private const _VALIDATION_RULES = [];

    /** @var array */
    private array $_xmlLocations = [];

    /**
     * FHIRVirtualServiceDetail Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_CHANNEL_TYPE, $data)) {
            if ($data[self::FIELD_CHANNEL_TYPE] instanceof FHIRCoding) {
                $this->setChannelType($data[self::FIELD_CHANNEL_TYPE]);
            } else {
                $this->setChannelType(new FHIRCoding($data[self::FIELD_CHANNEL_TYPE]));
            }
        }
        if (array_key_exists(self::FIELD_ADDRESS_URL, $data) || array_key_exists(self::FIELD_ADDRESS_URL_EXT, $data)) {
            $value = $data[self::FIELD_ADDRESS_URL] ?? null;
            $ext = (isset($data[self::FIELD_ADDRESS_URL_EXT]) && is_array($data[self::FIELD_ADDRESS_URL_EXT])) ? $data[self::FIELD_ADDRESS_URL_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUrl) {
                    $this->setAddressUrl($value);
                } else if (is_array($value)) {
                    $this->setAddressUrl(new FHIRUrl(array_merge($ext, $value)));
                } else {
                    $this->setAddressUrl(new FHIRUrl([FHIRUrl::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setAddressUrl(new FHIRUrl($ext));
            } else {
                $this->setAddressUrl(new FHIRUrl(null));
            }
        }
        if (array_key_exists(self::FIELD_ADDRESS_STRING, $data) || array_key_exists(self::FIELD_ADDRESS_STRING_EXT, $data)) {
            $value = $data[self::FIELD_ADDRESS_STRING] ?? null;
            $ext = (isset($data[self::FIELD_ADDRESS_STRING_EXT]) && is_array($data[self::FIELD_ADDRESS_STRING_EXT])) ? $data[self::FIELD_ADDRESS_STRING_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setAddressString($value);
                } else if (is_array($value)) {
                    $this->setAddressString(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setAddressString(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setAddressString(new FHIRString($ext));
            } else {
                $this->setAddressString(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_ADDRESS_CONTACT_POINT, $data)) {
            if ($data[self::FIELD_ADDRESS_CONTACT_POINT] instanceof FHIRContactPoint) {
                $this->setAddressContactPoint($data[self::FIELD_ADDRESS_CONTACT_POINT]);
            } else {
                $this->setAddressContactPoint(new FHIRContactPoint($data[self::FIELD_ADDRESS_CONTACT_POINT]));
            }
        }
        if (array_key_exists(self::FIELD_ADDRESS_EXTENDED_CONTACT_DETAIL, $data)) {
            if ($data[self::FIELD_ADDRESS_EXTENDED_CONTACT_DETAIL] instanceof FHIRExtendedContactDetail) {
                $this->setAddressExtendedContactDetail($data[self::FIELD_ADDRESS_EXTENDED_CONTACT_DETAIL]);
            } else {
                $this->setAddressExtendedContactDetail(new FHIRExtendedContactDetail($data[self::FIELD_ADDRESS_EXTENDED_CONTACT_DETAIL]));
            }
        }
        if (array_key_exists(self::FIELD_ADDITIONAL_INFO, $data) || array_key_exists(self::FIELD_ADDITIONAL_INFO_EXT, $data)) {
            $value = $data[self::FIELD_ADDITIONAL_INFO] ?? null;
            $ext = (isset($data[self::FIELD_ADDITIONAL_INFO_EXT]) && is_array($data[self::FIELD_ADDITIONAL_INFO_EXT])) ? $data[self::FIELD_ADDITIONAL_INFO_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUrl) {
                    $this->addAdditionalInfo($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRUrl) {
                            $this->addAdditionalInfo($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addAdditionalInfo(new FHIRUrl(array_merge($v, $iext)));
                            } else {
                                $this->addAdditionalInfo(new FHIRUrl([FHIRUrl::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addAdditionalInfo(new FHIRUrl(array_merge($ext, $value)));
                } else {
                    $this->addAdditionalInfo(new FHIRUrl([FHIRUrl::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addAdditionalInfo(new FHIRUrl($iext));
                }
            } else {
                $this->addAdditionalInfo(new FHIRUrl(null));
            }
        }
        if (array_key_exists(self::FIELD_MAX_PARTICIPANTS, $data) || array_key_exists(self::FIELD_MAX_PARTICIPANTS_EXT, $data)) {
            $value = $data[self::FIELD_MAX_PARTICIPANTS] ?? null;
            $ext = (isset($data[self::FIELD_MAX_PARTICIPANTS_EXT]) && is_array($data[self::FIELD_MAX_PARTICIPANTS_EXT])) ? $data[self::FIELD_MAX_PARTICIPANTS_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRPositiveInt) {
                    $this->setMaxParticipants($value);
                } else if (is_array($value)) {
                    $this->setMaxParticipants(new FHIRPositiveInt(array_merge($ext, $value)));
                } else {
                    $this->setMaxParticipants(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setMaxParticipants(new FHIRPositiveInt($ext));
            } else {
                $this->setMaxParticipants(new FHIRPositiveInt(null));
            }
        }
        if (array_key_exists(self::FIELD_SESSION_KEY, $data) || array_key_exists(self::FIELD_SESSION_KEY_EXT, $data)) {
            $value = $data[self::FIELD_SESSION_KEY] ?? null;
            $ext = (isset($data[self::FIELD_SESSION_KEY_EXT]) && is_array($data[self::FIELD_SESSION_KEY_EXT])) ? $data[self::FIELD_SESSION_KEY_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setSessionKey($value);
                } else if (is_array($value)) {
                    $this->setSessionKey(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setSessionKey(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setSessionKey(new FHIRString($ext));
            } else {
                $this->setSessionKey(new FHIRString(null));
            }
        }
    }

    /**
     * @return string
     */
    public function _getFhirTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of virtual service to connect to (i.e. Teams, Zoom, Specific VMR
     * technology, WhatsApp).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding
     */
    public function getChannelType(): null|FHIRCoding
    {
        return $this->channelType;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of virtual service to connect to (i.e. Teams, Zoom, Specific VMR
     * technology, WhatsApp).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding $channelType
     * @return static
     */
    public function setChannelType(null|FHIRCoding $channelType = null): self
    {
        if (null === $channelType) {
            $channelType = new FHIRCoding();
        }
        $this->_trackValueSet($this->channelType, $channelType);
        $this->channelType = $channelType;
        return $this;
    }

    /**
     * A URI that is a literal reference
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * What address or number needs to be used for a user to connect to the virtual
     * service to join. The channelType informs as to which datatype is appropriate to
     * use (requires knowledge of the specific type).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRUrl
     */
    public function getAddressUrl(): null|FHIRUrl
    {
        return $this->addressUrl;
    }

    /**
     * A URI that is a literal reference
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * What address or number needs to be used for a user to connect to the virtual
     * service to join. The channelType informs as to which datatype is appropriate to
     * use (requires knowledge of the specific type).
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R5\FHIRUrlPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRUrl $addressUrl
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setAddressUrl(null|string|FHIRUrlPrimitive|FHIRUrl $addressUrl = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $addressUrl && !($addressUrl instanceof FHIRUrl)) {
            $addressUrl = new FHIRUrl($addressUrl);
        }
        $this->_trackValueSet($this->addressUrl, $addressUrl);
        if (!isset($this->_xmlLocations[self::FIELD_ADDRESS_URL])) {
            $this->_xmlLocations[self::FIELD_ADDRESS_URL] = [];
        }
        $this->_xmlLocations[self::FIELD_ADDRESS_URL][0] = $xmlLocation;
        $this->addressUrl = $addressUrl;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * What address or number needs to be used for a user to connect to the virtual
     * service to join. The channelType informs as to which datatype is appropriate to
     * use (requires knowledge of the specific type).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString
     */
    public function getAddressString(): null|FHIRString
    {
        return $this->addressString;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * What address or number needs to be used for a user to connect to the virtual
     * service to join. The channelType informs as to which datatype is appropriate to
     * use (requires knowledge of the specific type).
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R5\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString $addressString
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setAddressString(null|string|FHIRStringPrimitive|FHIRString $addressString = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $addressString && !($addressString instanceof FHIRString)) {
            $addressString = new FHIRString($addressString);
        }
        $this->_trackValueSet($this->addressString, $addressString);
        if (!isset($this->_xmlLocations[self::FIELD_ADDRESS_STRING])) {
            $this->_xmlLocations[self::FIELD_ADDRESS_STRING] = [];
        }
        $this->_xmlLocations[self::FIELD_ADDRESS_STRING][0] = $xmlLocation;
        $this->addressString = $addressString;
        return $this;
    }

    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * What address or number needs to be used for a user to connect to the virtual
     * service to join. The channelType informs as to which datatype is appropriate to
     * use (requires knowledge of the specific type).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRContactPoint
     */
    public function getAddressContactPoint(): null|FHIRContactPoint
    {
        return $this->addressContactPoint;
    }

    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * What address or number needs to be used for a user to connect to the virtual
     * service to join. The channelType informs as to which datatype is appropriate to
     * use (requires knowledge of the specific type).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRContactPoint $addressContactPoint
     * @return static
     */
    public function setAddressContactPoint(null|FHIRContactPoint $addressContactPoint = null): self
    {
        if (null === $addressContactPoint) {
            $addressContactPoint = new FHIRContactPoint();
        }
        $this->_trackValueSet($this->addressContactPoint, $addressContactPoint);
        $this->addressContactPoint = $addressContactPoint;
        return $this;
    }

    /**
     * Specifies contact information for a specific purpose over a period of time,
     * might be handled/monitored by a specific named person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * What address or number needs to be used for a user to connect to the virtual
     * service to join. The channelType informs as to which datatype is appropriate to
     * use (requires knowledge of the specific type).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExtendedContactDetail
     */
    public function getAddressExtendedContactDetail(): null|FHIRExtendedContactDetail
    {
        return $this->addressExtendedContactDetail;
    }

    /**
     * Specifies contact information for a specific purpose over a period of time,
     * might be handled/monitored by a specific named person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * What address or number needs to be used for a user to connect to the virtual
     * service to join. The channelType informs as to which datatype is appropriate to
     * use (requires knowledge of the specific type).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExtendedContactDetail $addressExtendedContactDetail
     * @return static
     */
    public function setAddressExtendedContactDetail(null|FHIRExtendedContactDetail $addressExtendedContactDetail = null): self
    {
        if (null === $addressExtendedContactDetail) {
            $addressExtendedContactDetail = new FHIRExtendedContactDetail();
        }
        $this->_trackValueSet($this->addressExtendedContactDetail, $addressExtendedContactDetail);
        $this->addressExtendedContactDetail = $addressExtendedContactDetail;
        return $this;
    }

    /**
     * A URI that is a literal reference
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Address to see alternative connection details.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRUrl[]
     */
    public function getAdditionalInfo(): null|array
    {
        return $this->additionalInfo;
    }

    /**
     * A URI that is a literal reference
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Address to see alternative connection details.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R5\FHIRUrlPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRUrl $additionalInfo
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function addAdditionalInfo(null|string|FHIRUrlPrimitive|FHIRUrl $additionalInfo = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $additionalInfo && !($additionalInfo instanceof FHIRUrl)) {
            $additionalInfo = new FHIRUrl($additionalInfo);
        }
        $this->_trackValueAdded();
        if (!isset($this->_xmlLocations[self::FIELD_ADDITIONAL_INFO])) {
            $this->_xmlLocations[self::FIELD_ADDITIONAL_INFO] = [];
        }
        if ([] === $this->_xmlLocations[self::FIELD_ADDITIONAL_INFO]) {
            $this->_xmlLocations[self::FIELD_ADDITIONAL_INFO][0] = $xmlLocation;
        } else {
            $this->_xmlLocations[self::FIELD_ADDITIONAL_INFO][] = PHPFHIRXmlLocationEnum::ELEMENT;
        }
        $this->additionalInfo[] = $additionalInfo;
        return $this;
    }

    /**
     * A URI that is a literal reference
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Address to see alternative connection details.
     *
     * @param \DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRUrl[] $additionalInfo
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setAdditionalInfo(array $additionalInfo = [], PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        unset($this->_xmlLocations[self::FIELD_ADDITIONAL_INFO]);
        if ([] !== $this->additionalInfo) {
            $this->_trackValuesRemoved(count($this->additionalInfo));
            $this->additionalInfo = [];
        }
        if ([] === $additionalInfo) {
            return $this;
        }
        foreach($additionalInfo as $v) {
            if ($v instanceof FHIRUrl) {
                $this->addAdditionalInfo($v, $xmlLocation);
            } else {
                $this->addAdditionalInfo(new FHIRUrl($v), $xmlLocation);
            }
        }
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Maximum number of participants supported by the virtual service.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRPositiveInt
     */
    public function getMaxParticipants(): null|FHIRPositiveInt
    {
        return $this->maxParticipants;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Maximum number of participants supported by the virtual service.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\R5\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRPositiveInt $maxParticipants
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setMaxParticipants(null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $maxParticipants = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $maxParticipants && !($maxParticipants instanceof FHIRPositiveInt)) {
            $maxParticipants = new FHIRPositiveInt($maxParticipants);
        }
        $this->_trackValueSet($this->maxParticipants, $maxParticipants);
        if (!isset($this->_xmlLocations[self::FIELD_MAX_PARTICIPANTS])) {
            $this->_xmlLocations[self::FIELD_MAX_PARTICIPANTS] = [];
        }
        $this->_xmlLocations[self::FIELD_MAX_PARTICIPANTS][0] = $xmlLocation;
        $this->maxParticipants = $maxParticipants;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Session Key required by the virtual service.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString
     */
    public function getSessionKey(): null|FHIRString
    {
        return $this->sessionKey;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Session Key required by the virtual service.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R5\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString $sessionKey
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setSessionKey(null|string|FHIRStringPrimitive|FHIRString $sessionKey = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $sessionKey && !($sessionKey instanceof FHIRString)) {
            $sessionKey = new FHIRString($sessionKey);
        }
        $this->_trackValueSet($this->sessionKey, $sessionKey);
        if (!isset($this->_xmlLocations[self::FIELD_SESSION_KEY])) {
            $this->_xmlLocations[self::FIELD_SESSION_KEY] = [];
        }
        $this->_xmlLocations[self::FIELD_SESSION_KEY][0] = $xmlLocation;
        $this->sessionKey = $sessionKey;
        return $this;
    }

    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules(): array
    {
        return self::_VALIDATION_RULES;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by FHIR.  An empty array must be seen as
     * passing.
     *
     * @return array
     */
    public function _getValidationErrors(): array
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if (null !== ($v = $this->getChannelType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CHANNEL_TYPE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAddressUrl())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ADDRESS_URL] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAddressString())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ADDRESS_STRING] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAddressContactPoint())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ADDRESS_CONTACT_POINT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAddressExtendedContactDetail())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ADDRESS_EXTENDED_CONTACT_DETAIL] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getAdditionalInfo())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_ADDITIONAL_INFO, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getMaxParticipants())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MAX_PARTICIPANTS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSessionKey())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SESSION_KEY] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_CHANNEL_TYPE])) {
            $v = $this->getChannelType();
            foreach($validationRules[self::FIELD_CHANNEL_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VIRTUAL_SERVICE_DETAIL, self::FIELD_CHANNEL_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CHANNEL_TYPE])) {
                        $errs[self::FIELD_CHANNEL_TYPE] = [];
                    }
                    $errs[self::FIELD_CHANNEL_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ADDRESS_URL])) {
            $v = $this->getAddressUrl();
            foreach($validationRules[self::FIELD_ADDRESS_URL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VIRTUAL_SERVICE_DETAIL, self::FIELD_ADDRESS_URL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ADDRESS_URL])) {
                        $errs[self::FIELD_ADDRESS_URL] = [];
                    }
                    $errs[self::FIELD_ADDRESS_URL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ADDRESS_STRING])) {
            $v = $this->getAddressString();
            foreach($validationRules[self::FIELD_ADDRESS_STRING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VIRTUAL_SERVICE_DETAIL, self::FIELD_ADDRESS_STRING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ADDRESS_STRING])) {
                        $errs[self::FIELD_ADDRESS_STRING] = [];
                    }
                    $errs[self::FIELD_ADDRESS_STRING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ADDRESS_CONTACT_POINT])) {
            $v = $this->getAddressContactPoint();
            foreach($validationRules[self::FIELD_ADDRESS_CONTACT_POINT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VIRTUAL_SERVICE_DETAIL, self::FIELD_ADDRESS_CONTACT_POINT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ADDRESS_CONTACT_POINT])) {
                        $errs[self::FIELD_ADDRESS_CONTACT_POINT] = [];
                    }
                    $errs[self::FIELD_ADDRESS_CONTACT_POINT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ADDRESS_EXTENDED_CONTACT_DETAIL])) {
            $v = $this->getAddressExtendedContactDetail();
            foreach($validationRules[self::FIELD_ADDRESS_EXTENDED_CONTACT_DETAIL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VIRTUAL_SERVICE_DETAIL, self::FIELD_ADDRESS_EXTENDED_CONTACT_DETAIL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ADDRESS_EXTENDED_CONTACT_DETAIL])) {
                        $errs[self::FIELD_ADDRESS_EXTENDED_CONTACT_DETAIL] = [];
                    }
                    $errs[self::FIELD_ADDRESS_EXTENDED_CONTACT_DETAIL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ADDITIONAL_INFO])) {
            $v = $this->getAdditionalInfo();
            foreach($validationRules[self::FIELD_ADDITIONAL_INFO] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VIRTUAL_SERVICE_DETAIL, self::FIELD_ADDITIONAL_INFO, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ADDITIONAL_INFO])) {
                        $errs[self::FIELD_ADDITIONAL_INFO] = [];
                    }
                    $errs[self::FIELD_ADDITIONAL_INFO][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MAX_PARTICIPANTS])) {
            $v = $this->getMaxParticipants();
            foreach($validationRules[self::FIELD_MAX_PARTICIPANTS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VIRTUAL_SERVICE_DETAIL, self::FIELD_MAX_PARTICIPANTS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MAX_PARTICIPANTS])) {
                        $errs[self::FIELD_MAX_PARTICIPANTS] = [];
                    }
                    $errs[self::FIELD_MAX_PARTICIPANTS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SESSION_KEY])) {
            $v = $this->getSessionKey();
            foreach($validationRules[self::FIELD_SESSION_KEY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VIRTUAL_SERVICE_DETAIL, self::FIELD_SESSION_KEY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SESSION_KEY])) {
                        $errs[self::FIELD_SESSION_KEY] = [];
                    }
                    $errs[self::FIELD_SESSION_KEY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXTENSION])) {
            $v = $this->getExtension();
            foreach($validationRules[self::FIELD_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT, self::FIELD_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXTENSION])) {
                        $errs[self::FIELD_EXTENSION] = [];
                    }
                    $errs[self::FIELD_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ID])) {
            $v = $this->getId();
            foreach($validationRules[self::FIELD_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT, self::FIELD_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ID])) {
                        $errs[self::FIELD_ID] = [];
                    }
                    $errs[self::FIELD_ID][$rule] = $err;
                }
            }
        }
        return $errs;
    }

    /**
     * @param null|string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRVirtualServiceDetail $type
     * @param null|int|\DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRVirtualServiceDetail
     */
    public static function xmlUnserialize(null|string|\SimpleXMLElement $element, null|PHPFHIRTypeInterface $type = null, null|int|PHPFHIRConfig $config = null): null|self
    {
        if (null === $element) {
            return null;
        }
        if (is_int($config)) {
            $config = new PHPFHIRConfig([PHPFHIRConfigKeyEnum::LIBXML_OPTS->value => $config]);
        } else if (null === $config) {
            $config = new PHPFHIRConfig();
        }
        if (is_string($element)) {
            $element = new \SimpleXMLElement($element, $config->getLibxmlOpts());
        }
        if (null === $type) {
            $type = new static(null);
        } else if (!($type instanceof FHIRVirtualServiceDetail)) {
            throw new \RuntimeException(sprintf(
                '%s::xmlUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null !== ($ns = $element->getNamespaces()[''] ?? null)) {
            $type->_setSourceXmlns((string)$ns);
        }
        foreach ($element->children() as $n) {
            $childName = $n->getName();
            if (self::FIELD_CHANNEL_TYPE === $childName) {
                $type->setChannelType(FHIRCoding::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ADDRESS_URL === $childName) {
                $type->setAddressUrl(FHIRUrl::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_ADDRESS_STRING === $childName) {
                $type->setAddressString(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_ADDRESS_CONTACT_POINT === $childName) {
                $type->setAddressContactPoint(FHIRContactPoint::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ADDRESS_EXTENDED_CONTACT_DETAIL === $childName) {
                $type->setAddressExtendedContactDetail(FHIRExtendedContactDetail::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ADDITIONAL_INFO === $childName) {
                $type->addAdditionalInfo(FHIRUrl::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_MAX_PARTICIPANTS === $childName) {
                $type->setMaxParticipants(FHIRPositiveInt::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_SESSION_KEY === $childName) {
                $type->setSessionKey(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ADDRESS_URL])) {
            $pt = $type->getAddressUrl();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ADDRESS_URL], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setAddressUrl((string)$attributes[self::FIELD_ADDRESS_URL], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_ADDRESS_STRING])) {
            $pt = $type->getAddressString();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ADDRESS_STRING], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setAddressString((string)$attributes[self::FIELD_ADDRESS_STRING], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_ADDITIONAL_INFO])) {
            $type->addAdditionalInfo((string)$attributes[self::FIELD_ADDITIONAL_INFO], PHPFHIRXmlLocationEnum::ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_MAX_PARTICIPANTS])) {
            $pt = $type->getMaxParticipants();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_MAX_PARTICIPANTS], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setMaxParticipants((string)$attributes[self::FIELD_MAX_PARTICIPANTS], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_SESSION_KEY])) {
            $pt = $type->getSessionKey();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_SESSION_KEY], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setSessionKey((string)$attributes[self::FIELD_SESSION_KEY], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setId((string)$attributes[self::FIELD_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        return $type;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlWriter $xw
     * @param null|int|\DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlWriter
     */
    public function xmlSerialize(null|PHPFHIRXmlWriter $xw = null, null|int|PHPFHIRConfig $config = null): PHPFHIRXmlWriter
    {
        if (is_int($config)) {
            $config = new PHPFHIRConfig([PHPFHIRConfigKeyEnum::LIBXML_OPTS->value => $config]);
        } else if (null === $config) {
            $config = new PHPFHIRConfig();
        }
        if (null === $xw) {
            $xw = new PHPFHIRXmlWriter();
        }
        if (!$xw->isOpen()) {
            $xw->openMemory();
        }
        if (!$xw->isDocStarted()) {
            $docStarted = true;
            $xw->startDocument();
        }
        if (!$xw->isRootOpen()) {
            $openedRoot = true;
            $xw->openRootNode($config, 'VirtualServiceDetail', $this->_getSourceXmlns());
        }
        $locs = $this->_xmlLocations[self::FIELD_ADDRESS_URL] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getAddressUrl())) {
            $xw->writeAttribute(self::FIELD_ADDRESS_URL, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_ADDRESS_STRING] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getAddressString())) {
            $xw->writeAttribute(self::FIELD_ADDRESS_STRING, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_ADDITIONAL_INFO] ?? [];
        if ([] === $locs && [] !== ($vs = $this->getAdditionalInfo())) {
            $xw->writeAttribute(self::FIELD_ADDITIONAL_INFO, $vs[0]->getValue()?->getFormattedValue());
        } else if (false !== ($idx = array_search(PHPFHIRXmlLocationEnum::ATTRIBUTE, $locs, true)) && [] !== ($vs = $this->getAdditionalInfo()) && isset($vs[$idx])) {
            $xw->writeAttribute(self::FIELD_ADDITIONAL_INFO, $vs[$idx]->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_MAX_PARTICIPANTS] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getMaxParticipants())) {
            $xw->writeAttribute(self::FIELD_MAX_PARTICIPANTS, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_SESSION_KEY] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getSessionKey())) {
            $xw->writeAttribute(self::FIELD_SESSION_KEY, $v->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (null !== ($v = $this->getChannelType())) {
            $xw->startElement(self::FIELD_CHANNEL_TYPE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_ADDRESS_URL] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getAddressUrl())) {
            $xw->startElement(self::FIELD_ADDRESS_URL);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_ADDRESS_STRING] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getAddressString())) {
            $xw->startElement(self::FIELD_ADDRESS_STRING);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getAddressContactPoint())) {
            $xw->startElement(self::FIELD_ADDRESS_CONTACT_POINT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getAddressExtendedContactDetail())) {
            $xw->startElement(self::FIELD_ADDRESS_EXTENDED_CONTACT_DETAIL);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_ADDITIONAL_INFO] ?? [];
        if (([] === $locs || in_array(PHPFHIRXmlLocationEnum::ELEMENT, $locs, true)) && [] !== ($vs = $this->getAdditionalInfo())) {
            foreach($vs as $i => $v) {
                if (!isset($locs[$i]) || PHPFHIRXmlLocationEnum::ELEMENT === $locs[$i]) {
                    $xw->startElement(self::FIELD_ADDITIONAL_INFO);
                    $v->xmlSerialize($xw, $config);
                    $xw->endElement();
                }
            }
        }
        $locs = $this->_xmlLocations[self::FIELD_MAX_PARTICIPANTS] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getMaxParticipants())) {
            $xw->startElement(self::FIELD_MAX_PARTICIPANTS);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_SESSION_KEY] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getSessionKey())) {
            $xw->startElement(self::FIELD_SESSION_KEY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($openedRoot) && $openedRoot) {
            $xw->endElement();
        }
        if (isset($docStarted) && $docStarted) {
            $xw->endDocument();
        }
        return $xw;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (null !== ($v = $this->getChannelType())) {
            $out->{self::FIELD_CHANNEL_TYPE} = $v;
        }
        if (null !== ($v = $this->getAddressUrl())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_ADDRESS_URL} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRUrl::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_ADDRESS_URL_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getAddressString())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_ADDRESS_STRING} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_ADDRESS_STRING_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getAddressContactPoint())) {
            $out->{self::FIELD_ADDRESS_CONTACT_POINT} = $v;
        }
        if (null !== ($v = $this->getAddressExtendedContactDetail())) {
            $out->{self::FIELD_ADDRESS_EXTENDED_CONTACT_DETAIL} = $v;
        }
        if ([] !== ($vs = $this->getAdditionalInfo())) {
            $vals = [];
            $exts = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->{FHIRUrl::FIELD_VALUE});
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->{self::FIELD_ADDITIONAL_INFO} = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_ADDITIONAL_INFO_EXT} = $exts;
            }
        }
        if (null !== ($v = $this->getMaxParticipants())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_MAX_PARTICIPANTS} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRPositiveInt::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_MAX_PARTICIPANTS_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getSessionKey())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_SESSION_KEY} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_SESSION_KEY_EXT} = $ext;
            }
        }

        return $out;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return self::FHIR_TYPE_NAME;
    }
}