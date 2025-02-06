<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 6th, 2025 03:21+0000
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

use DCarbone\PHPFHIRGenerated\Encoding\JSONSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUrl;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRPositiveIntPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUrlPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;

/**
 * Virtual Service Contact Details.
 * If the element is present, it must have a value for at least one of the defined
 * elements, an \@id referenced from the Narrative, or extensions
 */
class FHIRVirtualServiceDetail extends FHIRDataType
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_VIRTUAL_SERVICE_DETAIL;

    /* class_default.php:50 */
    public const FIELD_CHANNEL_TYPE = 'channelType';
    public const FIELD_ADDRESS_URL = 'addressUrl';
    public const FIELD_ADDRESS_URL_EXT = '_addressUrl';
    public const FIELD_ADDRESS_STRING = 'addressString';
    public const FIELD_ADDRESS_STRING_EXT = '_addressString';
    public const FIELD_ADDRESS_CONTACT_POINT = 'addressContactPoint';
    public const FIELD_ADDRESS_EXTENDED_CONTACT_DETAIL = 'addressExtendedContactDetail';
    public const FIELD_ADDITIONAL_INFO = 'additionalInfo';
    public const FIELD_ADDITIONAL_INFO_EXT = '_additionalInfo';
    public const FIELD_MAX_PARTICIPANTS = 'maxParticipants';
    public const FIELD_MAX_PARTICIPANTS_EXT = '_maxParticipants';
    public const FIELD_SESSION_KEY = 'sessionKey';
    public const FIELD_SESSION_KEY_EXT = '_sessionKey';

    /* class_default.php:69 */
    // The default validation rules for this type as defined in the FHIR schema used to generate this code.
    private const _FHIR_VALIDATION_RULES = [];

    /* class_default.php:98 */
    private array $_valueXMLLocations = [
        self::FIELD_ADDRESS_URL => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_ADDRESS_STRING => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_MAX_PARTICIPANTS => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_SESSION_KEY => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:114 */
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
     * use (requires knowledge of the specific type). (choose any one of address*, but
     * only one)
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
     * use (requires knowledge of the specific type). (choose any one of address*, but
     * only one)
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
     * use (requires knowledge of the specific type). (choose any one of address*, but
     * only one)
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
     * use (requires knowledge of the specific type). (choose any one of address*, but
     * only one)
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

    /* constructor.php:61 */
    /**
     * FHIRVirtualServiceDetail Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding $channelType
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUrlPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUrl $addressUrl
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $addressString
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRContactPoint $addressContactPoint
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtendedContactDetail $addressExtendedContactDetail
     * @param null|string[]|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUrlPrimitive[]|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUrl[] $additionalInfo
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt $maxParticipants
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $sessionKey
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|FHIRCoding $channelType = null,
                                null|string|FHIRUrlPrimitive|FHIRUrl $addressUrl = null,
                                null|string|FHIRStringPrimitive|FHIRString $addressString = null,
                                null|FHIRContactPoint $addressContactPoint = null,
                                null|FHIRExtendedContactDetail $addressExtendedContactDetail = null,
                                null|iterable $additionalInfo = null,
                                null|string|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $maxParticipants = null,
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

    /* class_default.php:146 */
    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:172 */
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
     * use (requires knowledge of the specific type). (choose any one of address*, but
     * only one)
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
     * use (requires knowledge of the specific type). (choose any one of address*, but
     * only one)
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUrlPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUrl $addressUrl
     * @return static
     */
    public function setAddressUrl(null|string|FHIRUrlPrimitive|FHIRUrl $addressUrl): self
    {
        if (null === $addressUrl) {
            unset($this->addressUrl);
            return $this;
        }
        if (!($addressUrl instanceof FHIRUrl)) {
            $addressUrl = new FHIRUrl(value: $addressUrl);
        }
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
     * use (requires knowledge of the specific type). (choose any one of address*, but
     * only one)
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
     * use (requires knowledge of the specific type). (choose any one of address*, but
     * only one)
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $addressString
     * @return static
     */
    public function setAddressString(null|string|FHIRStringPrimitive|FHIRString $addressString): self
    {
        if (null === $addressString) {
            unset($this->addressString);
            return $this;
        }
        if (!($addressString instanceof FHIRString)) {
            $addressString = new FHIRString(value: $addressString);
        }
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
     * use (requires knowledge of the specific type). (choose any one of address*, but
     * only one)
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
     * use (requires knowledge of the specific type). (choose any one of address*, but
     * only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRContactPoint $addressContactPoint
     * @return static
     */
    public function setAddressContactPoint(null|FHIRContactPoint $addressContactPoint): self
    {
        if (null === $addressContactPoint) {
            unset($this->addressContactPoint);
            return $this;
        }
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
     * use (requires knowledge of the specific type). (choose any one of address*, but
     * only one)
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
     * use (requires knowledge of the specific type). (choose any one of address*, but
     * only one)
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
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt $maxParticipants
     * @return static
     */
    public function setMaxParticipants(null|string|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $maxParticipants): self
    {
        if (null === $maxParticipants) {
            unset($this->maxParticipants);
            return $this;
        }
        if (!($maxParticipants instanceof FHIRPositiveInt)) {
            $maxParticipants = new FHIRPositiveInt(value: $maxParticipants);
        }
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
     * @return static
     */
    public function setSessionKey(null|string|FHIRStringPrimitive|FHIRString $sessionKey): self
    {
        if (null === $sessionKey) {
            unset($this->sessionKey);
            return $this;
        }
        if (!($sessionKey instanceof FHIRString)) {
            $sessionKey = new FHIRString(value: $sessionKey);
        }
        $this->sessionKey = $sessionKey;
        return $this;
    }

    /* class_default.php:199 */
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
                    $type->setId((string)$va);
                    $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::ELEMENT_ATTRIBUTE);
                } else {
                    $type->setId((string)$ce);
                    $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::ELEMENT_VALUE);
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
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID]);
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_ADDRESS_URL])) {
            if (isset($type->addressUrl)) {
                $type->addressUrl->setValue((string)$attributes[self::FIELD_ADDRESS_URL]);
            } else {
                $type->setAddressUrl((string)$attributes[self::FIELD_ADDRESS_URL]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_ADDRESS_URL, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_ADDRESS_STRING])) {
            if (isset($type->addressString)) {
                $type->addressString->setValue((string)$attributes[self::FIELD_ADDRESS_STRING]);
            } else {
                $type->setAddressString((string)$attributes[self::FIELD_ADDRESS_STRING]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_ADDRESS_STRING, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_MAX_PARTICIPANTS])) {
            if (isset($type->maxParticipants)) {
                $type->maxParticipants->setValue((string)$attributes[self::FIELD_MAX_PARTICIPANTS]);
            } else {
                $type->setMaxParticipants((string)$attributes[self::FIELD_MAX_PARTICIPANTS]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_MAX_PARTICIPANTS, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_SESSION_KEY])) {
            if (isset($type->sessionKey)) {
                $type->sessionKey->setValue((string)$attributes[self::FIELD_SESSION_KEY]);
            } else {
                $type->setSessionKey((string)$attributes[self::FIELD_SESSION_KEY]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_SESSION_KEY, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
            $xw->writeAttribute(self::FIELD_ADDRESS_URL, $this->addressUrl->_getValueAsString());
        }
        if (isset($this->addressString) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_ADDRESS_STRING]) {
            $xw->writeAttribute(self::FIELD_ADDRESS_STRING, $this->addressString->_getValueAsString());
        }
        if (isset($this->maxParticipants) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_MAX_PARTICIPANTS]) {
            $xw->writeAttribute(self::FIELD_MAX_PARTICIPANTS, $this->maxParticipants->_getValueAsString());
        }
        if (isset($this->sessionKey) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_SESSION_KEY]) {
            $xw->writeAttribute(self::FIELD_SESSION_KEY, $this->sessionKey->_getValueAsString());
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
        if (isset($this->addressContactPoint)) {
            $xw->startElement(self::FIELD_ADDRESS_CONTACT_POINT);
            $this->addressContactPoint->xmlSerialize($xw, $config);
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
     * @param \stdClass $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRVirtualServiceDetail $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRVirtualServiceDetail
     * @throws \Exception
     */
    public static function jsonUnserialize(\stdClass $json,
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
        if (isset($json->channelType) || property_exists($json, self::FIELD_CHANNEL_TYPE)) {
            if (is_array($json->channelType)) {
                $type->setChannelType(FHIRCoding::jsonUnserialize(reset($json->channelType), $config));
            } else {
                $type->setChannelType(FHIRCoding::jsonUnserialize($json->channelType, $config));
            }
        }
        if (isset($json->addressUrl)
            || isset($json->_addressUrl)
            || property_exists($json, self::FIELD_ADDRESS_URL)
            || property_exists($json, self::FIELD_ADDRESS_URL_EXT)) {
            $v = $json->_addressUrl ?? new \stdClass();
            $v->value = $json->addressUrl ?? null;
            $type->setAddressUrl(FHIRUrl::jsonUnserialize($v, $config));
        }
        if (isset($json->addressString)
            || isset($json->_addressString)
            || property_exists($json, self::FIELD_ADDRESS_STRING)
            || property_exists($json, self::FIELD_ADDRESS_STRING_EXT)) {
            $v = $json->_addressString ?? new \stdClass();
            $v->value = $json->addressString ?? null;
            $type->setAddressString(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($json->addressContactPoint) || property_exists($json, self::FIELD_ADDRESS_CONTACT_POINT)) {
            if (is_array($json->addressContactPoint)) {
                $type->setAddressContactPoint(FHIRContactPoint::jsonUnserialize(reset($json->addressContactPoint), $config));
            } else {
                $type->setAddressContactPoint(FHIRContactPoint::jsonUnserialize($json->addressContactPoint, $config));
            }
        }
        if (isset($json->addressExtendedContactDetail) || property_exists($json, self::FIELD_ADDRESS_EXTENDED_CONTACT_DETAIL)) {
            if (is_array($json->addressExtendedContactDetail)) {
                $type->setAddressExtendedContactDetail(FHIRExtendedContactDetail::jsonUnserialize(reset($json->addressExtendedContactDetail), $config));
            } else {
                $type->setAddressExtendedContactDetail(FHIRExtendedContactDetail::jsonUnserialize($json->addressExtendedContactDetail, $config));
            }
        }
        if (isset($json->additionalInfo)
            || isset($json->_additionalInfo)
            || property_exists($json, self::FIELD_ADDITIONAL_INFO)
            || property_exists($json, self::FIELD_ADDITIONAL_INFO_EXT)) {
            $vals = (array)($json->additionalInfo ?? []);
            $exts = (array)($json->FIELD_ADDITIONAL_INFO_EXT ?? []);
            $valCnt = count($vals);
            $extCnt = count($exts);
            if ($extCnt > $valCnt) {
                $valCnt = $extCnt;
            }
            for ($i = 0; $i < $valCnt; $i++) {
                $v = $exts[$i] ?? new \stdClass();
                $v->value = $vals[$i] ?? null;
                $type->addAdditionalInfo(FHIRUrl::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->maxParticipants)
            || isset($json->_maxParticipants)
            || property_exists($json, self::FIELD_MAX_PARTICIPANTS)
            || property_exists($json, self::FIELD_MAX_PARTICIPANTS_EXT)) {
            $v = $json->_maxParticipants ?? new \stdClass();
            $v->value = $json->maxParticipants ?? null;
            $type->setMaxParticipants(FHIRPositiveInt::jsonUnserialize($v, $config));
        }
        if (isset($json->sessionKey)
            || isset($json->_sessionKey)
            || property_exists($json, self::FIELD_SESSION_KEY)
            || property_exists($json, self::FIELD_SESSION_KEY_EXT)) {
            $v = $json->_sessionKey ?? new \stdClass();
            $v->value = $json->sessionKey ?? null;
            $type->setSessionKey(FHIRString::jsonUnserialize($v, $config));
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
            if ($this->addressUrl->_nonValueFieldDefined()) {
                $ext = $this->addressUrl->jsonSerialize();
                unset($ext->value);
                $out->_addressUrl = $ext;
            }
        }
        if (isset($this->addressString)) {
            if (null !== ($val = $this->addressString->getValue())) {
                $out->addressString = $val;
            }
            if ($this->addressString->_nonValueFieldDefined()) {
                $ext = $this->addressString->jsonSerialize();
                unset($ext->value);
                $out->_addressString = $ext;
            }
        }
        if (isset($this->addressContactPoint)) {
            $out->addressContactPoint = $this->addressContactPoint;
        }
        if (isset($this->addressExtendedContactDetail)) {
            $out->addressExtendedContactDetail = $this->addressExtendedContactDetail;
        }
        if (isset($this->additionalInfo) && [] !== $this->additionalInfo) {
            $vals = [];
            $exts = [];
            $hasVals = false;
            $hasExts = false;
            foreach ($this->additionalInfo as $v) {
                $val = $v->getValue();
                if (null !== $val) {
                    $hasVals = true;
                    $vals[] = $val;
                } else {
                    $vals[] = null;
                }
                if ($v->_nonValueFieldDefined()) {
                    $hasExts = true;
                    $ext = $v->jsonSerialize();
                    unset($ext->value);
                    $exts[] = $ext;
                } else {
                    $exts[] = null;
                }
            }
            if ($hasVals) {
                $out->additionalInfo = $vals;
            }
            if ($hasExts) {
                $out->_additionalInfo = $exts;
            }
        }
        if (isset($this->maxParticipants)) {
            if (null !== ($val = $this->maxParticipants->getValue())) {
                $out->maxParticipants = $val;
            }
            if ($this->maxParticipants->_nonValueFieldDefined()) {
                $ext = $this->maxParticipants->jsonSerialize();
                unset($ext->value);
                $out->_maxParticipants = $ext;
            }
        }
        if (isset($this->sessionKey)) {
            if (null !== ($val = $this->sessionKey->getValue())) {
                $out->sessionKey = $val;
            }
            if ($this->sessionKey->_nonValueFieldDefined()) {
                $ext = $this->sessionKey->jsonSerialize();
                unset($ext->value);
                $out->_sessionKey = $ext;
            }
        }
        return $out;
    }
}