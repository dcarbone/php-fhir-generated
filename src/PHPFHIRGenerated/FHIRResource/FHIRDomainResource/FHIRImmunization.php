<?php

namespace PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: November 19th, 2018
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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement\FHIRAnnotation;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationExplanation;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationPractitioner;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationReaction;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationVaccinationProtocol;
use PHPFHIRGenerated\FHIRElement\FHIRBoolean;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRDate;
use PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRImmunizationStatusCodes;
use PHPFHIRGenerated\FHIRElement\FHIRQuantity;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * Describes the event of a patient being administered a vaccination or a record of a vaccination as reported by a patient, a clinician or another party and may include vaccine reaction information and what vaccination protocol was followed.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRImmunization
 * @package PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRImmunization extends FHIRDomainResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'Immunization';

    /**
     * Date vaccine administered or was to be administered.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    private $date = null;

    /**
     * The quantity of vaccine product that was administered.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    private $doseQuantity = null;

    /**
     * The visit or admission or other contact between patient and health care provider the immunization was performed as part of.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $encounter = null;

    /**
     * Date vaccine batch expires.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    private $expirationDate = null;

    /**
     * Reasons why a vaccine was or was not administered.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationExplanation
     */
    private $explanation = null;

    /**
     * A unique identifier assigned to this immunization record.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    private $identifier = [];

    /**
     * The service delivery location where the vaccine administration occurred.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $location = null;

    /**
     * Lot number of the  vaccine product.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $lotNumber = null;

    /**
     * Name of vaccine manufacturer.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $manufacturer = null;

    /**
     * Indicates if the vaccination was or was not given.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    private $notGiven = null;

    /**
     * Extra information about the immunization that is not conveyed by the other attributes.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAnnotation[]
     */
    private $note = [];

    /**
     * The patient who either received or did not receive the immunization.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $patient = null;

    /**
     * Indicates who or what performed the event.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationPractitioner[]
     */
    private $practitioner = [];

    /**
     * An indication that the content of the record is based on information from the person who administered the vaccine. This reflects the context under which the data was originally recorded.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    private $primarySource = null;

    /**
     * Categorical data indicating that an adverse event is associated in time to an immunization.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationReaction[]
     */
    private $reaction = [];

    /**
     * The source of the data when the report of the immunization event is not based on information from the person who administered the vaccine.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $reportOrigin = null;

    /**
     * The path by which the vaccine product is taken into the body.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $route = null;

    /**
     * Body site where vaccine was administered.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $site = null;

    /**
     * Indicates the current status of the vaccination event.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRImmunizationStatusCodes
     */
    private $status = null;

    /**
     * Contains information about the protocol(s) under which the vaccine was administered.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationVaccinationProtocol[]
     */
    private $vaccinationProtocol = [];

    /**
     * Vaccine that was administered or was to be administered.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $vaccineCode = null;

    /**
     * FHIRImmunization Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        if (is_array($data)) {
            if (isset($data['date'])) {
                $value = $data['date'];
                if (is_array($value)) {
                    $value = new FHIRDateTime($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRDateTime($value);
                }
                if (!($value instanceof FHIRDateTime)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRImmunization::__construct - Property \"date\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or data to construct type, saw ".gettype($value));
                }
                $this->setDate($value);
            }
            if (isset($data['doseQuantity'])) {
                $value = $data['doseQuantity'];
                if (is_array($value)) {
                    $value = new FHIRQuantity($value);
                } 
                if (!($value instanceof FHIRQuantity)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRImmunization::__construct - Property \"doseQuantity\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRQuantity or data to construct type, saw ".gettype($value));
                }
                $this->setDoseQuantity($value);
            }
            if (isset($data['encounter'])) {
                $value = $data['encounter'];
                if (is_array($value)) {
                    $value = new FHIRReference($value);
                } 
                if (!($value instanceof FHIRReference)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRImmunization::__construct - Property \"encounter\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($value));
                }
                $this->setEncounter($value);
            }
            if (isset($data['expirationDate'])) {
                $value = $data['expirationDate'];
                if (is_array($value)) {
                    $value = new FHIRDate($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRDate($value);
                }
                if (!($value instanceof FHIRDate)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRImmunization::__construct - Property \"expirationDate\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRDate or data to construct type, saw ".gettype($value));
                }
                $this->setExpirationDate($value);
            }
            if (isset($data['explanation'])) {
                $value = $data['explanation'];
                if (is_array($value)) {
                    $value = new FHIRImmunizationExplanation($value);
                } 
                if (!($value instanceof FHIRImmunizationExplanation)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRImmunization::__construct - Property \"explanation\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationExplanation or data to construct type, saw ".gettype($value));
                }
                $this->setExplanation($value);
            }
            if (isset($data['identifier'])) {
                $value = $data['identifier'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRIdentifier($v);
                        } 
                        if (!($v instanceof FHIRIdentifier)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRImmunization::__construct - Collection field \"identifier\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRIdentifier or data to construct type, saw ".gettype($v));
                        }
                        $this->addIdentifier($v);
                    }
                }
            }
            if (isset($data['location'])) {
                $value = $data['location'];
                if (is_array($value)) {
                    $value = new FHIRReference($value);
                } 
                if (!($value instanceof FHIRReference)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRImmunization::__construct - Property \"location\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($value));
                }
                $this->setLocation($value);
            }
            if (isset($data['lotNumber'])) {
                $value = $data['lotNumber'];
                if (is_array($value)) {
                    $value = new FHIRString($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRString($value);
                }
                if (!($value instanceof FHIRString)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRImmunization::__construct - Property \"lotNumber\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or data to construct type, saw ".gettype($value));
                }
                $this->setLotNumber($value);
            }
            if (isset($data['manufacturer'])) {
                $value = $data['manufacturer'];
                if (is_array($value)) {
                    $value = new FHIRReference($value);
                } 
                if (!($value instanceof FHIRReference)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRImmunization::__construct - Property \"manufacturer\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($value));
                }
                $this->setManufacturer($value);
            }
            if (isset($data['notGiven'])) {
                $value = $data['notGiven'];
                if (is_array($value)) {
                    $value = new FHIRBoolean($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRBoolean($value);
                }
                if (!($value instanceof FHIRBoolean)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRImmunization::__construct - Property \"notGiven\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or data to construct type, saw ".gettype($value));
                }
                $this->setNotGiven($value);
            }
            if (isset($data['note'])) {
                $value = $data['note'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRAnnotation($v);
                        } 
                        if (!($v instanceof FHIRAnnotation)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRImmunization::__construct - Collection field \"note\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRAnnotation or data to construct type, saw ".gettype($v));
                        }
                        $this->addNote($v);
                    }
                }
            }
            if (isset($data['patient'])) {
                $value = $data['patient'];
                if (is_array($value)) {
                    $value = new FHIRReference($value);
                } 
                if (!($value instanceof FHIRReference)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRImmunization::__construct - Property \"patient\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($value));
                }
                $this->setPatient($value);
            }
            if (isset($data['practitioner'])) {
                $value = $data['practitioner'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRImmunizationPractitioner($v);
                        } 
                        if (!($v instanceof FHIRImmunizationPractitioner)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRImmunization::__construct - Collection field \"practitioner\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationPractitioner or data to construct type, saw ".gettype($v));
                        }
                        $this->addPractitioner($v);
                    }
                }
            }
            if (isset($data['primarySource'])) {
                $value = $data['primarySource'];
                if (is_array($value)) {
                    $value = new FHIRBoolean($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRBoolean($value);
                }
                if (!($value instanceof FHIRBoolean)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRImmunization::__construct - Property \"primarySource\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or data to construct type, saw ".gettype($value));
                }
                $this->setPrimarySource($value);
            }
            if (isset($data['reaction'])) {
                $value = $data['reaction'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRImmunizationReaction($v);
                        } 
                        if (!($v instanceof FHIRImmunizationReaction)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRImmunization::__construct - Collection field \"reaction\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationReaction or data to construct type, saw ".gettype($v));
                        }
                        $this->addReaction($v);
                    }
                }
            }
            if (isset($data['reportOrigin'])) {
                $value = $data['reportOrigin'];
                if (is_array($value)) {
                    $value = new FHIRCodeableConcept($value);
                } 
                if (!($value instanceof FHIRCodeableConcept)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRImmunization::__construct - Property \"reportOrigin\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept or data to construct type, saw ".gettype($value));
                }
                $this->setReportOrigin($value);
            }
            if (isset($data['route'])) {
                $value = $data['route'];
                if (is_array($value)) {
                    $value = new FHIRCodeableConcept($value);
                } 
                if (!($value instanceof FHIRCodeableConcept)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRImmunization::__construct - Property \"route\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept or data to construct type, saw ".gettype($value));
                }
                $this->setRoute($value);
            }
            if (isset($data['site'])) {
                $value = $data['site'];
                if (is_array($value)) {
                    $value = new FHIRCodeableConcept($value);
                } 
                if (!($value instanceof FHIRCodeableConcept)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRImmunization::__construct - Property \"site\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept or data to construct type, saw ".gettype($value));
                }
                $this->setSite($value);
            }
            if (isset($data['status'])) {
                $value = $data['status'];
                if (is_array($value)) {
                    $value = new FHIRImmunizationStatusCodes($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRImmunizationStatusCodes($value);
                }
                if (!($value instanceof FHIRImmunizationStatusCodes)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRImmunization::__construct - Property \"status\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRImmunizationStatusCodes or data to construct type, saw ".gettype($value));
                }
                $this->setStatus($value);
            }
            if (isset($data['vaccinationProtocol'])) {
                $value = $data['vaccinationProtocol'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRImmunizationVaccinationProtocol($v);
                        } 
                        if (!($v instanceof FHIRImmunizationVaccinationProtocol)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRImmunization::__construct - Collection field \"vaccinationProtocol\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationVaccinationProtocol or data to construct type, saw ".gettype($v));
                        }
                        $this->addVaccinationProtocol($v);
                    }
                }
            }
            if (isset($data['vaccineCode'])) {
                $value = $data['vaccineCode'];
                if (is_array($value)) {
                    $value = new FHIRCodeableConcept($value);
                } 
                if (!($value instanceof FHIRCodeableConcept)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRImmunization::__construct - Property \"vaccineCode\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept or data to construct type, saw ".gettype($value));
                }
                $this->setVaccineCode($value);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRImmunization::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
        parent::__construct($data);
    }

    /**
     * Date vaccine administered or was to be administered.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setDate($date)
    {
        if (null === $date) {
            return $this; 
        }
        if (is_scalar($date)) {
            $date = new FHIRDateTime($date);
        }
        if (!($date instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRImmunization::setDate - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($date)
            ));
        }
        $this->date = $date;
        return $this;
    }

    /**
     * Date vaccine administered or was to be administered.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * The quantity of vaccine product that was administered.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     * @return $this
     */
    public function setDoseQuantity(FHIRQuantity $doseQuantity = null)
    {
        if (null === $doseQuantity) {
            return $this; 
        }
        $this->doseQuantity = $doseQuantity;
        return $this;
    }

    /**
     * The quantity of vaccine product that was administered.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getDoseQuantity()
    {
        return $this->doseQuantity;
    }

    /**
     * The visit or admission or other contact between patient and health care provider the immunization was performed as part of.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setEncounter(FHIRReference $encounter = null)
    {
        if (null === $encounter) {
            return $this; 
        }
        $this->encounter = $encounter;
        return $this;
    }

    /**
     * The visit or admission or other contact between patient and health care provider the immunization was performed as part of.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getEncounter()
    {
        return $this->encounter;
    }

    /**
     * Date vaccine batch expires.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDate
     * @return $this
     */
    public function setExpirationDate($expirationDate)
    {
        if (null === $expirationDate) {
            return $this; 
        }
        if (is_scalar($expirationDate)) {
            $expirationDate = new FHIRDate($expirationDate);
        }
        if (!($expirationDate instanceof FHIRDate)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRImmunization::setExpirationDate - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDate or appropriate scalar value, %s seen.',
                gettype($expirationDate)
            ));
        }
        $this->expirationDate = $expirationDate;
        return $this;
    }

    /**
     * Date vaccine batch expires.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }

    /**
     * Reasons why a vaccine was or was not administered.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationExplanation
     * @return $this
     */
    public function setExplanation(FHIRImmunizationExplanation $explanation = null)
    {
        if (null === $explanation) {
            return $this; 
        }
        $this->explanation = $explanation;
        return $this;
    }

    /**
     * Reasons why a vaccine was or was not administered.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationExplanation
     */
    public function getExplanation()
    {
        return $this->explanation;
    }

    /**
     * A unique identifier assigned to this immunization record.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     * @return $this
     */
    public function addIdentifier(FHIRIdentifier $identifier = null)
    {
        if (null === $identifier) {
            return $this; 
        }
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * A unique identifier assigned to this immunization record.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * The service delivery location where the vaccine administration occurred.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setLocation(FHIRReference $location = null)
    {
        if (null === $location) {
            return $this; 
        }
        $this->location = $location;
        return $this;
    }

    /**
     * The service delivery location where the vaccine administration occurred.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Lot number of the  vaccine product.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setLotNumber($lotNumber)
    {
        if (null === $lotNumber) {
            return $this; 
        }
        if (is_scalar($lotNumber)) {
            $lotNumber = new FHIRString($lotNumber);
        }
        if (!($lotNumber instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRImmunization::setLotNumber - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($lotNumber)
            ));
        }
        $this->lotNumber = $lotNumber;
        return $this;
    }

    /**
     * Lot number of the  vaccine product.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getLotNumber()
    {
        return $this->lotNumber;
    }

    /**
     * Name of vaccine manufacturer.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setManufacturer(FHIRReference $manufacturer = null)
    {
        if (null === $manufacturer) {
            return $this; 
        }
        $this->manufacturer = $manufacturer;
        return $this;
    }

    /**
     * Name of vaccine manufacturer.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * Indicates if the vaccination was or was not given.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     * @return $this
     */
    public function setNotGiven($notGiven)
    {
        if (null === $notGiven) {
            return $this; 
        }
        if (is_scalar($notGiven)) {
            $notGiven = new FHIRBoolean($notGiven);
        }
        if (!($notGiven instanceof FHIRBoolean)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRImmunization::setNotGiven - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($notGiven)
            ));
        }
        $this->notGiven = $notGiven;
        return $this;
    }

    /**
     * Indicates if the vaccination was or was not given.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getNotGiven()
    {
        return $this->notGiven;
    }

    /**
     * Extra information about the immunization that is not conveyed by the other attributes.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     * @return $this
     */
    public function addNote(FHIRAnnotation $note = null)
    {
        if (null === $note) {
            return $this; 
        }
        $this->note[] = $note;
        return $this;
    }

    /**
     * Extra information about the immunization that is not conveyed by the other attributes.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAnnotation[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * The patient who either received or did not receive the immunization.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setPatient(FHIRReference $patient = null)
    {
        if (null === $patient) {
            return $this; 
        }
        $this->patient = $patient;
        return $this;
    }

    /**
     * The patient who either received or did not receive the immunization.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPatient()
    {
        return $this->patient;
    }

    /**
     * Indicates who or what performed the event.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationPractitioner
     * @return $this
     */
    public function addPractitioner(FHIRImmunizationPractitioner $practitioner = null)
    {
        if (null === $practitioner) {
            return $this; 
        }
        $this->practitioner[] = $practitioner;
        return $this;
    }

    /**
     * Indicates who or what performed the event.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationPractitioner[]
     */
    public function getPractitioner()
    {
        return $this->practitioner;
    }

    /**
     * An indication that the content of the record is based on information from the person who administered the vaccine. This reflects the context under which the data was originally recorded.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     * @return $this
     */
    public function setPrimarySource($primarySource)
    {
        if (null === $primarySource) {
            return $this; 
        }
        if (is_scalar($primarySource)) {
            $primarySource = new FHIRBoolean($primarySource);
        }
        if (!($primarySource instanceof FHIRBoolean)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRImmunization::setPrimarySource - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($primarySource)
            ));
        }
        $this->primarySource = $primarySource;
        return $this;
    }

    /**
     * An indication that the content of the record is based on information from the person who administered the vaccine. This reflects the context under which the data was originally recorded.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getPrimarySource()
    {
        return $this->primarySource;
    }

    /**
     * Categorical data indicating that an adverse event is associated in time to an immunization.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationReaction
     * @return $this
     */
    public function addReaction(FHIRImmunizationReaction $reaction = null)
    {
        if (null === $reaction) {
            return $this; 
        }
        $this->reaction[] = $reaction;
        return $this;
    }

    /**
     * Categorical data indicating that an adverse event is associated in time to an immunization.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationReaction[]
     */
    public function getReaction()
    {
        return $this->reaction;
    }

    /**
     * The source of the data when the report of the immunization event is not based on information from the person who administered the vaccine.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setReportOrigin(FHIRCodeableConcept $reportOrigin = null)
    {
        if (null === $reportOrigin) {
            return $this; 
        }
        $this->reportOrigin = $reportOrigin;
        return $this;
    }

    /**
     * The source of the data when the report of the immunization event is not based on information from the person who administered the vaccine.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getReportOrigin()
    {
        return $this->reportOrigin;
    }

    /**
     * The path by which the vaccine product is taken into the body.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setRoute(FHIRCodeableConcept $route = null)
    {
        if (null === $route) {
            return $this; 
        }
        $this->route = $route;
        return $this;
    }

    /**
     * The path by which the vaccine product is taken into the body.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getRoute()
    {
        return $this->route;
    }

    /**
     * Body site where vaccine was administered.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setSite(FHIRCodeableConcept $site = null)
    {
        if (null === $site) {
            return $this; 
        }
        $this->site = $site;
        return $this;
    }

    /**
     * Body site where vaccine was administered.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * Indicates the current status of the vaccination event.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRImmunizationStatusCodes
     * @return $this
     */
    public function setStatus($status)
    {
        if (null === $status) {
            return $this; 
        }
        if (is_scalar($status)) {
            $status = new FHIRImmunizationStatusCodes($status);
        }
        if (!($status instanceof FHIRImmunizationStatusCodes)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRImmunization::setStatus - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRImmunizationStatusCodes or appropriate scalar value, %s seen.',
                gettype($status)
            ));
        }
        $this->status = $status;
        return $this;
    }

    /**
     * Indicates the current status of the vaccination event.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRImmunizationStatusCodes
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Contains information about the protocol(s) under which the vaccine was administered.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationVaccinationProtocol
     * @return $this
     */
    public function addVaccinationProtocol(FHIRImmunizationVaccinationProtocol $vaccinationProtocol = null)
    {
        if (null === $vaccinationProtocol) {
            return $this; 
        }
        $this->vaccinationProtocol[] = $vaccinationProtocol;
        return $this;
    }

    /**
     * Contains information about the protocol(s) under which the vaccine was administered.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationVaccinationProtocol[]
     */
    public function getVaccinationProtocol()
    {
        return $this->vaccinationProtocol;
    }

    /**
     * Vaccine that was administered or was to be administered.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setVaccineCode(FHIRCodeableConcept $vaccineCode = null)
    {
        if (null === $vaccineCode) {
            return $this; 
        }
        $this->vaccineCode = $vaccineCode;
        return $this;
    }

    /**
     * Vaccine that was administered or was to be administered.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getVaccineCode()
    {
        return $this->vaccineCode;
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
        $a['resourceType'] = self::FHIR_TYPE_NAME;
        if (null !== ($v = $this->getDate())) {
            $a['date'] = $v;
        }
        if (null !== ($v = $this->getDoseQuantity())) {
            $a['doseQuantity'] = $v;
        }
        if (null !== ($v = $this->getEncounter())) {
            $a['encounter'] = $v;
        }
        if (null !== ($v = $this->getExpirationDate())) {
            $a['expirationDate'] = $v;
        }
        if (null !== ($v = $this->getExplanation())) {
            $a['explanation'] = $v;
        }
        if (0 < count($values = $this->getIdentifier())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['identifier'] = $vs;
            }
        }
        if (null !== ($v = $this->getLocation())) {
            $a['location'] = $v;
        }
        if (null !== ($v = $this->getLotNumber())) {
            $a['lotNumber'] = $v;
        }
        if (null !== ($v = $this->getManufacturer())) {
            $a['manufacturer'] = $v;
        }
        if (null !== ($v = $this->getNotGiven())) {
            $a['notGiven'] = $v;
        }
        if (0 < count($values = $this->getNote())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['note'] = $vs;
            }
        }
        if (null !== ($v = $this->getPatient())) {
            $a['patient'] = $v;
        }
        if (0 < count($values = $this->getPractitioner())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['practitioner'] = $vs;
            }
        }
        if (null !== ($v = $this->getPrimarySource())) {
            $a['primarySource'] = $v;
        }
        if (0 < count($values = $this->getReaction())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['reaction'] = $vs;
            }
        }
        if (null !== ($v = $this->getReportOrigin())) {
            $a['reportOrigin'] = $v;
        }
        if (null !== ($v = $this->getRoute())) {
            $a['route'] = $v;
        }
        if (null !== ($v = $this->getSite())) {
            $a['site'] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a['status'] = $v;
        }
        if (0 < count($values = $this->getVaccinationProtocol())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['vaccinationProtocol'] = $vs;
            }
        }
        if (null !== ($v = $this->getVaccineCode())) {
            $a['vaccineCode'] = $v;
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
            $sxe = new \SimpleXMLElement('<Immunization xmlns="http://hl7.org/fhir"></Immunization>');
        }
        if (null !== ($v = $this->getDate())) {
            $v->xmlSerialize(true, $sxe->addChild('date'));
        }
        if (null !== ($v = $this->getDoseQuantity())) {
            $v->xmlSerialize(true, $sxe->addChild('doseQuantity'));
        }
        if (null !== ($v = $this->getEncounter())) {
            $v->xmlSerialize(true, $sxe->addChild('encounter'));
        }
        if (null !== ($v = $this->getExpirationDate())) {
            $v->xmlSerialize(true, $sxe->addChild('expirationDate'));
        }
        if (null !== ($v = $this->getExplanation())) {
            $v->xmlSerialize(true, $sxe->addChild('explanation'));
        }
        if (0 < count($values = $this->getIdentifier())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('identifier'));
                }
            }
        }
        if (null !== ($v = $this->getLocation())) {
            $v->xmlSerialize(true, $sxe->addChild('location'));
        }
        if (null !== ($v = $this->getLotNumber())) {
            $v->xmlSerialize(true, $sxe->addChild('lotNumber'));
        }
        if (null !== ($v = $this->getManufacturer())) {
            $v->xmlSerialize(true, $sxe->addChild('manufacturer'));
        }
        if (null !== ($v = $this->getNotGiven())) {
            $v->xmlSerialize(true, $sxe->addChild('notGiven'));
        }
        if (0 < count($values = $this->getNote())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('note'));
                }
            }
        }
        if (null !== ($v = $this->getPatient())) {
            $v->xmlSerialize(true, $sxe->addChild('patient'));
        }
        if (0 < count($values = $this->getPractitioner())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('practitioner'));
                }
            }
        }
        if (null !== ($v = $this->getPrimarySource())) {
            $v->xmlSerialize(true, $sxe->addChild('primarySource'));
        }
        if (0 < count($values = $this->getReaction())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('reaction'));
                }
            }
        }
        if (null !== ($v = $this->getReportOrigin())) {
            $v->xmlSerialize(true, $sxe->addChild('reportOrigin'));
        }
        if (null !== ($v = $this->getRoute())) {
            $v->xmlSerialize(true, $sxe->addChild('route'));
        }
        if (null !== ($v = $this->getSite())) {
            $v->xmlSerialize(true, $sxe->addChild('site'));
        }
        if (null !== ($v = $this->getStatus())) {
            $v->xmlSerialize(true, $sxe->addChild('status'));
        }
        if (0 < count($values = $this->getVaccinationProtocol())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('vaccinationProtocol'));
                }
            }
        }
        if (null !== ($v = $this->getVaccineCode())) {
            $v->xmlSerialize(true, $sxe->addChild('vaccineCode'));
        }
        return parent::xmlSerialize($returnSXE, $sxe);
    }
}