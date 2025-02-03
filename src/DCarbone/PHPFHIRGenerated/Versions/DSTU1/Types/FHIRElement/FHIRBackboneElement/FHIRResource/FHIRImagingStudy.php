<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource;

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
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ResourceTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRDateTimePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRImagingStudy\FHIRImagingStudySeries;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCoding;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRImagingModality;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInstanceAvailability;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIROid;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIntegerPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIROidPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRResourceInline;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRImagingModalityList;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRInstanceAvailabilityList;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Version;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionConstants;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionTypeMap;

/**
 * Manifest of a set of images produced in study. The set of images may include
 * every image in the study, or it may be an incomplete sample, such as a list of
 * key images.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 */
class FHIRImagingStudy extends FHIRResource implements VersionContainedTypeInterface
{
    use TypeValidationsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_IMAGING_STUDY;

    /* class_default.php:47 */
    public const FIELD_DATE_TIME = 'dateTime';
    public const FIELD_DATE_TIME_EXT = '_dateTime';
    public const FIELD_SUBJECT = 'subject';
    public const FIELD_UID = 'uid';
    public const FIELD_UID_EXT = '_uid';
    public const FIELD_ACCESSION_NO = 'accessionNo';
    public const FIELD_IDENTIFIER = 'identifier';
    public const FIELD_ORDER = 'order';
    public const FIELD_MODALITY = 'modality';
    public const FIELD_MODALITY_EXT = '_modality';
    public const FIELD_REFERRER = 'referrer';
    public const FIELD_AVAILABILITY = 'availability';
    public const FIELD_AVAILABILITY_EXT = '_availability';
    public const FIELD_URL = 'url';
    public const FIELD_URL_EXT = '_url';
    public const FIELD_NUMBER_OF_SERIES = 'numberOfSeries';
    public const FIELD_NUMBER_OF_SERIES_EXT = '_numberOfSeries';
    public const FIELD_NUMBER_OF_INSTANCES = 'numberOfInstances';
    public const FIELD_NUMBER_OF_INSTANCES_EXT = '_numberOfInstances';
    public const FIELD_CLINICAL_INFORMATION = 'clinicalInformation';
    public const FIELD_CLINICAL_INFORMATION_EXT = '_clinicalInformation';
    public const FIELD_PROCEDURE = 'procedure';
    public const FIELD_INTERPRETER = 'interpreter';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DESCRIPTION_EXT = '_description';
    public const FIELD_SERIES = 'series';

