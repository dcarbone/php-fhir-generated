<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRConformance;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 16th, 2025 01:05+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2025 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 *   Generated on Sat, Oct 24, 2015 07:41+1100 for FHIR v1.0.2
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\Constants;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\XMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\TypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRRestfulConformanceMode;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRTransactionMode;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Version;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\VersionConstants;

/**
 * A conformance statement is a set of capabilities of a FHIR Server that may be
 * used as a statement of actual server functionality or a statement of required or
 * desired server implementation.
 */
class FHIRConformanceRest extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_CONFORMANCE_DOT_REST;


    public const FIELD_MODE = 'mode';
    public const FIELD_MODE_EXT = '_mode';
    public const FIELD_DOCUMENTATION = 'documentation';
    public const FIELD_DOCUMENTATION_EXT = '_documentation';
    public const FIELD_SECURITY = 'security';
    public const FIELD_RESOURCE = 'resource';
    public const FIELD_INTERACTION = 'interaction';
    public const FIELD_TRANSACTION_MODE = 'transactionMode';
    public const FIELD_TRANSACTION_MODE_EXT = '_transactionMode';
    public const FIELD_SEARCH_PARAM = 'searchParam';
    public const FIELD_OPERATION = 'operation';
    public const FIELD_COMPARTMENT = 'compartment';
    public const FIELD_COMPARTMENT_EXT = '_compartment';

    /**
     * The mode of a RESTful conformance statement.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies whether this portion of the statement is describing ability to
     * initiate or receive restful operations.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRRestfulConformanceMode 
     */
    protected FHIRRestfulConformanceMode $mode;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Information about the system's restful capabilities that apply across all
     * applications, such as security.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $documentation;
    /**
     * A conformance statement is a set of capabilities of a FHIR Server that may be
     * used as a statement of actual server functionality or a statement of required or
     * desired server implementation.
     *
     * Information about security implementation from an interface perspective - what a
     * client needs to know.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceSecurity 
     */
    protected FHIRConformanceSecurity $security;
    /**
     * A conformance statement is a set of capabilities of a FHIR Server that may be
     * used as a statement of actual server functionality or a statement of required or
     * desired server implementation.
     *
     * A specification of the restful capabilities of the solution for a specific
     * resource type.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceResource[] 
     */
    protected array $resource;
    /**
     * A conformance statement is a set of capabilities of a FHIR Server that may be
     * used as a statement of actual server functionality or a statement of required or
     * desired server implementation.
     *
     * A specification of restful operations supported by the system.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceInteraction1[] 
     */
    protected array $interaction;
    /**
     * A code that indicates how transactions are supported.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A code that indicates how transactions are supported.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRTransactionMode 
     */
    protected FHIRTransactionMode $transactionMode;
    /**
     * A conformance statement is a set of capabilities of a FHIR Server that may be
     * used as a statement of actual server functionality or a statement of required or
     * desired server implementation.
     *
     * Search parameters that are supported for searching all resources for
     * implementations to support and/or make use of - either references to ones
     * defined in the specification, or additional ones defined for/by the
     * implementation.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceSearchParam[] 
     */
    protected array $searchParam;
    /**
     * A conformance statement is a set of capabilities of a FHIR Server that may be
     * used as a statement of actual server functionality or a statement of required or
     * desired server implementation.
     *
     * Definition of an operation or a named query and with its parameters and their
     * meaning and type.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceOperation[] 
     */
    protected array $operation;
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An absolute URI which is a reference to the definition of a compartment hosted
     * by the system.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRUri[] 
     */
    protected array $compartment;

    /** Default validation map for fields in type Conformance.Rest */
    private const _DEFAULT_VALIDATION_RULES = [
        self::FIELD_ID => [
            Constants::VALIDATE_PATTERN => '/^[A-Za-z0-9\\-\\.]{1,64}$/',
        ],
        self::FIELD_MODE => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_RESOURCE => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /**
     * FHIRConformanceRest Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRRestfulConformanceMode $mode
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString $documentation
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceSecurity $security
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceResource[] $resource
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceInteraction1[] $interaction
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRTransactionMode $transactionMode
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceSearchParam[] $searchParam
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceOperation[] $operation
     * @param null|string[]|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRUriPrimitive[]|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRUri[] $compartment
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRIdPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|FHIRRestfulConformanceMode $mode = null,
                                null|string|FHIRStringPrimitive|FHIRString $documentation = null,
                                null|FHIRConformanceSecurity $security = null,
                                null|iterable $resource = null,
                                null|iterable $interaction = null,
                                null|FHIRTransactionMode $transactionMode = null,
                                null|iterable $searchParam = null,
                                null|iterable $operation = null,
                                null|iterable $compartment = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $mode) {
            $this->setMode($mode);
        }
        if (null !== $documentation) {
            $this->setDocumentation($documentation);
        }
        if (null !== $security) {
            $this->setSecurity($security);
        }
        if (null !== $resource) {
            $this->setResource(...$resource);
        }
        if (null !== $interaction) {
            $this->setInteraction(...$interaction);
        }
        if (null !== $transactionMode) {
            $this->setTransactionMode($transactionMode);
        }
        if (null !== $searchParam) {
            $this->setSearchParam(...$searchParam);
        }
        if (null !== $operation) {
            $this->setOperation(...$operation);
        }
        if (null !== $compartment) {
            $this->setCompartment(...$compartment);
        }
    }

    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * The mode of a RESTful conformance statement.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies whether this portion of the statement is describing ability to
     * initiate or receive restful operations.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRRestfulConformanceMode
     */
    public function getMode(): null|FHIRRestfulConformanceMode
    {
        return $this->mode ?? null;
    }

    /**
     * The mode of a RESTful conformance statement.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies whether this portion of the statement is describing ability to
     * initiate or receive restful operations.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRRestfulConformanceMode $mode
     * @return static
     */
    public function setMode(null|FHIRRestfulConformanceMode $mode): self
    {
        if (null === $mode) {
            unset($this->mode);
            return $this;
        }
        $this->mode = $mode;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Information about the system's restful capabilities that apply across all
     * applications, such as security.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString
     */
    public function getDocumentation(): null|FHIRString
    {
        return $this->documentation ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Information about the system's restful capabilities that apply across all
     * applications, such as security.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString $documentation
     * @return static
     */
    public function setDocumentation(null|string|FHIRStringPrimitive|FHIRString $documentation): self
    {
        if (null === $documentation) {
            unset($this->documentation);
            return $this;
        }
        if (!($documentation instanceof FHIRString)) {
            $documentation = new FHIRString(value: $documentation);
        }
        $this->documentation = $documentation;
        return $this;
    }

    /**
     * A conformance statement is a set of capabilities of a FHIR Server that may be
     * used as a statement of actual server functionality or a statement of required or
     * desired server implementation.
     *
     * Information about security implementation from an interface perspective - what a
     * client needs to know.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceSecurity
     */
    public function getSecurity(): null|FHIRConformanceSecurity
    {
        return $this->security ?? null;
    }

    /**
     * A conformance statement is a set of capabilities of a FHIR Server that may be
     * used as a statement of actual server functionality or a statement of required or
     * desired server implementation.
     *
     * Information about security implementation from an interface perspective - what a
     * client needs to know.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceSecurity $security
     * @return static
     */
    public function setSecurity(null|FHIRConformanceSecurity $security): self
    {
        if (null === $security) {
            unset($this->security);
            return $this;
        }
        $this->security = $security;
        return $this;
    }

    /**
     * A conformance statement is a set of capabilities of a FHIR Server that may be
     * used as a statement of actual server functionality or a statement of required or
     * desired server implementation.
     *
     * A specification of the restful capabilities of the solution for a specific
     * resource type.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceResource[]
     */
    public function getResource(): array
    {
        return $this->resource ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceResource>
     */
    public function getResourceIterator(): iterable
    {
        if (!isset($this->resource) || [] === $this->resource) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->resource);
    }

    /**
     * A conformance statement is a set of capabilities of a FHIR Server that may be
     * used as a statement of actual server functionality or a statement of required or
     * desired server implementation.
     *
     * A specification of the restful capabilities of the solution for a specific
     * resource type.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceResource $resource
     * @return static
     */
    public function addResource(FHIRConformanceResource $resource): self
    {
        if (!isset($this->resource)) {
            $this->resource = [];
        }
        $this->resource[] = $resource;
        return $this;
    }

    /**
     * A conformance statement is a set of capabilities of a FHIR Server that may be
     * used as a statement of actual server functionality or a statement of required or
     * desired server implementation.
     *
     * A specification of the restful capabilities of the solution for a specific
     * resource type.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceResource ...$resource
     * @return static
     */
    public function setResource(FHIRConformanceResource ...$resource): self
    {
        $this->resource = $resource;
        return $this;
    }

    /**
     * A conformance statement is a set of capabilities of a FHIR Server that may be
     * used as a statement of actual server functionality or a statement of required or
     * desired server implementation.
     *
     * A specification of restful operations supported by the system.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceInteraction1[]
     */
    public function getInteraction(): array
    {
        return $this->interaction ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceInteraction1>
     */
    public function getInteractionIterator(): iterable
    {
        if (!isset($this->interaction) || [] === $this->interaction) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->interaction);
    }

    /**
     * A conformance statement is a set of capabilities of a FHIR Server that may be
     * used as a statement of actual server functionality or a statement of required or
     * desired server implementation.
     *
     * A specification of restful operations supported by the system.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceInteraction1 $interaction
     * @return static
     */
    public function addInteraction(FHIRConformanceInteraction1 $interaction): self
    {
        if (!isset($this->interaction)) {
            $this->interaction = [];
        }
        $this->interaction[] = $interaction;
        return $this;
    }

    /**
     * A conformance statement is a set of capabilities of a FHIR Server that may be
     * used as a statement of actual server functionality or a statement of required or
     * desired server implementation.
     *
     * A specification of restful operations supported by the system.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceInteraction1 ...$interaction
     * @return static
     */
    public function setInteraction(FHIRConformanceInteraction1 ...$interaction): self
    {
        $this->interaction = $interaction;
        return $this;
    }

    /**
     * A code that indicates how transactions are supported.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A code that indicates how transactions are supported.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRTransactionMode
     */
    public function getTransactionMode(): null|FHIRTransactionMode
    {
        return $this->transactionMode ?? null;
    }

    /**
     * A code that indicates how transactions are supported.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A code that indicates how transactions are supported.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRTransactionMode $transactionMode
     * @return static
     */
    public function setTransactionMode(null|FHIRTransactionMode $transactionMode): self
    {
        if (null === $transactionMode) {
            unset($this->transactionMode);
            return $this;
        }
        $this->transactionMode = $transactionMode;
        return $this;
    }

    /**
     * A conformance statement is a set of capabilities of a FHIR Server that may be
     * used as a statement of actual server functionality or a statement of required or
     * desired server implementation.
     *
     * Search parameters that are supported for searching all resources for
     * implementations to support and/or make use of - either references to ones
     * defined in the specification, or additional ones defined for/by the
     * implementation.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceSearchParam[]
     */
    public function getSearchParam(): array
    {
        return $this->searchParam ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceSearchParam>
     */
    public function getSearchParamIterator(): iterable
    {
        if (!isset($this->searchParam) || [] === $this->searchParam) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->searchParam);
    }

    /**
     * A conformance statement is a set of capabilities of a FHIR Server that may be
     * used as a statement of actual server functionality or a statement of required or
     * desired server implementation.
     *
     * Search parameters that are supported for searching all resources for
     * implementations to support and/or make use of - either references to ones
     * defined in the specification, or additional ones defined for/by the
     * implementation.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceSearchParam $searchParam
     * @return static
     */
    public function addSearchParam(FHIRConformanceSearchParam $searchParam): self
    {
        if (!isset($this->searchParam)) {
            $this->searchParam = [];
        }
        $this->searchParam[] = $searchParam;
        return $this;
    }

    /**
     * A conformance statement is a set of capabilities of a FHIR Server that may be
     * used as a statement of actual server functionality or a statement of required or
     * desired server implementation.
     *
     * Search parameters that are supported for searching all resources for
     * implementations to support and/or make use of - either references to ones
     * defined in the specification, or additional ones defined for/by the
     * implementation.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceSearchParam ...$searchParam
     * @return static
     */
    public function setSearchParam(FHIRConformanceSearchParam ...$searchParam): self
    {
        $this->searchParam = $searchParam;
        return $this;
    }

    /**
     * A conformance statement is a set of capabilities of a FHIR Server that may be
     * used as a statement of actual server functionality or a statement of required or
     * desired server implementation.
     *
     * Definition of an operation or a named query and with its parameters and their
     * meaning and type.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceOperation[]
     */
    public function getOperation(): array
    {
        return $this->operation ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceOperation>
     */
    public function getOperationIterator(): iterable
    {
        if (!isset($this->operation) || [] === $this->operation) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->operation);
    }

    /**
     * A conformance statement is a set of capabilities of a FHIR Server that may be
     * used as a statement of actual server functionality or a statement of required or
     * desired server implementation.
     *
     * Definition of an operation or a named query and with its parameters and their
     * meaning and type.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceOperation $operation
     * @return static
     */
    public function addOperation(FHIRConformanceOperation $operation): self
    {
        if (!isset($this->operation)) {
            $this->operation = [];
        }
        $this->operation[] = $operation;
        return $this;
    }

    /**
     * A conformance statement is a set of capabilities of a FHIR Server that may be
     * used as a statement of actual server functionality or a statement of required or
     * desired server implementation.
     *
     * Definition of an operation or a named query and with its parameters and their
     * meaning and type.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceOperation ...$operation
     * @return static
     */
    public function setOperation(FHIRConformanceOperation ...$operation): self
    {
        $this->operation = $operation;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An absolute URI which is a reference to the definition of a compartment hosted
     * by the system.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRUri[]
     */
    public function getCompartment(): array
    {
        return $this->compartment ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRUri>
     */
    public function getCompartmentIterator(): iterable
    {
        if (!isset($this->compartment) || [] === $this->compartment) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->compartment);
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An absolute URI which is a reference to the definition of a compartment hosted
     * by the system.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRUri $compartment
     * @return static
     */
    public function addCompartment(string|FHIRUriPrimitive|FHIRUri $compartment): self
    {
        if (!($compartment instanceof FHIRUri)) {
            $compartment = new FHIRUri(value: $compartment);
        }
        if (!isset($this->compartment)) {
            $this->compartment = [];
        }
        $this->compartment[] = $compartment;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An absolute URI which is a reference to the definition of a compartment hosted
     * by the system.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRUri ...$compartment
     * @return static
     */
    public function setCompartment(string|FHIRUriPrimitive|FHIRUri ...$compartment): self
    {
        $this->compartment = [];
        foreach($compartment as $v) {
            if ($v instanceof FHIRUri) {
                $this->compartment[] = $v;
            } else {
                $this->compartment[] = new FHIRUri(value: $v);
            }
        }
        return $this;
    }

    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules(): array
    {
        return self::_DEFAULT_VALIDATION_RULES;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by the FHIR specification this type
     * was generated from.
     *
     * An empty array indicates no validation errors occurred.
     *
     * @return array
     */
    public function _getValidationErrors(): array
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if (null !== ($v = $this->getMode())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MODE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getResource())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_RESOURCE, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODE])) {
            $v = $this->getMode();
            foreach($validationRules[self::FIELD_MODE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MODE])) {
                        $errs[self::FIELD_MODE] = [];
                    }
                    $errs[self::FIELD_MODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DOCUMENTATION])) {
            $v = $this->getDocumentation();
            foreach($validationRules[self::FIELD_DOCUMENTATION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DOCUMENTATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DOCUMENTATION])) {
                        $errs[self::FIELD_DOCUMENTATION] = [];
                    }
                    $errs[self::FIELD_DOCUMENTATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SECURITY])) {
            $v = $this->getSecurity();
            foreach($validationRules[self::FIELD_SECURITY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SECURITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SECURITY])) {
                        $errs[self::FIELD_SECURITY] = [];
                    }
                    $errs[self::FIELD_SECURITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RESOURCE])) {
            $v = $this->getResource();
            foreach($validationRules[self::FIELD_RESOURCE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_RESOURCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RESOURCE])) {
                        $errs[self::FIELD_RESOURCE] = [];
                    }
                    $errs[self::FIELD_RESOURCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INTERACTION])) {
            $v = $this->getInteraction();
            foreach($validationRules[self::FIELD_INTERACTION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_INTERACTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INTERACTION])) {
                        $errs[self::FIELD_INTERACTION] = [];
                    }
                    $errs[self::FIELD_INTERACTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TRANSACTION_MODE])) {
            $v = $this->getTransactionMode();
            foreach($validationRules[self::FIELD_TRANSACTION_MODE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TRANSACTION_MODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TRANSACTION_MODE])) {
                        $errs[self::FIELD_TRANSACTION_MODE] = [];
                    }
                    $errs[self::FIELD_TRANSACTION_MODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SEARCH_PARAM])) {
            $v = $this->getSearchParam();
            foreach($validationRules[self::FIELD_SEARCH_PARAM] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SEARCH_PARAM, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SEARCH_PARAM])) {
                        $errs[self::FIELD_SEARCH_PARAM] = [];
                    }
                    $errs[self::FIELD_SEARCH_PARAM][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OPERATION])) {
            $v = $this->getOperation();
            foreach($validationRules[self::FIELD_OPERATION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_OPERATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OPERATION])) {
                        $errs[self::FIELD_OPERATION] = [];
                    }
                    $errs[self::FIELD_OPERATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COMPARTMENT])) {
            $v = $this->getCompartment();
            foreach($validationRules[self::FIELD_COMPARTMENT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_COMPARTMENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COMPARTMENT])) {
                        $errs[self::FIELD_COMPARTMENT] = [];
                    }
                    $errs[self::FIELD_COMPARTMENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
            $v = $this->getModifierExtension();
            foreach($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EXTENSION, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ID, $rule, $constraint, $v);
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
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceRest $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceRest
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRConformanceRest)) {
            throw new \RuntimeException(sprintf(
                '%s::xmlUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null === $config) {
            $config = (new Version())->getConfig()->getUnserializeConfig();
        }
        if (is_string($element)) {
            $element = new \SimpleXMLElement($element, $config->getLibxmlOpts());
        }
        if (null !== ($ns = $element->getNamespaces()[''] ?? null)) {
            $type->_setSourceXMLNS((string)$ns);
        }
        foreach ($element->children() as $n) {
            $childName = $n->getName();
            if (self::FIELD_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ID === $childName) {
                $v = new FHIRIdPrimitive(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setId(FHIRIdPrimitive::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_MODE === $childName) {
                $v = new FHIRRestfulConformanceMode(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setMode(FHIRRestfulConformanceMode::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DOCUMENTATION === $childName) {
                $v = new FHIRString(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setDocumentation(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SECURITY === $childName) {
                $v = new FHIRConformanceSecurity();
                $type->setSecurity(FHIRConformanceSecurity::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_RESOURCE === $childName) {
                $v = new FHIRConformanceResource();
                $type->addResource(FHIRConformanceResource::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_INTERACTION === $childName) {
                $v = new FHIRConformanceInteraction1();
                $type->addInteraction(FHIRConformanceInteraction1::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_TRANSACTION_MODE === $childName) {
                $v = new FHIRTransactionMode(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setTransactionMode(FHIRTransactionMode::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SEARCH_PARAM === $childName) {
                $v = new FHIRConformanceSearchParam();
                $type->addSearchParam(FHIRConformanceSearchParam::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_OPERATION === $childName) {
                $v = new FHIRConformanceOperation();
                $type->addOperation(FHIRConformanceOperation::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_COMPARTMENT === $childName) {
                $v = new FHIRUri(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->addCompartment(FHIRUri::xmlUnserialize($n, $v, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ID]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setId(new FHIRIdPrimitive(
                    value: (string)$attributes[self::FIELD_ID],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_DOCUMENTATION])) {
            $pt = $type->getDocumentation();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DOCUMENTATION]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setDocumentation(new FHIRString(
                    value: (string)$attributes[self::FIELD_DOCUMENTATION],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_COMPARTMENT])) {
            $v = new FHIRUri(value: (string)$attributes[self::FIELD_COMPARTMENT],
                                                       xmlLocation: XMLLocationEnum::ATTRIBUTE);
            $type->addCompartment($v);
        }
        return $type;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\XMLWriter $xw
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Encoding\XMLWriter
     */
    public function xmlSerialize(null|XMLWriter $xw = null, null|SerializeConfig $config = null): XMLWriter
    {
        if (null === $xw) {
            $xw = new XMLWriter();
        }
        if (!$xw->isOpen()) {
            $xw->openMemory();
        }
        if (!$xw->isDocStarted()) {
            $docStarted = true;
            $xw->startDocument();
        }
        if (null === $config) {
            $config = (new Version())->getConfig()->getSerializeConfig();
        }
        if (!$xw->isRootOpen()) {
            $rootOpened = true;
            $xw->openRootNode($config, 'ConformanceRest', $this->_getSourceXMLNS());
        }
        if (isset($this->documentation) && $this->documentation->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_DOCUMENTATION, $this->documentation->getValue()?->getFormattedValue());
        }
        if (isset($this->compartment)) {
           foreach($this->compartment as $v) {
                if ($v->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
                    $xw->writeAttribute(self::FIELD_COMPARTMENT, $v->getValue()?->getFormattedValue());
                    break;
                }
            }
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->mode)) {
            $xw->startElement(self::FIELD_MODE);
            $this->mode->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->documentation) && $this->documentation->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_DOCUMENTATION);
            $this->documentation->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->security)) {
            $xw->startElement(self::FIELD_SECURITY);
            $this->security->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->resource)) {
            foreach ($this->resource as $v) {
                $xw->startElement(self::FIELD_RESOURCE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->interaction)) {
            foreach ($this->interaction as $v) {
                $xw->startElement(self::FIELD_INTERACTION);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->transactionMode)) {
            $xw->startElement(self::FIELD_TRANSACTION_MODE);
            $this->transactionMode->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->searchParam)) {
            foreach ($this->searchParam as $v) {
                $xw->startElement(self::FIELD_SEARCH_PARAM);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->operation)) {
            foreach ($this->operation as $v) {
                $xw->startElement(self::FIELD_OPERATION);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->compartment)) {
            foreach($this->compartment as $v) {
                if ($v->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
                    $xw->startElement(self::FIELD_COMPARTMENT);
                    $v->xmlSerialize($xw, $config);
                    $xw->endElement();
                }
            }
        }
        if (isset($rootOpened) && $rootOpened) {
            $xw->endElement();
        }
        if (isset($docStarted) && $docStarted) {
            $xw->endDocument();
        }
        return $xw;
    }

    /**
     * @param string|array|\stdClass $json
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceRest $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceRest
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRConformanceRest)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null === $config) {
            $config = (new Version())->getConfig()->getUnserializeConfig();
        }
        if (is_string($json)) {
            $json = json_decode(json: $json, associative: true, depth: $config->getJSONDecodeMaxDepth());
        } else if (is_object($json)) {
            $json = (array)$json;
        }
        parent::jsonUnserialize($json, $type, $config);
        if (isset($json[self::FIELD_MODE]) || isset($json[self::FIELD_MODE_EXT]) || array_key_exists(self::FIELD_MODE, $json) || array_key_exists(self::FIELD_MODE_EXT, $json)) {
            $value = $json[self::FIELD_MODE] ?? null;
            $ext = (isset($json[self::FIELD_MODE_EXT]) && is_array($json[self::FIELD_MODE_EXT])) ? $json[self::FIELD_MODE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRRestfulConformanceMode) {
                    $type->setMode($value);
                } else if (is_array($value)) {
                    $type->setMode(new FHIRRestfulConformanceMode(array_merge($ext, $value)));
                } else {
                    $type->setMode(new FHIRRestfulConformanceMode([FHIRRestfulConformanceMode::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setMode(new FHIRRestfulConformanceMode($ext));
            } else {
                $type->setMode(new FHIRRestfulConformanceMode(null));
            }
        }
        if (isset($json[self::FIELD_DOCUMENTATION]) || isset($json[self::FIELD_DOCUMENTATION_EXT]) || array_key_exists(self::FIELD_DOCUMENTATION, $json) || array_key_exists(self::FIELD_DOCUMENTATION_EXT, $json)) {
            $value = $json[self::FIELD_DOCUMENTATION] ?? null;
            $ext = (isset($json[self::FIELD_DOCUMENTATION_EXT]) && is_array($json[self::FIELD_DOCUMENTATION_EXT])) ? $json[self::FIELD_DOCUMENTATION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setDocumentation($value);
                } else if (is_array($value)) {
                    $type->setDocumentation(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setDocumentation(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setDocumentation(new FHIRString($ext));
            } else {
                $type->setDocumentation(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_SECURITY]) || array_key_exists(self::FIELD_SECURITY, $json)) {
            if ($json[self::FIELD_SECURITY] instanceof FHIRConformanceSecurity) {
                $type->setSecurity($json[self::FIELD_SECURITY]);
            } else {
                $type->setSecurity(new FHIRConformanceSecurity($json[self::FIELD_SECURITY]));
            }
        }
        if (isset($json[self::FIELD_RESOURCE]) || array_key_exists(self::FIELD_RESOURCE, $json)) {
            if (is_array($json[self::FIELD_RESOURCE])) {
                foreach($json[self::FIELD_RESOURCE] as $v) {
                    if ($v instanceof FHIRConformanceResource) {
                        $type->addResource($v);
                    } else {
                        $type->addResource(new FHIRConformanceResource($v));
                    }
                }
            } elseif ($json[self::FIELD_RESOURCE] instanceof FHIRConformanceResource) {
                $type->addResource($json[self::FIELD_RESOURCE]);
            } else {
                $type->addResource(new FHIRConformanceResource($json[self::FIELD_RESOURCE]));
            }
        }
        if (isset($json[self::FIELD_INTERACTION]) || array_key_exists(self::FIELD_INTERACTION, $json)) {
            if (is_array($json[self::FIELD_INTERACTION])) {
                foreach($json[self::FIELD_INTERACTION] as $v) {
                    if ($v instanceof FHIRConformanceInteraction1) {
                        $type->addInteraction($v);
                    } else {
                        $type->addInteraction(new FHIRConformanceInteraction1($v));
                    }
                }
            } elseif ($json[self::FIELD_INTERACTION] instanceof FHIRConformanceInteraction1) {
                $type->addInteraction($json[self::FIELD_INTERACTION]);
            } else {
                $type->addInteraction(new FHIRConformanceInteraction1($json[self::FIELD_INTERACTION]));
            }
        }
        if (isset($json[self::FIELD_TRANSACTION_MODE]) || isset($json[self::FIELD_TRANSACTION_MODE_EXT]) || array_key_exists(self::FIELD_TRANSACTION_MODE, $json) || array_key_exists(self::FIELD_TRANSACTION_MODE_EXT, $json)) {
            $value = $json[self::FIELD_TRANSACTION_MODE] ?? null;
            $ext = (isset($json[self::FIELD_TRANSACTION_MODE_EXT]) && is_array($json[self::FIELD_TRANSACTION_MODE_EXT])) ? $json[self::FIELD_TRANSACTION_MODE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRTransactionMode) {
                    $type->setTransactionMode($value);
                } else if (is_array($value)) {
                    $type->setTransactionMode(new FHIRTransactionMode(array_merge($ext, $value)));
                } else {
                    $type->setTransactionMode(new FHIRTransactionMode([FHIRTransactionMode::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setTransactionMode(new FHIRTransactionMode($ext));
            } else {
                $type->setTransactionMode(new FHIRTransactionMode(null));
            }
        }
        if (isset($json[self::FIELD_SEARCH_PARAM]) || array_key_exists(self::FIELD_SEARCH_PARAM, $json)) {
            if (is_array($json[self::FIELD_SEARCH_PARAM])) {
                foreach($json[self::FIELD_SEARCH_PARAM] as $v) {
                    if ($v instanceof FHIRConformanceSearchParam) {
                        $type->addSearchParam($v);
                    } else {
                        $type->addSearchParam(new FHIRConformanceSearchParam($v));
                    }
                }
            } elseif ($json[self::FIELD_SEARCH_PARAM] instanceof FHIRConformanceSearchParam) {
                $type->addSearchParam($json[self::FIELD_SEARCH_PARAM]);
            } else {
                $type->addSearchParam(new FHIRConformanceSearchParam($json[self::FIELD_SEARCH_PARAM]));
            }
        }
        if (isset($json[self::FIELD_OPERATION]) || array_key_exists(self::FIELD_OPERATION, $json)) {
            if (is_array($json[self::FIELD_OPERATION])) {
                foreach($json[self::FIELD_OPERATION] as $v) {
                    if ($v instanceof FHIRConformanceOperation) {
                        $type->addOperation($v);
                    } else {
                        $type->addOperation(new FHIRConformanceOperation($v));
                    }
                }
            } elseif ($json[self::FIELD_OPERATION] instanceof FHIRConformanceOperation) {
                $type->addOperation($json[self::FIELD_OPERATION]);
            } else {
                $type->addOperation(new FHIRConformanceOperation($json[self::FIELD_OPERATION]));
            }
        }
        if (isset($json[self::FIELD_COMPARTMENT]) || isset($json[self::FIELD_COMPARTMENT_EXT]) || array_key_exists(self::FIELD_COMPARTMENT, $json) || array_key_exists(self::FIELD_COMPARTMENT_EXT, $json)) {
            $value = $json[self::FIELD_COMPARTMENT] ?? null;
            $ext = (isset($json[self::FIELD_COMPARTMENT_EXT]) && is_array($json[self::FIELD_COMPARTMENT_EXT])) ? $json[self::FIELD_COMPARTMENT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $type->addCompartment($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRUri) {
                            $type->addCompartment($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $type->addCompartment(new FHIRUri(array_merge($v, $iext)));
                            } else {
                                $type->addCompartment(new FHIRUri([FHIRUri::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $type->addCompartment(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $type->addCompartment(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $type->addCompartment(new FHIRUri($iext));
                }
            } else {
                $type->addCompartment(new FHIRUri(null));
            }
        }
        return $type;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (isset($this->mode)) {
            if (null !== ($val = $this->mode->getValue())) {
                $out->mode = $val;
            }
            $ext = $this->mode->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_mode = $ext;
            }
        }
        if (isset($this->documentation)) {
            if (null !== ($val = $this->documentation->getValue())) {
                $out->documentation = $val;
            }
            $ext = $this->documentation->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_documentation = $ext;
            }
        }
        if (isset($this->security)) {
            $out->security = $this->security;
        }
        if (isset($this->resource) && [] !== $this->resource) {
            $out->resource = $this->resource;
        }
        if (isset($this->interaction) && [] !== $this->interaction) {
            $out->interaction = $this->interaction;
        }
        if (isset($this->transactionMode)) {
            if (null !== ($val = $this->transactionMode->getValue())) {
                $out->transactionMode = $val;
            }
            $ext = $this->transactionMode->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_transactionMode = $ext;
            }
        }
        if (isset($this->searchParam) && [] !== $this->searchParam) {
            $out->searchParam = $this->searchParam;
        }
        if (isset($this->operation) && [] !== $this->operation) {
            $out->operation = $this->operation;
        }
        if (isset($this->compartment) && [] !== $this->compartment) {
            $vals = [];
            $exts = [];
            foreach ($this->compartment as $v) {
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->value);
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->compartment = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->_compartment = $exts;
            }
        }
        return $out;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return self::FHIR_TYPE_NAME;
    }
}