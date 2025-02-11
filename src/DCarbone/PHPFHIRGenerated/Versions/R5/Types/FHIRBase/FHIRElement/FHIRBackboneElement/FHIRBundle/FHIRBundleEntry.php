<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRBundle;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 11th, 2025 15:51+0000
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
 *  * #%L
 *  * org.hl7.fhir.r5
 *  * %%
 *  * Copyright (C) 2014 - 2019 Health Level 7
 *  * %%
 *  * Licensed under the Apache License, Version 2.0 (the "License");
 *  * you may not use this file except in compliance with the License.
 *  * You may obtain a copy of the License at
 *  *
 *  *      http://www.apache.org/licenses/LICENSE-2.0
 *  *
 *  * Unless required by applicable law or agreed to in writing, software
 *  * distributed under the License is distributed on an "AS IS" BASIS,
 *  * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  * See the License for the specific language governing permissions and
 *  * limitations under the License.
 *  * #L%
 *  
 * 
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
 *   Generated on Sun, Mar 26, 2023 15:21+1100 for FHIR v5.0.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\Constants;
use DCarbone\PHPFHIRGenerated\Encoding\JSONSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRResourceContainer;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Version;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionTypeMap;

/**
 * A container for a collection of resources.
 */
class FHIRBundleEntry extends FHIRBackboneElement
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_BUNDLE_DOT_ENTRY;

    /* class_default.php:50 */
    public const FIELD_LINK = 'link';
    public const FIELD_FULL_URL = 'fullUrl';
    public const FIELD_FULL_URL_EXT = '_fullUrl';
    public const FIELD_RESOURCE = 'resource';
    public const FIELD_SEARCH = 'search';
    public const FIELD_REQUEST = 'request';
    public const FIELD_RESPONSE = 'response';

    /* class_default.php:69 */
    // The default validation rules for this type as defined in the FHIR schema used to generate this code.
    private const _FHIR_VALIDATION_RULES = [
    ];

    /* class_default.php:91 */
    private array $_valueXMLLocations = [
        self::FIELD_FULL_URL => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:107 */
    /**
     * A container for a collection of resources.
     *
     * A series of links that provide context to this entry.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleLink[] 
     */
    protected array $link;
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The Absolute URL for the resource. Except for transactions and batches, each
     * entry in a Bundle must have a fullUrl. The fullUrl SHALL NOT disagree with the
     * id in the resource - i.e. if the fullUrl is not a urn:uuid, the URL shall be
     * version-independent URL consistent with the Resource.id. The fullUrl is a
     * version independent reference to the resource. Even when not required, fullUrl
     * MAY be set to a urn:uuid to allow referencing entries in a transaction. The
     * fullUrl can be an arbitrary URI and is not limited to urn:uuid, urn:oid, http,
     * and https. The fullUrl element SHALL have a value except when: * invoking a
     * create * invoking or responding to an operation where the body is not a single
     * identified resource * invoking or returning the results of a search or history
     * operation.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri 
     */
    protected FHIRUri $fullUrl;
    /**
     * (choose any one of the elements, but only one)
     *
     * The Resource for the entry. The purpose/meaning of the resource is determined by
     * the Bundle.type. This is allowed to be a Parameters resource if and only if it
     * is referenced by something else within the Bundle that provides context/meaning.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\VersionContainedTypeInterface 
     */
    protected VersionContainedTypeInterface $resource;
    /**
     * A container for a collection of resources.
     *
     * Information about the search process that lead to the creation of this entry.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleSearch 
     */
    protected FHIRBundleSearch $search;
    /**
     * A container for a collection of resources.
     *
     * Additional information about how this entry should be processed as part of a
     * transaction or batch. For history, it shows how the entry was processed to
     * create the version contained in the entry.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleRequest 
     */
    protected FHIRBundleRequest $request;
    /**
     * A container for a collection of resources.
     *
     * Indicates the results of processing the corresponding 'request' entry in the
     * batch or transaction being responded to or what the results of an operation
     * where when returning history.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleResponse 
     */
    protected FHIRBundleResponse $response;

    /* constructor.php:61 */
    /**
     * FHIRBundleEntry Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleLink[] $link
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri $fullUrl
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRResourceContainer|\DCarbone\PHPFHIRGenerated\Versions\R5\VersionContainedTypeInterface $resource
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleSearch $search
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleRequest $request
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleResponse $response
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|iterable $link = null,
                                null|string|FHIRUriPrimitive|FHIRUri $fullUrl = null,
                                null|FHIRResourceContainer|VersionContainedTypeInterface $resource = null,
                                null|FHIRBundleSearch $search = null,
                                null|FHIRBundleRequest $request = null,
                                null|FHIRBundleResponse $response = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $link) {
            $this->setLink(...$link);
        }
        if (null !== $fullUrl) {
            $this->setFullUrl($fullUrl);
        }
        if (null !== $resource) {
            $this->setResource($resource);
        }
        if (null !== $search) {
            $this->setSearch($search);
        }
        if (null !== $request) {
            $this->setRequest($request);
        }
        if (null !== $response) {
            $this->setResponse($response);
        }
    }

    /* class_default.php:139 */
    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:165 */
    /**
     * A container for a collection of resources.
     *
     * A series of links that provide context to this entry.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleLink[]
     */
    public function getLink(): array
    {
        return $this->link ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleLink>
     */
    public function getLinkIterator(): iterable
    {
        if (!isset($this->link)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->link);
    }

    /**
     * A container for a collection of resources.
     *
     * A series of links that provide context to this entry.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleLink $link
     * @return static
     */
    public function addLink(FHIRBundleLink $link): self
    {
        if (!isset($this->link)) {
            $this->link = [];
        }
        $this->link[] = $link;
        return $this;
    }

    /**
     * A container for a collection of resources.
     *
     * A series of links that provide context to this entry.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleLink ...$link
     * @return static
     */
    public function setLink(FHIRBundleLink ...$link): self
    {
        if ([] === $link) {
            unset($this->link);
            return $this;
        }
        $this->link = $link;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The Absolute URL for the resource. Except for transactions and batches, each
     * entry in a Bundle must have a fullUrl. The fullUrl SHALL NOT disagree with the
     * id in the resource - i.e. if the fullUrl is not a urn:uuid, the URL shall be
     * version-independent URL consistent with the Resource.id. The fullUrl is a
     * version independent reference to the resource. Even when not required, fullUrl
     * MAY be set to a urn:uuid to allow referencing entries in a transaction. The
     * fullUrl can be an arbitrary URI and is not limited to urn:uuid, urn:oid, http,
     * and https. The fullUrl element SHALL have a value except when: * invoking a
     * create * invoking or responding to an operation where the body is not a single
     * identified resource * invoking or returning the results of a search or history
     * operation.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri
     */
    public function getFullUrl(): null|FHIRUri
    {
        return $this->fullUrl ?? null;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The Absolute URL for the resource. Except for transactions and batches, each
     * entry in a Bundle must have a fullUrl. The fullUrl SHALL NOT disagree with the
     * id in the resource - i.e. if the fullUrl is not a urn:uuid, the URL shall be
     * version-independent URL consistent with the Resource.id. The fullUrl is a
     * version independent reference to the resource. Even when not required, fullUrl
     * MAY be set to a urn:uuid to allow referencing entries in a transaction. The
     * fullUrl can be an arbitrary URI and is not limited to urn:uuid, urn:oid, http,
     * and https. The fullUrl element SHALL have a value except when: * invoking a
     * create * invoking or responding to an operation where the body is not a single
     * identified resource * invoking or returning the results of a search or history
     * operation.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri $fullUrl
     * @return static
     */
    public function setFullUrl(null|string|FHIRUriPrimitive|FHIRUri $fullUrl): self
    {
        if (null === $fullUrl) {
            unset($this->fullUrl);
            return $this;
        }
        if (!($fullUrl instanceof FHIRUri)) {
            $fullUrl = new FHIRUri(value: $fullUrl);
        }
        $this->fullUrl = $fullUrl;
        return $this;
    }

    /**
     * (choose any one of the elements, but only one)
     *
     * The Resource for the entry. The purpose/meaning of the resource is determined by
     * the Bundle.type. This is allowed to be a Parameters resource if and only if it
     * is referenced by something else within the Bundle that provides context/meaning.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\VersionContainedTypeInterface
     */
    public function getResource(): null|VersionContainedTypeInterface
    {
        return $this->resource ?? null;
    }

    /**
     * (choose any one of the elements, but only one)
     *
     * The Resource for the entry. The purpose/meaning of the resource is determined by
     * the Bundle.type. This is allowed to be a Parameters resource if and only if it
     * is referenced by something else within the Bundle that provides context/meaning.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRResourceContainer|\DCarbone\PHPFHIRGenerated\Versions\R5\VersionContainedTypeInterface $resource
     * @return static
     */
    public function setResource(null|FHIRResourceContainer|VersionContainedTypeInterface $resource): self
    {
        if (null === $resource) {
            unset($this->resource);
            return $this;
        }
        if ($resource instanceof FHIRResourceContainer) {
            $resource = $resource->getContainedType();
        }
        $this->resource = $resource;
        return $this;
    }

    /**
     * A container for a collection of resources.
     *
     * Information about the search process that lead to the creation of this entry.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleSearch
     */
    public function getSearch(): null|FHIRBundleSearch
    {
        return $this->search ?? null;
    }

    /**
     * A container for a collection of resources.
     *
     * Information about the search process that lead to the creation of this entry.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleSearch $search
     * @return static
     */
    public function setSearch(null|FHIRBundleSearch $search): self
    {
        if (null === $search) {
            unset($this->search);
            return $this;
        }
        $this->search = $search;
        return $this;
    }

    /**
     * A container for a collection of resources.
     *
     * Additional information about how this entry should be processed as part of a
     * transaction or batch. For history, it shows how the entry was processed to
     * create the version contained in the entry.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleRequest
     */
    public function getRequest(): null|FHIRBundleRequest
    {
        return $this->request ?? null;
    }

    /**
     * A container for a collection of resources.
     *
     * Additional information about how this entry should be processed as part of a
     * transaction or batch. For history, it shows how the entry was processed to
     * create the version contained in the entry.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleRequest $request
     * @return static
     */
    public function setRequest(null|FHIRBundleRequest $request): self
    {
        if (null === $request) {
            unset($this->request);
            return $this;
        }
        $this->request = $request;
        return $this;
    }

    /**
     * A container for a collection of resources.
     *
     * Indicates the results of processing the corresponding 'request' entry in the
     * batch or transaction being responded to or what the results of an operation
     * where when returning history.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleResponse
     */
    public function getResponse(): null|FHIRBundleResponse
    {
        return $this->response ?? null;
    }

    /**
     * A container for a collection of resources.
     *
     * Indicates the results of processing the corresponding 'request' entry in the
     * batch or transaction being responded to or what the results of an operation
     * where when returning history.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleResponse $response
     * @return static
     */
    public function setResponse(null|FHIRBundleResponse $response): self
    {
        if (null === $response) {
            unset($this->response);
            return $this;
        }
        $this->response = $response;
        return $this;
    }

    /* class_default.php:192 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleEntry $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleEntry
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRBundleEntry)) {
            throw new \RuntimeException(sprintf(
                '%s::xmlUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        foreach ($element->children() as $ce) {
            $cen = $ce->getName();
            if (self::FIELD_EXTENSION === $cen) {
                $type->addExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ID === $cen) {
                $va = $ce->attributes()[FHIRStringPrimitive::FIELD_VALUE] ?? null;
                if (null !== $va) {
                    $type->setId((string)$va);
                    $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::ELEMENT_ATTRIBUTE);
                } else {
                    $type->setId((string)$ce);
                    $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::ELEMENT_VALUE);
                }
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_LINK === $cen) {
                $type->addLink(FHIRBundleLink::xmlUnserialize($ce, $config));
            } else if (self::FIELD_FULL_URL === $cen) {
                $type->setFullUrl(FHIRUri::xmlUnserialize($ce, $config));
            } else if (self::FIELD_RESOURCE === $cen) {
                foreach ($ce->children() as $cen) {
                    /** @var \DCarbone\PHPFHIRGenerated\Versions\R5\VersionContainedTypeInterface $cn */
                    $cn = VersionTypeMap::getContainedTypeClassNameFromXML($cen);
                    $type->setResource($cn::xmlUnserialize($cen, $config));
                }
            } else if (self::FIELD_SEARCH === $cen) {
                $type->setSearch(FHIRBundleSearch::xmlUnserialize($ce, $config));
            } else if (self::FIELD_REQUEST === $cen) {
                $type->setRequest(FHIRBundleRequest::xmlUnserialize($ce, $config));
            } else if (self::FIELD_RESPONSE === $cen) {
                $type->setResponse(FHIRBundleResponse::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID]);
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_FULL_URL])) {
            if (isset($type->fullUrl)) {
                $type->fullUrl->setValue((string)$attributes[self::FIELD_FULL_URL]);
            } else {
                $type->setFullUrl((string)$attributes[self::FIELD_FULL_URL]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_FULL_URL, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        return $type;
    }

    /**
     * @param \DCarbone\PHPFHIRGenerated\Encoding\XMLWriter $xw
     * @param \DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig $config
     */
    public function xmlSerialize(XMLWriter $xw,
                                 SerializeConfig $config): void
    {
        if (isset($this->fullUrl) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_FULL_URL]) {
            $xw->writeAttribute(self::FIELD_FULL_URL, $this->fullUrl->_getValueAsString());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->link)) {
            foreach ($this->link as $v) {
                $xw->startElement(self::FIELD_LINK);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->fullUrl)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_FULL_URL]
                || $this->fullUrl->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_FULL_URL);
            $this->fullUrl->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_FULL_URL]);
            $xw->endElement();
        }
        if (isset($this->resource)) {
            $xw->startElement(self::FIELD_RESOURCE);
            $xw->startElement($this->resource->_getFHIRTypeName());
            $this->resource->xmlSerialize($xw, $config);
            $xw->endElement();
            $xw->endElement();
        }
        if (isset($this->search)) {
            $xw->startElement(self::FIELD_SEARCH);
            $this->search->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->request)) {
            $xw->startElement(self::FIELD_REQUEST);
            $this->request->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->response)) {
            $xw->startElement(self::FIELD_RESPONSE);
            $this->response->xmlSerialize($xw, $config);
            $xw->endElement();
        }
    }

    /**
     * @param \stdClass $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleEntry $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleEntry
     * @throws \Exception
     */
    public static function jsonUnserialize(\stdClass $json,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRBundleEntry)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json->link) || property_exists($json, self::FIELD_LINK)) {
            if (is_object($json->link)) {
                $vals = [$json->link];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_LINK, true);
            } else {
                $vals = $json->link;
            }
            foreach($vals as $v) {
                $type->addLink(FHIRBundleLink::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->fullUrl)
            || isset($json->_fullUrl)
            || property_exists($json, self::FIELD_FULL_URL)
            || property_exists($json, self::FIELD_FULL_URL_EXT)) {
            $v = $json->_fullUrl ?? new \stdClass();
            $v->value = $json->fullUrl ?? null;
            $type->setFullUrl(FHIRUri::jsonUnserialize($v, $config));
        }
        if (isset($json->resource)) {
            $typeClassName = VersionTypeMap::getContainedTypeClassNameFromJSON($json->resource);
            $v = $json->resource;
            unset($v->resourceType);
            $type->setResource($typeClassName::jsonUnserialize($v, $config));
        }
        if (isset($json->search) || property_exists($json, self::FIELD_SEARCH)) {
            if (is_array($json->search)) {
                $type->setSearch(FHIRBundleSearch::jsonUnserialize(reset($json->search), $config));
            } else {
                $type->setSearch(FHIRBundleSearch::jsonUnserialize($json->search, $config));
            }
        }
        if (isset($json->request) || property_exists($json, self::FIELD_REQUEST)) {
            if (is_array($json->request)) {
                $type->setRequest(FHIRBundleRequest::jsonUnserialize(reset($json->request), $config));
            } else {
                $type->setRequest(FHIRBundleRequest::jsonUnserialize($json->request, $config));
            }
        }
        if (isset($json->response) || property_exists($json, self::FIELD_RESPONSE)) {
            if (is_array($json->response)) {
                $type->setResponse(FHIRBundleResponse::jsonUnserialize(reset($json->response), $config));
            } else {
                $type->setResponse(FHIRBundleResponse::jsonUnserialize($json->response, $config));
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
        if (isset($this->link) && [] !== $this->link) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_LINK) && 1 === count($this->link)) {
                $out->link = $this->link[0];
            } else {
                $out->link = $this->link;
            }
        }
        if (isset($this->fullUrl)) {
            if (null !== ($val = $this->fullUrl->getValue())) {
                $out->fullUrl = $val;
            }
            if ($this->fullUrl->_nonValueFieldDefined()) {
                $ext = $this->fullUrl->jsonSerialize();
                unset($ext->value);
                $out->_fullUrl = $ext;
            }
        }
        if (isset($this->resource)) {
            $out->resource = $this->resource;
        }
        if (isset($this->search)) {
            $out->search = $this->search;
        }
        if (isset($this->request)) {
            $out->request = $this->request;
        }
        if (isset($this->response)) {
            $out->response = $this->response;
        }
        return $out;
    }
}