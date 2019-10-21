<?php

namespace DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRRiskAssessment;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 21st, 2019 23:43+0000
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

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

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

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * One of the potential outcomes for the patient (e.g. remission, death, a
     * particular condition).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    private $outcome = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * How likely is the outcome (in the specified timeframe).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    private $probabilityCodeableConcept = null;
    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * How likely is the outcome (in the specified timeframe).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDecimal
     */
    private $probabilityDecimal = null;
    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * How likely is the outcome (in the specified timeframe).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRRange
     */
    private $probabilityRange = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Additional information explaining the basis for the prediction.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    private $rationale = null;
    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Indicates the risk for this particular subject (with their specific
     * characteristics) divided by the risk of the population in general. (Numbers
     * greater than 1 = higher risk than the population, numbers less than 1 = lower
     * risk.).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDecimal
     */
    private $relativeRisk = null;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates the period of time or age range of the subject to which the specified
     * probability applies.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPeriod
     */
    private $whenPeriod = null;
    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates the period of time or age range of the subject to which the specified
     * probability applies.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRRange
     */
    private $whenRange = null;

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
        if (isset($data[self::FIELD_PROBABILITY_DECIMAL])) {
            $ext = (isset($data[self::FIELD_PROBABILITY_DECIMAL_EXT]) && is_array($data[self::FIELD_PROBABILITY_DECIMAL_EXT]))
                ? $data[self::FIELD_PROBABILITY_DECIMAL_EXT]
                : null;
            if ($data[self::FIELD_PROBABILITY_DECIMAL] instanceof FHIRDecimal) {
                $this->setProbabilityDecimal($data[self::FIELD_PROBABILITY_DECIMAL]);
            } elseif ($ext && is_scalar($data[self::FIELD_PROBABILITY_DECIMAL])) {
                $this->setProbabilityDecimal(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $data[self::FIELD_PROBABILITY_DECIMAL]] + $ext));
            } else {
                $this->setProbabilityDecimal(new FHIRDecimal($data[self::FIELD_PROBABILITY_DECIMAL]));
            }
        }
        if (isset($data[self::FIELD_PROBABILITY_RANGE])) {
            if ($data[self::FIELD_PROBABILITY_RANGE] instanceof FHIRRange) {
                $this->setProbabilityRange($data[self::FIELD_PROBABILITY_RANGE]);
            } else {
                $this->setProbabilityRange(new FHIRRange($data[self::FIELD_PROBABILITY_RANGE]));
            }
        }
        if (isset($data[self::FIELD_RATIONALE])) {
            $ext = (isset($data[self::FIELD_RATIONALE_EXT]) && is_array($data[self::FIELD_RATIONALE_EXT]))
                ? $data[self::FIELD_RATIONALE_EXT]
                : null;
            if ($data[self::FIELD_RATIONALE] instanceof FHIRString) {
                $this->setRationale($data[self::FIELD_RATIONALE]);
            } elseif ($ext && is_scalar($data[self::FIELD_RATIONALE])) {
                $this->setRationale(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_RATIONALE]] + $ext));
            } else {
                $this->setRationale(new FHIRString($data[self::FIELD_RATIONALE]));
            }
        }
        if (isset($data[self::FIELD_RELATIVE_RISK])) {
            $ext = (isset($data[self::FIELD_RELATIVE_RISK_EXT]) && is_array($data[self::FIELD_RELATIVE_RISK_EXT]))
                ? $data[self::FIELD_RELATIVE_RISK_EXT]
                : null;
            if ($data[self::FIELD_RELATIVE_RISK] instanceof FHIRDecimal) {
                $this->setRelativeRisk($data[self::FIELD_RELATIVE_RISK]);
            } elseif ($ext && is_scalar($data[self::FIELD_RELATIVE_RISK])) {
                $this->setRelativeRisk(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $data[self::FIELD_RELATIVE_RISK]] + $ext));
            } else {
                $this->setRelativeRisk(new FHIRDecimal($data[self::FIELD_RELATIVE_RISK]));
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
     * @return string|null
     */
    public function _getFHIRXMLNamespace()
    {
        return '' === $this->_xmlns ? null : $this->_xmlns;
    }

    /**
     * @param null|string $xmlNamespace
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRRiskAssessment\FHIRRiskAssessmentPrediction
     */
    public function _setFHIRXMLNamespace($xmlNamespace)
    {
        if (null === $xmlNamespace || is_string($xmlNamespace)) {
            $this->_xmlns = (string)$xmlNamespace;
            return $this;
        }
        throw new \InvalidArgumentException(sprintf(
            '$xmlNamespace must be a null or string value, %s seen.',
            gettype($xmlNamespace)
        ));
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
     * elements, an @id referenced from the Narrative, or extensions
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * One of the potential outcomes for the patient (e.g. remission, death, a
     * particular condition).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept $outcome
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRRiskAssessment\FHIRRiskAssessmentPrediction
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
     * elements, an @id referenced from the Narrative, or extensions
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * How likely is the outcome (in the specified timeframe).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept $probabilityCodeableConcept
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRRiskAssessment\FHIRRiskAssessmentPrediction
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
     * If the element is present, it must have either a @value, an @id, or extensions
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * How likely is the outcome (in the specified timeframe).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDecimal $probabilityDecimal
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRRiskAssessment\FHIRRiskAssessmentPrediction
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
     * elements, an @id referenced from the Narrative, or extensions
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * How likely is the outcome (in the specified timeframe).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRRange $probabilityRange
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRRiskAssessment\FHIRRiskAssessmentPrediction
     */
    public function setProbabilityRange(FHIRRange $probabilityRange = null)
    {
        $this->probabilityRange = $probabilityRange;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Additional information explaining the basis for the prediction.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $rationale
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRRiskAssessment\FHIRRiskAssessmentPrediction
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
     * If the element is present, it must have either a @value, an @id, or extensions
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Indicates the risk for this particular subject (with their specific
     * characteristics) divided by the risk of the population in general. (Numbers
     * greater than 1 = higher risk than the population, numbers less than 1 = lower
     * risk.).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDecimal $relativeRisk
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRRiskAssessment\FHIRRiskAssessmentPrediction
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
     * elements, an @id referenced from the Narrative, or extensions
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates the period of time or age range of the subject to which the specified
     * probability applies.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPeriod $whenPeriod
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRRiskAssessment\FHIRRiskAssessmentPrediction
     */
    public function setWhenPeriod(FHIRPeriod $whenPeriod = null)
    {
        $this->whenPeriod = $whenPeriod;
        return $this;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates the period of time or age range of the subject to which the specified
     * probability applies.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRRange $whenRange
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRRiskAssessment\FHIRRiskAssessmentPrediction
     */
    public function setWhenRange(FHIRRange $whenRange = null)
    {
        $this->whenRange = $whenRange;
        return $this;
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
        if (isset($attributes->probabilityDecimal)) {
            $type->setProbabilityDecimal((string)$attributes->probabilityDecimal);
        }
        if (isset($children->probabilityDecimal)) {
            $type->setProbabilityDecimal(FHIRDecimal::xmlUnserialize($children->probabilityDecimal));
        }
        if (isset($children->probabilityRange)) {
            $type->setProbabilityRange(FHIRRange::xmlUnserialize($children->probabilityRange));
        }
        if (isset($attributes->rationale)) {
            $type->setRationale((string)$attributes->rationale);
        }
        if (isset($children->rationale)) {
            $type->setRationale(FHIRString::xmlUnserialize($children->rationale));
        }
        if (isset($attributes->relativeRisk)) {
            $type->setRelativeRisk((string)$attributes->relativeRisk);
        }
        if (isset($children->relativeRisk)) {
            $type->setRelativeRisk(FHIRDecimal::xmlUnserialize($children->relativeRisk));
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
            $a[self::FIELD_PROBABILITY_DECIMAL_EXT] = $v;
        }
        if (null !== ($v = $this->getProbabilityRange())) {
            $a[self::FIELD_PROBABILITY_RANGE] = $v;
        }
        if (null !== ($v = $this->getRationale())) {
            $a[self::FIELD_RATIONALE] = $v->getValue();
            $a[self::FIELD_RATIONALE_EXT] = $v;
        }
        if (null !== ($v = $this->getRelativeRisk())) {
            $a[self::FIELD_RELATIVE_RISK] = $v->getValue();
            $a[self::FIELD_RELATIVE_RISK_EXT] = $v;
        }
        if (null !== ($v = $this->getWhenPeriod())) {
            $a[self::FIELD_WHEN_PERIOD] = $v;
        }
        if (null !== ($v = $this->getWhenRange())) {
            $a[self::FIELD_WHEN_RANGE] = $v;
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