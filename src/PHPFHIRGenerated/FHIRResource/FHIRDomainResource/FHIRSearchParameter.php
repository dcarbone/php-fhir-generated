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

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSearchParameter\FHIRSearchParameterComponent;
use PHPFHIRGenerated\FHIRElement\FHIRBoolean;
use PHPFHIRGenerated\FHIRElement\FHIRCode;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRContactDetail;
use PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use PHPFHIRGenerated\FHIRElement\FHIRMarkdown;
use PHPFHIRGenerated\FHIRElement\FHIRPublicationStatus;
use PHPFHIRGenerated\FHIRElement\FHIRResourceType;
use PHPFHIRGenerated\FHIRElement\FHIRSearchComparator;
use PHPFHIRGenerated\FHIRElement\FHIRSearchModifierCode;
use PHPFHIRGenerated\FHIRElement\FHIRSearchParamType;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRElement\FHIRUri;
use PHPFHIRGenerated\FHIRElement\FHIRUsageContext;
use PHPFHIRGenerated\FHIRElement\FHIRXPathUsageType;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * A search parameter that defines a named search item that can be used to search/filter on a resource.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRSearchParameter
 * @package PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRSearchParameter extends FHIRDomainResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'SearchParameter';

    /**
     * The base resource type(s) that this search parameter can be used against.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceType[]
     */
    private $base = [];

    /**
     * Contains the names of any search parameters which may be chained to the containing search parameter. Chained parameters may be added to search parameters of type reference, and specify that resources will only be returned if they contain a reference to a resource which matches the chained parameter value. Values for this field should be drawn from SearchParameter.code for a parameter on the target resource type.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    private $chain = [];

    /**
     * The code used in the URL or the parameter name in a parameters resource for this search parameter.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    private $code = null;

    /**
     * Comparators supported for the search parameter.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRSearchComparator[]
     */
    private $comparator = [];

    /**
     * Used to define the parts of a composite search parameter.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSearchParameter\FHIRSearchParameterComponent[]
     */
    private $component = [];

    /**
     * Contact details to assist a user in finding and communicating with the publisher.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRContactDetail[]
     */
    private $contact = [];

    /**
     * The date  (and optionally time) when the search parameter was published. The date must change if and when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the search parameter changes.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    private $date = null;

    /**
     * Where this search parameter is originally defined. If a derivedFrom is provided, then the details in the search parameter must be consistent with the definition from which it is defined. I.e. the parameter should have the same meaning, and (usually) the functionality should be a proper subset of the underlying search parameter.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    private $derivedFrom = null;

    /**
     * A free text natural language description of the search parameter from a consumer's perspective. and how it used.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    private $description = null;

    /**
     * A boolean value to indicate that this search parameter is authored for testing purposes (or education/evaluation/marketing), and is not intended to be used for genuine usage.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    private $experimental = null;

    /**
     * A FHIRPath expression that returns a set of elements for the search parameter.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $expression = null;

    /**
     * A legal or geographic region in which the search parameter is intended to be used.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    private $jurisdiction = [];

    /**
     * A modifier supported for the search parameter.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRSearchModifierCode[]
     */
    private $modifier = [];

    /**
     * A natural language name identifying the search parameter. This name should be usable as an identifier for the module by machine processing applications such as code generation.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $name = null;

    /**
     * The name of the individual or organization that published the search parameter.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $publisher = null;

    /**
     * Explaination of why this search parameter is needed and why it has been designed as it has.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    private $purpose = null;

    /**
     * The status of this search parameter. Enables tracking the life-cycle of the content.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPublicationStatus
     */
    private $status = null;

    /**
     * Types of resource (if a resource is referenced).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceType[]
     */
    private $target = [];

    /**
     * The type of value a search parameter refers to, and how the content is interpreted.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRSearchParamType
     */
    private $type = null;

    /**
     * An absolute URI that is used to identify this search parameter when it is referenced in a specification, model, design or an instance. This SHALL be a URL, SHOULD be globally unique, and SHOULD be an address at which this search parameter is (or will be) published. The URL SHOULD include the major version of the search parameter. For more information see [Technical and Business Versions](resource.html#versions).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    private $url = null;

    /**
     * The content was developed with a focus and intent of supporting the contexts that are listed. These terms may be used to assist with indexing and searching for appropriate search parameter instances.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUsageContext[]
     */
    private $useContext = [];

    /**
     * The identifier that is used to identify this version of the search parameter when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the search parameter author and is not expected to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not available. There is also no expectation that versions can be placed in a lexicographical sequence.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $version = null;

    /**
     * An XPath expression that returns a set of elements for the search parameter.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $xpath = null;

    /**
     * How the search parameter relates to the set of elements returned by evaluating the xpath query.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRXPathUsageType
     */
    private $xpathUsage = null;

    /**
     * FHIRSearchParameter Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        if (is_array($data)) {
            if (isset($data['base'])) {
                $value = $data['base'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRResourceType($v);
                        }  elseif (is_scalar($v)) {
                            $v = new FHIRResourceType($v);
                        }
                        if (!($v instanceof FHIRResourceType)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRSearchParameter::__construct - Collection field \"base\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRResourceType or data to construct type, saw ".gettype($v)); 
                        }
                        $this->addBase($v);
                    }
                }
            }
            if (isset($data['chain'])) {
                $value = $data['chain'];
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
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRSearchParameter::__construct - Collection field \"chain\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or data to construct type, saw ".gettype($v)); 
                        }
                        $this->addChain($v);
                    }
                }
            }
            if (isset($data['code'])) {
                $value = $data['code'];
                if (is_array($value)) {
                    $value = new FHIRCode($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRCode($value);
                }
                if (!($value instanceof FHIRCode)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRSearchParameter::__construct - Property \"code\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRCode or data to construct type, saw ".gettype($value)); 
                }
                $this->setCode($value);
            }
            if (isset($data['comparator'])) {
                $value = $data['comparator'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRSearchComparator($v);
                        }  elseif (is_scalar($v)) {
                            $v = new FHIRSearchComparator($v);
                        }
                        if (!($v instanceof FHIRSearchComparator)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRSearchParameter::__construct - Collection field \"comparator\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRSearchComparator or data to construct type, saw ".gettype($v)); 
                        }
                        $this->addComparator($v);
                    }
                }
            }
            if (isset($data['component'])) {
                $value = $data['component'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRSearchParameterComponent($v);
                        } 
                        if (!($v instanceof FHIRSearchParameterComponent)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRSearchParameter::__construct - Collection field \"component\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSearchParameter\FHIRSearchParameterComponent or data to construct type, saw ".gettype($v)); 
                        }
                        $this->addComponent($v);
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
                            $v = new FHIRContactDetail($v);
                        } 
                        if (!($v instanceof FHIRContactDetail)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRSearchParameter::__construct - Collection field \"contact\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRContactDetail or data to construct type, saw ".gettype($v)); 
                        }
                        $this->addContact($v);
                    }
                }
            }
            if (isset($data['date'])) {
                $value = $data['date'];
                if (is_array($value)) {
                    $value = new FHIRDateTime($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRDateTime($value);
                }
                if (!($value instanceof FHIRDateTime)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRSearchParameter::__construct - Property \"date\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or data to construct type, saw ".gettype($value)); 
                }
                $this->setDate($value);
            }
            if (isset($data['derivedFrom'])) {
                $value = $data['derivedFrom'];
                if (is_array($value)) {
                    $value = new FHIRUri($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRUri($value);
                }
                if (!($value instanceof FHIRUri)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRSearchParameter::__construct - Property \"derivedFrom\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or data to construct type, saw ".gettype($value)); 
                }
                $this->setDerivedFrom($value);
            }
            if (isset($data['description'])) {
                $value = $data['description'];
                if (is_array($value)) {
                    $value = new FHIRMarkdown($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRMarkdown($value);
                }
                if (!($value instanceof FHIRMarkdown)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRSearchParameter::__construct - Property \"description\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRMarkdown or data to construct type, saw ".gettype($value)); 
                }
                $this->setDescription($value);
            }
            if (isset($data['experimental'])) {
                $value = $data['experimental'];
                if (is_array($value)) {
                    $value = new FHIRBoolean($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRBoolean($value);
                }
                if (!($value instanceof FHIRBoolean)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRSearchParameter::__construct - Property \"experimental\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or data to construct type, saw ".gettype($value)); 
                }
                $this->setExperimental($value);
            }
            if (isset($data['expression'])) {
                $value = $data['expression'];
                if (is_array($value)) {
                    $value = new FHIRString($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRString($value);
                }
                if (!($value instanceof FHIRString)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRSearchParameter::__construct - Property \"expression\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or data to construct type, saw ".gettype($value)); 
                }
                $this->setExpression($value);
            }
            if (isset($data['jurisdiction'])) {
                $value = $data['jurisdiction'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRCodeableConcept($v);
                        } 
                        if (!($v instanceof FHIRCodeableConcept)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRSearchParameter::__construct - Collection field \"jurisdiction\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept or data to construct type, saw ".gettype($v)); 
                        }
                        $this->addJurisdiction($v);
                    }
                }
            }
            if (isset($data['modifier'])) {
                $value = $data['modifier'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRSearchModifierCode($v);
                        }  elseif (is_scalar($v)) {
                            $v = new FHIRSearchModifierCode($v);
                        }
                        if (!($v instanceof FHIRSearchModifierCode)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRSearchParameter::__construct - Collection field \"modifier\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRSearchModifierCode or data to construct type, saw ".gettype($v)); 
                        }
                        $this->addModifier($v);
                    }
                }
            }
            if (isset($data['name'])) {
                $value = $data['name'];
                if (is_array($value)) {
                    $value = new FHIRString($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRString($value);
                }
                if (!($value instanceof FHIRString)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRSearchParameter::__construct - Property \"name\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or data to construct type, saw ".gettype($value)); 
                }
                $this->setName($value);
            }
            if (isset($data['publisher'])) {
                $value = $data['publisher'];
                if (is_array($value)) {
                    $value = new FHIRString($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRString($value);
                }
                if (!($value instanceof FHIRString)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRSearchParameter::__construct - Property \"publisher\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or data to construct type, saw ".gettype($value)); 
                }
                $this->setPublisher($value);
            }
            if (isset($data['purpose'])) {
                $value = $data['purpose'];
                if (is_array($value)) {
                    $value = new FHIRMarkdown($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRMarkdown($value);
                }
                if (!($value instanceof FHIRMarkdown)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRSearchParameter::__construct - Property \"purpose\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRMarkdown or data to construct type, saw ".gettype($value)); 
                }
                $this->setPurpose($value);
            }
            if (isset($data['status'])) {
                $value = $data['status'];
                if (is_array($value)) {
                    $value = new FHIRPublicationStatus($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRPublicationStatus($value);
                }
                if (!($value instanceof FHIRPublicationStatus)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRSearchParameter::__construct - Property \"status\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRPublicationStatus or data to construct type, saw ".gettype($value)); 
                }
                $this->setStatus($value);
            }
            if (isset($data['target'])) {
                $value = $data['target'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRResourceType($v);
                        }  elseif (is_scalar($v)) {
                            $v = new FHIRResourceType($v);
                        }
                        if (!($v instanceof FHIRResourceType)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRSearchParameter::__construct - Collection field \"target\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRResourceType or data to construct type, saw ".gettype($v)); 
                        }
                        $this->addTarget($v);
                    }
                }
            }
            if (isset($data['type'])) {
                $value = $data['type'];
                if (is_array($value)) {
                    $value = new FHIRSearchParamType($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRSearchParamType($value);
                }
                if (!($value instanceof FHIRSearchParamType)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRSearchParameter::__construct - Property \"type\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRSearchParamType or data to construct type, saw ".gettype($value)); 
                }
                $this->setType($value);
            }
            if (isset($data['url'])) {
                $value = $data['url'];
                if (is_array($value)) {
                    $value = new FHIRUri($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRUri($value);
                }
                if (!($value instanceof FHIRUri)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRSearchParameter::__construct - Property \"url\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or data to construct type, saw ".gettype($value)); 
                }
                $this->setUrl($value);
            }
            if (isset($data['useContext'])) {
                $value = $data['useContext'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRUsageContext($v);
                        } 
                        if (!($v instanceof FHIRUsageContext)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRSearchParameter::__construct - Collection field \"useContext\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRUsageContext or data to construct type, saw ".gettype($v)); 
                        }
                        $this->addUseContext($v);
                    }
                }
            }
            if (isset($data['version'])) {
                $value = $data['version'];
                if (is_array($value)) {
                    $value = new FHIRString($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRString($value);
                }
                if (!($value instanceof FHIRString)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRSearchParameter::__construct - Property \"version\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or data to construct type, saw ".gettype($value)); 
                }
                $this->setVersion($value);
            }
            if (isset($data['xpath'])) {
                $value = $data['xpath'];
                if (is_array($value)) {
                    $value = new FHIRString($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRString($value);
                }
                if (!($value instanceof FHIRString)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRSearchParameter::__construct - Property \"xpath\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or data to construct type, saw ".gettype($value)); 
                }
                $this->setXpath($value);
            }
            if (isset($data['xpathUsage'])) {
                $value = $data['xpathUsage'];
                if (is_array($value)) {
                    $value = new FHIRXPathUsageType($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRXPathUsageType($value);
                }
                if (!($value instanceof FHIRXPathUsageType)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRSearchParameter::__construct - Property \"xpathUsage\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRXPathUsageType or data to construct type, saw ".gettype($value)); 
                }
                $this->setXpathUsage($value);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRSearchParameter::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
        parent::__construct($data);
    }

    /**
     * The base resource type(s) that this search parameter can be used against.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRResourceType
     * @return $this
     */
    public function addBase($base)
    {
        if (null === $base) {
            return $this; 
        }
        if (is_scalar($base)) {
            $base = new FHIRResourceType($base);
        }
        if (!($base instanceof FHIRResourceType)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSearchParameter::addBase - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRResourceType or appropriate scalar value, %s seen.',
                gettype($base)
            ));
        }
        $this->base[] = $base;
        return $this;
    }

    /**
     * The base resource type(s) that this search parameter can be used against.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRResourceType[]
     */
    public function getBase()
    {
        return $this->base;
    }

    /**
     * Contains the names of any search parameters which may be chained to the containing search parameter. Chained parameters may be added to search parameters of type reference, and specify that resources will only be returned if they contain a reference to a resource which matches the chained parameter value. Values for this field should be drawn from SearchParameter.code for a parameter on the target resource type.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function addChain($chain)
    {
        if (null === $chain) {
            return $this; 
        }
        if (is_scalar($chain)) {
            $chain = new FHIRString($chain);
        }
        if (!($chain instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSearchParameter::addChain - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($chain)
            ));
        }
        $this->chain[] = $chain;
        return $this;
    }

    /**
     * Contains the names of any search parameters which may be chained to the containing search parameter. Chained parameters may be added to search parameters of type reference, and specify that resources will only be returned if they contain a reference to a resource which matches the chained parameter value. Values for this field should be drawn from SearchParameter.code for a parameter on the target resource type.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    public function getChain()
    {
        return $this->chain;
    }

    /**
     * The code used in the URL or the parameter name in a parameters resource for this search parameter.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCode
     * @return $this
     */
    public function setCode($code)
    {
        if (null === $code) {
            return $this; 
        }
        if (is_scalar($code)) {
            $code = new FHIRCode($code);
        }
        if (!($code instanceof FHIRCode)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSearchParameter::setCode - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRCode or appropriate scalar value, %s seen.',
                gettype($code)
            ));
        }
        $this->code = $code;
        return $this;
    }

    /**
     * The code used in the URL or the parameter name in a parameters resource for this search parameter.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Comparators supported for the search parameter.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRSearchComparator
     * @return $this
     */
    public function addComparator($comparator)
    {
        if (null === $comparator) {
            return $this; 
        }
        if (is_scalar($comparator)) {
            $comparator = new FHIRSearchComparator($comparator);
        }
        if (!($comparator instanceof FHIRSearchComparator)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSearchParameter::addComparator - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRSearchComparator or appropriate scalar value, %s seen.',
                gettype($comparator)
            ));
        }
        $this->comparator[] = $comparator;
        return $this;
    }

    /**
     * Comparators supported for the search parameter.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRSearchComparator[]
     */
    public function getComparator()
    {
        return $this->comparator;
    }

    /**
     * Used to define the parts of a composite search parameter.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSearchParameter\FHIRSearchParameterComponent
     * @return $this
     */
    public function addComponent(FHIRSearchParameterComponent $component = null)
    {
        if (null === $component) {
            return $this; 
        }
        $this->component[] = $component;
        return $this;
    }

    /**
     * Used to define the parts of a composite search parameter.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSearchParameter\FHIRSearchParameterComponent[]
     */
    public function getComponent()
    {
        return $this->component;
    }

    /**
     * Contact details to assist a user in finding and communicating with the publisher.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRContactDetail
     * @return $this
     */
    public function addContact(FHIRContactDetail $contact = null)
    {
        if (null === $contact) {
            return $this; 
        }
        $this->contact[] = $contact;
        return $this;
    }

    /**
     * Contact details to assist a user in finding and communicating with the publisher.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRContactDetail[]
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * The date  (and optionally time) when the search parameter was published. The date must change if and when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the search parameter changes.
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
                'FHIRSearchParameter::setDate - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($date)
            ));
        }
        $this->date = $date;
        return $this;
    }

    /**
     * The date  (and optionally time) when the search parameter was published. The date must change if and when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the search parameter changes.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Where this search parameter is originally defined. If a derivedFrom is provided, then the details in the search parameter must be consistent with the definition from which it is defined. I.e. the parameter should have the same meaning, and (usually) the functionality should be a proper subset of the underlying search parameter.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     * @return $this
     */
    public function setDerivedFrom($derivedFrom)
    {
        if (null === $derivedFrom) {
            return $this; 
        }
        if (is_scalar($derivedFrom)) {
            $derivedFrom = new FHIRUri($derivedFrom);
        }
        if (!($derivedFrom instanceof FHIRUri)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSearchParameter::setDerivedFrom - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or appropriate scalar value, %s seen.',
                gettype($derivedFrom)
            ));
        }
        $this->derivedFrom = $derivedFrom;
        return $this;
    }

    /**
     * Where this search parameter is originally defined. If a derivedFrom is provided, then the details in the search parameter must be consistent with the definition from which it is defined. I.e. the parameter should have the same meaning, and (usually) the functionality should be a proper subset of the underlying search parameter.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getDerivedFrom()
    {
        return $this->derivedFrom;
    }

    /**
     * A free text natural language description of the search parameter from a consumer's perspective. and how it used.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     * @return $this
     */
    public function setDescription($description)
    {
        if (null === $description) {
            return $this; 
        }
        if (is_scalar($description)) {
            $description = new FHIRMarkdown($description);
        }
        if (!($description instanceof FHIRMarkdown)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSearchParameter::setDescription - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRMarkdown or appropriate scalar value, %s seen.',
                gettype($description)
            ));
        }
        $this->description = $description;
        return $this;
    }

    /**
     * A free text natural language description of the search parameter from a consumer's perspective. and how it used.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A boolean value to indicate that this search parameter is authored for testing purposes (or education/evaluation/marketing), and is not intended to be used for genuine usage.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     * @return $this
     */
    public function setExperimental($experimental)
    {
        if (null === $experimental) {
            return $this; 
        }
        if (is_scalar($experimental)) {
            $experimental = new FHIRBoolean($experimental);
        }
        if (!($experimental instanceof FHIRBoolean)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSearchParameter::setExperimental - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($experimental)
            ));
        }
        $this->experimental = $experimental;
        return $this;
    }

    /**
     * A boolean value to indicate that this search parameter is authored for testing purposes (or education/evaluation/marketing), and is not intended to be used for genuine usage.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getExperimental()
    {
        return $this->experimental;
    }

    /**
     * A FHIRPath expression that returns a set of elements for the search parameter.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setExpression($expression)
    {
        if (null === $expression) {
            return $this; 
        }
        if (is_scalar($expression)) {
            $expression = new FHIRString($expression);
        }
        if (!($expression instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSearchParameter::setExpression - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($expression)
            ));
        }
        $this->expression = $expression;
        return $this;
    }

    /**
     * A FHIRPath expression that returns a set of elements for the search parameter.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getExpression()
    {
        return $this->expression;
    }

    /**
     * A legal or geographic region in which the search parameter is intended to be used.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function addJurisdiction(FHIRCodeableConcept $jurisdiction = null)
    {
        if (null === $jurisdiction) {
            return $this; 
        }
        $this->jurisdiction[] = $jurisdiction;
        return $this;
    }

    /**
     * A legal or geographic region in which the search parameter is intended to be used.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getJurisdiction()
    {
        return $this->jurisdiction;
    }

    /**
     * A modifier supported for the search parameter.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRSearchModifierCode
     * @return $this
     */
    public function addModifier($modifier)
    {
        if (null === $modifier) {
            return $this; 
        }
        if (is_scalar($modifier)) {
            $modifier = new FHIRSearchModifierCode($modifier);
        }
        if (!($modifier instanceof FHIRSearchModifierCode)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSearchParameter::addModifier - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRSearchModifierCode or appropriate scalar value, %s seen.',
                gettype($modifier)
            ));
        }
        $this->modifier[] = $modifier;
        return $this;
    }

    /**
     * A modifier supported for the search parameter.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRSearchModifierCode[]
     */
    public function getModifier()
    {
        return $this->modifier;
    }

    /**
     * A natural language name identifying the search parameter. This name should be usable as an identifier for the module by machine processing applications such as code generation.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setName($name)
    {
        if (null === $name) {
            return $this; 
        }
        if (is_scalar($name)) {
            $name = new FHIRString($name);
        }
        if (!($name instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSearchParameter::setName - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($name)
            ));
        }
        $this->name = $name;
        return $this;
    }

    /**
     * A natural language name identifying the search parameter. This name should be usable as an identifier for the module by machine processing applications such as code generation.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The name of the individual or organization that published the search parameter.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setPublisher($publisher)
    {
        if (null === $publisher) {
            return $this; 
        }
        if (is_scalar($publisher)) {
            $publisher = new FHIRString($publisher);
        }
        if (!($publisher instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSearchParameter::setPublisher - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($publisher)
            ));
        }
        $this->publisher = $publisher;
        return $this;
    }

    /**
     * The name of the individual or organization that published the search parameter.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getPublisher()
    {
        return $this->publisher;
    }

    /**
     * Explaination of why this search parameter is needed and why it has been designed as it has.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     * @return $this
     */
    public function setPurpose($purpose)
    {
        if (null === $purpose) {
            return $this; 
        }
        if (is_scalar($purpose)) {
            $purpose = new FHIRMarkdown($purpose);
        }
        if (!($purpose instanceof FHIRMarkdown)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSearchParameter::setPurpose - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRMarkdown or appropriate scalar value, %s seen.',
                gettype($purpose)
            ));
        }
        $this->purpose = $purpose;
        return $this;
    }

    /**
     * Explaination of why this search parameter is needed and why it has been designed as it has.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public function getPurpose()
    {
        return $this->purpose;
    }

    /**
     * The status of this search parameter. Enables tracking the life-cycle of the content.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPublicationStatus
     * @return $this
     */
    public function setStatus($status)
    {
        if (null === $status) {
            return $this; 
        }
        if (is_scalar($status)) {
            $status = new FHIRPublicationStatus($status);
        }
        if (!($status instanceof FHIRPublicationStatus)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSearchParameter::setStatus - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRPublicationStatus or appropriate scalar value, %s seen.',
                gettype($status)
            ));
        }
        $this->status = $status;
        return $this;
    }

    /**
     * The status of this search parameter. Enables tracking the life-cycle of the content.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPublicationStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Types of resource (if a resource is referenced).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRResourceType
     * @return $this
     */
    public function addTarget($target)
    {
        if (null === $target) {
            return $this; 
        }
        if (is_scalar($target)) {
            $target = new FHIRResourceType($target);
        }
        if (!($target instanceof FHIRResourceType)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSearchParameter::addTarget - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRResourceType or appropriate scalar value, %s seen.',
                gettype($target)
            ));
        }
        $this->target[] = $target;
        return $this;
    }

    /**
     * Types of resource (if a resource is referenced).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRResourceType[]
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * The type of value a search parameter refers to, and how the content is interpreted.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRSearchParamType
     * @return $this
     */
    public function setType($type)
    {
        if (null === $type) {
            return $this; 
        }
        if (is_scalar($type)) {
            $type = new FHIRSearchParamType($type);
        }
        if (!($type instanceof FHIRSearchParamType)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSearchParameter::setType - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRSearchParamType or appropriate scalar value, %s seen.',
                gettype($type)
            ));
        }
        $this->type = $type;
        return $this;
    }

    /**
     * The type of value a search parameter refers to, and how the content is interpreted.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRSearchParamType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * An absolute URI that is used to identify this search parameter when it is referenced in a specification, model, design or an instance. This SHALL be a URL, SHOULD be globally unique, and SHOULD be an address at which this search parameter is (or will be) published. The URL SHOULD include the major version of the search parameter. For more information see [Technical and Business Versions](resource.html#versions).
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
                'FHIRSearchParameter::setUrl - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or appropriate scalar value, %s seen.',
                gettype($url)
            ));
        }
        $this->url = $url;
        return $this;
    }

    /**
     * An absolute URI that is used to identify this search parameter when it is referenced in a specification, model, design or an instance. This SHALL be a URL, SHOULD be globally unique, and SHOULD be an address at which this search parameter is (or will be) published. The URL SHOULD include the major version of the search parameter. For more information see [Technical and Business Versions](resource.html#versions).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * The content was developed with a focus and intent of supporting the contexts that are listed. These terms may be used to assist with indexing and searching for appropriate search parameter instances.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUsageContext
     * @return $this
     */
    public function addUseContext(FHIRUsageContext $useContext = null)
    {
        if (null === $useContext) {
            return $this; 
        }
        $this->useContext[] = $useContext;
        return $this;
    }

    /**
     * The content was developed with a focus and intent of supporting the contexts that are listed. These terms may be used to assist with indexing and searching for appropriate search parameter instances.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUsageContext[]
     */
    public function getUseContext()
    {
        return $this->useContext;
    }

    /**
     * The identifier that is used to identify this version of the search parameter when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the search parameter author and is not expected to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not available. There is also no expectation that versions can be placed in a lexicographical sequence.
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
                'FHIRSearchParameter::setVersion - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($version)
            ));
        }
        $this->version = $version;
        return $this;
    }

    /**
     * The identifier that is used to identify this version of the search parameter when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the search parameter author and is not expected to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not available. There is also no expectation that versions can be placed in a lexicographical sequence.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * An XPath expression that returns a set of elements for the search parameter.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setXpath($xpath)
    {
        if (null === $xpath) {
            return $this; 
        }
        if (is_scalar($xpath)) {
            $xpath = new FHIRString($xpath);
        }
        if (!($xpath instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSearchParameter::setXpath - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($xpath)
            ));
        }
        $this->xpath = $xpath;
        return $this;
    }

    /**
     * An XPath expression that returns a set of elements for the search parameter.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getXpath()
    {
        return $this->xpath;
    }

    /**
     * How the search parameter relates to the set of elements returned by evaluating the xpath query.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRXPathUsageType
     * @return $this
     */
    public function setXpathUsage($xpathUsage)
    {
        if (null === $xpathUsage) {
            return $this; 
        }
        if (is_scalar($xpathUsage)) {
            $xpathUsage = new FHIRXPathUsageType($xpathUsage);
        }
        if (!($xpathUsage instanceof FHIRXPathUsageType)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSearchParameter::setXpathUsage - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRXPathUsageType or appropriate scalar value, %s seen.',
                gettype($xpathUsage)
            ));
        }
        $this->xpathUsage = $xpathUsage;
        return $this;
    }

    /**
     * How the search parameter relates to the set of elements returned by evaluating the xpath query.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRXPathUsageType
     */
    public function getXpathUsage()
    {
        return $this->xpathUsage;
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
        if (0 < count($values = $this->getBase())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['base'] = $vs;
            }
        }
        if (0 < count($values = $this->getChain())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['chain'] = $vs;
            }
        }
        if (null !== ($v = $this->getCode())) {
            $a['code'] = $v;
        }
        if (0 < count($values = $this->getComparator())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['comparator'] = $vs;
            }
        }
        if (0 < count($values = $this->getComponent())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['component'] = $vs;
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
        if (null !== ($v = $this->getDate())) {
            $a['date'] = $v;
        }
        if (null !== ($v = $this->getDerivedFrom())) {
            $a['derivedFrom'] = $v;
        }
        if (null !== ($v = $this->getDescription())) {
            $a['description'] = $v;
        }
        if (null !== ($v = $this->getExperimental())) {
            $a['experimental'] = $v;
        }
        if (null !== ($v = $this->getExpression())) {
            $a['expression'] = $v;
        }
        if (0 < count($values = $this->getJurisdiction())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['jurisdiction'] = $vs;
            }
        }
        if (0 < count($values = $this->getModifier())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['modifier'] = $vs;
            }
        }
        if (null !== ($v = $this->getName())) {
            $a['name'] = $v;
        }
        if (null !== ($v = $this->getPublisher())) {
            $a['publisher'] = $v;
        }
        if (null !== ($v = $this->getPurpose())) {
            $a['purpose'] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a['status'] = $v;
        }
        if (0 < count($values = $this->getTarget())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['target'] = $vs;
            }
        }
        if (null !== ($v = $this->getType())) {
            $a['type'] = $v;
        }
        if (null !== ($v = $this->getUrl())) {
            $a['url'] = $v;
        }
        if (0 < count($values = $this->getUseContext())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['useContext'] = $vs;
            }
        }
        if (null !== ($v = $this->getVersion())) {
            $a['version'] = $v;
        }
        if (null !== ($v = $this->getXpath())) {
            $a['xpath'] = $v;
        }
        if (null !== ($v = $this->getXpathUsage())) {
            $a['xpathUsage'] = $v;
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
            $sxe = new \SimpleXMLElement('<SearchParameter xmlns="http://hl7.org/fhir"></SearchParameter>');
        }
        if (0 < count($values = $this->getBase())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('base'));
                }
            }
        }
        if (0 < count($values = $this->getChain())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('chain'));
                }
            }
        }
        if (null !== ($v = $this->getCode())) {
            $v->xmlSerialize(true, $sxe->addChild('code'));
        }
        if (0 < count($values = $this->getComparator())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('comparator'));
                }
            }
        }
        if (0 < count($values = $this->getComponent())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('component'));
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
        if (null !== ($v = $this->getDate())) {
            $v->xmlSerialize(true, $sxe->addChild('date'));
        }
        if (null !== ($v = $this->getDerivedFrom())) {
            $v->xmlSerialize(true, $sxe->addChild('derivedFrom'));
        }
        if (null !== ($v = $this->getDescription())) {
            $v->xmlSerialize(true, $sxe->addChild('description'));
        }
        if (null !== ($v = $this->getExperimental())) {
            $v->xmlSerialize(true, $sxe->addChild('experimental'));
        }
        if (null !== ($v = $this->getExpression())) {
            $v->xmlSerialize(true, $sxe->addChild('expression'));
        }
        if (0 < count($values = $this->getJurisdiction())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('jurisdiction'));
                }
            }
        }
        if (0 < count($values = $this->getModifier())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('modifier'));
                }
            }
        }
        if (null !== ($v = $this->getName())) {
            $v->xmlSerialize(true, $sxe->addChild('name'));
        }
        if (null !== ($v = $this->getPublisher())) {
            $v->xmlSerialize(true, $sxe->addChild('publisher'));
        }
        if (null !== ($v = $this->getPurpose())) {
            $v->xmlSerialize(true, $sxe->addChild('purpose'));
        }
        if (null !== ($v = $this->getStatus())) {
            $v->xmlSerialize(true, $sxe->addChild('status'));
        }
        if (0 < count($values = $this->getTarget())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('target'));
                }
            }
        }
        if (null !== ($v = $this->getType())) {
            $v->xmlSerialize(true, $sxe->addChild('type'));
        }
        if (null !== ($v = $this->getUrl())) {
            $v->xmlSerialize(true, $sxe->addChild('url'));
        }
        if (0 < count($values = $this->getUseContext())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('useContext'));
                }
            }
        }
        if (null !== ($v = $this->getVersion())) {
            $v->xmlSerialize(true, $sxe->addChild('version'));
        }
        if (null !== ($v = $this->getXpath())) {
            $v->xmlSerialize(true, $sxe->addChild('xpath'));
        }
        if (null !== ($v = $this->getXpathUsage())) {
            $v->xmlSerialize(true, $sxe->addChild('xpathUsage'));
        }
        return parent::xmlSerialize($returnSXE, $sxe);
    }
}