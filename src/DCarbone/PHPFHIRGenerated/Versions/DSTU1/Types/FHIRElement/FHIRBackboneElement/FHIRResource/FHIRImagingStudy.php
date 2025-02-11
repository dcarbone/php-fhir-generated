<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 11th, 2025 15:51+0000
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
use DCarbone\PHPFHIRGenerated\Types\ResourceTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Rules\MinOccursRule;
use DCarbone\PHPFHIRGenerated\Validation\Rules\ValuePatternMatchRule;
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
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_IMAGING_STUDY;

    /* class_default.php:50 */
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

    /* class_default.php:69 */
    // The default validation rules for this type as defined in the FHIR schema used to generate this code.
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_ID => [
            ValuePatternMatchRule::NAME => '/^[a-z0-9\\-\\.]{1,36}$/',
        ],
        self::FIELD_SUBJECT => [
            MinOccursRule::NAME => 1,
        ],
        self::FIELD_UID => [
            MinOccursRule::NAME => 1,
        ],
        self::FIELD_NUMBER_OF_SERIES => [
            MinOccursRule::NAME => 1,
        ],
        self::FIELD_NUMBER_OF_INSTANCES => [
            MinOccursRule::NAME => 1,
        ],
    ];

    /* class_default.php:91 */
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

    /* class_default.php:107 */
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

    /* constructor.php:61 */
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
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger $numberOfSeries
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger $numberOfInstances
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
                                null|string|float|FHIRIntegerPrimitive|FHIRInteger $numberOfSeries = null,
                                null|string|float|FHIRIntegerPrimitive|FHIRInteger $numberOfInstances = null,
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

    /* class_default.php:139 */
    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:151 */
    /**
     * @return string
     */
    public function _getResourceType(): string
    {
        return static::FHIR_TYPE_NAME;
    }

    /* class_default.php:165 */
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
     * @return static
     */
    public function setUid(null|string|FHIROidPrimitive|FHIROid $uid): self
    {
        if (null === $uid) {
            unset($this->uid);
            return $this;
        }
        if (!($uid instanceof FHIROid)) {
            $uid = new FHIROid(value: $uid);
        }
        $this->uid = $uid;
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
     * @return static
     */
    public function setAvailability(null|string|FHIRInstanceAvailabilityList|FHIRInstanceAvailability $availability): self
    {
        if (null === $availability) {
            unset($this->availability);
            return $this;
        }
        if (!($availability instanceof FHIRInstanceAvailability)) {
            $availability = new FHIRInstanceAvailability(value: $availability);
        }
        $this->availability = $availability;
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
     * @return static
     */
    public function setUrl(null|string|FHIRUriPrimitive|FHIRUri $url): self
    {
        if (null === $url) {
            unset($this->url);
            return $this;
        }
        if (!($url instanceof FHIRUri)) {
            $url = new FHIRUri(value: $url);
        }
        $this->url = $url;
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
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger $numberOfSeries
     * @return static
     */
    public function setNumberOfSeries(null|string|float|FHIRIntegerPrimitive|FHIRInteger $numberOfSeries): self
    {
        if (null === $numberOfSeries) {
            unset($this->numberOfSeries);
            return $this;
        }
        if (!($numberOfSeries instanceof FHIRInteger)) {
            $numberOfSeries = new FHIRInteger(value: $numberOfSeries);
        }
        $this->numberOfSeries = $numberOfSeries;
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
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger $numberOfInstances
     * @return static
     */
    public function setNumberOfInstances(null|string|float|FHIRIntegerPrimitive|FHIRInteger $numberOfInstances): self
    {
        if (null === $numberOfInstances) {
            unset($this->numberOfInstances);
            return $this;
        }
        if (!($numberOfInstances instanceof FHIRInteger)) {
            $numberOfInstances = new FHIRInteger(value: $numberOfInstances);
        }
        $this->numberOfInstances = $numberOfInstances;
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
     * @return static
     */
    public function setClinicalInformation(null|string|FHIRStringPrimitive|FHIRString $clinicalInformation): self
    {
        if (null === $clinicalInformation) {
            unset($this->clinicalInformation);
            return $this;
        }
        if (!($clinicalInformation instanceof FHIRString)) {
            $clinicalInformation = new FHIRString(value: $clinicalInformation);
        }
        $this->clinicalInformation = $clinicalInformation;
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
     * @return static
     */
    public function setDescription(null|string|FHIRStringPrimitive|FHIRString $description): self
    {
        if (null === $description) {
            unset($this->description);
            return $this;
        }
        if (!($description instanceof FHIRString)) {
            $description = new FHIRString(value: $description);
        }
        $this->description = $description;
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

    /* class_default.php:192 */
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
                    $type->setId((string)$va);
                    $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::ELEMENT_ATTRIBUTE);
                } else {
                    $type->setId((string)$ce);
                    $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::ELEMENT_VALUE);
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
            $type->setId((string)$attributes[self::FIELD_ID]);
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_LANGUAGE])) {
            if (isset($type->language)) {
                $type->language->setValue((string)$attributes[self::FIELD_LANGUAGE]);
            } else {
                $type->setLanguage((string)$attributes[self::FIELD_LANGUAGE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_LANGUAGE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DATE_TIME])) {
            if (isset($type->dateTime)) {
                $type->dateTime->setValue((string)$attributes[self::FIELD_DATE_TIME]);
            } else {
                $type->setDateTime((string)$attributes[self::FIELD_DATE_TIME]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_DATE_TIME, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_UID])) {
            if (isset($type->uid)) {
                $type->uid->setValue((string)$attributes[self::FIELD_UID]);
            } else {
                $type->setUid((string)$attributes[self::FIELD_UID]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_UID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_AVAILABILITY])) {
            if (isset($type->availability)) {
                $type->availability->setValue((string)$attributes[self::FIELD_AVAILABILITY]);
            } else {
                $type->setAvailability((string)$attributes[self::FIELD_AVAILABILITY]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_AVAILABILITY, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_URL])) {
            if (isset($type->url)) {
                $type->url->setValue((string)$attributes[self::FIELD_URL]);
            } else {
                $type->setUrl((string)$attributes[self::FIELD_URL]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_URL, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_NUMBER_OF_SERIES])) {
            if (isset($type->numberOfSeries)) {
                $type->numberOfSeries->setValue((string)$attributes[self::FIELD_NUMBER_OF_SERIES]);
            } else {
                $type->setNumberOfSeries((string)$attributes[self::FIELD_NUMBER_OF_SERIES]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_NUMBER_OF_SERIES, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_NUMBER_OF_INSTANCES])) {
            if (isset($type->numberOfInstances)) {
                $type->numberOfInstances->setValue((string)$attributes[self::FIELD_NUMBER_OF_INSTANCES]);
            } else {
                $type->setNumberOfInstances((string)$attributes[self::FIELD_NUMBER_OF_INSTANCES]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_NUMBER_OF_INSTANCES, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_CLINICAL_INFORMATION])) {
            if (isset($type->clinicalInformation)) {
                $type->clinicalInformation->setValue((string)$attributes[self::FIELD_CLINICAL_INFORMATION]);
            } else {
                $type->setClinicalInformation((string)$attributes[self::FIELD_CLINICAL_INFORMATION]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_CLINICAL_INFORMATION, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DESCRIPTION])) {
            if (isset($type->description)) {
                $type->description->setValue((string)$attributes[self::FIELD_DESCRIPTION]);
            } else {
                $type->setDescription((string)$attributes[self::FIELD_DESCRIPTION]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_DESCRIPTION, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
            $xw->writeAttribute(self::FIELD_DATE_TIME, $this->dateTime->_getValueAsString());
        }
        if (isset($this->uid) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_UID]) {
            $xw->writeAttribute(self::FIELD_UID, $this->uid->_getValueAsString());
        }
        if (isset($this->availability) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_AVAILABILITY]) {
            $xw->writeAttribute(self::FIELD_AVAILABILITY, $this->availability->_getValueAsString());
        }
        if (isset($this->url) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_URL]) {
            $xw->writeAttribute(self::FIELD_URL, $this->url->_getValueAsString());
        }
        if (isset($this->numberOfSeries) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_NUMBER_OF_SERIES]) {
            $xw->writeAttribute(self::FIELD_NUMBER_OF_SERIES, $this->numberOfSeries->_getValueAsString());
        }
        if (isset($this->numberOfInstances) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_NUMBER_OF_INSTANCES]) {
            $xw->writeAttribute(self::FIELD_NUMBER_OF_INSTANCES, $this->numberOfInstances->_getValueAsString());
        }
        if (isset($this->clinicalInformation) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_CLINICAL_INFORMATION]) {
            $xw->writeAttribute(self::FIELD_CLINICAL_INFORMATION, $this->clinicalInformation->_getValueAsString());
        }
        if (isset($this->description) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DESCRIPTION]) {
            $xw->writeAttribute(self::FIELD_DESCRIPTION, $this->description->_getValueAsString());
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
        if ($rootOpened ?? false) {
            $xw->endElement();
        }
        if ($docStarted ?? false) {
            $xw->endDocument();
        }
        return $xw;
    }

    /**
     * @param string|\stdClass $json
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRImagingStudy $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRImagingStudy
     * @throws \Exception
     */
    public static function jsonUnserialize(string|\stdClass $json,
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
            $json = json_decode(json: $json,
                                associative: false,
                                depth: $config->getJSONDecodeMaxDepth(),
                                flags: $config->getJSONDecodeOpts());
        }
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json->dateTime)
            || isset($json->_dateTime)
            || property_exists($json, self::FIELD_DATE_TIME)
            || property_exists($json, self::FIELD_DATE_TIME_EXT)) {
            $v = $json->_dateTime ?? new \stdClass();
            $v->value = $json->dateTime ?? null;
            $type->setDateTime(FHIRDateTime::jsonUnserialize($v, $config));
        }
        if (isset($json->subject) || property_exists($json, self::FIELD_SUBJECT)) {
            if (is_array($json->subject)) {
                $type->setSubject(FHIRResourceReference::jsonUnserialize(reset($json->subject), $config));
            } else {
                $type->setSubject(FHIRResourceReference::jsonUnserialize($json->subject, $config));
            }
        }
        if (isset($json->uid)
            || isset($json->_uid)
            || property_exists($json, self::FIELD_UID)
            || property_exists($json, self::FIELD_UID_EXT)) {
            $v = $json->_uid ?? new \stdClass();
            $v->value = $json->uid ?? null;
            $type->setUid(FHIROid::jsonUnserialize($v, $config));
        }
        if (isset($json->accessionNo) || property_exists($json, self::FIELD_ACCESSION_NO)) {
            if (is_array($json->accessionNo)) {
                $type->setAccessionNo(FHIRIdentifier::jsonUnserialize(reset($json->accessionNo), $config));
            } else {
                $type->setAccessionNo(FHIRIdentifier::jsonUnserialize($json->accessionNo, $config));
            }
        }
        if (isset($json->identifier) || property_exists($json, self::FIELD_IDENTIFIER)) {
            if (is_object($json->identifier)) {
                $vals = [$json->identifier];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_IDENTIFIER, true);
            } else {
                $vals = $json->identifier;
            }
            foreach($vals as $v) {
                $type->addIdentifier(FHIRIdentifier::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->order) || property_exists($json, self::FIELD_ORDER)) {
            if (is_object($json->order)) {
                $vals = [$json->order];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_ORDER, true);
            } else {
                $vals = $json->order;
            }
            foreach($vals as $v) {
                $type->addOrder(FHIRResourceReference::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->modality)
            || isset($json->_modality)
            || property_exists($json, self::FIELD_MODALITY)
            || property_exists($json, self::FIELD_MODALITY_EXT)) {
            $vals = (array)($json->modality ?? []);
            $exts = (array)($json->FIELD_MODALITY_EXT ?? []);
            $valCnt = count($vals);
            $extCnt = count($exts);
            if ($extCnt > $valCnt) {
                $valCnt = $extCnt;
            }
            for ($i = 0; $i < $valCnt; $i++) {
                $v = $exts[$i] ?? new \stdClass();
                $v->value = $vals[$i] ?? null;
                $type->addModality(FHIRImagingModality::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->referrer) || property_exists($json, self::FIELD_REFERRER)) {
            if (is_array($json->referrer)) {
                $type->setReferrer(FHIRResourceReference::jsonUnserialize(reset($json->referrer), $config));
            } else {
                $type->setReferrer(FHIRResourceReference::jsonUnserialize($json->referrer, $config));
            }
        }
        if (isset($json->availability)
            || isset($json->_availability)
            || property_exists($json, self::FIELD_AVAILABILITY)
            || property_exists($json, self::FIELD_AVAILABILITY_EXT)) {
            $v = $json->_availability ?? new \stdClass();
            $v->value = $json->availability ?? null;
            $type->setAvailability(FHIRInstanceAvailability::jsonUnserialize($v, $config));
        }
        if (isset($json->url)
            || isset($json->_url)
            || property_exists($json, self::FIELD_URL)
            || property_exists($json, self::FIELD_URL_EXT)) {
            $v = $json->_url ?? new \stdClass();
            $v->value = $json->url ?? null;
            $type->setUrl(FHIRUri::jsonUnserialize($v, $config));
        }
        if (isset($json->numberOfSeries)
            || isset($json->_numberOfSeries)
            || property_exists($json, self::FIELD_NUMBER_OF_SERIES)
            || property_exists($json, self::FIELD_NUMBER_OF_SERIES_EXT)) {
            $v = $json->_numberOfSeries ?? new \stdClass();
            $v->value = $json->numberOfSeries ?? null;
            $type->setNumberOfSeries(FHIRInteger::jsonUnserialize($v, $config));
        }
        if (isset($json->numberOfInstances)
            || isset($json->_numberOfInstances)
            || property_exists($json, self::FIELD_NUMBER_OF_INSTANCES)
            || property_exists($json, self::FIELD_NUMBER_OF_INSTANCES_EXT)) {
            $v = $json->_numberOfInstances ?? new \stdClass();
            $v->value = $json->numberOfInstances ?? null;
            $type->setNumberOfInstances(FHIRInteger::jsonUnserialize($v, $config));
        }
        if (isset($json->clinicalInformation)
            || isset($json->_clinicalInformation)
            || property_exists($json, self::FIELD_CLINICAL_INFORMATION)
            || property_exists($json, self::FIELD_CLINICAL_INFORMATION_EXT)) {
            $v = $json->_clinicalInformation ?? new \stdClass();
            $v->value = $json->clinicalInformation ?? null;
            $type->setClinicalInformation(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($json->procedure) || property_exists($json, self::FIELD_PROCEDURE)) {
            if (is_object($json->procedure)) {
                $vals = [$json->procedure];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_PROCEDURE, true);
            } else {
                $vals = $json->procedure;
            }
            foreach($vals as $v) {
                $type->addProcedure(FHIRCoding::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->interpreter) || property_exists($json, self::FIELD_INTERPRETER)) {
            if (is_array($json->interpreter)) {
                $type->setInterpreter(FHIRResourceReference::jsonUnserialize(reset($json->interpreter), $config));
            } else {
                $type->setInterpreter(FHIRResourceReference::jsonUnserialize($json->interpreter, $config));
            }
        }
        if (isset($json->description)
            || isset($json->_description)
            || property_exists($json, self::FIELD_DESCRIPTION)
            || property_exists($json, self::FIELD_DESCRIPTION_EXT)) {
            $v = $json->_description ?? new \stdClass();
            $v->value = $json->description ?? null;
            $type->setDescription(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($json->series) || property_exists($json, self::FIELD_SERIES)) {
            if (is_object($json->series)) {
                $vals = [$json->series];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_SERIES, true);
            } else {
                $vals = $json->series;
            }
            foreach($vals as $v) {
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
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_IDENTIFIER) && 1 === count($this->identifier)) {
                $out->identifier = $this->identifier[0];
            } else {
                $out->identifier = $this->identifier;
            }
        }
        if (isset($this->order) && [] !== $this->order) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_ORDER) && 1 === count($this->order)) {
                $out->order = $this->order[0];
            } else {
                $out->order = $this->order;
            }
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
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_PROCEDURE) && 1 === count($this->procedure)) {
                $out->procedure = $this->procedure[0];
            } else {
                $out->procedure = $this->procedure;
            }
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
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_SERIES) && 1 === count($this->series)) {
                $out->series = $this->series[0];
            } else {
                $out->series = $this->series;
            }
        }
        $out->resourceType = $this->_getResourceType();
        return $out;
    }
}