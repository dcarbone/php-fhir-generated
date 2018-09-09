<?php

namespace PHPFHIRGenerated\FHIRElement;

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

use PHPFHIRGenerated\FHIRElement;

/**
 * A  text note which also  contains information about who made the statement and when.
 * If the element is present, it must have a value for at least one of the defined elements, an @id referenced from the Narrative, or extensions
 *
 * Class FHIRAnnotation
 * @package PHPFHIRGenerated\FHIRElement
 */
class FHIRAnnotation extends FHIRElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'Annotation';

    /**
     * The individual responsible for making the annotation.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $authorReference = null;

    /**
     * The individual responsible for making the annotation.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $authorString = null;

    /**
     * The text of the annotation in markdown format.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public $text = null;

    /**
     * Indicates when this particular annotation was made.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $time = null;

    /**
     * FHIRAnnotation Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['authorReference'])) {
                $this->setAuthorReference($data['authorReference']);
            }
            if (isset($data['authorString'])) {
                $this->setAuthorString($data['authorString']);
            }
            if (isset($data['text'])) {
                $this->setText($data['text']);
            }
            if (isset($data['time'])) {
                $this->setTime($data['time']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRAnnotation::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * The individual responsible for making the annotation.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setAuthorReference(FHIRReference $authorReference = null)
    {
        if (null === $authorReference) {
            return $this; 
        }
        $this->authorReference = $authorReference;
        return $this;
    }

    /**
     * The individual responsible for making the annotation.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getAuthorReference()
    {
        return $this->authorReference;
    }


    /**
     * The individual responsible for making the annotation.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setAuthorString($authorString)
    {
        if (null === $authorString) {
            return $this; 
        }
        if (is_scalar($authorString)) {
            $authorString = new FHIRString($authorString);
        }
        if (!($authorString instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRAnnotation::setAuthorString - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($authorString)
            ));
        }
        $this->authorString = $authorString;
        return $this;
    }

    /**
     * The individual responsible for making the annotation.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getAuthorString()
    {
        return $this->authorString;
    }


    /**
     * The text of the annotation in markdown format.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     * @return $this
     */
    public function setText($text)
    {
        if (null === $text) {
            return $this; 
        }
        if (is_scalar($text)) {
            $text = new FHIRMarkdown($text);
        }
        if (!($text instanceof FHIRMarkdown)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRAnnotation::setText - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRMarkdown or appropriate scalar value, %s seen.',
                gettype($text)
            ));
        }
        $this->text = $text;
        return $this;
    }

    /**
     * The text of the annotation in markdown format.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public function getText()
    {
        return $this->text;
    }


    /**
     * Indicates when this particular annotation was made.
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
                'FHIRAnnotation::setTime - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($time)
            ));
        }
        $this->time = $time;
        return $this;
    }

    /**
     * Indicates when this particular annotation was made.
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
        if (null !== ($v = $this->getAuthorReference())) {
            $a['authorReference'] = $v;
        }
        if (null !== ($v = $this->getAuthorString())) {
            $a['authorString'] = $v;
        }
        if (null !== ($v = $this->getText())) {
            $a['text'] = $v;
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
            $sxe = new \SimpleXMLElement('<Annotation xmlns="http://hl7.org/fhir"></Annotation>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}