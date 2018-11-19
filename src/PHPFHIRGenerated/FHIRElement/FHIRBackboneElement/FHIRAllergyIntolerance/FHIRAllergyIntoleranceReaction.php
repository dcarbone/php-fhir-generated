<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRAllergyIntolerance;

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

use PHPFHIRGenerated\FHIRElement\FHIRAllergyIntoleranceSeverity;
use PHPFHIRGenerated\FHIRElement\FHIRAnnotation;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use PHPFHIRGenerated\FHIRElement\FHIRString;

/**
 * Risk of harmful or undesirable, physiological response which is unique to an individual and associated with exposure to a substance.
 *
 * Class FHIRAllergyIntoleranceReaction
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRAllergyIntolerance
 */
class FHIRAllergyIntoleranceReaction extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'AllergyIntolerance.Reaction';

    /**
     * Text description about the reaction as a whole, including details of the manifestation if required.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $description = null;

    /**
     * Identification of the route by which the subject was exposed to the substance.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $exposureRoute = null;

    /**
     * Clinical symptoms and/or signs that are observed or associated with the adverse reaction event.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    private $manifestation = [];

    /**
     * Additional text about the adverse reaction event not captured in other fields.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAnnotation[]
     */
    private $note = [];

    /**
     * Record of the date and/or time of the onset of the Reaction.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    private $onset = null;

    /**
     * Clinical assessment of the severity of the reaction event as a whole, potentially considering multiple different manifestations.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAllergyIntoleranceSeverity
     */
    private $severity = null;

    /**
     * Identification of the specific substance (or pharmaceutical product) considered to be responsible for the Adverse Reaction event. Note: the substance for a specific reaction may be different from the substance identified as the cause of the risk, but it must be consistent with it. For instance, it may be a more specific substance (e.g. a brand medication) or a composite product that includes the identified substance. It must be clinically safe to only process the 'code' and ignore the 'reaction.substance'.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $substance = null;

    /**
     * FHIRAllergyIntoleranceReaction Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        if (is_array($data)) {
            if (isset($data['description'])) {
                $value = $data['description'];
                if (is_array($value)) {
                    $value = new FHIRString($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRString($value);
                }
                if (!($value instanceof FHIRString)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRAllergyIntolerance\FHIRAllergyIntoleranceReaction::__construct - Property \"description\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or data to construct type, saw ".gettype($value)); 
                }
                $this->setDescription($value);
            }
            if (isset($data['exposureRoute'])) {
                $value = $data['exposureRoute'];
                if (is_array($value)) {
                    $value = new FHIRCodeableConcept($value);
                } 
                if (!($value instanceof FHIRCodeableConcept)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRAllergyIntolerance\FHIRAllergyIntoleranceReaction::__construct - Property \"exposureRoute\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept or data to construct type, saw ".gettype($value)); 
                }
                $this->setExposureRoute($value);
            }
            if (isset($data['manifestation'])) {
                $value = $data['manifestation'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRCodeableConcept($v);
                        } 
                        if (!($v instanceof FHIRCodeableConcept)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRAllergyIntolerance\FHIRAllergyIntoleranceReaction::__construct - Collection field \"manifestation\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept or data to construct type, saw ".gettype($v)); 
                        }
                        $this->addManifestation($v);
                    }
                }
            }
            if (isset($data['note'])) {
                $value = $data['note'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRAnnotation($v);
                        } 
                        if (!($v instanceof FHIRAnnotation)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRAllergyIntolerance\FHIRAllergyIntoleranceReaction::__construct - Collection field \"note\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRAnnotation or data to construct type, saw ".gettype($v)); 
                        }
                        $this->addNote($v);
                    }
                }
            }
            if (isset($data['onset'])) {
                $value = $data['onset'];
                if (is_array($value)) {
                    $value = new FHIRDateTime($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRDateTime($value);
                }
                if (!($value instanceof FHIRDateTime)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRAllergyIntolerance\FHIRAllergyIntoleranceReaction::__construct - Property \"onset\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or data to construct type, saw ".gettype($value)); 
                }
                $this->setOnset($value);
            }
            if (isset($data['severity'])) {
                $value = $data['severity'];
                if (is_array($value)) {
                    $value = new FHIRAllergyIntoleranceSeverity($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRAllergyIntoleranceSeverity($value);
                }
                if (!($value instanceof FHIRAllergyIntoleranceSeverity)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRAllergyIntolerance\FHIRAllergyIntoleranceReaction::__construct - Property \"severity\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRAllergyIntoleranceSeverity or data to construct type, saw ".gettype($value)); 
                }
                $this->setSeverity($value);
            }
            if (isset($data['substance'])) {
                $value = $data['substance'];
                if (is_array($value)) {
                    $value = new FHIRCodeableConcept($value);
                } 
                if (!($value instanceof FHIRCodeableConcept)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRAllergyIntolerance\FHIRAllergyIntoleranceReaction::__construct - Property \"substance\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept or data to construct type, saw ".gettype($value)); 
                }
                $this->setSubstance($value);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRAllergyIntolerance\FHIRAllergyIntoleranceReaction::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
        parent::__construct($data);
    }

    /**
     * Text description about the reaction as a whole, including details of the manifestation if required.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setDescription($description)
    {
        if (null === $description) {
            return $this; 
        }
        if (is_scalar($description)) {
            $description = new FHIRString($description);
        }
        if (!($description instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRAllergyIntoleranceReaction::setDescription - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($description)
            ));
        }
        $this->description = $description;
        return $this;
    }

    /**
     * Text description about the reaction as a whole, including details of the manifestation if required.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Identification of the route by which the subject was exposed to the substance.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setExposureRoute(FHIRCodeableConcept $exposureRoute = null)
    {
        if (null === $exposureRoute) {
            return $this; 
        }
        $this->exposureRoute = $exposureRoute;
        return $this;
    }

    /**
     * Identification of the route by which the subject was exposed to the substance.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getExposureRoute()
    {
        return $this->exposureRoute;
    }

    /**
     * Clinical symptoms and/or signs that are observed or associated with the adverse reaction event.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function addManifestation(FHIRCodeableConcept $manifestation = null)
    {
        if (null === $manifestation) {
            return $this; 
        }
        $this->manifestation[] = $manifestation;
        return $this;
    }

    /**
     * Clinical symptoms and/or signs that are observed or associated with the adverse reaction event.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getManifestation()
    {
        return $this->manifestation;
    }

    /**
     * Additional text about the adverse reaction event not captured in other fields.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     * @return $this
     */
    public function addNote(FHIRAnnotation $note = null)
    {
        if (null === $note) {
            return $this; 
        }
        $this->note[] = $note;
        return $this;
    }

    /**
     * Additional text about the adverse reaction event not captured in other fields.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAnnotation[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Record of the date and/or time of the onset of the Reaction.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setOnset($onset)
    {
        if (null === $onset) {
            return $this; 
        }
        if (is_scalar($onset)) {
            $onset = new FHIRDateTime($onset);
        }
        if (!($onset instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRAllergyIntoleranceReaction::setOnset - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($onset)
            ));
        }
        $this->onset = $onset;
        return $this;
    }

    /**
     * Record of the date and/or time of the onset of the Reaction.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getOnset()
    {
        return $this->onset;
    }

    /**
     * Clinical assessment of the severity of the reaction event as a whole, potentially considering multiple different manifestations.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRAllergyIntoleranceSeverity
     * @return $this
     */
    public function setSeverity($severity)
    {
        if (null === $severity) {
            return $this; 
        }
        if (is_scalar($severity)) {
            $severity = new FHIRAllergyIntoleranceSeverity($severity);
        }
        if (!($severity instanceof FHIRAllergyIntoleranceSeverity)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRAllergyIntoleranceReaction::setSeverity - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRAllergyIntoleranceSeverity or appropriate scalar value, %s seen.',
                gettype($severity)
            ));
        }
        $this->severity = $severity;
        return $this;
    }

    /**
     * Clinical assessment of the severity of the reaction event as a whole, potentially considering multiple different manifestations.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAllergyIntoleranceSeverity
     */
    public function getSeverity()
    {
        return $this->severity;
    }

    /**
     * Identification of the specific substance (or pharmaceutical product) considered to be responsible for the Adverse Reaction event. Note: the substance for a specific reaction may be different from the substance identified as the cause of the risk, but it must be consistent with it. For instance, it may be a more specific substance (e.g. a brand medication) or a composite product that includes the identified substance. It must be clinically safe to only process the 'code' and ignore the 'reaction.substance'.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setSubstance(FHIRCodeableConcept $substance = null)
    {
        if (null === $substance) {
            return $this; 
        }
        $this->substance = $substance;
        return $this;
    }

    /**
     * Identification of the specific substance (or pharmaceutical product) considered to be responsible for the Adverse Reaction event. Note: the substance for a specific reaction may be different from the substance identified as the cause of the risk, but it must be consistent with it. For instance, it may be a more specific substance (e.g. a brand medication) or a composite product that includes the identified substance. It must be clinically safe to only process the 'code' and ignore the 'reaction.substance'.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getSubstance()
    {
        return $this->substance;
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
        if (null !== ($v = $this->getDescription())) {
            $a['description'] = $v;
        }
        if (null !== ($v = $this->getExposureRoute())) {
            $a['exposureRoute'] = $v;
        }
        if (0 < count($values = $this->getManifestation())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['manifestation'] = $vs;
            }
        }
        if (0 < count($values = $this->getNote())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['note'] = $vs;
            }
        }
        if (null !== ($v = $this->getOnset())) {
            $a['onset'] = $v;
        }
        if (null !== ($v = $this->getSeverity())) {
            $a['severity'] = $v;
        }
        if (null !== ($v = $this->getSubstance())) {
            $a['substance'] = $v;
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
            $sxe = new \SimpleXMLElement('<AllergyIntoleranceReaction xmlns="http://hl7.org/fhir"></AllergyIntoleranceReaction>');
        }
        if (null !== ($v = $this->getDescription())) {
            $v->xmlSerialize(true, $sxe->addChild('description'));
        }
        if (null !== ($v = $this->getExposureRoute())) {
            $v->xmlSerialize(true, $sxe->addChild('exposureRoute'));
        }
        if (0 < count($values = $this->getManifestation())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('manifestation'));
                }
            }
        }
        if (0 < count($values = $this->getNote())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('note'));
                }
            }
        }
        if (null !== ($v = $this->getOnset())) {
            $v->xmlSerialize(true, $sxe->addChild('onset'));
        }
        if (null !== ($v = $this->getSeverity())) {
            $v->xmlSerialize(true, $sxe->addChild('severity'));
        }
        if (null !== ($v = $this->getSubstance())) {
            $v->xmlSerialize(true, $sxe->addChild('substance'));
        }
        return parent::xmlSerialize($returnSXE, $sxe);
    }
}