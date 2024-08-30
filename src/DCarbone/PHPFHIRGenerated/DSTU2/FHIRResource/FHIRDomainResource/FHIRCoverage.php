<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: August 30th, 2024 22:23+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2024 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 *   Generated on Sat, Oct 24, 2015 07:41+1100 for FHIR v1.0.2
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\DSTU2\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRMeta;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPositiveInt;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRPositiveIntPrimitive;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConfig;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConfigKeyEnum;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRTypeInterface;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRTypeMap;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRXmlLocationEnum;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRXmlWriter;

/**
 * Financial instrument which may be used to pay for or reimburse health care
 * products and services.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRCoverage
 * @package \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource
 */
class FHIRCoverage extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_COVERAGE;

    const FIELD_ISSUER = 'issuer';
    const FIELD_BIN = 'bin';
    const FIELD_PERIOD = 'period';
    const FIELD_TYPE = 'type';
    const FIELD_SUBSCRIBER_ID = 'subscriberId';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_GROUP = 'group';
    const FIELD_GROUP_EXT = '_group';
    const FIELD_PLAN = 'plan';
    const FIELD_PLAN_EXT = '_plan';
    const FIELD_SUB_PLAN = 'subPlan';
    const FIELD_SUB_PLAN_EXT = '_subPlan';
    const FIELD_DEPENDENT = 'dependent';
    const FIELD_DEPENDENT_EXT = '_dependent';
    const FIELD_SEQUENCE = 'sequence';
    const FIELD_SEQUENCE_EXT = '_sequence';
    const FIELD_SUBSCRIBER = 'subscriber';
    const FIELD_NETWORK = 'network';
    const FIELD_CONTRACT = 'contract';

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The program or plan underwriter or payor.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $issuer = null;
    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Business Identification Number (BIN number) used to identify the routing of
     * eclaims if the insurer themselves don't have a BIN number for all of their
     * business.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier
     */
    protected null|FHIRIdentifier $bin = null;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Time period during which the coverage is in force. A missing start date
     * indicates the start date isn't known, a missing end date means the coverage is
     * continuing to be in force.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPeriod
     */
    protected null|FHIRPeriod $period = null;
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of coverage: social program, medical plan, accident coverage (workers
     * compensation, auto), group health.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding
     */
    protected null|FHIRCoding $type = null;
    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The id issued to the subscriber.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier
     */
    protected null|FHIRIdentifier $subscriberId = null;
    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The main (and possibly only) identifier for the coverage - often referred to as
     * a Member Id, Subscriber Id, Certificate number or Personal Health Number or Case
     * ID.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier[]
     */
    protected null|array $identifier = [];
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies a style or collective of coverage issues by the underwriter, for
     * example may be used to identify a class of coverage or employer group. May also
     * be referred to as a Policy or Group ID.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    protected null|FHIRString $group = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies a style or collective of coverage issues by the underwriter, for
     * example may be used to identify a class of coverage or employer group. May also
     * be referred to as a Policy or Group ID.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    protected null|FHIRString $plan = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies a sub-style or sub-collective of coverage issues by the underwriter,
     * for example may be used to identify a specific employer group within a class of
     * employers. May be referred to as a Section or Division ID.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    protected null|FHIRString $subPlan = null;
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A unique identifier for a dependent under the coverage.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPositiveInt
     */
    protected null|FHIRPositiveInt $dependent = null;
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * An optional counter for a particular instance of the identified coverage which
     * increments upon each renewal.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPositiveInt
     */
    protected null|FHIRPositiveInt $sequence = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The party who 'owns' the insurance contractual relationship to the policy or to
     * whom the benefit of the policy is due.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $subscriber = null;
    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The identifier for a community of providers.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier
     */
    protected null|FHIRIdentifier $network = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The policy(s) which constitute this insurance coverage.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference[]
     */
    protected null|array $contract = [];

    /**
     * Validation map for fields in type Coverage
     * @var array
     */
    private const _VALIDATION_RULES = [];

    /** @var array */
    private array $_xmlLocations = [];

    /**
     * FHIRCoverage Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_ISSUER, $data)) {
            if ($data[self::FIELD_ISSUER] instanceof FHIRReference) {
                $this->setIssuer($data[self::FIELD_ISSUER]);
            } else {
                $this->setIssuer(new FHIRReference($data[self::FIELD_ISSUER]));
            }
        }
        if (array_key_exists(self::FIELD_BIN, $data)) {
            if ($data[self::FIELD_BIN] instanceof FHIRIdentifier) {
                $this->setBin($data[self::FIELD_BIN]);
            } else {
                $this->setBin(new FHIRIdentifier($data[self::FIELD_BIN]));
            }
        }
        if (array_key_exists(self::FIELD_PERIOD, $data)) {
            if ($data[self::FIELD_PERIOD] instanceof FHIRPeriod) {
                $this->setPeriod($data[self::FIELD_PERIOD]);
            } else {
                $this->setPeriod(new FHIRPeriod($data[self::FIELD_PERIOD]));
            }
        }
        if (array_key_exists(self::FIELD_TYPE, $data)) {
            if ($data[self::FIELD_TYPE] instanceof FHIRCoding) {
                $this->setType($data[self::FIELD_TYPE]);
            } else {
                $this->setType(new FHIRCoding($data[self::FIELD_TYPE]));
            }
        }
        if (array_key_exists(self::FIELD_SUBSCRIBER_ID, $data)) {
            if ($data[self::FIELD_SUBSCRIBER_ID] instanceof FHIRIdentifier) {
                $this->setSubscriberId($data[self::FIELD_SUBSCRIBER_ID]);
            } else {
                $this->setSubscriberId(new FHIRIdentifier($data[self::FIELD_SUBSCRIBER_ID]));
            }
        }
        if (array_key_exists(self::FIELD_IDENTIFIER, $data)) {
            if (is_array($data[self::FIELD_IDENTIFIER])) {
                foreach($data[self::FIELD_IDENTIFIER] as $v) {
                    if ($v instanceof FHIRIdentifier) {
                        $this->addIdentifier($v);
                    } else {
                        $this->addIdentifier(new FHIRIdentifier($v));
                    }
                }
            } elseif ($data[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->addIdentifier($data[self::FIELD_IDENTIFIER]);
            } else {
                $this->addIdentifier(new FHIRIdentifier($data[self::FIELD_IDENTIFIER]));
            }
        }
        if (array_key_exists(self::FIELD_GROUP, $data) || array_key_exists(self::FIELD_GROUP_EXT, $data)) {
            $value = $data[self::FIELD_GROUP] ?? null;
            $ext = (isset($data[self::FIELD_GROUP_EXT]) && is_array($data[self::FIELD_GROUP_EXT])) ? $data[self::FIELD_GROUP_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setGroup($value);
                } else if (is_array($value)) {
                    $this->setGroup(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setGroup(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setGroup(new FHIRString($ext));
            } else {
                $this->setGroup(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_PLAN, $data) || array_key_exists(self::FIELD_PLAN_EXT, $data)) {
            $value = $data[self::FIELD_PLAN] ?? null;
            $ext = (isset($data[self::FIELD_PLAN_EXT]) && is_array($data[self::FIELD_PLAN_EXT])) ? $data[self::FIELD_PLAN_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setPlan($value);
                } else if (is_array($value)) {
                    $this->setPlan(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setPlan(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setPlan(new FHIRString($ext));
            } else {
                $this->setPlan(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_SUB_PLAN, $data) || array_key_exists(self::FIELD_SUB_PLAN_EXT, $data)) {
            $value = $data[self::FIELD_SUB_PLAN] ?? null;
            $ext = (isset($data[self::FIELD_SUB_PLAN_EXT]) && is_array($data[self::FIELD_SUB_PLAN_EXT])) ? $data[self::FIELD_SUB_PLAN_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setSubPlan($value);
                } else if (is_array($value)) {
                    $this->setSubPlan(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setSubPlan(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setSubPlan(new FHIRString($ext));
            } else {
                $this->setSubPlan(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_DEPENDENT, $data) || array_key_exists(self::FIELD_DEPENDENT_EXT, $data)) {
            $value = $data[self::FIELD_DEPENDENT] ?? null;
            $ext = (isset($data[self::FIELD_DEPENDENT_EXT]) && is_array($data[self::FIELD_DEPENDENT_EXT])) ? $data[self::FIELD_DEPENDENT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRPositiveInt) {
                    $this->setDependent($value);
                } else if (is_array($value)) {
                    $this->setDependent(new FHIRPositiveInt(array_merge($ext, $value)));
                } else {
                    $this->setDependent(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDependent(new FHIRPositiveInt($ext));
            } else {
                $this->setDependent(new FHIRPositiveInt(null));
            }
        }
        if (array_key_exists(self::FIELD_SEQUENCE, $data) || array_key_exists(self::FIELD_SEQUENCE_EXT, $data)) {
            $value = $data[self::FIELD_SEQUENCE] ?? null;
            $ext = (isset($data[self::FIELD_SEQUENCE_EXT]) && is_array($data[self::FIELD_SEQUENCE_EXT])) ? $data[self::FIELD_SEQUENCE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRPositiveInt) {
                    $this->setSequence($value);
                } else if (is_array($value)) {
                    $this->setSequence(new FHIRPositiveInt(array_merge($ext, $value)));
                } else {
                    $this->setSequence(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setSequence(new FHIRPositiveInt($ext));
            } else {
                $this->setSequence(new FHIRPositiveInt(null));
            }
        }
        if (array_key_exists(self::FIELD_SUBSCRIBER, $data)) {
            if ($data[self::FIELD_SUBSCRIBER] instanceof FHIRReference) {
                $this->setSubscriber($data[self::FIELD_SUBSCRIBER]);
            } else {
                $this->setSubscriber(new FHIRReference($data[self::FIELD_SUBSCRIBER]));
            }
        }
        if (array_key_exists(self::FIELD_NETWORK, $data)) {
            if ($data[self::FIELD_NETWORK] instanceof FHIRIdentifier) {
                $this->setNetwork($data[self::FIELD_NETWORK]);
            } else {
                $this->setNetwork(new FHIRIdentifier($data[self::FIELD_NETWORK]));
            }
        }
        if (array_key_exists(self::FIELD_CONTRACT, $data)) {
            if (is_array($data[self::FIELD_CONTRACT])) {
                foreach($data[self::FIELD_CONTRACT] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addContract($v);
                    } else {
                        $this->addContract(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_CONTRACT] instanceof FHIRReference) {
                $this->addContract($data[self::FIELD_CONTRACT]);
            } else {
                $this->addContract(new FHIRReference($data[self::FIELD_CONTRACT]));
            }
        }
    }

    /**
     * @return string
     */
    public function _getFhirTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * @return string
     */
    public function _getResourceType(): string
    {
        return static::FHIR_TYPE_NAME;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The program or plan underwriter or payor.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    public function getIssuer(): null|FHIRReference
    {
        return $this->issuer;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The program or plan underwriter or payor.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $issuer
     * @return static
     */
    public function setIssuer(null|FHIRReference $issuer = null): self
    {
        if (null === $issuer) {
            $issuer = new FHIRReference();
        }
        $this->_trackValueSet($this->issuer, $issuer);
        $this->issuer = $issuer;
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Business Identification Number (BIN number) used to identify the routing of
     * eclaims if the insurer themselves don't have a BIN number for all of their
     * business.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier
     */
    public function getBin(): null|FHIRIdentifier
    {
        return $this->bin;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Business Identification Number (BIN number) used to identify the routing of
     * eclaims if the insurer themselves don't have a BIN number for all of their
     * business.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier $bin
     * @return static
     */
    public function setBin(null|FHIRIdentifier $bin = null): self
    {
        if (null === $bin) {
            $bin = new FHIRIdentifier();
        }
        $this->_trackValueSet($this->bin, $bin);
        $this->bin = $bin;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Time period during which the coverage is in force. A missing start date
     * indicates the start date isn't known, a missing end date means the coverage is
     * continuing to be in force.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPeriod
     */
    public function getPeriod(): null|FHIRPeriod
    {
        return $this->period;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Time period during which the coverage is in force. A missing start date
     * indicates the start date isn't known, a missing end date means the coverage is
     * continuing to be in force.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPeriod $period
     * @return static
     */
    public function setPeriod(null|FHIRPeriod $period = null): self
    {
        if (null === $period) {
            $period = new FHIRPeriod();
        }
        $this->_trackValueSet($this->period, $period);
        $this->period = $period;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of coverage: social program, medical plan, accident coverage (workers
     * compensation, auto), group health.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding
     */
    public function getType(): null|FHIRCoding
    {
        return $this->type;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of coverage: social program, medical plan, accident coverage (workers
     * compensation, auto), group health.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding $type
     * @return static
     */
    public function setType(null|FHIRCoding $type = null): self
    {
        if (null === $type) {
            $type = new FHIRCoding();
        }
        $this->_trackValueSet($this->type, $type);
        $this->type = $type;
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The id issued to the subscriber.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier
     */
    public function getSubscriberId(): null|FHIRIdentifier
    {
        return $this->subscriberId;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The id issued to the subscriber.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier $subscriberId
     * @return static
     */
    public function setSubscriberId(null|FHIRIdentifier $subscriberId = null): self
    {
        if (null === $subscriberId) {
            $subscriberId = new FHIRIdentifier();
        }
        $this->_trackValueSet($this->subscriberId, $subscriberId);
        $this->subscriberId = $subscriberId;
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The main (and possibly only) identifier for the coverage - often referred to as
     * a Member Id, Subscriber Id, Certificate number or Personal Health Number or Case
     * ID.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier(): null|array
    {
        return $this->identifier;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The main (and possibly only) identifier for the coverage - often referred to as
     * a Member Id, Subscriber Id, Certificate number or Personal Health Number or Case
     * ID.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier $identifier
     * @return static
     */
    public function addIdentifier(null|FHIRIdentifier $identifier = null): self
    {
        if (null === $identifier) {
            $identifier = new FHIRIdentifier();
        }
        $this->_trackValueAdded();
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The main (and possibly only) identifier for the coverage - often referred to as
     * a Member Id, Subscriber Id, Certificate number or Personal Health Number or Case
     * ID.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier ...$identifier
     * @return static
     */
    public function setIdentifier(FHIRIdentifier ...$identifier): self
    {
        if ([] !== $this->identifier) {
            $this->_trackValuesRemoved(count($this->identifier));
            $this->identifier = [];
        }
        if ([] === $identifier) {
            return $this;
        }
        foreach($identifier as $v) {
            $this->addIdentifier($v);
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies a style or collective of coverage issues by the underwriter, for
     * example may be used to identify a class of coverage or employer group. May also
     * be referred to as a Policy or Group ID.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    public function getGroup(): null|FHIRString
    {
        return $this->group;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies a style or collective of coverage issues by the underwriter, for
     * example may be used to identify a class of coverage or employer group. May also
     * be referred to as a Policy or Group ID.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $group
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setGroup(null|string|FHIRStringPrimitive|FHIRString $group = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $group && !($group instanceof FHIRString)) {
            $group = new FHIRString($group);
        }
        $this->_trackValueSet($this->group, $group);
        if (!isset($this->_xmlLocations[self::FIELD_GROUP])) {
            $this->_xmlLocations[self::FIELD_GROUP] = [];
        }
        $this->_xmlLocations[self::FIELD_GROUP][0] = $xmlLocation;
        $this->group = $group;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies a style or collective of coverage issues by the underwriter, for
     * example may be used to identify a class of coverage or employer group. May also
     * be referred to as a Policy or Group ID.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    public function getPlan(): null|FHIRString
    {
        return $this->plan;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies a style or collective of coverage issues by the underwriter, for
     * example may be used to identify a class of coverage or employer group. May also
     * be referred to as a Policy or Group ID.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $plan
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setPlan(null|string|FHIRStringPrimitive|FHIRString $plan = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $plan && !($plan instanceof FHIRString)) {
            $plan = new FHIRString($plan);
        }
        $this->_trackValueSet($this->plan, $plan);
        if (!isset($this->_xmlLocations[self::FIELD_PLAN])) {
            $this->_xmlLocations[self::FIELD_PLAN] = [];
        }
        $this->_xmlLocations[self::FIELD_PLAN][0] = $xmlLocation;
        $this->plan = $plan;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies a sub-style or sub-collective of coverage issues by the underwriter,
     * for example may be used to identify a specific employer group within a class of
     * employers. May be referred to as a Section or Division ID.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    public function getSubPlan(): null|FHIRString
    {
        return $this->subPlan;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies a sub-style or sub-collective of coverage issues by the underwriter,
     * for example may be used to identify a specific employer group within a class of
     * employers. May be referred to as a Section or Division ID.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $subPlan
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setSubPlan(null|string|FHIRStringPrimitive|FHIRString $subPlan = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $subPlan && !($subPlan instanceof FHIRString)) {
            $subPlan = new FHIRString($subPlan);
        }
        $this->_trackValueSet($this->subPlan, $subPlan);
        if (!isset($this->_xmlLocations[self::FIELD_SUB_PLAN])) {
            $this->_xmlLocations[self::FIELD_SUB_PLAN] = [];
        }
        $this->_xmlLocations[self::FIELD_SUB_PLAN][0] = $xmlLocation;
        $this->subPlan = $subPlan;
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A unique identifier for a dependent under the coverage.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPositiveInt
     */
    public function getDependent(): null|FHIRPositiveInt
    {
        return $this->dependent;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A unique identifier for a dependent under the coverage.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPositiveInt $dependent
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDependent(null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $dependent = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $dependent && !($dependent instanceof FHIRPositiveInt)) {
            $dependent = new FHIRPositiveInt($dependent);
        }
        $this->_trackValueSet($this->dependent, $dependent);
        if (!isset($this->_xmlLocations[self::FIELD_DEPENDENT])) {
            $this->_xmlLocations[self::FIELD_DEPENDENT] = [];
        }
        $this->_xmlLocations[self::FIELD_DEPENDENT][0] = $xmlLocation;
        $this->dependent = $dependent;
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * An optional counter for a particular instance of the identified coverage which
     * increments upon each renewal.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPositiveInt
     */
    public function getSequence(): null|FHIRPositiveInt
    {
        return $this->sequence;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * An optional counter for a particular instance of the identified coverage which
     * increments upon each renewal.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPositiveInt $sequence
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setSequence(null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $sequence = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $sequence && !($sequence instanceof FHIRPositiveInt)) {
            $sequence = new FHIRPositiveInt($sequence);
        }
        $this->_trackValueSet($this->sequence, $sequence);
        if (!isset($this->_xmlLocations[self::FIELD_SEQUENCE])) {
            $this->_xmlLocations[self::FIELD_SEQUENCE] = [];
        }
        $this->_xmlLocations[self::FIELD_SEQUENCE][0] = $xmlLocation;
        $this->sequence = $sequence;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The party who 'owns' the insurance contractual relationship to the policy or to
     * whom the benefit of the policy is due.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    public function getSubscriber(): null|FHIRReference
    {
        return $this->subscriber;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The party who 'owns' the insurance contractual relationship to the policy or to
     * whom the benefit of the policy is due.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $subscriber
     * @return static
     */
    public function setSubscriber(null|FHIRReference $subscriber = null): self
    {
        if (null === $subscriber) {
            $subscriber = new FHIRReference();
        }
        $this->_trackValueSet($this->subscriber, $subscriber);
        $this->subscriber = $subscriber;
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The identifier for a community of providers.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier
     */
    public function getNetwork(): null|FHIRIdentifier
    {
        return $this->network;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The identifier for a community of providers.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier $network
     * @return static
     */
    public function setNetwork(null|FHIRIdentifier $network = null): self
    {
        if (null === $network) {
            $network = new FHIRIdentifier();
        }
        $this->_trackValueSet($this->network, $network);
        $this->network = $network;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The policy(s) which constitute this insurance coverage.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference[]
     */
    public function getContract(): null|array
    {
        return $this->contract;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The policy(s) which constitute this insurance coverage.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $contract
     * @return static
     */
    public function addContract(null|FHIRReference $contract = null): self
    {
        if (null === $contract) {
            $contract = new FHIRReference();
        }
        $this->_trackValueAdded();
        $this->contract[] = $contract;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The policy(s) which constitute this insurance coverage.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference ...$contract
     * @return static
     */
    public function setContract(FHIRReference ...$contract): self
    {
        if ([] !== $this->contract) {
            $this->_trackValuesRemoved(count($this->contract));
            $this->contract = [];
        }
        if ([] === $contract) {
            return $this;
        }
        foreach($contract as $v) {
            $this->addContract($v);
        }
        return $this;
    }

    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules(): array
    {
        return self::_VALIDATION_RULES;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by FHIR.  An empty array must be seen as
     * passing.
     *
     * @return array
     */
    public function _getValidationErrors(): array
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if (null !== ($v = $this->getIssuer())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ISSUER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getBin())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_BIN] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPeriod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PERIOD] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TYPE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSubscriberId())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SUBSCRIBER_ID] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_IDENTIFIER, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getGroup())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_GROUP] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPlan())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PLAN] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSubPlan())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SUB_PLAN] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDependent())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEPENDENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSequence())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SEQUENCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSubscriber())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SUBSCRIBER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getNetwork())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_NETWORK] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getContract())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CONTRACT, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ISSUER])) {
            $v = $this->getIssuer();
            foreach($validationRules[self::FIELD_ISSUER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE, self::FIELD_ISSUER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ISSUER])) {
                        $errs[self::FIELD_ISSUER] = [];
                    }
                    $errs[self::FIELD_ISSUER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_BIN])) {
            $v = $this->getBin();
            foreach($validationRules[self::FIELD_BIN] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE, self::FIELD_BIN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_BIN])) {
                        $errs[self::FIELD_BIN] = [];
                    }
                    $errs[self::FIELD_BIN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PERIOD])) {
            $v = $this->getPeriod();
            foreach($validationRules[self::FIELD_PERIOD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE, self::FIELD_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PERIOD])) {
                        $errs[self::FIELD_PERIOD] = [];
                    }
                    $errs[self::FIELD_PERIOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TYPE])) {
            $v = $this->getType();
            foreach($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE, self::FIELD_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE])) {
                        $errs[self::FIELD_TYPE] = [];
                    }
                    $errs[self::FIELD_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUBSCRIBER_ID])) {
            $v = $this->getSubscriberId();
            foreach($validationRules[self::FIELD_SUBSCRIBER_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE, self::FIELD_SUBSCRIBER_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUBSCRIBER_ID])) {
                        $errs[self::FIELD_SUBSCRIBER_ID] = [];
                    }
                    $errs[self::FIELD_SUBSCRIBER_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IDENTIFIER])) {
                        $errs[self::FIELD_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_GROUP])) {
            $v = $this->getGroup();
            foreach($validationRules[self::FIELD_GROUP] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE, self::FIELD_GROUP, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_GROUP])) {
                        $errs[self::FIELD_GROUP] = [];
                    }
                    $errs[self::FIELD_GROUP][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PLAN])) {
            $v = $this->getPlan();
            foreach($validationRules[self::FIELD_PLAN] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE, self::FIELD_PLAN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PLAN])) {
                        $errs[self::FIELD_PLAN] = [];
                    }
                    $errs[self::FIELD_PLAN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUB_PLAN])) {
            $v = $this->getSubPlan();
            foreach($validationRules[self::FIELD_SUB_PLAN] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE, self::FIELD_SUB_PLAN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUB_PLAN])) {
                        $errs[self::FIELD_SUB_PLAN] = [];
                    }
                    $errs[self::FIELD_SUB_PLAN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEPENDENT])) {
            $v = $this->getDependent();
            foreach($validationRules[self::FIELD_DEPENDENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE, self::FIELD_DEPENDENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEPENDENT])) {
                        $errs[self::FIELD_DEPENDENT] = [];
                    }
                    $errs[self::FIELD_DEPENDENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SEQUENCE])) {
            $v = $this->getSequence();
            foreach($validationRules[self::FIELD_SEQUENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE, self::FIELD_SEQUENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SEQUENCE])) {
                        $errs[self::FIELD_SEQUENCE] = [];
                    }
                    $errs[self::FIELD_SEQUENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUBSCRIBER])) {
            $v = $this->getSubscriber();
            foreach($validationRules[self::FIELD_SUBSCRIBER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE, self::FIELD_SUBSCRIBER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUBSCRIBER])) {
                        $errs[self::FIELD_SUBSCRIBER] = [];
                    }
                    $errs[self::FIELD_SUBSCRIBER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NETWORK])) {
            $v = $this->getNetwork();
            foreach($validationRules[self::FIELD_NETWORK] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE, self::FIELD_NETWORK, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NETWORK])) {
                        $errs[self::FIELD_NETWORK] = [];
                    }
                    $errs[self::FIELD_NETWORK][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTRACT])) {
            $v = $this->getContract();
            foreach($validationRules[self::FIELD_CONTRACT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE, self::FIELD_CONTRACT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTRACT])) {
                        $errs[self::FIELD_CONTRACT] = [];
                    }
                    $errs[self::FIELD_CONTRACT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TEXT])) {
            $v = $this->getText();
            foreach($validationRules[self::FIELD_TEXT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_TEXT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TEXT])) {
                        $errs[self::FIELD_TEXT] = [];
                    }
                    $errs[self::FIELD_TEXT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTAINED])) {
            $v = $this->getContained();
            foreach($validationRules[self::FIELD_CONTAINED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_CONTAINED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTAINED])) {
                        $errs[self::FIELD_CONTAINED] = [];
                    }
                    $errs[self::FIELD_CONTAINED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXTENSION])) {
            $v = $this->getExtension();
            foreach($validationRules[self::FIELD_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXTENSION])) {
                        $errs[self::FIELD_EXTENSION] = [];
                    }
                    $errs[self::FIELD_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
            $v = $this->getModifierExtension();
            foreach($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MODIFIER_EXTENSION])) {
                        $errs[self::FIELD_MODIFIER_EXTENSION] = [];
                    }
                    $errs[self::FIELD_MODIFIER_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ID])) {
            $v = $this->getId();
            foreach($validationRules[self::FIELD_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ID])) {
                        $errs[self::FIELD_ID] = [];
                    }
                    $errs[self::FIELD_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_META])) {
            $v = $this->getMeta();
            foreach($validationRules[self::FIELD_META] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_META, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_META])) {
                        $errs[self::FIELD_META] = [];
                    }
                    $errs[self::FIELD_META][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IMPLICIT_RULES])) {
            $v = $this->getImplicitRules();
            foreach($validationRules[self::FIELD_IMPLICIT_RULES] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_IMPLICIT_RULES, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IMPLICIT_RULES])) {
                        $errs[self::FIELD_IMPLICIT_RULES] = [];
                    }
                    $errs[self::FIELD_IMPLICIT_RULES][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LANGUAGE])) {
            $v = $this->getLanguage();
            foreach($validationRules[self::FIELD_LANGUAGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_LANGUAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LANGUAGE])) {
                        $errs[self::FIELD_LANGUAGE] = [];
                    }
                    $errs[self::FIELD_LANGUAGE][$rule] = $err;
                }
            }
        }
        return $errs;
    }

    /**
     * @param null|string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRCoverage $type
     * @param null|int|\DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRCoverage
     */
    public static function xmlUnserialize(null|string|\SimpleXMLElement $element, null|PHPFHIRTypeInterface $type = null, null|int|PHPFHIRConfig $config = null): null|self
    {
        if (null === $element) {
            return null;
        }
        if (is_int($config)) {
            $config = new PHPFHIRConfig([PHPFHIRConfigKeyEnum::LIBXML_OPTS->value => $config]);
        } else if (null === $config) {
            $config = new PHPFHIRConfig();
        }
        if (is_string($element)) {
            $element = new \SimpleXMLElement($element, $config->getLibxmlOpts());
        }
        if (null === $type) {
            $type = new static(null);
        } else if (!($type instanceof FHIRCoverage)) {
            throw new \RuntimeException(sprintf(
                '%s::xmlUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null !== ($ns = $element->getNamespaces()[''] ?? null)) {
            $type->_setSourceXmlns((string)$ns);
        }
        foreach ($element->children() as $n) {
            $childName = $n->getName();
            if (self::FIELD_ISSUER === $childName) {
                $type->setIssuer(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_BIN === $childName) {
                $type->setBin(FHIRIdentifier::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PERIOD === $childName) {
                $type->setPeriod(FHIRPeriod::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_TYPE === $childName) {
                $type->setType(FHIRCoding::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_SUBSCRIBER_ID === $childName) {
                $type->setSubscriberId(FHIRIdentifier::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_IDENTIFIER === $childName) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_GROUP === $childName) {
                $type->setGroup(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_PLAN === $childName) {
                $type->setPlan(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_SUB_PLAN === $childName) {
                $type->setSubPlan(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_DEPENDENT === $childName) {
                $type->setDependent(FHIRPositiveInt::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_SEQUENCE === $childName) {
                $type->setSequence(FHIRPositiveInt::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_SUBSCRIBER === $childName) {
                $type->setSubscriber(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_NETWORK === $childName) {
                $type->setNetwork(FHIRIdentifier::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CONTRACT === $childName) {
                $type->addContract(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_TEXT === $childName) {
                $type->setText(FHIRNarrative::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CONTAINED === $childName) {
                foreach ($n->children() as $nn) {
                    $type->addContained(PHPFHIRTypeMap::getContainedTypeFromXML($nn, $config));
                }
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRId::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_META === $childName) {
                $type->setMeta(FHIRMeta::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_IMPLICIT_RULES === $childName) {
                $type->setImplicitRules(FHIRUri::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_LANGUAGE === $childName) {
                $type->setLanguage(FHIRCode::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_GROUP])) {
            $pt = $type->getGroup();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_GROUP], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setGroup((string)$attributes[self::FIELD_GROUP], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_PLAN])) {
            $pt = $type->getPlan();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_PLAN], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setPlan((string)$attributes[self::FIELD_PLAN], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_SUB_PLAN])) {
            $pt = $type->getSubPlan();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_SUB_PLAN], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setSubPlan((string)$attributes[self::FIELD_SUB_PLAN], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DEPENDENT])) {
            $pt = $type->getDependent();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DEPENDENT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setDependent((string)$attributes[self::FIELD_DEPENDENT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_SEQUENCE])) {
            $pt = $type->getSequence();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_SEQUENCE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setSequence((string)$attributes[self::FIELD_SEQUENCE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setId((string)$attributes[self::FIELD_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_IMPLICIT_RULES])) {
            $pt = $type->getImplicitRules();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_IMPLICIT_RULES], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setImplicitRules((string)$attributes[self::FIELD_IMPLICIT_RULES], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_LANGUAGE])) {
            $pt = $type->getLanguage();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_LANGUAGE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setLanguage((string)$attributes[self::FIELD_LANGUAGE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        return $type;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRXmlWriter $xw
     * @param null|int|\DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRXmlWriter
     */
    public function xmlSerialize(null|PHPFHIRXmlWriter $xw = null, null|int|PHPFHIRConfig $config = null): PHPFHIRXmlWriter
    {
        if (is_int($config)) {
            $config = new PHPFHIRConfig([PHPFHIRConfigKeyEnum::LIBXML_OPTS->value => $config]);
        } else if (null === $config) {
            $config = new PHPFHIRConfig();
        }
        if (null === $xw) {
            $xw = new PHPFHIRXmlWriter();
        }
        if (!$xw->isOpen()) {
            $xw->openMemory();
        }
        if (!$xw->isDocStarted()) {
            $docStarted = true;
            $xw->startDocument();
        }
        if (!$xw->isRootOpen()) {
            $openedRoot = true;
            $xw->openRootNode($config, 'Coverage', $this->_getSourceXmlns());
        }
        $locs = $this->_xmlLocations[self::FIELD_GROUP] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getGroup())) {
            $xw->writeAttribute(self::FIELD_GROUP, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_PLAN] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getPlan())) {
            $xw->writeAttribute(self::FIELD_PLAN, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_SUB_PLAN] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getSubPlan())) {
            $xw->writeAttribute(self::FIELD_SUB_PLAN, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_DEPENDENT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDependent())) {
            $xw->writeAttribute(self::FIELD_DEPENDENT, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_SEQUENCE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getSequence())) {
            $xw->writeAttribute(self::FIELD_SEQUENCE, $v->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (null !== ($v = $this->getIssuer())) {
            $xw->startElement(self::FIELD_ISSUER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getBin())) {
            $xw->startElement(self::FIELD_BIN);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getPeriod())) {
            $xw->startElement(self::FIELD_PERIOD);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getType())) {
            $xw->startElement(self::FIELD_TYPE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getSubscriberId())) {
            $xw->startElement(self::FIELD_SUBSCRIBER_ID);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getIdentifier() as $v) {
            $xw->startElement(self::FIELD_IDENTIFIER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_GROUP] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getGroup())) {
            $xw->startElement(self::FIELD_GROUP);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_PLAN] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getPlan())) {
            $xw->startElement(self::FIELD_PLAN);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_SUB_PLAN] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getSubPlan())) {
            $xw->startElement(self::FIELD_SUB_PLAN);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_DEPENDENT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDependent())) {
            $xw->startElement(self::FIELD_DEPENDENT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_SEQUENCE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getSequence())) {
            $xw->startElement(self::FIELD_SEQUENCE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getSubscriber())) {
            $xw->startElement(self::FIELD_SUBSCRIBER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getNetwork())) {
            $xw->startElement(self::FIELD_NETWORK);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getContract() as $v) {
            $xw->startElement(self::FIELD_CONTRACT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($openedRoot) && $openedRoot) {
            $xw->endElement();
        }
        if (isset($docStarted) && $docStarted) {
            $xw->endDocument();
        }
        return $xw;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (null !== ($v = $this->getIssuer())) {
            $out->{self::FIELD_ISSUER} = $v;
        }
        if (null !== ($v = $this->getBin())) {
            $out->{self::FIELD_BIN} = $v;
        }
        if (null !== ($v = $this->getPeriod())) {
            $out->{self::FIELD_PERIOD} = $v;
        }
        if (null !== ($v = $this->getType())) {
            $out->{self::FIELD_TYPE} = $v;
        }
        if (null !== ($v = $this->getSubscriberId())) {
            $out->{self::FIELD_SUBSCRIBER_ID} = $v;
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            $out->{self::FIELD_IDENTIFIER} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_IDENTIFIER}[] = $v;
            }
        }
        if (null !== ($v = $this->getGroup())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_GROUP} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_GROUP_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getPlan())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_PLAN} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_PLAN_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getSubPlan())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_SUB_PLAN} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_SUB_PLAN_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDependent())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DEPENDENT} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRPositiveInt::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DEPENDENT_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getSequence())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_SEQUENCE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRPositiveInt::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_SEQUENCE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getSubscriber())) {
            $out->{self::FIELD_SUBSCRIBER} = $v;
        }
        if (null !== ($v = $this->getNetwork())) {
            $out->{self::FIELD_NETWORK} = $v;
        }
        if ([] !== ($vs = $this->getContract())) {
            $out->{self::FIELD_CONTRACT} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_CONTRACT}[] = $v;
            }
        }

        $out->{PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE} = $this->_getResourceType();

        return $out;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return self::FHIR_TYPE_NAME;
    }
}