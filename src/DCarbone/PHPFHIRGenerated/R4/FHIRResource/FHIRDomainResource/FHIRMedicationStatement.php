<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 26th, 2019 15:44+0000
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
 *   Generated on Fri, Nov 1, 2019 09:29+1100 for FHIR v4.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAnnotation;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDosage;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMedicationStatusCodes;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * A record of a medication that is being consumed by a patient. A
 * MedicationStatement may indicate that the patient may be taking the medication
 * now or has taken the medication in the past or will be taking the medication in
 * the future. The source of this information can be the patient, significant other
 * (such as a family member or spouse), or a clinician. A common scenario where
 * this information is captured is during the history taking process during a
 * patient visit or stay. The medication information may come from sources such as
 * the patient's memory, from a prescription bottle, or from a list of medications
 * the patient, clinician or other party maintains. The primary difference between
 * a medication statement and a medication administration is that the medication
 * administration has complete administration information and is based on actual
 * administration information from the person who administered the medication. A
 * medication statement is often, if not always, less specific. There is no
 * required date/time when the medication was administered, in fact we only know
 * that a source has reported the patient is taking this medication, where details
 * such as time, quantity, or rate or even medication product may be incomplete or
 * missing or less precise. As stated earlier, the medication statement information
 * may come from the patient's memory, from a prescription bottle or from a list of
 * medications the patient, clinician or other party maintains. Medication
 * administration is more formal and is not missing detailed information.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRMedicationStatement
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource
 */
