<?php

namespace DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 5th, 2019 19:59+0000
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

use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProcedure\FHIRProcedurePerformer;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProcedure\FHIRProcedureRelatedItem;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRTypeInterface;

/**
 * An action that is performed on a patient. This can be a physical 'thing' like an
 * operation, or less invasive like counseling or hypnotherapy.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRProcedure
 * @package \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource
 */
class FHIRProcedure extends FHIRResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_PROCEDURE;

    const FIELD_BODY_SITE = 'bodySite';
    const FIELD_COMPLICATION = 'complication';
    const FIELD_DATE = 'date';
    const FIELD_ENCOUNTER = 'encounter';
    const FIELD_FOLLOW_UP = 'followUp';
    const FIELD_FOLLOW_UP_EXT = '_followUp';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_INDICATION = 'indication';
    const FIELD_NOTES = 'notes';
    const FIELD_NOTES_EXT = '_notes';
    const FIELD_OUTCOME = 'outcome';
    const FIELD_OUTCOME_EXT = '_outcome';
    const FIELD_PERFORMER = 'performer';
    const FIELD_RELATED_ITEM = 'relatedItem';
    const FIELD_REPORT = 'report';
    const FIELD_SUBJECT = 'subject';
    const FIELD_TYPE = 'type';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Detailed and structured anatomical location information. Multiple locations are
     * allowed - e.g. multiple punch biopsies of a lesion.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept[]
     */
    private $bodySite = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Any complications that occurred during the procedure, or in the immediate
     * post-operative period. These are generally tracked separately from the notes,
     * which typically will describe the procedure itself rather than any 'post
     * procedure' issues.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept[]
     */
    private $complication = [];
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The dates over which the procedure was performed. Allows a period to support
     * complex procedures that span more that one date, and also allows for the length
     * of the procedure to be captured.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRPeriod
     */
    private $date = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The encounter during which the procedure was performed.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    private $encounter = null;
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * If the procedure required specific follow up - e.g. removal of sutures. The
     * followup may be represented as a simple note, or potentially could be more
     * complex in which case the CarePlan resource can be used.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    private $followUp = null;
    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * This records identifiers associated with this procedure that are defined by
     * business processed and/ or used to refer to it when a direct URL reference to
     * the resource itself is not appropriate (e.g. in CDA documents, or in written /
     * printed documentation).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier[]
     */
    private $identifier = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The reason why the procedure was performed. This may be due to a Condition, may
     * be coded entity of some type, or may simply be present as text.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept[]
     */
    private $indication = [];
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Any other notes about the procedure - e.g. the operative notes.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    private $notes = null;
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * What was the outcome of the procedure - did it resolve reasons why the procedure
     * was performed?.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    private $outcome = null;
    /**
     * An action that is performed on a patient. This can be a physical 'thing' like an
     * operation, or less invasive like counseling or hypnotherapy.
     *
     * Limited to 'real' people rather than equipment.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProcedure\FHIRProcedurePerformer[]
     */
    private $performer = [];
    /**
     * An action that is performed on a patient. This can be a physical 'thing' like an
     * operation, or less invasive like counseling or hypnotherapy.
     *
     * Procedures may be related to other items such as procedures or medications. For
     * example treating wound dehiscence following a previous procedure.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProcedure\FHIRProcedureRelatedItem[]
     */
    private $relatedItem = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * This could be a histology result. There could potentially be multiple reports -
     * e.g. if this was a procedure that made multiple biopsies.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference[]
     */
    private $report = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The person on whom the procedure was performed.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    private $subject = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The specific procedure that is performed. Use text if the exact nature of the
     * procedure can't be coded.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept
     */
    private $type = null;

    /**
     * FHIRProcedure Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRProcedure::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_BODY_SITE])) {
            if (is_array($data[self::FIELD_BODY_SITE])) {
                foreach($data[self::FIELD_BODY_SITE] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addBodySite($v);
                    } else {
                        $this->addBodySite(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_BODY_SITE] instanceof FHIRCodeableConcept) {
                $this->addBodySite($data[self::FIELD_BODY_SITE]);
            } else {
                $this->addBodySite(new FHIRCodeableConcept($data[self::FIELD_BODY_SITE]));
            }
        }
        if (isset($data[self::FIELD_COMPLICATION])) {
            if (is_array($data[self::FIELD_COMPLICATION])) {
                foreach($data[self::FIELD_COMPLICATION] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addComplication($v);
                    } else {
                        $this->addComplication(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_COMPLICATION] instanceof FHIRCodeableConcept) {
                $this->addComplication($data[self::FIELD_COMPLICATION]);
            } else {
                $this->addComplication(new FHIRCodeableConcept($data[self::FIELD_COMPLICATION]));
            }
        }
        if (isset($data[self::FIELD_DATE])) {
            if ($data[self::FIELD_DATE] instanceof FHIRPeriod) {
                $this->setDate($data[self::FIELD_DATE]);
            } else {
                $this->setDate(new FHIRPeriod($data[self::FIELD_DATE]));
            }
        }
        if (isset($data[self::FIELD_ENCOUNTER])) {
            if ($data[self::FIELD_ENCOUNTER] instanceof FHIRResourceReference) {
                $this->setEncounter($data[self::FIELD_ENCOUNTER]);
            } else {
                $this->setEncounter(new FHIRResourceReference($data[self::FIELD_ENCOUNTER]));
            }
        }
        if (isset($data[self::FIELD_FOLLOW_UP])) {
            $ext = (isset($data[self::FIELD_FOLLOW_UP_EXT]) && is_array($data[self::FIELD_FOLLOW_UP_EXT]))
                ? $data[self::FIELD_FOLLOW_UP_EXT]
                : null;
            if ($data[self::FIELD_FOLLOW_UP] instanceof FHIRString) {
                $this->setFollowUp($data[self::FIELD_FOLLOW_UP]);
            } elseif ($ext && is_scalar($data[self::FIELD_FOLLOW_UP])) {
                $this->setFollowUp(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_FOLLOW_UP]] + $ext));
            } else {
                $this->setFollowUp(new FHIRString($data[self::FIELD_FOLLOW_UP]));
            }
        }
        if (isset($data[self::FIELD_IDENTIFIER])) {
            if (is_array($data[self::FIELD_IDENTIFIER])) {
                foreach($data[self::FIELD_IDENTIFIER] as $v) {
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
        if (isset($data[self::FIELD_INDICATION])) {
            if (is_array($data[self::FIELD_INDICATION])) {
                foreach($data[self::FIELD_INDICATION] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addIndication($v);
                    } else {
                        $this->addIndication(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_INDICATION] instanceof FHIRCodeableConcept) {
                $this->addIndication($data[self::FIELD_INDICATION]);
            } else {
                $this->addIndication(new FHIRCodeableConcept($data[self::FIELD_INDICATION]));
            }
        }
        if (isset($data[self::FIELD_NOTES])) {
            $ext = (isset($data[self::FIELD_NOTES_EXT]) && is_array($data[self::FIELD_NOTES_EXT]))
                ? $data[self::FIELD_NOTES_EXT]
                : null;
            if ($data[self::FIELD_NOTES] instanceof FHIRString) {
                $this->setNotes($data[self::FIELD_NOTES]);
            } elseif ($ext && is_scalar($data[self::FIELD_NOTES])) {
                $this->setNotes(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_NOTES]] + $ext));
            } else {
                $this->setNotes(new FHIRString($data[self::FIELD_NOTES]));
            }
        }
        if (isset($data[self::FIELD_OUTCOME])) {
            $ext = (isset($data[self::FIELD_OUTCOME_EXT]) && is_array($data[self::FIELD_OUTCOME_EXT]))
                ? $data[self::FIELD_OUTCOME_EXT]
                : null;
            if ($data[self::FIELD_OUTCOME] instanceof FHIRString) {
                $this->setOutcome($data[self::FIELD_OUTCOME]);
            } elseif ($ext && is_scalar($data[self::FIELD_OUTCOME])) {
                $this->setOutcome(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_OUTCOME]] + $ext));
            } else {
                $this->setOutcome(new FHIRString($data[self::FIELD_OUTCOME]));
            }
        }
        if (isset($data[self::FIELD_PERFORMER])) {
            if (is_array($data[self::FIELD_PERFORMER])) {
                foreach($data[self::FIELD_PERFORMER] as $v) {
                    if ($v instanceof FHIRProcedurePerformer) {
                        $this->addPerformer($v);
                    } else {
                        $this->addPerformer(new FHIRProcedurePerformer($v));
                    }
                }
            } else if ($data[self::FIELD_PERFORMER] instanceof FHIRProcedurePerformer) {
                $this->addPerformer($data[self::FIELD_PERFORMER]);
            } else {
                $this->addPerformer(new FHIRProcedurePerformer($data[self::FIELD_PERFORMER]));
            }
        }
        if (isset($data[self::FIELD_RELATED_ITEM])) {
            if (is_array($data[self::FIELD_RELATED_ITEM])) {
                foreach($data[self::FIELD_RELATED_ITEM] as $v) {
                    if ($v instanceof FHIRProcedureRelatedItem) {
                        $this->addRelatedItem($v);
                    } else {
                        $this->addRelatedItem(new FHIRProcedureRelatedItem($v));
                    }
                }
            } else if ($data[self::FIELD_RELATED_ITEM] instanceof FHIRProcedureRelatedItem) {
                $this->addRelatedItem($data[self::FIELD_RELATED_ITEM]);
            } else {
                $this->addRelatedItem(new FHIRProcedureRelatedItem($data[self::FIELD_RELATED_ITEM]));
            }
        }
        if (isset($data[self::FIELD_REPORT])) {
            if (is_array($data[self::FIELD_REPORT])) {
                foreach($data[self::FIELD_REPORT] as $v) {
                    if ($v instanceof FHIRResourceReference) {
                        $this->addReport($v);
                    } else {
                        $this->addReport(new FHIRResourceReference($v));
                    }
                }
            } else if ($data[self::FIELD_REPORT] instanceof FHIRResourceReference) {
                $this->addReport($data[self::FIELD_REPORT]);
            } else {
                $this->addReport(new FHIRResourceReference($data[self::FIELD_REPORT]));
            }
        }
        if (isset($data[self::FIELD_SUBJECT])) {
            if ($data[self::FIELD_SUBJECT] instanceof FHIRResourceReference) {
                $this->setSubject($data[self::FIELD_SUBJECT]);
            } else {
                $this->setSubject(new FHIRResourceReference($data[self::FIELD_SUBJECT]));
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
    public function getFHIRTypeName()
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Detailed and structured anatomical location information. Multiple locations are
     * allowed - e.g. multiple punch biopsies of a lesion.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept[]
     */
    public function getBodySite()
    {
        return $this->bodySite;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Detailed and structured anatomical location information. Multiple locations are
     * allowed - e.g. multiple punch biopsies of a lesion.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept $bodySite
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRProcedure
     */
    public function addBodySite(FHIRCodeableConcept $bodySite = null)
    {
        $this->bodySite[] = $bodySite;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Detailed and structured anatomical location information. Multiple locations are
     * allowed - e.g. multiple punch biopsies of a lesion.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept[] $bodySite
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRProcedure
     */
    public function setBodySite(array $bodySite = [])
    {
        $this->bodySite = [];
        if ([] === $bodySite) {
            return $this;
        }
        foreach($bodySite as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addBodySite($v);
            } else {
                $this->addBodySite(new FHIRCodeableConcept($v));
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
     * Any complications that occurred during the procedure, or in the immediate
     * post-operative period. These are generally tracked separately from the notes,
     * which typically will describe the procedure itself rather than any 'post
     * procedure' issues.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept[]
     */
    public function getComplication()
    {
        return $this->complication;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Any complications that occurred during the procedure, or in the immediate
     * post-operative period. These are generally tracked separately from the notes,
     * which typically will describe the procedure itself rather than any 'post
     * procedure' issues.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept $complication
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRProcedure
     */
    public function addComplication(FHIRCodeableConcept $complication = null)
    {
        $this->complication[] = $complication;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Any complications that occurred during the procedure, or in the immediate
     * post-operative period. These are generally tracked separately from the notes,
     * which typically will describe the procedure itself rather than any 'post
     * procedure' issues.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept[] $complication
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRProcedure
     */
    public function setComplication(array $complication = [])
    {
        $this->complication = [];
        if ([] === $complication) {
            return $this;
        }
        foreach($complication as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addComplication($v);
            } else {
                $this->addComplication(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The dates over which the procedure was performed. Allows a period to support
     * complex procedures that span more that one date, and also allows for the length
     * of the procedure to be captured.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRPeriod
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The dates over which the procedure was performed. Allows a period to support
     * complex procedures that span more that one date, and also allows for the length
     * of the procedure to be captured.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRPeriod $date
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRProcedure
     */
    public function setDate(FHIRPeriod $date = null)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The encounter during which the procedure was performed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    public function getEncounter()
    {
        return $this->encounter;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The encounter during which the procedure was performed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference $encounter
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRProcedure
     */
    public function setEncounter(FHIRResourceReference $encounter = null)
    {
        $this->encounter = $encounter;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * If the procedure required specific follow up - e.g. removal of sutures. The
     * followup may be represented as a simple note, or potentially could be more
     * complex in which case the CarePlan resource can be used.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    public function getFollowUp()
    {
        return $this->followUp;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * If the procedure required specific follow up - e.g. removal of sutures. The
     * followup may be represented as a simple note, or potentially could be more
     * complex in which case the CarePlan resource can be used.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString $followUp
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRProcedure
     */
    public function setFollowUp($followUp = null)
    {
        if (null === $followUp) {
            $this->followUp = null;
            return $this;
        }
        if ($followUp instanceof FHIRString) {
            $this->followUp = $followUp;
            return $this;
        }
        $this->followUp = new FHIRString($followUp);
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * This records identifiers associated with this procedure that are defined by
     * business processed and/ or used to refer to it when a direct URL reference to
     * the resource itself is not appropriate (e.g. in CDA documents, or in written /
     * printed documentation).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * This records identifiers associated with this procedure that are defined by
     * business processed and/ or used to refer to it when a direct URL reference to
     * the resource itself is not appropriate (e.g. in CDA documents, or in written /
     * printed documentation).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier $identifier
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRProcedure
     */
    public function addIdentifier(FHIRIdentifier $identifier = null)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * This records identifiers associated with this procedure that are defined by
     * business processed and/ or used to refer to it when a direct URL reference to
     * the resource itself is not appropriate (e.g. in CDA documents, or in written /
     * printed documentation).
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier[] $identifier
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRProcedure
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The reason why the procedure was performed. This may be due to a Condition, may
     * be coded entity of some type, or may simply be present as text.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept[]
     */
    public function getIndication()
    {
        return $this->indication;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The reason why the procedure was performed. This may be due to a Condition, may
     * be coded entity of some type, or may simply be present as text.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept $indication
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRProcedure
     */
    public function addIndication(FHIRCodeableConcept $indication = null)
    {
        $this->indication[] = $indication;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The reason why the procedure was performed. This may be due to a Condition, may
     * be coded entity of some type, or may simply be present as text.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept[] $indication
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRProcedure
     */
    public function setIndication(array $indication = [])
    {
        $this->indication = [];
        if ([] === $indication) {
            return $this;
        }
        foreach($indication as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addIndication($v);
            } else {
                $this->addIndication(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Any other notes about the procedure - e.g. the operative notes.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Any other notes about the procedure - e.g. the operative notes.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString $notes
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRProcedure
     */
    public function setNotes($notes = null)
    {
        if (null === $notes) {
            $this->notes = null;
            return $this;
        }
        if ($notes instanceof FHIRString) {
            $this->notes = $notes;
            return $this;
        }
        $this->notes = new FHIRString($notes);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * What was the outcome of the procedure - did it resolve reasons why the procedure
     * was performed?.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    public function getOutcome()
    {
        return $this->outcome;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * What was the outcome of the procedure - did it resolve reasons why the procedure
     * was performed?.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString $outcome
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRProcedure
     */
    public function setOutcome($outcome = null)
    {
        if (null === $outcome) {
            $this->outcome = null;
            return $this;
        }
        if ($outcome instanceof FHIRString) {
            $this->outcome = $outcome;
            return $this;
        }
        $this->outcome = new FHIRString($outcome);
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
    public function getPerformer()
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
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRProcedure
     */
    public function addPerformer(FHIRProcedurePerformer $performer = null)
    {
        $this->performer[] = $performer;
        return $this;
    }

    /**
     * An action that is performed on a patient. This can be a physical 'thing' like an
     * operation, or less invasive like counseling or hypnotherapy.
     *
     * Limited to 'real' people rather than equipment.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProcedure\FHIRProcedurePerformer[] $performer
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRProcedure
     */
    public function setPerformer(array $performer = [])
    {
        $this->performer = [];
        if ([] === $performer) {
            return $this;
        }
        foreach($performer as $v) {
            if ($v instanceof FHIRProcedurePerformer) {
                $this->addPerformer($v);
            } else {
                $this->addPerformer(new FHIRProcedurePerformer($v));
            }
        }
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
    public function getRelatedItem()
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
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRProcedure
     */
    public function addRelatedItem(FHIRProcedureRelatedItem $relatedItem = null)
    {
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
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProcedure\FHIRProcedureRelatedItem[] $relatedItem
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRProcedure
     */
    public function setRelatedItem(array $relatedItem = [])
    {
        $this->relatedItem = [];
        if ([] === $relatedItem) {
            return $this;
        }
        foreach($relatedItem as $v) {
            if ($v instanceof FHIRProcedureRelatedItem) {
                $this->addRelatedItem($v);
            } else {
                $this->addRelatedItem(new FHIRProcedureRelatedItem($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * This could be a histology result. There could potentially be multiple reports -
     * e.g. if this was a procedure that made multiple biopsies.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference[]
     */
    public function getReport()
    {
        return $this->report;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * This could be a histology result. There could potentially be multiple reports -
     * e.g. if this was a procedure that made multiple biopsies.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference $report
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRProcedure
     */
    public function addReport(FHIRResourceReference $report = null)
    {
        $this->report[] = $report;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * This could be a histology result. There could potentially be multiple reports -
     * e.g. if this was a procedure that made multiple biopsies.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference[] $report
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRProcedure
     */
    public function setReport(array $report = [])
    {
        $this->report = [];
        if ([] === $report) {
            return $this;
        }
        foreach($report as $v) {
            if ($v instanceof FHIRResourceReference) {
                $this->addReport($v);
            } else {
                $this->addReport(new FHIRResourceReference($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The person on whom the procedure was performed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The person on whom the procedure was performed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference $subject
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRProcedure
     */
    public function setSubject(FHIRResourceReference $subject = null)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The specific procedure that is performed. Use text if the exact nature of the
     * procedure can't be coded.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept
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
     * The specific procedure that is performed. Use text if the exact nature of the
     * procedure can't be coded.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept $type
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRProcedure
     */
    public function setType(FHIRCodeableConcept $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRProcedure $type
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRProcedure
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
                throw new \DomainException(sprintf('FHIRProcedure::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRProcedure::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRResource::xmlUnserialize($sxe, new FHIRProcedure);
        } elseif (!is_object($type) || !($type instanceof FHIRProcedure)) {
            throw new \RuntimeException(sprintf(
                'FHIRProcedure::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRProcedure or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->bodySite)) {
            foreach($children->bodySite as $child) {
                $type->addBodySite(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->complication)) {
            foreach($children->complication as $child) {
                $type->addComplication(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->date)) {
            $type->setDate(FHIRPeriod::xmlUnserialize($children->date));
        }
        if (isset($children->encounter)) {
            $type->setEncounter(FHIRResourceReference::xmlUnserialize($children->encounter));
        }
        if (isset($attributes->followUp)) {
            $type->setFollowUp((string)$attributes->followUp);
        }
        if (isset($children->followUp)) {
            $type->setFollowUp(FHIRString::xmlUnserialize($children->followUp));
        }
        if (isset($children->identifier)) {
            foreach($children->identifier as $child) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($child));
            }
        }
        if (isset($children->indication)) {
            foreach($children->indication as $child) {
                $type->addIndication(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($attributes->notes)) {
            $type->setNotes((string)$attributes->notes);
        }
        if (isset($children->notes)) {
            $type->setNotes(FHIRString::xmlUnserialize($children->notes));
        }
        if (isset($attributes->outcome)) {
            $type->setOutcome((string)$attributes->outcome);
        }
        if (isset($children->outcome)) {
            $type->setOutcome(FHIRString::xmlUnserialize($children->outcome));
        }
        if (isset($children->performer)) {
            foreach($children->performer as $child) {
                $type->addPerformer(FHIRProcedurePerformer::xmlUnserialize($child));
            }
        }
        if (isset($children->relatedItem)) {
            foreach($children->relatedItem as $child) {
                $type->addRelatedItem(FHIRProcedureRelatedItem::xmlUnserialize($child));
            }
        }
        if (isset($children->report)) {
            foreach($children->report as $child) {
                $type->addReport(FHIRResourceReference::xmlUnserialize($child));
            }
        }
        if (isset($children->subject)) {
            $type->setSubject(FHIRResourceReference::xmlUnserialize($children->subject));
        }
        if (isset($children->type)) {
            $type->setType(FHIRCodeableConcept::xmlUnserialize($children->type));
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
            $sxe = new \SimpleXMLElement('<Procedure xmlns="http://hl7.org/fhir"></Procedure>');
        }
    parent::xmlSerialize($sxe);

        if ([] !== ($vs = $this->getBodySite())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_BODY_SITE));
            }
        }

        if ([] !== ($vs = $this->getComplication())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_COMPLICATION));
            }
        }

        if (null !== ($v = $this->getDate())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DATE));
        }

        if (null !== ($v = $this->getEncounter())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ENCOUNTER));
        }
        if (null !== ($v = $this->getFollowUp())) {
            $sxe->addAttribute(self::FIELD_FOLLOW_UP, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_FOLLOW_UP));
            }
        }

        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER));
            }
        }

        if ([] !== ($vs = $this->getIndication())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_INDICATION));
            }
        }
        if (null !== ($v = $this->getNotes())) {
            $sxe->addAttribute(self::FIELD_NOTES, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_NOTES));
            }
        }
        if (null !== ($v = $this->getOutcome())) {
            $sxe->addAttribute(self::FIELD_OUTCOME, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_OUTCOME));
            }
        }

        if ([] !== ($vs = $this->getPerformer())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PERFORMER));
            }
        }

        if ([] !== ($vs = $this->getRelatedItem())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_RELATED_ITEM));
            }
        }

        if ([] !== ($vs = $this->getReport())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_REPORT));
            }
        }

        if (null !== ($v = $this->getSubject())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SUBJECT));
        }

        if (null !== ($v = $this->getType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TYPE));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if ([] !== ($vs = $this->getBodySite())) {
            $a[self::FIELD_BODY_SITE] = $vs;
        }
        if ([] !== ($vs = $this->getComplication())) {
            $a[self::FIELD_COMPLICATION] = $vs;
        }
        if (null !== ($v = $this->getDate())) {
            $a[self::FIELD_DATE] = $v;
        }
        if (null !== ($v = $this->getEncounter())) {
            $a[self::FIELD_ENCOUNTER] = $v;
        }
        if (null !== ($v = $this->getFollowUp())) {
            $a[self::FIELD_FOLLOW_UP] = (string)$v;
            $a[self::FIELD_FOLLOW_UP_EXT] = $v;
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = $vs;
        }
        if ([] !== ($vs = $this->getIndication())) {
            $a[self::FIELD_INDICATION] = $vs;
        }
        if (null !== ($v = $this->getNotes())) {
            $a[self::FIELD_NOTES] = (string)$v;
            $a[self::FIELD_NOTES_EXT] = $v;
        }
        if (null !== ($v = $this->getOutcome())) {
            $a[self::FIELD_OUTCOME] = (string)$v;
            $a[self::FIELD_OUTCOME_EXT] = $v;
        }
        if ([] !== ($vs = $this->getPerformer())) {
            $a[self::FIELD_PERFORMER] = $vs;
        }
        if ([] !== ($vs = $this->getRelatedItem())) {
            $a[self::FIELD_RELATED_ITEM] = $vs;
        }
        if ([] !== ($vs = $this->getReport())) {
            $a[self::FIELD_REPORT] = $vs;
        }
        if (null !== ($v = $this->getSubject())) {
            $a[self::FIELD_SUBJECT] = $v;
        }
        if (null !== ($v = $this->getType())) {
            $a[self::FIELD_TYPE] = $v;
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