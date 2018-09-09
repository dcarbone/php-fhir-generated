<?php

namespace PHPFHIRGenerated\FHIRElement;

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
use PHPFHIRGenerated\FHIRElement\FHIRDataRequirement\FHIRDataRequirementCodeFilter;
use PHPFHIRGenerated\FHIRElement\FHIRDataRequirement\FHIRDataRequirementDateFilter;
use PHPFHIRGenerated\FHIRElement\FHIRDataRequirement\FHIRDataRequirementSort;

/**
 * Describes a required data item for evaluation in terms of the type of data, and optional code or date-based filters of the data.
 * If the element is present, it must have a value for at least one of the defined elements, an @id referenced from the Narrative, or extensions
 *
 * Class FHIRDataRequirement
 * @package PHPFHIRGenerated\FHIRElement
 */
class FHIRDataRequirement extends FHIRElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'DataRequirement';

    /**
     * Code filters specify additional constraints on the data, specifying the value set of interest for a particular element of the data. Each code filter defines an additional constraint on the data, i.e. code filters are AND'ed, not OR'ed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDataRequirement\FHIRDataRequirementCodeFilter
     */
    public $codeFilter = null;

    /**
     * Date filters specify additional constraints on the data in terms of the applicable date range for specific elements. Each date filter specifies an additional constraint on the data, i.e. date filters are AND'ed, not OR'ed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDataRequirement\FHIRDataRequirementDateFilter
     */
    public $dateFilter = null;

    /**
     * Specifies a maximum number of results that are required (uses the _count search parameter).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public $limit = null;

    /**
     * Indicates that specific elements of the type are referenced by the knowledge module and must be supported by the consumer in order to obtain an effective evaluation. This does not mean that a value is required for this element, only that the consuming system must understand the element and be able to provide values for it if they are available. 

The value of mustSupport SHALL be a FHIRPath resolveable on the type of the DataRequirement. The path SHALL consist only of identifiers, constant indexers, and .resolve() (see the [Simple FHIRPath Profile](fhirpath.html#simple) for full details).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $mustSupport = null;

    /**
     * The profile of the required data, specified as the uri of the profile definition.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    public $profile = null;

    /**
     * Specifies the order of the results to be returned.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDataRequirement\FHIRDataRequirementSort
     */
    public $sort = null;

    /**
     * The intended subjects of the data requirement. If this element is not provided, a Patient subject is assumed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $subjectCodeableConcept = null;

    /**
     * The intended subjects of the data requirement. If this element is not provided, a Patient subject is assumed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $subjectReference = null;

    /**
     * The type of the required data, specified as the type name of a resource. For profiles, this value is set to the type of the base resource of the profile.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public $type = null;

    /**
     * FHIRDataRequirement Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['codeFilter'])) {
                $this->setCodeFilter($data['codeFilter']);
            }
            if (isset($data['dateFilter'])) {
                $this->setDateFilter($data['dateFilter']);
            }
            if (isset($data['limit'])) {
                $this->setLimit($data['limit']);
            }
            if (isset($data['mustSupport'])) {
                $this->setMustSupport($data['mustSupport']);
            }
            if (isset($data['profile'])) {
                $this->setProfile($data['profile']);
            }
            if (isset($data['sort'])) {
                $this->setSort($data['sort']);
            }
            if (isset($data['subjectCodeableConcept'])) {
                $this->setSubjectCodeableConcept($data['subjectCodeableConcept']);
            }
            if (isset($data['subjectReference'])) {
                $this->setSubjectReference($data['subjectReference']);
            }
            if (isset($data['type'])) {
                $this->setType($data['type']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRDataRequirement::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Code filters specify additional constraints on the data, specifying the value set of interest for a particular element of the data. Each code filter defines an additional constraint on the data, i.e. code filters are AND'ed, not OR'ed.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDataRequirement\FHIRDataRequirementCodeFilter
     * @return $this
     */
    public function setCodeFilter(FHIRDataRequirementCodeFilter $codeFilter = null)
    {
        if (null === $codeFilter) {
            return $this; 
        }
        $this->codeFilter = $codeFilter;
        return $this;
    }

    /**
     * Code filters specify additional constraints on the data, specifying the value set of interest for a particular element of the data. Each code filter defines an additional constraint on the data, i.e. code filters are AND'ed, not OR'ed.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDataRequirement\FHIRDataRequirementCodeFilter
     */
    public function getCodeFilter()
    {
        return $this->codeFilter;
    }


    /**
     * Date filters specify additional constraints on the data in terms of the applicable date range for specific elements. Each date filter specifies an additional constraint on the data, i.e. date filters are AND'ed, not OR'ed.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDataRequirement\FHIRDataRequirementDateFilter
     * @return $this
     */
    public function setDateFilter(FHIRDataRequirementDateFilter $dateFilter = null)
    {
        if (null === $dateFilter) {
            return $this; 
        }
        $this->dateFilter = $dateFilter;
        return $this;
    }

    /**
     * Date filters specify additional constraints on the data in terms of the applicable date range for specific elements. Each date filter specifies an additional constraint on the data, i.e. date filters are AND'ed, not OR'ed.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDataRequirement\FHIRDataRequirementDateFilter
     */
    public function getDateFilter()
    {
        return $this->dateFilter;
    }


    /**
     * Specifies a maximum number of results that are required (uses the _count search parameter).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     * @return $this
     */
    public function setLimit($limit)
    {
        if (null === $limit) {
            return $this; 
        }
        if (is_scalar($limit)) {
            $limit = new FHIRPositiveInt($limit);
        }
        if (!($limit instanceof FHIRPositiveInt)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRDataRequirement::setLimit - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt or appropriate scalar value, %s seen.',
                gettype($limit)
            ));
        }
        $this->limit = $limit;
        return $this;
    }

    /**
     * Specifies a maximum number of results that are required (uses the _count search parameter).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public function getLimit()
    {
        return $this->limit;
    }


    /**
     * Indicates that specific elements of the type are referenced by the knowledge module and must be supported by the consumer in order to obtain an effective evaluation. This does not mean that a value is required for this element, only that the consuming system must understand the element and be able to provide values for it if they are available. 

The value of mustSupport SHALL be a FHIRPath resolveable on the type of the DataRequirement. The path SHALL consist only of identifiers, constant indexers, and .resolve() (see the [Simple FHIRPath Profile](fhirpath.html#simple) for full details).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setMustSupport($mustSupport)
    {
        if (null === $mustSupport) {
            return $this; 
        }
        if (is_scalar($mustSupport)) {
            $mustSupport = new FHIRString($mustSupport);
        }
        if (!($mustSupport instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRDataRequirement::setMustSupport - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($mustSupport)
            ));
        }
        $this->mustSupport = $mustSupport;
        return $this;
    }

    /**
     * Indicates that specific elements of the type are referenced by the knowledge module and must be supported by the consumer in order to obtain an effective evaluation. This does not mean that a value is required for this element, only that the consuming system must understand the element and be able to provide values for it if they are available. 

The value of mustSupport SHALL be a FHIRPath resolveable on the type of the DataRequirement. The path SHALL consist only of identifiers, constant indexers, and .resolve() (see the [Simple FHIRPath Profile](fhirpath.html#simple) for full details).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getMustSupport()
    {
        return $this->mustSupport;
    }


    /**
     * The profile of the required data, specified as the uri of the profile definition.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCanonical
     * @return $this
     */
    public function setProfile($profile)
    {
        if (null === $profile) {
            return $this; 
        }
        if (is_scalar($profile)) {
            $profile = new FHIRCanonical($profile);
        }
        if (!($profile instanceof FHIRCanonical)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRDataRequirement::setProfile - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRCanonical or appropriate scalar value, %s seen.',
                gettype($profile)
            ));
        }
        $this->profile = $profile;
        return $this;
    }

    /**
     * The profile of the required data, specified as the uri of the profile definition.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    public function getProfile()
    {
        return $this->profile;
    }


    /**
     * Specifies the order of the results to be returned.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDataRequirement\FHIRDataRequirementSort
     * @return $this
     */
    public function setSort(FHIRDataRequirementSort $sort = null)
    {
        if (null === $sort) {
            return $this; 
        }
        $this->sort = $sort;
        return $this;
    }

    /**
     * Specifies the order of the results to be returned.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDataRequirement\FHIRDataRequirementSort
     */
    public function getSort()
    {
        return $this->sort;
    }


    /**
     * The intended subjects of the data requirement. If this element is not provided, a Patient subject is assumed.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setSubjectCodeableConcept(FHIRCodeableConcept $subjectCodeableConcept = null)
    {
        if (null === $subjectCodeableConcept) {
            return $this; 
        }
        $this->subjectCodeableConcept = $subjectCodeableConcept;
        return $this;
    }

    /**
     * The intended subjects of the data requirement. If this element is not provided, a Patient subject is assumed.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getSubjectCodeableConcept()
    {
        return $this->subjectCodeableConcept;
    }


    /**
     * The intended subjects of the data requirement. If this element is not provided, a Patient subject is assumed.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setSubjectReference(FHIRReference $subjectReference = null)
    {
        if (null === $subjectReference) {
            return $this; 
        }
        $this->subjectReference = $subjectReference;
        return $this;
    }

    /**
     * The intended subjects of the data requirement. If this element is not provided, a Patient subject is assumed.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSubjectReference()
    {
        return $this->subjectReference;
    }


    /**
     * The type of the required data, specified as the type name of a resource. For profiles, this value is set to the type of the base resource of the profile.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCode
     * @return $this
     */
    public function setType($type)
    {
        if (null === $type) {
            return $this; 
        }
        if (is_scalar($type)) {
            $type = new FHIRCode($type);
        }
        if (!($type instanceof FHIRCode)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRDataRequirement::setType - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRCode or appropriate scalar value, %s seen.',
                gettype($type)
            ));
        }
        $this->type = $type;
        return $this;
    }

    /**
     * The type of the required data, specified as the type name of a resource. For profiles, this value is set to the type of the base resource of the profile.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getType()
    {
        return $this->type;
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
        if (null !== ($v = $this->getCodeFilter())) {
            $a['codeFilter'] = $v;
        }
        if (null !== ($v = $this->getDateFilter())) {
            $a['dateFilter'] = $v;
        }
        if (null !== ($v = $this->getLimit())) {
            $a['limit'] = $v;
        }
        if (null !== ($v = $this->getMustSupport())) {
            $a['mustSupport'] = $v;
        }
        if (null !== ($v = $this->getProfile())) {
            $a['profile'] = $v;
        }
        if (null !== ($v = $this->getSort())) {
            $a['sort'] = $v;
        }
        if (null !== ($v = $this->getSubjectCodeableConcept())) {
            $a['subjectCodeableConcept'] = $v;
        }
        if (null !== ($v = $this->getSubjectReference())) {
            $a['subjectReference'] = $v;
        }
        if (null !== ($v = $this->getType())) {
            $a['type'] = $v;
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
            $sxe = new \SimpleXMLElement('<DataRequirement xmlns="http://hl7.org/fhir"></DataRequirement>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}