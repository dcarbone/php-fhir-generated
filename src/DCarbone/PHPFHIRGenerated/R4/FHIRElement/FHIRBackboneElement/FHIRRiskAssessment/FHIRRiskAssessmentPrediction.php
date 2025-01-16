<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRRiskAssessment;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 28th, 2024 17:25+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2024 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 *   Generated on Fri, Nov 1, 2019 09:29+1100 for FHIR v4.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\R4\FHIRDecimalPrimitive;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRange;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConfig;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConfigKeyEnum;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlLocationEnum;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlWriter;

/**
 * An assessment of the likely outcome(s) for a patient or other subject as well as
 * the likelihood of each outcome.
 *
 * Class FHIRRiskAssessmentPrediction
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRRiskAssessment
 */
class FHIRRiskAssessmentPrediction extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_RISK_ASSESSMENT_DOT_PREDICTION;

    const FIELD_OUTCOME = 'outcome';
    const FIELD_PROBABILITY_DECIMAL = 'probabilityDecimal';
    const FIELD_PROBABILITY_DECIMAL_EXT = '_probabilityDecimal';
    const FIELD_PROBABILITY_RANGE = 'probabilityRange';
    const FIELD_QUALITATIVE_RISK = 'qualitativeRisk';
    const FIELD_RELATIVE_RISK = 'relativeRisk';
    const FIELD_RELATIVE_RISK_EXT = '_relativeRisk';
    const FIELD_WHEN_PERIOD = 'whenPeriod';
    const FIELD_WHEN_RANGE = 'whenRange';
    const FIELD_RATIONALE = 'rationale';
    const FIELD_RATIONALE_EXT = '_rationale';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * One of the potential outcomes for the patient (e.g. remission, death, a
     * particular condition).
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $outcome = null;
    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates how likely the outcome is (in the specified timeframe).
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal
     */
    protected null|FHIRDecimal $probabilityDecimal = null;
    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates how likely the outcome is (in the specified timeframe).
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRange
     */
    protected null|FHIRRange $probabilityRange = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates how likely the outcome is (in the specified timeframe), expressed as a
     * qualitative value (e.g. low, medium, or high).
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $qualitativeRisk = null;
    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the risk for this particular subject (with their specific
     * characteristics) divided by the risk of the population in general. (Numbers
     * greater than 1 = higher risk than the population, numbers less than 1 = lower
     * risk.).
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal
     */
    protected null|FHIRDecimal $relativeRisk = null;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the period of time or age range of the subject to which the specified
     * probability applies.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod
     */
    protected null|FHIRPeriod $whenPeriod = null;
    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the period of time or age range of the subject to which the specified
     * probability applies.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRange
     */
    protected null|FHIRRange $whenRange = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Additional information explaining the basis for the prediction.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected null|FHIRString $rationale = null;

    /**
     * Validation map for fields in type RiskAssessment.Prediction
     * @var array
     */
    private const _VALIDATION_RULES = [];

    /** @var array */
    private array $_xmlLocations = [];

    /**
     * FHIRRiskAssessmentPrediction Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_OUTCOME, $data)) {
            if ($data[self::FIELD_OUTCOME] instanceof FHIRCodeableConcept) {
                $this->setOutcome($data[self::FIELD_OUTCOME]);
            } else {
                $this->setOutcome(new FHIRCodeableConcept($data[self::FIELD_OUTCOME]));
            }
        }
        if (array_key_exists(self::FIELD_PROBABILITY_DECIMAL, $data) || array_key_exists(self::FIELD_PROBABILITY_DECIMAL_EXT, $data)) {
            $value = $data[self::FIELD_PROBABILITY_DECIMAL] ?? null;
            $ext = (isset($data[self::FIELD_PROBABILITY_DECIMAL_EXT]) && is_array($data[self::FIELD_PROBABILITY_DECIMAL_EXT])) ? $data[self::FIELD_PROBABILITY_DECIMAL_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $this->setProbabilityDecimal($value);
                } else if (is_array($value)) {
                    $this->setProbabilityDecimal(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $this->setProbabilityDecimal(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setProbabilityDecimal(new FHIRDecimal($ext));
            } else {
                $this->setProbabilityDecimal(new FHIRDecimal(null));
            }
        }
        if (array_key_exists(self::FIELD_PROBABILITY_RANGE, $data)) {
            if ($data[self::FIELD_PROBABILITY_RANGE] instanceof FHIRRange) {
                $this->setProbabilityRange($data[self::FIELD_PROBABILITY_RANGE]);
            } else {
                $this->setProbabilityRange(new FHIRRange($data[self::FIELD_PROBABILITY_RANGE]));
            }
        }
        if (array_key_exists(self::FIELD_QUALITATIVE_RISK, $data)) {
            if ($data[self::FIELD_QUALITATIVE_RISK] instanceof FHIRCodeableConcept) {
                $this->setQualitativeRisk($data[self::FIELD_QUALITATIVE_RISK]);
            } else {
                $this->setQualitativeRisk(new FHIRCodeableConcept($data[self::FIELD_QUALITATIVE_RISK]));
            }
        }
        if (array_key_exists(self::FIELD_RELATIVE_RISK, $data) || array_key_exists(self::FIELD_RELATIVE_RISK_EXT, $data)) {
            $value = $data[self::FIELD_RELATIVE_RISK] ?? null;
            $ext = (isset($data[self::FIELD_RELATIVE_RISK_EXT]) && is_array($data[self::FIELD_RELATIVE_RISK_EXT])) ? $data[self::FIELD_RELATIVE_RISK_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $this->setRelativeRisk($value);
                } else if (is_array($value)) {
                    $this->setRelativeRisk(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $this->setRelativeRisk(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setRelativeRisk(new FHIRDecimal($ext));
            } else {
                $this->setRelativeRisk(new FHIRDecimal(null));
            }
        }
        if (array_key_exists(self::FIELD_WHEN_PERIOD, $data)) {
            if ($data[self::FIELD_WHEN_PERIOD] instanceof FHIRPeriod) {
                $this->setWhenPeriod($data[self::FIELD_WHEN_PERIOD]);
            } else {
                $this->setWhenPeriod(new FHIRPeriod($data[self::FIELD_WHEN_PERIOD]));
            }
        }
        if (array_key_exists(self::FIELD_WHEN_RANGE, $data)) {
            if ($data[self::FIELD_WHEN_RANGE] instanceof FHIRRange) {
                $this->setWhenRange($data[self::FIELD_WHEN_RANGE]);
            } else {
                $this->setWhenRange(new FHIRRange($data[self::FIELD_WHEN_RANGE]));
            }
        }
        if (array_key_exists(self::FIELD_RATIONALE, $data) || array_key_exists(self::FIELD_RATIONALE_EXT, $data)) {
            $value = $data[self::FIELD_RATIONALE] ?? null;
            $ext = (isset($data[self::FIELD_RATIONALE_EXT]) && is_array($data[self::FIELD_RATIONALE_EXT])) ? $data[self::FIELD_RATIONALE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setRationale($value);
                } else if (is_array($value)) {
                    $this->setRationale(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setRationale(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setRationale(new FHIRString($ext));
            } else {
                $this->setRationale(new FHIRString(null));
            }
        }
    }

    /**
     * @return string
     */
    public function _getFhirTypeName(): string
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getOutcome(): null|FHIRCodeableConcept
    {
        return $this->outcome;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $outcome
     * @return static
     */
    public function setOutcome(null|FHIRCodeableConcept $outcome = null): self
    {
        if (null === $outcome) {
            $outcome = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->outcome, $outcome);
        $this->outcome = $outcome;
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates how likely the outcome is (in the specified timeframe).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal
     */
    public function getProbabilityDecimal(): null|FHIRDecimal
    {
        return $this->probabilityDecimal;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates how likely the outcome is (in the specified timeframe).
     *
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\R4\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal $probabilityDecimal
     * @param \DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setProbabilityDecimal(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $probabilityDecimal = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $probabilityDecimal && !($probabilityDecimal instanceof FHIRDecimal)) {
            $probabilityDecimal = new FHIRDecimal($probabilityDecimal);
        }
        $this->_trackValueSet($this->probabilityDecimal, $probabilityDecimal);
        if (!isset($this->_xmlLocations[self::FIELD_PROBABILITY_DECIMAL])) {
            $this->_xmlLocations[self::FIELD_PROBABILITY_DECIMAL] = [];
        }
        $this->_xmlLocations[self::FIELD_PROBABILITY_DECIMAL][0] = $xmlLocation;
        $this->probabilityDecimal = $probabilityDecimal;
        return $this;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates how likely the outcome is (in the specified timeframe).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRange
     */
    public function getProbabilityRange(): null|FHIRRange
    {
        return $this->probabilityRange;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates how likely the outcome is (in the specified timeframe).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRange $probabilityRange
     * @return static
     */
    public function setProbabilityRange(null|FHIRRange $probabilityRange = null): self
    {
        if (null === $probabilityRange) {
            $probabilityRange = new FHIRRange();
        }
        $this->_trackValueSet($this->probabilityRange, $probabilityRange);
        $this->probabilityRange = $probabilityRange;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates how likely the outcome is (in the specified timeframe), expressed as a
     * qualitative value (e.g. low, medium, or high).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getQualitativeRisk(): null|FHIRCodeableConcept
    {
        return $this->qualitativeRisk;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates how likely the outcome is (in the specified timeframe), expressed as a
     * qualitative value (e.g. low, medium, or high).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $qualitativeRisk
     * @return static
     */
    public function setQualitativeRisk(null|FHIRCodeableConcept $qualitativeRisk = null): self
    {
        if (null === $qualitativeRisk) {
            $qualitativeRisk = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->qualitativeRisk, $qualitativeRisk);
        $this->qualitativeRisk = $qualitativeRisk;
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the risk for this particular subject (with their specific
     * characteristics) divided by the risk of the population in general. (Numbers
     * greater than 1 = higher risk than the population, numbers less than 1 = lower
     * risk.).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal
     */
    public function getRelativeRisk(): null|FHIRDecimal
    {
        return $this->relativeRisk;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the risk for this particular subject (with their specific
     * characteristics) divided by the risk of the population in general. (Numbers
     * greater than 1 = higher risk than the population, numbers less than 1 = lower
     * risk.).
     *
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\R4\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal $relativeRisk
     * @param \DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setRelativeRisk(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $relativeRisk = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $relativeRisk && !($relativeRisk instanceof FHIRDecimal)) {
            $relativeRisk = new FHIRDecimal($relativeRisk);
        }
        $this->_trackValueSet($this->relativeRisk, $relativeRisk);
        if (!isset($this->_xmlLocations[self::FIELD_RELATIVE_RISK])) {
            $this->_xmlLocations[self::FIELD_RELATIVE_RISK] = [];
        }
        $this->_xmlLocations[self::FIELD_RELATIVE_RISK][0] = $xmlLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod
     */
    public function getWhenPeriod(): null|FHIRPeriod
    {
        return $this->whenPeriod;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the period of time or age range of the subject to which the specified
     * probability applies.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod $whenPeriod
     * @return static
     */
    public function setWhenPeriod(null|FHIRPeriod $whenPeriod = null): self
    {
        if (null === $whenPeriod) {
            $whenPeriod = new FHIRPeriod();
        }
        $this->_trackValueSet($this->whenPeriod, $whenPeriod);
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRange
     */
    public function getWhenRange(): null|FHIRRange
    {
        return $this->whenRange;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the period of time or age range of the subject to which the specified
     * probability applies.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRange $whenRange
     * @return static
     */
    public function setWhenRange(null|FHIRRange $whenRange = null): self
    {
        if (null === $whenRange) {
            $whenRange = new FHIRRange();
        }
        $this->_trackValueSet($this->whenRange, $whenRange);
        $this->whenRange = $whenRange;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Additional information explaining the basis for the prediction.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getRationale(): null|FHIRString
    {
        return $this->rationale;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Additional information explaining the basis for the prediction.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R4\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $rationale
     * @param \DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setRationale(null|string|FHIRStringPrimitive|FHIRString $rationale = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $rationale && !($rationale instanceof FHIRString)) {
            $rationale = new FHIRString($rationale);
        }
        $this->_trackValueSet($this->rationale, $rationale);
        if (!isset($this->_xmlLocations[self::FIELD_RATIONALE])) {
            $this->_xmlLocations[self::FIELD_RATIONALE] = [];
        }
        $this->_xmlLocations[self::FIELD_RATIONALE][0] = $xmlLocation;
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
        return self::_VALIDATION_RULES;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by FHIR.  An empty array must be seen as
     * passing.
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
        if (null !== ($v = $this->getProbabilityDecimal())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PROBABILITY_DECIMAL] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getProbabilityRange())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PROBABILITY_RANGE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getQualitativeRisk())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_QUALITATIVE_RISK] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getRelativeRisk())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RELATIVE_RISK] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getWhenPeriod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_WHEN_PERIOD] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getWhenRange())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_WHEN_RANGE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getRationale())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RATIONALE] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_OUTCOME])) {
            $v = $this->getOutcome();
            foreach($validationRules[self::FIELD_OUTCOME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RISK_ASSESSMENT_DOT_PREDICTION, self::FIELD_OUTCOME, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RISK_ASSESSMENT_DOT_PREDICTION, self::FIELD_PROBABILITY_DECIMAL, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RISK_ASSESSMENT_DOT_PREDICTION, self::FIELD_PROBABILITY_RANGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PROBABILITY_RANGE])) {
                        $errs[self::FIELD_PROBABILITY_RANGE] = [];
                    }
                    $errs[self::FIELD_PROBABILITY_RANGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_QUALITATIVE_RISK])) {
            $v = $this->getQualitativeRisk();
            foreach($validationRules[self::FIELD_QUALITATIVE_RISK] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RISK_ASSESSMENT_DOT_PREDICTION, self::FIELD_QUALITATIVE_RISK, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_QUALITATIVE_RISK])) {
                        $errs[self::FIELD_QUALITATIVE_RISK] = [];
                    }
                    $errs[self::FIELD_QUALITATIVE_RISK][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RELATIVE_RISK])) {
            $v = $this->getRelativeRisk();
            foreach($validationRules[self::FIELD_RELATIVE_RISK] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RISK_ASSESSMENT_DOT_PREDICTION, self::FIELD_RELATIVE_RISK, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RISK_ASSESSMENT_DOT_PREDICTION, self::FIELD_WHEN_PERIOD, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RISK_ASSESSMENT_DOT_PREDICTION, self::FIELD_WHEN_RANGE, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RISK_ASSESSMENT_DOT_PREDICTION, self::FIELD_RATIONALE, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BACKBONE_ELEMENT, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT, self::FIELD_EXTENSION, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT, self::FIELD_ID, $rule, $constraint, $v);
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
     * @param null|string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRRiskAssessment\FHIRRiskAssessmentPrediction $type
     * @param null|int|\DCarbone\PHPFHIRGenerated\R4\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRRiskAssessment\FHIRRiskAssessmentPrediction
     */
    public static function xmlUnserialize(null|string|\SimpleXMLElement $element, null|PHPFHIRTypeInterface $type = null, null|int|PHPFHIRConfig $config = null): null|self
    {
        if (null === $element) {
            return null;
        }
        if (is_int($config)) {
            $config = new PHPFHIRConfig([PHPFHIRConfigKeyEnum::LIBXML_OPTS->value => $config]);
        } else if (null === $config) {
            $config = new PHPFHIRConfig();
        }
        if (is_string($element)) {
            $element = new \SimpleXMLElement($element, $config->getLibxmlOpts());
        }
        if (null === $type) {
            $type = new static(null);
        } else if (!($type instanceof FHIRRiskAssessmentPrediction)) {
            throw new \RuntimeException(sprintf(
                '%s::xmlUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null !== ($ns = $element->getNamespaces()[''] ?? null)) {
            $type->_setSourceXmlns((string)$ns);
        }
        foreach ($element->children() as $n) {
            $childName = $n->getName();
            if (self::FIELD_OUTCOME === $childName) {
                $type->setOutcome(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PROBABILITY_DECIMAL === $childName) {
                $type->setProbabilityDecimal(FHIRDecimal::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_PROBABILITY_RANGE === $childName) {
                $type->setProbabilityRange(FHIRRange::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_QUALITATIVE_RISK === $childName) {
                $type->setQualitativeRisk(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_RELATIVE_RISK === $childName) {
                $type->setRelativeRisk(FHIRDecimal::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_WHEN_PERIOD === $childName) {
                $type->setWhenPeriod(FHIRPeriod::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_WHEN_RANGE === $childName) {
                $type->setWhenRange(FHIRRange::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_RATIONALE === $childName) {
                $type->setRationale(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_PROBABILITY_DECIMAL])) {
            $pt = $type->getProbabilityDecimal();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_PROBABILITY_DECIMAL], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setProbabilityDecimal((string)$attributes[self::FIELD_PROBABILITY_DECIMAL], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_RELATIVE_RISK])) {
            $pt = $type->getRelativeRisk();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_RELATIVE_RISK], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setRelativeRisk((string)$attributes[self::FIELD_RELATIVE_RISK], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_RATIONALE])) {
            $pt = $type->getRationale();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_RATIONALE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setRationale((string)$attributes[self::FIELD_RATIONALE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setId((string)$attributes[self::FIELD_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        return $type;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlWriter $xw
     * @param null|int|\DCarbone\PHPFHIRGenerated\R4\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return \DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlWriter
     */
    public function xmlSerialize(null|PHPFHIRXmlWriter $xw = null, null|int|PHPFHIRConfig $config = null): PHPFHIRXmlWriter
    {
        if (is_int($config)) {
            $config = new PHPFHIRConfig([PHPFHIRConfigKeyEnum::LIBXML_OPTS->value => $config]);
        } else if (null === $config) {
            $config = new PHPFHIRConfig();
        }
        if (null === $xw) {
            $xw = new PHPFHIRXmlWriter();
        }
        if (!$xw->isOpen()) {
            $xw->openMemory();
        }
        if (!$xw->isDocStarted()) {
            $docStarted = true;
            $xw->startDocument();
        }
        if (!$xw->isRootOpen()) {
            $openedRoot = true;
            $xw->openRootNode($config, 'RiskAssessmentPrediction', $this->_getSourceXmlns());
        }
        $locs = $this->_xmlLocations[self::FIELD_PROBABILITY_DECIMAL] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getProbabilityDecimal())) {
            $xw->writeAttribute(self::FIELD_PROBABILITY_DECIMAL, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_RELATIVE_RISK] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getRelativeRisk())) {
            $xw->writeAttribute(self::FIELD_RELATIVE_RISK, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_RATIONALE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getRationale())) {
            $xw->writeAttribute(self::FIELD_RATIONALE, $v->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (null !== ($v = $this->getOutcome())) {
            $xw->startElement(self::FIELD_OUTCOME);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_PROBABILITY_DECIMAL] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getProbabilityDecimal())) {
            $xw->startElement(self::FIELD_PROBABILITY_DECIMAL);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getProbabilityRange())) {
            $xw->startElement(self::FIELD_PROBABILITY_RANGE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getQualitativeRisk())) {
            $xw->startElement(self::FIELD_QUALITATIVE_RISK);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_RELATIVE_RISK] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getRelativeRisk())) {
            $xw->startElement(self::FIELD_RELATIVE_RISK);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getWhenPeriod())) {
            $xw->startElement(self::FIELD_WHEN_PERIOD);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getWhenRange())) {
            $xw->startElement(self::FIELD_WHEN_RANGE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_RATIONALE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getRationale())) {
            $xw->startElement(self::FIELD_RATIONALE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($openedRoot) && $openedRoot) {
            $xw->endElement();
        }
        if (isset($docStarted) && $docStarted) {
            $xw->endDocument();
        }
        return $xw;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (null !== ($v = $this->getOutcome())) {
            $out->{self::FIELD_OUTCOME} = $v;
        }
        if (null !== ($v = $this->getProbabilityDecimal())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_PROBABILITY_DECIMAL} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDecimal::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_PROBABILITY_DECIMAL_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getProbabilityRange())) {
            $out->{self::FIELD_PROBABILITY_RANGE} = $v;
        }
        if (null !== ($v = $this->getQualitativeRisk())) {
            $out->{self::FIELD_QUALITATIVE_RISK} = $v;
        }
        if (null !== ($v = $this->getRelativeRisk())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_RELATIVE_RISK} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDecimal::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_RELATIVE_RISK_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getWhenPeriod())) {
            $out->{self::FIELD_WHEN_PERIOD} = $v;
        }
        if (null !== ($v = $this->getWhenRange())) {
            $out->{self::FIELD_WHEN_RANGE} = $v;
        }
        if (null !== ($v = $this->getRationale())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_RATIONALE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_RATIONALE_EXT} = $ext;
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