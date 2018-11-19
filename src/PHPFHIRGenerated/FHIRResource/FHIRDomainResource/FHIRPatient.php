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

use PHPFHIRGenerated\FHIRElement\FHIRAddress;
use PHPFHIRGenerated\FHIRElement\FHIRAdministrativeGender;
use PHPFHIRGenerated\FHIRElement\FHIRAttachment;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientAnimal;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientCommunication;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientContact;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientLink;
use PHPFHIRGenerated\FHIRElement\FHIRBoolean;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRContactPoint;
use PHPFHIRGenerated\FHIRElement\FHIRDate;
use PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use PHPFHIRGenerated\FHIRElement\FHIRHumanName;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRInteger;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * Demographics and other administrative information about an individual or animal receiving care or other health-related services.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRPatient
 * @package PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRPatient extends FHIRDomainResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'Patient';

    /**
     * Whether this patient record is in active use.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    private $active = null;

    /**
     * Addresses for the individual.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAddress[]
     */
    private $address = [];

    /**
     * This patient is known to be an animal.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientAnimal
     */
    private $animal = null;

    /**
     * The date of birth for the individual.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    private $birthDate = null;

    /**
     * Languages which may be used to communicate with the patient about his or her health.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientCommunication[]
     */
    private $communication = [];

    /**
     * A contact party (e.g. guardian, partner, friend) for the patient.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientContact[]
     */
    private $contact = [];

    /**
     * Indicates if the individual is deceased or not. (choose any one of deceased*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    private $deceasedBoolean = null;

    /**
     * Indicates if the individual is deceased or not. (choose any one of deceased*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    private $deceasedDateTime = null;

    /**
     * Administrative Gender - the gender that the patient is considered to have for administration and record keeping purposes.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAdministrativeGender
     */
    private $gender = null;

    /**
     * Patient's nominated care provider.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    private $generalPractitioner = [];

    /**
     * An identifier for this patient.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    private $identifier = [];

    /**
     * Link to another patient resource that concerns the same actual patient.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientLink[]
     */
    private $link = [];

    /**
     * Organization that is the custodian of the patient record.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $managingOrganization = null;

    /**
     * This field contains a patient's most recent marital (civil) status.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $maritalStatus = null;

    /**
     * Indicates whether the patient is part of a multiple (bool) or indicates the actual birth order (integer). (choose any one of multipleBirth*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    private $multipleBirthBoolean = null;

    /**
     * Indicates whether the patient is part of a multiple (bool) or indicates the actual birth order (integer). (choose any one of multipleBirth*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    private $multipleBirthInteger = null;

    /**
     * A name associated with the individual.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRHumanName[]
     */
    private $name = [];

    /**
     * Image of the patient.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAttachment[]
     */
    private $photo = [];

    /**
     * A contact detail (e.g. a telephone number or an email address) by which the individual may be contacted.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRContactPoint[]
     */
    private $telecom = [];

    /**
     * FHIRPatient Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        if (is_array($data)) {
            if (isset($data['active'])) {
                $value = $data['active'];
                if (is_array($value)) {
                    $value = new FHIRBoolean($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRBoolean($value);
                }
                if (!($value instanceof FHIRBoolean)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRPatient::__construct - Property \"active\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or data to construct type, saw ".gettype($value));
                }
                $this->setActive($value);
            }
            if (isset($data['address'])) {
                $value = $data['address'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRAddress($v);
                        } 
                        if (!($v instanceof FHIRAddress)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRPatient::__construct - Collection field \"address\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRAddress or data to construct type, saw ".gettype($v));
                        }
                        $this->addAddress($v);
                    }
                }
            }
            if (isset($data['animal'])) {
                $value = $data['animal'];
                if (is_array($value)) {
                    $value = new FHIRPatientAnimal($value);
                } 
                if (!($value instanceof FHIRPatientAnimal)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRPatient::__construct - Property \"animal\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientAnimal or data to construct type, saw ".gettype($value));
                }
                $this->setAnimal($value);
            }
            if (isset($data['birthDate'])) {
                $value = $data['birthDate'];
                if (is_array($value)) {
                    $value = new FHIRDate($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRDate($value);
                }
                if (!($value instanceof FHIRDate)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRPatient::__construct - Property \"birthDate\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRDate or data to construct type, saw ".gettype($value));
                }
                $this->setBirthDate($value);
            }
            if (isset($data['communication'])) {
                $value = $data['communication'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRPatientCommunication($v);
                        } 
                        if (!($v instanceof FHIRPatientCommunication)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRPatient::__construct - Collection field \"communication\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientCommunication or data to construct type, saw ".gettype($v));
                        }
                        $this->addCommunication($v);
                    }
                }
            }
            if (isset($data['contact'])) {
                $value = $data['contact'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRPatientContact($v);
                        } 
                        if (!($v instanceof FHIRPatientContact)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRPatient::__construct - Collection field \"contact\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientContact or data to construct type, saw ".gettype($v));
                        }
                        $this->addContact($v);
                    }
                }
            }
            if (isset($data['deceasedBoolean'])) {
                $value = $data['deceasedBoolean'];
                if (is_array($value)) {
                    $value = new FHIRBoolean($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRBoolean($value);
                }
                if (!($value instanceof FHIRBoolean)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRPatient::__construct - Property \"deceasedBoolean\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or data to construct type, saw ".gettype($value));
                }
                $this->setDeceasedBoolean($value);
            }
            if (isset($data['deceasedDateTime'])) {
                $value = $data['deceasedDateTime'];
                if (is_array($value)) {
                    $value = new FHIRDateTime($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRDateTime($value);
                }
                if (!($value instanceof FHIRDateTime)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRPatient::__construct - Property \"deceasedDateTime\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or data to construct type, saw ".gettype($value));
                }
                $this->setDeceasedDateTime($value);
            }
            if (isset($data['gender'])) {
                $value = $data['gender'];
                if (is_array($value)) {
                    $value = new FHIRAdministrativeGender($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRAdministrativeGender($value);
                }
                if (!($value instanceof FHIRAdministrativeGender)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRPatient::__construct - Property \"gender\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRAdministrativeGender or data to construct type, saw ".gettype($value));
                }
                $this->setGender($value);
            }
            if (isset($data['generalPractitioner'])) {
                $value = $data['generalPractitioner'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRReference($v);
                        } 
                        if (!($v instanceof FHIRReference)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRPatient::__construct - Collection field \"generalPractitioner\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($v));
                        }
                        $this->addGeneralPractitioner($v);
                    }
                }
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
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRPatient::__construct - Collection field \"identifier\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRIdentifier or data to construct type, saw ".gettype($v));
                        }
                        $this->addIdentifier($v);
                    }
                }
            }
            if (isset($data['link'])) {
                $value = $data['link'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRPatientLink($v);
                        } 
                        if (!($v instanceof FHIRPatientLink)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRPatient::__construct - Collection field \"link\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientLink or data to construct type, saw ".gettype($v));
                        }
                        $this->addLink($v);
                    }
                }
            }
            if (isset($data['managingOrganization'])) {
                $value = $data['managingOrganization'];
                if (is_array($value)) {
                    $value = new FHIRReference($value);
                } 
                if (!($value instanceof FHIRReference)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRPatient::__construct - Property \"managingOrganization\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($value));
                }
                $this->setManagingOrganization($value);
            }
            if (isset($data['maritalStatus'])) {
                $value = $data['maritalStatus'];
                if (is_array($value)) {
                    $value = new FHIRCodeableConcept($value);
                } 
                if (!($value instanceof FHIRCodeableConcept)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRPatient::__construct - Property \"maritalStatus\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept or data to construct type, saw ".gettype($value));
                }
                $this->setMaritalStatus($value);
            }
            if (isset($data['multipleBirthBoolean'])) {
                $value = $data['multipleBirthBoolean'];
                if (is_array($value)) {
                    $value = new FHIRBoolean($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRBoolean($value);
                }
                if (!($value instanceof FHIRBoolean)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRPatient::__construct - Property \"multipleBirthBoolean\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or data to construct type, saw ".gettype($value));
                }
                $this->setMultipleBirthBoolean($value);
            }
            if (isset($data['multipleBirthInteger'])) {
                $value = $data['multipleBirthInteger'];
                if (is_array($value)) {
                    $value = new FHIRInteger($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRInteger($value);
                }
                if (!($value instanceof FHIRInteger)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRPatient::__construct - Property \"multipleBirthInteger\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRInteger or data to construct type, saw ".gettype($value));
                }
                $this->setMultipleBirthInteger($value);
            }
            if (isset($data['name'])) {
                $value = $data['name'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRHumanName($v);
                        } 
                        if (!($v instanceof FHIRHumanName)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRPatient::__construct - Collection field \"name\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRHumanName or data to construct type, saw ".gettype($v));
                        }
                        $this->addName($v);
                    }
                }
            }
            if (isset($data['photo'])) {
                $value = $data['photo'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRAttachment($v);
                        } 
                        if (!($v instanceof FHIRAttachment)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRPatient::__construct - Collection field \"photo\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRAttachment or data to construct type, saw ".gettype($v));
                        }
                        $this->addPhoto($v);
                    }
                }
            }
            if (isset($data['telecom'])) {
                $value = $data['telecom'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRContactPoint($v);
                        } 
                        if (!($v instanceof FHIRContactPoint)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRPatient::__construct - Collection field \"telecom\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRContactPoint or data to construct type, saw ".gettype($v));
                        }
                        $this->addTelecom($v);
                    }
                }
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRPatient::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
        parent::__construct($data);
    }

    /**
     * Whether this patient record is in active use.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     * @return $this
     */
    public function setActive($active)
    {
        if (null === $active) {
            return $this; 
        }
        if (is_scalar($active)) {
            $active = new FHIRBoolean($active);
        }
        if (!($active instanceof FHIRBoolean)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRPatient::setActive - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($active)
            ));
        }
        $this->active = $active;
        return $this;
    }

    /**
     * Whether this patient record is in active use.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Addresses for the individual.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRAddress
     * @return $this
     */
    public function addAddress(FHIRAddress $address = null)
    {
        if (null === $address) {
            return $this; 
        }
        $this->address[] = $address;
        return $this;
    }

    /**
     * Addresses for the individual.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAddress[]
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * This patient is known to be an animal.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientAnimal
     * @return $this
     */
    public function setAnimal(FHIRPatientAnimal $animal = null)
    {
        if (null === $animal) {
            return $this; 
        }
        $this->animal = $animal;
        return $this;
    }

    /**
     * This patient is known to be an animal.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientAnimal
     */
    public function getAnimal()
    {
        return $this->animal;
    }

    /**
     * The date of birth for the individual.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDate
     * @return $this
     */
    public function setBirthDate($birthDate)
    {
        if (null === $birthDate) {
            return $this; 
        }
        if (is_scalar($birthDate)) {
            $birthDate = new FHIRDate($birthDate);
        }
        if (!($birthDate instanceof FHIRDate)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRPatient::setBirthDate - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDate or appropriate scalar value, %s seen.',
                gettype($birthDate)
            ));
        }
        $this->birthDate = $birthDate;
        return $this;
    }

    /**
     * The date of birth for the individual.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * Languages which may be used to communicate with the patient about his or her health.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientCommunication
     * @return $this
     */
    public function addCommunication(FHIRPatientCommunication $communication = null)
    {
        if (null === $communication) {
            return $this; 
        }
        $this->communication[] = $communication;
        return $this;
    }

    /**
     * Languages which may be used to communicate with the patient about his or her health.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientCommunication[]
     */
    public function getCommunication()
    {
        return $this->communication;
    }

    /**
     * A contact party (e.g. guardian, partner, friend) for the patient.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientContact
     * @return $this
     */
    public function addContact(FHIRPatientContact $contact = null)
    {
        if (null === $contact) {
            return $this; 
        }
        $this->contact[] = $contact;
        return $this;
    }

    /**
     * A contact party (e.g. guardian, partner, friend) for the patient.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientContact[]
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Indicates if the individual is deceased or not. (choose any one of deceased*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     * @return $this
     */
    public function setDeceasedBoolean($deceasedBoolean)
    {
        if (null === $deceasedBoolean) {
            return $this; 
        }
        if (is_scalar($deceasedBoolean)) {
            $deceasedBoolean = new FHIRBoolean($deceasedBoolean);
        }
        if (!($deceasedBoolean instanceof FHIRBoolean)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRPatient::setDeceasedBoolean - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($deceasedBoolean)
            ));
        }
        $this->deceasedBoolean = $deceasedBoolean;
        return $this;
    }

    /**
     * Indicates if the individual is deceased or not. (choose any one of deceased*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getDeceasedBoolean()
    {
        return $this->deceasedBoolean;
    }

    /**
     * Indicates if the individual is deceased or not. (choose any one of deceased*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setDeceasedDateTime($deceasedDateTime)
    {
        if (null === $deceasedDateTime) {
            return $this; 
        }
        if (is_scalar($deceasedDateTime)) {
            $deceasedDateTime = new FHIRDateTime($deceasedDateTime);
        }
        if (!($deceasedDateTime instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRPatient::setDeceasedDateTime - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($deceasedDateTime)
            ));
        }
        $this->deceasedDateTime = $deceasedDateTime;
        return $this;
    }

    /**
     * Indicates if the individual is deceased or not. (choose any one of deceased*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getDeceasedDateTime()
    {
        return $this->deceasedDateTime;
    }

    /**
     * Administrative Gender - the gender that the patient is considered to have for administration and record keeping purposes.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRAdministrativeGender
     * @return $this
     */
    public function setGender($gender)
    {
        if (null === $gender) {
            return $this; 
        }
        if (is_scalar($gender)) {
            $gender = new FHIRAdministrativeGender($gender);
        }
        if (!($gender instanceof FHIRAdministrativeGender)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRPatient::setGender - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRAdministrativeGender or appropriate scalar value, %s seen.',
                gettype($gender)
            ));
        }
        $this->gender = $gender;
        return $this;
    }

    /**
     * Administrative Gender - the gender that the patient is considered to have for administration and record keeping purposes.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAdministrativeGender
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Patient's nominated care provider.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function addGeneralPractitioner(FHIRReference $generalPractitioner = null)
    {
        if (null === $generalPractitioner) {
            return $this; 
        }
        $this->generalPractitioner[] = $generalPractitioner;
        return $this;
    }

    /**
     * Patient's nominated care provider.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getGeneralPractitioner()
    {
        return $this->generalPractitioner;
    }

    /**
     * An identifier for this patient.
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
     * An identifier for this patient.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Link to another patient resource that concerns the same actual patient.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientLink
     * @return $this
     */
    public function addLink(FHIRPatientLink $link = null)
    {
        if (null === $link) {
            return $this; 
        }
        $this->link[] = $link;
        return $this;
    }

    /**
     * Link to another patient resource that concerns the same actual patient.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientLink[]
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Organization that is the custodian of the patient record.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setManagingOrganization(FHIRReference $managingOrganization = null)
    {
        if (null === $managingOrganization) {
            return $this; 
        }
        $this->managingOrganization = $managingOrganization;
        return $this;
    }

    /**
     * Organization that is the custodian of the patient record.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getManagingOrganization()
    {
        return $this->managingOrganization;
    }

    /**
     * This field contains a patient's most recent marital (civil) status.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setMaritalStatus(FHIRCodeableConcept $maritalStatus = null)
    {
        if (null === $maritalStatus) {
            return $this; 
        }
        $this->maritalStatus = $maritalStatus;
        return $this;
    }

    /**
     * This field contains a patient's most recent marital (civil) status.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getMaritalStatus()
    {
        return $this->maritalStatus;
    }

    /**
     * Indicates whether the patient is part of a multiple (bool) or indicates the actual birth order (integer). (choose any one of multipleBirth*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     * @return $this
     */
    public function setMultipleBirthBoolean($multipleBirthBoolean)
    {
        if (null === $multipleBirthBoolean) {
            return $this; 
        }
        if (is_scalar($multipleBirthBoolean)) {
            $multipleBirthBoolean = new FHIRBoolean($multipleBirthBoolean);
        }
        if (!($multipleBirthBoolean instanceof FHIRBoolean)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRPatient::setMultipleBirthBoolean - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($multipleBirthBoolean)
            ));
        }
        $this->multipleBirthBoolean = $multipleBirthBoolean;
        return $this;
    }

    /**
     * Indicates whether the patient is part of a multiple (bool) or indicates the actual birth order (integer). (choose any one of multipleBirth*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getMultipleBirthBoolean()
    {
        return $this->multipleBirthBoolean;
    }

    /**
     * Indicates whether the patient is part of a multiple (bool) or indicates the actual birth order (integer). (choose any one of multipleBirth*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRInteger
     * @return $this
     */
    public function setMultipleBirthInteger($multipleBirthInteger)
    {
        if (null === $multipleBirthInteger) {
            return $this; 
        }
        if (is_scalar($multipleBirthInteger)) {
            $multipleBirthInteger = new FHIRInteger($multipleBirthInteger);
        }
        if (!($multipleBirthInteger instanceof FHIRInteger)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRPatient::setMultipleBirthInteger - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRInteger or appropriate scalar value, %s seen.',
                gettype($multipleBirthInteger)
            ));
        }
        $this->multipleBirthInteger = $multipleBirthInteger;
        return $this;
    }

    /**
     * Indicates whether the patient is part of a multiple (bool) or indicates the actual birth order (integer). (choose any one of multipleBirth*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getMultipleBirthInteger()
    {
        return $this->multipleBirthInteger;
    }

    /**
     * A name associated with the individual.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRHumanName
     * @return $this
     */
    public function addName(FHIRHumanName $name = null)
    {
        if (null === $name) {
            return $this; 
        }
        $this->name[] = $name;
        return $this;
    }

    /**
     * A name associated with the individual.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRHumanName[]
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Image of the patient.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRAttachment
     * @return $this
     */
    public function addPhoto(FHIRAttachment $photo = null)
    {
        if (null === $photo) {
            return $this; 
        }
        $this->photo[] = $photo;
        return $this;
    }

    /**
     * Image of the patient.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAttachment[]
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * A contact detail (e.g. a telephone number or an email address) by which the individual may be contacted.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRContactPoint
     * @return $this
     */
    public function addTelecom(FHIRContactPoint $telecom = null)
    {
        if (null === $telecom) {
            return $this; 
        }
        $this->telecom[] = $telecom;
        return $this;
    }

    /**
     * A contact detail (e.g. a telephone number or an email address) by which the individual may be contacted.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRContactPoint[]
     */
    public function getTelecom()
    {
        return $this->telecom;
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
        if (null !== ($v = $this->getActive())) {
            $a['active'] = $v;
        }
        if (0 < count($values = $this->getAddress())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['address'] = $vs;
            }
        }
        if (null !== ($v = $this->getAnimal())) {
            $a['animal'] = $v;
        }
        if (null !== ($v = $this->getBirthDate())) {
            $a['birthDate'] = $v;
        }
        if (0 < count($values = $this->getCommunication())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['communication'] = $vs;
            }
        }
        if (0 < count($values = $this->getContact())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['contact'] = $vs;
            }
        }
        if (null !== ($v = $this->getDeceasedBoolean())) {
            $a['deceasedBoolean'] = $v;
        }
        if (null !== ($v = $this->getDeceasedDateTime())) {
            $a['deceasedDateTime'] = $v;
        }
        if (null !== ($v = $this->getGender())) {
            $a['gender'] = $v;
        }
        if (0 < count($values = $this->getGeneralPractitioner())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['generalPractitioner'] = $vs;
            }
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
        if (0 < count($values = $this->getLink())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['link'] = $vs;
            }
        }
        if (null !== ($v = $this->getManagingOrganization())) {
            $a['managingOrganization'] = $v;
        }
        if (null !== ($v = $this->getMaritalStatus())) {
            $a['maritalStatus'] = $v;
        }
        if (null !== ($v = $this->getMultipleBirthBoolean())) {
            $a['multipleBirthBoolean'] = $v;
        }
        if (null !== ($v = $this->getMultipleBirthInteger())) {
            $a['multipleBirthInteger'] = $v;
        }
        if (0 < count($values = $this->getName())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['name'] = $vs;
            }
        }
        if (0 < count($values = $this->getPhoto())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['photo'] = $vs;
            }
        }
        if (0 < count($values = $this->getTelecom())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['telecom'] = $vs;
            }
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
            $sxe = new \SimpleXMLElement('<Patient xmlns="http://hl7.org/fhir"></Patient>');
        }
        if (null !== ($v = $this->getActive())) {
            $v->xmlSerialize(true, $sxe->addChild('active'));
        }
        if (0 < count($values = $this->getAddress())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('address'));
                }
            }
        }
        if (null !== ($v = $this->getAnimal())) {
            $v->xmlSerialize(true, $sxe->addChild('animal'));
        }
        if (null !== ($v = $this->getBirthDate())) {
            $v->xmlSerialize(true, $sxe->addChild('birthDate'));
        }
        if (0 < count($values = $this->getCommunication())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('communication'));
                }
            }
        }
        if (0 < count($values = $this->getContact())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('contact'));
                }
            }
        }
        if (null !== ($v = $this->getDeceasedBoolean())) {
            $v->xmlSerialize(true, $sxe->addChild('deceasedBoolean'));
        }
        if (null !== ($v = $this->getDeceasedDateTime())) {
            $v->xmlSerialize(true, $sxe->addChild('deceasedDateTime'));
        }
        if (null !== ($v = $this->getGender())) {
            $v->xmlSerialize(true, $sxe->addChild('gender'));
        }
        if (0 < count($values = $this->getGeneralPractitioner())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('generalPractitioner'));
                }
            }
        }
        if (0 < count($values = $this->getIdentifier())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('identifier'));
                }
            }
        }
        if (0 < count($values = $this->getLink())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('link'));
                }
            }
        }
        if (null !== ($v = $this->getManagingOrganization())) {
            $v->xmlSerialize(true, $sxe->addChild('managingOrganization'));
        }
        if (null !== ($v = $this->getMaritalStatus())) {
            $v->xmlSerialize(true, $sxe->addChild('maritalStatus'));
        }
        if (null !== ($v = $this->getMultipleBirthBoolean())) {
            $v->xmlSerialize(true, $sxe->addChild('multipleBirthBoolean'));
        }
        if (null !== ($v = $this->getMultipleBirthInteger())) {
            $v->xmlSerialize(true, $sxe->addChild('multipleBirthInteger'));
        }
        if (0 < count($values = $this->getName())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('name'));
                }
            }
        }
        if (0 < count($values = $this->getPhoto())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('photo'));
                }
            }
        }
        if (0 < count($values = $this->getTelecom())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('telecom'));
                }
            }
        }
        return parent::xmlSerialize($returnSXE, $sxe);
    }
}