<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRConceptMap;

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
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRElement\FHIRUri;

/**
 * A statement of relationships from one set of concepts to one or more other concepts - either code systems or data elements, or classes in class models.
 *
 * Class FHIRConceptMapGroup
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRConceptMap
 */
class FHIRConceptMapGroup extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'ConceptMap.Group';

    /**
     * Mappings for an individual concept in the source to one or more concepts in the target.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapElement[]
     */
    private $element = [];

    /**
     * An absolute URI that identifies the Code System (if the source is a value set that crosses more than one code system).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    private $source = null;

    /**
     * The specific version of the code system, as determined by the code system authority.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $sourceVersion = null;

    /**
     * An absolute URI that identifies the code system of the target code (if the target is a value set that cross code systems).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    private $target = null;

    /**
     * The specific version of the code system, as determined by the code system authority.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $targetVersion = null;

    /**
     * What to do when there is no match in the mappings in the group.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapUnmapped
     */
    private $unmapped = null;

    /**
     * FHIRConceptMapGroup Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        if (is_array($data)) {
            if (isset($data['element'])) {
                $value = $data['element'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRConceptMapElement($v);
                        } 
                        if (!($v instanceof FHIRConceptMapElement)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapGroup::__construct - Collection field \"element\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapElement or data to construct type, saw ".gettype($v)); 
                        }
                        $this->addElement($v);
                    }
                }
            }
            if (isset($data['source'])) {
                $value = $data['source'];
                if (is_array($value)) {
                    $value = new FHIRUri($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRUri($value);
                }
                if (!($value instanceof FHIRUri)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapGroup::__construct - Property \"source\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or data to construct type, saw ".gettype($value)); 
                }
                $this->setSource($value);
            }
            if (isset($data['sourceVersion'])) {
                $value = $data['sourceVersion'];
                if (is_array($value)) {
                    $value = new FHIRString($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRString($value);
                }
                if (!($value instanceof FHIRString)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapGroup::__construct - Property \"sourceVersion\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or data to construct type, saw ".gettype($value)); 
                }
                $this->setSourceVersion($value);
            }
            if (isset($data['target'])) {
                $value = $data['target'];
                if (is_array($value)) {
                    $value = new FHIRUri($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRUri($value);
                }
                if (!($value instanceof FHIRUri)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapGroup::__construct - Property \"target\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or data to construct type, saw ".gettype($value)); 
                }
                $this->setTarget($value);
            }
            if (isset($data['targetVersion'])) {
                $value = $data['targetVersion'];
                if (is_array($value)) {
                    $value = new FHIRString($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRString($value);
                }
                if (!($value instanceof FHIRString)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapGroup::__construct - Property \"targetVersion\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or data to construct type, saw ".gettype($value)); 
                }
                $this->setTargetVersion($value);
            }
            if (isset($data['unmapped'])) {
                $value = $data['unmapped'];
                if (is_array($value)) {
                    $value = new FHIRConceptMapUnmapped($value);
                } 
                if (!($value instanceof FHIRConceptMapUnmapped)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapGroup::__construct - Property \"unmapped\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapUnmapped or data to construct type, saw ".gettype($value)); 
                }
                $this->setUnmapped($value);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapGroup::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
        parent::__construct($data);
    }

    /**
     * Mappings for an individual concept in the source to one or more concepts in the target.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapElement
     * @return $this
     */
    public function addElement(FHIRConceptMapElement $element = null)
    {
        if (null === $element) {
            return $this; 
        }
        $this->element[] = $element;
        return $this;
    }

    /**
     * Mappings for an individual concept in the source to one or more concepts in the target.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapElement[]
     */
    public function getElement()
    {
        return $this->element;
    }

    /**
     * An absolute URI that identifies the Code System (if the source is a value set that crosses more than one code system).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     * @return $this
     */
    public function setSource($source)
    {
        if (null === $source) {
            return $this; 
        }
        if (is_scalar($source)) {
            $source = new FHIRUri($source);
        }
        if (!($source instanceof FHIRUri)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRConceptMapGroup::setSource - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or appropriate scalar value, %s seen.',
                gettype($source)
            ));
        }
        $this->source = $source;
        return $this;
    }

    /**
     * An absolute URI that identifies the Code System (if the source is a value set that crosses more than one code system).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * The specific version of the code system, as determined by the code system authority.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setSourceVersion($sourceVersion)
    {
        if (null === $sourceVersion) {
            return $this; 
        }
        if (is_scalar($sourceVersion)) {
            $sourceVersion = new FHIRString($sourceVersion);
        }
        if (!($sourceVersion instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRConceptMapGroup::setSourceVersion - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($sourceVersion)
            ));
        }
        $this->sourceVersion = $sourceVersion;
        return $this;
    }

    /**
     * The specific version of the code system, as determined by the code system authority.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getSourceVersion()
    {
        return $this->sourceVersion;
    }

    /**
     * An absolute URI that identifies the code system of the target code (if the target is a value set that cross code systems).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     * @return $this
     */
    public function setTarget($target)
    {
        if (null === $target) {
            return $this; 
        }
        if (is_scalar($target)) {
            $target = new FHIRUri($target);
        }
        if (!($target instanceof FHIRUri)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRConceptMapGroup::setTarget - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or appropriate scalar value, %s seen.',
                gettype($target)
            ));
        }
        $this->target = $target;
        return $this;
    }

    /**
     * An absolute URI that identifies the code system of the target code (if the target is a value set that cross code systems).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * The specific version of the code system, as determined by the code system authority.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setTargetVersion($targetVersion)
    {
        if (null === $targetVersion) {
            return $this; 
        }
        if (is_scalar($targetVersion)) {
            $targetVersion = new FHIRString($targetVersion);
        }
        if (!($targetVersion instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRConceptMapGroup::setTargetVersion - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($targetVersion)
            ));
        }
        $this->targetVersion = $targetVersion;
        return $this;
    }

    /**
     * The specific version of the code system, as determined by the code system authority.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getTargetVersion()
    {
        return $this->targetVersion;
    }

    /**
     * What to do when there is no match in the mappings in the group.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapUnmapped
     * @return $this
     */
    public function setUnmapped(FHIRConceptMapUnmapped $unmapped = null)
    {
        if (null === $unmapped) {
            return $this; 
        }
        $this->unmapped = $unmapped;
        return $this;
    }

    /**
     * What to do when there is no match in the mappings in the group.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapUnmapped
     */
    public function getUnmapped()
    {
        return $this->unmapped;
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
        if (0 < count($values = $this->getElement())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['element'] = $vs;
            }
        }
        if (null !== ($v = $this->getSource())) {
            $a['source'] = $v;
        }
        if (null !== ($v = $this->getSourceVersion())) {
            $a['sourceVersion'] = $v;
        }
        if (null !== ($v = $this->getTarget())) {
            $a['target'] = $v;
        }
        if (null !== ($v = $this->getTargetVersion())) {
            $a['targetVersion'] = $v;
        }
        if (null !== ($v = $this->getUnmapped())) {
            $a['unmapped'] = $v;
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
            $sxe = new \SimpleXMLElement('<ConceptMapGroup xmlns="http://hl7.org/fhir"></ConceptMapGroup>');
        }
        if (0 < count($values = $this->getElement())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('element'));
                }
            }
        }
        if (null !== ($v = $this->getSource())) {
            $v->xmlSerialize(true, $sxe->addChild('source'));
        }
        if (null !== ($v = $this->getSourceVersion())) {
            $v->xmlSerialize(true, $sxe->addChild('sourceVersion'));
        }
        if (null !== ($v = $this->getTarget())) {
            $v->xmlSerialize(true, $sxe->addChild('target'));
        }
        if (null !== ($v = $this->getTargetVersion())) {
            $v->xmlSerialize(true, $sxe->addChild('targetVersion'));
        }
        if (null !== ($v = $this->getUnmapped())) {
            $v->xmlSerialize(true, $sxe->addChild('unmapped'));
        }
        return parent::xmlSerialize($returnSXE, $sxe);
    }
}