<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRClaim;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 21st, 2019 04:05+0000
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

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAddress;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDate;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMoney;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPositiveInt;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * A provider issued list of professional services and products which have been
 * provided, or are to be provided, to a patient which is sent to an insurer for
 * reimbursement.
 *
 * Class FHIRClaimItem
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRClaim
 */
class FHIRClaimItem extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CLAIM_DOT_ITEM;

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    const FIELD_BODY_SITE = 'bodySite';
    const FIELD_CARE_TEAM_SEQUENCE = 'careTeamSequence';
    const FIELD_CARE_TEAM_SEQUENCE_EXT = '_careTeamSequence';
    const FIELD_CATEGORY = 'category';
    const FIELD_DETAIL = 'detail';
    const FIELD_DIAGNOSIS_SEQUENCE = 'diagnosisSequence';
    const FIELD_DIAGNOSIS_SEQUENCE_EXT = '_diagnosisSequence';
    const FIELD_ENCOUNTER = 'encounter';
    const FIELD_FACTOR = 'factor';
    const FIELD_FACTOR_EXT = '_factor';
    const FIELD_INFORMATION_SEQUENCE = 'informationSequence';
    const FIELD_INFORMATION_SEQUENCE_EXT = '_informationSequence';
    const FIELD_LOCATION_ADDRESS = 'locationAddress';
    const FIELD_LOCATION_CODEABLE_CONCEPT = 'locationCodeableConcept';
    const FIELD_LOCATION_REFERENCE = 'locationReference';
    const FIELD_MODIFIER = 'modifier';
    const FIELD_NET = 'net';
    const FIELD_NET_EXT = '_net';
    const FIELD_PROCEDURE_SEQUENCE = 'procedureSequence';
    const FIELD_PROCEDURE_SEQUENCE_EXT = '_procedureSequence';
    const FIELD_PRODUCT_OR_SERVICE = 'productOrService';
    const FIELD_PROGRAM_CODE = 'programCode';
    const FIELD_QUANTITY = 'quantity';
    const FIELD_QUANTITY_EXT = '_quantity';
    const FIELD_REVENUE = 'revenue';
    const FIELD_SEQUENCE = 'sequence';
    const FIELD_SEQUENCE_EXT = '_sequence';
    const FIELD_SERVICED_DATE = 'servicedDate';
    const FIELD_SERVICED_DATE_EXT = '_servicedDate';
    const FIELD_SERVICED_PERIOD = 'servicedPeriod';
    const FIELD_SUB_SITE = 'subSite';
    const FIELD_UDI = 'udi';
    const FIELD_UNIT_PRICE = 'unitPrice';
    const FIELD_UNIT_PRICE_EXT = '_unitPrice';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Physical service site on the patient (limb, tooth, etc.).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    private $bodySite = null;
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * CareTeam members related to this service or product.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPositiveInt[]
     */
    private $careTeamSequence = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Code to identify the general type of benefits under which products and services
     * are provided.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    private $category = null;
    /**
     * A provider issued list of professional services and products which have been
     * provided, or are to be provided, to a patient which is sent to an insurer for
     * reimbursement.
     *
     * A claim detail line. Either a simple (a product or service) or a 'group' of
     * sub-details which are simple items.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimDetail[]
     */
    private $detail = [];
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Diagnosis applicable for this service or product.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPositiveInt[]
     */
    private $diagnosisSequence = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The Encounters during which this Claim was created or to which the creation of
     * this record is tightly associated.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    private $encounter = [];
    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A real number that represents a multiplier used in determining the overall value
     * of services delivered and/or goods received. The concept of a Factor allows for
     * a discount or surcharge multiplier to be applied to a monetary amount.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal
     */
    private $factor = null;
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Exceptions, special conditions and supporting information applicable for this
     * service or product.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPositiveInt[]
     */
    private $informationSequence = [];
    /**
     * An address expressed using postal conventions (as opposed to GPS or other
     * location definition formats). This data type may be used to convey addresses for
     * use in delivering mail as well as for visiting locations which might not be
     * valid for mail delivery. There are a variety of postal address formats defined
     * around the world.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Where the product or service was provided.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAddress
     */
    private $locationAddress = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Where the product or service was provided.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    private $locationCodeableConcept = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Where the product or service was provided.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    private $locationReference = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Item typification or modifiers codes to convey additional context for the
     * product or service.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    private $modifier = [];
    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The quantity times the unit price for an additional service or product or
     * charge.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMoney
     */
    private $net = null;
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Procedures applicable for this service or product.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPositiveInt[]
     */
    private $procedureSequence = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * When the value is a group code then this item collects a set of related claim
     * details, otherwise this contains the product, service, drug or other billing
     * code for the item.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    private $productOrService = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifies the program under which this may be recovered.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    private $programCode = [];
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The number of repetitions of a service or product.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity
     */
    private $quantity = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The type of revenue or cost center providing the product and/or service.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    private $revenue = null;
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A number to uniquely identify item entries.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPositiveInt
     */
    private $sequence = null;
    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The date or dates when the service or product was supplied, performed or
     * completed.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDate
     */
    private $servicedDate = null;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The date or dates when the service or product was supplied, performed or
     * completed.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod
     */
    private $servicedPeriod = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A region or surface of the bodySite, e.g. limb region or tooth surface(s).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    private $subSite = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Unique Device Identifiers associated with this line item.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    private $udi = [];
    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * If the item is not a group then this is the fee for the product or service,
     * otherwise this is the total of the fees for the details of the group.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMoney
     */
    private $unitPrice = null;

    /**
     * FHIRClaimItem Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRClaimItem::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_BODY_SITE])) {
            if ($data[self::FIELD_BODY_SITE] instanceof FHIRCodeableConcept) {
                $this->setBodySite($data[self::FIELD_BODY_SITE]);
            } else {
                $this->setBodySite(new FHIRCodeableConcept($data[self::FIELD_BODY_SITE]));
            }
        }
        if (isset($data[self::FIELD_CARE_TEAM_SEQUENCE])) {
            $ext = (isset($data[self::FIELD_CARE_TEAM_SEQUENCE_EXT]) && is_array($data[self::FIELD_CARE_TEAM_SEQUENCE_EXT]))
                ? $data[self::FIELD_CARE_TEAM_SEQUENCE_EXT]
                : null;
            if (is_array($data[self::FIELD_CARE_TEAM_SEQUENCE])) {
                foreach($data[self::FIELD_CARE_TEAM_SEQUENCE] as $i => $v) {
                    if ($v instanceof FHIRPositiveInt) {
                        $this->addCareTeamSequence($v);
                    } elseif ($ext && is_scalar($v) && isset($ext[$i]) && is_array($ext[$i])) {
                        $this->addCareTeamSequence(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $v] + $ext[$i]));
                    } else {
                        $this->addCareTeamSequence(new FHIRPositiveInt($v));
                    }
                }
            } elseif ($data[self::FIELD_CARE_TEAM_SEQUENCE] instanceof FHIRPositiveInt) {
                $this->addCareTeamSequence($data[self::FIELD_CARE_TEAM_SEQUENCE]);
            } elseif ($ext && is_scalar($data[self::FIELD_CARE_TEAM_SEQUENCE])) {
                $this->addCareTeamSequence(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $data[self::FIELD_CARE_TEAM_SEQUENCE]] + $ext));
            } else {
                $this->addCareTeamSequence(new FHIRPositiveInt($data[self::FIELD_CARE_TEAM_SEQUENCE]));
            }
        }
        if (isset($data[self::FIELD_CATEGORY])) {
            if ($data[self::FIELD_CATEGORY] instanceof FHIRCodeableConcept) {
                $this->setCategory($data[self::FIELD_CATEGORY]);
            } else {
                $this->setCategory(new FHIRCodeableConcept($data[self::FIELD_CATEGORY]));
            }
        }
        if (isset($data[self::FIELD_DETAIL])) {
            if (is_array($data[self::FIELD_DETAIL])) {
                foreach($data[self::FIELD_DETAIL] as $v) {
                    if ($v instanceof FHIRClaimDetail) {
                        $this->addDetail($v);
                    } else {
                        $this->addDetail(new FHIRClaimDetail($v));
                    }
                }
            } else if ($data[self::FIELD_DETAIL] instanceof FHIRClaimDetail) {
                $this->addDetail($data[self::FIELD_DETAIL]);
            } else {
                $this->addDetail(new FHIRClaimDetail($data[self::FIELD_DETAIL]));
            }
        }
        if (isset($data[self::FIELD_DIAGNOSIS_SEQUENCE])) {
            $ext = (isset($data[self::FIELD_DIAGNOSIS_SEQUENCE_EXT]) && is_array($data[self::FIELD_DIAGNOSIS_SEQUENCE_EXT]))
                ? $data[self::FIELD_DIAGNOSIS_SEQUENCE_EXT]
                : null;
            if (is_array($data[self::FIELD_DIAGNOSIS_SEQUENCE])) {
                foreach($data[self::FIELD_DIAGNOSIS_SEQUENCE] as $i => $v) {
                    if ($v instanceof FHIRPositiveInt) {
                        $this->addDiagnosisSequence($v);
                    } elseif ($ext && is_scalar($v) && isset($ext[$i]) && is_array($ext[$i])) {
                        $this->addDiagnosisSequence(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $v] + $ext[$i]));
                    } else {
                        $this->addDiagnosisSequence(new FHIRPositiveInt($v));
                    }
                }
            } elseif ($data[self::FIELD_DIAGNOSIS_SEQUENCE] instanceof FHIRPositiveInt) {
                $this->addDiagnosisSequence($data[self::FIELD_DIAGNOSIS_SEQUENCE]);
            } elseif ($ext && is_scalar($data[self::FIELD_DIAGNOSIS_SEQUENCE])) {
                $this->addDiagnosisSequence(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $data[self::FIELD_DIAGNOSIS_SEQUENCE]] + $ext));
            } else {
                $this->addDiagnosisSequence(new FHIRPositiveInt($data[self::FIELD_DIAGNOSIS_SEQUENCE]));
            }
        }
        if (isset($data[self::FIELD_ENCOUNTER])) {
            if (is_array($data[self::FIELD_ENCOUNTER])) {
                foreach($data[self::FIELD_ENCOUNTER] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addEncounter($v);
                    } else {
                        $this->addEncounter(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_ENCOUNTER] instanceof FHIRReference) {
                $this->addEncounter($data[self::FIELD_ENCOUNTER]);
            } else {
                $this->addEncounter(new FHIRReference($data[self::FIELD_ENCOUNTER]));
            }
        }
        if (isset($data[self::FIELD_FACTOR])) {
            $ext = (isset($data[self::FIELD_FACTOR_EXT]) && is_array($data[self::FIELD_FACTOR_EXT]))
                ? $data[self::FIELD_FACTOR_EXT]
                : null;
            if ($data[self::FIELD_FACTOR] instanceof FHIRDecimal) {
                $this->setFactor($data[self::FIELD_FACTOR]);
            } elseif ($ext && is_scalar($data[self::FIELD_FACTOR])) {
                $this->setFactor(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $data[self::FIELD_FACTOR]] + $ext));
            } else {
                $this->setFactor(new FHIRDecimal($data[self::FIELD_FACTOR]));
            }
        }
        if (isset($data[self::FIELD_INFORMATION_SEQUENCE])) {
            $ext = (isset($data[self::FIELD_INFORMATION_SEQUENCE_EXT]) && is_array($data[self::FIELD_INFORMATION_SEQUENCE_EXT]))
                ? $data[self::FIELD_INFORMATION_SEQUENCE_EXT]
                : null;
            if (is_array($data[self::FIELD_INFORMATION_SEQUENCE])) {
                foreach($data[self::FIELD_INFORMATION_SEQUENCE] as $i => $v) {
                    if ($v instanceof FHIRPositiveInt) {
                        $this->addInformationSequence($v);
                    } elseif ($ext && is_scalar($v) && isset($ext[$i]) && is_array($ext[$i])) {
                        $this->addInformationSequence(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $v] + $ext[$i]));
                    } else {
                        $this->addInformationSequence(new FHIRPositiveInt($v));
                    }
                }
            } elseif ($data[self::FIELD_INFORMATION_SEQUENCE] instanceof FHIRPositiveInt) {
                $this->addInformationSequence($data[self::FIELD_INFORMATION_SEQUENCE]);
            } elseif ($ext && is_scalar($data[self::FIELD_INFORMATION_SEQUENCE])) {
                $this->addInformationSequence(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $data[self::FIELD_INFORMATION_SEQUENCE]] + $ext));
            } else {
                $this->addInformationSequence(new FHIRPositiveInt($data[self::FIELD_INFORMATION_SEQUENCE]));
            }
        }
        if (isset($data[self::FIELD_LOCATION_ADDRESS])) {
            if ($data[self::FIELD_LOCATION_ADDRESS] instanceof FHIRAddress) {
                $this->setLocationAddress($data[self::FIELD_LOCATION_ADDRESS]);
            } else {
                $this->setLocationAddress(new FHIRAddress($data[self::FIELD_LOCATION_ADDRESS]));
            }
        }
        if (isset($data[self::FIELD_LOCATION_CODEABLE_CONCEPT])) {
            if ($data[self::FIELD_LOCATION_CODEABLE_CONCEPT] instanceof FHIRCodeableConcept) {
                $this->setLocationCodeableConcept($data[self::FIELD_LOCATION_CODEABLE_CONCEPT]);
            } else {
                $this->setLocationCodeableConcept(new FHIRCodeableConcept($data[self::FIELD_LOCATION_CODEABLE_CONCEPT]));
            }
        }
        if (isset($data[self::FIELD_LOCATION_REFERENCE])) {
            if ($data[self::FIELD_LOCATION_REFERENCE] instanceof FHIRReference) {
                $this->setLocationReference($data[self::FIELD_LOCATION_REFERENCE]);
            } else {
                $this->setLocationReference(new FHIRReference($data[self::FIELD_LOCATION_REFERENCE]));
            }
        }
        if (isset($data[self::FIELD_MODIFIER])) {
            if (is_array($data[self::FIELD_MODIFIER])) {
                foreach($data[self::FIELD_MODIFIER] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addModifier($v);
                    } else {
                        $this->addModifier(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_MODIFIER] instanceof FHIRCodeableConcept) {
                $this->addModifier($data[self::FIELD_MODIFIER]);
            } else {
                $this->addModifier(new FHIRCodeableConcept($data[self::FIELD_MODIFIER]));
            }
        }
        if (isset($data[self::FIELD_NET])) {
            $ext = (isset($data[self::FIELD_NET_EXT]) && is_array($data[self::FIELD_NET_EXT]))
                ? $data[self::FIELD_NET_EXT]
                : null;
            if ($data[self::FIELD_NET] instanceof FHIRMoney) {
                $this->setNet($data[self::FIELD_NET]);
            } elseif ($ext && is_scalar($data[self::FIELD_NET])) {
                $this->setNet(new FHIRMoney([FHIRMoney::FIELD_VALUE => $data[self::FIELD_NET]] + $ext));
            } else {
                $this->setNet(new FHIRMoney($data[self::FIELD_NET]));
            }
        }
        if (isset($data[self::FIELD_PROCEDURE_SEQUENCE])) {
            $ext = (isset($data[self::FIELD_PROCEDURE_SEQUENCE_EXT]) && is_array($data[self::FIELD_PROCEDURE_SEQUENCE_EXT]))
                ? $data[self::FIELD_PROCEDURE_SEQUENCE_EXT]
                : null;
            if (is_array($data[self::FIELD_PROCEDURE_SEQUENCE])) {
                foreach($data[self::FIELD_PROCEDURE_SEQUENCE] as $i => $v) {
                    if ($v instanceof FHIRPositiveInt) {
                        $this->addProcedureSequence($v);
                    } elseif ($ext && is_scalar($v) && isset($ext[$i]) && is_array($ext[$i])) {
                        $this->addProcedureSequence(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $v] + $ext[$i]));
                    } else {
                        $this->addProcedureSequence(new FHIRPositiveInt($v));
                    }
                }
            } elseif ($data[self::FIELD_PROCEDURE_SEQUENCE] instanceof FHIRPositiveInt) {
                $this->addProcedureSequence($data[self::FIELD_PROCEDURE_SEQUENCE]);
            } elseif ($ext && is_scalar($data[self::FIELD_PROCEDURE_SEQUENCE])) {
                $this->addProcedureSequence(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $data[self::FIELD_PROCEDURE_SEQUENCE]] + $ext));
            } else {
                $this->addProcedureSequence(new FHIRPositiveInt($data[self::FIELD_PROCEDURE_SEQUENCE]));
            }
        }
        if (isset($data[self::FIELD_PRODUCT_OR_SERVICE])) {
            if ($data[self::FIELD_PRODUCT_OR_SERVICE] instanceof FHIRCodeableConcept) {
                $this->setProductOrService($data[self::FIELD_PRODUCT_OR_SERVICE]);
            } else {
                $this->setProductOrService(new FHIRCodeableConcept($data[self::FIELD_PRODUCT_OR_SERVICE]));
            }
        }
        if (isset($data[self::FIELD_PROGRAM_CODE])) {
            if (is_array($data[self::FIELD_PROGRAM_CODE])) {
                foreach($data[self::FIELD_PROGRAM_CODE] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addProgramCode($v);
                    } else {
                        $this->addProgramCode(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_PROGRAM_CODE] instanceof FHIRCodeableConcept) {
                $this->addProgramCode($data[self::FIELD_PROGRAM_CODE]);
            } else {
                $this->addProgramCode(new FHIRCodeableConcept($data[self::FIELD_PROGRAM_CODE]));
            }
        }
        if (isset($data[self::FIELD_QUANTITY])) {
            $ext = (isset($data[self::FIELD_QUANTITY_EXT]) && is_array($data[self::FIELD_QUANTITY_EXT]))
                ? $data[self::FIELD_QUANTITY_EXT]
                : null;
            if ($data[self::FIELD_QUANTITY] instanceof FHIRQuantity) {
                $this->setQuantity($data[self::FIELD_QUANTITY]);
            } elseif ($ext && is_scalar($data[self::FIELD_QUANTITY])) {
                $this->setQuantity(new FHIRQuantity([FHIRQuantity::FIELD_VALUE => $data[self::FIELD_QUANTITY]] + $ext));
            } else {
                $this->setQuantity(new FHIRQuantity($data[self::FIELD_QUANTITY]));
            }
        }
        if (isset($data[self::FIELD_REVENUE])) {
            if ($data[self::FIELD_REVENUE] instanceof FHIRCodeableConcept) {
                $this->setRevenue($data[self::FIELD_REVENUE]);
            } else {
                $this->setRevenue(new FHIRCodeableConcept($data[self::FIELD_REVENUE]));
            }
        }
        if (isset($data[self::FIELD_SEQUENCE])) {
            $ext = (isset($data[self::FIELD_SEQUENCE_EXT]) && is_array($data[self::FIELD_SEQUENCE_EXT]))
                ? $data[self::FIELD_SEQUENCE_EXT]
                : null;
            if ($data[self::FIELD_SEQUENCE] instanceof FHIRPositiveInt) {
                $this->setSequence($data[self::FIELD_SEQUENCE]);
            } elseif ($ext && is_scalar($data[self::FIELD_SEQUENCE])) {
                $this->setSequence(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $data[self::FIELD_SEQUENCE]] + $ext));
            } else {
                $this->setSequence(new FHIRPositiveInt($data[self::FIELD_SEQUENCE]));
            }
        }
        if (isset($data[self::FIELD_SERVICED_DATE])) {
            $ext = (isset($data[self::FIELD_SERVICED_DATE_EXT]) && is_array($data[self::FIELD_SERVICED_DATE_EXT]))
                ? $data[self::FIELD_SERVICED_DATE_EXT]
                : null;
            if ($data[self::FIELD_SERVICED_DATE] instanceof FHIRDate) {
                $this->setServicedDate($data[self::FIELD_SERVICED_DATE]);
            } elseif ($ext && is_scalar($data[self::FIELD_SERVICED_DATE])) {
                $this->setServicedDate(new FHIRDate([FHIRDate::FIELD_VALUE => $data[self::FIELD_SERVICED_DATE]] + $ext));
            } else {
                $this->setServicedDate(new FHIRDate($data[self::FIELD_SERVICED_DATE]));
            }
        }
        if (isset($data[self::FIELD_SERVICED_PERIOD])) {
            if ($data[self::FIELD_SERVICED_PERIOD] instanceof FHIRPeriod) {
                $this->setServicedPeriod($data[self::FIELD_SERVICED_PERIOD]);
            } else {
                $this->setServicedPeriod(new FHIRPeriod($data[self::FIELD_SERVICED_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_SUB_SITE])) {
            if (is_array($data[self::FIELD_SUB_SITE])) {
                foreach($data[self::FIELD_SUB_SITE] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addSubSite($v);
                    } else {
                        $this->addSubSite(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_SUB_SITE] instanceof FHIRCodeableConcept) {
                $this->addSubSite($data[self::FIELD_SUB_SITE]);
            } else {
                $this->addSubSite(new FHIRCodeableConcept($data[self::FIELD_SUB_SITE]));
            }
        }
        if (isset($data[self::FIELD_UDI])) {
            if (is_array($data[self::FIELD_UDI])) {
                foreach($data[self::FIELD_UDI] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addUdi($v);
                    } else {
                        $this->addUdi(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_UDI] instanceof FHIRReference) {
                $this->addUdi($data[self::FIELD_UDI]);
            } else {
                $this->addUdi(new FHIRReference($data[self::FIELD_UDI]));
            }
        }
        if (isset($data[self::FIELD_UNIT_PRICE])) {
            $ext = (isset($data[self::FIELD_UNIT_PRICE_EXT]) && is_array($data[self::FIELD_UNIT_PRICE_EXT]))
                ? $data[self::FIELD_UNIT_PRICE_EXT]
                : null;
            if ($data[self::FIELD_UNIT_PRICE] instanceof FHIRMoney) {
                $this->setUnitPrice($data[self::FIELD_UNIT_PRICE]);
            } elseif ($ext && is_scalar($data[self::FIELD_UNIT_PRICE])) {
                $this->setUnitPrice(new FHIRMoney([FHIRMoney::FIELD_VALUE => $data[self::FIELD_UNIT_PRICE]] + $ext));
            } else {
                $this->setUnitPrice(new FHIRMoney($data[self::FIELD_UNIT_PRICE]));
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
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimItem
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
        return "<ClaimItem{$xmlns}></ClaimItem>";
    }


    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Physical service site on the patient (limb, tooth, etc.).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getBodySite()
    {
        return $this->bodySite;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Physical service site on the patient (limb, tooth, etc.).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $bodySite
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimItem
     */
    public function setBodySite(FHIRCodeableConcept $bodySite = null)
    {
        $this->bodySite = $bodySite;
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * CareTeam members related to this service or product.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPositiveInt[]
     */
    public function getCareTeamSequence()
    {
        return $this->careTeamSequence;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * CareTeam members related to this service or product.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPositiveInt $careTeamSequence
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimItem
     */
    public function addCareTeamSequence($careTeamSequence = null)
    {
        if (null === $careTeamSequence) {
            $this->careTeamSequence = [];
            return $this;
        }
        if ($careTeamSequence instanceof FHIRPositiveInt) {
            $this->careTeamSequence[] = $careTeamSequence;
            return $this;
        }
        $this->careTeamSequence[] = new FHIRPositiveInt($careTeamSequence);
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * CareTeam members related to this service or product.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPositiveInt[] $careTeamSequence
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimItem
     */
    public function setCareTeamSequence(array $careTeamSequence = [])
    {
        $this->careTeamSequence = [];
        if ([] === $careTeamSequence) {
            return $this;
        }
        foreach($careTeamSequence as $v) {
            if ($v instanceof FHIRPositiveInt) {
                $this->addCareTeamSequence($v);
            } else {
                $this->addCareTeamSequence(new FHIRPositiveInt($v));
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
     * Code to identify the general type of benefits under which products and services
     * are provided.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
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
     * Code to identify the general type of benefits under which products and services
     * are provided.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $category
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimItem
     */
    public function setCategory(FHIRCodeableConcept $category = null)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * A provider issued list of professional services and products which have been
     * provided, or are to be provided, to a patient which is sent to an insurer for
     * reimbursement.
     *
     * A claim detail line. Either a simple (a product or service) or a 'group' of
     * sub-details which are simple items.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimDetail[]
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * A provider issued list of professional services and products which have been
     * provided, or are to be provided, to a patient which is sent to an insurer for
     * reimbursement.
     *
     * A claim detail line. Either a simple (a product or service) or a 'group' of
     * sub-details which are simple items.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimDetail $detail
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimItem
     */
    public function addDetail(FHIRClaimDetail $detail = null)
    {
        $this->detail[] = $detail;
        return $this;
    }

    /**
     * A provider issued list of professional services and products which have been
     * provided, or are to be provided, to a patient which is sent to an insurer for
     * reimbursement.
     *
     * A claim detail line. Either a simple (a product or service) or a 'group' of
     * sub-details which are simple items.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimDetail[] $detail
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimItem
     */
    public function setDetail(array $detail = [])
    {
        $this->detail = [];
        if ([] === $detail) {
            return $this;
        }
        foreach($detail as $v) {
            if ($v instanceof FHIRClaimDetail) {
                $this->addDetail($v);
            } else {
                $this->addDetail(new FHIRClaimDetail($v));
            }
        }
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Diagnosis applicable for this service or product.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPositiveInt[]
     */
    public function getDiagnosisSequence()
    {
        return $this->diagnosisSequence;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Diagnosis applicable for this service or product.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPositiveInt $diagnosisSequence
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimItem
     */
    public function addDiagnosisSequence($diagnosisSequence = null)
    {
        if (null === $diagnosisSequence) {
            $this->diagnosisSequence = [];
            return $this;
        }
        if ($diagnosisSequence instanceof FHIRPositiveInt) {
            $this->diagnosisSequence[] = $diagnosisSequence;
            return $this;
        }
        $this->diagnosisSequence[] = new FHIRPositiveInt($diagnosisSequence);
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Diagnosis applicable for this service or product.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPositiveInt[] $diagnosisSequence
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimItem
     */
    public function setDiagnosisSequence(array $diagnosisSequence = [])
    {
        $this->diagnosisSequence = [];
        if ([] === $diagnosisSequence) {
            return $this;
        }
        foreach($diagnosisSequence as $v) {
            if ($v instanceof FHIRPositiveInt) {
                $this->addDiagnosisSequence($v);
            } else {
                $this->addDiagnosisSequence(new FHIRPositiveInt($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The Encounters during which this Claim was created or to which the creation of
     * this record is tightly associated.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    public function getEncounter()
    {
        return $this->encounter;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The Encounters during which this Claim was created or to which the creation of
     * this record is tightly associated.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $encounter
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimItem
     */
    public function addEncounter(FHIRReference $encounter = null)
    {
        $this->encounter[] = $encounter;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The Encounters during which this Claim was created or to which the creation of
     * this record is tightly associated.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[] $encounter
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimItem
     */
    public function setEncounter(array $encounter = [])
    {
        $this->encounter = [];
        if ([] === $encounter) {
            return $this;
        }
        foreach($encounter as $v) {
            if ($v instanceof FHIRReference) {
                $this->addEncounter($v);
            } else {
                $this->addEncounter(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A real number that represents a multiplier used in determining the overall value
     * of services delivered and/or goods received. The concept of a Factor allows for
     * a discount or surcharge multiplier to be applied to a monetary amount.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal
     */
    public function getFactor()
    {
        return $this->factor;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A real number that represents a multiplier used in determining the overall value
     * of services delivered and/or goods received. The concept of a Factor allows for
     * a discount or surcharge multiplier to be applied to a monetary amount.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal $factor
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimItem
     */
    public function setFactor($factor = null)
    {
        if (null === $factor) {
            $this->factor = null;
            return $this;
        }
        if ($factor instanceof FHIRDecimal) {
            $this->factor = $factor;
            return $this;
        }
        $this->factor = new FHIRDecimal($factor);
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Exceptions, special conditions and supporting information applicable for this
     * service or product.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPositiveInt[]
     */
    public function getInformationSequence()
    {
        return $this->informationSequence;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Exceptions, special conditions and supporting information applicable for this
     * service or product.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPositiveInt $informationSequence
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimItem
     */
    public function addInformationSequence($informationSequence = null)
    {
        if (null === $informationSequence) {
            $this->informationSequence = [];
            return $this;
        }
        if ($informationSequence instanceof FHIRPositiveInt) {
            $this->informationSequence[] = $informationSequence;
            return $this;
        }
        $this->informationSequence[] = new FHIRPositiveInt($informationSequence);
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Exceptions, special conditions and supporting information applicable for this
     * service or product.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPositiveInt[] $informationSequence
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimItem
     */
    public function setInformationSequence(array $informationSequence = [])
    {
        $this->informationSequence = [];
        if ([] === $informationSequence) {
            return $this;
        }
        foreach($informationSequence as $v) {
            if ($v instanceof FHIRPositiveInt) {
                $this->addInformationSequence($v);
            } else {
                $this->addInformationSequence(new FHIRPositiveInt($v));
            }
        }
        return $this;
    }

    /**
     * An address expressed using postal conventions (as opposed to GPS or other
     * location definition formats). This data type may be used to convey addresses for
     * use in delivering mail as well as for visiting locations which might not be
     * valid for mail delivery. There are a variety of postal address formats defined
     * around the world.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Where the product or service was provided.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAddress
     */
    public function getLocationAddress()
    {
        return $this->locationAddress;
    }

    /**
     * An address expressed using postal conventions (as opposed to GPS or other
     * location definition formats). This data type may be used to convey addresses for
     * use in delivering mail as well as for visiting locations which might not be
     * valid for mail delivery. There are a variety of postal address formats defined
     * around the world.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Where the product or service was provided.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAddress $locationAddress
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimItem
     */
    public function setLocationAddress(FHIRAddress $locationAddress = null)
    {
        $this->locationAddress = $locationAddress;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Where the product or service was provided.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getLocationCodeableConcept()
    {
        return $this->locationCodeableConcept;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Where the product or service was provided.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $locationCodeableConcept
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimItem
     */
    public function setLocationCodeableConcept(FHIRCodeableConcept $locationCodeableConcept = null)
    {
        $this->locationCodeableConcept = $locationCodeableConcept;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Where the product or service was provided.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getLocationReference()
    {
        return $this->locationReference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Where the product or service was provided.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $locationReference
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimItem
     */
    public function setLocationReference(FHIRReference $locationReference = null)
    {
        $this->locationReference = $locationReference;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Item typification or modifiers codes to convey additional context for the
     * product or service.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    public function getModifier()
    {
        return $this->modifier;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Item typification or modifiers codes to convey additional context for the
     * product or service.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $modifier
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimItem
     */
    public function addModifier(FHIRCodeableConcept $modifier = null)
    {
        $this->modifier[] = $modifier;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Item typification or modifiers codes to convey additional context for the
     * product or service.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[] $modifier
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimItem
     */
    public function setModifier(array $modifier = [])
    {
        $this->modifier = [];
        if ([] === $modifier) {
            return $this;
        }
        foreach($modifier as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addModifier($v);
            } else {
                $this->addModifier(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The quantity times the unit price for an additional service or product or
     * charge.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMoney
     */
    public function getNet()
    {
        return $this->net;
    }

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The quantity times the unit price for an additional service or product or
     * charge.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMoney $net
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimItem
     */
    public function setNet(FHIRMoney $net = null)
    {
        $this->net = $net;
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Procedures applicable for this service or product.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPositiveInt[]
     */
    public function getProcedureSequence()
    {
        return $this->procedureSequence;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Procedures applicable for this service or product.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPositiveInt $procedureSequence
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimItem
     */
    public function addProcedureSequence($procedureSequence = null)
    {
        if (null === $procedureSequence) {
            $this->procedureSequence = [];
            return $this;
        }
        if ($procedureSequence instanceof FHIRPositiveInt) {
            $this->procedureSequence[] = $procedureSequence;
            return $this;
        }
        $this->procedureSequence[] = new FHIRPositiveInt($procedureSequence);
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Procedures applicable for this service or product.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPositiveInt[] $procedureSequence
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimItem
     */
    public function setProcedureSequence(array $procedureSequence = [])
    {
        $this->procedureSequence = [];
        if ([] === $procedureSequence) {
            return $this;
        }
        foreach($procedureSequence as $v) {
            if ($v instanceof FHIRPositiveInt) {
                $this->addProcedureSequence($v);
            } else {
                $this->addProcedureSequence(new FHIRPositiveInt($v));
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
     * When the value is a group code then this item collects a set of related claim
     * details, otherwise this contains the product, service, drug or other billing
     * code for the item.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getProductOrService()
    {
        return $this->productOrService;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * When the value is a group code then this item collects a set of related claim
     * details, otherwise this contains the product, service, drug or other billing
     * code for the item.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $productOrService
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimItem
     */
    public function setProductOrService(FHIRCodeableConcept $productOrService = null)
    {
        $this->productOrService = $productOrService;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifies the program under which this may be recovered.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    public function getProgramCode()
    {
        return $this->programCode;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifies the program under which this may be recovered.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $programCode
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimItem
     */
    public function addProgramCode(FHIRCodeableConcept $programCode = null)
    {
        $this->programCode[] = $programCode;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifies the program under which this may be recovered.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[] $programCode
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimItem
     */
    public function setProgramCode(array $programCode = [])
    {
        $this->programCode = [];
        if ([] === $programCode) {
            return $this;
        }
        foreach($programCode as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addProgramCode($v);
            } else {
                $this->addProgramCode(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The number of repetitions of a service or product.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The number of repetitions of a service or product.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity $quantity
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimItem
     */
    public function setQuantity(FHIRQuantity $quantity = null)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The type of revenue or cost center providing the product and/or service.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getRevenue()
    {
        return $this->revenue;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The type of revenue or cost center providing the product and/or service.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $revenue
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimItem
     */
    public function setRevenue(FHIRCodeableConcept $revenue = null)
    {
        $this->revenue = $revenue;
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A number to uniquely identify item entries.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPositiveInt
     */
    public function getSequence()
    {
        return $this->sequence;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A number to uniquely identify item entries.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPositiveInt $sequence
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimItem
     */
    public function setSequence($sequence = null)
    {
        if (null === $sequence) {
            $this->sequence = null;
            return $this;
        }
        if ($sequence instanceof FHIRPositiveInt) {
            $this->sequence = $sequence;
            return $this;
        }
        $this->sequence = new FHIRPositiveInt($sequence);
        return $this;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The date or dates when the service or product was supplied, performed or
     * completed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDate
     */
    public function getServicedDate()
    {
        return $this->servicedDate;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The date or dates when the service or product was supplied, performed or
     * completed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDate $servicedDate
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimItem
     */
    public function setServicedDate($servicedDate = null)
    {
        if (null === $servicedDate) {
            $this->servicedDate = null;
            return $this;
        }
        if ($servicedDate instanceof FHIRDate) {
            $this->servicedDate = $servicedDate;
            return $this;
        }
        $this->servicedDate = new FHIRDate($servicedDate);
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The date or dates when the service or product was supplied, performed or
     * completed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod
     */
    public function getServicedPeriod()
    {
        return $this->servicedPeriod;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The date or dates when the service or product was supplied, performed or
     * completed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod $servicedPeriod
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimItem
     */
    public function setServicedPeriod(FHIRPeriod $servicedPeriod = null)
    {
        $this->servicedPeriod = $servicedPeriod;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A region or surface of the bodySite, e.g. limb region or tooth surface(s).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    public function getSubSite()
    {
        return $this->subSite;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A region or surface of the bodySite, e.g. limb region or tooth surface(s).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $subSite
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimItem
     */
    public function addSubSite(FHIRCodeableConcept $subSite = null)
    {
        $this->subSite[] = $subSite;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A region or surface of the bodySite, e.g. limb region or tooth surface(s).
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[] $subSite
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimItem
     */
    public function setSubSite(array $subSite = [])
    {
        $this->subSite = [];
        if ([] === $subSite) {
            return $this;
        }
        foreach($subSite as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addSubSite($v);
            } else {
                $this->addSubSite(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Unique Device Identifiers associated with this line item.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    public function getUdi()
    {
        return $this->udi;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Unique Device Identifiers associated with this line item.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $udi
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimItem
     */
    public function addUdi(FHIRReference $udi = null)
    {
        $this->udi[] = $udi;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Unique Device Identifiers associated with this line item.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[] $udi
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimItem
     */
    public function setUdi(array $udi = [])
    {
        $this->udi = [];
        if ([] === $udi) {
            return $this;
        }
        foreach($udi as $v) {
            if ($v instanceof FHIRReference) {
                $this->addUdi($v);
            } else {
                $this->addUdi(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * If the item is not a group then this is the fee for the product or service,
     * otherwise this is the total of the fees for the details of the group.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMoney
     */
    public function getUnitPrice()
    {
        return $this->unitPrice;
    }

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * If the item is not a group then this is the fee for the product or service,
     * otherwise this is the total of the fees for the details of the group.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMoney $unitPrice
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimItem
     */
    public function setUnitPrice(FHIRMoney $unitPrice = null)
    {
        $this->unitPrice = $unitPrice;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimItem $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimItem
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
                throw new \DomainException(sprintf('FHIRClaimItem::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRClaimItem::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRClaimItem;
        } elseif (!is_object($type) || !($type instanceof FHIRClaimItem)) {
            throw new \RuntimeException(sprintf(
                'FHIRClaimItem::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimItem or null, %s seen.',
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
        if (isset($children->bodySite)) {
            $type->setBodySite(FHIRCodeableConcept::xmlUnserialize($children->bodySite));
        }
        if (isset($attributes->careTeamSequence)) {
            $type->addCareTeamSequence((string)$attributes->careTeamSequence);
        }
        if (isset($children->careTeamSequence)) {
            foreach($children->careTeamSequence as $child) {
                $type->addCareTeamSequence(FHIRPositiveInt::xmlUnserialize($child));
            }
        }
        if (isset($children->category)) {
            $type->setCategory(FHIRCodeableConcept::xmlUnserialize($children->category));
        }
        if (isset($children->detail)) {
            foreach($children->detail as $child) {
                $type->addDetail(FHIRClaimDetail::xmlUnserialize($child));
            }
        }
        if (isset($attributes->diagnosisSequence)) {
            $type->addDiagnosisSequence((string)$attributes->diagnosisSequence);
        }
        if (isset($children->diagnosisSequence)) {
            foreach($children->diagnosisSequence as $child) {
                $type->addDiagnosisSequence(FHIRPositiveInt::xmlUnserialize($child));
            }
        }
        if (isset($children->encounter)) {
            foreach($children->encounter as $child) {
                $type->addEncounter(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($attributes->factor)) {
            $type->setFactor((string)$attributes->factor);
        }
        if (isset($children->factor)) {
            $type->setFactor(FHIRDecimal::xmlUnserialize($children->factor));
        }
        if (isset($attributes->informationSequence)) {
            $type->addInformationSequence((string)$attributes->informationSequence);
        }
        if (isset($children->informationSequence)) {
            foreach($children->informationSequence as $child) {
                $type->addInformationSequence(FHIRPositiveInt::xmlUnserialize($child));
            }
        }
        if (isset($children->locationAddress)) {
            $type->setLocationAddress(FHIRAddress::xmlUnserialize($children->locationAddress));
        }
        if (isset($children->locationCodeableConcept)) {
            $type->setLocationCodeableConcept(FHIRCodeableConcept::xmlUnserialize($children->locationCodeableConcept));
        }
        if (isset($children->locationReference)) {
            $type->setLocationReference(FHIRReference::xmlUnserialize($children->locationReference));
        }
        if (isset($children->modifier)) {
            foreach($children->modifier as $child) {
                $type->addModifier(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->net)) {
            $type->setNet(FHIRMoney::xmlUnserialize($children->net));
        }
        if (isset($attributes->procedureSequence)) {
            $type->addProcedureSequence((string)$attributes->procedureSequence);
        }
        if (isset($children->procedureSequence)) {
            foreach($children->procedureSequence as $child) {
                $type->addProcedureSequence(FHIRPositiveInt::xmlUnserialize($child));
            }
        }
        if (isset($children->productOrService)) {
            $type->setProductOrService(FHIRCodeableConcept::xmlUnserialize($children->productOrService));
        }
        if (isset($children->programCode)) {
            foreach($children->programCode as $child) {
                $type->addProgramCode(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->quantity)) {
            $type->setQuantity(FHIRQuantity::xmlUnserialize($children->quantity));
        }
        if (isset($children->revenue)) {
            $type->setRevenue(FHIRCodeableConcept::xmlUnserialize($children->revenue));
        }
        if (isset($attributes->sequence)) {
            $type->setSequence((string)$attributes->sequence);
        }
        if (isset($children->sequence)) {
            $type->setSequence(FHIRPositiveInt::xmlUnserialize($children->sequence));
        }
        if (isset($attributes->servicedDate)) {
            $type->setServicedDate((string)$attributes->servicedDate);
        }
        if (isset($children->servicedDate)) {
            $type->setServicedDate(FHIRDate::xmlUnserialize($children->servicedDate));
        }
        if (isset($children->servicedPeriod)) {
            $type->setServicedPeriod(FHIRPeriod::xmlUnserialize($children->servicedPeriod));
        }
        if (isset($children->subSite)) {
            foreach($children->subSite as $child) {
                $type->addSubSite(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->udi)) {
            foreach($children->udi as $child) {
                $type->addUdi(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->unitPrice)) {
            $type->setUnitPrice(FHIRMoney::xmlUnserialize($children->unitPrice));
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

        if (null !== ($v = $this->getBodySite())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_BODY_SITE, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getCareTeamSequence())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_CARE_TEAM_SEQUENCE, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if (null !== ($v = $this->getCategory())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CATEGORY, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getDetail())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_DETAIL, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getDiagnosisSequence())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_DIAGNOSIS_SEQUENCE, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if ([] !== ($vs = $this->getEncounter())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_ENCOUNTER, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getFactor())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_FACTOR, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getInformationSequence())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_INFORMATION_SEQUENCE, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if (null !== ($v = $this->getLocationAddress())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_LOCATION_ADDRESS, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getLocationCodeableConcept())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_LOCATION_CODEABLE_CONCEPT, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getLocationReference())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_LOCATION_REFERENCE, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getModifier())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_MODIFIER, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getNet())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_NET, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getProcedureSequence())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PROCEDURE_SEQUENCE, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if (null !== ($v = $this->getProductOrService())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PRODUCT_OR_SERVICE, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getProgramCode())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PROGRAM_CODE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getQuantity())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_QUANTITY, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getRevenue())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_REVENUE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getSequence())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SEQUENCE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getServicedDate())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SERVICED_DATE, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getServicedPeriod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SERVICED_PERIOD, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getSubSite())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_SUB_SITE, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if ([] !== ($vs = $this->getUdi())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_UDI, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getUnitPrice())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_UNIT_PRICE, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getBodySite())) {
            $a[self::FIELD_BODY_SITE] = $v;
        }
        if ([] !== ($vs = $this->getCareTeamSequence())) {
            $a[self::FIELD_CARE_TEAM_SEQUENCE] = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_CARE_TEAM_SEQUENCE][] = $v->getValue();
                if ($v->_hasNonValueFieldsDefined()) {
                    if (!isset($a[self::FIELD_CARE_TEAM_SEQUENCE_EXT])) {
                        $a[self::FIELD_CARE_TEAM_SEQUENCE_EXT] = [];
                    }
                    $a[self::FIELD_CARE_TEAM_SEQUENCE_EXT][] = $v;
                }
            }
        }
        if (null !== ($v = $this->getCategory())) {
            $a[self::FIELD_CATEGORY] = $v;
        }
        if ([] !== ($vs = $this->getDetail())) {
            $a[self::FIELD_DETAIL] = $vs;
        }
        if ([] !== ($vs = $this->getDiagnosisSequence())) {
            $a[self::FIELD_DIAGNOSIS_SEQUENCE] = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_DIAGNOSIS_SEQUENCE][] = $v->getValue();
                if ($v->_hasNonValueFieldsDefined()) {
                    if (!isset($a[self::FIELD_DIAGNOSIS_SEQUENCE_EXT])) {
                        $a[self::FIELD_DIAGNOSIS_SEQUENCE_EXT] = [];
                    }
                    $a[self::FIELD_DIAGNOSIS_SEQUENCE_EXT][] = $v;
                }
            }
        }
        if ([] !== ($vs = $this->getEncounter())) {
            $a[self::FIELD_ENCOUNTER] = $vs;
        }
        if (null !== ($v = $this->getFactor())) {
            $a[self::FIELD_FACTOR] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_FACTOR_EXT] = $v;
            }
        }
        if ([] !== ($vs = $this->getInformationSequence())) {
            $a[self::FIELD_INFORMATION_SEQUENCE] = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_INFORMATION_SEQUENCE][] = $v->getValue();
                if ($v->_hasNonValueFieldsDefined()) {
                    if (!isset($a[self::FIELD_INFORMATION_SEQUENCE_EXT])) {
                        $a[self::FIELD_INFORMATION_SEQUENCE_EXT] = [];
                    }
                    $a[self::FIELD_INFORMATION_SEQUENCE_EXT][] = $v;
                }
            }
        }
        if (null !== ($v = $this->getLocationAddress())) {
            $a[self::FIELD_LOCATION_ADDRESS] = $v;
        }
        if (null !== ($v = $this->getLocationCodeableConcept())) {
            $a[self::FIELD_LOCATION_CODEABLE_CONCEPT] = $v;
        }
        if (null !== ($v = $this->getLocationReference())) {
            $a[self::FIELD_LOCATION_REFERENCE] = $v;
        }
        if ([] !== ($vs = $this->getModifier())) {
            $a[self::FIELD_MODIFIER] = $vs;
        }
        if (null !== ($v = $this->getNet())) {
            $a[self::FIELD_NET] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_NET_EXT] = $v;
            }
        }
        if ([] !== ($vs = $this->getProcedureSequence())) {
            $a[self::FIELD_PROCEDURE_SEQUENCE] = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_PROCEDURE_SEQUENCE][] = $v->getValue();
                if ($v->_hasNonValueFieldsDefined()) {
                    if (!isset($a[self::FIELD_PROCEDURE_SEQUENCE_EXT])) {
                        $a[self::FIELD_PROCEDURE_SEQUENCE_EXT] = [];
                    }
                    $a[self::FIELD_PROCEDURE_SEQUENCE_EXT][] = $v;
                }
            }
        }
        if (null !== ($v = $this->getProductOrService())) {
            $a[self::FIELD_PRODUCT_OR_SERVICE] = $v;
        }
        if ([] !== ($vs = $this->getProgramCode())) {
            $a[self::FIELD_PROGRAM_CODE] = $vs;
        }
        if (null !== ($v = $this->getQuantity())) {
            $a[self::FIELD_QUANTITY] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_QUANTITY_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getRevenue())) {
            $a[self::FIELD_REVENUE] = $v;
        }
        if (null !== ($v = $this->getSequence())) {
            $a[self::FIELD_SEQUENCE] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_SEQUENCE_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getServicedDate())) {
            $a[self::FIELD_SERVICED_DATE] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_SERVICED_DATE_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getServicedPeriod())) {
            $a[self::FIELD_SERVICED_PERIOD] = $v;
        }
        if ([] !== ($vs = $this->getSubSite())) {
            $a[self::FIELD_SUB_SITE] = $vs;
        }
        if ([] !== ($vs = $this->getUdi())) {
            $a[self::FIELD_UDI] = $vs;
        }
        if (null !== ($v = $this->getUnitPrice())) {
            $a[self::FIELD_UNIT_PRICE] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_UNIT_PRICE_EXT] = $v;
            }
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