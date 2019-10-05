<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 5th, 2019 12:58+0000
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

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerMonomerSet;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerRepeat;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * Todo.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRSubstancePolymer
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource
 */
class FHIRSubstancePolymer extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_SUBSTANCE_POLYMER;

    const FIELD_CLASS = 'class';
    const FIELD_COPOLYMER_CONNECTIVITY = 'copolymerConnectivity';
    const FIELD_GEOMETRY = 'geometry';
    const FIELD_MODIFICATION = 'modification';
    const FIELD_MODIFICATION_EXT = '_modification';
    const FIELD_MONOMER_SET = 'monomerSet';
    const FIELD_REPEAT = 'repeat';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Todo.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    private $class = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Todo.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    private $copolymerConnectivity = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Todo.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    private $geometry = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Todo.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString[]
     */
    private $modification = [];

    /**
     * Todo.
     *
     * Todo.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerMonomerSet[]
     */
    private $monomerSet = [];

    /**
     * Todo.
     *
     * Todo.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerRepeat[]
     */
    private $repeat = [];

    /**
     * FHIRSubstancePolymer Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSubstancePolymer::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_CLASS])) {
            if ($data[self::FIELD_CLASS] instanceof FHIRCodeableConcept) {
                $this->setClass($data[self::FIELD_CLASS]);
            } else {
                $this->setClass(new FHIRCodeableConcept($data[self::FIELD_CLASS]));
            }
        }
        if (isset($data[self::FIELD_COPOLYMER_CONNECTIVITY])) {
            if (is_array($data[self::FIELD_COPOLYMER_CONNECTIVITY])) {
                foreach($data[self::FIELD_COPOLYMER_CONNECTIVITY] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addCopolymerConnectivity($v);
                    } else {
                        $this->addCopolymerConnectivity(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_COPOLYMER_CONNECTIVITY] instanceof FHIRCodeableConcept) {
                $this->addCopolymerConnectivity($data[self::FIELD_COPOLYMER_CONNECTIVITY]);
            } else {
                $this->addCopolymerConnectivity(new FHIRCodeableConcept($data[self::FIELD_COPOLYMER_CONNECTIVITY]));
            }
        }
        if (isset($data[self::FIELD_GEOMETRY])) {
            if ($data[self::FIELD_GEOMETRY] instanceof FHIRCodeableConcept) {
                $this->setGeometry($data[self::FIELD_GEOMETRY]);
            } else {
                $this->setGeometry(new FHIRCodeableConcept($data[self::FIELD_GEOMETRY]));
            }
        }
        if (isset($data[self::FIELD_MODIFICATION])) {
            $ext = (isset($data[self::FIELD_MODIFICATION_EXT]) && is_array($data[self::FIELD_MODIFICATION_EXT]))
                ? $data[self::FIELD_MODIFICATION_EXT]
                : null;
            if (is_array($data[self::FIELD_MODIFICATION])) {
                foreach($data[self::FIELD_MODIFICATION] as $i => $v) {
                    if ($v instanceof FHIRString) {
                        $this->addModification($v);
                    } elseif ($ext && is_scalar($v) && isset($ext[$i]) && is_array($ext[$i])) {
                        $this->addModification(new FHIRString([FHIRString::FIELD_VALUE => $v] + $ext[$i]));
                    } else {
                        $this->addModification(new FHIRString($v));
                    }
                }
            } elseif ($data[self::FIELD_MODIFICATION] instanceof FHIRString) {
                $this->addModification($data[self::FIELD_MODIFICATION]);
            } elseif ($ext && is_scalar($data[self::FIELD_MODIFICATION])) {
                $this->addModification(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_MODIFICATION]] + $ext));
            } else {
                $this->addModification(new FHIRString($data[self::FIELD_MODIFICATION]));
            }
        }
        if (isset($data[self::FIELD_MONOMER_SET])) {
            if (is_array($data[self::FIELD_MONOMER_SET])) {
                foreach($data[self::FIELD_MONOMER_SET] as $v) {
                    if ($v instanceof FHIRSubstancePolymerMonomerSet) {
                        $this->addMonomerSet($v);
                    } else {
                        $this->addMonomerSet(new FHIRSubstancePolymerMonomerSet($v));
                    }
                }
            } else if ($data[self::FIELD_MONOMER_SET] instanceof FHIRSubstancePolymerMonomerSet) {
                $this->addMonomerSet($data[self::FIELD_MONOMER_SET]);
            } else {
                $this->addMonomerSet(new FHIRSubstancePolymerMonomerSet($data[self::FIELD_MONOMER_SET]));
            }
        }
        if (isset($data[self::FIELD_REPEAT])) {
            if (is_array($data[self::FIELD_REPEAT])) {
                foreach($data[self::FIELD_REPEAT] as $v) {
                    if ($v instanceof FHIRSubstancePolymerRepeat) {
                        $this->addRepeat($v);
                    } else {
                        $this->addRepeat(new FHIRSubstancePolymerRepeat($v));
                    }
                }
            } else if ($data[self::FIELD_REPEAT] instanceof FHIRSubstancePolymerRepeat) {
                $this->addRepeat($data[self::FIELD_REPEAT]);
            } else {
                $this->addRepeat(new FHIRSubstancePolymerRepeat($data[self::FIELD_REPEAT]));
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
     * Todo.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Todo.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $class
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSubstancePolymer
     */
    public function setClass(FHIRCodeableConcept $class = null)
    {
        $this->class = $class;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Todo.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    public function getCopolymerConnectivity()
    {
        return $this->copolymerConnectivity;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Todo.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $copolymerConnectivity
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSubstancePolymer
     */
    public function addCopolymerConnectivity(FHIRCodeableConcept $copolymerConnectivity = null)
    {
        $this->copolymerConnectivity[] = $copolymerConnectivity;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Todo.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[] $copolymerConnectivity
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSubstancePolymer
     */
    public function setCopolymerConnectivity(array $copolymerConnectivity = [])
    {
        $this->copolymerConnectivity = [];
        if ([] === $copolymerConnectivity) {
            return $this;
        }
        foreach($copolymerConnectivity as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addCopolymerConnectivity($v);
            } else {
                $this->addCopolymerConnectivity(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Todo.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getGeometry()
    {
        return $this->geometry;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Todo.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $geometry
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSubstancePolymer
     */
    public function setGeometry(FHIRCodeableConcept $geometry = null)
    {
        $this->geometry = $geometry;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Todo.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString[]
     */
    public function getModification()
    {
        return $this->modification;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Todo.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $modification
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSubstancePolymer
     */
    public function addModification($modification = null)
    {
        if (null === $modification) {
            $this->modification = null;
            return $this;
        }
        if ($modification instanceof FHIRString) {
            $this->modification = $modification;
            return $this;
        }
        $this->modification = new FHIRString($modification);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Todo.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString[] $modification
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSubstancePolymer
     */
    public function setModification(array $modification = [])
    {
        $this->modification = [];
        if ([] === $modification) {
            return $this;
        }
        foreach($modification as $v) {
            if ($v instanceof FHIRString) {
                $this->addModification($v);
            } else {
                $this->addModification(new FHIRString($v));
            }
        }
        return $this;
    }

    /**
     * Todo.
     *
     * Todo.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerMonomerSet[]
     */
    public function getMonomerSet()
    {
        return $this->monomerSet;
    }

    /**
     * Todo.
     *
     * Todo.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerMonomerSet $monomerSet
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSubstancePolymer
     */
    public function addMonomerSet(FHIRSubstancePolymerMonomerSet $monomerSet = null)
    {
        $this->monomerSet[] = $monomerSet;
        return $this;
    }

    /**
     * Todo.
     *
     * Todo.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerMonomerSet[] $monomerSet
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSubstancePolymer
     */
    public function setMonomerSet(array $monomerSet = [])
    {
        $this->monomerSet = [];
        if ([] === $monomerSet) {
            return $this;
        }
        foreach($monomerSet as $v) {
            if ($v instanceof FHIRSubstancePolymerMonomerSet) {
                $this->addMonomerSet($v);
            } else {
                $this->addMonomerSet(new FHIRSubstancePolymerMonomerSet($v));
            }
        }
        return $this;
    }

    /**
     * Todo.
     *
     * Todo.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerRepeat[]
     */
    public function getRepeat()
    {
        return $this->repeat;
    }

    /**
     * Todo.
     *
     * Todo.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerRepeat $repeat
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSubstancePolymer
     */
    public function addRepeat(FHIRSubstancePolymerRepeat $repeat = null)
    {
        $this->repeat[] = $repeat;
        return $this;
    }

    /**
     * Todo.
     *
     * Todo.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerRepeat[] $repeat
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSubstancePolymer
     */
    public function setRepeat(array $repeat = [])
    {
        $this->repeat = [];
        if ([] === $repeat) {
            return $this;
        }
        foreach($repeat as $v) {
            if ($v instanceof FHIRSubstancePolymerRepeat) {
                $this->addRepeat($v);
            } else {
                $this->addRepeat(new FHIRSubstancePolymerRepeat($v));
            }
        }
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSubstancePolymer $type
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSubstancePolymer
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
                throw new \DomainException(sprintf('FHIRSubstancePolymer::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRSubstancePolymer::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRDomainResource::xmlUnserialize($sxe, new FHIRSubstancePolymer);
        } elseif (!is_object($type) || !($type instanceof FHIRSubstancePolymer)) {
            throw new \RuntimeException(sprintf(
                'FHIRSubstancePolymer::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSubstancePolymer or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->class)) {
            $type->setClass(FHIRCodeableConcept::xmlUnserialize($children->class));
        }
        if (isset($children->copolymerConnectivity)) {
            foreach($children->copolymerConnectivity as $child) {
                $type->addCopolymerConnectivity(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->geometry)) {
            $type->setGeometry(FHIRCodeableConcept::xmlUnserialize($children->geometry));
        }
        if (isset($attributes->modification)) {
            $type->addModification((string)$attributes->modification);
        }
        if (isset($children->modification)) {
            foreach($children->modification as $child) {
                $type->addModification(FHIRString::xmlUnserialize($child));
            }
        }
        if (isset($children->monomerSet)) {
            foreach($children->monomerSet as $child) {
                $type->addMonomerSet(FHIRSubstancePolymerMonomerSet::xmlUnserialize($child));
            }
        }
        if (isset($children->repeat)) {
            foreach($children->repeat as $child) {
                $type->addRepeat(FHIRSubstancePolymerRepeat::xmlUnserialize($child));
            }
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
            $sxe = new \SimpleXMLElement('<SubstancePolymer xmlns="http://hl7.org/fhir"></SubstancePolymer>');
        }
    parent::xmlSerialize($sxe);

        if (null !== ($v = $this->getClass())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CLASS));
        }

        if ([] !== ($vs = $this->getCopolymerConnectivity())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_COPOLYMER_CONNECTIVITY));
            }
        }

        if (null !== ($v = $this->getGeometry())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_GEOMETRY));
        }
        if ([] !== ($vs = $this->getModification())) {
            $first = true;
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                if ($first) {
                    $sxe->addAttribute(self::FIELD_MODIFICATION, (string)$v);
                    if (null !== $v->getId() || [] !== $v->getExtension()) {
                        $v->xmlSerialize($sxe->addChild(self::FIELD_MODIFICATION));
                    }
                    $first = false;
                } else {
                    $v->xmlSerialize($sxe->addChild(self::FIELD_MODIFICATION));
                }
            }
        }

        if ([] !== ($vs = $this->getMonomerSet())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_MONOMER_SET));
            }
        }

        if ([] !== ($vs = $this->getRepeat())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_REPEAT));
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
        if (null !== ($v = $this->getClass())) {
            $a[self::FIELD_CLASS] = $v;
        }
        if ([] !== ($vs = $this->getCopolymerConnectivity())) {
            $a[self::FIELD_COPOLYMER_CONNECTIVITY] = $vs;
        }
        if (null !== ($v = $this->getGeometry())) {
            $a[self::FIELD_GEOMETRY] = $v;
        }
        if ([] !== ($vs = $this->getModification())) {
            $a[self::FIELD_MODIFICATION] = [];
            $a[self::FIELD_MODIFICATION_EXT] = [];
            foreach ($vs as $v) {
                $a[self::FIELD_MODIFICATION][] = (string)$v;
                $a[self::FIELD_MODIFICATION_EXT][] = $v;
            }
        }
        if ([] !== ($vs = $this->getMonomerSet())) {
            $a[self::FIELD_MONOMER_SET] = $vs;
        }
        if ([] !== ($vs = $this->getRepeat())) {
            $a[self::FIELD_REPEAT] = $vs;
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