<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 22nd, 2019 01:52+0000
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

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCatalogEntry\FHIRCatalogEntryRelatedEntry;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPublicationStatus;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * Catalog entries are wrappers that contextualize items included in a catalog.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRCatalogEntry
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource
 */
class FHIRCatalogEntry extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CATALOG_ENTRY;

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    const FIELD_ADDITIONAL_CHARACTERISTIC = 'additionalCharacteristic';
    const FIELD_ADDITIONAL_CLASSIFICATION = 'additionalClassification';
    const FIELD_ADDITIONAL_IDENTIFIER = 'additionalIdentifier';
    const FIELD_ADDITIONAL_IDENTIFIER_EXT = '_additionalIdentifier';
    const FIELD_CLASSIFICATION = 'classification';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_IDENTIFIER_EXT = '_identifier';
    const FIELD_LAST_UPDATED = 'lastUpdated';
    const FIELD_LAST_UPDATED_EXT = '_lastUpdated';
    const FIELD_ORDERABLE = 'orderable';
    const FIELD_ORDERABLE_EXT = '_orderable';
    const FIELD_REFERENCED_ITEM = 'referencedItem';
    const FIELD_RELATED_ENTRY = 'relatedEntry';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';
    const FIELD_TYPE = 'type';
    const FIELD_VALID_TO = 'validTo';
    const FIELD_VALID_TO_EXT = '_validTo';
    const FIELD_VALIDITY_PERIOD = 'validityPeriod';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Used for examplefor Out of Formulary, or any specifics.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    private $additionalCharacteristic = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * User for example for ATC classification, or.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    private $additionalClassification = [];
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Used in supporting related concepts, e.g. NDC to RxNorm.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[]
     */
    private $additionalIdentifier = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Classes of devices, or ATC for medication.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    private $classification = [];
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Used in supporting different identifiers for the same product, e.g. manufacturer
     * code and retailer code.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[]
     */
    private $identifier = [];
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Typically date of issue is different from the beginning of the validity. This
     * can be used to see when an item was last updated.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    private $lastUpdated = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Whether the entry represents an orderable item.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    private $orderable = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The item in a catalog or definition.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    private $referencedItem = null;
    /**
     * Catalog entries are wrappers that contextualize items included in a catalog.
     *
     * Used for example, to point to a substance, or to a device used to administer a
     * medication.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCatalogEntry\FHIRCatalogEntryRelatedEntry[]
     */
    private $relatedEntry = [];
    /**
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Used to support catalog exchange even for unsupported products, e.g. getting
     * list of medications even if not prescribable.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPublicationStatus
     */
    private $status = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The type of item - medication, device, service, protocol or other.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    private $type = null;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The date until which this catalog entry is expected to be active.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    private $validTo = null;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The time period in which this catalog entry is expected to be active.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod
     */
    private $validityPeriod = null;

    /**
     * FHIRCatalogEntry Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCatalogEntry::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_ADDITIONAL_CHARACTERISTIC])) {
            if (is_array($data[self::FIELD_ADDITIONAL_CHARACTERISTIC])) {
                foreach($data[self::FIELD_ADDITIONAL_CHARACTERISTIC] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addAdditionalCharacteristic($v);
                    } else {
                        $this->addAdditionalCharacteristic(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_ADDITIONAL_CHARACTERISTIC] instanceof FHIRCodeableConcept) {
                $this->addAdditionalCharacteristic($data[self::FIELD_ADDITIONAL_CHARACTERISTIC]);
            } else {
                $this->addAdditionalCharacteristic(new FHIRCodeableConcept($data[self::FIELD_ADDITIONAL_CHARACTERISTIC]));
            }
        }
        if (isset($data[self::FIELD_ADDITIONAL_CLASSIFICATION])) {
            if (is_array($data[self::FIELD_ADDITIONAL_CLASSIFICATION])) {
                foreach($data[self::FIELD_ADDITIONAL_CLASSIFICATION] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addAdditionalClassification($v);
                    } else {
                        $this->addAdditionalClassification(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_ADDITIONAL_CLASSIFICATION] instanceof FHIRCodeableConcept) {
                $this->addAdditionalClassification($data[self::FIELD_ADDITIONAL_CLASSIFICATION]);
            } else {
                $this->addAdditionalClassification(new FHIRCodeableConcept($data[self::FIELD_ADDITIONAL_CLASSIFICATION]));
            }
        }
        if (isset($data[self::FIELD_ADDITIONAL_IDENTIFIER])) {
            $ext = (isset($data[self::FIELD_ADDITIONAL_IDENTIFIER_EXT]) && is_array($data[self::FIELD_ADDITIONAL_IDENTIFIER_EXT]))
                ? $data[self::FIELD_ADDITIONAL_IDENTIFIER_EXT]
                : null;
            if (is_array($data[self::FIELD_ADDITIONAL_IDENTIFIER])) {
                foreach($data[self::FIELD_ADDITIONAL_IDENTIFIER] as $i => $v) {
                    if ($v instanceof FHIRIdentifier) {
                        $this->addAdditionalIdentifier($v);
                    } elseif ($ext && is_scalar($v) && isset($ext[$i]) && is_array($ext[$i])) {
                        $this->addAdditionalIdentifier(new FHIRIdentifier([FHIRIdentifier::FIELD_VALUE => $v] + $ext[$i]));
                    } else {
                        $this->addAdditionalIdentifier(new FHIRIdentifier($v));
                    }
                }
            } elseif ($data[self::FIELD_ADDITIONAL_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->addAdditionalIdentifier($data[self::FIELD_ADDITIONAL_IDENTIFIER]);
            } elseif ($ext && is_scalar($data[self::FIELD_ADDITIONAL_IDENTIFIER])) {
                $this->addAdditionalIdentifier(new FHIRIdentifier([FHIRIdentifier::FIELD_VALUE => $data[self::FIELD_ADDITIONAL_IDENTIFIER]] + $ext));
            } else {
                $this->addAdditionalIdentifier(new FHIRIdentifier($data[self::FIELD_ADDITIONAL_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_CLASSIFICATION])) {
            if (is_array($data[self::FIELD_CLASSIFICATION])) {
                foreach($data[self::FIELD_CLASSIFICATION] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addClassification($v);
                    } else {
                        $this->addClassification(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_CLASSIFICATION] instanceof FHIRCodeableConcept) {
                $this->addClassification($data[self::FIELD_CLASSIFICATION]);
            } else {
                $this->addClassification(new FHIRCodeableConcept($data[self::FIELD_CLASSIFICATION]));
            }
        }
        if (isset($data[self::FIELD_IDENTIFIER])) {
            $ext = (isset($data[self::FIELD_IDENTIFIER_EXT]) && is_array($data[self::FIELD_IDENTIFIER_EXT]))
                ? $data[self::FIELD_IDENTIFIER_EXT]
                : null;
            if (is_array($data[self::FIELD_IDENTIFIER])) {
                foreach($data[self::FIELD_IDENTIFIER] as $i => $v) {
                    if ($v instanceof FHIRIdentifier) {
                        $this->addIdentifier($v);
                    } elseif ($ext && is_scalar($v) && isset($ext[$i]) && is_array($ext[$i])) {
                        $this->addIdentifier(new FHIRIdentifier([FHIRIdentifier::FIELD_VALUE => $v] + $ext[$i]));
                    } else {
                        $this->addIdentifier(new FHIRIdentifier($v));
                    }
                }
            } elseif ($data[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->addIdentifier($data[self::FIELD_IDENTIFIER]);
            } elseif ($ext && is_scalar($data[self::FIELD_IDENTIFIER])) {
                $this->addIdentifier(new FHIRIdentifier([FHIRIdentifier::FIELD_VALUE => $data[self::FIELD_IDENTIFIER]] + $ext));
            } else {
                $this->addIdentifier(new FHIRIdentifier($data[self::FIELD_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_LAST_UPDATED])) {
            $ext = (isset($data[self::FIELD_LAST_UPDATED_EXT]) && is_array($data[self::FIELD_LAST_UPDATED_EXT]))
                ? $data[self::FIELD_LAST_UPDATED_EXT]
                : null;
            if ($data[self::FIELD_LAST_UPDATED] instanceof FHIRDateTime) {
                $this->setLastUpdated($data[self::FIELD_LAST_UPDATED]);
            } elseif ($ext && is_scalar($data[self::FIELD_LAST_UPDATED])) {
                $this->setLastUpdated(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $data[self::FIELD_LAST_UPDATED]] + $ext));
            } else {
                $this->setLastUpdated(new FHIRDateTime($data[self::FIELD_LAST_UPDATED]));
            }
        }
        if (isset($data[self::FIELD_ORDERABLE])) {
            $ext = (isset($data[self::FIELD_ORDERABLE_EXT]) && is_array($data[self::FIELD_ORDERABLE_EXT]))
                ? $data[self::FIELD_ORDERABLE_EXT]
                : null;
            if ($data[self::FIELD_ORDERABLE] instanceof FHIRBoolean) {
                $this->setOrderable($data[self::FIELD_ORDERABLE]);
            } elseif ($ext && is_scalar($data[self::FIELD_ORDERABLE])) {
                $this->setOrderable(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $data[self::FIELD_ORDERABLE]] + $ext));
            } else {
                $this->setOrderable(new FHIRBoolean($data[self::FIELD_ORDERABLE]));
            }
        }
        if (isset($data[self::FIELD_REFERENCED_ITEM])) {
            if ($data[self::FIELD_REFERENCED_ITEM] instanceof FHIRReference) {
                $this->setReferencedItem($data[self::FIELD_REFERENCED_ITEM]);
            } else {
                $this->setReferencedItem(new FHIRReference($data[self::FIELD_REFERENCED_ITEM]));
            }
        }
        if (isset($data[self::FIELD_RELATED_ENTRY])) {
            if (is_array($data[self::FIELD_RELATED_ENTRY])) {
                foreach($data[self::FIELD_RELATED_ENTRY] as $v) {
                    if ($v instanceof FHIRCatalogEntryRelatedEntry) {
                        $this->addRelatedEntry($v);
                    } else {
                        $this->addRelatedEntry(new FHIRCatalogEntryRelatedEntry($v));
                    }
                }
            } else if ($data[self::FIELD_RELATED_ENTRY] instanceof FHIRCatalogEntryRelatedEntry) {
                $this->addRelatedEntry($data[self::FIELD_RELATED_ENTRY]);
            } else {
                $this->addRelatedEntry(new FHIRCatalogEntryRelatedEntry($data[self::FIELD_RELATED_ENTRY]));
            }
        }
        if (isset($data[self::FIELD_STATUS])) {
            $ext = (isset($data[self::FIELD_STATUS_EXT]) && is_array($data[self::FIELD_STATUS_EXT]))
                ? $data[self::FIELD_STATUS_EXT]
                : null;
            if ($data[self::FIELD_STATUS] instanceof FHIRPublicationStatus) {
                $this->setStatus($data[self::FIELD_STATUS]);
            } elseif ($ext && is_scalar($data[self::FIELD_STATUS])) {
                $this->setStatus(new FHIRPublicationStatus([FHIRPublicationStatus::FIELD_VALUE => $data[self::FIELD_STATUS]] + $ext));
            } else {
                $this->setStatus(new FHIRPublicationStatus($data[self::FIELD_STATUS]));
            }
        }
        if (isset($data[self::FIELD_TYPE])) {
            if ($data[self::FIELD_TYPE] instanceof FHIRCodeableConcept) {
                $this->setType($data[self::FIELD_TYPE]);
            } else {
                $this->setType(new FHIRCodeableConcept($data[self::FIELD_TYPE]));
            }
        }
        if (isset($data[self::FIELD_VALID_TO])) {
            $ext = (isset($data[self::FIELD_VALID_TO_EXT]) && is_array($data[self::FIELD_VALID_TO_EXT]))
                ? $data[self::FIELD_VALID_TO_EXT]
                : null;
            if ($data[self::FIELD_VALID_TO] instanceof FHIRDateTime) {
                $this->setValidTo($data[self::FIELD_VALID_TO]);
            } elseif ($ext && is_scalar($data[self::FIELD_VALID_TO])) {
                $this->setValidTo(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $data[self::FIELD_VALID_TO]] + $ext));
            } else {
                $this->setValidTo(new FHIRDateTime($data[self::FIELD_VALID_TO]));
            }
        }
        if (isset($data[self::FIELD_VALIDITY_PERIOD])) {
            if ($data[self::FIELD_VALIDITY_PERIOD] instanceof FHIRPeriod) {
                $this->setValidityPeriod($data[self::FIELD_VALIDITY_PERIOD]);
            } else {
                $this->setValidityPeriod(new FHIRPeriod($data[self::FIELD_VALIDITY_PERIOD]));
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
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCatalogEntry
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
        return "<CatalogEntry{$xmlns}></CatalogEntry>";
    }

    /**
     * @return string
     */
    public function _getResourceType()
    {
        return static::FHIR_TYPE_NAME;
    }


    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Used for examplefor Out of Formulary, or any specifics.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    public function getAdditionalCharacteristic()
    {
        return $this->additionalCharacteristic;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Used for examplefor Out of Formulary, or any specifics.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $additionalCharacteristic
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCatalogEntry
     */
    public function addAdditionalCharacteristic(FHIRCodeableConcept $additionalCharacteristic = null)
    {
        $this->additionalCharacteristic[] = $additionalCharacteristic;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Used for examplefor Out of Formulary, or any specifics.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[] $additionalCharacteristic
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCatalogEntry
     */
    public function setAdditionalCharacteristic(array $additionalCharacteristic = [])
    {
        $this->additionalCharacteristic = [];
        if ([] === $additionalCharacteristic) {
            return $this;
        }
        foreach($additionalCharacteristic as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addAdditionalCharacteristic($v);
            } else {
                $this->addAdditionalCharacteristic(new FHIRCodeableConcept($v));
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
     * User for example for ATC classification, or.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    public function getAdditionalClassification()
    {
        return $this->additionalClassification;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * User for example for ATC classification, or.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $additionalClassification
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCatalogEntry
     */
    public function addAdditionalClassification(FHIRCodeableConcept $additionalClassification = null)
    {
        $this->additionalClassification[] = $additionalClassification;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * User for example for ATC classification, or.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[] $additionalClassification
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCatalogEntry
     */
    public function setAdditionalClassification(array $additionalClassification = [])
    {
        $this->additionalClassification = [];
        if ([] === $additionalClassification) {
            return $this;
        }
        foreach($additionalClassification as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addAdditionalClassification($v);
            } else {
                $this->addAdditionalClassification(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Used in supporting related concepts, e.g. NDC to RxNorm.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[]
     */
    public function getAdditionalIdentifier()
    {
        return $this->additionalIdentifier;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Used in supporting related concepts, e.g. NDC to RxNorm.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier $additionalIdentifier
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCatalogEntry
     */
    public function addAdditionalIdentifier(FHIRIdentifier $additionalIdentifier = null)
    {
        $this->additionalIdentifier[] = $additionalIdentifier;
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Used in supporting related concepts, e.g. NDC to RxNorm.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[] $additionalIdentifier
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCatalogEntry
     */
    public function setAdditionalIdentifier(array $additionalIdentifier = [])
    {
        $this->additionalIdentifier = [];
        if ([] === $additionalIdentifier) {
            return $this;
        }
        foreach($additionalIdentifier as $v) {
            if ($v instanceof FHIRIdentifier) {
                $this->addAdditionalIdentifier($v);
            } else {
                $this->addAdditionalIdentifier(new FHIRIdentifier($v));
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
     * Classes of devices, or ATC for medication.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    public function getClassification()
    {
        return $this->classification;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Classes of devices, or ATC for medication.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $classification
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCatalogEntry
     */
    public function addClassification(FHIRCodeableConcept $classification = null)
    {
        $this->classification[] = $classification;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Classes of devices, or ATC for medication.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[] $classification
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCatalogEntry
     */
    public function setClassification(array $classification = [])
    {
        $this->classification = [];
        if ([] === $classification) {
            return $this;
        }
        foreach($classification as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addClassification($v);
            } else {
                $this->addClassification(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Used in supporting different identifiers for the same product, e.g. manufacturer
     * code and retailer code.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Used in supporting different identifiers for the same product, e.g. manufacturer
     * code and retailer code.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier $identifier
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCatalogEntry
     */
    public function addIdentifier(FHIRIdentifier $identifier = null)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Used in supporting different identifiers for the same product, e.g. manufacturer
     * code and retailer code.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[] $identifier
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCatalogEntry
     */
    public function setIdentifier(array $identifier = [])
    {
        $this->identifier = [];
        if ([] === $identifier) {
            return $this;
        }
        foreach($identifier as $v) {
            if ($v instanceof FHIRIdentifier) {
                $this->addIdentifier($v);
            } else {
                $this->addIdentifier(new FHIRIdentifier($v));
            }
        }
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Typically date of issue is different from the beginning of the validity. This
     * can be used to see when an item was last updated.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    public function getLastUpdated()
    {
        return $this->lastUpdated;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Typically date of issue is different from the beginning of the validity. This
     * can be used to see when an item was last updated.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime $lastUpdated
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCatalogEntry
     */
    public function setLastUpdated($lastUpdated = null)
    {
        if (null === $lastUpdated) {
            $this->lastUpdated = null;
            return $this;
        }
        if ($lastUpdated instanceof FHIRDateTime) {
            $this->lastUpdated = $lastUpdated;
            return $this;
        }
        $this->lastUpdated = new FHIRDateTime($lastUpdated);
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Whether the entry represents an orderable item.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    public function getOrderable()
    {
        return $this->orderable;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Whether the entry represents an orderable item.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean $orderable
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCatalogEntry
     */
    public function setOrderable($orderable = null)
    {
        if (null === $orderable) {
            $this->orderable = null;
            return $this;
        }
        if ($orderable instanceof FHIRBoolean) {
            $this->orderable = $orderable;
            return $this;
        }
        $this->orderable = new FHIRBoolean($orderable);
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The item in a catalog or definition.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getReferencedItem()
    {
        return $this->referencedItem;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The item in a catalog or definition.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $referencedItem
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCatalogEntry
     */
    public function setReferencedItem(FHIRReference $referencedItem = null)
    {
        $this->referencedItem = $referencedItem;
        return $this;
    }

    /**
     * Catalog entries are wrappers that contextualize items included in a catalog.
     *
     * Used for example, to point to a substance, or to a device used to administer a
     * medication.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCatalogEntry\FHIRCatalogEntryRelatedEntry[]
     */
    public function getRelatedEntry()
    {
        return $this->relatedEntry;
    }

    /**
     * Catalog entries are wrappers that contextualize items included in a catalog.
     *
     * Used for example, to point to a substance, or to a device used to administer a
     * medication.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCatalogEntry\FHIRCatalogEntryRelatedEntry $relatedEntry
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCatalogEntry
     */
    public function addRelatedEntry(FHIRCatalogEntryRelatedEntry $relatedEntry = null)
    {
        $this->relatedEntry[] = $relatedEntry;
        return $this;
    }

    /**
     * Catalog entries are wrappers that contextualize items included in a catalog.
     *
     * Used for example, to point to a substance, or to a device used to administer a
     * medication.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCatalogEntry\FHIRCatalogEntryRelatedEntry[] $relatedEntry
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCatalogEntry
     */
    public function setRelatedEntry(array $relatedEntry = [])
    {
        $this->relatedEntry = [];
        if ([] === $relatedEntry) {
            return $this;
        }
        foreach($relatedEntry as $v) {
            if ($v instanceof FHIRCatalogEntryRelatedEntry) {
                $this->addRelatedEntry($v);
            } else {
                $this->addRelatedEntry(new FHIRCatalogEntryRelatedEntry($v));
            }
        }
        return $this;
    }

    /**
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Used to support catalog exchange even for unsupported products, e.g. getting
     * list of medications even if not prescribable.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPublicationStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Used to support catalog exchange even for unsupported products, e.g. getting
     * list of medications even if not prescribable.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPublicationStatus $status
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCatalogEntry
     */
    public function setStatus(FHIRPublicationStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The type of item - medication, device, service, protocol or other.
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
     * The type of item - medication, device, service, protocol or other.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $type
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCatalogEntry
     */
    public function setType(FHIRCodeableConcept $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The date until which this catalog entry is expected to be active.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    public function getValidTo()
    {
        return $this->validTo;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The date until which this catalog entry is expected to be active.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime $validTo
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCatalogEntry
     */
    public function setValidTo($validTo = null)
    {
        if (null === $validTo) {
            $this->validTo = null;
            return $this;
        }
        if ($validTo instanceof FHIRDateTime) {
            $this->validTo = $validTo;
            return $this;
        }
        $this->validTo = new FHIRDateTime($validTo);
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The time period in which this catalog entry is expected to be active.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod
     */
    public function getValidityPeriod()
    {
        return $this->validityPeriod;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The time period in which this catalog entry is expected to be active.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod $validityPeriod
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCatalogEntry
     */
    public function setValidityPeriod(FHIRPeriod $validityPeriod = null)
    {
        $this->validityPeriod = $validityPeriod;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCatalogEntry $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCatalogEntry
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
                throw new \DomainException(sprintf('FHIRCatalogEntry::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRCatalogEntry::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRCatalogEntry;
        } elseif (!is_object($type) || !($type instanceof FHIRCatalogEntry)) {
            throw new \RuntimeException(sprintf(
                'FHIRCatalogEntry::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCatalogEntry or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        FHIRDomainResource::xmlUnserialize($sxe, $type);
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->additionalCharacteristic)) {
            foreach($children->additionalCharacteristic as $child) {
                $type->addAdditionalCharacteristic(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->additionalClassification)) {
            foreach($children->additionalClassification as $child) {
                $type->addAdditionalClassification(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->additionalIdentifier)) {
            foreach($children->additionalIdentifier as $child) {
                $type->addAdditionalIdentifier(FHIRIdentifier::xmlUnserialize($child));
            }
        }
        if (isset($children->classification)) {
            foreach($children->classification as $child) {
                $type->addClassification(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->identifier)) {
            foreach($children->identifier as $child) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($child));
            }
        }
        if (isset($attributes->lastUpdated)) {
            $type->setLastUpdated((string)$attributes->lastUpdated);
        }
        if (isset($children->lastUpdated)) {
            $type->setLastUpdated(FHIRDateTime::xmlUnserialize($children->lastUpdated));
        }
        if (isset($attributes->orderable)) {
            $type->setOrderable((string)$attributes->orderable);
        }
        if (isset($children->orderable)) {
            $type->setOrderable(FHIRBoolean::xmlUnserialize($children->orderable));
        }
        if (isset($children->referencedItem)) {
            $type->setReferencedItem(FHIRReference::xmlUnserialize($children->referencedItem));
        }
        if (isset($children->relatedEntry)) {
            foreach($children->relatedEntry as $child) {
                $type->addRelatedEntry(FHIRCatalogEntryRelatedEntry::xmlUnserialize($child));
            }
        }
        if (isset($children->status)) {
            $type->setStatus(FHIRPublicationStatus::xmlUnserialize($children->status));
        }
        if (isset($children->type)) {
            $type->setType(FHIRCodeableConcept::xmlUnserialize($children->type));
        }
        if (isset($attributes->validTo)) {
            $type->setValidTo((string)$attributes->validTo);
        }
        if (isset($children->validTo)) {
            $type->setValidTo(FHIRDateTime::xmlUnserialize($children->validTo));
        }
        if (isset($children->validityPeriod)) {
            $type->setValidityPeriod(FHIRPeriod::xmlUnserialize($children->validityPeriod));
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

        if ([] !== ($vs = $this->getAdditionalCharacteristic())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_ADDITIONAL_CHARACTERISTIC, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if ([] !== ($vs = $this->getAdditionalClassification())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_ADDITIONAL_CLASSIFICATION, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if ([] !== ($vs = $this->getAdditionalIdentifier())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_ADDITIONAL_IDENTIFIER, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if ([] !== ($vs = $this->getClassification())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_CLASSIFICATION, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getLastUpdated())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_LAST_UPDATED, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getOrderable())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ORDERABLE, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getReferencedItem())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_REFERENCED_ITEM, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getRelatedEntry())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_RELATED_ENTRY, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if (null !== ($v = $this->getStatus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STATUS, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TYPE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValidTo())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALID_TO, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getValidityPeriod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALIDITY_PERIOD, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if ([] !== ($vs = $this->getAdditionalCharacteristic())) {
            $a[self::FIELD_ADDITIONAL_CHARACTERISTIC] = $vs;
        }
        if ([] !== ($vs = $this->getAdditionalClassification())) {
            $a[self::FIELD_ADDITIONAL_CLASSIFICATION] = $vs;
        }
        if ([] !== ($vs = $this->getAdditionalIdentifier())) {
            $a[self::FIELD_ADDITIONAL_IDENTIFIER] = $vs;
        }
        if ([] !== ($vs = $this->getClassification())) {
            $a[self::FIELD_CLASSIFICATION] = $vs;
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = $vs;
        }
        if (null !== ($v = $this->getLastUpdated())) {
            $a[self::FIELD_LAST_UPDATED] = $v->getValue();
            $a[self::FIELD_LAST_UPDATED_EXT] = $v;
        }
        if (null !== ($v = $this->getOrderable())) {
            $a[self::FIELD_ORDERABLE] = $v->getValue();
            $a[self::FIELD_ORDERABLE_EXT] = $v;
        }
        if (null !== ($v = $this->getReferencedItem())) {
            $a[self::FIELD_REFERENCED_ITEM] = $v;
        }
        if ([] !== ($vs = $this->getRelatedEntry())) {
            $a[self::FIELD_RELATED_ENTRY] = $vs;
        }
        if (null !== ($v = $this->getStatus())) {
            $a[self::FIELD_STATUS] = $v;
        }
        if (null !== ($v = $this->getType())) {
            $a[self::FIELD_TYPE] = $v;
        }
        if (null !== ($v = $this->getValidTo())) {
            $a[self::FIELD_VALID_TO] = $v->getValue();
            $a[self::FIELD_VALID_TO_EXT] = $v;
        }
        if (null !== ($v = $this->getValidityPeriod())) {
            $a[self::FIELD_VALIDITY_PERIOD] = $v;
        }
        return [PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE => $this->_getResourceType()] + $a;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}