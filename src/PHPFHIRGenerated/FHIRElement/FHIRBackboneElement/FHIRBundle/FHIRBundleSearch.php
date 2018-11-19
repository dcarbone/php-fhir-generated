<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBundle;

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
use PHPFHIRGenerated\FHIRElement\FHIRDecimal;
use PHPFHIRGenerated\FHIRElement\FHIRSearchEntryMode;

/**
 * A container for a collection of resources.
 *
 * Class FHIRBundleSearch
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBundle
 */
class FHIRBundleSearch extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'Bundle.Search';

    /**
     * Why this entry is in the result set - whether it's included as a match or because of an _include requirement.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRSearchEntryMode
     */
    private $mode = null;

    /**
     * When searching, the server's search ranking score for the entry.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    private $score = null;

    /**
     * FHIRBundleSearch Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        if (is_array($data)) {
            if (isset($data['mode'])) {
                $value = $data['mode'];
                if (is_array($value)) {
                    $value = new FHIRSearchEntryMode($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRSearchEntryMode($value);
                }
                if (!($value instanceof FHIRSearchEntryMode)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleSearch::__construct - Property \"mode\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRSearchEntryMode or data to construct type, saw ".gettype($value)); 
                }
                $this->setMode($value);
            }
            if (isset($data['score'])) {
                $value = $data['score'];
                if (is_array($value)) {
                    $value = new FHIRDecimal($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRDecimal($value);
                }
                if (!($value instanceof FHIRDecimal)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleSearch::__construct - Property \"score\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRDecimal or data to construct type, saw ".gettype($value)); 
                }
                $this->setScore($value);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleSearch::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
        parent::__construct($data);
    }

    /**
     * Why this entry is in the result set - whether it's included as a match or because of an _include requirement.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRSearchEntryMode
     * @return $this
     */
    public function setMode($mode)
    {
        if (null === $mode) {
            return $this; 
        }
        if (is_scalar($mode)) {
            $mode = new FHIRSearchEntryMode($mode);
        }
        if (!($mode instanceof FHIRSearchEntryMode)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRBundleSearch::setMode - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRSearchEntryMode or appropriate scalar value, %s seen.',
                gettype($mode)
            ));
        }
        $this->mode = $mode;
        return $this;
    }

    /**
     * Why this entry is in the result set - whether it's included as a match or because of an _include requirement.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRSearchEntryMode
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * When searching, the server's search ranking score for the entry.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     * @return $this
     */
    public function setScore($score)
    {
        if (null === $score) {
            return $this; 
        }
        if (is_scalar($score)) {
            $score = new FHIRDecimal($score);
        }
        if (!($score instanceof FHIRDecimal)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRBundleSearch::setScore - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDecimal or appropriate scalar value, %s seen.',
                gettype($score)
            ));
        }
        $this->score = $score;
        return $this;
    }

    /**
     * When searching, the server's search ranking score for the entry.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getScore()
    {
        return $this->score;
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
        if (null !== ($v = $this->getMode())) {
            $a['mode'] = $v;
        }
        if (null !== ($v = $this->getScore())) {
            $a['score'] = $v;
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
            $sxe = new \SimpleXMLElement('<BundleSearch xmlns="http://hl7.org/fhir"></BundleSearch>');
        }
        if (null !== ($v = $this->getMode())) {
            $v->xmlSerialize(true, $sxe->addChild('mode'));
        }
        if (null !== ($v = $this->getScore())) {
            $v->xmlSerialize(true, $sxe->addChild('score'));
        }
        return parent::xmlSerialize($returnSXE, $sxe);
    }
}