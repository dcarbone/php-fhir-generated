<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRDataRequirement;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: September 9th, 2018
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2018 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 *   Generated on Sun, Sep 9, 2018 00:54+0000 for FHIR v3.5.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement;
use PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use PHPFHIRGenerated\FHIRElement\FHIRPeriod;
use PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration;
use PHPFHIRGenerated\FHIRElement\FHIRString;

/**
 * Describes a required data item for evaluation in terms of the type of data, and optional code or date-based filters of the data.
 * If the element is present, it must have a value for at least one of the defined elements, an @id referenced from the Narrative, or extensions
 *
 * Class FHIRDataRequirementDateFilter
 * @package PHPFHIRGenerated\FHIRElement\FHIRDataRequirement
 */
class FHIRDataRequirementDateFilter extends FHIRElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'DataRequirement.DateFilter';

    /**
     * The date-valued attribute of the filter. The specified path SHALL be a FHIRPath resolveable on the specified type of the DataRequirement, and SHALL consist only of identifiers, constant indexers, and .resolve(). The path is allowed to contain qualifiers (.) to traverse sub-elements, as well as indexers ([x]) to traverse multiple-cardinality sub-elements (see the [Simple FHIRPath Profile](fhirpath.html#simple) for full details). Note that the index must be an integer constant. The path must resolve to an element of type date, dateTime, Period, Schedule, or Timing.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $path = null;

    /**
     * A date parameter that refers to a search parameter defined on the specified type of the DataRequirement, and which searches on elements of type date, dateTime, Period, Schedule, or Timing.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $searchParam = null;

    /**
     * The value of the filter. If period is specified, the filter will return only those data items that fall within the bounds determined by the Period, inclusive of the period boundaries. If dateTime is specified, the filter will return only those data items that are equal to the specified dateTime. If a Duration is specified, the filter will return only those data items that fall within Duration before now.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $valueDateTime = null;

    /**
     * The value of the filter. If period is specified, the filter will return only those data items that fall within the bounds determined by the Period, inclusive of the period boundaries. If dateTime is specified, the filter will return only those data items that are equal to the specified dateTime. If a Duration is specified, the filter will return only those data items that fall within Duration before now.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public $valueDuration = null;

    /**
     * The value of the filter. If period is specified, the filter will return only those data items that fall within the bounds determined by the Period, inclusive of the period boundaries. If dateTime is specified, the filter will return only those data items that are equal to the specified dateTime. If a Duration is specified, the filter will return only those data items that fall within Duration before now.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $valuePeriod = null;

    /**
     * FHIRDataRequirementDateFilter Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['path'])) {
                $this->setPath($data['path']);
            }
            if (isset($data['searchParam'])) {
                $this->setSearchParam($data['searchParam']);
            }
            if (isset($data['valueDateTime'])) {
                $this->setValueDateTime($data['valueDateTime']);
            }
            if (isset($data['valueDuration'])) {
                $this->setValueDuration($data['valueDuration']);
            }
            if (isset($data['valuePeriod'])) {
                $this->setValuePeriod($data['valuePeriod']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRDataRequirement\FHIRDataRequirementDateFilter::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * The date-valued attribute of the filter. The specified path SHALL be a FHIRPath resolveable on the specified type of the DataRequirement, and SHALL consist only of identifiers, constant indexers, and .resolve(). The path is allowed to contain qualifiers (.) to traverse sub-elements, as well as indexers ([x]) to traverse multiple-cardinality sub-elements (see the [Simple FHIRPath Profile](fhirpath.html#simple) for full details). Note that the index must be an integer constant. The path must resolve to an element of type date, dateTime, Period, Schedule, or Timing.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setPath($path)
    {
        if (null === $path) {
            return $this; 
        }
        if (is_scalar($path)) {
            $path = new FHIRString($path);
        }
        if (!($path instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRDataRequirementDateFilter::setPath - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($path)
            ));
        }
        $this->path = $path;
        return $this;
    }

    /**
     * The date-valued attribute of the filter. The specified path SHALL be a FHIRPath resolveable on the specified type of the DataRequirement, and SHALL consist only of identifiers, constant indexers, and .resolve(). The path is allowed to contain qualifiers (.) to traverse sub-elements, as well as indexers ([x]) to traverse multiple-cardinality sub-elements (see the [Simple FHIRPath Profile](fhirpath.html#simple) for full details). Note that the index must be an integer constant. The path must resolve to an element of type date, dateTime, Period, Schedule, or Timing.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getPath()
    {
        return $this->path;
    }


    /**
     * A date parameter that refers to a search parameter defined on the specified type of the DataRequirement, and which searches on elements of type date, dateTime, Period, Schedule, or Timing.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setSearchParam($searchParam)
    {
        if (null === $searchParam) {
            return $this; 
        }
        if (is_scalar($searchParam)) {
            $searchParam = new FHIRString($searchParam);
        }
        if (!($searchParam instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRDataRequirementDateFilter::setSearchParam - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($searchParam)
            ));
        }
        $this->searchParam = $searchParam;
        return $this;
    }

    /**
     * A date parameter that refers to a search parameter defined on the specified type of the DataRequirement, and which searches on elements of type date, dateTime, Period, Schedule, or Timing.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getSearchParam()
    {
        return $this->searchParam;
    }


    /**
     * The value of the filter. If period is specified, the filter will return only those data items that fall within the bounds determined by the Period, inclusive of the period boundaries. If dateTime is specified, the filter will return only those data items that are equal to the specified dateTime. If a Duration is specified, the filter will return only those data items that fall within Duration before now.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setValueDateTime($valueDateTime)
    {
        if (null === $valueDateTime) {
            return $this; 
        }
        if (is_scalar($valueDateTime)) {
            $valueDateTime = new FHIRDateTime($valueDateTime);
        }
        if (!($valueDateTime instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRDataRequirementDateFilter::setValueDateTime - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($valueDateTime)
            ));
        }
        $this->valueDateTime = $valueDateTime;
        return $this;
    }

    /**
     * The value of the filter. If period is specified, the filter will return only those data items that fall within the bounds determined by the Period, inclusive of the period boundaries. If dateTime is specified, the filter will return only those data items that are equal to the specified dateTime. If a Duration is specified, the filter will return only those data items that fall within Duration before now.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getValueDateTime()
    {
        return $this->valueDateTime;
    }


    /**
     * The value of the filter. If period is specified, the filter will return only those data items that fall within the bounds determined by the Period, inclusive of the period boundaries. If dateTime is specified, the filter will return only those data items that are equal to the specified dateTime. If a Duration is specified, the filter will return only those data items that fall within Duration before now.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration
     * @return $this
     */
    public function setValueDuration(FHIRDuration $valueDuration = null)
    {
        if (null === $valueDuration) {
            return $this; 
        }
        $this->valueDuration = $valueDuration;
        return $this;
    }

    /**
     * The value of the filter. If period is specified, the filter will return only those data items that fall within the bounds determined by the Period, inclusive of the period boundaries. If dateTime is specified, the filter will return only those data items that are equal to the specified dateTime. If a Duration is specified, the filter will return only those data items that fall within Duration before now.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getValueDuration()
    {
        return $this->valueDuration;
    }


    /**
     * The value of the filter. If period is specified, the filter will return only those data items that fall within the bounds determined by the Period, inclusive of the period boundaries. If dateTime is specified, the filter will return only those data items that are equal to the specified dateTime. If a Duration is specified, the filter will return only those data items that fall within Duration before now.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     * @return $this
     */
    public function setValuePeriod(FHIRPeriod $valuePeriod = null)
    {
        if (null === $valuePeriod) {
            return $this; 
        }
        $this->valuePeriod = $valuePeriod;
        return $this;
    }

    /**
     * The value of the filter. If period is specified, the filter will return only those data items that fall within the bounds determined by the Period, inclusive of the period boundaries. If dateTime is specified, the filter will return only those data items that are equal to the specified dateTime. If a Duration is specified, the filter will return only those data items that fall within Duration before now.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getValuePeriod()
    {
        return $this->valuePeriod;
    }


    /**
     * @return string
     */
    public function __toString()
    {
        return (string)self::FHIR_TYPE_NAME;
    }

    /**
     * @return mixed
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getPath())) {
            $a['path'] = $v;
        }
        if (null !== ($v = $this->getSearchParam())) {
            $a['searchParam'] = $v;
        }
        if (null !== ($v = $this->getValueDateTime())) {
            $a['valueDateTime'] = $v;
        }
        if (null !== ($v = $this->getValueDuration())) {
            $a['valueDuration'] = $v;
        }
        if (null !== ($v = $this->getValuePeriod())) {
            $a['valuePeriod'] = $v;
        }
        return $a;
    }

    /**
     * @param bool $returnSXE
     * @param null|\SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, \SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<DataRequirementDateFilter xmlns="http://hl7.org/fhir"></DataRequirementDateFilter>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}