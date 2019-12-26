<?php

namespace DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRRiskAssessment;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 26th, 2019 15:43+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2019 Daniel Carbone (daniel.p.carbone@gmail.com)
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

use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDecimal;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRRange;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRTypeInterface;

/**
 * An assessment of the likely outcome(s) for a patient or other subject as well as
 * the likelihood of each outcome.
 *
 * Class FHIRRiskAssessmentPrediction
 * @package \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRRiskAssessment
 */
class FHIRRiskAssessmentPrediction extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_RISK_ASSESSMENT_DOT_PREDICTION;
    const FIELD_OUTCOME = 'outcome';
    const FIELD_PROBABILITY_CODEABLE_CONCEPT = 'probabilityCodeableConcept';
    const FIELD_PROBABILITY_DECIMAL = 'probabilityDecimal';
    const FIELD_PROBABILITY_DECIMAL_EXT = '_probabilityDecimal';
    const FIELD_PROBABILITY_RANGE = 'probabilityRange';
    const FIELD_RATIONALE = 'rationale';
    const FIELD_RATIONALE_EXT = '_rationale';
    const FIELD_RELATIVE_RISK = 'relativeRisk';
    const FIELD_RELATIVE_RISK_EXT = '_relativeRisk';
    const FIELD_WHEN_PERIOD = 'whenPeriod';
    const FIELD_WHEN_RANGE = 'whenRange';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * One of the potential outcomes for the patient (e.g. remission, death, a
     * particular condition).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    protected $outcome = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * How likely is the outcome (in the specified timeframe).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    protected $probabilityCodeableConcept = null;

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * How likely is the outcome (in the specified timeframe).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDecimal
     */
    protected $probabilityDecimal = null;

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * How likely is the outcome (in the specified timeframe).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRRange
     */
    protected $probabilityRange = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Additional information explaining the basis for the prediction.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    protected $rationale = null;

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
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDecimal
     */
    protected $relativeRisk = null;

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the period of time or age range of the subject to which the specified
     * probability applies.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPeriod
     */
    protected $whenPeriod = null;

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the period of time or age range of the subject to which the specified
     * probability applies.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRRange
     */
    protected $whenRange = null;

    /**
     * Validation map for fields in type RiskAssessment.Prediction
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRRiskAssessmentPrediction Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRRiskAssessmentPrediction::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_OUTCOME])) {
            if ($data[self::FIELD_OUTCOME] instanceof FHIRCodeableConcept) {
                $this->setOutcome($data[self::FIELD_OUTCOME]);
            } else {
                $this->setOutcome(new FHIRCodeableConcept($data[self::FIELD_OUTCOME]));
            }
        }
        if (isset($data[self::FIELD_PROBABILITY_CODEABLE_CONCEPT])) {
            if ($data[self::FIELD_PROBABILITY_CODEABLE_CONCEPT] instanceof FHIRCodeableConcept) {
                $this->setProbabilityCodeableConcept($data[self::FIELD_PROBABILITY_CODEABLE_CONCEPT]);
            } else {
                $this->setProbabilityCodeableConcept(new FHIRCodeableConcept($data[self::FIELD_PROBABILITY_CODEABLE_CONCEPT]));
            }
        }
        if (isset($data[self::FIELD_PROBABILITY_DECIMAL]) || isset($data[self::FIELD_PROBABILITY_DECIMAL_EXT])) {
            if (isset($data[self::FIELD_PROBABILITY_DECIMAL])) {
                $value = $data[self::FIELD_PROBABILITY_DECIMAL];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_PROBABILITY_DECIMAL_EXT]) && is_array($data[self::FIELD_PROBABILITY_DECIMAL_EXT])) {
                $ext = $data[self::FIELD_PROBABILITY_DECIMAL_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $this->setProbabilityDecimal($value);
                } else if (is_array($value)) {
                    $this->setProbabilityDecimal(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $this->setProbabilityDecimal(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setProbabilityDecimal(new FHIRDecimal($ext));
            }
        }
        if (isset($data[self::FIELD_PROBABILITY_RANGE])) {
            if ($data[self::FIELD_PROBABILITY_RANGE] instanceof FHIRRange) {
                $this->setProbabilityRange($data[self::FIELD_PROBABILITY_RANGE]);
            } else {
                $this->setProbabilityRange(new FHIRRange($data[self::FIELD_PROBABILITY_RANGE]));
            }
        }
        if (isset($data[self::FIELD_RATIONALE]) || isset($data[self::FIELD_RATIONALE_EXT])) {
            if (isset($data[self::FIELD_RATIONALE])) {
                $value = $data[self::FIELD_RATIONALE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_RATIONALE_EXT]) && is_array($data[self::FIELD_RATIONALE_EXT])) {
                $ext = $data[self::FIELD_RATIONALE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setRationale($value);
                } else if (is_array($value)) {
                    $this->setRationale(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setRationale(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setRationale(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_RELATIVE_RISK]) || isset($data[self::FIELD_RELATIVE_RISK_EXT])) {
            if (isset($data[self::FIELD_RELATIVE_RISK])) {
                $value = $data[self::FIELD_RELATIVE_RISK];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_RELATIVE_RISK_EXT]) && is_array($data[self::FIELD_RELATIVE_RISK_EXT])) {
                $ext = $data[self::FIELD_RELATIVE_RISK_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $this->setRelativeRisk($value);
                } else if (is_array($value)) {
                    $this->setRelativeRisk(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $this->setRelativeRisk(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setRelativeRisk(new FHIRDecimal($ext));
            }
        }
        if (isset($data[self::FIELD_WHEN_PERIOD])) {
            if ($data[self::FIELD_WHEN_PERIOD] instanceof FHIRPeriod) {
                $this->setWhenPeriod($data[self::FIELD_WHEN_PERIOD]);
            } else {
                $this->setWhenPeriod(new FHIRPeriod($data[self::FIELD_WHEN_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_WHEN_RANGE])) {
            if ($data[self::FIELD_WHEN_RANGE] instanceof FHIRRange) {
                $this->setWhenRange($data[self::FIELD_WHEN_RANGE]);
            } else {
                $this->setWhenRange(new FHIRRange($data[self::FIELD_WHEN_RANGE]));
            }
        }
    }

    /**
     * @return string
     */
    public function _getFHIRTypeName()
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * @return string
     */
    public function _getFHIRXMLElementDefinition()
    {
        $xmlns = $this->_getFHIRXMLNamespace();
        if (null !== $xmlns) {
            $xmlns = " xmlns=\"{$xmlns}\"";
        }
        return "<RiskAssessmentPrediction{$xmlns}></RiskAssessmentPrediction>";
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public function getOutcome()
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept $outcome
     * @return static
     */
    public function setOutcome(FHIRCodeableConcept $outcome = null)
    {
        $this->outcome = $outcome;
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public function getProbabilityCodeableConcept()
    {
        return $this->probabilityCodeableConcept;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * How likely is the outcome (in the specified timeframe).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept $probabilityCodeableConcept
     * @return static
     */
    public function setProbabilityCodeableConcept(FHIRCodeableConcept $probabilityCodeableConcept = null)
    {
        $this->probabilityCodeableConcept = $probabilityCodeableConcept;
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDecimal
     */
    public function getProbabilityDecimal()
    {
        return $this->probabilityDecimal;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * How likely is the outcome (in the specified timeframe).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDecimal $probabilityDecimal
     * @return static
     */
    public function setProbabilityDecimal($probabilityDecimal = null)
    {
        if (null === $probabilityDecimal) {
            $this->probabilityDecimal = null;
            return $this;
        }
        if ($probabilityDecimal instanceof FHIRDecimal) {
            $this->probabilityDecimal = $probabilityDecimal;
            return $this;
        }
        $this->probabilityDecimal = new FHIRDecimal($probabilityDecimal);
        return $this;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * How likely is the outcome (in the specified timeframe).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRRange
     */
    public function getProbabilityRange()
    {
        return $this->probabilityRange;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * How likely is the outcome (in the specified timeframe).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRRange $probabilityRange
     * @return static
     */
    public function setProbabilityRange(FHIRRange $probabilityRange = null)
    {
        $this->probabilityRange = $probabilityRange;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Additional information explaining the basis for the prediction.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    public function getRationale()
    {
        return $this->rationale;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Additional information explaining the basis for the prediction.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $rationale
     * @return static
     */
    public function setRationale($rationale = null)
    {
        if (null === $rationale) {
            $this->rationale = null;
            return $this;
        }
        if ($rationale instanceof FHIRString) {
            $this->rationale = $rationale;
            return $this;
        }
        $this->rationale = new FHIRString($rationale);
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDecimal
     */
    public function getRelativeRisk()
    {
        return $this->relativeRisk;
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDecimal $relativeRisk
     * @return static
     */
    public function setRelativeRisk($relativeRisk = null)
    {
        if (null === $relativeRisk) {
            $this->relativeRisk = null;
            return $this;
        }
        if ($relativeRisk instanceof FHIRDecimal) {
            $this->relativeRisk = $relativeRisk;
            return $this;
        }
        $this->relativeRisk = new FHIRDecimal($relativeRisk);
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPeriod
     */
    public function getWhenPeriod()
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPeriod $whenPeriod
     * @return static
     */
    public function setWhenPeriod(FHIRPeriod $whenPeriod = null)
    {
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRRange
     */
    public function getWhenRange()
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRRange $whenRange
     * @return static
     */
    public function setWhenRange(FHIRRange $whenRange = null)
    {
        $this->whenRange = $whenRange;
        return $this;
    }

    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules()
    {
        return self::$_validationRules;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by FHIR.  An empty array must be seen as
     * passing.
     *
     * @return array
     */
    public function _getValidationErrors()
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if (null !== ($v = $this->getOutcome())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_OUTCOME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getProbabilityCodeableConcept())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PROBABILITY_CODEABLE_CONCEPT] = $fieldErrs;
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
        if (null !== ($v = $this->getRationale())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RATIONALE] = $fieldErrs;
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
        if (isset($validationRules[self::FIELD_PROBABILITY_CODEABLE_CONCEPT])) {
            $v = $this->getProbabilityCodeableConcept();
            foreach($validationRules[self::FIELD_PROBABILITY_CODEABLE_CONCEPT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RISK_ASSESSMENT_DOT_PREDICTION, self::FIELD_PROBABILITY_CODEABLE_CONCEPT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PROBABILITY_CODEABLE_CONCEPT])) {
                        $errs[self::FIELD_PROBABILITY_CODEABLE_CONCEPT] = [];
                    }
                    $errs[self::FIELD_PROBABILITY_CODEABLE_CONCEPT][$rule] = $err;
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
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRRiskAssessment\FHIRRiskAssessmentPrediction $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRRiskAssessment\FHIRRiskAssessmentPrediction
     */
    public static function xmlUnserialize($sxe = null, PHPFHIRTypeInterface $type = null, $libxmlOpts = 591872)
    {
        if (null === $sxe) {
            return null;
        }
        if (is_string($sxe)) {
            libxml_use_internal_errors(true);
            $sxe = new \SimpleXMLElement($sxe, $libxmlOpts, false);
            if ($sxe === false) {
                throw new \DomainException(sprintf('FHIRRiskAssessmentPrediction::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRRiskAssessmentPrediction::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRRiskAssessmentPrediction;
        } elseif (!is_object($type) || !($type instanceof FHIRRiskAssessmentPrediction)) {
            throw new \RuntimeException(sprintf(
                'FHIRRiskAssessmentPrediction::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRRiskAssessment\FHIRRiskAssessmentPrediction or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        FHIRBackboneElement::xmlUnserialize($sxe, $type);
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->outcome)) {
            $type->setOutcome(FHIRCodeableConcept::xmlUnserialize($children->outcome));
        }
        if (isset($children->probabilityCodeableConcept)) {
            $type->setProbabilityCodeableConcept(FHIRCodeableConcept::xmlUnserialize($children->probabilityCodeableConcept));
        }
        if (isset($children->probabilityDecimal)) {
            $type->setProbabilityDecimal(FHIRDecimal::xmlUnserialize($children->probabilityDecimal));
        }
        if (isset($attributes->probabilityDecimal)) {
            $pt = $type->getProbabilityDecimal();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->probabilityDecimal);
            } else {
                $type->setProbabilityDecimal((string)$attributes->probabilityDecimal);
            }
        }
        if (isset($children->probabilityRange)) {
            $type->setProbabilityRange(FHIRRange::xmlUnserialize($children->probabilityRange));
        }
        if (isset($children->rationale)) {
            $type->setRationale(FHIRString::xmlUnserialize($children->rationale));
        }
        if (isset($attributes->rationale)) {
            $pt = $type->getRationale();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->rationale);
            } else {
                $type->setRationale((string)$attributes->rationale);
            }
        }
        if (isset($children->relativeRisk)) {
            $type->setRelativeRisk(FHIRDecimal::xmlUnserialize($children->relativeRisk));
        }
        if (isset($attributes->relativeRisk)) {
            $pt = $type->getRelativeRisk();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->relativeRisk);
            } else {
                $type->setRelativeRisk((string)$attributes->relativeRisk);
            }
        }
        if (isset($children->whenPeriod)) {
            $type->setWhenPeriod(FHIRPeriod::xmlUnserialize($children->whenPeriod));
        }
        if (isset($children->whenRange)) {
            $type->setWhenRange(FHIRRange::xmlUnserialize($children->whenRange));
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement $sxe
     * @param null|int $libxmlOpts
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null, $libxmlOpts = 591872)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement($this->_getFHIRXMLElementDefinition(), $libxmlOpts, false);
        }
        parent::xmlSerialize($sxe);
        if (null !== ($v = $this->getOutcome())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_OUTCOME, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getProbabilityCodeableConcept())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PROBABILITY_CODEABLE_CONCEPT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getProbabilityDecimal())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PROBABILITY_DECIMAL, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getProbabilityRange())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PROBABILITY_RANGE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getRationale())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_RATIONALE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getRelativeRisk())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_RELATIVE_RISK, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getWhenPeriod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_WHEN_PERIOD, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getWhenRange())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_WHEN_RANGE, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getOutcome())) {
            $a[self::FIELD_OUTCOME] = $v;
        }
        if (null !== ($v = $this->getProbabilityCodeableConcept())) {
            $a[self::FIELD_PROBABILITY_CODEABLE_CONCEPT] = $v;
        }
        if (null !== ($v = $this->getProbabilityDecimal())) {
            $a[self::FIELD_PROBABILITY_DECIMAL] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDecimal::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDecimal::FIELD_VALUE]);
                $a[self::FIELD_PROBABILITY_DECIMAL_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getProbabilityRange())) {
            $a[self::FIELD_PROBABILITY_RANGE] = $v;
        }
        if (null !== ($v = $this->getRationale())) {
            $a[self::FIELD_RATIONALE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_RATIONALE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getRelativeRisk())) {
            $a[self::FIELD_RELATIVE_RISK] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDecimal::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDecimal::FIELD_VALUE]);
                $a[self::FIELD_RELATIVE_RISK_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getWhenPeriod())) {
            $a[self::FIELD_WHEN_PERIOD] = $v;
        }
        if (null !== ($v = $this->getWhenRange())) {
            $a[self::FIELD_WHEN_RANGE] = $v;
        }
        if ([] !== ($vs = $this->_getFHIRComments())) {
            $a[PHPFHIRConstants::JSON_FIELD_FHIR_COMMENTS] = $vs;
        }
        return $a;
    }


    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}