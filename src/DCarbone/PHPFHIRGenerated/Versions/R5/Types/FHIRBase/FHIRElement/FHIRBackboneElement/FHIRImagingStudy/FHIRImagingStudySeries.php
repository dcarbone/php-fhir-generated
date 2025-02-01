<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRImagingStudy;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 1st, 2025 22:01+0000
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
use DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUnsignedInt;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDateTimePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUnsignedIntPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Version;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;

/**
 * Representation of the content produced in a DICOM imaging study. A study
 * comprises a set of series, each of which includes a set of Service-Object Pair
 * Instances (SOP Instances - images or other data) acquired or produced in a
 * common context. A series is of only one modality (e.g. X-ray, CT, MR,
 * ultrasound), but a study may have multiple series of different modalities.
 */
class FHIRImagingStudySeries extends FHIRBackboneElement
{    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_IMAGING_STUDY_DOT_SERIES;

    /* class_default.php:47 */
    public const FIELD_UID = 'uid';
    public const FIELD_UID_EXT = '_uid';
    public const FIELD_NUMBER = 'number';
    public const FIELD_NUMBER_EXT = '_number';
    public const FIELD_MODALITY = 'modality';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DESCRIPTION_EXT = '_description';
    public const FIELD_NUMBER_OF_INSTANCES = 'numberOfInstances';
    public const FIELD_NUMBER_OF_INSTANCES_EXT = '_numberOfInstances';
    public const FIELD_ENDPOINT = 'endpoint';
    public const FIELD_BODY_SITE = 'bodySite';
    public const FIELD_LATERALITY = 'laterality';
    public const FIELD_SPECIMEN = 'specimen';
    public const FIELD_STARTED = 'started';
    public const FIELD_STARTED_EXT = '_started';
    public const FIELD_PERFORMER = 'performer';
    public const FIELD_INSTANCE = 'instance';

