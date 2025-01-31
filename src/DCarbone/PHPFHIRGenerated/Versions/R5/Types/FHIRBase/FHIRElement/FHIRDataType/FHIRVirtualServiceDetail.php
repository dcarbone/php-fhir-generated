<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 31st, 2025 02:55+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2025 Daniel Carbone (daniel.p.carbone@gmail.com)
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

use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\SourceXMLNamespaceTrait;
use DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUrl;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRPositiveIntPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUrlPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Version;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;

/**
 * Virtual Service Contact Details.
 * If the element is present, it must have a value for at least one of the defined
 * elements, an \@id referenced from the Narrative, or extensions
 */
class FHIRVirtualServiceDetail extends FHIRDataType
{
    use SourceXMLNamespaceTrait;


    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_VIRTUAL_SERVICE_DETAIL;

    /* class_default.php:48 */
    public const FIELD_CHANNEL_TYPE = 'channelType';
    public const FIELD_ADDRESS_URL = 'addressUrl';
    public const FIELD_ADDRESS_URL_EXT = '_addressUrl';
    public const FIELD_ADDRESS_STRING = 'addressString';
    public const FIELD_ADDRESS_STRING_EXT = '_addressString';
    public const FIELD_ADDRESS_CONTACT_POINT = 'addressContactPoint';
    public const FIELD_ADDRESS_CONTACT_POINT_EXT = '_addressContactPoint';
    public const FIELD_ADDRESS_EXTENDED_CONTACT_DETAIL = 'addressExtendedContactDetail';
    public const FIELD_ADDITIONAL_INFO = 'additionalInfo';
    public const FIELD_ADDITIONAL_INFO_EXT = '_additionalInfo';
    public const FIELD_MAX_PARTICIPANTS = 'maxParticipants';
    public const FIELD_MAX_PARTICIPANTS_EXT = '_maxParticipants';
    public const FIELD_SESSION_KEY = 'sessionKey';
    public const FIELD_SESSION_KEY_EXT = '_sessionKey';

    /* class_default.php:67 */
    private static array $_validationRules = [];