class FHIRMedicationStatement extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_MEDICATION_STATEMENT;
    const FIELD_BASED_ON = 'basedOn';
    const FIELD_CATEGORY = 'category';
    const FIELD_CONTEXT = 'context';
    const FIELD_DATE_ASSERTED = 'dateAsserted';
    const FIELD_DATE_ASSERTED_EXT = '_dateAsserted';
    const FIELD_DERIVED_FROM = 'derivedFrom';
    const FIELD_DOSAGE = 'dosage';
    const FIELD_EFFECTIVE_DATE_TIME = 'effectiveDateTime';
    const FIELD_EFFECTIVE_DATE_TIME_EXT = '_effectiveDateTime';
    const FIELD_EFFECTIVE_PERIOD = 'effectivePeriod';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_INFORMATION_SOURCE = 'informationSource';
    const FIELD_MEDICATION_CODEABLE_CONCEPT = 'medicationCodeableConcept';
    const FIELD_MEDICATION_REFERENCE = 'medicationReference';
    const FIELD_NOTE = 'note';
    const FIELD_PART_OF = 'partOf';
    const FIELD_REASON_CODE = 'reasonCode';
    const FIELD_REASON_REFERENCE = 'reasonReference';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';
    const FIELD_STATUS_REASON = 'statusReason';
    const FIELD_SUBJECT = 'subject';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A plan, proposal or order that is fulfilled in whole or in part by this event.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    protected $basedOn = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates where the medication is expected to be consumed or administered.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $category = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The encounter or episode of care that establishes the context for this
     * MedicationStatement.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected $context = null;

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date when the medication statement was asserted by the information source.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    protected $dateAsserted = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Allows linking the MedicationStatement to the underlying MedicationRequest, or
     * to other information that supports or is used to derive the MedicationStatement.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    protected $derivedFrom = [];

    /**
     * Indicates how the medication is/was taken or should be taken by the patient.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates how the medication is/was or should be taken by the patient.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDosage[]
     */
    protected $dosage = [];

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The interval of time during which it is being asserted that the patient
     * is/was/will be taking the medication (or was not taking, when the
     * MedicationStatement.taken element is No). (choose any one of effective*, but
     * only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    protected $effectiveDateTime = null;

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The interval of time during which it is being asserted that the patient
     * is/was/will be taking the medication (or was not taking, when the
     * MedicationStatement.taken element is No). (choose any one of effective*, but
     * only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod
     */
    protected $effectivePeriod = null;

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifiers associated with this Medication Statement that are defined by
     * business processes and/or used to refer to it when a direct URL reference to the
     * resource itself is not appropriate. They are business identifiers assigned to
     * this resource by the performer or other systems and remain constant as the
     * resource is updated and propagates from server to server.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[]
     */
    protected $identifier = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The person or organization that provided the information about the taking of
     * this medication. Note: Use derivedFrom when a MedicationStatement is derived
     * from other resources, e.g. Claim or MedicationRequest.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected $informationSource = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the medication being administered. This is either a link to a
     * resource representing the details of the medication or a simple attribute
     * carrying a code that identifies the medication from a known list of medications.
     * (choose any one of medication*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $medicationCodeableConcept = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the medication being administered. This is either a link to a
     * resource representing the details of the medication or a simple attribute
     * carrying a code that identifies the medication from a known list of medications.
     * (choose any one of medication*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected $medicationReference = null;

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Provides extra information about the medication statement that is not conveyed
     * by the other attributes.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAnnotation[]
     */
    protected $note = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A larger event of which this particular event is a component or step.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    protected $partOf = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reason for why the medication is being/was taken.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    protected $reasonCode = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Condition or observation that supports why the medication is being/was taken.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    protected $reasonReference = [];

    /**
     * A coded concept defining if the medication is in active use.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A code representing the patient or other source's judgment about the state of
     * the medication used that this statement is about. Generally, this will be active
     * or completed.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMedicationStatusCodes
     */
    protected $status = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Captures the reason for the current state of the MedicationStatement.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    protected $statusReason = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The person, animal or group who is/was taking the medication.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected $subject = null;

    /**
     * Validation map for fields in type MedicationStatement
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRMedicationStatement Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMedicationStatement::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_BASED_ON])) {
            if (is_array($data[self::FIELD_BASED_ON])) {
                foreach($data[self::FIELD_BASED_ON] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addBasedOn($v);
                    } else {
                        $this->addBasedOn(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_BASED_ON] instanceof FHIRReference) {
                $this->addBasedOn($data[self::FIELD_BASED_ON]);
            } else {
                $this->addBasedOn(new FHIRReference($data[self::FIELD_BASED_ON]));
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
        if (isset($data[self::FIELD_DATE_ASSERTED]) || isset($data[self::FIELD_DATE_ASSERTED_EXT])) {
            if (isset($data[self::FIELD_DATE_ASSERTED])) {
                $value = $data[self::FIELD_DATE_ASSERTED];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_DATE_ASSERTED_EXT]) && is_array($data[self::FIELD_DATE_ASSERTED_EXT])) {
                $ext = $data[self::FIELD_DATE_ASSERTED_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setDateAsserted($value);
                } else if (is_array($value)) {
                    $this->setDateAsserted(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setDateAsserted(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setDateAsserted(new FHIRDateTime($ext));
            }
        }
        if (isset($data[self::FIELD_DERIVED_FROM])) {
            if (is_array($data[self::FIELD_DERIVED_FROM])) {
                foreach($data[self::FIELD_DERIVED_FROM] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addDerivedFrom($v);
                    } else {
                        $this->addDerivedFrom(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_DERIVED_FROM] instanceof FHIRReference) {
                $this->addDerivedFrom($data[self::FIELD_DERIVED_FROM]);
            } else {
                $this->addDerivedFrom(new FHIRReference($data[self::FIELD_DERIVED_FROM]));
            }
        }
        if (isset($data[self::FIELD_DOSAGE])) {
            if (is_array($data[self::FIELD_DOSAGE])) {
                foreach($data[self::FIELD_DOSAGE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRDosage) {
                        $this->addDosage($v);
                    } else {
                        $this->addDosage(new FHIRDosage($v));
                    }
                }
            } else if ($data[self::FIELD_DOSAGE] instanceof FHIRDosage) {
                $this->addDosage($data[self::FIELD_DOSAGE]);
            } else {
                $this->addDosage(new FHIRDosage($data[self::FIELD_DOSAGE]));
            }
        }
        if (isset($data[self::FIELD_EFFECTIVE_DATE_TIME]) || isset($data[self::FIELD_EFFECTIVE_DATE_TIME_EXT])) {
            if (isset($data[self::FIELD_EFFECTIVE_DATE_TIME])) {
                $value = $data[self::FIELD_EFFECTIVE_DATE_TIME];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_EFFECTIVE_DATE_TIME_EXT]) && is_array($data[self::FIELD_EFFECTIVE_DATE_TIME_EXT])) {
                $ext = $data[self::FIELD_EFFECTIVE_DATE_TIME_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setEffectiveDateTime($value);
                } else if (is_array($value)) {
                    $this->setEffectiveDateTime(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setEffectiveDateTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setEffectiveDateTime(new FHIRDateTime($ext));
            }
        }
        if (isset($data[self::FIELD_EFFECTIVE_PERIOD])) {
            if ($data[self::FIELD_EFFECTIVE_PERIOD] instanceof FHIRPeriod) {
                $this->setEffectivePeriod($data[self::FIELD_EFFECTIVE_PERIOD]);
            } else {
                $this->setEffectivePeriod(new FHIRPeriod($data[self::FIELD_EFFECTIVE_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_IDENTIFIER])) {
            if (is_array($data[self::FIELD_IDENTIFIER])) {
                foreach($data[self::FIELD_IDENTIFIER] as $v) {
                    if (null === $v) {
                        continue;
                    }
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
        if (isset($data[self::FIELD_INFORMATION_SOURCE])) {
            if ($data[self::FIELD_INFORMATION_SOURCE] instanceof FHIRReference) {
                $this->setInformationSource($data[self::FIELD_INFORMATION_SOURCE]);
            } else {
                $this->setInformationSource(new FHIRReference($data[self::FIELD_INFORMATION_SOURCE]));
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
                    if (null === $v) {
                        continue;
                    }
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
                    if (null === $v) {
                        continue;
                    }
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
        if (isset($data[self::FIELD_REASON_CODE])) {
            if (is_array($data[self::FIELD_REASON_CODE])) {
                foreach($data[self::FIELD_REASON_CODE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addReasonCode($v);
                    } else {
                        $this->addReasonCode(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_REASON_CODE] instanceof FHIRCodeableConcept) {
                $this->addReasonCode($data[self::FIELD_REASON_CODE]);
            } else {
                $this->addReasonCode(new FHIRCodeableConcept($data[self::FIELD_REASON_CODE]));
            }
        }
        if (isset($data[self::FIELD_REASON_REFERENCE])) {
            if (is_array($data[self::FIELD_REASON_REFERENCE])) {
                foreach($data[self::FIELD_REASON_REFERENCE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addReasonReference($v);
                    } else {
                        $this->addReasonReference(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_REASON_REFERENCE] instanceof FHIRReference) {
                $this->addReasonReference($data[self::FIELD_REASON_REFERENCE]);
            } else {
                $this->addReasonReference(new FHIRReference($data[self::FIELD_REASON_REFERENCE]));
            }
        }
        if (isset($data[self::FIELD_STATUS]) || isset($data[self::FIELD_STATUS_EXT])) {
            if (isset($data[self::FIELD_STATUS])) {
                $value = $data[self::FIELD_STATUS];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_STATUS_EXT]) && is_array($data[self::FIELD_STATUS_EXT])) {
                $ext = $data[self::FIELD_STATUS_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRMedicationStatusCodes) {
                    $this->setStatus($value);
                } else if (is_array($value)) {
                    $this->setStatus(new FHIRMedicationStatusCodes(array_merge($ext, $value)));
                } else {
                    $this->setStatus(new FHIRMedicationStatusCodes([FHIRMedicationStatusCodes::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setStatus(new FHIRMedicationStatusCodes($ext));
            }
        }
        if (isset($data[self::FIELD_STATUS_REASON])) {
            if (is_array($data[self::FIELD_STATUS_REASON])) {
                foreach($data[self::FIELD_STATUS_REASON] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addStatusReason($v);
                    } else {
                        $this->addStatusReason(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_STATUS_REASON] instanceof FHIRCodeableConcept) {
                $this->addStatusReason($data[self::FIELD_STATUS_REASON]);
            } else {
                $this->addStatusReason(new FHIRCodeableConcept($data[self::FIELD_STATUS_REASON]));
            }
        }
        if (isset($data[self::FIELD_SUBJECT])) {
            if ($data[self::FIELD_SUBJECT] instanceof FHIRReference) {
                $this->setSubject($data[self::FIELD_SUBJECT]);
            } else {
                $this->setSubject(new FHIRReference($data[self::FIELD_SUBJECT]));
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
     * @return string
     */
    public function _getFHIRXMLElementDefinition()
    {
        $xmlns = $this->_getFHIRXMLNamespace();
        if (null !== $xmlns) {
            $xmlns = " xmlns=\"{$xmlns}\"";
        }
        return "<MedicationStatement{$xmlns}></MedicationStatement>";
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
     * A plan, proposal or order that is fulfilled in whole or in part by this event.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    public function getBasedOn()
    {
        return $this->basedOn;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A plan, proposal or order that is fulfilled in whole or in part by this event.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $basedOn
     * @return static
     */
    public function addBasedOn(FHIRReference $basedOn = null)
    {
        $this->basedOn[] = $basedOn;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A plan, proposal or order that is fulfilled in whole or in part by this event.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[] $basedOn
     * @return static
     */
    public function setBasedOn(array $basedOn = [])
    {
        $this->basedOn = [];
        if ([] === $basedOn) {
            return $this;
        }
        foreach($basedOn as $v) {
            if ($v instanceof FHIRReference) {
                $this->addBasedOn($v);
            } else {
                $this->addBasedOn(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates where the medication is expected to be consumed or administered.
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates where the medication is expected to be consumed or administered.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $category
     * @return static
     */
    public function setCategory(FHIRCodeableConcept $category = null)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The encounter or episode of care that establishes the context for this
     * MedicationStatement.
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The encounter or episode of care that establishes the context for this
     * MedicationStatement.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $context
     * @return static
     */
    public function setContext(FHIRReference $context = null)
    {
        $this->context = $context;
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date when the medication statement was asserted by the information source.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    public function getDateAsserted()
    {
        return $this->dateAsserted;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date when the medication statement was asserted by the information source.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime $dateAsserted
     * @return static
     */
    public function setDateAsserted($dateAsserted = null)
    {
        if (null === $dateAsserted) {
            $this->dateAsserted = null;
            return $this;
        }
        if ($dateAsserted instanceof FHIRDateTime) {
            $this->dateAsserted = $dateAsserted;
            return $this;
        }
        $this->dateAsserted = new FHIRDateTime($dateAsserted);
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Allows linking the MedicationStatement to the underlying MedicationRequest, or
     * to other information that supports or is used to derive the MedicationStatement.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    public function getDerivedFrom()
    {
        return $this->derivedFrom;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Allows linking the MedicationStatement to the underlying MedicationRequest, or
     * to other information that supports or is used to derive the MedicationStatement.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $derivedFrom
     * @return static
     */
    public function addDerivedFrom(FHIRReference $derivedFrom = null)
    {
        $this->derivedFrom[] = $derivedFrom;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Allows linking the MedicationStatement to the underlying MedicationRequest, or
     * to other information that supports or is used to derive the MedicationStatement.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[] $derivedFrom
     * @return static
     */
    public function setDerivedFrom(array $derivedFrom = [])
    {
        $this->derivedFrom = [];
        if ([] === $derivedFrom) {
            return $this;
        }
        foreach($derivedFrom as $v) {
            if ($v instanceof FHIRReference) {
                $this->addDerivedFrom($v);
            } else {
                $this->addDerivedFrom(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * Indicates how the medication is/was taken or should be taken by the patient.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates how the medication is/was or should be taken by the patient.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDosage[]
     */
    public function getDosage()
    {
        return $this->dosage;
    }

    /**
     * Indicates how the medication is/was taken or should be taken by the patient.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates how the medication is/was or should be taken by the patient.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDosage $dosage
     * @return static
     */
    public function addDosage(FHIRDosage $dosage = null)
    {
        $this->dosage[] = $dosage;
        return $this;
    }

    /**
     * Indicates how the medication is/was taken or should be taken by the patient.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates how the medication is/was or should be taken by the patient.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDosage[] $dosage
     * @return static
     */
    public function setDosage(array $dosage = [])
    {
        $this->dosage = [];
        if ([] === $dosage) {
            return $this;
        }
        foreach($dosage as $v) {
            if ($v instanceof FHIRDosage) {
                $this->addDosage($v);
            } else {
                $this->addDosage(new FHIRDosage($v));
            }
        }
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The interval of time during which it is being asserted that the patient
     * is/was/will be taking the medication (or was not taking, when the
     * MedicationStatement.taken element is No). (choose any one of effective*, but
     * only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    public function getEffectiveDateTime()
    {
        return $this->effectiveDateTime;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The interval of time during which it is being asserted that the patient
     * is/was/will be taking the medication (or was not taking, when the
     * MedicationStatement.taken element is No). (choose any one of effective*, but
     * only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime $effectiveDateTime
     * @return static
     */
    public function setEffectiveDateTime($effectiveDateTime = null)
    {
        if (null === $effectiveDateTime) {
            $this->effectiveDateTime = null;
            return $this;
        }
        if ($effectiveDateTime instanceof FHIRDateTime) {
            $this->effectiveDateTime = $effectiveDateTime;
            return $this;
        }
        $this->effectiveDateTime = new FHIRDateTime($effectiveDateTime);
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The interval of time during which it is being asserted that the patient
     * is/was/will be taking the medication (or was not taking, when the
     * MedicationStatement.taken element is No). (choose any one of effective*, but
     * only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod
     */
    public function getEffectivePeriod()
    {
        return $this->effectivePeriod;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The interval of time during which it is being asserted that the patient
     * is/was/will be taking the medication (or was not taking, when the
     * MedicationStatement.taken element is No). (choose any one of effective*, but
     * only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod $effectivePeriod
     * @return static
     */
    public function setEffectivePeriod(FHIRPeriod $effectivePeriod = null)
    {
        $this->effectivePeriod = $effectivePeriod;
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifiers associated with this Medication Statement that are defined by
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifiers associated with this Medication Statement that are defined by
     * business processes and/or used to refer to it when a direct URL reference to the
     * resource itself is not appropriate. They are business identifiers assigned to
     * this resource by the performer or other systems and remain constant as the
     * resource is updated and propagates from server to server.
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
     * Identifiers associated with this Medication Statement that are defined by
     * business processes and/or used to refer to it when a direct URL reference to the
     * resource itself is not appropriate. They are business identifiers assigned to
     * this resource by the performer or other systems and remain constant as the
     * resource is updated and propagates from server to server.
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
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The person or organization that provided the information about the taking of
     * this medication. Note: Use derivedFrom when a MedicationStatement is derived
     * from other resources, e.g. Claim or MedicationRequest.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getInformationSource()
    {
        return $this->informationSource;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The person or organization that provided the information about the taking of
     * this medication. Note: Use derivedFrom when a MedicationStatement is derived
     * from other resources, e.g. Claim or MedicationRequest.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $informationSource
     * @return static
     */
    public function setInformationSource(FHIRReference $informationSource = null)
    {
        $this->informationSource = $informationSource;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the medication being administered. This is either a link to a
     * resource representing the details of the medication or a simple attribute
     * carrying a code that identifies the medication from a known list of medications.
     * (choose any one of medication*, but only one)
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the medication being administered. This is either a link to a
     * resource representing the details of the medication or a simple attribute
     * carrying a code that identifies the medication from a known list of medications.
     * (choose any one of medication*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $medicationCodeableConcept
     * @return static
     */
    public function setMedicationCodeableConcept(FHIRCodeableConcept $medicationCodeableConcept = null)
    {
        $this->medicationCodeableConcept = $medicationCodeableConcept;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the medication being administered. This is either a link to a
     * resource representing the details of the medication or a simple attribute
     * carrying a code that identifies the medication from a known list of medications.
     * (choose any one of medication*, but only one)
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the medication being administered. This is either a link to a
     * resource representing the details of the medication or a simple attribute
     * carrying a code that identifies the medication from a known list of medications.
     * (choose any one of medication*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $medicationReference
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Provides extra information about the medication statement that is not conveyed
     * by the other attributes.
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Provides extra information about the medication statement that is not conveyed
     * by the other attributes.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAnnotation $note
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Provides extra information about the medication statement that is not conveyed
     * by the other attributes.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAnnotation[] $note
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A larger event of which this particular event is a component or step.
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A larger event of which this particular event is a component or step.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $partOf
     * @return static
     */
    public function addPartOf(FHIRReference $partOf = null)
    {
        $this->partOf[] = $partOf;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A larger event of which this particular event is a component or step.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[] $partOf
     * @return static
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reason for why the medication is being/was taken.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    public function getReasonCode()
    {
        return $this->reasonCode;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reason for why the medication is being/was taken.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $reasonCode
     * @return static
     */
    public function addReasonCode(FHIRCodeableConcept $reasonCode = null)
    {
        $this->reasonCode[] = $reasonCode;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reason for why the medication is being/was taken.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[] $reasonCode
     * @return static
     */
    public function setReasonCode(array $reasonCode = [])
    {
        $this->reasonCode = [];
        if ([] === $reasonCode) {
            return $this;
        }
        foreach($reasonCode as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addReasonCode($v);
            } else {
                $this->addReasonCode(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Condition or observation that supports why the medication is being/was taken.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    public function getReasonReference()
    {
        return $this->reasonReference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Condition or observation that supports why the medication is being/was taken.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $reasonReference
     * @return static
     */
    public function addReasonReference(FHIRReference $reasonReference = null)
    {
        $this->reasonReference[] = $reasonReference;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Condition or observation that supports why the medication is being/was taken.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[] $reasonReference
     * @return static
     */
    public function setReasonReference(array $reasonReference = [])
    {
        $this->reasonReference = [];
        if ([] === $reasonReference) {
            return $this;
        }
        foreach($reasonReference as $v) {
            if ($v instanceof FHIRReference) {
                $this->addReasonReference($v);
            } else {
                $this->addReasonReference(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A coded concept defining if the medication is in active use.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A code representing the patient or other source's judgment about the state of
     * the medication used that this statement is about. Generally, this will be active
     * or completed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMedicationStatusCodes
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * A coded concept defining if the medication is in active use.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A code representing the patient or other source's judgment about the state of
     * the medication used that this statement is about. Generally, this will be active
     * or completed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMedicationStatusCodes $status
     * @return static
     */
    public function setStatus(FHIRMedicationStatusCodes $status = null)
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
     * Captures the reason for the current state of the MedicationStatement.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    public function getStatusReason()
    {
        return $this->statusReason;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Captures the reason for the current state of the MedicationStatement.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $statusReason
     * @return static
     */
    public function addStatusReason(FHIRCodeableConcept $statusReason = null)
    {
        $this->statusReason[] = $statusReason;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Captures the reason for the current state of the MedicationStatement.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[] $statusReason
     * @return static
     */
    public function setStatusReason(array $statusReason = [])
    {
        $this->statusReason = [];
        if ([] === $statusReason) {
            return $this;
        }
        foreach($statusReason as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addStatusReason($v);
            } else {
                $this->addStatusReason(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The person, animal or group who is/was taking the medication.
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The person, animal or group who is/was taking the medication.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $subject
     * @return static
     */
    public function setSubject(FHIRReference $subject = null)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules()
    {
        return self::$_validationRules;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by FHIR.  An empty array must be seen as
     * passing.
     *
     * @return array
     */
    public function _getValidationErrors()
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if ([] !== ($vs = $this->getBasedOn())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_BASED_ON, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getCategory())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CATEGORY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getContext())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CONTEXT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDateAsserted())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DATE_ASSERTED] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getDerivedFrom())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_DERIVED_FROM, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getDosage())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_DOSAGE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getEffectiveDateTime())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EFFECTIVE_DATE_TIME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getEffectivePeriod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EFFECTIVE_PERIOD] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_IDENTIFIER, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getInformationSource())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_INFORMATION_SOURCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMedicationCodeableConcept())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MEDICATION_CODEABLE_CONCEPT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMedicationReference())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MEDICATION_REFERENCE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getNote())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_NOTE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getPartOf())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PART_OF, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getReasonCode())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_REASON_CODE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getReasonReference())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_REASON_REFERENCE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STATUS] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getStatusReason())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_STATUS_REASON, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getSubject())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SUBJECT] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_BASED_ON])) {
            $v = $this->getBasedOn();
            foreach($validationRules[self::FIELD_BASED_ON] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_STATEMENT, self::FIELD_BASED_ON, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_BASED_ON])) {
                        $errs[self::FIELD_BASED_ON] = [];
                    }
                    $errs[self::FIELD_BASED_ON][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CATEGORY])) {
            $v = $this->getCategory();
            foreach($validationRules[self::FIELD_CATEGORY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_STATEMENT, self::FIELD_CATEGORY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CATEGORY])) {
                        $errs[self::FIELD_CATEGORY] = [];
                    }
                    $errs[self::FIELD_CATEGORY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTEXT])) {
            $v = $this->getContext();
            foreach($validationRules[self::FIELD_CONTEXT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_STATEMENT, self::FIELD_CONTEXT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTEXT])) {
                        $errs[self::FIELD_CONTEXT] = [];
                    }
                    $errs[self::FIELD_CONTEXT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DATE_ASSERTED])) {
            $v = $this->getDateAsserted();
            foreach($validationRules[self::FIELD_DATE_ASSERTED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_STATEMENT, self::FIELD_DATE_ASSERTED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DATE_ASSERTED])) {
                        $errs[self::FIELD_DATE_ASSERTED] = [];
                    }
                    $errs[self::FIELD_DATE_ASSERTED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DERIVED_FROM])) {
            $v = $this->getDerivedFrom();
            foreach($validationRules[self::FIELD_DERIVED_FROM] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_STATEMENT, self::FIELD_DERIVED_FROM, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DERIVED_FROM])) {
                        $errs[self::FIELD_DERIVED_FROM] = [];
                    }
                    $errs[self::FIELD_DERIVED_FROM][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DOSAGE])) {
            $v = $this->getDosage();
            foreach($validationRules[self::FIELD_DOSAGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_STATEMENT, self::FIELD_DOSAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DOSAGE])) {
                        $errs[self::FIELD_DOSAGE] = [];
                    }
                    $errs[self::FIELD_DOSAGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EFFECTIVE_DATE_TIME])) {
            $v = $this->getEffectiveDateTime();
            foreach($validationRules[self::FIELD_EFFECTIVE_DATE_TIME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_STATEMENT, self::FIELD_EFFECTIVE_DATE_TIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EFFECTIVE_DATE_TIME])) {
                        $errs[self::FIELD_EFFECTIVE_DATE_TIME] = [];
                    }
                    $errs[self::FIELD_EFFECTIVE_DATE_TIME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EFFECTIVE_PERIOD])) {
            $v = $this->getEffectivePeriod();
            foreach($validationRules[self::FIELD_EFFECTIVE_PERIOD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_STATEMENT, self::FIELD_EFFECTIVE_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EFFECTIVE_PERIOD])) {
                        $errs[self::FIELD_EFFECTIVE_PERIOD] = [];
                    }
                    $errs[self::FIELD_EFFECTIVE_PERIOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_STATEMENT, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IDENTIFIER])) {
                        $errs[self::FIELD_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INFORMATION_SOURCE])) {
            $v = $this->getInformationSource();
            foreach($validationRules[self::FIELD_INFORMATION_SOURCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_STATEMENT, self::FIELD_INFORMATION_SOURCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INFORMATION_SOURCE])) {
                        $errs[self::FIELD_INFORMATION_SOURCE] = [];
                    }
                    $errs[self::FIELD_INFORMATION_SOURCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MEDICATION_CODEABLE_CONCEPT])) {
            $v = $this->getMedicationCodeableConcept();
            foreach($validationRules[self::FIELD_MEDICATION_CODEABLE_CONCEPT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_STATEMENT, self::FIELD_MEDICATION_CODEABLE_CONCEPT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MEDICATION_CODEABLE_CONCEPT])) {
                        $errs[self::FIELD_MEDICATION_CODEABLE_CONCEPT] = [];
                    }
                    $errs[self::FIELD_MEDICATION_CODEABLE_CONCEPT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MEDICATION_REFERENCE])) {
            $v = $this->getMedicationReference();
            foreach($validationRules[self::FIELD_MEDICATION_REFERENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_STATEMENT, self::FIELD_MEDICATION_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MEDICATION_REFERENCE])) {
                        $errs[self::FIELD_MEDICATION_REFERENCE] = [];
                    }
                    $errs[self::FIELD_MEDICATION_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NOTE])) {
            $v = $this->getNote();
            foreach($validationRules[self::FIELD_NOTE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_STATEMENT, self::FIELD_NOTE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NOTE])) {
                        $errs[self::FIELD_NOTE] = [];
                    }
                    $errs[self::FIELD_NOTE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PART_OF])) {
            $v = $this->getPartOf();
            foreach($validationRules[self::FIELD_PART_OF] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_STATEMENT, self::FIELD_PART_OF, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PART_OF])) {
                        $errs[self::FIELD_PART_OF] = [];
                    }
                    $errs[self::FIELD_PART_OF][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REASON_CODE])) {
            $v = $this->getReasonCode();
            foreach($validationRules[self::FIELD_REASON_CODE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_STATEMENT, self::FIELD_REASON_CODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REASON_CODE])) {
                        $errs[self::FIELD_REASON_CODE] = [];
                    }
                    $errs[self::FIELD_REASON_CODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REASON_REFERENCE])) {
            $v = $this->getReasonReference();
            foreach($validationRules[self::FIELD_REASON_REFERENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_STATEMENT, self::FIELD_REASON_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REASON_REFERENCE])) {
                        $errs[self::FIELD_REASON_REFERENCE] = [];
                    }
                    $errs[self::FIELD_REASON_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STATUS])) {
            $v = $this->getStatus();
            foreach($validationRules[self::FIELD_STATUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_STATEMENT, self::FIELD_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATUS])) {
                        $errs[self::FIELD_STATUS] = [];
                    }
                    $errs[self::FIELD_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STATUS_REASON])) {
            $v = $this->getStatusReason();
            foreach($validationRules[self::FIELD_STATUS_REASON] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_STATEMENT, self::FIELD_STATUS_REASON, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATUS_REASON])) {
                        $errs[self::FIELD_STATUS_REASON] = [];
                    }
                    $errs[self::FIELD_STATUS_REASON][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUBJECT])) {
            $v = $this->getSubject();
            foreach($validationRules[self::FIELD_SUBJECT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_STATEMENT, self::FIELD_SUBJECT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUBJECT])) {
                        $errs[self::FIELD_SUBJECT] = [];
                    }
                    $errs[self::FIELD_SUBJECT][$rule] = $err;
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
        return $errs;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicationStatement $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicationStatement
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
                throw new \DomainException(sprintf('FHIRMedicationStatement::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRMedicationStatement::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRMedicationStatement;
        } elseif (!is_object($type) || !($type instanceof FHIRMedicationStatement)) {
            throw new \RuntimeException(sprintf(
                'FHIRMedicationStatement::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicationStatement or null, %s seen.',
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
        if (isset($children->basedOn)) {
            foreach($children->basedOn as $child) {
                $type->addBasedOn(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->category)) {
            $type->setCategory(FHIRCodeableConcept::xmlUnserialize($children->category));
        }
        if (isset($children->context)) {
            $type->setContext(FHIRReference::xmlUnserialize($children->context));
        }
        if (isset($children->dateAsserted)) {
            $type->setDateAsserted(FHIRDateTime::xmlUnserialize($children->dateAsserted));
        }
        if (isset($attributes->dateAsserted)) {
            $pt = $type->getDateAsserted();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->dateAsserted);
            } else {
                $type->setDateAsserted((string)$attributes->dateAsserted);
            }
        }
        if (isset($children->derivedFrom)) {
            foreach($children->derivedFrom as $child) {
                $type->addDerivedFrom(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->dosage)) {
            foreach($children->dosage as $child) {
                $type->addDosage(FHIRDosage::xmlUnserialize($child));
            }
        }
        if (isset($children->effectiveDateTime)) {
            $type->setEffectiveDateTime(FHIRDateTime::xmlUnserialize($children->effectiveDateTime));
        }
        if (isset($attributes->effectiveDateTime)) {
            $pt = $type->getEffectiveDateTime();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->effectiveDateTime);
            } else {
                $type->setEffectiveDateTime((string)$attributes->effectiveDateTime);
            }
        }
        if (isset($children->effectivePeriod)) {
            $type->setEffectivePeriod(FHIRPeriod::xmlUnserialize($children->effectivePeriod));
        }
        if (isset($children->identifier)) {
            foreach($children->identifier as $child) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($child));
            }
        }
        if (isset($children->informationSource)) {
            $type->setInformationSource(FHIRReference::xmlUnserialize($children->informationSource));
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
        if (isset($children->reasonCode)) {
            foreach($children->reasonCode as $child) {
                $type->addReasonCode(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->reasonReference)) {
            foreach($children->reasonReference as $child) {
                $type->addReasonReference(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->status)) {
            $type->setStatus(FHIRMedicationStatusCodes::xmlUnserialize($children->status));
        }
        if (isset($children->statusReason)) {
            foreach($children->statusReason as $child) {
                $type->addStatusReason(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->subject)) {
            $type->setSubject(FHIRReference::xmlUnserialize($children->subject));
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
        if ([] !== ($vs = $this->getBasedOn())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_BASED_ON, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getCategory())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CATEGORY, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getContext())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CONTEXT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDateAsserted())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DATE_ASSERTED, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getDerivedFrom())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_DERIVED_FROM, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getDosage())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_DOSAGE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getEffectiveDateTime())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_EFFECTIVE_DATE_TIME, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getEffectivePeriod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_EFFECTIVE_PERIOD, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getInformationSource())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_INFORMATION_SOURCE, null, $v->_getFHIRXMLNamespace()));
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
        if ([] !== ($vs = $this->getReasonCode())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_REASON_CODE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getReasonReference())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_REASON_REFERENCE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getStatus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STATUS, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getStatusReason())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_STATUS_REASON, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getSubject())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SUBJECT, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if ([] !== ($vs = $this->getBasedOn())) {
            $a[self::FIELD_BASED_ON] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_BASED_ON][] = $v;
            }
        }
        if (null !== ($v = $this->getCategory())) {
            $a[self::FIELD_CATEGORY] = $v;
        }
        if (null !== ($v = $this->getContext())) {
            $a[self::FIELD_CONTEXT] = $v;
        }
        if (null !== ($v = $this->getDateAsserted())) {
            $a[self::FIELD_DATE_ASSERTED] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDateTime::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDateTime::FIELD_VALUE]);
                $a[self::FIELD_DATE_ASSERTED_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getDerivedFrom())) {
            $a[self::FIELD_DERIVED_FROM] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_DERIVED_FROM][] = $v;
            }
        }
        if ([] !== ($vs = $this->getDosage())) {
            $a[self::FIELD_DOSAGE] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_DOSAGE][] = $v;
            }
        }
        if (null !== ($v = $this->getEffectiveDateTime())) {
            $a[self::FIELD_EFFECTIVE_DATE_TIME] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDateTime::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDateTime::FIELD_VALUE]);
                $a[self::FIELD_EFFECTIVE_DATE_TIME_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getEffectivePeriod())) {
            $a[self::FIELD_EFFECTIVE_PERIOD] = $v;
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_IDENTIFIER][] = $v;
            }
        }
        if (null !== ($v = $this->getInformationSource())) {
            $a[self::FIELD_INFORMATION_SOURCE] = $v;
        }
        if (null !== ($v = $this->getMedicationCodeableConcept())) {
            $a[self::FIELD_MEDICATION_CODEABLE_CONCEPT] = $v;
        }
        if (null !== ($v = $this->getMedicationReference())) {
            $a[self::FIELD_MEDICATION_REFERENCE] = $v;
        }
        if ([] !== ($vs = $this->getNote())) {
            $a[self::FIELD_NOTE] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_NOTE][] = $v;
            }
        }
        if ([] !== ($vs = $this->getPartOf())) {
            $a[self::FIELD_PART_OF] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_PART_OF][] = $v;
            }
        }
        if ([] !== ($vs = $this->getReasonCode())) {
            $a[self::FIELD_REASON_CODE] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_REASON_CODE][] = $v;
            }
        }
        if ([] !== ($vs = $this->getReasonReference())) {
            $a[self::FIELD_REASON_REFERENCE] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_REASON_REFERENCE][] = $v;
            }
        }
        if (null !== ($v = $this->getStatus())) {
            $a[self::FIELD_STATUS] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRMedicationStatusCodes::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRMedicationStatusCodes::FIELD_VALUE]);
                $a[self::FIELD_STATUS_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getStatusReason())) {
            $a[self::FIELD_STATUS_REASON] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_STATUS_REASON][] = $v;
            }
        }
        if (null !== ($v = $this->getSubject())) {
            $a[self::FIELD_SUBJECT] = $v;
        }
        if ([] !== ($vs = $this->_getFHIRComments())) {
            $a[PHPFHIRConstants::JSON_FIELD_FHIR_COMMENTS] = $vs;
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