<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 21st, 2019 04:05+0000
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
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * The detailed description of a substance, typically at a level beyond what is
 * used for prescribing.
 *
 * Class FHIRSubstanceSpecificationName
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification
 */
class FHIRSubstanceSpecificationName extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_SUBSTANCE_SPECIFICATION_DOT_NAME;

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    const FIELD_DOMAIN = 'domain';
    const FIELD_JURISDICTION = 'jurisdiction';
    const FIELD_LANGUAGE = 'language';
    const FIELD_NAME = 'name';
    const FIELD_NAME_EXT = '_name';
    const FIELD_OFFICIAL = 'official';
    const FIELD_PREFERRED = 'preferred';
    const FIELD_PREFERRED_EXT = '_preferred';
    const FIELD_SOURCE = 'source';
    const FIELD_STATUS = 'status';
    const FIELD_SYNONYM = 'synonym';
    const FIELD_TRANSLATION = 'translation';
    const FIELD_TYPE = 'type';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The use context of this name for example if there is a different name a drug
     * active ingredient as opposed to a food colour additive.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    private $domain = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The jurisdiction where this name applies.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    private $jurisdiction = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Language of the name.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    private $language = [];
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The actual name.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    private $name = null;
    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * Details of the official nature of this name.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationOfficial[]
     */
    private $official = [];
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * If this is the preferred name for this substance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    private $preferred = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Supporting literature.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    private $source = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The status of the name.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    private $status = null;
    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * A synonym of this name.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationName[]
     */
    private $synonym = [];
    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * A translation for this name.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationName[]
     */
    private $translation = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Name type.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    private $type = null;

    /**
     * FHIRSubstanceSpecificationName Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSubstanceSpecificationName::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_DOMAIN])) {
            if (is_array($data[self::FIELD_DOMAIN])) {
                foreach($data[self::FIELD_DOMAIN] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addDomain($v);
                    } else {
                        $this->addDomain(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_DOMAIN] instanceof FHIRCodeableConcept) {
                $this->addDomain($data[self::FIELD_DOMAIN]);
            } else {
                $this->addDomain(new FHIRCodeableConcept($data[self::FIELD_DOMAIN]));
            }
        }
        if (isset($data[self::FIELD_JURISDICTION])) {
            if (is_array($data[self::FIELD_JURISDICTION])) {
                foreach($data[self::FIELD_JURISDICTION] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addJurisdiction($v);
                    } else {
                        $this->addJurisdiction(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_JURISDICTION] instanceof FHIRCodeableConcept) {
                $this->addJurisdiction($data[self::FIELD_JURISDICTION]);
            } else {
                $this->addJurisdiction(new FHIRCodeableConcept($data[self::FIELD_JURISDICTION]));
            }
        }
        if (isset($data[self::FIELD_LANGUAGE])) {
            if (is_array($data[self::FIELD_LANGUAGE])) {
                foreach($data[self::FIELD_LANGUAGE] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addLanguage($v);
                    } else {
                        $this->addLanguage(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_LANGUAGE] instanceof FHIRCodeableConcept) {
                $this->addLanguage($data[self::FIELD_LANGUAGE]);
            } else {
                $this->addLanguage(new FHIRCodeableConcept($data[self::FIELD_LANGUAGE]));
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
        if (isset($data[self::FIELD_OFFICIAL])) {
            if (is_array($data[self::FIELD_OFFICIAL])) {
                foreach($data[self::FIELD_OFFICIAL] as $v) {
                    if ($v instanceof FHIRSubstanceSpecificationOfficial) {
                        $this->addOfficial($v);
                    } else {
                        $this->addOfficial(new FHIRSubstanceSpecificationOfficial($v));
                    }
                }
            } else if ($data[self::FIELD_OFFICIAL] instanceof FHIRSubstanceSpecificationOfficial) {
                $this->addOfficial($data[self::FIELD_OFFICIAL]);
            } else {
                $this->addOfficial(new FHIRSubstanceSpecificationOfficial($data[self::FIELD_OFFICIAL]));
            }
        }
        if (isset($data[self::FIELD_PREFERRED])) {
            $ext = (isset($data[self::FIELD_PREFERRED_EXT]) && is_array($data[self::FIELD_PREFERRED_EXT]))
                ? $data[self::FIELD_PREFERRED_EXT]
                : null;
            if ($data[self::FIELD_PREFERRED] instanceof FHIRBoolean) {
                $this->setPreferred($data[self::FIELD_PREFERRED]);
            } elseif ($ext && is_scalar($data[self::FIELD_PREFERRED])) {
                $this->setPreferred(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $data[self::FIELD_PREFERRED]] + $ext));
            } else {
                $this->setPreferred(new FHIRBoolean($data[self::FIELD_PREFERRED]));
            }
        }
        if (isset($data[self::FIELD_SOURCE])) {
            if (is_array($data[self::FIELD_SOURCE])) {
                foreach($data[self::FIELD_SOURCE] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addSource($v);
                    } else {
                        $this->addSource(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_SOURCE] instanceof FHIRReference) {
                $this->addSource($data[self::FIELD_SOURCE]);
            } else {
                $this->addSource(new FHIRReference($data[self::FIELD_SOURCE]));
            }
        }
        if (isset($data[self::FIELD_STATUS])) {
            if ($data[self::FIELD_STATUS] instanceof FHIRCodeableConcept) {
                $this->setStatus($data[self::FIELD_STATUS]);
            } else {
                $this->setStatus(new FHIRCodeableConcept($data[self::FIELD_STATUS]));
            }
        }
        if (isset($data[self::FIELD_SYNONYM])) {
            if (is_array($data[self::FIELD_SYNONYM])) {
                foreach($data[self::FIELD_SYNONYM] as $v) {
                    if ($v instanceof FHIRSubstanceSpecificationName) {
                        $this->addSynonym($v);
                    } else {
                        $this->addSynonym(new FHIRSubstanceSpecificationName($v));
                    }
                }
            } else if ($data[self::FIELD_SYNONYM] instanceof FHIRSubstanceSpecificationName) {
                $this->addSynonym($data[self::FIELD_SYNONYM]);
            } else {
                $this->addSynonym(new FHIRSubstanceSpecificationName($data[self::FIELD_SYNONYM]));
            }
        }
        if (isset($data[self::FIELD_TRANSLATION])) {
            if (is_array($data[self::FIELD_TRANSLATION])) {
                foreach($data[self::FIELD_TRANSLATION] as $v) {
                    if ($v instanceof FHIRSubstanceSpecificationName) {
                        $this->addTranslation($v);
                    } else {
                        $this->addTranslation(new FHIRSubstanceSpecificationName($v));
                    }
                }
            } else if ($data[self::FIELD_TRANSLATION] instanceof FHIRSubstanceSpecificationName) {
                $this->addTranslation($data[self::FIELD_TRANSLATION]);
            } else {
                $this->addTranslation(new FHIRSubstanceSpecificationName($data[self::FIELD_TRANSLATION]));
            }
        }
        if (isset($data[self::FIELD_TYPE])) {
            if ($data[self::FIELD_TYPE] instanceof FHIRCodeableConcept) {
                $this->setType($data[self::FIELD_TYPE]);
            } else {
                $this->setType(new FHIRCodeableConcept($data[self::FIELD_TYPE]));
            }
        }
    }

    /**
     * @return string
     */
    public function _getFHIRTypeName()
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * @return string|null
     */
    public function _getFHIRXMLNamespace()
    {
        return '' === $this->_xmlns ? null : $this->_xmlns;
    }

    /**
     * @param null|string $xmlNamespace
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationName
     */
    public function _setFHIRXMLNamespace($xmlNamespace)
    {
        if (null === $xmlNamespace || is_string($xmlNamespace)) {
            $this->_xmlns = (string)$xmlNamespace;
            return $this;
        }
        throw new \InvalidArgumentException(sprintf(
            '$xmlNamespace must be a null or string value, %s seen.',
            gettype($xmlNamespace)
        ));
    }

    /**
     * @return string
     */
    public function _getFHIRXMLElementDefinition()
    {
        $xmlns = $this->_getFHIRXMLNamespace();
        if (null !== $xmlns) {
            $xmlns = " xmlns=\"{$xmlns}\"";
        }
        return "<SubstanceSpecificationName{$xmlns}></SubstanceSpecificationName>";
    }


    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The use context of this name for example if there is a different name a drug
     * active ingredient as opposed to a food colour additive.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The use context of this name for example if there is a different name a drug
     * active ingredient as opposed to a food colour additive.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $domain
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationName
     */
    public function addDomain(FHIRCodeableConcept $domain = null)
    {
        $this->domain[] = $domain;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The use context of this name for example if there is a different name a drug
     * active ingredient as opposed to a food colour additive.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[] $domain
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationName
     */
    public function setDomain(array $domain = [])
    {
        $this->domain = [];
        if ([] === $domain) {
            return $this;
        }
        foreach($domain as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addDomain($v);
            } else {
                $this->addDomain(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The jurisdiction where this name applies.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    public function getJurisdiction()
    {
        return $this->jurisdiction;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The jurisdiction where this name applies.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $jurisdiction
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationName
     */
    public function addJurisdiction(FHIRCodeableConcept $jurisdiction = null)
    {
        $this->jurisdiction[] = $jurisdiction;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The jurisdiction where this name applies.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[] $jurisdiction
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationName
     */
    public function setJurisdiction(array $jurisdiction = [])
    {
        $this->jurisdiction = [];
        if ([] === $jurisdiction) {
            return $this;
        }
        foreach($jurisdiction as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addJurisdiction($v);
            } else {
                $this->addJurisdiction(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Language of the name.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Language of the name.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $language
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationName
     */
    public function addLanguage(FHIRCodeableConcept $language = null)
    {
        $this->language[] = $language;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Language of the name.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[] $language
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationName
     */
    public function setLanguage(array $language = [])
    {
        $this->language = [];
        if ([] === $language) {
            return $this;
        }
        foreach($language as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addLanguage($v);
            } else {
                $this->addLanguage(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The actual name.
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
     * The actual name.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $name
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationName
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
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * Details of the official nature of this name.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationOfficial[]
     */
    public function getOfficial()
    {
        return $this->official;
    }

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * Details of the official nature of this name.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationOfficial $official
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationName
     */
    public function addOfficial(FHIRSubstanceSpecificationOfficial $official = null)
    {
        $this->official[] = $official;
        return $this;
    }

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * Details of the official nature of this name.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationOfficial[] $official
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationName
     */
    public function setOfficial(array $official = [])
    {
        $this->official = [];
        if ([] === $official) {
            return $this;
        }
        foreach($official as $v) {
            if ($v instanceof FHIRSubstanceSpecificationOfficial) {
                $this->addOfficial($v);
            } else {
                $this->addOfficial(new FHIRSubstanceSpecificationOfficial($v));
            }
        }
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * If this is the preferred name for this substance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    public function getPreferred()
    {
        return $this->preferred;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * If this is the preferred name for this substance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean $preferred
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationName
     */
    public function setPreferred($preferred = null)
    {
        if (null === $preferred) {
            $this->preferred = null;
            return $this;
        }
        if ($preferred instanceof FHIRBoolean) {
            $this->preferred = $preferred;
            return $this;
        }
        $this->preferred = new FHIRBoolean($preferred);
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Supporting literature.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Supporting literature.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $source
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationName
     */
    public function addSource(FHIRReference $source = null)
    {
        $this->source[] = $source;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Supporting literature.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[] $source
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationName
     */
    public function setSource(array $source = [])
    {
        $this->source = [];
        if ([] === $source) {
            return $this;
        }
        foreach($source as $v) {
            if ($v instanceof FHIRReference) {
                $this->addSource($v);
            } else {
                $this->addSource(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The status of the name.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The status of the name.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $status
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationName
     */
    public function setStatus(FHIRCodeableConcept $status = null)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * A synonym of this name.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationName[]
     */
    public function getSynonym()
    {
        return $this->synonym;
    }

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * A synonym of this name.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationName $synonym
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationName
     */
    public function addSynonym(FHIRSubstanceSpecificationName $synonym = null)
    {
        $this->synonym[] = $synonym;
        return $this;
    }

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * A synonym of this name.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationName[] $synonym
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationName
     */
    public function setSynonym(array $synonym = [])
    {
        $this->synonym = [];
        if ([] === $synonym) {
            return $this;
        }
        foreach($synonym as $v) {
            if ($v instanceof FHIRSubstanceSpecificationName) {
                $this->addSynonym($v);
            } else {
                $this->addSynonym(new FHIRSubstanceSpecificationName($v));
            }
        }
        return $this;
    }

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * A translation for this name.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationName[]
     */
    public function getTranslation()
    {
        return $this->translation;
    }

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * A translation for this name.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationName $translation
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationName
     */
    public function addTranslation(FHIRSubstanceSpecificationName $translation = null)
    {
        $this->translation[] = $translation;
        return $this;
    }

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * A translation for this name.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationName[] $translation
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationName
     */
    public function setTranslation(array $translation = [])
    {
        $this->translation = [];
        if ([] === $translation) {
            return $this;
        }
        foreach($translation as $v) {
            if ($v instanceof FHIRSubstanceSpecificationName) {
                $this->addTranslation($v);
            } else {
                $this->addTranslation(new FHIRSubstanceSpecificationName($v));
            }
        }
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Name type.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Name type.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $type
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationName
     */
    public function setType(FHIRCodeableConcept $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationName $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationName
     */
    public static function xmlUnserialize($sxe = null, PHPFHIRTypeInterface $type = null, $libxmlOpts = 591872)
    {
        if (null === $sxe) {
            return null;
        }
        if (is_string($sxe)) {
            libxml_use_internal_errors(true);
            $sxe = new \SimpleXMLElement($sxe, $libxmlOpts, false);
            if ($sxe === false) {
                throw new \DomainException(sprintf('FHIRSubstanceSpecificationName::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRSubstanceSpecificationName::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRSubstanceSpecificationName;
        } elseif (!is_object($type) || !($type instanceof FHIRSubstanceSpecificationName)) {
            throw new \RuntimeException(sprintf(
                'FHIRSubstanceSpecificationName::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationName or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        FHIRBackboneElement::xmlUnserialize($sxe, $type);
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->domain)) {
            foreach($children->domain as $child) {
                $type->addDomain(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->jurisdiction)) {
            foreach($children->jurisdiction as $child) {
                $type->addJurisdiction(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->language)) {
            foreach($children->language as $child) {
                $type->addLanguage(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($attributes->name)) {
            $type->setName((string)$attributes->name);
        }
        if (isset($children->name)) {
            $type->setName(FHIRString::xmlUnserialize($children->name));
        }
        if (isset($children->official)) {
            foreach($children->official as $child) {
                $type->addOfficial(FHIRSubstanceSpecificationOfficial::xmlUnserialize($child));
            }
        }
        if (isset($attributes->preferred)) {
            $type->setPreferred((string)$attributes->preferred);
        }
        if (isset($children->preferred)) {
            $type->setPreferred(FHIRBoolean::xmlUnserialize($children->preferred));
        }
        if (isset($children->source)) {
            foreach($children->source as $child) {
                $type->addSource(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->status)) {
            $type->setStatus(FHIRCodeableConcept::xmlUnserialize($children->status));
        }
        if (isset($children->synonym)) {
            foreach($children->synonym as $child) {
                $type->addSynonym(FHIRSubstanceSpecificationName::xmlUnserialize($child));
            }
        }
        if (isset($children->translation)) {
            foreach($children->translation as $child) {
                $type->addTranslation(FHIRSubstanceSpecificationName::xmlUnserialize($child));
            }
        }
        if (isset($children->type)) {
            $type->setType(FHIRCodeableConcept::xmlUnserialize($children->type));
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement $sxe
     * @param null|int $libxmlOpts
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null, $libxmlOpts = 591872)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement($this->_getFHIRXMLElementDefinition(), $libxmlOpts, false);
        }
        parent::xmlSerialize($sxe);

        if ([] !== ($vs = $this->getDomain())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_DOMAIN, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if ([] !== ($vs = $this->getJurisdiction())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_JURISDICTION, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if ([] !== ($vs = $this->getLanguage())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_LANGUAGE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getName())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_NAME, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getOfficial())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_OFFICIAL, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getPreferred())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PREFERRED, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getSource())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_SOURCE, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if (null !== ($v = $this->getStatus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STATUS, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getSynonym())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_SYNONYM, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if ([] !== ($vs = $this->getTranslation())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_TRANSLATION, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if (null !== ($v = $this->getType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TYPE, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if ([] !== ($vs = $this->getDomain())) {
            $a[self::FIELD_DOMAIN] = $vs;
        }
        if ([] !== ($vs = $this->getJurisdiction())) {
            $a[self::FIELD_JURISDICTION] = $vs;
        }
        if ([] !== ($vs = $this->getLanguage())) {
            $a[self::FIELD_LANGUAGE] = $vs;
        }
        if (null !== ($v = $this->getName())) {
            $a[self::FIELD_NAME] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_NAME_EXT] = $v;
            }
        }
        if ([] !== ($vs = $this->getOfficial())) {
            $a[self::FIELD_OFFICIAL] = $vs;
        }
        if (null !== ($v = $this->getPreferred())) {
            $a[self::FIELD_PREFERRED] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_PREFERRED_EXT] = $v;
            }
        }
        if ([] !== ($vs = $this->getSource())) {
            $a[self::FIELD_SOURCE] = $vs;
        }
        if (null !== ($v = $this->getStatus())) {
            $a[self::FIELD_STATUS] = $v;
        }
        if ([] !== ($vs = $this->getSynonym())) {
            $a[self::FIELD_SYNONYM] = $vs;
        }
        if ([] !== ($vs = $this->getTranslation())) {
            $a[self::FIELD_TRANSLATION] = $vs;
        }
        if (null !== ($v = $this->getType())) {
            $a[self::FIELD_TYPE] = $v;
        }
        return $a;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}