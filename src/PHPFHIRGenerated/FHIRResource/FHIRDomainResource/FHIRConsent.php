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

use PHPFHIRGenerated\FHIRElement\FHIRAttachment;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentActor;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentData;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentExcept;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentPolicy;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRCoding;
use PHPFHIRGenerated\FHIRElement\FHIRConsentState;
use PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRPeriod;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRUri;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * A record of a healthcare consumer’s policy choices, which permits or denies identified recipient(s) or recipient role(s) to perform one or more actions within a given policy context, for specific purposes and periods of time.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRConsent
 * @package PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRConsent extends FHIRDomainResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'Consent';

    /**
     * Actions controlled by this consent.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    private $action = [];

    /**
     * Who or what is controlled by this consent. Use group to identify a set of actors by some property they share (e.g. 'admitting officers').
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentActor[]
     */
    private $actor = [];

    /**
     * A classification of the type of consents found in the statement. This element supports indexing and retrieval of consent statements.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    private $category = [];

    /**
     * Either the Grantor, which is the entity responsible for granting the rights listed in a Consent Directive or the Grantee, which is the entity responsible for complying with the Consent Directive, including any obligations or limitations on authorizations and enforcement of prohibitions.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    private $consentingParty = [];

    /**
     * The resources controlled by this consent, if specific resources are referenced.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentData[]
     */
    private $data = [];

    /**
     * Clinical or Operational Relevant period of time that bounds the data controlled by this consent.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    private $dataPeriod = null;

    /**
     * When this  Consent was issued / created / indexed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    private $dateTime = null;

    /**
     * An exception to the base policy of this consent. An exception can be an addition or removal of access permissions.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentExcept[]
     */
    private $except = [];

    /**
     * Unique identifier for this copy of the Consent Statement.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    private $identifier = null;

    /**
     * The organization that manages the consent, and the framework within which it is executed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    private $organization = [];

    /**
     * The patient/healthcare consumer to whom this consent applies.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $patient = null;

    /**
     * Relevant time or time-period when this Consent is applicable.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    private $period = null;

    /**
     * The references to the policies that are included in this consent scope. Policies may be organizational, but are often defined jurisdictionally, or in law.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentPolicy[]
     */
    private $policy = [];

    /**
     * A referece to the specific computable policy.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    private $policyRule = null;

    /**
     * The context of the activities a user is taking - why the user is accessing the data - that are controlled by this consent.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding[]
     */
    private $purpose = [];

    /**
     * A set of security labels that define which resources are controlled by this consent. If more than one label is specified, all resources must have all the specified labels.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding[]
     */
    private $securityLabel = [];

    /**
     * The source on which this consent statement is based. The source might be a scanned original paper form, or a reference to a consent that links back to such a source, a reference to a document repository (e.g. XDS) that stores the original consent document. (choose any one of source*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    private $sourceAttachment = null;

    /**
     * The source on which this consent statement is based. The source might be a scanned original paper form, or a reference to a consent that links back to such a source, a reference to a document repository (e.g. XDS) that stores the original consent document. (choose any one of source*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    private $sourceIdentifier = null;

    /**
     * The source on which this consent statement is based. The source might be a scanned original paper form, or a reference to a consent that links back to such a source, a reference to a document repository (e.g. XDS) that stores the original consent document. (choose any one of source*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $sourceReference = null;

    /**
     * Indicates the current state of this consent.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRConsentState
     */
    private $status = null;

    /**
     * FHIRConsent Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        if (is_array($data)) {
            if (isset($data['action'])) {
                $value = $data['action'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRCodeableConcept($v);
                        } 
                        if (!($v instanceof FHIRCodeableConcept)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRConsent::__construct - Collection field \"action\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept or data to construct type, saw ".gettype($v)); 
                        }
                        $this->addAction($v);
                    }
                }
            }
            if (isset($data['actor'])) {
                $value = $data['actor'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRConsentActor($v);
                        } 
                        if (!($v instanceof FHIRConsentActor)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRConsent::__construct - Collection field \"actor\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentActor or data to construct type, saw ".gettype($v)); 
                        }
                        $this->addActor($v);
                    }
                }
            }
            if (isset($data['category'])) {
                $value = $data['category'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRCodeableConcept($v);
                        } 
                        if (!($v instanceof FHIRCodeableConcept)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRConsent::__construct - Collection field \"category\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept or data to construct type, saw ".gettype($v)); 
                        }
                        $this->addCategory($v);
                    }
                }
            }
            if (isset($data['consentingParty'])) {
                $value = $data['consentingParty'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRReference($v);
                        } 
                        if (!($v instanceof FHIRReference)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRConsent::__construct - Collection field \"consentingParty\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($v)); 
                        }
                        $this->addConsentingParty($v);
                    }
                }
            }
            if (isset($data['data'])) {
                $value = $data['data'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRConsentData($v);
                        } 
                        if (!($v instanceof FHIRConsentData)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRConsent::__construct - Collection field \"data\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentData or data to construct type, saw ".gettype($v)); 
                        }
                        $this->addData($v);
                    }
                }
            }
            if (isset($data['dataPeriod'])) {
                $value = $data['dataPeriod'];
                if (is_array($value)) {
                    $value = new FHIRPeriod($value);
                } 
                if (!($value instanceof FHIRPeriod)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRConsent::__construct - Property \"dataPeriod\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRPeriod or data to construct type, saw ".gettype($value)); 
                }
                $this->setDataPeriod($value);
            }
            if (isset($data['dateTime'])) {
                $value = $data['dateTime'];
                if (is_array($value)) {
                    $value = new FHIRDateTime($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRDateTime($value);
                }
                if (!($value instanceof FHIRDateTime)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRConsent::__construct - Property \"dateTime\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or data to construct type, saw ".gettype($value)); 
                }
                $this->setDateTime($value);
            }
            if (isset($data['except'])) {
                $value = $data['except'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRConsentExcept($v);
                        } 
                        if (!($v instanceof FHIRConsentExcept)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRConsent::__construct - Collection field \"except\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentExcept or data to construct type, saw ".gettype($v)); 
                        }
                        $this->addExcept($v);
                    }
                }
            }
            if (isset($data['identifier'])) {
                $value = $data['identifier'];
                if (is_array($value)) {
                    $value = new FHIRIdentifier($value);
                } 
                if (!($value instanceof FHIRIdentifier)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRConsent::__construct - Property \"identifier\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRIdentifier or data to construct type, saw ".gettype($value)); 
                }
                $this->setIdentifier($value);
            }
            if (isset($data['organization'])) {
                $value = $data['organization'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRReference($v);
                        } 
                        if (!($v instanceof FHIRReference)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRConsent::__construct - Collection field \"organization\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($v)); 
                        }
                        $this->addOrganization($v);
                    }
                }
            }
            if (isset($data['patient'])) {
                $value = $data['patient'];
                if (is_array($value)) {
                    $value = new FHIRReference($value);
                } 
                if (!($value instanceof FHIRReference)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRConsent::__construct - Property \"patient\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($value)); 
                }
                $this->setPatient($value);
            }
            if (isset($data['period'])) {
                $value = $data['period'];
                if (is_array($value)) {
                    $value = new FHIRPeriod($value);
                } 
                if (!($value instanceof FHIRPeriod)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRConsent::__construct - Property \"period\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRPeriod or data to construct type, saw ".gettype($value)); 
                }
                $this->setPeriod($value);
            }
            if (isset($data['policy'])) {
                $value = $data['policy'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRConsentPolicy($v);
                        } 
                        if (!($v instanceof FHIRConsentPolicy)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRConsent::__construct - Collection field \"policy\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentPolicy or data to construct type, saw ".gettype($v)); 
                        }
                        $this->addPolicy($v);
                    }
                }
            }
            if (isset($data['policyRule'])) {
                $value = $data['policyRule'];
                if (is_array($value)) {
                    $value = new FHIRUri($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRUri($value);
                }
                if (!($value instanceof FHIRUri)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRConsent::__construct - Property \"policyRule\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or data to construct type, saw ".gettype($value)); 
                }
                $this->setPolicyRule($value);
            }
            if (isset($data['purpose'])) {
                $value = $data['purpose'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRCoding($v);
                        } 
                        if (!($v instanceof FHIRCoding)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRConsent::__construct - Collection field \"purpose\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRCoding or data to construct type, saw ".gettype($v)); 
                        }
                        $this->addPurpose($v);
                    }
                }
            }
            if (isset($data['securityLabel'])) {
                $value = $data['securityLabel'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRCoding($v);
                        } 
                        if (!($v instanceof FHIRCoding)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRConsent::__construct - Collection field \"securityLabel\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRCoding or data to construct type, saw ".gettype($v)); 
                        }
                        $this->addSecurityLabel($v);
                    }
                }
            }
            if (isset($data['sourceAttachment'])) {
                $value = $data['sourceAttachment'];
                if (is_array($value)) {
                    $value = new FHIRAttachment($value);
                } 
                if (!($value instanceof FHIRAttachment)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRConsent::__construct - Property \"sourceAttachment\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRAttachment or data to construct type, saw ".gettype($value)); 
                }
                $this->setSourceAttachment($value);
            }
            if (isset($data['sourceIdentifier'])) {
                $value = $data['sourceIdentifier'];
                if (is_array($value)) {
                    $value = new FHIRIdentifier($value);
                } 
                if (!($value instanceof FHIRIdentifier)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRConsent::__construct - Property \"sourceIdentifier\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRIdentifier or data to construct type, saw ".gettype($value)); 
                }
                $this->setSourceIdentifier($value);
            }
            if (isset($data['sourceReference'])) {
                $value = $data['sourceReference'];
                if (is_array($value)) {
                    $value = new FHIRReference($value);
                } 
                if (!($value instanceof FHIRReference)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRConsent::__construct - Property \"sourceReference\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($value)); 
                }
                $this->setSourceReference($value);
            }
            if (isset($data['status'])) {
                $value = $data['status'];
                if (is_array($value)) {
                    $value = new FHIRConsentState($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRConsentState($value);
                }
                if (!($value instanceof FHIRConsentState)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRConsent::__construct - Property \"status\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRConsentState or data to construct type, saw ".gettype($value)); 
                }
                $this->setStatus($value);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRConsent::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
        parent::__construct($data);
    }

    /**
     * Actions controlled by this consent.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function addAction(FHIRCodeableConcept $action = null)
    {
        if (null === $action) {
            return $this; 
        }
        $this->action[] = $action;
        return $this;
    }

    /**
     * Actions controlled by this consent.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Who or what is controlled by this consent. Use group to identify a set of actors by some property they share (e.g. 'admitting officers').
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentActor
     * @return $this
     */
    public function addActor(FHIRConsentActor $actor = null)
    {
        if (null === $actor) {
            return $this; 
        }
        $this->actor[] = $actor;
        return $this;
    }

    /**
     * Who or what is controlled by this consent. Use group to identify a set of actors by some property they share (e.g. 'admitting officers').
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentActor[]
     */
    public function getActor()
    {
        return $this->actor;
    }

    /**
     * A classification of the type of consents found in the statement. This element supports indexing and retrieval of consent statements.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function addCategory(FHIRCodeableConcept $category = null)
    {
        if (null === $category) {
            return $this; 
        }
        $this->category[] = $category;
        return $this;
    }

    /**
     * A classification of the type of consents found in the statement. This element supports indexing and retrieval of consent statements.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Either the Grantor, which is the entity responsible for granting the rights listed in a Consent Directive or the Grantee, which is the entity responsible for complying with the Consent Directive, including any obligations or limitations on authorizations and enforcement of prohibitions.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function addConsentingParty(FHIRReference $consentingParty = null)
    {
        if (null === $consentingParty) {
            return $this; 
        }
        $this->consentingParty[] = $consentingParty;
        return $this;
    }

    /**
     * Either the Grantor, which is the entity responsible for granting the rights listed in a Consent Directive or the Grantee, which is the entity responsible for complying with the Consent Directive, including any obligations or limitations on authorizations and enforcement of prohibitions.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getConsentingParty()
    {
        return $this->consentingParty;
    }

    /**
     * The resources controlled by this consent, if specific resources are referenced.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentData
     * @return $this
     */
    public function addData(FHIRConsentData $data = null)
    {
        if (null === $data) {
            return $this; 
        }
        $this->data[] = $data;
        return $this;
    }

    /**
     * The resources controlled by this consent, if specific resources are referenced.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentData[]
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Clinical or Operational Relevant period of time that bounds the data controlled by this consent.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     * @return $this
     */
    public function setDataPeriod(FHIRPeriod $dataPeriod = null)
    {
        if (null === $dataPeriod) {
            return $this; 
        }
        $this->dataPeriod = $dataPeriod;
        return $this;
    }

    /**
     * Clinical or Operational Relevant period of time that bounds the data controlled by this consent.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getDataPeriod()
    {
        return $this->dataPeriod;
    }

    /**
     * When this  Consent was issued / created / indexed.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setDateTime($dateTime)
    {
        if (null === $dateTime) {
            return $this; 
        }
        if (is_scalar($dateTime)) {
            $dateTime = new FHIRDateTime($dateTime);
        }
        if (!($dateTime instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRConsent::setDateTime - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($dateTime)
            ));
        }
        $this->dateTime = $dateTime;
        return $this;
    }

    /**
     * When this  Consent was issued / created / indexed.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getDateTime()
    {
        return $this->dateTime;
    }

    /**
     * An exception to the base policy of this consent. An exception can be an addition or removal of access permissions.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentExcept
     * @return $this
     */
    public function addExcept(FHIRConsentExcept $except = null)
    {
        if (null === $except) {
            return $this; 
        }
        $this->except[] = $except;
        return $this;
    }

    /**
     * An exception to the base policy of this consent. An exception can be an addition or removal of access permissions.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentExcept[]
     */
    public function getExcept()
    {
        return $this->except;
    }

    /**
     * Unique identifier for this copy of the Consent Statement.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     * @return $this
     */
    public function setIdentifier(FHIRIdentifier $identifier = null)
    {
        if (null === $identifier) {
            return $this; 
        }
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Unique identifier for this copy of the Consent Statement.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * The organization that manages the consent, and the framework within which it is executed.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function addOrganization(FHIRReference $organization = null)
    {
        if (null === $organization) {
            return $this; 
        }
        $this->organization[] = $organization;
        return $this;
    }

    /**
     * The organization that manages the consent, and the framework within which it is executed.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getOrganization()
    {
        return $this->organization;
    }

    /**
     * The patient/healthcare consumer to whom this consent applies.
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
     * The patient/healthcare consumer to whom this consent applies.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPatient()
    {
        return $this->patient;
    }

    /**
     * Relevant time or time-period when this Consent is applicable.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     * @return $this
     */
    public function setPeriod(FHIRPeriod $period = null)
    {
        if (null === $period) {
            return $this; 
        }
        $this->period = $period;
        return $this;
    }

    /**
     * Relevant time or time-period when this Consent is applicable.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * The references to the policies that are included in this consent scope. Policies may be organizational, but are often defined jurisdictionally, or in law.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentPolicy
     * @return $this
     */
    public function addPolicy(FHIRConsentPolicy $policy = null)
    {
        if (null === $policy) {
            return $this; 
        }
        $this->policy[] = $policy;
        return $this;
    }

    /**
     * The references to the policies that are included in this consent scope. Policies may be organizational, but are often defined jurisdictionally, or in law.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentPolicy[]
     */
    public function getPolicy()
    {
        return $this->policy;
    }

    /**
     * A referece to the specific computable policy.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     * @return $this
     */
    public function setPolicyRule($policyRule)
    {
        if (null === $policyRule) {
            return $this; 
        }
        if (is_scalar($policyRule)) {
            $policyRule = new FHIRUri($policyRule);
        }
        if (!($policyRule instanceof FHIRUri)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRConsent::setPolicyRule - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or appropriate scalar value, %s seen.',
                gettype($policyRule)
            ));
        }
        $this->policyRule = $policyRule;
        return $this;
    }

    /**
     * A referece to the specific computable policy.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getPolicyRule()
    {
        return $this->policyRule;
    }

    /**
     * The context of the activities a user is taking - why the user is accessing the data - that are controlled by this consent.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCoding
     * @return $this
     */
    public function addPurpose(FHIRCoding $purpose = null)
    {
        if (null === $purpose) {
            return $this; 
        }
        $this->purpose[] = $purpose;
        return $this;
    }

    /**
     * The context of the activities a user is taking - why the user is accessing the data - that are controlled by this consent.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCoding[]
     */
    public function getPurpose()
    {
        return $this->purpose;
    }

    /**
     * A set of security labels that define which resources are controlled by this consent. If more than one label is specified, all resources must have all the specified labels.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCoding
     * @return $this
     */
    public function addSecurityLabel(FHIRCoding $securityLabel = null)
    {
        if (null === $securityLabel) {
            return $this; 
        }
        $this->securityLabel[] = $securityLabel;
        return $this;
    }

    /**
     * A set of security labels that define which resources are controlled by this consent. If more than one label is specified, all resources must have all the specified labels.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCoding[]
     */
    public function getSecurityLabel()
    {
        return $this->securityLabel;
    }

    /**
     * The source on which this consent statement is based. The source might be a scanned original paper form, or a reference to a consent that links back to such a source, a reference to a document repository (e.g. XDS) that stores the original consent document. (choose any one of source*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRAttachment
     * @return $this
     */
    public function setSourceAttachment(FHIRAttachment $sourceAttachment = null)
    {
        if (null === $sourceAttachment) {
            return $this; 
        }
        $this->sourceAttachment = $sourceAttachment;
        return $this;
    }

    /**
     * The source on which this consent statement is based. The source might be a scanned original paper form, or a reference to a consent that links back to such a source, a reference to a document repository (e.g. XDS) that stores the original consent document. (choose any one of source*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public function getSourceAttachment()
    {
        return $this->sourceAttachment;
    }

    /**
     * The source on which this consent statement is based. The source might be a scanned original paper form, or a reference to a consent that links back to such a source, a reference to a document repository (e.g. XDS) that stores the original consent document. (choose any one of source*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     * @return $this
     */
    public function setSourceIdentifier(FHIRIdentifier $sourceIdentifier = null)
    {
        if (null === $sourceIdentifier) {
            return $this; 
        }
        $this->sourceIdentifier = $sourceIdentifier;
        return $this;
    }

    /**
     * The source on which this consent statement is based. The source might be a scanned original paper form, or a reference to a consent that links back to such a source, a reference to a document repository (e.g. XDS) that stores the original consent document. (choose any one of source*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getSourceIdentifier()
    {
        return $this->sourceIdentifier;
    }

    /**
     * The source on which this consent statement is based. The source might be a scanned original paper form, or a reference to a consent that links back to such a source, a reference to a document repository (e.g. XDS) that stores the original consent document. (choose any one of source*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setSourceReference(FHIRReference $sourceReference = null)
    {
        if (null === $sourceReference) {
            return $this; 
        }
        $this->sourceReference = $sourceReference;
        return $this;
    }

    /**
     * The source on which this consent statement is based. The source might be a scanned original paper form, or a reference to a consent that links back to such a source, a reference to a document repository (e.g. XDS) that stores the original consent document. (choose any one of source*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSourceReference()
    {
        return $this->sourceReference;
    }

    /**
     * Indicates the current state of this consent.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRConsentState
     * @return $this
     */
    public function setStatus($status)
    {
        if (null === $status) {
            return $this; 
        }
        if (is_scalar($status)) {
            $status = new FHIRConsentState($status);
        }
        if (!($status instanceof FHIRConsentState)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRConsent::setStatus - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRConsentState or appropriate scalar value, %s seen.',
                gettype($status)
            ));
        }
        $this->status = $status;
        return $this;
    }

    /**
     * Indicates the current state of this consent.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRConsentState
     */
    public function getStatus()
    {
        return $this->status;
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
        if (0 < count($values = $this->getAction())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['action'] = $vs;
            }
        }
        if (0 < count($values = $this->getActor())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['actor'] = $vs;
            }
        }
        if (0 < count($values = $this->getCategory())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['category'] = $vs;
            }
        }
        if (0 < count($values = $this->getConsentingParty())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['consentingParty'] = $vs;
            }
        }
        if (0 < count($values = $this->getData())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['data'] = $vs;
            }
        }
        if (null !== ($v = $this->getDataPeriod())) {
            $a['dataPeriod'] = $v;
        }
        if (null !== ($v = $this->getDateTime())) {
            $a['dateTime'] = $v;
        }
        if (0 < count($values = $this->getExcept())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['except'] = $vs;
            }
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a['identifier'] = $v;
        }
        if (0 < count($values = $this->getOrganization())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['organization'] = $vs;
            }
        }
        if (null !== ($v = $this->getPatient())) {
            $a['patient'] = $v;
        }
        if (null !== ($v = $this->getPeriod())) {
            $a['period'] = $v;
        }
        if (0 < count($values = $this->getPolicy())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['policy'] = $vs;
            }
        }
        if (null !== ($v = $this->getPolicyRule())) {
            $a['policyRule'] = $v;
        }
        if (0 < count($values = $this->getPurpose())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['purpose'] = $vs;
            }
        }
        if (0 < count($values = $this->getSecurityLabel())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['securityLabel'] = $vs;
            }
        }
        if (null !== ($v = $this->getSourceAttachment())) {
            $a['sourceAttachment'] = $v;
        }
        if (null !== ($v = $this->getSourceIdentifier())) {
            $a['sourceIdentifier'] = $v;
        }
        if (null !== ($v = $this->getSourceReference())) {
            $a['sourceReference'] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a['status'] = $v;
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
            $sxe = new \SimpleXMLElement('<Consent xmlns="http://hl7.org/fhir"></Consent>');
        }
        if (0 < count($values = $this->getAction())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('action'));
                }
            }
        }
        if (0 < count($values = $this->getActor())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('actor'));
                }
            }
        }
        if (0 < count($values = $this->getCategory())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('category'));
                }
            }
        }
        if (0 < count($values = $this->getConsentingParty())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('consentingParty'));
                }
            }
        }
        if (0 < count($values = $this->getData())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('data'));
                }
            }
        }
        if (null !== ($v = $this->getDataPeriod())) {
            $v->xmlSerialize(true, $sxe->addChild('dataPeriod'));
        }
        if (null !== ($v = $this->getDateTime())) {
            $v->xmlSerialize(true, $sxe->addChild('dateTime'));
        }
        if (0 < count($values = $this->getExcept())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('except'));
                }
            }
        }
        if (null !== ($v = $this->getIdentifier())) {
            $v->xmlSerialize(true, $sxe->addChild('identifier'));
        }
        if (0 < count($values = $this->getOrganization())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('organization'));
                }
            }
        }
        if (null !== ($v = $this->getPatient())) {
            $v->xmlSerialize(true, $sxe->addChild('patient'));
        }
        if (null !== ($v = $this->getPeriod())) {
            $v->xmlSerialize(true, $sxe->addChild('period'));
        }
        if (0 < count($values = $this->getPolicy())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('policy'));
                }
            }
        }
        if (null !== ($v = $this->getPolicyRule())) {
            $v->xmlSerialize(true, $sxe->addChild('policyRule'));
        }
        if (0 < count($values = $this->getPurpose())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('purpose'));
                }
            }
        }
        if (0 < count($values = $this->getSecurityLabel())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('securityLabel'));
                }
            }
        }
        if (null !== ($v = $this->getSourceAttachment())) {
            $v->xmlSerialize(true, $sxe->addChild('sourceAttachment'));
        }
        if (null !== ($v = $this->getSourceIdentifier())) {
            $v->xmlSerialize(true, $sxe->addChild('sourceIdentifier'));
        }
        if (null !== ($v = $this->getSourceReference())) {
            $v->xmlSerialize(true, $sxe->addChild('sourceReference'));
        }
        if (null !== ($v = $this->getStatus())) {
            $v->xmlSerialize(true, $sxe->addChild('status'));
        }
        return parent::xmlSerialize($returnSXE, $sxe);
    }
}