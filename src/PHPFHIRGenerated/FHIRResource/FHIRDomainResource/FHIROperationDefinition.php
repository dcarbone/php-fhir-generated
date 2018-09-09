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

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionOverload;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionParameter;
use PHPFHIRGenerated\FHIRElement\FHIRBoolean;
use PHPFHIRGenerated\FHIRElement\FHIRCanonical;
use PHPFHIRGenerated\FHIRElement\FHIRCode;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRContactDetail;
use PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use PHPFHIRGenerated\FHIRElement\FHIRMarkdown;
use PHPFHIRGenerated\FHIRElement\FHIROperationKind;
use PHPFHIRGenerated\FHIRElement\FHIRPublicationStatus;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRElement\FHIRUri;
use PHPFHIRGenerated\FHIRElement\FHIRUsageContext;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * A formal computable definition of an operation (on the RESTful interface) or a named query (using the search interaction).
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIROperationDefinition
 * @package PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIROperationDefinition extends FHIRDomainResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'OperationDefinition';

    /**
     * Whether the operation affects state = false (see [HTTP specification definition of idempotent](https://tools.ietf.org/html/rfc7231#section-4.2.2). Side effects such as producing audit trail entries do not count as 'changing state/content'.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $affectsState = null;

    /**
     * Indicates that this operation definition is a constraining profile on the base.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    public $base = null;

    /**
     * The name used to invoke the operation.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public $code = null;

    /**
     * Additional information about how to use this operation or named query.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public $comment = null;

    /**
     * Contact details to assist a user in finding and communicating with the publisher.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRContactDetail
     */
    public $contact = null;

    /**
     * The date  (and optionally time) when the operation definition was published. The date must change when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the operation definition changes.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $date = null;

    /**
     * A free text natural language description of the operation definition from a consumer's perspective.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public $description = null;

    /**
     * A Boolean value to indicate that this operation definition is authored for testing purposes (or education/evaluation/marketing) and is not intended to be used for genuine usage.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $experimental = null;

    /**
     * Additional validation information for the in parameters - a single profile that covers all the parameters. The profile is a constraint on the parameters resource as a whole.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    public $inputProfile = null;

    /**
     * Indicates whether this operation can be invoked on a particular instance of one of the given types.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $instance = null;

    /**
     * A legal or geographic region in which the operation definition is intended to be used.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $jurisdiction = null;

    /**
     * Whether this is an operation or a named query.
     * @var \PHPFHIRGenerated\FHIRElement\FHIROperationKind
     */
    public $kind = null;

    /**
     * A natural language name identifying the operation definition. This name should be usable as an identifier for the module by machine processing applications such as code generation.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $name = null;

    /**
     * Additional validation information for the out parameters - a single profile that covers all the parameters. The profile is a constraint on the parameters resource.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    public $outputProfile = null;

    /**
     * Defines an appropriate combination of parameters to use when invoking this operation, to help code generators when generating overloaded parameter sets for this operation.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionOverload
     */
    public $overload = null;

    /**
     * The parameters for the operation/query.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionParameter
     */
    public $parameter = null;

    /**
     * The name of the organization or individual that published the operation definition.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $publisher = null;

    /**
     * Explanation of why this operation definition is needed and why it has been designed as it has.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public $purpose = null;

    /**
     * The types on which this operation can be executed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public $resource = null;

    /**
     * The status of this operation definition. Enables tracking the life-cycle of the content.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPublicationStatus
     */
    public $status = null;

    /**
     * Indicates whether this operation or named query can be invoked at the system level (e.g. without needing to choose a resource type for the context).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $system = null;

    /**
     * A short, descriptive, user-friendly title for the operation definition.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $title = null;

    /**
     * Indicates whether this operation or named query can be invoked at the resource type level for any given resource type level (e.g. without needing to choose a specific resource id for the context).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $type = null;

    /**
     * An absolute URI that is used to identify this operation definition when it is referenced in a specification, model, design or an instance; also called its canonical identifier. This SHOULD be globally unique and SHOULD be a literal address at which at which an authoritative instance of this operation definition is (or will be) published. This URL can be the target of a canonical reference. It SHALL remain the same when the operation definition is stored on different servers.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $url = null;

    /**
     * The content was developed with a focus and intent of supporting the contexts that are listed. These terms may be used to assist with indexing and searching for appropriate operation definition instances.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUsageContext
     */
    public $useContext = null;

    /**
     * The identifier that is used to identify this version of the operation definition when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the operation definition author and is not expected to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not available. There is also no expectation that versions can be placed in a lexicographical sequence.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $version = null;

    /**
     * FHIROperationDefinition Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['affectsState'])) {
                $this->setAffectsState($data['affectsState']);
            }
            if (isset($data['base'])) {
                $this->setBase($data['base']);
            }
            if (isset($data['code'])) {
                $this->setCode($data['code']);
            }
            if (isset($data['comment'])) {
                $this->setComment($data['comment']);
            }
            if (isset($data['contact'])) {
                $this->setContact($data['contact']);
            }
            if (isset($data['date'])) {
                $this->setDate($data['date']);
            }
            if (isset($data['description'])) {
                $this->setDescription($data['description']);
            }
            if (isset($data['experimental'])) {
                $this->setExperimental($data['experimental']);
            }
            if (isset($data['inputProfile'])) {
                $this->setInputProfile($data['inputProfile']);
            }
            if (isset($data['instance'])) {
                $this->setInstance($data['instance']);
            }
            if (isset($data['jurisdiction'])) {
                $this->setJurisdiction($data['jurisdiction']);
            }
            if (isset($data['kind'])) {
                $this->setKind($data['kind']);
            }
            if (isset($data['name'])) {
                $this->setName($data['name']);
            }
            if (isset($data['outputProfile'])) {
                $this->setOutputProfile($data['outputProfile']);
            }
            if (isset($data['overload'])) {
                $this->setOverload($data['overload']);
            }
            if (isset($data['parameter'])) {
                $this->setParameter($data['parameter']);
            }
            if (isset($data['publisher'])) {
                $this->setPublisher($data['publisher']);
            }
            if (isset($data['purpose'])) {
                $this->setPurpose($data['purpose']);
            }
            if (isset($data['resource'])) {
                $this->setResource($data['resource']);
            }
            if (isset($data['status'])) {
                $this->setStatus($data['status']);
            }
            if (isset($data['system'])) {
                $this->setSystem($data['system']);
            }
            if (isset($data['title'])) {
                $this->setTitle($data['title']);
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
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIROperationDefinition::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Whether the operation affects state = false (see [HTTP specification definition of idempotent](https://tools.ietf.org/html/rfc7231#section-4.2.2). Side effects such as producing audit trail entries do not count as 'changing state/content'.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     * @return $this
     */
    public function setAffectsState($affectsState)
    {
        if (null === $affectsState) {
            return $this; 
        }
        if (is_scalar($affectsState)) {
            $affectsState = new FHIRBoolean($affectsState);
        }
        if (!($affectsState instanceof FHIRBoolean)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIROperationDefinition::setAffectsState - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($affectsState)
            ));
        }
        $this->affectsState = $affectsState;
        return $this;
    }

    /**
     * Whether the operation affects state = false (see [HTTP specification definition of idempotent](https://tools.ietf.org/html/rfc7231#section-4.2.2). Side effects such as producing audit trail entries do not count as 'changing state/content'.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getAffectsState()
    {
        return $this->affectsState;
    }


    /**
     * Indicates that this operation definition is a constraining profile on the base.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCanonical
     * @return $this
     */
    public function setBase($base)
    {
        if (null === $base) {
            return $this; 
        }
        if (is_scalar($base)) {
            $base = new FHIRCanonical($base);
        }
        if (!($base instanceof FHIRCanonical)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIROperationDefinition::setBase - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRCanonical or appropriate scalar value, %s seen.',
                gettype($base)
            ));
        }
        $this->base = $base;
        return $this;
    }

    /**
     * Indicates that this operation definition is a constraining profile on the base.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    public function getBase()
    {
        return $this->base;
    }


    /**
     * The name used to invoke the operation.
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
                'FHIROperationDefinition::setCode - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRCode or appropriate scalar value, %s seen.',
                gettype($code)
            ));
        }
        $this->code = $code;
        return $this;
    }

    /**
     * The name used to invoke the operation.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getCode()
    {
        return $this->code;
    }


    /**
     * Additional information about how to use this operation or named query.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     * @return $this
     */
    public function setComment($comment)
    {
        if (null === $comment) {
            return $this; 
        }
        if (is_scalar($comment)) {
            $comment = new FHIRMarkdown($comment);
        }
        if (!($comment instanceof FHIRMarkdown)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIROperationDefinition::setComment - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRMarkdown or appropriate scalar value, %s seen.',
                gettype($comment)
            ));
        }
        $this->comment = $comment;
        return $this;
    }

    /**
     * Additional information about how to use this operation or named query.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public function getComment()
    {
        return $this->comment;
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
     * The date  (and optionally time) when the operation definition was published. The date must change when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the operation definition changes.
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
                'FHIROperationDefinition::setDate - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($date)
            ));
        }
        $this->date = $date;
        return $this;
    }

    /**
     * The date  (and optionally time) when the operation definition was published. The date must change when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the operation definition changes.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getDate()
    {
        return $this->date;
    }


    /**
     * A free text natural language description of the operation definition from a consumer's perspective.
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
                'FHIROperationDefinition::setDescription - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRMarkdown or appropriate scalar value, %s seen.',
                gettype($description)
            ));
        }
        $this->description = $description;
        return $this;
    }

    /**
     * A free text natural language description of the operation definition from a consumer's perspective.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public function getDescription()
    {
        return $this->description;
    }


    /**
     * A Boolean value to indicate that this operation definition is authored for testing purposes (or education/evaluation/marketing) and is not intended to be used for genuine usage.
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
                'FHIROperationDefinition::setExperimental - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($experimental)
            ));
        }
        $this->experimental = $experimental;
        return $this;
    }

    /**
     * A Boolean value to indicate that this operation definition is authored for testing purposes (or education/evaluation/marketing) and is not intended to be used for genuine usage.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getExperimental()
    {
        return $this->experimental;
    }


    /**
     * Additional validation information for the in parameters - a single profile that covers all the parameters. The profile is a constraint on the parameters resource as a whole.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCanonical
     * @return $this
     */
    public function setInputProfile($inputProfile)
    {
        if (null === $inputProfile) {
            return $this; 
        }
        if (is_scalar($inputProfile)) {
            $inputProfile = new FHIRCanonical($inputProfile);
        }
        if (!($inputProfile instanceof FHIRCanonical)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIROperationDefinition::setInputProfile - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRCanonical or appropriate scalar value, %s seen.',
                gettype($inputProfile)
            ));
        }
        $this->inputProfile = $inputProfile;
        return $this;
    }

    /**
     * Additional validation information for the in parameters - a single profile that covers all the parameters. The profile is a constraint on the parameters resource as a whole.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    public function getInputProfile()
    {
        return $this->inputProfile;
    }


    /**
     * Indicates whether this operation can be invoked on a particular instance of one of the given types.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     * @return $this
     */
    public function setInstance($instance)
    {
        if (null === $instance) {
            return $this; 
        }
        if (is_scalar($instance)) {
            $instance = new FHIRBoolean($instance);
        }
        if (!($instance instanceof FHIRBoolean)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIROperationDefinition::setInstance - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($instance)
            ));
        }
        $this->instance = $instance;
        return $this;
    }

    /**
     * Indicates whether this operation can be invoked on a particular instance of one of the given types.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getInstance()
    {
        return $this->instance;
    }


    /**
     * A legal or geographic region in which the operation definition is intended to be used.
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
     * A legal or geographic region in which the operation definition is intended to be used.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getJurisdiction()
    {
        return $this->jurisdiction;
    }


    /**
     * Whether this is an operation or a named query.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIROperationKind
     * @return $this
     */
    public function setKind($kind)
    {
        if (null === $kind) {
            return $this; 
        }
        if (is_scalar($kind)) {
            $kind = new FHIROperationKind($kind);
        }
        if (!($kind instanceof FHIROperationKind)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIROperationDefinition::setKind - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIROperationKind or appropriate scalar value, %s seen.',
                gettype($kind)
            ));
        }
        $this->kind = $kind;
        return $this;
    }

    /**
     * Whether this is an operation or a named query.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIROperationKind
     */
    public function getKind()
    {
        return $this->kind;
    }


    /**
     * A natural language name identifying the operation definition. This name should be usable as an identifier for the module by machine processing applications such as code generation.
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
                'FHIROperationDefinition::setName - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($name)
            ));
        }
        $this->name = $name;
        return $this;
    }

    /**
     * A natural language name identifying the operation definition. This name should be usable as an identifier for the module by machine processing applications such as code generation.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }


    /**
     * Additional validation information for the out parameters - a single profile that covers all the parameters. The profile is a constraint on the parameters resource.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCanonical
     * @return $this
     */
    public function setOutputProfile($outputProfile)
    {
        if (null === $outputProfile) {
            return $this; 
        }
        if (is_scalar($outputProfile)) {
            $outputProfile = new FHIRCanonical($outputProfile);
        }
        if (!($outputProfile instanceof FHIRCanonical)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIROperationDefinition::setOutputProfile - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRCanonical or appropriate scalar value, %s seen.',
                gettype($outputProfile)
            ));
        }
        $this->outputProfile = $outputProfile;
        return $this;
    }

    /**
     * Additional validation information for the out parameters - a single profile that covers all the parameters. The profile is a constraint on the parameters resource.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    public function getOutputProfile()
    {
        return $this->outputProfile;
    }


    /**
     * Defines an appropriate combination of parameters to use when invoking this operation, to help code generators when generating overloaded parameter sets for this operation.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionOverload
     * @return $this
     */
    public function setOverload(FHIROperationDefinitionOverload $overload = null)
    {
        if (null === $overload) {
            return $this; 
        }
        $this->overload = $overload;
        return $this;
    }

    /**
     * Defines an appropriate combination of parameters to use when invoking this operation, to help code generators when generating overloaded parameter sets for this operation.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionOverload
     */
    public function getOverload()
    {
        return $this->overload;
    }


    /**
     * The parameters for the operation/query.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionParameter
     * @return $this
     */
    public function setParameter(FHIROperationDefinitionParameter $parameter = null)
    {
        if (null === $parameter) {
            return $this; 
        }
        $this->parameter = $parameter;
        return $this;
    }

    /**
     * The parameters for the operation/query.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionParameter
     */
    public function getParameter()
    {
        return $this->parameter;
    }


    /**
     * The name of the organization or individual that published the operation definition.
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
                'FHIROperationDefinition::setPublisher - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($publisher)
            ));
        }
        $this->publisher = $publisher;
        return $this;
    }

    /**
     * The name of the organization or individual that published the operation definition.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getPublisher()
    {
        return $this->publisher;
    }


    /**
     * Explanation of why this operation definition is needed and why it has been designed as it has.
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
                'FHIROperationDefinition::setPurpose - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRMarkdown or appropriate scalar value, %s seen.',
                gettype($purpose)
            ));
        }
        $this->purpose = $purpose;
        return $this;
    }

    /**
     * Explanation of why this operation definition is needed and why it has been designed as it has.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public function getPurpose()
    {
        return $this->purpose;
    }


    /**
     * The types on which this operation can be executed.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCode
     * @return $this
     */
    public function setResource($resource)
    {
        if (null === $resource) {
            return $this; 
        }
        if (is_scalar($resource)) {
            $resource = new FHIRCode($resource);
        }
        if (!($resource instanceof FHIRCode)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIROperationDefinition::setResource - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRCode or appropriate scalar value, %s seen.',
                gettype($resource)
            ));
        }
        $this->resource = $resource;
        return $this;
    }

    /**
     * The types on which this operation can be executed.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getResource()
    {
        return $this->resource;
    }


    /**
     * The status of this operation definition. Enables tracking the life-cycle of the content.
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
                'FHIROperationDefinition::setStatus - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRPublicationStatus or appropriate scalar value, %s seen.',
                gettype($status)
            ));
        }
        $this->status = $status;
        return $this;
    }

    /**
     * The status of this operation definition. Enables tracking the life-cycle of the content.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPublicationStatus
     */
    public function getStatus()
    {
        return $this->status;
    }


    /**
     * Indicates whether this operation or named query can be invoked at the system level (e.g. without needing to choose a resource type for the context).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     * @return $this
     */
    public function setSystem($system)
    {
        if (null === $system) {
            return $this; 
        }
        if (is_scalar($system)) {
            $system = new FHIRBoolean($system);
        }
        if (!($system instanceof FHIRBoolean)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIROperationDefinition::setSystem - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($system)
            ));
        }
        $this->system = $system;
        return $this;
    }

    /**
     * Indicates whether this operation or named query can be invoked at the system level (e.g. without needing to choose a resource type for the context).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getSystem()
    {
        return $this->system;
    }


    /**
     * A short, descriptive, user-friendly title for the operation definition.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setTitle($title)
    {
        if (null === $title) {
            return $this; 
        }
        if (is_scalar($title)) {
            $title = new FHIRString($title);
        }
        if (!($title instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIROperationDefinition::setTitle - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($title)
            ));
        }
        $this->title = $title;
        return $this;
    }

    /**
     * A short, descriptive, user-friendly title for the operation definition.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getTitle()
    {
        return $this->title;
    }


    /**
     * Indicates whether this operation or named query can be invoked at the resource type level for any given resource type level (e.g. without needing to choose a specific resource id for the context).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     * @return $this
     */
    public function setType($type)
    {
        if (null === $type) {
            return $this; 
        }
        if (is_scalar($type)) {
            $type = new FHIRBoolean($type);
        }
        if (!($type instanceof FHIRBoolean)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIROperationDefinition::setType - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($type)
            ));
        }
        $this->type = $type;
        return $this;
    }

    /**
     * Indicates whether this operation or named query can be invoked at the resource type level for any given resource type level (e.g. without needing to choose a specific resource id for the context).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getType()
    {
        return $this->type;
    }


    /**
     * An absolute URI that is used to identify this operation definition when it is referenced in a specification, model, design or an instance; also called its canonical identifier. This SHOULD be globally unique and SHOULD be a literal address at which at which an authoritative instance of this operation definition is (or will be) published. This URL can be the target of a canonical reference. It SHALL remain the same when the operation definition is stored on different servers.
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
                'FHIROperationDefinition::setUrl - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or appropriate scalar value, %s seen.',
                gettype($url)
            ));
        }
        $this->url = $url;
        return $this;
    }

    /**
     * An absolute URI that is used to identify this operation definition when it is referenced in a specification, model, design or an instance; also called its canonical identifier. This SHOULD be globally unique and SHOULD be a literal address at which at which an authoritative instance of this operation definition is (or will be) published. This URL can be the target of a canonical reference. It SHALL remain the same when the operation definition is stored on different servers.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getUrl()
    {
        return $this->url;
    }


    /**
     * The content was developed with a focus and intent of supporting the contexts that are listed. These terms may be used to assist with indexing and searching for appropriate operation definition instances.
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
     * The content was developed with a focus and intent of supporting the contexts that are listed. These terms may be used to assist with indexing and searching for appropriate operation definition instances.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUsageContext
     */
    public function getUseContext()
    {
        return $this->useContext;
    }


    /**
     * The identifier that is used to identify this version of the operation definition when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the operation definition author and is not expected to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not available. There is also no expectation that versions can be placed in a lexicographical sequence.
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
                'FHIROperationDefinition::setVersion - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($version)
            ));
        }
        $this->version = $version;
        return $this;
    }

    /**
     * The identifier that is used to identify this version of the operation definition when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the operation definition author and is not expected to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not available. There is also no expectation that versions can be placed in a lexicographical sequence.
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
        if (null !== ($v = $this->getAffectsState())) {
            $a['affectsState'] = $v;
        }
        if (null !== ($v = $this->getBase())) {
            $a['base'] = $v;
        }
        if (null !== ($v = $this->getCode())) {
            $a['code'] = $v;
        }
        if (null !== ($v = $this->getComment())) {
            $a['comment'] = $v;
        }
        if (null !== ($v = $this->getContact())) {
            $a['contact'] = $v;
        }
        if (null !== ($v = $this->getDate())) {
            $a['date'] = $v;
        }
        if (null !== ($v = $this->getDescription())) {
            $a['description'] = $v;
        }
        if (null !== ($v = $this->getExperimental())) {
            $a['experimental'] = $v;
        }
        if (null !== ($v = $this->getInputProfile())) {
            $a['inputProfile'] = $v;
        }
        if (null !== ($v = $this->getInstance())) {
            $a['instance'] = $v;
        }
        if (null !== ($v = $this->getJurisdiction())) {
            $a['jurisdiction'] = $v;
        }
        if (null !== ($v = $this->getKind())) {
            $a['kind'] = $v;
        }
        if (null !== ($v = $this->getName())) {
            $a['name'] = $v;
        }
        if (null !== ($v = $this->getOutputProfile())) {
            $a['outputProfile'] = $v;
        }
        if (null !== ($v = $this->getOverload())) {
            $a['overload'] = $v;
        }
        if (null !== ($v = $this->getParameter())) {
            $a['parameter'] = $v;
        }
        if (null !== ($v = $this->getPublisher())) {
            $a['publisher'] = $v;
        }
        if (null !== ($v = $this->getPurpose())) {
            $a['purpose'] = $v;
        }
        if (null !== ($v = $this->getResource())) {
            $a['resource'] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a['status'] = $v;
        }
        if (null !== ($v = $this->getSystem())) {
            $a['system'] = $v;
        }
        if (null !== ($v = $this->getTitle())) {
            $a['title'] = $v;
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
            $sxe = new \SimpleXMLElement('<OperationDefinition xmlns="http://hl7.org/fhir"></OperationDefinition>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}