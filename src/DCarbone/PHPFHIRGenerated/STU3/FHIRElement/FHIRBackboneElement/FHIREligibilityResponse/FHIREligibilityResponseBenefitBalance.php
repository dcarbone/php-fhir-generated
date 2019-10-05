<?php

namespace DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIREligibilityResponse;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 5th, 2019 12:57+0000
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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTypeInterface;

/**
 * This resource provides eligibility and plan details from the processing of an
 * Eligibility resource.
 *
 * Class FHIREligibilityResponseBenefitBalance
 * @package \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIREligibilityResponse
 */
class FHIREligibilityResponseBenefitBalance extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_ELIGIBILITY_RESPONSE_DOT_BENEFIT_BALANCE;

    const FIELD_CATEGORY = 'category';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_DESCRIPTION_EXT = '_description';
    const FIELD_EXCLUDED = 'excluded';
    const FIELD_EXCLUDED_EXT = '_excluded';
    const FIELD_FINANCIAL = 'financial';
    const FIELD_NAME = 'name';
    const FIELD_NAME_EXT = '_name';
    const FIELD_NETWORK = 'network';
    const FIELD_SUB_CATEGORY = 'subCategory';
    const FIELD_TERM = 'term';
    const FIELD_UNIT = 'unit';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Dental, Vision, Medical, Pharmacy, Rehab etc.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    private $category = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A richer description of the benefit, for example 'DENT2 covers 100% of basic,
     * 50% of major but exclused Ortho, Implants and Costmetic services'.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    private $description = null;

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * True if the indicated class of service is excluded from the plan, missing or
     * False indicated the service is included in the coverage.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    private $excluded = null;

    /**
     * This resource provides eligibility and plan details from the processing of an
     * Eligibility resource.
     *
     * Benefits Used to date.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIREligibilityResponse\FHIREligibilityResponseFinancial[]
     */
    private $financial = [];

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A short name or tag for the benefit, for example MED01, or DENT2.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    private $name = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Network designation.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    private $network = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Dental: basic, major, ortho; Vision exam, glasses, contacts; etc.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    private $subCategory = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The term or period of the values such as 'maximum lifetime benefit' or 'maximum
     * annual vistis'.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    private $term = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Unit designation: individual or family.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    private $unit = null;

    /**
     * FHIREligibilityResponseBenefitBalance Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIREligibilityResponseBenefitBalance::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_CATEGORY])) {
            if ($data[self::FIELD_CATEGORY] instanceof FHIRCodeableConcept) {
                $this->setCategory($data[self::FIELD_CATEGORY]);
            } else {
                $this->setCategory(new FHIRCodeableConcept($data[self::FIELD_CATEGORY]));
            }
        }
        if (isset($data[self::FIELD_DESCRIPTION])) {
            $ext = (isset($data[self::FIELD_DESCRIPTION_EXT]) && is_array($data[self::FIELD_DESCRIPTION_EXT]))
                ? $data[self::FIELD_DESCRIPTION_EXT]
                : null;
            if ($data[self::FIELD_DESCRIPTION] instanceof FHIRString) {
                $this->setDescription($data[self::FIELD_DESCRIPTION]);
            } elseif ($ext && is_scalar($data[self::FIELD_DESCRIPTION])) {
                $this->setDescription(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_DESCRIPTION]] + $ext));
            } else {
                $this->setDescription(new FHIRString($data[self::FIELD_DESCRIPTION]));
            }
        }
        if (isset($data[self::FIELD_EXCLUDED])) {
            $ext = (isset($data[self::FIELD_EXCLUDED_EXT]) && is_array($data[self::FIELD_EXCLUDED_EXT]))
                ? $data[self::FIELD_EXCLUDED_EXT]
                : null;
            if ($data[self::FIELD_EXCLUDED] instanceof FHIRBoolean) {
                $this->setExcluded($data[self::FIELD_EXCLUDED]);
            } elseif ($ext && is_scalar($data[self::FIELD_EXCLUDED])) {
                $this->setExcluded(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $data[self::FIELD_EXCLUDED]] + $ext));
            } else {
                $this->setExcluded(new FHIRBoolean($data[self::FIELD_EXCLUDED]));
            }
        }
        if (isset($data[self::FIELD_FINANCIAL])) {
            if (is_array($data[self::FIELD_FINANCIAL])) {
                foreach($data[self::FIELD_FINANCIAL] as $v) {
                    if ($v instanceof FHIREligibilityResponseFinancial) {
                        $this->addFinancial($v);
                    } else {
                        $this->addFinancial(new FHIREligibilityResponseFinancial($v));
                    }
                }
            } else if ($data[self::FIELD_FINANCIAL] instanceof FHIREligibilityResponseFinancial) {
                $this->addFinancial($data[self::FIELD_FINANCIAL]);
            } else {
                $this->addFinancial(new FHIREligibilityResponseFinancial($data[self::FIELD_FINANCIAL]));
            }
        }
        if (isset($data[self::FIELD_NAME])) {
            $ext = (isset($data[self::FIELD_NAME_EXT]) && is_array($data[self::FIELD_NAME_EXT]))
                ? $data[self::FIELD_NAME_EXT]
                : null;
            if ($data[self::FIELD_NAME] instanceof FHIRString) {
                $this->setName($data[self::FIELD_NAME]);
            } elseif ($ext && is_scalar($data[self::FIELD_NAME])) {
                $this->setName(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_NAME]] + $ext));
            } else {
                $this->setName(new FHIRString($data[self::FIELD_NAME]));
            }
        }
        if (isset($data[self::FIELD_NETWORK])) {
            if ($data[self::FIELD_NETWORK] instanceof FHIRCodeableConcept) {
                $this->setNetwork($data[self::FIELD_NETWORK]);
            } else {
                $this->setNetwork(new FHIRCodeableConcept($data[self::FIELD_NETWORK]));
            }
        }
        if (isset($data[self::FIELD_SUB_CATEGORY])) {
            if ($data[self::FIELD_SUB_CATEGORY] instanceof FHIRCodeableConcept) {
                $this->setSubCategory($data[self::FIELD_SUB_CATEGORY]);
            } else {
                $this->setSubCategory(new FHIRCodeableConcept($data[self::FIELD_SUB_CATEGORY]));
            }
        }
        if (isset($data[self::FIELD_TERM])) {
            if ($data[self::FIELD_TERM] instanceof FHIRCodeableConcept) {
                $this->setTerm($data[self::FIELD_TERM]);
            } else {
                $this->setTerm(new FHIRCodeableConcept($data[self::FIELD_TERM]));
            }
        }
        if (isset($data[self::FIELD_UNIT])) {
            if ($data[self::FIELD_UNIT] instanceof FHIRCodeableConcept) {
                $this->setUnit($data[self::FIELD_UNIT]);
            } else {
                $this->setUnit(new FHIRCodeableConcept($data[self::FIELD_UNIT]));
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Dental, Vision, Medical, Pharmacy, Rehab etc.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
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
     * Dental, Vision, Medical, Pharmacy, Rehab etc.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $category
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIREligibilityResponse\FHIREligibilityResponseBenefitBalance
     */
    public function setCategory(FHIRCodeableConcept $category = null)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A richer description of the benefit, for example 'DENT2 covers 100% of basic,
     * 50% of major but exclused Ortho, Implants and Costmetic services'.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A richer description of the benefit, for example 'DENT2 covers 100% of basic,
     * 50% of major but exclused Ortho, Implants and Costmetic services'.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $description
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIREligibilityResponse\FHIREligibilityResponseBenefitBalance
     */
    public function setDescription($description = null)
    {
        if (null === $description) {
            $this->description = null;
            return $this;
        }
        if ($description instanceof FHIRString) {
            $this->description = $description;
            return $this;
        }
        $this->description = new FHIRString($description);
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * True if the indicated class of service is excluded from the plan, missing or
     * False indicated the service is included in the coverage.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    public function getExcluded()
    {
        return $this->excluded;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * True if the indicated class of service is excluded from the plan, missing or
     * False indicated the service is included in the coverage.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean $excluded
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIREligibilityResponse\FHIREligibilityResponseBenefitBalance
     */
    public function setExcluded($excluded = null)
    {
        if (null === $excluded) {
            $this->excluded = null;
            return $this;
        }
        if ($excluded instanceof FHIRBoolean) {
            $this->excluded = $excluded;
            return $this;
        }
        $this->excluded = new FHIRBoolean($excluded);
        return $this;
    }

    /**
     * This resource provides eligibility and plan details from the processing of an
     * Eligibility resource.
     *
     * Benefits Used to date.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIREligibilityResponse\FHIREligibilityResponseFinancial[]
     */
    public function getFinancial()
    {
        return $this->financial;
    }

    /**
     * This resource provides eligibility and plan details from the processing of an
     * Eligibility resource.
     *
     * Benefits Used to date.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIREligibilityResponse\FHIREligibilityResponseFinancial $financial
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIREligibilityResponse\FHIREligibilityResponseBenefitBalance
     */
    public function addFinancial(FHIREligibilityResponseFinancial $financial = null)
    {
        $this->financial[] = $financial;
        return $this;
    }

    /**
     * This resource provides eligibility and plan details from the processing of an
     * Eligibility resource.
     *
     * Benefits Used to date.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIREligibilityResponse\FHIREligibilityResponseFinancial[] $financial
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIREligibilityResponse\FHIREligibilityResponseBenefitBalance
     */
    public function setFinancial(array $financial = [])
    {
        $this->financial = [];
        if ([] === $financial) {
            return $this;
        }
        foreach($financial as $v) {
            if ($v instanceof FHIREligibilityResponseFinancial) {
                $this->addFinancial($v);
            } else {
                $this->addFinancial(new FHIREligibilityResponseFinancial($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A short name or tag for the benefit, for example MED01, or DENT2.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A short name or tag for the benefit, for example MED01, or DENT2.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $name
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIREligibilityResponse\FHIREligibilityResponseBenefitBalance
     */
    public function setName($name = null)
    {
        if (null === $name) {
            $this->name = null;
            return $this;
        }
        if ($name instanceof FHIRString) {
            $this->name = $name;
            return $this;
        }
        $this->name = new FHIRString($name);
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Network designation.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    public function getNetwork()
    {
        return $this->network;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Network designation.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $network
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIREligibilityResponse\FHIREligibilityResponseBenefitBalance
     */
    public function setNetwork(FHIRCodeableConcept $network = null)
    {
        $this->network = $network;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Dental: basic, major, ortho; Vision exam, glasses, contacts; etc.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    public function getSubCategory()
    {
        return $this->subCategory;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Dental: basic, major, ortho; Vision exam, glasses, contacts; etc.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $subCategory
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIREligibilityResponse\FHIREligibilityResponseBenefitBalance
     */
    public function setSubCategory(FHIRCodeableConcept $subCategory = null)
    {
        $this->subCategory = $subCategory;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The term or period of the values such as 'maximum lifetime benefit' or 'maximum
     * annual vistis'.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    public function getTerm()
    {
        return $this->term;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The term or period of the values such as 'maximum lifetime benefit' or 'maximum
     * annual vistis'.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $term
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIREligibilityResponse\FHIREligibilityResponseBenefitBalance
     */
    public function setTerm(FHIRCodeableConcept $term = null)
    {
        $this->term = $term;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Unit designation: individual or family.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Unit designation: individual or family.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $unit
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIREligibilityResponse\FHIREligibilityResponseBenefitBalance
     */
    public function setUnit(FHIRCodeableConcept $unit = null)
    {
        $this->unit = $unit;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIREligibilityResponse\FHIREligibilityResponseBenefitBalance $type
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIREligibilityResponse\FHIREligibilityResponseBenefitBalance
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
                throw new \DomainException(sprintf('FHIREligibilityResponseBenefitBalance::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIREligibilityResponseBenefitBalance::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRBackboneElement::xmlUnserialize($sxe, new FHIREligibilityResponseBenefitBalance);
        } elseif (!is_object($type) || !($type instanceof FHIREligibilityResponseBenefitBalance)) {
            throw new \RuntimeException(sprintf(
                'FHIREligibilityResponseBenefitBalance::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIREligibilityResponse\FHIREligibilityResponseBenefitBalance or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->category)) {
            $type->setCategory(FHIRCodeableConcept::xmlUnserialize($children->category));
        }
        if (isset($attributes->description)) {
            $type->setDescription((string)$attributes->description);
        }
        if (isset($children->description)) {
            $type->setDescription(FHIRString::xmlUnserialize($children->description));
        }
        if (isset($attributes->excluded)) {
            $type->setExcluded((string)$attributes->excluded);
        }
        if (isset($children->excluded)) {
            $type->setExcluded(FHIRBoolean::xmlUnserialize($children->excluded));
        }
        if (isset($children->financial)) {
            foreach($children->financial as $child) {
                $type->addFinancial(FHIREligibilityResponseFinancial::xmlUnserialize($child));
            }
        }
        if (isset($attributes->name)) {
            $type->setName((string)$attributes->name);
        }
        if (isset($children->name)) {
            $type->setName(FHIRString::xmlUnserialize($children->name));
        }
        if (isset($children->network)) {
            $type->setNetwork(FHIRCodeableConcept::xmlUnserialize($children->network));
        }
        if (isset($children->subCategory)) {
            $type->setSubCategory(FHIRCodeableConcept::xmlUnserialize($children->subCategory));
        }
        if (isset($children->term)) {
            $type->setTerm(FHIRCodeableConcept::xmlUnserialize($children->term));
        }
        if (isset($children->unit)) {
            $type->setUnit(FHIRCodeableConcept::xmlUnserialize($children->unit));
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
            $sxe = new \SimpleXMLElement('<EligibilityResponseBenefitBalance xmlns="http://hl7.org/fhir"></EligibilityResponseBenefitBalance>');
        }
    parent::xmlSerialize($sxe);

        if (null !== ($v = $this->getCategory())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CATEGORY));
        }
        if (null !== ($v = $this->getDescription())) {
            $sxe->addAttribute(self::FIELD_DESCRIPTION, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_DESCRIPTION));
            }
        }
        if (null !== ($v = $this->getExcluded())) {
            $sxe->addAttribute(self::FIELD_EXCLUDED, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_EXCLUDED));
            }
        }

        if ([] !== ($vs = $this->getFinancial())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_FINANCIAL));
            }
        }
        if (null !== ($v = $this->getName())) {
            $sxe->addAttribute(self::FIELD_NAME, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_NAME));
            }
        }

        if (null !== ($v = $this->getNetwork())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_NETWORK));
        }

        if (null !== ($v = $this->getSubCategory())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SUB_CATEGORY));
        }

        if (null !== ($v = $this->getTerm())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TERM));
        }

        if (null !== ($v = $this->getUnit())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_UNIT));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getCategory())) {
            $a[self::FIELD_CATEGORY] = $v;
        }
        if (null !== ($v = $this->getDescription())) {
            $a[self::FIELD_DESCRIPTION] = (string)$v;
            $a[self::FIELD_DESCRIPTION_EXT] = $v;
        }
        if (null !== ($v = $this->getExcluded())) {
            $a[self::FIELD_EXCLUDED] = (string)$v;
            $a[self::FIELD_EXCLUDED_EXT] = $v;
        }
        if ([] !== ($vs = $this->getFinancial())) {
            $a[self::FIELD_FINANCIAL] = $vs;
        }
        if (null !== ($v = $this->getName())) {
            $a[self::FIELD_NAME] = (string)$v;
            $a[self::FIELD_NAME_EXT] = $v;
        }
        if (null !== ($v = $this->getNetwork())) {
            $a[self::FIELD_NETWORK] = $v;
        }
        if (null !== ($v = $this->getSubCategory())) {
            $a[self::FIELD_SUB_CATEGORY] = $v;
        }
        if (null !== ($v = $this->getTerm())) {
            $a[self::FIELD_TERM] = $v;
        }
        if (null !== ($v = $this->getUnit())) {
            $a[self::FIELD_UNIT] = $v;
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