<?php

namespace DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: August 17th, 2019 18:15+0000
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

use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition\FHIRObservationDefinitionQualifiedInterval;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition\FHIRObservationDefinitionQuantitativeDetails;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRObservationDataType;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\PHPFHIRTypeInterface;

/**
 * Set of definitional characteristics for a kind of observation or measurement
 * produced or consumed by an orderable health care service.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRObservationDefinition
 * @package \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRObservationDefinition extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_OBSERVATION_DEFINITION;

    const FIELD_ABNORMAL_CODED_VALUE_SET = 'abnormalCodedValueSet';
    const FIELD_CATEGORY = 'category';
    const FIELD_CODE = 'code';
    const FIELD_CRITICAL_CODED_VALUE_SET = 'criticalCodedValueSet';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_METHOD = 'method';
    const FIELD_MULTIPLE_RESULTS_ALLOWED = 'multipleResultsAllowed';
    const FIELD_MULTIPLE_RESULTS_ALLOWED_EXT = '_multipleResultsAllowed';
    const FIELD_NORMAL_CODED_VALUE_SET = 'normalCodedValueSet';
    const FIELD_PERMITTED_DATA_TYPE = 'permittedDataType';
    const FIELD_PREFERRED_REPORT_NAME = 'preferredReportName';
    const FIELD_PREFERRED_REPORT_NAME_EXT = '_preferredReportName';
    const FIELD_QUALIFIED_INTERVAL = 'qualifiedInterval';
    const FIELD_QUANTITATIVE_DETAILS = 'quantitativeDetails';
    const FIELD_VALID_CODED_VALUE_SET = 'validCodedValueSet';

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The set of abnormal coded results for the observation conforming to this
     * ObservationDefinition.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $abnormalCodedValueSet = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A code that classifies the general type of observation.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    private $category = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Describes what will be observed. Sometimes this is called the observation
     * "name".
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $code = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The set of critical coded results for the observation conforming to this
     * ObservationDefinition.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $criticalCodedValueSet = null;

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A unique identifier assigned to this ObservationDefinition artifact.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    private $identifier = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The method or technique used to perform the observation.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $method = null;

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Multiple results allowed for observations conforming to this
     * ObservationDefinition.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    private $multipleResultsAllowed = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The set of normal coded results for the observations conforming to this
     * ObservationDefinition.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $normalCodedValueSet = null;

    /**
     * Permitted data type for observation value.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The data types allowed for the value element of the instance observations
     * conforming to this ObservationDefinition.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRObservationDataType[]
     */
    private $permittedDataType = [];

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The preferred name to be used when reporting the results of observations
     * conforming to this ObservationDefinition.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $preferredReportName = null;

    /**
     * Set of definitional characteristics for a kind of observation or measurement
     * produced or consumed by an orderable health care service.
     *
     * Multiple ranges of results qualified by different contexts for ordinal or
     * continuous observations conforming to this ObservationDefinition.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition\FHIRObservationDefinitionQualifiedInterval[]
     */
    private $qualifiedInterval = [];

    /**
     * Set of definitional characteristics for a kind of observation or measurement
     * produced or consumed by an orderable health care service.
     *
     * Characteristics for quantitative results of this observation.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition\FHIRObservationDefinitionQuantitativeDetails
     */
    private $quantitativeDetails = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The set of valid coded results for the observations conforming to this
     * ObservationDefinition.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $validCodedValueSet = null;

    /**
     * FHIRObservationDefinition Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRObservationDefinition::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_ABNORMAL_CODED_VALUE_SET])) {
            if ($data[self::FIELD_ABNORMAL_CODED_VALUE_SET] instanceof FHIRReference) {
                $this->setAbnormalCodedValueSet($data[self::FIELD_ABNORMAL_CODED_VALUE_SET]);
            } else {
                $this->setAbnormalCodedValueSet(new FHIRReference($data[self::FIELD_ABNORMAL_CODED_VALUE_SET]));
            }
        }
        if (isset($data[self::FIELD_CATEGORY])) {
            if (is_array($data[self::FIELD_CATEGORY])) {
                foreach($data[self::FIELD_CATEGORY] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addCategory($v);
                    } else {
                        $this->addCategory(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_CATEGORY] instanceof FHIRCodeableConcept) {
                $this->addCategory($data[self::FIELD_CATEGORY]);
            } else {
                $this->addCategory(new FHIRCodeableConcept($data[self::FIELD_CATEGORY]));
            }
        }
        if (isset($data[self::FIELD_CODE])) {
            if ($data[self::FIELD_CODE] instanceof FHIRCodeableConcept) {
                $this->setCode($data[self::FIELD_CODE]);
            } else {
                $this->setCode(new FHIRCodeableConcept($data[self::FIELD_CODE]));
            }
        }
        if (isset($data[self::FIELD_CRITICAL_CODED_VALUE_SET])) {
            if ($data[self::FIELD_CRITICAL_CODED_VALUE_SET] instanceof FHIRReference) {
                $this->setCriticalCodedValueSet($data[self::FIELD_CRITICAL_CODED_VALUE_SET]);
            } else {
                $this->setCriticalCodedValueSet(new FHIRReference($data[self::FIELD_CRITICAL_CODED_VALUE_SET]));
            }
        }
        if (isset($data[self::FIELD_IDENTIFIER])) {
            if (is_array($data[self::FIELD_IDENTIFIER])) {
                foreach($data[self::FIELD_IDENTIFIER] as $v) {
                    if ($v instanceof FHIRIdentifier) {
                        $this->addIdentifier($v);
                    } else {
                        $this->addIdentifier(new FHIRIdentifier($v));
                    }
                }
            } else if ($data[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->addIdentifier($data[self::FIELD_IDENTIFIER]);
            } else {
                $this->addIdentifier(new FHIRIdentifier($data[self::FIELD_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_METHOD])) {
            if ($data[self::FIELD_METHOD] instanceof FHIRCodeableConcept) {
                $this->setMethod($data[self::FIELD_METHOD]);
            } else {
                $this->setMethod(new FHIRCodeableConcept($data[self::FIELD_METHOD]));
            }
        }
        if (isset($data[self::FIELD_MULTIPLE_RESULTS_ALLOWED])) {
            $ext = (isset($data[self::FIELD_MULTIPLE_RESULTS_ALLOWED_EXT]) && is_array($data[self::FIELD_MULTIPLE_RESULTS_ALLOWED_EXT]))
                ? $data[self::FIELD_MULTIPLE_RESULTS_ALLOWED_EXT]
                : null;
            if ($data[self::FIELD_MULTIPLE_RESULTS_ALLOWED] instanceof FHIRBoolean) {
                $this->setMultipleResultsAllowed($data[self::FIELD_MULTIPLE_RESULTS_ALLOWED]);
            } elseif ($ext && is_scalar($data[self::FIELD_MULTIPLE_RESULTS_ALLOWED])) {
                $this->setMultipleResultsAllowed(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $data[self::FIELD_MULTIPLE_RESULTS_ALLOWED]] + $ext));
            } else {
                $this->setMultipleResultsAllowed(new FHIRBoolean($data[self::FIELD_MULTIPLE_RESULTS_ALLOWED]));
            }
        }
        if (isset($data[self::FIELD_NORMAL_CODED_VALUE_SET])) {
            if ($data[self::FIELD_NORMAL_CODED_VALUE_SET] instanceof FHIRReference) {
                $this->setNormalCodedValueSet($data[self::FIELD_NORMAL_CODED_VALUE_SET]);
            } else {
                $this->setNormalCodedValueSet(new FHIRReference($data[self::FIELD_NORMAL_CODED_VALUE_SET]));
            }
        }
        if (isset($data[self::FIELD_PERMITTED_DATA_TYPE])) {
            if (is_array($data[self::FIELD_PERMITTED_DATA_TYPE])) {
                foreach($data[self::FIELD_PERMITTED_DATA_TYPE] as $v) {
                    if ($v instanceof FHIRObservationDataType) {
                        $this->addPermittedDataType($v);
                    } else {
                        $this->addPermittedDataType(new FHIRObservationDataType($v));
                    }
                }
            } else if ($data[self::FIELD_PERMITTED_DATA_TYPE] instanceof FHIRObservationDataType) {
                $this->addPermittedDataType($data[self::FIELD_PERMITTED_DATA_TYPE]);
            } else {
                $this->addPermittedDataType(new FHIRObservationDataType($data[self::FIELD_PERMITTED_DATA_TYPE]));
            }
        }
        if (isset($data[self::FIELD_PREFERRED_REPORT_NAME])) {
            $ext = (isset($data[self::FIELD_PREFERRED_REPORT_NAME_EXT]) && is_array($data[self::FIELD_PREFERRED_REPORT_NAME_EXT]))
                ? $data[self::FIELD_PREFERRED_REPORT_NAME_EXT]
                : null;
            if ($data[self::FIELD_PREFERRED_REPORT_NAME] instanceof FHIRString) {
                $this->setPreferredReportName($data[self::FIELD_PREFERRED_REPORT_NAME]);
            } elseif ($ext && is_scalar($data[self::FIELD_PREFERRED_REPORT_NAME])) {
                $this->setPreferredReportName(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_PREFERRED_REPORT_NAME]] + $ext));
            } else {
                $this->setPreferredReportName(new FHIRString($data[self::FIELD_PREFERRED_REPORT_NAME]));
            }
        }
        if (isset($data[self::FIELD_QUALIFIED_INTERVAL])) {
            if (is_array($data[self::FIELD_QUALIFIED_INTERVAL])) {
                foreach($data[self::FIELD_QUALIFIED_INTERVAL] as $v) {
                    if ($v instanceof FHIRObservationDefinitionQualifiedInterval) {
                        $this->addQualifiedInterval($v);
                    } else {
                        $this->addQualifiedInterval(new FHIRObservationDefinitionQualifiedInterval($v));
                    }
                }
            } else if ($data[self::FIELD_QUALIFIED_INTERVAL] instanceof FHIRObservationDefinitionQualifiedInterval) {
                $this->addQualifiedInterval($data[self::FIELD_QUALIFIED_INTERVAL]);
            } else {
                $this->addQualifiedInterval(new FHIRObservationDefinitionQualifiedInterval($data[self::FIELD_QUALIFIED_INTERVAL]));
            }
        }
        if (isset($data[self::FIELD_QUANTITATIVE_DETAILS])) {
            if ($data[self::FIELD_QUANTITATIVE_DETAILS] instanceof FHIRObservationDefinitionQuantitativeDetails) {
                $this->setQuantitativeDetails($data[self::FIELD_QUANTITATIVE_DETAILS]);
            } else {
                $this->setQuantitativeDetails(new FHIRObservationDefinitionQuantitativeDetails($data[self::FIELD_QUANTITATIVE_DETAILS]));
            }
        }
        if (isset($data[self::FIELD_VALID_CODED_VALUE_SET])) {
            if ($data[self::FIELD_VALID_CODED_VALUE_SET] instanceof FHIRReference) {
                $this->setValidCodedValueSet($data[self::FIELD_VALID_CODED_VALUE_SET]);
            } else {
                $this->setValidCodedValueSet(new FHIRReference($data[self::FIELD_VALID_CODED_VALUE_SET]));
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
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The set of abnormal coded results for the observation conforming to this
     * ObservationDefinition.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getAbnormalCodedValueSet()
    {
        return $this->abnormalCodedValueSet;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The set of abnormal coded results for the observation conforming to this
     * ObservationDefinition.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference $abnormalCodedValueSet
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRObservationDefinition
     */
    public function setAbnormalCodedValueSet(FHIRReference $abnormalCodedValueSet = null)
    {
        $this->abnormalCodedValueSet = $abnormalCodedValueSet;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A code that classifies the general type of observation.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A code that classifies the general type of observation.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $category
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRObservationDefinition
     */
    public function addCategory(FHIRCodeableConcept $category = null)
    {
        $this->category[] = $category;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A code that classifies the general type of observation.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[] $category
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRObservationDefinition
     */
    public function setCategory(array $category = [])
    {
        $this->category = [];
        if ([] === $category) {
            return $this;
        }
        foreach($category as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addCategory($v);
            } else {
                $this->addCategory(new FHIRCodeableConcept($v));
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
     * Describes what will be observed. Sometimes this is called the observation
     * "name".
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Describes what will be observed. Sometimes this is called the observation
     * "name".
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $code
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRObservationDefinition
     */
    public function setCode(FHIRCodeableConcept $code = null)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The set of critical coded results for the observation conforming to this
     * ObservationDefinition.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getCriticalCodedValueSet()
    {
        return $this->criticalCodedValueSet;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The set of critical coded results for the observation conforming to this
     * ObservationDefinition.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference $criticalCodedValueSet
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRObservationDefinition
     */
    public function setCriticalCodedValueSet(FHIRReference $criticalCodedValueSet = null)
    {
        $this->criticalCodedValueSet = $criticalCodedValueSet;
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A unique identifier assigned to this ObservationDefinition artifact.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A unique identifier assigned to this ObservationDefinition artifact.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRObservationDefinition
     */
    public function addIdentifier(FHIRIdentifier $identifier = null)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A unique identifier assigned to this ObservationDefinition artifact.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRIdentifier[] $identifier
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRObservationDefinition
     */
    public function setIdentifier(array $identifier = [])
    {
        $this->identifier = [];
        if ([] === $identifier) {
            return $this;
        }
        foreach($identifier as $v) {
            if ($v instanceof FHIRIdentifier) {
                $this->addIdentifier($v);
            } else {
                $this->addIdentifier(new FHIRIdentifier($v));
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
     * The method or technique used to perform the observation.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The method or technique used to perform the observation.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $method
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRObservationDefinition
     */
    public function setMethod(FHIRCodeableConcept $method = null)
    {
        $this->method = $method;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Multiple results allowed for observations conforming to this
     * ObservationDefinition.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getMultipleResultsAllowed()
    {
        return $this->multipleResultsAllowed;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Multiple results allowed for observations conforming to this
     * ObservationDefinition.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBoolean $multipleResultsAllowed
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRObservationDefinition
     */
    public function setMultipleResultsAllowed($multipleResultsAllowed = null)
    {
        if (null === $multipleResultsAllowed) {
            $this->multipleResultsAllowed = null;
            return $this;
        }
        if ($multipleResultsAllowed instanceof FHIRBoolean) {
            $this->multipleResultsAllowed = $multipleResultsAllowed;
            return $this;
        }
        $this->multipleResultsAllowed = new FHIRBoolean($multipleResultsAllowed);
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The set of normal coded results for the observations conforming to this
     * ObservationDefinition.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getNormalCodedValueSet()
    {
        return $this->normalCodedValueSet;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The set of normal coded results for the observations conforming to this
     * ObservationDefinition.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference $normalCodedValueSet
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRObservationDefinition
     */
    public function setNormalCodedValueSet(FHIRReference $normalCodedValueSet = null)
    {
        $this->normalCodedValueSet = $normalCodedValueSet;
        return $this;
    }

    /**
     * Permitted data type for observation value.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The data types allowed for the value element of the instance observations
     * conforming to this ObservationDefinition.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRObservationDataType[]
     */
    public function getPermittedDataType()
    {
        return $this->permittedDataType;
    }

    /**
     * Permitted data type for observation value.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The data types allowed for the value element of the instance observations
     * conforming to this ObservationDefinition.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRObservationDataType $permittedDataType
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRObservationDefinition
     */
    public function addPermittedDataType(FHIRObservationDataType $permittedDataType = null)
    {
        $this->permittedDataType[] = $permittedDataType;
        return $this;
    }

    /**
     * Permitted data type for observation value.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The data types allowed for the value element of the instance observations
     * conforming to this ObservationDefinition.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRObservationDataType[] $permittedDataType
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRObservationDefinition
     */
    public function setPermittedDataType(array $permittedDataType = [])
    {
        $this->permittedDataType = [];
        if ([] === $permittedDataType) {
            return $this;
        }
        foreach($permittedDataType as $v) {
            if ($v instanceof FHIRObservationDataType) {
                $this->addPermittedDataType($v);
            } else {
                $this->addPermittedDataType(new FHIRObservationDataType($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The preferred name to be used when reporting the results of observations
     * conforming to this ObservationDefinition.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getPreferredReportName()
    {
        return $this->preferredReportName;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The preferred name to be used when reporting the results of observations
     * conforming to this ObservationDefinition.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString $preferredReportName
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRObservationDefinition
     */
    public function setPreferredReportName($preferredReportName = null)
    {
        if (null === $preferredReportName) {
            $this->preferredReportName = null;
            return $this;
        }
        if ($preferredReportName instanceof FHIRString) {
            $this->preferredReportName = $preferredReportName;
            return $this;
        }
        $this->preferredReportName = new FHIRString($preferredReportName);
        return $this;
    }

    /**
     * Set of definitional characteristics for a kind of observation or measurement
     * produced or consumed by an orderable health care service.
     *
     * Multiple ranges of results qualified by different contexts for ordinal or
     * continuous observations conforming to this ObservationDefinition.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition\FHIRObservationDefinitionQualifiedInterval[]
     */
    public function getQualifiedInterval()
    {
        return $this->qualifiedInterval;
    }

    /**
     * Set of definitional characteristics for a kind of observation or measurement
     * produced or consumed by an orderable health care service.
     *
     * Multiple ranges of results qualified by different contexts for ordinal or
     * continuous observations conforming to this ObservationDefinition.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition\FHIRObservationDefinitionQualifiedInterval $qualifiedInterval
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRObservationDefinition
     */
    public function addQualifiedInterval(FHIRObservationDefinitionQualifiedInterval $qualifiedInterval = null)
    {
        $this->qualifiedInterval[] = $qualifiedInterval;
        return $this;
    }

    /**
     * Set of definitional characteristics for a kind of observation or measurement
     * produced or consumed by an orderable health care service.
     *
     * Multiple ranges of results qualified by different contexts for ordinal or
     * continuous observations conforming to this ObservationDefinition.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition\FHIRObservationDefinitionQualifiedInterval[] $qualifiedInterval
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRObservationDefinition
     */
    public function setQualifiedInterval(array $qualifiedInterval = [])
    {
        $this->qualifiedInterval = [];
        if ([] === $qualifiedInterval) {
            return $this;
        }
        foreach($qualifiedInterval as $v) {
            if ($v instanceof FHIRObservationDefinitionQualifiedInterval) {
                $this->addQualifiedInterval($v);
            } else {
                $this->addQualifiedInterval(new FHIRObservationDefinitionQualifiedInterval($v));
            }
        }
        return $this;
    }

    /**
     * Set of definitional characteristics for a kind of observation or measurement
     * produced or consumed by an orderable health care service.
     *
     * Characteristics for quantitative results of this observation.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition\FHIRObservationDefinitionQuantitativeDetails
     */
    public function getQuantitativeDetails()
    {
        return $this->quantitativeDetails;
    }

    /**
     * Set of definitional characteristics for a kind of observation or measurement
     * produced or consumed by an orderable health care service.
     *
     * Characteristics for quantitative results of this observation.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition\FHIRObservationDefinitionQuantitativeDetails $quantitativeDetails
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRObservationDefinition
     */
    public function setQuantitativeDetails(FHIRObservationDefinitionQuantitativeDetails $quantitativeDetails = null)
    {
        $this->quantitativeDetails = $quantitativeDetails;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The set of valid coded results for the observations conforming to this
     * ObservationDefinition.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getValidCodedValueSet()
    {
        return $this->validCodedValueSet;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The set of valid coded results for the observations conforming to this
     * ObservationDefinition.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference $validCodedValueSet
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRObservationDefinition
     */
    public function setValidCodedValueSet(FHIRReference $validCodedValueSet = null)
    {
        $this->validCodedValueSet = $validCodedValueSet;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null \$sxe
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRObservationDefinition $type
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRObservationDefinition
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
                throw new \DomainException(sprintf('FHIRObservationDefinition::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRObservationDefinition::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRDomainResource::xmlUnserialize(\$sxe, new FHIRObservationDefinition);
        } elseif (!is_object($type) || !($type instanceof FHIRObservationDefinition)) {
            throw new \RuntimeException(sprintf(
                'FHIRObservationDefinition::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRObservationDefinition or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->abnormalCodedValueSet)) {
            $type->setAbnormalCodedValueSet(FHIRReference::xmlUnserialize($children->abnormalCodedValueSet));
        }
        if (isset($children->category)) {
            foreach($children->category as $child) {
                $type->addCategory(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->code)) {
            $type->setCode(FHIRCodeableConcept::xmlUnserialize($children->code));
        }
        if (isset($children->criticalCodedValueSet)) {
            $type->setCriticalCodedValueSet(FHIRReference::xmlUnserialize($children->criticalCodedValueSet));
        }
        if (isset($children->identifier)) {
            foreach($children->identifier as $child) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($child));
            }
        }
        if (isset($children->method)) {
            $type->setMethod(FHIRCodeableConcept::xmlUnserialize($children->method));
        }
        if (isset($attributes->multipleResultsAllowed)) {
            $type->setMultipleResultsAllowed((string)$attributes->multipleResultsAllowed);
        }
        if (isset($children->multipleResultsAllowed)) {
            $type->setMultipleResultsAllowed(FHIRBoolean::xmlUnserialize($children->multipleResultsAllowed));
        }
        if (isset($children->normalCodedValueSet)) {
            $type->setNormalCodedValueSet(FHIRReference::xmlUnserialize($children->normalCodedValueSet));
        }
        if (isset($children->permittedDataType)) {
            foreach($children->permittedDataType as $child) {
                $type->addPermittedDataType(FHIRObservationDataType::xmlUnserialize($child));
            }
        }
        if (isset($attributes->preferredReportName)) {
            $type->setPreferredReportName((string)$attributes->preferredReportName);
        }
        if (isset($children->preferredReportName)) {
            $type->setPreferredReportName(FHIRString::xmlUnserialize($children->preferredReportName));
        }
        if (isset($children->qualifiedInterval)) {
            foreach($children->qualifiedInterval as $child) {
                $type->addQualifiedInterval(FHIRObservationDefinitionQualifiedInterval::xmlUnserialize($child));
            }
        }
        if (isset($children->quantitativeDetails)) {
            $type->setQuantitativeDetails(FHIRObservationDefinitionQuantitativeDetails::xmlUnserialize($children->quantitativeDetails));
        }
        if (isset($children->validCodedValueSet)) {
            $type->setValidCodedValueSet(FHIRReference::xmlUnserialize($children->validCodedValueSet));
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
            $sxe = new \SimpleXMLElement('<ObservationDefinition xmlns="http://hl7.org/fhir"></ObservationDefinition>');
        }
        if (null !== ($v = $this->getAbnormalCodedValueSet())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ABNORMAL_CODED_VALUE_SET));
        }
        if ([] !== ($vs = $this->getCategory())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_CATEGORY));
            }
        }
        if (null !== ($v = $this->getCode())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CODE));
        }
        if (null !== ($v = $this->getCriticalCodedValueSet())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CRITICAL_CODED_VALUE_SET));
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER));
            }
        }
        if (null !== ($v = $this->getMethod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_METHOD));
        }
        if (null !== ($v = $this->getMultipleResultsAllowed())) {
            $sxe->addAttribute(self::FIELD_MULTIPLE_RESULTS_ALLOWED, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_MULTIPLE_RESULTS_ALLOWED));
            }
        }
        if (null !== ($v = $this->getNormalCodedValueSet())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_NORMAL_CODED_VALUE_SET));
        }
        if ([] !== ($vs = $this->getPermittedDataType())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PERMITTED_DATA_TYPE));
            }
        }
        if (null !== ($v = $this->getPreferredReportName())) {
            $sxe->addAttribute(self::FIELD_PREFERRED_REPORT_NAME, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_PREFERRED_REPORT_NAME));
            }
        }
        if ([] !== ($vs = $this->getQualifiedInterval())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_QUALIFIED_INTERVAL));
            }
        }
        if (null !== ($v = $this->getQuantitativeDetails())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_QUANTITATIVE_DETAILS));
        }
        if (null !== ($v = $this->getValidCodedValueSet())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALID_CODED_VALUE_SET));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getAbnormalCodedValueSet())) {
            $a[self::FIELD_ABNORMAL_CODED_VALUE_SET] = $v;
        }
        if ([] !== ($vs = $this->getCategory())) {
            $a[self::FIELD_CATEGORY] = $vs;
        }
        if (null !== ($v = $this->getCode())) {
            $a[self::FIELD_CODE] = $v;
        }
        if (null !== ($v = $this->getCriticalCodedValueSet())) {
            $a[self::FIELD_CRITICAL_CODED_VALUE_SET] = $v;
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = $vs;
        }
        if (null !== ($v = $this->getMethod())) {
            $a[self::FIELD_METHOD] = $v;
        }
        if (null !== ($v = $this->getMultipleResultsAllowed())) {
            $a[self::FIELD_MULTIPLE_RESULTS_ALLOWED] = (string)$v;
            $a[self::FIELD_MULTIPLE_RESULTS_ALLOWED_EXT] = $v;
        }
        if (null !== ($v = $this->getNormalCodedValueSet())) {
            $a[self::FIELD_NORMAL_CODED_VALUE_SET] = $v;
        }
        if ([] !== ($vs = $this->getPermittedDataType())) {
            $a[self::FIELD_PERMITTED_DATA_TYPE] = $vs;
        }
        if (null !== ($v = $this->getPreferredReportName())) {
            $a[self::FIELD_PREFERRED_REPORT_NAME] = (string)$v;
            $a[self::FIELD_PREFERRED_REPORT_NAME_EXT] = $v;
        }
        if ([] !== ($vs = $this->getQualifiedInterval())) {
            $a[self::FIELD_QUALIFIED_INTERVAL] = $vs;
        }
        if (null !== ($v = $this->getQuantitativeDetails())) {
            $a[self::FIELD_QUANTITATIVE_DETAILS] = $v;
        }
        if (null !== ($v = $this->getValidCodedValueSet())) {
            $a[self::FIELD_VALID_CODED_VALUE_SET] = $v;
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