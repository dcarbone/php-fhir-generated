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
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceUdi;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRContactPoint;
use PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use PHPFHIRGenerated\FHIRElement\FHIRFHIRDeviceStatus;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRElement\FHIRUri;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * This resource identifies an instance or a type of a manufactured item that is used in the provision of healthcare without being substantially changed through that activity. The device may be a medical or non-medical device.  Medical devices include durable (reusable) medical equipment, implantable devices, as well as disposable equipment used for diagnostic, treatment, and research for healthcare and public health.  Non-medical devices may include items such as a machine, cellphone, computer, application, etc.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRDevice
 * @package PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRDevice extends FHIRDomainResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'Device';

    /**
     * Contact details for an organization or a particular human that is responsible for the device.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRContactPoint[]
     */
    private $contact = [];

    /**
     * The date and time beyond which this device is no longer valid or should not be used (if applicable).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    private $expirationDate = null;

    /**
     * Unique instance identifiers assigned to a device by manufacturers other organizations or owners.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    private $identifier = [];

    /**
     * The place where the device can be found.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $location = null;

    /**
     * Lot number assigned by the manufacturer.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $lotNumber = null;

    /**
     * The date and time when the device was manufactured.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    private $manufactureDate = null;

    /**
     * A name of the manufacturer.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $manufacturer = null;

    /**
     * The "model" is an identifier assigned by the manufacturer to identify the product by its type. This number is shared by the all devices sold as the same type.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $model = null;

    /**
     * Descriptive information, usage information or implantation information that is not captured in an existing element.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAnnotation[]
     */
    private $note = [];

    /**
     * An organization that is responsible for the provision and ongoing maintenance of the device.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $owner = null;

    /**
     * Patient information, If the device is affixed to a person.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $patient = null;

    /**
     * Provides additional safety characteristics about a medical device.  For example devices containing latex.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    private $safety = [];

    /**
     * Status of the Device availability.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRFHIRDeviceStatus
     */
    private $status = null;

    /**
     * Code or identifier to identify a kind of device.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $type = null;

    /**
     * [Unique device identifier (UDI)](device.html#5.11.3.2.2) assigned to device label or package.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceUdi
     */
    private $udi = null;

    /**
     * A network address on which the device may be contacted directly.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    private $url = null;

    /**
     * The version of the device, if the device has multiple releases under the same model, or if the device is software or carries firmware.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $version = null;

    /**
     * FHIRDevice Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        if (is_array($data)) {
            if (isset($data['contact'])) {
                $value = $data['contact'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRContactPoint($v);
                        } 
                        if (!($v instanceof FHIRContactPoint)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDevice::__construct - Collection field \"contact\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRContactPoint or data to construct type, saw ".gettype($v));
                        }
                        $this->addContact($v);
                    }
                }
            }
            if (isset($data['expirationDate'])) {
                $value = $data['expirationDate'];
                if (is_array($value)) {
                    $value = new FHIRDateTime($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRDateTime($value);
                }
                if (!($value instanceof FHIRDateTime)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDevice::__construct - Property \"expirationDate\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or data to construct type, saw ".gettype($value));
                }
                $this->setExpirationDate($value);
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
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDevice::__construct - Collection field \"identifier\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRIdentifier or data to construct type, saw ".gettype($v));
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
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDevice::__construct - Property \"location\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($value));
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
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDevice::__construct - Property \"lotNumber\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or data to construct type, saw ".gettype($value));
                }
                $this->setLotNumber($value);
            }
            if (isset($data['manufactureDate'])) {
                $value = $data['manufactureDate'];
                if (is_array($value)) {
                    $value = new FHIRDateTime($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRDateTime($value);
                }
                if (!($value instanceof FHIRDateTime)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDevice::__construct - Property \"manufactureDate\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or data to construct type, saw ".gettype($value));
                }
                $this->setManufactureDate($value);
            }
            if (isset($data['manufacturer'])) {
                $value = $data['manufacturer'];
                if (is_array($value)) {
                    $value = new FHIRString($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRString($value);
                }
                if (!($value instanceof FHIRString)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDevice::__construct - Property \"manufacturer\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or data to construct type, saw ".gettype($value));
                }
                $this->setManufacturer($value);
            }
            if (isset($data['model'])) {
                $value = $data['model'];
                if (is_array($value)) {
                    $value = new FHIRString($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRString($value);
                }
                if (!($value instanceof FHIRString)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDevice::__construct - Property \"model\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or data to construct type, saw ".gettype($value));
                }
                $this->setModel($value);
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
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDevice::__construct - Collection field \"note\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRAnnotation or data to construct type, saw ".gettype($v));
                        }
                        $this->addNote($v);
                    }
                }
            }
            if (isset($data['owner'])) {
                $value = $data['owner'];
                if (is_array($value)) {
                    $value = new FHIRReference($value);
                } 
                if (!($value instanceof FHIRReference)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDevice::__construct - Property \"owner\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($value));
                }
                $this->setOwner($value);
            }
            if (isset($data['patient'])) {
                $value = $data['patient'];
                if (is_array($value)) {
                    $value = new FHIRReference($value);
                } 
                if (!($value instanceof FHIRReference)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDevice::__construct - Property \"patient\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($value));
                }
                $this->setPatient($value);
            }
            if (isset($data['safety'])) {
                $value = $data['safety'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRCodeableConcept($v);
                        } 
                        if (!($v instanceof FHIRCodeableConcept)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDevice::__construct - Collection field \"safety\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept or data to construct type, saw ".gettype($v));
                        }
                        $this->addSafety($v);
                    }
                }
            }
            if (isset($data['status'])) {
                $value = $data['status'];
                if (is_array($value)) {
                    $value = new FHIRFHIRDeviceStatus($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRFHIRDeviceStatus($value);
                }
                if (!($value instanceof FHIRFHIRDeviceStatus)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDevice::__construct - Property \"status\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRFHIRDeviceStatus or data to construct type, saw ".gettype($value));
                }
                $this->setStatus($value);
            }
            if (isset($data['type'])) {
                $value = $data['type'];
                if (is_array($value)) {
                    $value = new FHIRCodeableConcept($value);
                } 
                if (!($value instanceof FHIRCodeableConcept)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDevice::__construct - Property \"type\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept or data to construct type, saw ".gettype($value));
                }
                $this->setType($value);
            }
            if (isset($data['udi'])) {
                $value = $data['udi'];
                if (is_array($value)) {
                    $value = new FHIRDeviceUdi($value);
                } 
                if (!($value instanceof FHIRDeviceUdi)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDevice::__construct - Property \"udi\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceUdi or data to construct type, saw ".gettype($value));
                }
                $this->setUdi($value);
            }
            if (isset($data['url'])) {
                $value = $data['url'];
                if (is_array($value)) {
                    $value = new FHIRUri($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRUri($value);
                }
                if (!($value instanceof FHIRUri)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDevice::__construct - Property \"url\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or data to construct type, saw ".gettype($value));
                }
                $this->setUrl($value);
            }
            if (isset($data['version'])) {
                $value = $data['version'];
                if (is_array($value)) {
                    $value = new FHIRString($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRString($value);
                }
                if (!($value instanceof FHIRString)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDevice::__construct - Property \"version\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or data to construct type, saw ".gettype($value));
                }
                $this->setVersion($value);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDevice::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
        parent::__construct($data);
    }

    /**
     * Contact details for an organization or a particular human that is responsible for the device.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRContactPoint
     * @return $this
     */
    public function addContact(FHIRContactPoint $contact = null)
    {
        if (null === $contact) {
            return $this; 
        }
        $this->contact[] = $contact;
        return $this;
    }

    /**
     * Contact details for an organization or a particular human that is responsible for the device.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRContactPoint[]
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * The date and time beyond which this device is no longer valid or should not be used (if applicable).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setExpirationDate($expirationDate)
    {
        if (null === $expirationDate) {
            return $this; 
        }
        if (is_scalar($expirationDate)) {
            $expirationDate = new FHIRDateTime($expirationDate);
        }
        if (!($expirationDate instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRDevice::setExpirationDate - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($expirationDate)
            ));
        }
        $this->expirationDate = $expirationDate;
        return $this;
    }

    /**
     * The date and time beyond which this device is no longer valid or should not be used (if applicable).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }

    /**
     * Unique instance identifiers assigned to a device by manufacturers other organizations or owners.
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
     * Unique instance identifiers assigned to a device by manufacturers other organizations or owners.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * The place where the device can be found.
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
     * The place where the device can be found.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Lot number assigned by the manufacturer.
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
                'FHIRDevice::setLotNumber - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($lotNumber)
            ));
        }
        $this->lotNumber = $lotNumber;
        return $this;
    }

    /**
     * Lot number assigned by the manufacturer.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getLotNumber()
    {
        return $this->lotNumber;
    }

    /**
     * The date and time when the device was manufactured.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setManufactureDate($manufactureDate)
    {
        if (null === $manufactureDate) {
            return $this; 
        }
        if (is_scalar($manufactureDate)) {
            $manufactureDate = new FHIRDateTime($manufactureDate);
        }
        if (!($manufactureDate instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRDevice::setManufactureDate - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($manufactureDate)
            ));
        }
        $this->manufactureDate = $manufactureDate;
        return $this;
    }

    /**
     * The date and time when the device was manufactured.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getManufactureDate()
    {
        return $this->manufactureDate;
    }

    /**
     * A name of the manufacturer.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setManufacturer($manufacturer)
    {
        if (null === $manufacturer) {
            return $this; 
        }
        if (is_scalar($manufacturer)) {
            $manufacturer = new FHIRString($manufacturer);
        }
        if (!($manufacturer instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRDevice::setManufacturer - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($manufacturer)
            ));
        }
        $this->manufacturer = $manufacturer;
        return $this;
    }

    /**
     * A name of the manufacturer.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * The "model" is an identifier assigned by the manufacturer to identify the product by its type. This number is shared by the all devices sold as the same type.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setModel($model)
    {
        if (null === $model) {
            return $this; 
        }
        if (is_scalar($model)) {
            $model = new FHIRString($model);
        }
        if (!($model instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRDevice::setModel - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($model)
            ));
        }
        $this->model = $model;
        return $this;
    }

    /**
     * The "model" is an identifier assigned by the manufacturer to identify the product by its type. This number is shared by the all devices sold as the same type.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Descriptive information, usage information or implantation information that is not captured in an existing element.
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
     * Descriptive information, usage information or implantation information that is not captured in an existing element.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAnnotation[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * An organization that is responsible for the provision and ongoing maintenance of the device.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setOwner(FHIRReference $owner = null)
    {
        if (null === $owner) {
            return $this; 
        }
        $this->owner = $owner;
        return $this;
    }

    /**
     * An organization that is responsible for the provision and ongoing maintenance of the device.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Patient information, If the device is affixed to a person.
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
     * Patient information, If the device is affixed to a person.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPatient()
    {
        return $this->patient;
    }

    /**
     * Provides additional safety characteristics about a medical device.  For example devices containing latex.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function addSafety(FHIRCodeableConcept $safety = null)
    {
        if (null === $safety) {
            return $this; 
        }
        $this->safety[] = $safety;
        return $this;
    }

    /**
     * Provides additional safety characteristics about a medical device.  For example devices containing latex.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getSafety()
    {
        return $this->safety;
    }

    /**
     * Status of the Device availability.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRFHIRDeviceStatus
     * @return $this
     */
    public function setStatus($status)
    {
        if (null === $status) {
            return $this; 
        }
        if (is_scalar($status)) {
            $status = new FHIRFHIRDeviceStatus($status);
        }
        if (!($status instanceof FHIRFHIRDeviceStatus)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRDevice::setStatus - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRFHIRDeviceStatus or appropriate scalar value, %s seen.',
                gettype($status)
            ));
        }
        $this->status = $status;
        return $this;
    }

    /**
     * Status of the Device availability.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRFHIRDeviceStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Code or identifier to identify a kind of device.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setType(FHIRCodeableConcept $type = null)
    {
        if (null === $type) {
            return $this; 
        }
        $this->type = $type;
        return $this;
    }

    /**
     * Code or identifier to identify a kind of device.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * [Unique device identifier (UDI)](device.html#5.11.3.2.2) assigned to device label or package.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceUdi
     * @return $this
     */
    public function setUdi(FHIRDeviceUdi $udi = null)
    {
        if (null === $udi) {
            return $this; 
        }
        $this->udi = $udi;
        return $this;
    }

    /**
     * [Unique device identifier (UDI)](device.html#5.11.3.2.2) assigned to device label or package.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceUdi
     */
    public function getUdi()
    {
        return $this->udi;
    }

    /**
     * A network address on which the device may be contacted directly.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     * @return $this
     */
    public function setUrl($url)
    {
        if (null === $url) {
            return $this; 
        }
        if (is_scalar($url)) {
            $url = new FHIRUri($url);
        }
        if (!($url instanceof FHIRUri)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRDevice::setUrl - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or appropriate scalar value, %s seen.',
                gettype($url)
            ));
        }
        $this->url = $url;
        return $this;
    }

    /**
     * A network address on which the device may be contacted directly.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * The version of the device, if the device has multiple releases under the same model, or if the device is software or carries firmware.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setVersion($version)
    {
        if (null === $version) {
            return $this; 
        }
        if (is_scalar($version)) {
            $version = new FHIRString($version);
        }
        if (!($version instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRDevice::setVersion - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($version)
            ));
        }
        $this->version = $version;
        return $this;
    }

    /**
     * The version of the device, if the device has multiple releases under the same model, or if the device is software or carries firmware.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getVersion()
    {
        return $this->version;
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
        if (null !== ($v = $this->getExpirationDate())) {
            $a['expirationDate'] = $v;
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
        if (null !== ($v = $this->getManufactureDate())) {
            $a['manufactureDate'] = $v;
        }
        if (null !== ($v = $this->getManufacturer())) {
            $a['manufacturer'] = $v;
        }
        if (null !== ($v = $this->getModel())) {
            $a['model'] = $v;
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
        if (null !== ($v = $this->getOwner())) {
            $a['owner'] = $v;
        }
        if (null !== ($v = $this->getPatient())) {
            $a['patient'] = $v;
        }
        if (0 < count($values = $this->getSafety())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['safety'] = $vs;
            }
        }
        if (null !== ($v = $this->getStatus())) {
            $a['status'] = $v;
        }
        if (null !== ($v = $this->getType())) {
            $a['type'] = $v;
        }
        if (null !== ($v = $this->getUdi())) {
            $a['udi'] = $v;
        }
        if (null !== ($v = $this->getUrl())) {
            $a['url'] = $v;
        }
        if (null !== ($v = $this->getVersion())) {
            $a['version'] = $v;
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
            $sxe = new \SimpleXMLElement('<Device xmlns="http://hl7.org/fhir"></Device>');
        }
        if (0 < count($values = $this->getContact())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('contact'));
                }
            }
        }
        if (null !== ($v = $this->getExpirationDate())) {
            $v->xmlSerialize(true, $sxe->addChild('expirationDate'));
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
        if (null !== ($v = $this->getManufactureDate())) {
            $v->xmlSerialize(true, $sxe->addChild('manufactureDate'));
        }
        if (null !== ($v = $this->getManufacturer())) {
            $v->xmlSerialize(true, $sxe->addChild('manufacturer'));
        }
        if (null !== ($v = $this->getModel())) {
            $v->xmlSerialize(true, $sxe->addChild('model'));
        }
        if (0 < count($values = $this->getNote())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('note'));
                }
            }
        }
        if (null !== ($v = $this->getOwner())) {
            $v->xmlSerialize(true, $sxe->addChild('owner'));
        }
        if (null !== ($v = $this->getPatient())) {
            $v->xmlSerialize(true, $sxe->addChild('patient'));
        }
        if (0 < count($values = $this->getSafety())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('safety'));
                }
            }
        }
        if (null !== ($v = $this->getStatus())) {
            $v->xmlSerialize(true, $sxe->addChild('status'));
        }
        if (null !== ($v = $this->getType())) {
            $v->xmlSerialize(true, $sxe->addChild('type'));
        }
        if (null !== ($v = $this->getUdi())) {
            $v->xmlSerialize(true, $sxe->addChild('udi'));
        }
        if (null !== ($v = $this->getUrl())) {
            $v->xmlSerialize(true, $sxe->addChild('url'));
        }
        if (null !== ($v = $this->getVersion())) {
            $v->xmlSerialize(true, $sxe->addChild('version'));
        }
        return parent::xmlSerialize($returnSXE, $sxe);
    }
}