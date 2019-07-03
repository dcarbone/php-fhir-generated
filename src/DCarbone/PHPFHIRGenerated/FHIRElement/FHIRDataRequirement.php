<?php

namespace DCarbone\PHPFHIRGenerated\FHIRElement;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: July 3rd, 2019 15:33+0000
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

use DCarbone\PHPFHIRGenerated\FHIRElement;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDataRequirement\FHIRDataRequirementCodeFilter;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDataRequirement\FHIRDataRequirementDateFilter;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDataRequirement\FHIRDataRequirementSort;
use DCarbone\PHPFHIRGenerated\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\PHPFHIRTypeInterface;

/**
 * Describes a required data item for evaluation in terms of the type of data, and
 * optional code or date-based filters of the data.
 * If the element is present, it must have a value for at least one of the defined
 * elements, an @id referenced from the Narrative, or extensions
 *
 * Class FHIRDataRequirement
 * @package \DCarbone\PHPFHIRGenerated\FHIRElement
 */
class FHIRDataRequirement extends FHIRElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_DATA_REQUIREMENT;

    const FIELD_CODE_FILTER = 'codeFilter';
    const FIELD_DATE_FILTER = 'dateFilter';
    const FIELD_LIMIT = 'limit';
    const FIELD_LIMIT_EXT = '_limit';
    const FIELD_MUST_SUPPORT = 'mustSupport';
    const FIELD_MUST_SUPPORT_EXT = '_mustSupport';
    const FIELD_PROFILE = 'profile';
    const FIELD_PROFILE_EXT = '_profile';
    const FIELD_SORT = 'sort';
    const FIELD_SUBJECT_CODEABLE_CONCEPT = 'subjectCodeableConcept';
    const FIELD_SUBJECT_REFERENCE = 'subjectReference';
    const FIELD_TYPE = 'type';
    const FIELD_TYPE_EXT = '_type';

    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Code filters specify additional constraints on the data, specifying the value
     * set of interest for a particular element of the data. Each code filter defines
     * an additional constraint on the data, i.e. code filters are AND'ed, not OR'ed.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDataRequirement\FHIRDataRequirementCodeFilter[]
     */
    private $codeFilter = [];

    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Date filters specify additional constraints on the data in terms of the
     * applicable date range for specific elements. Each date filter specifies an
     * additional constraint on the data, i.e. date filters are AND'ed, not OR'ed.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDataRequirement\FHIRDataRequirementDateFilter[]
     */
    private $dateFilter = [];

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Specifies a maximum number of results that are required (uses the _count search
     * parameter).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    private $limit = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Indicates that specific elements of the type are referenced by the knowledge
     * module and must be supported by the consumer in order to obtain an effective
     * evaluation. This does not mean that a value is required for this element, only
     * that the consuming system must understand the element and be able to provide
     * values for it if they are available. The value of mustSupport SHALL be a
     * FHIRPath resolveable on the type of the DataRequirement. The path SHALL consist
     * only of identifiers, constant indexers, and .resolve() (see the [Simple FHIRPath
     * Profile](fhirpath.html#simple) for full details).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    private $mustSupport = [];

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * The profile of the required data, specified as the uri of the profile
     * definition.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCanonical[]
     */
    private $profile = [];

    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Specifies the order of the results to be returned.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDataRequirement\FHIRDataRequirementSort[]
     */
    private $sort = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The intended subjects of the data requirement. If this element is not provided,
     * a Patient subject is assumed. (choose any one of subject*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $subjectCodeableConcept = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The intended subjects of the data requirement. If this element is not provided,
     * a Patient subject is assumed. (choose any one of subject*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $subjectReference = null;

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * The type of the required data, specified as the type name of a resource. For
     * profiles, this value is set to the type of the base resource of the profile.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    private $type = null;

    /**
     * FHIRDataRequirement Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRDataRequirement::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_CODE_FILTER])) {
            if (is_array($data[self::FIELD_CODE_FILTER])) {
                foreach($data[self::FIELD_CODE_FILTER] as $v) {
                    if ($v instanceof FHIRDataRequirementCodeFilter) {
                        $this->addCodeFilter($v);
                    } else {
                        $this->addCodeFilter(new FHIRDataRequirementCodeFilter($v));
                    }
                }
            } else if ($data[self::FIELD_CODE_FILTER] instanceof FHIRDataRequirementCodeFilter) {
                $this->addCodeFilter($data[self::FIELD_CODE_FILTER]);
            } else {
                $this->addCodeFilter(new FHIRDataRequirementCodeFilter($data[self::FIELD_CODE_FILTER]));
            }
        }
        if (isset($data[self::FIELD_DATE_FILTER])) {
            if (is_array($data[self::FIELD_DATE_FILTER])) {
                foreach($data[self::FIELD_DATE_FILTER] as $v) {
                    if ($v instanceof FHIRDataRequirementDateFilter) {
                        $this->addDateFilter($v);
                    } else {
                        $this->addDateFilter(new FHIRDataRequirementDateFilter($v));
                    }
                }
            } else if ($data[self::FIELD_DATE_FILTER] instanceof FHIRDataRequirementDateFilter) {
                $this->addDateFilter($data[self::FIELD_DATE_FILTER]);
            } else {
                $this->addDateFilter(new FHIRDataRequirementDateFilter($data[self::FIELD_DATE_FILTER]));
            }
        }
        if (isset($data[self::FIELD_LIMIT])) {
            $ext = (isset($data[self::FIELD_LIMIT_EXT]) && is_array($data[self::FIELD_LIMIT_EXT]))
                ? $data[self::FIELD_LIMIT_EXT]
                : null;
            if ($data[self::FIELD_LIMIT] instanceof FHIRPositiveInt) {
                $this->setLimit($data[self::FIELD_LIMIT]);
            } elseif ($ext && is_scalar($data[self::FIELD_LIMIT])) {
                $this->setLimit(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $data[self::FIELD_LIMIT]] + $ext));
            } else {
                $this->setLimit(new FHIRPositiveInt($data[self::FIELD_LIMIT]));
            }
        }
        if (isset($data[self::FIELD_MUST_SUPPORT])) {
            $ext = (isset($data[self::FIELD_MUST_SUPPORT_EXT]) && is_array($data[self::FIELD_MUST_SUPPORT_EXT]))
                ? $data[self::FIELD_MUST_SUPPORT_EXT]
                : null;
            if (is_array($data[self::FIELD_MUST_SUPPORT])) {
                foreach($data[self::FIELD_MUST_SUPPORT] as $i => $v) {
                    if ($v instanceof FHIRString) {
                        $this->addMustSupport($v);
                    } elseif ($ext && is_scalar($v) && isset($ext[$i]) && is_array($ext[$i])) {
                        $this->addMustSupport(new FHIRString([FHIRString::FIELD_VALUE => $v] + $ext[$i]));
                    } else {
                        $this->addMustSupport(new FHIRString($v));
                    }
                }
            } elseif ($data[self::FIELD_MUST_SUPPORT] instanceof FHIRString) {
                $this->addMustSupport($data[self::FIELD_MUST_SUPPORT]);
            } elseif ($ext && is_scalar($data[self::FIELD_MUST_SUPPORT])) {
                $this->addMustSupport(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_MUST_SUPPORT]] + $ext));
            } else {
                $this->addMustSupport(new FHIRString($data[self::FIELD_MUST_SUPPORT]));
            }
        }
        if (isset($data[self::FIELD_PROFILE])) {
            $ext = (isset($data[self::FIELD_PROFILE_EXT]) && is_array($data[self::FIELD_PROFILE_EXT]))
                ? $data[self::FIELD_PROFILE_EXT]
                : null;
            if (is_array($data[self::FIELD_PROFILE])) {
                foreach($data[self::FIELD_PROFILE] as $i => $v) {
                    if ($v instanceof FHIRCanonical) {
                        $this->addProfile($v);
                    } elseif ($ext && is_scalar($v) && isset($ext[$i]) && is_array($ext[$i])) {
                        $this->addProfile(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $v] + $ext[$i]));
                    } else {
                        $this->addProfile(new FHIRCanonical($v));
                    }
                }
            } elseif ($data[self::FIELD_PROFILE] instanceof FHIRCanonical) {
                $this->addProfile($data[self::FIELD_PROFILE]);
            } elseif ($ext && is_scalar($data[self::FIELD_PROFILE])) {
                $this->addProfile(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $data[self::FIELD_PROFILE]] + $ext));
            } else {
                $this->addProfile(new FHIRCanonical($data[self::FIELD_PROFILE]));
            }
        }
        if (isset($data[self::FIELD_SORT])) {
            if (is_array($data[self::FIELD_SORT])) {
                foreach($data[self::FIELD_SORT] as $v) {
                    if ($v instanceof FHIRDataRequirementSort) {
                        $this->addSort($v);
                    } else {
                        $this->addSort(new FHIRDataRequirementSort($v));
                    }
                }
            } else if ($data[self::FIELD_SORT] instanceof FHIRDataRequirementSort) {
                $this->addSort($data[self::FIELD_SORT]);
            } else {
                $this->addSort(new FHIRDataRequirementSort($data[self::FIELD_SORT]));
            }
        }
        if (isset($data[self::FIELD_SUBJECT_CODEABLE_CONCEPT])) {
            if ($data[self::FIELD_SUBJECT_CODEABLE_CONCEPT] instanceof FHIRCodeableConcept) {
                $this->setSubjectCodeableConcept($data[self::FIELD_SUBJECT_CODEABLE_CONCEPT]);
            } else {
                $this->setSubjectCodeableConcept(new FHIRCodeableConcept($data[self::FIELD_SUBJECT_CODEABLE_CONCEPT]));
            }
        }
        if (isset($data[self::FIELD_SUBJECT_REFERENCE])) {
            if ($data[self::FIELD_SUBJECT_REFERENCE] instanceof FHIRReference) {
                $this->setSubjectReference($data[self::FIELD_SUBJECT_REFERENCE]);
            } else {
                $this->setSubjectReference(new FHIRReference($data[self::FIELD_SUBJECT_REFERENCE]));
            }
        }
        if (isset($data[self::FIELD_TYPE])) {
            $ext = (isset($data[self::FIELD_TYPE_EXT]) && is_array($data[self::FIELD_TYPE_EXT]))
                ? $data[self::FIELD_TYPE_EXT]
                : null;
            if ($data[self::FIELD_TYPE] instanceof FHIRCode) {
                $this->setType($data[self::FIELD_TYPE]);
            } elseif ($ext && is_scalar($data[self::FIELD_TYPE])) {
                $this->setType(new FHIRCode([FHIRCode::FIELD_VALUE => $data[self::FIELD_TYPE]] + $ext));
            } else {
                $this->setType(new FHIRCode($data[self::FIELD_TYPE]));
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
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Code filters specify additional constraints on the data, specifying the value
     * set of interest for a particular element of the data. Each code filter defines
     * an additional constraint on the data, i.e. code filters are AND'ed, not OR'ed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDataRequirement\FHIRDataRequirementCodeFilter[]
     */
    public function getCodeFilter()
    {
        return $this->codeFilter;
    }

    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Code filters specify additional constraints on the data, specifying the value
     * set of interest for a particular element of the data. Each code filter defines
     * an additional constraint on the data, i.e. code filters are AND'ed, not OR'ed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDataRequirement\FHIRDataRequirementCodeFilter $codeFilter
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDataRequirement
     */
    public function addCodeFilter(FHIRDataRequirementCodeFilter $codeFilter = null)
    {
        $this->codeFilter[] = $codeFilter;
        return $this;
    }

    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Code filters specify additional constraints on the data, specifying the value
     * set of interest for a particular element of the data. Each code filter defines
     * an additional constraint on the data, i.e. code filters are AND'ed, not OR'ed.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDataRequirement\FHIRDataRequirementCodeFilter[] $codeFilter
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDataRequirement
     */
    public function setCodeFilter(array $codeFilter = [])
    {
        $this->codeFilter = [];
        if ([] === $codeFilter) {
            return $this;
        }
        foreach($codeFilter as $v) {
            if ($v instanceof FHIRDataRequirementCodeFilter) {
                $this->addCodeFilter($v);
            } else {
                $this->addCodeFilter(new FHIRDataRequirementCodeFilter($v));
            }
        }
        return $this;
    }

    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Date filters specify additional constraints on the data in terms of the
     * applicable date range for specific elements. Each date filter specifies an
     * additional constraint on the data, i.e. date filters are AND'ed, not OR'ed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDataRequirement\FHIRDataRequirementDateFilter[]
     */
    public function getDateFilter()
    {
        return $this->dateFilter;
    }

    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Date filters specify additional constraints on the data in terms of the
     * applicable date range for specific elements. Each date filter specifies an
     * additional constraint on the data, i.e. date filters are AND'ed, not OR'ed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDataRequirement\FHIRDataRequirementDateFilter $dateFilter
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDataRequirement
     */
    public function addDateFilter(FHIRDataRequirementDateFilter $dateFilter = null)
    {
        $this->dateFilter[] = $dateFilter;
        return $this;
    }

    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Date filters specify additional constraints on the data in terms of the
     * applicable date range for specific elements. Each date filter specifies an
     * additional constraint on the data, i.e. date filters are AND'ed, not OR'ed.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDataRequirement\FHIRDataRequirementDateFilter[] $dateFilter
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDataRequirement
     */
    public function setDateFilter(array $dateFilter = [])
    {
        $this->dateFilter = [];
        if ([] === $dateFilter) {
            return $this;
        }
        foreach($dateFilter as $v) {
            if ($v instanceof FHIRDataRequirementDateFilter) {
                $this->addDateFilter($v);
            } else {
                $this->addDateFilter(new FHIRDataRequirementDateFilter($v));
            }
        }
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Specifies a maximum number of results that are required (uses the _count search
     * parameter).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Specifies a maximum number of results that are required (uses the _count search
     * parameter).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt $limit
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDataRequirement
     */
    public function setLimit($limit = null)
    {
        if (null === $limit) {
            $this->limit = null;
            return $this;
        }
        if ($limit instanceof FHIRPositiveInt) {
            $this->limit = $limit;
            return $this;
        }
        $this->limit = new FHIRPositiveInt($limit);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Indicates that specific elements of the type are referenced by the knowledge
     * module and must be supported by the consumer in order to obtain an effective
     * evaluation. This does not mean that a value is required for this element, only
     * that the consuming system must understand the element and be able to provide
     * values for it if they are available. The value of mustSupport SHALL be a
     * FHIRPath resolveable on the type of the DataRequirement. The path SHALL consist
     * only of identifiers, constant indexers, and .resolve() (see the [Simple FHIRPath
     * Profile](fhirpath.html#simple) for full details).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    public function getMustSupport()
    {
        return $this->mustSupport;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Indicates that specific elements of the type are referenced by the knowledge
     * module and must be supported by the consumer in order to obtain an effective
     * evaluation. This does not mean that a value is required for this element, only
     * that the consuming system must understand the element and be able to provide
     * values for it if they are available. The value of mustSupport SHALL be a
     * FHIRPath resolveable on the type of the DataRequirement. The path SHALL consist
     * only of identifiers, constant indexers, and .resolve() (see the [Simple FHIRPath
     * Profile](fhirpath.html#simple) for full details).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString $mustSupport
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDataRequirement
     */
    public function addMustSupport($mustSupport = null)
    {
        if (null === $mustSupport) {
            $this->mustSupport = null;
            return $this;
        }
        if ($mustSupport instanceof FHIRString) {
            $this->mustSupport = $mustSupport;
            return $this;
        }
        $this->mustSupport = new FHIRString($mustSupport);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Indicates that specific elements of the type are referenced by the knowledge
     * module and must be supported by the consumer in order to obtain an effective
     * evaluation. This does not mean that a value is required for this element, only
     * that the consuming system must understand the element and be able to provide
     * values for it if they are available. The value of mustSupport SHALL be a
     * FHIRPath resolveable on the type of the DataRequirement. The path SHALL consist
     * only of identifiers, constant indexers, and .resolve() (see the [Simple FHIRPath
     * Profile](fhirpath.html#simple) for full details).
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString[] $mustSupport
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDataRequirement
     */
    public function setMustSupport(array $mustSupport = [])
    {
        $this->mustSupport = [];
        if ([] === $mustSupport) {
            return $this;
        }
        foreach($mustSupport as $v) {
            if ($v instanceof FHIRString) {
                $this->addMustSupport($v);
            } else {
                $this->addMustSupport(new FHIRString($v));
            }
        }
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * The profile of the required data, specified as the uri of the profile
     * definition.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCanonical[]
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * The profile of the required data, specified as the uri of the profile
     * definition.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCanonical $profile
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDataRequirement
     */
    public function addProfile($profile = null)
    {
        if (null === $profile) {
            $this->profile = null;
            return $this;
        }
        if ($profile instanceof FHIRCanonical) {
            $this->profile = $profile;
            return $this;
        }
        $this->profile = new FHIRCanonical($profile);
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * The profile of the required data, specified as the uri of the profile
     * definition.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCanonical[] $profile
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDataRequirement
     */
    public function setProfile(array $profile = [])
    {
        $this->profile = [];
        if ([] === $profile) {
            return $this;
        }
        foreach($profile as $v) {
            if ($v instanceof FHIRCanonical) {
                $this->addProfile($v);
            } else {
                $this->addProfile(new FHIRCanonical($v));
            }
        }
        return $this;
    }

    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Specifies the order of the results to be returned.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDataRequirement\FHIRDataRequirementSort[]
     */
    public function getSort()
    {
        return $this->sort;
    }

    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Specifies the order of the results to be returned.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDataRequirement\FHIRDataRequirementSort $sort
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDataRequirement
     */
    public function addSort(FHIRDataRequirementSort $sort = null)
    {
        $this->sort[] = $sort;
        return $this;
    }

    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Specifies the order of the results to be returned.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDataRequirement\FHIRDataRequirementSort[] $sort
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDataRequirement
     */
    public function setSort(array $sort = [])
    {
        $this->sort = [];
        if ([] === $sort) {
            return $this;
        }
        foreach($sort as $v) {
            if ($v instanceof FHIRDataRequirementSort) {
                $this->addSort($v);
            } else {
                $this->addSort(new FHIRDataRequirementSort($v));
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
     * The intended subjects of the data requirement. If this element is not provided,
     * a Patient subject is assumed. (choose any one of subject*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getSubjectCodeableConcept()
    {
        return $this->subjectCodeableConcept;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The intended subjects of the data requirement. If this element is not provided,
     * a Patient subject is assumed. (choose any one of subject*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $subjectCodeableConcept
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDataRequirement
     */
    public function setSubjectCodeableConcept(FHIRCodeableConcept $subjectCodeableConcept = null)
    {
        $this->subjectCodeableConcept = $subjectCodeableConcept;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The intended subjects of the data requirement. If this element is not provided,
     * a Patient subject is assumed. (choose any one of subject*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSubjectReference()
    {
        return $this->subjectReference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The intended subjects of the data requirement. If this element is not provided,
     * a Patient subject is assumed. (choose any one of subject*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference $subjectReference
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDataRequirement
     */
    public function setSubjectReference(FHIRReference $subjectReference = null)
    {
        $this->subjectReference = $subjectReference;
        return $this;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * The type of the required data, specified as the type name of a resource. For
     * profiles, this value is set to the type of the base resource of the profile.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * The type of the required data, specified as the type name of a resource. For
     * profiles, this value is set to the type of the base resource of the profile.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCode $type
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDataRequirement
     */
    public function setType($type = null)
    {
        if (null === $type) {
            $this->type = null;
            return $this;
        }
        if ($type instanceof FHIRCode) {
            $this->type = $type;
            return $this;
        }
        $this->type = new FHIRCode($type);
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null \$sxe
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDataRequirement $type
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDataRequirement
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
                throw new \DomainException(sprintf('FHIRDataRequirement::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRDataRequirement::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRElement::xmlUnserialize(\$sxe, new FHIRDataRequirement);
        } elseif (!is_object($type) || !($type instanceof FHIRDataRequirement)) {
            throw new \RuntimeException(sprintf(
                'FHIRDataRequirement::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDataRequirement or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->codeFilter)) {
            foreach($children->codeFilter as $child) {
                $type->addCodeFilter(FHIRDataRequirementCodeFilter::xmlUnserialize($child));
            }
        }
        if (isset($children->dateFilter)) {
            foreach($children->dateFilter as $child) {
                $type->addDateFilter(FHIRDataRequirementDateFilter::xmlUnserialize($child));
            }
        }
        if (isset($attributes->limit)) {
            $type->setLimit((string)$attributes->limit);
        }
        if (isset($children->limit)) {
            $type->setLimit(FHIRPositiveInt::xmlUnserialize($children->limit));
        }
        if (isset($attributes->mustSupport)) {
            $type->addMustSupport((string)$attributes->mustSupport);
        }
        if (isset($children->mustSupport)) {
            foreach($children->mustSupport as $child) {
                $type->addMustSupport(FHIRString::xmlUnserialize($child));
            }
        }
        if (isset($attributes->profile)) {
            $type->addProfile((string)$attributes->profile);
        }
        if (isset($children->profile)) {
            foreach($children->profile as $child) {
                $type->addProfile(FHIRCanonical::xmlUnserialize($child));
            }
        }
        if (isset($children->sort)) {
            foreach($children->sort as $child) {
                $type->addSort(FHIRDataRequirementSort::xmlUnserialize($child));
            }
        }
        if (isset($children->subjectCodeableConcept)) {
            $type->setSubjectCodeableConcept(FHIRCodeableConcept::xmlUnserialize($children->subjectCodeableConcept));
        }
        if (isset($children->subjectReference)) {
            $type->setSubjectReference(FHIRReference::xmlUnserialize($children->subjectReference));
        }
        if (isset($attributes->type)) {
            $type->setType((string)$attributes->type);
        }
        if (isset($children->type)) {
            $type->setType(FHIRCode::xmlUnserialize($children->type));
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
            $sxe = new \SimpleXMLElement('<DataRequirement xmlns="http://hl7.org/fhir"></DataRequirement>');
        }
        if ([] !== ($vs = $this->getCodeFilter())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_CODE_FILTER));
            }
        }
        if ([] !== ($vs = $this->getDateFilter())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_DATE_FILTER));
            }
        }
        if (null !== ($v = $this->getLimit())) {
            $sxe->addAttribute(self::FIELD_LIMIT, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_LIMIT));
            }
        }
        if ([] !== ($vs = $this->getMustSupport())) {
            $first = true;
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                if ($first) {
                    $sxe->addAttribute(self::FIELD_MUST_SUPPORT, (string)$v);
                    if (null !== $v->getId() || [] !== $v->getExtension()) {
                        $v->xmlSerialize($sxe->addChild(self::FIELD_MUST_SUPPORT));
                    }
                    $first = false;
                } else {
                    $v->xmlSerialize($sxe->addChild(self::FIELD_MUST_SUPPORT));
                }
            }
        }
        if ([] !== ($vs = $this->getProfile())) {
            $first = true;
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                if ($first) {
                    $sxe->addAttribute(self::FIELD_PROFILE, (string)$v);
                    if (null !== $v->getId() || [] !== $v->getExtension()) {
                        $v->xmlSerialize($sxe->addChild(self::FIELD_PROFILE));
                    }
                    $first = false;
                } else {
                    $v->xmlSerialize($sxe->addChild(self::FIELD_PROFILE));
                }
            }
        }
        if ([] !== ($vs = $this->getSort())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_SORT));
            }
        }
        if (null !== ($v = $this->getSubjectCodeableConcept())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SUBJECT_CODEABLE_CONCEPT));
        }
        if (null !== ($v = $this->getSubjectReference())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SUBJECT_REFERENCE));
        }
        if (null !== ($v = $this->getType())) {
            $sxe->addAttribute(self::FIELD_TYPE, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_TYPE));
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
        if ([] !== ($vs = $this->getCodeFilter())) {
            $a[self::FIELD_CODE_FILTER] = $vs;
        }
        if ([] !== ($vs = $this->getDateFilter())) {
            $a[self::FIELD_DATE_FILTER] = $vs;
        }
        if (null !== ($v = $this->getLimit())) {
            $a[self::FIELD_LIMIT] = (string)$v;
            $a[self::FIELD_LIMIT_EXT] = $v;
        }
        if ([] !== ($vs = $this->getMustSupport())) {
            $a[self::FIELD_MUST_SUPPORT] = [];
            $a[self::FIELD_MUST_SUPPORT_EXT] = [];
            foreach ($vs as $v) {
                $a[self::FIELD_MUST_SUPPORT][] = (string)$v;
                $a[self::FIELD_MUST_SUPPORT_EXT][] = $v;
            }
        }
        if ([] !== ($vs = $this->getProfile())) {
            $a[self::FIELD_PROFILE] = [];
            $a[self::FIELD_PROFILE_EXT] = [];
            foreach ($vs as $v) {
                $a[self::FIELD_PROFILE][] = (string)$v;
                $a[self::FIELD_PROFILE_EXT][] = $v;
            }
        }
        if ([] !== ($vs = $this->getSort())) {
            $a[self::FIELD_SORT] = $vs;
        }
        if (null !== ($v = $this->getSubjectCodeableConcept())) {
            $a[self::FIELD_SUBJECT_CODEABLE_CONCEPT] = $v;
        }
        if (null !== ($v = $this->getSubjectReference())) {
            $a[self::FIELD_SUBJECT_REFERENCE] = $v;
        }
        if (null !== ($v = $this->getType())) {
            $a[self::FIELD_TYPE] = (string)$v;
            $a[self::FIELD_TYPE_EXT] = $v;
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