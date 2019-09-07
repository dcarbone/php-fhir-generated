<?php

namespace DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: September 7th, 2019 20:23+0000
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
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRRepositoryType;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\PHPFHIRTypeInterface;

/**
 * Raw data describing a biological sequence.
 *
 * Class FHIRMolecularSequenceRepository
 * @package \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence
 */
class FHIRMolecularSequenceRepository extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_MOLECULAR_SEQUENCE_DOT_REPOSITORY;

    const FIELD_DATASET_ID = 'datasetId';
    const FIELD_DATASET_ID_EXT = '_datasetId';
    const FIELD_NAME = 'name';
    const FIELD_NAME_EXT = '_name';
    const FIELD_READSET_ID = 'readsetId';
    const FIELD_READSET_ID_EXT = '_readsetId';
    const FIELD_TYPE = 'type';
    const FIELD_URL = 'url';
    const FIELD_URL_EXT = '_url';
    const FIELD_VARIANTSET_ID = 'variantsetId';
    const FIELD_VARIANTSET_ID_EXT = '_variantsetId';

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Id of the variant in this external repository. The server will understand how to
     * use this id to call for more info about datasets in external repository.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $datasetId = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * URI of an external repository which contains further details about the genetics
     * data.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $name = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Id of the read in this external repository.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $readsetId = null;

    /**
     * Type for access of external URI.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Click and see / RESTful API / Need login to see / RESTful API with
     * authentication / Other ways to see resource.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRRepositoryType
     */
    private $type = null;

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * URI of an external repository which contains further details about the genetics
     * data.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    private $url = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Id of the variantset in this external repository. The server will understand how
     * to use this id to call for more info about variantsets in external repository.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $variantsetId = null;

    /**
     * FHIRMolecularSequenceRepository Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMolecularSequenceRepository::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_DATASET_ID])) {
            $ext = (isset($data[self::FIELD_DATASET_ID_EXT]) && is_array($data[self::FIELD_DATASET_ID_EXT]))
                ? $data[self::FIELD_DATASET_ID_EXT]
                : null;
            if ($data[self::FIELD_DATASET_ID] instanceof FHIRString) {
                $this->setDatasetId($data[self::FIELD_DATASET_ID]);
            } elseif ($ext && is_scalar($data[self::FIELD_DATASET_ID])) {
                $this->setDatasetId(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_DATASET_ID]] + $ext));
            } else {
                $this->setDatasetId(new FHIRString($data[self::FIELD_DATASET_ID]));
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
        if (isset($data[self::FIELD_READSET_ID])) {
            $ext = (isset($data[self::FIELD_READSET_ID_EXT]) && is_array($data[self::FIELD_READSET_ID_EXT]))
                ? $data[self::FIELD_READSET_ID_EXT]
                : null;
            if ($data[self::FIELD_READSET_ID] instanceof FHIRString) {
                $this->setReadsetId($data[self::FIELD_READSET_ID]);
            } elseif ($ext && is_scalar($data[self::FIELD_READSET_ID])) {
                $this->setReadsetId(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_READSET_ID]] + $ext));
            } else {
                $this->setReadsetId(new FHIRString($data[self::FIELD_READSET_ID]));
            }
        }
        if (isset($data[self::FIELD_TYPE])) {
            if ($data[self::FIELD_TYPE] instanceof FHIRRepositoryType) {
                $this->setType($data[self::FIELD_TYPE]);
            } else {
                $this->setType(new FHIRRepositoryType($data[self::FIELD_TYPE]));
            }
        }
        if (isset($data[self::FIELD_URL])) {
            $ext = (isset($data[self::FIELD_URL_EXT]) && is_array($data[self::FIELD_URL_EXT]))
                ? $data[self::FIELD_URL_EXT]
                : null;
            if ($data[self::FIELD_URL] instanceof FHIRUri) {
                $this->setUrl($data[self::FIELD_URL]);
            } elseif ($ext && is_scalar($data[self::FIELD_URL])) {
                $this->setUrl(new FHIRUri([FHIRUri::FIELD_VALUE => $data[self::FIELD_URL]] + $ext));
            } else {
                $this->setUrl(new FHIRUri($data[self::FIELD_URL]));
            }
        }
        if (isset($data[self::FIELD_VARIANTSET_ID])) {
            $ext = (isset($data[self::FIELD_VARIANTSET_ID_EXT]) && is_array($data[self::FIELD_VARIANTSET_ID_EXT]))
                ? $data[self::FIELD_VARIANTSET_ID_EXT]
                : null;
            if ($data[self::FIELD_VARIANTSET_ID] instanceof FHIRString) {
                $this->setVariantsetId($data[self::FIELD_VARIANTSET_ID]);
            } elseif ($ext && is_scalar($data[self::FIELD_VARIANTSET_ID])) {
                $this->setVariantsetId(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_VARIANTSET_ID]] + $ext));
            } else {
                $this->setVariantsetId(new FHIRString($data[self::FIELD_VARIANTSET_ID]));
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
     * Id of the variant in this external repository. The server will understand how to
     * use this id to call for more info about datasets in external repository.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDatasetId()
    {
        return $this->datasetId;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Id of the variant in this external repository. The server will understand how to
     * use this id to call for more info about datasets in external repository.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString $datasetId
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceRepository
     */
    public function setDatasetId($datasetId = null)
    {
        if (null === $datasetId) {
            $this->datasetId = null;
            return $this;
        }
        if ($datasetId instanceof FHIRString) {
            $this->datasetId = $datasetId;
            return $this;
        }
        $this->datasetId = new FHIRString($datasetId);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * URI of an external repository which contains further details about the genetics
     * data.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
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
     * URI of an external repository which contains further details about the genetics
     * data.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString $name
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceRepository
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
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Id of the read in this external repository.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getReadsetId()
    {
        return $this->readsetId;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Id of the read in this external repository.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString $readsetId
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceRepository
     */
    public function setReadsetId($readsetId = null)
    {
        if (null === $readsetId) {
            $this->readsetId = null;
            return $this;
        }
        if ($readsetId instanceof FHIRString) {
            $this->readsetId = $readsetId;
            return $this;
        }
        $this->readsetId = new FHIRString($readsetId);
        return $this;
    }

    /**
     * Type for access of external URI.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Click and see / RESTful API / Need login to see / RESTful API with
     * authentication / Other ways to see resource.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRRepositoryType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Type for access of external URI.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Click and see / RESTful API / Need login to see / RESTful API with
     * authentication / Other ways to see resource.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRRepositoryType $type
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceRepository
     */
    public function setType(FHIRRepositoryType $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * URI of an external repository which contains further details about the genetics
     * data.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * URI of an external repository which contains further details about the genetics
     * data.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRUri $url
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceRepository
     */
    public function setUrl($url = null)
    {
        if (null === $url) {
            $this->url = null;
            return $this;
        }
        if ($url instanceof FHIRUri) {
            $this->url = $url;
            return $this;
        }
        $this->url = new FHIRUri($url);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Id of the variantset in this external repository. The server will understand how
     * to use this id to call for more info about variantsets in external repository.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getVariantsetId()
    {
        return $this->variantsetId;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Id of the variantset in this external repository. The server will understand how
     * to use this id to call for more info about variantsets in external repository.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString $variantsetId
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceRepository
     */
    public function setVariantsetId($variantsetId = null)
    {
        if (null === $variantsetId) {
            $this->variantsetId = null;
            return $this;
        }
        if ($variantsetId instanceof FHIRString) {
            $this->variantsetId = $variantsetId;
            return $this;
        }
        $this->variantsetId = new FHIRString($variantsetId);
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceRepository $type
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceRepository
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
                throw new \DomainException(sprintf('FHIRMolecularSequenceRepository::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRMolecularSequenceRepository::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRBackboneElement::xmlUnserialize($sxe, new FHIRMolecularSequenceRepository);
        } elseif (!is_object($type) || !($type instanceof FHIRMolecularSequenceRepository)) {
            throw new \RuntimeException(sprintf(
                'FHIRMolecularSequenceRepository::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceRepository or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($attributes->datasetId)) {
            $type->setDatasetId((string)$attributes->datasetId);
        }
        if (isset($children->datasetId)) {
            $type->setDatasetId(FHIRString::xmlUnserialize($children->datasetId));
        }
        if (isset($attributes->name)) {
            $type->setName((string)$attributes->name);
        }
        if (isset($children->name)) {
            $type->setName(FHIRString::xmlUnserialize($children->name));
        }
        if (isset($attributes->readsetId)) {
            $type->setReadsetId((string)$attributes->readsetId);
        }
        if (isset($children->readsetId)) {
            $type->setReadsetId(FHIRString::xmlUnserialize($children->readsetId));
        }
        if (isset($children->type)) {
            $type->setType(FHIRRepositoryType::xmlUnserialize($children->type));
        }
        if (isset($attributes->url)) {
            $type->setUrl((string)$attributes->url);
        }
        if (isset($children->url)) {
            $type->setUrl(FHIRUri::xmlUnserialize($children->url));
        }
        if (isset($attributes->variantsetId)) {
            $type->setVariantsetId((string)$attributes->variantsetId);
        }
        if (isset($children->variantsetId)) {
            $type->setVariantsetId(FHIRString::xmlUnserialize($children->variantsetId));
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
            $sxe = new \SimpleXMLElement('<MolecularSequenceRepository xmlns="http://hl7.org/fhir"></MolecularSequenceRepository>');
        }
        if (null !== ($v = $this->getDatasetId())) {
            $sxe->addAttribute(self::FIELD_DATASET_ID, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_DATASET_ID));
            }
        }
        if (null !== ($v = $this->getName())) {
            $sxe->addAttribute(self::FIELD_NAME, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_NAME));
            }
        }
        if (null !== ($v = $this->getReadsetId())) {
            $sxe->addAttribute(self::FIELD_READSET_ID, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_READSET_ID));
            }
        }
        if (null !== ($v = $this->getType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TYPE));
        }
        if (null !== ($v = $this->getUrl())) {
            $sxe->addAttribute(self::FIELD_URL, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_URL));
            }
        }
        if (null !== ($v = $this->getVariantsetId())) {
            $sxe->addAttribute(self::FIELD_VARIANTSET_ID, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_VARIANTSET_ID));
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
        if (null !== ($v = $this->getDatasetId())) {
            $a[self::FIELD_DATASET_ID] = (string)$v;
            $a[self::FIELD_DATASET_ID_EXT] = $v;
        }
        if (null !== ($v = $this->getName())) {
            $a[self::FIELD_NAME] = (string)$v;
            $a[self::FIELD_NAME_EXT] = $v;
        }
        if (null !== ($v = $this->getReadsetId())) {
            $a[self::FIELD_READSET_ID] = (string)$v;
            $a[self::FIELD_READSET_ID_EXT] = $v;
        }
        if (null !== ($v = $this->getType())) {
            $a[self::FIELD_TYPE] = $v;
        }
        if (null !== ($v = $this->getUrl())) {
            $a[self::FIELD_URL] = (string)$v;
            $a[self::FIELD_URL_EXT] = $v;
        }
        if (null !== ($v = $this->getVariantsetId())) {
            $a[self::FIELD_VARIANTSET_ID] = (string)$v;
            $a[self::FIELD_VARIANTSET_ID_EXT] = $v;
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