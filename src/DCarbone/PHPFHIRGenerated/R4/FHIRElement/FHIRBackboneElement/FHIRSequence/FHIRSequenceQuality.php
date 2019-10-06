<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSequence;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 6th, 2019 09:04+0000
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
 *   Generated on Thu, Dec 27, 2018 22:37+1100 for FHIR v4.0.0
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
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQualityType;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * Raw data describing a biological sequence.
 *
 * Class FHIRSequenceQuality
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSequence
 */
class FHIRSequenceQuality extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_SEQUENCE_DOT_QUALITY;

    const FIELD_END = 'end';
    const FIELD_END_EXT = '_end';
    const FIELD_F_SCORE = 'fScore';
    const FIELD_F_SCORE_EXT = '_fScore';
    const FIELD_GT_FP = 'gtFP';
    const FIELD_GT_FP_EXT = '_gtFP';
    const FIELD_METHOD = 'method';
    const FIELD_PRECISION = 'precision';
    const FIELD_PRECISION_EXT = '_precision';
    const FIELD_QUERY_FP = 'queryFP';
    const FIELD_QUERY_FP_EXT = '_queryFP';
    const FIELD_QUERY_TP = 'queryTP';
    const FIELD_QUERY_TP_EXT = '_queryTP';
    const FIELD_RECALL = 'recall';
    const FIELD_RECALL_EXT = '_recall';
    const FIELD_ROC = 'roc';
    const FIELD_SCORE = 'score';
    const FIELD_STANDARD_SEQUENCE = 'standardSequence';
    const FIELD_START = 'start';
    const FIELD_START_EXT = '_start';
    const FIELD_TRUTH_FN = 'truthFN';
    const FIELD_TRUTH_FN_EXT = '_truthFN';
    const FIELD_TRUTH_TP = 'truthTP';
    const FIELD_TRUTH_TP_EXT = '_truthTP';
    const FIELD_TYPE = 'type';

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * End position of the sequence.If the coordinate system is 0-based then end is
     * exclusive and does not include the last position. If the coordinate system is
     * 1-base, then end is inclusive and includes the last position.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger
     */
    private $end = null;
    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Harmonic mean of Recall and Precision, computed as: 2 * precision * recall /
     * (precision + recall).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal
     */
    private $fScore = null;
    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The number of false positives where the non-REF alleles in the Truth and Query
     * Call Sets match (i.e. cases where the truth is 1/1 and the query is 0/1 or
     * similar).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal
     */
    private $gtFP = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Which method is used to get sequence quality.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    private $method = null;
    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * QUERY.TP / (QUERY.TP + QUERY.FP).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal
     */
    private $precision = null;
    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * False positives, i.e. the number of sites in the Query Call Set for which there
     * is no path through the Truth Call Set that is consistent with this site. Sites
     * with correct variant but incorrect genotype are counted here.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal
     */
    private $queryFP = null;
    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * True positives, from the perspective of the query data, i.e. the number of sites
     * in the Query Call Set for which there are paths through the Truth Call Set that
     * are consistent with all of the alleles at this site, and for which there is an
     * accurate genotype call for the event.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal
     */
    private $queryTP = null;
    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * TRUTH.TP / (TRUTH.TP + TRUTH.FN).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal
     */
    private $recall = null;
    /**
     * Raw data describing a biological sequence.
     *
     * Receiver Operator Characteristic (ROC) Curve to give sensitivity/specificity
     * tradeoff.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceRoc
     */
    private $roc = null;
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The score of an experimentally derived feature such as a p-value
     * ([SO:0001685](http://www.sequenceontology.org/browser/current_svn/term/SO:0001685)).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity
     */
    private $score = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Gold standard sequence used for comparing against.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    private $standardSequence = null;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Start position of the sequence. If the coordinate system is either 0-based or
     * 1-based, then start position is inclusive.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger
     */
    private $start = null;
    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * False negatives, i.e. the number of sites in the Truth Call Set for which there
     * is no path through the Query Call Set that is consistent with all of the alleles
     * at this site, or sites for which there is an inaccurate genotype call for the
     * event. Sites with correct variant but incorrect genotype are counted here.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal
     */
    private $truthFN = null;
    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * True positives, from the perspective of the truth data, i.e. the number of sites
     * in the Truth Call Set for which there are paths through the Query Call Set that
     * are consistent with all of the alleles at this site, and for which there is an
     * accurate genotype call for the event.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal
     */
    private $truthTP = null;
    /**
     * Type for quality report.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * INDEL / SNP / Undefined variant.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQualityType
     */
    private $type = null;

    /**
     * FHIRSequenceQuality Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSequenceQuality::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_END])) {
            $ext = (isset($data[self::FIELD_END_EXT]) && is_array($data[self::FIELD_END_EXT]))
                ? $data[self::FIELD_END_EXT]
                : null;
            if ($data[self::FIELD_END] instanceof FHIRInteger) {
                $this->setEnd($data[self::FIELD_END]);
            } elseif ($ext && is_scalar($data[self::FIELD_END])) {
                $this->setEnd(new FHIRInteger([FHIRInteger::FIELD_VALUE => $data[self::FIELD_END]] + $ext));
            } else {
                $this->setEnd(new FHIRInteger($data[self::FIELD_END]));
            }
        }
        if (isset($data[self::FIELD_F_SCORE])) {
            $ext = (isset($data[self::FIELD_F_SCORE_EXT]) && is_array($data[self::FIELD_F_SCORE_EXT]))
                ? $data[self::FIELD_F_SCORE_EXT]
                : null;
            if ($data[self::FIELD_F_SCORE] instanceof FHIRDecimal) {
                $this->setFScore($data[self::FIELD_F_SCORE]);
            } elseif ($ext && is_scalar($data[self::FIELD_F_SCORE])) {
                $this->setFScore(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $data[self::FIELD_F_SCORE]] + $ext));
            } else {
                $this->setFScore(new FHIRDecimal($data[self::FIELD_F_SCORE]));
            }
        }
        if (isset($data[self::FIELD_GT_FP])) {
            $ext = (isset($data[self::FIELD_GT_FP_EXT]) && is_array($data[self::FIELD_GT_FP_EXT]))
                ? $data[self::FIELD_GT_FP_EXT]
                : null;
            if ($data[self::FIELD_GT_FP] instanceof FHIRDecimal) {
                $this->setGtFP($data[self::FIELD_GT_FP]);
            } elseif ($ext && is_scalar($data[self::FIELD_GT_FP])) {
                $this->setGtFP(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $data[self::FIELD_GT_FP]] + $ext));
            } else {
                $this->setGtFP(new FHIRDecimal($data[self::FIELD_GT_FP]));
            }
        }
        if (isset($data[self::FIELD_METHOD])) {
            if ($data[self::FIELD_METHOD] instanceof FHIRCodeableConcept) {
                $this->setMethod($data[self::FIELD_METHOD]);
            } else {
                $this->setMethod(new FHIRCodeableConcept($data[self::FIELD_METHOD]));
            }
        }
        if (isset($data[self::FIELD_PRECISION])) {
            $ext = (isset($data[self::FIELD_PRECISION_EXT]) && is_array($data[self::FIELD_PRECISION_EXT]))
                ? $data[self::FIELD_PRECISION_EXT]
                : null;
            if ($data[self::FIELD_PRECISION] instanceof FHIRDecimal) {
                $this->setPrecision($data[self::FIELD_PRECISION]);
            } elseif ($ext && is_scalar($data[self::FIELD_PRECISION])) {
                $this->setPrecision(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $data[self::FIELD_PRECISION]] + $ext));
            } else {
                $this->setPrecision(new FHIRDecimal($data[self::FIELD_PRECISION]));
            }
        }
        if (isset($data[self::FIELD_QUERY_FP])) {
            $ext = (isset($data[self::FIELD_QUERY_FP_EXT]) && is_array($data[self::FIELD_QUERY_FP_EXT]))
                ? $data[self::FIELD_QUERY_FP_EXT]
                : null;
            if ($data[self::FIELD_QUERY_FP] instanceof FHIRDecimal) {
                $this->setQueryFP($data[self::FIELD_QUERY_FP]);
            } elseif ($ext && is_scalar($data[self::FIELD_QUERY_FP])) {
                $this->setQueryFP(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $data[self::FIELD_QUERY_FP]] + $ext));
            } else {
                $this->setQueryFP(new FHIRDecimal($data[self::FIELD_QUERY_FP]));
            }
        }
        if (isset($data[self::FIELD_QUERY_TP])) {
            $ext = (isset($data[self::FIELD_QUERY_TP_EXT]) && is_array($data[self::FIELD_QUERY_TP_EXT]))
                ? $data[self::FIELD_QUERY_TP_EXT]
                : null;
            if ($data[self::FIELD_QUERY_TP] instanceof FHIRDecimal) {
                $this->setQueryTP($data[self::FIELD_QUERY_TP]);
            } elseif ($ext && is_scalar($data[self::FIELD_QUERY_TP])) {
                $this->setQueryTP(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $data[self::FIELD_QUERY_TP]] + $ext));
            } else {
                $this->setQueryTP(new FHIRDecimal($data[self::FIELD_QUERY_TP]));
            }
        }
        if (isset($data[self::FIELD_RECALL])) {
            $ext = (isset($data[self::FIELD_RECALL_EXT]) && is_array($data[self::FIELD_RECALL_EXT]))
                ? $data[self::FIELD_RECALL_EXT]
                : null;
            if ($data[self::FIELD_RECALL] instanceof FHIRDecimal) {
                $this->setRecall($data[self::FIELD_RECALL]);
            } elseif ($ext && is_scalar($data[self::FIELD_RECALL])) {
                $this->setRecall(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $data[self::FIELD_RECALL]] + $ext));
            } else {
                $this->setRecall(new FHIRDecimal($data[self::FIELD_RECALL]));
            }
        }
        if (isset($data[self::FIELD_ROC])) {
            if ($data[self::FIELD_ROC] instanceof FHIRSequenceRoc) {
                $this->setRoc($data[self::FIELD_ROC]);
            } else {
                $this->setRoc(new FHIRSequenceRoc($data[self::FIELD_ROC]));
            }
        }
        if (isset($data[self::FIELD_SCORE])) {
            if ($data[self::FIELD_SCORE] instanceof FHIRQuantity) {
                $this->setScore($data[self::FIELD_SCORE]);
            } else {
                $this->setScore(new FHIRQuantity($data[self::FIELD_SCORE]));
            }
        }
        if (isset($data[self::FIELD_STANDARD_SEQUENCE])) {
            if ($data[self::FIELD_STANDARD_SEQUENCE] instanceof FHIRCodeableConcept) {
                $this->setStandardSequence($data[self::FIELD_STANDARD_SEQUENCE]);
            } else {
                $this->setStandardSequence(new FHIRCodeableConcept($data[self::FIELD_STANDARD_SEQUENCE]));
            }
        }
        if (isset($data[self::FIELD_START])) {
            $ext = (isset($data[self::FIELD_START_EXT]) && is_array($data[self::FIELD_START_EXT]))
                ? $data[self::FIELD_START_EXT]
                : null;
            if ($data[self::FIELD_START] instanceof FHIRInteger) {
                $this->setStart($data[self::FIELD_START]);
            } elseif ($ext && is_scalar($data[self::FIELD_START])) {
                $this->setStart(new FHIRInteger([FHIRInteger::FIELD_VALUE => $data[self::FIELD_START]] + $ext));
            } else {
                $this->setStart(new FHIRInteger($data[self::FIELD_START]));
            }
        }
        if (isset($data[self::FIELD_TRUTH_FN])) {
            $ext = (isset($data[self::FIELD_TRUTH_FN_EXT]) && is_array($data[self::FIELD_TRUTH_FN_EXT]))
                ? $data[self::FIELD_TRUTH_FN_EXT]
                : null;
            if ($data[self::FIELD_TRUTH_FN] instanceof FHIRDecimal) {
                $this->setTruthFN($data[self::FIELD_TRUTH_FN]);
            } elseif ($ext && is_scalar($data[self::FIELD_TRUTH_FN])) {
                $this->setTruthFN(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $data[self::FIELD_TRUTH_FN]] + $ext));
            } else {
                $this->setTruthFN(new FHIRDecimal($data[self::FIELD_TRUTH_FN]));
            }
        }
        if (isset($data[self::FIELD_TRUTH_TP])) {
            $ext = (isset($data[self::FIELD_TRUTH_TP_EXT]) && is_array($data[self::FIELD_TRUTH_TP_EXT]))
                ? $data[self::FIELD_TRUTH_TP_EXT]
                : null;
            if ($data[self::FIELD_TRUTH_TP] instanceof FHIRDecimal) {
                $this->setTruthTP($data[self::FIELD_TRUTH_TP]);
            } elseif ($ext && is_scalar($data[self::FIELD_TRUTH_TP])) {
                $this->setTruthTP(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $data[self::FIELD_TRUTH_TP]] + $ext));
            } else {
                $this->setTruthTP(new FHIRDecimal($data[self::FIELD_TRUTH_TP]));
            }
        }
        if (isset($data[self::FIELD_TYPE])) {
            if ($data[self::FIELD_TYPE] instanceof FHIRQualityType) {
                $this->setType($data[self::FIELD_TYPE]);
            } else {
                $this->setType(new FHIRQualityType($data[self::FIELD_TYPE]));
            }
        }
    }

    /**
     * @return string
     */
    public function getFHIRTypeName()
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * End position of the sequence.If the coordinate system is 0-based then end is
     * exclusive and does not include the last position. If the coordinate system is
     * 1-base, then end is inclusive and includes the last position.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * End position of the sequence.If the coordinate system is 0-based then end is
     * exclusive and does not include the last position. If the coordinate system is
     * 1-base, then end is inclusive and includes the last position.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger $end
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceQuality
     */
    public function setEnd($end = null)
    {
        if (null === $end) {
            $this->end = null;
            return $this;
        }
        if ($end instanceof FHIRInteger) {
            $this->end = $end;
            return $this;
        }
        $this->end = new FHIRInteger($end);
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Harmonic mean of Recall and Precision, computed as: 2 * precision * recall /
     * (precision + recall).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal
     */
    public function getFScore()
    {
        return $this->fScore;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Harmonic mean of Recall and Precision, computed as: 2 * precision * recall /
     * (precision + recall).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal $fScore
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceQuality
     */
    public function setFScore($fScore = null)
    {
        if (null === $fScore) {
            $this->fScore = null;
            return $this;
        }
        if ($fScore instanceof FHIRDecimal) {
            $this->fScore = $fScore;
            return $this;
        }
        $this->fScore = new FHIRDecimal($fScore);
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The number of false positives where the non-REF alleles in the Truth and Query
     * Call Sets match (i.e. cases where the truth is 1/1 and the query is 0/1 or
     * similar).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal
     */
    public function getGtFP()
    {
        return $this->gtFP;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The number of false positives where the non-REF alleles in the Truth and Query
     * Call Sets match (i.e. cases where the truth is 1/1 and the query is 0/1 or
     * similar).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal $gtFP
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceQuality
     */
    public function setGtFP($gtFP = null)
    {
        if (null === $gtFP) {
            $this->gtFP = null;
            return $this;
        }
        if ($gtFP instanceof FHIRDecimal) {
            $this->gtFP = $gtFP;
            return $this;
        }
        $this->gtFP = new FHIRDecimal($gtFP);
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Which method is used to get sequence quality.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Which method is used to get sequence quality.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $method
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceQuality
     */
    public function setMethod(FHIRCodeableConcept $method = null)
    {
        $this->method = $method;
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * QUERY.TP / (QUERY.TP + QUERY.FP).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal
     */
    public function getPrecision()
    {
        return $this->precision;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * QUERY.TP / (QUERY.TP + QUERY.FP).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal $precision
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceQuality
     */
    public function setPrecision($precision = null)
    {
        if (null === $precision) {
            $this->precision = null;
            return $this;
        }
        if ($precision instanceof FHIRDecimal) {
            $this->precision = $precision;
            return $this;
        }
        $this->precision = new FHIRDecimal($precision);
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * False positives, i.e. the number of sites in the Query Call Set for which there
     * is no path through the Truth Call Set that is consistent with this site. Sites
     * with correct variant but incorrect genotype are counted here.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal
     */
    public function getQueryFP()
    {
        return $this->queryFP;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * False positives, i.e. the number of sites in the Query Call Set for which there
     * is no path through the Truth Call Set that is consistent with this site. Sites
     * with correct variant but incorrect genotype are counted here.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal $queryFP
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceQuality
     */
    public function setQueryFP($queryFP = null)
    {
        if (null === $queryFP) {
            $this->queryFP = null;
            return $this;
        }
        if ($queryFP instanceof FHIRDecimal) {
            $this->queryFP = $queryFP;
            return $this;
        }
        $this->queryFP = new FHIRDecimal($queryFP);
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * True positives, from the perspective of the query data, i.e. the number of sites
     * in the Query Call Set for which there are paths through the Truth Call Set that
     * are consistent with all of the alleles at this site, and for which there is an
     * accurate genotype call for the event.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal
     */
    public function getQueryTP()
    {
        return $this->queryTP;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * True positives, from the perspective of the query data, i.e. the number of sites
     * in the Query Call Set for which there are paths through the Truth Call Set that
     * are consistent with all of the alleles at this site, and for which there is an
     * accurate genotype call for the event.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal $queryTP
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceQuality
     */
    public function setQueryTP($queryTP = null)
    {
        if (null === $queryTP) {
            $this->queryTP = null;
            return $this;
        }
        if ($queryTP instanceof FHIRDecimal) {
            $this->queryTP = $queryTP;
            return $this;
        }
        $this->queryTP = new FHIRDecimal($queryTP);
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * TRUTH.TP / (TRUTH.TP + TRUTH.FN).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal
     */
    public function getRecall()
    {
        return $this->recall;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * TRUTH.TP / (TRUTH.TP + TRUTH.FN).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal $recall
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceQuality
     */
    public function setRecall($recall = null)
    {
        if (null === $recall) {
            $this->recall = null;
            return $this;
        }
        if ($recall instanceof FHIRDecimal) {
            $this->recall = $recall;
            return $this;
        }
        $this->recall = new FHIRDecimal($recall);
        return $this;
    }

    /**
     * Raw data describing a biological sequence.
     *
     * Receiver Operator Characteristic (ROC) Curve to give sensitivity/specificity
     * tradeoff.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceRoc
     */
    public function getRoc()
    {
        return $this->roc;
    }

    /**
     * Raw data describing a biological sequence.
     *
     * Receiver Operator Characteristic (ROC) Curve to give sensitivity/specificity
     * tradeoff.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceRoc $roc
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceQuality
     */
    public function setRoc(FHIRSequenceRoc $roc = null)
    {
        $this->roc = $roc;
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The score of an experimentally derived feature such as a p-value
     * ([SO:0001685](http://www.sequenceontology.org/browser/current_svn/term/SO:0001685)).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The score of an experimentally derived feature such as a p-value
     * ([SO:0001685](http://www.sequenceontology.org/browser/current_svn/term/SO:0001685)).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity $score
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceQuality
     */
    public function setScore(FHIRQuantity $score = null)
    {
        $this->score = $score;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Gold standard sequence used for comparing against.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getStandardSequence()
    {
        return $this->standardSequence;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Gold standard sequence used for comparing against.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $standardSequence
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceQuality
     */
    public function setStandardSequence(FHIRCodeableConcept $standardSequence = null)
    {
        $this->standardSequence = $standardSequence;
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Start position of the sequence. If the coordinate system is either 0-based or
     * 1-based, then start position is inclusive.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Start position of the sequence. If the coordinate system is either 0-based or
     * 1-based, then start position is inclusive.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger $start
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceQuality
     */
    public function setStart($start = null)
    {
        if (null === $start) {
            $this->start = null;
            return $this;
        }
        if ($start instanceof FHIRInteger) {
            $this->start = $start;
            return $this;
        }
        $this->start = new FHIRInteger($start);
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * False negatives, i.e. the number of sites in the Truth Call Set for which there
     * is no path through the Query Call Set that is consistent with all of the alleles
     * at this site, or sites for which there is an inaccurate genotype call for the
     * event. Sites with correct variant but incorrect genotype are counted here.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal
     */
    public function getTruthFN()
    {
        return $this->truthFN;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * False negatives, i.e. the number of sites in the Truth Call Set for which there
     * is no path through the Query Call Set that is consistent with all of the alleles
     * at this site, or sites for which there is an inaccurate genotype call for the
     * event. Sites with correct variant but incorrect genotype are counted here.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal $truthFN
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceQuality
     */
    public function setTruthFN($truthFN = null)
    {
        if (null === $truthFN) {
            $this->truthFN = null;
            return $this;
        }
        if ($truthFN instanceof FHIRDecimal) {
            $this->truthFN = $truthFN;
            return $this;
        }
        $this->truthFN = new FHIRDecimal($truthFN);
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * True positives, from the perspective of the truth data, i.e. the number of sites
     * in the Truth Call Set for which there are paths through the Query Call Set that
     * are consistent with all of the alleles at this site, and for which there is an
     * accurate genotype call for the event.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal
     */
    public function getTruthTP()
    {
        return $this->truthTP;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * True positives, from the perspective of the truth data, i.e. the number of sites
     * in the Truth Call Set for which there are paths through the Query Call Set that
     * are consistent with all of the alleles at this site, and for which there is an
     * accurate genotype call for the event.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal $truthTP
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceQuality
     */
    public function setTruthTP($truthTP = null)
    {
        if (null === $truthTP) {
            $this->truthTP = null;
            return $this;
        }
        if ($truthTP instanceof FHIRDecimal) {
            $this->truthTP = $truthTP;
            return $this;
        }
        $this->truthTP = new FHIRDecimal($truthTP);
        return $this;
    }

    /**
     * Type for quality report.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * INDEL / SNP / Undefined variant.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQualityType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Type for quality report.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * INDEL / SNP / Undefined variant.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQualityType $type
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceQuality
     */
    public function setType(FHIRQualityType $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceQuality $type
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceQuality
     */
    public static function xmlUnserialize($sxe = null, PHPFHIRTypeInterface $type = null)
    {
        if (null === $sxe) {
            return null;
        }
        if (is_string($sxe)) {
            libxml_use_internal_errors(true);
            $sxe = new \SimpleXMLElement($sxe);
            if ($sxe === false) {
                throw new \DomainException(sprintf('FHIRSequenceQuality::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRSequenceQuality::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRBackboneElement::xmlUnserialize($sxe, new FHIRSequenceQuality);
        } elseif (!is_object($type) || !($type instanceof FHIRSequenceQuality)) {
            throw new \RuntimeException(sprintf(
                'FHIRSequenceQuality::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceQuality or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($attributes->end)) {
            $type->setEnd((string)$attributes->end);
        }
        if (isset($children->end)) {
            $type->setEnd(FHIRInteger::xmlUnserialize($children->end));
        }
        if (isset($attributes->fScore)) {
            $type->setFScore((string)$attributes->fScore);
        }
        if (isset($children->fScore)) {
            $type->setFScore(FHIRDecimal::xmlUnserialize($children->fScore));
        }
        if (isset($attributes->gtFP)) {
            $type->setGtFP((string)$attributes->gtFP);
        }
        if (isset($children->gtFP)) {
            $type->setGtFP(FHIRDecimal::xmlUnserialize($children->gtFP));
        }
        if (isset($children->method)) {
            $type->setMethod(FHIRCodeableConcept::xmlUnserialize($children->method));
        }
        if (isset($attributes->precision)) {
            $type->setPrecision((string)$attributes->precision);
        }
        if (isset($children->precision)) {
            $type->setPrecision(FHIRDecimal::xmlUnserialize($children->precision));
        }
        if (isset($attributes->queryFP)) {
            $type->setQueryFP((string)$attributes->queryFP);
        }
        if (isset($children->queryFP)) {
            $type->setQueryFP(FHIRDecimal::xmlUnserialize($children->queryFP));
        }
        if (isset($attributes->queryTP)) {
            $type->setQueryTP((string)$attributes->queryTP);
        }
        if (isset($children->queryTP)) {
            $type->setQueryTP(FHIRDecimal::xmlUnserialize($children->queryTP));
        }
        if (isset($attributes->recall)) {
            $type->setRecall((string)$attributes->recall);
        }
        if (isset($children->recall)) {
            $type->setRecall(FHIRDecimal::xmlUnserialize($children->recall));
        }
        if (isset($children->roc)) {
            $type->setRoc(FHIRSequenceRoc::xmlUnserialize($children->roc));
        }
        if (isset($children->score)) {
            $type->setScore(FHIRQuantity::xmlUnserialize($children->score));
        }
        if (isset($children->standardSequence)) {
            $type->setStandardSequence(FHIRCodeableConcept::xmlUnserialize($children->standardSequence));
        }
        if (isset($attributes->start)) {
            $type->setStart((string)$attributes->start);
        }
        if (isset($children->start)) {
            $type->setStart(FHIRInteger::xmlUnserialize($children->start));
        }
        if (isset($attributes->truthFN)) {
            $type->setTruthFN((string)$attributes->truthFN);
        }
        if (isset($children->truthFN)) {
            $type->setTruthFN(FHIRDecimal::xmlUnserialize($children->truthFN));
        }
        if (isset($attributes->truthTP)) {
            $type->setTruthTP((string)$attributes->truthTP);
        }
        if (isset($children->truthTP)) {
            $type->setTruthTP(FHIRDecimal::xmlUnserialize($children->truthTP));
        }
        if (isset($children->type)) {
            $type->setType(FHIRQualityType::xmlUnserialize($children->type));
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement $sxe
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<SequenceQuality xmlns="http://hl7.org/fhir"></SequenceQuality>');
        }
        parent::xmlSerialize($sxe);
        if (null !== ($v = $this->getEnd())) {
            $sxe->addAttribute(self::FIELD_END, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_END));
            }
        }
        if (null !== ($v = $this->getFScore())) {
            $sxe->addAttribute(self::FIELD_F_SCORE, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_F_SCORE));
            }
        }
        if (null !== ($v = $this->getGtFP())) {
            $sxe->addAttribute(self::FIELD_GT_FP, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_GT_FP));
            }
        }

        if (null !== ($v = $this->getMethod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_METHOD));
        }
        if (null !== ($v = $this->getPrecision())) {
            $sxe->addAttribute(self::FIELD_PRECISION, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_PRECISION));
            }
        }
        if (null !== ($v = $this->getQueryFP())) {
            $sxe->addAttribute(self::FIELD_QUERY_FP, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_QUERY_FP));
            }
        }
        if (null !== ($v = $this->getQueryTP())) {
            $sxe->addAttribute(self::FIELD_QUERY_TP, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_QUERY_TP));
            }
        }
        if (null !== ($v = $this->getRecall())) {
            $sxe->addAttribute(self::FIELD_RECALL, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_RECALL));
            }
        }

        if (null !== ($v = $this->getRoc())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ROC));
        }

        if (null !== ($v = $this->getScore())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SCORE));
        }

        if (null !== ($v = $this->getStandardSequence())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STANDARD_SEQUENCE));
        }
        if (null !== ($v = $this->getStart())) {
            $sxe->addAttribute(self::FIELD_START, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_START));
            }
        }
        if (null !== ($v = $this->getTruthFN())) {
            $sxe->addAttribute(self::FIELD_TRUTH_FN, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_TRUTH_FN));
            }
        }
        if (null !== ($v = $this->getTruthTP())) {
            $sxe->addAttribute(self::FIELD_TRUTH_TP, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_TRUTH_TP));
            }
        }

        if (null !== ($v = $this->getType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TYPE));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getEnd())) {
            $a[self::FIELD_END] = (string)$v;
            $a[self::FIELD_END_EXT] = $v;
        }
        if (null !== ($v = $this->getFScore())) {
            $a[self::FIELD_F_SCORE] = (string)$v;
            $a[self::FIELD_F_SCORE_EXT] = $v;
        }
        if (null !== ($v = $this->getGtFP())) {
            $a[self::FIELD_GT_FP] = (string)$v;
            $a[self::FIELD_GT_FP_EXT] = $v;
        }
        if (null !== ($v = $this->getMethod())) {
            $a[self::FIELD_METHOD] = $v;
        }
        if (null !== ($v = $this->getPrecision())) {
            $a[self::FIELD_PRECISION] = (string)$v;
            $a[self::FIELD_PRECISION_EXT] = $v;
        }
        if (null !== ($v = $this->getQueryFP())) {
            $a[self::FIELD_QUERY_FP] = (string)$v;
            $a[self::FIELD_QUERY_FP_EXT] = $v;
        }
        if (null !== ($v = $this->getQueryTP())) {
            $a[self::FIELD_QUERY_TP] = (string)$v;
            $a[self::FIELD_QUERY_TP_EXT] = $v;
        }
        if (null !== ($v = $this->getRecall())) {
            $a[self::FIELD_RECALL] = (string)$v;
            $a[self::FIELD_RECALL_EXT] = $v;
        }
        if (null !== ($v = $this->getRoc())) {
            $a[self::FIELD_ROC] = $v;
        }
        if (null !== ($v = $this->getScore())) {
            $a[self::FIELD_SCORE] = $v;
        }
        if (null !== ($v = $this->getStandardSequence())) {
            $a[self::FIELD_STANDARD_SEQUENCE] = $v;
        }
        if (null !== ($v = $this->getStart())) {
            $a[self::FIELD_START] = (string)$v;
            $a[self::FIELD_START_EXT] = $v;
        }
        if (null !== ($v = $this->getTruthFN())) {
            $a[self::FIELD_TRUTH_FN] = (string)$v;
            $a[self::FIELD_TRUTH_FN_EXT] = $v;
        }
        if (null !== ($v = $this->getTruthTP())) {
            $a[self::FIELD_TRUTH_TP] = (string)$v;
            $a[self::FIELD_TRUTH_TP_EXT] = $v;
        }
        if (null !== ($v = $this->getType())) {
            $a[self::FIELD_TYPE] = $v;
        }
        return [PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE => self::FHIR_TYPE_NAME] + $a;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}