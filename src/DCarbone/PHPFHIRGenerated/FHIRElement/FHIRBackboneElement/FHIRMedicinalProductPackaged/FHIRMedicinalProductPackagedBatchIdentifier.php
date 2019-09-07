<?php

namespace DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductPackaged;

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
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\PHPFHIRTypeInterface;

/**
 * A medicinal product in a container or package.
 *
 * Class FHIRMedicinalProductPackagedBatchIdentifier
 * @package \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductPackaged
 */
class FHIRMedicinalProductPackagedBatchIdentifier extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_PACKAGED_DOT_BATCH_IDENTIFIER;

    const FIELD_IMMEDIATE_PACKAGING = 'immediatePackaging';
    const FIELD_OUTER_PACKAGING = 'outerPackaging';

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A number appearing on the immediate packaging (and not the outer packaging).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    private $immediatePackaging = null;

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A number appearing on the outer packaging of a specific batch.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    private $outerPackaging = null;

    /**
     * FHIRMedicinalProductPackagedBatchIdentifier Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMedicinalProductPackagedBatchIdentifier::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_IMMEDIATE_PACKAGING])) {
            if ($data[self::FIELD_IMMEDIATE_PACKAGING] instanceof FHIRIdentifier) {
                $this->setImmediatePackaging($data[self::FIELD_IMMEDIATE_PACKAGING]);
            } else {
                $this->setImmediatePackaging(new FHIRIdentifier($data[self::FIELD_IMMEDIATE_PACKAGING]));
            }
        }
        if (isset($data[self::FIELD_OUTER_PACKAGING])) {
            if ($data[self::FIELD_OUTER_PACKAGING] instanceof FHIRIdentifier) {
                $this->setOuterPackaging($data[self::FIELD_OUTER_PACKAGING]);
            } else {
                $this->setOuterPackaging(new FHIRIdentifier($data[self::FIELD_OUTER_PACKAGING]));
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
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A number appearing on the immediate packaging (and not the outer packaging).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getImmediatePackaging()
    {
        return $this->immediatePackaging;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A number appearing on the immediate packaging (and not the outer packaging).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRIdentifier $immediatePackaging
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductPackaged\FHIRMedicinalProductPackagedBatchIdentifier
     */
    public function setImmediatePackaging(FHIRIdentifier $immediatePackaging = null)
    {
        $this->immediatePackaging = $immediatePackaging;
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A number appearing on the outer packaging of a specific batch.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getOuterPackaging()
    {
        return $this->outerPackaging;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A number appearing on the outer packaging of a specific batch.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRIdentifier $outerPackaging
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductPackaged\FHIRMedicinalProductPackagedBatchIdentifier
     */
    public function setOuterPackaging(FHIRIdentifier $outerPackaging = null)
    {
        $this->outerPackaging = $outerPackaging;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductPackaged\FHIRMedicinalProductPackagedBatchIdentifier $type
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductPackaged\FHIRMedicinalProductPackagedBatchIdentifier
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
                throw new \DomainException(sprintf('FHIRMedicinalProductPackagedBatchIdentifier::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRMedicinalProductPackagedBatchIdentifier::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRBackboneElement::xmlUnserialize($sxe, new FHIRMedicinalProductPackagedBatchIdentifier);
        } elseif (!is_object($type) || !($type instanceof FHIRMedicinalProductPackagedBatchIdentifier)) {
            throw new \RuntimeException(sprintf(
                'FHIRMedicinalProductPackagedBatchIdentifier::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductPackaged\FHIRMedicinalProductPackagedBatchIdentifier or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->immediatePackaging)) {
            $type->setImmediatePackaging(FHIRIdentifier::xmlUnserialize($children->immediatePackaging));
        }
        if (isset($children->outerPackaging)) {
            $type->setOuterPackaging(FHIRIdentifier::xmlUnserialize($children->outerPackaging));
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
            $sxe = new \SimpleXMLElement('<MedicinalProductPackagedBatchIdentifier xmlns="http://hl7.org/fhir"></MedicinalProductPackagedBatchIdentifier>');
        }
        if (null !== ($v = $this->getImmediatePackaging())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_IMMEDIATE_PACKAGING));
        }
        if (null !== ($v = $this->getOuterPackaging())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_OUTER_PACKAGING));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getImmediatePackaging())) {
            $a[self::FIELD_IMMEDIATE_PACKAGING] = $v;
        }
        if (null !== ($v = $this->getOuterPackaging())) {
            $a[self::FIELD_OUTER_PACKAGING] = $v;
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