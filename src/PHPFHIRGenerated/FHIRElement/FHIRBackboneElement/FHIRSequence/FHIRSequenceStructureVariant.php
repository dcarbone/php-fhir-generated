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
use PHPFHIRGenerated\FHIRElement\FHIRString;

/**
 * Raw data describing a biological sequence.
 *
 * Class FHIRSequenceStructureVariant
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSequence
 */
class FHIRSequenceStructureVariant extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'Sequence.StructureVariant';

    /**
     * Structural variant inner.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceInner
     */
    public $inner = null;

    /**
     * Length of the variant choromosome.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public $length = null;

    /**
     * Structural variant outer.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceOuter
     */
    public $outer = null;

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
     * FHIRSequenceStructureVariant Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['inner'])) {
                $this->setInner($data['inner']);
            }
            if (isset($data['length'])) {
                $this->setLength($data['length']);
            }
            if (isset($data['outer'])) {
                $this->setOuter($data['outer']);
            }
            if (isset($data['precision'])) {
                $this->setPrecision($data['precision']);
            }
            if (isset($data['reportedaCGHRatio'])) {
                $this->setReportedaCGHRatio($data['reportedaCGHRatio']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceStructureVariant::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Structural variant inner.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceInner
     * @return $this
     */
    public function setInner(FHIRSequenceInner $inner = null)
    {
        if (null === $inner) {
            return $this; 
        }
        $this->inner = $inner;
        return $this;
    }

    /**
     * Structural variant inner.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceInner
     */
    public function getInner()
    {
        return $this->inner;
    }


    /**
     * Length of the variant choromosome.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRInteger
     * @return $this
     */
    public function setLength($length)
    {
        if (null === $length) {
            return $this; 
        }
        if (is_scalar($length)) {
            $length = new FHIRInteger($length);
        }
        if (!($length instanceof FHIRInteger)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSequenceStructureVariant::setLength - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRInteger or appropriate scalar value, %s seen.',
                gettype($length)
            ));
        }
        $this->length = $length;
        return $this;
    }

    /**
     * Length of the variant choromosome.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getLength()
    {
        return $this->length;
    }


    /**
     * Structural variant outer.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceOuter
     * @return $this
     */
    public function setOuter(FHIRSequenceOuter $outer = null)
    {
        if (null === $outer) {
            return $this; 
        }
        $this->outer = $outer;
        return $this;
    }

    /**
     * Structural variant outer.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceOuter
     */
    public function getOuter()
    {
        return $this->outer;
    }


    /**
     * Identify the exact boundaries of variant sequences. Each type of structure variant requires the DNA duplex to be broken and rejoined, and this creates a new sequence of bases at the rejoined sites, known as breakpoints or boundaries.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setPrecision($precision)
    {
        if (null === $precision) {
            return $this; 
        }
        if (is_scalar($precision)) {
            $precision = new FHIRString($precision);
        }
        if (!($precision instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSequenceStructureVariant::setPrecision - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($precision)
            ));
        }
        $this->precision = $precision;
        return $this;
    }

    /**
     * Identify the exact boundaries of variant sequences. Each type of structure variant requires the DNA duplex to be broken and rejoined, and this creates a new sequence of bases at the rejoined sites, known as breakpoints or boundaries.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getPrecision()
    {
        return $this->precision;
    }


    /**
     * Structural Variant reported aCGH ratio.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     * @return $this
     */
    public function setReportedaCGHRatio($reportedaCGHRatio)
    {
        if (null === $reportedaCGHRatio) {
            return $this; 
        }
        if (is_scalar($reportedaCGHRatio)) {
            $reportedaCGHRatio = new FHIRDecimal($reportedaCGHRatio);
        }
        if (!($reportedaCGHRatio instanceof FHIRDecimal)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSequenceStructureVariant::setReportedaCGHRatio - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDecimal or appropriate scalar value, %s seen.',
                gettype($reportedaCGHRatio)
            ));
        }
        $this->reportedaCGHRatio = $reportedaCGHRatio;
        return $this;
    }

    /**
     * Structural Variant reported aCGH ratio.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getReportedaCGHRatio()
    {
        return $this->reportedaCGHRatio;
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
        if (null !== ($v = $this->getInner())) {
            $a['inner'] = $v;
        }
        if (null !== ($v = $this->getLength())) {
            $a['length'] = $v;
        }
        if (null !== ($v = $this->getOuter())) {
            $a['outer'] = $v;
        }
        if (null !== ($v = $this->getPrecision())) {
            $a['precision'] = $v;
        }
        if (null !== ($v = $this->getReportedaCGHRatio())) {
            $a['reportedaCGHRatio'] = $v;
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
            $sxe = new \SimpleXMLElement('<SequenceStructureVariant xmlns="http://hl7.org/fhir"></SequenceStructureVariant>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}