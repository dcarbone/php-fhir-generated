<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 26th, 2019 15:44+0000
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
 *   Generated on Fri, Nov 1, 2019 09:29+1100 for FHIR v4.0.1
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
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRCatalogEntry
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource
 */
class FHIRCatalogEntry extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CATALOG_ENTRY;
    const FIELD_ADDITIONAL_CHARACTERISTIC = 'additionalCharacteristic';
    const FIELD_ADDITIONAL_CLASSIFICATION = 'additionalClassification';
    const FIELD_ADDITIONAL_IDENTIFIER = 'additionalIdentifier';
    const FIELD_CLASSIFICATION = 'classification';
    const FIELD_IDENTIFIER = 'identifier';
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

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Used for examplefor Out of Formulary, or any specifics.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    protected $additionalCharacteristic = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * User for example for ATC classification, or.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    protected $additionalClassification = [];

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Used in supporting related concepts, e.g. NDC to RxNorm.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[]
     */
    protected $additionalIdentifier = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Classes of devices, or ATC for medication.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    protected $classification = [];

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Used in supporting different identifiers for the same product, e.g. manufacturer
     * code and retailer code.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[]
     */
    protected $identifier = [];

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Typically date of issue is different from the beginning of the validity. This
     * can be used to see when an item was last updated.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    protected $lastUpdated = null;

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether the entry represents an orderable item.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    protected $orderable = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The item in a catalog or definition.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected $referencedItem = null;

    /**
     * Catalog entries are wrappers that contextualize items included in a catalog.
     *
     * Used for example, to point to a substance, or to a device used to administer a
     * medication.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCatalogEntry\FHIRCatalogEntryRelatedEntry[]
     */
    protected $relatedEntry = [];

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Used to support catalog exchange even for unsupported products, e.g. getting
     * list of medications even if not prescribable.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPublicationStatus
     */
    protected $status = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of item - medication, device, service, protocol or other.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $type = null;

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date until which this catalog entry is expected to be active.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    protected $validTo = null;

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The time period in which this catalog entry is expected to be active.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod
     */
    protected $validityPeriod = null;

    /**
     * Validation map for fields in type CatalogEntry
     * @var array
     */
    private static $_validationRules = [    ];

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
                    if (null === $v) {
                        continue;
                    }
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
                    if (null === $v) {
                        continue;
                    }
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
            if (is_array($data[self::FIELD_ADDITIONAL_IDENTIFIER])) {
                foreach($data[self::FIELD_ADDITIONAL_IDENTIFIER] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRIdentifier) {
                        $this->addAdditionalIdentifier($v);
                    } else {
                        $this->addAdditionalIdentifier(new FHIRIdentifier($v));
                    }
                }
            } else if ($data[self::FIELD_ADDITIONAL_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->addAdditionalIdentifier($data[self::FIELD_ADDITIONAL_IDENTIFIER]);
            } else {
                $this->addAdditionalIdentifier(new FHIRIdentifier($data[self::FIELD_ADDITIONAL_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_CLASSIFICATION])) {
            if (is_array($data[self::FIELD_CLASSIFICATION])) {
                foreach($data[self::FIELD_CLASSIFICATION] as $v) {
                    if (null === $v) {
                        continue;
                    }
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
            if (is_array($data[self::FIELD_IDENTIFIER])) {
                foreach($data[self::FIELD_IDENTIFIER] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRIdentifier) {
                        $this->addIdentifier($v);
                    } else {
                        $this->addIdentifier(new FHIRIdentifier($v));
                    }
                }
            } else if ($data[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->addIdentifier($data[self::FIELD_IDENTIFIER]);
            } else {
                $this->addIdentifier(new FHIRIdentifier($data[self::FIELD_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_LAST_UPDATED]) || isset($data[self::FIELD_LAST_UPDATED_EXT])) {
            if (isset($data[self::FIELD_LAST_UPDATED])) {
                $value = $data[self::FIELD_LAST_UPDATED];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_LAST_UPDATED_EXT]) && is_array($data[self::FIELD_LAST_UPDATED_EXT])) {
                $ext = $data[self::FIELD_LAST_UPDATED_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setLastUpdated($value);
                } else if (is_array($value)) {
                    $this->setLastUpdated(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setLastUpdated(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setLastUpdated(new FHIRDateTime($ext));
            }
        }
        if (isset($data[self::FIELD_ORDERABLE]) || isset($data[self::FIELD_ORDERABLE_EXT])) {
            if (isset($data[self::FIELD_ORDERABLE])) {
                $value = $data[self::FIELD_ORDERABLE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_ORDERABLE_EXT]) && is_array($data[self::FIELD_ORDERABLE_EXT])) {
                $ext = $data[self::FIELD_ORDERABLE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setOrderable($value);
                } else if (is_array($value)) {
                    $this->setOrderable(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setOrderable(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setOrderable(new FHIRBoolean($ext));
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
                    if (null === $v) {
                        continue;
                    }
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
        if (isset($data[self::FIELD_STATUS]) || isset($data[self::FIELD_STATUS_EXT])) {
            if (isset($data[self::FIELD_STATUS])) {
                $value = $data[self::FIELD_STATUS];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_STATUS_EXT]) && is_array($data[self::FIELD_STATUS_EXT])) {
                $ext = $data[self::FIELD_STATUS_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRPublicationStatus) {
                    $this->setStatus($value);
                } else if (is_array($value)) {
                    $this->setStatus(new FHIRPublicationStatus(array_merge($ext, $value)));
                } else {
                    $this->setStatus(new FHIRPublicationStatus([FHIRPublicationStatus::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setStatus(new FHIRPublicationStatus($ext));
            }
        }
        if (isset($data[self::FIELD_TYPE])) {
            if ($data[self::FIELD_TYPE] instanceof FHIRCodeableConcept) {
                $this->setType($data[self::FIELD_TYPE]);
            } else {
                $this->setType(new FHIRCodeableConcept($data[self::FIELD_TYPE]));
            }
        }
        if (isset($data[self::FIELD_VALID_TO]) || isset($data[self::FIELD_VALID_TO_EXT])) {
            if (isset($data[self::FIELD_VALID_TO])) {
                $value = $data[self::FIELD_VALID_TO];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_VALID_TO_EXT]) && is_array($data[self::FIELD_VALID_TO_EXT])) {
                $ext = $data[self::FIELD_VALID_TO_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setValidTo($value);
                } else if (is_array($value)) {
                    $this->setValidTo(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setValidTo(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setValidTo(new FHIRDateTime($ext));
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
     * elements, an \@id referenced from the Narrative, or extensions
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Used for examplefor Out of Formulary, or any specifics.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $additionalCharacteristic
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Used for examplefor Out of Formulary, or any specifics.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[] $additionalCharacteristic
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * User for example for ATC classification, or.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $additionalClassification
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * User for example for ATC classification, or.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[] $additionalClassification
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Used in supporting related concepts, e.g. NDC to RxNorm.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier $additionalIdentifier
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Used in supporting related concepts, e.g. NDC to RxNorm.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[] $additionalIdentifier
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Classes of devices, or ATC for medication.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $classification
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Classes of devices, or ATC for medication.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[] $classification
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Used in supporting different identifiers for the same product, e.g. manufacturer
     * code and retailer code.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier $identifier
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Used in supporting different identifiers for the same product, e.g. manufacturer
     * code and retailer code.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[] $identifier
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Typically date of issue is different from the beginning of the validity. This
     * can be used to see when an item was last updated.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime $lastUpdated
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether the entry represents an orderable item.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean $orderable
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The item in a catalog or definition.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $referencedItem
     * @return static
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
     * @return static
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
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Used to support catalog exchange even for unsupported products, e.g. getting
     * list of medications even if not prescribable.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPublicationStatus $status
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of item - medication, device, service, protocol or other.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $type
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date until which this catalog entry is expected to be active.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime $validTo
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The time period in which this catalog entry is expected to be active.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod $validityPeriod
     * @return static
     */
    public function setValidityPeriod(FHIRPeriod $validityPeriod = null)
    {
        $this->validityPeriod = $validityPeriod;
        return $this;
    }

    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules()
    {
        return self::$_validationRules;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by FHIR.  An empty array must be seen as
     * passing.
     *
     * @return array
     */
    public function _getValidationErrors()
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if ([] !== ($vs = $this->getAdditionalCharacteristic())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_ADDITIONAL_CHARACTERISTIC, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getAdditionalClassification())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_ADDITIONAL_CLASSIFICATION, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getAdditionalIdentifier())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_ADDITIONAL_IDENTIFIER, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getClassification())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CLASSIFICATION, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_IDENTIFIER, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getLastUpdated())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_LAST_UPDATED] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOrderable())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ORDERABLE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getReferencedItem())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REFERENCED_ITEM] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getRelatedEntry())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_RELATED_ENTRY, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STATUS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TYPE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValidTo())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALID_TO] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValidityPeriod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALIDITY_PERIOD] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_ADDITIONAL_CHARACTERISTIC])) {
            $v = $this->getAdditionalCharacteristic();
            foreach($validationRules[self::FIELD_ADDITIONAL_CHARACTERISTIC] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CATALOG_ENTRY, self::FIELD_ADDITIONAL_CHARACTERISTIC, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ADDITIONAL_CHARACTERISTIC])) {
                        $errs[self::FIELD_ADDITIONAL_CHARACTERISTIC] = [];
                    }
                    $errs[self::FIELD_ADDITIONAL_CHARACTERISTIC][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ADDITIONAL_CLASSIFICATION])) {
            $v = $this->getAdditionalClassification();
            foreach($validationRules[self::FIELD_ADDITIONAL_CLASSIFICATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CATALOG_ENTRY, self::FIELD_ADDITIONAL_CLASSIFICATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ADDITIONAL_CLASSIFICATION])) {
                        $errs[self::FIELD_ADDITIONAL_CLASSIFICATION] = [];
                    }
                    $errs[self::FIELD_ADDITIONAL_CLASSIFICATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ADDITIONAL_IDENTIFIER])) {
            $v = $this->getAdditionalIdentifier();
            foreach($validationRules[self::FIELD_ADDITIONAL_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CATALOG_ENTRY, self::FIELD_ADDITIONAL_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ADDITIONAL_IDENTIFIER])) {
                        $errs[self::FIELD_ADDITIONAL_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_ADDITIONAL_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CLASSIFICATION])) {
            $v = $this->getClassification();
            foreach($validationRules[self::FIELD_CLASSIFICATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CATALOG_ENTRY, self::FIELD_CLASSIFICATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CLASSIFICATION])) {
                        $errs[self::FIELD_CLASSIFICATION] = [];
                    }
                    $errs[self::FIELD_CLASSIFICATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CATALOG_ENTRY, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IDENTIFIER])) {
                        $errs[self::FIELD_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LAST_UPDATED])) {
            $v = $this->getLastUpdated();
            foreach($validationRules[self::FIELD_LAST_UPDATED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CATALOG_ENTRY, self::FIELD_LAST_UPDATED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LAST_UPDATED])) {
                        $errs[self::FIELD_LAST_UPDATED] = [];
                    }
                    $errs[self::FIELD_LAST_UPDATED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ORDERABLE])) {
            $v = $this->getOrderable();
            foreach($validationRules[self::FIELD_ORDERABLE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CATALOG_ENTRY, self::FIELD_ORDERABLE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ORDERABLE])) {
                        $errs[self::FIELD_ORDERABLE] = [];
                    }
                    $errs[self::FIELD_ORDERABLE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REFERENCED_ITEM])) {
            $v = $this->getReferencedItem();
            foreach($validationRules[self::FIELD_REFERENCED_ITEM] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CATALOG_ENTRY, self::FIELD_REFERENCED_ITEM, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REFERENCED_ITEM])) {
                        $errs[self::FIELD_REFERENCED_ITEM] = [];
                    }
                    $errs[self::FIELD_REFERENCED_ITEM][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RELATED_ENTRY])) {
            $v = $this->getRelatedEntry();
            foreach($validationRules[self::FIELD_RELATED_ENTRY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CATALOG_ENTRY, self::FIELD_RELATED_ENTRY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RELATED_ENTRY])) {
                        $errs[self::FIELD_RELATED_ENTRY] = [];
                    }
                    $errs[self::FIELD_RELATED_ENTRY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STATUS])) {
            $v = $this->getStatus();
            foreach($validationRules[self::FIELD_STATUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CATALOG_ENTRY, self::FIELD_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATUS])) {
                        $errs[self::FIELD_STATUS] = [];
                    }
                    $errs[self::FIELD_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TYPE])) {
            $v = $this->getType();
            foreach($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CATALOG_ENTRY, self::FIELD_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE])) {
                        $errs[self::FIELD_TYPE] = [];
                    }
                    $errs[self::FIELD_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALID_TO])) {
            $v = $this->getValidTo();
            foreach($validationRules[self::FIELD_VALID_TO] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CATALOG_ENTRY, self::FIELD_VALID_TO, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALID_TO])) {
                        $errs[self::FIELD_VALID_TO] = [];
                    }
                    $errs[self::FIELD_VALID_TO][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALIDITY_PERIOD])) {
            $v = $this->getValidityPeriod();
            foreach($validationRules[self::FIELD_VALIDITY_PERIOD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CATALOG_ENTRY, self::FIELD_VALIDITY_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALIDITY_PERIOD])) {
                        $errs[self::FIELD_VALIDITY_PERIOD] = [];
                    }
                    $errs[self::FIELD_VALIDITY_PERIOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTAINED])) {
            $v = $this->getContained();
            foreach($validationRules[self::FIELD_CONTAINED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_CONTAINED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTAINED])) {
                        $errs[self::FIELD_CONTAINED] = [];
                    }
                    $errs[self::FIELD_CONTAINED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXTENSION])) {
            $v = $this->getExtension();
            foreach($validationRules[self::FIELD_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXTENSION])) {
                        $errs[self::FIELD_EXTENSION] = [];
                    }
                    $errs[self::FIELD_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
            $v = $this->getModifierExtension();
            foreach($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MODIFIER_EXTENSION])) {
                        $errs[self::FIELD_MODIFIER_EXTENSION] = [];
                    }
                    $errs[self::FIELD_MODIFIER_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TEXT])) {
            $v = $this->getText();
            foreach($validationRules[self::FIELD_TEXT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_TEXT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TEXT])) {
                        $errs[self::FIELD_TEXT] = [];
                    }
                    $errs[self::FIELD_TEXT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ID])) {
            $v = $this->getId();
            foreach($validationRules[self::FIELD_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ID])) {
                        $errs[self::FIELD_ID] = [];
                    }
                    $errs[self::FIELD_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IMPLICIT_RULES])) {
            $v = $this->getImplicitRules();
            foreach($validationRules[self::FIELD_IMPLICIT_RULES] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_IMPLICIT_RULES, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IMPLICIT_RULES])) {
                        $errs[self::FIELD_IMPLICIT_RULES] = [];
                    }
                    $errs[self::FIELD_IMPLICIT_RULES][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LANGUAGE])) {
            $v = $this->getLanguage();
            foreach($validationRules[self::FIELD_LANGUAGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_LANGUAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LANGUAGE])) {
                        $errs[self::FIELD_LANGUAGE] = [];
                    }
                    $errs[self::FIELD_LANGUAGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_META])) {
            $v = $this->getMeta();
            foreach($validationRules[self::FIELD_META] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_META, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_META])) {
                        $errs[self::FIELD_META] = [];
                    }
                    $errs[self::FIELD_META][$rule] = $err;
                }
            }
        }
        return $errs;
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
        if (isset($children->lastUpdated)) {
            $type->setLastUpdated(FHIRDateTime::xmlUnserialize($children->lastUpdated));
        }
        if (isset($attributes->lastUpdated)) {
            $pt = $type->getLastUpdated();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->lastUpdated);
            } else {
                $type->setLastUpdated((string)$attributes->lastUpdated);
            }
        }
        if (isset($children->orderable)) {
            $type->setOrderable(FHIRBoolean::xmlUnserialize($children->orderable));
        }
        if (isset($attributes->orderable)) {
            $pt = $type->getOrderable();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->orderable);
            } else {
                $type->setOrderable((string)$attributes->orderable);
            }
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
        if (isset($children->validTo)) {
            $type->setValidTo(FHIRDateTime::xmlUnserialize($children->validTo));
        }
        if (isset($attributes->validTo)) {
            $pt = $type->getValidTo();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->validTo);
            } else {
                $type->setValidTo((string)$attributes->validTo);
            }
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
            $a[self::FIELD_ADDITIONAL_CHARACTERISTIC] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_ADDITIONAL_CHARACTERISTIC][] = $v;
            }
        }
        if ([] !== ($vs = $this->getAdditionalClassification())) {
            $a[self::FIELD_ADDITIONAL_CLASSIFICATION] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_ADDITIONAL_CLASSIFICATION][] = $v;
            }
        }
        if ([] !== ($vs = $this->getAdditionalIdentifier())) {
            $a[self::FIELD_ADDITIONAL_IDENTIFIER] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_ADDITIONAL_IDENTIFIER][] = $v;
            }
        }
        if ([] !== ($vs = $this->getClassification())) {
            $a[self::FIELD_CLASSIFICATION] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_CLASSIFICATION][] = $v;
            }
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_IDENTIFIER][] = $v;
            }
        }
        if (null !== ($v = $this->getLastUpdated())) {
            $a[self::FIELD_LAST_UPDATED] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDateTime::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDateTime::FIELD_VALUE]);
                $a[self::FIELD_LAST_UPDATED_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getOrderable())) {
            $a[self::FIELD_ORDERABLE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRBoolean::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRBoolean::FIELD_VALUE]);
                $a[self::FIELD_ORDERABLE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getReferencedItem())) {
            $a[self::FIELD_REFERENCED_ITEM] = $v;
        }
        if ([] !== ($vs = $this->getRelatedEntry())) {
            $a[self::FIELD_RELATED_ENTRY] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_RELATED_ENTRY][] = $v;
            }
        }
        if (null !== ($v = $this->getStatus())) {
            $a[self::FIELD_STATUS] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRPublicationStatus::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRPublicationStatus::FIELD_VALUE]);
                $a[self::FIELD_STATUS_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getType())) {
            $a[self::FIELD_TYPE] = $v;
        }
        if (null !== ($v = $this->getValidTo())) {
            $a[self::FIELD_VALID_TO] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDateTime::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDateTime::FIELD_VALUE]);
                $a[self::FIELD_VALID_TO_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getValidityPeriod())) {
            $a[self::FIELD_VALIDITY_PERIOD] = $v;
        }
        if ([] !== ($vs = $this->_getFHIRComments())) {
            $a[PHPFHIRConstants::JSON_FIELD_FHIR_COMMENTS] = $vs;
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