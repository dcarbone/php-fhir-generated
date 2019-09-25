<?php

namespace DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: September 25th, 2019 18:19+0000
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

use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCanonical;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRUrl;
use DCarbone\PHPFHIRGenerated\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\PHPFHIRTypeInterface;

/**
 * A set of rules of how a particular interoperability or standards problem is
 * solved - typically through the use of FHIR resources. This resource is used to
 * gather all the parts of an implementation guide into a logical whole and to
 * publish a computable definition of all the parts.
 *
 * Class FHIRImplementationGuideResource1
 * @package \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide
 */
class FHIRImplementationGuideResource1 extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_IMPLEMENTATION_GUIDE_DOT_RESOURCE_1;

    const FIELD_EXAMPLE_BOOLEAN = 'exampleBoolean';
    const FIELD_EXAMPLE_BOOLEAN_EXT = '_exampleBoolean';
    const FIELD_EXAMPLE_CANONICAL = 'exampleCanonical';
    const FIELD_EXAMPLE_CANONICAL_EXT = '_exampleCanonical';
    const FIELD_REFERENCE = 'reference';
    const FIELD_RELATIVE_PATH = 'relativePath';
    const FIELD_RELATIVE_PATH_EXT = '_relativePath';

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * If true or a reference, indicates the resource is an example instance. If a
     * reference is present, indicates that the example is an example of the specified
     * profile. (choose any one of example*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBoolean
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
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    private $exampleCanonical = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Where this resource is found.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $reference = null;

    /**
     * A URI that is a literal reference
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * The relative path for primary page for this resource within the IG.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRUrl
     */
    private $relativePath = null;

    /**
     * FHIRImplementationGuideResource1 Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRImplementationGuideResource1::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
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
        if (isset($data[self::FIELD_REFERENCE])) {
            if ($data[self::FIELD_REFERENCE] instanceof FHIRReference) {
                $this->setReference($data[self::FIELD_REFERENCE]);
            } else {
                $this->setReference(new FHIRReference($data[self::FIELD_REFERENCE]));
            }
        }
        if (isset($data[self::FIELD_RELATIVE_PATH])) {
            $ext = (isset($data[self::FIELD_RELATIVE_PATH_EXT]) && is_array($data[self::FIELD_RELATIVE_PATH_EXT]))
                ? $data[self::FIELD_RELATIVE_PATH_EXT]
                : null;
            if ($data[self::FIELD_RELATIVE_PATH] instanceof FHIRUrl) {
                $this->setRelativePath($data[self::FIELD_RELATIVE_PATH]);
            } elseif ($ext && is_scalar($data[self::FIELD_RELATIVE_PATH])) {
                $this->setRelativePath(new FHIRUrl([FHIRUrl::FIELD_VALUE => $data[self::FIELD_RELATIVE_PATH]] + $ext));
            } else {
                $this->setRelativePath(new FHIRUrl($data[self::FIELD_RELATIVE_PATH]));
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
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * If true or a reference, indicates the resource is an example instance. If a
     * reference is present, indicates that the example is an example of the specified
     * profile. (choose any one of example*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBoolean
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
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBoolean $exampleBoolean
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideResource1
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
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCanonical
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
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCanonical $exampleCanonical
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideResource1
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
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Where this resource is found.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
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
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference $reference
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideResource1
     */
    public function setReference(FHIRReference $reference = null)
    {
        $this->reference = $reference;
        return $this;
    }

    /**
     * A URI that is a literal reference
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * The relative path for primary page for this resource within the IG.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRUrl
     */
    public function getRelativePath()
    {
        return $this->relativePath;
    }

    /**
     * A URI that is a literal reference
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * The relative path for primary page for this resource within the IG.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRUrl $relativePath
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideResource1
     */
    public function setRelativePath($relativePath = null)
    {
        if (null === $relativePath) {
            $this->relativePath = null;
            return $this;
        }
        if ($relativePath instanceof FHIRUrl) {
            $this->relativePath = $relativePath;
            return $this;
        }
        $this->relativePath = new FHIRUrl($relativePath);
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideResource1 $type
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideResource1
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
                throw new \DomainException(sprintf('FHIRImplementationGuideResource1::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRImplementationGuideResource1::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRBackboneElement::xmlUnserialize($sxe, new FHIRImplementationGuideResource1);
        } elseif (!is_object($type) || !($type instanceof FHIRImplementationGuideResource1)) {
            throw new \RuntimeException(sprintf(
                'FHIRImplementationGuideResource1::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideResource1 or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
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
        if (isset($children->reference)) {
            $type->setReference(FHIRReference::xmlUnserialize($children->reference));
        }
        if (isset($attributes->relativePath)) {
            $type->setRelativePath((string)$attributes->relativePath);
        }
        if (isset($children->relativePath)) {
            $type->setRelativePath(FHIRUrl::xmlUnserialize($children->relativePath));
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
            $sxe = new \SimpleXMLElement('<ImplementationGuideResource1 xmlns="http://hl7.org/fhir"></ImplementationGuideResource1>');
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
        if (null !== ($v = $this->getReference())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_REFERENCE));
        }
        if (null !== ($v = $this->getRelativePath())) {
            $sxe->addAttribute(self::FIELD_RELATIVE_PATH, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_RELATIVE_PATH));
            }
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getExampleBoolean())) {
            $a[self::FIELD_EXAMPLE_BOOLEAN] = (string)$v;
            $a[self::FIELD_EXAMPLE_BOOLEAN_EXT] = $v;
        }
        if (null !== ($v = $this->getExampleCanonical())) {
            $a[self::FIELD_EXAMPLE_CANONICAL] = (string)$v;
            $a[self::FIELD_EXAMPLE_CANONICAL_EXT] = $v;
        }
        if (null !== ($v = $this->getReference())) {
            $a[self::FIELD_REFERENCE] = $v;
        }
        if (null !== ($v = $this->getRelativePath())) {
            $a[self::FIELD_RELATIVE_PATH] = (string)$v;
            $a[self::FIELD_RELATIVE_PATH_EXT] = $v;
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