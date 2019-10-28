<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 28th, 2019 20:54+0000
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

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRInsurancePlan\FHIRInsurancePlanContact;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRInsurancePlan\FHIRInsurancePlanCoverage;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRInsurancePlan\FHIRInsurancePlanPlan;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPublicationStatus;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * Details of a Health Insurance product/plan provided by an organization.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRInsurancePlan
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource
 */
class FHIRInsurancePlan extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_INSURANCE_PLAN;

    /** @var string */
    protected $_xmlns = 'http://hl7.org/fhir';

    const FIELD_ADMINISTERED_BY = 'administeredBy';
    const FIELD_ALIAS = 'alias';
    const FIELD_ALIAS_EXT = '_alias';
    const FIELD_CONTACT = 'contact';
    const FIELD_COVERAGE = 'coverage';
    const FIELD_COVERAGE_AREA = 'coverageArea';
    const FIELD_ENDPOINT = 'endpoint';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_IDENTIFIER_EXT = '_identifier';
    const FIELD_NAME = 'name';
    const FIELD_NAME_EXT = '_name';
    const FIELD_NETWORK = 'network';
    const FIELD_OWNED_BY = 'ownedBy';
    const FIELD_PERIOD = 'period';
    const FIELD_PLAN = 'plan';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';
    const FIELD_TYPE = 'type';

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An organization which administer other services such as underwriting, customer
     * service and/or claims processing on behalf of the health insurance product
     * owner.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected $administeredBy = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A list of alternate names that the product is known as, or was known as in the
     * past.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString[]
     */
    protected $alias = [];

    /**
     * Details of a Health Insurance product/plan provided by an organization.
     *
     * The contact for the health insurance product for a certain purpose.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRInsurancePlan\FHIRInsurancePlanContact[]
     */
    protected $contact = [];

    /**
     * Details of a Health Insurance product/plan provided by an organization.
     *
     * Details about the coverage offered by the insurance product.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRInsurancePlan\FHIRInsurancePlanCoverage[]
     */
    protected $coverage = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The geographic region in which a health insurance product's benefits apply.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    protected $coverageArea = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The technical endpoints providing access to services operated for the health
     * insurance product.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    protected $endpoint = [];

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Business identifiers assigned to this health insurance product which remain
     * constant as the resource is updated and propagates from server to server.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[]
     */
    protected $identifier = [];

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Official name of the health insurance product as designated by the owner.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $name = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reference to the network included in the health insurance product.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    protected $network = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The entity that is providing the health insurance product and underwriting the
     * risk. This is typically an insurance carriers, other third-party payers, or
     * health plan sponsors comonly referred to as 'payers'.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected $ownedBy = null;

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The period of time that the health insurance product is available.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod
     */
    protected $period = null;

    /**
     * Details of a Health Insurance product/plan provided by an organization.
     *
     * Details about an insurance plan.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRInsurancePlan\FHIRInsurancePlanPlan[]
     */
    protected $plan = [];

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The current state of the health insurance product.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPublicationStatus
     */
    protected $status = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The kind of health insurance product.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    protected $type = [];

    /**
     * FHIRInsurancePlan Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRInsurancePlan::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_ADMINISTERED_BY])) {
            if ($data[self::FIELD_ADMINISTERED_BY] instanceof FHIRReference) {
                $this->setAdministeredBy($data[self::FIELD_ADMINISTERED_BY]);
            } else {
                $this->setAdministeredBy(new FHIRReference($data[self::FIELD_ADMINISTERED_BY]));
            }
        }
        if (isset($data[self::FIELD_ALIAS])) {
            $ext = (isset($data[self::FIELD_ALIAS_EXT]) && is_array($data[self::FIELD_ALIAS_EXT]))
                ? $data[self::FIELD_ALIAS_EXT]
                : null;
            if (is_array($data[self::FIELD_ALIAS])) {
                foreach($data[self::FIELD_ALIAS] as $i => $v) {
                    if ($v instanceof FHIRString) {
                        $this->addAlias($v);
                    } elseif ($ext && is_scalar($v) && isset($ext[$i]) && is_array($ext[$i])) {
                        $this->addAlias(new FHIRString([FHIRString::FIELD_VALUE => $v] + $ext[$i]));
                    } else {
                        $this->addAlias(new FHIRString($v));
                    }
                }
            } elseif ($data[self::FIELD_ALIAS] instanceof FHIRString) {
                $this->addAlias($data[self::FIELD_ALIAS]);
            } elseif ($ext && is_scalar($data[self::FIELD_ALIAS])) {
                $this->addAlias(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_ALIAS]] + $ext));
            } else {
                $this->addAlias(new FHIRString($data[self::FIELD_ALIAS]));
            }
        }
        if (isset($data[self::FIELD_CONTACT])) {
            if (is_array($data[self::FIELD_CONTACT])) {
                foreach($data[self::FIELD_CONTACT] as $v) {
                    if ($v instanceof FHIRInsurancePlanContact) {
                        $this->addContact($v);
                    } else {
                        $this->addContact(new FHIRInsurancePlanContact($v));
                    }
                }
            } else if ($data[self::FIELD_CONTACT] instanceof FHIRInsurancePlanContact) {
                $this->addContact($data[self::FIELD_CONTACT]);
            } else {
                $this->addContact(new FHIRInsurancePlanContact($data[self::FIELD_CONTACT]));
            }
        }
        if (isset($data[self::FIELD_COVERAGE])) {
            if (is_array($data[self::FIELD_COVERAGE])) {
                foreach($data[self::FIELD_COVERAGE] as $v) {
                    if ($v instanceof FHIRInsurancePlanCoverage) {
                        $this->addCoverage($v);
                    } else {
                        $this->addCoverage(new FHIRInsurancePlanCoverage($v));
                    }
                }
            } else if ($data[self::FIELD_COVERAGE] instanceof FHIRInsurancePlanCoverage) {
                $this->addCoverage($data[self::FIELD_COVERAGE]);
            } else {
                $this->addCoverage(new FHIRInsurancePlanCoverage($data[self::FIELD_COVERAGE]));
            }
        }
        if (isset($data[self::FIELD_COVERAGE_AREA])) {
            if (is_array($data[self::FIELD_COVERAGE_AREA])) {
                foreach($data[self::FIELD_COVERAGE_AREA] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addCoverageArea($v);
                    } else {
                        $this->addCoverageArea(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_COVERAGE_AREA] instanceof FHIRReference) {
                $this->addCoverageArea($data[self::FIELD_COVERAGE_AREA]);
            } else {
                $this->addCoverageArea(new FHIRReference($data[self::FIELD_COVERAGE_AREA]));
            }
        }
        if (isset($data[self::FIELD_ENDPOINT])) {
            if (is_array($data[self::FIELD_ENDPOINT])) {
                foreach($data[self::FIELD_ENDPOINT] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addEndpoint($v);
                    } else {
                        $this->addEndpoint(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_ENDPOINT] instanceof FHIRReference) {
                $this->addEndpoint($data[self::FIELD_ENDPOINT]);
            } else {
                $this->addEndpoint(new FHIRReference($data[self::FIELD_ENDPOINT]));
            }
        }
        if (isset($data[self::FIELD_IDENTIFIER])) {
            $ext = (isset($data[self::FIELD_IDENTIFIER_EXT]) && is_array($data[self::FIELD_IDENTIFIER_EXT]))
                ? $data[self::FIELD_IDENTIFIER_EXT]
                : null;
            if (is_array($data[self::FIELD_IDENTIFIER])) {
                foreach($data[self::FIELD_IDENTIFIER] as $i => $v) {
                    if ($v instanceof FHIRIdentifier) {
                        $this->addIdentifier($v);
                    } elseif ($ext && is_scalar($v) && isset($ext[$i]) && is_array($ext[$i])) {
                        $this->addIdentifier(new FHIRIdentifier([FHIRIdentifier::FIELD_VALUE => $v] + $ext[$i]));
                    } else {
                        $this->addIdentifier(new FHIRIdentifier($v));
                    }
                }
            } elseif ($data[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->addIdentifier($data[self::FIELD_IDENTIFIER]);
            } elseif ($ext && is_scalar($data[self::FIELD_IDENTIFIER])) {
                $this->addIdentifier(new FHIRIdentifier([FHIRIdentifier::FIELD_VALUE => $data[self::FIELD_IDENTIFIER]] + $ext));
            } else {
                $this->addIdentifier(new FHIRIdentifier($data[self::FIELD_IDENTIFIER]));
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
            if (is_array($data[self::FIELD_NETWORK])) {
                foreach($data[self::FIELD_NETWORK] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addNetwork($v);
                    } else {
                        $this->addNetwork(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_NETWORK] instanceof FHIRReference) {
                $this->addNetwork($data[self::FIELD_NETWORK]);
            } else {
                $this->addNetwork(new FHIRReference($data[self::FIELD_NETWORK]));
            }
        }
        if (isset($data[self::FIELD_OWNED_BY])) {
            if ($data[self::FIELD_OWNED_BY] instanceof FHIRReference) {
                $this->setOwnedBy($data[self::FIELD_OWNED_BY]);
            } else {
                $this->setOwnedBy(new FHIRReference($data[self::FIELD_OWNED_BY]));
            }
        }
        if (isset($data[self::FIELD_PERIOD])) {
            if ($data[self::FIELD_PERIOD] instanceof FHIRPeriod) {
                $this->setPeriod($data[self::FIELD_PERIOD]);
            } else {
                $this->setPeriod(new FHIRPeriod($data[self::FIELD_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_PLAN])) {
            if (is_array($data[self::FIELD_PLAN])) {
                foreach($data[self::FIELD_PLAN] as $v) {
                    if ($v instanceof FHIRInsurancePlanPlan) {
                        $this->addPlan($v);
                    } else {
                        $this->addPlan(new FHIRInsurancePlanPlan($v));
                    }
                }
            } else if ($data[self::FIELD_PLAN] instanceof FHIRInsurancePlanPlan) {
                $this->addPlan($data[self::FIELD_PLAN]);
            } else {
                $this->addPlan(new FHIRInsurancePlanPlan($data[self::FIELD_PLAN]));
            }
        }
        if (isset($data[self::FIELD_STATUS])) {
            $ext = (isset($data[self::FIELD_STATUS_EXT]) && is_array($data[self::FIELD_STATUS_EXT]))
                ? $data[self::FIELD_STATUS_EXT]
                : null;
            if ($data[self::FIELD_STATUS] instanceof FHIRPublicationStatus) {
                $this->setStatus($data[self::FIELD_STATUS]);
            } elseif ($ext && is_scalar($data[self::FIELD_STATUS])) {
                $this->setStatus(new FHIRPublicationStatus([FHIRPublicationStatus::FIELD_VALUE => $data[self::FIELD_STATUS]] + $ext));
            } else {
                $this->setStatus(new FHIRPublicationStatus($data[self::FIELD_STATUS]));
            }
        }
        if (isset($data[self::FIELD_TYPE])) {
            if (is_array($data[self::FIELD_TYPE])) {
                foreach($data[self::FIELD_TYPE] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addType($v);
                    } else {
                        $this->addType(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_TYPE] instanceof FHIRCodeableConcept) {
                $this->addType($data[self::FIELD_TYPE]);
            } else {
                $this->addType(new FHIRCodeableConcept($data[self::FIELD_TYPE]));
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
     * @return static
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
        return "<InsurancePlan{$xmlns}></InsurancePlan>";
    }

    /**
     * @return string
     */
    public function _getResourceType()
    {
        return static::FHIR_TYPE_NAME;
    }


    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An organization which administer other services such as underwriting, customer
     * service and/or claims processing on behalf of the health insurance product
     * owner.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getAdministeredBy()
    {
        return $this->administeredBy;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An organization which administer other services such as underwriting, customer
     * service and/or claims processing on behalf of the health insurance product
     * owner.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $administeredBy
     * @return static
     */
    public function setAdministeredBy(FHIRReference $administeredBy = null)
    {
        $this->administeredBy = $administeredBy;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A list of alternate names that the product is known as, or was known as in the
     * past.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString[]
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A list of alternate names that the product is known as, or was known as in the
     * past.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $alias
     * @return static
     */
    public function addAlias($alias = null)
    {
        if (null === $alias) {
            $this->alias = [];
            return $this;
        }
        if ($alias instanceof FHIRString) {
            $this->alias[] = $alias;
            return $this;
        }
        $this->alias[] = new FHIRString($alias);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A list of alternate names that the product is known as, or was known as in the
     * past.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString[] $alias
     * @return static
     */
    public function setAlias(array $alias = [])
    {
        $this->alias = [];
        if ([] === $alias) {
            return $this;
        }
        foreach($alias as $v) {
            if ($v instanceof FHIRString) {
                $this->addAlias($v);
            } else {
                $this->addAlias(new FHIRString($v));
            }
        }
        return $this;
    }

    /**
     * Details of a Health Insurance product/plan provided by an organization.
     *
     * The contact for the health insurance product for a certain purpose.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRInsurancePlan\FHIRInsurancePlanContact[]
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Details of a Health Insurance product/plan provided by an organization.
     *
     * The contact for the health insurance product for a certain purpose.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRInsurancePlan\FHIRInsurancePlanContact $contact
     * @return static
     */
    public function addContact(FHIRInsurancePlanContact $contact = null)
    {
        $this->contact[] = $contact;
        return $this;
    }

    /**
     * Details of a Health Insurance product/plan provided by an organization.
     *
     * The contact for the health insurance product for a certain purpose.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRInsurancePlan\FHIRInsurancePlanContact[] $contact
     * @return static
     */
    public function setContact(array $contact = [])
    {
        $this->contact = [];
        if ([] === $contact) {
            return $this;
        }
        foreach($contact as $v) {
            if ($v instanceof FHIRInsurancePlanContact) {
                $this->addContact($v);
            } else {
                $this->addContact(new FHIRInsurancePlanContact($v));
            }
        }
        return $this;
    }

    /**
     * Details of a Health Insurance product/plan provided by an organization.
     *
     * Details about the coverage offered by the insurance product.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRInsurancePlan\FHIRInsurancePlanCoverage[]
     */
    public function getCoverage()
    {
        return $this->coverage;
    }

    /**
     * Details of a Health Insurance product/plan provided by an organization.
     *
     * Details about the coverage offered by the insurance product.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRInsurancePlan\FHIRInsurancePlanCoverage $coverage
     * @return static
     */
    public function addCoverage(FHIRInsurancePlanCoverage $coverage = null)
    {
        $this->coverage[] = $coverage;
        return $this;
    }

    /**
     * Details of a Health Insurance product/plan provided by an organization.
     *
     * Details about the coverage offered by the insurance product.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRInsurancePlan\FHIRInsurancePlanCoverage[] $coverage
     * @return static
     */
    public function setCoverage(array $coverage = [])
    {
        $this->coverage = [];
        if ([] === $coverage) {
            return $this;
        }
        foreach($coverage as $v) {
            if ($v instanceof FHIRInsurancePlanCoverage) {
                $this->addCoverage($v);
            } else {
                $this->addCoverage(new FHIRInsurancePlanCoverage($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The geographic region in which a health insurance product's benefits apply.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    public function getCoverageArea()
    {
        return $this->coverageArea;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The geographic region in which a health insurance product's benefits apply.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $coverageArea
     * @return static
     */
    public function addCoverageArea(FHIRReference $coverageArea = null)
    {
        $this->coverageArea[] = $coverageArea;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The geographic region in which a health insurance product's benefits apply.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[] $coverageArea
     * @return static
     */
    public function setCoverageArea(array $coverageArea = [])
    {
        $this->coverageArea = [];
        if ([] === $coverageArea) {
            return $this;
        }
        foreach($coverageArea as $v) {
            if ($v instanceof FHIRReference) {
                $this->addCoverageArea($v);
            } else {
                $this->addCoverageArea(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The technical endpoints providing access to services operated for the health
     * insurance product.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The technical endpoints providing access to services operated for the health
     * insurance product.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $endpoint
     * @return static
     */
    public function addEndpoint(FHIRReference $endpoint = null)
    {
        $this->endpoint[] = $endpoint;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The technical endpoints providing access to services operated for the health
     * insurance product.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[] $endpoint
     * @return static
     */
    public function setEndpoint(array $endpoint = [])
    {
        $this->endpoint = [];
        if ([] === $endpoint) {
            return $this;
        }
        foreach($endpoint as $v) {
            if ($v instanceof FHIRReference) {
                $this->addEndpoint($v);
            } else {
                $this->addEndpoint(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Business identifiers assigned to this health insurance product which remain
     * constant as the resource is updated and propagates from server to server.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Business identifiers assigned to this health insurance product which remain
     * constant as the resource is updated and propagates from server to server.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier $identifier
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Business identifiers assigned to this health insurance product which remain
     * constant as the resource is updated and propagates from server to server.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[] $identifier
     * @return static
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
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Official name of the health insurance product as designated by the owner.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Official name of the health insurance product as designated by the owner.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $name
     * @return static
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
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reference to the network included in the health insurance product.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    public function getNetwork()
    {
        return $this->network;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reference to the network included in the health insurance product.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $network
     * @return static
     */
    public function addNetwork(FHIRReference $network = null)
    {
        $this->network[] = $network;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reference to the network included in the health insurance product.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[] $network
     * @return static
     */
    public function setNetwork(array $network = [])
    {
        $this->network = [];
        if ([] === $network) {
            return $this;
        }
        foreach($network as $v) {
            if ($v instanceof FHIRReference) {
                $this->addNetwork($v);
            } else {
                $this->addNetwork(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The entity that is providing the health insurance product and underwriting the
     * risk. This is typically an insurance carriers, other third-party payers, or
     * health plan sponsors comonly referred to as 'payers'.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getOwnedBy()
    {
        return $this->ownedBy;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The entity that is providing the health insurance product and underwriting the
     * risk. This is typically an insurance carriers, other third-party payers, or
     * health plan sponsors comonly referred to as 'payers'.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $ownedBy
     * @return static
     */
    public function setOwnedBy(FHIRReference $ownedBy = null)
    {
        $this->ownedBy = $ownedBy;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The period of time that the health insurance product is available.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The period of time that the health insurance product is available.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod $period
     * @return static
     */
    public function setPeriod(FHIRPeriod $period = null)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * Details of a Health Insurance product/plan provided by an organization.
     *
     * Details about an insurance plan.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRInsurancePlan\FHIRInsurancePlanPlan[]
     */
    public function getPlan()
    {
        return $this->plan;
    }

    /**
     * Details of a Health Insurance product/plan provided by an organization.
     *
     * Details about an insurance plan.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRInsurancePlan\FHIRInsurancePlanPlan $plan
     * @return static
     */
    public function addPlan(FHIRInsurancePlanPlan $plan = null)
    {
        $this->plan[] = $plan;
        return $this;
    }

    /**
     * Details of a Health Insurance product/plan provided by an organization.
     *
     * Details about an insurance plan.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRInsurancePlan\FHIRInsurancePlanPlan[] $plan
     * @return static
     */
    public function setPlan(array $plan = [])
    {
        $this->plan = [];
        if ([] === $plan) {
            return $this;
        }
        foreach($plan as $v) {
            if ($v instanceof FHIRInsurancePlanPlan) {
                $this->addPlan($v);
            } else {
                $this->addPlan(new FHIRInsurancePlanPlan($v));
            }
        }
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The current state of the health insurance product.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPublicationStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The current state of the health insurance product.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPublicationStatus $status
     * @return static
     */
    public function setStatus(FHIRPublicationStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The kind of health insurance product.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The kind of health insurance product.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $type
     * @return static
     */
    public function addType(FHIRCodeableConcept $type = null)
    {
        $this->type[] = $type;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The kind of health insurance product.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[] $type
     * @return static
     */
    public function setType(array $type = [])
    {
        $this->type = [];
        if ([] === $type) {
            return $this;
        }
        foreach($type as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addType($v);
            } else {
                $this->addType(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRInsurancePlan $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRInsurancePlan
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
                throw new \DomainException(sprintf('FHIRInsurancePlan::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRInsurancePlan::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRInsurancePlan;
        } elseif (!is_object($type) || !($type instanceof FHIRInsurancePlan)) {
            throw new \RuntimeException(sprintf(
                'FHIRInsurancePlan::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRInsurancePlan or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        FHIRDomainResource::xmlUnserialize($sxe, $type);
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->administeredBy)) {
            $type->setAdministeredBy(FHIRReference::xmlUnserialize($children->administeredBy));
        }
        if (isset($attributes->alias)) {
            $type->addAlias((string)$attributes->alias);
        }
        if (isset($children->alias)) {
            foreach($children->alias as $child) {
                $type->addAlias(FHIRString::xmlUnserialize($child));
            }
        }
        if (isset($children->contact)) {
            foreach($children->contact as $child) {
                $type->addContact(FHIRInsurancePlanContact::xmlUnserialize($child));
            }
        }
        if (isset($children->coverage)) {
            foreach($children->coverage as $child) {
                $type->addCoverage(FHIRInsurancePlanCoverage::xmlUnserialize($child));
            }
        }
        if (isset($children->coverageArea)) {
            foreach($children->coverageArea as $child) {
                $type->addCoverageArea(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->endpoint)) {
            foreach($children->endpoint as $child) {
                $type->addEndpoint(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->identifier)) {
            foreach($children->identifier as $child) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($child));
            }
        }
        if (isset($attributes->name)) {
            $type->setName((string)$attributes->name);
        }
        if (isset($children->name)) {
            $type->setName(FHIRString::xmlUnserialize($children->name));
        }
        if (isset($children->network)) {
            foreach($children->network as $child) {
                $type->addNetwork(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->ownedBy)) {
            $type->setOwnedBy(FHIRReference::xmlUnserialize($children->ownedBy));
        }
        if (isset($children->period)) {
            $type->setPeriod(FHIRPeriod::xmlUnserialize($children->period));
        }
        if (isset($children->plan)) {
            foreach($children->plan as $child) {
                $type->addPlan(FHIRInsurancePlanPlan::xmlUnserialize($child));
            }
        }
        if (isset($children->status)) {
            $type->setStatus(FHIRPublicationStatus::xmlUnserialize($children->status));
        }
        if (isset($children->type)) {
            foreach($children->type as $child) {
                $type->addType(FHIRCodeableConcept::xmlUnserialize($child));
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

        if (null !== ($v = $this->getAdministeredBy())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ADMINISTERED_BY, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getAlias())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_ALIAS, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if ([] !== ($vs = $this->getContact())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_CONTACT, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if ([] !== ($vs = $this->getCoverage())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_COVERAGE, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if ([] !== ($vs = $this->getCoverageArea())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_COVERAGE_AREA, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if ([] !== ($vs = $this->getEndpoint())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_ENDPOINT, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getName())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_NAME, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getNetwork())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_NETWORK, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if (null !== ($v = $this->getOwnedBy())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_OWNED_BY, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getPeriod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PERIOD, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getPlan())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PLAN, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if (null !== ($v = $this->getStatus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STATUS, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getType())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_TYPE, null, $v->_getFHIRXMLNamespace()));
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
        if (null !== ($v = $this->getAdministeredBy())) {
            $a[self::FIELD_ADMINISTERED_BY] = $v;
        }
        if ([] !== ($vs = $this->getAlias())) {
            $a[self::FIELD_ALIAS] = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_ALIAS][] = $v->getValue();
                $a[self::FIELD_ALIAS_EXT][] = $v;
            }
        }
        if ([] !== ($vs = $this->getContact())) {
            $a[self::FIELD_CONTACT] = $vs;
        }
        if ([] !== ($vs = $this->getCoverage())) {
            $a[self::FIELD_COVERAGE] = $vs;
        }
        if ([] !== ($vs = $this->getCoverageArea())) {
            $a[self::FIELD_COVERAGE_AREA] = $vs;
        }
        if ([] !== ($vs = $this->getEndpoint())) {
            $a[self::FIELD_ENDPOINT] = $vs;
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = $vs;
        }
        if (null !== ($v = $this->getName())) {
            $a[self::FIELD_NAME] = $v->getValue();
            $a[self::FIELD_NAME_EXT] = $v;
        }
        if ([] !== ($vs = $this->getNetwork())) {
            $a[self::FIELD_NETWORK] = $vs;
        }
        if (null !== ($v = $this->getOwnedBy())) {
            $a[self::FIELD_OWNED_BY] = $v;
        }
        if (null !== ($v = $this->getPeriod())) {
            $a[self::FIELD_PERIOD] = $v;
        }
        if ([] !== ($vs = $this->getPlan())) {
            $a[self::FIELD_PLAN] = $vs;
        }
        if (null !== ($v = $this->getStatus())) {
            $a[self::FIELD_STATUS] = $v;
        }
        if ([] !== ($vs = $this->getType())) {
            $a[self::FIELD_TYPE] = $vs;
        }
        return [PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE => $this->_getResourceType()] + $a;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}