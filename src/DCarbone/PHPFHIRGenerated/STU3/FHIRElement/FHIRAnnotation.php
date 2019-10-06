<?php

namespace DCarbone\PHPFHIRGenerated\STU3\FHIRElement;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 6th, 2019 09:04+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2019 Daniel Carbone (daniel.p.carbone@gmail.com)
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

use DCarbone\PHPFHIRGenerated\STU3\FHIRElement;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTypeInterface;

/**
 * A text note which also contains information about who made the statement and
 * when.
 * If the element is present, it must have a value for at least one of the defined
 * elements, an @id referenced from the Narrative, or extensions
 *
 * Class FHIRAnnotation
 * @package \DCarbone\PHPFHIRGenerated\STU3\FHIRElement
 */
class FHIRAnnotation extends FHIRElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_ANNOTATION;

    const FIELD_AUTHOR_REFERENCE = 'authorReference';
    const FIELD_AUTHOR_STRING = 'authorString';
    const FIELD_AUTHOR_STRING_EXT = '_authorString';
    const FIELD_TEXT = 'text';
    const FIELD_TEXT_EXT = '_text';
    const FIELD_TIME = 'time';
    const FIELD_TIME_EXT = '_time';

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The individual responsible for making the annotation.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    private $authorReference = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The individual responsible for making the annotation.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    private $authorString = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The text of the annotation.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    private $text = null;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Indicates when this particular annotation was made.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime
     */
    private $time = null;

    /**
     * FHIRAnnotation Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRAnnotation::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_AUTHOR_REFERENCE])) {
            if ($data[self::FIELD_AUTHOR_REFERENCE] instanceof FHIRReference) {
                $this->setAuthorReference($data[self::FIELD_AUTHOR_REFERENCE]);
            } else {
                $this->setAuthorReference(new FHIRReference($data[self::FIELD_AUTHOR_REFERENCE]));
            }
        }
        if (isset($data[self::FIELD_AUTHOR_STRING])) {
            $ext = (isset($data[self::FIELD_AUTHOR_STRING_EXT]) && is_array($data[self::FIELD_AUTHOR_STRING_EXT]))
                ? $data[self::FIELD_AUTHOR_STRING_EXT]
                : null;
            if ($data[self::FIELD_AUTHOR_STRING] instanceof FHIRString) {
                $this->setAuthorString($data[self::FIELD_AUTHOR_STRING]);
            } elseif ($ext && is_scalar($data[self::FIELD_AUTHOR_STRING])) {
                $this->setAuthorString(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_AUTHOR_STRING]] + $ext));
            } else {
                $this->setAuthorString(new FHIRString($data[self::FIELD_AUTHOR_STRING]));
            }
        }
        if (isset($data[self::FIELD_TEXT])) {
            $ext = (isset($data[self::FIELD_TEXT_EXT]) && is_array($data[self::FIELD_TEXT_EXT]))
                ? $data[self::FIELD_TEXT_EXT]
                : null;
            if ($data[self::FIELD_TEXT] instanceof FHIRString) {
                $this->setText($data[self::FIELD_TEXT]);
            } elseif ($ext && is_scalar($data[self::FIELD_TEXT])) {
                $this->setText(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_TEXT]] + $ext));
            } else {
                $this->setText(new FHIRString($data[self::FIELD_TEXT]));
            }
        }
        if (isset($data[self::FIELD_TIME])) {
            $ext = (isset($data[self::FIELD_TIME_EXT]) && is_array($data[self::FIELD_TIME_EXT]))
                ? $data[self::FIELD_TIME_EXT]
                : null;
            if ($data[self::FIELD_TIME] instanceof FHIRDateTime) {
                $this->setTime($data[self::FIELD_TIME]);
            } elseif ($ext && is_scalar($data[self::FIELD_TIME])) {
                $this->setTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $data[self::FIELD_TIME]] + $ext));
            } else {
                $this->setTime(new FHIRDateTime($data[self::FIELD_TIME]));
            }
        }
    }

    /**
     * @return string
     */
    public function getFHIRTypeName()
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The individual responsible for making the annotation.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getAuthorReference()
    {
        return $this->authorReference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The individual responsible for making the annotation.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $authorReference
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAnnotation
     */
    public function setAuthorReference(FHIRReference $authorReference = null)
    {
        $this->authorReference = $authorReference;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The individual responsible for making the annotation.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getAuthorString()
    {
        return $this->authorString;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The individual responsible for making the annotation.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $authorString
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAnnotation
     */
    public function setAuthorString($authorString = null)
    {
        if (null === $authorString) {
            $this->authorString = null;
            return $this;
        }
        if ($authorString instanceof FHIRString) {
            $this->authorString = $authorString;
            return $this;
        }
        $this->authorString = new FHIRString($authorString);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The text of the annotation.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The text of the annotation.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $text
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAnnotation
     */
    public function setText($text = null)
    {
        if (null === $text) {
            $this->text = null;
            return $this;
        }
        if ($text instanceof FHIRString) {
            $this->text = $text;
            return $this;
        }
        $this->text = new FHIRString($text);
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Indicates when this particular annotation was made.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Indicates when this particular annotation was made.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime $time
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAnnotation
     */
    public function setTime($time = null)
    {
        if (null === $time) {
            $this->time = null;
            return $this;
        }
        if ($time instanceof FHIRDateTime) {
            $this->time = $time;
            return $this;
        }
        $this->time = new FHIRDateTime($time);
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAnnotation $type
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAnnotation
     */
    public static function xmlUnserialize($sxe = null, PHPFHIRTypeInterface $type = null)
    {
        if (null === $sxe) {
            return null;
        }
        if (is_string($sxe)) {
            libxml_use_internal_errors(true);
            $sxe = new \SimpleXMLElement($sxe);
            if ($sxe === false) {
                throw new \DomainException(sprintf('FHIRAnnotation::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRAnnotation::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRElement::xmlUnserialize($sxe, new FHIRAnnotation);
        } elseif (!is_object($type) || !($type instanceof FHIRAnnotation)) {
            throw new \RuntimeException(sprintf(
                'FHIRAnnotation::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAnnotation or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->authorReference)) {
            $type->setAuthorReference(FHIRReference::xmlUnserialize($children->authorReference));
        }
        if (isset($attributes->authorString)) {
            $type->setAuthorString((string)$attributes->authorString);
        }
        if (isset($children->authorString)) {
            $type->setAuthorString(FHIRString::xmlUnserialize($children->authorString));
        }
        if (isset($attributes->text)) {
            $type->setText((string)$attributes->text);
        }
        if (isset($children->text)) {
            $type->setText(FHIRString::xmlUnserialize($children->text));
        }
        if (isset($attributes->time)) {
            $type->setTime((string)$attributes->time);
        }
        if (isset($children->time)) {
            $type->setTime(FHIRDateTime::xmlUnserialize($children->time));
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement $sxe
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<Annotation xmlns="http://hl7.org/fhir"></Annotation>');
        }
        parent::xmlSerialize($sxe);

        if (null !== ($v = $this->getAuthorReference())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_AUTHOR_REFERENCE));
        }
        if (null !== ($v = $this->getAuthorString())) {
            $sxe->addAttribute(self::FIELD_AUTHOR_STRING, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_AUTHOR_STRING));
            }
        }
        if (null !== ($v = $this->getText())) {
            $sxe->addAttribute(self::FIELD_TEXT, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_TEXT));
            }
        }
        if (null !== ($v = $this->getTime())) {
            $sxe->addAttribute(self::FIELD_TIME, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_TIME));
            }
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getAuthorReference())) {
            $a[self::FIELD_AUTHOR_REFERENCE] = $v;
        }
        if (null !== ($v = $this->getAuthorString())) {
            $a[self::FIELD_AUTHOR_STRING] = (string)$v;
            $a[self::FIELD_AUTHOR_STRING_EXT] = $v;
        }
        if (null !== ($v = $this->getText())) {
            $a[self::FIELD_TEXT] = (string)$v;
            $a[self::FIELD_TEXT_EXT] = $v;
        }
        if (null !== ($v = $this->getTime())) {
            $a[self::FIELD_TIME] = (string)$v;
            $a[self::FIELD_TIME_EXT] = $v;
        }
        return [PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE => self::FHIR_TYPE_NAME] + $a;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}