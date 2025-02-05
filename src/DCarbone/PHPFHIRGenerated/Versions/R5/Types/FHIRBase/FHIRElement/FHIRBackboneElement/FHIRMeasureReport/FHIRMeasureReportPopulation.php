<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMeasureReport;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 5th, 2025 01:55+0000
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
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIntegerPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;

/**
 * The MeasureReport resource contains the results of the calculation of a measure;
 * and optionally a reference to the resources involved in that calculation.
 */
class FHIRMeasureReportPopulation extends FHIRBackboneElement
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_MEASURE_REPORT_DOT_POPULATION;

    /* class_default.php:50 */
    public const FIELD_LINK_ID = 'linkId';
    public const FIELD_LINK_ID_EXT = '_linkId';
    public const FIELD_CODE = 'code';
    public const FIELD_COUNT = 'count';
    public const FIELD_COUNT_EXT = '_count';
    public const FIELD_SUBJECT_RESULTS = 'subjectResults';
    public const FIELD_SUBJECT_REPORT = 'subjectReport';
    public const FIELD_SUBJECTS = 'subjects';

    /* class_default.php:69 */
    // The default validation rules for this type as defined in the FHIR schema used to generate this code.
    private const _FHIR_VALIDATION_RULES = [];

    /* class_default.php:98 */
    private array $_valueXMLLocations = [
        self::FIELD_LINK_ID => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_COUNT => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:114 */
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The population from the Measure that corresponds to this population in the
     * MeasureReport resource.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    protected FHIRString $linkId;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of the population.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $code;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The number of members of the population.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInteger 
     */
    protected FHIRInteger $count;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This element refers to a List of individual level MeasureReport resources, one
     * for each subject in this population.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference 
     */
    protected FHIRReference $subjectResults;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to an individual level MeasureReport resource for a member of the
     * population.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] 
     */
    protected array $subjectReport;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Optional Group identifying the individuals that make up the population.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference 
     */
    protected FHIRReference $subjects;

    /* constructor.php:61 */
    /**
     * FHIRMeasureReportPopulation Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $modifierExtension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $linkId
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $code
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInteger $count
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $subjectResults
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] $subjectReport
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $subjects
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|FHIRStringPrimitive|FHIRString $linkId = null,
                                null|FHIRCodeableConcept $code = null,
                                null|string|float|FHIRIntegerPrimitive|FHIRInteger $count = null,
                                null|FHIRReference $subjectResults = null,
                                null|iterable $subjectReport = null,
                                null|FHIRReference $subjects = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $linkId) {
            $this->setLinkId($linkId);
        }
        if (null !== $code) {
            $this->setCode($code);
        }
        if (null !== $count) {
            $this->setCount($count);
        }
        if (null !== $subjectResults) {
            $this->setSubjectResults($subjectResults);
        }
        if (null !== $subjectReport) {
            $this->setSubjectReport(...$subjectReport);
        }
        if (null !== $subjects) {
            $this->setSubjects($subjects);
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
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The population from the Measure that corresponds to this population in the
     * MeasureReport resource.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString
     */
    public function getLinkId(): null|FHIRString
    {
        return $this->linkId ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The population from the Measure that corresponds to this population in the
     * MeasureReport resource.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $linkId
     * @return static
     */
    public function setLinkId(null|string|FHIRStringPrimitive|FHIRString $linkId): self
    {
        if (null === $linkId) {
            unset($this->linkId);
            return $this;
        }
        if (!($linkId instanceof FHIRString)) {
            $linkId = new FHIRString(value: $linkId);
        }
        $this->linkId = $linkId;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of the population.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getCode(): null|FHIRCodeableConcept
    {
        return $this->code ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of the population.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $code
     * @return static
     */
    public function setCode(null|FHIRCodeableConcept $code): self
    {
        if (null === $code) {
            unset($this->code);
            return $this;
        }
        $this->code = $code;
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The number of members of the population.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInteger
     */
    public function getCount(): null|FHIRInteger
    {
        return $this->count ?? null;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The number of members of the population.
     *
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInteger $count
     * @return static
     */
    public function setCount(null|string|float|FHIRIntegerPrimitive|FHIRInteger $count): self
    {
        if (null === $count) {
            unset($this->count);
            return $this;
        }
        if (!($count instanceof FHIRInteger)) {
            $count = new FHIRInteger(value: $count);
        }
        $this->count = $count;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This element refers to a List of individual level MeasureReport resources, one
     * for each subject in this population.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getSubjectResults(): null|FHIRReference
    {
        return $this->subjectResults ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This element refers to a List of individual level MeasureReport resources, one
     * for each subject in this population.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $subjectResults
     * @return static
     */
    public function setSubjectResults(null|FHIRReference $subjectResults): self
    {
        if (null === $subjectResults) {
            unset($this->subjectResults);
            return $this;
        }
        $this->subjectResults = $subjectResults;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to an individual level MeasureReport resource for a member of the
     * population.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    public function getSubjectReport(): array
    {
        return $this->subjectReport ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference>
     */
    public function getSubjectReportIterator(): iterable
    {
        if (!isset($this->subjectReport)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->subjectReport);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to an individual level MeasureReport resource for a member of the
     * population.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $subjectReport
     * @return static
     */
    public function addSubjectReport(FHIRReference $subjectReport): self
    {
        if (!isset($this->subjectReport)) {
            $this->subjectReport = [];
        }
        $this->subjectReport[] = $subjectReport;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to an individual level MeasureReport resource for a member of the
     * population.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference ...$subjectReport
     * @return static
     */
    public function setSubjectReport(FHIRReference ...$subjectReport): self
    {
        if ([] === $subjectReport) {
            unset($this->subjectReport);
            return $this;
        }
        $this->subjectReport = $subjectReport;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Optional Group identifying the individuals that make up the population.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getSubjects(): null|FHIRReference
    {
        return $this->subjects ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Optional Group identifying the individuals that make up the population.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $subjects
     * @return static
     */
    public function setSubjects(null|FHIRReference $subjects): self
    {
        if (null === $subjects) {
            unset($this->subjects);
            return $this;
        }
        $this->subjects = $subjects;
        return $this;
    }

    /* class_default.php:199 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportPopulation $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportPopulation
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRMeasureReportPopulation)) {
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
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_LINK_ID === $cen) {
                $type->setLinkId(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CODE === $cen) {
                $type->setCode(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_COUNT === $cen) {
                $type->setCount(FHIRInteger::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SUBJECT_RESULTS === $cen) {
                $type->setSubjectResults(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SUBJECT_REPORT === $cen) {
                $type->addSubjectReport(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SUBJECTS === $cen) {
                $type->setSubjects(FHIRReference::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID]);
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_LINK_ID])) {
            if (isset($type->linkId)) {
                $type->linkId->setValue((string)$attributes[self::FIELD_LINK_ID]);
            } else {
                $type->setLinkId((string)$attributes[self::FIELD_LINK_ID]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_LINK_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_COUNT])) {
            if (isset($type->count)) {
                $type->count->setValue((string)$attributes[self::FIELD_COUNT]);
            } else {
                $type->setCount((string)$attributes[self::FIELD_COUNT]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_COUNT, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($this->linkId) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_LINK_ID]) {
            $xw->writeAttribute(self::FIELD_LINK_ID, $this->linkId->_getValueAsString());
        }
        if (isset($this->count) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_COUNT]) {
            $xw->writeAttribute(self::FIELD_COUNT, $this->count->_getValueAsString());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->linkId)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_LINK_ID]
                || $this->linkId->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_LINK_ID);
            $this->linkId->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_LINK_ID]);
            $xw->endElement();
        }
        if (isset($this->code)) {
            $xw->startElement(self::FIELD_CODE);
            $this->code->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->count)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_COUNT]
                || $this->count->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_COUNT);
            $this->count->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_COUNT]);
            $xw->endElement();
        }
        if (isset($this->subjectResults)) {
            $xw->startElement(self::FIELD_SUBJECT_RESULTS);
            $this->subjectResults->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->subjectReport)) {
            foreach ($this->subjectReport as $v) {
                $xw->startElement(self::FIELD_SUBJECT_REPORT);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->subjects)) {
            $xw->startElement(self::FIELD_SUBJECTS);
            $this->subjects->xmlSerialize($xw, $config);
            $xw->endElement();
        }
    }

    /**
     * @param \stdClass $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportPopulation $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportPopulation
     * @throws \Exception
     */
    public static function jsonUnserialize(\stdClass $json,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRMeasureReportPopulation)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json->linkId)
            || isset($json->_linkId)
            || property_exists($json, self::FIELD_LINK_ID)
            || property_exists($json, self::FIELD_LINK_ID_EXT)) {
            $v = $json->_linkId ?? new \stdClass();
            $v->value = $json->linkId ?? null;
            $type->setLinkId(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($json->code) || property_exists($json, self::FIELD_CODE)) {
            if (is_array($json->code)) {
                $type->setCode(FHIRCodeableConcept::jsonUnserialize(reset($json->code), $config));
            } else {
                $type->setCode(FHIRCodeableConcept::jsonUnserialize($json->code, $config));
            }
        }
        if (isset($json->count)
            || isset($json->_count)
            || property_exists($json, self::FIELD_COUNT)
            || property_exists($json, self::FIELD_COUNT_EXT)) {
            $v = $json->_count ?? new \stdClass();
            $v->value = $json->count ?? null;
            $type->setCount(FHIRInteger::jsonUnserialize($v, $config));
        }
        if (isset($json->subjectResults) || property_exists($json, self::FIELD_SUBJECT_RESULTS)) {
            if (is_array($json->subjectResults)) {
                $type->setSubjectResults(FHIRReference::jsonUnserialize(reset($json->subjectResults), $config));
            } else {
                $type->setSubjectResults(FHIRReference::jsonUnserialize($json->subjectResults, $config));
            }
        }
        if (isset($json->subjectReport) || property_exists($json, self::FIELD_SUBJECT_REPORT)) {
            if (is_object($json->subjectReport)) {
                $vals = [$json->subjectReport];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_SUBJECT_REPORT, true);
            } else {
                $vals = $json->subjectReport;
            }
            foreach($vals as $v) {
                $type->addSubjectReport(FHIRReference::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->subjects) || property_exists($json, self::FIELD_SUBJECTS)) {
            if (is_array($json->subjects)) {
                $type->setSubjects(FHIRReference::jsonUnserialize(reset($json->subjects), $config));
            } else {
                $type->setSubjects(FHIRReference::jsonUnserialize($json->subjects, $config));
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
        if (isset($this->linkId)) {
            if (null !== ($val = $this->linkId->getValue())) {
                $out->linkId = $val;
            }
            if ($this->linkId->_nonValueFieldDefined()) {
                $ext = $this->linkId->jsonSerialize();
                unset($ext->value);
                $out->_linkId = $ext;
            }
        }
        if (isset($this->code)) {
            $out->code = $this->code;
        }
        if (isset($this->count)) {
            if (null !== ($val = $this->count->getValue())) {
                $out->count = $val;
            }
            if ($this->count->_nonValueFieldDefined()) {
                $ext = $this->count->jsonSerialize();
                unset($ext->value);
                $out->_count = $ext;
            }
        }
        if (isset($this->subjectResults)) {
            $out->subjectResults = $this->subjectResults;
        }
        if (isset($this->subjectReport) && [] !== $this->subjectReport) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_SUBJECT_REPORT) && 1 === count($this->subjectReport)) {
                $out->subjectReport = $this->subjectReport[0];
            } else {
                $out->subjectReport = $this->subjectReport;
            }
        }
        if (isset($this->subjects)) {
            $out->subjects = $this->subjects;
        }
        return $out;
    }
}