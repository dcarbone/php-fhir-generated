<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 17th, 2025 18:09+0000
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
 *   Generated on Fri, Nov 1, 2019 09:29+1100 for FHIR v4.0.1
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
use DCarbone\PHPFHIRGenerated\TypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRCanonicalPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCanonical;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRFHIRVersion;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Version;
use DCarbone\PHPFHIRGenerated\Versions\R4\VersionConstants;

/**
 * A set of rules of how a particular interoperability or standards problem is
 * solved - typically through the use of FHIR resources. This resource is used to
 * gather all the parts of an implementation guide into a logical whole and to
 * publish a computable definition of all the parts.
 */
class FHIRImplementationGuideResource extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_IMPLEMENTATION_GUIDE_DOT_RESOURCE;


    public const FIELD_REFERENCE = 'reference';
    public const FIELD_FHIR_VERSION = 'fhirVersion';
    public const FIELD_FHIR_VERSION_EXT = '_fhirVersion';
    public const FIELD_NAME = 'name';
    public const FIELD_NAME_EXT = '_name';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DESCRIPTION_EXT = '_description';
    public const FIELD_EXAMPLE_BOOLEAN = 'exampleBoolean';
    public const FIELD_EXAMPLE_BOOLEAN_EXT = '_exampleBoolean';
    public const FIELD_EXAMPLE_CANONICAL = 'exampleCanonical';
    public const FIELD_EXAMPLE_CANONICAL_EXT = '_exampleCanonical';
    public const FIELD_GROUPING_ID = 'groupingId';
    public const FIELD_GROUPING_ID_EXT = '_groupingId';

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Where this resource is found.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $reference;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the FHIR Version(s) this artifact is intended to apply to. If no
     * versions are specified, the resource is assumed to apply to all the versions
     * stated in ImplementationGuide.fhirVersion.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRFHIRVersion[] 
     */
    protected array $fhirVersion;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A human assigned name for the resource. All resources SHOULD have a name, but
     * the name may be extracted from the resource (e.g. ValueSet.name).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $name;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A description of the reason that a resource has been included in the
     * implementation guide.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $description;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If true or a reference, indicates the resource is an example instance. If a
     * reference is present, indicates that the example is an example of the specified
     * profile.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $exampleBoolean;
    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * If true or a reference, indicates the resource is an example instance. If a
     * reference is present, indicates that the example is an example of the specified
     * profile.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCanonical 
     */
    protected FHIRCanonical $exampleCanonical;
    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Reference to the id of the grouping this resource appears in.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId 
     */
    protected FHIRId $groupingId;

    /** Default validation map for fields in type ImplementationGuide.Resource */
    private const _DEFAULT_VALIDATION_RULES = [
        self::FIELD_REFERENCE => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /**
     * FHIRImplementationGuideResource Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $reference
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRFHIRVersion[] $fhirVersion
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $name
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $description
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBoolean $exampleBoolean
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRCanonicalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCanonical $exampleCanonical
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId $groupingId
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|FHIRReference $reference = null,
                                null|iterable $fhirVersion = null,
                                null|string|FHIRStringPrimitive|FHIRString $name = null,
                                null|string|FHIRStringPrimitive|FHIRString $description = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $exampleBoolean = null,
                                null|string|FHIRCanonicalPrimitive|FHIRCanonical $exampleCanonical = null,
                                null|string|FHIRIdPrimitive|FHIRId $groupingId = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $reference) {
            $this->setReference($reference);
        }
        if (null !== $fhirVersion) {
            $this->setFhirVersion(...$fhirVersion);
        }
        if (null !== $name) {
            $this->setName($name);
        }
        if (null !== $description) {
            $this->setDescription($description);
        }
        if (null !== $exampleBoolean) {
            $this->setExampleBoolean($exampleBoolean);
        }
        if (null !== $exampleCanonical) {
            $this->setExampleCanonical($exampleCanonical);
        }
        if (null !== $groupingId) {
            $this->setGroupingId($groupingId);
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
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Where this resource is found.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference
     */
    public function getReference(): null|FHIRReference
    {
        return $this->reference ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Where this resource is found.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $reference
     * @return static
     */
    public function setReference(null|FHIRReference $reference): self
    {
        if (null === $reference) {
            unset($this->reference);
            return $this;
        }
        $this->reference = $reference;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the FHIR Version(s) this artifact is intended to apply to. If no
     * versions are specified, the resource is assumed to apply to all the versions
     * stated in ImplementationGuide.fhirVersion.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRFHIRVersion[]
     */
    public function getFhirVersion(): array
    {
        return $this->fhirVersion ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRFHIRVersion>
     */
    public function getFhirVersionIterator(): iterable
    {
        if (!isset($this->fhirVersion) || [] === $this->fhirVersion) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->fhirVersion);
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the FHIR Version(s) this artifact is intended to apply to. If no
     * versions are specified, the resource is assumed to apply to all the versions
     * stated in ImplementationGuide.fhirVersion.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRFHIRVersion $fhirVersion
     * @return static
     */
    public function addFhirVersion(FHIRFHIRVersion $fhirVersion): self
    {
        if (!isset($this->fhirVersion)) {
            $this->fhirVersion = [];
        }
        $this->fhirVersion[] = $fhirVersion;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the FHIR Version(s) this artifact is intended to apply to. If no
     * versions are specified, the resource is assumed to apply to all the versions
     * stated in ImplementationGuide.fhirVersion.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRFHIRVersion ...$fhirVersion
     * @return static
     */
    public function setFhirVersion(FHIRFHIRVersion ...$fhirVersion): self
    {
        $this->fhirVersion = [];
        foreach($fhirVersion as $v) {
            if ($v instanceof FHIRFHIRVersion) {
                $this->fhirVersion[] = $v;
            } else {
                $this->fhirVersion[] = new FHIRFHIRVersion(value: $v);
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A human assigned name for the resource. All resources SHOULD have a name, but
     * the name may be extracted from the resource (e.g. ValueSet.name).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString
     */
    public function getName(): null|FHIRString
    {
        return $this->name ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A human assigned name for the resource. All resources SHOULD have a name, but
     * the name may be extracted from the resource (e.g. ValueSet.name).
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $name
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setName(null|string|FHIRStringPrimitive|FHIRString $name,
                            null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $name) {
            unset($this->name);
            return $this;
        }
        if (!($name instanceof FHIRString)) {
            $name = new FHIRString(value: $name);
        }
        if (null !== $valueXMLLocation) {
            $name->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $name->_getValueXMLLocation()) {
            $name->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->name = $name;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A description of the reason that a resource has been included in the
     * implementation guide.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString
     */
    public function getDescription(): null|FHIRString
    {
        return $this->description ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A description of the reason that a resource has been included in the
     * implementation guide.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $description
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDescription(null|string|FHIRStringPrimitive|FHIRString $description,
                                   null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $description) {
            unset($this->description);
            return $this;
        }
        if (!($description instanceof FHIRString)) {
            $description = new FHIRString(value: $description);
        }
        if (null !== $valueXMLLocation) {
            $description->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $description->_getValueXMLLocation()) {
            $description->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->description = $description;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If true or a reference, indicates the resource is an example instance. If a
     * reference is present, indicates that the example is an example of the specified
     * profile.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBoolean
     */
    public function getExampleBoolean(): null|FHIRBoolean
    {
        return $this->exampleBoolean ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If true or a reference, indicates the resource is an example instance. If a
     * reference is present, indicates that the example is an example of the specified
     * profile.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBoolean $exampleBoolean
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setExampleBoolean(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $exampleBoolean,
                                      null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $exampleBoolean) {
            unset($this->exampleBoolean);
            return $this;
        }
        if (!($exampleBoolean instanceof FHIRBoolean)) {
            $exampleBoolean = new FHIRBoolean(value: $exampleBoolean);
        }
        if (null !== $valueXMLLocation) {
            $exampleBoolean->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $exampleBoolean->_getValueXMLLocation()) {
            $exampleBoolean->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->exampleBoolean = $exampleBoolean;
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * If true or a reference, indicates the resource is an example instance. If a
     * reference is present, indicates that the example is an example of the specified
     * profile.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCanonical
     */
    public function getExampleCanonical(): null|FHIRCanonical
    {
        return $this->exampleCanonical ?? null;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * If true or a reference, indicates the resource is an example instance. If a
     * reference is present, indicates that the example is an example of the specified
     * profile.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRCanonicalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCanonical $exampleCanonical
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setExampleCanonical(null|string|FHIRCanonicalPrimitive|FHIRCanonical $exampleCanonical,
                                        null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $exampleCanonical) {
            unset($this->exampleCanonical);
            return $this;
        }
        if (!($exampleCanonical instanceof FHIRCanonical)) {
            $exampleCanonical = new FHIRCanonical(value: $exampleCanonical);
        }
        if (null !== $valueXMLLocation) {
            $exampleCanonical->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $exampleCanonical->_getValueXMLLocation()) {
            $exampleCanonical->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->exampleCanonical = $exampleCanonical;
        return $this;
    }

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Reference to the id of the grouping this resource appears in.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId
     */
    public function getGroupingId(): null|FHIRId
    {
        return $this->groupingId ?? null;
    }

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Reference to the id of the grouping this resource appears in.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId $groupingId
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setGroupingId(null|string|FHIRIdPrimitive|FHIRId $groupingId,
                                  null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $groupingId) {
            unset($this->groupingId);
            return $this;
        }
        if (!($groupingId instanceof FHIRId)) {
            $groupingId = new FHIRId(value: $groupingId);
        }
        if (null !== $valueXMLLocation) {
            $groupingId->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $groupingId->_getValueXMLLocation()) {
            $groupingId->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->groupingId = $groupingId;
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
        if (null !== ($v = $this->getReference())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REFERENCE] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_REFERENCE])) {
            $v = $this->getReference();
            foreach($validationRules[self::FIELD_REFERENCE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REFERENCE])) {
                        $errs[self::FIELD_REFERENCE] = [];
                    }
                    $errs[self::FIELD_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FHIR_VERSION])) {
            $v = $this->getFhirVersion();
            foreach($validationRules[self::FIELD_FHIR_VERSION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_FHIR_VERSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FHIR_VERSION])) {
                        $errs[self::FIELD_FHIR_VERSION] = [];
                    }
                    $errs[self::FIELD_FHIR_VERSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NAME])) {
            $v = $this->getName();
            foreach($validationRules[self::FIELD_NAME] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_NAME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NAME])) {
                        $errs[self::FIELD_NAME] = [];
                    }
                    $errs[self::FIELD_NAME][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_EXAMPLE_BOOLEAN])) {
            $v = $this->getExampleBoolean();
            foreach($validationRules[self::FIELD_EXAMPLE_BOOLEAN] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EXAMPLE_BOOLEAN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXAMPLE_BOOLEAN])) {
                        $errs[self::FIELD_EXAMPLE_BOOLEAN] = [];
                    }
                    $errs[self::FIELD_EXAMPLE_BOOLEAN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXAMPLE_CANONICAL])) {
            $v = $this->getExampleCanonical();
            foreach($validationRules[self::FIELD_EXAMPLE_CANONICAL] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EXAMPLE_CANONICAL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXAMPLE_CANONICAL])) {
                        $errs[self::FIELD_EXAMPLE_CANONICAL] = [];
                    }
                    $errs[self::FIELD_EXAMPLE_CANONICAL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_GROUPING_ID])) {
            $v = $this->getGroupingId();
            foreach($validationRules[self::FIELD_GROUPING_ID] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_GROUPING_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_GROUPING_ID])) {
                        $errs[self::FIELD_GROUPING_ID] = [];
                    }
                    $errs[self::FIELD_GROUPING_ID][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideResource $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideResource
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRImplementationGuideResource)) {
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
                $valueAttr = $n->attributes()[FHIRStringPrimitive::FIELD_VALUE] ?? null;
                 if (null !== $valueAttr) {
                    $value = (string)$valueAttr;
                } else if ($n->hasChildren()) {
                    $value = $n->saveXML();
                } else {
                    $value = (string)$n;
                }
                $type->setId($value, ValueXMLLocationEnum::ELEMENT);
            } else if (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_REFERENCE === $childName) {
                $v = new FHIRReference();
                $type->setReference(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_FHIR_VERSION === $childName) {
                $v = new FHIRFHIRVersion(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->addFhirVersion(FHIRFHIRVersion::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_NAME === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setName(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DESCRIPTION === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setDescription(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_EXAMPLE_BOOLEAN === $childName) {
                $v = new FHIRBoolean(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setExampleBoolean(FHIRBoolean::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_EXAMPLE_CANONICAL === $childName) {
                $v = new FHIRCanonical(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setExampleCanonical(FHIRCanonical::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_GROUPING_ID === $childName) {
                $v = new FHIRId(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setGroupingId(FHIRId::xmlUnserialize($n, $v, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_ID]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setId(new FHIRStringPrimitive(
                    value: (string)$attributes[self::FIELD_ID],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_NAME])) {
            $pt = $type->getName();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_NAME]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setName(new FHIRString(
                    value: (string)$attributes[self::FIELD_NAME],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_DESCRIPTION])) {
            $pt = $type->getDescription();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_DESCRIPTION]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setDescription(new FHIRString(
                    value: (string)$attributes[self::FIELD_DESCRIPTION],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_EXAMPLE_BOOLEAN])) {
            $pt = $type->getExampleBoolean();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_EXAMPLE_BOOLEAN]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setExampleBoolean(new FHIRBoolean(
                    value: (string)$attributes[self::FIELD_EXAMPLE_BOOLEAN],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_EXAMPLE_CANONICAL])) {
            $pt = $type->getExampleCanonical();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_EXAMPLE_CANONICAL]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setExampleCanonical(new FHIRCanonical(
                    value: (string)$attributes[self::FIELD_EXAMPLE_CANONICAL],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_GROUPING_ID])) {
            $pt = $type->getGroupingId();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_GROUPING_ID]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setGroupingId(new FHIRId(
                    value: (string)$attributes[self::FIELD_GROUPING_ID],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
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
            $xw->openRootNode('ImplementationGuideResource', $this->_getSourceXMLNS());
        }
        if (isset($this->name) && $this->name->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_NAME, $this->name->getValue()?->_getFormattedValue());
        }
        if (isset($this->description) && $this->description->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_DESCRIPTION, $this->description->getValue()?->_getFormattedValue());
        }
        if (isset($this->exampleBoolean) && $this->exampleBoolean->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_EXAMPLE_BOOLEAN, $this->exampleBoolean->getValue()?->_getFormattedValue());
        }
        if (isset($this->exampleCanonical) && $this->exampleCanonical->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_EXAMPLE_CANONICAL, $this->exampleCanonical->getValue()?->_getFormattedValue());
        }
        if (isset($this->groupingId) && $this->groupingId->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_GROUPING_ID, $this->groupingId->getValue()?->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->reference)) {
            $xw->startElement(self::FIELD_REFERENCE);
            $this->reference->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->fhirVersion)) {
            foreach ($this->fhirVersion as $v) {
                $xw->startElement(self::FIELD_FHIR_VERSION);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->name) && $this->name->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_NAME);
            $this->name->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->description) && $this->description->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_DESCRIPTION);
            $this->description->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->exampleBoolean) && $this->exampleBoolean->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_EXAMPLE_BOOLEAN);
            $this->exampleBoolean->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->exampleCanonical) && $this->exampleCanonical->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_EXAMPLE_CANONICAL);
            $this->exampleCanonical->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->groupingId) && $this->groupingId->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_GROUPING_ID);
            $this->groupingId->xmlSerialize($xw, $config);
            $xw->endElement();
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideResource $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideResource
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRImplementationGuideResource)) {
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
        if (isset($json[self::FIELD_REFERENCE]) || array_key_exists(self::FIELD_REFERENCE, $json)) {
            if ($json[self::FIELD_REFERENCE] instanceof FHIRReference) {
                $type->setReference($json[self::FIELD_REFERENCE]);
            } else {
                $type->setReference(new FHIRReference($json[self::FIELD_REFERENCE]));
            }
        }
        if (isset($json[self::FIELD_FHIR_VERSION]) || isset($json[self::FIELD_FHIR_VERSION_EXT]) || array_key_exists(self::FIELD_FHIR_VERSION, $json) || array_key_exists(self::FIELD_FHIR_VERSION_EXT, $json)) {
            $value = $json[self::FIELD_FHIR_VERSION] ?? null;
            $ext = (isset($json[self::FIELD_FHIR_VERSION_EXT]) && is_array($json[self::FIELD_FHIR_VERSION_EXT])) ? $json[self::FIELD_FHIR_VERSION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRFHIRVersion) {
                    $type->addFhirVersion($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRFHIRVersion) {
                            $type->addFhirVersion($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $type->addFhirVersion(new FHIRFHIRVersion(array_merge($v, $iext)));
                            } else {
                                $type->addFhirVersion(new FHIRFHIRVersion([FHIRFHIRVersion::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $type->addFhirVersion(new FHIRFHIRVersion(array_merge($ext, $value)));
                } else {
                    $type->addFhirVersion(new FHIRFHIRVersion([FHIRFHIRVersion::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $type->addFhirVersion(new FHIRFHIRVersion($iext));
                }
            } else {
                $type->addFhirVersion(new FHIRFHIRVersion(null));
            }
        }
        if (isset($json[self::FIELD_NAME]) || isset($json[self::FIELD_NAME_EXT]) || array_key_exists(self::FIELD_NAME, $json) || array_key_exists(self::FIELD_NAME_EXT, $json)) {
            $value = $json[self::FIELD_NAME] ?? null;
            $ext = (isset($json[self::FIELD_NAME_EXT]) && is_array($json[self::FIELD_NAME_EXT])) ? $json[self::FIELD_NAME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setName($value);
                } else if (is_array($value)) {
                    $type->setName(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setName(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setName(new FHIRString($ext));
            } else {
                $type->setName(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_DESCRIPTION]) || isset($json[self::FIELD_DESCRIPTION_EXT]) || array_key_exists(self::FIELD_DESCRIPTION, $json) || array_key_exists(self::FIELD_DESCRIPTION_EXT, $json)) {
            $value = $json[self::FIELD_DESCRIPTION] ?? null;
            $ext = (isset($json[self::FIELD_DESCRIPTION_EXT]) && is_array($json[self::FIELD_DESCRIPTION_EXT])) ? $json[self::FIELD_DESCRIPTION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setDescription($value);
                } else if (is_array($value)) {
                    $type->setDescription(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setDescription(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setDescription(new FHIRString($ext));
            } else {
                $type->setDescription(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_EXAMPLE_BOOLEAN]) || isset($json[self::FIELD_EXAMPLE_BOOLEAN_EXT]) || array_key_exists(self::FIELD_EXAMPLE_BOOLEAN, $json) || array_key_exists(self::FIELD_EXAMPLE_BOOLEAN_EXT, $json)) {
            $value = $json[self::FIELD_EXAMPLE_BOOLEAN] ?? null;
            $ext = (isset($json[self::FIELD_EXAMPLE_BOOLEAN_EXT]) && is_array($json[self::FIELD_EXAMPLE_BOOLEAN_EXT])) ? $json[self::FIELD_EXAMPLE_BOOLEAN_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $type->setExampleBoolean($value);
                } else if (is_array($value)) {
                    $type->setExampleBoolean(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $type->setExampleBoolean(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setExampleBoolean(new FHIRBoolean($ext));
            } else {
                $type->setExampleBoolean(new FHIRBoolean(null));
            }
        }
        if (isset($json[self::FIELD_EXAMPLE_CANONICAL]) || isset($json[self::FIELD_EXAMPLE_CANONICAL_EXT]) || array_key_exists(self::FIELD_EXAMPLE_CANONICAL, $json) || array_key_exists(self::FIELD_EXAMPLE_CANONICAL_EXT, $json)) {
            $value = $json[self::FIELD_EXAMPLE_CANONICAL] ?? null;
            $ext = (isset($json[self::FIELD_EXAMPLE_CANONICAL_EXT]) && is_array($json[self::FIELD_EXAMPLE_CANONICAL_EXT])) ? $json[self::FIELD_EXAMPLE_CANONICAL_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRCanonical) {
                    $type->setExampleCanonical($value);
                } else if (is_array($value)) {
                    $type->setExampleCanonical(new FHIRCanonical(array_merge($ext, $value)));
                } else {
                    $type->setExampleCanonical(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setExampleCanonical(new FHIRCanonical($ext));
            } else {
                $type->setExampleCanonical(new FHIRCanonical(null));
            }
        }
        if (isset($json[self::FIELD_GROUPING_ID]) || isset($json[self::FIELD_GROUPING_ID_EXT]) || array_key_exists(self::FIELD_GROUPING_ID, $json) || array_key_exists(self::FIELD_GROUPING_ID_EXT, $json)) {
            $value = $json[self::FIELD_GROUPING_ID] ?? null;
            $ext = (isset($json[self::FIELD_GROUPING_ID_EXT]) && is_array($json[self::FIELD_GROUPING_ID_EXT])) ? $json[self::FIELD_GROUPING_ID_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRId) {
                    $type->setGroupingId($value);
                } else if (is_array($value)) {
                    $type->setGroupingId(new FHIRId(array_merge($ext, $value)));
                } else {
                    $type->setGroupingId(new FHIRId([FHIRId::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setGroupingId(new FHIRId($ext));
            } else {
                $type->setGroupingId(new FHIRId(null));
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
        if (isset($this->reference)) {
            $out->reference = $this->reference;
        }
        if (isset($this->fhirVersion) && [] !== $this->fhirVersion) {
            $vals = [];
            $exts = [];
            foreach ($this->fhirVersion as $v) {
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
                $out->fhirVersion = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->_fhirVersion = $exts;
            }
        }
        if (isset($this->name)) {
            if (null !== ($val = $this->name->getValue())) {
                $out->name = $val;
            }
            $ext = $this->name->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_name = $ext;
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
        if (isset($this->exampleBoolean)) {
            if (null !== ($val = $this->exampleBoolean->getValue())) {
                $out->exampleBoolean = $val;
            }
            $ext = $this->exampleBoolean->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_exampleBoolean = $ext;
            }
        }
        if (isset($this->exampleCanonical)) {
            if (null !== ($val = $this->exampleCanonical->getValue())) {
                $out->exampleCanonical = $val;
            }
            $ext = $this->exampleCanonical->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_exampleCanonical = $ext;
            }
        }
        if (isset($this->groupingId)) {
            if (null !== ($val = $this->groupingId->getValue())) {
                $out->groupingId = $val;
            }
            $ext = $this->groupingId->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_groupingId = $ext;
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