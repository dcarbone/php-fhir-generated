<?php

namespace DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 26th, 2019 15:43+0000
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
 *   Copyright (c) 2011-2013, HL7, Inc.
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
 *   Generated on Tue, Sep 30, 2014 18:08+1000 for FHIR v0.0.82
 */

use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMedicationStatement\FHIRMedicationStatementDosage;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRTypeInterface;

/**
 * A record of medication being taken by a patient, or that the medication has been
 * given to a patient where the record is the result of a report from the patient
 * or another clinician.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRMedicationStatement
 * @package \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource
 */
class FHIRMedicationStatement extends FHIRResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_MEDICATION_STATEMENT;
    const FIELD_DEVICE = 'device';
    const FIELD_DOSAGE = 'dosage';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_MEDICATION = 'medication';
    const FIELD_PATIENT = 'patient';
    const FIELD_REASON_NOT_GIVEN = 'reasonNotGiven';
    const FIELD_WAS_NOT_GIVEN = 'wasNotGiven';
    const FIELD_WAS_NOT_GIVEN_EXT = '_wasNotGiven';
    const FIELD_WHEN_GIVEN = 'whenGiven';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An identifier or a link to a resource that identifies a device used in
     * administering the medication to the patient.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference[]
     */
    protected $device = [];

    /**
     * A record of medication being taken by a patient, or that the medication has been
     * given to a patient where the record is the result of a report from the patient
     * or another clinician.
     *
     * Indicates how the medication is/was used by the patient.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMedicationStatement\FHIRMedicationStatementDosage[]
     */
    protected $dosage = [];

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * External identifier - FHIR will generate its own internal IDs (probably URLs)
     * which do not need to be explicitly managed by the resource. The identifier here
     * is one that would be used by another non-FHIR system - for example an automated
     * medication pump would provide a record each time it operated; an administration
     * while the patient was off the ward might be made with a different system and
     * entered after the event. Particularly important if these records have to be
     * updated.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier[]
     */
    protected $identifier = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the medication being administered. This is either a link to a
     * resource representing the details of the medication or a simple attribute
     * carrying a code that identifies the medication from a known list of medications.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    protected $medication = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The person or animal who is /was taking the medication.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    protected $patient = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code indicating why the medication was not taken.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept[]
     */
    protected $reasonNotGiven = [];

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Set this to true if the record is saying that the medication was NOT taken.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBoolean
     */
    protected $wasNotGiven = null;

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The interval of time during which it is being asserted that the patient was
     * taking the medication.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRPeriod
     */
    protected $whenGiven = null;

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
        if (isset($data[self::FIELD_DEVICE])) {
            if (is_array($data[self::FIELD_DEVICE])) {
                foreach($data[self::FIELD_DEVICE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRResourceReference) {
                        $this->addDevice($v);
                    } else {
                        $this->addDevice(new FHIRResourceReference($v));
                    }
                }
            } else if ($data[self::FIELD_DEVICE] instanceof FHIRResourceReference) {
                $this->addDevice($data[self::FIELD_DEVICE]);
            } else {
                $this->addDevice(new FHIRResourceReference($data[self::FIELD_DEVICE]));
            }
        }
        if (isset($data[self::FIELD_DOSAGE])) {
            if (is_array($data[self::FIELD_DOSAGE])) {
                foreach($data[self::FIELD_DOSAGE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRMedicationStatementDosage) {
                        $this->addDosage($v);
                    } else {
                        $this->addDosage(new FHIRMedicationStatementDosage($v));
                    }
                }
            } else if ($data[self::FIELD_DOSAGE] instanceof FHIRMedicationStatementDosage) {
                $this->addDosage($data[self::FIELD_DOSAGE]);
            } else {
                $this->addDosage(new FHIRMedicationStatementDosage($data[self::FIELD_DOSAGE]));
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
        if (isset($data[self::FIELD_MEDICATION])) {
            if ($data[self::FIELD_MEDICATION] instanceof FHIRResourceReference) {
                $this->setMedication($data[self::FIELD_MEDICATION]);
            } else {
                $this->setMedication(new FHIRResourceReference($data[self::FIELD_MEDICATION]));
            }
        }
        if (isset($data[self::FIELD_PATIENT])) {
            if ($data[self::FIELD_PATIENT] instanceof FHIRResourceReference) {
                $this->setPatient($data[self::FIELD_PATIENT]);
            } else {
                $this->setPatient(new FHIRResourceReference($data[self::FIELD_PATIENT]));
            }
        }
        if (isset($data[self::FIELD_REASON_NOT_GIVEN])) {
            if (is_array($data[self::FIELD_REASON_NOT_GIVEN])) {
                foreach($data[self::FIELD_REASON_NOT_GIVEN] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addReasonNotGiven($v);
                    } else {
                        $this->addReasonNotGiven(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_REASON_NOT_GIVEN] instanceof FHIRCodeableConcept) {
                $this->addReasonNotGiven($data[self::FIELD_REASON_NOT_GIVEN]);
            } else {
                $this->addReasonNotGiven(new FHIRCodeableConcept($data[self::FIELD_REASON_NOT_GIVEN]));
            }
        }
        if (isset($data[self::FIELD_WAS_NOT_GIVEN]) || isset($data[self::FIELD_WAS_NOT_GIVEN_EXT])) {
            if (isset($data[self::FIELD_WAS_NOT_GIVEN])) {
                $value = $data[self::FIELD_WAS_NOT_GIVEN];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_WAS_NOT_GIVEN_EXT]) && is_array($data[self::FIELD_WAS_NOT_GIVEN_EXT])) {
                $ext = $data[self::FIELD_WAS_NOT_GIVEN_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setWasNotGiven($value);
                } else if (is_array($value)) {
                    $this->setWasNotGiven(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setWasNotGiven(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setWasNotGiven(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_WHEN_GIVEN])) {
            if ($data[self::FIELD_WHEN_GIVEN] instanceof FHIRPeriod) {
                $this->setWhenGiven($data[self::FIELD_WHEN_GIVEN]);
            } else {
                $this->setWhenGiven(new FHIRPeriod($data[self::FIELD_WHEN_GIVEN]));
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
     * An identifier or a link to a resource that identifies a device used in
     * administering the medication to the patient.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference[]
     */
    public function getDevice()
    {
        return $this->device;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An identifier or a link to a resource that identifies a device used in
     * administering the medication to the patient.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference $device
     * @return static
     */
    public function addDevice(FHIRResourceReference $device = null)
    {
        $this->device[] = $device;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An identifier or a link to a resource that identifies a device used in
     * administering the medication to the patient.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference[] $device
     * @return static
     */
    public function setDevice(array $device = [])
    {
        $this->device = [];
        if ([] === $device) {
            return $this;
        }
        foreach($device as $v) {
            if ($v instanceof FHIRResourceReference) {
                $this->addDevice($v);
            } else {
                $this->addDevice(new FHIRResourceReference($v));
            }
        }
        return $this;
    }

    /**
     * A record of medication being taken by a patient, or that the medication has been
     * given to a patient where the record is the result of a report from the patient
     * or another clinician.
     *
     * Indicates how the medication is/was used by the patient.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMedicationStatement\FHIRMedicationStatementDosage[]
     */
    public function getDosage()
    {
        return $this->dosage;
    }

    /**
     * A record of medication being taken by a patient, or that the medication has been
     * given to a patient where the record is the result of a report from the patient
     * or another clinician.
     *
     * Indicates how the medication is/was used by the patient.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMedicationStatement\FHIRMedicationStatementDosage $dosage
     * @return static
     */
    public function addDosage(FHIRMedicationStatementDosage $dosage = null)
    {
        $this->dosage[] = $dosage;
        return $this;
    }

    /**
     * A record of medication being taken by a patient, or that the medication has been
     * given to a patient where the record is the result of a report from the patient
     * or another clinician.
     *
     * Indicates how the medication is/was used by the patient.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMedicationStatement\FHIRMedicationStatementDosage[] $dosage
     * @return static
     */
    public function setDosage(array $dosage = [])
    {
        $this->dosage = [];
        if ([] === $dosage) {
            return $this;
        }
        foreach($dosage as $v) {
            if ($v instanceof FHIRMedicationStatementDosage) {
                $this->addDosage($v);
            } else {
                $this->addDosage(new FHIRMedicationStatementDosage($v));
            }
        }
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * External identifier - FHIR will generate its own internal IDs (probably URLs)
     * which do not need to be explicitly managed by the resource. The identifier here
     * is one that would be used by another non-FHIR system - for example an automated
     * medication pump would provide a record each time it operated; an administration
     * while the patient was off the ward might be made with a different system and
     * entered after the event. Particularly important if these records have to be
     * updated.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * External identifier - FHIR will generate its own internal IDs (probably URLs)
     * which do not need to be explicitly managed by the resource. The identifier here
     * is one that would be used by another non-FHIR system - for example an automated
     * medication pump would provide a record each time it operated; an administration
     * while the patient was off the ward might be made with a different system and
     * entered after the event. Particularly important if these records have to be
     * updated.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier $identifier
     * @return static
     */
    public function addIdentifier(FHIRIdentifier $identifier = null)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * External identifier - FHIR will generate its own internal IDs (probably URLs)
     * which do not need to be explicitly managed by the resource. The identifier here
     * is one that would be used by another non-FHIR system - for example an automated
     * medication pump would provide a record each time it operated; an administration
     * while the patient was off the ward might be made with a different system and
     * entered after the event. Particularly important if these records have to be
     * updated.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier[] $identifier
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
     * Identifies the medication being administered. This is either a link to a
     * resource representing the details of the medication or a simple attribute
     * carrying a code that identifies the medication from a known list of medications.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    public function getMedication()
    {
        return $this->medication;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the medication being administered. This is either a link to a
     * resource representing the details of the medication or a simple attribute
     * carrying a code that identifies the medication from a known list of medications.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference $medication
     * @return static
     */
    public function setMedication(FHIRResourceReference $medication = null)
    {
        $this->medication = $medication;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The person or animal who is /was taking the medication.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    public function getPatient()
    {
        return $this->patient;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The person or animal who is /was taking the medication.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference $patient
     * @return static
     */
    public function setPatient(FHIRResourceReference $patient = null)
    {
        $this->patient = $patient;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code indicating why the medication was not taken.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept[]
     */
    public function getReasonNotGiven()
    {
        return $this->reasonNotGiven;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code indicating why the medication was not taken.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept $reasonNotGiven
     * @return static
     */
    public function addReasonNotGiven(FHIRCodeableConcept $reasonNotGiven = null)
    {
        $this->reasonNotGiven[] = $reasonNotGiven;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code indicating why the medication was not taken.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept[] $reasonNotGiven
     * @return static
     */
    public function setReasonNotGiven(array $reasonNotGiven = [])
    {
        $this->reasonNotGiven = [];
        if ([] === $reasonNotGiven) {
            return $this;
        }
        foreach($reasonNotGiven as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addReasonNotGiven($v);
            } else {
                $this->addReasonNotGiven(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Set this to true if the record is saying that the medication was NOT taken.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBoolean
     */
    public function getWasNotGiven()
    {
        return $this->wasNotGiven;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Set this to true if the record is saying that the medication was NOT taken.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBoolean $wasNotGiven
     * @return static
     */
    public function setWasNotGiven($wasNotGiven = null)
    {
        if (null === $wasNotGiven) {
            $this->wasNotGiven = null;
            return $this;
        }
        if ($wasNotGiven instanceof FHIRBoolean) {
            $this->wasNotGiven = $wasNotGiven;
            return $this;
        }
        $this->wasNotGiven = new FHIRBoolean($wasNotGiven);
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The interval of time during which it is being asserted that the patient was
     * taking the medication.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRPeriod
     */
    public function getWhenGiven()
    {
        return $this->whenGiven;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The interval of time during which it is being asserted that the patient was
     * taking the medication.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRPeriod $whenGiven
     * @return static
     */
    public function setWhenGiven(FHIRPeriod $whenGiven = null)
    {
        $this->whenGiven = $whenGiven;
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
        if ([] !== ($vs = $this->getDevice())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_DEVICE, $i)] = $fieldErrs;
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
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_IDENTIFIER, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getMedication())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MEDICATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPatient())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATIENT] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getReasonNotGiven())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_REASON_NOT_GIVEN, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getWasNotGiven())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_WAS_NOT_GIVEN] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getWhenGiven())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_WHEN_GIVEN] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_DEVICE])) {
            $v = $this->getDevice();
            foreach($validationRules[self::FIELD_DEVICE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_STATEMENT, self::FIELD_DEVICE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEVICE])) {
                        $errs[self::FIELD_DEVICE] = [];
                    }
                    $errs[self::FIELD_DEVICE][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_MEDICATION])) {
            $v = $this->getMedication();
            foreach($validationRules[self::FIELD_MEDICATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_STATEMENT, self::FIELD_MEDICATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MEDICATION])) {
                        $errs[self::FIELD_MEDICATION] = [];
                    }
                    $errs[self::FIELD_MEDICATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATIENT])) {
            $v = $this->getPatient();
            foreach($validationRules[self::FIELD_PATIENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_STATEMENT, self::FIELD_PATIENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATIENT])) {
                        $errs[self::FIELD_PATIENT] = [];
                    }
                    $errs[self::FIELD_PATIENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REASON_NOT_GIVEN])) {
            $v = $this->getReasonNotGiven();
            foreach($validationRules[self::FIELD_REASON_NOT_GIVEN] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_STATEMENT, self::FIELD_REASON_NOT_GIVEN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REASON_NOT_GIVEN])) {
                        $errs[self::FIELD_REASON_NOT_GIVEN] = [];
                    }
                    $errs[self::FIELD_REASON_NOT_GIVEN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_WAS_NOT_GIVEN])) {
            $v = $this->getWasNotGiven();
            foreach($validationRules[self::FIELD_WAS_NOT_GIVEN] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_STATEMENT, self::FIELD_WAS_NOT_GIVEN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_WAS_NOT_GIVEN])) {
                        $errs[self::FIELD_WAS_NOT_GIVEN] = [];
                    }
                    $errs[self::FIELD_WAS_NOT_GIVEN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_WHEN_GIVEN])) {
            $v = $this->getWhenGiven();
            foreach($validationRules[self::FIELD_WHEN_GIVEN] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_STATEMENT, self::FIELD_WHEN_GIVEN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_WHEN_GIVEN])) {
                        $errs[self::FIELD_WHEN_GIVEN] = [];
                    }
                    $errs[self::FIELD_WHEN_GIVEN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTAINED])) {
            $v = $this->getContained();
            foreach($validationRules[self::FIELD_CONTAINED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_CONTAINED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTAINED])) {
                        $errs[self::FIELD_CONTAINED] = [];
                    }
                    $errs[self::FIELD_CONTAINED][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_TEXT])) {
            $v = $this->getText();
            foreach($validationRules[self::FIELD_TEXT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_TEXT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TEXT])) {
                        $errs[self::FIELD_TEXT] = [];
                    }
                    $errs[self::FIELD_TEXT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
            $v = $this->getModifierExtension();
            foreach($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BACKBONE_ELEMENT, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MODIFIER_EXTENSION])) {
                        $errs[self::FIELD_MODIFIER_EXTENSION] = [];
                    }
                    $errs[self::FIELD_MODIFIER_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXTENSION])) {
            $v = $this->getExtension();
            foreach($validationRules[self::FIELD_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT, self::FIELD_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXTENSION])) {
                        $errs[self::FIELD_EXTENSION] = [];
                    }
                    $errs[self::FIELD_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ID])) {
            $v = $this->getId();
            foreach($validationRules[self::FIELD_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT, self::FIELD_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ID])) {
                        $errs[self::FIELD_ID] = [];
                    }
                    $errs[self::FIELD_ID][$rule] = $err;
                }
            }
        }
        return $errs;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMedicationStatement $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMedicationStatement
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
                'FHIRMedicationStatement::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMedicationStatement or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        FHIRResource::xmlUnserialize($sxe, $type);
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->device)) {
            foreach($children->device as $child) {
                $type->addDevice(FHIRResourceReference::xmlUnserialize($child));
            }
        }
        if (isset($children->dosage)) {
            foreach($children->dosage as $child) {
                $type->addDosage(FHIRMedicationStatementDosage::xmlUnserialize($child));
            }
        }
        if (isset($children->identifier)) {
            foreach($children->identifier as $child) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($child));
            }
        }
        if (isset($children->medication)) {
            $type->setMedication(FHIRResourceReference::xmlUnserialize($children->medication));
        }
        if (isset($children->patient)) {
            $type->setPatient(FHIRResourceReference::xmlUnserialize($children->patient));
        }
        if (isset($children->reasonNotGiven)) {
            foreach($children->reasonNotGiven as $child) {
                $type->addReasonNotGiven(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->wasNotGiven)) {
            $type->setWasNotGiven(FHIRBoolean::xmlUnserialize($children->wasNotGiven));
        }
        if (isset($attributes->wasNotGiven)) {
            $pt = $type->getWasNotGiven();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->wasNotGiven);
            } else {
                $type->setWasNotGiven((string)$attributes->wasNotGiven);
            }
        }
        if (isset($children->whenGiven)) {
            $type->setWhenGiven(FHIRPeriod::xmlUnserialize($children->whenGiven));
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
        if ([] !== ($vs = $this->getDevice())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_DEVICE, null, $v->_getFHIRXMLNamespace()));
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
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getMedication())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_MEDICATION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getPatient())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PATIENT, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getReasonNotGiven())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_REASON_NOT_GIVEN, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getWasNotGiven())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_WAS_NOT_GIVEN, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getWhenGiven())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_WHEN_GIVEN, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if ([] !== ($vs = $this->getDevice())) {
            $a[self::FIELD_DEVICE] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_DEVICE][] = $v;
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
        if ([] !== ($vs = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_IDENTIFIER][] = $v;
            }
        }
        if (null !== ($v = $this->getMedication())) {
            $a[self::FIELD_MEDICATION] = $v;
        }
        if (null !== ($v = $this->getPatient())) {
            $a[self::FIELD_PATIENT] = $v;
        }
        if ([] !== ($vs = $this->getReasonNotGiven())) {
            $a[self::FIELD_REASON_NOT_GIVEN] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_REASON_NOT_GIVEN][] = $v;
            }
        }
        if (null !== ($v = $this->getWasNotGiven())) {
            $a[self::FIELD_WAS_NOT_GIVEN] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRBoolean::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRBoolean::FIELD_VALUE]);
                $a[self::FIELD_WAS_NOT_GIVEN_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getWhenGiven())) {
            $a[self::FIELD_WHEN_GIVEN] = $v;
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