<?php

namespace DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: July 4th, 2019 21:57+0000
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
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\PHPFHIRTypeInterface;

/**
 * Source material shall capture information on the taxonomic and anatomical
 * origins as well as the fraction of a material that can result in or can be
 * modified to form a substance. This set of data elements shall be used to define
 * polymer substances isolated from biological matrices. Taxonomic and anatomical
 * origins shall be described using a controlled vocabulary as required. This
 * information is captured for naturally derived polymers ( . starch) and
 * structurally diverse substances. For Organisms belonging to the Kingdom Plantae
 * the Substance level defines the fresh material of a single species or
 * infraspecies, the Herbal Drug and the Herbal preparation. For Herbal
 * preparations, the fraction information will be captured at the Substance
 * information level and additional information for herbal extracts will be
 * captured at the Specified Substance Group 1 information level. See for further
 * explanation the Substance Class: Structurally Diverse and the herbal annex.
 *
 * Class FHIRSubstanceSourceMaterialAuthor
 * @package \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial
 */
class FHIRSubstanceSourceMaterialAuthor extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_SUBSTANCE_SOURCE_MATERIAL_DOT_AUTHOR;

    const FIELD_AUTHOR_DESCRIPTION = 'authorDescription';
    const FIELD_AUTHOR_DESCRIPTION_EXT = '_authorDescription';
    const FIELD_AUTHOR_TYPE = 'authorType';

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The author of an organism species shall be specified. The author year of an
     * organism shall also be specified when applicable; refers to the year in which
     * the first author(s) published the infraspecific plant/animal name (of any rank).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $authorDescription = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The type of author of an organism species shall be specified. The parenthetical
     * author of an organism species refers to the first author who published the
     * plant/animal name (of any rank). The primary author of an organism species
     * refers to the first author(s), who validly published the plant/animal name.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $authorType = null;

    /**
     * FHIRSubstanceSourceMaterialAuthor Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSubstanceSourceMaterialAuthor::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_AUTHOR_DESCRIPTION])) {
            $ext = (isset($data[self::FIELD_AUTHOR_DESCRIPTION_EXT]) && is_array($data[self::FIELD_AUTHOR_DESCRIPTION_EXT]))
                ? $data[self::FIELD_AUTHOR_DESCRIPTION_EXT]
                : null;
            if ($data[self::FIELD_AUTHOR_DESCRIPTION] instanceof FHIRString) {
                $this->setAuthorDescription($data[self::FIELD_AUTHOR_DESCRIPTION]);
            } elseif ($ext && is_scalar($data[self::FIELD_AUTHOR_DESCRIPTION])) {
                $this->setAuthorDescription(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_AUTHOR_DESCRIPTION]] + $ext));
            } else {
                $this->setAuthorDescription(new FHIRString($data[self::FIELD_AUTHOR_DESCRIPTION]));
            }
        }
        if (isset($data[self::FIELD_AUTHOR_TYPE])) {
            if ($data[self::FIELD_AUTHOR_TYPE] instanceof FHIRCodeableConcept) {
                $this->setAuthorType($data[self::FIELD_AUTHOR_TYPE]);
            } else {
                $this->setAuthorType(new FHIRCodeableConcept($data[self::FIELD_AUTHOR_TYPE]));
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
     * The author of an organism species shall be specified. The author year of an
     * organism shall also be specified when applicable; refers to the year in which
     * the first author(s) published the infraspecific plant/animal name (of any rank).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getAuthorDescription()
    {
        return $this->authorDescription;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The author of an organism species shall be specified. The author year of an
     * organism shall also be specified when applicable; refers to the year in which
     * the first author(s) published the infraspecific plant/animal name (of any rank).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString $authorDescription
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial\FHIRSubstanceSourceMaterialAuthor
     */
    public function setAuthorDescription($authorDescription = null)
    {
        if (null === $authorDescription) {
            $this->authorDescription = null;
            return $this;
        }
        if ($authorDescription instanceof FHIRString) {
            $this->authorDescription = $authorDescription;
            return $this;
        }
        $this->authorDescription = new FHIRString($authorDescription);
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The type of author of an organism species shall be specified. The parenthetical
     * author of an organism species refers to the first author who published the
     * plant/animal name (of any rank). The primary author of an organism species
     * refers to the first author(s), who validly published the plant/animal name.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getAuthorType()
    {
        return $this->authorType;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The type of author of an organism species shall be specified. The parenthetical
     * author of an organism species refers to the first author who published the
     * plant/animal name (of any rank). The primary author of an organism species
     * refers to the first author(s), who validly published the plant/animal name.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $authorType
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial\FHIRSubstanceSourceMaterialAuthor
     */
    public function setAuthorType(FHIRCodeableConcept $authorType = null)
    {
        $this->authorType = $authorType;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null \$sxe
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial\FHIRSubstanceSourceMaterialAuthor $type
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial\FHIRSubstanceSourceMaterialAuthor
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
                throw new \DomainException(sprintf('FHIRSubstanceSourceMaterialAuthor::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRSubstanceSourceMaterialAuthor::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRBackboneElement::xmlUnserialize(\$sxe, new FHIRSubstanceSourceMaterialAuthor);
        } elseif (!is_object($type) || !($type instanceof FHIRSubstanceSourceMaterialAuthor)) {
            throw new \RuntimeException(sprintf(
                'FHIRSubstanceSourceMaterialAuthor::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial\FHIRSubstanceSourceMaterialAuthor or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($attributes->authorDescription)) {
            $type->setAuthorDescription((string)$attributes->authorDescription);
        }
        if (isset($children->authorDescription)) {
            $type->setAuthorDescription(FHIRString::xmlUnserialize($children->authorDescription));
        }
        if (isset($children->authorType)) {
            $type->setAuthorType(FHIRCodeableConcept::xmlUnserialize($children->authorType));
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
            $sxe = new \SimpleXMLElement('<SubstanceSourceMaterialAuthor xmlns="http://hl7.org/fhir"></SubstanceSourceMaterialAuthor>');
        }
        if (null !== ($v = $this->getAuthorDescription())) {
            $sxe->addAttribute(self::FIELD_AUTHOR_DESCRIPTION, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_AUTHOR_DESCRIPTION));
            }
        }
        if (null !== ($v = $this->getAuthorType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_AUTHOR_TYPE));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getAuthorDescription())) {
            $a[self::FIELD_AUTHOR_DESCRIPTION] = (string)$v;
            $a[self::FIELD_AUTHOR_DESCRIPTION_EXT] = $v;
        }
        if (null !== ($v = $this->getAuthorType())) {
            $a[self::FIELD_AUTHOR_TYPE] = $v;
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