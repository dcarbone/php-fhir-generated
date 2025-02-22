<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 22nd, 2025 18:56+0000
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
use DCarbone\PHPFHIRGenerated\Encoding\JSONSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInstant;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCanonicalPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRInstantPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;

/**
 * The metadata about a resource. This is content in the resource that is
 * maintained by the infrastructure. Changes to the content might not always be
 * associated with version changes to the resource.
 * If the element is present, it must have a value for at least one of the defined
 * elements, an \@id referenced from the Narrative, or extensions
 */
class FHIRMeta extends FHIRDataType
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_META;

    /* class_default.php:56 */
    public const FIELD_VERSION_ID = 'versionId';
    public const FIELD_VERSION_ID_EXT = '_versionId';
    public const FIELD_LAST_UPDATED = 'lastUpdated';
    public const FIELD_LAST_UPDATED_EXT = '_lastUpdated';
    public const FIELD_SOURCE = 'source';
    public const FIELD_SOURCE_EXT = '_source';
    public const FIELD_PROFILE = 'profile';
    public const FIELD_PROFILE_EXT = '_profile';
    public const FIELD_SECURITY = 'security';
    public const FIELD_TAG = 'tag';

    /* class_default.php:75 */
    private const _FHIR_VALIDATION_RULES = [
    ];

    /* class_default.php:96 */
    private array $_valueXMLLocations = [
        self::FIELD_VERSION_ID => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_LAST_UPDATED => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_SOURCE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:112 */
    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The version specific identifier, as it appears in the version portion of the
     * URL. This value changes when the resource is created, updated, or deleted.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId 
     */
    protected FHIRId $versionId;
    /**
     * An instant in time - known at least to the second
     * Note: This is intended for where precisely observed times are required,
     * typically system logs etc., and not human-reported times - for them, see date
     * and dateTime (which can be as precise as instant, but is not required to be)
     * below. UTC offset is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When the resource last changed - e.g. when the version changed.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInstant 
     */
    protected FHIRInstant $lastUpdated;
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A uri that identifies the source system of the resource. This provides a minimal
     * amount of [[[Provenance]]] information that can be used to track or
     * differentiate the source of information in the resource. The source may identify
     * another FHIR server, document, message, database, etc.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri 
     */
    protected FHIRUri $source;
    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A list of profiles (references to [[[StructureDefinition]]] resources) that this
     * resource claims to conform to. The URL is a reference to
     * [[[StructureDefinition.url]]].
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical[] 
     */
    protected array $profile;
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Security labels applied to this resource. These tags connect specific resources
     * to the overall security policy and infrastructure.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding[] 
     */
    protected array $security;
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Tags applied to this resource. Tags are intended to be used to identify and
     * relate resources to process and workflow, and applications are not required to
     * consider the tags when interpreting the meaning of a resource.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding[] 
     */
    protected array $tag;

    /* constructor.php:61 */
    /**
     * FHIRMeta Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive $id
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId $versionId
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRInstantPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInstant $lastUpdated
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri $source
     * @param null|string[]|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCanonicalPrimitive[]|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical[] $profile
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding[] $security
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding[] $tag
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|string|FHIRIdPrimitive|FHIRId $versionId = null,
                                null|string|\DateTimeInterface|FHIRInstantPrimitive|FHIRInstant $lastUpdated = null,
                                null|string|FHIRUriPrimitive|FHIRUri $source = null,
                                null|iterable $profile = null,
                                null|iterable $security = null,
                                null|iterable $tag = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            fhirComments: $fhirComments);
        if (null !== $versionId) {
            $this->setVersionId($versionId);
        }
        if (null !== $lastUpdated) {
            $this->setLastUpdated($lastUpdated);
        }
        if (null !== $source) {
            $this->setSource($source);
        }
        if (null !== $profile) {
            $this->setProfile(...$profile);
        }
        if (null !== $security) {
            $this->setSecurity(...$security);
        }
        if (null !== $tag) {
            $this->setTag(...$tag);
        }
    }

    /* class_default.php:144 */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:173 */
    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The version specific identifier, as it appears in the version portion of the
     * URL. This value changes when the resource is created, updated, or deleted.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId
     */
    public function getVersionId(): null|FHIRId
    {
        return $this->versionId ?? null;
    }

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The version specific identifier, as it appears in the version portion of the
     * URL. This value changes when the resource is created, updated, or deleted.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId $versionId
     * @return static
     */
    public function setVersionId(null|string|FHIRIdPrimitive|FHIRId $versionId): self
    {
        if (null === $versionId) {
            unset($this->versionId);
            return $this;
        }
        if (!($versionId instanceof FHIRId)) {
            $versionId = new FHIRId(value: $versionId);
        }
        $this->versionId = $versionId;
        return $this;
    }

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for where precisely observed times are required,
     * typically system logs etc., and not human-reported times - for them, see date
     * and dateTime (which can be as precise as instant, but is not required to be)
     * below. UTC offset is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When the resource last changed - e.g. when the version changed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInstant
     */
    public function getLastUpdated(): null|FHIRInstant
    {
        return $this->lastUpdated ?? null;
    }

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for where precisely observed times are required,
     * typically system logs etc., and not human-reported times - for them, see date
     * and dateTime (which can be as precise as instant, but is not required to be)
     * below. UTC offset is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When the resource last changed - e.g. when the version changed.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRInstantPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInstant $lastUpdated
     * @return static
     */
    public function setLastUpdated(null|string|\DateTimeInterface|FHIRInstantPrimitive|FHIRInstant $lastUpdated): self
    {
        if (null === $lastUpdated) {
            unset($this->lastUpdated);
            return $this;
        }
        if (!($lastUpdated instanceof FHIRInstant)) {
            $lastUpdated = new FHIRInstant(value: $lastUpdated);
        }
        $this->lastUpdated = $lastUpdated;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A uri that identifies the source system of the resource. This provides a minimal
     * amount of [[[Provenance]]] information that can be used to track or
     * differentiate the source of information in the resource. The source may identify
     * another FHIR server, document, message, database, etc.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri
     */
    public function getSource(): null|FHIRUri
    {
        return $this->source ?? null;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A uri that identifies the source system of the resource. This provides a minimal
     * amount of [[[Provenance]]] information that can be used to track or
     * differentiate the source of information in the resource. The source may identify
     * another FHIR server, document, message, database, etc.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri $source
     * @return static
     */
    public function setSource(null|string|FHIRUriPrimitive|FHIRUri $source): self
    {
        if (null === $source) {
            unset($this->source);
            return $this;
        }
        if (!($source instanceof FHIRUri)) {
            $source = new FHIRUri(value: $source);
        }
        $this->source = $source;
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A list of profiles (references to [[[StructureDefinition]]] resources) that this
     * resource claims to conform to. The URL is a reference to
     * [[[StructureDefinition.url]]].
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical[]
     */
    public function getProfile(): array
    {
        return $this->profile ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical>
     */
    public function getProfileIterator(): iterable
    {
        if (!isset($this->profile)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->profile);
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A list of profiles (references to [[[StructureDefinition]]] resources) that this
     * resource claims to conform to. The URL is a reference to
     * [[[StructureDefinition.url]]].
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCanonicalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical $profile
     * @return static
     */
    public function addProfile(string|FHIRCanonicalPrimitive|FHIRCanonical $profile): self
    {
        if (!($profile instanceof FHIRCanonical)) {
            $profile = new FHIRCanonical(value: $profile);
        }
        if (!isset($this->profile)) {
            $this->profile = [];
        }
        $this->profile[] = $profile;
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A list of profiles (references to [[[StructureDefinition]]] resources) that this
     * resource claims to conform to. The URL is a reference to
     * [[[StructureDefinition.url]]].
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCanonicalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical ...$profile
     * @return static
     */
    public function setProfile(string|FHIRCanonicalPrimitive|FHIRCanonical ...$profile): self
    {
        if ([] === $profile) {
            unset($this->profile);
            return $this;
        }
        $this->profile = [];
        foreach($profile as $v) {
            if ($v instanceof FHIRCanonical) {
                $this->profile[] = $v;
            } else {
                $this->profile[] = new FHIRCanonical(value: $v);
            }
        }
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Security labels applied to this resource. These tags connect specific resources
     * to the overall security policy and infrastructure.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding[]
     */
    public function getSecurity(): array
    {
        return $this->security ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding>
     */
    public function getSecurityIterator(): iterable
    {
        if (!isset($this->security)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->security);
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Security labels applied to this resource. These tags connect specific resources
     * to the overall security policy and infrastructure.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding $security
     * @return static
     */
    public function addSecurity(FHIRCoding $security): self
    {
        if (!isset($this->security)) {
            $this->security = [];
        }
        $this->security[] = $security;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Security labels applied to this resource. These tags connect specific resources
     * to the overall security policy and infrastructure.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding ...$security
     * @return static
     */
    public function setSecurity(FHIRCoding ...$security): self
    {
        if ([] === $security) {
            unset($this->security);
            return $this;
        }
        $this->security = $security;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Tags applied to this resource. Tags are intended to be used to identify and
     * relate resources to process and workflow, and applications are not required to
     * consider the tags when interpreting the meaning of a resource.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding[]
     */
    public function getTag(): array
    {
        return $this->tag ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding>
     */
    public function getTagIterator(): iterable
    {
        if (!isset($this->tag)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->tag);
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Tags applied to this resource. Tags are intended to be used to identify and
     * relate resources to process and workflow, and applications are not required to
     * consider the tags when interpreting the meaning of a resource.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding $tag
     * @return static
     */
    public function addTag(FHIRCoding $tag): self
    {
        if (!isset($this->tag)) {
            $this->tag = [];
        }
        $this->tag[] = $tag;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Tags applied to this resource. Tags are intended to be used to identify and
     * relate resources to process and workflow, and applications are not required to
     * consider the tags when interpreting the meaning of a resource.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding ...$tag
     * @return static
     */
    public function setTag(FHIRCoding ...$tag): self
    {
        if ([] === $tag) {
            unset($this->tag);
            return $this;
        }
        $this->tag = $tag;
        return $this;
    }

    /* class_default.php:200 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMeta $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMeta
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRMeta)) {
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
            } else if (self::FIELD_VERSION_ID === $cen) {
                $type->setVersionId(FHIRId::xmlUnserialize($ce, $config));
            } else if (self::FIELD_LAST_UPDATED === $cen) {
                $type->setLastUpdated(FHIRInstant::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SOURCE === $cen) {
                $type->setSource(FHIRUri::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PROFILE === $cen) {
                $type->addProfile(FHIRCanonical::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SECURITY === $cen) {
                $type->addSecurity(FHIRCoding::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TAG === $cen) {
                $type->addTag(FHIRCoding::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID]);
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_VERSION_ID])) {
            if (isset($type->versionId)) {
                $type->versionId->setValue((string)$attributes[self::FIELD_VERSION_ID]);
            } else {
                $type->setVersionId((string)$attributes[self::FIELD_VERSION_ID]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_VERSION_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_LAST_UPDATED])) {
            if (isset($type->lastUpdated)) {
                $type->lastUpdated->setValue((string)$attributes[self::FIELD_LAST_UPDATED]);
            } else {
                $type->setLastUpdated((string)$attributes[self::FIELD_LAST_UPDATED]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_LAST_UPDATED, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_SOURCE])) {
            if (isset($type->source)) {
                $type->source->setValue((string)$attributes[self::FIELD_SOURCE]);
            } else {
                $type->setSource((string)$attributes[self::FIELD_SOURCE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_SOURCE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($this->versionId) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_VERSION_ID]) {
            $xw->writeAttribute(self::FIELD_VERSION_ID, $this->versionId->_getValueAsString());
        }
        if (isset($this->lastUpdated) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_LAST_UPDATED]) {
            $xw->writeAttribute(self::FIELD_LAST_UPDATED, $this->lastUpdated->_getValueAsString());
        }
        if (isset($this->source) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_SOURCE]) {
            $xw->writeAttribute(self::FIELD_SOURCE, $this->source->_getValueAsString());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->versionId)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_VERSION_ID]
                || $this->versionId->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_VERSION_ID);
            $this->versionId->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_VERSION_ID]);
            $xw->endElement();
        }
        if (isset($this->lastUpdated)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_LAST_UPDATED]
                || $this->lastUpdated->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_LAST_UPDATED);
            $this->lastUpdated->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_LAST_UPDATED]);
            $xw->endElement();
        }
        if (isset($this->source)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_SOURCE]
                || $this->source->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_SOURCE);
            $this->source->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_SOURCE]);
            $xw->endElement();
        }
        if (isset($this->profile) && [] !== $this->profile) {
            foreach($this->profile as $v) {
                $xw->startElement(self::FIELD_PROFILE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->security)) {
            foreach ($this->security as $v) {
                $xw->startElement(self::FIELD_SECURITY);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->tag)) {
            foreach ($this->tag as $v) {
                $xw->startElement(self::FIELD_TAG);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
    }

    /**
     * @param \stdClass $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMeta $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMeta
     * @throws \Exception
     */
    public static function jsonUnserialize(\stdClass $json,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRMeta)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json->versionId)
            || isset($json->_versionId)
            || property_exists($json, self::FIELD_VERSION_ID)
            || property_exists($json, self::FIELD_VERSION_ID_EXT)) {
            $v = $json->_versionId ?? new \stdClass();
            $v->value = $json->versionId ?? null;
            $type->setVersionId(FHIRId::jsonUnserialize($v, $config));
        }
        if (isset($json->lastUpdated)
            || isset($json->_lastUpdated)
            || property_exists($json, self::FIELD_LAST_UPDATED)
            || property_exists($json, self::FIELD_LAST_UPDATED_EXT)) {
            $v = $json->_lastUpdated ?? new \stdClass();
            $v->value = $json->lastUpdated ?? null;
            $type->setLastUpdated(FHIRInstant::jsonUnserialize($v, $config));
        }
        if (isset($json->source)
            || isset($json->_source)
            || property_exists($json, self::FIELD_SOURCE)
            || property_exists($json, self::FIELD_SOURCE_EXT)) {
            $v = $json->_source ?? new \stdClass();
            $v->value = $json->source ?? null;
            $type->setSource(FHIRUri::jsonUnserialize($v, $config));
        }
        if (isset($json->profile)
            || isset($json->_profile)
            || property_exists($json, self::FIELD_PROFILE)
            || property_exists($json, self::FIELD_PROFILE_EXT)) {
            $vals = (array)($json->profile ?? []);
            $exts = (array)($json->FIELD_PROFILE_EXT ?? []);
            $valCnt = count($vals);
            $extCnt = count($exts);
            if ($extCnt > $valCnt) {
                $valCnt = $extCnt;
            }
            for ($i = 0; $i < $valCnt; $i++) {
                $v = $exts[$i] ?? new \stdClass();
                $v->value = $vals[$i] ?? null;
                $type->addProfile(FHIRCanonical::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->security) || property_exists($json, self::FIELD_SECURITY)) {
            if (is_object($json->security)) {
                $vals = [$json->security];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_SECURITY, true);
            } else {
                $vals = $json->security;
            }
            foreach($vals as $v) {
                $type->addSecurity(FHIRCoding::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->tag) || property_exists($json, self::FIELD_TAG)) {
            if (is_object($json->tag)) {
                $vals = [$json->tag];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_TAG, true);
            } else {
                $vals = $json->tag;
            }
            foreach($vals as $v) {
                $type->addTag(FHIRCoding::jsonUnserialize($v, $config));
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
        if (isset($this->versionId)) {
            if (null !== ($val = $this->versionId->getValue())) {
                $out->versionId = $val;
            }
            if ($this->versionId->_nonValueFieldDefined()) {
                $ext = $this->versionId->jsonSerialize();
                unset($ext->value);
                $out->_versionId = $ext;
            }
        }
        if (isset($this->lastUpdated)) {
            if (null !== ($val = $this->lastUpdated->getValue())) {
                $out->lastUpdated = $val;
            }
            if ($this->lastUpdated->_nonValueFieldDefined()) {
                $ext = $this->lastUpdated->jsonSerialize();
                unset($ext->value);
                $out->_lastUpdated = $ext;
            }
        }
        if (isset($this->source)) {
            if (null !== ($val = $this->source->getValue())) {
                $out->source = $val;
            }
            if ($this->source->_nonValueFieldDefined()) {
                $ext = $this->source->jsonSerialize();
                unset($ext->value);
                $out->_source = $ext;
            }
        }
        if (isset($this->profile) && [] !== $this->profile) {
            $vals = [];
            $exts = [];
            $hasVals = false;
            $hasExts = false;
            foreach ($this->profile as $v) {
                $val = $v->getValue();
                if (null !== $val) {
                    $hasVals = true;
                    $vals[] = $val;
                } else {
                    $vals[] = null;
                }
                if ($v->_nonValueFieldDefined()) {
                    $hasExts = true;
                    $ext = $v->jsonSerialize();
                    unset($ext->value);
                    $exts[] = $ext;
                } else {
                    $exts[] = null;
                }
            }
            if ($hasVals) {
                $out->profile = $vals;
            }
            if ($hasExts) {
                $out->_profile = $exts;
            }
        }
        if (isset($this->security) && [] !== $this->security) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_SECURITY) && 1 === count($this->security)) {
                $out->security = $this->security[0];
            } else {
                $out->security = $this->security;
            }
        }
        if (isset($this->tag) && [] !== $this->tag) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_TAG) && 1 === count($this->tag)) {
                $out->tag = $this->tag[0];
            } else {
                $out->tag = $this->tag;
            }
        }
        return $out;
    }
}