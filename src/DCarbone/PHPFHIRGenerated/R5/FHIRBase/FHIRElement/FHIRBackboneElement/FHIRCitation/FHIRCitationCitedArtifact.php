<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCitation;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: August 7th, 2024 02:08+0000
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

use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\R5\FHIRDateTimePrimitive;
use DCarbone\PHPFHIRGenerated\R5\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfigKeyEnum;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRTypeInterface;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlWriter;

/**
 * The Citation Resource enables reference to any knowledge artifact for purposes
 * of identification and attribution. The Citation Resource supports existing
 * reference structures and developing publication practices such as versioning,
 * expressing complex contributorship roles, and referencing computable resources.
 *
 * Class FHIRCitationCitedArtifact
 * @package \DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCitation
 */
class FHIRCitationCitedArtifact extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CITATION_DOT_CITED_ARTIFACT;

    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_RELATED_IDENTIFIER = 'relatedIdentifier';
    const FIELD_DATE_ACCESSED = 'dateAccessed';
    const FIELD_DATE_ACCESSED_EXT = '_dateAccessed';
    const FIELD_VERSION = 'version';
    const FIELD_CURRENT_STATE = 'currentState';
    const FIELD_STATUS_DATE = 'statusDate';
    const FIELD_TITLE = 'title';
    const FIELD_ABSTRACT = 'abstract';
    const FIELD_PART = 'part';
    const FIELD_RELATES_TO = 'relatesTo';
    const FIELD_PUBLICATION_FORM = 'publicationForm';
    const FIELD_WEB_LOCATION = 'webLocation';
    const FIELD_CLASSIFICATION = 'classification';
    const FIELD_CONTRIBUTORSHIP = 'contributorship';
    const FIELD_NOTE = 'note';

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A formal identifier that is used to identify the cited artifact when it is
     * represented in other formats, or referenced in a specification, model, design or
     * an instance.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier[]
     */
    protected null|array $identifier = [];
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A formal identifier that is used to identify things closely related to the cited
     * artifact.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier[]
     */
    protected null|array $relatedIdentifier = [];
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When the cited artifact was accessed.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDateTime
     */
    protected null|FHIRDateTime $dateAccessed = null;
    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * The defined version of the cited artifact.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationVersion
     */
    protected null|FHIRCitationVersion $version = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The status of the cited artifact.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    protected null|array $currentState = [];
    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * An effective date or period, historical or future, actual or expected, for a
     * status of the cited artifact.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationStatusDate1[]
     */
    protected null|array $statusDate = [];
    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * The title details of the article or artifact.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationTitle[]
     */
    protected null|array $title = [];
    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * The abstract may be used to convey article-contained abstracts,
     * externally-created abstracts, or other descriptive summaries.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationAbstract[]
     */
    protected null|array $abstract = [];
    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * The component of the article or artifact.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationPart
     */
    protected null|FHIRCitationPart $part = null;
    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * The artifact related to the cited artifact.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationRelatesTo[]
     */
    protected null|array $relatesTo = [];
    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * If multiple, used to represent alternative forms of the article that are not
     * separate citations.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationPublicationForm[]
     */
    protected null|array $publicationForm = [];
    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * Used for any URL for the article or artifact cited.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationWebLocation[]
     */
    protected null|array $webLocation = [];
    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * The assignment to an organizing scheme.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationClassification1[]
     */
    protected null|array $classification = [];
    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * This element is used to list authors and other contributors, their contact
     * information, specific contributions, and summary statements.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationContributorship
     */
    protected null|FHIRCitationContributorship $contributorship = null;
    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Any additional information or content for the article or artifact.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation[]
     */
    protected null|array $note = [];

    /**
     * Validation map for fields in type Citation.CitedArtifact
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /** @var array */
    private array $_primitiveXmlLocations = [];

    /**
     * FHIRCitationCitedArtifact Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_IDENTIFIER, $data)) {
            if (is_array($data[self::FIELD_IDENTIFIER])) {
                foreach($data[self::FIELD_IDENTIFIER] as $v) {
                    if ($v instanceof FHIRIdentifier) {
                        $this->addIdentifier($v);
                    } else {
                        $this->addIdentifier(new FHIRIdentifier($v));
                    }
                }
            } elseif ($data[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->addIdentifier($data[self::FIELD_IDENTIFIER]);
            } else {
                $this->addIdentifier(new FHIRIdentifier($data[self::FIELD_IDENTIFIER]));
            }
        }
        if (array_key_exists(self::FIELD_RELATED_IDENTIFIER, $data)) {
            if (is_array($data[self::FIELD_RELATED_IDENTIFIER])) {
                foreach($data[self::FIELD_RELATED_IDENTIFIER] as $v) {
                    if ($v instanceof FHIRIdentifier) {
                        $this->addRelatedIdentifier($v);
                    } else {
                        $this->addRelatedIdentifier(new FHIRIdentifier($v));
                    }
                }
            } elseif ($data[self::FIELD_RELATED_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->addRelatedIdentifier($data[self::FIELD_RELATED_IDENTIFIER]);
            } else {
                $this->addRelatedIdentifier(new FHIRIdentifier($data[self::FIELD_RELATED_IDENTIFIER]));
            }
        }
        if (array_key_exists(self::FIELD_DATE_ACCESSED, $data) || array_key_exists(self::FIELD_DATE_ACCESSED_EXT, $data)) {
            $value = $data[self::FIELD_DATE_ACCESSED] ?? null;
            $ext = (isset($data[self::FIELD_DATE_ACCESSED_EXT]) && is_array($data[self::FIELD_DATE_ACCESSED_EXT])) ? $data[self::FIELD_DATE_ACCESSED_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setDateAccessed($value);
                } else if (is_array($value)) {
                    $this->setDateAccessed(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setDateAccessed(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDateAccessed(new FHIRDateTime($ext));
            } else {
                $this->setDateAccessed(new FHIRDateTime(null));
            }
        }
        if (array_key_exists(self::FIELD_VERSION, $data)) {
            if ($data[self::FIELD_VERSION] instanceof FHIRCitationVersion) {
                $this->setVersion($data[self::FIELD_VERSION]);
            } else {
                $this->setVersion(new FHIRCitationVersion($data[self::FIELD_VERSION]));
            }
        }
        if (array_key_exists(self::FIELD_CURRENT_STATE, $data)) {
            if (is_array($data[self::FIELD_CURRENT_STATE])) {
                foreach($data[self::FIELD_CURRENT_STATE] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addCurrentState($v);
                    } else {
                        $this->addCurrentState(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_CURRENT_STATE] instanceof FHIRCodeableConcept) {
                $this->addCurrentState($data[self::FIELD_CURRENT_STATE]);
            } else {
                $this->addCurrentState(new FHIRCodeableConcept($data[self::FIELD_CURRENT_STATE]));
            }
        }
        if (array_key_exists(self::FIELD_STATUS_DATE, $data)) {
            if (is_array($data[self::FIELD_STATUS_DATE])) {
                foreach($data[self::FIELD_STATUS_DATE] as $v) {
                    if ($v instanceof FHIRCitationStatusDate1) {
                        $this->addStatusDate($v);
                    } else {
                        $this->addStatusDate(new FHIRCitationStatusDate1($v));
                    }
                }
            } elseif ($data[self::FIELD_STATUS_DATE] instanceof FHIRCitationStatusDate1) {
                $this->addStatusDate($data[self::FIELD_STATUS_DATE]);
            } else {
                $this->addStatusDate(new FHIRCitationStatusDate1($data[self::FIELD_STATUS_DATE]));
            }
        }
        if (array_key_exists(self::FIELD_TITLE, $data)) {
            if (is_array($data[self::FIELD_TITLE])) {
                foreach($data[self::FIELD_TITLE] as $v) {
                    if ($v instanceof FHIRCitationTitle) {
                        $this->addTitle($v);
                    } else {
                        $this->addTitle(new FHIRCitationTitle($v));
                    }
                }
            } elseif ($data[self::FIELD_TITLE] instanceof FHIRCitationTitle) {
                $this->addTitle($data[self::FIELD_TITLE]);
            } else {
                $this->addTitle(new FHIRCitationTitle($data[self::FIELD_TITLE]));
            }
        }
        if (array_key_exists(self::FIELD_ABSTRACT, $data)) {
            if (is_array($data[self::FIELD_ABSTRACT])) {
                foreach($data[self::FIELD_ABSTRACT] as $v) {
                    if ($v instanceof FHIRCitationAbstract) {
                        $this->addAbstract($v);
                    } else {
                        $this->addAbstract(new FHIRCitationAbstract($v));
                    }
                }
            } elseif ($data[self::FIELD_ABSTRACT] instanceof FHIRCitationAbstract) {
                $this->addAbstract($data[self::FIELD_ABSTRACT]);
            } else {
                $this->addAbstract(new FHIRCitationAbstract($data[self::FIELD_ABSTRACT]));
            }
        }
        if (array_key_exists(self::FIELD_PART, $data)) {
            if ($data[self::FIELD_PART] instanceof FHIRCitationPart) {
                $this->setPart($data[self::FIELD_PART]);
            } else {
                $this->setPart(new FHIRCitationPart($data[self::FIELD_PART]));
            }
        }
        if (array_key_exists(self::FIELD_RELATES_TO, $data)) {
            if (is_array($data[self::FIELD_RELATES_TO])) {
                foreach($data[self::FIELD_RELATES_TO] as $v) {
                    if ($v instanceof FHIRCitationRelatesTo) {
                        $this->addRelatesTo($v);
                    } else {
                        $this->addRelatesTo(new FHIRCitationRelatesTo($v));
                    }
                }
            } elseif ($data[self::FIELD_RELATES_TO] instanceof FHIRCitationRelatesTo) {
                $this->addRelatesTo($data[self::FIELD_RELATES_TO]);
            } else {
                $this->addRelatesTo(new FHIRCitationRelatesTo($data[self::FIELD_RELATES_TO]));
            }
        }
        if (array_key_exists(self::FIELD_PUBLICATION_FORM, $data)) {
            if (is_array($data[self::FIELD_PUBLICATION_FORM])) {
                foreach($data[self::FIELD_PUBLICATION_FORM] as $v) {
                    if ($v instanceof FHIRCitationPublicationForm) {
                        $this->addPublicationForm($v);
                    } else {
                        $this->addPublicationForm(new FHIRCitationPublicationForm($v));
                    }
                }
            } elseif ($data[self::FIELD_PUBLICATION_FORM] instanceof FHIRCitationPublicationForm) {
                $this->addPublicationForm($data[self::FIELD_PUBLICATION_FORM]);
            } else {
                $this->addPublicationForm(new FHIRCitationPublicationForm($data[self::FIELD_PUBLICATION_FORM]));
            }
        }
        if (array_key_exists(self::FIELD_WEB_LOCATION, $data)) {
            if (is_array($data[self::FIELD_WEB_LOCATION])) {
                foreach($data[self::FIELD_WEB_LOCATION] as $v) {
                    if ($v instanceof FHIRCitationWebLocation) {
                        $this->addWebLocation($v);
                    } else {
                        $this->addWebLocation(new FHIRCitationWebLocation($v));
                    }
                }
            } elseif ($data[self::FIELD_WEB_LOCATION] instanceof FHIRCitationWebLocation) {
                $this->addWebLocation($data[self::FIELD_WEB_LOCATION]);
            } else {
                $this->addWebLocation(new FHIRCitationWebLocation($data[self::FIELD_WEB_LOCATION]));
            }
        }
        if (array_key_exists(self::FIELD_CLASSIFICATION, $data)) {
            if (is_array($data[self::FIELD_CLASSIFICATION])) {
                foreach($data[self::FIELD_CLASSIFICATION] as $v) {
                    if ($v instanceof FHIRCitationClassification1) {
                        $this->addClassification($v);
                    } else {
                        $this->addClassification(new FHIRCitationClassification1($v));
                    }
                }
            } elseif ($data[self::FIELD_CLASSIFICATION] instanceof FHIRCitationClassification1) {
                $this->addClassification($data[self::FIELD_CLASSIFICATION]);
            } else {
                $this->addClassification(new FHIRCitationClassification1($data[self::FIELD_CLASSIFICATION]));
            }
        }
        if (array_key_exists(self::FIELD_CONTRIBUTORSHIP, $data)) {
            if ($data[self::FIELD_CONTRIBUTORSHIP] instanceof FHIRCitationContributorship) {
                $this->setContributorship($data[self::FIELD_CONTRIBUTORSHIP]);
            } else {
                $this->setContributorship(new FHIRCitationContributorship($data[self::FIELD_CONTRIBUTORSHIP]));
            }
        }
        if (array_key_exists(self::FIELD_NOTE, $data)) {
            if (is_array($data[self::FIELD_NOTE])) {
                foreach($data[self::FIELD_NOTE] as $v) {
                    if ($v instanceof FHIRAnnotation) {
                        $this->addNote($v);
                    } else {
                        $this->addNote(new FHIRAnnotation($v));
                    }
                }
            } elseif ($data[self::FIELD_NOTE] instanceof FHIRAnnotation) {
                $this->addNote($data[self::FIELD_NOTE]);
            } else {
                $this->addNote(new FHIRAnnotation($data[self::FIELD_NOTE]));
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
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A formal identifier that is used to identify the cited artifact when it is
     * represented in other formats, or referenced in a specification, model, design or
     * an instance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier[]
     */
    public function getIdentifier(): null|array
    {
        return $this->identifier;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A formal identifier that is used to identify the cited artifact when it is
     * represented in other formats, or referenced in a specification, model, design or
     * an instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier $identifier
     * @return static
     */
    public function addIdentifier(null|FHIRIdentifier $identifier = null): self
    {
        if (null === $identifier) {
            $identifier = new FHIRIdentifier();
        }
        $this->_trackValueAdded();
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A formal identifier that is used to identify things closely related to the cited
     * artifact.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier[]
     */
    public function getRelatedIdentifier(): null|array
    {
        return $this->relatedIdentifier;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A formal identifier that is used to identify things closely related to the cited
     * artifact.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier $relatedIdentifier
     * @return static
     */
    public function addRelatedIdentifier(null|FHIRIdentifier $relatedIdentifier = null): self
    {
        if (null === $relatedIdentifier) {
            $relatedIdentifier = new FHIRIdentifier();
        }
        $this->_trackValueAdded();
        $this->relatedIdentifier[] = $relatedIdentifier;
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When the cited artifact was accessed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDateTime
     */
    public function getDateAccessed(): null|FHIRDateTime
    {
        return $this->dateAccessed;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When the cited artifact was accessed.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\R5\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDateTime $dateAccessed
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDateAccessed(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $dateAccessed = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $dateAccessed && !($dateAccessed instanceof FHIRDateTime)) {
            $dateAccessed = new FHIRDateTime($dateAccessed);
        }
        $this->_trackValueSet($this->dateAccessed, $dateAccessed);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_DATE_ACCESSED])) {
            $this->_primitiveXmlLocations[self::FIELD_DATE_ACCESSED] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_DATE_ACCESSED][0] = $xmlLocation;
        $this->dateAccessed = $dateAccessed;
        return $this;
    }

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * The defined version of the cited artifact.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationVersion
     */
    public function getVersion(): null|FHIRCitationVersion
    {
        return $this->version;
    }

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * The defined version of the cited artifact.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationVersion $version
     * @return static
     */
    public function setVersion(null|FHIRCitationVersion $version = null): self
    {
        if (null === $version) {
            $version = new FHIRCitationVersion();
        }
        $this->_trackValueSet($this->version, $version);
        $this->version = $version;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The status of the cited artifact.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    public function getCurrentState(): null|array
    {
        return $this->currentState;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The status of the cited artifact.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $currentState
     * @return static
     */
    public function addCurrentState(null|FHIRCodeableConcept $currentState = null): self
    {
        if (null === $currentState) {
            $currentState = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->currentState[] = $currentState;
        return $this;
    }

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * An effective date or period, historical or future, actual or expected, for a
     * status of the cited artifact.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationStatusDate1[]
     */
    public function getStatusDate(): null|array
    {
        return $this->statusDate;
    }

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * An effective date or period, historical or future, actual or expected, for a
     * status of the cited artifact.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationStatusDate1 $statusDate
     * @return static
     */
    public function addStatusDate(null|FHIRCitationStatusDate1 $statusDate = null): self
    {
        if (null === $statusDate) {
            $statusDate = new FHIRCitationStatusDate1();
        }
        $this->_trackValueAdded();
        $this->statusDate[] = $statusDate;
        return $this;
    }

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * The title details of the article or artifact.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationTitle[]
     */
    public function getTitle(): null|array
    {
        return $this->title;
    }

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * The title details of the article or artifact.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationTitle $title
     * @return static
     */
    public function addTitle(null|FHIRCitationTitle $title = null): self
    {
        if (null === $title) {
            $title = new FHIRCitationTitle();
        }
        $this->_trackValueAdded();
        $this->title[] = $title;
        return $this;
    }

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * The abstract may be used to convey article-contained abstracts,
     * externally-created abstracts, or other descriptive summaries.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationAbstract[]
     */
    public function getAbstract(): null|array
    {
        return $this->abstract;
    }

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * The abstract may be used to convey article-contained abstracts,
     * externally-created abstracts, or other descriptive summaries.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationAbstract $abstract
     * @return static
     */
    public function addAbstract(null|FHIRCitationAbstract $abstract = null): self
    {
        if (null === $abstract) {
            $abstract = new FHIRCitationAbstract();
        }
        $this->_trackValueAdded();
        $this->abstract[] = $abstract;
        return $this;
    }

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * The component of the article or artifact.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationPart
     */
    public function getPart(): null|FHIRCitationPart
    {
        return $this->part;
    }

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * The component of the article or artifact.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationPart $part
     * @return static
     */
    public function setPart(null|FHIRCitationPart $part = null): self
    {
        if (null === $part) {
            $part = new FHIRCitationPart();
        }
        $this->_trackValueSet($this->part, $part);
        $this->part = $part;
        return $this;
    }

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * The artifact related to the cited artifact.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationRelatesTo[]
     */
    public function getRelatesTo(): null|array
    {
        return $this->relatesTo;
    }

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * The artifact related to the cited artifact.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationRelatesTo $relatesTo
     * @return static
     */
    public function addRelatesTo(null|FHIRCitationRelatesTo $relatesTo = null): self
    {
        if (null === $relatesTo) {
            $relatesTo = new FHIRCitationRelatesTo();
        }
        $this->_trackValueAdded();
        $this->relatesTo[] = $relatesTo;
        return $this;
    }

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * If multiple, used to represent alternative forms of the article that are not
     * separate citations.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationPublicationForm[]
     */
    public function getPublicationForm(): null|array
    {
        return $this->publicationForm;
    }

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * If multiple, used to represent alternative forms of the article that are not
     * separate citations.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationPublicationForm $publicationForm
     * @return static
     */
    public function addPublicationForm(null|FHIRCitationPublicationForm $publicationForm = null): self
    {
        if (null === $publicationForm) {
            $publicationForm = new FHIRCitationPublicationForm();
        }
        $this->_trackValueAdded();
        $this->publicationForm[] = $publicationForm;
        return $this;
    }

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * Used for any URL for the article or artifact cited.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationWebLocation[]
     */
    public function getWebLocation(): null|array
    {
        return $this->webLocation;
    }

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * Used for any URL for the article or artifact cited.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationWebLocation $webLocation
     * @return static
     */
    public function addWebLocation(null|FHIRCitationWebLocation $webLocation = null): self
    {
        if (null === $webLocation) {
            $webLocation = new FHIRCitationWebLocation();
        }
        $this->_trackValueAdded();
        $this->webLocation[] = $webLocation;
        return $this;
    }

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * The assignment to an organizing scheme.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationClassification1[]
     */
    public function getClassification(): null|array
    {
        return $this->classification;
    }

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * The assignment to an organizing scheme.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationClassification1 $classification
     * @return static
     */
    public function addClassification(null|FHIRCitationClassification1 $classification = null): self
    {
        if (null === $classification) {
            $classification = new FHIRCitationClassification1();
        }
        $this->_trackValueAdded();
        $this->classification[] = $classification;
        return $this;
    }

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * This element is used to list authors and other contributors, their contact
     * information, specific contributions, and summary statements.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationContributorship
     */
    public function getContributorship(): null|FHIRCitationContributorship
    {
        return $this->contributorship;
    }

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * This element is used to list authors and other contributors, their contact
     * information, specific contributions, and summary statements.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationContributorship $contributorship
     * @return static
     */
    public function setContributorship(null|FHIRCitationContributorship $contributorship = null): self
    {
        if (null === $contributorship) {
            $contributorship = new FHIRCitationContributorship();
        }
        $this->_trackValueSet($this->contributorship, $contributorship);
        $this->contributorship = $contributorship;
        return $this;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Any additional information or content for the article or artifact.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation[]
     */
    public function getNote(): null|array
    {
        return $this->note;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Any additional information or content for the article or artifact.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation $note
     * @return static
     */
    public function addNote(null|FHIRAnnotation $note = null): self
    {
        if (null === $note) {
            $note = new FHIRAnnotation();
        }
        $this->_trackValueAdded();
        $this->note[] = $note;
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
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_IDENTIFIER, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getRelatedIdentifier())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_RELATED_IDENTIFIER, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getDateAccessed())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DATE_ACCESSED] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getVersion())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VERSION] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getCurrentState())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CURRENT_STATE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getStatusDate())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_STATUS_DATE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getTitle())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_TITLE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getAbstract())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_ABSTRACT, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getPart())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PART] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getRelatesTo())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_RELATES_TO, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getPublicationForm())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PUBLICATION_FORM, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getWebLocation())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_WEB_LOCATION, $i)] = $fieldErrs;
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
        if (null !== ($v = $this->getContributorship())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CONTRIBUTORSHIP] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getNote())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_NOTE, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_CITED_ARTIFACT, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IDENTIFIER])) {
                        $errs[self::FIELD_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RELATED_IDENTIFIER])) {
            $v = $this->getRelatedIdentifier();
            foreach($validationRules[self::FIELD_RELATED_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_CITED_ARTIFACT, self::FIELD_RELATED_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RELATED_IDENTIFIER])) {
                        $errs[self::FIELD_RELATED_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_RELATED_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DATE_ACCESSED])) {
            $v = $this->getDateAccessed();
            foreach($validationRules[self::FIELD_DATE_ACCESSED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_CITED_ARTIFACT, self::FIELD_DATE_ACCESSED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DATE_ACCESSED])) {
                        $errs[self::FIELD_DATE_ACCESSED] = [];
                    }
                    $errs[self::FIELD_DATE_ACCESSED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VERSION])) {
            $v = $this->getVersion();
            foreach($validationRules[self::FIELD_VERSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_CITED_ARTIFACT, self::FIELD_VERSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VERSION])) {
                        $errs[self::FIELD_VERSION] = [];
                    }
                    $errs[self::FIELD_VERSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CURRENT_STATE])) {
            $v = $this->getCurrentState();
            foreach($validationRules[self::FIELD_CURRENT_STATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_CITED_ARTIFACT, self::FIELD_CURRENT_STATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CURRENT_STATE])) {
                        $errs[self::FIELD_CURRENT_STATE] = [];
                    }
                    $errs[self::FIELD_CURRENT_STATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STATUS_DATE])) {
            $v = $this->getStatusDate();
            foreach($validationRules[self::FIELD_STATUS_DATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_CITED_ARTIFACT, self::FIELD_STATUS_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATUS_DATE])) {
                        $errs[self::FIELD_STATUS_DATE] = [];
                    }
                    $errs[self::FIELD_STATUS_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TITLE])) {
            $v = $this->getTitle();
            foreach($validationRules[self::FIELD_TITLE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_CITED_ARTIFACT, self::FIELD_TITLE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TITLE])) {
                        $errs[self::FIELD_TITLE] = [];
                    }
                    $errs[self::FIELD_TITLE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ABSTRACT])) {
            $v = $this->getAbstract();
            foreach($validationRules[self::FIELD_ABSTRACT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_CITED_ARTIFACT, self::FIELD_ABSTRACT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ABSTRACT])) {
                        $errs[self::FIELD_ABSTRACT] = [];
                    }
                    $errs[self::FIELD_ABSTRACT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PART])) {
            $v = $this->getPart();
            foreach($validationRules[self::FIELD_PART] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_CITED_ARTIFACT, self::FIELD_PART, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PART])) {
                        $errs[self::FIELD_PART] = [];
                    }
                    $errs[self::FIELD_PART][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RELATES_TO])) {
            $v = $this->getRelatesTo();
            foreach($validationRules[self::FIELD_RELATES_TO] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_CITED_ARTIFACT, self::FIELD_RELATES_TO, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RELATES_TO])) {
                        $errs[self::FIELD_RELATES_TO] = [];
                    }
                    $errs[self::FIELD_RELATES_TO][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PUBLICATION_FORM])) {
            $v = $this->getPublicationForm();
            foreach($validationRules[self::FIELD_PUBLICATION_FORM] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_CITED_ARTIFACT, self::FIELD_PUBLICATION_FORM, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PUBLICATION_FORM])) {
                        $errs[self::FIELD_PUBLICATION_FORM] = [];
                    }
                    $errs[self::FIELD_PUBLICATION_FORM][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_WEB_LOCATION])) {
            $v = $this->getWebLocation();
            foreach($validationRules[self::FIELD_WEB_LOCATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_CITED_ARTIFACT, self::FIELD_WEB_LOCATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_WEB_LOCATION])) {
                        $errs[self::FIELD_WEB_LOCATION] = [];
                    }
                    $errs[self::FIELD_WEB_LOCATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CLASSIFICATION])) {
            $v = $this->getClassification();
            foreach($validationRules[self::FIELD_CLASSIFICATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_CITED_ARTIFACT, self::FIELD_CLASSIFICATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CLASSIFICATION])) {
                        $errs[self::FIELD_CLASSIFICATION] = [];
                    }
                    $errs[self::FIELD_CLASSIFICATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTRIBUTORSHIP])) {
            $v = $this->getContributorship();
            foreach($validationRules[self::FIELD_CONTRIBUTORSHIP] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_CITED_ARTIFACT, self::FIELD_CONTRIBUTORSHIP, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTRIBUTORSHIP])) {
                        $errs[self::FIELD_CONTRIBUTORSHIP] = [];
                    }
                    $errs[self::FIELD_CONTRIBUTORSHIP][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NOTE])) {
            $v = $this->getNote();
            foreach($validationRules[self::FIELD_NOTE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_CITED_ARTIFACT, self::FIELD_NOTE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NOTE])) {
                        $errs[self::FIELD_NOTE] = [];
                    }
                    $errs[self::FIELD_NOTE][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationCitedArtifact $type
     * @param null|int|\DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationCitedArtifact
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
        } else if (!($type instanceof FHIRCitationCitedArtifact)) {
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
            if (self::FIELD_IDENTIFIER === $childName) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_RELATED_IDENTIFIER === $childName) {
                $type->addRelatedIdentifier(FHIRIdentifier::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DATE_ACCESSED === $childName) {
                $type->setDateAccessed(FHIRDateTime::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_VERSION === $childName) {
                $type->setVersion(FHIRCitationVersion::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CURRENT_STATE === $childName) {
                $type->addCurrentState(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_STATUS_DATE === $childName) {
                $type->addStatusDate(FHIRCitationStatusDate1::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_TITLE === $childName) {
                $type->addTitle(FHIRCitationTitle::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ABSTRACT === $childName) {
                $type->addAbstract(FHIRCitationAbstract::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PART === $childName) {
                $type->setPart(FHIRCitationPart::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_RELATES_TO === $childName) {
                $type->addRelatesTo(FHIRCitationRelatesTo::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PUBLICATION_FORM === $childName) {
                $type->addPublicationForm(FHIRCitationPublicationForm::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_WEB_LOCATION === $childName) {
                $type->addWebLocation(FHIRCitationWebLocation::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CLASSIFICATION === $childName) {
                $type->addClassification(FHIRCitationClassification1::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CONTRIBUTORSHIP === $childName) {
                $type->setContributorship(FHIRCitationContributorship::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_NOTE === $childName) {
                $type->addNote(FHIRAnnotation::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_DATE_ACCESSED])) {
            $pt = $type->getDateAccessed();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DATE_ACCESSED], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setDateAccessed((string)$attributes[self::FIELD_DATE_ACCESSED], PHPFHIRXmlLocationEnum::ATTRIBUTE);
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
     * @param null|\DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlWriter $xw
     * @param null|int|\DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlWriter
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
            $xw->openRootNode($config, 'CitationCitedArtifact', $this->_getSourceXmlns());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DATE_ACCESSED] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDateAccessed())) {
            $xw->writeAttribute(self::FIELD_DATE_ACCESSED, $v->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        foreach ($this->getIdentifier() as $v) {
            $xw->startElement(self::FIELD_IDENTIFIER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getRelatedIdentifier() as $v) {
            $xw->startElement(self::FIELD_RELATED_IDENTIFIER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DATE_ACCESSED] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDateAccessed())) {
            $xw->startElement(self::FIELD_DATE_ACCESSED);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getVersion())) {
            $xw->startElement(self::FIELD_VERSION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getCurrentState() as $v) {
            $xw->startElement(self::FIELD_CURRENT_STATE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getStatusDate() as $v) {
            $xw->startElement(self::FIELD_STATUS_DATE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getTitle() as $v) {
            $xw->startElement(self::FIELD_TITLE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getAbstract() as $v) {
            $xw->startElement(self::FIELD_ABSTRACT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getPart())) {
            $xw->startElement(self::FIELD_PART);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getRelatesTo() as $v) {
            $xw->startElement(self::FIELD_RELATES_TO);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getPublicationForm() as $v) {
            $xw->startElement(self::FIELD_PUBLICATION_FORM);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getWebLocation() as $v) {
            $xw->startElement(self::FIELD_WEB_LOCATION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getClassification() as $v) {
            $xw->startElement(self::FIELD_CLASSIFICATION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getContributorship())) {
            $xw->startElement(self::FIELD_CONTRIBUTORSHIP);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getNote() as $v) {
            $xw->startElement(self::FIELD_NOTE);
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
        if ([] !== ($vs = $this->getIdentifier())) {
            $out->{self::FIELD_IDENTIFIER} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_IDENTIFIER}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getRelatedIdentifier())) {
            $out->{self::FIELD_RELATED_IDENTIFIER} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_RELATED_IDENTIFIER}[] = $v;
            }
        }
        if (null !== ($v = $this->getDateAccessed())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DATE_ACCESSED} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDateTime::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DATE_ACCESSED_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getVersion())) {
            $out->{self::FIELD_VERSION} = $v;
        }
        if ([] !== ($vs = $this->getCurrentState())) {
            $out->{self::FIELD_CURRENT_STATE} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_CURRENT_STATE}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getStatusDate())) {
            $out->{self::FIELD_STATUS_DATE} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_STATUS_DATE}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getTitle())) {
            $out->{self::FIELD_TITLE} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_TITLE}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getAbstract())) {
            $out->{self::FIELD_ABSTRACT} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_ABSTRACT}[] = $v;
            }
        }
        if (null !== ($v = $this->getPart())) {
            $out->{self::FIELD_PART} = $v;
        }
        if ([] !== ($vs = $this->getRelatesTo())) {
            $out->{self::FIELD_RELATES_TO} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_RELATES_TO}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getPublicationForm())) {
            $out->{self::FIELD_PUBLICATION_FORM} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_PUBLICATION_FORM}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getWebLocation())) {
            $out->{self::FIELD_WEB_LOCATION} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_WEB_LOCATION}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getClassification())) {
            $out->{self::FIELD_CLASSIFICATION} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_CLASSIFICATION}[] = $v;
            }
        }
        if (null !== ($v = $this->getContributorship())) {
            $out->{self::FIELD_CONTRIBUTORSHIP} = $v;
        }
        if ([] !== ($vs = $this->getNote())) {
            $out->{self::FIELD_NOTE} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_NOTE}[] = $v;
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