    /* class_default.php:66 */
    // The default validation rules for this type as defined in the FHIR schema used to generate this code.
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_SUBJECT => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_UID => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_NUMBER_OF_SERIES => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_NUMBER_OF_INSTANCES => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /* class_default.php:95 */
    private array $_valueXMLLocations = [
        self::FIELD_DATE_TIME => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_UID => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_AVAILABILITY => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_URL => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_NUMBER_OF_SERIES => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_NUMBER_OF_INSTANCES => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_CLINICAL_INFORMATION => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DESCRIPTION => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:111 */
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Date and Time the study took place.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDateTime 
     */
    protected FHIRDateTime $dateTime;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Who the images are of.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference 
     */
    protected FHIRResourceReference $subject;
    /**
     * An oid represented as a URI
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Formal identifier for the study.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIROid 
     */
    protected FHIROid $uid;
    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Accession Number.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRIdentifier 
     */
    protected FHIRIdentifier $accessionNo;
    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Other identifiers for the study.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRIdentifier[] 
     */
    protected array $identifier;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A list of the diagnostic orders that resulted in this imaging study being
     * performed.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference[] 
     */
    protected array $order;
    /**
     * Type of acquired image data in the instance
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A list of all the Series.ImageModality values that are actual acquisition
     * modalities, i.e. those in the DICOM Context Group 29 (value set OID
     * 1.2.840.10008.6.1.19).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRImagingModality[] 
     */
    protected array $modality;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The requesting/referring physician.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference 
     */
    protected FHIRResourceReference $referrer;
    /**
     * Availability of the resource
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Availability of study (online, offline or nearline).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInstanceAvailability 
     */
    protected FHIRInstanceAvailability $availability;
    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * WADO-RS URI where Study is available.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRUri 
     */
    protected FHIRUri $url;
    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Number of Series in Study.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger 
     */
    protected FHIRInteger $numberOfSeries;
    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Number of SOP Instances in Study.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger 
     */
    protected FHIRInteger $numberOfInstances;
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Diagnoses etc provided with request.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $clinicalInformation;
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Type of procedure performed.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCoding[] 
     */
    protected array $procedure;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Who read study and interpreted the images.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference 
     */
    protected FHIRResourceReference $interpreter;
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Institution-generated description or classification of the Study (component)
     * performed.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $description;
    /**
     * Manifest of a set of images produced in study. The set of images may include
     * every image in the study, or it may be an incomplete sample, such as a list of
     * key images.
     *
     * Each study has one or more series of image instances.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRImagingStudy\FHIRImagingStudySeries[] 
     */
    protected array $series;

    /* constructor.php:62 */
    /**
     * FHIRImagingStudy Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCode $language
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRNarrative $text
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRResourceInline[]|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionContainedTypeInterface[] $contained
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDateTime $dateTime
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $subject
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIROidPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIROid $uid
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRIdentifier $accessionNo
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRIdentifier[] $identifier
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference[] $order
     * @param null|string[]|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRImagingModalityList[]|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRImagingModality[] $modality
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $referrer
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRInstanceAvailabilityList|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInstanceAvailability $availability
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRUri $url
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger $numberOfSeries
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger $numberOfInstances
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString $clinicalInformation
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCoding[] $procedure
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $interpreter
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString $description
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRImagingStudy\FHIRImagingStudySeries[] $series
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRIdPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|FHIRCodePrimitive|FHIRCode $language = null,
                                null|FHIRNarrative $text = null,
                                null|iterable $contained = null,
                                null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $dateTime = null,
                                null|FHIRResourceReference $subject = null,
                                null|string|FHIROidPrimitive|FHIROid $uid = null,
                                null|FHIRIdentifier $accessionNo = null,
                                null|iterable $identifier = null,
                                null|iterable $order = null,
                                null|iterable $modality = null,
                                null|FHIRResourceReference $referrer = null,
                                null|string|FHIRInstanceAvailabilityList|FHIRInstanceAvailability $availability = null,
                                null|string|FHIRUriPrimitive|FHIRUri $url = null,
                                null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $numberOfSeries = null,
                                null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $numberOfInstances = null,
                                null|string|FHIRStringPrimitive|FHIRString $clinicalInformation = null,
                                null|iterable $procedure = null,
                                null|FHIRResourceReference $interpreter = null,
                                null|string|FHIRStringPrimitive|FHIRString $description = null,
                                null|iterable $series = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            language: $language,
                            text: $text,
                            contained: $contained,
                            fhirComments: $fhirComments);
        if (null !== $dateTime) {
            $this->setDateTime($dateTime);
        }
        if (null !== $subject) {
            $this->setSubject($subject);
        }
        if (null !== $uid) {
            $this->setUid($uid);
        }
        if (null !== $accessionNo) {
            $this->setAccessionNo($accessionNo);
        }
        if (null !== $identifier) {
            $this->setIdentifier(...$identifier);
        }
        if (null !== $order) {
            $this->setOrder(...$order);
        }
        if (null !== $modality) {
            $this->setModality(...$modality);
        }
        if (null !== $referrer) {
            $this->setReferrer($referrer);
        }
        if (null !== $availability) {
            $this->setAvailability($availability);
        }
        if (null !== $url) {
            $this->setUrl($url);
        }
        if (null !== $numberOfSeries) {
            $this->setNumberOfSeries($numberOfSeries);
        }
        if (null !== $numberOfInstances) {
            $this->setNumberOfInstances($numberOfInstances);
        }
        if (null !== $clinicalInformation) {
            $this->setClinicalInformation($clinicalInformation);
        }
        if (null !== $procedure) {
            $this->setProcedure(...$procedure);
        }
        if (null !== $interpreter) {
            $this->setInterpreter($interpreter);
        }
        if (null !== $description) {
            $this->setDescription($description);
        }
        if (null !== $series) {
            $this->setSeries(...$series);
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
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Date and Time the study took place.
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
     * Date and Time the study took place.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDateTime $dateTime
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDateTime(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $dateTime,
                                ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $dateTime) {
            unset($this->dateTime);
            return $this;
        }
        if (!($dateTime instanceof FHIRDateTime)) {
            $dateTime = new FHIRDateTime(value: $dateTime);
        }
        $this->dateTime = $dateTime;
        if ($this->_valueXMLLocations[self::FIELD_DATE_TIME] !== $valueXMLLocation) {
            $this->_setDateTimeValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the dateTime element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getDateTimeValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_DATE_TIME];
    }

    /**
     * Set the location the "value" field of the dateTime element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setDateTimeValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_DATE_TIME] = $valueXMLLocation;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Who the images are of.
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
     * Who the images are of.
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
     * An oid represented as a URI
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Formal identifier for the study.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIROid
     */
    public function getUid(): null|FHIROid
    {
        return $this->uid ?? null;
    }

    /**
     * An oid represented as a URI
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Formal identifier for the study.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIROidPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIROid $uid
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setUid(null|string|FHIROidPrimitive|FHIROid $uid,
                           ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $uid) {
            unset($this->uid);
            return $this;
        }
        if (!($uid instanceof FHIROid)) {
            $uid = new FHIROid(value: $uid);
        }
        $this->uid = $uid;
        if ($this->_valueXMLLocations[self::FIELD_UID] !== $valueXMLLocation) {
            $this->_setUidValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the uid element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getUidValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_UID];
    }

    /**
     * Set the location the "value" field of the uid element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setUidValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_UID] = $valueXMLLocation;
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Accession Number.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRIdentifier
     */
    public function getAccessionNo(): null|FHIRIdentifier
    {
        return $this->accessionNo ?? null;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Accession Number.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRIdentifier $accessionNo
     * @return static
     */
    public function setAccessionNo(null|FHIRIdentifier $accessionNo): self
    {
        if (null === $accessionNo) {
            unset($this->accessionNo);
            return $this;
        }
        $this->accessionNo = $accessionNo;
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Other identifiers for the study.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRIdentifier[]
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
     * Other identifiers for the study.
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
     * Other identifiers for the study.
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
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A list of the diagnostic orders that resulted in this imaging study being
     * performed.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference[]
     */
    public function getOrder(): array
    {
        return $this->order ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference>
     */
    public function getOrderIterator(): iterable
    {
        if (!isset($this->order)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->order);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A list of the diagnostic orders that resulted in this imaging study being
     * performed.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $order
     * @return static
     */
    public function addOrder(FHIRResourceReference $order): self
    {
        if (!isset($this->order)) {
            $this->order = [];
        }
        $this->order[] = $order;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A list of the diagnostic orders that resulted in this imaging study being
     * performed.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference ...$order
     * @return static
     */
    public function setOrder(FHIRResourceReference ...$order): self
    {
        if ([] === $order) {
            unset($this->order);
            return $this;
        }
        $this->order = $order;
        return $this;
    }

    /**
     * Type of acquired image data in the instance
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A list of all the Series.ImageModality values that are actual acquisition
     * modalities, i.e. those in the DICOM Context Group 29 (value set OID
     * 1.2.840.10008.6.1.19).
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRImagingModality[]
     */
    public function getModality(): array
    {
        return $this->modality ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRImagingModality>
     */
    public function getModalityIterator(): iterable
    {
        if (!isset($this->modality)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->modality);
    }

    /**
     * Type of acquired image data in the instance
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A list of all the Series.ImageModality values that are actual acquisition
     * modalities, i.e. those in the DICOM Context Group 29 (value set OID
     * 1.2.840.10008.6.1.19).
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRImagingModalityList|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRImagingModality $modality
     * @return static
     */
    public function addModality(string|FHIRImagingModalityList|FHIRImagingModality $modality): self
    {
        if (!($modality instanceof FHIRImagingModality)) {
            $modality = new FHIRImagingModality(value: $modality);
        }
        if (!isset($this->modality)) {
            $this->modality = [];
        }
        $this->modality[] = $modality;
        return $this;
    }

    /**
     * Type of acquired image data in the instance
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A list of all the Series.ImageModality values that are actual acquisition
     * modalities, i.e. those in the DICOM Context Group 29 (value set OID
     * 1.2.840.10008.6.1.19).
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRImagingModalityList|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRImagingModality ...$modality
     * @return static
     */
    public function setModality(string|FHIRImagingModalityList|FHIRImagingModality ...$modality): self
    {
        if ([] === $modality) {
            unset($this->modality);
            return $this;
        }
        $this->modality = [];
        foreach($modality as $v) {
            if ($v instanceof FHIRImagingModality) {
                $this->modality[] = $v;
            } else {
                $this->modality[] = new FHIRImagingModality(value: $v);
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The requesting/referring physician.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference
     */
    public function getReferrer(): null|FHIRResourceReference
    {
        return $this->referrer ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The requesting/referring physician.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $referrer
     * @return static
     */
    public function setReferrer(null|FHIRResourceReference $referrer): self
    {
        if (null === $referrer) {
            unset($this->referrer);
            return $this;
        }
        $this->referrer = $referrer;
        return $this;
    }

    /**
     * Availability of the resource
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Availability of study (online, offline or nearline).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInstanceAvailability
     */
    public function getAvailability(): null|FHIRInstanceAvailability
    {
        return $this->availability ?? null;
    }

    /**
     * Availability of the resource
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Availability of study (online, offline or nearline).
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRInstanceAvailabilityList|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInstanceAvailability $availability
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setAvailability(null|string|FHIRInstanceAvailabilityList|FHIRInstanceAvailability $availability,
                                    ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $availability) {
            unset($this->availability);
            return $this;
        }
        if (!($availability instanceof FHIRInstanceAvailability)) {
            $availability = new FHIRInstanceAvailability(value: $availability);
        }
        $this->availability = $availability;
        if ($this->_valueXMLLocations[self::FIELD_AVAILABILITY] !== $valueXMLLocation) {
            $this->_setAvailabilityValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the availability element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getAvailabilityValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_AVAILABILITY];
    }

    /**
     * Set the location the "value" field of the availability element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setAvailabilityValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_AVAILABILITY] = $valueXMLLocation;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * WADO-RS URI where Study is available.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRUri
     */
    public function getUrl(): null|FHIRUri
    {
        return $this->url ?? null;
    }

    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * WADO-RS URI where Study is available.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRUri $url
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setUrl(null|string|FHIRUriPrimitive|FHIRUri $url,
                           ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $url) {
            unset($this->url);
            return $this;
        }
        if (!($url instanceof FHIRUri)) {
            $url = new FHIRUri(value: $url);
        }
        $this->url = $url;
        if ($this->_valueXMLLocations[self::FIELD_URL] !== $valueXMLLocation) {
            $this->_setUrlValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the url element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getUrlValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_URL];
    }

    /**
     * Set the location the "value" field of the url element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setUrlValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_URL] = $valueXMLLocation;
        return $this;
    }

    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Number of Series in Study.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger
     */
    public function getNumberOfSeries(): null|FHIRInteger
    {
        return $this->numberOfSeries ?? null;
    }

    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Number of Series in Study.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger $numberOfSeries
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setNumberOfSeries(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $numberOfSeries,
                                      ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $numberOfSeries) {
            unset($this->numberOfSeries);
            return $this;
        }
        if (!($numberOfSeries instanceof FHIRInteger)) {
            $numberOfSeries = new FHIRInteger(value: $numberOfSeries);
        }
        $this->numberOfSeries = $numberOfSeries;
        if ($this->_valueXMLLocations[self::FIELD_NUMBER_OF_SERIES] !== $valueXMLLocation) {
            $this->_setNumberOfSeriesValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the numberOfSeries element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getNumberOfSeriesValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_NUMBER_OF_SERIES];
    }

    /**
     * Set the location the "value" field of the numberOfSeries element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setNumberOfSeriesValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_NUMBER_OF_SERIES] = $valueXMLLocation;
        return $this;
    }

    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Number of SOP Instances in Study.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger
     */
    public function getNumberOfInstances(): null|FHIRInteger
    {
        return $this->numberOfInstances ?? null;
    }

    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Number of SOP Instances in Study.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger $numberOfInstances
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setNumberOfInstances(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $numberOfInstances,
                                         ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $numberOfInstances) {
            unset($this->numberOfInstances);
            return $this;
        }
        if (!($numberOfInstances instanceof FHIRInteger)) {
            $numberOfInstances = new FHIRInteger(value: $numberOfInstances);
        }
        $this->numberOfInstances = $numberOfInstances;
        if ($this->_valueXMLLocations[self::FIELD_NUMBER_OF_INSTANCES] !== $valueXMLLocation) {
            $this->_setNumberOfInstancesValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the numberOfInstances element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getNumberOfInstancesValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_NUMBER_OF_INSTANCES];
    }

    /**
     * Set the location the "value" field of the numberOfInstances element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setNumberOfInstancesValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_NUMBER_OF_INSTANCES] = $valueXMLLocation;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Diagnoses etc provided with request.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString
     */
    public function getClinicalInformation(): null|FHIRString
    {
        return $this->clinicalInformation ?? null;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Diagnoses etc provided with request.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString $clinicalInformation
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setClinicalInformation(null|string|FHIRStringPrimitive|FHIRString $clinicalInformation,
                                           ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $clinicalInformation) {
            unset($this->clinicalInformation);
            return $this;
        }
        if (!($clinicalInformation instanceof FHIRString)) {
            $clinicalInformation = new FHIRString(value: $clinicalInformation);
        }
        $this->clinicalInformation = $clinicalInformation;
        if ($this->_valueXMLLocations[self::FIELD_CLINICAL_INFORMATION] !== $valueXMLLocation) {
            $this->_setClinicalInformationValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the clinicalInformation element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getClinicalInformationValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_CLINICAL_INFORMATION];
    }

    /**
     * Set the location the "value" field of the clinicalInformation element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setClinicalInformationValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_CLINICAL_INFORMATION] = $valueXMLLocation;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Type of procedure performed.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCoding[]
     */
    public function getProcedure(): array
    {
        return $this->procedure ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCoding>
     */
    public function getProcedureIterator(): iterable
    {
        if (!isset($this->procedure)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->procedure);
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Type of procedure performed.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCoding $procedure
     * @return static
     */
    public function addProcedure(FHIRCoding $procedure): self
    {
        if (!isset($this->procedure)) {
            $this->procedure = [];
        }
        $this->procedure[] = $procedure;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Type of procedure performed.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCoding ...$procedure
     * @return static
     */
    public function setProcedure(FHIRCoding ...$procedure): self
    {
        if ([] === $procedure) {
            unset($this->procedure);
            return $this;
        }
        $this->procedure = $procedure;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Who read study and interpreted the images.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference
     */
    public function getInterpreter(): null|FHIRResourceReference
    {
        return $this->interpreter ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Who read study and interpreted the images.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $interpreter
     * @return static
     */
    public function setInterpreter(null|FHIRResourceReference $interpreter): self
    {
        if (null === $interpreter) {
            unset($this->interpreter);
            return $this;
        }
        $this->interpreter = $interpreter;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Institution-generated description or classification of the Study (component)
     * performed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString
     */
    public function getDescription(): null|FHIRString
    {
        return $this->description ?? null;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Institution-generated description or classification of the Study (component)
     * performed.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString $description
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDescription(null|string|FHIRStringPrimitive|FHIRString $description,
                                   ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $description) {
            unset($this->description);
            return $this;
        }
        if (!($description instanceof FHIRString)) {
            $description = new FHIRString(value: $description);
        }
        $this->description = $description;
        if ($this->_valueXMLLocations[self::FIELD_DESCRIPTION] !== $valueXMLLocation) {
            $this->_setDescriptionValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the description element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getDescriptionValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_DESCRIPTION];
    }

    /**
     * Set the location the "value" field of the description element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setDescriptionValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_DESCRIPTION] = $valueXMLLocation;
        return $this;
    }

    /**
     * Manifest of a set of images produced in study. The set of images may include
     * every image in the study, or it may be an incomplete sample, such as a list of
     * key images.
     *
     * Each study has one or more series of image instances.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRImagingStudy\FHIRImagingStudySeries[]
     */
    public function getSeries(): array
    {
        return $this->series ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRImagingStudy\FHIRImagingStudySeries>
     */
    public function getSeriesIterator(): iterable
    {
        if (!isset($this->series)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->series);
    }

    /**
     * Manifest of a set of images produced in study. The set of images may include
     * every image in the study, or it may be an incomplete sample, such as a list of
     * key images.
     *
     * Each study has one or more series of image instances.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRImagingStudy\FHIRImagingStudySeries $series
     * @return static
     */
    public function addSeries(FHIRImagingStudySeries $series): self
    {
        if (!isset($this->series)) {
            $this->series = [];
        }
        $this->series[] = $series;
        return $this;
    }

    /**
     * Manifest of a set of images produced in study. The set of images may include
     * every image in the study, or it may be an incomplete sample, such as a list of
     * key images.
     *
     * Each study has one or more series of image instances.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRImagingStudy\FHIRImagingStudySeries ...$series
     * @return static
     */
    public function setSeries(FHIRImagingStudySeries ...$series): self
    {
        if ([] === $series) {
            unset($this->series);
            return $this;
        }
        $this->series = $series;
        return $this;
    }

    /* class_default.php:208 */
    /**
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRImagingStudy $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRImagingStudy
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|UnserializeConfig $config = null,
                                          null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRImagingStudy)) {
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
            if (self::FIELD_EXTENSION === $cen) {
                $type->addExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ID === $cen) {
                $va = $ce->attributes()[FHIRIdPrimitive::FIELD_VALUE] ?? null;
                if (null !== $va) {
                    $type->setId((string)$va, ValueXMLLocationEnum::ELEMENT_ATTRIBUTE);
                } else {
                    $type->setId((string)$ce, ValueXMLLocationEnum::ELEMENT_VALUE);
                }
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_LANGUAGE === $cen) {
                $type->setLanguage(FHIRCode::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TEXT === $cen) {
                $type->setText(FHIRNarrative::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CONTAINED === $cen) {
                foreach ($ce->children() as $cen) {
                    /** @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionContainedTypeInterface $cn */
                    $cn = VersionTypeMap::getContainedTypeClassNameFromXML($cen);
                    $type->addContained($cn::xmlUnserialize($cen, $config));
                }
            } else if (self::FIELD_DATE_TIME === $cen) {
                $type->setDateTime(FHIRDateTime::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SUBJECT === $cen) {
                $type->setSubject(FHIRResourceReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_UID === $cen) {
                $type->setUid(FHIROid::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ACCESSION_NO === $cen) {
                $type->setAccessionNo(FHIRIdentifier::xmlUnserialize($ce, $config));
            } else if (self::FIELD_IDENTIFIER === $cen) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ORDER === $cen) {
                $type->addOrder(FHIRResourceReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MODALITY === $cen) {
                $type->addModality(FHIRImagingModality::xmlUnserialize($ce, $config));
            } else if (self::FIELD_REFERRER === $cen) {
                $type->setReferrer(FHIRResourceReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_AVAILABILITY === $cen) {
                $type->setAvailability(FHIRInstanceAvailability::xmlUnserialize($ce, $config));
            } else if (self::FIELD_URL === $cen) {
                $type->setUrl(FHIRUri::xmlUnserialize($ce, $config));
            } else if (self::FIELD_NUMBER_OF_SERIES === $cen) {
                $type->setNumberOfSeries(FHIRInteger::xmlUnserialize($ce, $config));
            } else if (self::FIELD_NUMBER_OF_INSTANCES === $cen) {
                $type->setNumberOfInstances(FHIRInteger::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CLINICAL_INFORMATION === $cen) {
                $type->setClinicalInformation(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PROCEDURE === $cen) {
                $type->addProcedure(FHIRCoding::xmlUnserialize($ce, $config));
            } else if (self::FIELD_INTERPRETER === $cen) {
                $type->setInterpreter(FHIRResourceReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DESCRIPTION === $cen) {
                $type->setDescription(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SERIES === $cen) {
                $type->addSeries(FHIRImagingStudySeries::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_LANGUAGE])) {
            if (isset($type->language)) {
                $type->language->setValue((string)$attributes[self::FIELD_LANGUAGE]);
                $type->_setLanguageValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setLanguage((string)$attributes[self::FIELD_LANGUAGE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DATE_TIME])) {
            if (isset($type->dateTime)) {
                $type->dateTime->setValue((string)$attributes[self::FIELD_DATE_TIME]);
                $type->_setDateTimeValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setDateTime((string)$attributes[self::FIELD_DATE_TIME], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_UID])) {
            if (isset($type->uid)) {
                $type->uid->setValue((string)$attributes[self::FIELD_UID]);
                $type->_setUidValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setUid((string)$attributes[self::FIELD_UID], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_AVAILABILITY])) {
            if (isset($type->availability)) {
                $type->availability->setValue((string)$attributes[self::FIELD_AVAILABILITY]);
                $type->_setAvailabilityValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setAvailability((string)$attributes[self::FIELD_AVAILABILITY], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_URL])) {
            if (isset($type->url)) {
                $type->url->setValue((string)$attributes[self::FIELD_URL]);
                $type->_setUrlValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setUrl((string)$attributes[self::FIELD_URL], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_NUMBER_OF_SERIES])) {
            if (isset($type->numberOfSeries)) {
                $type->numberOfSeries->setValue((string)$attributes[self::FIELD_NUMBER_OF_SERIES]);
                $type->_setNumberOfSeriesValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setNumberOfSeries((string)$attributes[self::FIELD_NUMBER_OF_SERIES], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_NUMBER_OF_INSTANCES])) {
            if (isset($type->numberOfInstances)) {
                $type->numberOfInstances->setValue((string)$attributes[self::FIELD_NUMBER_OF_INSTANCES]);
                $type->_setNumberOfInstancesValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setNumberOfInstances((string)$attributes[self::FIELD_NUMBER_OF_INSTANCES], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_CLINICAL_INFORMATION])) {
            if (isset($type->clinicalInformation)) {
                $type->clinicalInformation->setValue((string)$attributes[self::FIELD_CLINICAL_INFORMATION]);
                $type->_setClinicalInformationValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setClinicalInformation((string)$attributes[self::FIELD_CLINICAL_INFORMATION], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DESCRIPTION])) {
            if (isset($type->description)) {
                $type->description->setValue((string)$attributes[self::FIELD_DESCRIPTION]);
                $type->_setDescriptionValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setDescription((string)$attributes[self::FIELD_DESCRIPTION], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
            $xw->openRootNode('ImagingStudy', $this->_getSourceXMLNS());
        }
        if (isset($this->dateTime) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DATE_TIME]) {
            $xw->writeAttribute(self::FIELD_DATE_TIME, $this->dateTime->_getFormattedValue());
        }
        if (isset($this->uid) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_UID]) {
            $xw->writeAttribute(self::FIELD_UID, $this->uid->_getFormattedValue());
        }
        if (isset($this->availability) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_AVAILABILITY]) {
            $xw->writeAttribute(self::FIELD_AVAILABILITY, $this->availability->_getFormattedValue());
        }
        if (isset($this->url) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_URL]) {
            $xw->writeAttribute(self::FIELD_URL, $this->url->_getFormattedValue());
        }
        if (isset($this->numberOfSeries) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_NUMBER_OF_SERIES]) {
            $xw->writeAttribute(self::FIELD_NUMBER_OF_SERIES, $this->numberOfSeries->_getFormattedValue());
        }
        if (isset($this->numberOfInstances) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_NUMBER_OF_INSTANCES]) {
            $xw->writeAttribute(self::FIELD_NUMBER_OF_INSTANCES, $this->numberOfInstances->_getFormattedValue());
        }
        if (isset($this->clinicalInformation) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_CLINICAL_INFORMATION]) {
            $xw->writeAttribute(self::FIELD_CLINICAL_INFORMATION, $this->clinicalInformation->_getFormattedValue());
        }
        if (isset($this->description) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DESCRIPTION]) {
            $xw->writeAttribute(self::FIELD_DESCRIPTION, $this->description->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
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
        if (isset($this->uid)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_UID]
                || $this->uid->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_UID);
            $this->uid->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_UID]);
            $xw->endElement();
        }
        if (isset($this->accessionNo)) {
            $xw->startElement(self::FIELD_ACCESSION_NO);
            $this->accessionNo->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->identifier)) {
            foreach ($this->identifier as $v) {
                $xw->startElement(self::FIELD_IDENTIFIER);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->order)) {
            foreach ($this->order as $v) {
                $xw->startElement(self::FIELD_ORDER);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->modality) && [] !== $this->modality) {
            foreach($this->modality as $v) {
                $xw->startElement(self::FIELD_MODALITY);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->referrer)) {
            $xw->startElement(self::FIELD_REFERRER);
            $this->referrer->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->availability)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_AVAILABILITY]
                || $this->availability->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_AVAILABILITY);
            $this->availability->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_AVAILABILITY]);
            $xw->endElement();
        }
        if (isset($this->url)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_URL]
                || $this->url->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_URL);
            $this->url->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_URL]);
            $xw->endElement();
        }
        if (isset($this->numberOfSeries)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_NUMBER_OF_SERIES]
                || $this->numberOfSeries->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_NUMBER_OF_SERIES);
            $this->numberOfSeries->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_NUMBER_OF_SERIES]);
            $xw->endElement();
        }
        if (isset($this->numberOfInstances)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_NUMBER_OF_INSTANCES]
                || $this->numberOfInstances->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_NUMBER_OF_INSTANCES);
            $this->numberOfInstances->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_NUMBER_OF_INSTANCES]);
            $xw->endElement();
        }
        if (isset($this->clinicalInformation)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_CLINICAL_INFORMATION]
                || $this->clinicalInformation->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_CLINICAL_INFORMATION);
            $this->clinicalInformation->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_CLINICAL_INFORMATION]);
            $xw->endElement();
        }
        if (isset($this->procedure)) {
            foreach ($this->procedure as $v) {
                $xw->startElement(self::FIELD_PROCEDURE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->interpreter)) {
            $xw->startElement(self::FIELD_INTERPRETER);
            $this->interpreter->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->description)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DESCRIPTION]
                || $this->description->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DESCRIPTION);
            $this->description->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DESCRIPTION]);
            $xw->endElement();
        }
        if (isset($this->series)) {
            foreach ($this->series as $v) {
                $xw->startElement(self::FIELD_SERIES);
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRImagingStudy $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRImagingStudy
     * @throws \Exception
     */
    public static function jsonUnserialize(string|\stdClass|array $json,
                                           null|UnserializeConfig $config = null,
                                           null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRImagingStudy)) {
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
        if (isset($json[self::FIELD_DATE_TIME])
            || isset($json[self::FIELD_DATE_TIME_EXT])
            || array_key_exists(self::FIELD_DATE_TIME, $json)
            || array_key_exists(self::FIELD_DATE_TIME_EXT, $json)) {
            $value = $json[self::FIELD_DATE_TIME] ?? null;
            $type->setDateTime(FHIRDateTime::jsonUnserialize(
                (is_array($value) ? $value : [FHIRDateTime::FIELD_VALUE => $value]) + ($json[self::FIELD_DATE_TIME_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_SUBJECT]) || array_key_exists(self::FIELD_SUBJECT, $json)) {
            $type->setSubject(FHIRResourceReference::jsonUnserialize($json[self::FIELD_SUBJECT], $config));
        }
        if (isset($json[self::FIELD_UID])
            || isset($json[self::FIELD_UID_EXT])
            || array_key_exists(self::FIELD_UID, $json)
            || array_key_exists(self::FIELD_UID_EXT, $json)) {
            $value = $json[self::FIELD_UID] ?? null;
            $type->setUid(FHIROid::jsonUnserialize(
                (is_array($value) ? $value : [FHIROid::FIELD_VALUE => $value]) + ($json[self::FIELD_UID_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_ACCESSION_NO]) || array_key_exists(self::FIELD_ACCESSION_NO, $json)) {
            $type->setAccessionNo(FHIRIdentifier::jsonUnserialize($json[self::FIELD_ACCESSION_NO], $config));
        }
        if (isset($json[self::FIELD_IDENTIFIER]) || array_key_exists(self::FIELD_IDENTIFIER, $json)) {
            $vs = $json[self::FIELD_IDENTIFIER];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addIdentifier(FHIRIdentifier::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_ORDER]) || array_key_exists(self::FIELD_ORDER, $json)) {
            $vs = $json[self::FIELD_ORDER];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addOrder(FHIRResourceReference::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_MODALITY])
            || isset($json[self::FIELD_MODALITY_EXT])
            || array_key_exists(self::FIELD_MODALITY, $json)
            || array_key_exists(self::FIELD_MODALITY_EXT, $json)) {
            $value = (array)($json[self::FIELD_MODALITY] ?? []);
            $ext = (array)($json[self::FIELD_MODALITY_EXT] ?? []);
            $cnt = count($value);
            $extCnt = count($ext);
            if ($extCnt > $cnt) {
                $cnt = $extCnt;
            }
            for ($i = 0; $i < $cnt; $i++) {
                $type->addModality(FHIRImagingModality::jsonUnserialize(
                    [FHIRImagingModality::FIELD_VALUE => $value[$i] ?? null] + ($ext[$i] ?? []),
                    $config,
                ));
            }
        }
        if (isset($json[self::FIELD_REFERRER]) || array_key_exists(self::FIELD_REFERRER, $json)) {
            $type->setReferrer(FHIRResourceReference::jsonUnserialize($json[self::FIELD_REFERRER], $config));
        }
        if (isset($json[self::FIELD_AVAILABILITY])
            || isset($json[self::FIELD_AVAILABILITY_EXT])
            || array_key_exists(self::FIELD_AVAILABILITY, $json)
            || array_key_exists(self::FIELD_AVAILABILITY_EXT, $json)) {
            $value = $json[self::FIELD_AVAILABILITY] ?? null;
            $type->setAvailability(FHIRInstanceAvailability::jsonUnserialize(
                (is_array($value) ? $value : [FHIRInstanceAvailability::FIELD_VALUE => $value]) + ($json[self::FIELD_AVAILABILITY_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_URL])
            || isset($json[self::FIELD_URL_EXT])
            || array_key_exists(self::FIELD_URL, $json)
            || array_key_exists(self::FIELD_URL_EXT, $json)) {
            $value = $json[self::FIELD_URL] ?? null;
            $type->setUrl(FHIRUri::jsonUnserialize(
                (is_array($value) ? $value : [FHIRUri::FIELD_VALUE => $value]) + ($json[self::FIELD_URL_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_NUMBER_OF_SERIES])
            || isset($json[self::FIELD_NUMBER_OF_SERIES_EXT])
            || array_key_exists(self::FIELD_NUMBER_OF_SERIES, $json)
            || array_key_exists(self::FIELD_NUMBER_OF_SERIES_EXT, $json)) {
            $value = $json[self::FIELD_NUMBER_OF_SERIES] ?? null;
            $type->setNumberOfSeries(FHIRInteger::jsonUnserialize(
                (is_array($value) ? $value : [FHIRInteger::FIELD_VALUE => $value]) + ($json[self::FIELD_NUMBER_OF_SERIES_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_NUMBER_OF_INSTANCES])
            || isset($json[self::FIELD_NUMBER_OF_INSTANCES_EXT])
            || array_key_exists(self::FIELD_NUMBER_OF_INSTANCES, $json)
            || array_key_exists(self::FIELD_NUMBER_OF_INSTANCES_EXT, $json)) {
            $value = $json[self::FIELD_NUMBER_OF_INSTANCES] ?? null;
            $type->setNumberOfInstances(FHIRInteger::jsonUnserialize(
                (is_array($value) ? $value : [FHIRInteger::FIELD_VALUE => $value]) + ($json[self::FIELD_NUMBER_OF_INSTANCES_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_CLINICAL_INFORMATION])
            || isset($json[self::FIELD_CLINICAL_INFORMATION_EXT])
            || array_key_exists(self::FIELD_CLINICAL_INFORMATION, $json)
            || array_key_exists(self::FIELD_CLINICAL_INFORMATION_EXT, $json)) {
            $value = $json[self::FIELD_CLINICAL_INFORMATION] ?? null;
            $type->setClinicalInformation(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_CLINICAL_INFORMATION_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_PROCEDURE]) || array_key_exists(self::FIELD_PROCEDURE, $json)) {
            $vs = $json[self::FIELD_PROCEDURE];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addProcedure(FHIRCoding::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_INTERPRETER]) || array_key_exists(self::FIELD_INTERPRETER, $json)) {
            $type->setInterpreter(FHIRResourceReference::jsonUnserialize($json[self::FIELD_INTERPRETER], $config));
        }
        if (isset($json[self::FIELD_DESCRIPTION])
            || isset($json[self::FIELD_DESCRIPTION_EXT])
            || array_key_exists(self::FIELD_DESCRIPTION, $json)
            || array_key_exists(self::FIELD_DESCRIPTION_EXT, $json)) {
            $value = $json[self::FIELD_DESCRIPTION] ?? null;
            $type->setDescription(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_DESCRIPTION_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_SERIES]) || array_key_exists(self::FIELD_SERIES, $json)) {
            $vs = $json[self::FIELD_SERIES];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addSeries(FHIRImagingStudySeries::jsonUnserialize($v, $config));
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
        if (isset($this->uid)) {
            if (null !== ($val = $this->uid->getValue())) {
                $out->uid = $val;
            }
            if ($this->uid->_nonValueFieldDefined()) {
                $ext = $this->uid->jsonSerialize();
                unset($ext->value);
                $out->_uid = $ext;
            }
        }
        if (isset($this->accessionNo)) {
            $out->accessionNo = $this->accessionNo;
        }
        if (isset($this->identifier) && [] !== $this->identifier) {
            $out->identifier = $this->identifier;
        }
        if (isset($this->order) && [] !== $this->order) {
            $out->order = $this->order;
        }
        if (isset($this->modality) && [] !== $this->modality) {
            $vals = [];
            $exts = [];
            $hasVals = false;
            $hasExts = false;
            foreach ($this->modality as $v) {
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
                $out->modality = $vals;
            }
            if ($hasExts) {
                $out->_modality = $exts;
            }
        }
        if (isset($this->referrer)) {
            $out->referrer = $this->referrer;
        }
        if (isset($this->availability)) {
            if (null !== ($val = $this->availability->getValue())) {
                $out->availability = $val;
            }
            if ($this->availability->_nonValueFieldDefined()) {
                $ext = $this->availability->jsonSerialize();
                unset($ext->value);
                $out->_availability = $ext;
            }
        }
        if (isset($this->url)) {
            if (null !== ($val = $this->url->getValue())) {
                $out->url = $val;
            }
            if ($this->url->_nonValueFieldDefined()) {
                $ext = $this->url->jsonSerialize();
                unset($ext->value);
                $out->_url = $ext;
            }
        }
        if (isset($this->numberOfSeries)) {
            if (null !== ($val = $this->numberOfSeries->getValue())) {
                $out->numberOfSeries = $val;
            }
            if ($this->numberOfSeries->_nonValueFieldDefined()) {
                $ext = $this->numberOfSeries->jsonSerialize();
                unset($ext->value);
                $out->_numberOfSeries = $ext;
            }
        }
        if (isset($this->numberOfInstances)) {
            if (null !== ($val = $this->numberOfInstances->getValue())) {
                $out->numberOfInstances = $val;
            }
            if ($this->numberOfInstances->_nonValueFieldDefined()) {
                $ext = $this->numberOfInstances->jsonSerialize();
                unset($ext->value);
                $out->_numberOfInstances = $ext;
            }
        }
        if (isset($this->clinicalInformation)) {
            if (null !== ($val = $this->clinicalInformation->getValue())) {
                $out->clinicalInformation = $val;
            }
            if ($this->clinicalInformation->_nonValueFieldDefined()) {
                $ext = $this->clinicalInformation->jsonSerialize();
                unset($ext->value);
                $out->_clinicalInformation = $ext;
            }
        }
        if (isset($this->procedure) && [] !== $this->procedure) {
            $out->procedure = $this->procedure;
        }
        if (isset($this->interpreter)) {
            $out->interpreter = $this->interpreter;
        }
        if (isset($this->description)) {
            if (null !== ($val = $this->description->getValue())) {
                $out->description = $val;
            }
            if ($this->description->_nonValueFieldDefined()) {
                $ext = $this->description->jsonSerialize();
                unset($ext->value);
                $out->_description = $ext;
            }
        }
        if (isset($this->series) && [] !== $this->series) {
            $out->series = $this->series;
        }
        $out->resourceType = $this->_getResourceType();
        return $out;
    }
}