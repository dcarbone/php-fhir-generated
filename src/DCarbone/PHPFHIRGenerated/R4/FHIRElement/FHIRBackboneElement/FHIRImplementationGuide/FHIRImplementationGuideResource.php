<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: June 7th, 2024 20:38+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2024 Daniel Carbone (daniel.p.carbone@gmail.com)
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

use DCarbone\PHPFHIRGenerated\R4\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\R4\FHIRCanonicalPrimitive;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRFHIRVersion;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\R4\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConfig;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConfigKeyEnum;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlLocationEnum;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlWriter;

/**
 * A set of rules of how a particular interoperability or standards problem is
 * solved - typically through the use of FHIR resources. This resource is used to
 * gather all the parts of an implementation guide into a logical whole and to
 * publish a computable definition of all the parts.
 *
 * Class FHIRImplementationGuideResource
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide
 */
class FHIRImplementationGuideResource extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_IMPLEMENTATION_GUIDE_DOT_RESOURCE;

    const FIELD_REFERENCE = 'reference';
    const FIELD_FHIR_VERSION = 'fhirVersion';
    const FIELD_FHIR_VERSION_EXT = '_fhirVersion';
    const FIELD_NAME = 'name';
    const FIELD_NAME_EXT = '_name';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_DESCRIPTION_EXT = '_description';
    const FIELD_EXAMPLE_BOOLEAN = 'exampleBoolean';
    const FIELD_EXAMPLE_BOOLEAN_EXT = '_exampleBoolean';
    const FIELD_EXAMPLE_CANONICAL = 'exampleCanonical';
    const FIELD_EXAMPLE_CANONICAL_EXT = '_exampleCanonical';
    const FIELD_GROUPING_ID = 'groupingId';
    const FIELD_GROUPING_ID_EXT = '_groupingId';

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Where this resource is found.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $reference = null;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the FHIR Version(s) this artifact is intended to apply to. If no
     * versions are specified, the resource is assumed to apply to all the versions
     * stated in ImplementationGuide.fhirVersion.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRFHIRVersion[]
     */
    protected null|array $fhirVersion = [];
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A human assigned name for the resource. All resources SHOULD have a name, but
     * the name may be extracted from the resource (e.g. ValueSet.name).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected null|FHIRString $name = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A description of the reason that a resource has been included in the
     * implementation guide.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected null|FHIRString $description = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If true or a reference, indicates the resource is an example instance. If a
     * reference is present, indicates that the example is an example of the specified
     * profile.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    protected null|FHIRBoolean $exampleBoolean = null;
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
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical
     */
    protected null|FHIRCanonical $exampleCanonical = null;
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
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRId
     */
    protected null|FHIRId $groupingId = null;

    /**
     * Validation map for fields in type ImplementationGuide.Resource
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /** @var array */
    private array $_primitiveXmlLocations = [];

    /**
     * FHIRImplementationGuideResource Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_REFERENCE, $data)) {
            if ($data[self::FIELD_REFERENCE] instanceof FHIRReference) {
                $this->setReference($data[self::FIELD_REFERENCE]);
            } else {
                $this->setReference(new FHIRReference($data[self::FIELD_REFERENCE]));
            }
        }
        if (array_key_exists(self::FIELD_FHIR_VERSION, $data) || array_key_exists(self::FIELD_FHIR_VERSION_EXT, $data)) {
            $value = $data[self::FIELD_FHIR_VERSION] ?? null;
            $ext = (isset($data[self::FIELD_FHIR_VERSION_EXT]) && is_array($data[self::FIELD_FHIR_VERSION_EXT])) ? $data[self::FIELD_FHIR_VERSION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRFHIRVersion) {
                    $this->addFhirVersion($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRFHIRVersion) {
                            $this->addFhirVersion($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addFhirVersion(new FHIRFHIRVersion(array_merge($v, $iext)));
                            } else {
                                $this->addFhirVersion(new FHIRFHIRVersion([FHIRFHIRVersion::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addFhirVersion(new FHIRFHIRVersion(array_merge($ext, $value)));
                } else {
                    $this->addFhirVersion(new FHIRFHIRVersion([FHIRFHIRVersion::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addFhirVersion(new FHIRFHIRVersion($iext));
                }
            } else {
                $this->addFhirVersion(new FHIRFHIRVersion(null));
            }
        }
        if (array_key_exists(self::FIELD_NAME, $data) || array_key_exists(self::FIELD_NAME_EXT, $data)) {
            $value = $data[self::FIELD_NAME] ?? null;
            $ext = (isset($data[self::FIELD_NAME_EXT]) && is_array($data[self::FIELD_NAME_EXT])) ? $data[self::FIELD_NAME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setName($value);
                } else if (is_array($value)) {
                    $this->setName(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setName(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setName(new FHIRString($ext));
            } else {
                $this->setName(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_DESCRIPTION, $data) || array_key_exists(self::FIELD_DESCRIPTION_EXT, $data)) {
            $value = $data[self::FIELD_DESCRIPTION] ?? null;
            $ext = (isset($data[self::FIELD_DESCRIPTION_EXT]) && is_array($data[self::FIELD_DESCRIPTION_EXT])) ? $data[self::FIELD_DESCRIPTION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setDescription($value);
                } else if (is_array($value)) {
                    $this->setDescription(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setDescription(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDescription(new FHIRString($ext));
            } else {
                $this->setDescription(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_EXAMPLE_BOOLEAN, $data) || array_key_exists(self::FIELD_EXAMPLE_BOOLEAN_EXT, $data)) {
            $value = $data[self::FIELD_EXAMPLE_BOOLEAN] ?? null;
            $ext = (isset($data[self::FIELD_EXAMPLE_BOOLEAN_EXT]) && is_array($data[self::FIELD_EXAMPLE_BOOLEAN_EXT])) ? $data[self::FIELD_EXAMPLE_BOOLEAN_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setExampleBoolean($value);
                } else if (is_array($value)) {
                    $this->setExampleBoolean(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setExampleBoolean(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setExampleBoolean(new FHIRBoolean($ext));
            } else {
                $this->setExampleBoolean(new FHIRBoolean(null));
            }
        }
        if (array_key_exists(self::FIELD_EXAMPLE_CANONICAL, $data) || array_key_exists(self::FIELD_EXAMPLE_CANONICAL_EXT, $data)) {
            $value = $data[self::FIELD_EXAMPLE_CANONICAL] ?? null;
            $ext = (isset($data[self::FIELD_EXAMPLE_CANONICAL_EXT]) && is_array($data[self::FIELD_EXAMPLE_CANONICAL_EXT])) ? $data[self::FIELD_EXAMPLE_CANONICAL_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRCanonical) {
                    $this->setExampleCanonical($value);
                } else if (is_array($value)) {
                    $this->setExampleCanonical(new FHIRCanonical(array_merge($ext, $value)));
                } else {
                    $this->setExampleCanonical(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setExampleCanonical(new FHIRCanonical($ext));
            } else {
                $this->setExampleCanonical(new FHIRCanonical(null));
            }
        }
        if (array_key_exists(self::FIELD_GROUPING_ID, $data) || array_key_exists(self::FIELD_GROUPING_ID_EXT, $data)) {
            $value = $data[self::FIELD_GROUPING_ID] ?? null;
            $ext = (isset($data[self::FIELD_GROUPING_ID_EXT]) && is_array($data[self::FIELD_GROUPING_ID_EXT])) ? $data[self::FIELD_GROUPING_ID_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRId) {
                    $this->setGroupingId($value);
                } else if (is_array($value)) {
                    $this->setGroupingId(new FHIRId(array_merge($ext, $value)));
                } else {
                    $this->setGroupingId(new FHIRId([FHIRId::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setGroupingId(new FHIRId($ext));
            } else {
                $this->setGroupingId(new FHIRId(null));
            }
        }
    }

    /**
     * @return string
     */
    public function _getFhirTypeName(): string
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getReference(): null|FHIRReference
    {
        return $this->reference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Where this resource is found.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $reference
     * @return static
     */
    public function setReference(null|FHIRReference $reference = null): self
    {
        if (null === $reference) {
            $reference = new FHIRReference();
        }
        $this->_trackValueSet($this->reference, $reference);
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRFHIRVersion[]
     */
    public function getFhirVersion(): null|array
    {
        return $this->fhirVersion;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the FHIR Version(s) this artifact is intended to apply to. If no
     * versions are specified, the resource is assumed to apply to all the versions
     * stated in ImplementationGuide.fhirVersion.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRFHIRVersion $fhirVersion
     * @return static
     */
    public function addFhirVersion(null|FHIRFHIRVersion $fhirVersion = null): self
    {
        if (null === $fhirVersion) {
            $fhirVersion = new FHIRFHIRVersion();
        }
        $this->_trackValueAdded();
        $this->fhirVersion[] = $fhirVersion;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getName(): null|FHIRString
    {
        return $this->name;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A human assigned name for the resource. All resources SHOULD have a name, but
     * the name may be extracted from the resource (e.g. ValueSet.name).
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R4\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $name
     * @param \DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setName(null|string|FHIRStringPrimitive|FHIRString $name = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $name && !($name instanceof FHIRString)) {
            $name = new FHIRString($name);
        }
        $this->_trackValueSet($this->name, $name);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_NAME])) {
            $this->_primitiveXmlLocations[self::FIELD_NAME] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_NAME][0] = $xmlLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getDescription(): null|FHIRString
    {
        return $this->description;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A description of the reason that a resource has been included in the
     * implementation guide.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R4\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $description
     * @param \DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDescription(null|string|FHIRStringPrimitive|FHIRString $description = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $description && !($description instanceof FHIRString)) {
            $description = new FHIRString($description);
        }
        $this->_trackValueSet($this->description, $description);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_DESCRIPTION])) {
            $this->_primitiveXmlLocations[self::FIELD_DESCRIPTION] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_DESCRIPTION][0] = $xmlLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    public function getExampleBoolean(): null|FHIRBoolean
    {
        return $this->exampleBoolean;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If true or a reference, indicates the resource is an example instance. If a
     * reference is present, indicates that the example is an example of the specified
     * profile.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\R4\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean $exampleBoolean
     * @param \DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setExampleBoolean(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $exampleBoolean = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $exampleBoolean && !($exampleBoolean instanceof FHIRBoolean)) {
            $exampleBoolean = new FHIRBoolean($exampleBoolean);
        }
        $this->_trackValueSet($this->exampleBoolean, $exampleBoolean);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_EXAMPLE_BOOLEAN])) {
            $this->_primitiveXmlLocations[self::FIELD_EXAMPLE_BOOLEAN] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_EXAMPLE_BOOLEAN][0] = $xmlLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical
     */
    public function getExampleCanonical(): null|FHIRCanonical
    {
        return $this->exampleCanonical;
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\R4\FHIRCanonicalPrimitive|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical $exampleCanonical
     * @param \DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setExampleCanonical(null|string|FHIRCanonicalPrimitive|FHIRCanonical $exampleCanonical = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $exampleCanonical && !($exampleCanonical instanceof FHIRCanonical)) {
            $exampleCanonical = new FHIRCanonical($exampleCanonical);
        }
        $this->_trackValueSet($this->exampleCanonical, $exampleCanonical);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_EXAMPLE_CANONICAL])) {
            $this->_primitiveXmlLocations[self::FIELD_EXAMPLE_CANONICAL] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_EXAMPLE_CANONICAL][0] = $xmlLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRId
     */
    public function getGroupingId(): null|FHIRId
    {
        return $this->groupingId;
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\R4\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRId $groupingId
     * @param \DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setGroupingId(null|string|FHIRIdPrimitive|FHIRId $groupingId = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $groupingId && !($groupingId instanceof FHIRId)) {
            $groupingId = new FHIRId($groupingId);
        }
        $this->_trackValueSet($this->groupingId, $groupingId);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_GROUPING_ID])) {
            $this->_primitiveXmlLocations[self::FIELD_GROUPING_ID] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_GROUPING_ID][0] = $xmlLocation;
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
        return self::_VALIDATION_RULES;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by FHIR.  An empty array must be seen as
     * passing.
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
        if ([] !== ($vs = $this->getFhirVersion())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_FHIR_VERSION, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getName())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_NAME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDescription())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DESCRIPTION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getExampleBoolean())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EXAMPLE_BOOLEAN] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getExampleCanonical())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EXAMPLE_CANONICAL] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getGroupingId())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_GROUPING_ID] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_REFERENCE])) {
            $v = $this->getReference();
            foreach($validationRules[self::FIELD_REFERENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMPLEMENTATION_GUIDE_DOT_RESOURCE, self::FIELD_REFERENCE, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMPLEMENTATION_GUIDE_DOT_RESOURCE, self::FIELD_FHIR_VERSION, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMPLEMENTATION_GUIDE_DOT_RESOURCE, self::FIELD_NAME, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMPLEMENTATION_GUIDE_DOT_RESOURCE, self::FIELD_DESCRIPTION, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMPLEMENTATION_GUIDE_DOT_RESOURCE, self::FIELD_EXAMPLE_BOOLEAN, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMPLEMENTATION_GUIDE_DOT_RESOURCE, self::FIELD_EXAMPLE_CANONICAL, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMPLEMENTATION_GUIDE_DOT_RESOURCE, self::FIELD_GROUPING_ID, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BACKBONE_ELEMENT, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT, self::FIELD_EXTENSION, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT, self::FIELD_ID, $rule, $constraint, $v);
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
     * @param null|string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideResource $type
     * @param null|int|\DCarbone\PHPFHIRGenerated\R4\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideResource
     */
    public static function xmlUnserialize(null|string|\SimpleXMLElement $element, null|PHPFHIRTypeInterface $type = null, null|int|PHPFHIRConfig $config = null): null|self
    {
        if (null === $element) {
            return null;
        }
        if (is_int($config)) {
            $config = new PHPFHIRConfig([PHPFHIRConfigKeyEnum::LIBXML_OPTS->value => $config]);
        } else if (null === $config) {
            $config = new PHPFHIRConfig();
        }
        if (is_string($element)) {
            $element = new \SimpleXMLElement($element, $config->getLibxmlOpts());
        }
        if (null === $type) {
            $type = new static(null);
        } else if (!($type instanceof FHIRImplementationGuideResource)) {
            throw new \RuntimeException(sprintf(
                '%s::xmlUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null !== ($ns = $element->getNamespaces()[''] ?? null)) {
            $type->_setSourceXmlns((string)$ns);
        }
        foreach ($element->children() as $n) {
            $childName = $n->getName();
            if (self::FIELD_REFERENCE === $childName) {
                $type->setReference(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_FHIR_VERSION === $childName) {
                $type->addFhirVersion(FHIRFHIRVersion::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_NAME === $childName) {
                $type->setName(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_DESCRIPTION === $childName) {
                $type->setDescription(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_EXAMPLE_BOOLEAN === $childName) {
                $type->setExampleBoolean(FHIRBoolean::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_EXAMPLE_CANONICAL === $childName) {
                $type->setExampleCanonical(FHIRCanonical::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_GROUPING_ID === $childName) {
                $type->setGroupingId(FHIRId::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_NAME])) {
            $pt = $type->getName();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_NAME], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setName((string)$attributes[self::FIELD_NAME], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DESCRIPTION])) {
            $pt = $type->getDescription();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DESCRIPTION], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setDescription((string)$attributes[self::FIELD_DESCRIPTION], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_EXAMPLE_BOOLEAN])) {
            $pt = $type->getExampleBoolean();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_EXAMPLE_BOOLEAN], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setExampleBoolean((string)$attributes[self::FIELD_EXAMPLE_BOOLEAN], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_EXAMPLE_CANONICAL])) {
            $pt = $type->getExampleCanonical();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_EXAMPLE_CANONICAL], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setExampleCanonical((string)$attributes[self::FIELD_EXAMPLE_CANONICAL], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_GROUPING_ID])) {
            $pt = $type->getGroupingId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_GROUPING_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setGroupingId((string)$attributes[self::FIELD_GROUPING_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setId((string)$attributes[self::FIELD_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        return $type;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlWriter $xw
     * @param null|int|\DCarbone\PHPFHIRGenerated\R4\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return \DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlWriter
     */
    public function xmlSerialize(null|PHPFHIRXmlWriter $xw = null, null|int|PHPFHIRConfig $config = null): PHPFHIRXmlWriter
    {
        if (is_int($config)) {
            $config = new PHPFHIRConfig([PHPFHIRConfigKeyEnum::LIBXML_OPTS->value => $config]);
        } else if (null === $config) {
            $config = new PHPFHIRConfig();
        }
        if (null === $xw) {
            $xw = new PHPFHIRXmlWriter();
        }
        if (!$xw->isOpen()) {
            $xw->openMemory();
        }
        if (!$xw->isDocStarted()) {
            $docStarted = true;
            $xw->startDocument();
        }
        if (!$xw->isRootOpen()) {
            $openedRoot = true;
            $xw->openRootNode($config, 'ImplementationGuideResource', $this->_getSourceXmlns());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_NAME] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getName())) {
            $xw->writeAttribute(self::FIELD_NAME, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DESCRIPTION] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDescription())) {
            $xw->writeAttribute(self::FIELD_DESCRIPTION, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_EXAMPLE_BOOLEAN] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getExampleBoolean())) {
            $xw->writeAttribute(self::FIELD_EXAMPLE_BOOLEAN, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_EXAMPLE_CANONICAL] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getExampleCanonical())) {
            $xw->writeAttribute(self::FIELD_EXAMPLE_CANONICAL, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_GROUPING_ID] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getGroupingId())) {
            $xw->writeAttribute(self::FIELD_GROUPING_ID, $v->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (null !== ($v = $this->getReference())) {
            $xw->startElement(self::FIELD_REFERENCE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getFhirVersion() as $v) {
            $xw->startElement(self::FIELD_FHIR_VERSION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_NAME] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getName())) {
            $xw->startElement(self::FIELD_NAME);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DESCRIPTION] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDescription())) {
            $xw->startElement(self::FIELD_DESCRIPTION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_EXAMPLE_BOOLEAN] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getExampleBoolean())) {
            $xw->startElement(self::FIELD_EXAMPLE_BOOLEAN);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_EXAMPLE_CANONICAL] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getExampleCanonical())) {
            $xw->startElement(self::FIELD_EXAMPLE_CANONICAL);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_GROUPING_ID] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getGroupingId())) {
            $xw->startElement(self::FIELD_GROUPING_ID);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($openedRoot) && $openedRoot) {
            $xw->endElement();
        }
        if (isset($docStarted) && $docStarted) {
            $xw->endDocument();
        }
        return $xw;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (null !== ($v = $this->getReference())) {
            $out->{self::FIELD_REFERENCE} = $v;
        }
        if ([] !== ($vs = $this->getFhirVersion())) {
            $vals = [];
            $exts = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->{FHIRFHIRVersion::FIELD_VALUE});
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->{self::FIELD_FHIR_VERSION} = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_FHIR_VERSION_EXT} = $exts;
            }
        }
        if (null !== ($v = $this->getName())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_NAME} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_NAME_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDescription())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DESCRIPTION} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DESCRIPTION_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getExampleBoolean())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_EXAMPLE_BOOLEAN} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBoolean::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_EXAMPLE_BOOLEAN_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getExampleCanonical())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_EXAMPLE_CANONICAL} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRCanonical::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_EXAMPLE_CANONICAL_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getGroupingId())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_GROUPING_ID} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRId::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_GROUPING_ID_EXT} = $ext;
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