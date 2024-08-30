<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: August 30th, 2024 22:23+0000
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
 *   Copyright (c) 2011-2013, HL7, Inc.
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
 *   Generated on Tue, Sep 30, 2014 18:08+1000 for FHIR v0.0.82
 */

use DCarbone\PHPFHIRGenerated\DSTU1\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProcedure\FHIRProcedurePerformer;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProcedure\FHIRProcedureRelatedItem;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConfig;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConfigKeyEnum;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRTypeInterface;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRTypeMap;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlLocationEnum;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlWriter;

/**
 * An action that is performed on a patient. This can be a physical 'thing' like an
 * operation, or less invasive like counseling or hypnotherapy.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRProcedure
 * @package \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource
 */
class FHIRProcedure extends FHIRResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_PROCEDURE;

    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_SUBJECT = 'subject';
    const FIELD_TYPE = 'type';
    const FIELD_BODY_SITE = 'bodySite';
    const FIELD_INDICATION = 'indication';
    const FIELD_PERFORMER = 'performer';
    const FIELD_DATE = 'date';
    const FIELD_ENCOUNTER = 'encounter';
    const FIELD_OUTCOME = 'outcome';
    const FIELD_OUTCOME_EXT = '_outcome';
    const FIELD_REPORT = 'report';
    const FIELD_COMPLICATION = 'complication';
    const FIELD_FOLLOW_UP = 'followUp';
    const FIELD_FOLLOW_UP_EXT = '_followUp';
    const FIELD_RELATED_ITEM = 'relatedItem';
    const FIELD_NOTES = 'notes';
    const FIELD_NOTES_EXT = '_notes';

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This records identifiers associated with this procedure that are defined by
     * business processed and/ or used to refer to it when a direct URL reference to
     * the resource itself is not appropriate (e.g. in CDA documents, or in written /
     * printed documentation).
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier[]
     */
    protected null|array $identifier = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The person on whom the procedure was performed.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    protected null|FHIRResourceReference $subject = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The specific procedure that is performed. Use text if the exact nature of the
     * procedure can't be coded.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $type = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Detailed and structured anatomical location information. Multiple locations are
     * allowed - e.g. multiple punch biopsies of a lesion.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept[]
     */
    protected null|array $bodySite = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The reason why the procedure was performed. This may be due to a Condition, may
     * be coded entity of some type, or may simply be present as text.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept[]
     */
    protected null|array $indication = [];
    /**
     * An action that is performed on a patient. This can be a physical 'thing' like an
     * operation, or less invasive like counseling or hypnotherapy.
     *
     * Limited to 'real' people rather than equipment.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProcedure\FHIRProcedurePerformer[]
     */
    protected null|array $performer = [];
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The dates over which the procedure was performed. Allows a period to support
     * complex procedures that span more that one date, and also allows for the length
     * of the procedure to be captured.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRPeriod
     */
    protected null|FHIRPeriod $date = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The encounter during which the procedure was performed.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    protected null|FHIRResourceReference $encounter = null;
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * What was the outcome of the procedure - did it resolve reasons why the procedure
     * was performed?.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    protected null|FHIRString $outcome = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This could be a histology result. There could potentially be multiple reports -
     * e.g. if this was a procedure that made multiple biopsies.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference[]
     */
    protected null|array $report = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Any complications that occurred during the procedure, or in the immediate
     * post-operative period. These are generally tracked separately from the notes,
     * which typically will describe the procedure itself rather than any 'post
     * procedure' issues.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept[]
     */
    protected null|array $complication = [];
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If the procedure required specific follow up - e.g. removal of sutures. The
     * followup may be represented as a simple note, or potentially could be more
     * complex in which case the CarePlan resource can be used.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    protected null|FHIRString $followUp = null;
    /**
     * An action that is performed on a patient. This can be a physical 'thing' like an
     * operation, or less invasive like counseling or hypnotherapy.
     *
     * Procedures may be related to other items such as procedures or medications. For
     * example treating wound dehiscence following a previous procedure.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProcedure\FHIRProcedureRelatedItem[]
     */
    protected null|array $relatedItem = [];
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Any other notes about the procedure - e.g. the operative notes.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    protected null|FHIRString $notes = null;

    /**
     * Validation map for fields in type Procedure
     * @var array
     */
    private const _VALIDATION_RULES = [
        self::FIELD_SUBJECT => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_TYPE => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /** @var array */
    private array $_xmlLocations = [];

    /**
     * FHIRProcedure Constructor
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
        if (array_key_exists(self::FIELD_SUBJECT, $data)) {
            if ($data[self::FIELD_SUBJECT] instanceof FHIRResourceReference) {
                $this->setSubject($data[self::FIELD_SUBJECT]);
            } else {
                $this->setSubject(new FHIRResourceReference($data[self::FIELD_SUBJECT]));
            }
        }
        if (array_key_exists(self::FIELD_TYPE, $data)) {
            if ($data[self::FIELD_TYPE] instanceof FHIRCodeableConcept) {
                $this->setType($data[self::FIELD_TYPE]);
            } else {
                $this->setType(new FHIRCodeableConcept($data[self::FIELD_TYPE]));
            }
        }
        if (array_key_exists(self::FIELD_BODY_SITE, $data)) {
            if (is_array($data[self::FIELD_BODY_SITE])) {
                foreach($data[self::FIELD_BODY_SITE] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addBodySite($v);
                    } else {
                        $this->addBodySite(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_BODY_SITE] instanceof FHIRCodeableConcept) {
                $this->addBodySite($data[self::FIELD_BODY_SITE]);
            } else {
                $this->addBodySite(new FHIRCodeableConcept($data[self::FIELD_BODY_SITE]));
            }
        }
        if (array_key_exists(self::FIELD_INDICATION, $data)) {
            if (is_array($data[self::FIELD_INDICATION])) {
                foreach($data[self::FIELD_INDICATION] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addIndication($v);
                    } else {
                        $this->addIndication(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_INDICATION] instanceof FHIRCodeableConcept) {
                $this->addIndication($data[self::FIELD_INDICATION]);
            } else {
                $this->addIndication(new FHIRCodeableConcept($data[self::FIELD_INDICATION]));
            }
        }
        if (array_key_exists(self::FIELD_PERFORMER, $data)) {
            if (is_array($data[self::FIELD_PERFORMER])) {
                foreach($data[self::FIELD_PERFORMER] as $v) {
                    if ($v instanceof FHIRProcedurePerformer) {
                        $this->addPerformer($v);
                    } else {
                        $this->addPerformer(new FHIRProcedurePerformer($v));
                    }
                }
            } elseif ($data[self::FIELD_PERFORMER] instanceof FHIRProcedurePerformer) {
                $this->addPerformer($data[self::FIELD_PERFORMER]);
            } else {
                $this->addPerformer(new FHIRProcedurePerformer($data[self::FIELD_PERFORMER]));
            }
        }
        if (array_key_exists(self::FIELD_DATE, $data)) {
            if ($data[self::FIELD_DATE] instanceof FHIRPeriod) {
                $this->setDate($data[self::FIELD_DATE]);
            } else {
                $this->setDate(new FHIRPeriod($data[self::FIELD_DATE]));
            }
        }
        if (array_key_exists(self::FIELD_ENCOUNTER, $data)) {
            if ($data[self::FIELD_ENCOUNTER] instanceof FHIRResourceReference) {
                $this->setEncounter($data[self::FIELD_ENCOUNTER]);
            } else {
                $this->setEncounter(new FHIRResourceReference($data[self::FIELD_ENCOUNTER]));
            }
        }
        if (array_key_exists(self::FIELD_OUTCOME, $data) || array_key_exists(self::FIELD_OUTCOME_EXT, $data)) {
            $value = $data[self::FIELD_OUTCOME] ?? null;
            $ext = (isset($data[self::FIELD_OUTCOME_EXT]) && is_array($data[self::FIELD_OUTCOME_EXT])) ? $data[self::FIELD_OUTCOME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setOutcome($value);
                } else if (is_array($value)) {
                    $this->setOutcome(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setOutcome(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setOutcome(new FHIRString($ext));
            } else {
                $this->setOutcome(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_REPORT, $data)) {
            if (is_array($data[self::FIELD_REPORT])) {
                foreach($data[self::FIELD_REPORT] as $v) {
                    if ($v instanceof FHIRResourceReference) {
                        $this->addReport($v);
                    } else {
                        $this->addReport(new FHIRResourceReference($v));
                    }
                }
            } elseif ($data[self::FIELD_REPORT] instanceof FHIRResourceReference) {
                $this->addReport($data[self::FIELD_REPORT]);
            } else {
                $this->addReport(new FHIRResourceReference($data[self::FIELD_REPORT]));
            }
        }
        if (array_key_exists(self::FIELD_COMPLICATION, $data)) {
            if (is_array($data[self::FIELD_COMPLICATION])) {
                foreach($data[self::FIELD_COMPLICATION] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addComplication($v);
                    } else {
                        $this->addComplication(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_COMPLICATION] instanceof FHIRCodeableConcept) {
                $this->addComplication($data[self::FIELD_COMPLICATION]);
            } else {
                $this->addComplication(new FHIRCodeableConcept($data[self::FIELD_COMPLICATION]));
            }
        }
        if (array_key_exists(self::FIELD_FOLLOW_UP, $data) || array_key_exists(self::FIELD_FOLLOW_UP_EXT, $data)) {
            $value = $data[self::FIELD_FOLLOW_UP] ?? null;
            $ext = (isset($data[self::FIELD_FOLLOW_UP_EXT]) && is_array($data[self::FIELD_FOLLOW_UP_EXT])) ? $data[self::FIELD_FOLLOW_UP_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setFollowUp($value);
                } else if (is_array($value)) {
                    $this->setFollowUp(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setFollowUp(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setFollowUp(new FHIRString($ext));
            } else {
                $this->setFollowUp(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_RELATED_ITEM, $data)) {
            if (is_array($data[self::FIELD_RELATED_ITEM])) {
                foreach($data[self::FIELD_RELATED_ITEM] as $v) {
                    if ($v instanceof FHIRProcedureRelatedItem) {
                        $this->addRelatedItem($v);
                    } else {
                        $this->addRelatedItem(new FHIRProcedureRelatedItem($v));
                    }
                }
            } elseif ($data[self::FIELD_RELATED_ITEM] instanceof FHIRProcedureRelatedItem) {
                $this->addRelatedItem($data[self::FIELD_RELATED_ITEM]);
            } else {
                $this->addRelatedItem(new FHIRProcedureRelatedItem($data[self::FIELD_RELATED_ITEM]));
            }
        }
        if (array_key_exists(self::FIELD_NOTES, $data) || array_key_exists(self::FIELD_NOTES_EXT, $data)) {
            $value = $data[self::FIELD_NOTES] ?? null;
            $ext = (isset($data[self::FIELD_NOTES_EXT]) && is_array($data[self::FIELD_NOTES_EXT])) ? $data[self::FIELD_NOTES_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setNotes($value);
                } else if (is_array($value)) {
                    $this->setNotes(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setNotes(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setNotes(new FHIRString($ext));
            } else {
                $this->setNotes(new FHIRString(null));
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
     * @return string
     */
    public function _getResourceType(): string
    {
        return static::FHIR_TYPE_NAME;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This records identifiers associated with this procedure that are defined by
     * business processed and/ or used to refer to it when a direct URL reference to
     * the resource itself is not appropriate (e.g. in CDA documents, or in written /
     * printed documentation).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier(): null|array
    {
        return $this->identifier;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This records identifiers associated with this procedure that are defined by
     * business processed and/ or used to refer to it when a direct URL reference to
     * the resource itself is not appropriate (e.g. in CDA documents, or in written /
     * printed documentation).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier $identifier
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
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This records identifiers associated with this procedure that are defined by
     * business processed and/ or used to refer to it when a direct URL reference to
     * the resource itself is not appropriate (e.g. in CDA documents, or in written /
     * printed documentation).
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier ...$identifier
     * @return static
     */
    public function setIdentifier(FHIRIdentifier ...$identifier): self
    {
        if ([] !== $this->identifier) {
            $this->_trackValuesRemoved(count($this->identifier));
            $this->identifier = [];
        }
        if ([] === $identifier) {
            return $this;
        }
        foreach($identifier as $v) {
            $this->addIdentifier($v);
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The person on whom the procedure was performed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    public function getSubject(): null|FHIRResourceReference
    {
        return $this->subject;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The person on whom the procedure was performed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference $subject
     * @return static
     */
    public function setSubject(null|FHIRResourceReference $subject = null): self
    {
        if (null === $subject) {
            $subject = new FHIRResourceReference();
        }
        $this->_trackValueSet($this->subject, $subject);
        $this->subject = $subject;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The specific procedure that is performed. Use text if the exact nature of the
     * procedure can't be coded.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept
     */
    public function getType(): null|FHIRCodeableConcept
    {
        return $this->type;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The specific procedure that is performed. Use text if the exact nature of the
     * procedure can't be coded.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept $type
     * @return static
     */
    public function setType(null|FHIRCodeableConcept $type = null): self
    {
        if (null === $type) {
            $type = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->type, $type);
        $this->type = $type;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Detailed and structured anatomical location information. Multiple locations are
     * allowed - e.g. multiple punch biopsies of a lesion.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept[]
     */
    public function getBodySite(): null|array
    {
        return $this->bodySite;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Detailed and structured anatomical location information. Multiple locations are
     * allowed - e.g. multiple punch biopsies of a lesion.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept $bodySite
     * @return static
     */
    public function addBodySite(null|FHIRCodeableConcept $bodySite = null): self
    {
        if (null === $bodySite) {
            $bodySite = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->bodySite[] = $bodySite;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Detailed and structured anatomical location information. Multiple locations are
     * allowed - e.g. multiple punch biopsies of a lesion.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept ...$bodySite
     * @return static
     */
    public function setBodySite(FHIRCodeableConcept ...$bodySite): self
    {
        if ([] !== $this->bodySite) {
            $this->_trackValuesRemoved(count($this->bodySite));
            $this->bodySite = [];
        }
        if ([] === $bodySite) {
            return $this;
        }
        foreach($bodySite as $v) {
            $this->addBodySite($v);
        }
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The reason why the procedure was performed. This may be due to a Condition, may
     * be coded entity of some type, or may simply be present as text.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept[]
     */
    public function getIndication(): null|array
    {
        return $this->indication;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The reason why the procedure was performed. This may be due to a Condition, may
     * be coded entity of some type, or may simply be present as text.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept $indication
     * @return static
     */
    public function addIndication(null|FHIRCodeableConcept $indication = null): self
    {
        if (null === $indication) {
            $indication = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->indication[] = $indication;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The reason why the procedure was performed. This may be due to a Condition, may
     * be coded entity of some type, or may simply be present as text.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept ...$indication
     * @return static
     */
    public function setIndication(FHIRCodeableConcept ...$indication): self
    {
        if ([] !== $this->indication) {
            $this->_trackValuesRemoved(count($this->indication));
            $this->indication = [];
        }
        if ([] === $indication) {
            return $this;
        }
        foreach($indication as $v) {
            $this->addIndication($v);
        }
        return $this;
    }

    /**
     * An action that is performed on a patient. This can be a physical 'thing' like an
     * operation, or less invasive like counseling or hypnotherapy.
     *
     * Limited to 'real' people rather than equipment.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProcedure\FHIRProcedurePerformer[]
     */
    public function getPerformer(): null|array
    {
        return $this->performer;
    }

    /**
     * An action that is performed on a patient. This can be a physical 'thing' like an
     * operation, or less invasive like counseling or hypnotherapy.
     *
     * Limited to 'real' people rather than equipment.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProcedure\FHIRProcedurePerformer $performer
     * @return static
     */
    public function addPerformer(null|FHIRProcedurePerformer $performer = null): self
    {
        if (null === $performer) {
            $performer = new FHIRProcedurePerformer();
        }
        $this->_trackValueAdded();
        $this->performer[] = $performer;
        return $this;
    }

    /**
     * An action that is performed on a patient. This can be a physical 'thing' like an
     * operation, or less invasive like counseling or hypnotherapy.
     *
     * Limited to 'real' people rather than equipment.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProcedure\FHIRProcedurePerformer ...$performer
     * @return static
     */
    public function setPerformer(FHIRProcedurePerformer ...$performer): self
    {
        if ([] !== $this->performer) {
            $this->_trackValuesRemoved(count($this->performer));
            $this->performer = [];
        }
        if ([] === $performer) {
            return $this;
        }
        foreach($performer as $v) {
            $this->addPerformer($v);
        }
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The dates over which the procedure was performed. Allows a period to support
     * complex procedures that span more that one date, and also allows for the length
     * of the procedure to be captured.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRPeriod
     */
    public function getDate(): null|FHIRPeriod
    {
        return $this->date;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The dates over which the procedure was performed. Allows a period to support
     * complex procedures that span more that one date, and also allows for the length
     * of the procedure to be captured.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRPeriod $date
     * @return static
     */
    public function setDate(null|FHIRPeriod $date = null): self
    {
        if (null === $date) {
            $date = new FHIRPeriod();
        }
        $this->_trackValueSet($this->date, $date);
        $this->date = $date;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The encounter during which the procedure was performed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    public function getEncounter(): null|FHIRResourceReference
    {
        return $this->encounter;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The encounter during which the procedure was performed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference $encounter
     * @return static
     */
    public function setEncounter(null|FHIRResourceReference $encounter = null): self
    {
        if (null === $encounter) {
            $encounter = new FHIRResourceReference();
        }
        $this->_trackValueSet($this->encounter, $encounter);
        $this->encounter = $encounter;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * What was the outcome of the procedure - did it resolve reasons why the procedure
     * was performed?.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    public function getOutcome(): null|FHIRString
    {
        return $this->outcome;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * What was the outcome of the procedure - did it resolve reasons why the procedure
     * was performed?.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString $outcome
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setOutcome(null|string|FHIRStringPrimitive|FHIRString $outcome = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $outcome && !($outcome instanceof FHIRString)) {
            $outcome = new FHIRString($outcome);
        }
        $this->_trackValueSet($this->outcome, $outcome);
        if (!isset($this->_xmlLocations[self::FIELD_OUTCOME])) {
            $this->_xmlLocations[self::FIELD_OUTCOME] = [];
        }
        $this->_xmlLocations[self::FIELD_OUTCOME][0] = $xmlLocation;
        $this->outcome = $outcome;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This could be a histology result. There could potentially be multiple reports -
     * e.g. if this was a procedure that made multiple biopsies.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference[]
     */
    public function getReport(): null|array
    {
        return $this->report;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This could be a histology result. There could potentially be multiple reports -
     * e.g. if this was a procedure that made multiple biopsies.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference $report
     * @return static
     */
    public function addReport(null|FHIRResourceReference $report = null): self
    {
        if (null === $report) {
            $report = new FHIRResourceReference();
        }
        $this->_trackValueAdded();
        $this->report[] = $report;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This could be a histology result. There could potentially be multiple reports -
     * e.g. if this was a procedure that made multiple biopsies.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference ...$report
     * @return static
     */
    public function setReport(FHIRResourceReference ...$report): self
    {
        if ([] !== $this->report) {
            $this->_trackValuesRemoved(count($this->report));
            $this->report = [];
        }
        if ([] === $report) {
            return $this;
        }
        foreach($report as $v) {
            $this->addReport($v);
        }
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Any complications that occurred during the procedure, or in the immediate
     * post-operative period. These are generally tracked separately from the notes,
     * which typically will describe the procedure itself rather than any 'post
     * procedure' issues.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept[]
     */
    public function getComplication(): null|array
    {
        return $this->complication;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Any complications that occurred during the procedure, or in the immediate
     * post-operative period. These are generally tracked separately from the notes,
     * which typically will describe the procedure itself rather than any 'post
     * procedure' issues.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept $complication
     * @return static
     */
    public function addComplication(null|FHIRCodeableConcept $complication = null): self
    {
        if (null === $complication) {
            $complication = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->complication[] = $complication;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Any complications that occurred during the procedure, or in the immediate
     * post-operative period. These are generally tracked separately from the notes,
     * which typically will describe the procedure itself rather than any 'post
     * procedure' issues.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept ...$complication
     * @return static
     */
    public function setComplication(FHIRCodeableConcept ...$complication): self
    {
        if ([] !== $this->complication) {
            $this->_trackValuesRemoved(count($this->complication));
            $this->complication = [];
        }
        if ([] === $complication) {
            return $this;
        }
        foreach($complication as $v) {
            $this->addComplication($v);
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If the procedure required specific follow up - e.g. removal of sutures. The
     * followup may be represented as a simple note, or potentially could be more
     * complex in which case the CarePlan resource can be used.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    public function getFollowUp(): null|FHIRString
    {
        return $this->followUp;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If the procedure required specific follow up - e.g. removal of sutures. The
     * followup may be represented as a simple note, or potentially could be more
     * complex in which case the CarePlan resource can be used.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString $followUp
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setFollowUp(null|string|FHIRStringPrimitive|FHIRString $followUp = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $followUp && !($followUp instanceof FHIRString)) {
            $followUp = new FHIRString($followUp);
        }
        $this->_trackValueSet($this->followUp, $followUp);
        if (!isset($this->_xmlLocations[self::FIELD_FOLLOW_UP])) {
            $this->_xmlLocations[self::FIELD_FOLLOW_UP] = [];
        }
        $this->_xmlLocations[self::FIELD_FOLLOW_UP][0] = $xmlLocation;
        $this->followUp = $followUp;
        return $this;
    }

    /**
     * An action that is performed on a patient. This can be a physical 'thing' like an
     * operation, or less invasive like counseling or hypnotherapy.
     *
     * Procedures may be related to other items such as procedures or medications. For
     * example treating wound dehiscence following a previous procedure.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProcedure\FHIRProcedureRelatedItem[]
     */
    public function getRelatedItem(): null|array
    {
        return $this->relatedItem;
    }

    /**
     * An action that is performed on a patient. This can be a physical 'thing' like an
     * operation, or less invasive like counseling or hypnotherapy.
     *
     * Procedures may be related to other items such as procedures or medications. For
     * example treating wound dehiscence following a previous procedure.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProcedure\FHIRProcedureRelatedItem $relatedItem
     * @return static
     */
    public function addRelatedItem(null|FHIRProcedureRelatedItem $relatedItem = null): self
    {
        if (null === $relatedItem) {
            $relatedItem = new FHIRProcedureRelatedItem();
        }
        $this->_trackValueAdded();
        $this->relatedItem[] = $relatedItem;
        return $this;
    }

    /**
     * An action that is performed on a patient. This can be a physical 'thing' like an
     * operation, or less invasive like counseling or hypnotherapy.
     *
     * Procedures may be related to other items such as procedures or medications. For
     * example treating wound dehiscence following a previous procedure.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProcedure\FHIRProcedureRelatedItem ...$relatedItem
     * @return static
     */
    public function setRelatedItem(FHIRProcedureRelatedItem ...$relatedItem): self
    {
        if ([] !== $this->relatedItem) {
            $this->_trackValuesRemoved(count($this->relatedItem));
            $this->relatedItem = [];
        }
        if ([] === $relatedItem) {
            return $this;
        }
        foreach($relatedItem as $v) {
            $this->addRelatedItem($v);
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Any other notes about the procedure - e.g. the operative notes.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    public function getNotes(): null|FHIRString
    {
        return $this->notes;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Any other notes about the procedure - e.g. the operative notes.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString $notes
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setNotes(null|string|FHIRStringPrimitive|FHIRString $notes = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $notes && !($notes instanceof FHIRString)) {
            $notes = new FHIRString($notes);
        }
        $this->_trackValueSet($this->notes, $notes);
        if (!isset($this->_xmlLocations[self::FIELD_NOTES])) {
            $this->_xmlLocations[self::FIELD_NOTES] = [];
        }
        $this->_xmlLocations[self::FIELD_NOTES][0] = $xmlLocation;
        $this->notes = $notes;
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
        if (null !== ($v = $this->getSubject())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SUBJECT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TYPE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getBodySite())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_BODY_SITE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getIndication())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_INDICATION, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getPerformer())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PERFORMER, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getDate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DATE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getEncounter())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ENCOUNTER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOutcome())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_OUTCOME] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getReport())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_REPORT, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getComplication())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_COMPLICATION, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getFollowUp())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FOLLOW_UP] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getRelatedItem())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_RELATED_ITEM, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getNotes())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_NOTES] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROCEDURE, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IDENTIFIER])) {
                        $errs[self::FIELD_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUBJECT])) {
            $v = $this->getSubject();
            foreach($validationRules[self::FIELD_SUBJECT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROCEDURE, self::FIELD_SUBJECT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUBJECT])) {
                        $errs[self::FIELD_SUBJECT] = [];
                    }
                    $errs[self::FIELD_SUBJECT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TYPE])) {
            $v = $this->getType();
            foreach($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROCEDURE, self::FIELD_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE])) {
                        $errs[self::FIELD_TYPE] = [];
                    }
                    $errs[self::FIELD_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_BODY_SITE])) {
            $v = $this->getBodySite();
            foreach($validationRules[self::FIELD_BODY_SITE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROCEDURE, self::FIELD_BODY_SITE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_BODY_SITE])) {
                        $errs[self::FIELD_BODY_SITE] = [];
                    }
                    $errs[self::FIELD_BODY_SITE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INDICATION])) {
            $v = $this->getIndication();
            foreach($validationRules[self::FIELD_INDICATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROCEDURE, self::FIELD_INDICATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INDICATION])) {
                        $errs[self::FIELD_INDICATION] = [];
                    }
                    $errs[self::FIELD_INDICATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PERFORMER])) {
            $v = $this->getPerformer();
            foreach($validationRules[self::FIELD_PERFORMER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROCEDURE, self::FIELD_PERFORMER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PERFORMER])) {
                        $errs[self::FIELD_PERFORMER] = [];
                    }
                    $errs[self::FIELD_PERFORMER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DATE])) {
            $v = $this->getDate();
            foreach($validationRules[self::FIELD_DATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROCEDURE, self::FIELD_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DATE])) {
                        $errs[self::FIELD_DATE] = [];
                    }
                    $errs[self::FIELD_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ENCOUNTER])) {
            $v = $this->getEncounter();
            foreach($validationRules[self::FIELD_ENCOUNTER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROCEDURE, self::FIELD_ENCOUNTER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ENCOUNTER])) {
                        $errs[self::FIELD_ENCOUNTER] = [];
                    }
                    $errs[self::FIELD_ENCOUNTER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OUTCOME])) {
            $v = $this->getOutcome();
            foreach($validationRules[self::FIELD_OUTCOME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROCEDURE, self::FIELD_OUTCOME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OUTCOME])) {
                        $errs[self::FIELD_OUTCOME] = [];
                    }
                    $errs[self::FIELD_OUTCOME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REPORT])) {
            $v = $this->getReport();
            foreach($validationRules[self::FIELD_REPORT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROCEDURE, self::FIELD_REPORT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REPORT])) {
                        $errs[self::FIELD_REPORT] = [];
                    }
                    $errs[self::FIELD_REPORT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COMPLICATION])) {
            $v = $this->getComplication();
            foreach($validationRules[self::FIELD_COMPLICATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROCEDURE, self::FIELD_COMPLICATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COMPLICATION])) {
                        $errs[self::FIELD_COMPLICATION] = [];
                    }
                    $errs[self::FIELD_COMPLICATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FOLLOW_UP])) {
            $v = $this->getFollowUp();
            foreach($validationRules[self::FIELD_FOLLOW_UP] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROCEDURE, self::FIELD_FOLLOW_UP, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FOLLOW_UP])) {
                        $errs[self::FIELD_FOLLOW_UP] = [];
                    }
                    $errs[self::FIELD_FOLLOW_UP][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RELATED_ITEM])) {
            $v = $this->getRelatedItem();
            foreach($validationRules[self::FIELD_RELATED_ITEM] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROCEDURE, self::FIELD_RELATED_ITEM, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RELATED_ITEM])) {
                        $errs[self::FIELD_RELATED_ITEM] = [];
                    }
                    $errs[self::FIELD_RELATED_ITEM][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NOTES])) {
            $v = $this->getNotes();
            foreach($validationRules[self::FIELD_NOTES] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROCEDURE, self::FIELD_NOTES, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NOTES])) {
                        $errs[self::FIELD_NOTES] = [];
                    }
                    $errs[self::FIELD_NOTES][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_TEXT])) {
            $v = $this->getText();
            foreach($validationRules[self::FIELD_TEXT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_TEXT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TEXT])) {
                        $errs[self::FIELD_TEXT] = [];
                    }
                    $errs[self::FIELD_TEXT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTAINED])) {
            $v = $this->getContained();
            foreach($validationRules[self::FIELD_CONTAINED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_CONTAINED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTAINED])) {
                        $errs[self::FIELD_CONTAINED] = [];
                    }
                    $errs[self::FIELD_CONTAINED][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRProcedure $type
     * @param null|int|\DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRProcedure
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
        } else if (!($type instanceof FHIRProcedure)) {
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
            } elseif (self::FIELD_SUBJECT === $childName) {
                $type->setSubject(FHIRResourceReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_TYPE === $childName) {
                $type->setType(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_BODY_SITE === $childName) {
                $type->addBodySite(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_INDICATION === $childName) {
                $type->addIndication(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PERFORMER === $childName) {
                $type->addPerformer(FHIRProcedurePerformer::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DATE === $childName) {
                $type->setDate(FHIRPeriod::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ENCOUNTER === $childName) {
                $type->setEncounter(FHIRResourceReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_OUTCOME === $childName) {
                $type->setOutcome(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_REPORT === $childName) {
                $type->addReport(FHIRResourceReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_COMPLICATION === $childName) {
                $type->addComplication(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_FOLLOW_UP === $childName) {
                $type->setFollowUp(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_RELATED_ITEM === $childName) {
                $type->addRelatedItem(FHIRProcedureRelatedItem::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_NOTES === $childName) {
                $type->setNotes(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_LANGUAGE === $childName) {
                $type->setLanguage(FHIRCode::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_TEXT === $childName) {
                $type->setText(FHIRNarrative::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CONTAINED === $childName) {
                foreach ($n->children() as $nn) {
                    $type->addContained(PHPFHIRTypeMap::getContainedTypeFromXML($nn, $config));
                }
            } elseif (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRIdPrimitive::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_OUTCOME])) {
            $pt = $type->getOutcome();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_OUTCOME], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setOutcome((string)$attributes[self::FIELD_OUTCOME], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_FOLLOW_UP])) {
            $pt = $type->getFollowUp();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_FOLLOW_UP], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setFollowUp((string)$attributes[self::FIELD_FOLLOW_UP], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_NOTES])) {
            $pt = $type->getNotes();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_NOTES], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setNotes((string)$attributes[self::FIELD_NOTES], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_LANGUAGE])) {
            $pt = $type->getLanguage();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_LANGUAGE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setLanguage((string)$attributes[self::FIELD_LANGUAGE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlWriter $xw
     * @param null|int|\DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlWriter
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
            $xw->openRootNode($config, 'Procedure', $this->_getSourceXmlns());
        }
        $locs = $this->_xmlLocations[self::FIELD_OUTCOME] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getOutcome())) {
            $xw->writeAttribute(self::FIELD_OUTCOME, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_FOLLOW_UP] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getFollowUp())) {
            $xw->writeAttribute(self::FIELD_FOLLOW_UP, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_NOTES] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getNotes())) {
            $xw->writeAttribute(self::FIELD_NOTES, $v->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        foreach ($this->getIdentifier() as $v) {
            $xw->startElement(self::FIELD_IDENTIFIER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getSubject())) {
            $xw->startElement(self::FIELD_SUBJECT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getType())) {
            $xw->startElement(self::FIELD_TYPE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getBodySite() as $v) {
            $xw->startElement(self::FIELD_BODY_SITE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getIndication() as $v) {
            $xw->startElement(self::FIELD_INDICATION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getPerformer() as $v) {
            $xw->startElement(self::FIELD_PERFORMER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getDate())) {
            $xw->startElement(self::FIELD_DATE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getEncounter())) {
            $xw->startElement(self::FIELD_ENCOUNTER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_OUTCOME] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getOutcome())) {
            $xw->startElement(self::FIELD_OUTCOME);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getReport() as $v) {
            $xw->startElement(self::FIELD_REPORT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getComplication() as $v) {
            $xw->startElement(self::FIELD_COMPLICATION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_FOLLOW_UP] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getFollowUp())) {
            $xw->startElement(self::FIELD_FOLLOW_UP);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getRelatedItem() as $v) {
            $xw->startElement(self::FIELD_RELATED_ITEM);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_NOTES] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getNotes())) {
            $xw->startElement(self::FIELD_NOTES);
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
        if (null !== ($v = $this->getSubject())) {
            $out->{self::FIELD_SUBJECT} = $v;
        }
        if (null !== ($v = $this->getType())) {
            $out->{self::FIELD_TYPE} = $v;
        }
        if ([] !== ($vs = $this->getBodySite())) {
            $out->{self::FIELD_BODY_SITE} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_BODY_SITE}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getIndication())) {
            $out->{self::FIELD_INDICATION} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_INDICATION}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getPerformer())) {
            $out->{self::FIELD_PERFORMER} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_PERFORMER}[] = $v;
            }
        }
        if (null !== ($v = $this->getDate())) {
            $out->{self::FIELD_DATE} = $v;
        }
        if (null !== ($v = $this->getEncounter())) {
            $out->{self::FIELD_ENCOUNTER} = $v;
        }
        if (null !== ($v = $this->getOutcome())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_OUTCOME} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_OUTCOME_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getReport())) {
            $out->{self::FIELD_REPORT} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_REPORT}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getComplication())) {
            $out->{self::FIELD_COMPLICATION} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_COMPLICATION}[] = $v;
            }
        }
        if (null !== ($v = $this->getFollowUp())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_FOLLOW_UP} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_FOLLOW_UP_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getRelatedItem())) {
            $out->{self::FIELD_RELATED_ITEM} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_RELATED_ITEM}[] = $v;
            }
        }
        if (null !== ($v = $this->getNotes())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_NOTES} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_NOTES_EXT} = $ext;
            }
        }

        $out->{PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE} = $this->_getResourceType();

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