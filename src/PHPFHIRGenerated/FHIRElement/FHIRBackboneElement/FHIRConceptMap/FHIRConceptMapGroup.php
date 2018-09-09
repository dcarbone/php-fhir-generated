<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRConceptMap;

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
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRElement\FHIRUri;

/**
 * A statement of relationships from one set of concepts to one or more other concepts - either concepts in code systems, or data element/data element concepts, or classes in class models.
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
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapElement
     */
    public $element = null;

    /**
     * An absolute URI that identifies the source system where the concepts to be mapped are defined.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $source = null;

    /**
     * The specific version of the code system, as determined by the code system authority.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $sourceVersion = null;

    /**
     * An absolute URI that identifies the target system that the concepts will be mapped to.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $target = null;

    /**
     * The specific version of the code system, as determined by the code system authority.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $targetVersion = null;

    /**
     * What to do when there is no mapping for the source concept. "Unmapped" does not include codes that are unamatched, and the unmapped element is ignored in a code is specified to have equivalence = unmatched.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapUnmapped
     */
    public $unmapped = null;

    /**
     * FHIRConceptMapGroup Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['element'])) {
                $this->setElement($data['element']);
            }
            if (isset($data['source'])) {
                $this->setSource($data['source']);
            }
            if (isset($data['sourceVersion'])) {
                $this->setSourceVersion($data['sourceVersion']);
            }
            if (isset($data['target'])) {
                $this->setTarget($data['target']);
            }
            if (isset($data['targetVersion'])) {
                $this->setTargetVersion($data['targetVersion']);
            }
            if (isset($data['unmapped'])) {
                $this->setUnmapped($data['unmapped']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapGroup::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Mappings for an individual concept in the source to one or more concepts in the target.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapElement
     * @return $this
     */
    public function setElement(FHIRConceptMapElement $element = null)
    {
        if (null === $element) {
            return $this; 
        }
        $this->element = $element;
        return $this;
    }

    /**
     * Mappings for an individual concept in the source to one or more concepts in the target.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapElement
     */
    public function getElement()
    {
        return $this->element;
    }


    /**
     * An absolute URI that identifies the source system where the concepts to be mapped are defined.
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
     * An absolute URI that identifies the source system where the concepts to be mapped are defined.
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
     * An absolute URI that identifies the target system that the concepts will be mapped to.
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
     * An absolute URI that identifies the target system that the concepts will be mapped to.
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
     * What to do when there is no mapping for the source concept. "Unmapped" does not include codes that are unamatched, and the unmapped element is ignored in a code is specified to have equivalence = unmatched.
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
     * What to do when there is no mapping for the source concept. "Unmapped" does not include codes that are unamatched, and the unmapped element is ignored in a code is specified to have equivalence = unmatched.
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
        if (null !== ($v = $this->getElement())) {
            $a['element'] = $v;
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
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}