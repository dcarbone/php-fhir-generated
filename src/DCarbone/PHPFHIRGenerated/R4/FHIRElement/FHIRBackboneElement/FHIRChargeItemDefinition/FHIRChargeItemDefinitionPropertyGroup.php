<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRChargeItemDefinition;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 22nd, 2019 01:52+0000
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

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * The ChargeItemDefinition resource provides the properties that apply to the
 * (billing) codes necessary to calculate costs and prices. The properties may
 * differ largely depending on type and realm, therefore this resource gives only a
 * rough structure and requires profiling for each type of billing code system.
 *
 * Class FHIRChargeItemDefinitionPropertyGroup
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRChargeItemDefinition
 */
class FHIRChargeItemDefinitionPropertyGroup extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CHARGE_ITEM_DEFINITION_DOT_PROPERTY_GROUP;

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    const FIELD_APPLICABILITY = 'applicability';
    const FIELD_PRICE_COMPONENT = 'priceComponent';

    /**
     * The ChargeItemDefinition resource provides the properties that apply to the
     * (billing) codes necessary to calculate costs and prices. The properties may
     * differ largely depending on type and realm, therefore this resource gives only a
     * rough structure and requires profiling for each type of billing code system.
     *
     * Expressions that describe applicability criteria for the priceComponent.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRChargeItemDefinition\FHIRChargeItemDefinitionApplicability[]
     */
    private $applicability = [];
    /**
     * The ChargeItemDefinition resource provides the properties that apply to the
     * (billing) codes necessary to calculate costs and prices. The properties may
     * differ largely depending on type and realm, therefore this resource gives only a
     * rough structure and requires profiling for each type of billing code system.
     *
     * The price for a ChargeItem may be calculated as a base price with
     * surcharges/deductions that apply in certain conditions. A ChargeItemDefinition
     * resource that defines the prices, factors and conditions that apply to a billing
     * code is currently under development. The priceComponent element can be used to
     * offer transparency to the recipient of the Invoice of how the prices have been
     * calculated.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRChargeItemDefinition\FHIRChargeItemDefinitionPriceComponent[]
     */
    private $priceComponent = [];

    /**
     * FHIRChargeItemDefinitionPropertyGroup Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRChargeItemDefinitionPropertyGroup::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_APPLICABILITY])) {
            if (is_array($data[self::FIELD_APPLICABILITY])) {
                foreach($data[self::FIELD_APPLICABILITY] as $v) {
                    if ($v instanceof FHIRChargeItemDefinitionApplicability) {
                        $this->addApplicability($v);
                    } else {
                        $this->addApplicability(new FHIRChargeItemDefinitionApplicability($v));
                    }
                }
            } else if ($data[self::FIELD_APPLICABILITY] instanceof FHIRChargeItemDefinitionApplicability) {
                $this->addApplicability($data[self::FIELD_APPLICABILITY]);
            } else {
                $this->addApplicability(new FHIRChargeItemDefinitionApplicability($data[self::FIELD_APPLICABILITY]));
            }
        }
        if (isset($data[self::FIELD_PRICE_COMPONENT])) {
            if (is_array($data[self::FIELD_PRICE_COMPONENT])) {
                foreach($data[self::FIELD_PRICE_COMPONENT] as $v) {
                    if ($v instanceof FHIRChargeItemDefinitionPriceComponent) {
                        $this->addPriceComponent($v);
                    } else {
                        $this->addPriceComponent(new FHIRChargeItemDefinitionPriceComponent($v));
                    }
                }
            } else if ($data[self::FIELD_PRICE_COMPONENT] instanceof FHIRChargeItemDefinitionPriceComponent) {
                $this->addPriceComponent($data[self::FIELD_PRICE_COMPONENT]);
            } else {
                $this->addPriceComponent(new FHIRChargeItemDefinitionPriceComponent($data[self::FIELD_PRICE_COMPONENT]));
            }
        }
    }

    /**
     * @return string
     */
    public function _getFHIRTypeName()
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * @return string|null
     */
    public function _getFHIRXMLNamespace()
    {
        return '' === $this->_xmlns ? null : $this->_xmlns;
    }

    /**
     * @param null|string $xmlNamespace
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRChargeItemDefinition\FHIRChargeItemDefinitionPropertyGroup
     */
    public function _setFHIRXMLNamespace($xmlNamespace)
    {
        if (null === $xmlNamespace || is_string($xmlNamespace)) {
            $this->_xmlns = (string)$xmlNamespace;
            return $this;
        }
        throw new \InvalidArgumentException(sprintf(
            '$xmlNamespace must be a null or string value, %s seen.',
            gettype($xmlNamespace)
        ));
    }

    /**
     * @return string
     */
    public function _getFHIRXMLElementDefinition()
    {
        $xmlns = $this->_getFHIRXMLNamespace();
        if (null !== $xmlns) {
            $xmlns = " xmlns=\"{$xmlns}\"";
        }
        return "<ChargeItemDefinitionPropertyGroup{$xmlns}></ChargeItemDefinitionPropertyGroup>";
    }


    /**
     * The ChargeItemDefinition resource provides the properties that apply to the
     * (billing) codes necessary to calculate costs and prices. The properties may
     * differ largely depending on type and realm, therefore this resource gives only a
     * rough structure and requires profiling for each type of billing code system.
     *
     * Expressions that describe applicability criteria for the priceComponent.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRChargeItemDefinition\FHIRChargeItemDefinitionApplicability[]
     */
    public function getApplicability()
    {
        return $this->applicability;
    }

    /**
     * The ChargeItemDefinition resource provides the properties that apply to the
     * (billing) codes necessary to calculate costs and prices. The properties may
     * differ largely depending on type and realm, therefore this resource gives only a
     * rough structure and requires profiling for each type of billing code system.
     *
     * Expressions that describe applicability criteria for the priceComponent.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRChargeItemDefinition\FHIRChargeItemDefinitionApplicability $applicability
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRChargeItemDefinition\FHIRChargeItemDefinitionPropertyGroup
     */
    public function addApplicability(FHIRChargeItemDefinitionApplicability $applicability = null)
    {
        $this->applicability[] = $applicability;
        return $this;
    }

    /**
     * The ChargeItemDefinition resource provides the properties that apply to the
     * (billing) codes necessary to calculate costs and prices. The properties may
     * differ largely depending on type and realm, therefore this resource gives only a
     * rough structure and requires profiling for each type of billing code system.
     *
     * Expressions that describe applicability criteria for the priceComponent.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRChargeItemDefinition\FHIRChargeItemDefinitionApplicability[] $applicability
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRChargeItemDefinition\FHIRChargeItemDefinitionPropertyGroup
     */
    public function setApplicability(array $applicability = [])
    {
        $this->applicability = [];
        if ([] === $applicability) {
            return $this;
        }
        foreach($applicability as $v) {
            if ($v instanceof FHIRChargeItemDefinitionApplicability) {
                $this->addApplicability($v);
            } else {
                $this->addApplicability(new FHIRChargeItemDefinitionApplicability($v));
            }
        }
        return $this;
    }

    /**
     * The ChargeItemDefinition resource provides the properties that apply to the
     * (billing) codes necessary to calculate costs and prices. The properties may
     * differ largely depending on type and realm, therefore this resource gives only a
     * rough structure and requires profiling for each type of billing code system.
     *
     * The price for a ChargeItem may be calculated as a base price with
     * surcharges/deductions that apply in certain conditions. A ChargeItemDefinition
     * resource that defines the prices, factors and conditions that apply to a billing
     * code is currently under development. The priceComponent element can be used to
     * offer transparency to the recipient of the Invoice of how the prices have been
     * calculated.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRChargeItemDefinition\FHIRChargeItemDefinitionPriceComponent[]
     */
    public function getPriceComponent()
    {
        return $this->priceComponent;
    }

    /**
     * The ChargeItemDefinition resource provides the properties that apply to the
     * (billing) codes necessary to calculate costs and prices. The properties may
     * differ largely depending on type and realm, therefore this resource gives only a
     * rough structure and requires profiling for each type of billing code system.
     *
     * The price for a ChargeItem may be calculated as a base price with
     * surcharges/deductions that apply in certain conditions. A ChargeItemDefinition
     * resource that defines the prices, factors and conditions that apply to a billing
     * code is currently under development. The priceComponent element can be used to
     * offer transparency to the recipient of the Invoice of how the prices have been
     * calculated.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRChargeItemDefinition\FHIRChargeItemDefinitionPriceComponent $priceComponent
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRChargeItemDefinition\FHIRChargeItemDefinitionPropertyGroup
     */
    public function addPriceComponent(FHIRChargeItemDefinitionPriceComponent $priceComponent = null)
    {
        $this->priceComponent[] = $priceComponent;
        return $this;
    }

    /**
     * The ChargeItemDefinition resource provides the properties that apply to the
     * (billing) codes necessary to calculate costs and prices. The properties may
     * differ largely depending on type and realm, therefore this resource gives only a
     * rough structure and requires profiling for each type of billing code system.
     *
     * The price for a ChargeItem may be calculated as a base price with
     * surcharges/deductions that apply in certain conditions. A ChargeItemDefinition
     * resource that defines the prices, factors and conditions that apply to a billing
     * code is currently under development. The priceComponent element can be used to
     * offer transparency to the recipient of the Invoice of how the prices have been
     * calculated.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRChargeItemDefinition\FHIRChargeItemDefinitionPriceComponent[] $priceComponent
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRChargeItemDefinition\FHIRChargeItemDefinitionPropertyGroup
     */
    public function setPriceComponent(array $priceComponent = [])
    {
        $this->priceComponent = [];
        if ([] === $priceComponent) {
            return $this;
        }
        foreach($priceComponent as $v) {
            if ($v instanceof FHIRChargeItemDefinitionPriceComponent) {
                $this->addPriceComponent($v);
            } else {
                $this->addPriceComponent(new FHIRChargeItemDefinitionPriceComponent($v));
            }
        }
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRChargeItemDefinition\FHIRChargeItemDefinitionPropertyGroup $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRChargeItemDefinition\FHIRChargeItemDefinitionPropertyGroup
     */
    public static function xmlUnserialize($sxe = null, PHPFHIRTypeInterface $type = null, $libxmlOpts = 591872)
    {
        if (null === $sxe) {
            return null;
        }
        if (is_string($sxe)) {
            libxml_use_internal_errors(true);
            $sxe = new \SimpleXMLElement($sxe, $libxmlOpts, false);
            if ($sxe === false) {
                throw new \DomainException(sprintf('FHIRChargeItemDefinitionPropertyGroup::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRChargeItemDefinitionPropertyGroup::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRChargeItemDefinitionPropertyGroup;
        } elseif (!is_object($type) || !($type instanceof FHIRChargeItemDefinitionPropertyGroup)) {
            throw new \RuntimeException(sprintf(
                'FHIRChargeItemDefinitionPropertyGroup::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRChargeItemDefinition\FHIRChargeItemDefinitionPropertyGroup or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        FHIRBackboneElement::xmlUnserialize($sxe, $type);
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->applicability)) {
            foreach($children->applicability as $child) {
                $type->addApplicability(FHIRChargeItemDefinitionApplicability::xmlUnserialize($child));
            }
        }
        if (isset($children->priceComponent)) {
            foreach($children->priceComponent as $child) {
                $type->addPriceComponent(FHIRChargeItemDefinitionPriceComponent::xmlUnserialize($child));
            }
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement $sxe
     * @param null|int $libxmlOpts
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null, $libxmlOpts = 591872)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement($this->_getFHIRXMLElementDefinition(), $libxmlOpts, false);
        }
        parent::xmlSerialize($sxe);

        if ([] !== ($vs = $this->getApplicability())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_APPLICABILITY, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if ([] !== ($vs = $this->getPriceComponent())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PRICE_COMPONENT, null, $v->_getFHIRXMLNamespace()));
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
        if ([] !== ($vs = $this->getApplicability())) {
            $a[self::FIELD_APPLICABILITY] = $vs;
        }
        if ([] !== ($vs = $this->getPriceComponent())) {
            $a[self::FIELD_PRICE_COMPONENT] = $vs;
        }
        return $a;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}