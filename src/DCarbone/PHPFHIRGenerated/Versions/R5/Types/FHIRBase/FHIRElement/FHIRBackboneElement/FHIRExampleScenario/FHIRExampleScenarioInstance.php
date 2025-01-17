<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExampleScenario;

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
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\XMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\TypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCanonicalPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRMarkdownPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Version;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;

/**
 * Example of workflow instance.
 */
class FHIRExampleScenarioInstance extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_EXAMPLE_SCENARIO_DOT_INSTANCE;


    public const FIELD_KEY = 'key';
    public const FIELD_KEY_EXT = '_key';
    public const FIELD_STRUCTURE_TYPE = 'structureType';
    public const FIELD_STRUCTURE_VERSION = 'structureVersion';
    public const FIELD_STRUCTURE_VERSION_EXT = '_structureVersion';
    public const FIELD_STRUCTURE_PROFILE_CANONICAL = 'structureProfileCanonical';
    public const FIELD_STRUCTURE_PROFILE_CANONICAL_EXT = '_structureProfileCanonical';
    public const FIELD_STRUCTURE_PROFILE_URI = 'structureProfileUri';
    public const FIELD_STRUCTURE_PROFILE_URI_EXT = '_structureProfileUri';
    public const FIELD_TITLE = 'title';
    public const FIELD_TITLE_EXT = '_title';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DESCRIPTION_EXT = '_description';
    public const FIELD_CONTENT = 'content';
    public const FIELD_VERSION = 'version';
    public const FIELD_CONTAINED_INSTANCE = 'containedInstance';

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A unique string within the scenario that is used to reference the instance.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    protected FHIRString $key;
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code indicating the kind of data structure (FHIR resource or some other
     * standard) this is an instance of.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding 
     */
    protected FHIRCoding $structureType;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Conveys the version of the data structure instantiated. I.e. what release of
     * FHIR, X12, OpenEHR, etc. is instance compliant with.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    protected FHIRString $structureVersion;
    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Refers to a profile, template or other ruleset the instance adheres to.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical 
     */
    protected FHIRCanonical $structureProfileCanonical;
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Refers to a profile, template or other ruleset the instance adheres to.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri 
     */
    protected FHIRUri $structureProfileUri;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short descriptive label the instance to be used in tables or diagrams.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    protected FHIRString $title;
    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * An explanation of what the instance contains and what it's for.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown 
     */
    protected FHIRMarkdown $description;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Points to an instance (typically an example) that shows the data that would
     * corespond to this instance.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference 
     */
    protected FHIRReference $content;
    /**
     * Example of workflow instance.
     *
     * Represents the instance as it was at a specific time-point.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioVersion[] 
     */
    protected array $version;
    /**
     * Example of workflow instance.
     *
     * References to other instances that can be found within this instance (e.g. the
     * observations contained in a bundle).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioContainedInstance[] 
     */
    protected array $containedInstance;

    /** Default validation map for fields in type ExampleScenario.Instance */
    private const _DEFAULT_VALIDATION_RULES = [
        self::FIELD_KEY => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_STRUCTURE_TYPE => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_TITLE => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /**
     * FHIRExampleScenarioInstance Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $modifierExtension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $key
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding $structureType
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $structureVersion
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCanonicalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical $structureProfileCanonical
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri $structureProfileUri
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $title
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown $description
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $content
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioVersion[] $version
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioContainedInstance[] $containedInstance
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|FHIRStringPrimitive|FHIRString $key = null,
                                null|FHIRCoding $structureType = null,
                                null|string|FHIRStringPrimitive|FHIRString $structureVersion = null,
                                null|string|FHIRCanonicalPrimitive|FHIRCanonical $structureProfileCanonical = null,
                                null|string|FHIRUriPrimitive|FHIRUri $structureProfileUri = null,
                                null|string|FHIRStringPrimitive|FHIRString $title = null,
                                null|string|FHIRMarkdownPrimitive|FHIRMarkdown $description = null,
                                null|FHIRReference $content = null,
                                null|iterable $version = null,
                                null|iterable $containedInstance = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $key) {
            $this->setKey($key);
        }
        if (null !== $structureType) {
            $this->setStructureType($structureType);
        }
        if (null !== $structureVersion) {
            $this->setStructureVersion($structureVersion);
        }
        if (null !== $structureProfileCanonical) {
            $this->setStructureProfileCanonical($structureProfileCanonical);
        }
        if (null !== $structureProfileUri) {
            $this->setStructureProfileUri($structureProfileUri);
        }
        if (null !== $title) {
            $this->setTitle($title);
        }
        if (null !== $description) {
            $this->setDescription($description);
        }
        if (null !== $content) {
            $this->setContent($content);
        }
        if (null !== $version) {
            $this->setVersion(...$version);
        }
        if (null !== $containedInstance) {
            $this->setContainedInstance(...$containedInstance);
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
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A unique string within the scenario that is used to reference the instance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString
     */
    public function getKey(): null|FHIRString
    {
        return $this->key ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A unique string within the scenario that is used to reference the instance.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $key
     * @return static
     */
    public function setKey(null|string|FHIRStringPrimitive|FHIRString $key): self
    {
        if (null === $key) {
            unset($this->key);
            return $this;
        }
        if (!($key instanceof FHIRString)) {
            $key = new FHIRString(value: $key);
        }
        $this->key = $key;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code indicating the kind of data structure (FHIR resource or some other
     * standard) this is an instance of.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding
     */
    public function getStructureType(): null|FHIRCoding
    {
        return $this->structureType ?? null;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code indicating the kind of data structure (FHIR resource or some other
     * standard) this is an instance of.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding $structureType
     * @return static
     */
    public function setStructureType(null|FHIRCoding $structureType): self
    {
        if (null === $structureType) {
            unset($this->structureType);
            return $this;
        }
        $this->structureType = $structureType;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Conveys the version of the data structure instantiated. I.e. what release of
     * FHIR, X12, OpenEHR, etc. is instance compliant with.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString
     */
    public function getStructureVersion(): null|FHIRString
    {
        return $this->structureVersion ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Conveys the version of the data structure instantiated. I.e. what release of
     * FHIR, X12, OpenEHR, etc. is instance compliant with.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $structureVersion
     * @return static
     */
    public function setStructureVersion(null|string|FHIRStringPrimitive|FHIRString $structureVersion): self
    {
        if (null === $structureVersion) {
            unset($this->structureVersion);
            return $this;
        }
        if (!($structureVersion instanceof FHIRString)) {
            $structureVersion = new FHIRString(value: $structureVersion);
        }
        $this->structureVersion = $structureVersion;
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Refers to a profile, template or other ruleset the instance adheres to.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical
     */
    public function getStructureProfileCanonical(): null|FHIRCanonical
    {
        return $this->structureProfileCanonical ?? null;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Refers to a profile, template or other ruleset the instance adheres to.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCanonicalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical $structureProfileCanonical
     * @return static
     */
    public function setStructureProfileCanonical(null|string|FHIRCanonicalPrimitive|FHIRCanonical $structureProfileCanonical): self
    {
        if (null === $structureProfileCanonical) {
            unset($this->structureProfileCanonical);
            return $this;
        }
        if (!($structureProfileCanonical instanceof FHIRCanonical)) {
            $structureProfileCanonical = new FHIRCanonical(value: $structureProfileCanonical);
        }
        $this->structureProfileCanonical = $structureProfileCanonical;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Refers to a profile, template or other ruleset the instance adheres to.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri
     */
    public function getStructureProfileUri(): null|FHIRUri
    {
        return $this->structureProfileUri ?? null;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Refers to a profile, template or other ruleset the instance adheres to.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri $structureProfileUri
     * @return static
     */
    public function setStructureProfileUri(null|string|FHIRUriPrimitive|FHIRUri $structureProfileUri): self
    {
        if (null === $structureProfileUri) {
            unset($this->structureProfileUri);
            return $this;
        }
        if (!($structureProfileUri instanceof FHIRUri)) {
            $structureProfileUri = new FHIRUri(value: $structureProfileUri);
        }
        $this->structureProfileUri = $structureProfileUri;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short descriptive label the instance to be used in tables or diagrams.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString
     */
    public function getTitle(): null|FHIRString
    {
        return $this->title ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short descriptive label the instance to be used in tables or diagrams.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $title
     * @return static
     */
    public function setTitle(null|string|FHIRStringPrimitive|FHIRString $title): self
    {
        if (null === $title) {
            unset($this->title);
            return $this;
        }
        if (!($title instanceof FHIRString)) {
            $title = new FHIRString(value: $title);
        }
        $this->title = $title;
        return $this;
    }

    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * An explanation of what the instance contains and what it's for.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown
     */
    public function getDescription(): null|FHIRMarkdown
    {
        return $this->description ?? null;
    }

    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * An explanation of what the instance contains and what it's for.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown $description
     * @return static
     */
    public function setDescription(null|string|FHIRMarkdownPrimitive|FHIRMarkdown $description): self
    {
        if (null === $description) {
            unset($this->description);
            return $this;
        }
        if (!($description instanceof FHIRMarkdown)) {
            $description = new FHIRMarkdown(value: $description);
        }
        $this->description = $description;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Points to an instance (typically an example) that shows the data that would
     * corespond to this instance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getContent(): null|FHIRReference
    {
        return $this->content ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Points to an instance (typically an example) that shows the data that would
     * corespond to this instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $content
     * @return static
     */
    public function setContent(null|FHIRReference $content): self
    {
        if (null === $content) {
            unset($this->content);
            return $this;
        }
        $this->content = $content;
        return $this;
    }

    /**
     * Example of workflow instance.
     *
     * Represents the instance as it was at a specific time-point.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioVersion[]
     */
    public function getVersion(): array
    {
        return $this->version ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioVersion>
     */
    public function getVersionIterator(): iterable
    {
        if (!isset($this->version) || [] === $this->version) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->version);
    }

    /**
     * Example of workflow instance.
     *
     * Represents the instance as it was at a specific time-point.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioVersion $version
     * @return static
     */
    public function addVersion(FHIRExampleScenarioVersion $version): self
    {
        if (!isset($this->version)) {
            $this->version = [];
        }
        $this->version[] = $version;
        return $this;
    }

    /**
     * Example of workflow instance.
     *
     * Represents the instance as it was at a specific time-point.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioVersion ...$version
     * @return static
     */
    public function setVersion(FHIRExampleScenarioVersion ...$version): self
    {
        $this->version = $version;
        return $this;
    }

    /**
     * Example of workflow instance.
     *
     * References to other instances that can be found within this instance (e.g. the
     * observations contained in a bundle).
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioContainedInstance[]
     */
    public function getContainedInstance(): array
    {
        return $this->containedInstance ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioContainedInstance>
     */
    public function getContainedInstanceIterator(): iterable
    {
        if (!isset($this->containedInstance) || [] === $this->containedInstance) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->containedInstance);
    }

    /**
     * Example of workflow instance.
     *
     * References to other instances that can be found within this instance (e.g. the
     * observations contained in a bundle).
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioContainedInstance $containedInstance
     * @return static
     */
    public function addContainedInstance(FHIRExampleScenarioContainedInstance $containedInstance): self
    {
        if (!isset($this->containedInstance)) {
            $this->containedInstance = [];
        }
        $this->containedInstance[] = $containedInstance;
        return $this;
    }

    /**
     * Example of workflow instance.
     *
     * References to other instances that can be found within this instance (e.g. the
     * observations contained in a bundle).
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioContainedInstance ...$containedInstance
     * @return static
     */
    public function setContainedInstance(FHIRExampleScenarioContainedInstance ...$containedInstance): self
    {
        $this->containedInstance = $containedInstance;
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
        if (null !== ($v = $this->getKey())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_KEY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getStructureType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STRUCTURE_TYPE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getTitle())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TITLE] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_KEY])) {
            $v = $this->getKey();
            foreach($validationRules[self::FIELD_KEY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_KEY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_KEY])) {
                        $errs[self::FIELD_KEY] = [];
                    }
                    $errs[self::FIELD_KEY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STRUCTURE_TYPE])) {
            $v = $this->getStructureType();
            foreach($validationRules[self::FIELD_STRUCTURE_TYPE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_STRUCTURE_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STRUCTURE_TYPE])) {
                        $errs[self::FIELD_STRUCTURE_TYPE] = [];
                    }
                    $errs[self::FIELD_STRUCTURE_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STRUCTURE_VERSION])) {
            $v = $this->getStructureVersion();
            foreach($validationRules[self::FIELD_STRUCTURE_VERSION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_STRUCTURE_VERSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STRUCTURE_VERSION])) {
                        $errs[self::FIELD_STRUCTURE_VERSION] = [];
                    }
                    $errs[self::FIELD_STRUCTURE_VERSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STRUCTURE_PROFILE_CANONICAL])) {
            $v = $this->getStructureProfileCanonical();
            foreach($validationRules[self::FIELD_STRUCTURE_PROFILE_CANONICAL] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_STRUCTURE_PROFILE_CANONICAL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STRUCTURE_PROFILE_CANONICAL])) {
                        $errs[self::FIELD_STRUCTURE_PROFILE_CANONICAL] = [];
                    }
                    $errs[self::FIELD_STRUCTURE_PROFILE_CANONICAL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STRUCTURE_PROFILE_URI])) {
            $v = $this->getStructureProfileUri();
            foreach($validationRules[self::FIELD_STRUCTURE_PROFILE_URI] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_STRUCTURE_PROFILE_URI, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STRUCTURE_PROFILE_URI])) {
                        $errs[self::FIELD_STRUCTURE_PROFILE_URI] = [];
                    }
                    $errs[self::FIELD_STRUCTURE_PROFILE_URI][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TITLE])) {
            $v = $this->getTitle();
            foreach($validationRules[self::FIELD_TITLE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TITLE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TITLE])) {
                        $errs[self::FIELD_TITLE] = [];
                    }
                    $errs[self::FIELD_TITLE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DESCRIPTION])) {
            $v = $this->getDescription();
            foreach($validationRules[self::FIELD_DESCRIPTION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DESCRIPTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DESCRIPTION])) {
                        $errs[self::FIELD_DESCRIPTION] = [];
                    }
                    $errs[self::FIELD_DESCRIPTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTENT])) {
            $v = $this->getContent();
            foreach($validationRules[self::FIELD_CONTENT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CONTENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTENT])) {
                        $errs[self::FIELD_CONTENT] = [];
                    }
                    $errs[self::FIELD_CONTENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VERSION])) {
            $v = $this->getVersion();
            foreach($validationRules[self::FIELD_VERSION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_VERSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VERSION])) {
                        $errs[self::FIELD_VERSION] = [];
                    }
                    $errs[self::FIELD_VERSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTAINED_INSTANCE])) {
            $v = $this->getContainedInstance();
            foreach($validationRules[self::FIELD_CONTAINED_INSTANCE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CONTAINED_INSTANCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTAINED_INSTANCE])) {
                        $errs[self::FIELD_CONTAINED_INSTANCE] = [];
                    }
                    $errs[self::FIELD_CONTAINED_INSTANCE][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioInstance $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioInstance
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRExampleScenarioInstance)) {
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
                $v = new FHIRStringPrimitive(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_KEY === $childName) {
                $v = new FHIRString(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setKey(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_STRUCTURE_TYPE === $childName) {
                $v = new FHIRCoding();
                $type->setStructureType(FHIRCoding::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_STRUCTURE_VERSION === $childName) {
                $v = new FHIRString(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setStructureVersion(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_STRUCTURE_PROFILE_CANONICAL === $childName) {
                $v = new FHIRCanonical(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setStructureProfileCanonical(FHIRCanonical::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_STRUCTURE_PROFILE_URI === $childName) {
                $v = new FHIRUri(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setStructureProfileUri(FHIRUri::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_TITLE === $childName) {
                $v = new FHIRString(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setTitle(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DESCRIPTION === $childName) {
                $v = new FHIRMarkdown(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setDescription(FHIRMarkdown::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_CONTENT === $childName) {
                $v = new FHIRReference();
                $type->setContent(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_VERSION === $childName) {
                $v = new FHIRExampleScenarioVersion();
                $type->addVersion(FHIRExampleScenarioVersion::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_CONTAINED_INSTANCE === $childName) {
                $v = new FHIRExampleScenarioContainedInstance();
                $type->addContainedInstance(FHIRExampleScenarioContainedInstance::xmlUnserialize($n, $v, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ID]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setId(new FHIRStringPrimitive(
                    value: (string)$attributes[self::FIELD_ID],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_KEY])) {
            $pt = $type->getKey();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_KEY]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setKey(new FHIRString(
                    value: (string)$attributes[self::FIELD_KEY],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_STRUCTURE_VERSION])) {
            $pt = $type->getStructureVersion();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_STRUCTURE_VERSION]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setStructureVersion(new FHIRString(
                    value: (string)$attributes[self::FIELD_STRUCTURE_VERSION],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_STRUCTURE_PROFILE_CANONICAL])) {
            $pt = $type->getStructureProfileCanonical();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_STRUCTURE_PROFILE_CANONICAL]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setStructureProfileCanonical(new FHIRCanonical(
                    value: (string)$attributes[self::FIELD_STRUCTURE_PROFILE_CANONICAL],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_STRUCTURE_PROFILE_URI])) {
            $pt = $type->getStructureProfileUri();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_STRUCTURE_PROFILE_URI]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setStructureProfileUri(new FHIRUri(
                    value: (string)$attributes[self::FIELD_STRUCTURE_PROFILE_URI],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_TITLE])) {
            $pt = $type->getTitle();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_TITLE]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setTitle(new FHIRString(
                    value: (string)$attributes[self::FIELD_TITLE],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_DESCRIPTION])) {
            $pt = $type->getDescription();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DESCRIPTION]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setDescription(new FHIRMarkdown(
                    value: (string)$attributes[self::FIELD_DESCRIPTION],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
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
            $xw->openRootNode('ExampleScenarioInstance', $this->_getSourceXMLNS());
        }
        if (isset($this->key) && $this->key->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_KEY, $this->key->getValue()?->getFormattedValue());
        }
        if (isset($this->structureVersion) && $this->structureVersion->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_STRUCTURE_VERSION, $this->structureVersion->getValue()?->getFormattedValue());
        }
        if (isset($this->structureProfileCanonical) && $this->structureProfileCanonical->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_STRUCTURE_PROFILE_CANONICAL, $this->structureProfileCanonical->getValue()?->getFormattedValue());
        }
        if (isset($this->structureProfileUri) && $this->structureProfileUri->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_STRUCTURE_PROFILE_URI, $this->structureProfileUri->getValue()?->getFormattedValue());
        }
        if (isset($this->title) && $this->title->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_TITLE, $this->title->getValue()?->getFormattedValue());
        }
        if (isset($this->description) && $this->description->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_DESCRIPTION, $this->description->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->key) && $this->key->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_KEY);
            $this->key->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->structureType)) {
            $xw->startElement(self::FIELD_STRUCTURE_TYPE);
            $this->structureType->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->structureVersion) && $this->structureVersion->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_STRUCTURE_VERSION);
            $this->structureVersion->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->structureProfileCanonical) && $this->structureProfileCanonical->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_STRUCTURE_PROFILE_CANONICAL);
            $this->structureProfileCanonical->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->structureProfileUri) && $this->structureProfileUri->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_STRUCTURE_PROFILE_URI);
            $this->structureProfileUri->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->title) && $this->title->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_TITLE);
            $this->title->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->description) && $this->description->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_DESCRIPTION);
            $this->description->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->content)) {
            $xw->startElement(self::FIELD_CONTENT);
            $this->content->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->version)) {
            foreach ($this->version as $v) {
                $xw->startElement(self::FIELD_VERSION);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->containedInstance)) {
            foreach ($this->containedInstance as $v) {
                $xw->startElement(self::FIELD_CONTAINED_INSTANCE);
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioInstance $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioInstance
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRExampleScenarioInstance)) {
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
        if (isset($json[self::FIELD_KEY]) || isset($json[self::FIELD_KEY_EXT]) || array_key_exists(self::FIELD_KEY, $json) || array_key_exists(self::FIELD_KEY_EXT, $json)) {
            $value = $json[self::FIELD_KEY] ?? null;
            $ext = (isset($json[self::FIELD_KEY_EXT]) && is_array($json[self::FIELD_KEY_EXT])) ? $json[self::FIELD_KEY_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setKey($value);
                } else if (is_array($value)) {
                    $type->setKey(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setKey(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setKey(new FHIRString($ext));
            } else {
                $type->setKey(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_STRUCTURE_TYPE]) || array_key_exists(self::FIELD_STRUCTURE_TYPE, $json)) {
            if ($json[self::FIELD_STRUCTURE_TYPE] instanceof FHIRCoding) {
                $type->setStructureType($json[self::FIELD_STRUCTURE_TYPE]);
            } else {
                $type->setStructureType(new FHIRCoding($json[self::FIELD_STRUCTURE_TYPE]));
            }
        }
        if (isset($json[self::FIELD_STRUCTURE_VERSION]) || isset($json[self::FIELD_STRUCTURE_VERSION_EXT]) || array_key_exists(self::FIELD_STRUCTURE_VERSION, $json) || array_key_exists(self::FIELD_STRUCTURE_VERSION_EXT, $json)) {
            $value = $json[self::FIELD_STRUCTURE_VERSION] ?? null;
            $ext = (isset($json[self::FIELD_STRUCTURE_VERSION_EXT]) && is_array($json[self::FIELD_STRUCTURE_VERSION_EXT])) ? $json[self::FIELD_STRUCTURE_VERSION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setStructureVersion($value);
                } else if (is_array($value)) {
                    $type->setStructureVersion(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setStructureVersion(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setStructureVersion(new FHIRString($ext));
            } else {
                $type->setStructureVersion(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_STRUCTURE_PROFILE_CANONICAL]) || isset($json[self::FIELD_STRUCTURE_PROFILE_CANONICAL_EXT]) || array_key_exists(self::FIELD_STRUCTURE_PROFILE_CANONICAL, $json) || array_key_exists(self::FIELD_STRUCTURE_PROFILE_CANONICAL_EXT, $json)) {
            $value = $json[self::FIELD_STRUCTURE_PROFILE_CANONICAL] ?? null;
            $ext = (isset($json[self::FIELD_STRUCTURE_PROFILE_CANONICAL_EXT]) && is_array($json[self::FIELD_STRUCTURE_PROFILE_CANONICAL_EXT])) ? $json[self::FIELD_STRUCTURE_PROFILE_CANONICAL_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRCanonical) {
                    $type->setStructureProfileCanonical($value);
                } else if (is_array($value)) {
                    $type->setStructureProfileCanonical(new FHIRCanonical(array_merge($ext, $value)));
                } else {
                    $type->setStructureProfileCanonical(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setStructureProfileCanonical(new FHIRCanonical($ext));
            } else {
                $type->setStructureProfileCanonical(new FHIRCanonical(null));
            }
        }
        if (isset($json[self::FIELD_STRUCTURE_PROFILE_URI]) || isset($json[self::FIELD_STRUCTURE_PROFILE_URI_EXT]) || array_key_exists(self::FIELD_STRUCTURE_PROFILE_URI, $json) || array_key_exists(self::FIELD_STRUCTURE_PROFILE_URI_EXT, $json)) {
            $value = $json[self::FIELD_STRUCTURE_PROFILE_URI] ?? null;
            $ext = (isset($json[self::FIELD_STRUCTURE_PROFILE_URI_EXT]) && is_array($json[self::FIELD_STRUCTURE_PROFILE_URI_EXT])) ? $json[self::FIELD_STRUCTURE_PROFILE_URI_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $type->setStructureProfileUri($value);
                } else if (is_array($value)) {
                    $type->setStructureProfileUri(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $type->setStructureProfileUri(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setStructureProfileUri(new FHIRUri($ext));
            } else {
                $type->setStructureProfileUri(new FHIRUri(null));
            }
        }
        if (isset($json[self::FIELD_TITLE]) || isset($json[self::FIELD_TITLE_EXT]) || array_key_exists(self::FIELD_TITLE, $json) || array_key_exists(self::FIELD_TITLE_EXT, $json)) {
            $value = $json[self::FIELD_TITLE] ?? null;
            $ext = (isset($json[self::FIELD_TITLE_EXT]) && is_array($json[self::FIELD_TITLE_EXT])) ? $json[self::FIELD_TITLE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setTitle($value);
                } else if (is_array($value)) {
                    $type->setTitle(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setTitle(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setTitle(new FHIRString($ext));
            } else {
                $type->setTitle(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_DESCRIPTION]) || isset($json[self::FIELD_DESCRIPTION_EXT]) || array_key_exists(self::FIELD_DESCRIPTION, $json) || array_key_exists(self::FIELD_DESCRIPTION_EXT, $json)) {
            $value = $json[self::FIELD_DESCRIPTION] ?? null;
            $ext = (isset($json[self::FIELD_DESCRIPTION_EXT]) && is_array($json[self::FIELD_DESCRIPTION_EXT])) ? $json[self::FIELD_DESCRIPTION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRMarkdown) {
                    $type->setDescription($value);
                } else if (is_array($value)) {
                    $type->setDescription(new FHIRMarkdown(array_merge($ext, $value)));
                } else {
                    $type->setDescription(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setDescription(new FHIRMarkdown($ext));
            } else {
                $type->setDescription(new FHIRMarkdown(null));
            }
        }
        if (isset($json[self::FIELD_CONTENT]) || array_key_exists(self::FIELD_CONTENT, $json)) {
            if ($json[self::FIELD_CONTENT] instanceof FHIRReference) {
                $type->setContent($json[self::FIELD_CONTENT]);
            } else {
                $type->setContent(new FHIRReference($json[self::FIELD_CONTENT]));
            }
        }
        if (isset($json[self::FIELD_VERSION]) || array_key_exists(self::FIELD_VERSION, $json)) {
            if (is_array($json[self::FIELD_VERSION])) {
                foreach($json[self::FIELD_VERSION] as $v) {
                    if ($v instanceof FHIRExampleScenarioVersion) {
                        $type->addVersion($v);
                    } else {
                        $type->addVersion(new FHIRExampleScenarioVersion($v));
                    }
                }
            } elseif ($json[self::FIELD_VERSION] instanceof FHIRExampleScenarioVersion) {
                $type->addVersion($json[self::FIELD_VERSION]);
            } else {
                $type->addVersion(new FHIRExampleScenarioVersion($json[self::FIELD_VERSION]));
            }
        }
        if (isset($json[self::FIELD_CONTAINED_INSTANCE]) || array_key_exists(self::FIELD_CONTAINED_INSTANCE, $json)) {
            if (is_array($json[self::FIELD_CONTAINED_INSTANCE])) {
                foreach($json[self::FIELD_CONTAINED_INSTANCE] as $v) {
                    if ($v instanceof FHIRExampleScenarioContainedInstance) {
                        $type->addContainedInstance($v);
                    } else {
                        $type->addContainedInstance(new FHIRExampleScenarioContainedInstance($v));
                    }
                }
            } elseif ($json[self::FIELD_CONTAINED_INSTANCE] instanceof FHIRExampleScenarioContainedInstance) {
                $type->addContainedInstance($json[self::FIELD_CONTAINED_INSTANCE]);
            } else {
                $type->addContainedInstance(new FHIRExampleScenarioContainedInstance($json[self::FIELD_CONTAINED_INSTANCE]));
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
        if (isset($this->key)) {
            if (null !== ($val = $this->key->getValue())) {
                $out->key = $val;
            }
            $ext = $this->key->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_key = $ext;
            }
        }
        if (isset($this->structureType)) {
            $out->structureType = $this->structureType;
        }
        if (isset($this->structureVersion)) {
            if (null !== ($val = $this->structureVersion->getValue())) {
                $out->structureVersion = $val;
            }
            $ext = $this->structureVersion->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_structureVersion = $ext;
            }
        }
        if (isset($this->structureProfileCanonical)) {
            if (null !== ($val = $this->structureProfileCanonical->getValue())) {
                $out->structureProfileCanonical = $val;
            }
            $ext = $this->structureProfileCanonical->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_structureProfileCanonical = $ext;
            }
        }
        if (isset($this->structureProfileUri)) {
            if (null !== ($val = $this->structureProfileUri->getValue())) {
                $out->structureProfileUri = $val;
            }
            $ext = $this->structureProfileUri->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_structureProfileUri = $ext;
            }
        }
        if (isset($this->title)) {
            if (null !== ($val = $this->title->getValue())) {
                $out->title = $val;
            }
            $ext = $this->title->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_title = $ext;
            }
        }
        if (isset($this->description)) {
            if (null !== ($val = $this->description->getValue())) {
                $out->description = $val;
            }
            $ext = $this->description->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_description = $ext;
            }
        }
        if (isset($this->content)) {
            $out->content = $this->content;
        }
        if (isset($this->version) && [] !== $this->version) {
            $out->version = $this->version;
        }
        if (isset($this->containedInstance) && [] !== $this->containedInstance) {
            $out->containedInstance = $this->containedInstance;
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