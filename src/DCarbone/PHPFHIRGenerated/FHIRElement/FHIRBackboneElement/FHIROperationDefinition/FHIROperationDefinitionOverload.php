<?php

namespace DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIROperationDefinition;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: July 27th, 2019 15:22+0000
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
 *   Generated on Thu, Dec 27, 2018 22:37+1100 for FHIR v4.0.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\PHPFHIRTypeInterface;

/**
 * A formal computable definition of an operation (on the RESTful interface) or a
 * named query (using the search interaction).
 *
 * Class FHIROperationDefinitionOverload
 * @package \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIROperationDefinition
 */
class FHIROperationDefinitionOverload extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_OPERATION_DEFINITION_DOT_OVERLOAD;

    const FIELD_COMMENT = 'comment';
    const FIELD_COMMENT_EXT = '_comment';
    const FIELD_PARAMETER_NAME = 'parameterName';
    const FIELD_PARAMETER_NAME_EXT = '_parameterName';

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Comments to go on overload.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $comment = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Name of parameter to include in overload.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    private $parameterName = [];

    /**
     * FHIROperationDefinitionOverload Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIROperationDefinitionOverload::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_COMMENT])) {
            $ext = (isset($data[self::FIELD_COMMENT_EXT]) && is_array($data[self::FIELD_COMMENT_EXT]))
                ? $data[self::FIELD_COMMENT_EXT]
                : null;
            if ($data[self::FIELD_COMMENT] instanceof FHIRString) {
                $this->setComment($data[self::FIELD_COMMENT]);
            } elseif ($ext && is_scalar($data[self::FIELD_COMMENT])) {
                $this->setComment(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_COMMENT]] + $ext));
            } else {
                $this->setComment(new FHIRString($data[self::FIELD_COMMENT]));
            }
        }
        if (isset($data[self::FIELD_PARAMETER_NAME])) {
            $ext = (isset($data[self::FIELD_PARAMETER_NAME_EXT]) && is_array($data[self::FIELD_PARAMETER_NAME_EXT]))
                ? $data[self::FIELD_PARAMETER_NAME_EXT]
                : null;
            if (is_array($data[self::FIELD_PARAMETER_NAME])) {
                foreach($data[self::FIELD_PARAMETER_NAME] as $i => $v) {
                    if ($v instanceof FHIRString) {
                        $this->addParameterName($v);
                    } elseif ($ext && is_scalar($v) && isset($ext[$i]) && is_array($ext[$i])) {
                        $this->addParameterName(new FHIRString([FHIRString::FIELD_VALUE => $v] + $ext[$i]));
                    } else {
                        $this->addParameterName(new FHIRString($v));
                    }
                }
            } elseif ($data[self::FIELD_PARAMETER_NAME] instanceof FHIRString) {
                $this->addParameterName($data[self::FIELD_PARAMETER_NAME]);
            } elseif ($ext && is_scalar($data[self::FIELD_PARAMETER_NAME])) {
                $this->addParameterName(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_PARAMETER_NAME]] + $ext));
            } else {
                $this->addParameterName(new FHIRString($data[self::FIELD_PARAMETER_NAME]));
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
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Comments to go on overload.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Comments to go on overload.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString $comment
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionOverload
     */
    public function setComment($comment = null)
    {
        if (null === $comment) {
            $this->comment = null;
            return $this;
        }
        if ($comment instanceof FHIRString) {
            $this->comment = $comment;
            return $this;
        }
        $this->comment = new FHIRString($comment);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Name of parameter to include in overload.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    public function getParameterName()
    {
        return $this->parameterName;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Name of parameter to include in overload.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString $parameterName
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionOverload
     */
    public function addParameterName($parameterName = null)
    {
        if (null === $parameterName) {
            $this->parameterName = null;
            return $this;
        }
        if ($parameterName instanceof FHIRString) {
            $this->parameterName = $parameterName;
            return $this;
        }
        $this->parameterName = new FHIRString($parameterName);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Name of parameter to include in overload.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString[] $parameterName
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionOverload
     */
    public function setParameterName(array $parameterName = [])
    {
        $this->parameterName = [];
        if ([] === $parameterName) {
            return $this;
        }
        foreach($parameterName as $v) {
            if ($v instanceof FHIRString) {
                $this->addParameterName($v);
            } else {
                $this->addParameterName(new FHIRString($v));
            }
        }
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null \$sxe
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionOverload $type
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionOverload
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
                throw new \DomainException(sprintf('FHIROperationDefinitionOverload::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIROperationDefinitionOverload::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRBackboneElement::xmlUnserialize(\$sxe, new FHIROperationDefinitionOverload);
        } elseif (!is_object($type) || !($type instanceof FHIROperationDefinitionOverload)) {
            throw new \RuntimeException(sprintf(
                'FHIROperationDefinitionOverload::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionOverload or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($attributes->comment)) {
            $type->setComment((string)$attributes->comment);
        }
        if (isset($children->comment)) {
            $type->setComment(FHIRString::xmlUnserialize($children->comment));
        }
        if (isset($attributes->parameterName)) {
            $type->addParameterName((string)$attributes->parameterName);
        }
        if (isset($children->parameterName)) {
            foreach($children->parameterName as $child) {
                $type->addParameterName(FHIRString::xmlUnserialize($child));
            }
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement \$sxe
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<OperationDefinitionOverload xmlns="http://hl7.org/fhir"></OperationDefinitionOverload>');
        }
        if (null !== ($v = $this->getComment())) {
            $sxe->addAttribute(self::FIELD_COMMENT, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_COMMENT));
            }
        }
        if ([] !== ($vs = $this->getParameterName())) {
            $first = true;
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                if ($first) {
                    $sxe->addAttribute(self::FIELD_PARAMETER_NAME, (string)$v);
                    if (null !== $v->getId() || [] !== $v->getExtension()) {
                        $v->xmlSerialize($sxe->addChild(self::FIELD_PARAMETER_NAME));
                    }
                    $first = false;
                } else {
                    $v->xmlSerialize($sxe->addChild(self::FIELD_PARAMETER_NAME));
                }
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
        if (null !== ($v = $this->getComment())) {
            $a[self::FIELD_COMMENT] = (string)$v;
            $a[self::FIELD_COMMENT_EXT] = $v;
        }
        if ([] !== ($vs = $this->getParameterName())) {
            $a[self::FIELD_PARAMETER_NAME] = [];
            $a[self::FIELD_PARAMETER_NAME_EXT] = [];
            foreach ($vs as $v) {
                $a[self::FIELD_PARAMETER_NAME][] = (string)$v;
                $a[self::FIELD_PARAMETER_NAME_EXT][] = $v;
            }
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