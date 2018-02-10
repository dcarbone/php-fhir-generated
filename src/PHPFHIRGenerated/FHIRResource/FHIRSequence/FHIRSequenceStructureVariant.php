<?php namespace PHPFHIRGenerated\FHIRResource\FHIRSequence;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 10th, 2018
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
 *   Generated on Sat, Feb 10, 2018 20:53+0000 for FHIR v3.2.0
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
class FHIRSequenceStructureVariant extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * Identify the exact boundaries of variant sequences. Each type of structure variant requires the DNA duplex to be broken and rejoined, and this creates a new sequence of bases at the rejoined sites, known as breakpoints or boundaries.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $precision = null;

    /**
     * Structural Variant reported aCGH ratio.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public $reportedaCGHRatio = null;

    /**
     * Length of the variant choromosome.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public $length = null;

    /**
     * Structural variant outer.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRSequence\FHIRSequenceOuter
     */
    public $outer = null;

    /**
     * Structural variant inner.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRSequence\FHIRSequenceInner
     */
    public $inner = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'Sequence.StructureVariant';

    /**
     * Identify the exact boundaries of variant sequences. Each type of structure variant requires the DNA duplex to be broken and rejoined, and this creates a new sequence of bases at the rejoined sites, known as breakpoints or boundaries.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getPrecision() {
        return $this->precision;
    }

    /**
     * Identify the exact boundaries of variant sequences. Each type of structure variant requires the DNA duplex to be broken and rejoined, and this creates a new sequence of bases at the rejoined sites, known as breakpoints or boundaries.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $precision
     * @return $this
     */
    public function setPrecision($precision) {
        $this->precision = $precision;
        return $this;
    }

    /**
     * Structural Variant reported aCGH ratio.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getReportedaCGHRatio() {
        return $this->reportedaCGHRatio;
    }

    /**
     * Structural Variant reported aCGH ratio.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDecimal $reportedaCGHRatio
     * @return $this
     */
    public function setReportedaCGHRatio($reportedaCGHRatio) {
        $this->reportedaCGHRatio = $reportedaCGHRatio;
        return $this;
    }

    /**
     * Length of the variant choromosome.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getLength() {
        return $this->length;
    }

    /**
     * Length of the variant choromosome.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInteger $length
     * @return $this
     */
    public function setLength($length) {
        $this->length = $length;
        return $this;
    }

    /**
     * Structural variant outer.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRSequence\FHIRSequenceOuter
     */
    public function getOuter() {
        return $this->outer;
    }

    /**
     * Structural variant outer.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRSequence\FHIRSequenceOuter $outer
     * @return $this
     */
    public function setOuter($outer) {
        $this->outer = $outer;
        return $this;
    }

    /**
     * Structural variant inner.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRSequence\FHIRSequenceInner
     */
    public function getInner() {
        return $this->inner;
    }

    /**
     * Structural variant inner.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRSequence\FHIRSequenceInner $inner
     * @return $this
     */
    public function setInner($inner) {
        $this->inner = $inner;
        return $this;
    }

    /**
     * @return string
     */
    public function get_fhirElementName() {
        return $this->_fhirElementName;
    }

    /**
     * @param mixed $data
     */
    public function __construct($data = []) {
        if (is_array($data)) {
            if (isset($data['precision'])) {
                $this->setPrecision($data['precision']);
            }
            if (isset($data['reportedaCGHRatio'])) {
                $this->setReportedaCGHRatio($data['reportedaCGHRatio']);
            }
            if (isset($data['length'])) {
                $this->setLength($data['length']);
            }
            if (isset($data['outer'])) {
                $this->setOuter($data['outer']);
            }
            if (isset($data['inner'])) {
                $this->setInner($data['inner']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException('$data expected to be array of values, saw "'.gettype($data).'"');
        }
        parent::__construct($data);
    }

    /**
     * @return string
     */
    public function __toString() {
        return $this->get_fhirElementName();
    }

    /**
     * @return array
     */
    public function jsonSerialize() {
        $json = parent::jsonSerialize();
        if (isset($this->precision)) $json['precision'] = $this->precision;
        if (isset($this->reportedaCGHRatio)) $json['reportedaCGHRatio'] = $this->reportedaCGHRatio;
        if (isset($this->length)) $json['length'] = $this->length;
        if (isset($this->outer)) $json['outer'] = $this->outer;
        if (isset($this->inner)) $json['inner'] = $this->inner;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null) {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<SequenceStructureVariant xmlns="http://hl7.org/fhir"></SequenceStructureVariant>');
        parent::xmlSerialize(true, $sxe);
        if (isset($this->precision)) $this->precision->xmlSerialize(true, $sxe->addChild('precision'));
        if (isset($this->reportedaCGHRatio)) $this->reportedaCGHRatio->xmlSerialize(true, $sxe->addChild('reportedaCGHRatio'));
        if (isset($this->length)) $this->length->xmlSerialize(true, $sxe->addChild('length'));
        if (isset($this->outer)) $this->outer->xmlSerialize(true, $sxe->addChild('outer'));
        if (isset($this->inner)) $this->inner->xmlSerialize(true, $sxe->addChild('inner'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}