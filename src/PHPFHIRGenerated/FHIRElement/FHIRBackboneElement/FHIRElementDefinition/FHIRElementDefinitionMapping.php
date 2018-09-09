<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRElementDefinition;

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
use PHPFHIRGenerated\FHIRElement\FHIRCode;
use PHPFHIRGenerated\FHIRElement\FHIRId;
use PHPFHIRGenerated\FHIRElement\FHIRString;

/**
 * Captures constraints on each element within the resource, profile, or extension.
 * If the element is present, it must have a value for at least one of the defined elements, an @id referenced from the Narrative, or extensions
 *
 * Class FHIRElementDefinitionMapping
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRElementDefinition
 */
class FHIRElementDefinitionMapping extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'ElementDefinition.Mapping';

    /**
     * Comments that provide information about the mapping or its use.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $comment = null;

    /**
     * An internal reference to the definition of a mapping.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public $identity = null;

    /**
     * Identifies the computable language in which mapping.map is expressed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public $language = null;

    /**
     * Expresses what part of the target specification corresponds to this element.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $map = null;

    /**
     * FHIRElementDefinitionMapping Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['comment'])) {
                $this->setComment($data['comment']);
            }
            if (isset($data['identity'])) {
                $this->setIdentity($data['identity']);
            }
            if (isset($data['language'])) {
                $this->setLanguage($data['language']);
            }
            if (isset($data['map'])) {
                $this->setMap($data['map']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRElementDefinition\FHIRElementDefinitionMapping::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Comments that provide information about the mapping or its use.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setComment($comment)
    {
        if (null === $comment) {
            return $this; 
        }
        if (is_scalar($comment)) {
            $comment = new FHIRString($comment);
        }
        if (!($comment instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinitionMapping::setComment - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($comment)
            ));
        }
        $this->comment = $comment;
        return $this;
    }

    /**
     * Comments that provide information about the mapping or its use.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getComment()
    {
        return $this->comment;
    }


    /**
     * An internal reference to the definition of a mapping.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRId
     * @return $this
     */
    public function setIdentity($identity)
    {
        if (null === $identity) {
            return $this; 
        }
        if (is_scalar($identity)) {
            $identity = new FHIRId($identity);
        }
        if (!($identity instanceof FHIRId)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinitionMapping::setIdentity - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRId or appropriate scalar value, %s seen.',
                gettype($identity)
            ));
        }
        $this->identity = $identity;
        return $this;
    }

    /**
     * An internal reference to the definition of a mapping.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public function getIdentity()
    {
        return $this->identity;
    }


    /**
     * Identifies the computable language in which mapping.map is expressed.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCode
     * @return $this
     */
    public function setLanguage($language)
    {
        if (null === $language) {
            return $this; 
        }
        if (is_scalar($language)) {
            $language = new FHIRCode($language);
        }
        if (!($language instanceof FHIRCode)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinitionMapping::setLanguage - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRCode or appropriate scalar value, %s seen.',
                gettype($language)
            ));
        }
        $this->language = $language;
        return $this;
    }

    /**
     * Identifies the computable language in which mapping.map is expressed.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getLanguage()
    {
        return $this->language;
    }


    /**
     * Expresses what part of the target specification corresponds to this element.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setMap($map)
    {
        if (null === $map) {
            return $this; 
        }
        if (is_scalar($map)) {
            $map = new FHIRString($map);
        }
        if (!($map instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinitionMapping::setMap - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($map)
            ));
        }
        $this->map = $map;
        return $this;
    }

    /**
     * Expresses what part of the target specification corresponds to this element.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getMap()
    {
        return $this->map;
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
        if (null !== ($v = $this->getComment())) {
            $a['comment'] = $v;
        }
        if (null !== ($v = $this->getIdentity())) {
            $a['identity'] = $v;
        }
        if (null !== ($v = $this->getLanguage())) {
            $a['language'] = $v;
        }
        if (null !== ($v = $this->getMap())) {
            $a['map'] = $v;
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
            $sxe = new \SimpleXMLElement('<ElementDefinitionMapping xmlns="http://hl7.org/fhir"></ElementDefinitionMapping>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}