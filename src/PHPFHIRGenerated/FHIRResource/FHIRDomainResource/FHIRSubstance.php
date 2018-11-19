<?php

namespace PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

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

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstance\FHIRSubstanceIngredient;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstance\FHIRSubstanceInstance;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRFHIRSubstanceStatus;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * A homogeneous material with a definite composition.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRSubstance
 * @package PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRSubstance extends FHIRDomainResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'Substance';

    /**
     * A code that classifies the general type of substance.  This is used  for searching, sorting and display purposes.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    private $category = [];

    /**
     * A code (or set of codes) that identify this substance.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $code = null;

    /**
     * A description of the substance - its appearance, handling requirements, and other usage notes.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $description = null;

    /**
     * Unique identifier for the substance.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    private $identifier = [];

    /**
     * A substance can be composed of other substances.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstance\FHIRSubstanceIngredient[]
     */
    private $ingredient = [];

    /**
     * Substance may be used to describe a kind of substance, or a specific package/container of the substance: an instance.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstance\FHIRSubstanceInstance[]
     */
    private $instance = [];

    /**
     * A code to indicate if the substance is actively used.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRFHIRSubstanceStatus
     */
    private $status = null;

    /**
     * FHIRSubstance Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        if (is_array($data)) {
            if (isset($data['category'])) {
                $value = $data['category'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRCodeableConcept($v);
                        } 
                        if (!($v instanceof FHIRCodeableConcept)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRSubstance::__construct - Collection field \"category\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept or data to construct type, saw ".gettype($v)); 
                        }
                        $this->addCategory($v);
                    }
                }
            }
            if (isset($data['code'])) {
                $value = $data['code'];
                if (is_array($value)) {
                    $value = new FHIRCodeableConcept($value);
                } 
                if (!($value instanceof FHIRCodeableConcept)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRSubstance::__construct - Property \"code\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept or data to construct type, saw ".gettype($value)); 
                }
                $this->setCode($value);
            }
            if (isset($data['description'])) {
                $value = $data['description'];
                if (is_array($value)) {
                    $value = new FHIRString($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRString($value);
                }
                if (!($value instanceof FHIRString)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRSubstance::__construct - Property \"description\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or data to construct type, saw ".gettype($value)); 
                }
                $this->setDescription($value);
            }
            if (isset($data['identifier'])) {
                $value = $data['identifier'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRIdentifier($v);
                        } 
                        if (!($v instanceof FHIRIdentifier)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRSubstance::__construct - Collection field \"identifier\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRIdentifier or data to construct type, saw ".gettype($v)); 
                        }
                        $this->addIdentifier($v);
                    }
                }
            }
            if (isset($data['ingredient'])) {
                $value = $data['ingredient'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRSubstanceIngredient($v);
                        } 
                        if (!($v instanceof FHIRSubstanceIngredient)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRSubstance::__construct - Collection field \"ingredient\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstance\FHIRSubstanceIngredient or data to construct type, saw ".gettype($v)); 
                        }
                        $this->addIngredient($v);
                    }
                }
            }
            if (isset($data['instance'])) {
                $value = $data['instance'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRSubstanceInstance($v);
                        } 
                        if (!($v instanceof FHIRSubstanceInstance)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRSubstance::__construct - Collection field \"instance\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstance\FHIRSubstanceInstance or data to construct type, saw ".gettype($v)); 
                        }
                        $this->addInstance($v);
                    }
                }
            }
            if (isset($data['status'])) {
                $value = $data['status'];
                if (is_array($value)) {
                    $value = new FHIRFHIRSubstanceStatus($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRFHIRSubstanceStatus($value);
                }
                if (!($value instanceof FHIRFHIRSubstanceStatus)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRSubstance::__construct - Property \"status\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRFHIRSubstanceStatus or data to construct type, saw ".gettype($value)); 
                }
                $this->setStatus($value);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRSubstance::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
        parent::__construct($data);
    }

    /**
     * A code that classifies the general type of substance.  This is used  for searching, sorting and display purposes.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function addCategory(FHIRCodeableConcept $category = null)
    {
        if (null === $category) {
            return $this; 
        }
        $this->category[] = $category;
        return $this;
    }

    /**
     * A code that classifies the general type of substance.  This is used  for searching, sorting and display purposes.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * A code (or set of codes) that identify this substance.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setCode(FHIRCodeableConcept $code = null)
    {
        if (null === $code) {
            return $this; 
        }
        $this->code = $code;
        return $this;
    }

    /**
     * A code (or set of codes) that identify this substance.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * A description of the substance - its appearance, handling requirements, and other usage notes.
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
                'FHIRSubstance::setDescription - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($description)
            ));
        }
        $this->description = $description;
        return $this;
    }

    /**
     * A description of the substance - its appearance, handling requirements, and other usage notes.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Unique identifier for the substance.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     * @return $this
     */
    public function addIdentifier(FHIRIdentifier $identifier = null)
    {
        if (null === $identifier) {
            return $this; 
        }
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * Unique identifier for the substance.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * A substance can be composed of other substances.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstance\FHIRSubstanceIngredient
     * @return $this
     */
    public function addIngredient(FHIRSubstanceIngredient $ingredient = null)
    {
        if (null === $ingredient) {
            return $this; 
        }
        $this->ingredient[] = $ingredient;
        return $this;
    }

    /**
     * A substance can be composed of other substances.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstance\FHIRSubstanceIngredient[]
     */
    public function getIngredient()
    {
        return $this->ingredient;
    }

    /**
     * Substance may be used to describe a kind of substance, or a specific package/container of the substance: an instance.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstance\FHIRSubstanceInstance
     * @return $this
     */
    public function addInstance(FHIRSubstanceInstance $instance = null)
    {
        if (null === $instance) {
            return $this; 
        }
        $this->instance[] = $instance;
        return $this;
    }

    /**
     * Substance may be used to describe a kind of substance, or a specific package/container of the substance: an instance.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstance\FHIRSubstanceInstance[]
     */
    public function getInstance()
    {
        return $this->instance;
    }

    /**
     * A code to indicate if the substance is actively used.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRFHIRSubstanceStatus
     * @return $this
     */
    public function setStatus($status)
    {
        if (null === $status) {
            return $this; 
        }
        if (is_scalar($status)) {
            $status = new FHIRFHIRSubstanceStatus($status);
        }
        if (!($status instanceof FHIRFHIRSubstanceStatus)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSubstance::setStatus - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRFHIRSubstanceStatus or appropriate scalar value, %s seen.',
                gettype($status)
            ));
        }
        $this->status = $status;
        return $this;
    }

    /**
     * A code to indicate if the substance is actively used.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRFHIRSubstanceStatus
     */
    public function getStatus()
    {
        return $this->status;
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
        $a['resourceType'] = self::FHIR_TYPE_NAME;
        if (0 < count($values = $this->getCategory())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['category'] = $vs;
            }
        }
        if (null !== ($v = $this->getCode())) {
            $a['code'] = $v;
        }
        if (null !== ($v = $this->getDescription())) {
            $a['description'] = $v;
        }
        if (0 < count($values = $this->getIdentifier())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['identifier'] = $vs;
            }
        }
        if (0 < count($values = $this->getIngredient())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['ingredient'] = $vs;
            }
        }
        if (0 < count($values = $this->getInstance())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['instance'] = $vs;
            }
        }
        if (null !== ($v = $this->getStatus())) {
            $a['status'] = $v;
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
            $sxe = new \SimpleXMLElement('<Substance xmlns="http://hl7.org/fhir"></Substance>');
        }
        if (0 < count($values = $this->getCategory())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('category'));
                }
            }
        }
        if (null !== ($v = $this->getCode())) {
            $v->xmlSerialize(true, $sxe->addChild('code'));
        }
        if (null !== ($v = $this->getDescription())) {
            $v->xmlSerialize(true, $sxe->addChild('description'));
        }
        if (0 < count($values = $this->getIdentifier())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('identifier'));
                }
            }
        }
        if (0 < count($values = $this->getIngredient())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('ingredient'));
                }
            }
        }
        if (0 < count($values = $this->getInstance())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('instance'));
                }
            }
        }
        if (null !== ($v = $this->getStatus())) {
            $v->xmlSerialize(true, $sxe->addChild('status'));
        }
        return parent::xmlSerialize($returnSXE, $sxe);
    }
}