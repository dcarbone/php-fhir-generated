<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 1st, 2025 16:35+0000
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
 *   Generated on Sat, May 28, 2022 12:47+1000 for FHIR v4.3.0
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
use DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRAdministrativeGenderEnum;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRObservationRangeCategoryEnum;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRAdministrativeGender;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRObservationRangeCategory;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRRange;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Version;
use DCarbone\PHPFHIRGenerated\Versions\R4B\VersionConstants;

/**
 * Set of definitional characteristics for a kind of observation or measurement
 * produced or consumed by an orderable health care service.
 */
class FHIRObservationDefinitionQualifiedInterval extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_OBSERVATION_DEFINITION_DOT_QUALIFIED_INTERVAL;

    /* class_default.php:47 */
    public const FIELD_CATEGORY = 'category';
    public const FIELD_CATEGORY_EXT = '_category';
    public const FIELD_RANGE = 'range';
    public const FIELD_CONTEXT = 'context';
    public const FIELD_APPLIES_TO = 'appliesTo';
    public const FIELD_GENDER = 'gender';
    public const FIELD_GENDER_EXT = '_gender';
    public const FIELD_AGE = 'age';
    public const FIELD_GESTATIONAL_AGE = 'gestationalAge';
    public const FIELD_CONDITION = 'condition';
    public const FIELD_CONDITION_EXT = '_condition';

    /* class_default.php:66 */
    private static array $_validationRules = [];

    /* class_default.php:91 */
    private array $_valueXMLLocations = [
        self::FIELD_CATEGORY => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_GENDER => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_CONDITION => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:107 */
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The category of interval of values for continuous or ordinal observations
     * conforming to this ObservationDefinition.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRObservationRangeCategory 
     */
    protected FHIRObservationRangeCategory $category;
    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The low and high values determining the interval. There may be only one of the
     * two.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRRange 
     */
    protected FHIRRange $range;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Codes to indicate the health context the range applies to. For example, the
     * normal or therapeutic range.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $context;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Codes to indicate the target population this reference range applies to.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept[] 
     */
    protected array $appliesTo;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Sex of the population the range applies to.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRAdministrativeGender 
     */
    protected FHIRAdministrativeGender $gender;
    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The age at which this reference range is applicable. This is a neonatal age
     * (e.g. number of weeks at term) if the meaning says so.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRRange 
     */
    protected FHIRRange $age;
    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The gestational age to which this reference range is applicable, in the context
     * of pregnancy.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRRange 
     */
    protected FHIRRange $gestationalAge;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Text based condition for which the reference range is valid.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $condition;

    /* constructor.php:63 */
    /**
     * FHIRObservationDefinitionQualifiedInterval Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRObservationRangeCategoryEnum|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRObservationRangeCategory $category
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRRange $range
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $context
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept[] $appliesTo
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRAdministrativeGenderEnum|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRAdministrativeGender $gender
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRRange $age
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRRange $gestationalAge
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $condition
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|FHIRObservationRangeCategoryEnum|FHIRObservationRangeCategory $category = null,
                                null|FHIRRange $range = null,
                                null|FHIRCodeableConcept $context = null,
                                null|iterable $appliesTo = null,
                                null|string|FHIRAdministrativeGenderEnum|FHIRAdministrativeGender $gender = null,
                                null|FHIRRange $age = null,
                                null|FHIRRange $gestationalAge = null,
                                null|string|FHIRStringPrimitive|FHIRString $condition = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $category) {
            $this->setCategory($category);
        }
        if (null !== $range) {
            $this->setRange($range);
        }
        if (null !== $context) {
            $this->setContext($context);
        }
        if (null !== $appliesTo) {
            $this->setAppliesTo(...$appliesTo);
        }
        if (null !== $gender) {
            $this->setGender($gender);
        }
        if (null !== $age) {
            $this->setAge($age);
        }
        if (null !== $gestationalAge) {
            $this->setGestationalAge($gestationalAge);
        }
        if (null !== $condition) {
            $this->setCondition($condition);
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The category of interval of values for continuous or ordinal observations
     * conforming to this ObservationDefinition.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRObservationRangeCategory
     */
    public function getCategory(): null|FHIRObservationRangeCategory
    {
        return $this->category ?? null;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The category of interval of values for continuous or ordinal observations
     * conforming to this ObservationDefinition.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRObservationRangeCategoryEnum|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRObservationRangeCategory $category
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setCategory(null|string|FHIRObservationRangeCategoryEnum|FHIRObservationRangeCategory $category,
                                ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $category) {
            unset($this->category);
            return $this;
        }
        if (!($category instanceof FHIRObservationRangeCategory)) {
            $category = new FHIRObservationRangeCategory(value: $category);
        }
        $this->category = $category;
        if ($this->_valueXMLLocations[self::FIELD_CATEGORY] !== $valueXMLLocation) {
            $this->_setCategoryValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the category element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getCategoryValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_CATEGORY];
    }

    /**
     * Set the location the "value" field of the category element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setCategoryValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_CATEGORY] = $valueXMLLocation;
        return $this;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The low and high values determining the interval. There may be only one of the
     * two.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRRange
     */
    public function getRange(): null|FHIRRange
    {
        return $this->range ?? null;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The low and high values determining the interval. There may be only one of the
     * two.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRRange $range
     * @return static
     */
    public function setRange(null|FHIRRange $range): self
    {
        if (null === $range) {
            unset($this->range);
            return $this;
        }
        $this->range = $range;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Codes to indicate the health context the range applies to. For example, the
     * normal or therapeutic range.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getContext(): null|FHIRCodeableConcept
    {
        return $this->context ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Codes to indicate the health context the range applies to. For example, the
     * normal or therapeutic range.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $context
     * @return static
     */
    public function setContext(null|FHIRCodeableConcept $context): self
    {
        if (null === $context) {
            unset($this->context);
            return $this;
        }
        $this->context = $context;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Codes to indicate the target population this reference range applies to.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept[]
     */
    public function getAppliesTo(): array
    {
        return $this->appliesTo ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept>
     */
    public function getAppliesToIterator(): iterable
    {
        if (!isset($this->appliesTo)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->appliesTo);
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Codes to indicate the target population this reference range applies to.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $appliesTo
     * @return static
     */
    public function addAppliesTo(FHIRCodeableConcept $appliesTo): self
    {
        if (!isset($this->appliesTo)) {
            $this->appliesTo = [];
        }
        $this->appliesTo[] = $appliesTo;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Codes to indicate the target population this reference range applies to.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept ...$appliesTo
     * @return static
     */
    public function setAppliesTo(FHIRCodeableConcept ...$appliesTo): self
    {
        if ([] === $appliesTo) {
            unset($this->appliesTo);
            return $this;
        }
        $this->appliesTo = $appliesTo;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Sex of the population the range applies to.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRAdministrativeGender
     */
    public function getGender(): null|FHIRAdministrativeGender
    {
        return $this->gender ?? null;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Sex of the population the range applies to.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRAdministrativeGenderEnum|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRAdministrativeGender $gender
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setGender(null|string|FHIRAdministrativeGenderEnum|FHIRAdministrativeGender $gender,
                              ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $gender) {
            unset($this->gender);
            return $this;
        }
        if (!($gender instanceof FHIRAdministrativeGender)) {
            $gender = new FHIRAdministrativeGender(value: $gender);
        }
        $this->gender = $gender;
        if ($this->_valueXMLLocations[self::FIELD_GENDER] !== $valueXMLLocation) {
            $this->_setGenderValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the gender element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getGenderValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_GENDER];
    }

    /**
     * Set the location the "value" field of the gender element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setGenderValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_GENDER] = $valueXMLLocation;
        return $this;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The age at which this reference range is applicable. This is a neonatal age
     * (e.g. number of weeks at term) if the meaning says so.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRRange
     */
    public function getAge(): null|FHIRRange
    {
        return $this->age ?? null;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The age at which this reference range is applicable. This is a neonatal age
     * (e.g. number of weeks at term) if the meaning says so.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRRange $age
     * @return static
     */
    public function setAge(null|FHIRRange $age): self
    {
        if (null === $age) {
            unset($this->age);
            return $this;
        }
        $this->age = $age;
        return $this;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The gestational age to which this reference range is applicable, in the context
     * of pregnancy.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRRange
     */
    public function getGestationalAge(): null|FHIRRange
    {
        return $this->gestationalAge ?? null;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The gestational age to which this reference range is applicable, in the context
     * of pregnancy.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRRange $gestationalAge
     * @return static
     */
    public function setGestationalAge(null|FHIRRange $gestationalAge): self
    {
        if (null === $gestationalAge) {
            unset($this->gestationalAge);
            return $this;
        }
        $this->gestationalAge = $gestationalAge;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Text based condition for which the reference range is valid.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString
     */
    public function getCondition(): null|FHIRString
    {
        return $this->condition ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Text based condition for which the reference range is valid.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $condition
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setCondition(null|string|FHIRStringPrimitive|FHIRString $condition,
                                 ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $condition) {
            unset($this->condition);
            return $this;
        }
        if (!($condition instanceof FHIRString)) {
            $condition = new FHIRString(value: $condition);
        }
        $this->condition = $condition;
        if ($this->_valueXMLLocations[self::FIELD_CONDITION] !== $valueXMLLocation) {
            $this->_setConditionValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the condition element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getConditionValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_CONDITION];
    }

    /**
     * Set the location the "value" field of the condition element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setConditionValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_CONDITION] = $valueXMLLocation;
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
        if (isset($validationRules[self::FIELD_CATEGORY])) {
            $v = $this->getCategory();
            foreach($validationRules[self::FIELD_CATEGORY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CATEGORY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CATEGORY])) {
                        $errs[self::FIELD_CATEGORY] = [];
                    }
                    $errs[self::FIELD_CATEGORY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RANGE])) {
            $v = $this->getRange();
            foreach($validationRules[self::FIELD_RANGE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_RANGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RANGE])) {
                        $errs[self::FIELD_RANGE] = [];
                    }
                    $errs[self::FIELD_RANGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTEXT])) {
            $v = $this->getContext();
            foreach($validationRules[self::FIELD_CONTEXT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CONTEXT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTEXT])) {
                        $errs[self::FIELD_CONTEXT] = [];
                    }
                    $errs[self::FIELD_CONTEXT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_APPLIES_TO])) {
            $v = $this->getAppliesTo();
            foreach($validationRules[self::FIELD_APPLIES_TO] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_APPLIES_TO, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_APPLIES_TO])) {
                        $errs[self::FIELD_APPLIES_TO] = [];
                    }
                    $errs[self::FIELD_APPLIES_TO][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_GENDER])) {
            $v = $this->getGender();
            foreach($validationRules[self::FIELD_GENDER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_GENDER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_GENDER])) {
                        $errs[self::FIELD_GENDER] = [];
                    }
                    $errs[self::FIELD_GENDER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AGE])) {
            $v = $this->getAge();
            foreach($validationRules[self::FIELD_AGE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_AGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AGE])) {
                        $errs[self::FIELD_AGE] = [];
                    }
                    $errs[self::FIELD_AGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_GESTATIONAL_AGE])) {
            $v = $this->getGestationalAge();
            foreach($validationRules[self::FIELD_GESTATIONAL_AGE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_GESTATIONAL_AGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_GESTATIONAL_AGE])) {
                        $errs[self::FIELD_GESTATIONAL_AGE] = [];
                    }
                    $errs[self::FIELD_GESTATIONAL_AGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONDITION])) {
            $v = $this->getCondition();
            foreach($validationRules[self::FIELD_CONDITION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CONDITION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONDITION])) {
                        $errs[self::FIELD_CONDITION] = [];
                    }
                    $errs[self::FIELD_CONDITION][$rule] = $err;
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

    /* class_default.php:212 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition\FHIRObservationDefinitionQualifiedInterval $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition\FHIRObservationDefinitionQualifiedInterval
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRObservationDefinitionQualifiedInterval)) {
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
            } else if (self::FIELD_CATEGORY === $cen) {
                $type->setCategory(FHIRObservationRangeCategory::xmlUnserialize($ce, $config));
            } else if (self::FIELD_RANGE === $cen) {
                $type->setRange(FHIRRange::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CONTEXT === $cen) {
                $type->setContext(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_APPLIES_TO === $cen) {
                $type->addAppliesTo(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_GENDER === $cen) {
                $type->setGender(FHIRAdministrativeGender::xmlUnserialize($ce, $config));
            } else if (self::FIELD_AGE === $cen) {
                $type->setAge(FHIRRange::xmlUnserialize($ce, $config));
            } else if (self::FIELD_GESTATIONAL_AGE === $cen) {
                $type->setGestationalAge(FHIRRange::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CONDITION === $cen) {
                $type->setCondition(FHIRString::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_CATEGORY])) {
            if (isset($type->category)) {
                $type->category->setValue((string)$attributes[self::FIELD_CATEGORY]);
                $type->_setCategoryValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setCategory((string)$attributes[self::FIELD_CATEGORY], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_GENDER])) {
            if (isset($type->gender)) {
                $type->gender->setValue((string)$attributes[self::FIELD_GENDER]);
                $type->_setGenderValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setGender((string)$attributes[self::FIELD_GENDER], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_CONDITION])) {
            if (isset($type->condition)) {
                $type->condition->setValue((string)$attributes[self::FIELD_CONDITION]);
                $type->_setConditionValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setCondition((string)$attributes[self::FIELD_CONDITION], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($this->category) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_CATEGORY]) {
            $xw->writeAttribute(self::FIELD_CATEGORY, $this->category->_getFormattedValue());
        }
        if (isset($this->gender) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_GENDER]) {
            $xw->writeAttribute(self::FIELD_GENDER, $this->gender->_getFormattedValue());
        }
        if (isset($this->condition) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_CONDITION]) {
            $xw->writeAttribute(self::FIELD_CONDITION, $this->condition->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->category)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_CATEGORY]
                || $this->category->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_CATEGORY);
            $this->category->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_CATEGORY]);
            $xw->endElement();
        }
        if (isset($this->range)) {
            $xw->startElement(self::FIELD_RANGE);
            $this->range->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->context)) {
            $xw->startElement(self::FIELD_CONTEXT);
            $this->context->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->appliesTo)) {
            foreach ($this->appliesTo as $v) {
                $xw->startElement(self::FIELD_APPLIES_TO);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->gender)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_GENDER]
                || $this->gender->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_GENDER);
            $this->gender->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_GENDER]);
            $xw->endElement();
        }
        if (isset($this->age)) {
            $xw->startElement(self::FIELD_AGE);
            $this->age->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->gestationalAge)) {
            $xw->startElement(self::FIELD_GESTATIONAL_AGE);
            $this->gestationalAge->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->condition)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_CONDITION]
                || $this->condition->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_CONDITION);
            $this->condition->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_CONDITION]);
            $xw->endElement();
        }
    }

    /**
     * @param array $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition\FHIRObservationDefinitionQualifiedInterval $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition\FHIRObservationDefinitionQualifiedInterval
     * @throws \Exception
     */
    public static function jsonUnserialize(array $json,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRObservationDefinitionQualifiedInterval)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json[self::FIELD_CATEGORY])
            || isset($json[self::FIELD_CATEGORY_EXT])
            || array_key_exists(self::FIELD_CATEGORY, $json)
            || array_key_exists(self::FIELD_CATEGORY_EXT, $json)) {
            $value = $json[self::FIELD_CATEGORY] ?? null;
            $type->setCategory(FHIRObservationRangeCategory::jsonUnserialize(
                (is_array($value) ? $value : [FHIRObservationRangeCategory::FIELD_VALUE => $value]) + ($json[self::FIELD_CATEGORY_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_RANGE]) || array_key_exists(self::FIELD_RANGE, $json)) {
            $type->setRange(FHIRRange::jsonUnserialize($json[self::FIELD_RANGE], $config));
        }
        if (isset($json[self::FIELD_CONTEXT]) || array_key_exists(self::FIELD_CONTEXT, $json)) {
            $type->setContext(FHIRCodeableConcept::jsonUnserialize($json[self::FIELD_CONTEXT], $config));
        }
        if (isset($json[self::FIELD_APPLIES_TO]) || array_key_exists(self::FIELD_APPLIES_TO, $json)) {
            $vs = $json[self::FIELD_APPLIES_TO];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addAppliesTo(FHIRCodeableConcept::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_GENDER])
            || isset($json[self::FIELD_GENDER_EXT])
            || array_key_exists(self::FIELD_GENDER, $json)
            || array_key_exists(self::FIELD_GENDER_EXT, $json)) {
            $value = $json[self::FIELD_GENDER] ?? null;
            $type->setGender(FHIRAdministrativeGender::jsonUnserialize(
                (is_array($value) ? $value : [FHIRAdministrativeGender::FIELD_VALUE => $value]) + ($json[self::FIELD_GENDER_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_AGE]) || array_key_exists(self::FIELD_AGE, $json)) {
            $type->setAge(FHIRRange::jsonUnserialize($json[self::FIELD_AGE], $config));
        }
        if (isset($json[self::FIELD_GESTATIONAL_AGE]) || array_key_exists(self::FIELD_GESTATIONAL_AGE, $json)) {
            $type->setGestationalAge(FHIRRange::jsonUnserialize($json[self::FIELD_GESTATIONAL_AGE], $config));
        }
        if (isset($json[self::FIELD_CONDITION])
            || isset($json[self::FIELD_CONDITION_EXT])
            || array_key_exists(self::FIELD_CONDITION, $json)
            || array_key_exists(self::FIELD_CONDITION_EXT, $json)) {
            $value = $json[self::FIELD_CONDITION] ?? null;
            $type->setCondition(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_CONDITION_EXT] ?? []),
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
        if (isset($this->category)) {
            if (null !== ($val = $this->category->getValue())) {
                $out->category = $val;
            }
            if ($this->category->_nonValueFieldDefined()) {
                $ext = $this->category->jsonSerialize();
                unset($ext->value);
                $out->_category = $ext;
            }
        }
        if (isset($this->range)) {
            $out->range = $this->range;
        }
        if (isset($this->context)) {
            $out->context = $this->context;
        }
        if (isset($this->appliesTo) && [] !== $this->appliesTo) {
            $out->appliesTo = $this->appliesTo;
        }
        if (isset($this->gender)) {
            if (null !== ($val = $this->gender->getValue())) {
                $out->gender = $val;
            }
            if ($this->gender->_nonValueFieldDefined()) {
                $ext = $this->gender->jsonSerialize();
                unset($ext->value);
                $out->_gender = $ext;
            }
        }
        if (isset($this->age)) {
            $out->age = $this->age;
        }
        if (isset($this->gestationalAge)) {
            $out->gestationalAge = $this->gestationalAge;
        }
        if (isset($this->condition)) {
            if (null !== ($val = $this->condition->getValue())) {
                $out->condition = $val;
            }
            if ($this->condition->_nonValueFieldDefined()) {
                $ext = $this->condition->jsonSerialize();
                unset($ext->value);
                $out->_condition = $ext;
            }
        }
        return $out;
    }
}