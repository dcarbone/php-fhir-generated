<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: April 18th, 2025 00:31+0000
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
 *   Copyright (c) 2011-2013, HL7, Inc.
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
 *   Generated on Tue, Sep 30, 2014 18:08+1000 for FHIR v0.0.82
 */
use DCarbone\PHPFHIRGenerated\Constants;
use DCarbone\PHPFHIRGenerated\Encoding\JSONSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\FHIRVersion;
use DCarbone\PHPFHIRGenerated\Types\ResourceTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Rules\MinOccursRule;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRDateTimePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRAttachment;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRMediaType;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIntegerPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRMediaTypeList;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Version;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionConstants;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionTypeMap;

/**
 * A photo, video, or audio recording acquired or used in healthcare. The actual
 * content may be inline or provided by direct reference.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 */
#[\Attribute(\Attribute::TARGET_PROPERTY)]
class FHIRMedia extends FHIRResource implements VersionContainedTypeInterface
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_MEDIA;

    /* class_default.php:56 */
    public const FIELD_TYPE = 'type';
    public const FIELD_TYPE_EXT = '_type';
    public const FIELD_SUBTYPE = 'subtype';
    public const FIELD_IDENTIFIER = 'identifier';
    public const FIELD_DATE_TIME = 'dateTime';
    public const FIELD_DATE_TIME_EXT = '_dateTime';
    public const FIELD_SUBJECT = 'subject';
    public const FIELD_OPERATOR = 'operator';
    public const FIELD_VIEW = 'view';
    public const FIELD_DEVICE_NAME = 'deviceName';
    public const FIELD_DEVICE_NAME_EXT = '_deviceName';
    public const FIELD_HEIGHT = 'height';
    public const FIELD_HEIGHT_EXT = '_height';
    public const FIELD_WIDTH = 'width';
    public const FIELD_WIDTH_EXT = '_width';
    public const FIELD_FRAMES = 'frames';
    public const FIELD_FRAMES_EXT = '_frames';
    public const FIELD_LENGTH = 'length';
    public const FIELD_LENGTH_EXT = '_length';
    public const FIELD_CONTENT = 'content';

    /* class_default.php:75 */
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_TYPE => [
            MinOccursRule::NAME => 1,
        ],
        self::FIELD_CONTENT => [
            MinOccursRule::NAME => 1,
        ],
    ];

    /* class_default.php:96 */
    private array $_valueXMLLocations = [
        self::FIELD_TYPE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DATE_TIME => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DEVICE_NAME => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_HEIGHT => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_WIDTH => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_FRAMES => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_LENGTH => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:112 */
    /**
     * Whether the Media is a photo, video, or audio
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether the media is a photo (still image), an audio recording, or a video
     * recording.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRMediaType 
     */
    #[FHIRMediaType]
    protected FHIRMediaType $type;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept 
     */
    #[FHIRCodeableConcept]
    protected FHIRCodeableConcept $subtype;
    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifiers associated with the image - these may include identifiers for the
     * image itself, identifiers for the context of its collection (e.g. series ids)
     * and context ids such as accession numbers or other workflow identifiers.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRIdentifier> 
     */
    #[FHIRIdentifier]
    protected array $identifier;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When the media was originally recorded. For video and audio, if the length of
     * the recording is not insignificant, this is the end of the recording.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDateTime 
     */
    #[FHIRDateTime]
    protected FHIRDateTime $dateTime;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Who/What this Media is a record of.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference 
     */
    #[FHIRResourceReference]
    protected FHIRResourceReference $subject;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The person who administered the collection of the image.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference 
     */
    #[FHIRResourceReference]
    protected FHIRResourceReference $operator;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The name of the imaging view e.g Lateral or Antero-posterior (AP).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept 
     */
    #[FHIRCodeableConcept]
    protected FHIRCodeableConcept $view;
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the device / manufacturer of the device that was used to make the
     * recording.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString 
     */
    #[FHIRString]
    protected FHIRString $deviceName;
    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Height of the image in pixels(photo/video).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger 
     */
    #[FHIRInteger]
    protected FHIRInteger $height;
    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Width of the image in pixels (photo/video).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger 
     */
    #[FHIRInteger]
    protected FHIRInteger $width;
    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The number of frames in a photo. This is used with a multi-page fax, or an
     * imaging acquisition context that takes multiple slices in a single image, or an
     * animated gif. If there is more than one frame, this SHALL have a value in order
     * to alert interface software that a multi-frame capable rendering widget is
     * required.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger 
     */
    #[FHIRInteger]
    protected FHIRInteger $frames;
    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The length of the recording in seconds - for audio and video.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger 
     */
    #[FHIRInteger]
    protected FHIRInteger $length;
    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual content of the media - inline or by direct reference to the media
     * source file.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRAttachment 
     */
    #[FHIRAttachment]
    protected FHIRAttachment $content;

    /* constructor.php:61 */
    /**
     * FHIRMedia Constructor
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCode $language
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRNarrative $text
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRResourceInline>|iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionContainedTypeInterface> $contained
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension> $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId $id
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension> $modifierExtension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRMediaTypeList|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRMediaType $type
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept $subtype
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRIdentifier> $identifier
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDateTime $dateTime
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $subject
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $operator
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept $view
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString $deviceName
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger $height
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger $width
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger $frames
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger $length
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRAttachment $content
     * @param null|string[] $fhirComments
     */
    public function __construct(null|string|FHIRCodePrimitive|FHIRCode $language = null,
                                null|FHIRNarrative $text = null,
                                null|iterable $contained = null,
                                null|iterable $extension = null,
                                null|string|FHIRIdPrimitive|FHIRId $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|FHIRMediaTypeList|FHIRMediaType $type = null,
                                null|FHIRCodeableConcept $subtype = null,
                                null|iterable $identifier = null,
                                null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $dateTime = null,
                                null|FHIRResourceReference $subject = null,
                                null|FHIRResourceReference $operator = null,
                                null|FHIRCodeableConcept $view = null,
                                null|string|FHIRStringPrimitive|FHIRString $deviceName = null,
                                null|string|float|FHIRIntegerPrimitive|FHIRInteger $height = null,
                                null|string|float|FHIRIntegerPrimitive|FHIRInteger $width = null,
                                null|string|float|FHIRIntegerPrimitive|FHIRInteger $frames = null,
                                null|string|float|FHIRIntegerPrimitive|FHIRInteger $length = null,
                                null|FHIRAttachment $content = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(language: $language,
                            text: $text,
                            contained: $contained,
                            extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $type) {
            $this->setType($type);
        }
        if (null !== $subtype) {
            $this->setSubtype($subtype);
        }
        if (null !== $identifier) {
            $this->setIdentifier(...$identifier);
        }
        if (null !== $dateTime) {
            $this->setDateTime($dateTime);
        }
        if (null !== $subject) {
            $this->setSubject($subject);
        }
        if (null !== $operator) {
            $this->setOperator($operator);
        }
        if (null !== $view) {
            $this->setView($view);
        }
        if (null !== $deviceName) {
            $this->setDeviceName($deviceName);
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
        if (null !== $length) {
            $this->setLength($length);
        }
        if (null !== $content) {
            $this->setContent($content);
        }
    }

    /* class_default.php:145 */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:163 */
    public function _getResourceType(): string
    {
        return static::FHIR_TYPE_NAME;
    }

    /* class_default.php:174 */
    /**
     * Whether the Media is a photo, video, or audio
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether the media is a photo (still image), an audio recording, or a video
     * recording.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRMediaType
     */
    public function getType(): null|FHIRMediaType
    {
        return $this->type ?? null;
    }

    /**
     * Whether the Media is a photo, video, or audio
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether the media is a photo (still image), an audio recording, or a video
     * recording.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRMediaTypeList|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRMediaType $type
     * @return static
     */
    public function setType(null|string|FHIRMediaTypeList|FHIRMediaType $type): self
    {
        if (null === $type) {
            unset($this->type);
            return $this;
        }
        if (!($type instanceof FHIRMediaType)) {
            $type = new FHIRMediaType(value: $type);
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getSubtype(): null|FHIRCodeableConcept
    {
        return $this->subtype ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept $subtype
     * @return static
     */
    public function setSubtype(null|FHIRCodeableConcept $subtype): self
    {
        if (null === $subtype) {
            unset($this->subtype);
            return $this;
        }
        $this->subtype = $subtype;
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifiers associated with the image - these may include identifiers for the
     * image itself, identifiers for the context of its collection (e.g. series ids)
     * and context ids such as accession numbers or other workflow identifiers.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRIdentifier>
     */
    public function getIdentifier(): array
    {
        return $this->identifier ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRIdentifier>
     */
    public function getIdentifierIterator(): iterable
    {
        if (!isset($this->identifier)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->identifier);
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifiers associated with the image - these may include identifiers for the
     * image itself, identifiers for the context of its collection (e.g. series ids)
     * and context ids such as accession numbers or other workflow identifiers.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRIdentifier $identifier
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
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifiers associated with the image - these may include identifiers for the
     * image itself, identifiers for the context of its collection (e.g. series ids)
     * and context ids such as accession numbers or other workflow identifiers.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRIdentifier ...$identifier
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
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When the media was originally recorded. For video and audio, if the length of
     * the recording is not insignificant, this is the end of the recording.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDateTime
     */
    public function getDateTime(): null|FHIRDateTime
    {
        return $this->dateTime ?? null;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When the media was originally recorded. For video and audio, if the length of
     * the recording is not insignificant, this is the end of the recording.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDateTime $dateTime
     * @return static
     */
    public function setDateTime(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $dateTime): self
    {
        if (null === $dateTime) {
            unset($this->dateTime);
            return $this;
        }
        if (!($dateTime instanceof FHIRDateTime)) {
            $dateTime = new FHIRDateTime(value: $dateTime);
        }
        $this->dateTime = $dateTime;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Who/What this Media is a record of.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference
     */
    public function getSubject(): null|FHIRResourceReference
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $subject
     * @return static
     */
    public function setSubject(null|FHIRResourceReference $subject): self
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
     * The person who administered the collection of the image.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference
     */
    public function getOperator(): null|FHIRResourceReference
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $operator
     * @return static
     */
    public function setOperator(null|FHIRResourceReference $operator): self
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
     * The name of the imaging view e.g Lateral or Antero-posterior (AP).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept
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
     * The name of the imaging view e.g Lateral or Antero-posterior (AP).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept $view
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
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the device / manufacturer of the device that was used to make the
     * recording.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString
     */
    public function getDeviceName(): null|FHIRString
    {
        return $this->deviceName ?? null;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the device / manufacturer of the device that was used to make the
     * recording.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString $deviceName
     * @return static
     */
    public function setDeviceName(null|string|FHIRStringPrimitive|FHIRString $deviceName): self
    {
        if (null === $deviceName) {
            unset($this->deviceName);
            return $this;
        }
        if (!($deviceName instanceof FHIRString)) {
            $deviceName = new FHIRString(value: $deviceName);
        }
        $this->deviceName = $deviceName;
        return $this;
    }

    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Height of the image in pixels(photo/video).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger
     */
    public function getHeight(): null|FHIRInteger
    {
        return $this->height ?? null;
    }

    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Height of the image in pixels(photo/video).
     *
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger $height
     * @return static
     */
    public function setHeight(null|string|float|FHIRIntegerPrimitive|FHIRInteger $height): self
    {
        if (null === $height) {
            unset($this->height);
            return $this;
        }
        if (!($height instanceof FHIRInteger)) {
            $height = new FHIRInteger(value: $height);
        }
        $this->height = $height;
        return $this;
    }

    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Width of the image in pixels (photo/video).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger
     */
    public function getWidth(): null|FHIRInteger
    {
        return $this->width ?? null;
    }

    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Width of the image in pixels (photo/video).
     *
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger $width
     * @return static
     */
    public function setWidth(null|string|float|FHIRIntegerPrimitive|FHIRInteger $width): self
    {
        if (null === $width) {
            unset($this->width);
            return $this;
        }
        if (!($width instanceof FHIRInteger)) {
            $width = new FHIRInteger(value: $width);
        }
        $this->width = $width;
        return $this;
    }

    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The number of frames in a photo. This is used with a multi-page fax, or an
     * imaging acquisition context that takes multiple slices in a single image, or an
     * animated gif. If there is more than one frame, this SHALL have a value in order
     * to alert interface software that a multi-frame capable rendering widget is
     * required.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger
     */
    public function getFrames(): null|FHIRInteger
    {
        return $this->frames ?? null;
    }

    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The number of frames in a photo. This is used with a multi-page fax, or an
     * imaging acquisition context that takes multiple slices in a single image, or an
     * animated gif. If there is more than one frame, this SHALL have a value in order
     * to alert interface software that a multi-frame capable rendering widget is
     * required.
     *
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger $frames
     * @return static
     */
    public function setFrames(null|string|float|FHIRIntegerPrimitive|FHIRInteger $frames): self
    {
        if (null === $frames) {
            unset($this->frames);
            return $this;
        }
        if (!($frames instanceof FHIRInteger)) {
            $frames = new FHIRInteger(value: $frames);
        }
        $this->frames = $frames;
        return $this;
    }

    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The length of the recording in seconds - for audio and video.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger
     */
    public function getLength(): null|FHIRInteger
    {
        return $this->length ?? null;
    }

    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The length of the recording in seconds - for audio and video.
     *
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger $length
     * @return static
     */
    public function setLength(null|string|float|FHIRIntegerPrimitive|FHIRInteger $length): self
    {
        if (null === $length) {
            unset($this->length);
            return $this;
        }
        if (!($length instanceof FHIRInteger)) {
            $length = new FHIRInteger(value: $length);
        }
        $this->length = $length;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRAttachment
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRAttachment $content
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

    /* class_default.php:201 */
    /**
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRMedia $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRMedia
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
            if (self::FIELD_LANGUAGE === $cen) {
                $type->setLanguage(FHIRCode::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TEXT === $cen) {
                $type->setText(FHIRNarrative::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CONTAINED === $cen) {
                foreach ($ce->children() as $cen) {
                    /** @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionContainedTypeInterface $cn */
                    $cn = VersionTypeMap::mustGetContainedTypeClassnameFromXML($cen);
                    $type->addContained($cn::xmlUnserialize($cen, $config));
                }
            } else if (self::FIELD_EXTENSION === $cen) {
                $type->addExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ID === $cen) {
                $type->setId(FHIRId::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TYPE === $cen) {
                $type->setType(FHIRMediaType::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SUBTYPE === $cen) {
                $type->setSubtype(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_IDENTIFIER === $cen) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DATE_TIME === $cen) {
                $type->setDateTime(FHIRDateTime::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SUBJECT === $cen) {
                $type->setSubject(FHIRResourceReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_OPERATOR === $cen) {
                $type->setOperator(FHIRResourceReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VIEW === $cen) {
                $type->setView(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DEVICE_NAME === $cen) {
                $type->setDeviceName(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_HEIGHT === $cen) {
                $type->setHeight(FHIRInteger::xmlUnserialize($ce, $config));
            } else if (self::FIELD_WIDTH === $cen) {
                $type->setWidth(FHIRInteger::xmlUnserialize($ce, $config));
            } else if (self::FIELD_FRAMES === $cen) {
                $type->setFrames(FHIRInteger::xmlUnserialize($ce, $config));
            } else if (self::FIELD_LENGTH === $cen) {
                $type->setLength(FHIRInteger::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CONTENT === $cen) {
                $type->setContent(FHIRAttachment::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_LANGUAGE])) {
            if (isset($type->language)) {
                $type->language->setValue((string)$attributes[self::FIELD_LANGUAGE]);
            } else {
                $type->setLanguage((string)$attributes[self::FIELD_LANGUAGE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_LANGUAGE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_ID])) {
            if (isset($type->id)) {
                $type->id->setValue((string)$attributes[self::FIELD_ID]);
            } else {
                $type->setId((string)$attributes[self::FIELD_ID]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_TYPE])) {
            if (isset($type->type)) {
                $type->type->setValue((string)$attributes[self::FIELD_TYPE]);
            } else {
                $type->setType((string)$attributes[self::FIELD_TYPE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_TYPE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DATE_TIME])) {
            if (isset($type->dateTime)) {
                $type->dateTime->setValue((string)$attributes[self::FIELD_DATE_TIME]);
            } else {
                $type->setDateTime((string)$attributes[self::FIELD_DATE_TIME]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_DATE_TIME, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DEVICE_NAME])) {
            if (isset($type->deviceName)) {
                $type->deviceName->setValue((string)$attributes[self::FIELD_DEVICE_NAME]);
            } else {
                $type->setDeviceName((string)$attributes[self::FIELD_DEVICE_NAME]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_DEVICE_NAME, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_HEIGHT])) {
            if (isset($type->height)) {
                $type->height->setValue((string)$attributes[self::FIELD_HEIGHT]);
            } else {
                $type->setHeight((string)$attributes[self::FIELD_HEIGHT]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_HEIGHT, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_WIDTH])) {
            if (isset($type->width)) {
                $type->width->setValue((string)$attributes[self::FIELD_WIDTH]);
            } else {
                $type->setWidth((string)$attributes[self::FIELD_WIDTH]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_WIDTH, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_FRAMES])) {
            if (isset($type->frames)) {
                $type->frames->setValue((string)$attributes[self::FIELD_FRAMES]);
            } else {
                $type->setFrames((string)$attributes[self::FIELD_FRAMES]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_FRAMES, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_LENGTH])) {
            if (isset($type->length)) {
                $type->length->setValue((string)$attributes[self::FIELD_LENGTH]);
            } else {
                $type->setLength((string)$attributes[self::FIELD_LENGTH]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_LENGTH, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($this->type) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_TYPE]) {
            $xw->writeAttribute(self::FIELD_TYPE, $this->type->_getValueAsString());
        }
        if (isset($this->dateTime) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DATE_TIME]) {
            $xw->writeAttribute(self::FIELD_DATE_TIME, $this->dateTime->_getValueAsString());
        }
        if (isset($this->deviceName) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DEVICE_NAME]) {
            $xw->writeAttribute(self::FIELD_DEVICE_NAME, $this->deviceName->_getValueAsString());
        }
        if (isset($this->height) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_HEIGHT]) {
            $xw->writeAttribute(self::FIELD_HEIGHT, $this->height->_getValueAsString());
        }
        if (isset($this->width) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_WIDTH]) {
            $xw->writeAttribute(self::FIELD_WIDTH, $this->width->_getValueAsString());
        }
        if (isset($this->frames) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_FRAMES]) {
            $xw->writeAttribute(self::FIELD_FRAMES, $this->frames->_getValueAsString());
        }
        if (isset($this->length) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_LENGTH]) {
            $xw->writeAttribute(self::FIELD_LENGTH, $this->length->_getValueAsString());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->type)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_TYPE]
                || $this->type->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_TYPE);
            $this->type->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_TYPE]);
            $xw->endElement();
        }
        if (isset($this->subtype)) {
            $xw->startElement(self::FIELD_SUBTYPE);
            $this->subtype->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->identifier)) {
            foreach ($this->identifier as $v) {
                $xw->startElement(self::FIELD_IDENTIFIER);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->dateTime)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DATE_TIME]
                || $this->dateTime->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DATE_TIME);
            $this->dateTime->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DATE_TIME]);
            $xw->endElement();
        }
        if (isset($this->subject)) {
            $xw->startElement(self::FIELD_SUBJECT);
            $this->subject->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->operator)) {
            $xw->startElement(self::FIELD_OPERATOR);
            $this->operator->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->view)) {
            $xw->startElement(self::FIELD_VIEW);
            $this->view->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->deviceName)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DEVICE_NAME]
                || $this->deviceName->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DEVICE_NAME);
            $this->deviceName->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DEVICE_NAME]);
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
        if (isset($this->length)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_LENGTH]
                || $this->length->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_LENGTH);
            $this->length->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_LENGTH]);
            $xw->endElement();
        }
        if (isset($this->content)) {
            $xw->startElement(self::FIELD_CONTENT);
            $this->content->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if ($rootOpened ?? false) {
            $xw->endElement();
        }
        if ($docStarted ?? false) {
            $xw->endDocument();
        }
        return $xw;
    }

    /**
     * @param string|\stdClass $decoded
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRMedia $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRMedia
     * @throws \Exception
     */
    public static function jsonUnserialize(string|\stdClass $decoded,
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
        if (is_string($decoded)) {
            $decoded = json_decode(json: $decoded,
                                associative: false,
                                depth: $config->getJSONDecodeMaxDepth(),
                                flags: $config->getJSONDecodeOpts());
        }
        parent::jsonUnserialize($decoded, $config, $type); 
        if (isset($decoded->type)
            || isset($decoded->_type)
            || property_exists($decoded, self::FIELD_TYPE)
            || property_exists($decoded, self::FIELD_TYPE_EXT)) {
            $v = $decoded->_type ?? new \stdClass();
            $v->value = $decoded->type ?? null;
            $type->setType(FHIRMediaType::jsonUnserialize($v, $config));
        }
        if (isset($decoded->subtype) || property_exists($decoded, self::FIELD_SUBTYPE)) {
            if (is_array($decoded->subtype)) {
                $type->setSubtype(FHIRCodeableConcept::jsonUnserialize(reset($decoded->subtype), $config));
            } else {
                $type->setSubtype(FHIRCodeableConcept::jsonUnserialize($decoded->subtype, $config));
            }
        }
        if (isset($decoded->identifier) || property_exists($decoded, self::FIELD_IDENTIFIER)) {
            if (is_object($decoded->identifier)) {
                $vals = [$decoded->identifier];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_IDENTIFIER, true);
            } else {
                $vals = $decoded->identifier;
            }
            foreach($vals as $v) {
                $type->addIdentifier(FHIRIdentifier::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->dateTime)
            || isset($decoded->_dateTime)
            || property_exists($decoded, self::FIELD_DATE_TIME)
            || property_exists($decoded, self::FIELD_DATE_TIME_EXT)) {
            $v = $decoded->_dateTime ?? new \stdClass();
            $v->value = $decoded->dateTime ?? null;
            $type->setDateTime(FHIRDateTime::jsonUnserialize($v, $config));
        }
        if (isset($decoded->subject) || property_exists($decoded, self::FIELD_SUBJECT)) {
            if (is_array($decoded->subject)) {
                $type->setSubject(FHIRResourceReference::jsonUnserialize(reset($decoded->subject), $config));
            } else {
                $type->setSubject(FHIRResourceReference::jsonUnserialize($decoded->subject, $config));
            }
        }
        if (isset($decoded->operator) || property_exists($decoded, self::FIELD_OPERATOR)) {
            if (is_array($decoded->operator)) {
                $type->setOperator(FHIRResourceReference::jsonUnserialize(reset($decoded->operator), $config));
            } else {
                $type->setOperator(FHIRResourceReference::jsonUnserialize($decoded->operator, $config));
            }
        }
        if (isset($decoded->view) || property_exists($decoded, self::FIELD_VIEW)) {
            if (is_array($decoded->view)) {
                $type->setView(FHIRCodeableConcept::jsonUnserialize(reset($decoded->view), $config));
            } else {
                $type->setView(FHIRCodeableConcept::jsonUnserialize($decoded->view, $config));
            }
        }
        if (isset($decoded->deviceName)
            || isset($decoded->_deviceName)
            || property_exists($decoded, self::FIELD_DEVICE_NAME)
            || property_exists($decoded, self::FIELD_DEVICE_NAME_EXT)) {
            $v = $decoded->_deviceName ?? new \stdClass();
            $v->value = $decoded->deviceName ?? null;
            $type->setDeviceName(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($decoded->height)
            || isset($decoded->_height)
            || property_exists($decoded, self::FIELD_HEIGHT)
            || property_exists($decoded, self::FIELD_HEIGHT_EXT)) {
            $v = $decoded->_height ?? new \stdClass();
            $v->value = $decoded->height ?? null;
            $type->setHeight(FHIRInteger::jsonUnserialize($v, $config));
        }
        if (isset($decoded->width)
            || isset($decoded->_width)
            || property_exists($decoded, self::FIELD_WIDTH)
            || property_exists($decoded, self::FIELD_WIDTH_EXT)) {
            $v = $decoded->_width ?? new \stdClass();
            $v->value = $decoded->width ?? null;
            $type->setWidth(FHIRInteger::jsonUnserialize($v, $config));
        }
        if (isset($decoded->frames)
            || isset($decoded->_frames)
            || property_exists($decoded, self::FIELD_FRAMES)
            || property_exists($decoded, self::FIELD_FRAMES_EXT)) {
            $v = $decoded->_frames ?? new \stdClass();
            $v->value = $decoded->frames ?? null;
            $type->setFrames(FHIRInteger::jsonUnserialize($v, $config));
        }
        if (isset($decoded->length)
            || isset($decoded->_length)
            || property_exists($decoded, self::FIELD_LENGTH)
            || property_exists($decoded, self::FIELD_LENGTH_EXT)) {
            $v = $decoded->_length ?? new \stdClass();
            $v->value = $decoded->length ?? null;
            $type->setLength(FHIRInteger::jsonUnserialize($v, $config));
        }
        if (isset($decoded->content) || property_exists($decoded, self::FIELD_CONTENT)) {
            if (is_array($decoded->content)) {
                $type->setContent(FHIRAttachment::jsonUnserialize(reset($decoded->content), $config));
            } else {
                $type->setContent(FHIRAttachment::jsonUnserialize($decoded->content, $config));
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
        if (isset($this->type)) {
            if (null !== ($val = $this->type->getValue())) {
                $out->type = $val;
            }
            if ($this->type->_nonValueFieldDefined()) {
                $ext = $this->type->jsonSerialize();
                unset($ext->value);
                $out->_type = $ext;
            }
        }
        if (isset($this->subtype)) {
            $out->subtype = $this->subtype;
        }
        if (isset($this->identifier) && [] !== $this->identifier) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_IDENTIFIER) && 1 === count($this->identifier)) {
                $out->identifier = $this->identifier[0];
            } else {
                $out->identifier = $this->identifier;
            }
        }
        if (isset($this->dateTime)) {
            if (null !== ($val = $this->dateTime->getValue())) {
                $out->dateTime = $val;
            }
            if ($this->dateTime->_nonValueFieldDefined()) {
                $ext = $this->dateTime->jsonSerialize();
                unset($ext->value);
                $out->_dateTime = $ext;
            }
        }
        if (isset($this->subject)) {
            $out->subject = $this->subject;
        }
        if (isset($this->operator)) {
            $out->operator = $this->operator;
        }
        if (isset($this->view)) {
            $out->view = $this->view;
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
        if (isset($this->length)) {
            if (null !== ($val = $this->length->getValue())) {
                $out->length = $val;
            }
            if ($this->length->_nonValueFieldDefined()) {
                $ext = $this->length->jsonSerialize();
                unset($ext->value);
                $out->_length = $ext;
            }
        }
        if (isset($this->content)) {
            $out->content = $this->content;
        }
        $out->resourceType = $this->_getResourceType();
        return $out;
    }
}