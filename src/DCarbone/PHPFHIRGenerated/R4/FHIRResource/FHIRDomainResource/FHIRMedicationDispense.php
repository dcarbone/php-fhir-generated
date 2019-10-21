<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;

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

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAnnotation;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDosage;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationDispense\FHIRMedicationDispensePerformer;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationDispense\FHIRMedicationDispenseSubstitution;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * Indicates that a medication product is to be or has been dispensed for a named
 * person/patient. This includes a description of the medication product (supply)
 * provided and the instructions for administering the medication. The medication
 * dispense is the result of a pharmacy system responding to a medication order.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRMedicationDispense
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource
 */
class FHIRMedicationDispense extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_MEDICATION_DISPENSE;

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    const FIELD_AUTHORIZING_PRESCRIPTION = 'authorizingPrescription';
    const FIELD_CATEGORY = 'category';
    const FIELD_CONTEXT = 'context';
    const FIELD_DAYS_SUPPLY = 'daysSupply';
    const FIELD_DAYS_SUPPLY_EXT = '_daysSupply';
    const FIELD_DESTINATION = 'destination';
    const FIELD_DETECTED_ISSUE = 'detectedIssue';
    const FIELD_DOSAGE_INSTRUCTION = 'dosageInstruction';
    const FIELD_EVENT_HISTORY = 'eventHistory';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_IDENTIFIER_EXT = '_identifier';
    const FIELD_LOCATION = 'location';
    const FIELD_MEDICATION_CODEABLE_CONCEPT = 'medicationCodeableConcept';
    const FIELD_MEDICATION_REFERENCE = 'medicationReference';
    const FIELD_NOTE = 'note';
    const FIELD_PART_OF = 'partOf';
    const FIELD_PERFORMER = 'performer';
    const FIELD_QUANTITY = 'quantity';
    const FIELD_QUANTITY_EXT = '_quantity';
    const FIELD_RECEIVER = 'receiver';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';
    const FIELD_STATUS_REASON_CODEABLE_CONCEPT = 'statusReasonCodeableConcept';
    const FIELD_STATUS_REASON_REFERENCE = 'statusReasonReference';
    const FIELD_SUBJECT = 'subject';
    const FIELD_SUBSTITUTION = 'substitution';
    const FIELD_SUPPORTING_INFORMATION = 'supportingInformation';
    const FIELD_TYPE = 'type';
    const FIELD_WHEN_HANDED_OVER = 'whenHandedOver';
    const FIELD_WHEN_HANDED_OVER_EXT = '_whenHandedOver';
    const FIELD_WHEN_PREPARED = 'whenPrepared';
    const FIELD_WHEN_PREPARED_EXT = '_whenPrepared';

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates the medication order that is being dispensed against.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    private $authorizingPrescription = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates the type of medication dispense (for example, where the medication is
     * expected to be consumed or administered (i.e. inpatient or outpatient)).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    private $category = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The encounter or episode of care that establishes the context for this event.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    private $context = null;
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The amount of medication expressed as a timing amount.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity
     */
    private $daysSupply = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identification of the facility/location where the medication was shipped to, as
     * part of the dispense event.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    private $destination = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates an actual or potential clinical issue with or between one or more
     * active or proposed clinical actions for a patient; e.g. drug-drug interaction,
     * duplicate therapy, dosage alert etc.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    private $detectedIssue = [];
    /**
     * Indicates how the medication is/was taken or should be taken by the patient.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates how the medication is to be used by the patient.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDosage[]
     */
    private $dosageInstruction = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A summary of the events of interest that have occurred, such as when the
     * dispense was verified.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    private $eventHistory = [];
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifiers associated with this Medication Dispense that are defined by
     * business processes and/or used to refer to it when a direct URL reference to the
     * resource itself is not appropriate. They are business identifiers assigned to
     * this resource by the performer or other systems and remain constant as the
     * resource is updated and propagates from server to server.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[]
     */
    private $identifier = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The principal physical location where the dispense was performed.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    private $location = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifies the medication being administered. This is either a link to a
     * resource representing the details of the medication or a simple attribute
     * carrying a code that identifies the medication from a known list of medications.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    private $medicationCodeableConcept = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifies the medication being administered. This is either a link to a
     * resource representing the details of the medication or a simple attribute
     * carrying a code that identifies the medication from a known list of medications.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    private $medicationReference = null;
    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Extra information about the dispense that could not be conveyed in the other
     * attributes.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAnnotation[]
     */
    private $note = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The procedure that trigger the dispense.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    private $partOf = [];
    /**
     * Indicates that a medication product is to be or has been dispensed for a named
     * person/patient. This includes a description of the medication product (supply)
     * provided and the instructions for administering the medication. The medication
     * dispense is the result of a pharmacy system responding to a medication order.
     *
     * Indicates who or what performed the event.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationDispense\FHIRMedicationDispensePerformer[]
     */
    private $performer = [];
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The amount of medication that has been dispensed. Includes unit of measure.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity
     */
    private $quantity = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifies the person who picked up the medication. This will usually be a
     * patient or their caregiver, but some cases exist where it can be a healthcare
     * professional.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    private $receiver = [];
    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A code specifying the state of the set of dispense events.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCode
     */
    private $status = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates the reason why a dispense was not performed.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    private $statusReasonCodeableConcept = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates the reason why a dispense was not performed.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    private $statusReasonReference = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A link to a resource representing the person or the group to whom the medication
     * will be given.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    private $subject = null;
    /**
     * Indicates that a medication product is to be or has been dispensed for a named
     * person/patient. This includes a description of the medication product (supply)
     * provided and the instructions for administering the medication. The medication
     * dispense is the result of a pharmacy system responding to a medication order.
     *
     * Indicates whether or not substitution was made as part of the dispense. In some
     * cases, substitution will be expected but does not happen, in other cases
     * substitution is not expected but does happen. This block explains what
     * substitution did or did not happen and why. If nothing is specified,
     * substitution was not done.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationDispense\FHIRMedicationDispenseSubstitution
     */
    private $substitution = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Additional information that supports the medication being dispensed.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    private $supportingInformation = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates the type of dispensing event that is performed. For example, Trial
     * Fill, Completion of Trial, Partial Fill, Emergency Fill, Samples, etc.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    private $type = null;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The time the dispensed product was provided to the patient or their
     * representative.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    private $whenHandedOver = null;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The time when the dispensed product was packaged and reviewed.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    private $whenPrepared = null;

    /**
     * FHIRMedicationDispense Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMedicationDispense::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_AUTHORIZING_PRESCRIPTION])) {
            if (is_array($data[self::FIELD_AUTHORIZING_PRESCRIPTION])) {
                foreach($data[self::FIELD_AUTHORIZING_PRESCRIPTION] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addAuthorizingPrescription($v);
                    } else {
                        $this->addAuthorizingPrescription(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_AUTHORIZING_PRESCRIPTION] instanceof FHIRReference) {
                $this->addAuthorizingPrescription($data[self::FIELD_AUTHORIZING_PRESCRIPTION]);
            } else {
                $this->addAuthorizingPrescription(new FHIRReference($data[self::FIELD_AUTHORIZING_PRESCRIPTION]));
            }
        }
        if (isset($data[self::FIELD_CATEGORY])) {
            if ($data[self::FIELD_CATEGORY] instanceof FHIRCodeableConcept) {
                $this->setCategory($data[self::FIELD_CATEGORY]);
            } else {
                $this->setCategory(new FHIRCodeableConcept($data[self::FIELD_CATEGORY]));
            }
        }
        if (isset($data[self::FIELD_CONTEXT])) {
            if ($data[self::FIELD_CONTEXT] instanceof FHIRReference) {
                $this->setContext($data[self::FIELD_CONTEXT]);
            } else {
                $this->setContext(new FHIRReference($data[self::FIELD_CONTEXT]));
            }
        }
        if (isset($data[self::FIELD_DAYS_SUPPLY])) {
            $ext = (isset($data[self::FIELD_DAYS_SUPPLY_EXT]) && is_array($data[self::FIELD_DAYS_SUPPLY_EXT]))
                ? $data[self::FIELD_DAYS_SUPPLY_EXT]
                : null;
            if ($data[self::FIELD_DAYS_SUPPLY] instanceof FHIRQuantity) {
                $this->setDaysSupply($data[self::FIELD_DAYS_SUPPLY]);
            } elseif ($ext && is_scalar($data[self::FIELD_DAYS_SUPPLY])) {
                $this->setDaysSupply(new FHIRQuantity([FHIRQuantity::FIELD_VALUE => $data[self::FIELD_DAYS_SUPPLY]] + $ext));
            } else {
                $this->setDaysSupply(new FHIRQuantity($data[self::FIELD_DAYS_SUPPLY]));
            }
        }
        if (isset($data[self::FIELD_DESTINATION])) {
            if ($data[self::FIELD_DESTINATION] instanceof FHIRReference) {
                $this->setDestination($data[self::FIELD_DESTINATION]);
            } else {
                $this->setDestination(new FHIRReference($data[self::FIELD_DESTINATION]));
            }
        }
        if (isset($data[self::FIELD_DETECTED_ISSUE])) {
            if (is_array($data[self::FIELD_DETECTED_ISSUE])) {
                foreach($data[self::FIELD_DETECTED_ISSUE] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addDetectedIssue($v);
                    } else {
                        $this->addDetectedIssue(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_DETECTED_ISSUE] instanceof FHIRReference) {
                $this->addDetectedIssue($data[self::FIELD_DETECTED_ISSUE]);
            } else {
                $this->addDetectedIssue(new FHIRReference($data[self::FIELD_DETECTED_ISSUE]));
            }
        }
        if (isset($data[self::FIELD_DOSAGE_INSTRUCTION])) {
            if (is_array($data[self::FIELD_DOSAGE_INSTRUCTION])) {
                foreach($data[self::FIELD_DOSAGE_INSTRUCTION] as $v) {
                    if ($v instanceof FHIRDosage) {
                        $this->addDosageInstruction($v);
                    } else {
                        $this->addDosageInstruction(new FHIRDosage($v));
                    }
                }
            } else if ($data[self::FIELD_DOSAGE_INSTRUCTION] instanceof FHIRDosage) {
                $this->addDosageInstruction($data[self::FIELD_DOSAGE_INSTRUCTION]);
            } else {
                $this->addDosageInstruction(new FHIRDosage($data[self::FIELD_DOSAGE_INSTRUCTION]));
            }
        }
        if (isset($data[self::FIELD_EVENT_HISTORY])) {
            if (is_array($data[self::FIELD_EVENT_HISTORY])) {
                foreach($data[self::FIELD_EVENT_HISTORY] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addEventHistory($v);
                    } else {
                        $this->addEventHistory(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_EVENT_HISTORY] instanceof FHIRReference) {
                $this->addEventHistory($data[self::FIELD_EVENT_HISTORY]);
            } else {
                $this->addEventHistory(new FHIRReference($data[self::FIELD_EVENT_HISTORY]));
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
        if (isset($data[self::FIELD_LOCATION])) {
            if ($data[self::FIELD_LOCATION] instanceof FHIRReference) {
                $this->setLocation($data[self::FIELD_LOCATION]);
            } else {
                $this->setLocation(new FHIRReference($data[self::FIELD_LOCATION]));
            }
        }
        if (isset($data[self::FIELD_MEDICATION_CODEABLE_CONCEPT])) {
            if ($data[self::FIELD_MEDICATION_CODEABLE_CONCEPT] instanceof FHIRCodeableConcept) {
                $this->setMedicationCodeableConcept($data[self::FIELD_MEDICATION_CODEABLE_CONCEPT]);
            } else {
                $this->setMedicationCodeableConcept(new FHIRCodeableConcept($data[self::FIELD_MEDICATION_CODEABLE_CONCEPT]));
            }
        }
        if (isset($data[self::FIELD_MEDICATION_REFERENCE])) {
            if ($data[self::FIELD_MEDICATION_REFERENCE] instanceof FHIRReference) {
                $this->setMedicationReference($data[self::FIELD_MEDICATION_REFERENCE]);
            } else {
                $this->setMedicationReference(new FHIRReference($data[self::FIELD_MEDICATION_REFERENCE]));
            }
        }
        if (isset($data[self::FIELD_NOTE])) {
            if (is_array($data[self::FIELD_NOTE])) {
                foreach($data[self::FIELD_NOTE] as $v) {
                    if ($v instanceof FHIRAnnotation) {
                        $this->addNote($v);
                    } else {
                        $this->addNote(new FHIRAnnotation($v));
                    }
                }
            } else if ($data[self::FIELD_NOTE] instanceof FHIRAnnotation) {
                $this->addNote($data[self::FIELD_NOTE]);
            } else {
                $this->addNote(new FHIRAnnotation($data[self::FIELD_NOTE]));
            }
        }
        if (isset($data[self::FIELD_PART_OF])) {
            if (is_array($data[self::FIELD_PART_OF])) {
                foreach($data[self::FIELD_PART_OF] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addPartOf($v);
                    } else {
                        $this->addPartOf(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_PART_OF] instanceof FHIRReference) {
                $this->addPartOf($data[self::FIELD_PART_OF]);
            } else {
                $this->addPartOf(new FHIRReference($data[self::FIELD_PART_OF]));
            }
        }
        if (isset($data[self::FIELD_PERFORMER])) {
            if (is_array($data[self::FIELD_PERFORMER])) {
                foreach($data[self::FIELD_PERFORMER] as $v) {
                    if ($v instanceof FHIRMedicationDispensePerformer) {
                        $this->addPerformer($v);
                    } else {
                        $this->addPerformer(new FHIRMedicationDispensePerformer($v));
                    }
                }
            } else if ($data[self::FIELD_PERFORMER] instanceof FHIRMedicationDispensePerformer) {
                $this->addPerformer($data[self::FIELD_PERFORMER]);
            } else {
                $this->addPerformer(new FHIRMedicationDispensePerformer($data[self::FIELD_PERFORMER]));
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
        if (isset($data[self::FIELD_RECEIVER])) {
            if (is_array($data[self::FIELD_RECEIVER])) {
                foreach($data[self::FIELD_RECEIVER] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addReceiver($v);
                    } else {
                        $this->addReceiver(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_RECEIVER] instanceof FHIRReference) {
                $this->addReceiver($data[self::FIELD_RECEIVER]);
            } else {
                $this->addReceiver(new FHIRReference($data[self::FIELD_RECEIVER]));
            }
        }
        if (isset($data[self::FIELD_STATUS])) {
            $ext = (isset($data[self::FIELD_STATUS_EXT]) && is_array($data[self::FIELD_STATUS_EXT]))
                ? $data[self::FIELD_STATUS_EXT]
                : null;
            if ($data[self::FIELD_STATUS] instanceof FHIRCode) {
                $this->setStatus($data[self::FIELD_STATUS]);
            } elseif ($ext && is_scalar($data[self::FIELD_STATUS])) {
                $this->setStatus(new FHIRCode([FHIRCode::FIELD_VALUE => $data[self::FIELD_STATUS]] + $ext));
            } else {
                $this->setStatus(new FHIRCode($data[self::FIELD_STATUS]));
            }
        }
        if (isset($data[self::FIELD_STATUS_REASON_CODEABLE_CONCEPT])) {
            if ($data[self::FIELD_STATUS_REASON_CODEABLE_CONCEPT] instanceof FHIRCodeableConcept) {
                $this->setStatusReasonCodeableConcept($data[self::FIELD_STATUS_REASON_CODEABLE_CONCEPT]);
            } else {
                $this->setStatusReasonCodeableConcept(new FHIRCodeableConcept($data[self::FIELD_STATUS_REASON_CODEABLE_CONCEPT]));
            }
        }
        if (isset($data[self::FIELD_STATUS_REASON_REFERENCE])) {
            if ($data[self::FIELD_STATUS_REASON_REFERENCE] instanceof FHIRReference) {
                $this->setStatusReasonReference($data[self::FIELD_STATUS_REASON_REFERENCE]);
            } else {
                $this->setStatusReasonReference(new FHIRReference($data[self::FIELD_STATUS_REASON_REFERENCE]));
            }
        }
        if (isset($data[self::FIELD_SUBJECT])) {
            if ($data[self::FIELD_SUBJECT] instanceof FHIRReference) {
                $this->setSubject($data[self::FIELD_SUBJECT]);
            } else {
                $this->setSubject(new FHIRReference($data[self::FIELD_SUBJECT]));
            }
        }
        if (isset($data[self::FIELD_SUBSTITUTION])) {
            if ($data[self::FIELD_SUBSTITUTION] instanceof FHIRMedicationDispenseSubstitution) {
                $this->setSubstitution($data[self::FIELD_SUBSTITUTION]);
            } else {
                $this->setSubstitution(new FHIRMedicationDispenseSubstitution($data[self::FIELD_SUBSTITUTION]));
            }
        }
        if (isset($data[self::FIELD_SUPPORTING_INFORMATION])) {
            if (is_array($data[self::FIELD_SUPPORTING_INFORMATION])) {
                foreach($data[self::FIELD_SUPPORTING_INFORMATION] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addSupportingInformation($v);
                    } else {
                        $this->addSupportingInformation(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_SUPPORTING_INFORMATION] instanceof FHIRReference) {
                $this->addSupportingInformation($data[self::FIELD_SUPPORTING_INFORMATION]);
            } else {
                $this->addSupportingInformation(new FHIRReference($data[self::FIELD_SUPPORTING_INFORMATION]));
            }
        }
        if (isset($data[self::FIELD_TYPE])) {
            if ($data[self::FIELD_TYPE] instanceof FHIRCodeableConcept) {
                $this->setType($data[self::FIELD_TYPE]);
            } else {
                $this->setType(new FHIRCodeableConcept($data[self::FIELD_TYPE]));
            }
        }
        if (isset($data[self::FIELD_WHEN_HANDED_OVER])) {
            $ext = (isset($data[self::FIELD_WHEN_HANDED_OVER_EXT]) && is_array($data[self::FIELD_WHEN_HANDED_OVER_EXT]))
                ? $data[self::FIELD_WHEN_HANDED_OVER_EXT]
                : null;
            if ($data[self::FIELD_WHEN_HANDED_OVER] instanceof FHIRDateTime) {
                $this->setWhenHandedOver($data[self::FIELD_WHEN_HANDED_OVER]);
            } elseif ($ext && is_scalar($data[self::FIELD_WHEN_HANDED_OVER])) {
                $this->setWhenHandedOver(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $data[self::FIELD_WHEN_HANDED_OVER]] + $ext));
            } else {
                $this->setWhenHandedOver(new FHIRDateTime($data[self::FIELD_WHEN_HANDED_OVER]));
            }
        }
        if (isset($data[self::FIELD_WHEN_PREPARED])) {
            $ext = (isset($data[self::FIELD_WHEN_PREPARED_EXT]) && is_array($data[self::FIELD_WHEN_PREPARED_EXT]))
                ? $data[self::FIELD_WHEN_PREPARED_EXT]
                : null;
            if ($data[self::FIELD_WHEN_PREPARED] instanceof FHIRDateTime) {
                $this->setWhenPrepared($data[self::FIELD_WHEN_PREPARED]);
            } elseif ($ext && is_scalar($data[self::FIELD_WHEN_PREPARED])) {
                $this->setWhenPrepared(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $data[self::FIELD_WHEN_PREPARED]] + $ext));
            } else {
                $this->setWhenPrepared(new FHIRDateTime($data[self::FIELD_WHEN_PREPARED]));
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
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicationDispense
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
        return "<MedicationDispense{$xmlns}></MedicationDispense>";
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates the medication order that is being dispensed against.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    public function getAuthorizingPrescription()
    {
        return $this->authorizingPrescription;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates the medication order that is being dispensed against.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $authorizingPrescription
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicationDispense
     */
    public function addAuthorizingPrescription(FHIRReference $authorizingPrescription = null)
    {
        $this->authorizingPrescription[] = $authorizingPrescription;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates the medication order that is being dispensed against.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[] $authorizingPrescription
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicationDispense
     */
    public function setAuthorizingPrescription(array $authorizingPrescription = [])
    {
        $this->authorizingPrescription = [];
        if ([] === $authorizingPrescription) {
            return $this;
        }
        foreach($authorizingPrescription as $v) {
            if ($v instanceof FHIRReference) {
                $this->addAuthorizingPrescription($v);
            } else {
                $this->addAuthorizingPrescription(new FHIRReference($v));
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
     * Indicates the type of medication dispense (for example, where the medication is
     * expected to be consumed or administered (i.e. inpatient or outpatient)).
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
     * Indicates the type of medication dispense (for example, where the medication is
     * expected to be consumed or administered (i.e. inpatient or outpatient)).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $category
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicationDispense
     */
    public function setCategory(FHIRCodeableConcept $category = null)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The encounter or episode of care that establishes the context for this event.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The encounter or episode of care that establishes the context for this event.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $context
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicationDispense
     */
    public function setContext(FHIRReference $context = null)
    {
        $this->context = $context;
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The amount of medication expressed as a timing amount.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity
     */
    public function getDaysSupply()
    {
        return $this->daysSupply;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The amount of medication expressed as a timing amount.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity $daysSupply
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicationDispense
     */
    public function setDaysSupply(FHIRQuantity $daysSupply = null)
    {
        $this->daysSupply = $daysSupply;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identification of the facility/location where the medication was shipped to, as
     * part of the dispense event.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identification of the facility/location where the medication was shipped to, as
     * part of the dispense event.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $destination
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicationDispense
     */
    public function setDestination(FHIRReference $destination = null)
    {
        $this->destination = $destination;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates an actual or potential clinical issue with or between one or more
     * active or proposed clinical actions for a patient; e.g. drug-drug interaction,
     * duplicate therapy, dosage alert etc.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    public function getDetectedIssue()
    {
        return $this->detectedIssue;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates an actual or potential clinical issue with or between one or more
     * active or proposed clinical actions for a patient; e.g. drug-drug interaction,
     * duplicate therapy, dosage alert etc.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $detectedIssue
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicationDispense
     */
    public function addDetectedIssue(FHIRReference $detectedIssue = null)
    {
        $this->detectedIssue[] = $detectedIssue;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates an actual or potential clinical issue with or between one or more
     * active or proposed clinical actions for a patient; e.g. drug-drug interaction,
     * duplicate therapy, dosage alert etc.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[] $detectedIssue
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicationDispense
     */
    public function setDetectedIssue(array $detectedIssue = [])
    {
        $this->detectedIssue = [];
        if ([] === $detectedIssue) {
            return $this;
        }
        foreach($detectedIssue as $v) {
            if ($v instanceof FHIRReference) {
                $this->addDetectedIssue($v);
            } else {
                $this->addDetectedIssue(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * Indicates how the medication is/was taken or should be taken by the patient.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates how the medication is to be used by the patient.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDosage[]
     */
    public function getDosageInstruction()
    {
        return $this->dosageInstruction;
    }

    /**
     * Indicates how the medication is/was taken or should be taken by the patient.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates how the medication is to be used by the patient.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDosage $dosageInstruction
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicationDispense
     */
    public function addDosageInstruction(FHIRDosage $dosageInstruction = null)
    {
        $this->dosageInstruction[] = $dosageInstruction;
        return $this;
    }

    /**
     * Indicates how the medication is/was taken or should be taken by the patient.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates how the medication is to be used by the patient.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDosage[] $dosageInstruction
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicationDispense
     */
    public function setDosageInstruction(array $dosageInstruction = [])
    {
        $this->dosageInstruction = [];
        if ([] === $dosageInstruction) {
            return $this;
        }
        foreach($dosageInstruction as $v) {
            if ($v instanceof FHIRDosage) {
                $this->addDosageInstruction($v);
            } else {
                $this->addDosageInstruction(new FHIRDosage($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A summary of the events of interest that have occurred, such as when the
     * dispense was verified.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    public function getEventHistory()
    {
        return $this->eventHistory;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A summary of the events of interest that have occurred, such as when the
     * dispense was verified.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $eventHistory
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicationDispense
     */
    public function addEventHistory(FHIRReference $eventHistory = null)
    {
        $this->eventHistory[] = $eventHistory;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A summary of the events of interest that have occurred, such as when the
     * dispense was verified.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[] $eventHistory
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicationDispense
     */
    public function setEventHistory(array $eventHistory = [])
    {
        $this->eventHistory = [];
        if ([] === $eventHistory) {
            return $this;
        }
        foreach($eventHistory as $v) {
            if ($v instanceof FHIRReference) {
                $this->addEventHistory($v);
            } else {
                $this->addEventHistory(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifiers associated with this Medication Dispense that are defined by
     * business processes and/or used to refer to it when a direct URL reference to the
     * resource itself is not appropriate. They are business identifiers assigned to
     * this resource by the performer or other systems and remain constant as the
     * resource is updated and propagates from server to server.
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifiers associated with this Medication Dispense that are defined by
     * business processes and/or used to refer to it when a direct URL reference to the
     * resource itself is not appropriate. They are business identifiers assigned to
     * this resource by the performer or other systems and remain constant as the
     * resource is updated and propagates from server to server.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier $identifier
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicationDispense
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
     * Identifiers associated with this Medication Dispense that are defined by
     * business processes and/or used to refer to it when a direct URL reference to the
     * resource itself is not appropriate. They are business identifiers assigned to
     * this resource by the performer or other systems and remain constant as the
     * resource is updated and propagates from server to server.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[] $identifier
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicationDispense
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
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The principal physical location where the dispense was performed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The principal physical location where the dispense was performed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $location
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicationDispense
     */
    public function setLocation(FHIRReference $location = null)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifies the medication being administered. This is either a link to a
     * resource representing the details of the medication or a simple attribute
     * carrying a code that identifies the medication from a known list of medications.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getMedicationCodeableConcept()
    {
        return $this->medicationCodeableConcept;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifies the medication being administered. This is either a link to a
     * resource representing the details of the medication or a simple attribute
     * carrying a code that identifies the medication from a known list of medications.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $medicationCodeableConcept
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicationDispense
     */
    public function setMedicationCodeableConcept(FHIRCodeableConcept $medicationCodeableConcept = null)
    {
        $this->medicationCodeableConcept = $medicationCodeableConcept;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifies the medication being administered. This is either a link to a
     * resource representing the details of the medication or a simple attribute
     * carrying a code that identifies the medication from a known list of medications.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getMedicationReference()
    {
        return $this->medicationReference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifies the medication being administered. This is either a link to a
     * resource representing the details of the medication or a simple attribute
     * carrying a code that identifies the medication from a known list of medications.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $medicationReference
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicationDispense
     */
    public function setMedicationReference(FHIRReference $medicationReference = null)
    {
        $this->medicationReference = $medicationReference;
        return $this;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Extra information about the dispense that could not be conveyed in the other
     * attributes.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAnnotation[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Extra information about the dispense that could not be conveyed in the other
     * attributes.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAnnotation $note
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicationDispense
     */
    public function addNote(FHIRAnnotation $note = null)
    {
        $this->note[] = $note;
        return $this;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Extra information about the dispense that could not be conveyed in the other
     * attributes.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAnnotation[] $note
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicationDispense
     */
    public function setNote(array $note = [])
    {
        $this->note = [];
        if ([] === $note) {
            return $this;
        }
        foreach($note as $v) {
            if ($v instanceof FHIRAnnotation) {
                $this->addNote($v);
            } else {
                $this->addNote(new FHIRAnnotation($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The procedure that trigger the dispense.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    public function getPartOf()
    {
        return $this->partOf;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The procedure that trigger the dispense.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $partOf
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicationDispense
     */
    public function addPartOf(FHIRReference $partOf = null)
    {
        $this->partOf[] = $partOf;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The procedure that trigger the dispense.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[] $partOf
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicationDispense
     */
    public function setPartOf(array $partOf = [])
    {
        $this->partOf = [];
        if ([] === $partOf) {
            return $this;
        }
        foreach($partOf as $v) {
            if ($v instanceof FHIRReference) {
                $this->addPartOf($v);
            } else {
                $this->addPartOf(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * Indicates that a medication product is to be or has been dispensed for a named
     * person/patient. This includes a description of the medication product (supply)
     * provided and the instructions for administering the medication. The medication
     * dispense is the result of a pharmacy system responding to a medication order.
     *
     * Indicates who or what performed the event.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationDispense\FHIRMedicationDispensePerformer[]
     */
    public function getPerformer()
    {
        return $this->performer;
    }

    /**
     * Indicates that a medication product is to be or has been dispensed for a named
     * person/patient. This includes a description of the medication product (supply)
     * provided and the instructions for administering the medication. The medication
     * dispense is the result of a pharmacy system responding to a medication order.
     *
     * Indicates who or what performed the event.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationDispense\FHIRMedicationDispensePerformer $performer
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicationDispense
     */
    public function addPerformer(FHIRMedicationDispensePerformer $performer = null)
    {
        $this->performer[] = $performer;
        return $this;
    }

    /**
     * Indicates that a medication product is to be or has been dispensed for a named
     * person/patient. This includes a description of the medication product (supply)
     * provided and the instructions for administering the medication. The medication
     * dispense is the result of a pharmacy system responding to a medication order.
     *
     * Indicates who or what performed the event.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationDispense\FHIRMedicationDispensePerformer[] $performer
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicationDispense
     */
    public function setPerformer(array $performer = [])
    {
        $this->performer = [];
        if ([] === $performer) {
            return $this;
        }
        foreach($performer as $v) {
            if ($v instanceof FHIRMedicationDispensePerformer) {
                $this->addPerformer($v);
            } else {
                $this->addPerformer(new FHIRMedicationDispensePerformer($v));
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
     * The amount of medication that has been dispensed. Includes unit of measure.
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
     * The amount of medication that has been dispensed. Includes unit of measure.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity $quantity
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicationDispense
     */
    public function setQuantity(FHIRQuantity $quantity = null)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifies the person who picked up the medication. This will usually be a
     * patient or their caregiver, but some cases exist where it can be a healthcare
     * professional.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    public function getReceiver()
    {
        return $this->receiver;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifies the person who picked up the medication. This will usually be a
     * patient or their caregiver, but some cases exist where it can be a healthcare
     * professional.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $receiver
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicationDispense
     */
    public function addReceiver(FHIRReference $receiver = null)
    {
        $this->receiver[] = $receiver;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifies the person who picked up the medication. This will usually be a
     * patient or their caregiver, but some cases exist where it can be a healthcare
     * professional.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[] $receiver
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicationDispense
     */
    public function setReceiver(array $receiver = [])
    {
        $this->receiver = [];
        if ([] === $receiver) {
            return $this;
        }
        foreach($receiver as $v) {
            if ($v instanceof FHIRReference) {
                $this->addReceiver($v);
            } else {
                $this->addReceiver(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A code specifying the state of the set of dispense events.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCode
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A code specifying the state of the set of dispense events.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCode $status
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicationDispense
     */
    public function setStatus($status = null)
    {
        if (null === $status) {
            $this->status = null;
            return $this;
        }
        if ($status instanceof FHIRCode) {
            $this->status = $status;
            return $this;
        }
        $this->status = new FHIRCode($status);
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates the reason why a dispense was not performed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getStatusReasonCodeableConcept()
    {
        return $this->statusReasonCodeableConcept;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates the reason why a dispense was not performed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $statusReasonCodeableConcept
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicationDispense
     */
    public function setStatusReasonCodeableConcept(FHIRCodeableConcept $statusReasonCodeableConcept = null)
    {
        $this->statusReasonCodeableConcept = $statusReasonCodeableConcept;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates the reason why a dispense was not performed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getStatusReasonReference()
    {
        return $this->statusReasonReference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates the reason why a dispense was not performed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $statusReasonReference
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicationDispense
     */
    public function setStatusReasonReference(FHIRReference $statusReasonReference = null)
    {
        $this->statusReasonReference = $statusReasonReference;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A link to a resource representing the person or the group to whom the medication
     * will be given.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A link to a resource representing the person or the group to whom the medication
     * will be given.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $subject
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicationDispense
     */
    public function setSubject(FHIRReference $subject = null)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * Indicates that a medication product is to be or has been dispensed for a named
     * person/patient. This includes a description of the medication product (supply)
     * provided and the instructions for administering the medication. The medication
     * dispense is the result of a pharmacy system responding to a medication order.
     *
     * Indicates whether or not substitution was made as part of the dispense. In some
     * cases, substitution will be expected but does not happen, in other cases
     * substitution is not expected but does happen. This block explains what
     * substitution did or did not happen and why. If nothing is specified,
     * substitution was not done.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationDispense\FHIRMedicationDispenseSubstitution
     */
    public function getSubstitution()
    {
        return $this->substitution;
    }

    /**
     * Indicates that a medication product is to be or has been dispensed for a named
     * person/patient. This includes a description of the medication product (supply)
     * provided and the instructions for administering the medication. The medication
     * dispense is the result of a pharmacy system responding to a medication order.
     *
     * Indicates whether or not substitution was made as part of the dispense. In some
     * cases, substitution will be expected but does not happen, in other cases
     * substitution is not expected but does happen. This block explains what
     * substitution did or did not happen and why. If nothing is specified,
     * substitution was not done.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationDispense\FHIRMedicationDispenseSubstitution $substitution
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicationDispense
     */
    public function setSubstitution(FHIRMedicationDispenseSubstitution $substitution = null)
    {
        $this->substitution = $substitution;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Additional information that supports the medication being dispensed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    public function getSupportingInformation()
    {
        return $this->supportingInformation;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Additional information that supports the medication being dispensed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $supportingInformation
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicationDispense
     */
    public function addSupportingInformation(FHIRReference $supportingInformation = null)
    {
        $this->supportingInformation[] = $supportingInformation;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Additional information that supports the medication being dispensed.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[] $supportingInformation
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicationDispense
     */
    public function setSupportingInformation(array $supportingInformation = [])
    {
        $this->supportingInformation = [];
        if ([] === $supportingInformation) {
            return $this;
        }
        foreach($supportingInformation as $v) {
            if ($v instanceof FHIRReference) {
                $this->addSupportingInformation($v);
            } else {
                $this->addSupportingInformation(new FHIRReference($v));
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
     * Indicates the type of dispensing event that is performed. For example, Trial
     * Fill, Completion of Trial, Partial Fill, Emergency Fill, Samples, etc.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates the type of dispensing event that is performed. For example, Trial
     * Fill, Completion of Trial, Partial Fill, Emergency Fill, Samples, etc.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $type
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicationDispense
     */
    public function setType(FHIRCodeableConcept $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The time the dispensed product was provided to the patient or their
     * representative.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    public function getWhenHandedOver()
    {
        return $this->whenHandedOver;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The time the dispensed product was provided to the patient or their
     * representative.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime $whenHandedOver
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicationDispense
     */
    public function setWhenHandedOver($whenHandedOver = null)
    {
        if (null === $whenHandedOver) {
            $this->whenHandedOver = null;
            return $this;
        }
        if ($whenHandedOver instanceof FHIRDateTime) {
            $this->whenHandedOver = $whenHandedOver;
            return $this;
        }
        $this->whenHandedOver = new FHIRDateTime($whenHandedOver);
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The time when the dispensed product was packaged and reviewed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    public function getWhenPrepared()
    {
        return $this->whenPrepared;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The time when the dispensed product was packaged and reviewed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime $whenPrepared
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicationDispense
     */
    public function setWhenPrepared($whenPrepared = null)
    {
        if (null === $whenPrepared) {
            $this->whenPrepared = null;
            return $this;
        }
        if ($whenPrepared instanceof FHIRDateTime) {
            $this->whenPrepared = $whenPrepared;
            return $this;
        }
        $this->whenPrepared = new FHIRDateTime($whenPrepared);
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicationDispense $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicationDispense
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
                throw new \DomainException(sprintf('FHIRMedicationDispense::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRMedicationDispense::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRMedicationDispense;
        } elseif (!is_object($type) || !($type instanceof FHIRMedicationDispense)) {
            throw new \RuntimeException(sprintf(
                'FHIRMedicationDispense::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicationDispense or null, %s seen.',
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
        if (isset($children->authorizingPrescription)) {
            foreach($children->authorizingPrescription as $child) {
                $type->addAuthorizingPrescription(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->category)) {
            $type->setCategory(FHIRCodeableConcept::xmlUnserialize($children->category));
        }
        if (isset($children->context)) {
            $type->setContext(FHIRReference::xmlUnserialize($children->context));
        }
        if (isset($children->daysSupply)) {
            $type->setDaysSupply(FHIRQuantity::xmlUnserialize($children->daysSupply));
        }
        if (isset($children->destination)) {
            $type->setDestination(FHIRReference::xmlUnserialize($children->destination));
        }
        if (isset($children->detectedIssue)) {
            foreach($children->detectedIssue as $child) {
                $type->addDetectedIssue(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->dosageInstruction)) {
            foreach($children->dosageInstruction as $child) {
                $type->addDosageInstruction(FHIRDosage::xmlUnserialize($child));
            }
        }
        if (isset($children->eventHistory)) {
            foreach($children->eventHistory as $child) {
                $type->addEventHistory(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->identifier)) {
            foreach($children->identifier as $child) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($child));
            }
        }
        if (isset($children->location)) {
            $type->setLocation(FHIRReference::xmlUnserialize($children->location));
        }
        if (isset($children->medicationCodeableConcept)) {
            $type->setMedicationCodeableConcept(FHIRCodeableConcept::xmlUnserialize($children->medicationCodeableConcept));
        }
        if (isset($children->medicationReference)) {
            $type->setMedicationReference(FHIRReference::xmlUnserialize($children->medicationReference));
        }
        if (isset($children->note)) {
            foreach($children->note as $child) {
                $type->addNote(FHIRAnnotation::xmlUnserialize($child));
            }
        }
        if (isset($children->partOf)) {
            foreach($children->partOf as $child) {
                $type->addPartOf(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->performer)) {
            foreach($children->performer as $child) {
                $type->addPerformer(FHIRMedicationDispensePerformer::xmlUnserialize($child));
            }
        }
        if (isset($children->quantity)) {
            $type->setQuantity(FHIRQuantity::xmlUnserialize($children->quantity));
        }
        if (isset($children->receiver)) {
            foreach($children->receiver as $child) {
                $type->addReceiver(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($attributes->status)) {
            $type->setStatus((string)$attributes->status);
        }
        if (isset($children->status)) {
            $type->setStatus(FHIRCode::xmlUnserialize($children->status));
        }
        if (isset($children->statusReasonCodeableConcept)) {
            $type->setStatusReasonCodeableConcept(FHIRCodeableConcept::xmlUnserialize($children->statusReasonCodeableConcept));
        }
        if (isset($children->statusReasonReference)) {
            $type->setStatusReasonReference(FHIRReference::xmlUnserialize($children->statusReasonReference));
        }
        if (isset($children->subject)) {
            $type->setSubject(FHIRReference::xmlUnserialize($children->subject));
        }
        if (isset($children->substitution)) {
            $type->setSubstitution(FHIRMedicationDispenseSubstitution::xmlUnserialize($children->substitution));
        }
        if (isset($children->supportingInformation)) {
            foreach($children->supportingInformation as $child) {
                $type->addSupportingInformation(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->type)) {
            $type->setType(FHIRCodeableConcept::xmlUnserialize($children->type));
        }
        if (isset($attributes->whenHandedOver)) {
            $type->setWhenHandedOver((string)$attributes->whenHandedOver);
        }
        if (isset($children->whenHandedOver)) {
            $type->setWhenHandedOver(FHIRDateTime::xmlUnserialize($children->whenHandedOver));
        }
        if (isset($attributes->whenPrepared)) {
            $type->setWhenPrepared((string)$attributes->whenPrepared);
        }
        if (isset($children->whenPrepared)) {
            $type->setWhenPrepared(FHIRDateTime::xmlUnserialize($children->whenPrepared));
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

        if ([] !== ($vs = $this->getAuthorizingPrescription())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_AUTHORIZING_PRESCRIPTION, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if (null !== ($v = $this->getCategory())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CATEGORY, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getContext())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CONTEXT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDaysSupply())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DAYS_SUPPLY, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getDestination())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DESTINATION, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getDetectedIssue())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_DETECTED_ISSUE, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if ([] !== ($vs = $this->getDosageInstruction())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_DOSAGE_INSTRUCTION, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if ([] !== ($vs = $this->getEventHistory())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_EVENT_HISTORY, null, $v->_getFHIRXMLNamespace()));
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

        if (null !== ($v = $this->getLocation())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_LOCATION, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getMedicationCodeableConcept())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_MEDICATION_CODEABLE_CONCEPT, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getMedicationReference())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_MEDICATION_REFERENCE, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getNote())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_NOTE, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if ([] !== ($vs = $this->getPartOf())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PART_OF, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if ([] !== ($vs = $this->getPerformer())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PERFORMER, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getQuantity())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_QUANTITY, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getReceiver())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_RECEIVER, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getStatus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STATUS, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getStatusReasonCodeableConcept())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STATUS_REASON_CODEABLE_CONCEPT, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getStatusReasonReference())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STATUS_REASON_REFERENCE, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getSubject())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SUBJECT, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getSubstitution())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SUBSTITUTION, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getSupportingInformation())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_SUPPORTING_INFORMATION, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if (null !== ($v = $this->getType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TYPE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getWhenHandedOver())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_WHEN_HANDED_OVER, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getWhenPrepared())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_WHEN_PREPARED, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if ([] !== ($vs = $this->getAuthorizingPrescription())) {
            $a[self::FIELD_AUTHORIZING_PRESCRIPTION] = $vs;
        }
        if (null !== ($v = $this->getCategory())) {
            $a[self::FIELD_CATEGORY] = $v;
        }
        if (null !== ($v = $this->getContext())) {
            $a[self::FIELD_CONTEXT] = $v;
        }
        if (null !== ($v = $this->getDaysSupply())) {
            $a[self::FIELD_DAYS_SUPPLY] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_DAYS_SUPPLY_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getDestination())) {
            $a[self::FIELD_DESTINATION] = $v;
        }
        if ([] !== ($vs = $this->getDetectedIssue())) {
            $a[self::FIELD_DETECTED_ISSUE] = $vs;
        }
        if ([] !== ($vs = $this->getDosageInstruction())) {
            $a[self::FIELD_DOSAGE_INSTRUCTION] = $vs;
        }
        if ([] !== ($vs = $this->getEventHistory())) {
            $a[self::FIELD_EVENT_HISTORY] = $vs;
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_IDENTIFIER][] = $v->getValue();
                if ($v->_hasNonValueFieldsDefined()) {
                    if (!isset($a[self::FIELD_IDENTIFIER_EXT])) {
                        $a[self::FIELD_IDENTIFIER_EXT] = [];
                    }
                    $a[self::FIELD_IDENTIFIER_EXT][] = $v;
                }
            }
        }
        if (null !== ($v = $this->getLocation())) {
            $a[self::FIELD_LOCATION] = $v;
        }
        if (null !== ($v = $this->getMedicationCodeableConcept())) {
            $a[self::FIELD_MEDICATION_CODEABLE_CONCEPT] = $v;
        }
        if (null !== ($v = $this->getMedicationReference())) {
            $a[self::FIELD_MEDICATION_REFERENCE] = $v;
        }
        if ([] !== ($vs = $this->getNote())) {
            $a[self::FIELD_NOTE] = $vs;
        }
        if ([] !== ($vs = $this->getPartOf())) {
            $a[self::FIELD_PART_OF] = $vs;
        }
        if ([] !== ($vs = $this->getPerformer())) {
            $a[self::FIELD_PERFORMER] = $vs;
        }
        if (null !== ($v = $this->getQuantity())) {
            $a[self::FIELD_QUANTITY] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_QUANTITY_EXT] = $v;
            }
        }
        if ([] !== ($vs = $this->getReceiver())) {
            $a[self::FIELD_RECEIVER] = $vs;
        }
        if (null !== ($v = $this->getStatus())) {
            $a[self::FIELD_STATUS] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_STATUS_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getStatusReasonCodeableConcept())) {
            $a[self::FIELD_STATUS_REASON_CODEABLE_CONCEPT] = $v;
        }
        if (null !== ($v = $this->getStatusReasonReference())) {
            $a[self::FIELD_STATUS_REASON_REFERENCE] = $v;
        }
        if (null !== ($v = $this->getSubject())) {
            $a[self::FIELD_SUBJECT] = $v;
        }
        if (null !== ($v = $this->getSubstitution())) {
            $a[self::FIELD_SUBSTITUTION] = $v;
        }
        if ([] !== ($vs = $this->getSupportingInformation())) {
            $a[self::FIELD_SUPPORTING_INFORMATION] = $vs;
        }
        if (null !== ($v = $this->getType())) {
            $a[self::FIELD_TYPE] = $v;
        }
        if (null !== ($v = $this->getWhenHandedOver())) {
            $a[self::FIELD_WHEN_HANDED_OVER] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_WHEN_HANDED_OVER_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getWhenPrepared())) {
            $a[self::FIELD_WHEN_PREPARED] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_WHEN_PREPARED_EXT] = $v;
            }
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