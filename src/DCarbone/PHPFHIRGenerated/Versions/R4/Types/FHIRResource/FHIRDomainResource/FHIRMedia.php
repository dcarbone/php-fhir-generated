<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource;

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
 *   Generated on Fri, Nov 1, 2019 09:29+1100 for FHIR v4.0.1
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
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRCodePrimitive\FHIREventStatusList;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRDateTimePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRDecimalPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRAnnotation;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRAttachment;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDecimal;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIREventStatus;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRInstant;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRMeta;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPositiveInt;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRInstantPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRPositiveIntPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResourceContainer;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Version;
use DCarbone\PHPFHIRGenerated\Versions\R4\VersionConstants;
use DCarbone\PHPFHIRGenerated\Versions\R4\VersionContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\Versions\R4\VersionTypeMap;

/**
 * A photo, video, or audio recording acquired or used in healthcare. The actual
 * content may be inline or provided by direct reference.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 */
class FHIRMedia extends FHIRDomainResource implements VersionContainedTypeInterface
{
    use TypeValidationsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_MEDIA;

    /* class_default.php:47 */
    public const FIELD_IDENTIFIER = 'identifier';
    public const FIELD_BASED_ON = 'basedOn';
    public const FIELD_PART_OF = 'partOf';
    public const FIELD_STATUS = 'status';
    public const FIELD_STATUS_EXT = '_status';
    public const FIELD_TYPE = 'type';
    public const FIELD_MODALITY = 'modality';
    public const FIELD_VIEW = 'view';
    public const FIELD_SUBJECT = 'subject';
    public const FIELD_ENCOUNTER = 'encounter';
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_CREATED_DATE_TIME_EXT = '_createdDateTime';
    public const FIELD_CREATED_PERIOD = 'createdPeriod';
    public const FIELD_ISSUED = 'issued';
    public const FIELD_ISSUED_EXT = '_issued';
    public const FIELD_OPERATOR = 'operator';
    public const FIELD_REASON_CODE = 'reasonCode';
    public const FIELD_BODY_SITE = 'bodySite';
    public const FIELD_DEVICE_NAME = 'deviceName';
    public const FIELD_DEVICE_NAME_EXT = '_deviceName';
    public const FIELD_DEVICE = 'device';
    public const FIELD_HEIGHT = 'height';
    public const FIELD_HEIGHT_EXT = '_height';
    public const FIELD_WIDTH = 'width';
    public const FIELD_WIDTH_EXT = '_width';
    public const FIELD_FRAMES = 'frames';
    public const FIELD_FRAMES_EXT = '_frames';
    public const FIELD_DURATION = 'duration';
    public const FIELD_DURATION_EXT = '_duration';
    public const FIELD_CONTENT = 'content';
    public const FIELD_NOTE = 'note';

    /* class_default.php:66 */
    // The default validation rules for this type as defined in the FHIR schema used to generate this code.
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_STATUS => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_CONTENT => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /* class_default.php:95 */
    private array $_valueXMLLocations = [
        self::FIELD_STATUS => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_CREATED_DATE_TIME => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_ISSUED => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DEVICE_NAME => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_HEIGHT => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_WIDTH => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_FRAMES => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DURATION => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:111 */
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifiers associated with the image - these may include identifiers for the
     * image itself, identifiers for the context of its collection (e.g. series ids)
     * and context ids such as accession numbers or other workflow identifiers.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRIdentifier[] 
     */
    protected array $identifier;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A procedure that is fulfilled in whole or in part by the creation of this media.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference[] 
     */
    protected array $basedOn;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A larger event of which this particular event is a component or step.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference[] 
     */
    protected array $partOf;
    /**
     * The status of the communication.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The current state of the {{title}}.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIREventStatus 
     */
    protected FHIREventStatus $status;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code that classifies whether the media is an image, video or audio recording
     * or some other media category.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $type;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Details of the type of the media - usually, how it was acquired (what type of
     * device). If images sourced from a DICOM system, are wrapped in a Media resource,
     * then this is the modality.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $modality;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The name of the imaging view e.g. Lateral or Antero-posterior (AP).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $view;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Who/What this Media is a record of.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $subject;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The encounter that establishes the context for this media.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $encounter;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date and time(s) at which the media was collected.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDateTime 
     */
    protected FHIRDateTime $createdDateTime;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The date and time(s) at which the media was collected.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPeriod 
     */
    protected FHIRPeriod $createdPeriod;
    /**
     * An instant in time - known at least to the second
     * Note: This is intended for where precisely observed times are required,
     * typically system logs etc., and not human-reported times - for them, see date
     * and dateTime (which can be as precise as instant, but is not required to be)
     * below. Time zone is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date and time this version of the media was made available to providers,
     * typically after having been reviewed.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRInstant 
     */
    protected FHIRInstant $issued;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The person who administered the collection of the image.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $operator;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes why the event occurred in coded or textual form.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept[] 
     */
    protected array $reasonCode;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the site on the subject's body where the observation was made (i.e.
     * the target site).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $bodySite;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the device / manufacturer of the device that was used to make the
     * recording.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $deviceName;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The device used to collect the media.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $device;
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Height of the image in pixels (photo/video).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPositiveInt 
     */
    protected FHIRPositiveInt $height;
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Width of the image in pixels (photo/video).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPositiveInt 
     */
    protected FHIRPositiveInt $width;
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The number of frames in a photo. This is used with a multi-page fax, or an
     * imaging acquisition context that takes multiple slices in a single image, or an
     * animated gif. If there is more than one frame, this SHALL have a value in order
     * to alert interface software that a multi-frame capable rendering widget is
     * required.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPositiveInt 
     */
    protected FHIRPositiveInt $frames;
    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The duration of the recording in seconds - for audio and video.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDecimal 
     */
    protected FHIRDecimal $duration;
    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual content of the media - inline or by direct reference to the media
     * source file.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRAttachment 
     */
    protected FHIRAttachment $content;
    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Comments made about the media by the performer, subject or other participants.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRAnnotation[] 
     */
    protected array $note;

