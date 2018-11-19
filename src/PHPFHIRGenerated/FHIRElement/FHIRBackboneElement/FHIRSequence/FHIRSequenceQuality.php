<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSequence;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: November 19th, 2018
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2018 Daniel Carbone (daniel.p.carbone@gmail.com)
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

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRDecimal;
use PHPFHIRGenerated\FHIRElement\FHIRInteger;
use PHPFHIRGenerated\FHIRElement\FHIRQualityType;
use PHPFHIRGenerated\FHIRElement\FHIRQuantity;

/**
 * Raw data describing a biological sequence.
 *
 * Class FHIRSequenceQuality
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSequence
 */
class FHIRSequenceQuality extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'Sequence.Quality';

    /**
     * End position of the sequence.If the coordinate system is 0-based then end is is exclusive and does not include the last position. If the coordinate system is 1-base, then end is inclusive and includes the last position.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    private $end = null;

    /**
     * Harmonic mean of Recall and Precision, computed as: 2 * precision * recall / (precision + recall).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    private $fScore = null;

    /**
     * The number of false positives where the non-REF alleles in the Truth and Query Call Sets match (i.e. cases where the truth is 1/1 and the query is 0/1 or similar).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    private $gtFP = null;

    /**
     * Which method is used to get sequence quality.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $method = null;

    /**
     * QUERY.TP / (QUERY.TP + QUERY.FP).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    private $precision = null;

    /**
     * False positives, i.e. the number of sites in the Query Call Set for which there is no path through the Truth Call Set that is consistent with this site. Sites with correct variant but incorrect genotype are counted here.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    private $queryFP = null;

    /**
     * True positives, from the perspective of the query data, i.e. the number of sites in the Query Call Set for which there are paths through the Truth Call Set that are consistent with all of the alleles at this site, and for which there is an accurate genotype call for the event.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    private $queryTP = null;

    /**
     * TRUTH.TP / (TRUTH.TP + TRUTH.FN).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    private $recall = null;

    /**
     * The score of an experimentally derived feature such as a p-value ([SO:0001685](http://www.sequenceontology.org/browser/current_svn/term/SO:0001685)).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    private $score = null;

    /**
     * Gold standard sequence used for comparing against.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $standardSequence = null;

    /**
     * Start position of the sequence. If the coordinate system is either 0-based or 1-based, then start position is inclusive.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    private $start = null;

    /**
     * False negatives, i.e. the number of sites in the Truth Call Set for which there is no path through the Query Call Set that is consistent with all of the alleles at this site, or sites for which there is an inaccurate genotype call for the event. Sites with correct variant but incorrect genotype are counted here.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    private $truthFN = null;

    /**
     * True positives, from the perspective of the truth data, i.e. the number of sites in the Truth Call Set for which there are paths through the Query Call Set that are consistent with all of the alleles at this site, and for which there is an accurate genotype call for the event.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    private $truthTP = null;

    /**
     * INDEL / SNP / Undefined variant.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQualityType
     */
    private $type = null;

    /**
     * FHIRSequenceQuality Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        if (is_array($data)) {
            if (isset($data['end'])) {
                $value = $data['end'];
                if (is_array($value)) {
                    $value = new FHIRInteger($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRInteger($value);
                }
                if (!($value instanceof FHIRInteger)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceQuality::__construct - Property \"end\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRInteger or data to construct type, saw ".gettype($value)); 
                }
                $this->setEnd($value);
            }
            if (isset($data['fScore'])) {
                $value = $data['fScore'];
                if (is_array($value)) {
                    $value = new FHIRDecimal($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRDecimal($value);
                }
                if (!($value instanceof FHIRDecimal)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceQuality::__construct - Property \"fScore\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRDecimal or data to construct type, saw ".gettype($value)); 
                }
                $this->setFScore($value);
            }
            if (isset($data['gtFP'])) {
                $value = $data['gtFP'];
                if (is_array($value)) {
                    $value = new FHIRDecimal($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRDecimal($value);
                }
                if (!($value instanceof FHIRDecimal)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceQuality::__construct - Property \"gtFP\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRDecimal or data to construct type, saw ".gettype($value)); 
                }
                $this->setGtFP($value);
            }
            if (isset($data['method'])) {
                $value = $data['method'];
                if (is_array($value)) {
                    $value = new FHIRCodeableConcept($value);
                } 
                if (!($value instanceof FHIRCodeableConcept)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceQuality::__construct - Property \"method\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept or data to construct type, saw ".gettype($value)); 
                }
                $this->setMethod($value);
            }
            if (isset($data['precision'])) {
                $value = $data['precision'];
                if (is_array($value)) {
                    $value = new FHIRDecimal($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRDecimal($value);
                }
                if (!($value instanceof FHIRDecimal)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceQuality::__construct - Property \"precision\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRDecimal or data to construct type, saw ".gettype($value)); 
                }
                $this->setPrecision($value);
            }
            if (isset($data['queryFP'])) {
                $value = $data['queryFP'];
                if (is_array($value)) {
                    $value = new FHIRDecimal($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRDecimal($value);
                }
                if (!($value instanceof FHIRDecimal)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceQuality::__construct - Property \"queryFP\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRDecimal or data to construct type, saw ".gettype($value)); 
                }
                $this->setQueryFP($value);
            }
            if (isset($data['queryTP'])) {
                $value = $data['queryTP'];
                if (is_array($value)) {
                    $value = new FHIRDecimal($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRDecimal($value);
                }
                if (!($value instanceof FHIRDecimal)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceQuality::__construct - Property \"queryTP\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRDecimal or data to construct type, saw ".gettype($value)); 
                }
                $this->setQueryTP($value);
            }
            if (isset($data['recall'])) {
                $value = $data['recall'];
                if (is_array($value)) {
                    $value = new FHIRDecimal($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRDecimal($value);
                }
                if (!($value instanceof FHIRDecimal)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceQuality::__construct - Property \"recall\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRDecimal or data to construct type, saw ".gettype($value)); 
                }
                $this->setRecall($value);
            }
            if (isset($data['score'])) {
                $value = $data['score'];
                if (is_array($value)) {
                    $value = new FHIRQuantity($value);
                } 
                if (!($value instanceof FHIRQuantity)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceQuality::__construct - Property \"score\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRQuantity or data to construct type, saw ".gettype($value)); 
                }
                $this->setScore($value);
            }
            if (isset($data['standardSequence'])) {
                $value = $data['standardSequence'];
                if (is_array($value)) {
                    $value = new FHIRCodeableConcept($value);
                } 
                if (!($value instanceof FHIRCodeableConcept)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceQuality::__construct - Property \"standardSequence\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept or data to construct type, saw ".gettype($value)); 
                }
                $this->setStandardSequence($value);
            }
            if (isset($data['start'])) {
                $value = $data['start'];
                if (is_array($value)) {
                    $value = new FHIRInteger($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRInteger($value);
                }
                if (!($value instanceof FHIRInteger)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceQuality::__construct - Property \"start\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRInteger or data to construct type, saw ".gettype($value)); 
                }
                $this->setStart($value);
            }
            if (isset($data['truthFN'])) {
                $value = $data['truthFN'];
                if (is_array($value)) {
                    $value = new FHIRDecimal($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRDecimal($value);
                }
                if (!($value instanceof FHIRDecimal)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceQuality::__construct - Property \"truthFN\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRDecimal or data to construct type, saw ".gettype($value)); 
                }
                $this->setTruthFN($value);
            }
            if (isset($data['truthTP'])) {
                $value = $data['truthTP'];
                if (is_array($value)) {
                    $value = new FHIRDecimal($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRDecimal($value);
                }
                if (!($value instanceof FHIRDecimal)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceQuality::__construct - Property \"truthTP\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRDecimal or data to construct type, saw ".gettype($value)); 
                }
                $this->setTruthTP($value);
            }
            if (isset($data['type'])) {
                $value = $data['type'];
                if (is_array($value)) {
                    $value = new FHIRQualityType($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRQualityType($value);
                }
                if (!($value instanceof FHIRQualityType)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceQuality::__construct - Property \"type\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRQualityType or data to construct type, saw ".gettype($value)); 
                }
                $this->setType($value);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceQuality::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
        parent::__construct($data);
    }

    /**
     * End position of the sequence.If the coordinate system is 0-based then end is is exclusive and does not include the last position. If the coordinate system is 1-base, then end is inclusive and includes the last position.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRInteger
     * @return $this
     */
    public function setEnd($end)
    {
        if (null === $end) {
            return $this; 
        }
        if (is_scalar($end)) {
            $end = new FHIRInteger($end);
        }
        if (!($end instanceof FHIRInteger)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSequenceQuality::setEnd - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRInteger or appropriate scalar value, %s seen.',
                gettype($end)
            ));
        }
        $this->end = $end;
        return $this;
    }

    /**
     * End position of the sequence.If the coordinate system is 0-based then end is is exclusive and does not include the last position. If the coordinate system is 1-base, then end is inclusive and includes the last position.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Harmonic mean of Recall and Precision, computed as: 2 * precision * recall / (precision + recall).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     * @return $this
     */
    public function setFScore($fScore)
    {
        if (null === $fScore) {
            return $this; 
        }
        if (is_scalar($fScore)) {
            $fScore = new FHIRDecimal($fScore);
        }
        if (!($fScore instanceof FHIRDecimal)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSequenceQuality::setFScore - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDecimal or appropriate scalar value, %s seen.',
                gettype($fScore)
            ));
        }
        $this->fScore = $fScore;
        return $this;
    }

    /**
     * Harmonic mean of Recall and Precision, computed as: 2 * precision * recall / (precision + recall).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getFScore()
    {
        return $this->fScore;
    }

    /**
     * The number of false positives where the non-REF alleles in the Truth and Query Call Sets match (i.e. cases where the truth is 1/1 and the query is 0/1 or similar).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     * @return $this
     */
    public function setGtFP($gtFP)
    {
        if (null === $gtFP) {
            return $this; 
        }
        if (is_scalar($gtFP)) {
            $gtFP = new FHIRDecimal($gtFP);
        }
        if (!($gtFP instanceof FHIRDecimal)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSequenceQuality::setGtFP - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDecimal or appropriate scalar value, %s seen.',
                gettype($gtFP)
            ));
        }
        $this->gtFP = $gtFP;
        return $this;
    }

    /**
     * The number of false positives where the non-REF alleles in the Truth and Query Call Sets match (i.e. cases where the truth is 1/1 and the query is 0/1 or similar).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getGtFP()
    {
        return $this->gtFP;
    }

    /**
     * Which method is used to get sequence quality.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setMethod(FHIRCodeableConcept $method = null)
    {
        if (null === $method) {
            return $this; 
        }
        $this->method = $method;
        return $this;
    }

    /**
     * Which method is used to get sequence quality.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * QUERY.TP / (QUERY.TP + QUERY.FP).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     * @return $this
     */
    public function setPrecision($precision)
    {
        if (null === $precision) {
            return $this; 
        }
        if (is_scalar($precision)) {
            $precision = new FHIRDecimal($precision);
        }
        if (!($precision instanceof FHIRDecimal)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSequenceQuality::setPrecision - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDecimal or appropriate scalar value, %s seen.',
                gettype($precision)
            ));
        }
        $this->precision = $precision;
        return $this;
    }

    /**
     * QUERY.TP / (QUERY.TP + QUERY.FP).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getPrecision()
    {
        return $this->precision;
    }

    /**
     * False positives, i.e. the number of sites in the Query Call Set for which there is no path through the Truth Call Set that is consistent with this site. Sites with correct variant but incorrect genotype are counted here.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     * @return $this
     */
    public function setQueryFP($queryFP)
    {
        if (null === $queryFP) {
            return $this; 
        }
        if (is_scalar($queryFP)) {
            $queryFP = new FHIRDecimal($queryFP);
        }
        if (!($queryFP instanceof FHIRDecimal)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSequenceQuality::setQueryFP - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDecimal or appropriate scalar value, %s seen.',
                gettype($queryFP)
            ));
        }
        $this->queryFP = $queryFP;
        return $this;
    }

    /**
     * False positives, i.e. the number of sites in the Query Call Set for which there is no path through the Truth Call Set that is consistent with this site. Sites with correct variant but incorrect genotype are counted here.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getQueryFP()
    {
        return $this->queryFP;
    }

    /**
     * True positives, from the perspective of the query data, i.e. the number of sites in the Query Call Set for which there are paths through the Truth Call Set that are consistent with all of the alleles at this site, and for which there is an accurate genotype call for the event.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     * @return $this
     */
    public function setQueryTP($queryTP)
    {
        if (null === $queryTP) {
            return $this; 
        }
        if (is_scalar($queryTP)) {
            $queryTP = new FHIRDecimal($queryTP);
        }
        if (!($queryTP instanceof FHIRDecimal)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSequenceQuality::setQueryTP - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDecimal or appropriate scalar value, %s seen.',
                gettype($queryTP)
            ));
        }
        $this->queryTP = $queryTP;
        return $this;
    }

    /**
     * True positives, from the perspective of the query data, i.e. the number of sites in the Query Call Set for which there are paths through the Truth Call Set that are consistent with all of the alleles at this site, and for which there is an accurate genotype call for the event.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getQueryTP()
    {
        return $this->queryTP;
    }

    /**
     * TRUTH.TP / (TRUTH.TP + TRUTH.FN).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     * @return $this
     */
    public function setRecall($recall)
    {
        if (null === $recall) {
            return $this; 
        }
        if (is_scalar($recall)) {
            $recall = new FHIRDecimal($recall);
        }
        if (!($recall instanceof FHIRDecimal)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSequenceQuality::setRecall - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDecimal or appropriate scalar value, %s seen.',
                gettype($recall)
            ));
        }
        $this->recall = $recall;
        return $this;
    }

    /**
     * TRUTH.TP / (TRUTH.TP + TRUTH.FN).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getRecall()
    {
        return $this->recall;
    }

    /**
     * The score of an experimentally derived feature such as a p-value ([SO:0001685](http://www.sequenceontology.org/browser/current_svn/term/SO:0001685)).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     * @return $this
     */
    public function setScore(FHIRQuantity $score = null)
    {
        if (null === $score) {
            return $this; 
        }
        $this->score = $score;
        return $this;
    }

    /**
     * The score of an experimentally derived feature such as a p-value ([SO:0001685](http://www.sequenceontology.org/browser/current_svn/term/SO:0001685)).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Gold standard sequence used for comparing against.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setStandardSequence(FHIRCodeableConcept $standardSequence = null)
    {
        if (null === $standardSequence) {
            return $this; 
        }
        $this->standardSequence = $standardSequence;
        return $this;
    }

    /**
     * Gold standard sequence used for comparing against.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getStandardSequence()
    {
        return $this->standardSequence;
    }

    /**
     * Start position of the sequence. If the coordinate system is either 0-based or 1-based, then start position is inclusive.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRInteger
     * @return $this
     */
    public function setStart($start)
    {
        if (null === $start) {
            return $this; 
        }
        if (is_scalar($start)) {
            $start = new FHIRInteger($start);
        }
        if (!($start instanceof FHIRInteger)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSequenceQuality::setStart - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRInteger or appropriate scalar value, %s seen.',
                gettype($start)
            ));
        }
        $this->start = $start;
        return $this;
    }

    /**
     * Start position of the sequence. If the coordinate system is either 0-based or 1-based, then start position is inclusive.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * False negatives, i.e. the number of sites in the Truth Call Set for which there is no path through the Query Call Set that is consistent with all of the alleles at this site, or sites for which there is an inaccurate genotype call for the event. Sites with correct variant but incorrect genotype are counted here.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     * @return $this
     */
    public function setTruthFN($truthFN)
    {
        if (null === $truthFN) {
            return $this; 
        }
        if (is_scalar($truthFN)) {
            $truthFN = new FHIRDecimal($truthFN);
        }
        if (!($truthFN instanceof FHIRDecimal)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSequenceQuality::setTruthFN - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDecimal or appropriate scalar value, %s seen.',
                gettype($truthFN)
            ));
        }
        $this->truthFN = $truthFN;
        return $this;
    }

    /**
     * False negatives, i.e. the number of sites in the Truth Call Set for which there is no path through the Query Call Set that is consistent with all of the alleles at this site, or sites for which there is an inaccurate genotype call for the event. Sites with correct variant but incorrect genotype are counted here.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getTruthFN()
    {
        return $this->truthFN;
    }

    /**
     * True positives, from the perspective of the truth data, i.e. the number of sites in the Truth Call Set for which there are paths through the Query Call Set that are consistent with all of the alleles at this site, and for which there is an accurate genotype call for the event.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     * @return $this
     */
    public function setTruthTP($truthTP)
    {
        if (null === $truthTP) {
            return $this; 
        }
        if (is_scalar($truthTP)) {
            $truthTP = new FHIRDecimal($truthTP);
        }
        if (!($truthTP instanceof FHIRDecimal)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSequenceQuality::setTruthTP - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDecimal or appropriate scalar value, %s seen.',
                gettype($truthTP)
            ));
        }
        $this->truthTP = $truthTP;
        return $this;
    }

    /**
     * True positives, from the perspective of the truth data, i.e. the number of sites in the Truth Call Set for which there are paths through the Query Call Set that are consistent with all of the alleles at this site, and for which there is an accurate genotype call for the event.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getTruthTP()
    {
        return $this->truthTP;
    }

    /**
     * INDEL / SNP / Undefined variant.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQualityType
     * @return $this
     */
    public function setType($type)
    {
        if (null === $type) {
            return $this; 
        }
        if (is_scalar($type)) {
            $type = new FHIRQualityType($type);
        }
        if (!($type instanceof FHIRQualityType)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSequenceQuality::setType - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRQualityType or appropriate scalar value, %s seen.',
                gettype($type)
            ));
        }
        $this->type = $type;
        return $this;
    }

    /**
     * INDEL / SNP / Undefined variant.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQualityType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return (string)self::FHIR_TYPE_NAME;
    }

    /**
     * @return mixed
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getEnd())) {
            $a['end'] = $v;
        }
        if (null !== ($v = $this->getFScore())) {
            $a['fScore'] = $v;
        }
        if (null !== ($v = $this->getGtFP())) {
            $a['gtFP'] = $v;
        }
        if (null !== ($v = $this->getMethod())) {
            $a['method'] = $v;
        }
        if (null !== ($v = $this->getPrecision())) {
            $a['precision'] = $v;
        }
        if (null !== ($v = $this->getQueryFP())) {
            $a['queryFP'] = $v;
        }
        if (null !== ($v = $this->getQueryTP())) {
            $a['queryTP'] = $v;
        }
        if (null !== ($v = $this->getRecall())) {
            $a['recall'] = $v;
        }
        if (null !== ($v = $this->getScore())) {
            $a['score'] = $v;
        }
        if (null !== ($v = $this->getStandardSequence())) {
            $a['standardSequence'] = $v;
        }
        if (null !== ($v = $this->getStart())) {
            $a['start'] = $v;
        }
        if (null !== ($v = $this->getTruthFN())) {
            $a['truthFN'] = $v;
        }
        if (null !== ($v = $this->getTruthTP())) {
            $a['truthTP'] = $v;
        }
        if (null !== ($v = $this->getType())) {
            $a['type'] = $v;
        }
        return $a;
    }

    /**
     * @param bool $returnSXE
     * @param null|\SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, \SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<SequenceQuality xmlns="http://hl7.org/fhir"></SequenceQuality>');
        }
        if (null !== ($v = $this->getEnd())) {
            $v->xmlSerialize(true, $sxe->addChild('end'));
        }
        if (null !== ($v = $this->getFScore())) {
            $v->xmlSerialize(true, $sxe->addChild('fScore'));
        }
        if (null !== ($v = $this->getGtFP())) {
            $v->xmlSerialize(true, $sxe->addChild('gtFP'));
        }
        if (null !== ($v = $this->getMethod())) {
            $v->xmlSerialize(true, $sxe->addChild('method'));
        }
        if (null !== ($v = $this->getPrecision())) {
            $v->xmlSerialize(true, $sxe->addChild('precision'));
        }
        if (null !== ($v = $this->getQueryFP())) {
            $v->xmlSerialize(true, $sxe->addChild('queryFP'));
        }
        if (null !== ($v = $this->getQueryTP())) {
            $v->xmlSerialize(true, $sxe->addChild('queryTP'));
        }
        if (null !== ($v = $this->getRecall())) {
            $v->xmlSerialize(true, $sxe->addChild('recall'));
        }
        if (null !== ($v = $this->getScore())) {
            $v->xmlSerialize(true, $sxe->addChild('score'));
        }
        if (null !== ($v = $this->getStandardSequence())) {
            $v->xmlSerialize(true, $sxe->addChild('standardSequence'));
        }
        if (null !== ($v = $this->getStart())) {
            $v->xmlSerialize(true, $sxe->addChild('start'));
        }
        if (null !== ($v = $this->getTruthFN())) {
            $v->xmlSerialize(true, $sxe->addChild('truthFN'));
        }
        if (null !== ($v = $this->getTruthTP())) {
            $v->xmlSerialize(true, $sxe->addChild('truthTP'));
        }
        if (null !== ($v = $this->getType())) {
            $v->xmlSerialize(true, $sxe->addChild('type'));
        }
        return parent::xmlSerialize($returnSXE, $sxe);
    }
}