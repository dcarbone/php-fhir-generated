<?php

namespace DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPerson;

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
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRIdentityAssuranceLevel;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\PHPFHIRTypeInterface;

/**
 * Demographics and administrative information about a person independent of a
 * specific health-related context.
 *
 * Class FHIRPersonLink
 * @package \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPerson
 */
class FHIRPersonLink extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_PERSON_DOT_LINK;

    const FIELD_ASSURANCE = 'assurance';
    const FIELD_TARGET = 'target';

    /**
     * The level of confidence that this link represents the same actual person, based
     * on NIST Authentication Levels.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Level of assurance that this link is associated with the target resource.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRIdentityAssuranceLevel
     */
    private $assurance = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The resource to which this actual person is associated.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $target = null;

    /**
     * FHIRPersonLink Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRPersonLink::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_ASSURANCE])) {
            if ($data[self::FIELD_ASSURANCE] instanceof FHIRIdentityAssuranceLevel) {
                $this->setAssurance($data[self::FIELD_ASSURANCE]);
            } else {
                $this->setAssurance(new FHIRIdentityAssuranceLevel($data[self::FIELD_ASSURANCE]));
            }
        }
        if (isset($data[self::FIELD_TARGET])) {
            if ($data[self::FIELD_TARGET] instanceof FHIRReference) {
                $this->setTarget($data[self::FIELD_TARGET]);
            } else {
                $this->setTarget(new FHIRReference($data[self::FIELD_TARGET]));
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
     * The level of confidence that this link represents the same actual person, based
     * on NIST Authentication Levels.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Level of assurance that this link is associated with the target resource.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRIdentityAssuranceLevel
     */
    public function getAssurance()
    {
        return $this->assurance;
    }

    /**
     * The level of confidence that this link represents the same actual person, based
     * on NIST Authentication Levels.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Level of assurance that this link is associated with the target resource.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRIdentityAssuranceLevel $assurance
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPerson\FHIRPersonLink
     */
    public function setAssurance(FHIRIdentityAssuranceLevel $assurance = null)
    {
        $this->assurance = $assurance;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The resource to which this actual person is associated.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The resource to which this actual person is associated.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference $target
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPerson\FHIRPersonLink
     */
    public function setTarget(FHIRReference $target = null)
    {
        $this->target = $target;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null \$sxe
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPerson\FHIRPersonLink $type
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPerson\FHIRPersonLink
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
                throw new \DomainException(sprintf('FHIRPersonLink::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRPersonLink::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRBackboneElement::xmlUnserialize(\$sxe, new FHIRPersonLink);
        } elseif (!is_object($type) || !($type instanceof FHIRPersonLink)) {
            throw new \RuntimeException(sprintf(
                'FHIRPersonLink::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPerson\FHIRPersonLink or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->assurance)) {
            $type->setAssurance(FHIRIdentityAssuranceLevel::xmlUnserialize($children->assurance));
        }
        if (isset($children->target)) {
            $type->setTarget(FHIRReference::xmlUnserialize($children->target));
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
            $sxe = new \SimpleXMLElement('<PersonLink xmlns="http://hl7.org/fhir"></PersonLink>');
        }
        if (null !== ($v = $this->getAssurance())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ASSURANCE));
        }
        if (null !== ($v = $this->getTarget())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TARGET));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getAssurance())) {
            $a[self::FIELD_ASSURANCE] = $v;
        }
        if (null !== ($v = $this->getTarget())) {
            $a[self::FIELD_TARGET] = $v;
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