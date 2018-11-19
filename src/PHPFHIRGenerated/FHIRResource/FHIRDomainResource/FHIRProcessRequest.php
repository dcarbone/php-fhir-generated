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

use PHPFHIRGenerated\FHIRElement\FHIRActionList;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRProcessRequest\FHIRProcessRequestItem;
use PHPFHIRGenerated\FHIRElement\FHIRBoolean;
use PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use PHPFHIRGenerated\FHIRElement\FHIRFinancialResourceStatusCodes;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRPeriod;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * This resource provides the target, request and response, and action details for an action to be performed by the target on or about existing resources.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRProcessRequest
 * @package PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRProcessRequest extends FHIRDomainResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'ProcessRequest';

    /**
     * The type of processing action being requested, for example Reversal, Readjudication, StatusRequest,PendedRequest.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRActionList
     */
    private $action = null;

    /**
     * The date when this resource was created.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    private $created = null;

    /**
     * Names of resource types to exclude.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    private $exclude = [];

    /**
     * The ProcessRequest business identifier.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    private $identifier = [];

    /**
     * Names of resource types to include.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    private $include = [];

    /**
     * List of top level items to be re-adjudicated, if none specified then the entire submission is re-adjudicated.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRProcessRequest\FHIRProcessRequestItem[]
     */
    private $item = [];

    /**
     * If true remove all history excluding audit.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    private $nullify = null;

    /**
     * The organization which is responsible for the action speccified in this request.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $organization = null;

    /**
     * A period of time during which the fulfilling resources would have been created.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    private $period = null;

    /**
     * The practitioner who is responsible for the action specified in this request.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $provider = null;

    /**
     * A reference to supply which authenticates the process.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $reference = null;

    /**
     * Reference of resource which is the target or subject of this action.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $request = null;

    /**
     * Reference of a prior response to resource which is the target or subject of this action.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $response = null;

    /**
     * The status of the resource instance.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRFinancialResourceStatusCodes
     */
    private $status = null;

    /**
     * The organization which is the target of the request.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $target = null;

    /**
     * FHIRProcessRequest Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        if (is_array($data)) {
            if (isset($data['action'])) {
                $value = $data['action'];
                if (is_array($value)) {
                    $value = new FHIRActionList($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRActionList($value);
                }
                if (!($value instanceof FHIRActionList)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRProcessRequest::__construct - Property \"action\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRActionList or data to construct type, saw ".gettype($value));
                }
                $this->setAction($value);
            }
            if (isset($data['created'])) {
                $value = $data['created'];
                if (is_array($value)) {
                    $value = new FHIRDateTime($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRDateTime($value);
                }
                if (!($value instanceof FHIRDateTime)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRProcessRequest::__construct - Property \"created\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or data to construct type, saw ".gettype($value));
                }
                $this->setCreated($value);
            }
            if (isset($data['exclude'])) {
                $value = $data['exclude'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRString($v);
                        }  elseif (is_scalar($v)) {
                            $v = new FHIRString($v);
                        }
                        if (!($v instanceof FHIRString)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRProcessRequest::__construct - Collection field \"exclude\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or data to construct type, saw ".gettype($v));
                        }
                        $this->addExclude($v);
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
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRProcessRequest::__construct - Collection field \"identifier\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRIdentifier or data to construct type, saw ".gettype($v));
                        }
                        $this->addIdentifier($v);
                    }
                }
            }
            if (isset($data['include'])) {
                $value = $data['include'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRString($v);
                        }  elseif (is_scalar($v)) {
                            $v = new FHIRString($v);
                        }
                        if (!($v instanceof FHIRString)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRProcessRequest::__construct - Collection field \"include\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or data to construct type, saw ".gettype($v));
                        }
                        $this->addInclude($v);
                    }
                }
            }
            if (isset($data['item'])) {
                $value = $data['item'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRProcessRequestItem($v);
                        } 
                        if (!($v instanceof FHIRProcessRequestItem)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRProcessRequest::__construct - Collection field \"item\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRProcessRequest\FHIRProcessRequestItem or data to construct type, saw ".gettype($v));
                        }
                        $this->addItem($v);
                    }
                }
            }
            if (isset($data['nullify'])) {
                $value = $data['nullify'];
                if (is_array($value)) {
                    $value = new FHIRBoolean($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRBoolean($value);
                }
                if (!($value instanceof FHIRBoolean)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRProcessRequest::__construct - Property \"nullify\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or data to construct type, saw ".gettype($value));
                }
                $this->setNullify($value);
            }
            if (isset($data['organization'])) {
                $value = $data['organization'];
                if (is_array($value)) {
                    $value = new FHIRReference($value);
                } 
                if (!($value instanceof FHIRReference)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRProcessRequest::__construct - Property \"organization\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($value));
                }
                $this->setOrganization($value);
            }
            if (isset($data['period'])) {
                $value = $data['period'];
                if (is_array($value)) {
                    $value = new FHIRPeriod($value);
                } 
                if (!($value instanceof FHIRPeriod)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRProcessRequest::__construct - Property \"period\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRPeriod or data to construct type, saw ".gettype($value));
                }
                $this->setPeriod($value);
            }
            if (isset($data['provider'])) {
                $value = $data['provider'];
                if (is_array($value)) {
                    $value = new FHIRReference($value);
                } 
                if (!($value instanceof FHIRReference)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRProcessRequest::__construct - Property \"provider\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($value));
                }
                $this->setProvider($value);
            }
            if (isset($data['reference'])) {
                $value = $data['reference'];
                if (is_array($value)) {
                    $value = new FHIRString($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRString($value);
                }
                if (!($value instanceof FHIRString)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRProcessRequest::__construct - Property \"reference\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or data to construct type, saw ".gettype($value));
                }
                $this->setReference($value);
            }
            if (isset($data['request'])) {
                $value = $data['request'];
                if (is_array($value)) {
                    $value = new FHIRReference($value);
                } 
                if (!($value instanceof FHIRReference)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRProcessRequest::__construct - Property \"request\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($value));
                }
                $this->setRequest($value);
            }
            if (isset($data['response'])) {
                $value = $data['response'];
                if (is_array($value)) {
                    $value = new FHIRReference($value);
                } 
                if (!($value instanceof FHIRReference)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRProcessRequest::__construct - Property \"response\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($value));
                }
                $this->setResponse($value);
            }
            if (isset($data['status'])) {
                $value = $data['status'];
                if (is_array($value)) {
                    $value = new FHIRFinancialResourceStatusCodes($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRFinancialResourceStatusCodes($value);
                }
                if (!($value instanceof FHIRFinancialResourceStatusCodes)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRProcessRequest::__construct - Property \"status\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRFinancialResourceStatusCodes or data to construct type, saw ".gettype($value));
                }
                $this->setStatus($value);
            }
            if (isset($data['target'])) {
                $value = $data['target'];
                if (is_array($value)) {
                    $value = new FHIRReference($value);
                } 
                if (!($value instanceof FHIRReference)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRProcessRequest::__construct - Property \"target\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($value));
                }
                $this->setTarget($value);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRProcessRequest::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
        parent::__construct($data);
    }

    /**
     * The type of processing action being requested, for example Reversal, Readjudication, StatusRequest,PendedRequest.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRActionList
     * @return $this
     */
    public function setAction($action)
    {
        if (null === $action) {
            return $this; 
        }
        if (is_scalar($action)) {
            $action = new FHIRActionList($action);
        }
        if (!($action instanceof FHIRActionList)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRProcessRequest::setAction - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRActionList or appropriate scalar value, %s seen.',
                gettype($action)
            ));
        }
        $this->action = $action;
        return $this;
    }

    /**
     * The type of processing action being requested, for example Reversal, Readjudication, StatusRequest,PendedRequest.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRActionList
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * The date when this resource was created.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setCreated($created)
    {
        if (null === $created) {
            return $this; 
        }
        if (is_scalar($created)) {
            $created = new FHIRDateTime($created);
        }
        if (!($created instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRProcessRequest::setCreated - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($created)
            ));
        }
        $this->created = $created;
        return $this;
    }

    /**
     * The date when this resource was created.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Names of resource types to exclude.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function addExclude($exclude)
    {
        if (null === $exclude) {
            return $this; 
        }
        if (is_scalar($exclude)) {
            $exclude = new FHIRString($exclude);
        }
        if (!($exclude instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRProcessRequest::addExclude - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($exclude)
            ));
        }
        $this->exclude[] = $exclude;
        return $this;
    }

    /**
     * Names of resource types to exclude.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    public function getExclude()
    {
        return $this->exclude;
    }

    /**
     * The ProcessRequest business identifier.
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
     * The ProcessRequest business identifier.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Names of resource types to include.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function addInclude($include)
    {
        if (null === $include) {
            return $this; 
        }
        if (is_scalar($include)) {
            $include = new FHIRString($include);
        }
        if (!($include instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRProcessRequest::addInclude - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($include)
            ));
        }
        $this->include[] = $include;
        return $this;
    }

    /**
     * Names of resource types to include.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    public function getInclude()
    {
        return $this->include;
    }

    /**
     * List of top level items to be re-adjudicated, if none specified then the entire submission is re-adjudicated.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRProcessRequest\FHIRProcessRequestItem
     * @return $this
     */
    public function addItem(FHIRProcessRequestItem $item = null)
    {
        if (null === $item) {
            return $this; 
        }
        $this->item[] = $item;
        return $this;
    }

    /**
     * List of top level items to be re-adjudicated, if none specified then the entire submission is re-adjudicated.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRProcessRequest\FHIRProcessRequestItem[]
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * If true remove all history excluding audit.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     * @return $this
     */
    public function setNullify($nullify)
    {
        if (null === $nullify) {
            return $this; 
        }
        if (is_scalar($nullify)) {
            $nullify = new FHIRBoolean($nullify);
        }
        if (!($nullify instanceof FHIRBoolean)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRProcessRequest::setNullify - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($nullify)
            ));
        }
        $this->nullify = $nullify;
        return $this;
    }

    /**
     * If true remove all history excluding audit.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getNullify()
    {
        return $this->nullify;
    }

    /**
     * The organization which is responsible for the action speccified in this request.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setOrganization(FHIRReference $organization = null)
    {
        if (null === $organization) {
            return $this; 
        }
        $this->organization = $organization;
        return $this;
    }

    /**
     * The organization which is responsible for the action speccified in this request.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getOrganization()
    {
        return $this->organization;
    }

    /**
     * A period of time during which the fulfilling resources would have been created.
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
     * A period of time during which the fulfilling resources would have been created.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * The practitioner who is responsible for the action specified in this request.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setProvider(FHIRReference $provider = null)
    {
        if (null === $provider) {
            return $this; 
        }
        $this->provider = $provider;
        return $this;
    }

    /**
     * The practitioner who is responsible for the action specified in this request.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * A reference to supply which authenticates the process.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setReference($reference)
    {
        if (null === $reference) {
            return $this; 
        }
        if (is_scalar($reference)) {
            $reference = new FHIRString($reference);
        }
        if (!($reference instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRProcessRequest::setReference - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($reference)
            ));
        }
        $this->reference = $reference;
        return $this;
    }

    /**
     * A reference to supply which authenticates the process.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Reference of resource which is the target or subject of this action.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setRequest(FHIRReference $request = null)
    {
        if (null === $request) {
            return $this; 
        }
        $this->request = $request;
        return $this;
    }

    /**
     * Reference of resource which is the target or subject of this action.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Reference of a prior response to resource which is the target or subject of this action.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setResponse(FHIRReference $response = null)
    {
        if (null === $response) {
            return $this; 
        }
        $this->response = $response;
        return $this;
    }

    /**
     * Reference of a prior response to resource which is the target or subject of this action.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * The status of the resource instance.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRFinancialResourceStatusCodes
     * @return $this
     */
    public function setStatus($status)
    {
        if (null === $status) {
            return $this; 
        }
        if (is_scalar($status)) {
            $status = new FHIRFinancialResourceStatusCodes($status);
        }
        if (!($status instanceof FHIRFinancialResourceStatusCodes)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRProcessRequest::setStatus - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRFinancialResourceStatusCodes or appropriate scalar value, %s seen.',
                gettype($status)
            ));
        }
        $this->status = $status;
        return $this;
    }

    /**
     * The status of the resource instance.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRFinancialResourceStatusCodes
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The organization which is the target of the request.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setTarget(FHIRReference $target = null)
    {
        if (null === $target) {
            return $this; 
        }
        $this->target = $target;
        return $this;
    }

    /**
     * The organization which is the target of the request.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getTarget()
    {
        return $this->target;
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
        if (null !== ($v = $this->getAction())) {
            $a['action'] = $v;
        }
        if (null !== ($v = $this->getCreated())) {
            $a['created'] = $v;
        }
        if (0 < count($values = $this->getExclude())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['exclude'] = $vs;
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
        if (0 < count($values = $this->getInclude())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['include'] = $vs;
            }
        }
        if (0 < count($values = $this->getItem())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['item'] = $vs;
            }
        }
        if (null !== ($v = $this->getNullify())) {
            $a['nullify'] = $v;
        }
        if (null !== ($v = $this->getOrganization())) {
            $a['organization'] = $v;
        }
        if (null !== ($v = $this->getPeriod())) {
            $a['period'] = $v;
        }
        if (null !== ($v = $this->getProvider())) {
            $a['provider'] = $v;
        }
        if (null !== ($v = $this->getReference())) {
            $a['reference'] = $v;
        }
        if (null !== ($v = $this->getRequest())) {
            $a['request'] = $v;
        }
        if (null !== ($v = $this->getResponse())) {
            $a['response'] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a['status'] = $v;
        }
        if (null !== ($v = $this->getTarget())) {
            $a['target'] = $v;
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
            $sxe = new \SimpleXMLElement('<ProcessRequest xmlns="http://hl7.org/fhir"></ProcessRequest>');
        }
        if (null !== ($v = $this->getAction())) {
            $v->xmlSerialize(true, $sxe->addChild('action'));
        }
        if (null !== ($v = $this->getCreated())) {
            $v->xmlSerialize(true, $sxe->addChild('created'));
        }
        if (0 < count($values = $this->getExclude())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('exclude'));
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
        if (0 < count($values = $this->getInclude())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('include'));
                }
            }
        }
        if (0 < count($values = $this->getItem())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('item'));
                }
            }
        }
        if (null !== ($v = $this->getNullify())) {
            $v->xmlSerialize(true, $sxe->addChild('nullify'));
        }
        if (null !== ($v = $this->getOrganization())) {
            $v->xmlSerialize(true, $sxe->addChild('organization'));
        }
        if (null !== ($v = $this->getPeriod())) {
            $v->xmlSerialize(true, $sxe->addChild('period'));
        }
        if (null !== ($v = $this->getProvider())) {
            $v->xmlSerialize(true, $sxe->addChild('provider'));
        }
        if (null !== ($v = $this->getReference())) {
            $v->xmlSerialize(true, $sxe->addChild('reference'));
        }
        if (null !== ($v = $this->getRequest())) {
            $v->xmlSerialize(true, $sxe->addChild('request'));
        }
        if (null !== ($v = $this->getResponse())) {
            $v->xmlSerialize(true, $sxe->addChild('response'));
        }
        if (null !== ($v = $this->getStatus())) {
            $v->xmlSerialize(true, $sxe->addChild('status'));
        }
        if (null !== ($v = $this->getTarget())) {
            $v->xmlSerialize(true, $sxe->addChild('target'));
        }
        return parent::xmlSerialize($returnSXE, $sxe);
    }
}