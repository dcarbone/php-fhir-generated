<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 3rd, 2025 17:37+0000
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

use DCarbone\PHPFHIRGenerated\Constants;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ResourceTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubscription\FHIRSubscriptionFilterBy;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubscription\FHIRSubscriptionParameter;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRContactPoint;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMeta;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInstant;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRSubscriptionPayloadContent;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRSubscriptionStatusCodes;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUnsignedInt;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUrl;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCanonicalPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRSubscriptionPayloadContentEnum;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRSubscriptionStatusCodesEnum;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRInstantPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRPositiveIntPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRResourceContainer;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUnsignedIntPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUrlPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Version;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionTypeMap;

/**
 * The subscription resource describes a particular client's request to be notified
 * about a SubscriptionTopic.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 */
class FHIRSubscription extends FHIRDomainResource implements VersionContainedTypeInterface
{
    use TypeValidationsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_SUBSCRIPTION;

    /* class_default.php:47 */
    public const FIELD_IDENTIFIER = 'identifier';
    public const FIELD_NAME = 'name';
    public const FIELD_NAME_EXT = '_name';
    public const FIELD_STATUS = 'status';
    public const FIELD_STATUS_EXT = '_status';
    public const FIELD_TOPIC = 'topic';
    public const FIELD_TOPIC_EXT = '_topic';
    public const FIELD_CONTACT = 'contact';
    public const FIELD_END = 'end';
    public const FIELD_END_EXT = '_end';
    public const FIELD_MANAGING_ENTITY = 'managingEntity';
    public const FIELD_REASON = 'reason';
    public const FIELD_REASON_EXT = '_reason';
    public const FIELD_FILTER_BY = 'filterBy';
    public const FIELD_CHANNEL_TYPE = 'channelType';
    public const FIELD_ENDPOINT = 'endpoint';
    public const FIELD_ENDPOINT_EXT = '_endpoint';
    public const FIELD_PARAMETER = 'parameter';
    public const FIELD_HEARTBEAT_PERIOD = 'heartbeatPeriod';
    public const FIELD_HEARTBEAT_PERIOD_EXT = '_heartbeatPeriod';
    public const FIELD_TIMEOUT = 'timeout';
    public const FIELD_TIMEOUT_EXT = '_timeout';
    public const FIELD_CONTENT_TYPE = 'contentType';
    public const FIELD_CONTENT_TYPE_EXT = '_contentType';
    public const FIELD_CONTENT = 'content';
    public const FIELD_CONTENT_EXT = '_content';
    public const FIELD_MAX_COUNT = 'maxCount';
    public const FIELD_MAX_COUNT_EXT = '_maxCount';

