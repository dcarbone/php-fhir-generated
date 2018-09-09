<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSequence;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: September 9th, 2018
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
 *   Generated on Sun, Sep 9, 2018 00:54+0000 for FHIR v3.5.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use PHPFHIRGenerated\FHIRElement\FHIRDecimal;
use PHPFHIRGenerated\FHIRElement\FHIRInteger;

/**
 * Raw data describing a biological sequence.
 *
 * Class FHIRSequenceRoc
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSequence
 */
class FHIRSequenceRoc extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'Sequence.Roc';

    /**
     * Calculated fScore if the GQ score threshold was set to "score" field value.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public $fMeasure = null;

    /**
     * The number of false negatives if the GQ score threshold was set to "score" field value.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public $numFN = null;

    /**
     * The number of false positives if the GQ score threshold was set to "score" field value.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public $numFP = null;

    /**
     * The number of true positives if the GQ score threshold was set to "score" field value.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public $numTP = null;

    /**
     * Calculated precision if the GQ score threshold was set to "score" field value.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public $precision = null;

    /**
     * Invidual data point representing the GQ (genotype quality) score threshold.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public $score = null;

    /**
     * Calculated sensitivity if the GQ score threshold was set to "score" field value.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public $sensitivity = null;

    /**
     * FHIRSequenceRoc Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['fMeasure'])) {
                $this->setFMeasure($data['fMeasure']);
            }
            if (isset($data['numFN'])) {
                $this->setNumFN($data['numFN']);
            }
            if (isset($data['numFP'])) {
                $this->setNumFP($data['numFP']);
            }
            if (isset($data['numTP'])) {
                $this->setNumTP($data['numTP']);
            }
            if (isset($data['precision'])) {
                $this->setPrecision($data['precision']);
            }
            if (isset($data['score'])) {
                $this->setScore($data['score']);
            }
            if (isset($data['sensitivity'])) {
                $this->setSensitivity($data['sensitivity']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceRoc::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Calculated fScore if the GQ score threshold was set to "score" field value.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     * @return $this
     */
    public function setFMeasure($fMeasure)
    {
        if (null === $fMeasure) {
            return $this; 
        }
        if (is_scalar($fMeasure)) {
            $fMeasure = new FHIRDecimal($fMeasure);
        }
        if (!($fMeasure instanceof FHIRDecimal)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSequenceRoc::setFMeasure - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDecimal or appropriate scalar value, %s seen.',
                gettype($fMeasure)
            ));
        }
        $this->fMeasure = $fMeasure;
        return $this;
    }

    /**
     * Calculated fScore if the GQ score threshold was set to "score" field value.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getFMeasure()
    {
        return $this->fMeasure;
    }


    /**
     * The number of false negatives if the GQ score threshold was set to "score" field value.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRInteger
     * @return $this
     */
    public function setNumFN($numFN)
    {
        if (null === $numFN) {
            return $this; 
        }
        if (is_scalar($numFN)) {
            $numFN = new FHIRInteger($numFN);
        }
        if (!($numFN instanceof FHIRInteger)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSequenceRoc::setNumFN - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRInteger or appropriate scalar value, %s seen.',
                gettype($numFN)
            ));
        }
        $this->numFN = $numFN;
        return $this;
    }

    /**
     * The number of false negatives if the GQ score threshold was set to "score" field value.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getNumFN()
    {
        return $this->numFN;
    }


    /**
     * The number of false positives if the GQ score threshold was set to "score" field value.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRInteger
     * @return $this
     */
    public function setNumFP($numFP)
    {
        if (null === $numFP) {
            return $this; 
        }
        if (is_scalar($numFP)) {
            $numFP = new FHIRInteger($numFP);
        }
        if (!($numFP instanceof FHIRInteger)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSequenceRoc::setNumFP - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRInteger or appropriate scalar value, %s seen.',
                gettype($numFP)
            ));
        }
        $this->numFP = $numFP;
        return $this;
    }

    /**
     * The number of false positives if the GQ score threshold was set to "score" field value.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getNumFP()
    {
        return $this->numFP;
    }


    /**
     * The number of true positives if the GQ score threshold was set to "score" field value.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRInteger
     * @return $this
     */
    public function setNumTP($numTP)
    {
        if (null === $numTP) {
            return $this; 
        }
        if (is_scalar($numTP)) {
            $numTP = new FHIRInteger($numTP);
        }
        if (!($numTP instanceof FHIRInteger)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSequenceRoc::setNumTP - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRInteger or appropriate scalar value, %s seen.',
                gettype($numTP)
            ));
        }
        $this->numTP = $numTP;
        return $this;
    }

    /**
     * The number of true positives if the GQ score threshold was set to "score" field value.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getNumTP()
    {
        return $this->numTP;
    }


    /**
     * Calculated precision if the GQ score threshold was set to "score" field value.
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
                'FHIRSequenceRoc::setPrecision - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDecimal or appropriate scalar value, %s seen.',
                gettype($precision)
            ));
        }
        $this->precision = $precision;
        return $this;
    }

    /**
     * Calculated precision if the GQ score threshold was set to "score" field value.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getPrecision()
    {
        return $this->precision;
    }


    /**
     * Invidual data point representing the GQ (genotype quality) score threshold.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRInteger
     * @return $this
     */
    public function setScore($score)
    {
        if (null === $score) {
            return $this; 
        }
        if (is_scalar($score)) {
            $score = new FHIRInteger($score);
        }
        if (!($score instanceof FHIRInteger)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSequenceRoc::setScore - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRInteger or appropriate scalar value, %s seen.',
                gettype($score)
            ));
        }
        $this->score = $score;
        return $this;
    }

    /**
     * Invidual data point representing the GQ (genotype quality) score threshold.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getScore()
    {
        return $this->score;
    }


    /**
     * Calculated sensitivity if the GQ score threshold was set to "score" field value.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     * @return $this
     */
    public function setSensitivity($sensitivity)
    {
        if (null === $sensitivity) {
            return $this; 
        }
        if (is_scalar($sensitivity)) {
            $sensitivity = new FHIRDecimal($sensitivity);
        }
        if (!($sensitivity instanceof FHIRDecimal)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSequenceRoc::setSensitivity - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDecimal or appropriate scalar value, %s seen.',
                gettype($sensitivity)
            ));
        }
        $this->sensitivity = $sensitivity;
        return $this;
    }

    /**
     * Calculated sensitivity if the GQ score threshold was set to "score" field value.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getSensitivity()
    {
        return $this->sensitivity;
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
        if (null !== ($v = $this->getFMeasure())) {
            $a['fMeasure'] = $v;
        }
        if (null !== ($v = $this->getNumFN())) {
            $a['numFN'] = $v;
        }
        if (null !== ($v = $this->getNumFP())) {
            $a['numFP'] = $v;
        }
        if (null !== ($v = $this->getNumTP())) {
            $a['numTP'] = $v;
        }
        if (null !== ($v = $this->getPrecision())) {
            $a['precision'] = $v;
        }
        if (null !== ($v = $this->getScore())) {
            $a['score'] = $v;
        }
        if (null !== ($v = $this->getSensitivity())) {
            $a['sensitivity'] = $v;
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
            $sxe = new \SimpleXMLElement('<SequenceRoc xmlns="http://hl7.org/fhir"></SequenceRoc>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}