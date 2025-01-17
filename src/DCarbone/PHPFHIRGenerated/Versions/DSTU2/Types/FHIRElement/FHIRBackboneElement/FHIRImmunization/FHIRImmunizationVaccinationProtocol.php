<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRImmunization;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 17th, 2025 18:09+0000
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
 *   Generated on Sat, Oct 24, 2015 07:41+1100 for FHIR v1.0.2
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
use DCarbone\PHPFHIRGenerated\TypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRPositiveInt;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRPositiveIntPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Version;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\VersionConstants;

/**
 * Describes the event of a patient being administered a vaccination or a record of
 * a vaccination as reported by a patient, a clinician or another party and may
 * include vaccine reaction information and what vaccination protocol was followed.
 */
class FHIRImmunizationVaccinationProtocol extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_IMMUNIZATION_DOT_VACCINATION_PROTOCOL;


    public const FIELD_DOSE_SEQUENCE = 'doseSequence';
    public const FIELD_DOSE_SEQUENCE_EXT = '_doseSequence';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DESCRIPTION_EXT = '_description';
    public const FIELD_AUTHORITY = 'authority';
    public const FIELD_SERIES = 'series';
    public const FIELD_SERIES_EXT = '_series';
    public const FIELD_SERIES_DOSES = 'seriesDoses';
    public const FIELD_SERIES_DOSES_EXT = '_seriesDoses';
    public const FIELD_TARGET_DISEASE = 'targetDisease';
    public const FIELD_DOSE_STATUS = 'doseStatus';
    public const FIELD_DOSE_STATUS_REASON = 'doseStatusReason';

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Nominal position in a series.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRPositiveInt 
     */
    protected FHIRPositiveInt $doseSequence;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Contains the description about the protocol under which the vaccine was
     * administered.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $description;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the authority who published the protocol. E.g. ACIP.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $authority;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * One possible path to achieve presumed immunity against a disease - within the
     * context of an authority.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $series;
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The recommended number of doses to achieve immunity.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRPositiveInt 
     */
    protected FHIRPositiveInt $seriesDoses;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The targeted disease.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept[] 
     */
    protected array $targetDisease;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates if the immunization event should "count" against the protocol.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $doseStatus;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Provides an explanation as to why an immunization event should or should not
     * count against the protocol.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $doseStatusReason;

    /** Default validation map for fields in type Immunization.VaccinationProtocol */
    private const _DEFAULT_VALIDATION_RULES = [
        self::FIELD_ID => [
            Constants::VALIDATE_PATTERN => '/^[A-Za-z0-9\\-\\.]{1,64}$/',
        ],
        self::FIELD_DOSE_SEQUENCE => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_TARGET_DISEASE => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_DOSE_STATUS => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /**
     * FHIRImmunizationVaccinationProtocol Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRPositiveInt $doseSequence
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString $description
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference $authority
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString $series
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRPositiveInt $seriesDoses
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept[] $targetDisease
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept $doseStatus
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept $doseStatusReason
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRIdPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $doseSequence = null,
                                null|string|FHIRStringPrimitive|FHIRString $description = null,
                                null|FHIRReference $authority = null,
                                null|string|FHIRStringPrimitive|FHIRString $series = null,
                                null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $seriesDoses = null,
                                null|iterable $targetDisease = null,
                                null|FHIRCodeableConcept $doseStatus = null,
                                null|FHIRCodeableConcept $doseStatusReason = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $doseSequence) {
            $this->setDoseSequence($doseSequence);
        }
        if (null !== $description) {
            $this->setDescription($description);
        }
        if (null !== $authority) {
            $this->setAuthority($authority);
        }
        if (null !== $series) {
            $this->setSeries($series);
        }
        if (null !== $seriesDoses) {
            $this->setSeriesDoses($seriesDoses);
        }
        if (null !== $targetDisease) {
            $this->setTargetDisease(...$targetDisease);
        }
        if (null !== $doseStatus) {
            $this->setDoseStatus($doseStatus);
        }
        if (null !== $doseStatusReason) {
            $this->setDoseStatusReason($doseStatusReason);
        }
    }

    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Nominal position in a series.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRPositiveInt
     */
    public function getDoseSequence(): null|FHIRPositiveInt
    {
        return $this->doseSequence ?? null;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Nominal position in a series.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRPositiveInt $doseSequence
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDoseSequence(null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $doseSequence,
                                    null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $doseSequence) {
            unset($this->doseSequence);
            return $this;
        }
        if (!($doseSequence instanceof FHIRPositiveInt)) {
            $doseSequence = new FHIRPositiveInt(value: $doseSequence);
        }
        if (null !== $valueXMLLocation) {
            $doseSequence->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $doseSequence->_getValueXMLLocation()) {
            $doseSequence->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->doseSequence = $doseSequence;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Contains the description about the protocol under which the vaccine was
     * administered.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString
     */
    public function getDescription(): null|FHIRString
    {
        return $this->description ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Contains the description about the protocol under which the vaccine was
     * administered.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString $description
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDescription(null|string|FHIRStringPrimitive|FHIRString $description,
                                   null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $description) {
            unset($this->description);
            return $this;
        }
        if (!($description instanceof FHIRString)) {
            $description = new FHIRString(value: $description);
        }
        if (null !== $valueXMLLocation) {
            $description->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $description->_getValueXMLLocation()) {
            $description->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->description = $description;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the authority who published the protocol. E.g. ACIP.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference
     */
    public function getAuthority(): null|FHIRReference
    {
        return $this->authority ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the authority who published the protocol. E.g. ACIP.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference $authority
     * @return static
     */
    public function setAuthority(null|FHIRReference $authority): self
    {
        if (null === $authority) {
            unset($this->authority);
            return $this;
        }
        $this->authority = $authority;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * One possible path to achieve presumed immunity against a disease - within the
     * context of an authority.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString
     */
    public function getSeries(): null|FHIRString
    {
        return $this->series ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * One possible path to achieve presumed immunity against a disease - within the
     * context of an authority.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString $series
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setSeries(null|string|FHIRStringPrimitive|FHIRString $series,
                              null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $series) {
            unset($this->series);
            return $this;
        }
        if (!($series instanceof FHIRString)) {
            $series = new FHIRString(value: $series);
        }
        if (null !== $valueXMLLocation) {
            $series->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $series->_getValueXMLLocation()) {
            $series->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->series = $series;
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The recommended number of doses to achieve immunity.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRPositiveInt
     */
    public function getSeriesDoses(): null|FHIRPositiveInt
    {
        return $this->seriesDoses ?? null;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The recommended number of doses to achieve immunity.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRPositiveInt $seriesDoses
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setSeriesDoses(null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $seriesDoses,
                                   null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $seriesDoses) {
            unset($this->seriesDoses);
            return $this;
        }
        if (!($seriesDoses instanceof FHIRPositiveInt)) {
            $seriesDoses = new FHIRPositiveInt(value: $seriesDoses);
        }
        if (null !== $valueXMLLocation) {
            $seriesDoses->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $seriesDoses->_getValueXMLLocation()) {
            $seriesDoses->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->seriesDoses = $seriesDoses;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The targeted disease.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept[]
     */
    public function getTargetDisease(): array
    {
        return $this->targetDisease ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept>
     */
    public function getTargetDiseaseIterator(): iterable
    {
        if (!isset($this->targetDisease) || [] === $this->targetDisease) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->targetDisease);
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The targeted disease.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept $targetDisease
     * @return static
     */
    public function addTargetDisease(FHIRCodeableConcept $targetDisease): self
    {
        if (!isset($this->targetDisease)) {
            $this->targetDisease = [];
        }
        $this->targetDisease[] = $targetDisease;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The targeted disease.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept ...$targetDisease
     * @return static
     */
    public function setTargetDisease(FHIRCodeableConcept ...$targetDisease): self
    {
        $this->targetDisease = $targetDisease;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates if the immunization event should "count" against the protocol.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getDoseStatus(): null|FHIRCodeableConcept
    {
        return $this->doseStatus ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates if the immunization event should "count" against the protocol.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept $doseStatus
     * @return static
     */
    public function setDoseStatus(null|FHIRCodeableConcept $doseStatus): self
    {
        if (null === $doseStatus) {
            unset($this->doseStatus);
            return $this;
        }
        $this->doseStatus = $doseStatus;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Provides an explanation as to why an immunization event should or should not
     * count against the protocol.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getDoseStatusReason(): null|FHIRCodeableConcept
    {
        return $this->doseStatusReason ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Provides an explanation as to why an immunization event should or should not
     * count against the protocol.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept $doseStatusReason
     * @return static
     */
    public function setDoseStatusReason(null|FHIRCodeableConcept $doseStatusReason): self
    {
        if (null === $doseStatusReason) {
            unset($this->doseStatusReason);
            return $this;
        }
        $this->doseStatusReason = $doseStatusReason;
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
        return self::_DEFAULT_VALIDATION_RULES;
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
        if (null !== ($v = $this->getDoseSequence())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DOSE_SEQUENCE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getTargetDisease())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_TARGET_DISEASE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getDoseStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DOSE_STATUS] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_DOSE_SEQUENCE])) {
            $v = $this->getDoseSequence();
            foreach($validationRules[self::FIELD_DOSE_SEQUENCE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DOSE_SEQUENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DOSE_SEQUENCE])) {
                        $errs[self::FIELD_DOSE_SEQUENCE] = [];
                    }
                    $errs[self::FIELD_DOSE_SEQUENCE][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_AUTHORITY])) {
            $v = $this->getAuthority();
            foreach($validationRules[self::FIELD_AUTHORITY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_AUTHORITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AUTHORITY])) {
                        $errs[self::FIELD_AUTHORITY] = [];
                    }
                    $errs[self::FIELD_AUTHORITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SERIES])) {
            $v = $this->getSeries();
            foreach($validationRules[self::FIELD_SERIES] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SERIES, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SERIES])) {
                        $errs[self::FIELD_SERIES] = [];
                    }
                    $errs[self::FIELD_SERIES][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SERIES_DOSES])) {
            $v = $this->getSeriesDoses();
            foreach($validationRules[self::FIELD_SERIES_DOSES] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SERIES_DOSES, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SERIES_DOSES])) {
                        $errs[self::FIELD_SERIES_DOSES] = [];
                    }
                    $errs[self::FIELD_SERIES_DOSES][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TARGET_DISEASE])) {
            $v = $this->getTargetDisease();
            foreach($validationRules[self::FIELD_TARGET_DISEASE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TARGET_DISEASE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TARGET_DISEASE])) {
                        $errs[self::FIELD_TARGET_DISEASE] = [];
                    }
                    $errs[self::FIELD_TARGET_DISEASE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DOSE_STATUS])) {
            $v = $this->getDoseStatus();
            foreach($validationRules[self::FIELD_DOSE_STATUS] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DOSE_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DOSE_STATUS])) {
                        $errs[self::FIELD_DOSE_STATUS] = [];
                    }
                    $errs[self::FIELD_DOSE_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DOSE_STATUS_REASON])) {
            $v = $this->getDoseStatusReason();
            foreach($validationRules[self::FIELD_DOSE_STATUS_REASON] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DOSE_STATUS_REASON, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DOSE_STATUS_REASON])) {
                        $errs[self::FIELD_DOSE_STATUS_REASON] = [];
                    }
                    $errs[self::FIELD_DOSE_STATUS_REASON][$rule] = $err;
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

    /**
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationVaccinationProtocol $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationVaccinationProtocol
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRImmunizationVaccinationProtocol)) {
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
        foreach ($element->children() as $n) {
            $childName = $n->getName();
            if (self::FIELD_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ID === $childName) {
                $valueAttr = $n->attributes()[FHIRIdPrimitive::FIELD_VALUE] ?? null;
                 if (null !== $valueAttr) {
                    $value = (string)$valueAttr;
                } else if ($n->hasChildren()) {
                    $value = $n->saveXML();
                } else {
                    $value = (string)$n;
                }
                $type->setId($value, ValueXMLLocationEnum::ELEMENT);
            } else if (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DOSE_SEQUENCE === $childName) {
                $v = new FHIRPositiveInt(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setDoseSequence(FHIRPositiveInt::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DESCRIPTION === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setDescription(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_AUTHORITY === $childName) {
                $v = new FHIRReference();
                $type->setAuthority(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SERIES === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setSeries(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SERIES_DOSES === $childName) {
                $v = new FHIRPositiveInt(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setSeriesDoses(FHIRPositiveInt::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_TARGET_DISEASE === $childName) {
                $v = new FHIRCodeableConcept();
                $type->addTargetDisease(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DOSE_STATUS === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setDoseStatus(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DOSE_STATUS_REASON === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setDoseStatusReason(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_ID]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setId(new FHIRIdPrimitive(
                    value: (string)$attributes[self::FIELD_ID],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_DOSE_SEQUENCE])) {
            $pt = $type->getDoseSequence();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_DOSE_SEQUENCE]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setDoseSequence(new FHIRPositiveInt(
                    value: (string)$attributes[self::FIELD_DOSE_SEQUENCE],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_DESCRIPTION])) {
            $pt = $type->getDescription();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_DESCRIPTION]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setDescription(new FHIRString(
                    value: (string)$attributes[self::FIELD_DESCRIPTION],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_SERIES])) {
            $pt = $type->getSeries();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_SERIES]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setSeries(new FHIRString(
                    value: (string)$attributes[self::FIELD_SERIES],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_SERIES_DOSES])) {
            $pt = $type->getSeriesDoses();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_SERIES_DOSES]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setSeriesDoses(new FHIRPositiveInt(
                    value: (string)$attributes[self::FIELD_SERIES_DOSES],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        return $type;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\XMLWriter $xw
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Encoding\XMLWriter
     */
    public function xmlSerialize(null|XMLWriter $xw = null, null|SerializeConfig $config = null): XMLWriter
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
            $xw->openRootNode('ImmunizationVaccinationProtocol', $this->_getSourceXMLNS());
        }
        if (isset($this->doseSequence) && $this->doseSequence->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_DOSE_SEQUENCE, $this->doseSequence->getValue()?->_getFormattedValue());
        }
        if (isset($this->description) && $this->description->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_DESCRIPTION, $this->description->getValue()?->_getFormattedValue());
        }
        if (isset($this->series) && $this->series->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_SERIES, $this->series->getValue()?->_getFormattedValue());
        }
        if (isset($this->seriesDoses) && $this->seriesDoses->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_SERIES_DOSES, $this->seriesDoses->getValue()?->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->doseSequence) && $this->doseSequence->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_DOSE_SEQUENCE);
            $this->doseSequence->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->description) && $this->description->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_DESCRIPTION);
            $this->description->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->authority)) {
            $xw->startElement(self::FIELD_AUTHORITY);
            $this->authority->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->series) && $this->series->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_SERIES);
            $this->series->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->seriesDoses) && $this->seriesDoses->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_SERIES_DOSES);
            $this->seriesDoses->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->targetDisease)) {
            foreach ($this->targetDisease as $v) {
                $xw->startElement(self::FIELD_TARGET_DISEASE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->doseStatus)) {
            $xw->startElement(self::FIELD_DOSE_STATUS);
            $this->doseStatus->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->doseStatusReason)) {
            $xw->startElement(self::FIELD_DOSE_STATUS_REASON);
            $this->doseStatusReason->xmlSerialize($xw, $config);
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
     * @param string|array|\stdClass $json
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationVaccinationProtocol $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationVaccinationProtocol
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRImmunizationVaccinationProtocol)) {
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
        parent::jsonUnserialize($json, $type, $config);
        if (isset($json[self::FIELD_DOSE_SEQUENCE]) || isset($json[self::FIELD_DOSE_SEQUENCE_EXT]) || array_key_exists(self::FIELD_DOSE_SEQUENCE, $json) || array_key_exists(self::FIELD_DOSE_SEQUENCE_EXT, $json)) {
            $value = $json[self::FIELD_DOSE_SEQUENCE] ?? null;
            $ext = (isset($json[self::FIELD_DOSE_SEQUENCE_EXT]) && is_array($json[self::FIELD_DOSE_SEQUENCE_EXT])) ? $json[self::FIELD_DOSE_SEQUENCE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRPositiveInt) {
                    $type->setDoseSequence($value);
                } else if (is_array($value)) {
                    $type->setDoseSequence(new FHIRPositiveInt(array_merge($ext, $value)));
                } else {
                    $type->setDoseSequence(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setDoseSequence(new FHIRPositiveInt($ext));
            } else {
                $type->setDoseSequence(new FHIRPositiveInt(null));
            }
        }
        if (isset($json[self::FIELD_DESCRIPTION]) || isset($json[self::FIELD_DESCRIPTION_EXT]) || array_key_exists(self::FIELD_DESCRIPTION, $json) || array_key_exists(self::FIELD_DESCRIPTION_EXT, $json)) {
            $value = $json[self::FIELD_DESCRIPTION] ?? null;
            $ext = (isset($json[self::FIELD_DESCRIPTION_EXT]) && is_array($json[self::FIELD_DESCRIPTION_EXT])) ? $json[self::FIELD_DESCRIPTION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setDescription($value);
                } else if (is_array($value)) {
                    $type->setDescription(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setDescription(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setDescription(new FHIRString($ext));
            } else {
                $type->setDescription(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_AUTHORITY]) || array_key_exists(self::FIELD_AUTHORITY, $json)) {
            if ($json[self::FIELD_AUTHORITY] instanceof FHIRReference) {
                $type->setAuthority($json[self::FIELD_AUTHORITY]);
            } else {
                $type->setAuthority(new FHIRReference($json[self::FIELD_AUTHORITY]));
            }
        }
        if (isset($json[self::FIELD_SERIES]) || isset($json[self::FIELD_SERIES_EXT]) || array_key_exists(self::FIELD_SERIES, $json) || array_key_exists(self::FIELD_SERIES_EXT, $json)) {
            $value = $json[self::FIELD_SERIES] ?? null;
            $ext = (isset($json[self::FIELD_SERIES_EXT]) && is_array($json[self::FIELD_SERIES_EXT])) ? $json[self::FIELD_SERIES_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setSeries($value);
                } else if (is_array($value)) {
                    $type->setSeries(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setSeries(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setSeries(new FHIRString($ext));
            } else {
                $type->setSeries(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_SERIES_DOSES]) || isset($json[self::FIELD_SERIES_DOSES_EXT]) || array_key_exists(self::FIELD_SERIES_DOSES, $json) || array_key_exists(self::FIELD_SERIES_DOSES_EXT, $json)) {
            $value = $json[self::FIELD_SERIES_DOSES] ?? null;
            $ext = (isset($json[self::FIELD_SERIES_DOSES_EXT]) && is_array($json[self::FIELD_SERIES_DOSES_EXT])) ? $json[self::FIELD_SERIES_DOSES_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRPositiveInt) {
                    $type->setSeriesDoses($value);
                } else if (is_array($value)) {
                    $type->setSeriesDoses(new FHIRPositiveInt(array_merge($ext, $value)));
                } else {
                    $type->setSeriesDoses(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setSeriesDoses(new FHIRPositiveInt($ext));
            } else {
                $type->setSeriesDoses(new FHIRPositiveInt(null));
            }
        }
        if (isset($json[self::FIELD_TARGET_DISEASE]) || array_key_exists(self::FIELD_TARGET_DISEASE, $json)) {
            if (is_array($json[self::FIELD_TARGET_DISEASE])) {
                foreach($json[self::FIELD_TARGET_DISEASE] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $type->addTargetDisease($v);
                    } else {
                        $type->addTargetDisease(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($json[self::FIELD_TARGET_DISEASE] instanceof FHIRCodeableConcept) {
                $type->addTargetDisease($json[self::FIELD_TARGET_DISEASE]);
            } else {
                $type->addTargetDisease(new FHIRCodeableConcept($json[self::FIELD_TARGET_DISEASE]));
            }
        }
        if (isset($json[self::FIELD_DOSE_STATUS]) || array_key_exists(self::FIELD_DOSE_STATUS, $json)) {
            if ($json[self::FIELD_DOSE_STATUS] instanceof FHIRCodeableConcept) {
                $type->setDoseStatus($json[self::FIELD_DOSE_STATUS]);
            } else {
                $type->setDoseStatus(new FHIRCodeableConcept($json[self::FIELD_DOSE_STATUS]));
            }
        }
        if (isset($json[self::FIELD_DOSE_STATUS_REASON]) || array_key_exists(self::FIELD_DOSE_STATUS_REASON, $json)) {
            if ($json[self::FIELD_DOSE_STATUS_REASON] instanceof FHIRCodeableConcept) {
                $type->setDoseStatusReason($json[self::FIELD_DOSE_STATUS_REASON]);
            } else {
                $type->setDoseStatusReason(new FHIRCodeableConcept($json[self::FIELD_DOSE_STATUS_REASON]));
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
        if (isset($this->doseSequence)) {
            if (null !== ($val = $this->doseSequence->getValue())) {
                $out->doseSequence = $val;
            }
            $ext = $this->doseSequence->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_doseSequence = $ext;
            }
        }
        if (isset($this->description)) {
            if (null !== ($val = $this->description->getValue())) {
                $out->description = $val;
            }
            $ext = $this->description->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_description = $ext;
            }
        }
        if (isset($this->authority)) {
            $out->authority = $this->authority;
        }
        if (isset($this->series)) {
            if (null !== ($val = $this->series->getValue())) {
                $out->series = $val;
            }
            $ext = $this->series->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_series = $ext;
            }
        }
        if (isset($this->seriesDoses)) {
            if (null !== ($val = $this->seriesDoses->getValue())) {
                $out->seriesDoses = $val;
            }
            $ext = $this->seriesDoses->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_seriesDoses = $ext;
            }
        }
        if (isset($this->targetDisease) && [] !== $this->targetDisease) {
            $out->targetDisease = $this->targetDisease;
        }
        if (isset($this->doseStatus)) {
            $out->doseStatus = $this->doseStatus;
        }
        if (isset($this->doseStatusReason)) {
            $out->doseStatusReason = $this->doseStatusReason;
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