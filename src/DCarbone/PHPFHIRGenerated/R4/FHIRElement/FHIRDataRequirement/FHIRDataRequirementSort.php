<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDataRequirement;

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
 *   Generated on Thu, Dec 27, 2018 22:37+1100 for FHIR v4.0.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\R4\FHIRElement;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRSortDirection;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * Describes a required data item for evaluation in terms of the type of data, and
 * optional code or date-based filters of the data.
 * If the element is present, it must have a value for at least one of the defined
 * elements, an @id referenced from the Narrative, or extensions
 *
 * Class FHIRDataRequirementSort
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDataRequirement
 */
class FHIRDataRequirementSort extends FHIRElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_DATA_REQUIREMENT_DOT_SORT;

    const FIELD_DIRECTION = 'direction';
    const FIELD_PATH = 'path';
    const FIELD_PATH_EXT = '_path';

    /**
     * The possible sort directions, ascending or descending.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The direction of the sort, ascending or descending.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRSortDirection
     */
    private $direction = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The attribute of the sort. The specified path must be resolvable from the type
     * of the required data. The path is allowed to contain qualifiers (.) to traverse
     * sub-elements, as well as indexers ([x]) to traverse multiple-cardinality
     * sub-elements. Note that the index must be an integer constant.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    private $path = null;

    /**
     * FHIRDataRequirementSort Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRDataRequirementSort::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_DIRECTION])) {
            if ($data[self::FIELD_DIRECTION] instanceof FHIRSortDirection) {
                $this->setDirection($data[self::FIELD_DIRECTION]);
            } else {
                $this->setDirection(new FHIRSortDirection($data[self::FIELD_DIRECTION]));
            }
        }
        if (isset($data[self::FIELD_PATH])) {
            $ext = (isset($data[self::FIELD_PATH_EXT]) && is_array($data[self::FIELD_PATH_EXT]))
                ? $data[self::FIELD_PATH_EXT]
                : null;
            if ($data[self::FIELD_PATH] instanceof FHIRString) {
                $this->setPath($data[self::FIELD_PATH]);
            } elseif ($ext && is_scalar($data[self::FIELD_PATH])) {
                $this->setPath(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_PATH]] + $ext));
            } else {
                $this->setPath(new FHIRString($data[self::FIELD_PATH]));
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
     * The possible sort directions, ascending or descending.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The direction of the sort, ascending or descending.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRSortDirection
     */
    public function getDirection()
    {
        return $this->direction;
    }

    /**
     * The possible sort directions, ascending or descending.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The direction of the sort, ascending or descending.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRSortDirection $direction
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDataRequirement\FHIRDataRequirementSort
     */
    public function setDirection(FHIRSortDirection $direction = null)
    {
        $this->direction = $direction;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The attribute of the sort. The specified path must be resolvable from the type
     * of the required data. The path is allowed to contain qualifiers (.) to traverse
     * sub-elements, as well as indexers ([x]) to traverse multiple-cardinality
     * sub-elements. Note that the index must be an integer constant.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The attribute of the sort. The specified path must be resolvable from the type
     * of the required data. The path is allowed to contain qualifiers (.) to traverse
     * sub-elements, as well as indexers ([x]) to traverse multiple-cardinality
     * sub-elements. Note that the index must be an integer constant.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $path
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDataRequirement\FHIRDataRequirementSort
     */
    public function setPath($path = null)
    {
        if (null === $path) {
            $this->path = null;
            return $this;
        }
        if ($path instanceof FHIRString) {
            $this->path = $path;
            return $this;
        }
        $this->path = new FHIRString($path);
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDataRequirement\FHIRDataRequirementSort $type
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDataRequirement\FHIRDataRequirementSort
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
                throw new \DomainException(sprintf('FHIRDataRequirementSort::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRDataRequirementSort::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRElement::xmlUnserialize($sxe, new FHIRDataRequirementSort);
        } elseif (!is_object($type) || !($type instanceof FHIRDataRequirementSort)) {
            throw new \RuntimeException(sprintf(
                'FHIRDataRequirementSort::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDataRequirement\FHIRDataRequirementSort or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->direction)) {
            $type->setDirection(FHIRSortDirection::xmlUnserialize($children->direction));
        }
        if (isset($attributes->path)) {
            $type->setPath((string)$attributes->path);
        }
        if (isset($children->path)) {
            $type->setPath(FHIRString::xmlUnserialize($children->path));
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
            $sxe = new \SimpleXMLElement('<DataRequirementSort xmlns="http://hl7.org/fhir"></DataRequirementSort>');
        }
        parent::xmlSerialize($sxe);

        if (null !== ($v = $this->getDirection())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DIRECTION));
        }
        if (null !== ($v = $this->getPath())) {
            $sxe->addAttribute(self::FIELD_PATH, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_PATH));
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
        if (null !== ($v = $this->getDirection())) {
            $a[self::FIELD_DIRECTION] = $v;
        }
        if (null !== ($v = $this->getPath())) {
            $a[self::FIELD_PATH] = (string)$v;
            $a[self::FIELD_PATH_EXT] = $v;
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