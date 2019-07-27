<?php

namespace DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityResponse;

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
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\PHPFHIRTypeInterface;

/**
 * This resource provides eligibility and plan details from the processing of an
 * CoverageEligibilityRequest resource.
 *
 * Class FHIRCoverageEligibilityResponseInsurance
 * @package \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityResponse
 */
class FHIRCoverageEligibilityResponseInsurance extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_COVERAGE_ELIGIBILITY_RESPONSE_DOT_INSURANCE;

    const FIELD_BENEFIT_PERIOD = 'benefitPeriod';
    const FIELD_COVERAGE = 'coverage';
    const FIELD_INFORCE = 'inforce';
    const FIELD_INFORCE_EXT = '_inforce';
    const FIELD_ITEM = 'item';

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The term of the benefits documented in this response.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    private $benefitPeriod = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Reference to the insurance card level information contained in the Coverage
     * resource. The coverage issuing insurer will use these details to locate the
     * patient's actual coverage within the insurer's information system.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $coverage = null;

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Flag indicating if the coverage provided is inforce currently if no service
     * date(s) specified or for the whole duration of the service dates.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    private $inforce = null;

    /**
     * This resource provides eligibility and plan details from the processing of an
     * CoverageEligibilityRequest resource.
     *
     * Benefits and optionally current balances, and authorization details by category
     * or service.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityResponse\FHIRCoverageEligibilityResponseItem[]
     */
    private $item = [];

    /**
     * FHIRCoverageEligibilityResponseInsurance Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCoverageEligibilityResponseInsurance::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_BENEFIT_PERIOD])) {
            if ($data[self::FIELD_BENEFIT_PERIOD] instanceof FHIRPeriod) {
                $this->setBenefitPeriod($data[self::FIELD_BENEFIT_PERIOD]);
            } else {
                $this->setBenefitPeriod(new FHIRPeriod($data[self::FIELD_BENEFIT_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_COVERAGE])) {
            if ($data[self::FIELD_COVERAGE] instanceof FHIRReference) {
                $this->setCoverage($data[self::FIELD_COVERAGE]);
            } else {
                $this->setCoverage(new FHIRReference($data[self::FIELD_COVERAGE]));
            }
        }
        if (isset($data[self::FIELD_INFORCE])) {
            $ext = (isset($data[self::FIELD_INFORCE_EXT]) && is_array($data[self::FIELD_INFORCE_EXT]))
                ? $data[self::FIELD_INFORCE_EXT]
                : null;
            if ($data[self::FIELD_INFORCE] instanceof FHIRBoolean) {
                $this->setInforce($data[self::FIELD_INFORCE]);
            } elseif ($ext && is_scalar($data[self::FIELD_INFORCE])) {
                $this->setInforce(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $data[self::FIELD_INFORCE]] + $ext));
            } else {
                $this->setInforce(new FHIRBoolean($data[self::FIELD_INFORCE]));
            }
        }
        if (isset($data[self::FIELD_ITEM])) {
            if (is_array($data[self::FIELD_ITEM])) {
                foreach($data[self::FIELD_ITEM] as $v) {
                    if ($v instanceof FHIRCoverageEligibilityResponseItem) {
                        $this->addItem($v);
                    } else {
                        $this->addItem(new FHIRCoverageEligibilityResponseItem($v));
                    }
                }
            } else if ($data[self::FIELD_ITEM] instanceof FHIRCoverageEligibilityResponseItem) {
                $this->addItem($data[self::FIELD_ITEM]);
            } else {
                $this->addItem(new FHIRCoverageEligibilityResponseItem($data[self::FIELD_ITEM]));
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
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The term of the benefits documented in this response.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getBenefitPeriod()
    {
        return $this->benefitPeriod;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The term of the benefits documented in this response.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPeriod $benefitPeriod
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityResponse\FHIRCoverageEligibilityResponseInsurance
     */
    public function setBenefitPeriod(FHIRPeriod $benefitPeriod = null)
    {
        $this->benefitPeriod = $benefitPeriod;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Reference to the insurance card level information contained in the Coverage
     * resource. The coverage issuing insurer will use these details to locate the
     * patient's actual coverage within the insurer's information system.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getCoverage()
    {
        return $this->coverage;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Reference to the insurance card level information contained in the Coverage
     * resource. The coverage issuing insurer will use these details to locate the
     * patient's actual coverage within the insurer's information system.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference $coverage
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityResponse\FHIRCoverageEligibilityResponseInsurance
     */
    public function setCoverage(FHIRReference $coverage = null)
    {
        $this->coverage = $coverage;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Flag indicating if the coverage provided is inforce currently if no service
     * date(s) specified or for the whole duration of the service dates.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getInforce()
    {
        return $this->inforce;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Flag indicating if the coverage provided is inforce currently if no service
     * date(s) specified or for the whole duration of the service dates.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBoolean $inforce
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityResponse\FHIRCoverageEligibilityResponseInsurance
     */
    public function setInforce($inforce = null)
    {
        if (null === $inforce) {
            $this->inforce = null;
            return $this;
        }
        if ($inforce instanceof FHIRBoolean) {
            $this->inforce = $inforce;
            return $this;
        }
        $this->inforce = new FHIRBoolean($inforce);
        return $this;
    }

    /**
     * This resource provides eligibility and plan details from the processing of an
     * CoverageEligibilityRequest resource.
     *
     * Benefits and optionally current balances, and authorization details by category
     * or service.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityResponse\FHIRCoverageEligibilityResponseItem[]
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * This resource provides eligibility and plan details from the processing of an
     * CoverageEligibilityRequest resource.
     *
     * Benefits and optionally current balances, and authorization details by category
     * or service.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityResponse\FHIRCoverageEligibilityResponseItem $item
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityResponse\FHIRCoverageEligibilityResponseInsurance
     */
    public function addItem(FHIRCoverageEligibilityResponseItem $item = null)
    {
        $this->item[] = $item;
        return $this;
    }

    /**
     * This resource provides eligibility and plan details from the processing of an
     * CoverageEligibilityRequest resource.
     *
     * Benefits and optionally current balances, and authorization details by category
     * or service.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityResponse\FHIRCoverageEligibilityResponseItem[] $item
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityResponse\FHIRCoverageEligibilityResponseInsurance
     */
    public function setItem(array $item = [])
    {
        $this->item = [];
        if ([] === $item) {
            return $this;
        }
        foreach($item as $v) {
            if ($v instanceof FHIRCoverageEligibilityResponseItem) {
                $this->addItem($v);
            } else {
                $this->addItem(new FHIRCoverageEligibilityResponseItem($v));
            }
        }
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null \$sxe
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityResponse\FHIRCoverageEligibilityResponseInsurance $type
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityResponse\FHIRCoverageEligibilityResponseInsurance
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
                throw new \DomainException(sprintf('FHIRCoverageEligibilityResponseInsurance::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRCoverageEligibilityResponseInsurance::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRBackboneElement::xmlUnserialize(\$sxe, new FHIRCoverageEligibilityResponseInsurance);
        } elseif (!is_object($type) || !($type instanceof FHIRCoverageEligibilityResponseInsurance)) {
            throw new \RuntimeException(sprintf(
                'FHIRCoverageEligibilityResponseInsurance::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityResponse\FHIRCoverageEligibilityResponseInsurance or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->benefitPeriod)) {
            $type->setBenefitPeriod(FHIRPeriod::xmlUnserialize($children->benefitPeriod));
        }
        if (isset($children->coverage)) {
            $type->setCoverage(FHIRReference::xmlUnserialize($children->coverage));
        }
        if (isset($attributes->inforce)) {
            $type->setInforce((string)$attributes->inforce);
        }
        if (isset($children->inforce)) {
            $type->setInforce(FHIRBoolean::xmlUnserialize($children->inforce));
        }
        if (isset($children->item)) {
            foreach($children->item as $child) {
                $type->addItem(FHIRCoverageEligibilityResponseItem::xmlUnserialize($child));
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
            $sxe = new \SimpleXMLElement('<CoverageEligibilityResponseInsurance xmlns="http://hl7.org/fhir"></CoverageEligibilityResponseInsurance>');
        }
        if (null !== ($v = $this->getBenefitPeriod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_BENEFIT_PERIOD));
        }
        if (null !== ($v = $this->getCoverage())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_COVERAGE));
        }
        if (null !== ($v = $this->getInforce())) {
            $sxe->addAttribute(self::FIELD_INFORCE, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_INFORCE));
            }
        }
        if ([] !== ($vs = $this->getItem())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_ITEM));
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
        if (null !== ($v = $this->getBenefitPeriod())) {
            $a[self::FIELD_BENEFIT_PERIOD] = $v;
        }
        if (null !== ($v = $this->getCoverage())) {
            $a[self::FIELD_COVERAGE] = $v;
        }
        if (null !== ($v = $this->getInforce())) {
            $a[self::FIELD_INFORCE] = (string)$v;
            $a[self::FIELD_INFORCE_EXT] = $v;
        }
        if ([] !== ($vs = $this->getItem())) {
            $a[self::FIELD_ITEM] = $vs;
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