    /* class_default.php:66 */
    private static array $_validationRules = [
        self::FIELD_UID => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_MODALITY => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /* class_default.php:91 */
    private array $_valueXMLLocations = [
        self::FIELD_UID => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_NUMBER => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DESCRIPTION => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_NUMBER_OF_INSTANCES => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_STARTED => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:107 */
    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The DICOM Series Instance UID for the series.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId 
     */
    protected FHIRId $uid;
    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The numeric identifier of this series in the study.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUnsignedInt 
     */
    protected FHIRUnsignedInt $number;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The distinct modality for this series. This may include both acquisition and
     * non-acquisition modalities.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $modality;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A description of the series.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    protected FHIRString $description;
    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Number of SOP Instances in the Study. The value given may be larger than the
     * number of instance elements this resource contains due to resource availability,
     * security, or other factors. This element should be present if any instance
     * elements are present.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUnsignedInt 
     */
    protected FHIRUnsignedInt $numberOfInstances;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The network service providing access (e.g., query, view, or retrieval) for this
     * series. See implementation notes for information about using DICOM endpoints. A
     * series-level endpoint, if present, has precedence over a study-level endpoint
     * with the same Endpoint.connectionType.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] 
     */
    protected array $endpoint;
    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The anatomic structures examined. See DICOM Part 16 Annex L
     * (http://dicom.nema.org/medical/dicom/current/output/chtml/part16/chapter_L.html)
     * for DICOM to SNOMED-CT mappings. The bodySite may indicate the laterality of
     * body part imaged; if so, it shall be consistent with any content of
     * ImagingStudy.series.laterality.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference 
     */
    protected FHIRCodeableReference $bodySite;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The laterality of the (possibly paired) anatomic structures examined. E.g., the
     * left knee, both lungs, or unpaired abdomen. If present, shall be consistent with
     * any laterality information indicated in ImagingStudy.series.bodySite.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $laterality;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The specimen imaged, e.g., for whole slide imaging of a biopsy.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] 
     */
    protected array $specimen;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date and time the series was started.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime 
     */
    protected FHIRDateTime $started;
    /**
     * Representation of the content produced in a DICOM imaging study. A study
     * comprises a set of series, each of which includes a set of Service-Object Pair
     * Instances (SOP Instances - images or other data) acquired or produced in a
     * common context. A series is of only one modality (e.g. X-ray, CT, MR,
     * ultrasound), but a study may have multiple series of different modalities.
     *
     * Indicates who or what performed the series and how they were involved.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRImagingStudy\FHIRImagingStudyPerformer[] 
     */
    protected array $performer;
    /**
     * Representation of the content produced in a DICOM imaging study. A study
     * comprises a set of series, each of which includes a set of Service-Object Pair
     * Instances (SOP Instances - images or other data) acquired or produced in a
     * common context. A series is of only one modality (e.g. X-ray, CT, MR,
     * ultrasound), but a study may have multiple series of different modalities.
     *
     * A single SOP instance within the series, e.g. an image, or presentation state.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRImagingStudy\FHIRImagingStudyInstance[] 
     */
    protected array $instance;

    /* constructor.php:63 */
    /**
     * FHIRImagingStudySeries Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $modifierExtension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId $uid
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUnsignedIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUnsignedInt $number
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $modality
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $description
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUnsignedIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUnsignedInt $numberOfInstances
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] $endpoint
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference $bodySite
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $laterality
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] $specimen
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime $started
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRImagingStudy\FHIRImagingStudyPerformer[] $performer
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRImagingStudy\FHIRImagingStudyInstance[] $instance
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|FHIRIdPrimitive|FHIRId $uid = null,
                                null|string|int|float|FHIRUnsignedIntPrimitive|FHIRUnsignedInt $number = null,
                                null|FHIRCodeableConcept $modality = null,
                                null|string|FHIRStringPrimitive|FHIRString $description = null,
                                null|string|int|float|FHIRUnsignedIntPrimitive|FHIRUnsignedInt $numberOfInstances = null,
                                null|iterable $endpoint = null,
                                null|FHIRCodeableReference $bodySite = null,
                                null|FHIRCodeableConcept $laterality = null,
                                null|iterable $specimen = null,
                                null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $started = null,
                                null|iterable $performer = null,
                                null|iterable $instance = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $uid) {
            $this->setUid($uid);
        }
        if (null !== $number) {
            $this->setNumber($number);
        }
        if (null !== $modality) {
            $this->setModality($modality);
        }
        if (null !== $description) {
            $this->setDescription($description);
        }
        if (null !== $numberOfInstances) {
            $this->setNumberOfInstances($numberOfInstances);
        }
        if (null !== $endpoint) {
            $this->setEndpoint(...$endpoint);
        }
        if (null !== $bodySite) {
            $this->setBodySite($bodySite);
        }
        if (null !== $laterality) {
            $this->setLaterality($laterality);
        }
        if (null !== $specimen) {
            $this->setSpecimen(...$specimen);
        }
        if (null !== $started) {
            $this->setStarted($started);
        }
        if (null !== $performer) {
            $this->setPerformer(...$performer);
        }
        if (null !== $instance) {
            $this->setInstance(...$instance);
        }
    }

    /* class_default.php:136 */
    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:162 */
    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The DICOM Series Instance UID for the series.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId
     */
    public function getUid(): null|FHIRId
    {
        return $this->uid ?? null;
    }

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The DICOM Series Instance UID for the series.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId $uid
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setUid(null|string|FHIRIdPrimitive|FHIRId $uid,
                           ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $uid) {
            unset($this->uid);
            return $this;
        }
        if (!($uid instanceof FHIRId)) {
            $uid = new FHIRId(value: $uid);
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
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The numeric identifier of this series in the study.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUnsignedInt
     */
    public function getNumber(): null|FHIRUnsignedInt
    {
        return $this->number ?? null;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The numeric identifier of this series in the study.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUnsignedIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUnsignedInt $number
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setNumber(null|string|int|float|FHIRUnsignedIntPrimitive|FHIRUnsignedInt $number,
                              ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $number) {
            unset($this->number);
            return $this;
        }
        if (!($number instanceof FHIRUnsignedInt)) {
            $number = new FHIRUnsignedInt(value: $number);
        }
        $this->number = $number;
        if ($this->_valueXMLLocations[self::FIELD_NUMBER] !== $valueXMLLocation) {
            $this->_setNumberValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the number element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getNumberValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_NUMBER];
    }

    /**
     * Set the location the "value" field of the number element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setNumberValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_NUMBER] = $valueXMLLocation;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The distinct modality for this series. This may include both acquisition and
     * non-acquisition modalities.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
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
     * The distinct modality for this series. This may include both acquisition and
     * non-acquisition modalities.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $modality
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
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A description of the series.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString
     */
    public function getDescription(): null|FHIRString
    {
        return $this->description ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A description of the series.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $description
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
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Number of SOP Instances in the Study. The value given may be larger than the
     * number of instance elements this resource contains due to resource availability,
     * security, or other factors. This element should be present if any instance
     * elements are present.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUnsignedInt
     */
    public function getNumberOfInstances(): null|FHIRUnsignedInt
    {
        return $this->numberOfInstances ?? null;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Number of SOP Instances in the Study. The value given may be larger than the
     * number of instance elements this resource contains due to resource availability,
     * security, or other factors. This element should be present if any instance
     * elements are present.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUnsignedIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUnsignedInt $numberOfInstances
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setNumberOfInstances(null|string|int|float|FHIRUnsignedIntPrimitive|FHIRUnsignedInt $numberOfInstances,
                                         ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $numberOfInstances) {
            unset($this->numberOfInstances);
            return $this;
        }
        if (!($numberOfInstances instanceof FHIRUnsignedInt)) {
            $numberOfInstances = new FHIRUnsignedInt(value: $numberOfInstances);
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
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The network service providing access (e.g., query, view, or retrieval) for this
     * series. See implementation notes for information about using DICOM endpoints. A
     * series-level endpoint, if present, has precedence over a study-level endpoint
     * with the same Endpoint.connectionType.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    public function getEndpoint(): array
    {
        return $this->endpoint ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference>
     */
    public function getEndpointIterator(): iterable
    {
        if (!isset($this->endpoint)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->endpoint);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The network service providing access (e.g., query, view, or retrieval) for this
     * series. See implementation notes for information about using DICOM endpoints. A
     * series-level endpoint, if present, has precedence over a study-level endpoint
     * with the same Endpoint.connectionType.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $endpoint
     * @return static
     */
    public function addEndpoint(FHIRReference $endpoint): self
    {
        if (!isset($this->endpoint)) {
            $this->endpoint = [];
        }
        $this->endpoint[] = $endpoint;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The network service providing access (e.g., query, view, or retrieval) for this
     * series. See implementation notes for information about using DICOM endpoints. A
     * series-level endpoint, if present, has precedence over a study-level endpoint
     * with the same Endpoint.connectionType.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference ...$endpoint
     * @return static
     */
    public function setEndpoint(FHIRReference ...$endpoint): self
    {
        if ([] === $endpoint) {
            unset($this->endpoint);
            return $this;
        }
        $this->endpoint = $endpoint;
        return $this;
    }

    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The anatomic structures examined. See DICOM Part 16 Annex L
     * (http://dicom.nema.org/medical/dicom/current/output/chtml/part16/chapter_L.html)
     * for DICOM to SNOMED-CT mappings. The bodySite may indicate the laterality of
     * body part imaged; if so, it shall be consistent with any content of
     * ImagingStudy.series.laterality.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference
     */
    public function getBodySite(): null|FHIRCodeableReference
    {
        return $this->bodySite ?? null;
    }

    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The anatomic structures examined. See DICOM Part 16 Annex L
     * (http://dicom.nema.org/medical/dicom/current/output/chtml/part16/chapter_L.html)
     * for DICOM to SNOMED-CT mappings. The bodySite may indicate the laterality of
     * body part imaged; if so, it shall be consistent with any content of
     * ImagingStudy.series.laterality.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference $bodySite
     * @return static
     */
    public function setBodySite(null|FHIRCodeableReference $bodySite): self
    {
        if (null === $bodySite) {
            unset($this->bodySite);
            return $this;
        }
        $this->bodySite = $bodySite;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The laterality of the (possibly paired) anatomic structures examined. E.g., the
     * left knee, both lungs, or unpaired abdomen. If present, shall be consistent with
     * any laterality information indicated in ImagingStudy.series.bodySite.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getLaterality(): null|FHIRCodeableConcept
    {
        return $this->laterality ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The laterality of the (possibly paired) anatomic structures examined. E.g., the
     * left knee, both lungs, or unpaired abdomen. If present, shall be consistent with
     * any laterality information indicated in ImagingStudy.series.bodySite.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $laterality
     * @return static
     */
    public function setLaterality(null|FHIRCodeableConcept $laterality): self
    {
        if (null === $laterality) {
            unset($this->laterality);
            return $this;
        }
        $this->laterality = $laterality;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The specimen imaged, e.g., for whole slide imaging of a biopsy.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    public function getSpecimen(): array
    {
        return $this->specimen ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference>
     */
    public function getSpecimenIterator(): iterable
    {
        if (!isset($this->specimen)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->specimen);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The specimen imaged, e.g., for whole slide imaging of a biopsy.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $specimen
     * @return static
     */
    public function addSpecimen(FHIRReference $specimen): self
    {
        if (!isset($this->specimen)) {
            $this->specimen = [];
        }
        $this->specimen[] = $specimen;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The specimen imaged, e.g., for whole slide imaging of a biopsy.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference ...$specimen
     * @return static
     */
    public function setSpecimen(FHIRReference ...$specimen): self
    {
        if ([] === $specimen) {
            unset($this->specimen);
            return $this;
        }
        $this->specimen = $specimen;
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date and time the series was started.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime
     */
    public function getStarted(): null|FHIRDateTime
    {
        return $this->started ?? null;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date and time the series was started.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime $started
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setStarted(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $started,
                               ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $started) {
            unset($this->started);
            return $this;
        }
        if (!($started instanceof FHIRDateTime)) {
            $started = new FHIRDateTime(value: $started);
        }
        $this->started = $started;
        if ($this->_valueXMLLocations[self::FIELD_STARTED] !== $valueXMLLocation) {
            $this->_setStartedValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the started element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getStartedValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_STARTED];
    }

    /**
     * Set the location the "value" field of the started element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setStartedValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_STARTED] = $valueXMLLocation;
        return $this;
    }

    /**
     * Representation of the content produced in a DICOM imaging study. A study
     * comprises a set of series, each of which includes a set of Service-Object Pair
     * Instances (SOP Instances - images or other data) acquired or produced in a
     * common context. A series is of only one modality (e.g. X-ray, CT, MR,
     * ultrasound), but a study may have multiple series of different modalities.
     *
     * Indicates who or what performed the series and how they were involved.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRImagingStudy\FHIRImagingStudyPerformer[]
     */
    public function getPerformer(): array
    {
        return $this->performer ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRImagingStudy\FHIRImagingStudyPerformer>
     */
    public function getPerformerIterator(): iterable
    {
        if (!isset($this->performer)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->performer);
    }

    /**
     * Representation of the content produced in a DICOM imaging study. A study
     * comprises a set of series, each of which includes a set of Service-Object Pair
     * Instances (SOP Instances - images or other data) acquired or produced in a
     * common context. A series is of only one modality (e.g. X-ray, CT, MR,
     * ultrasound), but a study may have multiple series of different modalities.
     *
     * Indicates who or what performed the series and how they were involved.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRImagingStudy\FHIRImagingStudyPerformer $performer
     * @return static
     */
    public function addPerformer(FHIRImagingStudyPerformer $performer): self
    {
        if (!isset($this->performer)) {
            $this->performer = [];
        }
        $this->performer[] = $performer;
        return $this;
    }

    /**
     * Representation of the content produced in a DICOM imaging study. A study
     * comprises a set of series, each of which includes a set of Service-Object Pair
     * Instances (SOP Instances - images or other data) acquired or produced in a
     * common context. A series is of only one modality (e.g. X-ray, CT, MR,
     * ultrasound), but a study may have multiple series of different modalities.
     *
     * Indicates who or what performed the series and how they were involved.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRImagingStudy\FHIRImagingStudyPerformer ...$performer
     * @return static
     */
    public function setPerformer(FHIRImagingStudyPerformer ...$performer): self
    {
        if ([] === $performer) {
            unset($this->performer);
            return $this;
        }
        $this->performer = $performer;
        return $this;
    }

    /**
     * Representation of the content produced in a DICOM imaging study. A study
     * comprises a set of series, each of which includes a set of Service-Object Pair
     * Instances (SOP Instances - images or other data) acquired or produced in a
     * common context. A series is of only one modality (e.g. X-ray, CT, MR,
     * ultrasound), but a study may have multiple series of different modalities.
     *
     * A single SOP instance within the series, e.g. an image, or presentation state.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRImagingStudy\FHIRImagingStudyInstance[]
     */
    public function getInstance(): array
    {
        return $this->instance ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRImagingStudy\FHIRImagingStudyInstance>
     */
    public function getInstanceIterator(): iterable
    {
        if (!isset($this->instance)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->instance);
    }

    /**
     * Representation of the content produced in a DICOM imaging study. A study
     * comprises a set of series, each of which includes a set of Service-Object Pair
     * Instances (SOP Instances - images or other data) acquired or produced in a
     * common context. A series is of only one modality (e.g. X-ray, CT, MR,
     * ultrasound), but a study may have multiple series of different modalities.
     *
     * A single SOP instance within the series, e.g. an image, or presentation state.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRImagingStudy\FHIRImagingStudyInstance $instance
     * @return static
     */
    public function addInstance(FHIRImagingStudyInstance $instance): self
    {
        if (!isset($this->instance)) {
            $this->instance = [];
        }
        $this->instance[] = $instance;
        return $this;
    }

    /**
     * Representation of the content produced in a DICOM imaging study. A study
     * comprises a set of series, each of which includes a set of Service-Object Pair
     * Instances (SOP Instances - images or other data) acquired or produced in a
     * common context. A series is of only one modality (e.g. X-ray, CT, MR,
     * ultrasound), but a study may have multiple series of different modalities.
     *
     * A single SOP instance within the series, e.g. an image, or presentation state.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRImagingStudy\FHIRImagingStudyInstance ...$instance
     * @return static
     */
    public function setInstance(FHIRImagingStudyInstance ...$instance): self
    {
        if ([] === $instance) {
            unset($this->instance);
            return $this;
        }
        $this->instance = $instance;
        return $this;
    }

    /* class_default.php:188 */
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
        if (null !== ($v = $this->getUid())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_UID] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getModality())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MODALITY] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_UID])) {
            $v = $this->getUid();
            foreach($validationRules[self::FIELD_UID] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_UID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_UID])) {
                        $errs[self::FIELD_UID] = [];
                    }
                    $errs[self::FIELD_UID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NUMBER])) {
            $v = $this->getNumber();
            foreach($validationRules[self::FIELD_NUMBER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_NUMBER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NUMBER])) {
                        $errs[self::FIELD_NUMBER] = [];
                    }
                    $errs[self::FIELD_NUMBER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODALITY])) {
            $v = $this->getModality();
            foreach($validationRules[self::FIELD_MODALITY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MODALITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MODALITY])) {
                        $errs[self::FIELD_MODALITY] = [];
                    }
                    $errs[self::FIELD_MODALITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DESCRIPTION])) {
            $v = $this->getDescription();
            foreach($validationRules[self::FIELD_DESCRIPTION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DESCRIPTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DESCRIPTION])) {
                        $errs[self::FIELD_DESCRIPTION] = [];
                    }
                    $errs[self::FIELD_DESCRIPTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NUMBER_OF_INSTANCES])) {
            $v = $this->getNumberOfInstances();
            foreach($validationRules[self::FIELD_NUMBER_OF_INSTANCES] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_NUMBER_OF_INSTANCES, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NUMBER_OF_INSTANCES])) {
                        $errs[self::FIELD_NUMBER_OF_INSTANCES] = [];
                    }
                    $errs[self::FIELD_NUMBER_OF_INSTANCES][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ENDPOINT])) {
            $v = $this->getEndpoint();
            foreach($validationRules[self::FIELD_ENDPOINT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ENDPOINT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ENDPOINT])) {
                        $errs[self::FIELD_ENDPOINT] = [];
                    }
                    $errs[self::FIELD_ENDPOINT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_BODY_SITE])) {
            $v = $this->getBodySite();
            foreach($validationRules[self::FIELD_BODY_SITE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_BODY_SITE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_BODY_SITE])) {
                        $errs[self::FIELD_BODY_SITE] = [];
                    }
                    $errs[self::FIELD_BODY_SITE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LATERALITY])) {
            $v = $this->getLaterality();
            foreach($validationRules[self::FIELD_LATERALITY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_LATERALITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LATERALITY])) {
                        $errs[self::FIELD_LATERALITY] = [];
                    }
                    $errs[self::FIELD_LATERALITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SPECIMEN])) {
            $v = $this->getSpecimen();
            foreach($validationRules[self::FIELD_SPECIMEN] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SPECIMEN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SPECIMEN])) {
                        $errs[self::FIELD_SPECIMEN] = [];
                    }
                    $errs[self::FIELD_SPECIMEN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STARTED])) {
            $v = $this->getStarted();
            foreach($validationRules[self::FIELD_STARTED] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_STARTED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STARTED])) {
                        $errs[self::FIELD_STARTED] = [];
                    }
                    $errs[self::FIELD_STARTED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PERFORMER])) {
            $v = $this->getPerformer();
            foreach($validationRules[self::FIELD_PERFORMER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PERFORMER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PERFORMER])) {
                        $errs[self::FIELD_PERFORMER] = [];
                    }
                    $errs[self::FIELD_PERFORMER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INSTANCE])) {
            $v = $this->getInstance();
            foreach($validationRules[self::FIELD_INSTANCE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_INSTANCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INSTANCE])) {
                        $errs[self::FIELD_INSTANCE] = [];
                    }
                    $errs[self::FIELD_INSTANCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
            $v = $this->getModifierExtension();
            foreach($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MODIFIER_EXTENSION])) {
                        $errs[self::FIELD_MODIFIER_EXTENSION] = [];
                    }
                    $errs[self::FIELD_MODIFIER_EXTENSION][$rule] = $err;
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

    /* class_default.php:211 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRImagingStudy\FHIRImagingStudySeries $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRImagingStudy\FHIRImagingStudySeries
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRImagingStudySeries)) {
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
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_UID === $cen) {
                $type->setUid(FHIRId::xmlUnserialize($ce, $config));
            } else if (self::FIELD_NUMBER === $cen) {
                $type->setNumber(FHIRUnsignedInt::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MODALITY === $cen) {
                $type->setModality(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DESCRIPTION === $cen) {
                $type->setDescription(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_NUMBER_OF_INSTANCES === $cen) {
                $type->setNumberOfInstances(FHIRUnsignedInt::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ENDPOINT === $cen) {
                $type->addEndpoint(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_BODY_SITE === $cen) {
                $type->setBodySite(FHIRCodeableReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_LATERALITY === $cen) {
                $type->setLaterality(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SPECIMEN === $cen) {
                $type->addSpecimen(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_STARTED === $cen) {
                $type->setStarted(FHIRDateTime::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PERFORMER === $cen) {
                $type->addPerformer(FHIRImagingStudyPerformer::xmlUnserialize($ce, $config));
            } else if (self::FIELD_INSTANCE === $cen) {
                $type->addInstance(FHIRImagingStudyInstance::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_UID])) {
            if (isset($type->uid)) {
                $type->uid->setValue((string)$attributes[self::FIELD_UID]);
                $type->_setUidValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setUid((string)$attributes[self::FIELD_UID], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_NUMBER])) {
            if (isset($type->number)) {
                $type->number->setValue((string)$attributes[self::FIELD_NUMBER]);
                $type->_setNumberValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setNumber((string)$attributes[self::FIELD_NUMBER], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($attributes[self::FIELD_NUMBER_OF_INSTANCES])) {
            if (isset($type->numberOfInstances)) {
                $type->numberOfInstances->setValue((string)$attributes[self::FIELD_NUMBER_OF_INSTANCES]);
                $type->_setNumberOfInstancesValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setNumberOfInstances((string)$attributes[self::FIELD_NUMBER_OF_INSTANCES], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_STARTED])) {
            if (isset($type->started)) {
                $type->started->setValue((string)$attributes[self::FIELD_STARTED]);
                $type->_setStartedValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setStarted((string)$attributes[self::FIELD_STARTED], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($this->uid) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_UID]) {
            $xw->writeAttribute(self::FIELD_UID, $this->uid->_getFormattedValue());
        }
        if (isset($this->number) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_NUMBER]) {
            $xw->writeAttribute(self::FIELD_NUMBER, $this->number->_getFormattedValue());
        }
        if (isset($this->description) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DESCRIPTION]) {
            $xw->writeAttribute(self::FIELD_DESCRIPTION, $this->description->_getFormattedValue());
        }
        if (isset($this->numberOfInstances) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_NUMBER_OF_INSTANCES]) {
            $xw->writeAttribute(self::FIELD_NUMBER_OF_INSTANCES, $this->numberOfInstances->_getFormattedValue());
        }
        if (isset($this->started) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_STARTED]) {
            $xw->writeAttribute(self::FIELD_STARTED, $this->started->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->uid)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_UID]
                || $this->uid->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_UID);
            $this->uid->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_UID]);
            $xw->endElement();
        }
        if (isset($this->number)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_NUMBER]
                || $this->number->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_NUMBER);
            $this->number->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_NUMBER]);
            $xw->endElement();
        }
        if (isset($this->modality)) {
            $xw->startElement(self::FIELD_MODALITY);
            $this->modality->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->description)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DESCRIPTION]
                || $this->description->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DESCRIPTION);
            $this->description->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DESCRIPTION]);
            $xw->endElement();
        }
        if (isset($this->numberOfInstances)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_NUMBER_OF_INSTANCES]
                || $this->numberOfInstances->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_NUMBER_OF_INSTANCES);
            $this->numberOfInstances->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_NUMBER_OF_INSTANCES]);
            $xw->endElement();
        }
        if (isset($this->endpoint)) {
            foreach ($this->endpoint as $v) {
                $xw->startElement(self::FIELD_ENDPOINT);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->bodySite)) {
            $xw->startElement(self::FIELD_BODY_SITE);
            $this->bodySite->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->laterality)) {
            $xw->startElement(self::FIELD_LATERALITY);
            $this->laterality->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->specimen)) {
            foreach ($this->specimen as $v) {
                $xw->startElement(self::FIELD_SPECIMEN);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->started)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_STARTED]
                || $this->started->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_STARTED);
            $this->started->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_STARTED]);
            $xw->endElement();
        }
        if (isset($this->performer)) {
            foreach ($this->performer as $v) {
                $xw->startElement(self::FIELD_PERFORMER);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->instance)) {
            foreach ($this->instance as $v) {
                $xw->startElement(self::FIELD_INSTANCE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
    }

    /**
     * @param array $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRImagingStudy\FHIRImagingStudySeries $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRImagingStudy\FHIRImagingStudySeries
     * @throws \Exception
     */
    public static function jsonUnserialize(array $json,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRImagingStudySeries)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json[self::FIELD_UID])
            || isset($json[self::FIELD_UID_EXT])
            || array_key_exists(self::FIELD_UID, $json)
            || array_key_exists(self::FIELD_UID_EXT, $json)) {
            $value = $json[self::FIELD_UID] ?? null;
            $type->setUid(FHIRId::jsonUnserialize(
                (is_array($value) ? $value : [FHIRId::FIELD_VALUE => $value]) + ($json[self::FIELD_UID_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_NUMBER])
            || isset($json[self::FIELD_NUMBER_EXT])
            || array_key_exists(self::FIELD_NUMBER, $json)
            || array_key_exists(self::FIELD_NUMBER_EXT, $json)) {
            $value = $json[self::FIELD_NUMBER] ?? null;
            $type->setNumber(FHIRUnsignedInt::jsonUnserialize(
                (is_array($value) ? $value : [FHIRUnsignedInt::FIELD_VALUE => $value]) + ($json[self::FIELD_NUMBER_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_MODALITY]) || array_key_exists(self::FIELD_MODALITY, $json)) {
            $type->setModality(FHIRCodeableConcept::jsonUnserialize($json[self::FIELD_MODALITY], $config));
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
        if (isset($json[self::FIELD_NUMBER_OF_INSTANCES])
            || isset($json[self::FIELD_NUMBER_OF_INSTANCES_EXT])
            || array_key_exists(self::FIELD_NUMBER_OF_INSTANCES, $json)
            || array_key_exists(self::FIELD_NUMBER_OF_INSTANCES_EXT, $json)) {
            $value = $json[self::FIELD_NUMBER_OF_INSTANCES] ?? null;
            $type->setNumberOfInstances(FHIRUnsignedInt::jsonUnserialize(
                (is_array($value) ? $value : [FHIRUnsignedInt::FIELD_VALUE => $value]) + ($json[self::FIELD_NUMBER_OF_INSTANCES_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_ENDPOINT]) || array_key_exists(self::FIELD_ENDPOINT, $json)) {
            $vs = $json[self::FIELD_ENDPOINT];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addEndpoint(FHIRReference::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_BODY_SITE]) || array_key_exists(self::FIELD_BODY_SITE, $json)) {
            $type->setBodySite(FHIRCodeableReference::jsonUnserialize($json[self::FIELD_BODY_SITE], $config));
        }
        if (isset($json[self::FIELD_LATERALITY]) || array_key_exists(self::FIELD_LATERALITY, $json)) {
            $type->setLaterality(FHIRCodeableConcept::jsonUnserialize($json[self::FIELD_LATERALITY], $config));
        }
        if (isset($json[self::FIELD_SPECIMEN]) || array_key_exists(self::FIELD_SPECIMEN, $json)) {
            $vs = $json[self::FIELD_SPECIMEN];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addSpecimen(FHIRReference::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_STARTED])
            || isset($json[self::FIELD_STARTED_EXT])
            || array_key_exists(self::FIELD_STARTED, $json)
            || array_key_exists(self::FIELD_STARTED_EXT, $json)) {
            $value = $json[self::FIELD_STARTED] ?? null;
            $type->setStarted(FHIRDateTime::jsonUnserialize(
                (is_array($value) ? $value : [FHIRDateTime::FIELD_VALUE => $value]) + ($json[self::FIELD_STARTED_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_PERFORMER]) || array_key_exists(self::FIELD_PERFORMER, $json)) {
            $vs = $json[self::FIELD_PERFORMER];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addPerformer(FHIRImagingStudyPerformer::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_INSTANCE]) || array_key_exists(self::FIELD_INSTANCE, $json)) {
            $vs = $json[self::FIELD_INSTANCE];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addInstance(FHIRImagingStudyInstance::jsonUnserialize($v, $config));
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
        if (isset($this->number)) {
            if (null !== ($val = $this->number->getValue())) {
                $out->number = $val;
            }
            if ($this->number->_nonValueFieldDefined()) {
                $ext = $this->number->jsonSerialize();
                unset($ext->value);
                $out->_number = $ext;
            }
        }
        if (isset($this->modality)) {
            $out->modality = $this->modality;
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
        if (isset($this->endpoint) && [] !== $this->endpoint) {
            $out->endpoint = $this->endpoint;
        }
        if (isset($this->bodySite)) {
            $out->bodySite = $this->bodySite;
        }
        if (isset($this->laterality)) {
            $out->laterality = $this->laterality;
        }
        if (isset($this->specimen) && [] !== $this->specimen) {
            $out->specimen = $this->specimen;
        }
        if (isset($this->started)) {
            if (null !== ($val = $this->started->getValue())) {
                $out->started = $val;
            }
            if ($this->started->_nonValueFieldDefined()) {
                $ext = $this->started->jsonSerialize();
                unset($ext->value);
                $out->_started = $ext;
            }
        }
        if (isset($this->performer) && [] !== $this->performer) {
            $out->performer = $this->performer;
        }
        if (isset($this->instance) && [] !== $this->instance) {
            $out->instance = $this->instance;
        }
        return $out;
    }
}