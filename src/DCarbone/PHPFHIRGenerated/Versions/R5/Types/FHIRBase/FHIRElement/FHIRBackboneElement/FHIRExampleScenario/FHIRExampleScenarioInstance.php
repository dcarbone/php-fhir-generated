<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExampleScenario;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 1st, 2025 16:35+0000
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
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface;
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

    /* class_default.php:47 */
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

    /* class_default.php:66 */
    private static array $_validationRules = [
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

    /* class_default.php:91 */
    private array $_valueXMLLocations = [
        self::FIELD_KEY => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_STRUCTURE_VERSION => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_STRUCTURE_PROFILE_CANONICAL => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_STRUCTURE_PROFILE_URI => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_TITLE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DESCRIPTION => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:107 */
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

    /* constructor.php:63 */
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

    /* class_default.php:136 */
    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:162 */
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
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setKey(null|string|FHIRStringPrimitive|FHIRString $key,
                           ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $key) {
            unset($this->key);
            return $this;
        }
        if (!($key instanceof FHIRString)) {
            $key = new FHIRString(value: $key);
        }
        $this->key = $key;
        if ($this->_valueXMLLocations[self::FIELD_KEY] !== $valueXMLLocation) {
            $this->_setKeyValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the key element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getKeyValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_KEY];
    }

    /**
     * Set the location the "value" field of the key element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setKeyValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_KEY] = $valueXMLLocation;
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
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setStructureVersion(null|string|FHIRStringPrimitive|FHIRString $structureVersion,
                                        ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $structureVersion) {
            unset($this->structureVersion);
            return $this;
        }
        if (!($structureVersion instanceof FHIRString)) {
            $structureVersion = new FHIRString(value: $structureVersion);
        }
        $this->structureVersion = $structureVersion;
        if ($this->_valueXMLLocations[self::FIELD_STRUCTURE_VERSION] !== $valueXMLLocation) {
            $this->_setStructureVersionValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the structureVersion element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getStructureVersionValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_STRUCTURE_VERSION];
    }

    /**
     * Set the location the "value" field of the structureVersion element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setStructureVersionValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_STRUCTURE_VERSION] = $valueXMLLocation;
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
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setStructureProfileCanonical(null|string|FHIRCanonicalPrimitive|FHIRCanonical $structureProfileCanonical,
                                                 ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $structureProfileCanonical) {
            unset($this->structureProfileCanonical);
            return $this;
        }
        if (!($structureProfileCanonical instanceof FHIRCanonical)) {
            $structureProfileCanonical = new FHIRCanonical(value: $structureProfileCanonical);
        }
        $this->structureProfileCanonical = $structureProfileCanonical;
        if ($this->_valueXMLLocations[self::FIELD_STRUCTURE_PROFILE_CANONICAL] !== $valueXMLLocation) {
            $this->_setStructureProfileCanonicalValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the structureProfileCanonical element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getStructureProfileCanonicalValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_STRUCTURE_PROFILE_CANONICAL];
    }

    /**
     * Set the location the "value" field of the structureProfileCanonical element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setStructureProfileCanonicalValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_STRUCTURE_PROFILE_CANONICAL] = $valueXMLLocation;
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
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setStructureProfileUri(null|string|FHIRUriPrimitive|FHIRUri $structureProfileUri,
                                           ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $structureProfileUri) {
            unset($this->structureProfileUri);
            return $this;
        }
        if (!($structureProfileUri instanceof FHIRUri)) {
            $structureProfileUri = new FHIRUri(value: $structureProfileUri);
        }
        $this->structureProfileUri = $structureProfileUri;
        if ($this->_valueXMLLocations[self::FIELD_STRUCTURE_PROFILE_URI] !== $valueXMLLocation) {
            $this->_setStructureProfileUriValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the structureProfileUri element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getStructureProfileUriValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_STRUCTURE_PROFILE_URI];
    }

    /**
     * Set the location the "value" field of the structureProfileUri element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setStructureProfileUriValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_STRUCTURE_PROFILE_URI] = $valueXMLLocation;
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
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setTitle(null|string|FHIRStringPrimitive|FHIRString $title,
                             ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $title) {
            unset($this->title);
            return $this;
        }
        if (!($title instanceof FHIRString)) {
            $title = new FHIRString(value: $title);
        }
        $this->title = $title;
        if ($this->_valueXMLLocations[self::FIELD_TITLE] !== $valueXMLLocation) {
            $this->_setTitleValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the title element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getTitleValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_TITLE];
    }

    /**
     * Set the location the "value" field of the title element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setTitleValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_TITLE] = $valueXMLLocation;
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
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDescription(null|string|FHIRMarkdownPrimitive|FHIRMarkdown $description,
                                   ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $description) {
            unset($this->description);
            return $this;
        }
        if (!($description instanceof FHIRMarkdown)) {
            $description = new FHIRMarkdown(value: $description);
        }
        $this->description = $description;
        if ($this->_valueXMLLocations[self::FIELD_DESCRIPTION] !== $valueXMLLocation) {
            $this->_setDescriptionValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the description element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getDescriptionValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_DESCRIPTION];
    }

    /**
     * Set the location the "value" field of the description element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setDescriptionValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_DESCRIPTION] = $valueXMLLocation;
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
        if (!isset($this->version)) {
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
        if ([] === $version) {
            unset($this->version);
            return $this;
        }
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
        if (!isset($this->containedInstance)) {
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
        if ([] === $containedInstance) {
            unset($this->containedInstance);
            return $this;
        }
        $this->containedInstance = $containedInstance;
        return $this;
    }

    /* class_default.php:188 */
    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules(): array
    {
        return self::$_validationRules;
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

    /* class_default.php:212 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioInstance $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioInstance
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
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
        foreach ($element->children() as $ce) {
            $cen = $ce->getName();
            if (self::FIELD_EXTENSION === $cen) {
                $type->addExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ID === $cen) {
                $va = $ce->attributes()[FHIRStringPrimitive::FIELD_VALUE] ?? null;
                if (null !== $va) {
                    $type->setId((string)$va, ValueXMLLocationEnum::ELEMENT_ATTRIBUTE);
                } else {
                    $type->setId((string)$ce, ValueXMLLocationEnum::ELEMENT_VALUE);
                }
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_KEY === $cen) {
                $type->setKey(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_STRUCTURE_TYPE === $cen) {
                $type->setStructureType(FHIRCoding::xmlUnserialize($ce, $config));
            } else if (self::FIELD_STRUCTURE_VERSION === $cen) {
                $type->setStructureVersion(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_STRUCTURE_PROFILE_CANONICAL === $cen) {
                $type->setStructureProfileCanonical(FHIRCanonical::xmlUnserialize($ce, $config));
            } else if (self::FIELD_STRUCTURE_PROFILE_URI === $cen) {
                $type->setStructureProfileUri(FHIRUri::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TITLE === $cen) {
                $type->setTitle(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DESCRIPTION === $cen) {
                $type->setDescription(FHIRMarkdown::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CONTENT === $cen) {
                $type->setContent(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VERSION === $cen) {
                $type->addVersion(FHIRExampleScenarioVersion::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CONTAINED_INSTANCE === $cen) {
                $type->addContainedInstance(FHIRExampleScenarioContainedInstance::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_KEY])) {
            if (isset($type->key)) {
                $type->key->setValue((string)$attributes[self::FIELD_KEY]);
                $type->_setKeyValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setKey((string)$attributes[self::FIELD_KEY], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_STRUCTURE_VERSION])) {
            if (isset($type->structureVersion)) {
                $type->structureVersion->setValue((string)$attributes[self::FIELD_STRUCTURE_VERSION]);
                $type->_setStructureVersionValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setStructureVersion((string)$attributes[self::FIELD_STRUCTURE_VERSION], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_STRUCTURE_PROFILE_CANONICAL])) {
            if (isset($type->structureProfileCanonical)) {
                $type->structureProfileCanonical->setValue((string)$attributes[self::FIELD_STRUCTURE_PROFILE_CANONICAL]);
                $type->_setStructureProfileCanonicalValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setStructureProfileCanonical((string)$attributes[self::FIELD_STRUCTURE_PROFILE_CANONICAL], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_STRUCTURE_PROFILE_URI])) {
            if (isset($type->structureProfileUri)) {
                $type->structureProfileUri->setValue((string)$attributes[self::FIELD_STRUCTURE_PROFILE_URI]);
                $type->_setStructureProfileUriValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setStructureProfileUri((string)$attributes[self::FIELD_STRUCTURE_PROFILE_URI], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_TITLE])) {
            if (isset($type->title)) {
                $type->title->setValue((string)$attributes[self::FIELD_TITLE]);
                $type->_setTitleValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setTitle((string)$attributes[self::FIELD_TITLE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DESCRIPTION])) {
            if (isset($type->description)) {
                $type->description->setValue((string)$attributes[self::FIELD_DESCRIPTION]);
                $type->_setDescriptionValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setDescription((string)$attributes[self::FIELD_DESCRIPTION], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
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
        if (isset($this->key) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_KEY]) {
            $xw->writeAttribute(self::FIELD_KEY, $this->key->_getFormattedValue());
        }
        if (isset($this->structureVersion) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_STRUCTURE_VERSION]) {
            $xw->writeAttribute(self::FIELD_STRUCTURE_VERSION, $this->structureVersion->_getFormattedValue());
        }
        if (isset($this->structureProfileCanonical) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_STRUCTURE_PROFILE_CANONICAL]) {
            $xw->writeAttribute(self::FIELD_STRUCTURE_PROFILE_CANONICAL, $this->structureProfileCanonical->_getFormattedValue());
        }
        if (isset($this->structureProfileUri) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_STRUCTURE_PROFILE_URI]) {
            $xw->writeAttribute(self::FIELD_STRUCTURE_PROFILE_URI, $this->structureProfileUri->_getFormattedValue());
        }
        if (isset($this->title) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_TITLE]) {
            $xw->writeAttribute(self::FIELD_TITLE, $this->title->_getFormattedValue());
        }
        if (isset($this->description) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DESCRIPTION]) {
            $xw->writeAttribute(self::FIELD_DESCRIPTION, $this->description->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->key)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_KEY]
                || $this->key->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_KEY);
            $this->key->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_KEY]);
            $xw->endElement();
        }
        if (isset($this->structureType)) {
            $xw->startElement(self::FIELD_STRUCTURE_TYPE);
            $this->structureType->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->structureVersion)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_STRUCTURE_VERSION]
                || $this->structureVersion->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_STRUCTURE_VERSION);
            $this->structureVersion->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_STRUCTURE_VERSION]);
            $xw->endElement();
        }
        if (isset($this->structureProfileCanonical)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_STRUCTURE_PROFILE_CANONICAL]
                || $this->structureProfileCanonical->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_STRUCTURE_PROFILE_CANONICAL);
            $this->structureProfileCanonical->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_STRUCTURE_PROFILE_CANONICAL]);
            $xw->endElement();
        }
        if (isset($this->structureProfileUri)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_STRUCTURE_PROFILE_URI]
                || $this->structureProfileUri->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_STRUCTURE_PROFILE_URI);
            $this->structureProfileUri->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_STRUCTURE_PROFILE_URI]);
            $xw->endElement();
        }
        if (isset($this->title)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_TITLE]
                || $this->title->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_TITLE);
            $this->title->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_TITLE]);
            $xw->endElement();
        }
        if (isset($this->description)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DESCRIPTION]
                || $this->description->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DESCRIPTION);
            $this->description->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DESCRIPTION]);
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
    }

    /**
     * @param array $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioInstance $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioInstance
     * @throws \Exception
     */
    public static function jsonUnserialize(array $json,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
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
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json[self::FIELD_KEY])
            || isset($json[self::FIELD_KEY_EXT])
            || array_key_exists(self::FIELD_KEY, $json)
            || array_key_exists(self::FIELD_KEY_EXT, $json)) {
            $value = $json[self::FIELD_KEY] ?? null;
            $type->setKey(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_KEY_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_STRUCTURE_TYPE]) || array_key_exists(self::FIELD_STRUCTURE_TYPE, $json)) {
            $type->setStructureType(FHIRCoding::jsonUnserialize($json[self::FIELD_STRUCTURE_TYPE], $config));
        }
        if (isset($json[self::FIELD_STRUCTURE_VERSION])
            || isset($json[self::FIELD_STRUCTURE_VERSION_EXT])
            || array_key_exists(self::FIELD_STRUCTURE_VERSION, $json)
            || array_key_exists(self::FIELD_STRUCTURE_VERSION_EXT, $json)) {
            $value = $json[self::FIELD_STRUCTURE_VERSION] ?? null;
            $type->setStructureVersion(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_STRUCTURE_VERSION_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_STRUCTURE_PROFILE_CANONICAL])
            || isset($json[self::FIELD_STRUCTURE_PROFILE_CANONICAL_EXT])
            || array_key_exists(self::FIELD_STRUCTURE_PROFILE_CANONICAL, $json)
            || array_key_exists(self::FIELD_STRUCTURE_PROFILE_CANONICAL_EXT, $json)) {
            $value = $json[self::FIELD_STRUCTURE_PROFILE_CANONICAL] ?? null;
            $type->setStructureProfileCanonical(FHIRCanonical::jsonUnserialize(
                (is_array($value) ? $value : [FHIRCanonical::FIELD_VALUE => $value]) + ($json[self::FIELD_STRUCTURE_PROFILE_CANONICAL_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_STRUCTURE_PROFILE_URI])
            || isset($json[self::FIELD_STRUCTURE_PROFILE_URI_EXT])
            || array_key_exists(self::FIELD_STRUCTURE_PROFILE_URI, $json)
            || array_key_exists(self::FIELD_STRUCTURE_PROFILE_URI_EXT, $json)) {
            $value = $json[self::FIELD_STRUCTURE_PROFILE_URI] ?? null;
            $type->setStructureProfileUri(FHIRUri::jsonUnserialize(
                (is_array($value) ? $value : [FHIRUri::FIELD_VALUE => $value]) + ($json[self::FIELD_STRUCTURE_PROFILE_URI_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_TITLE])
            || isset($json[self::FIELD_TITLE_EXT])
            || array_key_exists(self::FIELD_TITLE, $json)
            || array_key_exists(self::FIELD_TITLE_EXT, $json)) {
            $value = $json[self::FIELD_TITLE] ?? null;
            $type->setTitle(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_TITLE_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_DESCRIPTION])
            || isset($json[self::FIELD_DESCRIPTION_EXT])
            || array_key_exists(self::FIELD_DESCRIPTION, $json)
            || array_key_exists(self::FIELD_DESCRIPTION_EXT, $json)) {
            $value = $json[self::FIELD_DESCRIPTION] ?? null;
            $type->setDescription(FHIRMarkdown::jsonUnserialize(
                (is_array($value) ? $value : [FHIRMarkdown::FIELD_VALUE => $value]) + ($json[self::FIELD_DESCRIPTION_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_CONTENT]) || array_key_exists(self::FIELD_CONTENT, $json)) {
            $type->setContent(FHIRReference::jsonUnserialize($json[self::FIELD_CONTENT], $config));
        }
        if (isset($json[self::FIELD_VERSION]) || array_key_exists(self::FIELD_VERSION, $json)) {
            $vs = $json[self::FIELD_VERSION];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addVersion(FHIRExampleScenarioVersion::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_CONTAINED_INSTANCE]) || array_key_exists(self::FIELD_CONTAINED_INSTANCE, $json)) {
            $vs = $json[self::FIELD_CONTAINED_INSTANCE];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addContainedInstance(FHIRExampleScenarioContainedInstance::jsonUnserialize($v, $config));
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
            if ($this->key->_nonValueFieldDefined()) {
                $ext = $this->key->jsonSerialize();
                unset($ext->value);
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
            if ($this->structureVersion->_nonValueFieldDefined()) {
                $ext = $this->structureVersion->jsonSerialize();
                unset($ext->value);
                $out->_structureVersion = $ext;
            }
        }
        if (isset($this->structureProfileCanonical)) {
            if (null !== ($val = $this->structureProfileCanonical->getValue())) {
                $out->structureProfileCanonical = $val;
            }
            if ($this->structureProfileCanonical->_nonValueFieldDefined()) {
                $ext = $this->structureProfileCanonical->jsonSerialize();
                unset($ext->value);
                $out->_structureProfileCanonical = $ext;
            }
        }
        if (isset($this->structureProfileUri)) {
            if (null !== ($val = $this->structureProfileUri->getValue())) {
                $out->structureProfileUri = $val;
            }
            if ($this->structureProfileUri->_nonValueFieldDefined()) {
                $ext = $this->structureProfileUri->jsonSerialize();
                unset($ext->value);
                $out->_structureProfileUri = $ext;
            }
        }
        if (isset($this->title)) {
            if (null !== ($val = $this->title->getValue())) {
                $out->title = $val;
            }
            if ($this->title->_nonValueFieldDefined()) {
                $ext = $this->title->jsonSerialize();
                unset($ext->value);
                $out->_title = $ext;
            }
        }
        if (isset($this->description)) {
            if (null !== ($val = $this->description->getValue())) {
                $out->description = $val;
            }
            if ($this->description->_nonValueFieldDefined()) {
                $ext = $this->description->jsonSerialize();
                unset($ext->value);
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
}