    /* class_default.php:66 */
    // The default validation rules for this type as defined in the FHIR schema used to generate this code.
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_STATUS => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_TOPIC => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_CHANNEL_TYPE => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /* class_default.php:95 */
    private array $_valueXMLLocations = [
        self::FIELD_NAME => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_STATUS => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_TOPIC => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_END => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_REASON => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_ENDPOINT => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_HEARTBEAT_PERIOD => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_TIMEOUT => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_CONTENT_TYPE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_CONTENT => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_MAX_COUNT => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:111 */
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A formal identifier that is used to identify this code system when it is
     * represented in other formats, or referenced in a specification, model, design or
     * an instance.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier[] 
     */
    protected array $identifier;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A natural language name identifying the subscription.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    protected FHIRString $name;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of the subscription, which marks the server state for managing the
     * subscription.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRSubscriptionStatusCodes 
     */
    protected FHIRSubscriptionStatusCodes $status;
    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The reference to the subscription topic to be notified about.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical 
     */
    protected FHIRCanonical $topic;
    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Contact details for a human to contact about the subscription. The primary use
     * of this for system administrator troubleshooting.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRContactPoint[] 
     */
    protected array $contact;
    /**
     * An instant in time - known at least to the second
     * Note: This is intended for where precisely observed times are required,
     * typically system logs etc., and not human-reported times - for them, see date
     * and dateTime (which can be as precise as instant, but is not required to be)
     * below. UTC offset is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The time for the server to turn the subscription off.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInstant 
     */
    protected FHIRInstant $end;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Entity with authorization to make subsequent revisions to the Subscription and
     * also determines what data the subscription is authorized to disclose.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference 
     */
    protected FHIRReference $managingEntity;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A description of why this subscription is defined.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    protected FHIRString $reason;
    /**
     * The subscription resource describes a particular client's request to be notified
     * about a SubscriptionTopic.
     *
     * The filter properties to be applied to narrow the subscription topic stream.
     * When multiple filters are applied, evaluates to true if all the conditions
     * applicable to that resource are met; otherwise it returns false (i.e., logical
     * AND).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubscription\FHIRSubscriptionFilterBy[] 
     */
    protected array $filterBy;
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of channel to send notifications on.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding 
     */
    protected FHIRCoding $channelType;
    /**
     * A URI that is a literal reference
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The url that describes the actual end-point to send notifications to.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUrl 
     */
    protected FHIRUrl $endpoint;
    /**
     * The subscription resource describes a particular client's request to be notified
     * about a SubscriptionTopic.
     *
     * Channel-dependent information to send as part of the notification (e.g., HTTP
     * Headers).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubscription\FHIRSubscriptionParameter[] 
     */
    protected array $parameter;
    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * If present, a 'heartbeat' notification (keep-alive) is sent via this channel
     * with an interval period equal to this elements integer value in seconds. If not
     * present, a heartbeat notification is not sent.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUnsignedInt 
     */
    protected FHIRUnsignedInt $heartbeatPeriod;
    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * If present, the maximum amount of time a server will allow before failing a
     * notification attempt.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUnsignedInt 
     */
    protected FHIRUnsignedInt $timeout;
    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The MIME type to send the payload in - e.g., `application/fhir+xml` or
     * `application/fhir+json`. Note that: * clients may request notifications in a
     * specific FHIR version by using the [FHIR Version
     * Parameter](http.html#version-parameter) - e.g., `application/fhir+json;
     * fhirVersion=4.0`. * additional MIME types can be allowed by channels - e.g.,
     * `text/plain` and `text/html` are defined by the Email channel.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCode 
     */
    protected FHIRCode $contentType;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * How much of the resource content to deliver in the notification payload. The
     * choices are an empty payload, only the resource id, or the full resource
     * content.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRSubscriptionPayloadContent 
     */
    protected FHIRSubscriptionPayloadContent $content;
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * If present, the maximum number of events that will be included in a notification
     * bundle. Note that this is not a strict limit on the number of entries in a
     * bundle, as dependent resources can be included.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt 
     */
    protected FHIRPositiveInt $maxCount;

    /* constructor.php:62 */
    /**
     * FHIRSubscription Constructor
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMeta $meta
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri $implicitRules
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCode $language
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRNarrative $text
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRResourceContainer[]|\DCarbone\PHPFHIRGenerated\Versions\R5\VersionContainedTypeInterface[] $contained
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $extension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier[] $identifier
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $name
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRSubscriptionStatusCodesEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRSubscriptionStatusCodes $status
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCanonicalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical $topic
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRContactPoint[] $contact
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRInstantPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInstant $end
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $managingEntity
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $reason
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubscription\FHIRSubscriptionFilterBy[] $filterBy
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding $channelType
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUrlPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUrl $endpoint
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubscription\FHIRSubscriptionParameter[] $parameter
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUnsignedIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUnsignedInt $heartbeatPeriod
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUnsignedIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUnsignedInt $timeout
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCode $contentType
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRSubscriptionPayloadContentEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRSubscriptionPayloadContent $content
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt $maxCount
     * @param null|string[] $fhirComments
     */
    public function __construct(null|string|FHIRIdPrimitive|FHIRId $id = null,
                                null|FHIRMeta $meta = null,
                                null|string|FHIRUriPrimitive|FHIRUri $implicitRules = null,
                                null|string|FHIRCodePrimitive|FHIRCode $language = null,
                                null|FHIRNarrative $text = null,
                                null|iterable $contained = null,
                                null|iterable $extension = null,
                                null|iterable $modifierExtension = null,
                                null|iterable $identifier = null,
                                null|string|FHIRStringPrimitive|FHIRString $name = null,
                                null|string|FHIRSubscriptionStatusCodesEnum|FHIRSubscriptionStatusCodes $status = null,
                                null|string|FHIRCanonicalPrimitive|FHIRCanonical $topic = null,
                                null|iterable $contact = null,
                                null|string|\DateTimeInterface|FHIRInstantPrimitive|FHIRInstant $end = null,
                                null|FHIRReference $managingEntity = null,
                                null|string|FHIRStringPrimitive|FHIRString $reason = null,
                                null|iterable $filterBy = null,
                                null|FHIRCoding $channelType = null,
                                null|string|FHIRUrlPrimitive|FHIRUrl $endpoint = null,
                                null|iterable $parameter = null,
                                null|string|int|float|FHIRUnsignedIntPrimitive|FHIRUnsignedInt $heartbeatPeriod = null,
                                null|string|int|float|FHIRUnsignedIntPrimitive|FHIRUnsignedInt $timeout = null,
                                null|string|FHIRCodePrimitive|FHIRCode $contentType = null,
                                null|string|FHIRSubscriptionPayloadContentEnum|FHIRSubscriptionPayloadContent $content = null,
                                null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $maxCount = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(id: $id,
                            meta: $meta,
                            implicitRules: $implicitRules,
                            language: $language,
                            text: $text,
                            contained: $contained,
                            extension: $extension,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $identifier) {
            $this->setIdentifier(...$identifier);
        }
        if (null !== $name) {
            $this->setName($name);
        }
        if (null !== $status) {
            $this->setStatus($status);
        }
        if (null !== $topic) {
            $this->setTopic($topic);
        }
        if (null !== $contact) {
            $this->setContact(...$contact);
        }
        if (null !== $end) {
            $this->setEnd($end);
        }
        if (null !== $managingEntity) {
            $this->setManagingEntity($managingEntity);
        }
        if (null !== $reason) {
            $this->setReason($reason);
        }
        if (null !== $filterBy) {
            $this->setFilterBy(...$filterBy);
        }
        if (null !== $channelType) {
            $this->setChannelType($channelType);
        }
        if (null !== $endpoint) {
            $this->setEndpoint($endpoint);
        }
        if (null !== $parameter) {
            $this->setParameter(...$parameter);
        }
        if (null !== $heartbeatPeriod) {
            $this->setHeartbeatPeriod($heartbeatPeriod);
        }
        if (null !== $timeout) {
            $this->setTimeout($timeout);
        }
        if (null !== $contentType) {
            $this->setContentType($contentType);
        }
        if (null !== $content) {
            $this->setContent($content);
        }
        if (null !== $maxCount) {
            $this->setMaxCount($maxCount);
        }
    }

    /* class_default.php:143 */
    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:155 */
    /**
     * @return string
     */
    public function _getResourceType(): string
    {
        return static::FHIR_TYPE_NAME;
    }

    /* class_default.php:169 */
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A formal identifier that is used to identify this code system when it is
     * represented in other formats, or referenced in a specification, model, design or
     * an instance.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier[]
     */
    public function getIdentifier(): array
    {
        return $this->identifier ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier>
     */
    public function getIdentifierIterator(): iterable
    {
        if (!isset($this->identifier)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->identifier);
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A formal identifier that is used to identify this code system when it is
     * represented in other formats, or referenced in a specification, model, design or
     * an instance.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier $identifier
     * @return static
     */
    public function addIdentifier(FHIRIdentifier $identifier): self
    {
        if (!isset($this->identifier)) {
            $this->identifier = [];
        }
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A formal identifier that is used to identify this code system when it is
     * represented in other formats, or referenced in a specification, model, design or
     * an instance.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier ...$identifier
     * @return static
     */
    public function setIdentifier(FHIRIdentifier ...$identifier): self
    {
        if ([] === $identifier) {
            unset($this->identifier);
            return $this;
        }
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A natural language name identifying the subscription.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString
     */
    public function getName(): null|FHIRString
    {
        return $this->name ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A natural language name identifying the subscription.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $name
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setName(null|string|FHIRStringPrimitive|FHIRString $name,
                            ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $name) {
            unset($this->name);
            return $this;
        }
        if (!($name instanceof FHIRString)) {
            $name = new FHIRString(value: $name);
        }
        $this->name = $name;
        if ($this->_valueXMLLocations[self::FIELD_NAME] !== $valueXMLLocation) {
            $this->_setNameValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the name element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getNameValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_NAME];
    }

    /**
     * Set the location the "value" field of the name element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setNameValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_NAME] = $valueXMLLocation;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of the subscription, which marks the server state for managing the
     * subscription.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRSubscriptionStatusCodes
     */
    public function getStatus(): null|FHIRSubscriptionStatusCodes
    {
        return $this->status ?? null;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of the subscription, which marks the server state for managing the
     * subscription.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRSubscriptionStatusCodesEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRSubscriptionStatusCodes $status
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setStatus(null|string|FHIRSubscriptionStatusCodesEnum|FHIRSubscriptionStatusCodes $status,
                              ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $status) {
            unset($this->status);
            return $this;
        }
        if (!($status instanceof FHIRSubscriptionStatusCodes)) {
            $status = new FHIRSubscriptionStatusCodes(value: $status);
        }
        $this->status = $status;
        if ($this->_valueXMLLocations[self::FIELD_STATUS] !== $valueXMLLocation) {
            $this->_setStatusValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the status element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getStatusValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_STATUS];
    }

    /**
     * Set the location the "value" field of the status element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setStatusValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_STATUS] = $valueXMLLocation;
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The reference to the subscription topic to be notified about.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical
     */
    public function getTopic(): null|FHIRCanonical
    {
        return $this->topic ?? null;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The reference to the subscription topic to be notified about.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCanonicalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical $topic
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setTopic(null|string|FHIRCanonicalPrimitive|FHIRCanonical $topic,
                             ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $topic) {
            unset($this->topic);
            return $this;
        }
        if (!($topic instanceof FHIRCanonical)) {
            $topic = new FHIRCanonical(value: $topic);
        }
        $this->topic = $topic;
        if ($this->_valueXMLLocations[self::FIELD_TOPIC] !== $valueXMLLocation) {
            $this->_setTopicValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the topic element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getTopicValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_TOPIC];
    }

    /**
     * Set the location the "value" field of the topic element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setTopicValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_TOPIC] = $valueXMLLocation;
        return $this;
    }

    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Contact details for a human to contact about the subscription. The primary use
     * of this for system administrator troubleshooting.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRContactPoint[]
     */
    public function getContact(): array
    {
        return $this->contact ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRContactPoint>
     */
    public function getContactIterator(): iterable
    {
        if (!isset($this->contact)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->contact);
    }

    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Contact details for a human to contact about the subscription. The primary use
     * of this for system administrator troubleshooting.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRContactPoint $contact
     * @return static
     */
    public function addContact(FHIRContactPoint $contact): self
    {
        if (!isset($this->contact)) {
            $this->contact = [];
        }
        $this->contact[] = $contact;
        return $this;
    }

    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Contact details for a human to contact about the subscription. The primary use
     * of this for system administrator troubleshooting.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRContactPoint ...$contact
     * @return static
     */
    public function setContact(FHIRContactPoint ...$contact): self
    {
        if ([] === $contact) {
            unset($this->contact);
            return $this;
        }
        $this->contact = $contact;
        return $this;
    }

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for where precisely observed times are required,
     * typically system logs etc., and not human-reported times - for them, see date
     * and dateTime (which can be as precise as instant, but is not required to be)
     * below. UTC offset is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The time for the server to turn the subscription off.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInstant
     */
    public function getEnd(): null|FHIRInstant
    {
        return $this->end ?? null;
    }

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for where precisely observed times are required,
     * typically system logs etc., and not human-reported times - for them, see date
     * and dateTime (which can be as precise as instant, but is not required to be)
     * below. UTC offset is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The time for the server to turn the subscription off.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRInstantPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInstant $end
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setEnd(null|string|\DateTimeInterface|FHIRInstantPrimitive|FHIRInstant $end,
                           ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $end) {
            unset($this->end);
            return $this;
        }
        if (!($end instanceof FHIRInstant)) {
            $end = new FHIRInstant(value: $end);
        }
        $this->end = $end;
        if ($this->_valueXMLLocations[self::FIELD_END] !== $valueXMLLocation) {
            $this->_setEndValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the end element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getEndValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_END];
    }

    /**
     * Set the location the "value" field of the end element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setEndValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_END] = $valueXMLLocation;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Entity with authorization to make subsequent revisions to the Subscription and
     * also determines what data the subscription is authorized to disclose.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getManagingEntity(): null|FHIRReference
    {
        return $this->managingEntity ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Entity with authorization to make subsequent revisions to the Subscription and
     * also determines what data the subscription is authorized to disclose.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $managingEntity
     * @return static
     */
    public function setManagingEntity(null|FHIRReference $managingEntity): self
    {
        if (null === $managingEntity) {
            unset($this->managingEntity);
            return $this;
        }
        $this->managingEntity = $managingEntity;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A description of why this subscription is defined.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString
     */
    public function getReason(): null|FHIRString
    {
        return $this->reason ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A description of why this subscription is defined.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $reason
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setReason(null|string|FHIRStringPrimitive|FHIRString $reason,
                              ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $reason) {
            unset($this->reason);
            return $this;
        }
        if (!($reason instanceof FHIRString)) {
            $reason = new FHIRString(value: $reason);
        }
        $this->reason = $reason;
        if ($this->_valueXMLLocations[self::FIELD_REASON] !== $valueXMLLocation) {
            $this->_setReasonValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the reason element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getReasonValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_REASON];
    }

    /**
     * Set the location the "value" field of the reason element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setReasonValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_REASON] = $valueXMLLocation;
        return $this;
    }

    /**
     * The subscription resource describes a particular client's request to be notified
     * about a SubscriptionTopic.
     *
     * The filter properties to be applied to narrow the subscription topic stream.
     * When multiple filters are applied, evaluates to true if all the conditions
     * applicable to that resource are met; otherwise it returns false (i.e., logical
     * AND).
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubscription\FHIRSubscriptionFilterBy[]
     */
    public function getFilterBy(): array
    {
        return $this->filterBy ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubscription\FHIRSubscriptionFilterBy>
     */
    public function getFilterByIterator(): iterable
    {
        if (!isset($this->filterBy)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->filterBy);
    }

    /**
     * The subscription resource describes a particular client's request to be notified
     * about a SubscriptionTopic.
     *
     * The filter properties to be applied to narrow the subscription topic stream.
     * When multiple filters are applied, evaluates to true if all the conditions
     * applicable to that resource are met; otherwise it returns false (i.e., logical
     * AND).
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubscription\FHIRSubscriptionFilterBy $filterBy
     * @return static
     */
    public function addFilterBy(FHIRSubscriptionFilterBy $filterBy): self
    {
        if (!isset($this->filterBy)) {
            $this->filterBy = [];
        }
        $this->filterBy[] = $filterBy;
        return $this;
    }

    /**
     * The subscription resource describes a particular client's request to be notified
     * about a SubscriptionTopic.
     *
     * The filter properties to be applied to narrow the subscription topic stream.
     * When multiple filters are applied, evaluates to true if all the conditions
     * applicable to that resource are met; otherwise it returns false (i.e., logical
     * AND).
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubscription\FHIRSubscriptionFilterBy ...$filterBy
     * @return static
     */
    public function setFilterBy(FHIRSubscriptionFilterBy ...$filterBy): self
    {
        if ([] === $filterBy) {
            unset($this->filterBy);
            return $this;
        }
        $this->filterBy = $filterBy;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of channel to send notifications on.
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
     * The type of channel to send notifications on.
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
     * The url that describes the actual end-point to send notifications to.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUrl
     */
    public function getEndpoint(): null|FHIRUrl
    {
        return $this->endpoint ?? null;
    }

    /**
     * A URI that is a literal reference
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The url that describes the actual end-point to send notifications to.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUrlPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUrl $endpoint
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setEndpoint(null|string|FHIRUrlPrimitive|FHIRUrl $endpoint,
                                ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $endpoint) {
            unset($this->endpoint);
            return $this;
        }
        if (!($endpoint instanceof FHIRUrl)) {
            $endpoint = new FHIRUrl(value: $endpoint);
        }
        $this->endpoint = $endpoint;
        if ($this->_valueXMLLocations[self::FIELD_ENDPOINT] !== $valueXMLLocation) {
            $this->_setEndpointValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the endpoint element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getEndpointValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_ENDPOINT];
    }

    /**
     * Set the location the "value" field of the endpoint element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setEndpointValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_ENDPOINT] = $valueXMLLocation;
        return $this;
    }

    /**
     * The subscription resource describes a particular client's request to be notified
     * about a SubscriptionTopic.
     *
     * Channel-dependent information to send as part of the notification (e.g., HTTP
     * Headers).
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubscription\FHIRSubscriptionParameter[]
     */
    public function getParameter(): array
    {
        return $this->parameter ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubscription\FHIRSubscriptionParameter>
     */
    public function getParameterIterator(): iterable
    {
        if (!isset($this->parameter)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->parameter);
    }

    /**
     * The subscription resource describes a particular client's request to be notified
     * about a SubscriptionTopic.
     *
     * Channel-dependent information to send as part of the notification (e.g., HTTP
     * Headers).
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubscription\FHIRSubscriptionParameter $parameter
     * @return static
     */
    public function addParameter(FHIRSubscriptionParameter $parameter): self
    {
        if (!isset($this->parameter)) {
            $this->parameter = [];
        }
        $this->parameter[] = $parameter;
        return $this;
    }

    /**
     * The subscription resource describes a particular client's request to be notified
     * about a SubscriptionTopic.
     *
     * Channel-dependent information to send as part of the notification (e.g., HTTP
     * Headers).
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubscription\FHIRSubscriptionParameter ...$parameter
     * @return static
     */
    public function setParameter(FHIRSubscriptionParameter ...$parameter): self
    {
        if ([] === $parameter) {
            unset($this->parameter);
            return $this;
        }
        $this->parameter = $parameter;
        return $this;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * If present, a 'heartbeat' notification (keep-alive) is sent via this channel
     * with an interval period equal to this elements integer value in seconds. If not
     * present, a heartbeat notification is not sent.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUnsignedInt
     */
    public function getHeartbeatPeriod(): null|FHIRUnsignedInt
    {
        return $this->heartbeatPeriod ?? null;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * If present, a 'heartbeat' notification (keep-alive) is sent via this channel
     * with an interval period equal to this elements integer value in seconds. If not
     * present, a heartbeat notification is not sent.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUnsignedIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUnsignedInt $heartbeatPeriod
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setHeartbeatPeriod(null|string|int|float|FHIRUnsignedIntPrimitive|FHIRUnsignedInt $heartbeatPeriod,
                                       ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $heartbeatPeriod) {
            unset($this->heartbeatPeriod);
            return $this;
        }
        if (!($heartbeatPeriod instanceof FHIRUnsignedInt)) {
            $heartbeatPeriod = new FHIRUnsignedInt(value: $heartbeatPeriod);
        }
        $this->heartbeatPeriod = $heartbeatPeriod;
        if ($this->_valueXMLLocations[self::FIELD_HEARTBEAT_PERIOD] !== $valueXMLLocation) {
            $this->_setHeartbeatPeriodValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the heartbeatPeriod element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getHeartbeatPeriodValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_HEARTBEAT_PERIOD];
    }

    /**
     * Set the location the "value" field of the heartbeatPeriod element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setHeartbeatPeriodValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_HEARTBEAT_PERIOD] = $valueXMLLocation;
        return $this;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * If present, the maximum amount of time a server will allow before failing a
     * notification attempt.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUnsignedInt
     */
    public function getTimeout(): null|FHIRUnsignedInt
    {
        return $this->timeout ?? null;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * If present, the maximum amount of time a server will allow before failing a
     * notification attempt.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUnsignedIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUnsignedInt $timeout
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setTimeout(null|string|int|float|FHIRUnsignedIntPrimitive|FHIRUnsignedInt $timeout,
                               ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $timeout) {
            unset($this->timeout);
            return $this;
        }
        if (!($timeout instanceof FHIRUnsignedInt)) {
            $timeout = new FHIRUnsignedInt(value: $timeout);
        }
        $this->timeout = $timeout;
        if ($this->_valueXMLLocations[self::FIELD_TIMEOUT] !== $valueXMLLocation) {
            $this->_setTimeoutValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the timeout element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getTimeoutValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_TIMEOUT];
    }

    /**
     * Set the location the "value" field of the timeout element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setTimeoutValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_TIMEOUT] = $valueXMLLocation;
        return $this;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The MIME type to send the payload in - e.g., `application/fhir+xml` or
     * `application/fhir+json`. Note that: * clients may request notifications in a
     * specific FHIR version by using the [FHIR Version
     * Parameter](http.html#version-parameter) - e.g., `application/fhir+json;
     * fhirVersion=4.0`. * additional MIME types can be allowed by channels - e.g.,
     * `text/plain` and `text/html` are defined by the Email channel.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCode
     */
    public function getContentType(): null|FHIRCode
    {
        return $this->contentType ?? null;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The MIME type to send the payload in - e.g., `application/fhir+xml` or
     * `application/fhir+json`. Note that: * clients may request notifications in a
     * specific FHIR version by using the [FHIR Version
     * Parameter](http.html#version-parameter) - e.g., `application/fhir+json;
     * fhirVersion=4.0`. * additional MIME types can be allowed by channels - e.g.,
     * `text/plain` and `text/html` are defined by the Email channel.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCode $contentType
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setContentType(null|string|FHIRCodePrimitive|FHIRCode $contentType,
                                   ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $contentType) {
            unset($this->contentType);
            return $this;
        }
        if (!($contentType instanceof FHIRCode)) {
            $contentType = new FHIRCode(value: $contentType);
        }
        $this->contentType = $contentType;
        if ($this->_valueXMLLocations[self::FIELD_CONTENT_TYPE] !== $valueXMLLocation) {
            $this->_setContentTypeValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the contentType element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getContentTypeValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_CONTENT_TYPE];
    }

    /**
     * Set the location the "value" field of the contentType element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setContentTypeValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_CONTENT_TYPE] = $valueXMLLocation;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * How much of the resource content to deliver in the notification payload. The
     * choices are an empty payload, only the resource id, or the full resource
     * content.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRSubscriptionPayloadContent
     */
    public function getContent(): null|FHIRSubscriptionPayloadContent
    {
        return $this->content ?? null;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * How much of the resource content to deliver in the notification payload. The
     * choices are an empty payload, only the resource id, or the full resource
     * content.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRSubscriptionPayloadContentEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRSubscriptionPayloadContent $content
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setContent(null|string|FHIRSubscriptionPayloadContentEnum|FHIRSubscriptionPayloadContent $content,
                               ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $content) {
            unset($this->content);
            return $this;
        }
        if (!($content instanceof FHIRSubscriptionPayloadContent)) {
            $content = new FHIRSubscriptionPayloadContent(value: $content);
        }
        $this->content = $content;
        if ($this->_valueXMLLocations[self::FIELD_CONTENT] !== $valueXMLLocation) {
            $this->_setContentValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the content element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getContentValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_CONTENT];
    }

    /**
     * Set the location the "value" field of the content element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setContentValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_CONTENT] = $valueXMLLocation;
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * If present, the maximum number of events that will be included in a notification
     * bundle. Note that this is not a strict limit on the number of entries in a
     * bundle, as dependent resources can be included.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt
     */
    public function getMaxCount(): null|FHIRPositiveInt
    {
        return $this->maxCount ?? null;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * If present, the maximum number of events that will be included in a notification
     * bundle. Note that this is not a strict limit on the number of entries in a
     * bundle, as dependent resources can be included.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt $maxCount
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setMaxCount(null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $maxCount,
                                ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $maxCount) {
            unset($this->maxCount);
            return $this;
        }
        if (!($maxCount instanceof FHIRPositiveInt)) {
            $maxCount = new FHIRPositiveInt(value: $maxCount);
        }
        $this->maxCount = $maxCount;
        if ($this->_valueXMLLocations[self::FIELD_MAX_COUNT] !== $valueXMLLocation) {
            $this->_setMaxCountValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the maxCount element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getMaxCountValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_MAX_COUNT];
    }

    /**
     * Set the location the "value" field of the maxCount element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setMaxCountValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_MAX_COUNT] = $valueXMLLocation;
        return $this;
    }

    /* class_default.php:208 */
    /**
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRSubscription $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRSubscription
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|UnserializeConfig $config = null,
                                          null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRSubscription)) {
            throw new \RuntimeException(sprintf(
                '%s::xmlUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null === $config) {
            $config = (new Version())->getConfig()->getUnserializeConfig();
        }
        if (is_string($element)) {
            $element = new \SimpleXMLElement($element, $config->getLibxmlOpts());
        }
        if (null !== ($ns = $element->getNamespaces()[''] ?? null)) {
            $type->_setSourceXMLNS((string)$ns);
        }
        foreach ($element->children() as $ce) {
            $cen = $ce->getName();
            if (self::FIELD_ID === $cen) {
                $type->setId(FHIRId::xmlUnserialize($ce, $config));
            } else if (self::FIELD_META === $cen) {
                $type->setMeta(FHIRMeta::xmlUnserialize($ce, $config));
            } else if (self::FIELD_IMPLICIT_RULES === $cen) {
                $type->setImplicitRules(FHIRUri::xmlUnserialize($ce, $config));
            } else if (self::FIELD_LANGUAGE === $cen) {
                $type->setLanguage(FHIRCode::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TEXT === $cen) {
                $type->setText(FHIRNarrative::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CONTAINED === $cen) {
                foreach ($ce->children() as $cen) {
                    /** @var \DCarbone\PHPFHIRGenerated\Versions\R5\VersionContainedTypeInterface $cn */
                    $cn = VersionTypeMap::getContainedTypeClassNameFromXML($cen);
                    $type->addContained($cn::xmlUnserialize($cen, $config));
                }
            } else if (self::FIELD_EXTENSION === $cen) {
                $type->addExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_IDENTIFIER === $cen) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($ce, $config));
            } else if (self::FIELD_NAME === $cen) {
                $type->setName(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_STATUS === $cen) {
                $type->setStatus(FHIRSubscriptionStatusCodes::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TOPIC === $cen) {
                $type->setTopic(FHIRCanonical::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CONTACT === $cen) {
                $type->addContact(FHIRContactPoint::xmlUnserialize($ce, $config));
            } else if (self::FIELD_END === $cen) {
                $type->setEnd(FHIRInstant::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MANAGING_ENTITY === $cen) {
                $type->setManagingEntity(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_REASON === $cen) {
                $type->setReason(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_FILTER_BY === $cen) {
                $type->addFilterBy(FHIRSubscriptionFilterBy::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CHANNEL_TYPE === $cen) {
                $type->setChannelType(FHIRCoding::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ENDPOINT === $cen) {
                $type->setEndpoint(FHIRUrl::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PARAMETER === $cen) {
                $type->addParameter(FHIRSubscriptionParameter::xmlUnserialize($ce, $config));
            } else if (self::FIELD_HEARTBEAT_PERIOD === $cen) {
                $type->setHeartbeatPeriod(FHIRUnsignedInt::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TIMEOUT === $cen) {
                $type->setTimeout(FHIRUnsignedInt::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CONTENT_TYPE === $cen) {
                $type->setContentType(FHIRCode::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CONTENT === $cen) {
                $type->setContent(FHIRSubscriptionPayloadContent::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MAX_COUNT === $cen) {
                $type->setMaxCount(FHIRPositiveInt::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            if (isset($type->id)) {
                $type->id->setValue((string)$attributes[self::FIELD_ID]);
                $type->_setIdValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setId((string)$attributes[self::FIELD_ID], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_IMPLICIT_RULES])) {
            if (isset($type->implicitRules)) {
                $type->implicitRules->setValue((string)$attributes[self::FIELD_IMPLICIT_RULES]);
                $type->_setImplicitRulesValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setImplicitRules((string)$attributes[self::FIELD_IMPLICIT_RULES], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_LANGUAGE])) {
            if (isset($type->language)) {
                $type->language->setValue((string)$attributes[self::FIELD_LANGUAGE]);
                $type->_setLanguageValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setLanguage((string)$attributes[self::FIELD_LANGUAGE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_NAME])) {
            if (isset($type->name)) {
                $type->name->setValue((string)$attributes[self::FIELD_NAME]);
                $type->_setNameValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setName((string)$attributes[self::FIELD_NAME], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_STATUS])) {
            if (isset($type->status)) {
                $type->status->setValue((string)$attributes[self::FIELD_STATUS]);
                $type->_setStatusValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setStatus((string)$attributes[self::FIELD_STATUS], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_TOPIC])) {
            if (isset($type->topic)) {
                $type->topic->setValue((string)$attributes[self::FIELD_TOPIC]);
                $type->_setTopicValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setTopic((string)$attributes[self::FIELD_TOPIC], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_END])) {
            if (isset($type->end)) {
                $type->end->setValue((string)$attributes[self::FIELD_END]);
                $type->_setEndValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setEnd((string)$attributes[self::FIELD_END], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_REASON])) {
            if (isset($type->reason)) {
                $type->reason->setValue((string)$attributes[self::FIELD_REASON]);
                $type->_setReasonValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setReason((string)$attributes[self::FIELD_REASON], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_ENDPOINT])) {
            if (isset($type->endpoint)) {
                $type->endpoint->setValue((string)$attributes[self::FIELD_ENDPOINT]);
                $type->_setEndpointValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setEndpoint((string)$attributes[self::FIELD_ENDPOINT], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_HEARTBEAT_PERIOD])) {
            if (isset($type->heartbeatPeriod)) {
                $type->heartbeatPeriod->setValue((string)$attributes[self::FIELD_HEARTBEAT_PERIOD]);
                $type->_setHeartbeatPeriodValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setHeartbeatPeriod((string)$attributes[self::FIELD_HEARTBEAT_PERIOD], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_TIMEOUT])) {
            if (isset($type->timeout)) {
                $type->timeout->setValue((string)$attributes[self::FIELD_TIMEOUT]);
                $type->_setTimeoutValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setTimeout((string)$attributes[self::FIELD_TIMEOUT], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_CONTENT_TYPE])) {
            if (isset($type->contentType)) {
                $type->contentType->setValue((string)$attributes[self::FIELD_CONTENT_TYPE]);
                $type->_setContentTypeValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setContentType((string)$attributes[self::FIELD_CONTENT_TYPE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_CONTENT])) {
            if (isset($type->content)) {
                $type->content->setValue((string)$attributes[self::FIELD_CONTENT]);
                $type->_setContentValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setContent((string)$attributes[self::FIELD_CONTENT], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_MAX_COUNT])) {
            if (isset($type->maxCount)) {
                $type->maxCount->setValue((string)$attributes[self::FIELD_MAX_COUNT]);
                $type->_setMaxCountValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setMaxCount((string)$attributes[self::FIELD_MAX_COUNT], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        return $type;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\XMLWriter $xw
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Encoding\XMLWriter
     */
    public function xmlSerialize(null|XMLWriter $xw = null,
                                 null|SerializeConfig $config = null): XMLWriter
    {
        if (null === $config) {
            $config = (new Version())->getConfig()->getSerializeConfig();
        }
        if (null === $xw) {
            $xw = new XMLWriter($config);
        }
        if (!$xw->isOpen()) {
            $xw->openMemory();
        }
        if (!$xw->isDocStarted()) {
            $docStarted = true;
            $xw->startDocument();
        }
        if (!$xw->isRootOpen()) {
            $rootOpened = true;
            $xw->openRootNode('Subscription', $this->_getSourceXMLNS());
        }
        if (isset($this->name) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_NAME]) {
            $xw->writeAttribute(self::FIELD_NAME, $this->name->_getFormattedValue());
        }
        if (isset($this->status) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_STATUS]) {
            $xw->writeAttribute(self::FIELD_STATUS, $this->status->_getFormattedValue());
        }
        if (isset($this->topic) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_TOPIC]) {
            $xw->writeAttribute(self::FIELD_TOPIC, $this->topic->_getFormattedValue());
        }
        if (isset($this->end) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_END]) {
            $xw->writeAttribute(self::FIELD_END, $this->end->_getFormattedValue());
        }
        if (isset($this->reason) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_REASON]) {
            $xw->writeAttribute(self::FIELD_REASON, $this->reason->_getFormattedValue());
        }
        if (isset($this->endpoint) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_ENDPOINT]) {
            $xw->writeAttribute(self::FIELD_ENDPOINT, $this->endpoint->_getFormattedValue());
        }
        if (isset($this->heartbeatPeriod) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_HEARTBEAT_PERIOD]) {
            $xw->writeAttribute(self::FIELD_HEARTBEAT_PERIOD, $this->heartbeatPeriod->_getFormattedValue());
        }
        if (isset($this->timeout) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_TIMEOUT]) {
            $xw->writeAttribute(self::FIELD_TIMEOUT, $this->timeout->_getFormattedValue());
        }
        if (isset($this->contentType) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_CONTENT_TYPE]) {
            $xw->writeAttribute(self::FIELD_CONTENT_TYPE, $this->contentType->_getFormattedValue());
        }
        if (isset($this->content) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_CONTENT]) {
            $xw->writeAttribute(self::FIELD_CONTENT, $this->content->_getFormattedValue());
        }
        if (isset($this->maxCount) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_MAX_COUNT]) {
            $xw->writeAttribute(self::FIELD_MAX_COUNT, $this->maxCount->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->identifier)) {
            foreach ($this->identifier as $v) {
                $xw->startElement(self::FIELD_IDENTIFIER);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->name)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_NAME]
                || $this->name->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_NAME);
            $this->name->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_NAME]);
            $xw->endElement();
        }
        if (isset($this->status)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_STATUS]
                || $this->status->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_STATUS);
            $this->status->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_STATUS]);
            $xw->endElement();
        }
        if (isset($this->topic)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_TOPIC]
                || $this->topic->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_TOPIC);
            $this->topic->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_TOPIC]);
            $xw->endElement();
        }
        if (isset($this->contact)) {
            foreach ($this->contact as $v) {
                $xw->startElement(self::FIELD_CONTACT);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->end)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_END]
                || $this->end->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_END);
            $this->end->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_END]);
            $xw->endElement();
        }
        if (isset($this->managingEntity)) {
            $xw->startElement(self::FIELD_MANAGING_ENTITY);
            $this->managingEntity->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->reason)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_REASON]
                || $this->reason->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_REASON);
            $this->reason->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_REASON]);
            $xw->endElement();
        }
        if (isset($this->filterBy)) {
            foreach ($this->filterBy as $v) {
                $xw->startElement(self::FIELD_FILTER_BY);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->channelType)) {
            $xw->startElement(self::FIELD_CHANNEL_TYPE);
            $this->channelType->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->endpoint)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_ENDPOINT]
                || $this->endpoint->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_ENDPOINT);
            $this->endpoint->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_ENDPOINT]);
            $xw->endElement();
        }
        if (isset($this->parameter)) {
            foreach ($this->parameter as $v) {
                $xw->startElement(self::FIELD_PARAMETER);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->heartbeatPeriod)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_HEARTBEAT_PERIOD]
                || $this->heartbeatPeriod->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_HEARTBEAT_PERIOD);
            $this->heartbeatPeriod->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_HEARTBEAT_PERIOD]);
            $xw->endElement();
        }
        if (isset($this->timeout)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_TIMEOUT]
                || $this->timeout->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_TIMEOUT);
            $this->timeout->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_TIMEOUT]);
            $xw->endElement();
        }
        if (isset($this->contentType)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_CONTENT_TYPE]
                || $this->contentType->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_CONTENT_TYPE);
            $this->contentType->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_CONTENT_TYPE]);
            $xw->endElement();
        }
        if (isset($this->content)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_CONTENT]
                || $this->content->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_CONTENT);
            $this->content->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_CONTENT]);
            $xw->endElement();
        }
        if (isset($this->maxCount)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_MAX_COUNT]
                || $this->maxCount->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_MAX_COUNT);
            $this->maxCount->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_MAX_COUNT]);
            $xw->endElement();
        }
        if (isset($rootOpened) && $rootOpened) {
            $xw->endElement();
        }
        if (isset($docStarted) && $docStarted) {
            $xw->endDocument();
        }
        return $xw;
    }

    /**
     * @param string|\stdClass|array $json
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRSubscription $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRSubscription
     * @throws \Exception
     */
    public static function jsonUnserialize(string|\stdClass|array $json,
                                           null|UnserializeConfig $config = null,
                                           null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRSubscription)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null === $config) {
            $config = (new Version())->getConfig()->getUnserializeConfig();
        }
        if (is_string($json)) {
            $json = json_decode(json: $json, associative: true, depth: $config->getJSONDecodeMaxDepth());
        } else if (is_object($json)) {
            $json = (array)$json;
        }
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json[self::FIELD_IDENTIFIER]) || array_key_exists(self::FIELD_IDENTIFIER, $json)) {
            $vs = $json[self::FIELD_IDENTIFIER];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addIdentifier(FHIRIdentifier::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_NAME])
            || isset($json[self::FIELD_NAME_EXT])
            || array_key_exists(self::FIELD_NAME, $json)
            || array_key_exists(self::FIELD_NAME_EXT, $json)) {
            $value = $json[self::FIELD_NAME] ?? null;
            $type->setName(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_NAME_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_STATUS])
            || isset($json[self::FIELD_STATUS_EXT])
            || array_key_exists(self::FIELD_STATUS, $json)
            || array_key_exists(self::FIELD_STATUS_EXT, $json)) {
            $value = $json[self::FIELD_STATUS] ?? null;
            $type->setStatus(FHIRSubscriptionStatusCodes::jsonUnserialize(
                (is_array($value) ? $value : [FHIRSubscriptionStatusCodes::FIELD_VALUE => $value]) + ($json[self::FIELD_STATUS_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_TOPIC])
            || isset($json[self::FIELD_TOPIC_EXT])
            || array_key_exists(self::FIELD_TOPIC, $json)
            || array_key_exists(self::FIELD_TOPIC_EXT, $json)) {
            $value = $json[self::FIELD_TOPIC] ?? null;
            $type->setTopic(FHIRCanonical::jsonUnserialize(
                (is_array($value) ? $value : [FHIRCanonical::FIELD_VALUE => $value]) + ($json[self::FIELD_TOPIC_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_CONTACT]) || array_key_exists(self::FIELD_CONTACT, $json)) {
            $vs = $json[self::FIELD_CONTACT];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addContact(FHIRContactPoint::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_END])
            || isset($json[self::FIELD_END_EXT])
            || array_key_exists(self::FIELD_END, $json)
            || array_key_exists(self::FIELD_END_EXT, $json)) {
            $value = $json[self::FIELD_END] ?? null;
            $type->setEnd(FHIRInstant::jsonUnserialize(
                (is_array($value) ? $value : [FHIRInstant::FIELD_VALUE => $value]) + ($json[self::FIELD_END_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_MANAGING_ENTITY]) || array_key_exists(self::FIELD_MANAGING_ENTITY, $json)) {
            $type->setManagingEntity(FHIRReference::jsonUnserialize($json[self::FIELD_MANAGING_ENTITY], $config));
        }
        if (isset($json[self::FIELD_REASON])
            || isset($json[self::FIELD_REASON_EXT])
            || array_key_exists(self::FIELD_REASON, $json)
            || array_key_exists(self::FIELD_REASON_EXT, $json)) {
            $value = $json[self::FIELD_REASON] ?? null;
            $type->setReason(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_REASON_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_FILTER_BY]) || array_key_exists(self::FIELD_FILTER_BY, $json)) {
            $vs = $json[self::FIELD_FILTER_BY];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addFilterBy(FHIRSubscriptionFilterBy::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_CHANNEL_TYPE]) || array_key_exists(self::FIELD_CHANNEL_TYPE, $json)) {
            $type->setChannelType(FHIRCoding::jsonUnserialize($json[self::FIELD_CHANNEL_TYPE], $config));
        }
        if (isset($json[self::FIELD_ENDPOINT])
            || isset($json[self::FIELD_ENDPOINT_EXT])
            || array_key_exists(self::FIELD_ENDPOINT, $json)
            || array_key_exists(self::FIELD_ENDPOINT_EXT, $json)) {
            $value = $json[self::FIELD_ENDPOINT] ?? null;
            $type->setEndpoint(FHIRUrl::jsonUnserialize(
                (is_array($value) ? $value : [FHIRUrl::FIELD_VALUE => $value]) + ($json[self::FIELD_ENDPOINT_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_PARAMETER]) || array_key_exists(self::FIELD_PARAMETER, $json)) {
            $vs = $json[self::FIELD_PARAMETER];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addParameter(FHIRSubscriptionParameter::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_HEARTBEAT_PERIOD])
            || isset($json[self::FIELD_HEARTBEAT_PERIOD_EXT])
            || array_key_exists(self::FIELD_HEARTBEAT_PERIOD, $json)
            || array_key_exists(self::FIELD_HEARTBEAT_PERIOD_EXT, $json)) {
            $value = $json[self::FIELD_HEARTBEAT_PERIOD] ?? null;
            $type->setHeartbeatPeriod(FHIRUnsignedInt::jsonUnserialize(
                (is_array($value) ? $value : [FHIRUnsignedInt::FIELD_VALUE => $value]) + ($json[self::FIELD_HEARTBEAT_PERIOD_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_TIMEOUT])
            || isset($json[self::FIELD_TIMEOUT_EXT])
            || array_key_exists(self::FIELD_TIMEOUT, $json)
            || array_key_exists(self::FIELD_TIMEOUT_EXT, $json)) {
            $value = $json[self::FIELD_TIMEOUT] ?? null;
            $type->setTimeout(FHIRUnsignedInt::jsonUnserialize(
                (is_array($value) ? $value : [FHIRUnsignedInt::FIELD_VALUE => $value]) + ($json[self::FIELD_TIMEOUT_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_CONTENT_TYPE])
            || isset($json[self::FIELD_CONTENT_TYPE_EXT])
            || array_key_exists(self::FIELD_CONTENT_TYPE, $json)
            || array_key_exists(self::FIELD_CONTENT_TYPE_EXT, $json)) {
            $value = $json[self::FIELD_CONTENT_TYPE] ?? null;
            $type->setContentType(FHIRCode::jsonUnserialize(
                (is_array($value) ? $value : [FHIRCode::FIELD_VALUE => $value]) + ($json[self::FIELD_CONTENT_TYPE_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_CONTENT])
            || isset($json[self::FIELD_CONTENT_EXT])
            || array_key_exists(self::FIELD_CONTENT, $json)
            || array_key_exists(self::FIELD_CONTENT_EXT, $json)) {
            $value = $json[self::FIELD_CONTENT] ?? null;
            $type->setContent(FHIRSubscriptionPayloadContent::jsonUnserialize(
                (is_array($value) ? $value : [FHIRSubscriptionPayloadContent::FIELD_VALUE => $value]) + ($json[self::FIELD_CONTENT_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_MAX_COUNT])
            || isset($json[self::FIELD_MAX_COUNT_EXT])
            || array_key_exists(self::FIELD_MAX_COUNT, $json)
            || array_key_exists(self::FIELD_MAX_COUNT_EXT, $json)) {
            $value = $json[self::FIELD_MAX_COUNT] ?? null;
            $type->setMaxCount(FHIRPositiveInt::jsonUnserialize(
                (is_array($value) ? $value : [FHIRPositiveInt::FIELD_VALUE => $value]) + ($json[self::FIELD_MAX_COUNT_EXT] ?? []),
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
        if (isset($this->identifier) && [] !== $this->identifier) {
            $out->identifier = $this->identifier;
        }
        if (isset($this->name)) {
            if (null !== ($val = $this->name->getValue())) {
                $out->name = $val;
            }
            if ($this->name->_nonValueFieldDefined()) {
                $ext = $this->name->jsonSerialize();
                unset($ext->value);
                $out->_name = $ext;
            }
        }
        if (isset($this->status)) {
            if (null !== ($val = $this->status->getValue())) {
                $out->status = $val;
            }
            if ($this->status->_nonValueFieldDefined()) {
                $ext = $this->status->jsonSerialize();
                unset($ext->value);
                $out->_status = $ext;
            }
        }
        if (isset($this->topic)) {
            if (null !== ($val = $this->topic->getValue())) {
                $out->topic = $val;
            }
            if ($this->topic->_nonValueFieldDefined()) {
                $ext = $this->topic->jsonSerialize();
                unset($ext->value);
                $out->_topic = $ext;
            }
        }
        if (isset($this->contact) && [] !== $this->contact) {
            $out->contact = $this->contact;
        }
        if (isset($this->end)) {
            if (null !== ($val = $this->end->getValue())) {
                $out->end = $val;
            }
            if ($this->end->_nonValueFieldDefined()) {
                $ext = $this->end->jsonSerialize();
                unset($ext->value);
                $out->_end = $ext;
            }
        }
        if (isset($this->managingEntity)) {
            $out->managingEntity = $this->managingEntity;
        }
        if (isset($this->reason)) {
            if (null !== ($val = $this->reason->getValue())) {
                $out->reason = $val;
            }
            if ($this->reason->_nonValueFieldDefined()) {
                $ext = $this->reason->jsonSerialize();
                unset($ext->value);
                $out->_reason = $ext;
            }
        }
        if (isset($this->filterBy) && [] !== $this->filterBy) {
            $out->filterBy = $this->filterBy;
        }
        if (isset($this->channelType)) {
            $out->channelType = $this->channelType;
        }
        if (isset($this->endpoint)) {
            if (null !== ($val = $this->endpoint->getValue())) {
                $out->endpoint = $val;
            }
            if ($this->endpoint->_nonValueFieldDefined()) {
                $ext = $this->endpoint->jsonSerialize();
                unset($ext->value);
                $out->_endpoint = $ext;
            }
        }
        if (isset($this->parameter) && [] !== $this->parameter) {
            $out->parameter = $this->parameter;
        }
        if (isset($this->heartbeatPeriod)) {
            if (null !== ($val = $this->heartbeatPeriod->getValue())) {
                $out->heartbeatPeriod = $val;
            }
            if ($this->heartbeatPeriod->_nonValueFieldDefined()) {
                $ext = $this->heartbeatPeriod->jsonSerialize();
                unset($ext->value);
                $out->_heartbeatPeriod = $ext;
            }
        }
        if (isset($this->timeout)) {
            if (null !== ($val = $this->timeout->getValue())) {
                $out->timeout = $val;
            }
            if ($this->timeout->_nonValueFieldDefined()) {
                $ext = $this->timeout->jsonSerialize();
                unset($ext->value);
                $out->_timeout = $ext;
            }
        }
        if (isset($this->contentType)) {
            if (null !== ($val = $this->contentType->getValue())) {
                $out->contentType = $val;
            }
            if ($this->contentType->_nonValueFieldDefined()) {
                $ext = $this->contentType->jsonSerialize();
                unset($ext->value);
                $out->_contentType = $ext;
            }
        }
        if (isset($this->content)) {
            if (null !== ($val = $this->content->getValue())) {
                $out->content = $val;
            }
            if ($this->content->_nonValueFieldDefined()) {
                $ext = $this->content->jsonSerialize();
                unset($ext->value);
                $out->_content = $ext;
            }
        }
        if (isset($this->maxCount)) {
            if (null !== ($val = $this->maxCount->getValue())) {
                $out->maxCount = $val;
            }
            if ($this->maxCount->_nonValueFieldDefined()) {
                $ext = $this->maxCount->jsonSerialize();
                unset($ext->value);
                $out->_maxCount = $ext;
            }
        }
        $out->resourceType = $this->_getResourceType();
        return $out;
    }
}