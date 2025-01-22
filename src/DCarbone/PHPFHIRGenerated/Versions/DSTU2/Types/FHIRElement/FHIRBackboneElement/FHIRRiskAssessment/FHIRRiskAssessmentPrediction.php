<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRRiskAssessment;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 22nd, 2025 19:32+0000
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
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRDecimalPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDecimal;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRRange;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Version;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\VersionConstants;

/**
 * An assessment of the likely outcome(s) for a patient or other subject as well as
 * the likelihood of each outcome.
 */
class FHIRRiskAssessmentPrediction extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_RISK_ASSESSMENT_DOT_PREDICTION;


    public const FIELD_OUTCOME = 'outcome';
    public const FIELD_PROBABILITY_DECIMAL = 'probabilityDecimal';
    public const FIELD_PROBABILITY_DECIMAL_EXT = '_probabilityDecimal';
    public const FIELD_PROBABILITY_RANGE = 'probabilityRange';
    public const FIELD_PROBABILITY_CODEABLE_CONCEPT = 'probabilityCodeableConcept';
    public const FIELD_RELATIVE_RISK = 'relativeRisk';
    public const FIELD_RELATIVE_RISK_EXT = '_relativeRisk';
    public const FIELD_WHEN_PERIOD = 'whenPeriod';
    public const FIELD_WHEN_RANGE = 'whenRange';
    public const FIELD_RATIONALE = 'rationale';
    public const FIELD_RATIONALE_EXT = '_rationale';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * One of the potential outcomes for the patient (e.g. remission, death, a
     * particular condition).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $outcome;
    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * How likely is the outcome (in the specified timeframe).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDecimal 
     */
    protected FHIRDecimal $probabilityDecimal;
    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * How likely is the outcome (in the specified timeframe).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRRange 
     */
    protected FHIRRange $probabilityRange;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * How likely is the outcome (in the specified timeframe).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $probabilityCodeableConcept;
    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the risk for this particular subject (with their specific
     * characteristics) divided by the risk of the population in general. (Numbers
     * greater than 1 = higher risk than the population, numbers less than 1 = lower
     * risk.).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDecimal 
     */
    protected FHIRDecimal $relativeRisk;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the period of time or age range of the subject to which the specified
     * probability applies.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRPeriod 
     */
    protected FHIRPeriod $whenPeriod;
    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the period of time or age range of the subject to which the specified
     * probability applies.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRRange 
     */
    protected FHIRRange $whenRange;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Additional information explaining the basis for the prediction.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $rationale;

    /** Default validation map for fields in type RiskAssessment.Prediction */
    private const _DEFAULT_VALIDATION_RULES = [
        self::FIELD_ID => [
            Constants::VALIDATE_PATTERN => '/^[A-Za-z0-9\\-\\.]{1,64}$/',
        ],
        self::FIELD_OUTCOME => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /**
     * FHIRRiskAssessmentPrediction Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept $outcome
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDecimal $probabilityDecimal
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRRange $probabilityRange
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept $probabilityCodeableConcept
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDecimal $relativeRisk
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRPeriod $whenPeriod
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRRange $whenRange
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString $rationale
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRIdPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|FHIRCodeableConcept $outcome = null,
                                null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $probabilityDecimal = null,
                                null|FHIRRange $probabilityRange = null,
                                null|FHIRCodeableConcept $probabilityCodeableConcept = null,
                                null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $relativeRisk = null,
                                null|FHIRPeriod $whenPeriod = null,
                                null|FHIRRange $whenRange = null,
                                null|string|FHIRStringPrimitive|FHIRString $rationale = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $outcome) {
            $this->setOutcome($outcome);
        }
        if (null !== $probabilityDecimal) {
            $this->setProbabilityDecimal($probabilityDecimal);
        }
        if (null !== $probabilityRange) {
            $this->setProbabilityRange($probabilityRange);
        }
        if (null !== $probabilityCodeableConcept) {
            $this->setProbabilityCodeableConcept($probabilityCodeableConcept);
        }
        if (null !== $relativeRisk) {
            $this->setRelativeRisk($relativeRisk);
        }
        if (null !== $whenPeriod) {
            $this->setWhenPeriod($whenPeriod);
        }
        if (null !== $whenRange) {
            $this->setWhenRange($whenRange);
        }
        if (null !== $rationale) {
            $this->setRationale($rationale);
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * One of the potential outcomes for the patient (e.g. remission, death, a
     * particular condition).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getOutcome(): null|FHIRCodeableConcept
    {
        return $this->outcome ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * One of the potential outcomes for the patient (e.g. remission, death, a
     * particular condition).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept $outcome
     * @return static
     */
    public function setOutcome(null|FHIRCodeableConcept $outcome): self
    {
        if (null === $outcome) {
            unset($this->outcome);
            return $this;
        }
        $this->outcome = $outcome;
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * How likely is the outcome (in the specified timeframe).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDecimal
     */
    public function getProbabilityDecimal(): null|FHIRDecimal
    {
        return $this->probabilityDecimal ?? null;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * How likely is the outcome (in the specified timeframe).
     *
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDecimal $probabilityDecimal
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setProbabilityDecimal(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $probabilityDecimal,
                                          null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $probabilityDecimal) {
            unset($this->probabilityDecimal);
            return $this;
        }
        if (!($probabilityDecimal instanceof FHIRDecimal)) {
            $probabilityDecimal = new FHIRDecimal(value: $probabilityDecimal);
        }
        if (null !== $valueXMLLocation) {
            $probabilityDecimal->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $probabilityDecimal->_getValueXMLLocation()) {
            $probabilityDecimal->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->probabilityDecimal = $probabilityDecimal;
        return $this;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * How likely is the outcome (in the specified timeframe).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRRange
     */
    public function getProbabilityRange(): null|FHIRRange
    {
        return $this->probabilityRange ?? null;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * How likely is the outcome (in the specified timeframe).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRRange $probabilityRange
     * @return static
     */
    public function setProbabilityRange(null|FHIRRange $probabilityRange): self
    {
        if (null === $probabilityRange) {
            unset($this->probabilityRange);
            return $this;
        }
        $this->probabilityRange = $probabilityRange;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * How likely is the outcome (in the specified timeframe).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getProbabilityCodeableConcept(): null|FHIRCodeableConcept
    {
        return $this->probabilityCodeableConcept ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * How likely is the outcome (in the specified timeframe).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept $probabilityCodeableConcept
     * @return static
     */
    public function setProbabilityCodeableConcept(null|FHIRCodeableConcept $probabilityCodeableConcept): self
    {
        if (null === $probabilityCodeableConcept) {
            unset($this->probabilityCodeableConcept);
            return $this;
        }
        $this->probabilityCodeableConcept = $probabilityCodeableConcept;
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the risk for this particular subject (with their specific
     * characteristics) divided by the risk of the population in general. (Numbers
     * greater than 1 = higher risk than the population, numbers less than 1 = lower
     * risk.).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDecimal
     */
    public function getRelativeRisk(): null|FHIRDecimal
    {
        return $this->relativeRisk ?? null;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the risk for this particular subject (with their specific
     * characteristics) divided by the risk of the population in general. (Numbers
     * greater than 1 = higher risk than the population, numbers less than 1 = lower
     * risk.).
     *
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDecimal $relativeRisk
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setRelativeRisk(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $relativeRisk,
                                    null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $relativeRisk) {
            unset($this->relativeRisk);
            return $this;
        }
        if (!($relativeRisk instanceof FHIRDecimal)) {
            $relativeRisk = new FHIRDecimal(value: $relativeRisk);
        }
        if (null !== $valueXMLLocation) {
            $relativeRisk->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $relativeRisk->_getValueXMLLocation()) {
            $relativeRisk->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->relativeRisk = $relativeRisk;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the period of time or age range of the subject to which the specified
     * probability applies.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRPeriod
     */
    public function getWhenPeriod(): null|FHIRPeriod
    {
        return $this->whenPeriod ?? null;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the period of time or age range of the subject to which the specified
     * probability applies.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRPeriod $whenPeriod
     * @return static
     */
    public function setWhenPeriod(null|FHIRPeriod $whenPeriod): self
    {
        if (null === $whenPeriod) {
            unset($this->whenPeriod);
            return $this;
        }
        $this->whenPeriod = $whenPeriod;
        return $this;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the period of time or age range of the subject to which the specified
     * probability applies.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRRange
     */
    public function getWhenRange(): null|FHIRRange
    {
        return $this->whenRange ?? null;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the period of time or age range of the subject to which the specified
     * probability applies.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRRange $whenRange
     * @return static
     */
    public function setWhenRange(null|FHIRRange $whenRange): self
    {
        if (null === $whenRange) {
            unset($this->whenRange);
            return $this;
        }
        $this->whenRange = $whenRange;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Additional information explaining the basis for the prediction.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString
     */
    public function getRationale(): null|FHIRString
    {
        return $this->rationale ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Additional information explaining the basis for the prediction.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString $rationale
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setRationale(null|string|FHIRStringPrimitive|FHIRString $rationale,
                                 null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $rationale) {
            unset($this->rationale);
            return $this;
        }
        if (!($rationale instanceof FHIRString)) {
            $rationale = new FHIRString(value: $rationale);
        }
        if (null !== $valueXMLLocation) {
            $rationale->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $rationale->_getValueXMLLocation()) {
            $rationale->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->rationale = $rationale;
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
        if (null !== ($v = $this->getOutcome())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_OUTCOME] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_OUTCOME])) {
            $v = $this->getOutcome();
            foreach($validationRules[self::FIELD_OUTCOME] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_OUTCOME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OUTCOME])) {
                        $errs[self::FIELD_OUTCOME] = [];
                    }
                    $errs[self::FIELD_OUTCOME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PROBABILITY_DECIMAL])) {
            $v = $this->getProbabilityDecimal();
            foreach($validationRules[self::FIELD_PROBABILITY_DECIMAL] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PROBABILITY_DECIMAL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PROBABILITY_DECIMAL])) {
                        $errs[self::FIELD_PROBABILITY_DECIMAL] = [];
                    }
                    $errs[self::FIELD_PROBABILITY_DECIMAL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PROBABILITY_RANGE])) {
            $v = $this->getProbabilityRange();
            foreach($validationRules[self::FIELD_PROBABILITY_RANGE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PROBABILITY_RANGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PROBABILITY_RANGE])) {
                        $errs[self::FIELD_PROBABILITY_RANGE] = [];
                    }
                    $errs[self::FIELD_PROBABILITY_RANGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PROBABILITY_CODEABLE_CONCEPT])) {
            $v = $this->getProbabilityCodeableConcept();
            foreach($validationRules[self::FIELD_PROBABILITY_CODEABLE_CONCEPT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PROBABILITY_CODEABLE_CONCEPT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PROBABILITY_CODEABLE_CONCEPT])) {
                        $errs[self::FIELD_PROBABILITY_CODEABLE_CONCEPT] = [];
                    }
                    $errs[self::FIELD_PROBABILITY_CODEABLE_CONCEPT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RELATIVE_RISK])) {
            $v = $this->getRelativeRisk();
            foreach($validationRules[self::FIELD_RELATIVE_RISK] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_RELATIVE_RISK, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RELATIVE_RISK])) {
                        $errs[self::FIELD_RELATIVE_RISK] = [];
                    }
                    $errs[self::FIELD_RELATIVE_RISK][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_WHEN_PERIOD])) {
            $v = $this->getWhenPeriod();
            foreach($validationRules[self::FIELD_WHEN_PERIOD] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_WHEN_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_WHEN_PERIOD])) {
                        $errs[self::FIELD_WHEN_PERIOD] = [];
                    }
                    $errs[self::FIELD_WHEN_PERIOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_WHEN_RANGE])) {
            $v = $this->getWhenRange();
            foreach($validationRules[self::FIELD_WHEN_RANGE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_WHEN_RANGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_WHEN_RANGE])) {
                        $errs[self::FIELD_WHEN_RANGE] = [];
                    }
                    $errs[self::FIELD_WHEN_RANGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RATIONALE])) {
            $v = $this->getRationale();
            foreach($validationRules[self::FIELD_RATIONALE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_RATIONALE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RATIONALE])) {
                        $errs[self::FIELD_RATIONALE] = [];
                    }
                    $errs[self::FIELD_RATIONALE][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRRiskAssessment\FHIRRiskAssessmentPrediction $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRRiskAssessment\FHIRRiskAssessmentPrediction
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRRiskAssessmentPrediction)) {
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
            } else if (self::FIELD_OUTCOME === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setOutcome(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PROBABILITY_DECIMAL === $childName) {
                $v = new FHIRDecimal(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setProbabilityDecimal(FHIRDecimal::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PROBABILITY_RANGE === $childName) {
                $v = new FHIRRange();
                $type->setProbabilityRange(FHIRRange::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PROBABILITY_CODEABLE_CONCEPT === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setProbabilityCodeableConcept(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_RELATIVE_RISK === $childName) {
                $v = new FHIRDecimal(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setRelativeRisk(FHIRDecimal::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_WHEN_PERIOD === $childName) {
                $v = new FHIRPeriod();
                $type->setWhenPeriod(FHIRPeriod::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_WHEN_RANGE === $childName) {
                $v = new FHIRRange();
                $type->setWhenRange(FHIRRange::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_RATIONALE === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setRationale(FHIRString::xmlUnserialize($n, $v, $config));
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
        if (isset($attributes[self::FIELD_PROBABILITY_DECIMAL])) {
            $pt = $type->getProbabilityDecimal();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_PROBABILITY_DECIMAL]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setProbabilityDecimal(new FHIRDecimal(
                    value: (string)$attributes[self::FIELD_PROBABILITY_DECIMAL],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_RELATIVE_RISK])) {
            $pt = $type->getRelativeRisk();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_RELATIVE_RISK]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setRelativeRisk(new FHIRDecimal(
                    value: (string)$attributes[self::FIELD_RELATIVE_RISK],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_RATIONALE])) {
            $pt = $type->getRationale();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_RATIONALE]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setRationale(new FHIRString(
                    value: (string)$attributes[self::FIELD_RATIONALE],
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
            $xw->openRootNode('RiskAssessmentPrediction', $this->_getSourceXMLNS());
        }
        if (isset($this->probabilityDecimal) && $this->probabilityDecimal->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_PROBABILITY_DECIMAL, $this->probabilityDecimal->getValue()?->_getFormattedValue());
        }
        if (isset($this->relativeRisk) && $this->relativeRisk->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_RELATIVE_RISK, $this->relativeRisk->getValue()?->_getFormattedValue());
        }
        if (isset($this->rationale) && $this->rationale->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_RATIONALE, $this->rationale->getValue()?->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->outcome)) {
            $xw->startElement(self::FIELD_OUTCOME);
            $this->outcome->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->probabilityDecimal) && $this->probabilityDecimal->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_PROBABILITY_DECIMAL);
            $this->probabilityDecimal->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->probabilityRange)) {
            $xw->startElement(self::FIELD_PROBABILITY_RANGE);
            $this->probabilityRange->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->probabilityCodeableConcept)) {
            $xw->startElement(self::FIELD_PROBABILITY_CODEABLE_CONCEPT);
            $this->probabilityCodeableConcept->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->relativeRisk) && $this->relativeRisk->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_RELATIVE_RISK);
            $this->relativeRisk->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->whenPeriod)) {
            $xw->startElement(self::FIELD_WHEN_PERIOD);
            $this->whenPeriod->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->whenRange)) {
            $xw->startElement(self::FIELD_WHEN_RANGE);
            $this->whenRange->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->rationale) && $this->rationale->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_RATIONALE);
            $this->rationale->xmlSerialize($xw, $config);
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRRiskAssessment\FHIRRiskAssessmentPrediction $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRRiskAssessment\FHIRRiskAssessmentPrediction
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRRiskAssessmentPrediction)) {
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
        if (isset($json[self::FIELD_OUTCOME]) || array_key_exists(self::FIELD_OUTCOME, $json)) {
            $type->setOutcome(FHIRCodeableConcept::jsonUnserialize(
                json: $json[self::FIELD_OUTCOME],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_PROBABILITY_DECIMAL]) || isset($json[self::FIELD_PROBABILITY_DECIMAL_EXT]) || array_key_exists(self::FIELD_PROBABILITY_DECIMAL, $json) || array_key_exists(self::FIELD_PROBABILITY_DECIMAL_EXT, $json)) {
            $value = $json[self::FIELD_PROBABILITY_DECIMAL] ?? null;
            $ext = (array)($json[self::FIELD_PROBABILITY_DECIMAL_EXT] ?? []);
            $type->setProbabilityDecimal(FHIRDecimal::jsonUnserialize(
                json: [FHIRDecimal::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_PROBABILITY_RANGE]) || array_key_exists(self::FIELD_PROBABILITY_RANGE, $json)) {
            $type->setProbabilityRange(FHIRRange::jsonUnserialize(
                json: $json[self::FIELD_PROBABILITY_RANGE],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_PROBABILITY_CODEABLE_CONCEPT]) || array_key_exists(self::FIELD_PROBABILITY_CODEABLE_CONCEPT, $json)) {
            $type->setProbabilityCodeableConcept(FHIRCodeableConcept::jsonUnserialize(
                json: $json[self::FIELD_PROBABILITY_CODEABLE_CONCEPT],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_RELATIVE_RISK]) || isset($json[self::FIELD_RELATIVE_RISK_EXT]) || array_key_exists(self::FIELD_RELATIVE_RISK, $json) || array_key_exists(self::FIELD_RELATIVE_RISK_EXT, $json)) {
            $value = $json[self::FIELD_RELATIVE_RISK] ?? null;
            $ext = (array)($json[self::FIELD_RELATIVE_RISK_EXT] ?? []);
            $type->setRelativeRisk(FHIRDecimal::jsonUnserialize(
                json: [FHIRDecimal::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_WHEN_PERIOD]) || array_key_exists(self::FIELD_WHEN_PERIOD, $json)) {
            $type->setWhenPeriod(FHIRPeriod::jsonUnserialize(
                json: $json[self::FIELD_WHEN_PERIOD],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_WHEN_RANGE]) || array_key_exists(self::FIELD_WHEN_RANGE, $json)) {
            $type->setWhenRange(FHIRRange::jsonUnserialize(
                json: $json[self::FIELD_WHEN_RANGE],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_RATIONALE]) || isset($json[self::FIELD_RATIONALE_EXT]) || array_key_exists(self::FIELD_RATIONALE, $json) || array_key_exists(self::FIELD_RATIONALE_EXT, $json)) {
            $value = $json[self::FIELD_RATIONALE] ?? null;
            $ext = (array)($json[self::FIELD_RATIONALE_EXT] ?? []);
            $type->setRationale(FHIRString::jsonUnserialize(
                json: [FHIRString::FIELD_VALUE => $value] + $ext,
                config: $config,
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
        if (isset($this->outcome)) {
            $out->outcome = $this->outcome;
        }
        if (isset($this->probabilityDecimal)) {
            if (null !== ($val = $this->probabilityDecimal->getValue())) {
                $out->probabilityDecimal = $val;
            }
            $ext = $this->probabilityDecimal->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_probabilityDecimal = $ext;
            }
        }
        if (isset($this->probabilityRange)) {
            $out->probabilityRange = $this->probabilityRange;
        }
        if (isset($this->probabilityCodeableConcept)) {
            $out->probabilityCodeableConcept = $this->probabilityCodeableConcept;
        }
        if (isset($this->relativeRisk)) {
            if (null !== ($val = $this->relativeRisk->getValue())) {
                $out->relativeRisk = $val;
            }
            $ext = $this->relativeRisk->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_relativeRisk = $ext;
            }
        }
        if (isset($this->whenPeriod)) {
            $out->whenPeriod = $this->whenPeriod;
        }
        if (isset($this->whenRange)) {
            $out->whenRange = $this->whenRange;
        }
        if (isset($this->rationale)) {
            if (null !== ($val = $this->rationale->getValue())) {
                $out->rationale = $val;
            }
            $ext = $this->rationale->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_rationale = $ext;
            }
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