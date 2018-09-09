<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap;

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
use PHPFHIRGenerated\FHIRElement\FHIRCanonical;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRElement\FHIRStructureMapModelMode;

/**
 * A Map of relationships between 2 structures that can be used to transform data.
 *
 * Class FHIRStructureMapStructure
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap
 */
class FHIRStructureMapStructure extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'StructureMap.Structure';

    /**
     * The name used for this type in the map.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $alias = null;

    /**
     * Documentation that describes how the structure is used in the mapping.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $documentation = null;

    /**
     * How the referenced structure is used in this mapping.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRStructureMapModelMode
     */
    public $mode = null;

    /**
     * The canonical URL that identifies the structure.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    public $url = null;

    /**
     * FHIRStructureMapStructure Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['alias'])) {
                $this->setAlias($data['alias']);
            }
            if (isset($data['documentation'])) {
                $this->setDocumentation($data['documentation']);
            }
            if (isset($data['mode'])) {
                $this->setMode($data['mode']);
            }
            if (isset($data['url'])) {
                $this->setUrl($data['url']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapStructure::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * The name used for this type in the map.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setAlias($alias)
    {
        if (null === $alias) {
            return $this; 
        }
        if (is_scalar($alias)) {
            $alias = new FHIRString($alias);
        }
        if (!($alias instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRStructureMapStructure::setAlias - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($alias)
            ));
        }
        $this->alias = $alias;
        return $this;
    }

    /**
     * The name used for this type in the map.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getAlias()
    {
        return $this->alias;
    }


    /**
     * Documentation that describes how the structure is used in the mapping.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setDocumentation($documentation)
    {
        if (null === $documentation) {
            return $this; 
        }
        if (is_scalar($documentation)) {
            $documentation = new FHIRString($documentation);
        }
        if (!($documentation instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRStructureMapStructure::setDocumentation - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($documentation)
            ));
        }
        $this->documentation = $documentation;
        return $this;
    }

    /**
     * Documentation that describes how the structure is used in the mapping.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDocumentation()
    {
        return $this->documentation;
    }


    /**
     * How the referenced structure is used in this mapping.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRStructureMapModelMode
     * @return $this
     */
    public function setMode($mode)
    {
        if (null === $mode) {
            return $this; 
        }
        if (is_scalar($mode)) {
            $mode = new FHIRStructureMapModelMode($mode);
        }
        if (!($mode instanceof FHIRStructureMapModelMode)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRStructureMapStructure::setMode - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRStructureMapModelMode or appropriate scalar value, %s seen.',
                gettype($mode)
            ));
        }
        $this->mode = $mode;
        return $this;
    }

    /**
     * How the referenced structure is used in this mapping.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRStructureMapModelMode
     */
    public function getMode()
    {
        return $this->mode;
    }


    /**
     * The canonical URL that identifies the structure.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCanonical
     * @return $this
     */
    public function setUrl($url)
    {
        if (null === $url) {
            return $this; 
        }
        if (is_scalar($url)) {
            $url = new FHIRCanonical($url);
        }
        if (!($url instanceof FHIRCanonical)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRStructureMapStructure::setUrl - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRCanonical or appropriate scalar value, %s seen.',
                gettype($url)
            ));
        }
        $this->url = $url;
        return $this;
    }

    /**
     * The canonical URL that identifies the structure.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    public function getUrl()
    {
        return $this->url;
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
        if (null !== ($v = $this->getAlias())) {
            $a['alias'] = $v;
        }
        if (null !== ($v = $this->getDocumentation())) {
            $a['documentation'] = $v;
        }
        if (null !== ($v = $this->getMode())) {
            $a['mode'] = $v;
        }
        if (null !== ($v = $this->getUrl())) {
            $a['url'] = $v;
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
            $sxe = new \SimpleXMLElement('<StructureMapStructure xmlns="http://hl7.org/fhir"></StructureMapStructure>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}