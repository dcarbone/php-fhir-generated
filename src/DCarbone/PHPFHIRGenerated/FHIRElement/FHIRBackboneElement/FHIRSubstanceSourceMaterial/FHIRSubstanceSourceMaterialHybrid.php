<?php

namespace DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: September 25th, 2019 18:19+0000
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
 * Class FHIRSubstanceSourceMaterialHybrid
 * @package \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial
 */
class FHIRSubstanceSourceMaterialHybrid extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_SUBSTANCE_SOURCE_MATERIAL_DOT_HYBRID;

    const FIELD_HYBRID_TYPE = 'hybridType';
    const FIELD_MATERNAL_ORGANISM_ID = 'maternalOrganismId';
    const FIELD_MATERNAL_ORGANISM_ID_EXT = '_maternalOrganismId';
    const FIELD_MATERNAL_ORGANISM_NAME = 'maternalOrganismName';
    const FIELD_MATERNAL_ORGANISM_NAME_EXT = '_maternalOrganismName';
    const FIELD_PATERNAL_ORGANISM_ID = 'paternalOrganismId';
    const FIELD_PATERNAL_ORGANISM_ID_EXT = '_paternalOrganismId';
    const FIELD_PATERNAL_ORGANISM_NAME = 'paternalOrganismName';
    const FIELD_PATERNAL_ORGANISM_NAME_EXT = '_paternalOrganismName';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The hybrid type of an organism shall be specified.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $hybridType = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The identifier of the maternal species constituting the hybrid organism shall be
     * specified based on a controlled vocabulary. For plants, the parents aren’t
     * always known, and it is unlikely that it will be known which is maternal and
     * which is paternal.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $maternalOrganismId = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The name of the maternal species constituting the hybrid organism shall be
     * specified. For plants, the parents aren’t always known, and it is unlikely
     * that it will be known which is maternal and which is paternal.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $maternalOrganismName = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The identifier of the paternal species constituting the hybrid organism shall be
     * specified based on a controlled vocabulary.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $paternalOrganismId = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The name of the paternal species constituting the hybrid organism shall be
     * specified.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $paternalOrganismName = null;

    /**
     * FHIRSubstanceSourceMaterialHybrid Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSubstanceSourceMaterialHybrid::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_HYBRID_TYPE])) {
            if ($data[self::FIELD_HYBRID_TYPE] instanceof FHIRCodeableConcept) {
                $this->setHybridType($data[self::FIELD_HYBRID_TYPE]);
            } else {
                $this->setHybridType(new FHIRCodeableConcept($data[self::FIELD_HYBRID_TYPE]));
            }
        }
        if (isset($data[self::FIELD_MATERNAL_ORGANISM_ID])) {
            $ext = (isset($data[self::FIELD_MATERNAL_ORGANISM_ID_EXT]) && is_array($data[self::FIELD_MATERNAL_ORGANISM_ID_EXT]))
                ? $data[self::FIELD_MATERNAL_ORGANISM_ID_EXT]
                : null;
            if ($data[self::FIELD_MATERNAL_ORGANISM_ID] instanceof FHIRString) {
                $this->setMaternalOrganismId($data[self::FIELD_MATERNAL_ORGANISM_ID]);
            } elseif ($ext && is_scalar($data[self::FIELD_MATERNAL_ORGANISM_ID])) {
                $this->setMaternalOrganismId(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_MATERNAL_ORGANISM_ID]] + $ext));
            } else {
                $this->setMaternalOrganismId(new FHIRString($data[self::FIELD_MATERNAL_ORGANISM_ID]));
            }
        }
        if (isset($data[self::FIELD_MATERNAL_ORGANISM_NAME])) {
            $ext = (isset($data[self::FIELD_MATERNAL_ORGANISM_NAME_EXT]) && is_array($data[self::FIELD_MATERNAL_ORGANISM_NAME_EXT]))
                ? $data[self::FIELD_MATERNAL_ORGANISM_NAME_EXT]
                : null;
            if ($data[self::FIELD_MATERNAL_ORGANISM_NAME] instanceof FHIRString) {
                $this->setMaternalOrganismName($data[self::FIELD_MATERNAL_ORGANISM_NAME]);
            } elseif ($ext && is_scalar($data[self::FIELD_MATERNAL_ORGANISM_NAME])) {
                $this->setMaternalOrganismName(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_MATERNAL_ORGANISM_NAME]] + $ext));
            } else {
                $this->setMaternalOrganismName(new FHIRString($data[self::FIELD_MATERNAL_ORGANISM_NAME]));
            }
        }
        if (isset($data[self::FIELD_PATERNAL_ORGANISM_ID])) {
            $ext = (isset($data[self::FIELD_PATERNAL_ORGANISM_ID_EXT]) && is_array($data[self::FIELD_PATERNAL_ORGANISM_ID_EXT]))
                ? $data[self::FIELD_PATERNAL_ORGANISM_ID_EXT]
                : null;
            if ($data[self::FIELD_PATERNAL_ORGANISM_ID] instanceof FHIRString) {
                $this->setPaternalOrganismId($data[self::FIELD_PATERNAL_ORGANISM_ID]);
            } elseif ($ext && is_scalar($data[self::FIELD_PATERNAL_ORGANISM_ID])) {
                $this->setPaternalOrganismId(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_PATERNAL_ORGANISM_ID]] + $ext));
            } else {
                $this->setPaternalOrganismId(new FHIRString($data[self::FIELD_PATERNAL_ORGANISM_ID]));
            }
        }
        if (isset($data[self::FIELD_PATERNAL_ORGANISM_NAME])) {
            $ext = (isset($data[self::FIELD_PATERNAL_ORGANISM_NAME_EXT]) && is_array($data[self::FIELD_PATERNAL_ORGANISM_NAME_EXT]))
                ? $data[self::FIELD_PATERNAL_ORGANISM_NAME_EXT]
                : null;
            if ($data[self::FIELD_PATERNAL_ORGANISM_NAME] instanceof FHIRString) {
                $this->setPaternalOrganismName($data[self::FIELD_PATERNAL_ORGANISM_NAME]);
            } elseif ($ext && is_scalar($data[self::FIELD_PATERNAL_ORGANISM_NAME])) {
                $this->setPaternalOrganismName(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_PATERNAL_ORGANISM_NAME]] + $ext));
            } else {
                $this->setPaternalOrganismName(new FHIRString($data[self::FIELD_PATERNAL_ORGANISM_NAME]));
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The hybrid type of an organism shall be specified.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getHybridType()
    {
        return $this->hybridType;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The hybrid type of an organism shall be specified.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $hybridType
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial\FHIRSubstanceSourceMaterialHybrid
     */
    public function setHybridType(FHIRCodeableConcept $hybridType = null)
    {
        $this->hybridType = $hybridType;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The identifier of the maternal species constituting the hybrid organism shall be
     * specified based on a controlled vocabulary. For plants, the parents aren’t
     * always known, and it is unlikely that it will be known which is maternal and
     * which is paternal.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getMaternalOrganismId()
    {
        return $this->maternalOrganismId;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The identifier of the maternal species constituting the hybrid organism shall be
     * specified based on a controlled vocabulary. For plants, the parents aren’t
     * always known, and it is unlikely that it will be known which is maternal and
     * which is paternal.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString $maternalOrganismId
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial\FHIRSubstanceSourceMaterialHybrid
     */
    public function setMaternalOrganismId($maternalOrganismId = null)
    {
        if (null === $maternalOrganismId) {
            $this->maternalOrganismId = null;
            return $this;
        }
        if ($maternalOrganismId instanceof FHIRString) {
            $this->maternalOrganismId = $maternalOrganismId;
            return $this;
        }
        $this->maternalOrganismId = new FHIRString($maternalOrganismId);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The name of the maternal species constituting the hybrid organism shall be
     * specified. For plants, the parents aren’t always known, and it is unlikely
     * that it will be known which is maternal and which is paternal.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getMaternalOrganismName()
    {
        return $this->maternalOrganismName;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The name of the maternal species constituting the hybrid organism shall be
     * specified. For plants, the parents aren’t always known, and it is unlikely
     * that it will be known which is maternal and which is paternal.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString $maternalOrganismName
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial\FHIRSubstanceSourceMaterialHybrid
     */
    public function setMaternalOrganismName($maternalOrganismName = null)
    {
        if (null === $maternalOrganismName) {
            $this->maternalOrganismName = null;
            return $this;
        }
        if ($maternalOrganismName instanceof FHIRString) {
            $this->maternalOrganismName = $maternalOrganismName;
            return $this;
        }
        $this->maternalOrganismName = new FHIRString($maternalOrganismName);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The identifier of the paternal species constituting the hybrid organism shall be
     * specified based on a controlled vocabulary.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getPaternalOrganismId()
    {
        return $this->paternalOrganismId;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The identifier of the paternal species constituting the hybrid organism shall be
     * specified based on a controlled vocabulary.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString $paternalOrganismId
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial\FHIRSubstanceSourceMaterialHybrid
     */
    public function setPaternalOrganismId($paternalOrganismId = null)
    {
        if (null === $paternalOrganismId) {
            $this->paternalOrganismId = null;
            return $this;
        }
        if ($paternalOrganismId instanceof FHIRString) {
            $this->paternalOrganismId = $paternalOrganismId;
            return $this;
        }
        $this->paternalOrganismId = new FHIRString($paternalOrganismId);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The name of the paternal species constituting the hybrid organism shall be
     * specified.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getPaternalOrganismName()
    {
        return $this->paternalOrganismName;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The name of the paternal species constituting the hybrid organism shall be
     * specified.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString $paternalOrganismName
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial\FHIRSubstanceSourceMaterialHybrid
     */
    public function setPaternalOrganismName($paternalOrganismName = null)
    {
        if (null === $paternalOrganismName) {
            $this->paternalOrganismName = null;
            return $this;
        }
        if ($paternalOrganismName instanceof FHIRString) {
            $this->paternalOrganismName = $paternalOrganismName;
            return $this;
        }
        $this->paternalOrganismName = new FHIRString($paternalOrganismName);
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial\FHIRSubstanceSourceMaterialHybrid $type
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial\FHIRSubstanceSourceMaterialHybrid
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
                throw new \DomainException(sprintf('FHIRSubstanceSourceMaterialHybrid::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRSubstanceSourceMaterialHybrid::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRBackboneElement::xmlUnserialize($sxe, new FHIRSubstanceSourceMaterialHybrid);
        } elseif (!is_object($type) || !($type instanceof FHIRSubstanceSourceMaterialHybrid)) {
            throw new \RuntimeException(sprintf(
                'FHIRSubstanceSourceMaterialHybrid::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial\FHIRSubstanceSourceMaterialHybrid or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->hybridType)) {
            $type->setHybridType(FHIRCodeableConcept::xmlUnserialize($children->hybridType));
        }
        if (isset($attributes->maternalOrganismId)) {
            $type->setMaternalOrganismId((string)$attributes->maternalOrganismId);
        }
        if (isset($children->maternalOrganismId)) {
            $type->setMaternalOrganismId(FHIRString::xmlUnserialize($children->maternalOrganismId));
        }
        if (isset($attributes->maternalOrganismName)) {
            $type->setMaternalOrganismName((string)$attributes->maternalOrganismName);
        }
        if (isset($children->maternalOrganismName)) {
            $type->setMaternalOrganismName(FHIRString::xmlUnserialize($children->maternalOrganismName));
        }
        if (isset($attributes->paternalOrganismId)) {
            $type->setPaternalOrganismId((string)$attributes->paternalOrganismId);
        }
        if (isset($children->paternalOrganismId)) {
            $type->setPaternalOrganismId(FHIRString::xmlUnserialize($children->paternalOrganismId));
        }
        if (isset($attributes->paternalOrganismName)) {
            $type->setPaternalOrganismName((string)$attributes->paternalOrganismName);
        }
        if (isset($children->paternalOrganismName)) {
            $type->setPaternalOrganismName(FHIRString::xmlUnserialize($children->paternalOrganismName));
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
            $sxe = new \SimpleXMLElement('<SubstanceSourceMaterialHybrid xmlns="http://hl7.org/fhir"></SubstanceSourceMaterialHybrid>');
        }
        if (null !== ($v = $this->getHybridType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_HYBRID_TYPE));
        }
        if (null !== ($v = $this->getMaternalOrganismId())) {
            $sxe->addAttribute(self::FIELD_MATERNAL_ORGANISM_ID, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_MATERNAL_ORGANISM_ID));
            }
        }
        if (null !== ($v = $this->getMaternalOrganismName())) {
            $sxe->addAttribute(self::FIELD_MATERNAL_ORGANISM_NAME, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_MATERNAL_ORGANISM_NAME));
            }
        }
        if (null !== ($v = $this->getPaternalOrganismId())) {
            $sxe->addAttribute(self::FIELD_PATERNAL_ORGANISM_ID, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_PATERNAL_ORGANISM_ID));
            }
        }
        if (null !== ($v = $this->getPaternalOrganismName())) {
            $sxe->addAttribute(self::FIELD_PATERNAL_ORGANISM_NAME, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_PATERNAL_ORGANISM_NAME));
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
        if (null !== ($v = $this->getHybridType())) {
            $a[self::FIELD_HYBRID_TYPE] = $v;
        }
        if (null !== ($v = $this->getMaternalOrganismId())) {
            $a[self::FIELD_MATERNAL_ORGANISM_ID] = (string)$v;
            $a[self::FIELD_MATERNAL_ORGANISM_ID_EXT] = $v;
        }
        if (null !== ($v = $this->getMaternalOrganismName())) {
            $a[self::FIELD_MATERNAL_ORGANISM_NAME] = (string)$v;
            $a[self::FIELD_MATERNAL_ORGANISM_NAME_EXT] = $v;
        }
        if (null !== ($v = $this->getPaternalOrganismId())) {
            $a[self::FIELD_PATERNAL_ORGANISM_ID] = (string)$v;
            $a[self::FIELD_PATERNAL_ORGANISM_ID_EXT] = $v;
        }
        if (null !== ($v = $this->getPaternalOrganismName())) {
            $a[self::FIELD_PATERNAL_ORGANISM_NAME] = (string)$v;
            $a[self::FIELD_PATERNAL_ORGANISM_NAME_EXT] = $v;
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