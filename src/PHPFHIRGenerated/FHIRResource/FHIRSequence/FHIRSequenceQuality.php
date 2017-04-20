<?php namespace PHPFHIRGenerated\FHIRResource\FHIRSequence;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: April 20th, 2017
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2017 Daniel Carbone (daniel.p.carbone@gmail.com)
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

/**
 * Raw data describing a biological sequence.
 */
class FHIRSequenceQuality extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * INDEL / SNP / Undefined variant.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQualityType
     */
    public $type = null;

    /**
     * Gold standard sequence used for comparing against.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $standardSequence = null;

    /**
     * Start position of the sequence. If the coordinate system is either 0-based or 1-based, then start position is inclusive.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public $start = null;

    /**
     * End position of the sequence.If the coordinate system is 0-based then end is is exclusive and does not include the last position. If the coordinate system is 1-base, then end is inclusive and includes the last position.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public $end = null;

    /**
     * The score of an experimentally derived feature such as a p-value ([SO:0001685](http://www.sequenceontology.org/browser/current_svn/term/SO:0001685)).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public $score = null;

    /**
     * Which method is used to get sequence quality.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $method = null;

    /**
     * True positives, from the perspective of the truth data, i.e. the number of sites in the Truth Call Set for which there are paths through the Query Call Set that are consistent with all of the alleles at this site, and for which there is an accurate genotype call for the event.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public $truthTP = null;

    /**
     * True positives, from the perspective of the query data, i.e. the number of sites in the Query Call Set for which there are paths through the Truth Call Set that are consistent with all of the alleles at this site, and for which there is an accurate genotype call for the event.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public $queryTP = null;

    /**
     * False negatives, i.e. the number of sites in the Truth Call Set for which there is no path through the Query Call Set that is consistent with all of the alleles at this site, or sites for which there is an inaccurate genotype call for the event. Sites with correct variant but incorrect genotype are counted here.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public $truthFN = null;

    /**
     * False positives, i.e. the number of sites in the Query Call Set for which there is no path through the Truth Call Set that is consistent with this site. Sites with correct variant but incorrect genotype are counted here.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public $queryFP = null;

    /**
     * The number of false positives where the non-REF alleles in the Truth and Query Call Sets match (i.e. cases where the truth is 1/1 and the query is 0/1 or similar).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public $gtFP = null;

    /**
     * QUERY.TP / (QUERY.TP + QUERY.FP).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public $precision = null;

    /**
     * TRUTH.TP / (TRUTH.TP + TRUTH.FN).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public $recall = null;

    /**
     * Harmonic mean of Recall and Precision, computed as: 2 * precision * recall / (precision + recall).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public $fScore = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'Sequence.Quality';

    /**
     * INDEL / SNP / Undefined variant.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQualityType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * INDEL / SNP / Undefined variant.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQualityType $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gold standard sequence used for comparing against.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getStandardSequence()
    {
        return $this->standardSequence;
    }

    /**
     * Gold standard sequence used for comparing against.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $standardSequence
     * @return $this
     */
    public function setStandardSequence($standardSequence)
    {
        $this->standardSequence = $standardSequence;
        return $this;
    }

    /**
     * Start position of the sequence. If the coordinate system is either 0-based or 1-based, then start position is inclusive.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Start position of the sequence. If the coordinate system is either 0-based or 1-based, then start position is inclusive.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInteger $start
     * @return $this
     */
    public function setStart($start)
    {
        $this->start = $start;
        return $this;
    }

    /**
     * End position of the sequence.If the coordinate system is 0-based then end is is exclusive and does not include the last position. If the coordinate system is 1-base, then end is inclusive and includes the last position.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * End position of the sequence.If the coordinate system is 0-based then end is is exclusive and does not include the last position. If the coordinate system is 1-base, then end is inclusive and includes the last position.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInteger $end
     * @return $this
     */
    public function setEnd($end)
    {
        $this->end = $end;
        return $this;
    }

    /**
     * The score of an experimentally derived feature such as a p-value ([SO:0001685](http://www.sequenceontology.org/browser/current_svn/term/SO:0001685)).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * The score of an experimentally derived feature such as a p-value ([SO:0001685](http://www.sequenceontology.org/browser/current_svn/term/SO:0001685)).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity $score
     * @return $this
     */
    public function setScore($score)
    {
        $this->score = $score;
        return $this;
    }

    /**
     * Which method is used to get sequence quality.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * Which method is used to get sequence quality.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $method
     * @return $this
     */
    public function setMethod($method)
    {
        $this->method = $method;
        return $this;
    }

    /**
     * True positives, from the perspective of the truth data, i.e. the number of sites in the Truth Call Set for which there are paths through the Query Call Set that are consistent with all of the alleles at this site, and for which there is an accurate genotype call for the event.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getTruthTP()
    {
        return $this->truthTP;
    }

    /**
     * True positives, from the perspective of the truth data, i.e. the number of sites in the Truth Call Set for which there are paths through the Query Call Set that are consistent with all of the alleles at this site, and for which there is an accurate genotype call for the event.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDecimal $truthTP
     * @return $this
     */
    public function setTruthTP($truthTP)
    {
        $this->truthTP = $truthTP;
        return $this;
    }

    /**
     * True positives, from the perspective of the query data, i.e. the number of sites in the Query Call Set for which there are paths through the Truth Call Set that are consistent with all of the alleles at this site, and for which there is an accurate genotype call for the event.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getQueryTP()
    {
        return $this->queryTP;
    }

    /**
     * True positives, from the perspective of the query data, i.e. the number of sites in the Query Call Set for which there are paths through the Truth Call Set that are consistent with all of the alleles at this site, and for which there is an accurate genotype call for the event.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDecimal $queryTP
     * @return $this
     */
    public function setQueryTP($queryTP)
    {
        $this->queryTP = $queryTP;
        return $this;
    }

    /**
     * False negatives, i.e. the number of sites in the Truth Call Set for which there is no path through the Query Call Set that is consistent with all of the alleles at this site, or sites for which there is an inaccurate genotype call for the event. Sites with correct variant but incorrect genotype are counted here.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getTruthFN()
    {
        return $this->truthFN;
    }

    /**
     * False negatives, i.e. the number of sites in the Truth Call Set for which there is no path through the Query Call Set that is consistent with all of the alleles at this site, or sites for which there is an inaccurate genotype call for the event. Sites with correct variant but incorrect genotype are counted here.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDecimal $truthFN
     * @return $this
     */
    public function setTruthFN($truthFN)
    {
        $this->truthFN = $truthFN;
        return $this;
    }

    /**
     * False positives, i.e. the number of sites in the Query Call Set for which there is no path through the Truth Call Set that is consistent with this site. Sites with correct variant but incorrect genotype are counted here.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getQueryFP()
    {
        return $this->queryFP;
    }

    /**
     * False positives, i.e. the number of sites in the Query Call Set for which there is no path through the Truth Call Set that is consistent with this site. Sites with correct variant but incorrect genotype are counted here.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDecimal $queryFP
     * @return $this
     */
    public function setQueryFP($queryFP)
    {
        $this->queryFP = $queryFP;
        return $this;
    }

    /**
     * The number of false positives where the non-REF alleles in the Truth and Query Call Sets match (i.e. cases where the truth is 1/1 and the query is 0/1 or similar).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getGtFP()
    {
        return $this->gtFP;
    }

    /**
     * The number of false positives where the non-REF alleles in the Truth and Query Call Sets match (i.e. cases where the truth is 1/1 and the query is 0/1 or similar).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDecimal $gtFP
     * @return $this
     */
    public function setGtFP($gtFP)
    {
        $this->gtFP = $gtFP;
        return $this;
    }

    /**
     * QUERY.TP / (QUERY.TP + QUERY.FP).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getPrecision()
    {
        return $this->precision;
    }

    /**
     * QUERY.TP / (QUERY.TP + QUERY.FP).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDecimal $precision
     * @return $this
     */
    public function setPrecision($precision)
    {
        $this->precision = $precision;
        return $this;
    }

    /**
     * TRUTH.TP / (TRUTH.TP + TRUTH.FN).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getRecall()
    {
        return $this->recall;
    }

    /**
     * TRUTH.TP / (TRUTH.TP + TRUTH.FN).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDecimal $recall
     * @return $this
     */
    public function setRecall($recall)
    {
        $this->recall = $recall;
        return $this;
    }

    /**
     * Harmonic mean of Recall and Precision, computed as: 2 * precision * recall / (precision + recall).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getFScore()
    {
        return $this->fScore;
    }

    /**
     * Harmonic mean of Recall and Precision, computed as: 2 * precision * recall / (precision + recall).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDecimal $fScore
     * @return $this
     */
    public function setFScore($fScore)
    {
        $this->fScore = $fScore;
        return $this;
    }

    /**
     * @return string
     */
    public function get_fhirElementName()
    {
        return $this->_fhirElementName;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->get_fhirElementName();
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $json = parent::jsonSerialize();
        if (null !== $this->type) $json['type'] = json_encode($this->type);
        if (null !== $this->standardSequence) $json['standardSequence'] = json_encode($this->standardSequence);
        if (null !== $this->start) $json['start'] = json_encode($this->start);
        if (null !== $this->end) $json['end'] = json_encode($this->end);
        if (null !== $this->score) $json['score'] = json_encode($this->score);
        if (null !== $this->method) $json['method'] = json_encode($this->method);
        if (null !== $this->truthTP) $json['truthTP'] = json_encode($this->truthTP);
        if (null !== $this->queryTP) $json['queryTP'] = json_encode($this->queryTP);
        if (null !== $this->truthFN) $json['truthFN'] = json_encode($this->truthFN);
        if (null !== $this->queryFP) $json['queryFP'] = json_encode($this->queryFP);
        if (null !== $this->gtFP) $json['gtFP'] = json_encode($this->gtFP);
        if (null !== $this->precision) $json['precision'] = json_encode($this->precision);
        if (null !== $this->recall) $json['recall'] = json_encode($this->recall);
        if (null !== $this->fScore) $json['fScore'] = json_encode($this->fScore);
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<SequenceQuality xmlns="http://hl7.org/fhir"></SequenceQuality>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->type) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (null !== $this->standardSequence) $this->standardSequence->xmlSerialize(true, $sxe->addChild('standardSequence'));
        if (null !== $this->start) $this->start->xmlSerialize(true, $sxe->addChild('start'));
        if (null !== $this->end) $this->end->xmlSerialize(true, $sxe->addChild('end'));
        if (null !== $this->score) $this->score->xmlSerialize(true, $sxe->addChild('score'));
        if (null !== $this->method) $this->method->xmlSerialize(true, $sxe->addChild('method'));
        if (null !== $this->truthTP) $this->truthTP->xmlSerialize(true, $sxe->addChild('truthTP'));
        if (null !== $this->queryTP) $this->queryTP->xmlSerialize(true, $sxe->addChild('queryTP'));
        if (null !== $this->truthFN) $this->truthFN->xmlSerialize(true, $sxe->addChild('truthFN'));
        if (null !== $this->queryFP) $this->queryFP->xmlSerialize(true, $sxe->addChild('queryFP'));
        if (null !== $this->gtFP) $this->gtFP->xmlSerialize(true, $sxe->addChild('gtFP'));
        if (null !== $this->precision) $this->precision->xmlSerialize(true, $sxe->addChild('precision'));
        if (null !== $this->recall) $this->recall->xmlSerialize(true, $sxe->addChild('recall'));
        if (null !== $this->fScore) $this->fScore->xmlSerialize(true, $sxe->addChild('fScore'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}