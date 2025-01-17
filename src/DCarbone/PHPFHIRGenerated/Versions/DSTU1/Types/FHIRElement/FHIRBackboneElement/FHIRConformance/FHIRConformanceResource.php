<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConformance;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 17th, 2025 00:27+0000
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

use DCarbone\PHPFHIRGenerated\Constants;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\XMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\TypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Version;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionConstants;

/**
 * A conformance statement is a set of requirements for a desired implementation or
 * a description of how a target application fulfills those requirements in a
 * particular implementation.
 */
class FHIRConformanceResource extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_CONFORMANCE_DOT_RESOURCE;


    public const FIELD_TYPE = 'type';
    public const FIELD_TYPE_EXT = '_type';
    public const FIELD_PROFILE = 'profile';
    public const FIELD_OPERATION = 'operation';
    public const FIELD_READ_HISTORY = 'readHistory';
    public const FIELD_READ_HISTORY_EXT = '_readHistory';
    public const FIELD_UPDATE_CREATE = 'updateCreate';
    public const FIELD_UPDATE_CREATE_EXT = '_updateCreate';
    public const FIELD_SEARCH_INCLUDE = 'searchInclude';
    public const FIELD_SEARCH_INCLUDE_EXT = '_searchInclude';
    public const FIELD_SEARCH_PARAM = 'searchParam';

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A type of resource exposed via the restful interface.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCode 
     */
    protected FHIRCode $type;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A specification of the profile that describes the solution's support for the
     * resource, including any constraints on cardinality, bindings, lengths or other
     * limitations.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference 
     */
    protected FHIRResourceReference $profile;
    /**
     * A conformance statement is a set of requirements for a desired implementation or
     * a description of how a target application fulfills those requirements in a
     * particular implementation.
     *
     * Identifies a restful operation supported by the solution.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceOperation[] 
     */
    protected array $operation;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A flag for whether the server is able to return past versions as part of the
     * vRead operation.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $readHistory;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A flag to indicate that the server allows the client to create new identities on
     * the server. If the update operation is used (client) or allowed (server) to a
     * new location where a resource doesn't already exist. This means that the server
     * allows the client to create new identities on the server.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $updateCreate;
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A list of _include values supported by the server.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString[] 
     */
    protected array $searchInclude;
    /**
     * A conformance statement is a set of requirements for a desired implementation or
     * a description of how a target application fulfills those requirements in a
     * particular implementation.
     *
     * Additional search parameters for implementations to support and/or make use of.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceSearchParam[] 
     */
    protected array $searchParam;

    /** Default validation map for fields in type Conformance.Resource */
    private const _DEFAULT_VALIDATION_RULES = [
        self::FIELD_ID => [
            Constants::VALIDATE_PATTERN => '/^[a-z0-9\\-\\.]{1,36}$/',
        ],
        self::FIELD_TYPE => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_OPERATION => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /**
     * FHIRConformanceResource Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCode $type
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $profile
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceOperation[] $operation
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean $readHistory
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean $updateCreate
     * @param null|string[]|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive[]|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString[] $searchInclude
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceSearchParam[] $searchParam
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRIdPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|FHIRCodePrimitive|FHIRCode $type = null,
                                null|FHIRResourceReference $profile = null,
                                null|iterable $operation = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $readHistory = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $updateCreate = null,
                                null|iterable $searchInclude = null,
                                null|iterable $searchParam = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $type) {
            $this->setType($type);
        }
        if (null !== $profile) {
            $this->setProfile($profile);
        }
        if (null !== $operation) {
            $this->setOperation(...$operation);
        }
        if (null !== $readHistory) {
            $this->setReadHistory($readHistory);
        }
        if (null !== $updateCreate) {
            $this->setUpdateCreate($updateCreate);
        }
        if (null !== $searchInclude) {
            $this->setSearchInclude(...$searchInclude);
        }
        if (null !== $searchParam) {
            $this->setSearchParam(...$searchParam);
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
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A type of resource exposed via the restful interface.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCode
     */
    public function getType(): null|FHIRCode
    {
        return $this->type ?? null;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A type of resource exposed via the restful interface.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCode $type
     * @return static
     */
    public function setType(null|string|FHIRCodePrimitive|FHIRCode $type): self
    {
        if (null === $type) {
            unset($this->type);
            return $this;
        }
        if (!($type instanceof FHIRCode)) {
            $type = new FHIRCode(value: $type);
        }
        $this->type = $type;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A specification of the profile that describes the solution's support for the
     * resource, including any constraints on cardinality, bindings, lengths or other
     * limitations.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference
     */
    public function getProfile(): null|FHIRResourceReference
    {
        return $this->profile ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A specification of the profile that describes the solution's support for the
     * resource, including any constraints on cardinality, bindings, lengths or other
     * limitations.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $profile
     * @return static
     */
    public function setProfile(null|FHIRResourceReference $profile): self
    {
        if (null === $profile) {
            unset($this->profile);
            return $this;
        }
        $this->profile = $profile;
        return $this;
    }

    /**
     * A conformance statement is a set of requirements for a desired implementation or
     * a description of how a target application fulfills those requirements in a
     * particular implementation.
     *
     * Identifies a restful operation supported by the solution.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceOperation[]
     */
    public function getOperation(): array
    {
        return $this->operation ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceOperation>
     */
    public function getOperationIterator(): iterable
    {
        if (!isset($this->operation) || [] === $this->operation) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->operation);
    }

    /**
     * A conformance statement is a set of requirements for a desired implementation or
     * a description of how a target application fulfills those requirements in a
     * particular implementation.
     *
     * Identifies a restful operation supported by the solution.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceOperation $operation
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
     * A conformance statement is a set of requirements for a desired implementation or
     * a description of how a target application fulfills those requirements in a
     * particular implementation.
     *
     * Identifies a restful operation supported by the solution.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceOperation ...$operation
     * @return static
     */
    public function setOperation(FHIRConformanceOperation ...$operation): self
    {
        $this->operation = $operation;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A flag for whether the server is able to return past versions as part of the
     * vRead operation.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean
     */
    public function getReadHistory(): null|FHIRBoolean
    {
        return $this->readHistory ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A flag for whether the server is able to return past versions as part of the
     * vRead operation.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean $readHistory
     * @return static
     */
    public function setReadHistory(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $readHistory): self
    {
        if (null === $readHistory) {
            unset($this->readHistory);
            return $this;
        }
        if (!($readHistory instanceof FHIRBoolean)) {
            $readHistory = new FHIRBoolean(value: $readHistory);
        }
        $this->readHistory = $readHistory;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A flag to indicate that the server allows the client to create new identities on
     * the server. If the update operation is used (client) or allowed (server) to a
     * new location where a resource doesn't already exist. This means that the server
     * allows the client to create new identities on the server.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean
     */
    public function getUpdateCreate(): null|FHIRBoolean
    {
        return $this->updateCreate ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A flag to indicate that the server allows the client to create new identities on
     * the server. If the update operation is used (client) or allowed (server) to a
     * new location where a resource doesn't already exist. This means that the server
     * allows the client to create new identities on the server.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean $updateCreate
     * @return static
     */
    public function setUpdateCreate(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $updateCreate): self
    {
        if (null === $updateCreate) {
            unset($this->updateCreate);
            return $this;
        }
        if (!($updateCreate instanceof FHIRBoolean)) {
            $updateCreate = new FHIRBoolean(value: $updateCreate);
        }
        $this->updateCreate = $updateCreate;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A list of _include values supported by the server.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString[]
     */
    public function getSearchInclude(): array
    {
        return $this->searchInclude ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString>
     */
    public function getSearchIncludeIterator(): iterable
    {
        if (!isset($this->searchInclude) || [] === $this->searchInclude) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->searchInclude);
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A list of _include values supported by the server.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString $searchInclude
     * @return static
     */
    public function addSearchInclude(string|FHIRStringPrimitive|FHIRString $searchInclude): self
    {
        if (!($searchInclude instanceof FHIRString)) {
            $searchInclude = new FHIRString(value: $searchInclude);
        }
        if (!isset($this->searchInclude)) {
            $this->searchInclude = [];
        }
        $this->searchInclude[] = $searchInclude;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A list of _include values supported by the server.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString ...$searchInclude
     * @return static
     */
    public function setSearchInclude(string|FHIRStringPrimitive|FHIRString ...$searchInclude): self
    {
        $this->searchInclude = [];
        foreach($searchInclude as $v) {
            if ($v instanceof FHIRString) {
                $this->searchInclude[] = $v;
            } else {
                $this->searchInclude[] = new FHIRString(value: $v);
            }
        }
        return $this;
    }

    /**
     * A conformance statement is a set of requirements for a desired implementation or
     * a description of how a target application fulfills those requirements in a
     * particular implementation.
     *
     * Additional search parameters for implementations to support and/or make use of.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceSearchParam[]
     */
    public function getSearchParam(): array
    {
        return $this->searchParam ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceSearchParam>
     */
    public function getSearchParamIterator(): iterable
    {
        if (!isset($this->searchParam) || [] === $this->searchParam) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->searchParam);
    }

    /**
     * A conformance statement is a set of requirements for a desired implementation or
     * a description of how a target application fulfills those requirements in a
     * particular implementation.
     *
     * Additional search parameters for implementations to support and/or make use of.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceSearchParam $searchParam
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
     * A conformance statement is a set of requirements for a desired implementation or
     * a description of how a target application fulfills those requirements in a
     * particular implementation.
     *
     * Additional search parameters for implementations to support and/or make use of.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceSearchParam ...$searchParam
     * @return static
     */
    public function setSearchParam(FHIRConformanceSearchParam ...$searchParam): self
    {
        $this->searchParam = $searchParam;
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
        if (null !== ($v = $this->getType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TYPE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getOperation())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_OPERATION, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TYPE])) {
            $v = $this->getType();
            foreach($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE])) {
                        $errs[self::FIELD_TYPE] = [];
                    }
                    $errs[self::FIELD_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PROFILE])) {
            $v = $this->getProfile();
            foreach($validationRules[self::FIELD_PROFILE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PROFILE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PROFILE])) {
                        $errs[self::FIELD_PROFILE] = [];
                    }
                    $errs[self::FIELD_PROFILE][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_READ_HISTORY])) {
            $v = $this->getReadHistory();
            foreach($validationRules[self::FIELD_READ_HISTORY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_READ_HISTORY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_READ_HISTORY])) {
                        $errs[self::FIELD_READ_HISTORY] = [];
                    }
                    $errs[self::FIELD_READ_HISTORY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_UPDATE_CREATE])) {
            $v = $this->getUpdateCreate();
            foreach($validationRules[self::FIELD_UPDATE_CREATE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_UPDATE_CREATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_UPDATE_CREATE])) {
                        $errs[self::FIELD_UPDATE_CREATE] = [];
                    }
                    $errs[self::FIELD_UPDATE_CREATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SEARCH_INCLUDE])) {
            $v = $this->getSearchInclude();
            foreach($validationRules[self::FIELD_SEARCH_INCLUDE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SEARCH_INCLUDE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SEARCH_INCLUDE])) {
                        $errs[self::FIELD_SEARCH_INCLUDE] = [];
                    }
                    $errs[self::FIELD_SEARCH_INCLUDE][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceResource $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceResource
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRConformanceResource)) {
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
            } else if (self::FIELD_TYPE === $childName) {
                $v = new FHIRCode(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setType(FHIRCode::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PROFILE === $childName) {
                $v = new FHIRResourceReference();
                $type->setProfile(FHIRResourceReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_OPERATION === $childName) {
                $v = new FHIRConformanceOperation();
                $type->addOperation(FHIRConformanceOperation::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_READ_HISTORY === $childName) {
                $v = new FHIRBoolean(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setReadHistory(FHIRBoolean::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_UPDATE_CREATE === $childName) {
                $v = new FHIRBoolean(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setUpdateCreate(FHIRBoolean::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SEARCH_INCLUDE === $childName) {
                $v = new FHIRString(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->addSearchInclude(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SEARCH_PARAM === $childName) {
                $v = new FHIRConformanceSearchParam();
                $type->addSearchParam(FHIRConformanceSearchParam::xmlUnserialize($n, $v, $config));
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
        if (isset($attributes[self::FIELD_TYPE])) {
            $pt = $type->getType();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_TYPE]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setType(new FHIRCode(
                    value: (string)$attributes[self::FIELD_TYPE],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_READ_HISTORY])) {
            $pt = $type->getReadHistory();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_READ_HISTORY]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setReadHistory(new FHIRBoolean(
                    value: (string)$attributes[self::FIELD_READ_HISTORY],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_UPDATE_CREATE])) {
            $pt = $type->getUpdateCreate();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_UPDATE_CREATE]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setUpdateCreate(new FHIRBoolean(
                    value: (string)$attributes[self::FIELD_UPDATE_CREATE],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_SEARCH_INCLUDE])) {
            $v = new FHIRString(value: (string)$attributes[self::FIELD_SEARCH_INCLUDE],
                                                       xmlLocation: XMLLocationEnum::ATTRIBUTE);
            $type->addSearchInclude($v);
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
        if (null === $config) {
            $config = (new Version())->getConfig()->getSerializeConfig();
        }
        if (null === $xw) {
            $xw = new XMLWriter($config);
        }
        if (!$xw->isOpen()) {
            $xw->openMemory();
        }
        if (!$xw->isDocStarted()) {
            $docStarted = true;
            $xw->startDocument();
        }
        if (!$xw->isRootOpen()) {
            $rootOpened = true;
            $xw->openRootNode('ConformanceResource', $this->_getSourceXMLNS());
        }
        if (isset($this->type) && $this->type->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_TYPE, $this->type->getValue()?->getFormattedValue());
        }
        if (isset($this->readHistory) && $this->readHistory->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_READ_HISTORY, $this->readHistory->getValue()?->getFormattedValue());
        }
        if (isset($this->updateCreate) && $this->updateCreate->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_UPDATE_CREATE, $this->updateCreate->getValue()?->getFormattedValue());
        }
        if (isset($this->searchInclude)) {
           foreach($this->searchInclude as $v) {
                if ($v->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
                    $xw->writeAttribute(self::FIELD_SEARCH_INCLUDE, $v->getValue()?->getFormattedValue());
                    break;
                }
            }
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->type) && $this->type->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_TYPE);
            $this->type->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->profile)) {
            $xw->startElement(self::FIELD_PROFILE);
            $this->profile->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->operation)) {
            foreach ($this->operation as $v) {
                $xw->startElement(self::FIELD_OPERATION);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->readHistory) && $this->readHistory->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_READ_HISTORY);
            $this->readHistory->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->updateCreate) && $this->updateCreate->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_UPDATE_CREATE);
            $this->updateCreate->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->searchInclude)) {
            foreach($this->searchInclude as $v) {
                if ($v->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
                    $xw->startElement(self::FIELD_SEARCH_INCLUDE);
                    $v->xmlSerialize($xw, $config);
                    $xw->endElement();
                }
            }
        }
        if (isset($this->searchParam)) {
            foreach ($this->searchParam as $v) {
                $xw->startElement(self::FIELD_SEARCH_PARAM);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceResource $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceResource
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRConformanceResource)) {
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
        if (isset($json[self::FIELD_TYPE]) || isset($json[self::FIELD_TYPE_EXT]) || array_key_exists(self::FIELD_TYPE, $json) || array_key_exists(self::FIELD_TYPE_EXT, $json)) {
            $value = $json[self::FIELD_TYPE] ?? null;
            $ext = (isset($json[self::FIELD_TYPE_EXT]) && is_array($json[self::FIELD_TYPE_EXT])) ? $json[self::FIELD_TYPE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRCode) {
                    $type->setType($value);
                } else if (is_array($value)) {
                    $type->setType(new FHIRCode(array_merge($ext, $value)));
                } else {
                    $type->setType(new FHIRCode([FHIRCode::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setType(new FHIRCode($ext));
            } else {
                $type->setType(new FHIRCode(null));
            }
        }
        if (isset($json[self::FIELD_PROFILE]) || array_key_exists(self::FIELD_PROFILE, $json)) {
            if ($json[self::FIELD_PROFILE] instanceof FHIRResourceReference) {
                $type->setProfile($json[self::FIELD_PROFILE]);
            } else {
                $type->setProfile(new FHIRResourceReference($json[self::FIELD_PROFILE]));
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
        if (isset($json[self::FIELD_READ_HISTORY]) || isset($json[self::FIELD_READ_HISTORY_EXT]) || array_key_exists(self::FIELD_READ_HISTORY, $json) || array_key_exists(self::FIELD_READ_HISTORY_EXT, $json)) {
            $value = $json[self::FIELD_READ_HISTORY] ?? null;
            $ext = (isset($json[self::FIELD_READ_HISTORY_EXT]) && is_array($json[self::FIELD_READ_HISTORY_EXT])) ? $json[self::FIELD_READ_HISTORY_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $type->setReadHistory($value);
                } else if (is_array($value)) {
                    $type->setReadHistory(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $type->setReadHistory(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setReadHistory(new FHIRBoolean($ext));
            } else {
                $type->setReadHistory(new FHIRBoolean(null));
            }
        }
        if (isset($json[self::FIELD_UPDATE_CREATE]) || isset($json[self::FIELD_UPDATE_CREATE_EXT]) || array_key_exists(self::FIELD_UPDATE_CREATE, $json) || array_key_exists(self::FIELD_UPDATE_CREATE_EXT, $json)) {
            $value = $json[self::FIELD_UPDATE_CREATE] ?? null;
            $ext = (isset($json[self::FIELD_UPDATE_CREATE_EXT]) && is_array($json[self::FIELD_UPDATE_CREATE_EXT])) ? $json[self::FIELD_UPDATE_CREATE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $type->setUpdateCreate($value);
                } else if (is_array($value)) {
                    $type->setUpdateCreate(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $type->setUpdateCreate(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setUpdateCreate(new FHIRBoolean($ext));
            } else {
                $type->setUpdateCreate(new FHIRBoolean(null));
            }
        }
        if (isset($json[self::FIELD_SEARCH_INCLUDE]) || isset($json[self::FIELD_SEARCH_INCLUDE_EXT]) || array_key_exists(self::FIELD_SEARCH_INCLUDE, $json) || array_key_exists(self::FIELD_SEARCH_INCLUDE_EXT, $json)) {
            $value = $json[self::FIELD_SEARCH_INCLUDE] ?? null;
            $ext = (isset($json[self::FIELD_SEARCH_INCLUDE_EXT]) && is_array($json[self::FIELD_SEARCH_INCLUDE_EXT])) ? $json[self::FIELD_SEARCH_INCLUDE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->addSearchInclude($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRString) {
                            $type->addSearchInclude($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $type->addSearchInclude(new FHIRString(array_merge($v, $iext)));
                            } else {
                                $type->addSearchInclude(new FHIRString([FHIRString::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $type->addSearchInclude(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->addSearchInclude(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $type->addSearchInclude(new FHIRString($iext));
                }
            } else {
                $type->addSearchInclude(new FHIRString(null));
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
        return $type;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (isset($this->type)) {
            if (null !== ($val = $this->type->getValue())) {
                $out->type = $val;
            }
            $ext = $this->type->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_type = $ext;
            }
        }
        if (isset($this->profile)) {
            $out->profile = $this->profile;
        }
        if (isset($this->operation) && [] !== $this->operation) {
            $out->operation = $this->operation;
        }
        if (isset($this->readHistory)) {
            if (null !== ($val = $this->readHistory->getValue())) {
                $out->readHistory = $val;
            }
            $ext = $this->readHistory->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_readHistory = $ext;
            }
        }
        if (isset($this->updateCreate)) {
            if (null !== ($val = $this->updateCreate->getValue())) {
                $out->updateCreate = $val;
            }
            $ext = $this->updateCreate->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_updateCreate = $ext;
            }
        }
        if (isset($this->searchInclude) && [] !== $this->searchInclude) {
            $vals = [];
            $exts = [];
            foreach ($this->searchInclude as $v) {
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
                $out->searchInclude = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->_searchInclude = $exts;
            }
        }
        if (isset($this->searchParam) && [] !== $this->searchParam) {
            $out->searchParam = $this->searchParam;
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