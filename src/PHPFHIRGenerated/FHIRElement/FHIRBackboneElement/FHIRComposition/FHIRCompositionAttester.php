<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRComposition;

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
use PHPFHIRGenerated\FHIRElement\FHIRCompositionAttestationMode;
use PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use PHPFHIRGenerated\FHIRElement\FHIRReference;

/**
 * A set of healthcare-related information that is assembled together into a single logical document that provides a single coherent statement of meaning, establishes its own context and that has clinical attestation with regard to who is making the statement. While a Composition defines the structure, it does not actually contain the content: rather the full content of a document is contained in a Bundle, of which the Composition is the first resource contained.
 *
 * Class FHIRCompositionAttester
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRComposition
 */
class FHIRCompositionAttester extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'Composition.Attester';

    /**
     * The type of attestation the authenticator offers.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCompositionAttestationMode[]
     */
    private $mode = [];

    /**
     * Who attested the composition in the specified way.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $party = null;

    /**
     * When the composition was attested by the party.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    private $time = null;

    /**
     * FHIRCompositionAttester Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        if (is_array($data)) {
            if (isset($data['mode'])) {
                $value = $data['mode'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRCompositionAttestationMode($v);
                        }  elseif (is_scalar($v)) {
                            $v = new FHIRCompositionAttestationMode($v);
                        }
                        if (!($v instanceof FHIRCompositionAttestationMode)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRComposition\FHIRCompositionAttester::__construct - Collection field \"mode\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRCompositionAttestationMode or data to construct type, saw ".gettype($v));
                        }
                        $this->addMode($v);
                    }
                }
            }
            if (isset($data['party'])) {
                $value = $data['party'];
                if (is_array($value)) {
                    $value = new FHIRReference($value);
                } 
                if (!($value instanceof FHIRReference)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRComposition\FHIRCompositionAttester::__construct - Property \"party\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($value));
                }
                $this->setParty($value);
            }
            if (isset($data['time'])) {
                $value = $data['time'];
                if (is_array($value)) {
                    $value = new FHIRDateTime($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRDateTime($value);
                }
                if (!($value instanceof FHIRDateTime)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRComposition\FHIRCompositionAttester::__construct - Property \"time\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or data to construct type, saw ".gettype($value));
                }
                $this->setTime($value);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRComposition\FHIRCompositionAttester::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
        parent::__construct($data);
    }

    /**
     * The type of attestation the authenticator offers.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCompositionAttestationMode
     * @return $this
     */
    public function addMode($mode)
    {
        if (null === $mode) {
            return $this; 
        }
        if (is_scalar($mode)) {
            $mode = new FHIRCompositionAttestationMode($mode);
        }
        if (!($mode instanceof FHIRCompositionAttestationMode)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCompositionAttester::addMode - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRCompositionAttestationMode or appropriate scalar value, %s seen.',
                gettype($mode)
            ));
        }
        $this->mode[] = $mode;
        return $this;
    }

    /**
     * The type of attestation the authenticator offers.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCompositionAttestationMode[]
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * Who attested the composition in the specified way.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setParty(FHIRReference $party = null)
    {
        if (null === $party) {
            return $this; 
        }
        $this->party = $party;
        return $this;
    }

    /**
     * Who attested the composition in the specified way.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getParty()
    {
        return $this->party;
    }

    /**
     * When the composition was attested by the party.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setTime($time)
    {
        if (null === $time) {
            return $this; 
        }
        if (is_scalar($time)) {
            $time = new FHIRDateTime($time);
        }
        if (!($time instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCompositionAttester::setTime - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($time)
            ));
        }
        $this->time = $time;
        return $this;
    }

    /**
     * When the composition was attested by the party.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getTime()
    {
        return $this->time;
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
        if (0 < count($values = $this->getMode())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['mode'] = $vs;
            }
        }
        if (null !== ($v = $this->getParty())) {
            $a['party'] = $v;
        }
        if (null !== ($v = $this->getTime())) {
            $a['time'] = $v;
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
            $sxe = new \SimpleXMLElement('<CompositionAttester xmlns="http://hl7.org/fhir"></CompositionAttester>');
        }
        if (0 < count($values = $this->getMode())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('mode'));
                }
            }
        }
        if (null !== ($v = $this->getParty())) {
            $v->xmlSerialize(true, $sxe->addChild('party'));
        }
        if (null !== ($v = $this->getTime())) {
            $v->xmlSerialize(true, $sxe->addChild('time'));
        }
        return parent::xmlSerialize($returnSXE, $sxe);
    }
}