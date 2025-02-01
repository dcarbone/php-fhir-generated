<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent;

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
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRAdverseEventCausalityList;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAdverseEventCausality;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Version;
use DCarbone\PHPFHIRGenerated\Versions\STU3\VersionConstants;

/**
 * Actual or potential/avoided event causing unintended physical injury resulting
 * from or contributed to by medical care, a research study or other healthcare
 * setting factors that requires additional monitoring, treatment, or
 * hospitalization, or that results in death.
 */
class FHIRAdverseEventSuspectEntity extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_ADVERSE_EVENT_DOT_SUSPECT_ENTITY;

    /* class_default.php:47 */
    public const FIELD_INSTANCE = 'instance';
    public const FIELD_CAUSALITY = 'causality';
    public const FIELD_CAUSALITY_EXT = '_causality';
    public const FIELD_CAUSALITY_ASSESSMENT = 'causalityAssessment';
    public const FIELD_CAUSALITY_PRODUCT_RELATEDNESS = 'causalityProductRelatedness';
    public const FIELD_CAUSALITY_PRODUCT_RELATEDNESS_EXT = '_causalityProductRelatedness';
    public const FIELD_CAUSALITY_METHOD = 'causalityMethod';
    public const FIELD_CAUSALITY_AUTHOR = 'causalityAuthor';
    public const FIELD_CAUSALITY_RESULT = 'causalityResult';

    /* class_default.php:66 */
    private static array $_validationRules = [
        self::FIELD_INSTANCE => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /* class_default.php:91 */
    private array $_valueXMLLocations = [
        self::FIELD_CAUSALITY => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_CAUSALITY_PRODUCT_RELATEDNESS => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:107 */
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
    protected FHIRReference $instance;
    /**
     * TODO
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * causality1 | causality2.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAdverseEventCausality 
     */
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
    protected FHIRCodeableConcept $causalityResult;

    /* constructor.php:63 */
    /**
     * FHIRAdverseEventSuspectEntity Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension[] $modifierExtension
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
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setCausality(null|string|FHIRAdverseEventCausalityList|FHIRAdverseEventCausality $causality,
                                 ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $causality) {
            unset($this->causality);
            return $this;
        }
        if (!($causality instanceof FHIRAdverseEventCausality)) {
            $causality = new FHIRAdverseEventCausality(value: $causality);
        }
        $this->causality = $causality;
        if ($this->_valueXMLLocations[self::FIELD_CAUSALITY] !== $valueXMLLocation) {
            $this->_setCausalityValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the causality element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getCausalityValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_CAUSALITY];
    }

    /**
     * Set the location the "value" field of the causality element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setCausalityValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_CAUSALITY] = $valueXMLLocation;
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
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setCausalityProductRelatedness(null|string|FHIRStringPrimitive|FHIRString $causalityProductRelatedness,
                                                   ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $causalityProductRelatedness) {
            unset($this->causalityProductRelatedness);
            return $this;
        }
        if (!($causalityProductRelatedness instanceof FHIRString)) {
            $causalityProductRelatedness = new FHIRString(value: $causalityProductRelatedness);
        }
        $this->causalityProductRelatedness = $causalityProductRelatedness;
        if ($this->_valueXMLLocations[self::FIELD_CAUSALITY_PRODUCT_RELATEDNESS] !== $valueXMLLocation) {
            $this->_setCausalityProductRelatednessValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the causalityProductRelatedness element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getCausalityProductRelatednessValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_CAUSALITY_PRODUCT_RELATEDNESS];
    }

    /**
     * Set the location the "value" field of the causalityProductRelatedness element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setCausalityProductRelatednessValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_CAUSALITY_PRODUCT_RELATEDNESS] = $valueXMLLocation;
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
        if (null !== ($v = $this->getInstance())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_INSTANCE] = $fieldErrs;
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
        if (isset($validationRules[self::FIELD_CAUSALITY])) {
            $v = $this->getCausality();
            foreach($validationRules[self::FIELD_CAUSALITY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CAUSALITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CAUSALITY])) {
                        $errs[self::FIELD_CAUSALITY] = [];
                    }
                    $errs[self::FIELD_CAUSALITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CAUSALITY_ASSESSMENT])) {
            $v = $this->getCausalityAssessment();
            foreach($validationRules[self::FIELD_CAUSALITY_ASSESSMENT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CAUSALITY_ASSESSMENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CAUSALITY_ASSESSMENT])) {
                        $errs[self::FIELD_CAUSALITY_ASSESSMENT] = [];
                    }
                    $errs[self::FIELD_CAUSALITY_ASSESSMENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CAUSALITY_PRODUCT_RELATEDNESS])) {
            $v = $this->getCausalityProductRelatedness();
            foreach($validationRules[self::FIELD_CAUSALITY_PRODUCT_RELATEDNESS] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CAUSALITY_PRODUCT_RELATEDNESS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CAUSALITY_PRODUCT_RELATEDNESS])) {
                        $errs[self::FIELD_CAUSALITY_PRODUCT_RELATEDNESS] = [];
                    }
                    $errs[self::FIELD_CAUSALITY_PRODUCT_RELATEDNESS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CAUSALITY_METHOD])) {
            $v = $this->getCausalityMethod();
            foreach($validationRules[self::FIELD_CAUSALITY_METHOD] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CAUSALITY_METHOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CAUSALITY_METHOD])) {
                        $errs[self::FIELD_CAUSALITY_METHOD] = [];
                    }
                    $errs[self::FIELD_CAUSALITY_METHOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CAUSALITY_AUTHOR])) {
            $v = $this->getCausalityAuthor();
            foreach($validationRules[self::FIELD_CAUSALITY_AUTHOR] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CAUSALITY_AUTHOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CAUSALITY_AUTHOR])) {
                        $errs[self::FIELD_CAUSALITY_AUTHOR] = [];
                    }
                    $errs[self::FIELD_CAUSALITY_AUTHOR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CAUSALITY_RESULT])) {
            $v = $this->getCausalityResult();
            foreach($validationRules[self::FIELD_CAUSALITY_RESULT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CAUSALITY_RESULT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CAUSALITY_RESULT])) {
                        $errs[self::FIELD_CAUSALITY_RESULT] = [];
                    }
                    $errs[self::FIELD_CAUSALITY_RESULT][$rule] = $err;
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
                    $type->setId((string)$va, ValueXMLLocationEnum::ELEMENT_ATTRIBUTE);
                } else {
                    $type->setId((string)$ce, ValueXMLLocationEnum::ELEMENT_VALUE);
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
            $type->setId((string)$attributes[self::FIELD_ID], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_CAUSALITY])) {
            if (isset($type->causality)) {
                $type->causality->setValue((string)$attributes[self::FIELD_CAUSALITY]);
                $type->_setCausalityValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setCausality((string)$attributes[self::FIELD_CAUSALITY], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_CAUSALITY_PRODUCT_RELATEDNESS])) {
            if (isset($type->causalityProductRelatedness)) {
                $type->causalityProductRelatedness->setValue((string)$attributes[self::FIELD_CAUSALITY_PRODUCT_RELATEDNESS]);
                $type->_setCausalityProductRelatednessValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setCausalityProductRelatedness((string)$attributes[self::FIELD_CAUSALITY_PRODUCT_RELATEDNESS], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($this->causality) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_CAUSALITY]) {
            $xw->writeAttribute(self::FIELD_CAUSALITY, $this->causality->_getFormattedValue());
        }
        if (isset($this->causalityProductRelatedness) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_CAUSALITY_PRODUCT_RELATEDNESS]) {
            $xw->writeAttribute(self::FIELD_CAUSALITY_PRODUCT_RELATEDNESS, $this->causalityProductRelatedness->_getFormattedValue());
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
     * @param array $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventSuspectEntity $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventSuspectEntity
     * @throws \Exception
     */
    public static function jsonUnserialize(array $json,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRAdverseEventSuspectEntity)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json[self::FIELD_INSTANCE]) || array_key_exists(self::FIELD_INSTANCE, $json)) {
            $type->setInstance(FHIRReference::jsonUnserialize($json[self::FIELD_INSTANCE], $config));
        }
        if (isset($json[self::FIELD_CAUSALITY])
            || isset($json[self::FIELD_CAUSALITY_EXT])
            || array_key_exists(self::FIELD_CAUSALITY, $json)
            || array_key_exists(self::FIELD_CAUSALITY_EXT, $json)) {
            $value = $json[self::FIELD_CAUSALITY] ?? null;
            $type->setCausality(FHIRAdverseEventCausality::jsonUnserialize(
                (is_array($value) ? $value : [FHIRAdverseEventCausality::FIELD_VALUE => $value]) + ($json[self::FIELD_CAUSALITY_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_CAUSALITY_ASSESSMENT]) || array_key_exists(self::FIELD_CAUSALITY_ASSESSMENT, $json)) {
            $type->setCausalityAssessment(FHIRCodeableConcept::jsonUnserialize($json[self::FIELD_CAUSALITY_ASSESSMENT], $config));
        }
        if (isset($json[self::FIELD_CAUSALITY_PRODUCT_RELATEDNESS])
            || isset($json[self::FIELD_CAUSALITY_PRODUCT_RELATEDNESS_EXT])
            || array_key_exists(self::FIELD_CAUSALITY_PRODUCT_RELATEDNESS, $json)
            || array_key_exists(self::FIELD_CAUSALITY_PRODUCT_RELATEDNESS_EXT, $json)) {
            $value = $json[self::FIELD_CAUSALITY_PRODUCT_RELATEDNESS] ?? null;
            $type->setCausalityProductRelatedness(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_CAUSALITY_PRODUCT_RELATEDNESS_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_CAUSALITY_METHOD]) || array_key_exists(self::FIELD_CAUSALITY_METHOD, $json)) {
            $type->setCausalityMethod(FHIRCodeableConcept::jsonUnserialize($json[self::FIELD_CAUSALITY_METHOD], $config));
        }
        if (isset($json[self::FIELD_CAUSALITY_AUTHOR]) || array_key_exists(self::FIELD_CAUSALITY_AUTHOR, $json)) {
            $type->setCausalityAuthor(FHIRReference::jsonUnserialize($json[self::FIELD_CAUSALITY_AUTHOR], $config));
        }
        if (isset($json[self::FIELD_CAUSALITY_RESULT]) || array_key_exists(self::FIELD_CAUSALITY_RESULT, $json)) {
            $type->setCausalityResult(FHIRCodeableConcept::jsonUnserialize($json[self::FIELD_CAUSALITY_RESULT], $config));
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