    /* constructor.php:62 */
    /**
     * FHIRMedia Constructor
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRMeta $meta
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRUri $implicitRules
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCode $language
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRNarrative $text
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResourceContainer[]|\DCarbone\PHPFHIRGenerated\Versions\R4\VersionContainedTypeInterface[] $contained
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRIdentifier[] $identifier
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference[] $basedOn
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference[] $partOf
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRCodePrimitive\FHIREventStatusList|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIREventStatus $status
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $type
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $modality
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $view
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $subject
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $encounter
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDateTime $createdDateTime
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPeriod $createdPeriod
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRInstantPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRInstant $issued
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $operator
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept[] $reasonCode
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $bodySite
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $deviceName
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $device
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPositiveInt $height
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPositiveInt $width
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPositiveInt $frames
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDecimal $duration
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRAttachment $content
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRAnnotation[] $note
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
                                null|iterable $basedOn = null,
                                null|iterable $partOf = null,
                                null|string|FHIREventStatusList|FHIREventStatus $status = null,
                                null|FHIRCodeableConcept $type = null,
                                null|FHIRCodeableConcept $modality = null,
                                null|FHIRCodeableConcept $view = null,
                                null|FHIRReference $subject = null,
                                null|FHIRReference $encounter = null,
                                null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $createdDateTime = null,
                                null|FHIRPeriod $createdPeriod = null,
                                null|string|\DateTimeInterface|FHIRInstantPrimitive|FHIRInstant $issued = null,
                                null|FHIRReference $operator = null,
                                null|iterable $reasonCode = null,
                                null|FHIRCodeableConcept $bodySite = null,
                                null|string|FHIRStringPrimitive|FHIRString $deviceName = null,
                                null|FHIRReference $device = null,
                                null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $height = null,
                                null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $width = null,
                                null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $frames = null,
                                null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $duration = null,
                                null|FHIRAttachment $content = null,
                                null|iterable $note = null,
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
        if (null !== $basedOn) {
            $this->setBasedOn(...$basedOn);
        }
        if (null !== $partOf) {
            $this->setPartOf(...$partOf);
        }
        if (null !== $status) {
            $this->setStatus($status);
        }
        if (null !== $type) {
            $this->setType($type);
        }
        if (null !== $modality) {
            $this->setModality($modality);
        }
        if (null !== $view) {
            $this->setView($view);
        }
        if (null !== $subject) {
            $this->setSubject($subject);
        }
        if (null !== $encounter) {
            $this->setEncounter($encounter);
        }
        if (null !== $createdDateTime) {
            $this->setCreatedDateTime($createdDateTime);
        }
        if (null !== $createdPeriod) {
            $this->setCreatedPeriod($createdPeriod);
        }
        if (null !== $issued) {
            $this->setIssued($issued);
        }
        if (null !== $operator) {
            $this->setOperator($operator);
        }
        if (null !== $reasonCode) {
            $this->setReasonCode(...$reasonCode);
        }
        if (null !== $bodySite) {
            $this->setBodySite($bodySite);
        }
        if (null !== $deviceName) {
            $this->setDeviceName($deviceName);
        }
        if (null !== $device) {
            $this->setDevice($device);
        }
        if (null !== $height) {
            $this->setHeight($height);
        }
        if (null !== $width) {
            $this->setWidth($width);
        }
        if (null !== $frames) {
            $this->setFrames($frames);
        }
        if (null !== $duration) {
            $this->setDuration($duration);
        }
        if (null !== $content) {
            $this->setContent($content);
        }
        if (null !== $note) {
            $this->setNote(...$note);
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
     * Identifiers associated with the image - these may include identifiers for the
     * image itself, identifiers for the context of its collection (e.g. series ids)
     * and context ids such as accession numbers or other workflow identifiers.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier(): array
    {
        return $this->identifier ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRIdentifier>
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
     * Identifiers associated with the image - these may include identifiers for the
     * image itself, identifiers for the context of its collection (e.g. series ids)
     * and context ids such as accession numbers or other workflow identifiers.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRIdentifier $identifier
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
     * Identifiers associated with the image - these may include identifiers for the
     * image itself, identifiers for the context of its collection (e.g. series ids)
     * and context ids such as accession numbers or other workflow identifiers.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRIdentifier ...$identifier
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
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A procedure that is fulfilled in whole or in part by the creation of this media.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference[]
     */
    public function getBasedOn(): array
    {
        return $this->basedOn ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference>
     */
    public function getBasedOnIterator(): iterable
    {
        if (!isset($this->basedOn)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->basedOn);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A procedure that is fulfilled in whole or in part by the creation of this media.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $basedOn
     * @return static
     */
    public function addBasedOn(FHIRReference $basedOn): self
    {
        if (!isset($this->basedOn)) {
            $this->basedOn = [];
        }
        $this->basedOn[] = $basedOn;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A procedure that is fulfilled in whole or in part by the creation of this media.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference ...$basedOn
     * @return static
     */
    public function setBasedOn(FHIRReference ...$basedOn): self
    {
        if ([] === $basedOn) {
            unset($this->basedOn);
            return $this;
        }
        $this->basedOn = $basedOn;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A larger event of which this particular event is a component or step.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference[]
     */
    public function getPartOf(): array
    {
        return $this->partOf ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference>
     */
    public function getPartOfIterator(): iterable
    {
        if (!isset($this->partOf)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->partOf);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A larger event of which this particular event is a component or step.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $partOf
     * @return static
     */
    public function addPartOf(FHIRReference $partOf): self
    {
        if (!isset($this->partOf)) {
            $this->partOf = [];
        }
        $this->partOf[] = $partOf;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A larger event of which this particular event is a component or step.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference ...$partOf
     * @return static
     */
    public function setPartOf(FHIRReference ...$partOf): self
    {
        if ([] === $partOf) {
            unset($this->partOf);
            return $this;
        }
        $this->partOf = $partOf;
        return $this;
    }

    /**
     * The status of the communication.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The current state of the {{title}}.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIREventStatus
     */
    public function getStatus(): null|FHIREventStatus
    {
        return $this->status ?? null;
    }

    /**
     * The status of the communication.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The current state of the {{title}}.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRCodePrimitive\FHIREventStatusList|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIREventStatus $status
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setStatus(null|string|FHIREventStatusList|FHIREventStatus $status,
                              ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $status) {
            unset($this->status);
            return $this;
        }
        if (!($status instanceof FHIREventStatus)) {
            $status = new FHIREventStatus(value: $status);
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code that classifies whether the media is an image, video or audio recording
     * or some other media category.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getType(): null|FHIRCodeableConcept
    {
        return $this->type ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code that classifies whether the media is an image, video or audio recording
     * or some other media category.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $type
     * @return static
     */
    public function setType(null|FHIRCodeableConcept $type): self
    {
        if (null === $type) {
            unset($this->type);
            return $this;
        }
        $this->type = $type;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Details of the type of the media - usually, how it was acquired (what type of
     * device). If images sourced from a DICOM system, are wrapped in a Media resource,
     * then this is the modality.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getModality(): null|FHIRCodeableConcept
    {
        return $this->modality ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Details of the type of the media - usually, how it was acquired (what type of
     * device). If images sourced from a DICOM system, are wrapped in a Media resource,
     * then this is the modality.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $modality
     * @return static
     */
    public function setModality(null|FHIRCodeableConcept $modality): self
    {
        if (null === $modality) {
            unset($this->modality);
            return $this;
        }
        $this->modality = $modality;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The name of the imaging view e.g. Lateral or Antero-posterior (AP).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getView(): null|FHIRCodeableConcept
    {
        return $this->view ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The name of the imaging view e.g. Lateral or Antero-posterior (AP).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $view
     * @return static
     */
    public function setView(null|FHIRCodeableConcept $view): self
    {
        if (null === $view) {
            unset($this->view);
            return $this;
        }
        $this->view = $view;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Who/What this Media is a record of.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference
     */
    public function getSubject(): null|FHIRReference
    {
        return $this->subject ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Who/What this Media is a record of.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $subject
     * @return static
     */
    public function setSubject(null|FHIRReference $subject): self
    {
        if (null === $subject) {
            unset($this->subject);
            return $this;
        }
        $this->subject = $subject;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The encounter that establishes the context for this media.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference
     */
    public function getEncounter(): null|FHIRReference
    {
        return $this->encounter ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The encounter that establishes the context for this media.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $encounter
     * @return static
     */
    public function setEncounter(null|FHIRReference $encounter): self
    {
        if (null === $encounter) {
            unset($this->encounter);
            return $this;
        }
        $this->encounter = $encounter;
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date and time(s) at which the media was collected.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDateTime
     */
    public function getCreatedDateTime(): null|FHIRDateTime
    {
        return $this->createdDateTime ?? null;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date and time(s) at which the media was collected.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDateTime $createdDateTime
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setCreatedDateTime(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $createdDateTime,
                                       ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $createdDateTime) {
            unset($this->createdDateTime);
            return $this;
        }
        if (!($createdDateTime instanceof FHIRDateTime)) {
            $createdDateTime = new FHIRDateTime(value: $createdDateTime);
        }
        $this->createdDateTime = $createdDateTime;
        if ($this->_valueXMLLocations[self::FIELD_CREATED_DATE_TIME] !== $valueXMLLocation) {
            $this->_setCreatedDateTimeValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the createdDateTime element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getCreatedDateTimeValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_CREATED_DATE_TIME];
    }

    /**
     * Set the location the "value" field of the createdDateTime element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setCreatedDateTimeValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_CREATED_DATE_TIME] = $valueXMLLocation;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The date and time(s) at which the media was collected.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPeriod
     */
    public function getCreatedPeriod(): null|FHIRPeriod
    {
        return $this->createdPeriod ?? null;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The date and time(s) at which the media was collected.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPeriod $createdPeriod
     * @return static
     */
    public function setCreatedPeriod(null|FHIRPeriod $createdPeriod): self
    {
        if (null === $createdPeriod) {
            unset($this->createdPeriod);
            return $this;
        }
        $this->createdPeriod = $createdPeriod;
        return $this;
    }

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for where precisely observed times are required,
     * typically system logs etc., and not human-reported times - for them, see date
     * and dateTime (which can be as precise as instant, but is not required to be)
     * below. Time zone is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date and time this version of the media was made available to providers,
     * typically after having been reviewed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRInstant
     */
    public function getIssued(): null|FHIRInstant
    {
        return $this->issued ?? null;
    }

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for where precisely observed times are required,
     * typically system logs etc., and not human-reported times - for them, see date
     * and dateTime (which can be as precise as instant, but is not required to be)
     * below. Time zone is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date and time this version of the media was made available to providers,
     * typically after having been reviewed.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRInstantPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRInstant $issued
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setIssued(null|string|\DateTimeInterface|FHIRInstantPrimitive|FHIRInstant $issued,
                              ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $issued) {
            unset($this->issued);
            return $this;
        }
        if (!($issued instanceof FHIRInstant)) {
            $issued = new FHIRInstant(value: $issued);
        }
        $this->issued = $issued;
        if ($this->_valueXMLLocations[self::FIELD_ISSUED] !== $valueXMLLocation) {
            $this->_setIssuedValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the issued element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getIssuedValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_ISSUED];
    }

    /**
     * Set the location the "value" field of the issued element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setIssuedValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_ISSUED] = $valueXMLLocation;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The person who administered the collection of the image.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference
     */
    public function getOperator(): null|FHIRReference
    {
        return $this->operator ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The person who administered the collection of the image.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $operator
     * @return static
     */
    public function setOperator(null|FHIRReference $operator): self
    {
        if (null === $operator) {
            unset($this->operator);
            return $this;
        }
        $this->operator = $operator;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes why the event occurred in coded or textual form.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept[]
     */
    public function getReasonCode(): array
    {
        return $this->reasonCode ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept>
     */
    public function getReasonCodeIterator(): iterable
    {
        if (!isset($this->reasonCode)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->reasonCode);
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes why the event occurred in coded or textual form.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $reasonCode
     * @return static
     */
    public function addReasonCode(FHIRCodeableConcept $reasonCode): self
    {
        if (!isset($this->reasonCode)) {
            $this->reasonCode = [];
        }
        $this->reasonCode[] = $reasonCode;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes why the event occurred in coded or textual form.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept ...$reasonCode
     * @return static
     */
    public function setReasonCode(FHIRCodeableConcept ...$reasonCode): self
    {
        if ([] === $reasonCode) {
            unset($this->reasonCode);
            return $this;
        }
        $this->reasonCode = $reasonCode;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the site on the subject's body where the observation was made (i.e.
     * the target site).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getBodySite(): null|FHIRCodeableConcept
    {
        return $this->bodySite ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the site on the subject's body where the observation was made (i.e.
     * the target site).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $bodySite
     * @return static
     */
    public function setBodySite(null|FHIRCodeableConcept $bodySite): self
    {
        if (null === $bodySite) {
            unset($this->bodySite);
            return $this;
        }
        $this->bodySite = $bodySite;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the device / manufacturer of the device that was used to make the
     * recording.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString
     */
    public function getDeviceName(): null|FHIRString
    {
        return $this->deviceName ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the device / manufacturer of the device that was used to make the
     * recording.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $deviceName
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDeviceName(null|string|FHIRStringPrimitive|FHIRString $deviceName,
                                  ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $deviceName) {
            unset($this->deviceName);
            return $this;
        }
        if (!($deviceName instanceof FHIRString)) {
            $deviceName = new FHIRString(value: $deviceName);
        }
        $this->deviceName = $deviceName;
        if ($this->_valueXMLLocations[self::FIELD_DEVICE_NAME] !== $valueXMLLocation) {
            $this->_setDeviceNameValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the deviceName element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getDeviceNameValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_DEVICE_NAME];
    }

    /**
     * Set the location the "value" field of the deviceName element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setDeviceNameValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_DEVICE_NAME] = $valueXMLLocation;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The device used to collect the media.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference
     */
    public function getDevice(): null|FHIRReference
    {
        return $this->device ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The device used to collect the media.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $device
     * @return static
     */
    public function setDevice(null|FHIRReference $device): self
    {
        if (null === $device) {
            unset($this->device);
            return $this;
        }
        $this->device = $device;
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Height of the image in pixels (photo/video).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPositiveInt
     */
    public function getHeight(): null|FHIRPositiveInt
    {
        return $this->height ?? null;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Height of the image in pixels (photo/video).
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPositiveInt $height
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setHeight(null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $height,
                              ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $height) {
            unset($this->height);
            return $this;
        }
        if (!($height instanceof FHIRPositiveInt)) {
            $height = new FHIRPositiveInt(value: $height);
        }
        $this->height = $height;
        if ($this->_valueXMLLocations[self::FIELD_HEIGHT] !== $valueXMLLocation) {
            $this->_setHeightValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the height element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getHeightValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_HEIGHT];
    }

    /**
     * Set the location the "value" field of the height element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setHeightValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_HEIGHT] = $valueXMLLocation;
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Width of the image in pixels (photo/video).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPositiveInt
     */
    public function getWidth(): null|FHIRPositiveInt
    {
        return $this->width ?? null;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Width of the image in pixels (photo/video).
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPositiveInt $width
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setWidth(null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $width,
                             ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $width) {
            unset($this->width);
            return $this;
        }
        if (!($width instanceof FHIRPositiveInt)) {
            $width = new FHIRPositiveInt(value: $width);
        }
        $this->width = $width;
        if ($this->_valueXMLLocations[self::FIELD_WIDTH] !== $valueXMLLocation) {
            $this->_setWidthValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the width element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getWidthValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_WIDTH];
    }

    /**
     * Set the location the "value" field of the width element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setWidthValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_WIDTH] = $valueXMLLocation;
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The number of frames in a photo. This is used with a multi-page fax, or an
     * imaging acquisition context that takes multiple slices in a single image, or an
     * animated gif. If there is more than one frame, this SHALL have a value in order
     * to alert interface software that a multi-frame capable rendering widget is
     * required.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPositiveInt
     */
    public function getFrames(): null|FHIRPositiveInt
    {
        return $this->frames ?? null;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The number of frames in a photo. This is used with a multi-page fax, or an
     * imaging acquisition context that takes multiple slices in a single image, or an
     * animated gif. If there is more than one frame, this SHALL have a value in order
     * to alert interface software that a multi-frame capable rendering widget is
     * required.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPositiveInt $frames
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setFrames(null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $frames,
                              ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $frames) {
            unset($this->frames);
            return $this;
        }
        if (!($frames instanceof FHIRPositiveInt)) {
            $frames = new FHIRPositiveInt(value: $frames);
        }
        $this->frames = $frames;
        if ($this->_valueXMLLocations[self::FIELD_FRAMES] !== $valueXMLLocation) {
            $this->_setFramesValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the frames element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getFramesValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_FRAMES];
    }

    /**
     * Set the location the "value" field of the frames element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setFramesValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_FRAMES] = $valueXMLLocation;
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The duration of the recording in seconds - for audio and video.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDecimal
     */
    public function getDuration(): null|FHIRDecimal
    {
        return $this->duration ?? null;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The duration of the recording in seconds - for audio and video.
     *
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDecimal $duration
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDuration(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $duration,
                                ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $duration) {
            unset($this->duration);
            return $this;
        }
        if (!($duration instanceof FHIRDecimal)) {
            $duration = new FHIRDecimal(value: $duration);
        }
        $this->duration = $duration;
        if ($this->_valueXMLLocations[self::FIELD_DURATION] !== $valueXMLLocation) {
            $this->_setDurationValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the duration element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getDurationValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_DURATION];
    }

    /**
     * Set the location the "value" field of the duration element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setDurationValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_DURATION] = $valueXMLLocation;
        return $this;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual content of the media - inline or by direct reference to the media
     * source file.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRAttachment
     */
    public function getContent(): null|FHIRAttachment
    {
        return $this->content ?? null;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual content of the media - inline or by direct reference to the media
     * source file.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRAttachment $content
     * @return static
     */
    public function setContent(null|FHIRAttachment $content): self
    {
        if (null === $content) {
            unset($this->content);
            return $this;
        }
        $this->content = $content;
        return $this;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Comments made about the media by the performer, subject or other participants.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRAnnotation[]
     */
    public function getNote(): array
    {
        return $this->note ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRAnnotation>
     */
    public function getNoteIterator(): iterable
    {
        if (!isset($this->note)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->note);
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Comments made about the media by the performer, subject or other participants.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRAnnotation $note
     * @return static
     */
    public function addNote(FHIRAnnotation $note): self
    {
        if (!isset($this->note)) {
            $this->note = [];
        }
        $this->note[] = $note;
        return $this;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Comments made about the media by the performer, subject or other participants.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRAnnotation ...$note
     * @return static
     */
    public function setNote(FHIRAnnotation ...$note): self
    {
        if ([] === $note) {
            unset($this->note);
            return $this;
        }
        $this->note = $note;
        return $this;
    }

    /* class_default.php:208 */
    /**
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRMedia $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRMedia
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|UnserializeConfig $config = null,
                                          null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRMedia)) {
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
                    /** @var \DCarbone\PHPFHIRGenerated\Versions\R4\VersionContainedTypeInterface $cn */
                    $cn = VersionTypeMap::getContainedTypeClassNameFromXML($cen);
                    $type->addContained($cn::xmlUnserialize($cen, $config));
                }
            } else if (self::FIELD_EXTENSION === $cen) {
                $type->addExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_IDENTIFIER === $cen) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($ce, $config));
            } else if (self::FIELD_BASED_ON === $cen) {
                $type->addBasedOn(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PART_OF === $cen) {
                $type->addPartOf(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_STATUS === $cen) {
                $type->setStatus(FHIREventStatus::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TYPE === $cen) {
                $type->setType(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MODALITY === $cen) {
                $type->setModality(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VIEW === $cen) {
                $type->setView(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SUBJECT === $cen) {
                $type->setSubject(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ENCOUNTER === $cen) {
                $type->setEncounter(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CREATED_DATE_TIME === $cen) {
                $type->setCreatedDateTime(FHIRDateTime::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CREATED_PERIOD === $cen) {
                $type->setCreatedPeriod(FHIRPeriod::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ISSUED === $cen) {
                $type->setIssued(FHIRInstant::xmlUnserialize($ce, $config));
            } else if (self::FIELD_OPERATOR === $cen) {
                $type->setOperator(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_REASON_CODE === $cen) {
                $type->addReasonCode(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_BODY_SITE === $cen) {
                $type->setBodySite(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DEVICE_NAME === $cen) {
                $type->setDeviceName(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DEVICE === $cen) {
                $type->setDevice(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_HEIGHT === $cen) {
                $type->setHeight(FHIRPositiveInt::xmlUnserialize($ce, $config));
            } else if (self::FIELD_WIDTH === $cen) {
                $type->setWidth(FHIRPositiveInt::xmlUnserialize($ce, $config));
            } else if (self::FIELD_FRAMES === $cen) {
                $type->setFrames(FHIRPositiveInt::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DURATION === $cen) {
                $type->setDuration(FHIRDecimal::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CONTENT === $cen) {
                $type->setContent(FHIRAttachment::xmlUnserialize($ce, $config));
            } else if (self::FIELD_NOTE === $cen) {
                $type->addNote(FHIRAnnotation::xmlUnserialize($ce, $config));
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
        if (isset($attributes[self::FIELD_STATUS])) {
            if (isset($type->status)) {
                $type->status->setValue((string)$attributes[self::FIELD_STATUS]);
                $type->_setStatusValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setStatus((string)$attributes[self::FIELD_STATUS], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_CREATED_DATE_TIME])) {
            if (isset($type->createdDateTime)) {
                $type->createdDateTime->setValue((string)$attributes[self::FIELD_CREATED_DATE_TIME]);
                $type->_setCreatedDateTimeValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setCreatedDateTime((string)$attributes[self::FIELD_CREATED_DATE_TIME], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_ISSUED])) {
            if (isset($type->issued)) {
                $type->issued->setValue((string)$attributes[self::FIELD_ISSUED]);
                $type->_setIssuedValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setIssued((string)$attributes[self::FIELD_ISSUED], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DEVICE_NAME])) {
            if (isset($type->deviceName)) {
                $type->deviceName->setValue((string)$attributes[self::FIELD_DEVICE_NAME]);
                $type->_setDeviceNameValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setDeviceName((string)$attributes[self::FIELD_DEVICE_NAME], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_HEIGHT])) {
            if (isset($type->height)) {
                $type->height->setValue((string)$attributes[self::FIELD_HEIGHT]);
                $type->_setHeightValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setHeight((string)$attributes[self::FIELD_HEIGHT], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_WIDTH])) {
            if (isset($type->width)) {
                $type->width->setValue((string)$attributes[self::FIELD_WIDTH]);
                $type->_setWidthValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setWidth((string)$attributes[self::FIELD_WIDTH], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_FRAMES])) {
            if (isset($type->frames)) {
                $type->frames->setValue((string)$attributes[self::FIELD_FRAMES]);
                $type->_setFramesValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setFrames((string)$attributes[self::FIELD_FRAMES], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DURATION])) {
            if (isset($type->duration)) {
                $type->duration->setValue((string)$attributes[self::FIELD_DURATION]);
                $type->_setDurationValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setDuration((string)$attributes[self::FIELD_DURATION], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
            $xw->openRootNode('Media', $this->_getSourceXMLNS());
        }
        if (isset($this->status) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_STATUS]) {
            $xw->writeAttribute(self::FIELD_STATUS, $this->status->_getFormattedValue());
        }
        if (isset($this->createdDateTime) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_CREATED_DATE_TIME]) {
            $xw->writeAttribute(self::FIELD_CREATED_DATE_TIME, $this->createdDateTime->_getFormattedValue());
        }
        if (isset($this->issued) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_ISSUED]) {
            $xw->writeAttribute(self::FIELD_ISSUED, $this->issued->_getFormattedValue());
        }
        if (isset($this->deviceName) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DEVICE_NAME]) {
            $xw->writeAttribute(self::FIELD_DEVICE_NAME, $this->deviceName->_getFormattedValue());
        }
        if (isset($this->height) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_HEIGHT]) {
            $xw->writeAttribute(self::FIELD_HEIGHT, $this->height->_getFormattedValue());
        }
        if (isset($this->width) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_WIDTH]) {
            $xw->writeAttribute(self::FIELD_WIDTH, $this->width->_getFormattedValue());
        }
        if (isset($this->frames) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_FRAMES]) {
            $xw->writeAttribute(self::FIELD_FRAMES, $this->frames->_getFormattedValue());
        }
        if (isset($this->duration) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DURATION]) {
            $xw->writeAttribute(self::FIELD_DURATION, $this->duration->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->identifier)) {
            foreach ($this->identifier as $v) {
                $xw->startElement(self::FIELD_IDENTIFIER);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->basedOn)) {
            foreach ($this->basedOn as $v) {
                $xw->startElement(self::FIELD_BASED_ON);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->partOf)) {
            foreach ($this->partOf as $v) {
                $xw->startElement(self::FIELD_PART_OF);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->status)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_STATUS]
                || $this->status->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_STATUS);
            $this->status->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_STATUS]);
            $xw->endElement();
        }
        if (isset($this->type)) {
            $xw->startElement(self::FIELD_TYPE);
            $this->type->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->modality)) {
            $xw->startElement(self::FIELD_MODALITY);
            $this->modality->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->view)) {
            $xw->startElement(self::FIELD_VIEW);
            $this->view->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->subject)) {
            $xw->startElement(self::FIELD_SUBJECT);
            $this->subject->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->encounter)) {
            $xw->startElement(self::FIELD_ENCOUNTER);
            $this->encounter->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->createdDateTime)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_CREATED_DATE_TIME]
                || $this->createdDateTime->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_CREATED_DATE_TIME);
            $this->createdDateTime->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_CREATED_DATE_TIME]);
            $xw->endElement();
        }
        if (isset($this->createdPeriod)) {
            $xw->startElement(self::FIELD_CREATED_PERIOD);
            $this->createdPeriod->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->issued)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_ISSUED]
                || $this->issued->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_ISSUED);
            $this->issued->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_ISSUED]);
            $xw->endElement();
        }
        if (isset($this->operator)) {
            $xw->startElement(self::FIELD_OPERATOR);
            $this->operator->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->reasonCode)) {
            foreach ($this->reasonCode as $v) {
                $xw->startElement(self::FIELD_REASON_CODE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->bodySite)) {
            $xw->startElement(self::FIELD_BODY_SITE);
            $this->bodySite->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->deviceName)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DEVICE_NAME]
                || $this->deviceName->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DEVICE_NAME);
            $this->deviceName->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DEVICE_NAME]);
            $xw->endElement();
        }
        if (isset($this->device)) {
            $xw->startElement(self::FIELD_DEVICE);
            $this->device->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->height)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_HEIGHT]
                || $this->height->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_HEIGHT);
            $this->height->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_HEIGHT]);
            $xw->endElement();
        }
        if (isset($this->width)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_WIDTH]
                || $this->width->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_WIDTH);
            $this->width->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_WIDTH]);
            $xw->endElement();
        }
        if (isset($this->frames)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_FRAMES]
                || $this->frames->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_FRAMES);
            $this->frames->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_FRAMES]);
            $xw->endElement();
        }
        if (isset($this->duration)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DURATION]
                || $this->duration->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DURATION);
            $this->duration->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DURATION]);
            $xw->endElement();
        }
        if (isset($this->content)) {
            $xw->startElement(self::FIELD_CONTENT);
            $this->content->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->note)) {
            foreach ($this->note as $v) {
                $xw->startElement(self::FIELD_NOTE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRMedia $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRMedia
     * @throws \Exception
     */
    public static function jsonUnserialize(string|\stdClass|array $json,
                                           null|UnserializeConfig $config = null,
                                           null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRMedia)) {
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
        if (isset($json[self::FIELD_BASED_ON]) || array_key_exists(self::FIELD_BASED_ON, $json)) {
            $vs = $json[self::FIELD_BASED_ON];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addBasedOn(FHIRReference::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_PART_OF]) || array_key_exists(self::FIELD_PART_OF, $json)) {
            $vs = $json[self::FIELD_PART_OF];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addPartOf(FHIRReference::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_STATUS])
            || isset($json[self::FIELD_STATUS_EXT])
            || array_key_exists(self::FIELD_STATUS, $json)
            || array_key_exists(self::FIELD_STATUS_EXT, $json)) {
            $value = $json[self::FIELD_STATUS] ?? null;
            $type->setStatus(FHIREventStatus::jsonUnserialize(
                (is_array($value) ? $value : [FHIREventStatus::FIELD_VALUE => $value]) + ($json[self::FIELD_STATUS_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_TYPE]) || array_key_exists(self::FIELD_TYPE, $json)) {
            $type->setType(FHIRCodeableConcept::jsonUnserialize($json[self::FIELD_TYPE], $config));
        }
        if (isset($json[self::FIELD_MODALITY]) || array_key_exists(self::FIELD_MODALITY, $json)) {
            $type->setModality(FHIRCodeableConcept::jsonUnserialize($json[self::FIELD_MODALITY], $config));
        }
        if (isset($json[self::FIELD_VIEW]) || array_key_exists(self::FIELD_VIEW, $json)) {
            $type->setView(FHIRCodeableConcept::jsonUnserialize($json[self::FIELD_VIEW], $config));
        }
        if (isset($json[self::FIELD_SUBJECT]) || array_key_exists(self::FIELD_SUBJECT, $json)) {
            $type->setSubject(FHIRReference::jsonUnserialize($json[self::FIELD_SUBJECT], $config));
        }
        if (isset($json[self::FIELD_ENCOUNTER]) || array_key_exists(self::FIELD_ENCOUNTER, $json)) {
            $type->setEncounter(FHIRReference::jsonUnserialize($json[self::FIELD_ENCOUNTER], $config));
        }
        if (isset($json[self::FIELD_CREATED_DATE_TIME])
            || isset($json[self::FIELD_CREATED_DATE_TIME_EXT])
            || array_key_exists(self::FIELD_CREATED_DATE_TIME, $json)
            || array_key_exists(self::FIELD_CREATED_DATE_TIME_EXT, $json)) {
            $value = $json[self::FIELD_CREATED_DATE_TIME] ?? null;
            $type->setCreatedDateTime(FHIRDateTime::jsonUnserialize(
                (is_array($value) ? $value : [FHIRDateTime::FIELD_VALUE => $value]) + ($json[self::FIELD_CREATED_DATE_TIME_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_CREATED_PERIOD]) || array_key_exists(self::FIELD_CREATED_PERIOD, $json)) {
            $type->setCreatedPeriod(FHIRPeriod::jsonUnserialize($json[self::FIELD_CREATED_PERIOD], $config));
        }
        if (isset($json[self::FIELD_ISSUED])
            || isset($json[self::FIELD_ISSUED_EXT])
            || array_key_exists(self::FIELD_ISSUED, $json)
            || array_key_exists(self::FIELD_ISSUED_EXT, $json)) {
            $value = $json[self::FIELD_ISSUED] ?? null;
            $type->setIssued(FHIRInstant::jsonUnserialize(
                (is_array($value) ? $value : [FHIRInstant::FIELD_VALUE => $value]) + ($json[self::FIELD_ISSUED_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_OPERATOR]) || array_key_exists(self::FIELD_OPERATOR, $json)) {
            $type->setOperator(FHIRReference::jsonUnserialize($json[self::FIELD_OPERATOR], $config));
        }
        if (isset($json[self::FIELD_REASON_CODE]) || array_key_exists(self::FIELD_REASON_CODE, $json)) {
            $vs = $json[self::FIELD_REASON_CODE];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addReasonCode(FHIRCodeableConcept::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_BODY_SITE]) || array_key_exists(self::FIELD_BODY_SITE, $json)) {
            $type->setBodySite(FHIRCodeableConcept::jsonUnserialize($json[self::FIELD_BODY_SITE], $config));
        }
        if (isset($json[self::FIELD_DEVICE_NAME])
            || isset($json[self::FIELD_DEVICE_NAME_EXT])
            || array_key_exists(self::FIELD_DEVICE_NAME, $json)
            || array_key_exists(self::FIELD_DEVICE_NAME_EXT, $json)) {
            $value = $json[self::FIELD_DEVICE_NAME] ?? null;
            $type->setDeviceName(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_DEVICE_NAME_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_DEVICE]) || array_key_exists(self::FIELD_DEVICE, $json)) {
            $type->setDevice(FHIRReference::jsonUnserialize($json[self::FIELD_DEVICE], $config));
        }
        if (isset($json[self::FIELD_HEIGHT])
            || isset($json[self::FIELD_HEIGHT_EXT])
            || array_key_exists(self::FIELD_HEIGHT, $json)
            || array_key_exists(self::FIELD_HEIGHT_EXT, $json)) {
            $value = $json[self::FIELD_HEIGHT] ?? null;
            $type->setHeight(FHIRPositiveInt::jsonUnserialize(
                (is_array($value) ? $value : [FHIRPositiveInt::FIELD_VALUE => $value]) + ($json[self::FIELD_HEIGHT_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_WIDTH])
            || isset($json[self::FIELD_WIDTH_EXT])
            || array_key_exists(self::FIELD_WIDTH, $json)
            || array_key_exists(self::FIELD_WIDTH_EXT, $json)) {
            $value = $json[self::FIELD_WIDTH] ?? null;
            $type->setWidth(FHIRPositiveInt::jsonUnserialize(
                (is_array($value) ? $value : [FHIRPositiveInt::FIELD_VALUE => $value]) + ($json[self::FIELD_WIDTH_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_FRAMES])
            || isset($json[self::FIELD_FRAMES_EXT])
            || array_key_exists(self::FIELD_FRAMES, $json)
            || array_key_exists(self::FIELD_FRAMES_EXT, $json)) {
            $value = $json[self::FIELD_FRAMES] ?? null;
            $type->setFrames(FHIRPositiveInt::jsonUnserialize(
                (is_array($value) ? $value : [FHIRPositiveInt::FIELD_VALUE => $value]) + ($json[self::FIELD_FRAMES_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_DURATION])
            || isset($json[self::FIELD_DURATION_EXT])
            || array_key_exists(self::FIELD_DURATION, $json)
            || array_key_exists(self::FIELD_DURATION_EXT, $json)) {
            $value = $json[self::FIELD_DURATION] ?? null;
            $type->setDuration(FHIRDecimal::jsonUnserialize(
                (is_array($value) ? $value : [FHIRDecimal::FIELD_VALUE => $value]) + ($json[self::FIELD_DURATION_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_CONTENT]) || array_key_exists(self::FIELD_CONTENT, $json)) {
            $type->setContent(FHIRAttachment::jsonUnserialize($json[self::FIELD_CONTENT], $config));
        }
        if (isset($json[self::FIELD_NOTE]) || array_key_exists(self::FIELD_NOTE, $json)) {
            $vs = $json[self::FIELD_NOTE];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addNote(FHIRAnnotation::jsonUnserialize($v, $config));
            }
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
        if (isset($this->basedOn) && [] !== $this->basedOn) {
            $out->basedOn = $this->basedOn;
        }
        if (isset($this->partOf) && [] !== $this->partOf) {
            $out->partOf = $this->partOf;
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
        if (isset($this->type)) {
            $out->type = $this->type;
        }
        if (isset($this->modality)) {
            $out->modality = $this->modality;
        }
        if (isset($this->view)) {
            $out->view = $this->view;
        }
        if (isset($this->subject)) {
            $out->subject = $this->subject;
        }
        if (isset($this->encounter)) {
            $out->encounter = $this->encounter;
        }
        if (isset($this->createdDateTime)) {
            if (null !== ($val = $this->createdDateTime->getValue())) {
                $out->createdDateTime = $val;
            }
            if ($this->createdDateTime->_nonValueFieldDefined()) {
                $ext = $this->createdDateTime->jsonSerialize();
                unset($ext->value);
                $out->_createdDateTime = $ext;
            }
        }
        if (isset($this->createdPeriod)) {
            $out->createdPeriod = $this->createdPeriod;
        }
        if (isset($this->issued)) {
            if (null !== ($val = $this->issued->getValue())) {
                $out->issued = $val;
            }
            if ($this->issued->_nonValueFieldDefined()) {
                $ext = $this->issued->jsonSerialize();
                unset($ext->value);
                $out->_issued = $ext;
            }
        }
        if (isset($this->operator)) {
            $out->operator = $this->operator;
        }
        if (isset($this->reasonCode) && [] !== $this->reasonCode) {
            $out->reasonCode = $this->reasonCode;
        }
        if (isset($this->bodySite)) {
            $out->bodySite = $this->bodySite;
        }
        if (isset($this->deviceName)) {
            if (null !== ($val = $this->deviceName->getValue())) {
                $out->deviceName = $val;
            }
            if ($this->deviceName->_nonValueFieldDefined()) {
                $ext = $this->deviceName->jsonSerialize();
                unset($ext->value);
                $out->_deviceName = $ext;
            }
        }
        if (isset($this->device)) {
            $out->device = $this->device;
        }
        if (isset($this->height)) {
            if (null !== ($val = $this->height->getValue())) {
                $out->height = $val;
            }
            if ($this->height->_nonValueFieldDefined()) {
                $ext = $this->height->jsonSerialize();
                unset($ext->value);
                $out->_height = $ext;
            }
        }
        if (isset($this->width)) {
            if (null !== ($val = $this->width->getValue())) {
                $out->width = $val;
            }
            if ($this->width->_nonValueFieldDefined()) {
                $ext = $this->width->jsonSerialize();
                unset($ext->value);
                $out->_width = $ext;
            }
        }
        if (isset($this->frames)) {
            if (null !== ($val = $this->frames->getValue())) {
                $out->frames = $val;
            }
            if ($this->frames->_nonValueFieldDefined()) {
                $ext = $this->frames->jsonSerialize();
                unset($ext->value);
                $out->_frames = $ext;
            }
        }
        if (isset($this->duration)) {
            if (null !== ($val = $this->duration->getValue())) {
                $out->duration = $val;
            }
            if ($this->duration->_nonValueFieldDefined()) {
                $ext = $this->duration->jsonSerialize();
                unset($ext->value);
                $out->_duration = $ext;
            }
        }
        if (isset($this->content)) {
            $out->content = $this->content;
        }
        if (isset($this->note) && [] !== $this->note) {
            $out->note = $this->note;
        }
        $out->resourceType = $this->_getResourceType();
        return $out;
    }
}