<?php

namespace PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: September 9th, 2018
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
 *   Generated on Sun, Sep 9, 2018 00:54+0000 for FHIR v3.5.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSearchParameter\FHIRSearchParameterComponent;
use PHPFHIRGenerated\FHIRElement\FHIRBoolean;
use PHPFHIRGenerated\FHIRElement\FHIRCanonical;
use PHPFHIRGenerated\FHIRElement\FHIRCode;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRContactDetail;
use PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use PHPFHIRGenerated\FHIRElement\FHIRMarkdown;
use PHPFHIRGenerated\FHIRElement\FHIRPublicationStatus;
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
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public $base = null;

    /**
     * Contains the names of any search parameters which may be chained to the containing search parameter. Chained parameters may be added to search parameters of type reference and specify that resources will only be returned if they contain a reference to a resource which matches the chained parameter value. Values for this field should be drawn from SearchParameter.code for a parameter on the target resource type.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $chain = null;

    /**
     * The code used in the URL or the parameter name in a parameters resource for this search parameter.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public $code = null;

    /**
     * Comparators supported for the search parameter.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRSearchComparator
     */
    public $comparator = null;

    /**
     * Used to define the parts of a composite search parameter.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSearchParameter\FHIRSearchParameterComponent
     */
    public $component = null;

    /**
     * Contact details to assist a user in finding and communicating with the publisher.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRContactDetail
     */
    public $contact = null;

    /**
     * The date  (and optionally time) when the search parameter was published. The date must change when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the search parameter changes.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $date = null;

    /**
     * Where this search parameter is originally defined. If a derivedFrom is provided, then the details in the search parameter must be consistent with the definition from which it is defined. i.e. the parameter should have the same meaning, and (usually) the functionality should be a proper subset of the underlying search parameter.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    public $derivedFrom = null;

    /**
     * A free text natural language description of the search parameter from a consumer's perspective. and how it used.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public $description = null;

    /**
     * A Boolean value to indicate that this search parameter is authored for testing purposes (or education/evaluation/marketing) and is not intended to be used for genuine usage.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $experimental = null;

    /**
     * A FHIRPath expression that returns a set of elements for the search parameter.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $expression = null;

    /**
     * A legal or geographic region in which the search parameter is intended to be used.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $jurisdiction = null;

    /**
     * A modifier supported for the search parameter.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRSearchModifierCode
     */
    public $modifier = null;

    /**
     * Whether multiple parameters are allowed - e.g. more than one parameter with the same name. The search matches if all the parameters match.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $multipleAnd = null;

    /**
     * Whether multiple values are allowed for each time the parameter exists. Values are separated by commas, and the parameter matches if any of the values match.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $multipleOr = null;

    /**
     * A natural language name identifying the search parameter. This name should be usable as an identifier for the module by machine processing applications such as code generation.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $name = null;

    /**
     * The name of the organization or individual that published the search parameter.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $publisher = null;

    /**
     * Explanation of why this search parameter is needed and why it has been designed as it has.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public $purpose = null;

    /**
     * The status of this search parameter. Enables tracking the life-cycle of the content.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPublicationStatus
     */
    public $status = null;

    /**
     * Types of resource (if a resource is referenced).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public $target = null;

    /**
     * The type of value that a search parameter may contain, and how the content is interpreted.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRSearchParamType
     */
    public $type = null;

    /**
     * An absolute URI that is used to identify this search parameter when it is referenced in a specification, model, design or an instance; also called its canonical identifier. This SHOULD be globally unique and SHOULD be a literal address at which at which an authoritative instance of this search parameter is (or will be) published. This URL can be the target of a canonical reference. It SHALL remain the same when the search parameter is stored on different servers.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $url = null;

    /**
     * The content was developed with a focus and intent of supporting the contexts that are listed. These terms may be used to assist with indexing and searching for appropriate search parameter instances.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUsageContext
     */
    public $useContext = null;

    /**
     * The identifier that is used to identify this version of the search parameter when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the search parameter author and is not expected to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not available. There is also no expectation that versions can be placed in a lexicographical sequence.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $version = null;

    /**
     * An XPath expression that returns a set of elements for the search parameter.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $xpath = null;

    /**
     * How the search parameter relates to the set of elements returned by evaluating the xpath query.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRXPathUsageType
     */
    public $xpathUsage = null;

    /**
     * FHIRSearchParameter Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['base'])) {
                $this->setBase($data['base']);
            }
            if (isset($data['chain'])) {
                $this->setChain($data['chain']);
            }
            if (isset($data['code'])) {
                $this->setCode($data['code']);
            }
            if (isset($data['comparator'])) {
                $this->setComparator($data['comparator']);
            }
            if (isset($data['component'])) {
                $this->setComponent($data['component']);
            }
            if (isset($data['contact'])) {
                $this->setContact($data['contact']);
            }
            if (isset($data['date'])) {
                $this->setDate($data['date']);
            }
            if (isset($data['derivedFrom'])) {
                $this->setDerivedFrom($data['derivedFrom']);
            }
            if (isset($data['description'])) {
                $this->setDescription($data['description']);
            }
            if (isset($data['experimental'])) {
                $this->setExperimental($data['experimental']);
            }
            if (isset($data['expression'])) {
                $this->setExpression($data['expression']);
            }
            if (isset($data['jurisdiction'])) {
                $this->setJurisdiction($data['jurisdiction']);
            }
            if (isset($data['modifier'])) {
                $this->setModifier($data['modifier']);
            }
            if (isset($data['multipleAnd'])) {
                $this->setMultipleAnd($data['multipleAnd']);
            }
            if (isset($data['multipleOr'])) {
                $this->setMultipleOr($data['multipleOr']);
            }
            if (isset($data['name'])) {
                $this->setName($data['name']);
            }
            if (isset($data['publisher'])) {
                $this->setPublisher($data['publisher']);
            }
            if (isset($data['purpose'])) {
                $this->setPurpose($data['purpose']);
            }
            if (isset($data['status'])) {
                $this->setStatus($data['status']);
            }
            if (isset($data['target'])) {
                $this->setTarget($data['target']);
            }
            if (isset($data['type'])) {
                $this->setType($data['type']);
            }
            if (isset($data['url'])) {
                $this->setUrl($data['url']);
            }
            if (isset($data['useContext'])) {
                $this->setUseContext($data['useContext']);
            }
            if (isset($data['version'])) {
                $this->setVersion($data['version']);
            }
            if (isset($data['xpath'])) {
                $this->setXpath($data['xpath']);
            }
            if (isset($data['xpathUsage'])) {
                $this->setXpathUsage($data['xpathUsage']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRSearchParameter::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * The base resource type(s) that this search parameter can be used against.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCode
     * @return $this
     */
    public function setBase($base)
    {
        if (null === $base) {
            return $this; 
        }
        if (is_scalar($base)) {
            $base = new FHIRCode($base);
        }
        if (!($base instanceof FHIRCode)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSearchParameter::setBase - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRCode or appropriate scalar value, %s seen.',
                gettype($base)
            ));
        }
        $this->base = $base;
        return $this;
    }

    /**
     * The base resource type(s) that this search parameter can be used against.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getBase()
    {
        return $this->base;
    }


    /**
     * Contains the names of any search parameters which may be chained to the containing search parameter. Chained parameters may be added to search parameters of type reference and specify that resources will only be returned if they contain a reference to a resource which matches the chained parameter value. Values for this field should be drawn from SearchParameter.code for a parameter on the target resource type.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setChain($chain)
    {
        if (null === $chain) {
            return $this; 
        }
        if (is_scalar($chain)) {
            $chain = new FHIRString($chain);
        }
        if (!($chain instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSearchParameter::setChain - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($chain)
            ));
        }
        $this->chain = $chain;
        return $this;
    }

    /**
     * Contains the names of any search parameters which may be chained to the containing search parameter. Chained parameters may be added to search parameters of type reference and specify that resources will only be returned if they contain a reference to a resource which matches the chained parameter value. Values for this field should be drawn from SearchParameter.code for a parameter on the target resource type.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
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
    public function setComparator($comparator)
    {
        if (null === $comparator) {
            return $this; 
        }
        if (is_scalar($comparator)) {
            $comparator = new FHIRSearchComparator($comparator);
        }
        if (!($comparator instanceof FHIRSearchComparator)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSearchParameter::setComparator - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRSearchComparator or appropriate scalar value, %s seen.',
                gettype($comparator)
            ));
        }
        $this->comparator = $comparator;
        return $this;
    }

    /**
     * Comparators supported for the search parameter.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRSearchComparator
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
    public function setComponent(FHIRSearchParameterComponent $component = null)
    {
        if (null === $component) {
            return $this; 
        }
        $this->component = $component;
        return $this;
    }

    /**
     * Used to define the parts of a composite search parameter.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSearchParameter\FHIRSearchParameterComponent
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
    public function setContact(FHIRContactDetail $contact = null)
    {
        if (null === $contact) {
            return $this; 
        }
        $this->contact = $contact;
        return $this;
    }

    /**
     * Contact details to assist a user in finding and communicating with the publisher.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRContactDetail
     */
    public function getContact()
    {
        return $this->contact;
    }


    /**
     * The date  (and optionally time) when the search parameter was published. The date must change when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the search parameter changes.
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
     * The date  (and optionally time) when the search parameter was published. The date must change when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the search parameter changes.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getDate()
    {
        return $this->date;
    }


    /**
     * Where this search parameter is originally defined. If a derivedFrom is provided, then the details in the search parameter must be consistent with the definition from which it is defined. i.e. the parameter should have the same meaning, and (usually) the functionality should be a proper subset of the underlying search parameter.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCanonical
     * @return $this
     */
    public function setDerivedFrom($derivedFrom)
    {
        if (null === $derivedFrom) {
            return $this; 
        }
        if (is_scalar($derivedFrom)) {
            $derivedFrom = new FHIRCanonical($derivedFrom);
        }
        if (!($derivedFrom instanceof FHIRCanonical)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSearchParameter::setDerivedFrom - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRCanonical or appropriate scalar value, %s seen.',
                gettype($derivedFrom)
            ));
        }
        $this->derivedFrom = $derivedFrom;
        return $this;
    }

    /**
     * Where this search parameter is originally defined. If a derivedFrom is provided, then the details in the search parameter must be consistent with the definition from which it is defined. i.e. the parameter should have the same meaning, and (usually) the functionality should be a proper subset of the underlying search parameter.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCanonical
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
     * A Boolean value to indicate that this search parameter is authored for testing purposes (or education/evaluation/marketing) and is not intended to be used for genuine usage.
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
     * A Boolean value to indicate that this search parameter is authored for testing purposes (or education/evaluation/marketing) and is not intended to be used for genuine usage.
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
    public function setJurisdiction(FHIRCodeableConcept $jurisdiction = null)
    {
        if (null === $jurisdiction) {
            return $this; 
        }
        $this->jurisdiction = $jurisdiction;
        return $this;
    }

    /**
     * A legal or geographic region in which the search parameter is intended to be used.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
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
    public function setModifier($modifier)
    {
        if (null === $modifier) {
            return $this; 
        }
        if (is_scalar($modifier)) {
            $modifier = new FHIRSearchModifierCode($modifier);
        }
        if (!($modifier instanceof FHIRSearchModifierCode)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSearchParameter::setModifier - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRSearchModifierCode or appropriate scalar value, %s seen.',
                gettype($modifier)
            ));
        }
        $this->modifier = $modifier;
        return $this;
    }

    /**
     * A modifier supported for the search parameter.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRSearchModifierCode
     */
    public function getModifier()
    {
        return $this->modifier;
    }


    /**
     * Whether multiple parameters are allowed - e.g. more than one parameter with the same name. The search matches if all the parameters match.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     * @return $this
     */
    public function setMultipleAnd($multipleAnd)
    {
        if (null === $multipleAnd) {
            return $this; 
        }
        if (is_scalar($multipleAnd)) {
            $multipleAnd = new FHIRBoolean($multipleAnd);
        }
        if (!($multipleAnd instanceof FHIRBoolean)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSearchParameter::setMultipleAnd - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($multipleAnd)
            ));
        }
        $this->multipleAnd = $multipleAnd;
        return $this;
    }

    /**
     * Whether multiple parameters are allowed - e.g. more than one parameter with the same name. The search matches if all the parameters match.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getMultipleAnd()
    {
        return $this->multipleAnd;
    }


    /**
     * Whether multiple values are allowed for each time the parameter exists. Values are separated by commas, and the parameter matches if any of the values match.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     * @return $this
     */
    public function setMultipleOr($multipleOr)
    {
        if (null === $multipleOr) {
            return $this; 
        }
        if (is_scalar($multipleOr)) {
            $multipleOr = new FHIRBoolean($multipleOr);
        }
        if (!($multipleOr instanceof FHIRBoolean)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSearchParameter::setMultipleOr - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($multipleOr)
            ));
        }
        $this->multipleOr = $multipleOr;
        return $this;
    }

    /**
     * Whether multiple values are allowed for each time the parameter exists. Values are separated by commas, and the parameter matches if any of the values match.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getMultipleOr()
    {
        return $this->multipleOr;
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
     * The name of the organization or individual that published the search parameter.
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
     * The name of the organization or individual that published the search parameter.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getPublisher()
    {
        return $this->publisher;
    }


    /**
     * Explanation of why this search parameter is needed and why it has been designed as it has.
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
     * Explanation of why this search parameter is needed and why it has been designed as it has.
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
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCode
     * @return $this
     */
    public function setTarget($target)
    {
        if (null === $target) {
            return $this; 
        }
        if (is_scalar($target)) {
            $target = new FHIRCode($target);
        }
        if (!($target instanceof FHIRCode)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSearchParameter::setTarget - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRCode or appropriate scalar value, %s seen.',
                gettype($target)
            ));
        }
        $this->target = $target;
        return $this;
    }

    /**
     * Types of resource (if a resource is referenced).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getTarget()
    {
        return $this->target;
    }


    /**
     * The type of value that a search parameter may contain, and how the content is interpreted.
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
     * The type of value that a search parameter may contain, and how the content is interpreted.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRSearchParamType
     */
    public function getType()
    {
        return $this->type;
    }


    /**
     * An absolute URI that is used to identify this search parameter when it is referenced in a specification, model, design or an instance; also called its canonical identifier. This SHOULD be globally unique and SHOULD be a literal address at which at which an authoritative instance of this search parameter is (or will be) published. This URL can be the target of a canonical reference. It SHALL remain the same when the search parameter is stored on different servers.
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
     * An absolute URI that is used to identify this search parameter when it is referenced in a specification, model, design or an instance; also called its canonical identifier. This SHOULD be globally unique and SHOULD be a literal address at which at which an authoritative instance of this search parameter is (or will be) published. This URL can be the target of a canonical reference. It SHALL remain the same when the search parameter is stored on different servers.
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
    public function setUseContext(FHIRUsageContext $useContext = null)
    {
        if (null === $useContext) {
            return $this; 
        }
        $this->useContext = $useContext;
        return $this;
    }

    /**
     * The content was developed with a focus and intent of supporting the contexts that are listed. These terms may be used to assist with indexing and searching for appropriate search parameter instances.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUsageContext
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
        if (null !== ($v = $this->getBase())) {
            $a['base'] = $v;
        }
        if (null !== ($v = $this->getChain())) {
            $a['chain'] = $v;
        }
        if (null !== ($v = $this->getCode())) {
            $a['code'] = $v;
        }
        if (null !== ($v = $this->getComparator())) {
            $a['comparator'] = $v;
        }
        if (null !== ($v = $this->getComponent())) {
            $a['component'] = $v;
        }
        if (null !== ($v = $this->getContact())) {
            $a['contact'] = $v;
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
        if (null !== ($v = $this->getJurisdiction())) {
            $a['jurisdiction'] = $v;
        }
        if (null !== ($v = $this->getModifier())) {
            $a['modifier'] = $v;
        }
        if (null !== ($v = $this->getMultipleAnd())) {
            $a['multipleAnd'] = $v;
        }
        if (null !== ($v = $this->getMultipleOr())) {
            $a['multipleOr'] = $v;
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
        if (null !== ($v = $this->getTarget())) {
            $a['target'] = $v;
        }
        if (null !== ($v = $this->getType())) {
            $a['type'] = $v;
        }
        if (null !== ($v = $this->getUrl())) {
            $a['url'] = $v;
        }
        if (null !== ($v = $this->getUseContext())) {
            $a['useContext'] = $v;
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
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}