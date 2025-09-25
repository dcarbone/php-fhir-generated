<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: September 25th, 2025 15:14+0000
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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */
use DCarbone\PHPFHIRGenerated\Constants;
use DCarbone\PHPFHIRGenerated\Encoding\JSONSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Rules\MinOccursRule;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRAdverseEventCausalityList;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAdverseEventCausality;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\VersionConstants;

/**
 * Actual or potential/avoided event causing unintended physical injury resulting
 * from or contributed to by medical care, a research study or other healthcare
 * setting factors that requires additional monitoring, treatment, or
 * hospitalization, or that results in death.
 */
#[\Attribute(\Attribute::TARGET_PROPERTY)]
class FHIRAdverseEventSuspectEntity extends FHIRBackboneElement
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_ADVERSE_EVENT_DOT_SUSPECT_ENTITY;

    /* class_default.php:56 */
    public const FIELD_INSTANCE = 'instance';
    public const FIELD_CAUSALITY = 'causality';
    public const FIELD_CAUSALITY_EXT = '_causality';
    public const FIELD_CAUSALITY_ASSESSMENT = 'causalityAssessment';
    public const FIELD_CAUSALITY_PRODUCT_RELATEDNESS = 'causalityProductRelatedness';
    public const FIELD_CAUSALITY_PRODUCT_RELATEDNESS_EXT = '_causalityProductRelatedness';
    public const FIELD_CAUSALITY_METHOD = 'causalityMethod';
    public const FIELD_CAUSALITY_AUTHOR = 'causalityAuthor';
    public const FIELD_CAUSALITY_RESULT = 'causalityResult';

    /* class_default.php:75 */
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_INSTANCE => [
            MinOccursRule::NAME => 1,
        ],
    ];

    /* class_default.php:96 */
    private array $_valueXMLLocations = [
        self::FIELD_CAUSALITY => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_CAUSALITY_PRODUCT_RELATEDNESS => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:112 */
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the actual instance of what caused the adverse event. May be a
     * substance, medication, medication administration, medication statement or a
     * device.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference 
     */
    #[FHIRReference]
    protected FHIRReference $instance;
    /**
     * TODO
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * causality1 | causality2.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAdverseEventCausality 
     */
    #[FHIRAdverseEventCausality]
    protected FHIRAdverseEventCausality $causality;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * assess1 | assess2.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept 
     */
    #[FHIRCodeableConcept]
    protected FHIRCodeableConcept $causalityAssessment;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * AdverseEvent.suspectEntity.causalityProductRelatedness.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString 
     */
    #[FHIRString]
    protected FHIRString $causalityProductRelatedness;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * method1 | method2.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept 
     */
    #[FHIRCodeableConcept]
    protected FHIRCodeableConcept $causalityMethod;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * AdverseEvent.suspectEntity.causalityAuthor.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference 
     */
    #[FHIRReference]
    protected FHIRReference $causalityAuthor;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * result1 | result2.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept 
     */
    #[FHIRCodeableConcept]
    protected FHIRCodeableConcept $causalityResult;

    /* constructor.php:61 */
    /**
     * FHIRAdverseEventSuspectEntity Constructor
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension> $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive $id
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension> $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $instance
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRAdverseEventCausalityList|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAdverseEventCausality $causality
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept $causalityAssessment
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $causalityProductRelatedness
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept $causalityMethod
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $causalityAuthor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept $causalityResult
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|FHIRReference $instance = null,
                                null|string|FHIRAdverseEventCausalityList|FHIRAdverseEventCausality $causality = null,
                                null|FHIRCodeableConcept $causalityAssessment = null,
                                null|string|FHIRStringPrimitive|FHIRString $causalityProductRelatedness = null,
                                null|FHIRCodeableConcept $causalityMethod = null,
                                null|FHIRReference $causalityAuthor = null,
                                null|FHIRCodeableConcept $causalityResult = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $instance) {
            $this->setInstance($instance);
        }
        if (null !== $causality) {
            $this->setCausality($causality);
        }
        if (null !== $causalityAssessment) {
            $this->setCausalityAssessment($causalityAssessment);
        }
        if (null !== $causalityProductRelatedness) {
            $this->setCausalityProductRelatedness($causalityProductRelatedness);
        }
        if (null !== $causalityMethod) {
            $this->setCausalityMethod($causalityMethod);
        }
        if (null !== $causalityAuthor) {
            $this->setCausalityAuthor($causalityAuthor);
        }
        if (null !== $causalityResult) {
            $this->setCausalityResult($causalityResult);
        }
    }

    /* class_default.php:145 */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:174 */
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the actual instance of what caused the adverse event. May be a
     * substance, medication, medication administration, medication statement or a
     * device.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference
     */
    public function getInstance(): null|FHIRReference
    {
        return $this->instance ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the actual instance of what caused the adverse event. May be a
     * substance, medication, medication administration, medication statement or a
     * device.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $instance
     * @return static
     */
    public function setInstance(null|FHIRReference $instance): self
    {
        if (null === $instance) {
            unset($this->instance);
            return $this;
        }
        $this->instance = $instance;
        return $this;
    }

    /**
     * TODO
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * causality1 | causality2.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAdverseEventCausality
     */
    public function getCausality(): null|FHIRAdverseEventCausality
    {
        return $this->causality ?? null;
    }

    /**
     * TODO
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * causality1 | causality2.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRAdverseEventCausalityList|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAdverseEventCausality $causality
     * @return static
     */
    public function setCausality(null|string|FHIRAdverseEventCausalityList|FHIRAdverseEventCausality $causality): self
    {
        if (null === $causality) {
            unset($this->causality);
            return $this;
        }
        if (!($causality instanceof FHIRAdverseEventCausality)) {
            $causality = new FHIRAdverseEventCausality(value: $causality);
        }
        $this->causality = $causality;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * assess1 | assess2.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getCausalityAssessment(): null|FHIRCodeableConcept
    {
        return $this->causalityAssessment ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * assess1 | assess2.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept $causalityAssessment
     * @return static
     */
    public function setCausalityAssessment(null|FHIRCodeableConcept $causalityAssessment): self
    {
        if (null === $causalityAssessment) {
            unset($this->causalityAssessment);
            return $this;
        }
        $this->causalityAssessment = $causalityAssessment;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * AdverseEvent.suspectEntity.causalityProductRelatedness.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString
     */
    public function getCausalityProductRelatedness(): null|FHIRString
    {
        return $this->causalityProductRelatedness ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * AdverseEvent.suspectEntity.causalityProductRelatedness.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $causalityProductRelatedness
     * @return static
     */
    public function setCausalityProductRelatedness(null|string|FHIRStringPrimitive|FHIRString $causalityProductRelatedness): self
    {
        if (null === $causalityProductRelatedness) {
            unset($this->causalityProductRelatedness);
            return $this;
        }
        if (!($causalityProductRelatedness instanceof FHIRString)) {
            $causalityProductRelatedness = new FHIRString(value: $causalityProductRelatedness);
        }
        $this->causalityProductRelatedness = $causalityProductRelatedness;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * method1 | method2.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getCausalityMethod(): null|FHIRCodeableConcept
    {
        return $this->causalityMethod ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * method1 | method2.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept $causalityMethod
     * @return static
     */
    public function setCausalityMethod(null|FHIRCodeableConcept $causalityMethod): self
    {
        if (null === $causalityMethod) {
            unset($this->causalityMethod);
            return $this;
        }
        $this->causalityMethod = $causalityMethod;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * AdverseEvent.suspectEntity.causalityAuthor.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference
     */
    public function getCausalityAuthor(): null|FHIRReference
    {
        return $this->causalityAuthor ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * AdverseEvent.suspectEntity.causalityAuthor.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $causalityAuthor
     * @return static
     */
    public function setCausalityAuthor(null|FHIRReference $causalityAuthor): self
    {
        if (null === $causalityAuthor) {
            unset($this->causalityAuthor);
            return $this;
        }
        $this->causalityAuthor = $causalityAuthor;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * result1 | result2.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getCausalityResult(): null|FHIRCodeableConcept
    {
        return $this->causalityResult ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * result1 | result2.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept $causalityResult
     * @return static
     */
    public function setCausalityResult(null|FHIRCodeableConcept $causalityResult): self
    {
        if (null === $causalityResult) {
            unset($this->causalityResult);
            return $this;
        }
        $this->causalityResult = $causalityResult;
        return $this;
    }

    /* class_default.php:201 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventSuspectEntity $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventSuspectEntity
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRAdverseEventSuspectEntity)) {
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
            } else if (self::FIELD_INSTANCE === $cen) {
                $type->setInstance(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CAUSALITY === $cen) {
                $type->setCausality(FHIRAdverseEventCausality::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CAUSALITY_ASSESSMENT === $cen) {
                $type->setCausalityAssessment(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CAUSALITY_PRODUCT_RELATEDNESS === $cen) {
                $type->setCausalityProductRelatedness(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CAUSALITY_METHOD === $cen) {
                $type->setCausalityMethod(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CAUSALITY_AUTHOR === $cen) {
                $type->setCausalityAuthor(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CAUSALITY_RESULT === $cen) {
                $type->setCausalityResult(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID]);
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_CAUSALITY])) {
            if (isset($type->causality)) {
                $type->causality->setValue((string)$attributes[self::FIELD_CAUSALITY]);
            } else {
                $type->setCausality((string)$attributes[self::FIELD_CAUSALITY]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_CAUSALITY, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_CAUSALITY_PRODUCT_RELATEDNESS])) {
            if (isset($type->causalityProductRelatedness)) {
                $type->causalityProductRelatedness->setValue((string)$attributes[self::FIELD_CAUSALITY_PRODUCT_RELATEDNESS]);
            } else {
                $type->setCausalityProductRelatedness((string)$attributes[self::FIELD_CAUSALITY_PRODUCT_RELATEDNESS]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_CAUSALITY_PRODUCT_RELATEDNESS, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($this->causality) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_CAUSALITY]) {
            $xw->writeAttribute(self::FIELD_CAUSALITY, $this->causality->_getValueAsString());
        }
        if (isset($this->causalityProductRelatedness) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_CAUSALITY_PRODUCT_RELATEDNESS]) {
            $xw->writeAttribute(self::FIELD_CAUSALITY_PRODUCT_RELATEDNESS, $this->causalityProductRelatedness->_getValueAsString());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->instance)) {
            $xw->startElement(self::FIELD_INSTANCE);
            $this->instance->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->causality)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_CAUSALITY]
                || $this->causality->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_CAUSALITY);
            $this->causality->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_CAUSALITY]);
            $xw->endElement();
        }
        if (isset($this->causalityAssessment)) {
            $xw->startElement(self::FIELD_CAUSALITY_ASSESSMENT);
            $this->causalityAssessment->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->causalityProductRelatedness)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_CAUSALITY_PRODUCT_RELATEDNESS]
                || $this->causalityProductRelatedness->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_CAUSALITY_PRODUCT_RELATEDNESS);
            $this->causalityProductRelatedness->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_CAUSALITY_PRODUCT_RELATEDNESS]);
            $xw->endElement();
        }
        if (isset($this->causalityMethod)) {
            $xw->startElement(self::FIELD_CAUSALITY_METHOD);
            $this->causalityMethod->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->causalityAuthor)) {
            $xw->startElement(self::FIELD_CAUSALITY_AUTHOR);
            $this->causalityAuthor->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->causalityResult)) {
            $xw->startElement(self::FIELD_CAUSALITY_RESULT);
            $this->causalityResult->xmlSerialize($xw, $config);
            $xw->endElement();
        }
    }

    /**
     * @param \stdClass $decoded
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventSuspectEntity $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventSuspectEntity
     * @throws \Exception
     */
    public static function jsonUnserialize(\stdClass $decoded,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            if (isset($decoded->resourceType) && $decoded->resourceType !== static::FHIR_TYPE_NAME) {
                throw new \DomainException(sprintf(
                    '%s::jsonUnserialize - Cannot unmarshal data for resource type "%s" into this type.',
                    ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                    $decoded->resourceType,
                ));
            }
            $type = new static();
        } else if (!($type instanceof FHIRAdverseEventSuspectEntity)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($decoded, $config, $type); 
        if (isset($decoded->instance) || property_exists($decoded, self::FIELD_INSTANCE)) {
            if (is_array($decoded->instance)) {
                $type->setInstance(FHIRReference::jsonUnserialize(reset($decoded->instance), $config));
            } else {
                $type->setInstance(FHIRReference::jsonUnserialize($decoded->instance, $config));
            }
        }
        if (isset($decoded->causality)
            || isset($decoded->_causality)
            || property_exists($decoded, self::FIELD_CAUSALITY)
            || property_exists($decoded, self::FIELD_CAUSALITY_EXT)) {
            $v = $decoded->_causality ?? new \stdClass();
            $v->value = $decoded->causality ?? null;
            $type->setCausality(FHIRAdverseEventCausality::jsonUnserialize($v, $config));
        }
        if (isset($decoded->causalityAssessment) || property_exists($decoded, self::FIELD_CAUSALITY_ASSESSMENT)) {
            if (is_array($decoded->causalityAssessment)) {
                $type->setCausalityAssessment(FHIRCodeableConcept::jsonUnserialize(reset($decoded->causalityAssessment), $config));
            } else {
                $type->setCausalityAssessment(FHIRCodeableConcept::jsonUnserialize($decoded->causalityAssessment, $config));
            }
        }
        if (isset($decoded->causalityProductRelatedness)
            || isset($decoded->_causalityProductRelatedness)
            || property_exists($decoded, self::FIELD_CAUSALITY_PRODUCT_RELATEDNESS)
            || property_exists($decoded, self::FIELD_CAUSALITY_PRODUCT_RELATEDNESS_EXT)) {
            $v = $decoded->_causalityProductRelatedness ?? new \stdClass();
            $v->value = $decoded->causalityProductRelatedness ?? null;
            $type->setCausalityProductRelatedness(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($decoded->causalityMethod) || property_exists($decoded, self::FIELD_CAUSALITY_METHOD)) {
            if (is_array($decoded->causalityMethod)) {
                $type->setCausalityMethod(FHIRCodeableConcept::jsonUnserialize(reset($decoded->causalityMethod), $config));
            } else {
                $type->setCausalityMethod(FHIRCodeableConcept::jsonUnserialize($decoded->causalityMethod, $config));
            }
        }
        if (isset($decoded->causalityAuthor) || property_exists($decoded, self::FIELD_CAUSALITY_AUTHOR)) {
            if (is_array($decoded->causalityAuthor)) {
                $type->setCausalityAuthor(FHIRReference::jsonUnserialize(reset($decoded->causalityAuthor), $config));
            } else {
                $type->setCausalityAuthor(FHIRReference::jsonUnserialize($decoded->causalityAuthor, $config));
            }
        }
        if (isset($decoded->causalityResult) || property_exists($decoded, self::FIELD_CAUSALITY_RESULT)) {
            if (is_array($decoded->causalityResult)) {
                $type->setCausalityResult(FHIRCodeableConcept::jsonUnserialize(reset($decoded->causalityResult), $config));
            } else {
                $type->setCausalityResult(FHIRCodeableConcept::jsonUnserialize($decoded->causalityResult, $config));
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
        if (isset($this->instance)) {
            $out->instance = $this->instance;
        }
        if (isset($this->causality)) {
            if (null !== ($val = $this->causality->getValue())) {
                $out->causality = $val;
            }
            if ($this->causality->_nonValueFieldDefined()) {
                $ext = $this->causality->jsonSerialize();
                unset($ext->value);
                $out->_causality = $ext;
            }
        }
        if (isset($this->causalityAssessment)) {
            $out->causalityAssessment = $this->causalityAssessment;
        }
        if (isset($this->causalityProductRelatedness)) {
            if (null !== ($val = $this->causalityProductRelatedness->getValue())) {
                $out->causalityProductRelatedness = $val;
            }
            if ($this->causalityProductRelatedness->_nonValueFieldDefined()) {
                $ext = $this->causalityProductRelatedness->jsonSerialize();
                unset($ext->value);
                $out->_causalityProductRelatedness = $ext;
            }
        }
        if (isset($this->causalityMethod)) {
            $out->causalityMethod = $this->causalityMethod;
        }
        if (isset($this->causalityAuthor)) {
            $out->causalityAuthor = $this->causalityAuthor;
        }
        if (isset($this->causalityResult)) {
            $out->causalityResult = $this->causalityResult;
        }
        return $out;
    }
}