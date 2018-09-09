<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRGraphDefinition;

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
use PHPFHIRGenerated\FHIRElement\FHIRInteger;
use PHPFHIRGenerated\FHIRElement\FHIRString;

/**
 * A formal computable definition of a graph of resources - that is, a coherent set of resources that form a graph by following references. The Graph Definition resource defines a set and makes rules about the set.
 *
 * Class FHIRGraphDefinitionLink
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRGraphDefinition
 */
class FHIRGraphDefinitionLink extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'GraphDefinition.Link';

    /**
     * Information about why this link is of interest in this graph definition.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * Maximum occurrences for this link.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $max = null;

    /**
     * Minimum occurrences for this link.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public $min = null;

    /**
     * A FHIR expression that identifies one of FHIR References to other resources.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $path = null;

    /**
     * Which slice (if profiled).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $sliceName = null;

    /**
     * Potential target for the link.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRGraphDefinition\FHIRGraphDefinitionTarget
     */
    public $target = null;

    /**
     * FHIRGraphDefinitionLink Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['description'])) {
                $this->setDescription($data['description']);
            }
            if (isset($data['max'])) {
                $this->setMax($data['max']);
            }
            if (isset($data['min'])) {
                $this->setMin($data['min']);
            }
            if (isset($data['path'])) {
                $this->setPath($data['path']);
            }
            if (isset($data['sliceName'])) {
                $this->setSliceName($data['sliceName']);
            }
            if (isset($data['target'])) {
                $this->setTarget($data['target']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRGraphDefinition\FHIRGraphDefinitionLink::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Information about why this link is of interest in this graph definition.
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
                'FHIRGraphDefinitionLink::setDescription - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($description)
            ));
        }
        $this->description = $description;
        return $this;
    }

    /**
     * Information about why this link is of interest in this graph definition.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }


    /**
     * Maximum occurrences for this link.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setMax($max)
    {
        if (null === $max) {
            return $this; 
        }
        if (is_scalar($max)) {
            $max = new FHIRString($max);
        }
        if (!($max instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRGraphDefinitionLink::setMax - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($max)
            ));
        }
        $this->max = $max;
        return $this;
    }

    /**
     * Maximum occurrences for this link.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getMax()
    {
        return $this->max;
    }


    /**
     * Minimum occurrences for this link.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRInteger
     * @return $this
     */
    public function setMin($min)
    {
        if (null === $min) {
            return $this; 
        }
        if (is_scalar($min)) {
            $min = new FHIRInteger($min);
        }
        if (!($min instanceof FHIRInteger)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRGraphDefinitionLink::setMin - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRInteger or appropriate scalar value, %s seen.',
                gettype($min)
            ));
        }
        $this->min = $min;
        return $this;
    }

    /**
     * Minimum occurrences for this link.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getMin()
    {
        return $this->min;
    }


    /**
     * A FHIR expression that identifies one of FHIR References to other resources.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setPath($path)
    {
        if (null === $path) {
            return $this; 
        }
        if (is_scalar($path)) {
            $path = new FHIRString($path);
        }
        if (!($path instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRGraphDefinitionLink::setPath - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($path)
            ));
        }
        $this->path = $path;
        return $this;
    }

    /**
     * A FHIR expression that identifies one of FHIR References to other resources.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getPath()
    {
        return $this->path;
    }


    /**
     * Which slice (if profiled).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setSliceName($sliceName)
    {
        if (null === $sliceName) {
            return $this; 
        }
        if (is_scalar($sliceName)) {
            $sliceName = new FHIRString($sliceName);
        }
        if (!($sliceName instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRGraphDefinitionLink::setSliceName - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($sliceName)
            ));
        }
        $this->sliceName = $sliceName;
        return $this;
    }

    /**
     * Which slice (if profiled).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getSliceName()
    {
        return $this->sliceName;
    }


    /**
     * Potential target for the link.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRGraphDefinition\FHIRGraphDefinitionTarget
     * @return $this
     */
    public function setTarget(FHIRGraphDefinitionTarget $target = null)
    {
        if (null === $target) {
            return $this; 
        }
        $this->target = $target;
        return $this;
    }

    /**
     * Potential target for the link.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRGraphDefinition\FHIRGraphDefinitionTarget
     */
    public function getTarget()
    {
        return $this->target;
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
        if (null !== ($v = $this->getMax())) {
            $a['max'] = $v;
        }
        if (null !== ($v = $this->getMin())) {
            $a['min'] = $v;
        }
        if (null !== ($v = $this->getPath())) {
            $a['path'] = $v;
        }
        if (null !== ($v = $this->getSliceName())) {
            $a['sliceName'] = $v;
        }
        if (null !== ($v = $this->getTarget())) {
            $a['target'] = $v;
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
            $sxe = new \SimpleXMLElement('<GraphDefinitionLink xmlns="http://hl7.org/fhir"></GraphDefinitionLink>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}