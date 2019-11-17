<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRRiskEvidenceSynthesis;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: November 17th, 2019 04:21+0000
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
 *   Generated on Fri, Nov 1, 2019 09:29+1100 for FHIR v4.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * The RiskEvidenceSynthesis resource describes the likelihood of an outcome in a
 * population plus exposure state where the risk estimate is derived from a
 * combination of research studies.
 *
 * Class FHIRRiskEvidenceSynthesisRiskEstimate
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRRiskEvidenceSynthesis
 */
class FHIRRiskEvidenceSynthesisRiskEstimate extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_RISK_EVIDENCE_SYNTHESIS_DOT_RISK_ESTIMATE;
    const FIELD_DENOMINATOR_COUNT = 'denominatorCount';
    const FIELD_DENOMINATOR_COUNT_EXT = '_denominatorCount';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_DESCRIPTION_EXT = '_description';
    const FIELD_NUMERATOR_COUNT = 'numeratorCount';
    const FIELD_NUMERATOR_COUNT_EXT = '_numeratorCount';
    const FIELD_PRECISION_ESTIMATE = 'precisionEstimate';
    const FIELD_TYPE = 'type';
    const FIELD_UNIT_OF_MEASURE = 'unitOfMeasure';
    const FIELD_VALUE = 'value';
    const FIELD_VALUE_EXT = '_value';

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The sample size for the group that was measured for this risk estimate.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger
     */
    protected $denominatorCount = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Human-readable summary of risk estimate.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $description = null;

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The number of group members with the outcome of interest.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger
     */
    protected $numeratorCount = null;

    /**
     * The RiskEvidenceSynthesis resource describes the likelihood of an outcome in a
     * population plus exposure state where the risk estimate is derived from a
     * combination of research studies.
     *
     * A description of the precision of the estimate for the effect.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRRiskEvidenceSynthesis\FHIRRiskEvidenceSynthesisPrecisionEstimate[]
     */
    protected $precisionEstimate = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Examples include proportion and mean.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $type = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies the UCUM unit for the outcome.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $unitOfMeasure = null;

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The point estimate of the risk estimate.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal
     */
    protected $value = null;

    /** @var string */
    protected $_xmlns = 'http://hl7.org/fhir';

    /**
     * FHIRRiskEvidenceSynthesisRiskEstimate Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (is_scalar($data)) {
            $this->setValue(new FHIRDecimal($data));
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRRiskEvidenceSynthesisRiskEstimate::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_DENOMINATOR_COUNT])) {
            $ext = (isset($data[self::FIELD_DENOMINATOR_COUNT_EXT]) && is_array($data[self::FIELD_DENOMINATOR_COUNT_EXT]))
                ? $data[self::FIELD_DENOMINATOR_COUNT_EXT]
                : null;
            if ($data[self::FIELD_DENOMINATOR_COUNT] instanceof FHIRInteger) {
                $this->setDenominatorCount($data[self::FIELD_DENOMINATOR_COUNT]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_DENOMINATOR_COUNT])) {
                    $this->setDenominatorCount(new FHIRInteger([FHIRInteger::FIELD_VALUE => $data[self::FIELD_DENOMINATOR_COUNT]] + $ext));
                } else if (is_array($data[self::FIELD_DENOMINATOR_COUNT])) {
                    $this->setDenominatorCount(new FHIRInteger(array_merge($ext, $data[self::FIELD_DENOMINATOR_COUNT])));
                }
            } else {
                $this->setDenominatorCount(new FHIRInteger($data[self::FIELD_DENOMINATOR_COUNT]));
            }
        }
        if (isset($data[self::FIELD_DESCRIPTION])) {
            $ext = (isset($data[self::FIELD_DESCRIPTION_EXT]) && is_array($data[self::FIELD_DESCRIPTION_EXT]))
                ? $data[self::FIELD_DESCRIPTION_EXT]
                : null;
            if ($data[self::FIELD_DESCRIPTION] instanceof FHIRString) {
                $this->setDescription($data[self::FIELD_DESCRIPTION]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_DESCRIPTION])) {
                    $this->setDescription(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_DESCRIPTION]] + $ext));
                } else if (is_array($data[self::FIELD_DESCRIPTION])) {
                    $this->setDescription(new FHIRString(array_merge($ext, $data[self::FIELD_DESCRIPTION])));
                }
            } else {
                $this->setDescription(new FHIRString($data[self::FIELD_DESCRIPTION]));
            }
        }
        if (isset($data[self::FIELD_NUMERATOR_COUNT])) {
            $ext = (isset($data[self::FIELD_NUMERATOR_COUNT_EXT]) && is_array($data[self::FIELD_NUMERATOR_COUNT_EXT]))
                ? $data[self::FIELD_NUMERATOR_COUNT_EXT]
                : null;
            if ($data[self::FIELD_NUMERATOR_COUNT] instanceof FHIRInteger) {
                $this->setNumeratorCount($data[self::FIELD_NUMERATOR_COUNT]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_NUMERATOR_COUNT])) {
                    $this->setNumeratorCount(new FHIRInteger([FHIRInteger::FIELD_VALUE => $data[self::FIELD_NUMERATOR_COUNT]] + $ext));
                } else if (is_array($data[self::FIELD_NUMERATOR_COUNT])) {
                    $this->setNumeratorCount(new FHIRInteger(array_merge($ext, $data[self::FIELD_NUMERATOR_COUNT])));
                }
            } else {
                $this->setNumeratorCount(new FHIRInteger($data[self::FIELD_NUMERATOR_COUNT]));
            }
        }
        if (isset($data[self::FIELD_PRECISION_ESTIMATE])) {
            if (is_array($data[self::FIELD_PRECISION_ESTIMATE])) {
                foreach($data[self::FIELD_PRECISION_ESTIMATE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRRiskEvidenceSynthesisPrecisionEstimate) {
                        $this->addPrecisionEstimate($v);
                    } else {
                        $this->addPrecisionEstimate(new FHIRRiskEvidenceSynthesisPrecisionEstimate($v));
                    }
                }
            } else if ($data[self::FIELD_PRECISION_ESTIMATE] instanceof FHIRRiskEvidenceSynthesisPrecisionEstimate) {
                $this->addPrecisionEstimate($data[self::FIELD_PRECISION_ESTIMATE]);
            } else {
                $this->addPrecisionEstimate(new FHIRRiskEvidenceSynthesisPrecisionEstimate($data[self::FIELD_PRECISION_ESTIMATE]));
            }
        }
        if (isset($data[self::FIELD_TYPE])) {
            if ($data[self::FIELD_TYPE] instanceof FHIRCodeableConcept) {
                $this->setType($data[self::FIELD_TYPE]);
            } else {
                $this->setType(new FHIRCodeableConcept($data[self::FIELD_TYPE]));
            }
        }
        if (isset($data[self::FIELD_UNIT_OF_MEASURE])) {
            if ($data[self::FIELD_UNIT_OF_MEASURE] instanceof FHIRCodeableConcept) {
                $this->setUnitOfMeasure($data[self::FIELD_UNIT_OF_MEASURE]);
            } else {
                $this->setUnitOfMeasure(new FHIRCodeableConcept($data[self::FIELD_UNIT_OF_MEASURE]));
            }
        }
        if (isset($data[self::FIELD_VALUE])) {
            $ext = (isset($data[self::FIELD_VALUE_EXT]) && is_array($data[self::FIELD_VALUE_EXT]))
                ? $data[self::FIELD_VALUE_EXT]
                : null;
            if ($data[self::FIELD_VALUE] instanceof FHIRDecimal) {
                $this->setValue($data[self::FIELD_VALUE]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_VALUE])) {
                    $this->setValue(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $data[self::FIELD_VALUE]] + $ext));
                } else if (is_array($data[self::FIELD_VALUE])) {
                    $this->setValue(new FHIRDecimal(array_merge($ext, $data[self::FIELD_VALUE])));
                }
            } else {
                $this->setValue(new FHIRDecimal($data[self::FIELD_VALUE]));
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
     * @return static
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
        return "<RiskEvidenceSynthesisRiskEstimate{$xmlns}></RiskEvidenceSynthesisRiskEstimate>";
    }


    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The sample size for the group that was measured for this risk estimate.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger
     */
    public function getDenominatorCount()
    {
        return $this->denominatorCount;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The sample size for the group that was measured for this risk estimate.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger $denominatorCount
     * @return static
     */
    public function setDenominatorCount($denominatorCount = null)
    {
        if (null === $denominatorCount) {
            $this->denominatorCount = null;
            return $this;
        }
        if ($denominatorCount instanceof FHIRInteger) {
            $this->denominatorCount = $denominatorCount;
            return $this;
        }
        $this->denominatorCount = new FHIRInteger($denominatorCount);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Human-readable summary of risk estimate.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Human-readable summary of risk estimate.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $description
     * @return static
     */
    public function setDescription($description = null)
    {
        if (null === $description) {
            $this->description = null;
            return $this;
        }
        if ($description instanceof FHIRString) {
            $this->description = $description;
            return $this;
        }
        $this->description = new FHIRString($description);
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The number of group members with the outcome of interest.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger
     */
    public function getNumeratorCount()
    {
        return $this->numeratorCount;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The number of group members with the outcome of interest.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger $numeratorCount
     * @return static
     */
    public function setNumeratorCount($numeratorCount = null)
    {
        if (null === $numeratorCount) {
            $this->numeratorCount = null;
            return $this;
        }
        if ($numeratorCount instanceof FHIRInteger) {
            $this->numeratorCount = $numeratorCount;
            return $this;
        }
        $this->numeratorCount = new FHIRInteger($numeratorCount);
        return $this;
    }

    /**
     * The RiskEvidenceSynthesis resource describes the likelihood of an outcome in a
     * population plus exposure state where the risk estimate is derived from a
     * combination of research studies.
     *
     * A description of the precision of the estimate for the effect.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRRiskEvidenceSynthesis\FHIRRiskEvidenceSynthesisPrecisionEstimate[]
     */
    public function getPrecisionEstimate()
    {
        return $this->precisionEstimate;
    }

    /**
     * The RiskEvidenceSynthesis resource describes the likelihood of an outcome in a
     * population plus exposure state where the risk estimate is derived from a
     * combination of research studies.
     *
     * A description of the precision of the estimate for the effect.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRRiskEvidenceSynthesis\FHIRRiskEvidenceSynthesisPrecisionEstimate $precisionEstimate
     * @return static
     */
    public function addPrecisionEstimate(FHIRRiskEvidenceSynthesisPrecisionEstimate $precisionEstimate = null)
    {
        $this->precisionEstimate[] = $precisionEstimate;
        return $this;
    }

    /**
     * The RiskEvidenceSynthesis resource describes the likelihood of an outcome in a
     * population plus exposure state where the risk estimate is derived from a
     * combination of research studies.
     *
     * A description of the precision of the estimate for the effect.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRRiskEvidenceSynthesis\FHIRRiskEvidenceSynthesisPrecisionEstimate[] $precisionEstimate
     * @return static
     */
    public function setPrecisionEstimate(array $precisionEstimate = [])
    {
        $this->precisionEstimate = [];
        if ([] === $precisionEstimate) {
            return $this;
        }
        foreach($precisionEstimate as $v) {
            if ($v instanceof FHIRRiskEvidenceSynthesisPrecisionEstimate) {
                $this->addPrecisionEstimate($v);
            } else {
                $this->addPrecisionEstimate(new FHIRRiskEvidenceSynthesisPrecisionEstimate($v));
            }
        }
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Examples include proportion and mean.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Examples include proportion and mean.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $type
     * @return static
     */
    public function setType(FHIRCodeableConcept $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies the UCUM unit for the outcome.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getUnitOfMeasure()
    {
        return $this->unitOfMeasure;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies the UCUM unit for the outcome.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $unitOfMeasure
     * @return static
     */
    public function setUnitOfMeasure(FHIRCodeableConcept $unitOfMeasure = null)
    {
        $this->unitOfMeasure = $unitOfMeasure;
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The point estimate of the risk estimate.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The point estimate of the risk estimate.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal $value
     * @return static
     */
    public function setValue($value = null)
    {
        if (null === $value) {
            $this->value = null;
            return $this;
        }
        if ($value instanceof FHIRDecimal) {
            $this->value = $value;
            return $this;
        }
        $this->value = new FHIRDecimal($value);
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRRiskEvidenceSynthesis\FHIRRiskEvidenceSynthesisRiskEstimate $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRRiskEvidenceSynthesis\FHIRRiskEvidenceSynthesisRiskEstimate
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
                throw new \DomainException(sprintf('FHIRRiskEvidenceSynthesisRiskEstimate::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRRiskEvidenceSynthesisRiskEstimate::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRRiskEvidenceSynthesisRiskEstimate;
        } elseif (!is_object($type) || !($type instanceof FHIRRiskEvidenceSynthesisRiskEstimate)) {
            throw new \RuntimeException(sprintf(
                'FHIRRiskEvidenceSynthesisRiskEstimate::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRRiskEvidenceSynthesis\FHIRRiskEvidenceSynthesisRiskEstimate or null, %s seen.',
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
        if (isset($attributes->denominatorCount)) {
            $type->setDenominatorCount((string)$attributes->denominatorCount);
        }
        if (isset($children->denominatorCount)) {
            $type->setDenominatorCount(FHIRInteger::xmlUnserialize($children->denominatorCount));
        }
        if (isset($attributes->description)) {
            $type->setDescription((string)$attributes->description);
        }
        if (isset($children->description)) {
            $type->setDescription(FHIRString::xmlUnserialize($children->description));
        }
        if (isset($attributes->numeratorCount)) {
            $type->setNumeratorCount((string)$attributes->numeratorCount);
        }
        if (isset($children->numeratorCount)) {
            $type->setNumeratorCount(FHIRInteger::xmlUnserialize($children->numeratorCount));
        }
        if (isset($children->precisionEstimate)) {
            foreach($children->precisionEstimate as $child) {
                $type->addPrecisionEstimate(FHIRRiskEvidenceSynthesisPrecisionEstimate::xmlUnserialize($child));
            }
        }
        if (isset($children->type)) {
            $type->setType(FHIRCodeableConcept::xmlUnserialize($children->type));
        }
        if (isset($children->unitOfMeasure)) {
            $type->setUnitOfMeasure(FHIRCodeableConcept::xmlUnserialize($children->unitOfMeasure));
        }
        if (isset($attributes->value)) {
            $type->setValue((string)$attributes->value);
        }
        if (isset($children->value)) {
            $type->setValue(FHIRDecimal::xmlUnserialize($children->value));
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
        if (null !== ($v = $this->getDenominatorCount())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DENOMINATOR_COUNT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDescription())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DESCRIPTION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getNumeratorCount())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_NUMERATOR_COUNT, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getPrecisionEstimate())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PRECISION_ESTIMATE, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if (null !== ($v = $this->getType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TYPE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getUnitOfMeasure())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_UNIT_OF_MEASURE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValue())) {
            $sxe->addAttribute(self::FIELD_VALUE, (string)$v);
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getDenominatorCount())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_DENOMINATOR_COUNT] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_DENOMINATOR_COUNT_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_DENOMINATOR_COUNT] = $v;
            }
        }
        if (null !== ($v = $this->getDescription())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_DESCRIPTION] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_DESCRIPTION_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_DESCRIPTION] = $v;
            }
        }
        if (null !== ($v = $this->getNumeratorCount())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_NUMERATOR_COUNT] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_NUMERATOR_COUNT_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_NUMERATOR_COUNT] = $v;
            }
        }
        if ([] !== ($vs = $this->getPrecisionEstimate())) {
            $a[self::FIELD_PRECISION_ESTIMATE] = $vs;
        }
        if (null !== ($v = $this->getType())) {
            $a[self::FIELD_TYPE] = $v;
        }
        if (null !== ($v = $this->getUnitOfMeasure())) {
            $a[self::FIELD_UNIT_OF_MEASURE] = $v;
        }
        if (null !== ($v = $this->getValue())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_VALUE] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_VALUE_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_VALUE] = $v;
            }
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