    /* class_default.php:92 */
    private array $_valueXMLLocations = [
        self::FIELD_ADDRESS_URL => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_ADDRESS_STRING => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_ADDRESS_CONTACT_POINT => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_MAX_PARTICIPANTS => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_SESSION_KEY => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:108 */
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of virtual service to connect to (i.e. Teams, Zoom, Specific VMR
     * technology, WhatsApp).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding 
     */
    protected FHIRCoding $channelType;
    /**
     * A URI that is a literal reference
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * What address or number needs to be used for a user to connect to the virtual
     * service to join. The channelType informs as to which datatype is appropriate to
     * use (requires knowledge of the specific type).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUrl 
     */
    protected FHIRUrl $addressUrl;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * What address or number needs to be used for a user to connect to the virtual
     * service to join. The channelType informs as to which datatype is appropriate to
     * use (requires knowledge of the specific type).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    protected FHIRString $addressString;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRContactPoint 
     */
    protected FHIRContactPoint $addressContactPoint;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtendedContactDetail 
     */
    protected FHIRExtendedContactDetail $addressExtendedContactDetail;
    /**
     * A URI that is a literal reference
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Address to see alternative connection details.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUrl[] 
     */
    protected array $additionalInfo;
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Maximum number of participants supported by the virtual service.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt 
     */
    protected FHIRPositiveInt $maxParticipants;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Session Key required by the virtual service.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    protected FHIRString $sessionKey;

    /* constructor.php:63 */
    /**
     * FHIRVirtualServiceDetail Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding $channelType
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUrlPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUrl $addressUrl
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $addressString
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRContactPoint $addressContactPoint
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtendedContactDetail $addressExtendedContactDetail
     * @param null|string[]|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUrlPrimitive[]|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUrl[] $additionalInfo
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt $maxParticipants
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $sessionKey
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|FHIRCoding $channelType = null,
                                null|string|FHIRUrlPrimitive|FHIRUrl $addressUrl = null,
                                null|string|FHIRStringPrimitive|FHIRString $addressString = null,
                                null|FHIRString|FHIRContactPoint $addressContactPoint = null,
                                null|FHIRExtendedContactDetail $addressExtendedContactDetail = null,
                                null|iterable $additionalInfo = null,
                                null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $maxParticipants = null,
                                null|string|FHIRStringPrimitive|FHIRString $sessionKey = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            fhirComments: $fhirComments);
        if (null !== $channelType) {
            $this->setChannelType($channelType);
        }
        if (null !== $addressUrl) {
            $this->setAddressUrl($addressUrl);
        }
        if (null !== $addressString) {
            $this->setAddressString($addressString);
        }
        if (null !== $addressContactPoint) {
            $this->setAddressContactPoint($addressContactPoint);
        }
        if (null !== $addressExtendedContactDetail) {
            $this->setAddressExtendedContactDetail($addressExtendedContactDetail);
        }
        if (null !== $additionalInfo) {
            $this->setAdditionalInfo(...$additionalInfo);
        }
        if (null !== $maxParticipants) {
            $this->setMaxParticipants($maxParticipants);
        }
        if (null !== $sessionKey) {
            $this->setSessionKey($sessionKey);
        }
    }

    /* class_default.php:137 */
    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:163 */
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of virtual service to connect to (i.e. Teams, Zoom, Specific VMR
     * technology, WhatsApp).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding
     */
    public function getChannelType(): null|FHIRCoding
    {
        return $this->channelType ?? null;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of virtual service to connect to (i.e. Teams, Zoom, Specific VMR
     * technology, WhatsApp).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding $channelType
     * @return static
     */
    public function setChannelType(null|FHIRCoding $channelType): self
    {
        if (null === $channelType) {
            unset($this->channelType);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUrl
     */
    public function getAddressUrl(): null|FHIRUrl
    {
        return $this->addressUrl ?? null;
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUrlPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUrl $addressUrl
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setAddressUrl(null|string|FHIRUrlPrimitive|FHIRUrl $addressUrl,
                                  ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $addressUrl) {
            unset($this->addressUrl);
            return $this;
        }
        if (!($addressUrl instanceof FHIRUrl)) {
            $addressUrl = new FHIRUrl(value: $addressUrl);
        }
        $this->addressUrl = $addressUrl;
        if ($this->_valueXMLLocations[self::FIELD_ADDRESS_URL] !== $valueXMLLocation) {
            $this->_setAddressUrlValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the addressUrl element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getAddressUrlValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_ADDRESS_URL];
    }

    /**
     * Set the location the "value" field of the addressUrl element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setAddressUrlValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_ADDRESS_URL] = $valueXMLLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString
     */
    public function getAddressString(): null|FHIRString
    {
        return $this->addressString ?? null;
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $addressString
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setAddressString(null|string|FHIRStringPrimitive|FHIRString $addressString,
                                     ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $addressString) {
            unset($this->addressString);
            return $this;
        }
        if (!($addressString instanceof FHIRString)) {
            $addressString = new FHIRString(value: $addressString);
        }
        $this->addressString = $addressString;
        if ($this->_valueXMLLocations[self::FIELD_ADDRESS_STRING] !== $valueXMLLocation) {
            $this->_setAddressStringValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the addressString element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getAddressStringValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_ADDRESS_STRING];
    }

    /**
     * Set the location the "value" field of the addressString element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setAddressStringValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_ADDRESS_STRING] = $valueXMLLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRContactPoint
     */
    public function getAddressContactPoint(): null|FHIRContactPoint
    {
        return $this->addressContactPoint ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRContactPoint $addressContactPoint
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setAddressContactPoint(null|FHIRString|FHIRContactPoint $addressContactPoint,
                                           ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $addressContactPoint) {
            unset($this->addressContactPoint);
            return $this;
        }
        if (!($addressContactPoint instanceof FHIRContactPoint)) {
            $addressContactPoint = new FHIRContactPoint(value: $addressContactPoint);
        }
        $this->addressContactPoint = $addressContactPoint;
        if ($this->_valueXMLLocations[self::FIELD_ADDRESS_CONTACT_POINT] !== $valueXMLLocation) {
            $this->_setAddressContactPointValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the addressContactPoint element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getAddressContactPointValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_ADDRESS_CONTACT_POINT];
    }

    /**
     * Set the location the "value" field of the addressContactPoint element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setAddressContactPointValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_ADDRESS_CONTACT_POINT] = $valueXMLLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtendedContactDetail
     */
    public function getAddressExtendedContactDetail(): null|FHIRExtendedContactDetail
    {
        return $this->addressExtendedContactDetail ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtendedContactDetail $addressExtendedContactDetail
     * @return static
     */
    public function setAddressExtendedContactDetail(null|FHIRExtendedContactDetail $addressExtendedContactDetail): self
    {
        if (null === $addressExtendedContactDetail) {
            unset($this->addressExtendedContactDetail);
            return $this;
        }
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUrl[]
     */
    public function getAdditionalInfo(): array
    {
        return $this->additionalInfo ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUrl>
     */
    public function getAdditionalInfoIterator(): iterable
    {
        if (!isset($this->additionalInfo)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->additionalInfo);
    }

    /**
     * A URI that is a literal reference
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Address to see alternative connection details.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUrlPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUrl $additionalInfo
     * @return static
     */
    public function addAdditionalInfo(string|FHIRUrlPrimitive|FHIRUrl $additionalInfo): self
    {
        if (!($additionalInfo instanceof FHIRUrl)) {
            $additionalInfo = new FHIRUrl(value: $additionalInfo);
        }
        if (!isset($this->additionalInfo)) {
            $this->additionalInfo = [];
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
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUrlPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUrl ...$additionalInfo
     * @return static
     */
    public function setAdditionalInfo(string|FHIRUrlPrimitive|FHIRUrl ...$additionalInfo): self
    {
        if ([] === $additionalInfo) {
            unset($this->additionalInfo);
            return $this;
        }
        $this->additionalInfo = [];
        foreach($additionalInfo as $v) {
            if ($v instanceof FHIRUrl) {
                $this->additionalInfo[] = $v;
            } else {
                $this->additionalInfo[] = new FHIRUrl(value: $v);
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt
     */
    public function getMaxParticipants(): null|FHIRPositiveInt
    {
        return $this->maxParticipants ?? null;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Maximum number of participants supported by the virtual service.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt $maxParticipants
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setMaxParticipants(null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $maxParticipants,
                                       ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $maxParticipants) {
            unset($this->maxParticipants);
            return $this;
        }
        if (!($maxParticipants instanceof FHIRPositiveInt)) {
            $maxParticipants = new FHIRPositiveInt(value: $maxParticipants);
        }
        $this->maxParticipants = $maxParticipants;
        if ($this->_valueXMLLocations[self::FIELD_MAX_PARTICIPANTS] !== $valueXMLLocation) {
            $this->_setMaxParticipantsValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the maxParticipants element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getMaxParticipantsValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_MAX_PARTICIPANTS];
    }

    /**
     * Set the location the "value" field of the maxParticipants element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setMaxParticipantsValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_MAX_PARTICIPANTS] = $valueXMLLocation;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Session Key required by the virtual service.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString
     */
    public function getSessionKey(): null|FHIRString
    {
        return $this->sessionKey ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Session Key required by the virtual service.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $sessionKey
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setSessionKey(null|string|FHIRStringPrimitive|FHIRString $sessionKey,
                                  ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $sessionKey) {
            unset($this->sessionKey);
            return $this;
        }
        if (!($sessionKey instanceof FHIRString)) {
            $sessionKey = new FHIRString(value: $sessionKey);
        }
        $this->sessionKey = $sessionKey;
        if ($this->_valueXMLLocations[self::FIELD_SESSION_KEY] !== $valueXMLLocation) {
            $this->_setSessionKeyValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the sessionKey element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getSessionKeyValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_SESSION_KEY];
    }

    /**
     * Set the location the "value" field of the sessionKey element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setSessionKeyValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_SESSION_KEY] = $valueXMLLocation;
        return $this;
    }

    /* class_default.php:189 */
    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules(): array
    {
        return self::$_validationRules;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by the FHIR specification this type
     * was generated from.
     *
     * An empty array indicates no validation errors occurred.
     *
     * @return array
     */
    public function _getValidationErrors(): array
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if (isset($validationRules[self::FIELD_CHANNEL_TYPE])) {
            $v = $this->getChannelType();
            foreach($validationRules[self::FIELD_CHANNEL_TYPE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CHANNEL_TYPE, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ADDRESS_URL, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ADDRESS_STRING, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ADDRESS_CONTACT_POINT, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ADDRESS_EXTENDED_CONTACT_DETAIL, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ADDITIONAL_INFO, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MAX_PARTICIPANTS, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SESSION_KEY, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EXTENSION, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ID, $rule, $constraint, $v);
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

    /* class_default.php:213 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRVirtualServiceDetail $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRVirtualServiceDetail
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRVirtualServiceDetail)) {
            throw new \RuntimeException(sprintf(
                '%s::xmlUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        foreach ($element->children() as $ce) {
            $cen = $ce->getName();
            if (self::FIELD_EXTENSION === $cen) {
                $type->addExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ID === $cen) {
                $va = $ce->attributes()[FHIRStringPrimitive::FIELD_VALUE] ?? null;
                if (null !== $va) {
                    $type->setId((string)$va, ValueXMLLocationEnum::ELEMENT_ATTRIBUTE);
                } else {
                    $type->setId((string)$ce, ValueXMLLocationEnum::ELEMENT_VALUE);
                }
            } else if (self::FIELD_CHANNEL_TYPE === $cen) {
                $type->setChannelType(FHIRCoding::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ADDRESS_URL === $cen) {
                $type->setAddressUrl(FHIRUrl::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ADDRESS_STRING === $cen) {
                $type->setAddressString(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ADDRESS_CONTACT_POINT === $cen) {
                $type->setAddressContactPoint(FHIRContactPoint::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ADDRESS_EXTENDED_CONTACT_DETAIL === $cen) {
                $type->setAddressExtendedContactDetail(FHIRExtendedContactDetail::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ADDITIONAL_INFO === $cen) {
                $type->addAdditionalInfo(FHIRUrl::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MAX_PARTICIPANTS === $cen) {
                $type->setMaxParticipants(FHIRPositiveInt::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SESSION_KEY === $cen) {
                $type->setSessionKey(FHIRString::xmlUnserialize($ce, $config));
            }        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_ADDRESS_URL])) {
            if (isset($type->addressUrl)) {
                $type->addressUrl->setValue((string)$attributes[self::FIELD_ADDRESS_URL]);
                $type->_setAddressUrlValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setAddressUrl((string)$attributes[self::FIELD_ADDRESS_URL], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_ADDRESS_STRING])) {
            if (isset($type->addressString)) {
                $type->addressString->setValue((string)$attributes[self::FIELD_ADDRESS_STRING]);
                $type->_setAddressStringValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setAddressString((string)$attributes[self::FIELD_ADDRESS_STRING], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_ADDRESS_CONTACT_POINT])) {
            if (isset($type->addressContactPoint)) {
                $type->addressContactPoint->setValue((string)$attributes[self::FIELD_ADDRESS_CONTACT_POINT]);
                $type->_setAddressContactPointValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setAddressContactPoint((string)$attributes[self::FIELD_ADDRESS_CONTACT_POINT], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_MAX_PARTICIPANTS])) {
            if (isset($type->maxParticipants)) {
                $type->maxParticipants->setValue((string)$attributes[self::FIELD_MAX_PARTICIPANTS]);
                $type->_setMaxParticipantsValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setMaxParticipants((string)$attributes[self::FIELD_MAX_PARTICIPANTS], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_SESSION_KEY])) {
            if (isset($type->sessionKey)) {
                $type->sessionKey->setValue((string)$attributes[self::FIELD_SESSION_KEY]);
                $type->_setSessionKeyValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setSessionKey((string)$attributes[self::FIELD_SESSION_KEY], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        return $type;
    }

    /**
     * @param \DCarbone\PHPFHIRGenerated\Encoding\XMLWriter $xw
     * @param \DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig $config
     */
    public function xmlSerialize(XMLWriter $xw,
                                 SerializeConfig $config): void
    {
        if (isset($this->addressUrl) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_ADDRESS_URL]) {
            $xw->writeAttribute(self::FIELD_ADDRESS_URL, $this->addressUrl->_getFormattedValue());
        }
        if (isset($this->addressString) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_ADDRESS_STRING]) {
            $xw->writeAttribute(self::FIELD_ADDRESS_STRING, $this->addressString->_getFormattedValue());
        }
        if (isset($this->addressContactPoint) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_ADDRESS_CONTACT_POINT]) {
            $xw->writeAttribute(self::FIELD_ADDRESS_CONTACT_POINT, $this->addressContactPoint->_getFormattedValue());
        }
        if (isset($this->maxParticipants) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_MAX_PARTICIPANTS]) {
            $xw->writeAttribute(self::FIELD_MAX_PARTICIPANTS, $this->maxParticipants->_getFormattedValue());
        }
        if (isset($this->sessionKey) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_SESSION_KEY]) {
            $xw->writeAttribute(self::FIELD_SESSION_KEY, $this->sessionKey->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->channelType)) {
            $xw->startElement(self::FIELD_CHANNEL_TYPE);
            $this->channelType->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->addressUrl)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_ADDRESS_URL]
                || $this->addressUrl->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_ADDRESS_URL);
            $this->addressUrl->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_ADDRESS_URL]);
            $xw->endElement();
        }
        if (isset($this->addressString)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_ADDRESS_STRING]
                || $this->addressString->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_ADDRESS_STRING);
            $this->addressString->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_ADDRESS_STRING]);
            $xw->endElement();
        }
        if (isset($this->addressContactPoint)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_ADDRESS_CONTACT_POINT]
                || $this->addressContactPoint->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_ADDRESS_CONTACT_POINT);
            $this->addressContactPoint->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_ADDRESS_CONTACT_POINT]);
            $xw->endElement();
        }
        if (isset($this->addressExtendedContactDetail)) {
            $xw->startElement(self::FIELD_ADDRESS_EXTENDED_CONTACT_DETAIL);
            $this->addressExtendedContactDetail->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->additionalInfo) && [] !== $this->additionalInfo) {
            foreach($this->additionalInfo as $v) {
                $xw->startElement(self::FIELD_ADDITIONAL_INFO);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->maxParticipants)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_MAX_PARTICIPANTS]
                || $this->maxParticipants->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_MAX_PARTICIPANTS);
            $this->maxParticipants->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_MAX_PARTICIPANTS]);
            $xw->endElement();
        }
        if (isset($this->sessionKey)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_SESSION_KEY]
                || $this->sessionKey->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_SESSION_KEY);
            $this->sessionKey->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_SESSION_KEY]);
            $xw->endElement();
        }
    }

    /**
     * @param array $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRVirtualServiceDetail $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRVirtualServiceDetail
     * @throws \Exception
     */
    public static function jsonUnserialize(array $json,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRVirtualServiceDetail)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json[self::FIELD_CHANNEL_TYPE]) || array_key_exists(self::FIELD_CHANNEL_TYPE, $json)) {
            $type->setChannelType(FHIRCoding::jsonUnserialize($json[self::FIELD_CHANNEL_TYPE], $config));
        }
        if (isset($json[self::FIELD_ADDRESS_URL])
            || isset($json[self::FIELD_ADDRESS_URL_EXT])
            || array_key_exists(self::FIELD_ADDRESS_URL, $json)
            || array_key_exists(self::FIELD_ADDRESS_URL_EXT, $json)) {
            $value = $json[self::FIELD_ADDRESS_URL] ?? null;
            $type->setAddressUrl(FHIRUrl::jsonUnserialize(
                (is_array($value) ? $value : [FHIRUrl::FIELD_VALUE => $value]) + ($json[self::FIELD_ADDRESS_URL_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_ADDRESS_STRING])
            || isset($json[self::FIELD_ADDRESS_STRING_EXT])
            || array_key_exists(self::FIELD_ADDRESS_STRING, $json)
            || array_key_exists(self::FIELD_ADDRESS_STRING_EXT, $json)) {
            $value = $json[self::FIELD_ADDRESS_STRING] ?? null;
            $type->setAddressString(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_ADDRESS_STRING_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_ADDRESS_CONTACT_POINT])
            || isset($json[self::FIELD_ADDRESS_CONTACT_POINT_EXT])
            || array_key_exists(self::FIELD_ADDRESS_CONTACT_POINT, $json)
            || array_key_exists(self::FIELD_ADDRESS_CONTACT_POINT_EXT, $json)) {
            $value = $json[self::FIELD_ADDRESS_CONTACT_POINT] ?? null;
            $type->setAddressContactPoint(FHIRContactPoint::jsonUnserialize(
                (is_array($value) ? $value : [FHIRContactPoint::FIELD_VALUE => $value]) + ($json[self::FIELD_ADDRESS_CONTACT_POINT_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_ADDRESS_EXTENDED_CONTACT_DETAIL]) || array_key_exists(self::FIELD_ADDRESS_EXTENDED_CONTACT_DETAIL, $json)) {
            $type->setAddressExtendedContactDetail(FHIRExtendedContactDetail::jsonUnserialize($json[self::FIELD_ADDRESS_EXTENDED_CONTACT_DETAIL], $config));
        }
        if (isset($json[self::FIELD_ADDITIONAL_INFO])
            || isset($json[self::FIELD_ADDITIONAL_INFO_EXT])
            || array_key_exists(self::FIELD_ADDITIONAL_INFO, $json)
            || array_key_exists(self::FIELD_ADDITIONAL_INFO_EXT, $json)) {
            $value = (array)($json[self::FIELD_ADDITIONAL_INFO] ?? []);
            $ext = (array)($json[self::FIELD_ADDITIONAL_INFO_EXT] ?? []);
            $cnt = count($value);
            $extCnt = count($ext);
            if ($extCnt > $cnt) {
                $cnt = $extCnt;
            }
            for ($i = 0; $i < $cnt; $i++) {
                $type->addAdditionalInfo(FHIRUrl::jsonUnserialize(
                    [FHIRUrl::FIELD_VALUE => $value[$i] ?? null] + ($ext[$i] ?? []),
                    $config,
                ));
            }
        }
        if (isset($json[self::FIELD_MAX_PARTICIPANTS])
            || isset($json[self::FIELD_MAX_PARTICIPANTS_EXT])
            || array_key_exists(self::FIELD_MAX_PARTICIPANTS, $json)
            || array_key_exists(self::FIELD_MAX_PARTICIPANTS_EXT, $json)) {
            $value = $json[self::FIELD_MAX_PARTICIPANTS] ?? null;
            $type->setMaxParticipants(FHIRPositiveInt::jsonUnserialize(
                (is_array($value) ? $value : [FHIRPositiveInt::FIELD_VALUE => $value]) + ($json[self::FIELD_MAX_PARTICIPANTS_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_SESSION_KEY])
            || isset($json[self::FIELD_SESSION_KEY_EXT])
            || array_key_exists(self::FIELD_SESSION_KEY, $json)
            || array_key_exists(self::FIELD_SESSION_KEY_EXT, $json)) {
            $value = $json[self::FIELD_SESSION_KEY] ?? null;
            $type->setSessionKey(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_SESSION_KEY_EXT] ?? []),
                $config,
            ));
        }
        return $type;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (isset($this->channelType)) {
            $out->channelType = $this->channelType;
        }
        if (isset($this->addressUrl)) {
            if (null !== ($val = $this->addressUrl->getValue())) {
                $out->addressUrl = $val;
            }
            $ext = $this->addressUrl->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_addressUrl = $ext;
            }
        }
        if (isset($this->addressString)) {
            if (null !== ($val = $this->addressString->getValue())) {
                $out->addressString = $val;
            }
            $ext = $this->addressString->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_addressString = $ext;
            }
        }
        if (isset($this->addressContactPoint)) {
            if (null !== ($val = $this->addressContactPoint->getValue())) {
                $out->addressContactPoint = $val;
            }
            $ext = $this->addressContactPoint->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_addressContactPoint = $ext;
            }
        }
        if (isset($this->addressExtendedContactDetail)) {
            $out->addressExtendedContactDetail = $this->addressExtendedContactDetail;
        }
        if (isset($this->additionalInfo) && [] !== $this->additionalInfo) {
            $vals = [];
            $exts = [];
            foreach ($this->additionalInfo as $v) {
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->value);
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->additionalInfo = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->_additionalInfo = $exts;
            }
        }
        if (isset($this->maxParticipants)) {
            if (null !== ($val = $this->maxParticipants->getValue())) {
                $out->maxParticipants = $val;
            }
            $ext = $this->maxParticipants->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_maxParticipants = $ext;
            }
        }
        if (isset($this->sessionKey)) {
            if (null !== ($val = $this->sessionKey->getValue())) {
                $out->sessionKey = $val;
            }
            $ext = $this->sessionKey->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_sessionKey = $ext;
            }
        }
        return $out;
    }
    /* class_default.php:238 */
    /**
     * @return string
     */
    public function __toString(): string
    {
        return self::FHIR_TYPE_NAME;
    }
}