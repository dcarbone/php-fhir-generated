<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 6th, 2019 09:04+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2019 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 *   Generated on Thu, Dec 27, 2018 22:37+1100 for FHIR v4.0.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRFHIRVersion;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

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

    const FIELD_DESCRIPTION = 'description';
    const FIELD_DESCRIPTION_EXT = '_description';
    const FIELD_EXAMPLE_BOOLEAN = 'exampleBoolean';
    const FIELD_EXAMPLE_BOOLEAN_EXT = '_exampleBoolean';
    const FIELD_EXAMPLE_CANONICAL = 'exampleCanonical';
    const FIELD_EXAMPLE_CANONICAL_EXT = '_exampleCanonical';
    const FIELD_FHIR_VERSION = 'fhirVersion';
    const FIELD_GROUPING_ID = 'groupingId';
    const FIELD_GROUPING_ID_EXT = '_groupingId';
    const FIELD_NAME = 'name';
    const FIELD_NAME_EXT = '_name';
    const FIELD_REFERENCE = 'reference';

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A description of the reason that a resource has been included in the
     * implementation guide.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    private $description = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * If true or a reference, indicates the resource is an example instance. If a
     * reference is present, indicates that the example is an example of the specified
     * profile. (choose any one of example*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    private $exampleBoolean = null;
    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * If true or a reference, indicates the resource is an example instance. If a
     * reference is present, indicates that the example is an example of the specified
     * profile. (choose any one of example*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical
     */
    private $exampleCanonical = null;
    /**
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Indicates the FHIR Version(s) this artifact is intended to apply to. If no
     * versions are specified, the resource is assumed to apply to all the versions
     * stated in ImplementationGuide.fhirVersion.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRFHIRVersion[]
     */
    private $fhirVersion = [];
    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Reference to the id of the grouping this resource appears in.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRId
     */
    private $groupingId = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A human assigned name for the resource. All resources SHOULD have a name, but
     * the name may be extracted from the resource (e.g. ValueSet.name).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    private $name = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Where this resource is found.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    private $reference = null;

    /**
     * FHIRImplementationGuideResource Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRImplementationGuideResource::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_DESCRIPTION])) {
            $ext = (isset($data[self::FIELD_DESCRIPTION_EXT]) && is_array($data[self::FIELD_DESCRIPTION_EXT]))
                ? $data[self::FIELD_DESCRIPTION_EXT]
                : null;
            if ($data[self::FIELD_DESCRIPTION] instanceof FHIRString) {
                $this->setDescription($data[self::FIELD_DESCRIPTION]);
            } elseif ($ext && is_scalar($data[self::FIELD_DESCRIPTION])) {
                $this->setDescription(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_DESCRIPTION]] + $ext));
            } else {
                $this->setDescription(new FHIRString($data[self::FIELD_DESCRIPTION]));
            }
        }
        if (isset($data[self::FIELD_EXAMPLE_BOOLEAN])) {
            $ext = (isset($data[self::FIELD_EXAMPLE_BOOLEAN_EXT]) && is_array($data[self::FIELD_EXAMPLE_BOOLEAN_EXT]))
                ? $data[self::FIELD_EXAMPLE_BOOLEAN_EXT]
                : null;
            if ($data[self::FIELD_EXAMPLE_BOOLEAN] instanceof FHIRBoolean) {
                $this->setExampleBoolean($data[self::FIELD_EXAMPLE_BOOLEAN]);
            } elseif ($ext && is_scalar($data[self::FIELD_EXAMPLE_BOOLEAN])) {
                $this->setExampleBoolean(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $data[self::FIELD_EXAMPLE_BOOLEAN]] + $ext));
            } else {
                $this->setExampleBoolean(new FHIRBoolean($data[self::FIELD_EXAMPLE_BOOLEAN]));
            }
        }
        if (isset($data[self::FIELD_EXAMPLE_CANONICAL])) {
            $ext = (isset($data[self::FIELD_EXAMPLE_CANONICAL_EXT]) && is_array($data[self::FIELD_EXAMPLE_CANONICAL_EXT]))
                ? $data[self::FIELD_EXAMPLE_CANONICAL_EXT]
                : null;
            if ($data[self::FIELD_EXAMPLE_CANONICAL] instanceof FHIRCanonical) {
                $this->setExampleCanonical($data[self::FIELD_EXAMPLE_CANONICAL]);
            } elseif ($ext && is_scalar($data[self::FIELD_EXAMPLE_CANONICAL])) {
                $this->setExampleCanonical(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $data[self::FIELD_EXAMPLE_CANONICAL]] + $ext));
            } else {
                $this->setExampleCanonical(new FHIRCanonical($data[self::FIELD_EXAMPLE_CANONICAL]));
            }
        }
        if (isset($data[self::FIELD_FHIR_VERSION])) {
            if (is_array($data[self::FIELD_FHIR_VERSION])) {
                foreach($data[self::FIELD_FHIR_VERSION] as $v) {
                    if ($v instanceof FHIRFHIRVersion) {
                        $this->addFhirVersion($v);
                    } else {
                        $this->addFhirVersion(new FHIRFHIRVersion($v));
                    }
                }
            } else if ($data[self::FIELD_FHIR_VERSION] instanceof FHIRFHIRVersion) {
                $this->addFhirVersion($data[self::FIELD_FHIR_VERSION]);
            } else {
                $this->addFhirVersion(new FHIRFHIRVersion($data[self::FIELD_FHIR_VERSION]));
            }
        }
        if (isset($data[self::FIELD_GROUPING_ID])) {
            $ext = (isset($data[self::FIELD_GROUPING_ID_EXT]) && is_array($data[self::FIELD_GROUPING_ID_EXT]))
                ? $data[self::FIELD_GROUPING_ID_EXT]
                : null;
            if ($data[self::FIELD_GROUPING_ID] instanceof FHIRId) {
                $this->setGroupingId($data[self::FIELD_GROUPING_ID]);
            } elseif ($ext && is_scalar($data[self::FIELD_GROUPING_ID])) {
                $this->setGroupingId(new FHIRId([FHIRId::FIELD_VALUE => $data[self::FIELD_GROUPING_ID]] + $ext));
            } else {
                $this->setGroupingId(new FHIRId($data[self::FIELD_GROUPING_ID]));
            }
        }
        if (isset($data[self::FIELD_NAME])) {
            $ext = (isset($data[self::FIELD_NAME_EXT]) && is_array($data[self::FIELD_NAME_EXT]))
                ? $data[self::FIELD_NAME_EXT]
                : null;
            if ($data[self::FIELD_NAME] instanceof FHIRString) {
                $this->setName($data[self::FIELD_NAME]);
            } elseif ($ext && is_scalar($data[self::FIELD_NAME])) {
                $this->setName(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_NAME]] + $ext));
            } else {
                $this->setName(new FHIRString($data[self::FIELD_NAME]));
            }
        }
        if (isset($data[self::FIELD_REFERENCE])) {
            if ($data[self::FIELD_REFERENCE] instanceof FHIRReference) {
                $this->setReference($data[self::FIELD_REFERENCE]);
            } else {
                $this->setReference(new FHIRReference($data[self::FIELD_REFERENCE]));
            }
        }
    }

    /**
     * @return string
     */
    public function getFHIRTypeName()
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A description of the reason that a resource has been included in the
     * implementation guide.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A description of the reason that a resource has been included in the
     * implementation guide.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $description
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideResource
     */
    public function setDescription($description = null)
    {
        if (null === $description) {
            $this->description = null;
            return $this;
        }
        if ($description instanceof FHIRString) {
            $this->description = $description;
            return $this;
        }
        $this->description = new FHIRString($description);
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * If true or a reference, indicates the resource is an example instance. If a
     * reference is present, indicates that the example is an example of the specified
     * profile. (choose any one of example*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    public function getExampleBoolean()
    {
        return $this->exampleBoolean;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * If true or a reference, indicates the resource is an example instance. If a
     * reference is present, indicates that the example is an example of the specified
     * profile. (choose any one of example*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean $exampleBoolean
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideResource
     */
    public function setExampleBoolean($exampleBoolean = null)
    {
        if (null === $exampleBoolean) {
            $this->exampleBoolean = null;
            return $this;
        }
        if ($exampleBoolean instanceof FHIRBoolean) {
            $this->exampleBoolean = $exampleBoolean;
            return $this;
        }
        $this->exampleBoolean = new FHIRBoolean($exampleBoolean);
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * If true or a reference, indicates the resource is an example instance. If a
     * reference is present, indicates that the example is an example of the specified
     * profile. (choose any one of example*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical
     */
    public function getExampleCanonical()
    {
        return $this->exampleCanonical;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * If true or a reference, indicates the resource is an example instance. If a
     * reference is present, indicates that the example is an example of the specified
     * profile. (choose any one of example*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical $exampleCanonical
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideResource
     */
    public function setExampleCanonical($exampleCanonical = null)
    {
        if (null === $exampleCanonical) {
            $this->exampleCanonical = null;
            return $this;
        }
        if ($exampleCanonical instanceof FHIRCanonical) {
            $this->exampleCanonical = $exampleCanonical;
            return $this;
        }
        $this->exampleCanonical = new FHIRCanonical($exampleCanonical);
        return $this;
    }

    /**
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Indicates the FHIR Version(s) this artifact is intended to apply to. If no
     * versions are specified, the resource is assumed to apply to all the versions
     * stated in ImplementationGuide.fhirVersion.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRFHIRVersion[]
     */
    public function getFhirVersion()
    {
        return $this->fhirVersion;
    }

    /**
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Indicates the FHIR Version(s) this artifact is intended to apply to. If no
     * versions are specified, the resource is assumed to apply to all the versions
     * stated in ImplementationGuide.fhirVersion.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRFHIRVersion $fhirVersion
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideResource
     */
    public function addFhirVersion(FHIRFHIRVersion $fhirVersion = null)
    {
        $this->fhirVersion[] = $fhirVersion;
        return $this;
    }

    /**
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Indicates the FHIR Version(s) this artifact is intended to apply to. If no
     * versions are specified, the resource is assumed to apply to all the versions
     * stated in ImplementationGuide.fhirVersion.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRFHIRVersion[] $fhirVersion
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideResource
     */
    public function setFhirVersion(array $fhirVersion = [])
    {
        $this->fhirVersion = [];
        if ([] === $fhirVersion) {
            return $this;
        }
        foreach($fhirVersion as $v) {
            if ($v instanceof FHIRFHIRVersion) {
                $this->addFhirVersion($v);
            } else {
                $this->addFhirVersion(new FHIRFHIRVersion($v));
            }
        }
        return $this;
    }

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Reference to the id of the grouping this resource appears in.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRId
     */
    public function getGroupingId()
    {
        return $this->groupingId;
    }

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Reference to the id of the grouping this resource appears in.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRId $groupingId
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideResource
     */
    public function setGroupingId($groupingId = null)
    {
        if (null === $groupingId) {
            $this->groupingId = null;
            return $this;
        }
        if ($groupingId instanceof FHIRId) {
            $this->groupingId = $groupingId;
            return $this;
        }
        $this->groupingId = new FHIRId($groupingId);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A human assigned name for the resource. All resources SHOULD have a name, but
     * the name may be extracted from the resource (e.g. ValueSet.name).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A human assigned name for the resource. All resources SHOULD have a name, but
     * the name may be extracted from the resource (e.g. ValueSet.name).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $name
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideResource
     */
    public function setName($name = null)
    {
        if (null === $name) {
            $this->name = null;
            return $this;
        }
        if ($name instanceof FHIRString) {
            $this->name = $name;
            return $this;
        }
        $this->name = new FHIRString($name);
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Where this resource is found.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Where this resource is found.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $reference
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideResource
     */
    public function setReference(FHIRReference $reference = null)
    {
        $this->reference = $reference;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideResource $type
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideResource
     */
    public static function xmlUnserialize($sxe = null, PHPFHIRTypeInterface $type = null)
    {
        if (null === $sxe) {
            return null;
        }
        if (is_string($sxe)) {
            libxml_use_internal_errors(true);
            $sxe = new \SimpleXMLElement($sxe);
            if ($sxe === false) {
                throw new \DomainException(sprintf('FHIRImplementationGuideResource::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRImplementationGuideResource::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRBackboneElement::xmlUnserialize($sxe, new FHIRImplementationGuideResource);
        } elseif (!is_object($type) || !($type instanceof FHIRImplementationGuideResource)) {
            throw new \RuntimeException(sprintf(
                'FHIRImplementationGuideResource::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideResource or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($attributes->description)) {
            $type->setDescription((string)$attributes->description);
        }
        if (isset($children->description)) {
            $type->setDescription(FHIRString::xmlUnserialize($children->description));
        }
        if (isset($attributes->exampleBoolean)) {
            $type->setExampleBoolean((string)$attributes->exampleBoolean);
        }
        if (isset($children->exampleBoolean)) {
            $type->setExampleBoolean(FHIRBoolean::xmlUnserialize($children->exampleBoolean));
        }
        if (isset($attributes->exampleCanonical)) {
            $type->setExampleCanonical((string)$attributes->exampleCanonical);
        }
        if (isset($children->exampleCanonical)) {
            $type->setExampleCanonical(FHIRCanonical::xmlUnserialize($children->exampleCanonical));
        }
        if (isset($children->fhirVersion)) {
            foreach($children->fhirVersion as $child) {
                $type->addFhirVersion(FHIRFHIRVersion::xmlUnserialize($child));
            }
        }
        if (isset($attributes->groupingId)) {
            $type->setGroupingId((string)$attributes->groupingId);
        }
        if (isset($children->groupingId)) {
            $type->setGroupingId(FHIRId::xmlUnserialize($children->groupingId));
        }
        if (isset($attributes->name)) {
            $type->setName((string)$attributes->name);
        }
        if (isset($children->name)) {
            $type->setName(FHIRString::xmlUnserialize($children->name));
        }
        if (isset($children->reference)) {
            $type->setReference(FHIRReference::xmlUnserialize($children->reference));
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement $sxe
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<ImplementationGuideResource xmlns="http://hl7.org/fhir"></ImplementationGuideResource>');
        }
        parent::xmlSerialize($sxe);
        if (null !== ($v = $this->getDescription())) {
            $sxe->addAttribute(self::FIELD_DESCRIPTION, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_DESCRIPTION));
            }
        }
        if (null !== ($v = $this->getExampleBoolean())) {
            $sxe->addAttribute(self::FIELD_EXAMPLE_BOOLEAN, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_EXAMPLE_BOOLEAN));
            }
        }
        if (null !== ($v = $this->getExampleCanonical())) {
            $sxe->addAttribute(self::FIELD_EXAMPLE_CANONICAL, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_EXAMPLE_CANONICAL));
            }
        }

        if ([] !== ($vs = $this->getFhirVersion())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_FHIR_VERSION));
            }
        }
        if (null !== ($v = $this->getGroupingId())) {
            $sxe->addAttribute(self::FIELD_GROUPING_ID, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_GROUPING_ID));
            }
        }
        if (null !== ($v = $this->getName())) {
            $sxe->addAttribute(self::FIELD_NAME, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_NAME));
            }
        }

        if (null !== ($v = $this->getReference())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_REFERENCE));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getDescription())) {
            $a[self::FIELD_DESCRIPTION] = (string)$v;
            $a[self::FIELD_DESCRIPTION_EXT] = $v;
        }
        if (null !== ($v = $this->getExampleBoolean())) {
            $a[self::FIELD_EXAMPLE_BOOLEAN] = (string)$v;
            $a[self::FIELD_EXAMPLE_BOOLEAN_EXT] = $v;
        }
        if (null !== ($v = $this->getExampleCanonical())) {
            $a[self::FIELD_EXAMPLE_CANONICAL] = (string)$v;
            $a[self::FIELD_EXAMPLE_CANONICAL_EXT] = $v;
        }
        if ([] !== ($vs = $this->getFhirVersion())) {
            $a[self::FIELD_FHIR_VERSION] = $vs;
        }
        if (null !== ($v = $this->getGroupingId())) {
            $a[self::FIELD_GROUPING_ID] = (string)$v;
            $a[self::FIELD_GROUPING_ID_EXT] = $v;
        }
        if (null !== ($v = $this->getName())) {
            $a[self::FIELD_NAME] = (string)$v;
            $a[self::FIELD_NAME_EXT] = $v;
        }
        if (null !== ($v = $this->getReference())) {
            $a[self::FIELD_REFERENCE] = $v;
        }
        return [PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE => self::FHIR_TYPE_NAME] + $a;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}