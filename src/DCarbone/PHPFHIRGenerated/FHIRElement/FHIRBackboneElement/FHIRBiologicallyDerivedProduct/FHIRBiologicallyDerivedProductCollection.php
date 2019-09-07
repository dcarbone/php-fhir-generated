<?php

namespace DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBiologicallyDerivedProduct;

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
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\PHPFHIRTypeInterface;

/**
 * A material substance originating from a biological entity intended to be
 * transplanted or infused into another (possibly the same) biological entity.
 *
 * Class FHIRBiologicallyDerivedProductCollection
 * @package \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBiologicallyDerivedProduct
 */
class FHIRBiologicallyDerivedProductCollection extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_BIOLOGICALLY_DERIVED_PRODUCT_DOT_COLLECTION;

    const FIELD_COLLECTED_DATE_TIME = 'collectedDateTime';
    const FIELD_COLLECTED_DATE_TIME_EXT = '_collectedDateTime';
    const FIELD_COLLECTED_PERIOD = 'collectedPeriod';
    const FIELD_COLLECTOR = 'collector';
    const FIELD_SOURCE = 'source';

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Time of product collection. (choose any one of collected*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    private $collectedDateTime = null;

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Time of product collection. (choose any one of collected*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    private $collectedPeriod = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Healthcare professional who is performing the collection.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $collector = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The patient or entity, such as a hospital or vendor in the case of a
     * processed/manipulated/manufactured product, providing the product.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $source = null;

    /**
     * FHIRBiologicallyDerivedProductCollection Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRBiologicallyDerivedProductCollection::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_COLLECTED_DATE_TIME])) {
            $ext = (isset($data[self::FIELD_COLLECTED_DATE_TIME_EXT]) && is_array($data[self::FIELD_COLLECTED_DATE_TIME_EXT]))
                ? $data[self::FIELD_COLLECTED_DATE_TIME_EXT]
                : null;
            if ($data[self::FIELD_COLLECTED_DATE_TIME] instanceof FHIRDateTime) {
                $this->setCollectedDateTime($data[self::FIELD_COLLECTED_DATE_TIME]);
            } elseif ($ext && is_scalar($data[self::FIELD_COLLECTED_DATE_TIME])) {
                $this->setCollectedDateTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $data[self::FIELD_COLLECTED_DATE_TIME]] + $ext));
            } else {
                $this->setCollectedDateTime(new FHIRDateTime($data[self::FIELD_COLLECTED_DATE_TIME]));
            }
        }
        if (isset($data[self::FIELD_COLLECTED_PERIOD])) {
            if ($data[self::FIELD_COLLECTED_PERIOD] instanceof FHIRPeriod) {
                $this->setCollectedPeriod($data[self::FIELD_COLLECTED_PERIOD]);
            } else {
                $this->setCollectedPeriod(new FHIRPeriod($data[self::FIELD_COLLECTED_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_COLLECTOR])) {
            if ($data[self::FIELD_COLLECTOR] instanceof FHIRReference) {
                $this->setCollector($data[self::FIELD_COLLECTOR]);
            } else {
                $this->setCollector(new FHIRReference($data[self::FIELD_COLLECTOR]));
            }
        }
        if (isset($data[self::FIELD_SOURCE])) {
            if ($data[self::FIELD_SOURCE] instanceof FHIRReference) {
                $this->setSource($data[self::FIELD_SOURCE]);
            } else {
                $this->setSource(new FHIRReference($data[self::FIELD_SOURCE]));
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
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Time of product collection. (choose any one of collected*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getCollectedDateTime()
    {
        return $this->collectedDateTime;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Time of product collection. (choose any one of collected*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDateTime $collectedDateTime
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBiologicallyDerivedProduct\FHIRBiologicallyDerivedProductCollection
     */
    public function setCollectedDateTime($collectedDateTime = null)
    {
        if (null === $collectedDateTime) {
            $this->collectedDateTime = null;
            return $this;
        }
        if ($collectedDateTime instanceof FHIRDateTime) {
            $this->collectedDateTime = $collectedDateTime;
            return $this;
        }
        $this->collectedDateTime = new FHIRDateTime($collectedDateTime);
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Time of product collection. (choose any one of collected*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getCollectedPeriod()
    {
        return $this->collectedPeriod;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Time of product collection. (choose any one of collected*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPeriod $collectedPeriod
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBiologicallyDerivedProduct\FHIRBiologicallyDerivedProductCollection
     */
    public function setCollectedPeriod(FHIRPeriod $collectedPeriod = null)
    {
        $this->collectedPeriod = $collectedPeriod;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Healthcare professional who is performing the collection.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getCollector()
    {
        return $this->collector;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Healthcare professional who is performing the collection.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference $collector
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBiologicallyDerivedProduct\FHIRBiologicallyDerivedProductCollection
     */
    public function setCollector(FHIRReference $collector = null)
    {
        $this->collector = $collector;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The patient or entity, such as a hospital or vendor in the case of a
     * processed/manipulated/manufactured product, providing the product.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The patient or entity, such as a hospital or vendor in the case of a
     * processed/manipulated/manufactured product, providing the product.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference $source
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBiologicallyDerivedProduct\FHIRBiologicallyDerivedProductCollection
     */
    public function setSource(FHIRReference $source = null)
    {
        $this->source = $source;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBiologicallyDerivedProduct\FHIRBiologicallyDerivedProductCollection $type
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBiologicallyDerivedProduct\FHIRBiologicallyDerivedProductCollection
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
                throw new \DomainException(sprintf('FHIRBiologicallyDerivedProductCollection::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRBiologicallyDerivedProductCollection::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRBackboneElement::xmlUnserialize($sxe, new FHIRBiologicallyDerivedProductCollection);
        } elseif (!is_object($type) || !($type instanceof FHIRBiologicallyDerivedProductCollection)) {
            throw new \RuntimeException(sprintf(
                'FHIRBiologicallyDerivedProductCollection::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRBiologicallyDerivedProduct\FHIRBiologicallyDerivedProductCollection or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($attributes->collectedDateTime)) {
            $type->setCollectedDateTime((string)$attributes->collectedDateTime);
        }
        if (isset($children->collectedDateTime)) {
            $type->setCollectedDateTime(FHIRDateTime::xmlUnserialize($children->collectedDateTime));
        }
        if (isset($children->collectedPeriod)) {
            $type->setCollectedPeriod(FHIRPeriod::xmlUnserialize($children->collectedPeriod));
        }
        if (isset($children->collector)) {
            $type->setCollector(FHIRReference::xmlUnserialize($children->collector));
        }
        if (isset($children->source)) {
            $type->setSource(FHIRReference::xmlUnserialize($children->source));
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
            $sxe = new \SimpleXMLElement('<BiologicallyDerivedProductCollection xmlns="http://hl7.org/fhir"></BiologicallyDerivedProductCollection>');
        }
        if (null !== ($v = $this->getCollectedDateTime())) {
            $sxe->addAttribute(self::FIELD_COLLECTED_DATE_TIME, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_COLLECTED_DATE_TIME));
            }
        }
        if (null !== ($v = $this->getCollectedPeriod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_COLLECTED_PERIOD));
        }
        if (null !== ($v = $this->getCollector())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_COLLECTOR));
        }
        if (null !== ($v = $this->getSource())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SOURCE));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getCollectedDateTime())) {
            $a[self::FIELD_COLLECTED_DATE_TIME] = (string)$v;
            $a[self::FIELD_COLLECTED_DATE_TIME_EXT] = $v;
        }
        if (null !== ($v = $this->getCollectedPeriod())) {
            $a[self::FIELD_COLLECTED_PERIOD] = $v;
        }
        if (null !== ($v = $this->getCollector())) {
            $a[self::FIELD_COLLECTOR] = $v;
        }
        if (null !== ($v = $this->getSource())) {
            $a[self::FIELD_SOURCE] = $v;
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