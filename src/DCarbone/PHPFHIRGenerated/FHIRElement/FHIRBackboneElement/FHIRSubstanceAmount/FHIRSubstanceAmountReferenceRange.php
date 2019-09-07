<?php

namespace DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstanceAmount;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: September 7th, 2019 20:23+0000
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
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRQuantity;
use DCarbone\PHPFHIRGenerated\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\PHPFHIRTypeInterface;

/**
 * Chemical substances are a single substance type whose primary defining element
 * is the molecular structure. Chemical substances shall be defined on the basis of
 * their complete covalent molecular structure; the presence of a salt
 * (counter-ion) and/or solvates (water, alcohols) is also captured. Purity, grade,
 * physical form or particle size are not taken into account in the definition of a
 * chemical substance or in the assignment of a Substance ID.
 * If the element is present, it must have a value for at least one of the defined
 * elements, an @id referenced from the Narrative, or extensions
 *
 * Class FHIRSubstanceAmountReferenceRange
 * @package \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstanceAmount
 */
class FHIRSubstanceAmountReferenceRange extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_SUBSTANCE_AMOUNT_DOT_REFERENCE_RANGE;

    const FIELD_HIGH_LIMIT = 'highLimit';
    const FIELD_LOW_LIMIT = 'lowLimit';

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Upper limit possible or expected.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    private $highLimit = null;

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Lower limit possible or expected.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    private $lowLimit = null;

    /**
     * FHIRSubstanceAmountReferenceRange Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSubstanceAmountReferenceRange::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_HIGH_LIMIT])) {
            if ($data[self::FIELD_HIGH_LIMIT] instanceof FHIRQuantity) {
                $this->setHighLimit($data[self::FIELD_HIGH_LIMIT]);
            } else {
                $this->setHighLimit(new FHIRQuantity($data[self::FIELD_HIGH_LIMIT]));
            }
        }
        if (isset($data[self::FIELD_LOW_LIMIT])) {
            if ($data[self::FIELD_LOW_LIMIT] instanceof FHIRQuantity) {
                $this->setLowLimit($data[self::FIELD_LOW_LIMIT]);
            } else {
                $this->setLowLimit(new FHIRQuantity($data[self::FIELD_LOW_LIMIT]));
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
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Upper limit possible or expected.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getHighLimit()
    {
        return $this->highLimit;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Upper limit possible or expected.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRQuantity $highLimit
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstanceAmount\FHIRSubstanceAmountReferenceRange
     */
    public function setHighLimit(FHIRQuantity $highLimit = null)
    {
        $this->highLimit = $highLimit;
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Lower limit possible or expected.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getLowLimit()
    {
        return $this->lowLimit;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Lower limit possible or expected.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRQuantity $lowLimit
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstanceAmount\FHIRSubstanceAmountReferenceRange
     */
    public function setLowLimit(FHIRQuantity $lowLimit = null)
    {
        $this->lowLimit = $lowLimit;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstanceAmount\FHIRSubstanceAmountReferenceRange $type
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstanceAmount\FHIRSubstanceAmountReferenceRange
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
                throw new \DomainException(sprintf('FHIRSubstanceAmountReferenceRange::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRSubstanceAmountReferenceRange::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRBackboneElement::xmlUnserialize($sxe, new FHIRSubstanceAmountReferenceRange);
        } elseif (!is_object($type) || !($type instanceof FHIRSubstanceAmountReferenceRange)) {
            throw new \RuntimeException(sprintf(
                'FHIRSubstanceAmountReferenceRange::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstanceAmount\FHIRSubstanceAmountReferenceRange or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->highLimit)) {
            $type->setHighLimit(FHIRQuantity::xmlUnserialize($children->highLimit));
        }
        if (isset($children->lowLimit)) {
            $type->setLowLimit(FHIRQuantity::xmlUnserialize($children->lowLimit));
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
            $sxe = new \SimpleXMLElement('<SubstanceAmountReferenceRange xmlns="http://hl7.org/fhir"></SubstanceAmountReferenceRange>');
        }
        if (null !== ($v = $this->getHighLimit())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_HIGH_LIMIT));
        }
        if (null !== ($v = $this->getLowLimit())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_LOW_LIMIT));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getHighLimit())) {
            $a[self::FIELD_HIGH_LIMIT] = $v;
        }
        if (null !== ($v = $this->getLowLimit())) {
            $a[self::FIELD_LOW_LIMIT] = $v;
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